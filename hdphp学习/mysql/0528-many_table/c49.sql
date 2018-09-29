/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : c49

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2015-05-28 17:17:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ask`
-- ----------------------------
DROP TABLE IF EXISTS `ask`;
CREATE TABLE `ask` (
  `asid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` char(100) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `solve` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `answer` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `reward` smallint(5) unsigned NOT NULL DEFAULT '0',
  `click` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `cid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`asid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ask
-- ----------------------------
INSERT INTO `ask` VALUES ('1', '手电筒是电器吗？', '0', '0', '0', '0', '0', '1');
INSERT INTO `ask` VALUES ('2', '今天天气好晴朗', '0', '0', '0', '0', '0', '2');
INSERT INTO `ask` VALUES ('3', '处处好风光', '0', '0', '0', '0', '0', '2');
INSERT INTO `ask` VALUES ('4', 'php真好学啊', '0', '0', '0', '0', '0', '3');
INSERT INTO `ask` VALUES ('5', '一会儿好像要下雨', '0', '0', '0', '0', '0', '2');
INSERT INTO `ask` VALUES ('6', '每天3点一线', '0', '0', '0', '0', '0', '2');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` char(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '电器');
INSERT INTO `category` VALUES ('2', '生活');
INSERT INTO `category` VALUES ('3', 'php');
INSERT INTO `category` VALUES ('4', '游戏');
