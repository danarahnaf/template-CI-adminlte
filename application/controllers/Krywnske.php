<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krywnske extends CI_Controller {
 public function __construct()
  {
    parent::__construct();
    $this->load->model('M_normalisasi');
  }
  public function index()
  {
    $this->data['normal'] = $this->M_normalisasi->getdata('normalisasi_bpjskes');

    $this->load->view('header');
    $this->load->view('v_krywnske', $this->data);
    $this->load->view('footer');

  }
}
