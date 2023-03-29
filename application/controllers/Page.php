<?php

use page as Globalpage;

defined('BASEPATH') OR exit('No direct script access allowed');

class page extends CI_Controller {

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
	 * @see https://codeigniter.com/pageguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("page_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["page"] = $this->page_model->getAll();
		$this->load->view('page/tampil_page', $data);
	}

	public function simpan()
	{
		$page = $this->page_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($page->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $page->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("page").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("page/simpan").'";</script>';
		}
	}
		$this->load->view("page/tambah_page");
}

public function ubah($id_page = null)
{
	if (!isset($id_page)) 
	redirect('page'); //logika jika id_page yang dipanggil masih belum ada / kosong

	$page = $this->page_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($page->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $page->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("page") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("page/ubah") . '";</script>';
		}

	}
	$data["page"] = $page->getID($id_page); //memanggil data berdasarkan id_page yang dipilih
	if (!$data["page"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("page/ubah_page", $data); // memanggil data page ke halaman ubah page berdasarkan id_page
}

	public function hapus($id_page = null) //menentukan parameter id_page$id_page menjadi null / kosong
	{

		$page = $this->page_model; //menentukan objek model
		
		if (!isset($id_page)) show_404();

		if ($this->page_model->delete($id_page)){
			redirect(site_url('page'));
			
		}
	}

	
}
