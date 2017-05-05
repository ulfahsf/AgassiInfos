<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect('login');
		}
	}
	
	public function index(){
		$d['title']= 'Login Logout Codeigniter';
		$d['judul']= 'Login Logout Codeigniter';
		$d['username']= $this->session->userdata('username');
		$this->load->view('beranda', $d);
	}
}
?>