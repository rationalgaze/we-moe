<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateur extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('db_model');
    $this->load->model('login_model');
  }

  public function agenda()
  {
    $data['email'] = $this->session->userdata('username');
    $data['mongo'] = $this->db_model->get_user($this->session->userdata('username'));
    $data['users'] = $this->db_model->get_allUsers();
    $this->load->view('espace_personnel_administrateur', $data);
    $this->load->view('admin/agenda');
    $this->load->view('templates/scripts');
  }

  public function gestion_utilisateurs()
  {
    $data['email'] = $this->session->userdata('username');
    $data['mongo'] = $this->db_model->get_user($this->session->userdata('username'));
    $data['users'] = $this->db_model->get_allUsers();
    $this->load->view('espace_personnel_administrateur', $data);
    $this->load->view('admin/gest_users');
    $this->load->view('templates/scripts');
  }

}