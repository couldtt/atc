<?php
class Site_mdl extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->model('article_mdl');
		$this->load->model('dili/member_mdl');
	}

	function header(){
		$this->load->view('header');
		$this->nav();
	}

	function nav(){
		$this->load->view('nav');
	}

	function content(){
        //传递数据
		$data['notices'] = $this->article_mdl->get_latest_by_id(3,8);
        $data['academics'] = $this->article_mdl->get_latest_by_id(4,8);
        $data['flinks'] = $this->get_flinks();
        //判断用户是否登录
        $memberid = $this->session->userdata('memberid');
        if (!empty($memberid)) {
            $data['userinfo'] = $this->member_mdl->get_member_by_uid($memberid);
            $data['is_login'] = true;
        } else {
            $data['is_login'] = false;
        }
        //载入视图
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
