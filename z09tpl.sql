/*
Navicat MySQL Data Transfer

Source Server         : 001
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : z09tpl

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2017-02-13 09:38:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for buycar
-- ----------------------------
DROP TABLE IF EXISTS `buycar`;
CREATE TABLE `buycar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(10) NOT NULL COMMENT '商品id',
  `num` int(10) NOT NULL DEFAULT '1',
  `xiaoji` double(6,2) NOT NULL,
  `uid` int(10) NOT NULL COMMENT '用户id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buycar
-- ----------------------------
INSERT INTO `buycar` VALUES ('1', '22', '3', '9999.99', '20');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('1', '丝袜', '0', '0');
INSERT INTO `cate` VALUES ('2', 'cate1', '0', '0');
INSERT INTO `cate` VALUES ('3', 'cate2-0', '1', '0,1');
INSERT INTO `cate` VALUES ('4', 'cate2-1', '2', '0,2');
INSERT INTO `cate` VALUES ('5', 'cate3-0', '3', '0,1,3');
INSERT INTO `cate` VALUES ('6', 'cate3-1', '3', '0,1,3');
INSERT INTO `cate` VALUES ('7', 'cate3-2', '3', '0,1,3');
INSERT INTO `cate` VALUES ('8', 'cate3-3', '3', '0,1,3');
INSERT INTO `cate` VALUES ('9', 'cate3-4', '4', '0,1,4');
INSERT INTO `cate` VALUES ('10', 'cate3-5', '4', '0,1,4');
INSERT INTO `cate` VALUES ('11', 'cate3-6', '4', '0,1,4');
INSERT INTO `cate` VALUES ('12', 'cate3-7', '4', '0,1,4');

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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shops
-- ----------------------------
INSERT INTO `shops` VALUES ('22', '杜鹃', '<p>的撒<br/></p>', '9900.00', '1', '2017:02:07 22:03:31', '/Up/2017-02-07/5899cde6730cc.jpg', '北京', '5');
INSERT INTO `shops` VALUES ('23', '和美', '<p>嘿嘿和<br/></p>', '222.00', '34', '2017-02-07 21:53:18', '/Up/2017-02-07/5899cde6730cc.jpg', '南京', '6');
INSERT INTO `shops` VALUES ('21', '和黑', '<p>撒的<br/></p>', '22.00', '33', '2017-02-07 21:38:46', '/Up/2017-02-07/5899cde6730cc.jpg', '南京', '7');
INSERT INTO `shops` VALUES ('24', '和黑', '<p>撒的<br/></p>', '22.00', '33', '2017-02-07 21:38:46', '/Up/2017-02-07/5899cde6730cc.jpg', '南京', '8');
INSERT INTO `shops` VALUES ('25', '和黑', '<p>撒的<br/></p>', '22.00', '33', '2017-02-07 21:38:46', '/Up/2017-02-07/5899cde6730cc.jpg', '南京', '9');
INSERT INTO `shops` VALUES ('26', '和黑', '<p>撒的<br/></p>', '22.00', '33', '2017-02-07 21:38:46', '/Up/2017-02-07/5899cde6730cc.jpg', '南京', '10');
INSERT INTO `shops` VALUES ('27', '和黑', '<p>撒的<br/></p>', '22.00', '33', '2017-02-07 21:38:46', '/Up/2017-02-07/5899cde6730cc.jpg', '南京', '11');
INSERT INTO `shops` VALUES ('28', '和黑', '<p>撒的<br/></p>', '22.00', '33', '2017-02-07 21:38:46', '/Up/2017-02-07/5899cde6730cc.jpg', '南京', '12');
INSERT INTO `shops` VALUES ('29', '和黑', '<p>撒的<br/></p>', '22.00', '33', '2017-02-07 21:38:46', '/Up/2017-02-07/5899cde6730cc.jpg', '南京', '5');

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

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
INSERT INTO `user` VALUES ('20', 'lianggang', '1434665026@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '1b141a7223eb484062197b896b21f607');

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
