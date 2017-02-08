/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : z09tpl

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2017-02-08 20:06:27
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('12', 'xiaozhu', '976542116@qq.com', '0cfdd31c298a677823b0eaf49f498954', '1', '8a9c2fc96522818969edc246420f1eab');
INSERT INTO `user` VALUES ('8', 'xioazhu', '15890956946@qq.com', '222222', '1', '7643f5d70853d02fe24ce82cafd55a2f');
INSERT INTO `user` VALUES ('9', 'aassss', '564250561@qq.com', '5c906a392560ba48dba72134f4f25302', '1', '8e4b6bc710289e00ee8e2087de6cd0b5');
INSERT INTO `user` VALUES ('13', 'xiaona', '222222@qq.com', '5c906a392560ba48dba72134f4f25302', '1', '0a02be36089cdddbd8a27145fb65df42');
INSERT INTO `user` VALUES ('14', 'xiaohei', '2222sd22@qq.com', '5c906a392560ba48dba72134f4f25302', '1', 'bcf7e07064ab937e6fb2486c51fc77f3');
