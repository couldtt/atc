<?php
class Repairs extends Member_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('repairs_mdl');
	}

	function index(){
		$this->load->view('member/repairs_index');
	}

	function list_page(){
		header("Content-Type: text/html; charset=utf-8");
		echo "<pre>";
		print_r($this->repairs_mdl->get_equips());	
		echo "</pre>";
	}

	function add_page(){
		$this->load->view('member/repairs_add');
	}

	function _add_post(){
		header("Content-Type: text/html; charset=utf-8");
		//获取表单数据
		$equip_name = $this->input->post('equip_name');
		$person = $this->input->post('person');
		$reason = $this->input->post('reason');
		$create_time = nowdate();

	}
}
?>
