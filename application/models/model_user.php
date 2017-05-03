<?php  
class Model_user extends CI_Model {
	function construct()
		{
			parent:: construct();
		}
	public function cek_user($data) {
			$query = $this->db->get_where('login', $data);
			return $query;
		}
}

?>