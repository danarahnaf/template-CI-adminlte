<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_ptkp extends CI_Model {

	public function getdata($table)
	{
		$this->db->from($table);
		$this->db->order_by("tahun", "desc");
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
	function hapusdata($id)
	 {
	    $this->db->delete('master_ptkp', ['id' => $id]);
	 }	
}


?>