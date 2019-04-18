<?php

	defined('BASEPATH')OR exit ('No direct script access allowed');

	class Products extends CI_Controller
	{

		public function __construct()
		{
		parent::__construct();
		$this->load->model ('Product_model');
		$this->load->library('form_validation');
		}

		public function index()
		{
			$data = array();
			$data['products'] = $this->Product_model->getAll();
			$this->load->view('admin/list',$data);
		}
	}
?>