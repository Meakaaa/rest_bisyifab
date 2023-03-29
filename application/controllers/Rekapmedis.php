<?php

use rekapmedis as Globalrekapmedis;

defined('BASEPATH') OR exit('No direct script access allowed');

class rekapmedis extends CI_Controller {

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
	 * @see https://codeigniter.com/rekapmedisguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("rekapmedis_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["rekapmedis"] = $this->rekapmedis_model->getAll();
		$this->load->view('rekapmedis/tampil_rekapmedis', $data);
	}

	public function simpan()
	{
		$rekapmedis = $this->rekapmedis_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($rekapmedis->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $rekapmedis->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("rekapmedis").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("rekapmedis/simpan").'";</script>';
		}
	}
		$this->load->view("rekapmedis/tambah_rekapmedis");
}

public function ubah($id_rekapmedis = null)
{
	if (!isset($id_rekapmedis)) 
	redirect('rekapmedis'); //logika jika id_rekapmedis yang dipanggil masih belum ada / kosong

	$rekapmedis = $this->rekapmedis_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($rekapmedis->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $rekapmedis->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("rekapmedis") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("rekapmedis/ubah") . '";</script>';
		}

	}
	$data["rekapmedis"] = $rekapmedis->getID($id_rekapmedis); //memanggil data berdasarkan id_rekapmedis yang dipilih
	if (!$data["rekapmedis"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("rekapmedis/ubah_rekapmedis", $data); // memanggil data rekapmedis ke halaman ubah rekapmedis berdasarkan id_rekapmedis
}

	public function hapus($id_rekapmedis = null) //menentukan parameter id_rekapmedis$id_rekapmedis menjadi null / kosong
	{

		$rekapmedis = $this->rekapmedis_model; //menentukan objek model
		
		if (!isset($id_rekapmedis)) show_404();

		if ($this->rekapmedis_model->delete($id_rekapmedis)){
			redirect(site_url('rekapmedis'));
			
		}
	}

	
}
