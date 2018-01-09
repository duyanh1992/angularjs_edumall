<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_page_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAboutPageData()
	{
		$this->load->database();

		//select column:
		$this->db->select('id, image, header_title, header_subtitle, content');

		// choose table name:
		$query = $this->db->get('about_page');

		// get result:
		$result = $query->result_array();

		return $result;
	}

	public function editData($data)
	{	
		$dataEdit = array(
						'id'=> $data['id'],
						'header_title'=> $data['header_title'],
						'header_subtitle'=> $data['header_subtitle'],
						'content'=> $data['content'],
						'image'=> $data['image']
					);

		$this->load->database();
		$this->db->where('id', $data['id']);
		$this->db->update('about_page', $dataEdit);

		if ($this->db->affected_rows() > 0) {
			return 'Successful !';
		}
		else{
			return 'Failed !!!';
		}
	}

}

/* End of file About_page_model.php */
/* Location: ./application/models/About_page_model.php */