<?php

use user as Globaluser;

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["user"] = $this->user_model->getAll();
		$this->load->view('layout_admin/crud_form/tampil', $data);
	}

	public function simpan()
	{
		$user = $this->user_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($user->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $user->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("user").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("user/simpan").'";</script>';
		}
	}
		$this->load->view("layout_admin/crud_form/tambah");
}

public function ubah($id_user = null)
{
	if (!isset($id_user)) 
	redirect('user'); //logika jika id_user yang dipanggil masih belum ada / kosong

	$user = $this->user_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($user->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $user->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("user") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("user/ubah") . '";</script>';
		}

	}
	$data["user"] = $user->getID($id_user); //memanggil data berdasarkan id_user yang dipilih
	if (!$data["user"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("layout_admin/crud_form/ubah", $data); // memanggil data user ke halaman ubah user berdasarkan id_user
}

	public function hapus($id_user = null) //menentukan parameter id_user$id_user menjadi null / kosong
	{

		$user = $this->user_model; //menentukan objek model
		
		if (!isset($id_user)) show_404();

		if ($this->user_model->delete($id_user)){
			redirect(site_url('user'));
			
		}
	}

	
}
