<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data=array();
		$data['title']='闲租族';
		$data['tools']=$this->db->query("SELECT * FROM re_tool")->result_array();
		$this->load->view('index',$data);//主页
	}
	
}
