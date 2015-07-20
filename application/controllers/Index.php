<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title']='阿斯蒂芬';
		$this->load->view('default',$data);//主页
	}
}
