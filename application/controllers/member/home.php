<?php
class Home extends Member_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('dili/member_mdl');
	}

	function index(){
		$data['memberid'] = $this->session->userdata('memberid');
		$data['user'] = $this->member_mdl->get_member_by_uid($data['memberid']);
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
