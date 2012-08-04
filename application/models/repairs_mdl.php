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

    function add_equip($data){
        $data['status'] = '未维修';
        $res =  $this->db
                      ->insert('dili_u_m_repairs', $data);
        if ($res) {
            return true;
        }
    }

    function change_status($id, $status){
        $map = array(
            'id' => $id
        );
        $maintain = array(
            '0' => '未维修',
            '1' => '已维修'
        );
        $data = array(
            'status' => $maintain[$status],
            'update_time' => time()
        );
        $flag = $this->db
                    ->where($map)
                    ->update('dili_u_m_repairs', $data);
        if ($flag)
            return $data['status'];
    }
}
?>
