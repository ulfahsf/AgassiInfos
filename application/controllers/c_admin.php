<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect('c_admin');
		}
	}

	public function index(){
		$d['title']= 'Login Logout Codeigniter';
		$this->load->view('admin/index');
	}
	
	function masuk(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$cek = $this->model_login_admin->cek($username, $password);
		if ($cek->num_rows() > 0){
			foreach ($cek->result() as $data){
				$sess_data['id_admin']=$data->id_admin;
				$sess_data['username']=$data->username;
				$this->session->set_userdata($sess_data);
			}
			redirect('beranda_admin');
		}
		else {
			$this->session->set_flashdata('pesan', 'Password Salah');
			redirect('c_admin/admin/index');
		}
	}

	function beranda_admin(){
	$this->load->view('beranda_admin');
}
	
	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>