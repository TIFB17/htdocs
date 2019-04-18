<?php
  class P_list extends CI_Controller  {
    public function __construct(){
      parent::__construct();
      $this->load->model('products');
      $this->load->helper('url');

      if($this->session->userdata('status') != "login")
  			redirect(base_url("login"));
    }
    public function index(){
      $data['product'] = $this->product->getAll();
      $this->load->view('admin/product/list',$data);

    }
  }

?>
