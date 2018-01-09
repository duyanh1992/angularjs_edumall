<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AboutController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function getAboutPage()
	{
		$this->load->view('lesson42/about_view');
	}

	public function getData()
	{
		$this->load->model('lesson42/About_page_model');
		$result = json_encode($this->About_page_model->getAboutPageData());

		echo ($result);
	}

	public function editdata()
	{
		$data = $this->input->post();

		$this->load->model('lesson42/About_page_model');
		$result = $this->About_page_model->editData($data);
		echo $result;
	}

}

/* End of file AboutController.php */
/* Location: ./application/controllers/AboutController.php */