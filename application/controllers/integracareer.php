<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Integracareer extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('careermodel');

	}

	public function career()
	{
		$this->load->library('pagination');

		$data['career'] = $this->careermodel->getcareer();

		$data['career2'] = $this->careermodel->getcareerclass();

		$query = $this->db->get('career2'); 
		$config['base_url'] = 'http://localhost/integra/integracareer/career/';

		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 4;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);

		$this->load->view('career', $data);
	}

	public function careerDetail($id){

		$where = array('id' => $id);

		$data['takeCareer'] = $this->careermodel->careerDetail($where);
		$data['takeCareer1'] = $this->careermodel->getCareer();

		$this->load->view('careerDetail', $data);
	}
}
 