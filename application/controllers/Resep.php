<?php

use resep as Globalresep;

defined('BASEPATH') OR exit('No direct script access allowed');

class resep extends CI_Controller {

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
	 * @see https://codeigniter.com/resepguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("resep_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["resep"] = $this->resep_model->getAll();
		$this->load->view('resep/tampil_resep', $data);
	}

	public function simpan()
	{
		$resep = $this->resep_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($resep->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $resep->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("resep").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("resep/simpan").'";</script>';
		}
	}
		$this->load->view("resep/tambah_resep");
}

public function ubah($id_resep = null)
{
	if (!isset($id_resep)) 
	redirect('resep'); //logika jika id_resep yang dipanggil masih belum ada / kosong

	$resep = $this->resep_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($resep->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $resep->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("resep") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("resep/ubah") . '";</script>';
		}

	}
	$data["resep"] = $resep->getID($id_resep); //memanggil data berdasarkan id_resep yang dipilih
	if (!$data["resep"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("resep/ubah_resep", $data); // memanggil data resep ke halaman ubah resep berdasarkan id_resep
}

	public function hapus($id_resep = null) //menentukan parameter id_resep$id_resep menjadi null / kosong
	{

		$resep = $this->resep_model; //menentukan objek model
		
		if (!isset($id_resep)) show_404();

		if ($this->resep_model->delete($id_resep)){
			redirect(site_url('resep'));
			
		}
	}

	
}
