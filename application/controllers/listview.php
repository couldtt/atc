<?php
class ListView extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('article_mdl');
	}

	public function index(){
		//header('Content-Type: text/html; charset=UTF-8');
		$this->view();
	}

	public function view($id = 1){
		$this->list_with_css($id);
	}

	private function list_with_css($id){
		$res = $this->article_mdl->get_arts_brief_by_id($id);	
		$data['art_lists'] = $res;
		$this->load->view('list_css',$data);
	}
}
?>
