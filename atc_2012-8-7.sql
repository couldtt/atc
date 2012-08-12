-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.16 - Source distribution
-- Server OS:                    Linux
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-08-07 19:59:21
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for atc
CREATE DATABASE IF NOT EXISTS `atc` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `atc`;


-- Dumping structure for table atc.dili_admins
CREATE TABLE IF NOT EXISTS `dili_admins` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  KEY `group` (`role`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_admins: 2 rows
/*!40000 ALTER TABLE `dili_admins` DISABLE KEYS */;
INSERT INTO `dili_admins` (`uid`, `username`, `password`, `email`, `role`) VALUES
	(1, 'admin', 'aebcf178d597d93ff848fd2d6331d5e7', 'dili@cms.com', 1),
	(2, 'liming', 'bc6a4e700fca7eb9615d8fa1e111ffdf', 'dahuangfeng@163.com', 2);
/*!40000 ALTER TABLE `dili_admins` ENABLE KEYS */;


-- Dumping structure for table atc.dili_attachments
CREATE TABLE IF NOT EXISTS `dili_attachments` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` smallint(10) NOT NULL DEFAULT '0',
  `model` mediumint(10) DEFAULT '0',
  `from` tinyint(1) DEFAULT '0' COMMENT '0:content model,1:cate model',
  `content` int(10) DEFAULT '0',
  `name` varchar(30) DEFAULT NULL,
  `folder` varchar(15) DEFAULT NULL,
  `realname` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `image` tinyint(1) DEFAULT '0',
  `posttime` int(11) DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_attachments: 0 rows
/*!40000 ALTER TABLE `dili_attachments` DISABLE KEYS */;
/*!40000 ALTER TABLE `dili_attachments` ENABLE KEYS */;


-- Dumping structure for table atc.dili_backend_settings
CREATE TABLE IF NOT EXISTS `dili_backend_settings` (
  `backend_theme` varchar(15) DEFAULT NULL,
  `backend_lang` varchar(10) DEFAULT NULL,
  `backend_root_access` tinyint(1) unsigned DEFAULT '1',
  `backend_access_point` varchar(20) DEFAULT 'admin',
  `backend_title` varchar(100) DEFAULT 'DiliCMS后台管理',
  `backend_logo` varchar(100) DEFAULT 'images/logo.gif'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_backend_settings: 1 rows
/*!40000 ALTER TABLE `dili_backend_settings` DISABLE KEYS */;
INSERT INTO `dili_backend_settings` (`backend_theme`, `backend_lang`, `backend_root_access`, `backend_access_point`, `backend_title`, `backend_logo`) VALUES
	('default', 'zh-cn', 1, 'admin', '山东理工大学分析测试中心', 'images/logo.gif');
/*!40000 ALTER TABLE `dili_backend_settings` ENABLE KEYS */;


-- Dumping structure for table atc.dili_cate_fields
CREATE TABLE IF NOT EXISTS `dili_cate_fields` (
  `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(40) DEFAULT NULL,
  `model` smallint(10) unsigned DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `length` smallint(10) unsigned DEFAULT NULL,
  `values` tinytext,
  `width` smallint(10) DEFAULT NULL,
  `height` smallint(10) DEFAULT NULL,
  `rules` tinytext,
  `ruledescription` tinytext,
  `searchable` tinyint(1) unsigned DEFAULT NULL,
  `listable` tinyint(1) unsigned DEFAULT NULL,
  `order` int(5) unsigned DEFAULT NULL,
  `editable` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`model`),
  KEY `model` (`model`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_cate_fields: 1 rows
/*!40000 ALTER TABLE `dili_cate_fields` DISABLE KEYS */;
INSERT INTO `dili_cate_fields` (`id`, `name`, `description`, `model`, `type`, `length`, `values`, `width`, `height`, `rules`, `ruledescription`, `searchable`, `listable`, `order`, `editable`) VALUES
	(1, 'catname', '分类名称', 1, 'input', 50, '', 200, 20, 'required', '', 0, 1, 0, 1);
/*!40000 ALTER TABLE `dili_cate_fields` ENABLE KEYS */;


-- Dumping structure for table atc.dili_cate_models
CREATE TABLE IF NOT EXISTS `dili_cate_models` (
  `id` mediumint(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  `perpage` varchar(2) NOT NULL,
  `level` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `hasattach` tinyint(1) NOT NULL DEFAULT '0',
  `built_in` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_cate_models: 1 rows
/*!40000 ALTER TABLE `dili_cate_models` DISABLE KEYS */;
INSERT INTO `dili_cate_models` (`id`, `name`, `description`, `perpage`, `level`, `hasattach`, `built_in`) VALUES
	(1, 'art_cat', '文章分类模块', '15', 1, 0, 0);
/*!40000 ALTER TABLE `dili_cate_models` ENABLE KEYS */;


-- Dumping structure for table atc.dili_fieldtypes
CREATE TABLE IF NOT EXISTS `dili_fieldtypes` (
  `k` varchar(20) NOT NULL,
  `v` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_fieldtypes: 15 rows
/*!40000 ALTER TABLE `dili_fieldtypes` DISABLE KEYS */;
INSERT INTO `dili_fieldtypes` (`k`, `v`) VALUES
	('int', '整形(INT)'),
	('float', '浮点型(FLOAT)'),
	('input', '单行文本框(VARCHAR)'),
	('textarea', '文本区域(VARCHAR)'),
	('select', '下拉菜单(VARCHAR)'),
	('select_from_model', '下拉菜单(模型数据)(INT)'),
	('linked_menu', '联动下拉菜单(VARCHAR)'),
	('radio', '单选按钮(VARCHAR)'),
	('radio_from_model', '单选按钮(模型数据)(INT)'),
	('checkbox', '复选框(VARCHAR)'),
	('checkbox_from_model', '复选框(模型数据)(VARCHAR)'),
	('wysiwyg', '编辑器(TEXT)'),
	('wysiwyg_basic', '编辑器(简)(TEXT)'),
	('datetime', '日期时间(VARCHAR)'),
	('colorpicker', '颜色选择器(VARCHAR)');
/*!40000 ALTER TABLE `dili_fieldtypes` ENABLE KEYS */;


-- Dumping structure for table atc.dili_menus
CREATE TABLE IF NOT EXISTS `dili_menus` (
  `menu_id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_name` varchar(20) NOT NULL,
  `method_name` varchar(30) NOT NULL,
  `menu_name` varchar(20) NOT NULL,
  `menu_level` tinyint(2) unsigned DEFAULT '0',
  `menu_parent` tinyint(10) unsigned DEFAULT '0',
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_menus: 20 rows
/*!40000 ALTER TABLE `dili_menus` DISABLE KEYS */;
INSERT INTO `dili_menus` (`menu_id`, `class_name`, `method_name`, `menu_name`, `menu_level`, `menu_parent`) VALUES
	(1, 'system', 'home', '系统', 0, 0),
	(2, 'system', 'home', '后台首页', 1, 1),
	(3, 'system', 'home', '后台首页', 2, 2),
	(4, 'setting', 'site', '系统设置', 1, 1),
	(5, 'setting', 'site', '站点设置', 2, 4),
	(6, 'setting', 'backend', '后台设置', 2, 4),
	(7, 'system', 'password', '修改密码', 2, 4),
	(8, 'system', 'cache', '更新缓存', 2, 4),
	(9, 'model', 'view', '模型管理', 1, 1),
	(10, 'model', 'view', '内容模型管理', 2, 9),
	(11, 'category', 'view', '分类模型管理', 2, 9),
	(12, 'plugin', 'view', '插件管理', 1, 1),
	(13, 'plugin', 'view', '插件管理', 2, 12),
	(14, 'role', 'view', '权限管理', 1, 1),
	(15, 'role', 'view', '用户组管理', 2, 14),
	(16, 'user', 'view', '用户管理', 2, 14),
	(17, 'content', 'view', '内容管理', 0, 0),
	(18, 'content', 'view', '内容管理', 1, 17),
	(19, 'category_content', 'view', '分类管理', 1, 17),
	(20, 'module', 'run', '工具', 0, 0);
/*!40000 ALTER TABLE `dili_menus` ENABLE KEYS */;


-- Dumping structure for table atc.dili_models
CREATE TABLE IF NOT EXISTS `dili_models` (
  `id` smallint(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `perpage` varchar(2) NOT NULL DEFAULT '10',
  `hasattach` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `built_in` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_models: 4 rows
/*!40000 ALTER TABLE `dili_models` DISABLE KEYS */;
INSERT INTO `dili_models` (`id`, `name`, `description`, `perpage`, `hasattach`, `built_in`) VALUES
	(1, 'article', '文章管理模块', '20', 1, 0),
	(2, 'repairs', '设备报修模块', '20', 1, 0),
	(4, 'flinks', '友情链接模块', '20', 0, 0),
	(5, 'equips', '仪器设备模块', '20', 1, 0);
/*!40000 ALTER TABLE `dili_models` ENABLE KEYS */;


-- Dumping structure for table atc.dili_model_fields
CREATE TABLE IF NOT EXISTS `dili_model_fields` (
  `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  `model` smallint(10) unsigned NOT NULL DEFAULT '0',
  `type` varchar(20) DEFAULT NULL,
  `length` smallint(10) unsigned DEFAULT NULL,
  `values` tinytext NOT NULL,
  `width` smallint(10) unsigned NOT NULL,
  `height` smallint(10) unsigned NOT NULL,
  `rules` tinytext NOT NULL,
  `ruledescription` tinytext NOT NULL,
  `searchable` tinyint(1) unsigned NOT NULL,
  `listable` tinyint(1) unsigned NOT NULL,
  `order` int(5) unsigned DEFAULT NULL,
  `editable` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`model`),
  KEY `model` (`model`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_model_fields: 12 rows
/*!40000 ALTER TABLE `dili_model_fields` DISABLE KEYS */;
INSERT INTO `dili_model_fields` (`id`, `name`, `description`, `model`, `type`, `length`, `values`, `width`, `height`, `rules`, `ruledescription`, `searchable`, `listable`, `order`, `editable`) VALUES
	(1, 'classid', '文章分类', 1, 'select_from_model', 0, 'art_cat|catname', 400, 20, 'required', '', 0, 1, 2, 1),
	(2, 'content', '文章内容', 1, 'wysiwyg', 0, '', 600, 300, 'required', '', 0, 0, 3, 1),
	(3, 'title', '标题', 1, 'input', 120, '', 600, 20, 'required', '', 1, 1, 1, 1),
	(4, 'equip_name', '设备名称', 2, 'input', 0, '', 200, 20, 'required', '', 1, 1, 0, 1),
	(6, 'person', '报修人', 2, 'input', 0, '', 200, 20, '', '', 0, 1, 0, 1),
	(7, 'reason', '报修原因', 2, 'textarea', 0, '', 600, 60, 'required', '', 0, 1, 0, 1),
	(11, 'link_name', '链接名称', 4, 'input', 0, '', 200, 20, 'required', '', 0, 1, 0, 1),
	(9, 'status', '维修状态', 2, 'select', 0, '未维修|已维修', 200, 20, 'required', '', 1, 1, 0, 1),
	(12, 'link_url', '链接地址', 4, 'input', 0, '', 300, 20, 'required', '', 0, 1, 0, 1),
	(13, 'equip_name', '仪器名', 5, 'input', 0, '', 200, 20, 'required', '', 1, 1, 0, 1),
	(14, 'equip_price', '仪器价格', 5, 'input', 0, '', 200, 20, '', '', 1, 1, 0, 1),
	(15, 'equip_explain', '仪器说明', 5, 'wysiwyg_basic', 0, '', 200, 20, '', '', 0, 0, 0, 1);
/*!40000 ALTER TABLE `dili_model_fields` ENABLE KEYS */;


-- Dumping structure for table atc.dili_plugins
CREATE TABLE IF NOT EXISTS `dili_plugins` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `version` varchar(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `author` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL,
  `copyrights` varchar(100) NOT NULL,
  `access` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_plugins: 0 rows
/*!40000 ALTER TABLE `dili_plugins` DISABLE KEYS */;
/*!40000 ALTER TABLE `dili_plugins` ENABLE KEYS */;


-- Dumping structure for table atc.dili_rights
CREATE TABLE IF NOT EXISTS `dili_rights` (
  `right_id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `right_name` varchar(30) DEFAULT NULL,
  `right_class` varchar(30) DEFAULT NULL,
  `right_method` varchar(30) DEFAULT NULL,
  `right_detail` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`right_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_rights: 49 rows
/*!40000 ALTER TABLE `dili_rights` DISABLE KEYS */;
INSERT INTO `dili_rights` (`right_id`, `right_name`, `right_class`, `right_method`, `right_detail`) VALUES
	(1, '密码修改', 'system', 'password', NULL),
	(2, '更新缓存', 'system', 'cache', NULL),
	(3, ' 站点设置', 'setting', 'site', NULL),
	(4, '后台设置', 'setting', 'backend', NULL),
	(5, '插件管理[列表]', 'plugin', 'view', NULL),
	(6, '添加插件', 'plugin', 'add', NULL),
	(7, '修改插件', 'plugin', 'edit', NULL),
	(8, '卸载插件', 'plugin', 'del', NULL),
	(9, '导出插件', 'plugin', 'export', NULL),
	(10, '导入插件', 'plugin', 'import', NULL),
	(11, '激活插件', 'plugin', 'active', NULL),
	(12, '禁用插件', 'plugin', 'deactive', NULL),
	(13, '运行插件', 'module', 'run', NULL),
	(14, '内容模型管理[列表]', 'model', 'view', NULL),
	(15, '添加内容模型', 'model', 'add', NULL),
	(16, '修改内容模型', 'model', 'edit', NULL),
	(17, '删除内容模型', 'model', 'del', NULL),
	(18, '内容模型字段管理[列表]', 'model', 'fields', NULL),
	(19, '添加内容模型字段', 'model', 'add_filed', NULL),
	(20, '修改内容模型字段', 'model', 'edit_field', NULL),
	(21, '删除内容模型字段', 'model', 'del_field', NULL),
	(22, '分类模型管理[列表]', 'category', 'view', NULL),
	(23, '添加分类模型', 'category', 'add', NULL),
	(24, '修改分类模型', 'category', 'edit', NULL),
	(25, '删除分类模型', 'category', 'del', NULL),
	(26, '分类模型字段管理[列表]', 'category', 'fields', NULL),
	(27, '添加分类模型字段', 'category', 'add_filed', NULL),
	(28, '修改分类模型字段', 'category', 'edit_field', NULL),
	(29, '删除分类模型字段', 'category', 'del_field', NULL),
	(30, '内容管理[列表]', 'content', 'view', NULL),
	(31, '添加内容[表单]', 'content', 'form', 'add'),
	(32, '修改内容[表单]', 'content', 'form', 'edit'),
	(33, '添加内容[动作]', 'content', 'save', 'add'),
	(34, '修改内容[动作]', 'content', 'save', 'edit'),
	(35, '删除内容', 'content', 'del', NULL),
	(36, '分类管理[列表]', 'category_content', 'view', NULL),
	(37, '添加分类[表单]', 'category_content', 'form', 'add'),
	(38, '修改分类[表单]', 'category_content', 'form', 'edit'),
	(39, '添加分类[动作]', 'category_content', 'save', 'add'),
	(40, '修改分类[动作]', 'category_content', 'save', 'edit'),
	(41, '删除分类', 'category_content', 'del', NULL),
	(42, '用户组管理[列表]', 'role', 'view', NULL),
	(43, '添加用户组', 'role', 'add', NULL),
	(44, '修改用户组', 'role', 'edit', NULL),
	(45, '删除用户组', 'role', 'del', NULL),
	(46, '用户管理[列表]', 'user', 'view', NULL),
	(47, '添加用户', 'user', 'add', NULL),
	(48, '修改用户', 'user', 'edit', NULL),
	(49, '删除用户', 'user', 'del', NULL);
/*!40000 ALTER TABLE `dili_rights` ENABLE KEYS */;


-- Dumping structure for table atc.dili_roles
CREATE TABLE IF NOT EXISTS `dili_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `rights` varchar(255) NOT NULL,
  `models` varchar(255) NOT NULL,
  `category_models` varchar(255) NOT NULL,
  `plugins` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_roles: 2 rows
/*!40000 ALTER TABLE `dili_roles` DISABLE KEYS */;
INSERT INTO `dili_roles` (`id`, `name`, `rights`, `models`, `category_models`, `plugins`) VALUES
	(1, 'root', '', '', '', ''),
	(2, 'atc_persons', '1,2,3,30,31,32,33,34,35,36,37,38,39,40,41', 'article,repairs', 'art_cat', '0');
/*!40000 ALTER TABLE `dili_roles` ENABLE KEYS */;


-- Dumping structure for table atc.dili_sessions
CREATE TABLE IF NOT EXISTS `dili_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_sessions: 2 rows
/*!40000 ALTER TABLE `dili_sessions` DISABLE KEYS */;
INSERT INTO `dili_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('59eaf711673572b4fdb50a5f50ba6860', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.19 (K', 1342938987, ''),
	('c8e9cadebae9770cc2d28d8419c98306', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.5 (K', 1342941343, 'a:1:{s:3:"uid";s:1:"1";}');
/*!40000 ALTER TABLE `dili_sessions` ENABLE KEYS */;


-- Dumping structure for table atc.dili_site_settings
CREATE TABLE IF NOT EXISTS `dili_site_settings` (
  `site_name` varchar(50) DEFAULT NULL,
  `site_domain` varchar(50) DEFAULT NULL,
  `site_logo` varchar(50) DEFAULT NULL,
  `site_icp` varchar(50) DEFAULT NULL,
  `site_terms` text,
  `site_stats` varchar(200) DEFAULT NULL,
  `site_footer` varchar(500) DEFAULT NULL,
  `site_status` tinyint(1) DEFAULT '1',
  `site_close_reason` varchar(200) DEFAULT NULL,
  `site_keyword` varchar(200) DEFAULT NULL,
  `site_description` varchar(200) DEFAULT NULL,
  `site_theme` varchar(20) DEFAULT NULL,
  `attachment_dir` varchar(20) DEFAULT NULL,
  `attachment_type` varchar(50) DEFAULT NULL,
  `attachment_maxupload` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_site_settings: 1 rows
/*!40000 ALTER TABLE `dili_site_settings` DISABLE KEYS */;
INSERT INTO `dili_site_settings` (`site_name`, `site_domain`, `site_logo`, `site_icp`, `site_terms`, `site_stats`, `site_footer`, `site_status`, `site_close_reason`, `site_keyword`, `site_description`, `site_theme`, `attachment_dir`, `attachment_type`, `attachment_maxupload`) VALUES
	('山东理工大学分析测试中心', '', 'images/logo.gif', '', '', '', '', 1, '网站维护升级中......', '分析测试中心', '山东理工大学分析 测试中心', 'default', 'attachments', '*.jpg;*.gif;*.png', '2097152');
/*!40000 ALTER TABLE `dili_site_settings` ENABLE KEYS */;


-- Dumping structure for table atc.dili_u_c_art_cat
CREATE TABLE IF NOT EXISTS `dili_u_c_art_cat` (
  `classid` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(5) unsigned NOT NULL DEFAULT '0',
  `level` int(2) unsigned NOT NULL DEFAULT '1',
  `path` varchar(50) NOT NULL,
  `catname` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_u_c_art_cat: 3 rows
/*!40000 ALTER TABLE `dili_u_c_art_cat` DISABLE KEYS */;
INSERT INTO `dili_u_c_art_cat` (`classid`, `parentid`, `level`, `path`, `catname`) VALUES
	(1, 0, 1, '', '中心简介'),
	(2, 0, 1, '', '计量认证'),
	(3, 0, 1, '', '通知公告');
/*!40000 ALTER TABLE `dili_u_c_art_cat` ENABLE KEYS */;


-- Dumping structure for table atc.dili_u_m_article
CREATE TABLE IF NOT EXISTS `dili_u_m_article` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL DEFAULT '',
  `classid` int(10) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  `create_time` int(10) unsigned NOT NULL,
  `update_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_u_m_article: 6 rows
/*!40000 ALTER TABLE `dili_u_m_article` DISABLE KEYS */;
INSERT INTO `dili_u_m_article` (`id`, `title`, `classid`, `content`, `create_time`, `update_time`) VALUES
	(1, '我是一个特别长的标题', 2, '<ul style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px; ">在 2012年7月19日 上午11:04，Phenix Yang &lt;<a href="mailto:phenix.python@gmail.com" target="_blank" style="color: rgb(17, 85, 204); ">phenix.python@gmail.com&gt;写道：<br />&nbsp;<br />&gt; 其实也就是3个而已。。。。 T^T<br />&nbsp;<br />不少了～～ 我们老家的重工业企业 一年的工伤死亡指标也就是1-2个而已～ 您同事看到了都3位了～<br />&nbsp;<br />&nbsp;<br /></a><p>&nbsp;</p><!--<a--></ul><ul style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 13px; "><a href="mailto:phenix.python@gmail.com" target="_blank" style="color: rgb(17, 85, 204); ">Phenix Yang &lt;</a><a href="mailto:phenix.python@gmail.com" target="_blank" style="color: rgb(17, 85, 204); ">phenix.python@gmail.com&gt;&nbsp;Jul 19 11:11AM +0800 &nbsp;<br /><br />不是一个同事，是三个同事说过这样的～<br />&nbsp;<br />在 2012年7月19日 上午11:06，qihang zhang &lt;</a><a href="mailto:qihangzp@gmail.com" target="_blank" style="color: rgb(17, 85, 204); ">qihangzp@gmail.com&gt;写道：<br />&nbsp;<br />&nbsp;<br />--&nbsp;<br />*Phenix Yang*<br />*<br />*<br />Bazinga~ ◐▽◑<br /></a><p>&nbsp;</p><!--<a--><!--<a--></ul>', 1342837335, 1342839547),
	(2, '中心概况', 1, '<span style="font-family: \'Times New Roman\'; font-size: 14px; line-height: 25px; ">&nbsp; &nbsp; &nbsp; &nbsp; 分析测试中心目前已拥有5000余万元仪器设备，多为先进的、高精密的、跨学科的大型设备，部分重要仪器已实现24小时服务。主要面向学校物理、化工、材料、纳米、环境、生农医药等众多学科，已成为交大科学研究的重要支撑、学科交叉的重要平台、现代分析的重要基地。中心拥有五层实验大楼，面积约6500平方米，人员近30人。目前，中心能够从事材料微结构分析、有机和无机化合物的定性和定量分析、材料性能测定、计量检定、材料质量综合评定、环境质量检测和药物分析等工作。<img alt="大笑" src="/atc/admincp/default/js/xheditor/xheditor_emot/default/laugh.gif" /></span>', 1342838245, 1343983030),
	(3, 'iueit', 1, 'dsfasdfa<img alt="大笑" src="/atc/admincp/default/js/xheditor/xheditor_emot/default/laugh.gif" /><img alt="惊恐" src="/atc/admincp/default/js/xheditor/xheditor_emot/default/panic.gif" /><img alt="敲打" src="/atc/admincp/default/js/xheditor/xheditor_emot/default/knock.gif" />fasdf sadf asdf asdf asdf&nbsp;', 1342863464, 1342863464),
	(4, '下午4点开会', 3, '下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会下午4点开会<img alt="大笑" src="/atc/admincp/default/js/xheditor/xheditor_emot/default/laugh.gif" />', 1342873274, 1342873274),
	(5, '一条通知', 3, '大水法四谛法孙大圣大发生大发生大发生地方萨芬倒萨水电费撒旦发生的发&nbsp;', 1342873287, 1342873287),
	(6, '关于采购新设备的投票', 3, 'ads发放水电费isa定风翼外婆厄运忒王若平完全诶日欧玩儿票&nbsp;', 1342873301, 1342873330);
/*!40000 ALTER TABLE `dili_u_m_article` ENABLE KEYS */;


-- Dumping structure for table atc.dili_u_m_equips
CREATE TABLE IF NOT EXISTS `dili_u_m_equips` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `create_time` int(10) unsigned NOT NULL,
  `update_time` int(10) unsigned NOT NULL,
  `equip_name` varchar(100) NOT NULL DEFAULT '',
  `equip_price` varchar(100) NOT NULL DEFAULT '',
  `equip_explain` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_u_m_equips: ~3 rows (approximately)
/*!40000 ALTER TABLE `dili_u_m_equips` DISABLE KEYS */;
INSERT INTO `dili_u_m_equips` (`id`, `create_time`, `update_time`, `equip_name`, `equip_price`, `equip_explain`) VALUES
	(1, 1344068314, 1344068314, '红外仪', '1000', '没啥好说的，你们看着办吧～'),
	(2, 1344144031, 1344144031, '扫描探针显微镜', '10000', '<p>扫描探针显微镜是指一类通过微小探针在样品表面扫描，将探针与样品表面间的相互作用转换为表面形貌和特性图像的显微镜。它提供了表面的三维高空间分辨的图像。</p><p align="left">扫描探针显微镜(SPM)主要包括扫描隧道显微镜(STM)和原子力显微镜(AFM)两种功能。完整的扫描探针显微镜由控制系统和显微镜系统组成。</p><p align="left">扫描隧道显微镜的工作原理是利用电子隧道现象，将样品本身作为一具电极，另一个电极是一根非常尖锐的探针。把探针移近样品，并在两者之间加上电压，当探针和样品表面相距只有数十埃时，由于隧道效应在探针与样品表面之间就会产生隧穿电流，并保持不变。若表面有微小起伏，那怕只有原子大小的起伏，也将使穿电流发生成千上万倍的变化。这些信息输入电子计算机，经过处理即可在荧光屏上显示出一幅物体的三维图像。扫描隧道显微镜一般用于导体和半导体表面的测定。</p><p align="left">原子力显微镜主要包括接触模式、非接触模式和轻敲模式。一个对力非常敏感的微悬臂，其尖端有一个微小的探针，当探针轻微地接触、接近或轻敲样品表面时，由于探针尖端的原子与样品表面的原子之间产生极其微弱的相互作用力而使微悬臂弯曲，将微悬臂弯曲的形变信号转换成光电信号并进行放大，就可以得到原子之间力的微弱变化的信号。这些信息输入电子计算机，经过处理即可在荧光屏上显示出一幅物体的三维图像。</p><p align="left">Multimode NS3a具有扫描隧道显微镜模式，接触模式AFM，非接触模式AFM，轻敲模式AFM,相位成像模式AFM。</p>'),
	(3, 1344166595, 1344166595, '傅立叶变换红外光谱仪 ', '100000', '<p align="left">当分子受到红外光的辐射，产生振动能级的跃迁，在振动时伴有偶极矩改变者就吸收红外光子，形成红外吸收光谱。红外光谱属于分子光谱，是确定分子组成和结构的有力工具。根据未知物红外光谱中吸收峰的强度、位置和形状，可以确定该未知物分子中包含有哪些基团，从而推断该未知物的结构。傅立叶变换红外光谱法具有灵敏度高、波数准确、重复性好的优点，应用范围非常广泛，只要是能够吸收红外光的物质理论上都会得到一张相应的红外光谱图。</p><p align="left">整套仪器设备由红外主光学台(Nicolet 5700)、红外显微镜(Centaur<span style="font-family:Times New Roman;">μ</span>s)、智能Omnic采样器、智能漫反射和原位反应池附件等几部分组成，可以进行红外透射光谱、红外漫反射光谱、显微红外透射光谱和显微红外反射光谱的扫描。</p><p>红外显微镜作为红外光谱仪的重要附件之一，主要适用于各种固体粉末或可以研磨成粉末的固体样品、纤维样品、厚度小于50<span style="font-family:Times New Roman;">μ</span>m的薄膜样品、不规则聚合物或黑色聚合物等样品的透射或反射光谱分析。方法优点是测量灵敏度高、适于样品的微区分析，最小空间分辨率可达20<span style="font-family:Times New Roman;">μ</span>m，观察样品微区和红外谱图采集可同时进行、制样方法简便、可以进行无损检测。</p><p align="left">智能Omnic采样器主要适用于单纤维、漆片、纸及其污染物、玻璃混合物、O型胶圈、硬性高聚物、印刷电路板、硬性高聚物等样品的反射光谱分析。另外，加装液体池后可以非常方便的用于各种液体样品的测试。方法优点是无需样品制备，因而不会破坏样品形态，可以进行无损检测，测试过程简单快速。</p><p>智能漫反射附件主要适用于各种软性粉末及混合粉末、硬性粉末、硬性高聚物粉末、油漆及喷漆表面、药片或硬性高聚物样品的漫反射光谱分析。方法优点是不破坏样品形态，漫反射效率高，同时可以减少在样品表面产生镜面反射的可能性。与Si-Carb硅快速取样片结合 ，可以用于分析油漆、药片、硬性高聚物等样品表面组成。</p><p align="left">原位反应池结合外界高压高温高真空环境可以用于红外原位反应的监测分析，此功能尚在开发之中。</p>');
/*!40000 ALTER TABLE `dili_u_m_equips` ENABLE KEYS */;


-- Dumping structure for table atc.dili_u_m_flinks
CREATE TABLE IF NOT EXISTS `dili_u_m_flinks` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `create_time` int(10) unsigned NOT NULL,
  `update_time` int(10) unsigned NOT NULL,
  `link_name` varchar(100) NOT NULL DEFAULT '',
  `link_url` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_u_m_flinks: ~1 rows (approximately)
/*!40000 ALTER TABLE `dili_u_m_flinks` DISABLE KEYS */;
INSERT INTO `dili_u_m_flinks` (`id`, `create_time`, `update_time`, `link_name`, `link_url`) VALUES
	(1, 1343889093, 1343891116, '山东理工大学', 'http://www.sdut.edu.cn');
/*!40000 ALTER TABLE `dili_u_m_flinks` ENABLE KEYS */;


-- Dumping structure for table atc.dili_u_m_repairs
CREATE TABLE IF NOT EXISTS `dili_u_m_repairs` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `create_time` int(10) unsigned NOT NULL,
  `update_time` int(10) unsigned NOT NULL,
  `equip_name` varchar(100) NOT NULL DEFAULT '',
  `person` varchar(100) NOT NULL DEFAULT '',
  `reason` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_u_m_repairs: 1 rows
/*!40000 ALTER TABLE `dili_u_m_repairs` DISABLE KEYS */;
INSERT INTO `dili_u_m_repairs` (`id`, `create_time`, `update_time`, `equip_name`, `person`, `reason`, `status`) VALUES
	(1, 2012, 1344334255, '红外仪', '小白', '灯坏了', '未维修');
/*!40000 ALTER TABLE `dili_u_m_repairs` ENABLE KEYS */;


-- Dumping structure for table atc.dili_u_m_suggestions
CREATE TABLE IF NOT EXISTS `dili_u_m_suggestions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `equip_id` int(10) unsigned NOT NULL DEFAULT '0',
  `content` tinytext NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_u_m_suggestions: ~2 rows (approximately)
/*!40000 ALTER TABLE `dili_u_m_suggestions` DISABLE KEYS */;
INSERT INTO `dili_u_m_suggestions` (`id`, `equip_id`, `content`, `user_id`) VALUES
	(1, 1, '这个设备太贵了点吧～～～', 2),
	(2, 1, '啥玩意啊，不要买', 1);
/*!40000 ALTER TABLE `dili_u_m_suggestions` ENABLE KEYS */;


-- Dumping structure for table atc.dili_u_m_votes
CREATE TABLE IF NOT EXISTS `dili_u_m_votes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `equip_id` int(10) unsigned NOT NULL DEFAULT '0',
  `votes` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `equip_name_to_id` (`equip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_u_m_votes: ~2 rows (approximately)
/*!40000 ALTER TABLE `dili_u_m_votes` DISABLE KEYS */;
INSERT INTO `dili_u_m_votes` (`id`, `equip_id`, `votes`) VALUES
	(1, 2, 21),
	(2, 1, 22);
/*!40000 ALTER TABLE `dili_u_m_votes` ENABLE KEYS */;


-- Dumping structure for table atc.dili_validations
CREATE TABLE IF NOT EXISTS `dili_validations` (
  `k` varchar(20) DEFAULT NULL,
  `v` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table atc.dili_validations: 2 rows
/*!40000 ALTER TABLE `dili_validations` DISABLE KEYS */;
INSERT INTO `dili_validations` (`k`, `v`) VALUES
	('required', '必填'),
	('valid_email', 'E-mail格式');
/*!40000 ALTER TABLE `dili_validations` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
