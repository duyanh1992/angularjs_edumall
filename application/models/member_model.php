<?php  
class Member_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAllMember(){
		$query = $this->db->query('SELECT * FROM member');

		$result = $query->result_array();
		return $result;
	}

	public function editMember($id, $name, $facebook, $year_of_birth, $phone_number){
		$data = array(
					'id'=>$id,
					'name'=>$name,
					'facebook'=>$facebook,
					'year_of_birth'=>$year_of_birth,
					'phone_number'=>$phone_number
				);
		$this->db->where('id', $id);
		$this->db->update('member', $data);

		if($this->db->affected_rows() > 0){
			return 'Successful !!!';
		}
		else{
			return 'Failed !!!';
		}
	}
}
?>