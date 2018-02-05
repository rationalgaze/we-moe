<?php
class Db_model extends CI_Model {
  public function __construct()
    {
      parent::__construct();
      $this->mongo_db->connect();
      $this->load->database();
    }

    public function get_mongo()
    {
      $query = $this->mongo_db->get('accidents2015');
      return $query;
    }

    public function get_mysql()
    {
      $query = $this->db->get('newtable');
      return $query->result_array();
    }
}