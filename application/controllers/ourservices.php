<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ourservices extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ourservice_m','m');
	}

	public function service()
	{
		$data['get_text'] = $this->m->text();
		$data['get_service'] = $this->m->service();

		$this->load->view('our-services', $data);
	}
}
 