/*
Navicat MySQL Data Transfer

Source Server         : text
Source Server Version : 50726
Source Host           : localhost:3309
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-04-15 19:34:31
*/
CREATE DATABASE IF NOT EXISTS `shop`;
use shop;
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('znjy', '1310179240', '1310179240@qq.com');
