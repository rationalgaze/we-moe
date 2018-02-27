<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function afficher()
  {
    $this->load->view('templates/header');
    $this->load->view('main', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/scripts');
  }

}