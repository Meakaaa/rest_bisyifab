<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class User extends REST_Controller {

public function __construct() {
  parent::__construct();
  $this->load->model('api/M_user'); //memanggil model
}
  
  public function index_get() 
  {
    //fungsi untuk memanggil data
    $id = $this->get('id_user');
    if ($id === null) {
      $user = $this->M_user->getUser(); //semua data
    } else {
      $user = $this->M_user->getUser($id); //data berdasarkan id
    }

    if ($user) {
      $this->response(
         $user
        , REST_Controller::HTTP_OK); //respon yang muncul apabila berhasil
    } else {
      $this->response([
        'status' => false,
        'data' => 'ID Not Found'
      ], REST_Controller::HTTP_NOT_FOUND); //respon yang muncul apabila gagal
    }
  }

  public function index_post()
  {
    //variabel yang berisi data yang akan di tambah ke db
    $data = [
      'nama' => $this->post('nama'),
      'username' => $this->post('username'),
      'password' => $this->post('password'),
    ];

    //fungsi untuk membuat data baru
    if ($this->M_user->createUser($data) > 0) {
      $this->response([
        'status' => true,
        'data' => 'New Data has been Created'
      ], REST_Controller::HTTP_CREATED); //respon yang muncul apabila berhasil
    } else {
      $this->response([
        'status' => false,
        'data' => 'Failed to Create New Data'
      ], REST_Controller::HTTP_BAD_REQUEST); //respon yang muncul apabila gagal
    }
  }
  
  public function index_put()
  {
    $id = $this->put('id_user');
    //variabel yang berisi data yang akan di tambah ke db
    $data = [
      'nama' => $this->put('nama'),
      'username' => $this->put('username'),
      'password' => $this->put('password'),
    ];

    //fungsi untuk mengubah data yang sudah ada
    if ($this->M_user->updateUser($data, $id) > 0) {
      $this->response([
        'status' => true,
        'data' => 'User has been Updated'
      ], REST_Controller::HTTP_NO_CONTENT); //respon yang muncul apabila berhasil
    } else {
      $this->response([
        'status' => false,
        'data' => 'Failed to Update Data'
      ], REST_Controller::HTTP_BAD_REQUEST); //respon yang muncul apabila gagal
    }
  }

  public function index_delete() 
  {
    $id = $this->delete('id_user'); //fungsi id yang diperlukan ketika ingin menghapus

    if ($id === null) { //apabila id kosong
      $this->response([
        'status' => false,
        'data' => 'Provide An ID'
      ], REST_Controller::HTTP_BAD_REQUEST); //respon yang muncul apabila id kosong
    } else {
      //fungsi untuk menghapus data
      if ($this->M_user->deleteUser($id) > 0) {
        $this->response([
          'status' => true,
          'id_user' => $id,
          'message' => 'Deleted'
        ], REST_Controller::HTTP_NO_CONTENT); //respon yang muncul apabila berhasil
      } else {
        $this->response([
          'status' => false,
          'data' => 'ID Not Found'
        ], REST_Controller::HTTP_BAD_REQUEST); //respon yang muncul apabila gagal
      }
    }
  }
}
