/*
Navicat MySQL Data Transfer

Source Server         : 123.57.220.98
Source Server Version : 50620
Source Host           : 123.57.220.98:3306
Source Database       : rental

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-12-05 09:57:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for re_tool
-- ----------------------------
DROP TABLE IF EXISTS `re_tool`;
CREATE TABLE `re_tool` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '工具名称',
  `img` text NOT NULL,
  `info` text NOT NULL COMMENT '工具介绍',
  `price` decimal(10,2) NOT NULL COMMENT '工具价值',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of re_tool
-- ----------------------------
INSERT INTO `re_tool` VALUES ('1', '活口扳手', 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTRmNGUxOTFkZjYgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNGY0ZTE5MWRmNiI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTE1NjI1IiB5PSIxMDUuMSI+MjQyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==', '', '62.50');
INSERT INTO `re_tool` VALUES ('2', '截管器', '', '', '34.00');
INSERT INTO `re_tool` VALUES ('3', '截管器', '', '', '34.00');
INSERT INTO `re_tool` VALUES ('4', '截管器', '', '', '34.00');
INSERT INTO `re_tool` VALUES ('5', '截管器', '', '', '34.00');
INSERT INTO `re_tool` VALUES ('6', '截管器', '', '', '34.00');
INSERT INTO `re_tool` VALUES ('7', '截管器', '', '', '34.00');
INSERT INTO `re_tool` VALUES ('8', '截管器', '', '', '34.00');
INSERT INTO `re_tool` VALUES ('9', '截管器', '', '', '34.00');

-- ----------------------------
-- Table structure for re_user
-- ----------------------------
DROP TABLE IF EXISTS `re_user`;
CREATE TABLE `re_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of re_user
-- ----------------------------
