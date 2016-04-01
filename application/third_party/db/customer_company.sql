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

 Date: 03/31/2016 01:21:27 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `customer_company`
-- ----------------------------
DROP TABLE IF EXISTS `customer_company`;
CREATE TABLE `customer_company` (
  `id` varchar(13) NOT NULL,
  `name` varchar(40) NOT NULL,
  `link_name` varchar(10) DEFAULT NULL,
  `link_tell` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `link_join_id` varchar(150) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `link_sex` char(2) DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  `summary` text,
  `user_id` varchar(13) NOT NULL COMMENT '属于哪个用户的',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `customer_company`
-- ----------------------------
BEGIN;
INSERT INTO `customer_company` VALUES ('56f792d1a9ec8', 'zw苹果中国', '小张', '18477639891', '中关村东升科技园', '56f792f531d08', '激活', '女', '2016-03-27', '测试', '56f2bec0bd220'), ('56f7935f12526', 'zw共致开源', '小秦', '13600417482', '北京市海淀区上地软件园', '56f79320189d0', '激活', '男', '2016-03-27', '测试', '56f2bec0bd220'), ('56f7938ce6a0b', 'zw奇鱼科技', '小史', '13600417482', '北京市海淀区学院路', '56f792f531d08', '激活', '男', '2016-03-27', '测试', '56f2bec0bd220'), ('56f793eabd373', 'zws素果互动', '小刘', '222222', '北京市朝阳区', '56f794e6685fc', '激活', '男', '2016-03-27', 'test', 'hdu1243tg41q4'), ('56f794d081a8f', '测试公司二', '互动', '13600417482', '北京市海淀区学院路', '56f794e6685fc', '激活', '', '2016-03-27', 'sf', 'hdu1243tg41q4');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
