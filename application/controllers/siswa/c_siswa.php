<?php
class C_siswa extends CI_Controller {
	function __construct()
		{
			parent::__construct();
			$this->load->model('model_user');
		}
	public function index() {
		$this->load->view('siswa/index');
	}

	public function logout() {
		$this->session->unset_userdata('username');
		session_destroy();
		$this->load->view('index');
	}
	
	public function viewNilaiSiswa(){
		$data['user'] = $this->model_user->viewNilaiSiswa()->result();
		$this->load->view('siswa/viewNilaiSiswa',$data);
	}
	public function viewJadwalSiswa(){
		$data['jadwal'] = $this->model_user->viewJadwalSiswa()->result();
		$this->load->view('siswa/viewJadwalSiswa',$data);
	}
	public function loginSiswa() {
		$this->load->view('siswa/loginSiswa');
	}

	public function viewProfile() {
		$this->load->view('siswa/viewProfileSiswa');
	}

}
?>