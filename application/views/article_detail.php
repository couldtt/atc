<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <title></title>
<style type="text/css">
#container{ width:960px; margin:0 auto;}
#art_content{margin-top:20px;margin-left:20px;}
#time{ margin-left:400px;}
</style>
</head>
<body>
<div id="container">
<center><h1><?php echo $article->title;?></h1></center> 
<span id="time">创建时间：</span><?php echo $article->update_time;?>
<div id="art_content">
	<?php echo $article->content;?>
</div>
</div>
</body>
</html>
