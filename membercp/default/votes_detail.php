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
<br />
<table cellpadding="0" cellspacing="0" class="vdtl">
    <tr><th></th><td><strong>相关评论</strong></td></tr>
    <tbody>
        <?php foreach($equips['suggs'] as $sugg){?>
        <tr>
            <th></th>
            <td><?php echo $sugg->content;?></td>
            <td>----评论人：<?php echo $sugg->username;?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
