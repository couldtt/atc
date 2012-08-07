<?php
class Repairs extends Member_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('repairs_mdl');
        $this->load->library('form_validation');
	}

	function index(){
		$this->_template('repairs_index');
	}

	function list_page(){
		$res = $this->repairs_mdl->get_equips();
        $data['res'] = $res;
        unset($res);
        $this->_template('repairs_list', $data);
	}

	function add_page(){
		$this->_template('repairs_add');
	}

	function _add_post(){
		header("Content-Type: text/html; charset=utf-8");
		//获取表单数据
        $this->form_validation->set_rules('equip_name', '设备名', 'required|trim')
                              ->set_rules('person','报修人','required|trim');
		$data['equip_name'] = $this->input->post('equip_name');
		$data['person'] = $this->input->post('person');
		$data['reason'] = $this->input->post('reason');
		$data['create_time'] = nowdate();
        if ($this->form_validation->run() == TRUE){
            $this->repairs_mdl->add_equip($data);
            echo 'success!';
        } else {
            $this->_template('repairs_add');
        }
	}

    function _change_post(){
        $status = $this->input->post('status');
        $id = $this->input->post('id');
        $res = $this->repairs_mdl->change_status($id, $status);
        echo $res;
    }
}
?>
