<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url_helper');
    $this->load->helper('form');
  }

	public function signIn()
	{
    $this->load->view('templates/header');
		$this->load->view('login');
    $this->load->view('templates/footer');
	}
}
