<?php if ( ! defined('IN_DiliCMS')) exit('No direct script access allowed');
$setting['models']['flinks']=array (
  'id' => '4',
  'name' => 'flinks',
  'description' => '友情链接模块',
  'perpage' => '20',
  'hasattach' => '0',
  'built_in' => '0',
  'fields' => 
  array (
    11 => 
    array (
      'id' => '11',
      'name' => 'link_name',
      'description' => '链接名称',
      'model' => '4',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '200',
      'height' => '20',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
    12 => 
    array (
      'id' => '12',
      'name' => 'link_url',
      'description' => '链接地址',
      'model' => '4',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '300',
      'height' => '20',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
  ),
  'listable' => 
  array (
    0 => '11',
    1 => '12',
  ),
  'searchable' => 
  array (
  ),
);