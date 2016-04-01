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

 Date: 03/31/2016 01:20:44 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` varchar(13) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(2) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL COMMENT '1代表正常，0代表冻结',
  `create_at` date NOT NULL,
  `nike_name` varchar(40) DEFAULT NULL,
  `summary` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `user`
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES ('56f2bec0bd220', 'zhongwang', 'd6ea5be923a281c1cd35e005175bc6e3', '1', '', '1', '2016-03-24', '钟望', '超级管理员\"\"'), ('56f7bb0e3825b', 'tom', '34b7da764b21d298ef307d04d8152dc5', '7', '', '1', '2016-03-27', 'test', 'test'), ('hdu1243tg41q4', 'zhongwansheng', '', '1', '/z/application/resource/app/images/user.png', '1', '2016-03-03', '钟万胜', '这是一个超级管理员\"\"\"\"\"');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
