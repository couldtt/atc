<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>山东理工大学分析测试中心</title>
<link href="<?php echo base_url();?>assets/css/front_style.css" rel="stylesheet" type="text/css" />
<?php
foreach($css as $c_style){
?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo $c_style;?>.css" type="text/css" />
<?php
}
?>
</head>

<body>
<div id="all">
  <div id="logo">
    <div id="sousuo">
    	<form name="input" action="<?php echo site_url('search');?>" method="get">
		站内搜索<input type="text" name="search_content" />
		<input type="submit" value=" Go " />
		</form>
    </div>
  </div>
