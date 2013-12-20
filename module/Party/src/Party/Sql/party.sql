/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2013-12-20 17:37:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for collect_info
-- ----------------------------
DROP TABLE IF EXISTS `collect_info`;
CREATE TABLE `collect_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_qq` varchar(15) DEFAULT NULL,
  `user_call` varchar(20) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_province` varchar(30) DEFAULT NULL,
  `user_city` varchar(20) DEFAULT NULL,
  `user_group` varchar(30) DEFAULT NULL COMMENT '群组',
  `freetime_begin` date DEFAULT NULL,
  `freetime_end` date DEFAULT NULL,
  `content` text,
  `submit_time` datetime DEFAULT NULL,
  `submit_ip` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of collect_info
-- ----------------------------
INSERT INTO `collect_info` VALUES ('1', '1111', 'eee', 'www', null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `qq_id` varchar(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `time_register` datetime DEFAULT NULL COMMENT '注册时间',
  `time_lastlogin` datetime DEFAULT NULL COMMENT '最后登录时间',
  `email` varchar(50) DEFAULT NULL,
  `status` int(2) DEFAULT NULL COMMENT '状态：0正常',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
