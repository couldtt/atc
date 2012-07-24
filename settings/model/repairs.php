<?php if ( ! defined('IN_DiliCMS')) exit('No direct script access allowed');
$setting['models']['repairs']=array (
  'id' => '2',
  'name' => 'repairs',
  'description' => '设备报修模块',
  'perpage' => '20',
  'hasattach' => '1',
  'built_in' => '0',
  'fields' => 
  array (
    4 => 
    array (
      'id' => '4',
      'name' => 'equip_name',
      'description' => '设备名称',
      'model' => '2',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '200',
      'height' => '20',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
    6 => 
    array (
      'id' => '6',
      'name' => 'person',
      'description' => '报修人',
      'model' => '2',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '200',
      'height' => '20',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
    7 => 
    array (
      'id' => '7',
      'name' => 'reason',
      'description' => '报修原因',
      'model' => '2',
      'type' => 'textarea',
      'length' => '0',
      'values' => '',
      'width' => '600',
      'height' => '60',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
    9 => 
    array (
      'id' => '9',
      'name' => 'status',
      'description' => '维修状态',
      'model' => '2',
      'type' => 'select',
      'length' => '0',
      'values' => 
      array (
        '未维修' => '未维修',
        '已维修' => '已维修',
      ),
      'width' => '200',
      'height' => '20',
      'rules' => 'required',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
  ),
  'listable' => 
  array (
    0 => '4',
    1 => '6',
    2 => '7',
    3 => '9',
  ),
  'searchable' => 
  array (
    0 => '4',
    1 => '9',
  ),
);