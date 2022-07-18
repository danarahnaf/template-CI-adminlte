<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekap extends CI_Controller {

  public function index()
  {
    $this->load->view('header');
    $this->load->view('v_rekap');
    $this->load->view('footer');

  }
}
