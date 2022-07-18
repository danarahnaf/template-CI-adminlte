<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krywnnon extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_karyawan');
  }

  public function index()
  {
    $this->data['getdata'] = $this->M_karyawan->getdatafl();
    $this->data['divisi'] = $this->M_karyawan->getdata();
    $this->load->view('header');
    $this->load->view('v_krywnnon', $this->data);
    $this->load->view('footer');
  }

  public function ambildatadivisi()
  {
    $id_divisi = $this->input->post('divisi');
    $getdatadept = $this->M_karyawan->getdatadivisi($id_divisi);
    echo json_encode($getdatadept);
  }

  public function tampil(){
    $divisi = $this->input->post('divisi');
    $depart = $this->input->post('depart');
    $gettampil = $this->M_karyawan->getdatatampil($divisi, $depart);
    echo json_encode($gettampil);
    }
}