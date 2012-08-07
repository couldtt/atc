<?php
class Home extends Member_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('dili/user_mdl');
	}

	function index(){
		$data['uid'] = $this->session->userdata('uid');
		$data['user'] = $this->user_mdl->get_user_by_uid($data['uid']);
		//$this->_side();
        $this->_template('home');
	}

	protected function _side(){
		echo anchor('member/repairs','设备报修模块');
        echo "<br />";
		echo anchor('member/votes','大型仪器设备论证');
        echo "<br />";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo anchor('v_add','论证仪器添加');
        echo "<br />";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo anchor('v_vote','投票');
	}
}
