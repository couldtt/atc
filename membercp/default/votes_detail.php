<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/votes.css" />
	<title>仪器论证详情</title>
</head>
<body>
<table cellpadding="0" cellspacing="0" class="vdtl"><!-- votes detail table  -->
	<caption>仪器论证详情</caption>
    <tbody>
	<tr>
		<th>设备ID</th>
		<td><?php echo $equips['basic']->id;?></td>
	</tr>
	<tr>
		<th>设备名</th>
		<td><?php echo $equips['basic']->equip_name;?></td>
	</tr>
	<tr>
		<th>设备价格</th>
		<td><?php echo $equips['basic']->equip_price;?></td>
	</tr>
    <tr>
        <th>设备简介</th>
        <td><?php echo $equips['basic']->equip_explain;?></td>
    </tr>
	<tr>
		<th>得票数</th>
		<td><?php echo $equips['basic']->votes;?></td>
	</tr>
    </tbody>
</table>

<ul id="suggs">
	<?php foreach($equips['suggs'] as $sugg){?>
	<li><?php echo $sugg->content;?></li>
	<?php }?>
</ul>

</body>
</html>
