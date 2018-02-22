<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('db_model');
    $this->load->helper('url_helper');
  }

  public function afficher()
  {
    $data['mongo'] = $this->db_model->get_mongo();
    $data['mysql'] = $this->db_model->get_mysql();

    $this->load->view('templates/header');
    $this->load->view('main', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/scripts');
  }

}