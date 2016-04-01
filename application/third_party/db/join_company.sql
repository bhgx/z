/*
 Navicat MySQL Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50625
 Source Host           : localhost
 Source Database       : z

 Target Server Type    : MySQL
 Target Server Version : 50625
 File Encoding         : utf-8

 Date: 03/31/2016 01:21:39 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `join_company`
-- ----------------------------
DROP TABLE IF EXISTS `join_company`;
CREATE TABLE `join_company` (
  `id` varchar(13) NOT NULL,
  `name` varchar(40) NOT NULL,
  `link_name` varchar(10) DEFAULT NULL,
  `link_tell` varchar(20) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `join_at` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `leave_at` date DEFAULT NULL,
  `summary` text,
  `user_id` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `join_company`
-- ----------------------------
BEGIN;
INSERT INTO `join_company` VALUES ('56f792f531d08', 'zw我的公司1', '小刘', '40081342', '北京市海淀区学院路', '2016-03-27', '在职', null, '测试公司1', '56f2bec0bd220'), ('56f79320189d0', 'zw的公司二', '林志玲', '13596783731', '朝阳西大望路', '2016-03-27', '在职', null, '测试公司', '56f2bec0bd220'), ('56f794e6685fc', '素果互动', '小刘', '13600417482', '北京市朝阳区', '2016-03-27', '在职', null, '', 'hdu1243tg41q4');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
