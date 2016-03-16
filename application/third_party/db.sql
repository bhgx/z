
--创建数据库

CREATE DATABASE IF EXISTS z DROP DATABASE z DEFAULT CHARSET utf8 COLLATE utf8_general_ci;

-- 创建user表
CREATE TABLE `user` (
  `id` smallint(6) NOT NULL auto_increment,
  `username` smallint(10) NOT NULL,
  `password` smallint(32) NOT NULL,
  `role` varchar(2) collate utf8_bin NOT NULL,
  `nick_name` varchar(32) collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=27 ;

INSERT INTO `user` VALUES (1,'admin','123456','1','张三');
INSERT INTO `user` VALUES (2,'user','123456','2','李四');