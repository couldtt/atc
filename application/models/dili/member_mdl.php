<?php
/**
 * User: fyby(couldtt)
 * Date: 12-8-12
 * Time: 上午11:56
 */
if ( ! defined('IN_DiliCMS')) exit('No direct script access allowed');

class Member_mdl extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function get_full_member_by_username($username = ''){
        return $this->db
                    ->select('dili_members.id,dili_members.password,dili_members.email,dili_members.role,dili_roles.name')
                    ->from('dili_members')
                    ->join('dili_roles', 'dili_roles.id = dili_members.role')
                    ->where('dili_members.username', $username)
                    ->get()
                    ->row();
    }

    function get_member_by_name($name){
        return $this->db->where('username',$name)->get('dili_members')->row();
    }

    function get_member_by_uid($uid = 0)
    {
        return $this->db->where('id',$uid)->get('dili_members')->row();
    }
}