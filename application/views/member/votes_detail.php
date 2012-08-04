<h3><?php echo $equips['basic']->equip_name;?></h3>
<ul id="basic">
	<li><?php echo $equips['basic']->id;?></li>
	<li><?php echo $equips['basic']->equip_name;?></li>
	<li><?php echo $equips['basic']->equip_price;?></li>
	<li><?php echo $equips['basic']->votes;?></li>
</ul>

<ul id="suggs">
	<?php foreach($equips['suggs'] as $sugg){?>
	<li><?php echo $sugg->content;?></li>
	<?php }?>
</ul>