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
		<div id="sidebar">
            <?php echo anchor('member/repairs/list_page','待修设备列表'); ?>
            <br />
			<?php echo anchor('member/repairs/add_page','添加待修设备'); ?>
		</div>
	</div>
	<div id="footer"></div>
</div>
</body>
</html>
