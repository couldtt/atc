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
}
?>
