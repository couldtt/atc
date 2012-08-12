<div class="content form_content">
	<?php echo validation_errors();?>
        <form action="<?php echo site_url("member/repairs/add");?>" method="POST">
			<table class="form_table">
				<col width="150px" />
				<col />
				<tr>
					<th><label for="equip_name">设&nbsp;备&nbsp;名&nbsp;</label></th>
					<td><input type="text" name="equip_name" /></td>
				</tr>
				<tr>
					<th><label for="person">报&nbsp;修&nbsp;人&nbsp;</label></th>
					<td><input type="text" name="person" id="id_person" /></td>
				</tr>
				<tr>
					<th><label for="reason">报修原因</label></th>
					<td><textarea name="reason" id="content" cols="30" rows="10"></textarea></td>
				</tr>
				<tr>
					<th></th>
					<td><input type="submit" value="提交" class="submit" style="width:40px; height:20px;"/></td>
				</tr>
			</table>
		</form>
</div>

				
				
				
				
				