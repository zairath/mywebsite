<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ourservice_m extends CI_Model {

	public function text(){
		$data = $this->db->get('our_service');

		return $data->result_array();
	}

	public function service(){
		$data = $this->db->get('our_service2');

		return $data->result_array();
	}
}