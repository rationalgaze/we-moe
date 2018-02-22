<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('signup_model');
    $this->load->model('db_model');
  }

	public function signUp()
	{
    $this->load->view('templates/header');
		$this->load->view('signup');
    $this->load->view('templates/footer');
    $this->load->view('templates/scripts');
	}

  public function signUp_validation() 
  {
    
    // validation rules for each field
    $this->form_validation->set_rules('nom', 'nom', 'required|min_length[2]', 
      array('min_length' => 'Le %s doit contenir au minimum deux caracteres' ));
    $this->form_validation->set_rules('prenom', 'prenom', 'required|min_length[2]',
      array('min_length' => 'Le %s doit contenir au minimum deux caracteres' ));
    $this->form_validation->set_rules('mail', 'mail', 'required|valid_email|is_unique[users.login]', 
        array(
                'required'      => 'Vous devez remplir le champ %s.',
                'is_unique'     => 'Ce %s déjà existe',
                'valid_email'   => 'Le champ %s doit contenir e-mail valide'
        ));
    $this->form_validation->set_rules('mdp', 'mdp', 'required|min_length[5]',
        array(
                'required'      => 'Vous devez remplir le champ %s.',
                'min_length'   => 'Le %s doit contenir au minimum 5 caracteres'
        ));

    
    // test if validation rules has been respected
    if ($this->form_validation->run())
    {
      $name =  $this->input->post('prenom');
      $lname =  $this->input->post('nom'); //last name
      $mail = $this->input->post('mail');
      $ras =  $this->input->post('ras');
      $pass =  $this->input->post('mdp');

      
      if($this->signup_model->try_signUp($mail) === TRUE)  
      { 
        $session_data = array('username' => $mail);
        $this->session->set_userdata($session_data);
        $inscription = $this->signup_model->signup($name, $lname, $mail, $ras, $pass);
        if ($inscription) 
        {
          redirect(base_url().'index.php/signup/enter_user'); 
        }
        else
        {
          $this->session->set_flashdata('error', "L'inscription n'a pas réussi");
          redirect(base_url().'index.php/signup/signup');
        }
      }
      else  
      {
        $this->session->set_flashdata('error', "L'utilisateur avec cette adresse mail déjà existe");  
        redirect(base_url().'index.php/signup/signup');
      }  
    }
    else
    {
      $this->signUp();
    }
  }

  public function enter_user()
  { 
    if($this->session->userdata('username') != '')  
    { 
      $data['email'] = $this->session->userdata('username');
      $data['mongo'] = $this->db_model->get_user($this->session->userdata('username'));
      // echo '<pre>';
      // print_r($data['mysql'][0]);
      // print_r($data['mongo']);
      $this->load->view('espace_personnel_utilisateur', $data);
      $this->load->view('templates/scripts');
    }  
    else  
    {  
      redirect(base_url().'index.php/login/signin');
    }  
  }

}
