<?php
class Votes extends Member_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('equips_mdl');
    }

    function index(){
        $this->list_page();
    }

    function list_page(){
		header("Content-Type: text/html; charset=utf-8");
        $data['equips'] = $this->equips_mdl->get_all_equip_votes();
        //dump($data);
        $this->load->view('member/votes_list', $data);
    }

    function detail_page($id){
		header("Content-Type: text/html; charset=utf-8");
        $data['equips'] = $this->equips_mdl->get_equip_with_all_by_id($id);
        $this->load->view('member/votes_detail', $data);
    }

    function add_page(){
        $data['equips'] = $this->equips_mdl->get_all_equips_brief();
        $data['polls']  = $this->equips_mdl->get_all_polls();
        $id_list = array();
        foreach($data['equips'] as $equip){
            $id_list[] = $equip->id;
        }
        $diff = array_diff($id_list,$data['polls']);
        if (!empty($diff)){
            $this->load->view('member/votes_add', $data);
        } else {
            $data['msg'] = '所有设备都已加入论证列表';
            unset($data['equips']);
            unset($data['polls']);
            $this->load->view('member/votes_add', $data);
        }
        unset($id_list);
        unset($diff);
    }

    function vote_page(){
        $data['equips'] = $this->equips_mdl->get_all_equip_votes();
        $this->load->view('member/votes_vote', $data);
    }

    function _add_post(){
		header("Content-Type: text/html; charset=utf-8");
        $msg = '';
        $new_polls = $this->input->post('equip_poll');
        if (empty($new_polls)){
            $new_polls = array();
        }
        $exist_polls = $this->equips_mdl->get_all_polls();
        $polls = array_diff($new_polls, $exist_polls);
        if (!empty($polls)) {
            $this->equips_mdl->add_to_list($polls);
            $msg = '添加成功';
        } else {
            $msg = '您所选择的设备已加入到论证列表，请勿重复添加';
            echo $msg;
        }
    }

    function _vote_post(){
        header("Content-Type: text/html; charset=utf-8");
        $equips_poll = $this->input->post('equip_id');
        //dump($equips_poll);
        $temp = $this->equips_mdl->vote_add($equips_poll);
        if ($temp == true){
            echo '投票成功！';
            echo anchor('v_vote','返回查看结果');
        }
    }

    function _comment_post(){

    }
}
?>
