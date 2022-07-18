<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ptkp extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ptkp');
	}
	public function index()
	{
		$this->data['hasil'] = $this->M_ptkp->getdata('master_ptkp');
		 
		$this->load->view('header');
		$this->load->view('v_ptkp', $this->data);
		$this->load->view('footer');

	}
	function tambah_ptkp(){

		// $id = $this->M_ptkp->getLastId('master_ptkp') + 4;
		$status = $this->input->post('status');
		$ket = $this->input->post('ket');
		$nilai = $this->input->post('nilai');
		$tahun = $this->input->post('tahun');
		if (isset($_POST['valid']) == 1) {
			$valid = 1;
		}
		else{
			$valid = 0;
		}
		// $valid = $this->input->post('valid');
 
		$data = array(
			'id' => $id,
			'status' => $status,
			'ket' => $ket,
			'ptkp' => $nilai,
			'tahun' => $tahun,
			'valid' => $valid
			);
		$this->M_ptkp->input_data($data,'master_ptkp');
		redirect('ptkp/index');
	}

	function edit($id){

		$where = array('id' => $id);
		$data['ptkp_edit'] = $this->M_ptkp->edit_data($where,'master_ptkp')->result();
		$this->load->view('v_ptkp',$data);
	}
	function update(){
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$ket = $this->input->post('ket');
		$nilai = $this->input->post('ptkp');
		$tahun = $this->input->post('tahun');
	 
		$data = array(
			'id' => $id,
			'status' => $status,
			'ket' => $ket,
			'ptkp' => $nilai,
			'tahun' => $tahun,
			'valid' => $valid
			);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->M_ptkp->update_data($where,$data,'master_ptkp');
		redirect('ptkp/index');
	}
	public function hapus($id)
	{
		$this->M_ptkp->hapusdata($id);
		redirect('ptkp');
	}

}
