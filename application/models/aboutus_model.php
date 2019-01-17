<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus_model extends CI_Model {

	public function getOverview()
	{
		$data = $this->db->get('overview');
		return $data -> result_array();
	}

	public function getVisiMisi()
	{
		$data = $this -> db -> query('SELECT visi_misi.visi, visi_misi.misi from visi_misi');
		return $data-> result_array();
	}

	public function getAboutIndonesia()
	{
		$data = $this -> db -> query('SELECT * from about_indonesia');
		return  $data -> result_array();
	}

	public function getBod()
	{
		$data = $this->db->get('bod');
		return $data -> result_array();
	}

	public function getLeadership1()
	{
		$data = $this->db->get('leadership1');
		return $data -> result_array();
	}

	public function getLeadership2()
	{
		$data = $this->db->get('senior_personel');
		return $data -> result_array();
	}

	public function getProfileLeadership($where){
		$data = $this->db->get_where('senior_personel', $where);

		return $data->result_array();
	}

}
