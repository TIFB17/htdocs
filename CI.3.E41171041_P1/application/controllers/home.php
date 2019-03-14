<?php

class home extends CI_Controller{

	public function index(){

		$data = array();
		$data['nama'] = "Bang Cakep";
		$this->load->view("view_home", $data);

	}

}

?>