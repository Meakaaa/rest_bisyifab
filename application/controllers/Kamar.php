<?php

use kamar as Globalkamar;

defined('BASEPATH') OR exit('No direct script access allowed');

class kamar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/kamarguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("kamar_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["kamar"] = $this->kamar_model->getAll();
		$this->load->view('kamar/tampil_kamar', $data);
	}

	public function simpan()
	{
		$kamar = $this->kamar_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($kamar->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $kamar->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("kamar").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("kamar/simpan").'";</script>';
		}
	}
		$this->load->view("kamar/tambah_kamar");
}

public function ubah($id_kamar = null)
{
	if (!isset($id_kamar)) 
	redirect('kamar'); //logika jika id_kamar yang dipanggil masih belum ada / kosong

	$kamar = $this->kamar_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($kamar->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $kamar->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("kamar") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("kamar/ubah") . '";</script>';
		}

	}
	$data["kamar"] = $kamar->getID($id_kamar); //memanggil data berdasarkan id_kamar yang dipilih
	if (!$data["kamar"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("kamar/ubah_kamar", $data); // memanggil data kamar ke halaman ubah kamar berdasarkan id_kamar
}

	public function hapus($id_kamar = null) //menentukan parameter id_kamar$id_kamar menjadi null / kosong
	{

		$kamar = $this->kamar_model; //menentukan objek model
		
		if (!isset($id_kamar)) show_404();

		if ($this->kamar_model->delete($id_kamar)){
			redirect(site_url('kamar'));
			
		}
	}

	
}
