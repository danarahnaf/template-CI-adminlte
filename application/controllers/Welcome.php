<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('header');
		$this->load->view('top-nav');
		$this->load->view('footer');

	}
	function ptktp()
	{
		$this->load->view('header');
		$this->load->view('v_ptktp');
		$this->load->view('footer');
	}

}
