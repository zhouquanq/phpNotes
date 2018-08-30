/*
Navicat MySQL Data Transfer

Source Server         : wamp3
Source Server Version : 50709
Source Host           : 127.0.0.1:3306
Source Database       : bbs

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2018-08-30 10:03:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL DEFAULT '',
  `content` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', '测试1', '123');
INSERT INTO `message` VALUES ('2', '测试2', '234');
INSERT INTO `message` VALUES ('3', '测试3', '345');
