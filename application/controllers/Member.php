<?php  
class Member extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAllMember(){
		$this->load->model('member_model');
		$memberList = $this->member_model->getAllMember();
		echo json_encode($memberList);
	}

	public function getMemberView(){
		$this->load->view('member_view');
	}

	public function editMember(){
		echo $id = $this->input->post('id');
		echo "<br />";
		echo $name = $this->input->post('name');
		echo "<br />";
		echo $facebook = $this->input->post('facebook');
		echo "<br />";
		echo $year_of_birth = $this->input->post('year_of_birth');
		echo "<br />";
		echo $phone_number = $this->input->post('phone_number');
		echo "<br />";

		$this->load->model('member_model');
		return $this->member_model->editMember($id, $name, $facebook, $year_of_birth, $phone_number);
	}
}
?>