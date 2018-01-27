<?php
class Home extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('db_model');
    $this->load->helper('url_helper');
  }

  public function lister()
  {

    $data['news'] = 'toto';//$this->db_model->get_mongo();
    
    $this->load->view('templates/header');
    $this->load->view('main', $data);
    $this->load->view('templates/footer');
  }

}