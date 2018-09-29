/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50524
Source Host           : 127.0.0.1:3306
Source Database       : wenda

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2015-06-02 17:14:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `passwd` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录时间',
  `loginip` char(20) NOT NULL DEFAULT '',
  `lock` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '0为没有锁定，1为锁定',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='后台用户表';

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for `answer`
-- ----------------------------
DROP TABLE IF EXISTS `answer`;
CREATE TABLE `answer` (
  `anid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '回答内容',
  `time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回答时间',
  `accept` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0为没有被采纳，1为已经采纳',
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属用户ID',
  `asid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属问题ID',
  PRIMARY KEY (`anid`),
  KEY `fk_hd_answer_hd_user_idx` (`uid`),
  KEY `fk_hd_answer_hd_ask1_idx` (`asid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='回答表';

-- ----------------------------
-- Records of answer
-- ----------------------------
INSERT INTO `answer` VALUES ('1', '我是问题3的答案', '1433233601', '0', '1', '3');
INSERT INTO `answer` VALUES ('2', '我也是问题3的答案', '1433233601', '0', '2', '3');
INSERT INTO `answer` VALUES ('3', '我是问题2的答案', '1433233601', '0', '1', '2');
INSERT INTO `answer` VALUES ('4', '我是答案', '1333233601', '0', '1', '3');
INSERT INTO `answer` VALUES ('5', '我是答案too', '1333233601', '0', '1', '3');

-- ----------------------------
-- Table structure for `ask`
-- ----------------------------
DROP TABLE IF EXISTS `ask`;
CREATE TABLE `ask` (
  `asid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '提问内容',
  `time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '提问时间',
  `solve` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0为没有解决，1为已经解决',
  `answer` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回答数',
  `reward` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '悬赏金币',
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属用户ID',
  `cid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属分类ID',
  PRIMARY KEY (`asid`),
  KEY `fk_hd_ask_hd_user1_idx` (`uid`),
  KEY `fk_hd_ask_hd_category1_idx` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='提问表';

-- ----------------------------
-- Records of ask
-- ----------------------------
INSERT INTO `ask` VALUES ('1', 'php怎么样？好学吗？', '0', '0', '1', '3', '1', '15');
INSERT INTO `ask` VALUES ('2', 'mysql每天都是黑窗口是什么意思？', '0', '0', '0', '4', '2', '15');
INSERT INTO `ask` VALUES ('3', '手电筒到底是不是电器？', '0', '0', '0', '100', '3', '15');
INSERT INTO `ask` VALUES ('4', '贺雷雷是49期的班长吗？', '0', '1', '0', '0', '2', '4');
INSERT INTO `ask` VALUES ('5', '武迎收的师兄是无影手吗？', '0', '1', '0', '0', '2', '3');

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL DEFAULT '' COMMENT '分类名称',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父级ID',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=213 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '电脑/网络', '0');
INSERT INTO `category` VALUES ('2', '手机/数码', '0');
INSERT INTO `category` VALUES ('3', '生活', '0');
INSERT INTO `category` VALUES ('4', '游戏', '0');
INSERT INTO `category` VALUES ('5', '体育/运动', '0');
INSERT INTO `category` VALUES ('6', '娱乐明星', '0');
INSERT INTO `category` VALUES ('7', '休闲爱好', '0');
INSERT INTO `category` VALUES ('8', '文化/艺术', '0');
INSERT INTO `category` VALUES ('9', '社会民生', '0');
INSERT INTO `category` VALUES ('10', '教育/科学', '0');
INSERT INTO `category` VALUES ('11', '健康/医疗', '0');
INSERT INTO `category` VALUES ('12', '商业/理财', '0');
INSERT INTO `category` VALUES ('13', '情感/家庭', '0');
INSERT INTO `category` VALUES ('15', '电脑知识', '1');
INSERT INTO `category` VALUES ('16', '互联网', '1');
INSERT INTO `category` VALUES ('17', '操作系统', '1');
INSERT INTO `category` VALUES ('18', '软件', '1');
INSERT INTO `category` VALUES ('19', '硬件', '1');
INSERT INTO `category` VALUES ('20', '编程开发', '1');
INSERT INTO `category` VALUES ('21', '电脑安全', '1');
INSERT INTO `category` VALUES ('22', '资源分享', '1');
INSERT INTO `category` VALUES ('23', '笔记本电脑', '1');
INSERT INTO `category` VALUES ('24', '手机/通讯', '2');
INSERT INTO `category` VALUES ('25', '平板', '2');
INSERT INTO `category` VALUES ('26', 'MP3/MP4', '2');
INSERT INTO `category` VALUES ('27', '手机品牌', '2');
INSERT INTO `category` VALUES ('28', '其他数码', '2');
INSERT INTO `category` VALUES ('29', '手机系统', '2');
INSERT INTO `category` VALUES ('30', '照相机/摄像机', '2');
INSERT INTO `category` VALUES ('31', '数码品牌', '2');
INSERT INTO `category` VALUES ('32', '购物时尚', '3');
INSERT INTO `category` VALUES ('33', '美容塑身', '3');
INSERT INTO `category` VALUES ('34', '美食', '3');
INSERT INTO `category` VALUES ('35', '生活知识', '3');
INSERT INTO `category` VALUES ('36', '品牌服装', '3');
INSERT INTO `category` VALUES ('37', '出行旅游', '3');
INSERT INTO `category` VALUES ('38', '交通', '3');
INSERT INTO `category` VALUES ('39', '购车保养', '3');
INSERT INTO `category` VALUES ('40', '购房置业', '3');
INSERT INTO `category` VALUES ('41', '房屋装饰', '3');
INSERT INTO `category` VALUES ('42', '风水', '3');
INSERT INTO `category` VALUES ('43', '家电用品', '3');
INSERT INTO `category` VALUES ('44', '烹饪', '3');
INSERT INTO `category` VALUES ('45', '网游', '4');
INSERT INTO `category` VALUES ('46', '单机游戏', '4');
INSERT INTO `category` VALUES ('47', '网页游戏', '4');
INSERT INTO `category` VALUES ('48', '盛大游戏', '4');
INSERT INTO `category` VALUES ('49', '网易', '4');
INSERT INTO `category` VALUES ('50', '九城游戏', '4');
INSERT INTO `category` VALUES ('51', '腾讯游戏', '4');
INSERT INTO `category` VALUES ('52', '完美游戏', '4');
INSERT INTO `category` VALUES ('53', '久游游戏', '4');
INSERT INTO `category` VALUES ('54', '巨人游戏', '4');
INSERT INTO `category` VALUES ('55', '金山游戏', '4');
INSERT INTO `category` VALUES ('56', '网龙游戏', '4');
INSERT INTO `category` VALUES ('57', '电视游戏', '4');
INSERT INTO `category` VALUES ('58', '足球', '5');
INSERT INTO `category` VALUES ('59', '篮球', '5');
INSERT INTO `category` VALUES ('60', '体育明星', '5');
INSERT INTO `category` VALUES ('61', '综合赛事', '5');
INSERT INTO `category` VALUES ('62', '田径', '5');
INSERT INTO `category` VALUES ('63', '跳水游泳', '5');
INSERT INTO `category` VALUES ('64', '小球运动', '5');
INSERT INTO `category` VALUES ('65', '赛车赛事', '5');
INSERT INTO `category` VALUES ('66', '强身健体', '5');
INSERT INTO `category` VALUES ('67', '运动品牌', '5');
INSERT INTO `category` VALUES ('68', '电影电视', '6');
INSERT INTO `category` VALUES ('69', '明星', '6');
INSERT INTO `category` VALUES ('70', '音乐', '6');
INSERT INTO `category` VALUES ('71', '动漫', '6');
INSERT INTO `category` VALUES ('72', '星座', '6');
INSERT INTO `category` VALUES ('73', '摄影摄像', '7');
INSERT INTO `category` VALUES ('74', '收藏', '7');
INSERT INTO `category` VALUES ('75', '宠物', '7');
INSERT INTO `category` VALUES ('76', '脑筋急转弯', '7');
INSERT INTO `category` VALUES ('77', '谜语', '7');
INSERT INTO `category` VALUES ('78', '幽默搞笑', '7');
INSERT INTO `category` VALUES ('79', '起名', '7');
INSERT INTO `category` VALUES ('80', '园艺艺术', '7');
INSERT INTO `category` VALUES ('81', '花鸟鱼虫', '7');
INSERT INTO `category` VALUES ('82', '茶艺', '7');
INSERT INTO `category` VALUES ('83', '国内外文学', '8');
INSERT INTO `category` VALUES ('84', '美术', '8');
INSERT INTO `category` VALUES ('85', '舞蹈', '8');
INSERT INTO `category` VALUES ('86', '散文/小说', '8');
INSERT INTO `category` VALUES ('87', '图书音像', '8');
INSERT INTO `category` VALUES ('88', '器乐/声乐', '8');
INSERT INTO `category` VALUES ('89', '小品相声', '8');
INSERT INTO `category` VALUES ('90', '戏剧戏曲', '8');
INSERT INTO `category` VALUES ('91', '时事政治', '9');
INSERT INTO `category` VALUES ('92', '舆论', '9');
INSERT INTO `category` VALUES ('93', '就业/职场', '9');
INSERT INTO `category` VALUES ('94', '历史话题', '9');
INSERT INTO `category` VALUES ('95', '军事国防', '9');
INSERT INTO `category` VALUES ('96', '节日假期', '9');
INSERT INTO `category` VALUES ('97', '民族风情', '9');
INSERT INTO `category` VALUES ('98', '法律知识', '9');
INSERT INTO `category` VALUES ('99', '宗教', '9');
INSERT INTO `category` VALUES ('100', '礼仪', '9');
INSERT INTO `category` VALUES ('101', '学习辅助', '10');
INSERT INTO `category` VALUES ('102', '考研/考证', '10');
INSERT INTO `category` VALUES ('103', '外语', '10');
INSERT INTO `category` VALUES ('104', '菁菁校园', '10');
INSERT INTO `category` VALUES ('105', '人文学', '10');
INSERT INTO `category` VALUES ('106', '理工学', '10');
INSERT INTO `category` VALUES ('107', '公务员', '10');
INSERT INTO `category` VALUES ('108', '留学/出国', '10');
INSERT INTO `category` VALUES ('109', '健康知识', '11');
INSERT INTO `category` VALUES ('110', '孕育/家教', '11');
INSERT INTO `category` VALUES ('111', '内科', '11');
INSERT INTO `category` VALUES ('112', '心理健康', '11');
INSERT INTO `category` VALUES ('113', '外科', '11');
INSERT INTO `category` VALUES ('114', '妇产科', '11');
INSERT INTO `category` VALUES ('115', '儿科', '11');
INSERT INTO `category` VALUES ('116', '皮肤科', '11');
INSERT INTO `category` VALUES ('117', '五官科', '11');
INSERT INTO `category` VALUES ('118', '男科', '11');
INSERT INTO `category` VALUES ('119', '美容整形', '11');
INSERT INTO `category` VALUES ('120', '中医', '11');
INSERT INTO `category` VALUES ('121', '药品', '11');
INSERT INTO `category` VALUES ('122', '心血管科', '11');
INSERT INTO `category` VALUES ('123', '传染科', '11');
INSERT INTO `category` VALUES ('124', '其它疾病', '11');
INSERT INTO `category` VALUES ('125', '健康体检', '11');
INSERT INTO `category` VALUES ('126', '医院', '11');
INSERT INTO `category` VALUES ('127', '创业', '12');
INSERT INTO `category` VALUES ('128', '企业管理', '12');
INSERT INTO `category` VALUES ('129', '财务税务', '12');
INSERT INTO `category` VALUES ('130', '银行', '12');
INSERT INTO `category` VALUES ('131', '股票', '12');
INSERT INTO `category` VALUES ('132', '金融/期货', '12');
INSERT INTO `category` VALUES ('133', '基金债券', '12');
INSERT INTO `category` VALUES ('134', '保险', '12');
INSERT INTO `category` VALUES ('135', '贸易', '12');
INSERT INTO `category` VALUES ('136', '外贸', '12');
INSERT INTO `category` VALUES ('137', '商务文书', '12');
INSERT INTO `category` VALUES ('138', '国民经济', '12');
INSERT INTO `category` VALUES ('139', '个人理财', '12');
INSERT INTO `category` VALUES ('140', '恋爱', '13');
INSERT INTO `category` VALUES ('141', '朋友', '13');
INSERT INTO `category` VALUES ('142', '婚嫁', '13');
INSERT INTO `category` VALUES ('143', '两性', '13');
INSERT INTO `category` VALUES ('144', '家庭', '13');
INSERT INTO `category` VALUES ('145', '孩子教育', '13');
INSERT INTO `category` VALUES ('181', '电脑配置', '15');
INSERT INTO `category` VALUES ('182', '电脑日常维护', '15');
INSERT INTO `category` VALUES ('183', '上网问题', '16');
INSERT INTO `category` VALUES ('184', '新浪', '16');
INSERT INTO `category` VALUES ('185', '腾讯', '16');
INSERT INTO `category` VALUES ('186', 'Windows XP', '17');
INSERT INTO `category` VALUES ('187', 'windows 7', '17');
INSERT INTO `category` VALUES ('188', 'Windows Vista', '17');
INSERT INTO `category` VALUES ('189', 'Windows 8', '17');
INSERT INTO `category` VALUES ('190', '办公软件', '18');
INSERT INTO `category` VALUES ('191', '网络软件', '18');
INSERT INTO `category` VALUES ('192', '图像处理', '18');
INSERT INTO `category` VALUES ('193', '系统软件', '18');
INSERT INTO `category` VALUES ('194', '多媒体软件', '18');
INSERT INTO `category` VALUES ('195', '硬盘', '19');
INSERT INTO `category` VALUES ('196', '显示设备', '19');
INSERT INTO `category` VALUES ('197', 'CPU', '19');
INSERT INTO `category` VALUES ('198', '显卡', '19');
INSERT INTO `category` VALUES ('199', '内存', '19');
INSERT INTO `category` VALUES ('200', '主板', '19');
INSERT INTO `category` VALUES ('201', '键盘/鼠标', '19');
INSERT INTO `category` VALUES ('202', 'HTML', '20');
INSERT INTO `category` VALUES ('203', 'DIV+CSS', '20');
INSERT INTO `category` VALUES ('204', 'JavaScript', '20');
INSERT INTO `category` VALUES ('205', 'jQuery', '20');
INSERT INTO `category` VALUES ('206', 'PHP', '20');
INSERT INTO `category` VALUES ('207', 'MySQL', '20');
INSERT INTO `category` VALUES ('208', 'Linux', '20');
INSERT INTO `category` VALUES ('209', 'Objective-C', '20');
INSERT INTO `category` VALUES ('210', 'Java', '20');
INSERT INTO `category` VALUES ('211', 'C/C++', '20');
INSERT INTO `category` VALUES ('212', '网络防火墙', '1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `passwd` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `ask` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '提问数',
  `answer` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回答数',
  `accept` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '采纳数',
  `point` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '金币',
  `exp` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '经验',
  `restime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录时间',
  `loginip` char(20) NOT NULL DEFAULT '' COMMENT '登录IP',
  `lock` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0为没有锁定，1为锁定',
  `face` varchar(60) NOT NULL DEFAULT '' COMMENT '头像',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='前台用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0', '0', '0', '0', '0', '0', '0', '', '0', '');
INSERT INTO `user` VALUES ('2', 'user', '', '0', '0', '0', '0', '0', '0', '0', '', '0', '');
INSERT INTO `user` VALUES ('3', 'guest', '', '0', '0', '0', '0', '0', '0', '0', '', '0', '');
INSERT INTO `user` VALUES ('4', 'admin888', '7fef6171469e80d32c0559f88b377245', '0', '0', '0', '0', '0', '1433225111', '0', '', '0', '');
