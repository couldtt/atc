<?php if ( ! defined('IN_DiliCMS')) exit('No direct script access allowed');
$setting['models']['article']=array (
  'id' => '1',
  'name' => 'article',
  'description' => '文章管理模块',
  'perpage' => '20',
  'hasattach' => '1',
  'built_in' => '0',
  'fields' => 
  array (
    3 => 
    array (
      'id' => '3',
      'name' => 'title',
      'description' => '标题',
      'model' => '1',
      'type' => 'input',
      'length' => '120',
      'values' => '',
      'width' => '600',
      'height' => '20',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '1',
      'editable' => '1',
    ),
    1 => 
    array (
      'id' => '1',
      'name' => 'classid',
      'description' => '文章分类',
      'model' => '1',
      'type' => 'select_from_model',
      'length' => '0',
      'values' => 'art_cat|catname',
      'width' => '400',
      'height' => '20',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '2',
      'editable' => '1',
    ),
    2 => 
    array (
      'id' => '2',
      'name' => 'content',
      'description' => '文章内容',
      'model' => '1',
      'type' => 'wysiwyg',
      'length' => '0',
      'values' => '',
      'width' => '600',
      'height' => '300',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '0',
      'order' => '3',
      'editable' => '1',
    ),
  ),
  'listable' => 
  array (
    0 => '3',
    1 => '1',
  ),
  'searchable' => 
  array (
    0 => '3',
  ),
);