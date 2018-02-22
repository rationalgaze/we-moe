<?php
class Signup_model extends CI_Model {
  public function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->mongo_db->connect();
    }

    public function try_signUp($login)  
    { 
      $this->db->from('users');
      $this->db->where('login', $login);
      
      $query = $this->db->get();  

      // if there is a user with this login it's a bad try (False)
      if($query->num_rows() > 0){        
        return FALSE;
      }
      else
      {
        return TRUE;  
      }
    }

    public function signup($name, $lname, $mail, $ras, $pass)
    { 
      // MySQL : Produces: INSERT INTO users (login, password, status) VALUES ('{$login}', '{$password}', '{$status}')
      $query = $this->db->insert('users', 
        array(
          'login' => $mail, 
          'password' => $pass, 
          'status' => 'user'
        )
      );

      $this->db->select('id');
      $this->db->from('users');
      $this->db->where('login', $mail);
      $usr_id = $this->db->get()->row()->id;

      // Adds document with user information to mongo db.
      $insertId = $this->mongo_db->insert('users', 
        [
          '_id'     => $usr_id,
          'nom'     => $lame,
          'prenom'  => $name,
          'mail'    => $mail,
          'ras'    => $ras
        ]
      );

      // test if insert was sucessfull
      if ($insertId != '' && $query) 
      {
        return TRUE;
      }
      else
      {
        return FALSE;
      }
    }
}