<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tentang extends CI_Model
{ 
  //fungsi untuk mengambil data profile yang terdapat di tabel page
  public function getdataProfile($where = array()) {
     return $this->db->get_where('tbl_page', $where)->result_array();
  }

  //fungsi untuk mengambil data partner yang terdapat di tabel page
  public function getdataPartner($where = array()) {
    return $this->db->get_where('tbl_page', $where)->result_array();
  }
}
