<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
  /*
    nama fungsi : getUser
    deskripsi : untuk mengambil data dari tabel
    parameter : $id = nilai integer, untuk mengfilter data user berdasarkan id
    return : array data user
    dibuat oleh : Alvin
    tanggal dibuat : 9/2/2023
  */

  public function getUser($id = null) 
  {
    if ($id === null) {
      return $this->db->get('tbl_user')->result_array();
  } else  {
      return $this->db->get_where('tbl_user', ['id_user' => $id])->result_array(); 
  }
  }

  //fungsi untuk menambah data baru dari tabel
  public function createUser($data)
  {
    $this->db->insert('tbl_user', $data);
    return $this->db->affected_rows();
  }

  //fungsi untuk mengubah data yang sudah ada di tabel
  public function updateUser($data, $id)
  {
    $this->db->update('tbl_user', $data, ['id_user' => $id]);
    return $this->db->affected_rows();
  }

  //fungsi untuk menghapus data yang ada di tabel
  public function deleteUser($id)
  {
    $this->db->delete('tbl_user', ['id_user' => $id]);
    return $this->db->affected_rows();
  }
}