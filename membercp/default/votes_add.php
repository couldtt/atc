<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>待论证仪器添加</title>
</head>
<body>
<?php 
if (isset($msg)){
	echo $msg;
	echo "<br />";
	echo anchor('member/home','member home');
} else {
?>
	<h3>待论证仪器添加</h3>
	<form action="<?php echo site_url('member/votes/add');?>" method="POST">
	<?php foreach($equips as $equip){
		if (!in_array($equip->id, $polls)){
	?>
		<input type="checkbox" name="equip_poll[]" value="<?php echo $equip->id;?>" />
		<span><?php echo $equip->equip_name;?></span><br />
	<?php
	}
	?>
	<?php }?>
		<input type="submit" value="submit" />
	</form>
<?php
}
?>
</body>
</html>