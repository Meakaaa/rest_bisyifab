<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_penyakit extends CI_Model
{
  //fungsi untuk mengambil data dari tabel
  public function getPenyakit($id = null) 
  {
    if ($id === null) {
      return $this->db->get('tbl_penyakit')->result_array();
  } else  {
      return $this->db->get_where('tbl_penyakit', ['id_penyakit' => $id])->result_array(); 
  }
  }

  //fungsi untuk menambah data baru dari tabel
  public function createPenyakit ($data)
  {
    $this->db->insert('tbl_penyakit', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk mengubah data yang sudah ada di tabel
  public function updatePenyakit ($data)
  {
    $this->db->update('tbl_penyakit', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk menghapus data yang ada di tabel
  public function deletePenyakit ($id)
  {
    $this->db->delete('tbl_penyakit', ['id_penyakit' => $id]);
    return $this->db->affected_rows();
  }
}