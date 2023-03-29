<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Penyakit extends REST_Controller {

public function __construct() {
  parent::__construct();
  $this->load->model('api/M_penyakit'); //memanggil model
}
  
  public function index_get() 
  {
    //fungsi untuk memanggil data
    $id = $this->get('id_penyakit');
    if ($id === null) {
      $penyakit = $this->M_penyakit->getPenyakit(); //semua data
    } else {
      $penyakit = $this->M_penyakit->getPenyakit($id); //data berdasarkan id
    }

    if ($penyakit) {
      $this->response(
         $penyakit
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
      'nama_penyakit' => $this->post('nama_penyakit'),
      'keterangan' => $this->post('keterangan'),
      'status' => $this->post('status'),
      'tanggal' => $this->post('tanggal'),
      'id_dokter' => $this->post('id_dokter'),
    ];

    //fungsi untuk membuat data baru
    if ($this->M_penyakit->createPenyakit($data) > 0) {
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
    //variabel yang berisi data yang akan di tambah ke db
    $data = [
      'nama_penyakit' => $this->put('nama_penyakit'),
      'keterangan' => $this->put('keterangan'),
      'status' => $this->put('status'),
      'tanggal' => $this->put('tanggal'),
      'id_dokter' => $this->put('id_dokter'),
    ];

    //fungsi untuk mengubah data yang sudah ada
    if ($this->M_penyakit->updatePenyakit($data) > 0) {
      $this->response([
        'status' => true,
        'data' => 'Penyakit has been Updated'
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
    $id = $this->delete('id_penyakit'); //fungsi id yang diperlukan ketika ingin menghapus

    if ($id === null) { //apabila id kosong
      $this->response([
        'status' => false,
        'data' => 'Provide An ID'
      ], REST_Controller::HTTP_BAD_REQUEST); //respon yang muncul apabila id kosong
    } else {
      //fungsi untuk menghapus data
      if ($this->M_penyakit->deletePenyakit($id) > 0) {
        $this->response([
          'status' => true,
          'id_penyakit' => $id,
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
