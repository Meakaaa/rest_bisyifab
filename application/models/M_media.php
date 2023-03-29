<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_media extends CI_Model
{ 
  //fungsi untuk mengambil data berita yang terdapat di tabel page
  public function getdataBerita($where = array()) {
     return $this->db->get_where('tbl_page', $where)->result_array();
  }
}
