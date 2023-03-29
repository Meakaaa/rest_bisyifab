<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_page extends CI_Model 
{

  //fungsi untuk mengambil data dari tabel
  public function getPage($id = null) 
  {
    if ($id === null) {
      return $this->db->get('tbl_page')->result_array();
  } else  {
      return $this->db->get_where('tbl_page', ['id_page' => $id])->result_array(); 
  }
}

  //fungsi untuk menambah data baru dari tabel
  public function createPage ($data)
  {
    $this->db->insert('tbl_page', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk mengubah data yang sudah ada di tabel
  public function updatePage ($data, $id)
  {
    $this->db->update('tbl_page', $data, ['id_page' => $id]);
    return $this->db->affected_rows();
  }

    //fungsi untuk menghapus data yang ada di tabel
    public function deletePage ($id)
    {
      $this->db->delete('tbl_page', ['id_page' => $id]);
      return $this->db->affected_rows();
    
    }
  
}
