<?php
class Login_model extends CI_Model {
  public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function admin_login($login, $password)  
    { 
      $this->db->from('users');
      $this->db->where('login', $login);  
      $this->db->where('password', $password);  
      $query = $this->db->get();  

      if($query->num_rows() > 0){
        return true;
      }
      else{
        return false;  
      }
    } 
}