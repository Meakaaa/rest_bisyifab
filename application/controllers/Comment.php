<?php

use comment as Globaluser;

defined('BASEPATH') OR exit('No direct script access allowed');

class comment extends CI_Controller {

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
	 * @see https://codeigniter.com/commentguide3/general/urls.html
	 * 
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("comment_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["comment"] = $this->comment_model->getAll();
		$this->load->view('comment/tampil_comment', $data);
	}

	public function simpan()
	{
		$comment = $this->comment_model; //menentukan objek model
		$validasi = $this->form_validation; //menentukan objek validasi  form 
		$validasi->set_rules($comment->rules()); //menentukan posisi function rules pada model

		if($validasi->run()) { //menjalankan validasi form
			$insert = $comment->save(); //menyimpan data form ke db
			// $this->session->set_flashdata('succes', "Data Berhasil Disimpan"); //pesan data disimpan ke db
			
			if($insert) {echo '<script>alert("Data Berhasil Disimpan"); window.location.href="'.site_url("comment").'";</script>';
		} else {
			echo '<script>alert("Data Gagal Disimpan"); window.location.href="'.site_url("comment/simpan").'";</script>';
		}
	}
		$this->load->view("comment/tambah_comment");
}

public function ubah($id_comment = null)
{
	if (!isset($id_comment)) 
	redirect('comment'); //logika jika id_comment yang dipanggil masih belum ada / kosong

	$comment = $this->comment_model; // menentukan objek model
	$validasi = $this->form_validation; // menentukan objek validasi form
	$validasi->set_rules($comment->rules()); // menentukan rules yang ada pada model 

	if ($validasi->run()) { // menjalankan validasi form
		$update = $comment->update(); // menyimpan data form update ke db
		if ($update) {
			echo '<script>alert("Data Berhasil Di Diubah");window.location.href = "' . site_url("comment") . '";</script>';
		} else {
			echo '<script>alert("Data Gagal Di Ubah");window.location.href = "' . site_url("comment/ubah") . '";</script>';
		}

	}
	$data["comment"] = $comment->getID($id_comment); //memanggil data berdasarkan id_comment yang dipilih
	if (!$data["comment"]) show_404(); // mengecek data jika kosong maka akan menampilkan halaman error / halaman 404
	$this->load->view("comment/ubah_comment", $data); // memanggil data comment ke halaman ubah comment berdasarkan id_comment
}

	public function hapus($id_comment = null) //menentukan parameter id_comment$id_comment menjadi null / kosong
	{

		$comment = $this->comment_model; //menentukan objek model
		
		if (!isset($id_comment)) show_404();

		if ($this->comment_model->delete($id_comment)){
			redirect(site_url('comment'));
			
		}
	}

	
}
