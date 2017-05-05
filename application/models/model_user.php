<?php  
class Model_user extends CI_Model {
	function construct()
		{
			parent:: construct();
		}
	public function cek_user_guru($data)
	{
			$query = $this->db->get_where('guru', $data);
			return $query;
	}
	public function cek_user_siswa($data)
	{
			$query = $this->db->get_where('siswa', $data);
			return $query;
	}
	
	public function login_guru(){
		$this->db->select("*");
		$this->db->from("guru");
		$this->db->where('username',$username);
		$this->db->where('passwowrd',$pasword);
		$data = $this->db->get();
	}

	public function login_siswa(){
		$this->db->select("*");
		$this->db->from("guru");
		$this->db->where('username',$username);
		$this->db->where('passwowrd',$pasword);
		$data = $this->db->get();
	}
	
	public function insertNilai($value)
	{ 
		$result = $this->db->insert("nilai",$value);
		return $result;
	}
	public function view_nilai()
	{
		return $this->db->get('nilai');
	}
	public function viewNilaiSiswa()
	{
		return $this->db->get('nilai');
	}
	public function viewJadwalSiswa()
	{
		return $this->db->get('jadwal');
	}
	public function viewJadwalGuru()
	{
		return $this->db->get('jadwalGuru');
	}
	public function viewProfil(){
		return $this->db->get('guru');
	}
	public function viewProfileSiswa(){
		return $this->db->get('siswa');
	}

	public function deleteData($id){

			$con = array(
				'id' => $id
				);
			$even = $this->db->delete("nilai",$con);

			return $even;
		}
	public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function editNilai($value ,$where)
		{
			$this->db->where($where);
			$even = $this->db->update("nilai",$value);
			return $even;
		}

}

?>