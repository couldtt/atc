<?php
class ListView extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model(array('article_mdl','site_mdl'));
	}

	public function index(){
		//header('Content-Type: text/html; charset=UTF-8');
		$this->view();
	}

	public function view($id = 1){
		$this->page($id);
	}

    public function page($id,$page = 1){
        //分页逻辑
        $page = intval($page);
        $pnum = 16;
        $counts = $this->article_mdl->get_counts_by_id($id);
        $total_nums = ceil($counts / $pnum);
        if ($page < 1){
            $page = $total_nums;
        } elseif ($page > $total_nums) {
            $page = 1;
        }
        $from = ($page - 1) * $pnum;
        $page = $page - 1;
        $create_links = anchor("list/page/$id/$page",'上一页');
        for($i=1;$i<=$total_nums;$i++){
            $create_links .= anchor("list/page/$id/$i",$i,'style="margin:2px 5px;"');
        }
        $page = $page + 2;
        $create_links .= anchor("list/page/$id/$page",'下一页');
        //传递相关参数
        $data['create_links'] = $create_links;
        $data['art_lists'] = $this->article_mdl->get_arts_brief_by_id($id,$from,$pnum);
        $data['class_name'] = $this->article_mdl->get_cat_by_id($id);
        //载入视图
        $this->site_mdl->header();
        $this->load->view('list_view',$data);
        $this->site_mdl->footer();
    }
}
?>
