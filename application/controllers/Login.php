<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
  }

	public function signIn()
	{
    $this->load->view('templates/header');
		$this->load->view('login');
    $this->load->view('templates/footer');
	}

  public function login_validation(){
    $this->form_validation->set_rules('id', 'id', 'required');
    $this->form_validation->set_rules('mdp', 'mdp', 'required');
    
    if ($this->form_validation->run())
    {
      $username = $this->input->post('id');  
      $password = $this->input->post('mdp');  

      if($this->login_model->admin_login($username, $password))  
      {  
        $session_data = array('username' => $username);
        $this->session->set_userdata($session_data);
        redirect(base_url().'index.php/login/enter'); 
      }  
      else  
      {  
        $this->session->set_flashdata('error', 'Invalid Username and Password');  
        redirect(base_url().'index.php/login/signin');  
      }  
    }
    else
    {
      $this->login();
    }
  }

  public function enter(){ 
    if($this->session->userdata('username') != '')  
    { 
      $data['id'] = $this->session->userdata('username');
      // $data['org'] = $this->session->userdata('id');
      $this->load->view('templates/header');     
      $this->load->view('session_opened', $data);
      $this->load->view('templates/footer');   
  
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
