<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect('c_siswa');
		}
	}

	public function index(){
		$d['title']= 'Login Logout Codeigniter';
		$this->load->view('siswa/index');
	}
	
	function masuk(){
		$username=$this->input->post('username1');
		$password=$this->input->post('password1');
		
		$cek = $this->model_login_siswa->cek($username, $password);
		if ($cek->num_rows() > 0){
			foreach ($cek->result() as $data){
				$sess_data['id_siswa']=$data->id_siswa;
				$sess_data['username']=$data->username;
				$this->session->set_userdata($sess_data);
			}
			redirect('beranda_siswa');
		}
		else {
			$this->session->set_flashdata('pesan', 'Password Salah');
			redirect('login/index');
		}
	}

	function beranda_siswa(){
	$this->load->view('beranda_siswa');
	}
	
	
}
?>