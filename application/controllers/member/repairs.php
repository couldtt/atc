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
		$res = $this->repairs_mdl->get_equips();
        $data['res'] = $res;
        $this->load->view('member/repairs_list', $data);
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

    function change(){
        $status = $this->input->get('status');
        echo $status;
    }
}
?>
