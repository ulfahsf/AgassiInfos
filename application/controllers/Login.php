<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index(){
		$d['title']= 'Login Logout Codeigniter';
		$this->load->view('index', $d);
	}
	
	function masuk(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$cek = $this->model_login->cek($username, $password);
		if ($cek->num_rows() > 0){
			foreach ($cek->result() as $data){
				$sess_data['id_user']=$data->id_user;
				$sess_data['username']=$data->username;
				$this->session->set_userdata($sess_data);
			}
			redirect('beranda');
		}
		else {
			$this->session->set_flashdata('pesan', 'Password Salah');
			redirect('login/index');
		}
	}

	function beranda(){
	$this->load->view('beranda');
}
	
	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>