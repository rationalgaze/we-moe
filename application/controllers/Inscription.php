<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->helper('url_helper');
    $this->load->helper('form');
  }

	public function signUp()
	{
    $this->load->view('templates/header');
		$this->load->view('signup');
    $this->load->view('templates/footer');
	}
}
