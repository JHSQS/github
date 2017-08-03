/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : duomi

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-05-31 13:12:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_delia
-- ----------------------------
DROP TABLE IF EXISTS `tp_delia`;
CREATE TABLE `tp_delia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(200) NOT NULL COMMENT '题目',
  `content` varchar(300) NOT NULL COMMENT '内容',
  `pic` varchar(100) NOT NULL COMMENT '图片',
  `lo_time` int(10) NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_delia
-- ----------------------------
INSERT INTO `tp_delia` VALUES ('1', '生命的美好', '生命美好生命美好生命美好生命美好生命美好生命美好生命美好生命美好生命美好生命美好生命美好生命美好生命美好生命美好生命美好', '/myApp/Public/Images/delia/conf1.jpg', '1463302270');
INSERT INTO `tp_delia` VALUES ('2', '美好', '美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好美好', '/myApp/Public/Images/delia/573839a195e4f.jpg', '1463302561');
INSERT INTO `tp_delia` VALUES ('3', '梦想', '梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想梦想', '/myApp/Public/Images/delia/573839603fe6e.png', '1463302496');

-- ----------------------------
-- Table structure for tp_friend
-- ----------------------------
DROP TABLE IF EXISTS `tp_friend`;
CREATE TABLE `tp_friend` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `fr_name` varchar(20) NOT NULL COMMENT '名字',
  `sex` tinyint(1) unsigned NOT NULL COMMENT '性别',
  `fr_age` int(10) unsigned NOT NULL COMMENT '年龄',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_friend
-- ----------------------------
INSERT INTO `tp_friend` VALUES ('7', '狮子狗', '1', '18');
INSERT INTO `tp_friend` VALUES ('8', '狮子', '0', '22');
INSERT INTO `tp_friend` VALUES ('9', '一点魔伤', '1', '22');

-- ----------------------------
-- Table structure for tp_mood
-- ----------------------------
DROP TABLE IF EXISTS `tp_mood`;
CREATE TABLE `tp_mood` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'mood_id',
  `username` varchar(20) NOT NULL COMMENT 'mood_用户名',
  `content` varchar(255) NOT NULL COMMENT 'mood_内容',
  `time` int(10) NOT NULL COMMENT 'mood_时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_mood
-- ----------------------------
INSERT INTO `tp_mood` VALUES ('2', '狮子', '你好！[抓狂]', '1460470683');
INSERT INTO `tp_mood` VALUES ('11', '李四', '人气人认为', '1460792188');
INSERT INTO `tp_mood` VALUES ('12', '让问问', '方式该输入[害羞]', '1463323796');

-- ----------------------------
-- Table structure for tp_music
-- ----------------------------
DROP TABLE IF EXISTS `tp_music`;
CREATE TABLE `tp_music` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '音乐id',
  `mus_name` varchar(30) NOT NULL COMMENT '歌名',
  `actor` varchar(20) NOT NULL COMMENT '演唱者',
  `mus_time` int(5) unsigned NOT NULL COMMENT '音乐时长',
  `address` varchar(100) NOT NULL COMMENT '音乐地址',
  `time` int(10) NOT NULL COMMENT '发布日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_music
-- ----------------------------
INSERT INTO `tp_music` VALUES ('1', '燕归巢', '许嵩', '0', '/myApp/raw/yanguichao.mp3', '1460519479');
INSERT INTO `tp_music` VALUES ('3', '演员', '薛之谦', '0', '/myApp/raw/yanyuan.mp3', '1460519500');
INSERT INTO `tp_music` VALUES ('4', '好久不见', '陈奕迅', '0', '/myApp/raw/haojiubujian.mp3', '1460624662');
INSERT INTO `tp_music` VALUES ('5', '你不知道的事', '王力宏', '0', '/myApp/raw/nibuzhidaodeshi.mp3', '1460624778');
INSERT INTO `tp_music` VALUES ('6', '唐人', '孙子涵', '0', '/myApp/raw/tangren.mp3', '1460624995');
INSERT INTO `tp_music` VALUES ('7', 'Mine mine', '周杰伦', '0', '/myApp/raw/Mine.mp3', '1460624888');

-- ----------------------------
-- Table structure for tp_ping
-- ----------------------------
DROP TABLE IF EXISTS `tp_ping`;
CREATE TABLE `tp_ping` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(20) NOT NULL COMMENT '名字',
  `content` varchar(260) NOT NULL COMMENT '内容',
  `ping_time` int(10) NOT NULL COMMENT '评论时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_ping
-- ----------------------------
INSERT INTO `tp_ping` VALUES ('1', '', '偶哈哈', '0');
INSERT INTO `tp_ping` VALUES ('2', '狮子狗', '哈哈哈哈哈', '1463048611');
INSERT INTO `tp_ping` VALUES ('3', '狮子狗', '好啊好啊', '1463048912');
INSERT INTO `tp_ping` VALUES ('4', '狮子狗', '你好', '1463048992');
INSERT INTO `tp_ping` VALUES ('5', '狮子狗', '嗯嗯嗯', '1463144691');

-- ----------------------------
-- Table structure for tp_root
-- ----------------------------
DROP TABLE IF EXISTS `tp_root`;
CREATE TABLE `tp_root` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `r_name` varchar(20) NOT NULL COMMENT '管理员名字',
  `r_password` varchar(40) NOT NULL COMMENT '密码',
  `r_login_time` int(10) NOT NULL COMMENT '登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_root
-- ----------------------------
INSERT INTO `tp_root` VALUES ('1', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '0');

-- ----------------------------
-- Table structure for tp_user
-- ----------------------------
DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '//ID',
  `username` varchar(30) NOT NULL COMMENT '//昵称',
  `password` varchar(40) NOT NULL COMMENT '//密码',
  `sex` tinyint(1) NOT NULL COMMENT '//性别',
  `face` varchar(50) NOT NULL COMMENT '//头像',
  `reg_time` int(10) DEFAULT NULL COMMENT '//注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_user
-- ----------------------------
INSERT INTO `tp_user` VALUES ('1', '狮子狗', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '/myApp/Public/Images/face/18.jpg', '1460518559');
INSERT INTO `tp_user` VALUES ('3', '李蛋', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '/myApp/Public/Images/face/19.jpg', '1460721017');
INSERT INTO `tp_user` VALUES ('4', '王五', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '/myApp/Public/Images/face/24.jpg', '1460721055');
INSERT INTO `tp_user` VALUES ('5', '卡特', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '/myApp/Public/Images/face/20.jpg', '1460721098');
INSERT INTO `tp_user` VALUES ('6', '陌陌', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '/myApp/Public/Images/face/23.jpg', '1460721145');
INSERT INTO `tp_user` VALUES ('7', '李四', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '/myApp/Public/Images/face/24.jpg', '1460791966');
INSERT INTO `tp_user` VALUES ('8', '人类', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '1', '/myApp/Public/Images/face/18.jpg', '1463039100');
INSERT INTO `tp_user` VALUES ('9', '狮子', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1', '/myApp/Public/Images/face/24.jpg', '1464248636');
