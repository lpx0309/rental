<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	
	
	public function index(){
		$data['title']='登录';
		$this->load->view('login',$data);
	}
	
	public function logout(){
		
		
	}
}
