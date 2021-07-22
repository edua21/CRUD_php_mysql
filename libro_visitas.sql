/*
 Navicat Premium Data Transfer

 Source Server         : baseDatos
 Source Server Type    : MySQL
 Source Server Version : 80020
 Source Host           : localhost:3306
 Source Schema         : libro_visitas

 Target Server Type    : MySQL
 Target Server Version : 80020
 File Encoding         : 65001

 Date: 02/09/2020 18:49:43
*/

CREATE DATABASE libro_visitas;
USE libro_visitas;

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for libros
-- ----------------------------
DROP TABLE IF EXISTS `libros`;
CREATE TABLE `libros`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
