<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}

	public function home()
	{
		$data['takeHomepage'] = $this->home_model->getHomepage();
		$this->load->view('home', $data);

	}
}
