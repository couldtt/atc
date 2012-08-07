<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
</head>
<body>
<form action="<?php echo site_url('member/votes/vote');?>" method="POST">
	<ul>
		<?php foreach($equips as $equip){?>
		<li>
			<input type="checkbox" name="equip_id[]" value="<?php echo $equip->id;?>" />
			<span><?php echo anchor("v_detail/$equip->id",$equip->equip_name);?></span>
            <span>(票数:<?php echo $equip->votes; ?>)</span>
		</li>
		<?php }?>
	</ul>
	<input type="submit" value="submit" />
</form>

</body>
</html>
