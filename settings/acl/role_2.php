<?php if ( ! defined('IN_DiliCMS')) exit('No direct script access allowed');
$setting['current_role']=array (
  'id' => '2',
  'name' => 'atc_persons',
  'rights' => 
  array (
    0 => 'system@password',
    1 => 'system@cache',
    2 => 'setting@site',
    3 => 'content@view',
    4 => 'content@form@add',
    5 => 'content@form@edit',
    6 => 'content@save@add',
    7 => 'content@save@edit',
    8 => 'content@del',
    9 => 'category_content@view',
    10 => 'category_content@form@add',
    11 => 'category_content@form@edit',
    12 => 'category_content@save@add',
    13 => 'category_content@save@edit',
    14 => 'category_content@del',
  ),
  'models' => 
  array (
    0 => 'article',
    1 => 'repairs',
  ),
  'category_models' => 
  array (
    0 => 'art_cat',
  ),
  'plugins' => 
  array (
    0 => '0',
  ),
);