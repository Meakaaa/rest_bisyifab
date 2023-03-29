<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_news extends CI_Model
{
  //fungsi untuk mengambil data dari tabel
  public function getNews($id = null) 
  {
    if ($id === null) {
      return $this->db->get('tbl_news')->result_array();
  } else  {
      return $this->db->get_where('tbl_news', ['id_news' => $id])->result_array(); 
  }
  }

  //fungsi untuk menambah data baru dari tabel
  public function createNews ($data)
  {
    $this->db->insert('tbl_news', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk mengubah data yang sudah ada di tabel
  public function updateNews ($data)
  {
    $this->db->update('tbl_news', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk menghapus data yang ada di tabel
  public function deleteNews ($id)
  {
    $this->db->delete('tbl_news', ['id_news' => $id]);
    return $this->db->affected_rows();
  }
}