<?php 
class Site_mdl extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('article_mdl');
	}

	function header(){
		$this->load->view('header');
		$this->nav();
	}

	function nav(){
		$this->load->view('nav');
	}
	
	function notification(){
		$res = $this->article_mdl->get_arts_brief_by_id(3);
		$data['arts'] = $res; 	
		$this->load->view('index/notification.php',$data);
	}

			
}
?>
