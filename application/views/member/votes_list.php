<h4>大型仪器设备论证结果</h4>
<table>
	<thead>
		<th>ID</th>
		<th>设备名</th>
		<th>设备价格</th>
		<th>得票数</th>
	</thead>
	<tbody>
    <?php foreach($equips as $equip){ ?>
		<tr>
			<td><?php echo $equip->id;?></td>
			<td><?php echo $equip->equip_name;?></td>
			<td><?php echo $equip->equip_price;?></td>
			<td><?php echo $equip->votes;?></td>
		</tr>
        <?php } ?>
	</tbody>
</table>
