/*
 Navicat Premium Data Transfer

 Source Server         : mac-localhost
 Source Server Type    : MySQL
 Source Server Version : 50615
 Source Host           : localhost
 Source Database       : protest

 Target Server Type    : MySQL
 Target Server Version : 50615
 File Encoding         : utf-8

 Date: 07/07/2015 15:57:35 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `bank`
-- ----------------------------
DROP TABLE IF EXISTS `bank`;
CREATE TABLE `bank` (
  `bid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL DEFAULT '',
  `money` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bank`
-- ----------------------------
BEGIN;
INSERT INTO `bank` VALUES ('1', '黄信强', '500.00'), ('2', '马震宇', '1500.00');
COMMIT;

-- ----------------------------
--  View structure for `bankview`
-- ----------------------------
DROP VIEW IF EXISTS `bankview`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bankview` AS select `bank`.`money` AS `money` from `bank`;

SET FOREIGN_KEY_CHECKS = 1;
