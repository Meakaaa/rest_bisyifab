<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
  public function __construct() {
    parent::__construct();
    $this->load->model("M_tentang"); //memanggil model
  }

  public function profile($id = "")
  {
    //fungsi memanggil data profil berdasarkan url
    $data['profile'] = $this->M_tentang->getdataProfile(array('url' => $id));
    $this->load->view('v_tentang/profile', $data);
  }

  public function partner($id = "")
  {
    //fungsi memanggil data partner berdasarkan url
    $data['partner'] = $this->M_tentang->getdataPartner(array('url' => $id));
    $this->load->view('v_tentang/partner', $data);
  }
}
