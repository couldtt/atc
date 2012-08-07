<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>设备报修模块</title>
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/repairs.css" />
</head>
<body>
<div id="container">
	<div id="header"><h1>设备报修模块</h1></div>
	<div id="content">
		<div id="main">
        <?php echo validation_errors();?>
        <form action="<?php echo site_url("member/repairs/add");?>" method="POST">
				<p>
					<label for="equip_name">设&nbsp;备&nbsp;名&nbsp;</label>
					<input type="text" name="equip_name" />
				</p>
				<p>
					<label for="person">报&nbsp;修&nbsp;人&nbsp;</label>
					<input type="text" name="person" id="id_person" />
				</p>
				<p>
					<label for="reason" style="display:block; float:left;">报修原因</label>
					<textarea name="reason" id="id_reason" cols="30" rows="10"></textarea>
				</p>
				<p>
					<input type="submit" value="提交" />
				</p>
			</form>
		</div>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
