<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
  public function ctscan()
  {
    $this->load->view('v_media/berita/ctscan');
  }
}
