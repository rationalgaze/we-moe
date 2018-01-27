<?php
class Accueil extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('db_model');
    $this->load->helper('url_helper');
  }

  public function afficher($page = 'main')
  {
    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->view('templates/header', $data);
    $this->load->view($page, $data);
    $this->load->view('templates/footer', $data);
  }

}