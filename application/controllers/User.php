<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('url', 'form');
    $this->load->library(array('form_validation', 'session'));
  }

  public function index()
  {
    $this->load->view('v_form/login');
  }

  //Bagian Resgister

  public function daftar()
  {
    $data['title'] = 'Daftar';

    // Validasi Data Form
    $this->form_validation->set_rules(
      'nama',
      'Nama',
      'required',
      [
        'required' => 'Nama Isi Kek, Masa Ga Punya Nama'
      ]
    );
    $this->form_validation->set_rules(
      'username',
      'Username',
      'required|callback_check_username_exists',
      [
        'check_username_exists' => 'Username Anda Terlalu Pasaran :(',
        'required' => 'Username Wajib Diisi Ngab, Jangan Dikosongin ヽ(ಠ_ಠ)ノ'
      ]
    );
    $this->form_validation->set_rules(
      'password',
      'Password',
      'required|min_length[6]|max_length[30]',
      [
        'min_length' => 'Minimal Password tu 6 DEK',
        'max_length' => 'Maksimal Password tu 30 DEK',
        'required' => 'Harus Pake Password Lawak, Mau DiHack Lu?!'
      ]

    );

    // Jika Gagal Daftar
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('v_form/register', $data);

      // Jika Berhasil Daftar 
    } else {

      // Untuk Mengenskripsi Data Password
      $ens_password = md5($this->input->post('password'));
      $this->user_model->daftar($ens_password);

      // Untuk Menampilkan Pesan Data
      $this->session->set_flashdata('Berhasil Daftar', 'Selamat Kamu Berhasil Terdafatar! Silahkan Log In');

      redirect('user/login');
    }
  }

  public function check_username_exists($username)
  {

    $sql = $this->db->get_where('tbl_user', ["username" => $username])->row();

    if (empty($sql)) {
      return true;
    }
    return false;
  }

  //Bagian Login

  public function login()
  {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    // Jika Gagal Login
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('v_form/login');
      // Jika Berhasil Login
    } else {

      // Get Username and Password
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));

      // Get into the model
      $data = $this->user_model->login($username, $password);

      // Create Session
      if ($data) {
        $user = array(

          'id_user' => $data,
          'username' => $username,
          'logged_in' => true
        );

        $this->session->set_userdata($user);

        $this->session->set_flashdata('user _berhasil', 'Selamat Datang');
        redirect('admin');
      } else {
        $this->session->set_flashdata('user _gagal', 'Username atau Password Salah');
        redirect('user/login');
      }
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('logged_in');

    $this->session->set_flashdata('user _logout', 'Sampai Jumpa Nanti Hoho');

    redirect('user/login');
  }
}
