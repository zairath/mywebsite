<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careermodel extends CI_Model {

	public function getcareer()
	{
		$data = $this -> db -> query('SELECT * from career1');
		return $data -> result_array();
	}

	public function getcareerclass(){

		$data = $this->db->get('career2', '4', $this->uri->segment(3));

		return $data->result_array();
	}

	public function careerDetail($where){
		$data = $this->db->get_where('career2', $where);

		return $data->result_array();
	}
}
