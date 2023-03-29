<?php

use news as Globalnews;

defined('BASEPATH') OR exit('No direct script access allowed');

class news extends CI_Controller {

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
	 * @see https://codeigniter.com/newsguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("news_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["news"] = $this->news_model->getAll();
		$this->load->view('news/tampil_news', $data);
	}

	public function simpan()
	{
		$news = $this->news_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($news->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $news->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("news").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("news/simpan").'";</script>';
		}
	}
		$this->load->view("news/tambah_news");
}

public function ubah($id_news = null)
{
	if (!isset($id_news)) 
	redirect('news'); //logika jika id_news yang dipanggil masih belum ada / kosong

	$news = $this->news_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($news->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $news->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("news") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("news/ubah") . '";</script>';
		}

	}
	$data["news"] = $news->getID($id_news); //memanggil data berdasarkan id_news yang dipilih
	if (!$data["news"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("news/ubah_news", $data); // memanggil data news ke halaman ubah news berdasarkan id_news
}

	public function hapus($id_news = null) //menentukan parameter id_news$id_news menjadi null / kosong
	{

		$news = $this->news_model; //menentukan objek model
		
		if (!isset($id_news)) show_404();

		if ($this->news_model->delete($id_news)){
			redirect(site_url('news'));
			
		}
	}

	
}
