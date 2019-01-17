<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function contact(){
		$this->load->view('contact_us');
	} 
}