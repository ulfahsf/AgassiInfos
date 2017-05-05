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
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
	public function viewNilaiSiswa(){
		$data['user'] = $this->model_user->viewNilaiSiswa()->result();
		$this->load->view('siswa/viewNilaiSiswa',$data);
	}
	public function viewJadwalSiswa(){
		$data['user'] = $this->model_user->viewJadwalSiswa()->result();
		$this->load->view('siswa/viewJadwalSiswa',$data);
	}
	public function formSiswa() {
		$this->load->view('siswa/formSiswa');
	}
}
?>