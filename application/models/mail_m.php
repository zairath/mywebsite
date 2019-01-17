<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_m extends CI_Model {

	public function showMail($data){
		$data = $this->db->insert('unseen_mail', $data);

		return $data;
	}

}