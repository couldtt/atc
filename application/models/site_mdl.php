<?php
class Site_mdl extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('article_mdl');
		$this->load->model('dili/user_mdl');
	}

	function header(){
		$this->load->view('header');
		$this->nav();
	}

	function nav(){
		$this->load->view('nav');
	}

	function content(){
		$data['notices'] = $this->article_mdl->get_latest_by_id(3,8);
        $data['flinks'] = $this->get_flinks();
        $uid = $this->session->userdata('uid');
        if (!empty($uid)) {
            $data['userinfo'] = $this->user_mdl->get_user_by_uid($this->session->userdata('uid'));
            $data['is_login'] = true;
        } else {
            $data['is_login'] = false;
        }
		$this->load->view('index/content',$data);
	}

    function footer(){
        $this->load->view('footer');
    }

    /**
     *@功能：获取最新的友情链接
     *@parameter: limit(限制的条数)
     *@return: 一个对象数组
     */
    function get_flinks($limit = 8){
        $res = $this->db
                    ->limit($limit, 0)
                    ->get('dili_u_m_flinks')
                    ->result();
        return $res;
    }

}
?>
