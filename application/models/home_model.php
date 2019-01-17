<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Controller {

	public function getHomepage()
	{
		$data = $this -> db -> query('SELECT home.gambar_jumbotron, home.text1_jumbotron, home.text2_jumbotron, home.link_youtube, home.judul_youtube, home.keterangan_youtube, overview.judul, overview.isi from home inner join overview on home.id = overview.id');
		return $data -> result_array();
	}

}
