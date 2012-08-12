<div class="content form_content" style="height: 170px;">
	<?php 
if (isset($msg)){
	echo $msg;
	echo "<br />";
	echo anchor('member/home','member home');
} else {
?>
	<h3>待论证仪器添加</h3>
	<form action="<?php echo site_url('member/votes/add');?>" method="POST">
		<table class="form_table">
		<tbody>
			<?php foreach($equips as $equip){
		if (!in_array($equip->id, $polls)){
	?>
	<tr>
		<td>
		<input type="checkbox" name="equip_poll[]" value="<?php echo $equip->id;?>" />
		<span><?php echo $equip->equip_name;?></span>
	    </td>
	</tr>
		
		
	<?php
	}
	?>
	<?php }?>
		<tr>
			<td>
				<input type="submit" value="submit" class="submit" />
			</td>
		</tr>
		</tbody>
		</table>
	</form>
<?php
}
?>
</div>