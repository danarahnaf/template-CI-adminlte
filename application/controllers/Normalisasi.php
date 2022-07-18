<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Normalisasi extends CI_Controller {
 public function __construct()
  {
    parent::__construct();
    $this->load->model('M_normalisasi');
  }
  public function index()
  {
    $this->data['normal'] = $this->M_normalisasi->getdata('normalisasi_bpjskes');

    $this->load->view('header');
    $this->load->view('v_normalisasi', $this->data);
    $this->load->view('footer');

      function edit($id){

      $where = array('id' => $id);
      $this->data['normal_edit'] = $this->M_normalisasi->edit_data($where,'normalisasi_bpjskes')->result();
      $this->load->view('v_normalisasi',$data);
    }

  }
  public function ubah(){

    $id = $this->input->post('id');
    $data = array(
      'grade' => $this->input->post('grade'),
      'normal_gaji' => $this->input->post('normal_gaji'),
      'DIVISI' => $this->input->post('DIVISI'),
      'tahun' => $this->input->post('tahun')
    );
    $this->M_normalisasi->edit($data, $id);

  }
  
}
