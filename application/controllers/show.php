<?php
/*
 * @function:前台文章访问控制器
 * @author: fyby
 */
class Show extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model(array('article_mdl','site_mdl'));
	}

	public function index(){
		$this->detail();
	}

	public function detail($id = 1){
        $this->site_mdl->header();
		$data['article'] = $this->article_mdl->get_art_by_id($id);
        $data['catname'] = $this->article_mdl->get_cat_by_id($data['article']->classid);
		$this->load->view('article_view',$data);
        $this->site_mdl->footer();
	}
}
?>
