 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsarticles extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}

// News /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function news()
	{
		$this->load->library('pagination');
		$data['takeNews'] = $this -> mymodel -> getNews();

		$query = $this->db->get('news_live'); 
		$config['base_url'] = 'http://localhost/integra/newsarticles/news/';

		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 4;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);

		$data['getKatNews'] = $this->mymodel->showtKatNews();

		$this->load->view('news', $data);
	}

	public function katNews($id)
	{
		$where = array('id_kategori' => $id);
		$this->load->library('pagination');
		$data['takeNews'] = $this->mymodel->kategori_news($id);

		$query = $this->db->get_where('news_live', $where);

		$config['uri_segment'] = 4;
		$config['base_url'] = 'http://localhost/integra/newsarticles/katNews/'.$id.'/';

		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 4;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);
		$data['getKatNews'] = $this->mymodel->showtKatNews();

		$this->load->view('news', $data);
	}

	public function newsDetail($id){

		$data['judul'] = "News Detail";
		$where = array('id' => $id);
		$data['getLatesNews'] = $this ->mymodel->latesNews($id);
		$data['takeDetail'] = $this->mymodel->newsDetail($where);
		$data['getKatNews'] = $this->mymodel->showtKatNews();

		$this->load->view('newsDetail', $data);
	}
// End News////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Articles////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function articles()
	{
		$this->load->library('pagination');
		$data['takeArticles'] = $this->mymodel->getArticles();

		$query = $this->db->get('articles_live'); 
		$config['base_url'] = 'http://localhost/integra/newsarticles/articles/';

		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 4;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);
		$data['getKatArticles'] = $this->mymodel->showtKatArticles();

		$this->load->view('articles', $data);
	}

	public function katArticles($id)
	{
		$where = array('id_kategori' => $id);
		$this->load->library('pagination');
		$data['takeArticles'] = $this->mymodel->kategori_articles($id);

		$query = $this->db->get_where('articles_live', $where);

		$config['uri_segment'] = 4;
		$config['base_url'] = 'http://localhost/integra/newsarticles/katArticles/'.$id.'/';

		$config['total_rows'] = $query->num_rows();
		$config['per_page'] = 4;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);
		$data['getKatArticles'] = $this->mymodel->showtKatArticles();

		$this->load->view('articles', $data);
	}

	public function articlesDetail($id){
		$data['judul'] = "Articles Detail";
		$where = array('id' => $id);
		$data['getLatesArticles'] = $this ->mymodel->latesArticles($id);
		$data['getKatArticles'] = $this->mymodel->showtKatArticles();
		$data['takeDetail'] = $this->mymodel->articlesDetail($where);

		$this->load->view('articlesDetail', $data);
	}
// End Articles//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function downloadnews()
	{
		$data['newsletter'] = $this->mymodel->getnewsletter();
		$this->load->view('download-news', $data);
	}

	public function downloadbulletin(){
		$data['bulletin'] = $this->mymodel->getbulletin();
		$this->load->view('download-bulletin', $data);
	}
}
