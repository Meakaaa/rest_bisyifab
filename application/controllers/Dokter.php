<?php

use dokter as Globaldokter;

defined('BASEPATH') OR exit('No direct script access allowed');

class dokter extends CI_Controller {

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
	 * @see https://codeigniter.com/dokterguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("dokter_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["dokter"] = $this->dokter_model->getAll();
		$this->load->view('dokter/tampil_dokter', $data);
	}

	public function simpan()
	{
		$dokter = $this->dokter_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($dokter->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $dokter->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("dokter").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("dokter/simpan").'";</script>';
		}
	}
		$this->load->view("dokter/tambah_dokter");
}

public function ubah($id_dokter = null)
{
	if (!isset($id_dokter)) 
	redirect('dokter'); //logika jika id_dokter yang dipanggil masih belum ada / kosong

	$dokter = $this->dokter_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($dokter->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $dokter->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("dokter") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("dokter/ubah") . '";</script>';
		}

	}
	$data["dokter"] = $dokter->getID($id_dokter); //memanggil data berdasarkan id_dokter yang dipilih
	if (!$data["dokter"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("dokter/ubah_dokter", $data); // memanggil data dokter ke halaman ubah dokter berdasarkan id_dokter
}

	public function hapus($id_dokter = null) //menentukan parameter id_dokter$id_dokter menjadi null / kosong
	{

		$dokter = $this->dokter_model; //menentukan objek model
		
		if (!isset($id_dokter)) show_404();

		if ($this->dokter_model->delete($id_dokter)){
			redirect(site_url('dokter'));
			
		}
	}

	
}
