<?php
class Article_mdl extends CI_Model{
	function __construct(){
		parent::__construct();
	}	
	
	/*
	 *@功能：通过分类ID获取分类名称
	 *@parameter:id(文章ID编号)
	 *@return: variable(分类名称)
	 */
	function get_cat_by_id($id){
		$map = array(
			'classid' => $id
		);
		$res = $this->db
					->select('catname')
					->from('dili_u_c_art_cat')
					->where($map)
					->get()
					->row();
		return $res->catname;
	}
	
	/*
	 *@功能：通过ID获取文章内容
	 *@parameters: id(文章编号)
	 *@return: 文章对象
	 */
	function get_art_by_id($id){
		$map = array(
			'id' => $id
		);
		$res = $this->db
					->where($map)
					->get('dili_u_m_article')
					->row();
		$res->create_time= formatdate($res->create_time);
		$res->update_time = formatdate($res->update_time);
		return $res;
	}

	/*
	 *@功能：通过分类ID获取分类下的内容
	 *@parameters: id(分类编号), from(开始查询的地方), limit(查询结果的数量)
	 *@return：一个对象数组 
	 */
	function get_arts_by_classid($id, $from=0, $limit=10){
		$map = array(
			'classid' => $id
		);
		$res = $this->db
					->where($map)
					->limit($limit, $from)
					->get('dili_u_m_article')
					->result();
		return $res;
	}

	/*
	 *@功能:通过分类ID获取分类下的标题与时间
	 *@parameters: id(分类编号), from(开始查询的地方), limit(查询结果的数量)
	 *@return：一个对象数组 
	 */
	function get_arts_brief_by_id($id, $from=0, $limit=10){
		$map = array(
			'classid' => $id	
		);	
		$res = $this->db
					->select('id,title,update_time')
					->where($map)
					->limit($limit, $from)
					->get('dili_u_m_article')
					->result();
		return $res;

	}

	/*
	 *@功能：获得所有分类
	 *@parameter:none
	 *@return: 一个对象数组
	 */
	function get_all_class(){
		$res = $this->db
					->get('dili_u_c_art_cat')
					->result();
		return $res;
	}

	/*
	 *@功能：根据ID获得分类下文章总数量
	 *@parameter：id(分类编号)
	 *@return: int
	 */
	function get_counts_by_id($id){
		$map = array(
			'classid' => $id
		);
		$res = $this->db
					->where($map)
					->count_all_results('dili_u_m_article');
		return $res;  
	}

}
?>
