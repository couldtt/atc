<?php
/**
 * User: fyby(couldtt)
 * Date: 12-8-12
 * Time: 下午12:03
 */
class Test extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('dili/member_mdl');
        $this->load->model('article_mdl');
    }

    function index(){
        $user = $this->member_mdl->get_member_by_name('liming');
        //var_dump($user);
        $arts = $this->article_mdl->get_counts_by_id(3);
    }
}