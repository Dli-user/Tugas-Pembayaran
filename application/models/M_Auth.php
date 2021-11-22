<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model {
  public function get_where($table, $where)
  {
    return $this->db->get_where($table, $where);
  }

  public function get($table)
  {
    return $this->db->get($table);
  }
}
