<?php

/**
* 
*/
class Anggota extends CI_controller
{
	
	function __construct()
	{
	 parent:: __construct();
	 if($this->session->userdata('anggota') != TRUE){
      redirec(base_url(''));
      exit;
	 };
	}

	public function index()
	{
	 $x = array('judul' =>'Halaman Administrator');
	 tpl('admin/home',$x);
	}
}