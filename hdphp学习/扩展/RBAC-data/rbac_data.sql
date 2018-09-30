/*

*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hd_access`
-- ----------------------------
DROP TABLE IF EXISTS `hd_access`;
CREATE TABLE `hd_access` (
  `rid` smallint(5) unsigned NOT NULL,
  `nid` smallint(5) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  KEY `gid` (`rid`),
  KEY `nid` (`nid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_access
-- ----------------------------
INSERT INTO `hd_access` VALUES ('1', '4', '0');
INSERT INTO `hd_access` VALUES ('1', '5', '0');
INSERT INTO `hd_access` VALUES ('1', '1', '0');
INSERT INTO `hd_access` VALUES ('2', '1', '0');
INSERT INTO `hd_access` VALUES ('2', '2', '0');
INSERT INTO `hd_access` VALUES ('2', '3', '0');
INSERT INTO `hd_access` VALUES ('2', '6', '0');

-- ----------------------------
-- Table structure for `hd_node`
-- ----------------------------
DROP TABLE IF EXISTS `hd_node`;
CREATE TABLE `hd_node` (
  `nid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `state` tinyint(1) DEFAULT '1',
  `des` char(255) DEFAULT NULL,
  `sort` smallint(5) unsigned NOT NULL DEFAULT '100',
  `pid` smallint(5) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`nid`),
  KEY `level` (`level`),
  KEY `state` (`state`),
  KEY `pid` (`pid`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_node
-- ----------------------------
INSERT INTO `hd_node` VALUES ('1', 'admin', null, '1', null, '100', '0', '1');
INSERT INTO `hd_node` VALUES ('2', 'cate', null, '1', null, '100', '1', '2');
INSERT INTO `hd_node` VALUES ('3', 'add', null, '1', null, '100', '2', '3');
INSERT INTO `hd_node` VALUES ('4', 'goods', null, '1', null, '100', '1', '2');
INSERT INTO `hd_node` VALUES ('5', 'add', null, '1', null, '100', '4', '3');
INSERT INTO `hd_node` VALUES ('6', 'index', null, '1', null, '100', '2', '3');

-- ----------------------------
-- Table structure for `hd_role`
-- ----------------------------
DROP TABLE IF EXISTS `hd_role`;
CREATE TABLE `hd_role` (
  `rid` smallint(5) NOT NULL AUTO_INCREMENT,
  `rname` char(60) DEFAULT NULL,
  `pid` smallint(5) DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rid`),
  KEY `gid` (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_role
-- ----------------------------
INSERT INTO `hd_role` VALUES ('1', 'goods', null, '1', null);
INSERT INTO `hd_role` VALUES ('2', 'cate', null, '1', null);

-- ----------------------------
-- Table structure for `hd_user`
-- ----------------------------
DROP TABLE IF EXISTS `hd_user`;
CREATE TABLE `hd_user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(30) DEFAULT NULL,
  `password` char(40) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `username` (`username`),
  KEY `password` (`password`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_user
-- ----------------------------
INSERT INTO `hd_user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `hd_user` VALUES ('2', 'cate', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `hd_user` VALUES ('3', 'goods', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for `hd_user_role`
-- ----------------------------
DROP TABLE IF EXISTS `hd_user_role`;
CREATE TABLE `hd_user_role` (
  `uid` int(10) unsigned NOT NULL,
  `rid` int(10) unsigned NOT NULL,
  KEY `uid` (`uid`),
  KEY `nid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hd_user_role
-- ----------------------------
INSERT INTO `hd_user_role` VALUES ('2', '2');
INSERT INTO `hd_user_role` VALUES ('3', '1');
