<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whyintegramodel extends CI_Model {

	public function getSpecialProgram()
	{
		$data = $this -> db -> get('special_program', '2', $this->uri->segment(3));
		return $data -> result_array();
	}

	public function specialProgramDetail($where){
		$data = $this->db->get_where('special_program', $where);

		return $data -> result_array();
	}

}
