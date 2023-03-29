<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kamar extends CI_Model
{
  //fungsi untuk mengambil data dari tabel
  public function getKamar($id = null) 
  {
    if ($id === null) {
      return $this->db->get('tbl_kamar')->result_array();
  } else  {
      return $this->db->get_where('tbl_kamar', ['id' => $id])->result_array(); 
  }
  }

  //fungsi untuk menambah data baru dari tabel
  public function createKamar ($data)
  {
    $this->db->insert('tbl_kamar', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk mengubah data yang sudah ada di tabel
  public function updateKamar ($data)
  {
    $this->db->update('tbl_kamar', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk menghapus data yang ada di tabel
  public function deleteKamar ($id)
  {
    $this->db->delete('tbl_kamar', ['id' => $id]);
    return $this->db->affected_rows();
  }
}