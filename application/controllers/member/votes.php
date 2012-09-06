<?php
class Votes extends Member_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(array('equips_mdl','site_mdl'));
    }

    function index(){
        $this->list_page();
    }

    function list_page(){
        $data['equips'] = $this->equips_mdl->get_all_equip_votes();
        //dump($data);
        $this->_template('votes_list', $data);
    }

    function detail_page($id){
		header("Content-Type: text/html; charset=utf-8");
        $data['equips'] = $this->equips_mdl->get_equip_with_all_by_id($id);
        $this->_template('votes_detail', $data);
    }

    function comment_page($id = 1){
        $data['equips'] = $this->equips_mdl->get_equip_with_all_by_id($id);
        if (empty($data['equips']['basic'])){
            show_404();
        }
        $this->site_mdl->header(array('votes'));
        $this->load->view('votes_comment', $data);
        $this->site_mdl->footer();
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
            $this->_template('votes_add', $data);
        } else {
            $data['msg'] = '所有设备都已加入论证列表';
            unset($data['equips']);
            unset($data['polls']);
            $this->_template('votes_add', $data);
        }
        unset($id_list);
        unset($diff);
    }

    function vote_page(){
        $data['equips'] = $this->equips_mdl->get_all_equip_votes();
        $data['total_polls'] = $this->equips_mdl->get_total_polls();
        $this->load->view('votes_vote', $data);
    }

    function vote_check(){
        var_dump($this->equips_mdl->voted_person_add(2,$this->session->userdata('uid')));

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
        if ($equips_poll){
            $temp = $this->equips_mdl->vote_add($equips_poll);
        } else {
            echo '未选择任何仪器';
            echo anchor('v_vote','请返回投票');
        }
        if (isset($temp) && ($temp == true)){
            echo '投票成功！';
            echo anchor('v_vote','返回查看结果');
        }
    }

    function _comment_post(){
        header("Content-Type: text/html; charset=utf-8");
        $comment_content = $this->input->post('comments');
        if (empty($comment_content)){
            echo '评论内容不能为空!';
            $eid = intval($this->input->post('eid'));
            echo anchor("v_comment/$eid",'返回');
        } else {
            $eid = intval($this->input->post('eid'));
            $uid = $this->session->userdata('memberid');
            $this->equips_mdl->comment_add($comment_content, $eid, $uid);
            echo '评论成成功!';
            echo anchor('v_vote','返回查看结果');
        }
    }
}
?>
