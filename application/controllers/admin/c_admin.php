<?php
class C_admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_user');
	}
	
	public function index() {
		$this->load->view('admin/index');
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
?>