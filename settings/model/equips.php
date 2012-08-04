<?php if ( ! defined('IN_DiliCMS')) exit('No direct script access allowed');
$setting['models']['equips']=array (
  'id' => '5',
  'name' => 'equips',
  'description' => '仪器设备模块',
  'perpage' => '20',
  'hasattach' => '1',
  'built_in' => '0',
  'fields' => 
  array (
    13 => 
    array (
      'id' => '13',
      'name' => 'equip_name',
      'description' => '仪器名',
      'model' => '5',
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
    14 => 
    array (
      'id' => '14',
      'name' => 'equip_price',
      'description' => '仪器价格',
      'model' => '5',
      'type' => 'input',
      'length' => '0',
      'values' => '',
      'width' => '200',
      'height' => '20',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '1',
      'listable' => '1',
      'order' => '0',
      'editable' => '1',
    ),
    15 => 
    array (
      'id' => '15',
      'name' => 'equip_explain',
      'description' => '仪器说明',
      'model' => '5',
      'type' => 'wysiwyg_basic',
      'length' => '0',
      'values' => '',
      'width' => '200',
      'height' => '20',
      'rules' => '',
      'ruledescription' => '',
      'searchable' => '0',
      'listable' => '0',
      'order' => '0',
      'editable' => '1',
    ),
  ),
  'listable' => 
  array (
    0 => '13',
    1 => '14',
  ),
  'searchable' => 
  array (
    0 => '13',
    1 => '14',
  ),
);