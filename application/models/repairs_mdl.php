<?php
class Repairs_mdl extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function get_equip_by_id($id){
		$map = array(
			'id' => $id	
		);	
		$res = $this->db
					->where($map)
					->get('dili_u_m_repairs')
					->result();
		return $res;
	}

	function get_equips($from=0, $limit=15){
		$res = $this->db
					->limit($limit, $from)
					->get('dili_u_m_repairs')
					->result();
		return $res;
	}
}
?>
