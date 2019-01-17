<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('aboutus_model');
	}

	public function overview()
	{
		$data['takeOverview'] = $this -> aboutus_model -> getOverview();
		$this->load->view('overview', $data);
	}

	public function visimisi()
	{
		$data['takeVisiMisi'] = $this -> aboutus_model -> getVisiMisi();
		$this->load->view('visi-misi', $data);
	}

	public function aboutindonesia()
	{
		$config['base_url'] = 'http://localhost/integra_backend/';
		$data['takeAboutIndonesia'] = $this->aboutus_model->getAboutIndonesia();
		$this->load->view('about-indonesia', $data);
	}

	public function bod()
	{
		$data['takeBod']=$this->aboutus_model->getBod();
		$this->load->view('bod',$data);
	}

	public function leadership()
	{
		$data['takeLeadership1']= $this-> aboutus_model -> getLeadership1();
		$data['takeLeadership2']= $this-> aboutus_model -> getLeadership2();
		$this->load->view('senior-personel', $data);
	}

	public function profile($id)
	{
		$where = array('id' => $id);
		$data['takeProfile'] = $this->aboutus_model->getProfileLeadership($where);
		$data['takeLeadership2']= $this-> aboutus_model -> getLeadership2();
		$this->load->view('profile', $data);
	}
}
 