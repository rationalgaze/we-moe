<?php
class Accueil extends CI_Controller {

  public function afficher($page = 'main')
  {
    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->helper('url');
    $this->load->view('templates/header', $data);
    $this->load->view($page, $data);
    $this->load->view('templates/footer', $data);
  }

}