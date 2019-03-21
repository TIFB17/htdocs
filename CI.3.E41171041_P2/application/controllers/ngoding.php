<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('identity');
		$this->identity->nama_saya();
        echo "<br/>";
        $this->identity->nama_kamu("Jack Carver");
	}
}
?>