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
        unset($res);
        $this->load->view('member/repairs_list', $data);
	}

	function add_page(){
		$this->load->view('member/repairs_add');
	}

	function _add_post(){
		header("Content-Type: text/html; charset=utf-8");
		//获取表单数据
		$data['equip_name'] = $this->input->post('equip_name');
		$data['person'] = $this->input->post('person');
		$data['reason'] = $this->input->post('reason');
		$data['create_time'] = nowdate();
        if ($this->repairs_mdl->add_equip($data)){
            echo 'success!';
        };
	}

    function _change_post(){
        $status = $this->input->post('status');
        $id = $this->input->post('id');
        $res = $this->repairs_mdl->change_status($id, $status);
        echo $res;
    }
}
?>
