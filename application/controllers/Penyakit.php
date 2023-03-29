<?php

use penyakit as Globalpenyakit;

defined('BASEPATH') OR exit('No direct script access allowed');

class penyakit extends CI_Controller {

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
	 * @see https://codeigniter.com/penyakitguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("penyakit_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["penyakit"] = $this->penyakit_model->getAll();
		$this->load->view('penyakit/tampil_penyakit', $data);
	}

	public function simpan()
	{
		$penyakit = $this->penyakit_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($penyakit->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $penyakit->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("penyakit").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("penyakit/simpan").'";</script>';
		}
	}
		$this->load->view("penyakit/tambah_penyakit");
}

public function ubah($id_penyakit = null)
{
	if (!isset($id_penyakit)) 
	redirect('penyakit'); //logika jika id_penyakit yang dipanggil masih belum ada / kosong

	$penyakit = $this->penyakit_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($penyakit->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $penyakit->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("penyakit") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("penyakit/ubah") . '";</script>';
		}

	}
	$data["penyakit"] = $penyakit->getID($id_penyakit); //memanggil data berdasarkan id_penyakit yang dipilih
	if (!$data["penyakit"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("penyakit/ubah_penyakit", $data); // memanggil data penyakit ke halaman ubah penyakit berdasarkan id_penyakit
}

	public function hapus($id_penyakit = null) //menentukan parameter id_penyakit$id_penyakit menjadi null / kosong
	{

		$penyakit = $this->penyakit_model; //menentukan objek model
		
		if (!isset($id_penyakit)) show_404();

		if ($this->penyakit_model->delete($id_penyakit)){
			redirect(site_url('penyakit'));
			
		}
	}

	
}
