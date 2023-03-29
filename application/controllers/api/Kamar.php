<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kamar extends REST_Controller {

public function __construct() {
  parent::__construct();
  $this->load->model('api/M_kamar'); //memanggil model
}
  
  public function index_get() 
  {
    //fungsi untuk memanggil data
    $id = $this->get('id');
    if ($id === null) {
      $kamar = $this->M_kamar->getKamar(); //semua data
    } else {
      $kamar = $this->M_kamar->getKamar($id); //data berdasarkan id
    }

    if ($kamar) {
      $this->response(
         $kamar
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
      'total_kamar' => $this->post('total_kamar'),
      'kamar_tersedia' => $this->post('kamar_tersedia'),
      'kamar_terpakai' => $this->post('kamar_terpakai'),
    ];

    //fungsi untuk membuat data baru
    if ($this->M_kamar->createKamar($data) > 0) {
      $this->response([
        'status' => true,
        'data' => 'New Page has been Created'
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
    //variabel yang berisi data yang akan di tambah ke db
    $data = [
      'total_kamar' => $this->put('total_kamar'),
      'kamar_tersedia' => $this->put('kamar_tersedia'),
      'kamar_terpakai' => $this->put('kamar_terpakai'),
    ];

    //fungsi untuk mengubah data yang sudah ada
    if ($this->M_kamar->updateKamar($data) > 0) {
      $this->response([
        'status' => true,
        'data' => 'Kamar has been Updated'
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
    $id = $this->delete('id'); //fungsi id yang diperlukan ketika ingin menghapus

    if ($id === null) { //apabila id kosong
      $this->response([
        'status' => false,
        'data' => 'Provide An ID'
      ], REST_Controller::HTTP_BAD_REQUEST); //respon yang muncul apabila id kosong
    } else {
      //fungsi untuk menghapus data
      if ($this->M_kamar->deleteKamar($id) > 0) {
        $this->response([
          'status' => true,
          'id' => $id,
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
