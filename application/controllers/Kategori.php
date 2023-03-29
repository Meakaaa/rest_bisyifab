<?php

use kategori as Globalkategori;

defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

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
	 * @see https://codeigniter.com/kategoriguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("kategori_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["kategori"] = $this->kategori_model->getAll();
		$this->load->view('kategori/tampil_kategori', $data);
	}

	public function simpan()
	{
		$kategori = $this->kategori_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($kategori->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $kategori->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("kategori").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("kategori/simpan").'";</script>';
		}
	}
		$this->load->view("kategori/tambah_kategori");
}

public function ubah($id_kategori = null)
{
	if (!isset($id_kategori)) 
	redirect('kategori'); //logika jika id_kategori yang dipanggil masih belum ada / kosong

	$kategori = $this->kategori_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($kategori->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $kategori->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("kategori") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("kategori/ubah") . '";</script>';
		}

	}
	$data["kategori"] = $kategori->getID($id_kategori); //memanggil data berdasarkan id_kategori yang dipilih
	if (!$data["kategori"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("kategori/ubah_kategori", $data); // memanggil data kategori ke halaman ubah kategori berdasarkan id_kategori
}

	public function hapus($id_kategori = null) //menentukan parameter id_kategori$id_kategori menjadi null / kosong
	{

		$kategori = $this->kategori_model; //menentukan objek model
		
		if (!isset($id_kategori)) show_404();

		if ($this->kategori_model->delete($id_kategori)){
			redirect(site_url('kategori'));
			
		}
	}

	
}
