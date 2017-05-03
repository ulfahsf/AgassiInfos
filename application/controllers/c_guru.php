<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_guru extends CI_Controller{
	
		function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
		$this->load->helper('url');
 
	}
	
	public function index(){
		$d['title']= 'Login Logout Codeigniter';
		$this->load->view('index', $d);
	}
	public function viewProfile() {
		$this->load->view('viewProfile');
	}
	public function inputNilai() {
		$this->load->view('inputNilai');
	}
	public function prosesInput(){
		$nis = $this->input->post('NIS');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$mapel = $this->input->post('mapel');
		$nilai = $this->input->post('nilai');
		
		$value = array(
			'NIS' => $nis,
			'nama' => $nama,
			'kelas' => $kelas,
			'mapel' => $mapel,
			'nilai' => $nilai
		);
		$insert = $this->model_login->insertNilai($value);
			if ($insert){
				echo "<script>alert ('data berhasil di inputkan');</script>";
				redirect('c_guru/viewNilai');
			}
			else {
				echo "<script>alert ('data gagal di inputkan');</script>";
			}
		
	}
	public function viewNilai(){
		$this->load->view('viewNilai');
	}
	
}
?>