<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_potongan extends CI_Model {
	
	public function getdata()
	{
		$query = $this->db->query("SELECT * FROM DIVISION order by DIVNAME ASC ");
		return $query->result_array();
	}
	public function getdatadivisi($id_divisi)
	{
		$query = $this->db->query("SELECT * FROM DEPARTMENT WHERE DIVISIONID = '$id_divisi' order by SUBDEPT ASC");
		return $query->result();
	}
	public function getdatadepart($id_depart)
	{
		$query = $this->db->query("SELECT * FROM DEPARTMENT WHERE DIVISIONID = '$id_divisi' ");
		return $query->result();
	}
	public function getdatatampil($divisi,$depart)
	{
		$this->db->select('*');
		$this->db->from('EMPLOYEE e');
		$this->db->join('DEPARTMENT de', 'de.DEPTID = e.DEPTID');
		$this->db->join('DIVISION di', 'di.DIVISIONID = de.DIVISIONID');
		$this->db->where('e.DIVISIONID', $divisi);
		$this->db->where('de.DEPTID', $depart);
		$this->db->where('e.FLAKTIF', 1);

		$query = $this->db->get();
		return $query->result_array();
	}
	public function getdatafl()
	{
		$this->db->select('*');
		$this->db->from('EMPLOYEE');
		$this->db->where('FLAKTIF', 1);
		$data = $this->db->get();
		return $data->result_array();
	}
	public function getdivisi($divname) 
	{
		$this->db->select('*');
		$this->db->from('DEPARTMENT');
		$this->db->join('DIVISION', 'DEPARTMENT.DIVISIONID = DIVISION.DIVISIONID');
		$this->db->where('DIVISION.DIVNAME', $divname);
		$this->db->order_by('DIVISION.DIVNAME', 'asc');
		$data = $this->db->get();
		return $data->result_array();
	}
	public function getLastId($table)
	{
		$data = $this->db->get($table); 
		return $data->num_rows();
	}
	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
?>