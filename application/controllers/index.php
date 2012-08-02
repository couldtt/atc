<?php
class Index extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('article_mdl');
		$this->load->model('site_mdl');
	}

	public function index(){
		$this->site_mdl->header();
        $this->site_mdl->content();
        $this->site_mdl->footer();
	}

}
