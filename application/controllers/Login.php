<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	
	
	public function index(){
		$data['title']='登录';
		//$this->load->view('login',$data);//主页
		//$file_arr=file_get_contents($this->config->base_url().'login.php');
		//echo ($file_arr);	
	}
}
