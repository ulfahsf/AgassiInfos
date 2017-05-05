<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('index');
	}

	public function cek_login_guru() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => $this->input->post('password', TRUE)
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user_guru($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$this->session->set_userdata($sess_data);
				redirect('guru/c_guru');
			}
			
		}
		else {
			echo "<script>alert('Gagal login : Cek username & password Anda!');
			history.go(-1);</script>";
		}
	}

	public function cek_login_siswa() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => $this->input->post('password', TRUE)
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user_siswa($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$this->session->set_userdata($sess_data);
				redirect('siswa/c_siswa/index');
			}
			
		}
		else {
			echo "<script>alert('Gagal login : Cek username & password Anda!');
			history.go(-1);</script>";
		}
	}

}

?>