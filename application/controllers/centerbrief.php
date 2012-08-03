<?php
class Centerbrief extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model(array('article_mdl','site_mdl'));
    }

    function index(){
        $art = $this->article_mdl->get_arts_by_classid(1,0,1);
        $data['art'] = $art[0];
        unset($art);
        $this->site_mdl->header();
        $this->load->view('center_brief.php',$data);
        $this->site_mdl->footer();
    }
}
?>
