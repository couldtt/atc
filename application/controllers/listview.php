<?php
class ListView extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model(array('article_mdl','site_mdl'));
	}

	public function index(){
		//header('Content-Type: text/html; charset=UTF-8');
		$this->view();
	}

	public function view($id = 1){
		$this->list_with_css($id,0,20);
	}

	private function list_with_css($id,$from,$limit){
		$res = $this->article_mdl->get_arts_brief_by_id($id,$from,$limit);
		$data['art_lists'] = $res;
        $data['class_name'] = $this->article_mdl->get_cat_by_id($id);
        $this->site_mdl->header();
		$this->load->view('list_view',$data);
        $this->site_mdl->footer();
	}

}
?>
