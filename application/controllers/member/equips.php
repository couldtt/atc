<?php
/**
 * User: fyby(couldtt)
 * Date: 12-8-12
 * Time: 下午12:45
 */
class Equips extends Member_Controller{

    function __construct(){
        parent::__construct();
    }

    function add_page(){
        $this->_template('equips_add');
    }
}