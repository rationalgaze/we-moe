<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
    $this->load->model('db_model');
  }

	public function signIn()
	{
    $this->load->view('templates/header');
		$this->load->view('login');
    $this->load->view('templates/footer');
    $this->load->view('templates/scripts');
	}

  public function login_validation(){
    $this->form_validation->set_rules('id', 'id', 'required');
    $this->form_validation->set_rules('mdp', 'mdp', 'required');
    
    if ($this->form_validation->run())
    {
      $username = $this->input->post('id');  
      $password = $this->input->post('mdp');  
      
      if($this->login_model->try_login($username, $password) == 1)  
      { 
        $session_data = array('username' => $username);
        $this->session->set_userdata($session_data);
        redirect(base_url().'index.php/login/enter_user'); 
      }
      elseif ($this->login_model->try_login($username, $password) == 0) {
        $session_data = array('username' => $username);
        $this->session->set_userdata($session_data);
        redirect(base_url().'index.php/login/enter_admin'); 
      }
      else  
      {  
        $this->session->set_flashdata('error', 'Idetifiant ou mot de passe incorrect');  
        redirect(base_url().'index.php/login/signin');  
      }  
    }
    else
    {
      $this->signIn();
    }
  }

  public function enter_user(){ 
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

  public function enter_admin(){ 
    if($this->session->userdata('username') != '')  
    { 
      $data['id'] = $this->session->userdata('username');
      $this->load->view('espace_personnel_administrateur', $data);
      $this->load->view('templates/scripts');
    }  
    else  
    {  
      redirect(base_url().'index.php/login/signin');
    }  
  }

  public function logout()
  {  
    $this->session->unset_userdata('username');  
    redirect(base_url().'index.php/login/signin');  
  }  
}
