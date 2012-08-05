<?php
class Equips_mdl extends CI_Model{
    function __construct(){
        parent::__construct();
    }

////////////////////////
//    查询操作   //////
///////////////////////
    function get_all_equips(){
        $res = $this->db
                    ->get('dili_u_m_equips')
                    ->result();
        return $res;
    }

    function get_all_equips_brief(){
        $res = $this->db
                    ->select('id,equip_name')
                    ->get('dili_u_m_equips')
                    ->result();
        return $res;
    }

    function get_votes_by_id($id){
        $map = array(
            'equip_id' => $id
        );
        $res = $this->db
                    ->select('votes')
                    ->where($map)
                    ->get('dili_u_m_votes')
                    ->result();
        return $res[0];
    }

    /*
     *@功能: 得到所有已经加入到论证投票列表的仪器编号
     *@return: an array of equips in vote list
     * */
    function get_all_polls(){
        $res = $this->db
                    ->select('id,equip_id')
                    ->get('dili_u_m_votes')
                    ->result();
        $polls = array();
        foreach($res as $r){
            $polls[] = $r->equip_id;
        }
        return $polls;
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
     *@return: 一个包含建议及其提出着的设备类
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

/////////////////////////////////////////////////////////////////////////////////////
//  插入修改删除操作
///////////////////////////////////////////////////////////////////////////////////

    function add_to_list($polls){
        $data = array();
        foreach ($polls as $poll){
            $data[] = array(
                'equip_id' => $poll
            );
        }
        $res = $this->db
                    ->insert_batch('dili_u_m_votes', $data); //插入多条数据
        if ($res)
            return true;
    }

    function vote_add($equips){
        $data = array();
        foreach ($equips as $equip){
            $num = $this->get_votes_by_id($equip)->votes;
            $num += 1;
            $data[] = array(
                'equip_id' => $equip,
                'votes'    => $num
            );
        }
        $res = $this->db
                    ->update_batch('dili_u_m_votes', $data, 'equip_id');
        return true;
    }
}
?>
