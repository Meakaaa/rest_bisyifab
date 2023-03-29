<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
    $this->load->helper('url', 'form');
    $this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
		$this->load->view('v_form/register');
	}

	public function proses()
	{
    $this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[tbl_user.username]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->auth->register($nama,$username,$password);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}