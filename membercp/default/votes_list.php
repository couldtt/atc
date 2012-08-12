<table class="list_table">
	<capation><h3>大型仪器设备论证结果</h3></capation>
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
			<td><?php echo anchor("v_detail/$equip->id","$equip->equip_name");?></td>
			<td><?php echo $equip->equip_price;?></td>
			<td><?php echo $equip->votes;?></td>
		</tr>
        <?php } ?>
	</tbody>
</table>