<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class belajar2 extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper("html");
	}

	public function index(){
		$this->load->view('view_belajar');
	}
}
?>