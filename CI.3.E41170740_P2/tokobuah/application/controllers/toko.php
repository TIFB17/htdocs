<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class tokobuah extends CI_Controller {
	
	function index(){
		$this->load->library('toko');
		$this->ganja->nama_saya();
                echo "<br/>";
                $this->ganja->nama_kamu("nama saya adalah abdi");
	}
 
}
