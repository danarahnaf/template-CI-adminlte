<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Potongan extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_potongan');
    $this->load->model('M_karyawan');
  }

  public function index()
  {

    $this->data['getdata'] = $this->M_karyawan->getdatafl();
    $this->data['divisi'] = $this->M_karyawan->getdata();
    $this->load->view('header');
    $this->load->view('v_potongan', $this->data);
    $this->load->view('footer');
  }

  public function ambildatadivisi()
  {
    $id_divisi = $this->input->post('divisi');
    $getdatadept = $this->M_potongan->getdatadivisi($id_divisi);
    echo json_encode($getdatadept);

  }

  public function tampil()
  {
    $id_divisi = $this->input->post('divisi');
    $id_depart = $this->input->post('department');
    $gettampil = $this->M_potongan->gettampil($id_divisi, $id_depart);
    echo json_encode($gettampil);
  }

  
}