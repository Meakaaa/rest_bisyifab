<?php

use media as Globalmedia;

defined('BASEPATH') OR exit('No direct script access allowed');

class media extends CI_Controller {

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
	 * @see https://codeigniter.com/mediaguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("media_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["media"] = $this->media_model->getAll();
		$this->load->view('media/tampil_media', $data);
	}

	public function simpan()
	{
		$media = $this->media_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($media->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $media->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("media").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("media/simpan").'";</script>';
		}
	}
		$this->load->view("media/tambah_media");
}

public function ubah($id_media = null)
{
	if (!isset($id_media)) 
	redirect('media'); //logika jika id_media yang dipanggil masih belum ada / kosong

	$media = $this->media_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($media->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $media->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("media") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("media/ubah") . '";</script>';
		}

	}
	$data["media"] = $media->getID($id_media); //memanggil data berdasarkan id_media yang dipilih
	if (!$data["media"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("media/ubah_media", $data); // memanggil data media ke halaman ubah media berdasarkan id_media
}

	public function hapus($id_media = null) //menentukan parameter id_media$id_media menjadi null / kosong
	{

		$media = $this->media_model; //menentukan objek model
		
		if (!isset($id_media)) show_404();

		if ($this->media_model->delete($id_media)){
			redirect(site_url('media'));
			
		}
	}

	
}
