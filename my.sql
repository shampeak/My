-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2016-10-20 17:57:13
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
-- 表的结构 `gupiao_index`
--

CREATE TABLE `gupiao_index` (
  `id` int(11) NOT NULL,
  `code` varchar(16) DEFAULT NULL,
  `title` varchar(16) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `gpcode` varchar(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gupiao_index`
--

INSERT INTO `gupiao_index` (`id`, `code`, `title`, `active`, `gpcode`) VALUES
(1, '002011', '盾安', 1, NULL),
(2, '600157', '永泰', 1, NULL),
(3, '600777', '新潮', 1, NULL),
(4, '999999', '黄金', 1, '999999'),
(8, '213', '123', 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `gupiao_opt`
--

CREATE TABLE `gupiao_opt` (
  `optId` int(11) NOT NULL,
  `code` varchar(16) NOT NULL,
  `opt` varchar(16) NOT NULL,
  `num` varchar(11) NOT NULL,
  `price` varchar(16) NOT NULL,
  `type` varchar(16) NOT NULL,
  `createAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gupiao_opt`
--

INSERT INTO `gupiao_opt` (`optId`, `code`, `opt`, `num`, `price`, `type`, `createAt`) VALUES
(30, '600157', 'B', '2400', '4.28', 'ground', '2016-08-30 22:47:15'),
(20, '002011', 'B', '1000', '11.60', 'ground', '2016-08-30 22:39:30'),
(19, '002011', 'B', '900', '11.60', 'ground', '2016-08-30 22:39:16'),
(31, '600157', 'B', '2400', '4.10', 'ground', '2016-08-30 22:47:27'),
(25, '600777', 'B', '600', '16.67', 'ground', '2016-08-30 22:42:13'),
(26, '600777', 'B', '800', '17.06', 'ground', '2016-08-30 22:42:26'),
(27, '600777', 'B', '600', '16.74', 'ground', '2016-08-30 22:42:42'),
(28, '600777', 'B', '700', '16.10', 'ground', '2016-08-30 22:42:58'),
(34, '999999', 'B', '0.1', '284.52', '', '2016-08-30 23:00:42'),
(35, '999999', 'B', '0.2', '284.52', '', '2016-08-30 23:01:11'),
(36, '999999', 'B', '0.2', '284.52', '', '2016-08-30 23:01:28'),
(37, '999999', 'B', '0.2', '284.52', '', '2016-08-30 23:01:40'),
(60, '999999', 'S', '0.1', '287', '', '2016-09-06 06:43:34'),
(47, '002011', 'B', '500', '10.95', '', '2016-09-04 22:28:31'),
(38, '999999', 'B', '0.6', '282.20', '', '2016-08-30 23:35:17'),
(39, '999999', 'B', '0.5', '281.30', '', '2016-08-31 05:08:39'),
(44, '999999', 'S', '0.5', '282', '', '2016-09-02 04:00:43'),
(62, '600777', 'B', '300', '15.83', 'ground', '2016-09-06 17:35:11'),
(45, '999999', 'S', '0.6', '283', '', '2016-09-02 04:32:10'),
(59, '999999', 'S', '0.4', '286', '', '2016-09-06 04:25:55'),
(54, '999999', 'S', '0.2', '285', '', '2016-09-05 23:12:21'),
(49, '600157', 'B', '1400', '4.01', '', '2016-09-04 22:39:50'),
(53, '002011', 'S', '500', '11.13', '', '2016-09-05 21:57:24'),
(65, '999999', 'B', '0.1', '285.80', '', '2016-09-11 17:19:33'),
(63, '600157', 'S', '1400', '4.04', '', '2016-09-08 21:33:57'),
(64, '600777', 'B', '400', '15.32', 'ground', '2016-09-08 21:34:51'),
(66, '999999', 'B', '0.1', '285.30', '', '2016-09-11 17:49:50'),
(67, '999999', 'B', '0.1', '284.50', '', '2016-09-12 05:48:56'),
(69, '600777', 'S', '300', '14.86', '', '2016-09-12 17:42:42'),
(70, '600777', 'S', '400', '14.86', '', '2016-09-12 17:42:50'),
(72, '999999', 'B', '2', '281.13', '', '2016-09-16 05:40:55'),
(74, '999999', 'B', '0.5', '282.39', '', '2016-09-18 17:23:43'),
(79, '999999', 'S', '0.2', '286', '', '2016-09-22 04:22:24'),
(76, '999999', 'S', '2', '282.04', '', '2016-09-18 23:11:50'),
(77, '002011', 'B', '698', '10.67', 'ground', '2016-09-19 17:46:28'),
(78, '999999', 'S', '0.5', '283', '', '2016-09-20 23:37:21'),
(81, '999999', 'S', '0.1001', '286.50', '', '2016-09-23 02:19:34'),
(83, '600777', 'B', '400', '14.7', '', '2016-09-26 17:33:20'),
(84, '600777', 'B', '100', '14.7', '', '2016-09-26 17:33:45'),
(85, '999999', 'B', '0.3', '285.09', 'ground', '2016-09-27 06:09:50');

-- --------------------------------------------------------

--
-- 表的结构 `gupiao_optgroup`
--

CREATE TABLE `gupiao_optgroup` (
  `id` int(11) NOT NULL,
  `code` varchar(16) NOT NULL,
  `group` text,
  `createAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gupiao_optgroup`
--

INSERT INTO `gupiao_optgroup` (`id`, `code`, `group`, `createAt`) VALUES
(45, '999999', '["54","35"]', '2016-09-06 04:26:45'),
(27, '002011', '["53","47"]', '2016-09-05 21:57:27'),
(47, '999999', '["44","39"]', '2016-09-06 04:40:15'),
(48, '999999', '["45","38"]', '2016-09-06 04:40:19'),
(49, '999999', '["59","37","36"]', '2016-09-06 04:40:35'),
(50, '999999', '["60","34"]', '2016-09-06 06:43:49'),
(52, '600157', '["63","49"]', '2016-09-08 21:34:04'),
(60, '999999', '["76","72"]', '2016-09-18 23:12:17'),
(61, '999999', '["78","74"]', '2016-09-20 23:37:31'),
(63, '999999', '["79","67","66"]', '2016-09-22 04:23:03'),
(64, '999999', '["81","65"]', '2016-09-23 02:19:40');

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
(386, 'Xt', '添加', '修改', 'xt/html/add', 'glyphicon glyphicon-home', '384', 0, 8, 0),
(351, 'Config', '编辑', '编辑', 'config/html/edit', 'glyphicon glyphicon-home', '347', 1, 0, 0),
(306, 'Sw', '启航', '修改', 'sw/html/index', 'glyphicon glyphicon-home', '305', 0, 9, 0),
(305, 'Sw', '思维', '思维管理', 'sw/home/index', 'glyphicon glyphicon-home', '23', 0, 0, 0),
(378, 'Mysetup', '我的管理', '前端 : 设置', 'mysetup/home/index', 'glyphicon glyphicon-home', '0', 0, 0, 0),
(364, 'Setup', '单页内容', '修改', 'setup/html/dy', 'glyphicon glyphicon-home', '362', 0, 8, 0),
(23, 'Package', 'Package', '', 'Pm/home/index', '', '0', 0, 9, 0),
(365, 'Setup', '数据中心', '修改', 'setup/html/list', 'glyphicon glyphicon-home', '362', 0, 7, 0),
(167, 'Menu', '编辑', '编辑', 'menu/html/edit', 'glyphicon glyphicon-home', '164', 1, 30, 0),
(166, 'Menu', '添加', '添加', 'menu/html/add', 'glyphicon glyphicon-home', '164', 0, 20, 0),
(165, 'Menu', '列表', '列表', 'menu/html/list', 'glyphicon glyphicon-home', '164', 0, 90, 0),
(164, 'Menu', '菜单', '菜单', 'menu/html/index', 'glyphicon glyphicon-home', '23', 0, 0, 0),
(349, 'Config', '系统配置', '系统配置', 'config/html/list', 'glyphicon glyphicon-home', '347', 0, 81, 0),
(350, 'Config', '添加', '添加', 'config/html/add', 'glyphicon glyphicon-home', '347', 0, 7, 0),
(176, 'User', '修改', '修改', 'user/html/edit', 'glyphicon glyphicon-home', '173', 1, 0, 0),
(348, 'Config', '配置管理', '配置管理', 'config/html/man', 'glyphicon glyphicon-home', '347', 0, 9, 0),
(278, 'Wx', '基础设置', '修改', 'wx/html/setup', 'glyphicon glyphicon-home', '275', 0, 0, 0),
(277, 'Wx', '接口设置', '修改', 'wx/html/apisetup', 'glyphicon glyphicon-home', '275', 0, 0, 0),
(276, 'Wx', '列表', '用户列表', 'wx/html/list', 'glyphicon glyphicon-home', '275', 0, 30, 0),
(347, 'Config', '配置', '配置', 'config/html/index', 'glyphicon glyphicon-home', '23', 0, 0, 0),
(258, 'Queue', 'Stepone', 're', 'queue/html/timere', 'glyphicon glyphicon-home', '256', 0, 20, 0),
(259, 'Queue', 'Steptwo', 're', 'queue/html2/timere', 'glyphicon glyphicon-home', '256', 0, 20, 0),
(363, 'Setup', '首页管理', '修改', 'setup/html/edit', 'glyphicon glyphicon-home', '362', 0, 9, 0),
(175, 'User', '添加', '添加', 'user/html/add', 'glyphicon glyphicon-home', '173', 0, 0, 0),
(174, 'User', '列表', '用户列表', 'user/html/list', 'glyphicon glyphicon-home', '173', 0, 0, 0),
(251, 'Msource', 'SteptwoData', '设置', 'msource/html/steptwodata', 'glyphicon glyphicon-home', '247', 0, 0, 0),
(250, 'Msource', 'SteponeData', '设置', 'msource/html/steponedata', 'glyphicon glyphicon-home', '247', 0, 0, 0),
(257, 'Queue', '列表', '列表', 'queue/html/list', 'glyphicon glyphicon-home', '256', 0, 90, 0),
(222, 'Mclass', '列表', '列表', 'mclass/html/list', 'glyphicon glyphicon-home', '221', 0, 30, 0),
(223, 'Mclass', '设置', '设置', 'mclass/html/edit', 'glyphicon glyphicon-home', '221', 0, 0, 0),
(249, 'Msource', '设置', '设置', 'msource/html/edit', 'glyphicon glyphicon-home', '247', 0, 0, 0),
(248, 'Msource', '列表', '列表', 'msource/html/list', 'glyphicon glyphicon-home', '247', 0, 30, 0),
(379, 'Mysetup', '首页管理', '修改', 'mysetup/html/edit', 'glyphicon glyphicon-home', '378', 0, 9, 0),
(385, 'Xt', '列表', '修改', 'xt/html/index', 'glyphicon glyphicon-home', '384', 0, 9, 0),
(384, 'Xt', '习题', '思维管理', 'xt/home/index', 'glyphicon glyphicon-home', '23', 0, 0, 0),
(387, 'Xt', '添加文档习题', '修改', 'xt/html/addwd', 'glyphicon glyphicon-home', '384', 0, 8, 0),
(388, 'Xt', '修改', '', 'xt/html/edit', 'glyphicon glyphicon-home', '384', 1, 9, 0);

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
-- 表的结构 `sw`
--

CREATE TABLE `sw` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT '0',
  `rid` varchar(256) DEFAULT NULL,
  `type` varchar(64) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `final` tinyint(2) DEFAULT '0',
  `des` varchar(128) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `createAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(2) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sw`
--

INSERT INTO `sw` (`id`, `pid`, `rid`, `type`, `title`, `final`, `des`, `sort`, `createAt`, `active`) VALUES
(1, 0, NULL, 'Index', '启航', 0, '一切的起点', 0, '0000-00-00 00:00:00', 1),
(2, 1, NULL, NULL, '1', 0, '2', 3, '2016-09-29 10:06:25', 0),
(3, 0, NULL, NULL, '123', 1, '123', 123, '2016-09-29 10:06:59', 1),
(4, 0, NULL, NULL, '123', 1, '123', 123, '2016-09-29 10:07:32', 1),
(5, 0, NULL, NULL, '123', 1, '123', 123, '2016-09-29 10:07:35', 1),
(6, 0, NULL, NULL, '123', 1, '123', 123, '2016-09-29 10:08:27', 1),
(7, 0, NULL, NULL, '123', 1, '123', 123, '2016-09-29 10:08:41', 1);

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
(9, 'CONFIG_TYPE_LIST', 3, '配置类型列表', 9, '', '主要用于数据解析和页面表单的生成', 1378898976, 1379235348, 1, '0:数字\r\n1:字符\r\n2:文本\r\n3:数组\r\n4:枚举', 2),
(20, 'CONFIG_GROUP_LIST', 3, '配置分组', 9, '', '配置分组', 1379228036, 1384418383, 1, '1:基本\r\n3:用户\r\n4:系统\r\n5:站点\r\n9:基础', 4),
(67, 'INDEX_BG_COLOR', 3, '背景色', 3, '', '选择区域北京颜色', 0, 0, 1, 'bg-success:bg-success\r\nbg-info:bg-info\r\nbg-warning:bg-warning\r\nbg-danger:bg-danger', 0),
(66, 'DOCUMENT_ROOT_PATH', 1, '文档地址', 3, '', '文档系统的文档存放地址', 0, 0, 1, '../UserDocument/Store/', 0);

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

-- --------------------------------------------------------

--
-- 表的结构 `xt`
--

CREATE TABLE `xt` (
  `id` int(11) NOT NULL,
  `path` varchar(128) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `question` varchar(256) DEFAULT NULL,
  `type` varchar(32) DEFAULT NULL,
  `ansoption` varchar(256) DEFAULT NULL,
  `ans` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gupiao_index`
--
ALTER TABLE `gupiao_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gupiao_opt`
--
ALTER TABLE `gupiao_opt`
  ADD PRIMARY KEY (`optId`);

--
-- Indexes for table `gupiao_optgroup`
--
ALTER TABLE `gupiao_optgroup`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sw`
--
ALTER TABLE `sw`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `xt`
--
ALTER TABLE `xt`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `gupiao_index`
--
ALTER TABLE `gupiao_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `gupiao_opt`
--
ALTER TABLE `gupiao_opt`
  MODIFY `optId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- 使用表AUTO_INCREMENT `gupiao_optgroup`
--
ALTER TABLE `gupiao_optgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- 使用表AUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `menuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;
--
-- 使用表AUTO_INCREMENT `queue`
--
ALTER TABLE `queue`
  MODIFY `queueId` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `sw`
--
ALTER TABLE `sw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `system_config`
--
ALTER TABLE `system_config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '配置ID', AUTO_INCREMENT=68;
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
--
-- 使用表AUTO_INCREMENT `xt`
--
ALTER TABLE `xt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
