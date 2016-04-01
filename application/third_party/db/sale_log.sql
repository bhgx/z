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

 Date: 03/31/2016 01:21:48 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `sale_log`
-- ----------------------------
DROP TABLE IF EXISTS `sale_log`;
CREATE TABLE `sale_log` (
  `id` varchar(13) NOT NULL,
  `sale_date` date NOT NULL COMMENT '卖出时间',
  `goods_name` varchar(40) NOT NULL COMMENT '货物名称',
  `join_company_id` varchar(50) DEFAULT NULL COMMENT '货物所属公司id',
  `customer_company_id` varchar(50) DEFAULT NULL COMMENT '买货方公司id',
  `link_name` varchar(10) DEFAULT NULL COMMENT '买货方联系人',
  `link_tell` varchar(15) DEFAULT NULL COMMENT '买货方联系电话',
  `count` varchar(30) DEFAULT NULL COMMENT '卖出货物数量',
  `total_price` varchar(30) DEFAULT NULL COMMENT '总价',
  `address` varchar(50) DEFAULT NULL COMMENT '交易地址',
  `create_at` date DEFAULT NULL,
  `summary` text,
  `user_id` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
