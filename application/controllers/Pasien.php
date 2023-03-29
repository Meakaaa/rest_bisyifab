<?php

use pasien as Globalpasien;

defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {

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
	 * @see https://codeigniter.com/pasienguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("pasien_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["pasien"] = $this->pasien_model->getAll();
		$this->load->view('pasien/tampil_pasien', $data);
	}

	public function simpan()
	{
		$pasien = $this->pasien_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($pasien->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $pasien->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("pasien").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("pasien/simpan").'";</script>';
		}
	}
		$this->load->view("pasien/tambah_pasien");
}

public function ubah($id_pasien = null)
{
	if (!isset($id_pasien)) 
	redirect('pasien'); //logika jika id_pasien yang dipanggil masih belum ada / kosong

	$pasien = $this->pasien_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($pasien->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $pasien->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("pasien") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("pasien/ubah") . '";</script>';
		}

	}
	$data["pasien"] = $pasien->getID($id_pasien); //memanggil data berdasarkan id_pasien yang dipilih
	if (!$data["pasien"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("pasien/ubah_pasien", $data); // memanggil data pasien ke halaman ubah pasien berdasarkan id_pasien
}

	public function hapus($id_pasien = null) //menentukan parameter id_pasien$id_pasien menjadi null / kosong
	{

		$pasien = $this->pasien_model; //menentukan objek model
		
		if (!isset($id_pasien)) show_404();

		if ($this->pasien_model->delete($id_pasien)){
			redirect(site_url('pasien'));
			
		}
	}

	
}
