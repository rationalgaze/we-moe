<?php
class Accueil extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('db_model');
    $this->load->helper('url_helper');
  }

  public function afficher()
  {
    $data = $this->db_model->get_mongo();

    // echo '<pre>';
    // print_r($data[0]['features']);
      $this->load->view('templates/header');
      $this->load->view('main', $data[0]);
      $this->load->view('templates/footer');
  }

}