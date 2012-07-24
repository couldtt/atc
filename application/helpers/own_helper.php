<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * @author:fyby
 *
 * @function: 自定义函数集合
 *
 * */

if ( !function_exists('formatdate') ){
	function formatdate($time){
		return date('Y-m-d H:i', $time);
	}
}

if (!function_exists('nowdate') ){
	function nowdate(){
		return date('Y-m-d H:i', time());
	}
}

?>
