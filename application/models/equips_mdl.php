<?php
class Equips_mdl extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function get_all_equips(){
        $res = $this->db
                    ->get('dili_u_m_equips')
                    ->result();
        return $res;
    }

    function get_all_equip_votes(){
        $res = $this->db
                    ->select('dili_u_m_equips.id,dili_u_m_equips.equip_name,dili_u_m_equips.equip_price,dili_u_m_votes.votes')
                    ->from('dili_u_m_equips')
                    ->join('dili_u_m_votes','dili_u_m_equips.id = dili_u_m_votes.equip_id')
                    ->order_by('dili_u_m_votes.votes', 'desc')
                    ->get()
                    ->result();
        return $res;
    }

    /*
     *@功能:获取一件设备的详细信息以及得票数(按照得票数排序)
     *@parameter: id(设备ID)
     *@return: 一个仪器设备类(设备信息+得票数)
     * */
    function get_equip_with_votes_by_id($id){
        $map = array(
            'dili_u_m_equips.id' => $id
        );
        $res = $this->db
                    ->select('*')
                    ->from('dili_u_m_equips')
                    ->where($map)
                    ->join('dili_u_m_votes','dili_u_m_equips.id = dili_u_m_votes.equip_id')
                   // ->order_by('dili_u_m_votes.votes', 'desc')
                    ->get()
                    ->result();
        return $res[0];
    }

    /*
     *@功能:获取一件设备的相关建议以及建议的提出者
     *@parameter: id(设备ID)
     *@return: 一个设备类
     * */
    function get_equip_with_suggs_by_id($id){
        $map = array(
            'equip_id' => $id
        );
        $res = $this->db
                    ->select('dili_u_m_suggestions.content, dili_admins.username')
                    ->from('dili_u_m_suggestions')
                    ->where($map)
                    ->join('dili_admins','dili_admins.uid = dili_u_m_suggestions.user_id')
                    ->get()
                    ->result();
        return $res;
    }

    /*
     *@功能:获得设备的最终详细信息（包括设备基本信息+得票数+建议信息）
     *
     *
     * */
    function get_equip_with_all_by_id($id){
        $res['basic'] = $this->get_equip_with_votes_by_id($id);
        $res['suggs'] = $this->get_equip_with_suggs_by_id($id);
        return $res;
    }
}
?>
