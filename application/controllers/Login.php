<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
    $this->load->helper('url', 'form');
    $this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
		$this->load->view('v_form/login');
	}

	public function proses()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		if($this->auth->login_user($username,$password))
		{
			redirect('admin');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_login');
		redirect('login');
	}

	

}