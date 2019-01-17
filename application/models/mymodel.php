<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	// Homepage
	public function getHomepage()
	{
		$data = $this -> db -> query('SELECT * from homepage');
		return $data -> result_array();
	}

	// End Homepage

	// News&Articles

	// news
	public function getNews()
	{
		$this->db->order_by('waktu', 'desc');
		$data = $this->db->get('news_live', '4', $this->uri->segment(3));

		return $data -> result_array();
	}

	public function latesNews($id)
	{
		$this->db->not_like('id',$id);
		$this->db->order_by('waktu', 'desc');
		$data = $this->db->get('news_live', '3');

		return $data -> result_array();
	}

	public function kategori_news($id){
		$this->db->where('id_kategori', $id);
		$this->db->order_by('waktu', 'desc');
		$data = $this->db->get('news_live', '4', $this->uri->segment(4));

		return $data -> result_array();
	}

	public function showtKatNews(){
		$where = array('id_kategori' => '1');
		$data = $this->db->get_where('sub_kategori', $where);

		return $data->result_array();
	}

	public function newsDetail($where){
		$data = $this->db->get_where('news_live', $where);

		return $data->result_array();
	}
	// end News

	// articles
	public function getArticles()
	{
		$this->db->order_by('waktu', 'desc');
		$data = $this->db->get('articles_live', '4');
		return $data -> result_array();
	}

	public function latesArticles($id)
	{
		$this->db->not_like('id',$id);
		$this->db->order_by('waktu', 'desc');
		$data = $this->db->get('articles_live', '3');

		return $data -> result_array();
	}

	public function kategori_articles($id){
		$this->db->where('id_kategori', $id);
		$this->db->order_by('waktu', 'desc');
		$data = $this->db->get('articles_live', '4', $this->uri->segment(4));

		return $data -> result_array();
	}

	public function showtKatArticles(){
		$where = array('id_kategori' => '2');
		$data = $this->db->get_where('sub_kategori', $where);

		return $data->result_array();
	}

	public function articlesDetail($where)
	{
		$data = $this->db->get_where('articles_live', $where);

		return $data->result_array();
	}
	// End Articles

	public function getnewsletter()
	{
		$data = $this->db->query('SELECT * from newsletter');
		return $data -> result_array();
	}

	public function getbulletin()
	{
		$data = $this->db->query('SELECT * from bulletin');
		return $data -> result_array();
	}
	// End Articles

	// End News&Articles

	// About Us
	public function getOverview()
	{
		$data = $this -> db -> query('SELECT overview.foto_overview, overview.judul_overview, overview.konten_overview from overview');
		return $data -> result_array();
	}

	public function getVisiMisi()
	{
		$data = $this -> db -> query('SELECT visi_misi.visi, visi_misi.misi from visi_misi');
		return $data-> result_array();
	}

	public function getAboutIndonesia()
	{
		$data = $this -> db -> query('SELECT about_indonesia.konten, about_indonesia.tabel from about_indonesia');
		return  $data -> result_array();
	}
	// End About Us	public function showAllNewsletter(){

	public function showAllNews(){
		$query = $this->db->get('news');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

}
