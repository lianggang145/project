/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : z09tpl

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2017-02-11 11:47:10
*/

SET FOREIGN_KEY_CHECKS=0;

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
