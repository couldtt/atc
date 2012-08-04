<?php if ( ! defined('IN_DiliCMS')) exit('No direct script access allowed');
$setting['cate_models']['art_cat']=array (
  'id' => '1',
  'name' => 'art_cat',
  'description' => '文章分类模块',
  'perpage' => '15',
  'level' => '1',
  'hasattach' => '0',
  'built_in' => '0',
  'fields' => 
  array (
    1 => 
    array (
      'id' => '1',
      'name' => 'catname',
      'description' => '分类名称',
      'model' => '1',
      'type' => 'input',
      'length' => '50',
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
  ),
  'listable' => 
  array (
    0 => '1',
  ),
  'searchable' => 
  array (
  ),
);