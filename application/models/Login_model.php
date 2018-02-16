<?php
class Login_model extends CI_Model {
  public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }

    public function try_login($login, $password)  
    { 
      $this->db->from('users');
      $this->db->where('login', $login);  
      $this->db->where('password', $password);  
      
      $query = $this->db->get();  

      if($query->num_rows() > 0){
        $row = $query->first_row();
        
        if($row->status == "user") return 1;
        elseif($row->status == "admin") return 0;
        else return -1;
      }
      else{
        return -1;  
      }
    } 
}