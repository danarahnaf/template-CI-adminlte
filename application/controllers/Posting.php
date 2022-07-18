<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posting extends CI_Controller {

  public function index()
  {
    $this->load->view('header');
    $this->load->view('v_posting');
    $this->load->view('footer');

  }
}
