<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whyintegra extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('whyintegramodel');
	}

	public function why_integra(){
		$this->load->view('whyintegra');
	}

	public function specialprogram()
	{
		$this->load->library('pagination');
		$data['sp'] = $this->whyintegramodel->getspecialprogram();

		$query = $this->db->get('special_program'); 
		$config['base_url'] = 'http://localhost/integra/whyintegra/specialprogram/';

		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 2;

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

		$this->load->view('special-programs', $data);
	}

	public function specialProgramDetail($id){
		$data['judul'] ="Special Program Detail";

		$where = array('id'=> $id);

		$data['takeSpecialProgram'] = $this->whyintegramodel->specialProgramDetail($where);
		$this->load->view('specialProgramDetail', $data);
	}
}
 