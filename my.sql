-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2016-09-19 18:16:38
-- 服务器版本： 5.5.47
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my`
--

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE `menu` (
  `menuId` int(11) NOT NULL,
  `package` varchar(16) DEFAULT NULL,
  `title` varchar(32) DEFAULT NULL,
  `des` varchar(64) DEFAULT NULL,
  `ads` varchar(32) DEFAULT NULL,
  `icon` varchar(32) DEFAULT NULL,
  `parentId` varchar(11) NOT NULL DEFAULT '0',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  `sort` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否选中根据uri计算获取'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`menuId`, `package`, `title`, `des`, `ads`, `icon`, `parentId`, `hidden`, `sort`, `active`) VALUES
(23, 'Package', 'Package', '', 'Pm/home/index', '', '0', 0, 9, 0),
(167, 'Menu', '编辑', '编辑', 'menu/html/edit', 'glyphicon glyphicon-home', '164', 1, 30, 0),
(166, 'Menu', '添加', '添加', 'menu/html/add', 'glyphicon glyphicon-home', '164', 0, 20, 0),
(165, 'Menu', '列表', '列表', 'menu/html/list', 'glyphicon glyphicon-home', '164', 0, 90, 0),
(164, 'Menu', '菜单', '菜单', 'menu/html/index', 'glyphicon glyphicon-home', '23', 0, 0, 0),
(171, 'Config', '添加', '添加', 'config/html/add', 'glyphicon glyphicon-home', '168', 0, 0, 0),
(172, 'Config', '编辑', '编辑', 'config/html/edit', 'glyphicon glyphicon-home', '168', 1, 0, 0),
(176, 'User', '修改', '修改', 'user/html/edit', 'glyphicon glyphicon-home', '173', 1, 0, 0),
(170, 'Config', '系统配置', '系统配置', 'config/html/list', 'glyphicon glyphicon-home', '168', 0, 0, 0),
(169, 'Config', '配置管理', '配置管理', 'config/html/man', 'glyphicon glyphicon-home', '168', 0, 0, 0),
(215, 'Queue', '列表', '列表', 'queue/html/list', 'glyphicon glyphicon-home', '214', 0, 90, 0),
(216, 'Queue', 're', 're', 'queue/html/timere', 'glyphicon glyphicon-home', '214', 0, 20, 0),
(175, 'User', '添加', '添加', 'user/html/add', 'glyphicon glyphicon-home', '173', 0, 0, 0),
(174, 'User', '列表', '用户列表', 'user/html/list', 'glyphicon glyphicon-home', '173', 0, 0, 0),
(221, 'Mclass', 'M分类管理', 'M分类管理', 'mclass/html/index', 'glyphicon glyphicon-home', '23', 0, 0, 0),
(222, 'Mclass', '列表', '列表', 'mclass/html/list', 'glyphicon glyphicon-home', '221', 0, 30, 0),
(223, 'Mclass', '设置', '设置', 'mclass/html/edit', 'glyphicon glyphicon-home', '221', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `queue`
--

CREATE TABLE `queue` (
  `queueId` int(11) NOT NULL,
  `type` varchar(16) DEFAULT NULL,
  `ads` varchar(32) DEFAULT NULL,
  `params` varchar(128) DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  `description` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `system_config`
--

CREATE TABLE `system_config` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '配置ID',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '配置名称',
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '配置类型',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '配置说明',
  `group` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '配置分组',
  `extra` varchar(255) NOT NULL DEFAULT '' COMMENT '配置值',
  `remark` varchar(100) NOT NULL COMMENT '配置说明',
  `create_time` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `value` text NOT NULL COMMENT '配置值',
  `sort` smallint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='系统配置表';

--
-- 转存表中的数据 `system_config`
--

INSERT INTO `system_config` (`id`, `name`, `type`, `title`, `group`, `extra`, `remark`, `create_time`, `update_time`, `status`, `value`, `sort`) VALUES
(1, 'WEB_SITE_TITLE', 1, '网站标题', 1, '', '网站标题前台显示标题', 1378898976, 1430825115, 1, 'weiphp3.0', 0),
(2, 'WEB_SITE_DESCRIPTION', 2, '网站描述', 1, '', '网站搜索引擎描述', 1378898976, 1379235841, 1, 'weiphp是互联网+的IT综合解决方案', 1),
(3, 'WEB_SITE_KEYWORD', 2, '网站关键字', 1, '', '网站搜索引擎关键字', 1378898976, 1381390100, 1, 'weiphp,互联网+,微信开源开发框架', 8),
(4, 'WEB_SITE_CLOSE', 4, '关闭站点', 1, '0:关闭\r\n1:开启', '站点关闭后其他用户不能访问，管理员可以正常访问', 1378898976, 1406859591, 1, '1', 1),
(9, 'CONFIG_TYPE_LIST', 3, '配置类型列表', 4, '', '主要用于数据解析和页面表单的生成', 1378898976, 1379235348, 1, '0:数字\r\n1:字符\r\n2:文本\r\n3:数组\r\n4:枚举', 2),
(10, 'WEB_SITE_ICP', 1, '网站备案号', 1, '', '设置在网站底部显示的备案号，如“沪ICP备12007941号-2', 1378900335, 1379235859, 1, '', 9),
(11, 'DOCUMENT_POSITION', 3, '文档推荐位', 2, '', '文档推荐位，推荐到多个位置KEY值相加即可', 1379053380, 1379235329, 1, '1:列表页推荐\r\n2:频道页推荐\r\n4:网站首页推荐', 3),
(12, 'DOCUMENT_DISPLAY', 3, '文档可见性', 2, '', '文章可见性仅影响前台显示，后台不收影响', 1379056370, 1379235322, 1, '0:所有人可见\r\n1:仅注册会员可见\r\n2:仅管理员可见', 4),
(13, 'COLOR_STYLE', 4, '后台色系', 1, 'default_color:默认\r\nblue_color:紫罗兰', '后台颜色风格', 1379122533, 1379235904, 1, 'default_color', 10),
(20, 'CONFIG_GROUP_LIST', 3, '配置分组', 4, '', '配置分组', 1379228036, 1384418383, 1, '1:基本\r\n3:用户\r\n4:系统\r\n5:站点', 4),
(21, 'HOOKS_TYPE', 3, '钩子的类型', 4, '', '类型 1-用于扩展显示内容，2-用于扩展业务处理', 1379313397, 1379313407, 1, '1:视图\r\n2:控制器', 6),
(22, 'AUTH_CONFIG', 3, 'Auth配置', 4, '', '自定义Auth.class.php类配置', 1379409310, 1379409564, 1, 'AUTH_ON:1\r\nAUTH_TYPE:2', 8),
(23, 'OPEN_DRAFTBOX', 4, '是否开启草稿功能', 2, '0:关闭草稿功能\r\n1:开启草稿功能\r\n', '新增文章时的草稿功能配置', 1379484332, 1379484591, 1, '1', 1),
(24, 'DRAFT_AOTOSAVE_INTERVAL', 0, '自动保存草稿时间', 2, '', '自动保存草稿的时间间隔，单位：秒', 1379484574, 1386143323, 1, '60', 2),
(25, 'LIST_ROWS', 0, '后台每页记录数', 4, '', '后台数据每页显示记录数', 1379503896, 1391938052, 1, '20', 10),
(26, 'USER_ALLOW_REGISTER', 4, '是否允许用户注册', 3, '0:关闭注册\r\n1:允许注册', '是否开放用户注册', 1379504487, 1379504580, 1, '1', 0),
(27, 'CODEMIRROR_THEME', 4, '预览插件的CodeMirror主题', 4, '3024-day:3024 day\n3024-night:3024 night\nambiance:ambiance\nbase16-dark:base16 dark\nbase16-light:base16 light\nblackboard:blackboard\ncobalt:cobalt\neclipse:eclipse\nelegant:elegant\nerlang-dark:erlang-dark\nlesser-dark:lesser-dark\nmidnight:midnight', '详情见CodeMirror官网', 1379814385, 1384740813, 1, 'ambiance', 3),
(28, 'DATA_BACKUP_PATH', 1, '数据库备份根路径', 4, '', '路径必须以 / 结尾', 1381482411, 1381482411, 1, './Data/', 5),
(29, 'DATA_BACKUP_PART_SIZE', 0, '数据库备份卷大小', 4, '', '该值用于限制压缩后的分卷最大长度。单位：B；建议设置20M', 1381482488, 1381729564, 1, '20971520', 7),
(30, 'DATA_BACKUP_COMPRESS', 4, '数据库备份文件是否启用压缩', 4, '0:不压缩\r\n1:启用压缩', '压缩备份文件需要PHP环境支持gzopen,gzwrite函数', 1381713345, 1381729544, 1, '1', 9),
(31, 'DATA_BACKUP_COMPRESS_LEVEL', 4, '数据库备份文件压缩级别', 4, '1:普通\r\n4:一般\r\n9:最高', '数据库备份文件的压缩级别，该配置在开启压缩时生效', 1381713408, 1381713408, 1, '9', 10),
(32, 'DEVELOP_MODE', 4, '开启开发者模式', 4, '0:关闭\r\n1:开启', '是否开启开发者模式', 1383105995, 1440555973, 1, '0', 0),
(33, 'ALLOW_VISIT', 3, '不受限控制器方法', 0, '', '', 1386644047, 1386644741, 1, '0:article/draftbox\r\n1:article/mydocument\r\n2:Category/tree\r\n3:Index/verify\r\n4:file/upload\r\n5:file/download\r\n6:user/updatePassword\r\n7:user/updateNickname\r\n8:user/submitPassword\r\n9:user/submitNickname', 0),
(34, 'DENY_VISIT', 3, '超管专限控制器方法', 0, '', '仅超级管理员可访问的控制器方法', 1386644141, 1386644659, 1, '0:Addons/addhook\r\n1:Addons/edithook\r\n2:Addons/delhook\r\n3:Addons/updateHook\r\n4:Admin/getMenus\r\n5:Admin/recordList\r\n6:AuthManager/updateRules\r\n7:AuthManager/tree', 0),
(35, 'REPLY_LIST_ROWS', 0, '回复列表每页条数', 2, '', '', 1386645376, 1387178083, 1, '20', 0),
(36, 'ADMIN_ALLOW_IP', 2, '后台允许访问IP', 4, '', '多个用逗号分隔，如果不配置表示不限制IP访问', 1387165454, 1387165553, 1, '', 12),
(37, 'SHOW_PAGE_TRACE', 4, '是否显示页面Trace', 4, '0:关闭\r\n1:开启', '是否显示页面Trace信息', 1387165685, 1387165685, 1, '0', 1),
(38, 'WEB_SITE_VERIFY', 4, '登录验证码', 1, '0:关闭\r\n1:开启', '登录时是否需要验证码', 1378898976, 1406859544, 1, '1', 2),
(42, 'ACCESS', 2, '未登录时可访问的页面', 4, '', '不区分大小写', 1390656601, 1390664079, 1, 'Home/User/*\r\nHome/Index/*\r\nhome/weixin/*\r\nadmin/File/*\r\nhome/File/*\r\nhome/Forum/*\r\nHome/Material/detail', 0),
(44, 'DEFAULT_PUBLIC_GROUP_ID', 0, '公众号默认等级ID', 3, '', '前台新增加的公众号的默认等级，值为0表示不做权限控制，公众号拥有全部插件的权限', 1393759885, 1393759981, 1, '0', 2),
(45, 'SYSTEM_UPDATE_REMIND', 4, '系统升级提醒', 4, '0:关闭\r\n1:开启', '开启后官方有新升级信息会及时在后台的网站设置页面头部显示升级提醒', 1393764263, 1393764263, 1, '0', 5),
(46, 'SYSTEM_UPDATRE_VERSION', 0, '系统升级最新版本号', 4, '', '记录当前系统的版本号，这是与官方比较是否有升级包的唯一标识，不熟悉者只勿改变其数值', 1393764702, 1394337646, 1, '20150826', 0),
(47, 'FOLLOW_YOUKE_UID', 0, '粉丝游客ID', 0, '', '', 1398927704, 1398927704, 1, '-11878', 0),
(48, 'DEFAULT_PUBLIC', 0, '注册后默认可管理的公众号ID', 3, '', '可为空。配置用户注册后即可管理的公众号ID，多个时用英文逗号分割', 1398928794, 1398929088, 1, '', 3),
(49, 'DEFAULT_PUBLIC_CREATE_MAX_NUMB', 0, '默认用户最多可创建的公众号数', 3, '', '注册用户最多的创建数，也可以在用户管理里对每个用户设置不同的值', 1398949652, 1398950115, 1, '5', 4),
(50, 'COPYRIGHT', 1, '版权信息', 1, '', '', 1401018910, 1401018910, 1, '版本由圆梦云科技有限公司所有', 3),
(51, 'WEIPHP_STORE_LICENSE', 1, '应用商店授权许可证', 1, '', '要与 应用商店》网站信息 里的授权许可证保持一致', 1402972720, 1402977473, 1, '', 0),
(52, 'SYSTEM_LOGO', 1, '网站LOGO', 5, '', '填写LOGO的网址，为空时默认显示weiphp的logo', 1403566699, 1403566746, 1, '', 0),
(53, 'SYSTEM_CLOSE_REGISTER', 4, '前台注册开关', 5, '0:不关闭\r\n1:关闭', '关闭后在登录页面不再显示注册链接', 1403568006, 1403568006, 1, '0', 0),
(54, 'SYSTEM_CLOSE_ADMIN', 4, '后台管理开关', 5, '0:不关闭\r\n1:关闭', '关闭后在登录页面不再显示后台登录链接', 1403568006, 1403568006, 1, '0', 0),
(55, 'SYSTEM_CLOSE_WIKI', 4, '二次开发开关', 5, '0:不关闭\r\n1:关闭', '关闭后在登录页面不再显示二次开发链接', 1403568006, 1403568006, 1, '0', 0),
(56, 'SYSTEM_CLOSE_BBS', 4, '官方论坛开关', 5, '0:不关闭\r\n1:关闭', '关闭后在登录页面不再显示官方论坛链接', 1403568006, 1403568006, 1, '0', 0),
(57, 'LOGIN_BACKGROUP', 1, '登录界面背景图', 5, '', '请输入图片网址，为空时默认使用自带的背景图', 1403568006, 1403570059, 1, '', 0),
(60, 'TONGJI_CODE', 2, '第三方统计JS代码', 5, '', '', 1428634717, 1428634717, 1, '12', 0),
(61, 'SENSITIVE_WORDS', 1, '敏感词', 0, '', '当出现有敏感词的地方，会用*号代替, (多个敏感词用 , 隔开 )', 1433125977, 1435062628, 1, 'bitch,shit', 0),
(63, 'PUBLIC_BIND', 4, '公众号第三方平台', 5, '0:关闭\r\n1:开启', '申请审核通过微信开放平台里的公众号第三方平台账号后，就可以开启体验了', 1434542818, 1434542818, 1, '0', 0),
(64, 'COMPONENT_APPID', 1, '公众号开放平台的AppID', 5, '', '公众号第三方平台开启后必填的参数', 1434542891, 1434542975, 1, '', 0),
(65, 'COMPONENT_APPSECRET', 1, '公众号开放平台的AppSecret', 5, '', '公众号第三方平台开启后必填的参数', 1434542936, 1434542984, 1, '', 0),
(62, 'REG_AUDIT', 4, '注册审核', 3, '0:需要审核\r\n1:不需要审核', '', 1439811099, 1439811099, 1, '1', 1);

-- --------------------------------------------------------

--
-- 表的结构 `token`
--

CREATE TABLE `token` (
  `tokenId` int(11) NOT NULL,
  `userId` varchar(16) DEFAULT '',
  `accessToken` varchar(128) DEFAULT NULL,
  `type` varchar(8) NOT NULL,
  `createAt` int(11) NOT NULL DEFAULT '0',
  `ExpireIn` int(11) NOT NULL DEFAULT '3600'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `token`
--

INSERT INTO `token` (`tokenId`, `userId`, `accessToken`, `type`, `createAt`, `ExpireIn`) VALUES
(167, '58', 'dd605c4834c08c3f5d95130a66ef63ea', 'ios', 1473757930, 3600);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `groupId` int(11) NOT NULL DEFAULT '1',
  `orgId` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `createAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updateAt` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `des` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userId`, `groupId`, `orgId`, `login`, `password`, `createAt`, `updateAt`, `active`, `sort`, `des`) VALUES
(57, 1, 0, '18810487666', 'dsfsfdsfd', '2016-09-04 23:34:53', NULL, 1, 0, ''),
(53, 1, 0, '18810487699', 'desaadsa', '2016-09-04 22:44:42', NULL, 1, 0, ''),
(54, 1, 0, '18810487698', 'dsfdsfdsf', '2016-09-04 23:22:43', NULL, 0, 0, ''),
(52, 1, 0, '18810487653', 'eawfrwf', '2016-09-04 22:39:17', NULL, 0, 0, ''),
(51, 1, 0, '18810487619', 'dfasfsfdas', '2016-09-04 22:38:21', NULL, 0, 0, ''),
(49, 1, 0, '18810487612', 'dafdsfdsaf', '2016-09-04 22:19:16', NULL, 0, 0, ''),
(50, 1, 0, '18810487616', 'dfsdfsdf', '2016-09-04 22:25:50', NULL, 0, 0, ''),
(58, 21, 0, '18813163071', '1234567', '2016-09-05 23:28:47', NULL, 0, 0, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user_group`
--

CREATE TABLE `user_group` (
  `groupId` int(11) NOT NULL,
  `groupName` varchar(32) NOT NULL,
  `groupChr` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL DEFAULT '0',
  `des` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_group`
--

INSERT INTO `user_group` (`groupId`, `groupName`, `groupChr`, `active`, `sort`, `des`) VALUES
(1, '系统管理员', 'system', 1, 0, '测试'),
(11, '机构管理员', 'organization', 1, 0, '机构'),
(10, '科室管理员', 'department', 1, 0, '科室'),
(21, 'IOS1', 'IOS12', 1, 14, 'APP ios用户13'),
(2, '系统管理员2', 'system2', 1, 0, '对整个系统进行设置和配置'),
(20, 'Android', 'Android', 1, 0, 'Android 用户'),
(12, '医生', 'doctor', 0, 0, '医生用户');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuId`),
  ADD KEY `package` (`package`),
  ADD KEY `ads` (`ads`),
  ADD KEY `parendId` (`parentId`),
  ADD KEY `sort` (`sort`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`queueId`);

--
-- Indexes for table `system_config`
--
ALTER TABLE `system_config`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_name` (`name`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`tokenId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`groupId`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `menuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
--
-- 使用表AUTO_INCREMENT `queue`
--
ALTER TABLE `queue`
  MODIFY `queueId` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `system_config`
--
ALTER TABLE `system_config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '配置ID', AUTO_INCREMENT=66;
--
-- 使用表AUTO_INCREMENT `token`
--
ALTER TABLE `token`
  MODIFY `tokenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- 使用表AUTO_INCREMENT `user_group`
--
ALTER TABLE `user_group`
  MODIFY `groupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
