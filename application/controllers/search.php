<?php
/**
 * User: fyby(couldtt)
 * Date: 12-8-12
 * Time: 下午4:52
 */
class Search extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(array('article_mdl','site_mdl'));
    }

    function index(){
        $content = $this->input->get('search_content');
        if (!empty($content)){
            $data['search_results'] = $this->article_mdl->search($content);
            $data['is_blank'] = FALSE;
        } else {
            $data['search_results'] = '搜索项为空';
            $data['is_blank'] = TRUE;
        }
        $data['search_content'] = $content;
        $this->site_mdl->header();
        $this->load->view('search',$data);
        $this->site_mdl->footer();

    }
}