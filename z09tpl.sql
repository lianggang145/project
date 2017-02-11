/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : z09tpl

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2017-02-11 16:49:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cate
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pid` int(10) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('1', '丝袜', '0', '0');

-- ----------------------------
-- Table structure for link
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `http` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `phone` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('7', '搜狐', 'www.souhu.com', '/Public/admin/Link/2017-02-11/589e876f2d7f6.jpg', '2222222');
INSERT INTO `link` VALUES ('6', '谷歌', 'www.谷歌.com', '/Public/admin/Link/2017-02-11/589e83b04a582.jpg', '3333333');

-- ----------------------------
-- Table structure for pic
-- ----------------------------
DROP TABLE IF EXISTS `pic`;
CREATE TABLE `pic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pic
-- ----------------------------
INSERT INTO `pic` VALUES ('2', '/Public/admin/Pic/2017-02-10/589d1dc5dc297.jpg');
INSERT INTO `pic` VALUES ('6', '/Public/admin/Pic/2017-02-10/589d2c09584a3.jpg');
INSERT INTO `pic` VALUES ('4', '/Public/admin/Pic/2017-02-10/589d29cf37ab9.jpg');

-- ----------------------------
-- Table structure for shops
-- ----------------------------
DROP TABLE IF EXISTS `shops`;
CREATE TABLE `shops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `num` int(10) NOT NULL,
  `time` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shops
-- ----------------------------
INSERT INTO `shops` VALUES ('22', '杜鹃', '<p>的撒<br/></p>', '9900.00', '1', '2017:02:07 22:03:31', '/x09tpl/Public/Up/2017-02-07/5899cfd0000f4.jpg', '北京', '0');
INSERT INTO `shops` VALUES ('23', '和美', '<p>嘿嘿和<br/></p>', '222.00', '34', '2017-02-07 21:53:18', '/x09tpl/Public/Up/2017-02-07/5899d14eb2be7.jpg', '南京', '0');
INSERT INTO `shops` VALUES ('21', '和黑', '<p>撒的<br/></p>', '22.00', '33', '2017-02-07 21:38:46', '/x09tpl/Public/Up/2017-02-07/5899cde6730cc.jpg', '南京', '0');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('12', 'xiaozhu', '976542116@qq.com', '0cfdd31c298a677823b0eaf49f498954', '1', '8a9c2fc96522818969edc246420f1eab');
INSERT INTO `user` VALUES ('17', 'nanyee', '444444@qq.com', 'f673bd395c20fe36666a65566869c71d', '1', '85de7928dd6dfc19641baa3eeb0914f6');
INSERT INTO `user` VALUES ('9', 'aassss', '564250561@qq.com', '5c906a392560ba48dba72134f4f25302', '1', '8e4b6bc710289e00ee8e2087de6cd0b5');
INSERT INTO `user` VALUES ('13', 'xiaona', '222222@qq.com', '5c906a392560ba48dba72134f4f25302', '1', '0a02be36089cdddbd8a27145fb65df42');
INSERT INTO `user` VALUES ('14', 'xiaohei', '2222sd22@qq.com', '5c906a392560ba48dba72134f4f25302', '1', 'bcf7e07064ab937e6fb2486c51fc77f3');
INSERT INTO `user` VALUES ('15', 'aaaaaa', '9864322@qq.com', '30e908e0dfebe0c35fbeb67ce4b1e023', '1', '94dbc79e699da67e98a91012796e759e');
INSERT INTO `user` VALUES ('16', 'wwwwww', '99999@qq.com', '30e908e0dfebe0c35fbeb67ce4b1e023', '1', '247a4cc041308dc35e684d990fec2445');
INSERT INTO `user` VALUES ('18', 'nanyeye', '9222@qq.com', 'f673bd395c20fe36666a65566869c71d', '1', '32650f18069b9512999a58115688ebab');
INSERT INTO `user` VALUES ('19', 'nangege', '61111@qq.com', 'e3ceb5881a0a1fdaad01296d7554868d', '1', '22308d3a031f46f2ed7c187a38027587');

-- ----------------------------
-- Table structure for user_info
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` int(10) NOT NULL,
  `age` int(10) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_info
-- ----------------------------
INSERT INTO `user_info` VALUES ('15', '14', '朱胜楠', '0', '0', '/Public/Up/2017-02-10/589d085d2c438.jpg', '0', '');
INSERT INTO `user_info` VALUES ('16', '13', '王金花', '2', '28', '/Public/Up/2017-02-10/589d07aa791d4.jpg', '13837882008', '99999@qq.com');
