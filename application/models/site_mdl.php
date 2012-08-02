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
		$this->load->view('index/notification',$data);
	}

	function content(){
		$res = $this->article_mdl->get_latest_by_id(3,8);
		$data['notices'] = $res;
        $flinks = $this->article_mdl->get_flinks();
        $data['flinks'] = $flinks;
		$this->load->view('index/content',$data);
	}

    function footer(){
        $this->load->view('footer');
    }


}
?>
