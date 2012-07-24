<?php
class Home extends Member_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('dili/user_mdl');
	}

	function index(){
		header("Content-Type: text/html; charset=utf-8");
		$uid = $this->session->userdata('uid');
		$user = $this->user_mdl->get_user_by_uid($uid);
		echo '欢迎您,'.$user->username;
		echo anchor('member/login/quit','注销');
		echo "<br />";
		$this->_side();
	}

	protected function _side(){
		echo anchor('member/repairs','设备报修模块');
	}
}
