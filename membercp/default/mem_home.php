<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo setting('backend_title'); ?></title>
<base href="<?php echo base_url().'admincp/'.setting('backend_theme').'/'; ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>membercp/default/images/admin.css" />
<script language="javascript" src="js/jquery.js"></script> <script language="javascript" src="js/admin.js"></script>
</head>
<body>
<div class="container">
	<div id="header">
		<div class="logo">
			<img src="<?php echo setting('backend_logo');  ?>" />
		</div>
		<div id="menu">
		<!--	<ul name="menu">
                <?php //$this->acl->show_top_menus(); ?>
                <ul name="menu">
                    <li class="first selected"><?php echo anchor('member/home','管理首页'); ?></li>
                </ul>
            </ul>
        -->
		</div>
		<p>
        	<a href="<?php echo site_url('member/login/quit'); ?>">退出管理</a>
            <a href="<?php echo base_url(); ?>" target='_blank'>站点首页</a>
            <span>您好 <label class='bold'><?php echo $this->_admin->username; ?></label>，
        </p>
	</div>

	<div id="info_bar">
    <span class="nav_sec">
        <?php //$this->plugin_manager->trigger_navigation(); ?>
	</span></div>
	<div id="admin_left">
		<ul class="submenu">
            <?php //$this->acl->show_left_menus(); ?>
            <li>
            	<span>仪器论证管理</span>
            	<ul name="menu">
            		<li><a href="<?php echo site_url("member/votes");?>">论证结果</a></li>
            		<li><a href="<?php echo site_url("v_add");?>">增加待论设备</a></li>
            		<li><a href="<?php echo site_url("v_vote");?>">仪器论证</a></li>
            	</ul>
            </li>
            <li>
                <span>设备报修管理</span>
                <ul name="menu">
                    <li><a href="<?php echo site_url("member/repairs/list_page");?>">报修列表</a></li>
                    <li><a href="<?php echo site_url("member/repairs/add_page");?>">添加待修设备</a></li>
                </ul>
            </li>
            <li>
                <span>仪器设备管理</span>
                <ul>
                    <li><?php echo anchor('member/equips/add_page','添加设备');?> </li>
                </ul>
            </li>
        </ul>
	</div>
	<div id="admin_right">
    	<?php if($this->uri->rsegment(1) != 'module'): ?>
    	<?php $this->load->view(isset($tpl) && $tpl ? $tpl : 'sys_default'); ?>
        <?php else: ?>
        <?php if(!isset($msg)){echo $content;}else{$this->load->view($tpl);} ?>
        <?php endif; ?>
	</div>
	<div id="separator"></div>
</div>
<script type='text/javascript'>
	//隔行换色
	$(".list_table tr::nth-child(even)").addClass('even');
	$(".list_table tr").hover(
		function () {
			$(this).addClass("sel");
		},
		function () {
			$(this).removeClass("sel");
		}
	);
</script>
</body>
</html>
