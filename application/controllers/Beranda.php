<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
  public function __construct() {
    parent::__construct();
    $this->load->model('');
  }
  
  public function index()
  {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, base_url().'/api/kamar');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    $data['kamar'] = json_decode($result,true);
  
    $this->load->view('v_beranda/index', $data);
  }
  
}
