<?php
class C_guru extends CI_Controller {
	function __construct()
		{
			parent::__construct();
			/*if($this->session->userdata('username')){
				redirect('auth');
			}*/
			$this->load->model('model_user');
		}

	public function index() {	
		$this->load->view('guru/index');
	}
	
	public function logout() {
		$this->session->unset_userdata('username');
		session_destroy();
		$this->load->view('index');
	}

	public function viewProfile() {
		$this->load->model('model_user');
		$data['guru']= $this->model_user->viewProfil();
		$this->load->view('guru/viewProfileGuru',$data);
	}

	public function inputNilai() {
		$this->load->view('guru/inputNilai');
	}

	public function prosesInput(){
		
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$mapel = $this->input->post('mapel');
		$nilai = $this->input->post('nilai');
		
		$value = array(
			'NIS' => $nis,
			'nama_siswa' => $nama,
			'kelas' => $kelas,
			'mapel' => $mapel,
			'nilai' => $nilai
		);
		$insert = $this->model_user->insertNilai($value);
			if ($insert){
				echo "<script>alert ('data berhasil di inputkan');</script>";
				redirect('guru/c_guru/viewNilai');
			}
			else {
				echo "<script>alert ('data gagal di inputkan');</script>";
			}
		
	}
	public function viewNilai(){
		$data['user'] = $this->model_user->view_nilai()->result();
		$this->load->view('guru/viewNilai',$data);
	}

	public function deleteData($id){
			$del = $this->model_user->deleteData($id);
			if($del){
				redirect('guru/c_guru/viewNilai');
			}
			else{
				echo "gagal";
			}		
		}
	
	public function viewJadwal() {
		$data['jadwalGuru'] = $this->model_user->viewJadwalGuru()->result();
		$this->load->view('guru/viewJadwal',$data);
	}
	public function editNilai($id)
		{
			$data['id'] = $id;
			$this->load->view('guru/editNilai',$data);
		}
	public function actionEditNiali($id)
		{
			$id = $this->input->post('id');
			$nis = $this->input->post('nis');
			$nama_siswa = $this->input->post('nama_siswa');
			$kelas = $this->input->post('kelas');
			$mapel = $this->input->post('mapel');
			$nilai = $this->input->post('nilai');
			$where['id'] = $id;
			$value = array(
				'nis' => $nis,
				'mapel' => $mapel,
				'nilai' => $nilai
			);
			$update = $this->model_user->editNilai($value,$where);
			if($update){
				redirect('guru/c_guru/viewNilai');
			}
			else{
				echo "gagal";
			}
		}
}

?>