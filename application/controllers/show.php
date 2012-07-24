<?php
/*
 * @function:前台文章访问控制器
 * @author: fyby
 */
class Show extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('article_mdl');
	}

	public function index(){
		$this->detail();
	}

	public function detail($id = 1){
		$res = $this->article_mdl->get_art_by_id($id);
		$data['article'] = $res;
		$this->load->view('article_detail',$data);
	}
}
?>
