/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100131
 Source Host           : localhost:3306
 Source Schema         : pw_20010357

 Target Server Type    : MySQL
 Target Server Version : 100131
 File Encoding         : 65001

 Date: 16/08/2022 10:43:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan`  (
  `nik` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dept` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES ('22011902', 'ZAKIAN MAULANA SYAIFFULOH', 'test@dwa.co.id', 'MIS', 1, '22011902.jpg');
INSERT INTO `karyawan` VALUES ('21102108', 'ARIEF NUR RAHMAN', 'test@dwa.co.id', 'MIS', 2, '21102108.jpg');
INSERT INTO `karyawan` VALUES ('20010357', 'NOVA UTAMI', 'nova.utami@dwa.co.id', 'MIS', 3, '20010357.jpg');
INSERT INTO `karyawan` VALUES ('test', 'test', 'test', 'tet', 4, 'test.jpg');
INSERT INTO `karyawan` VALUES ('20020357', 'dadan', 'JISFOISOIFJ', 'CDC', 5, 'TEST.jpg');
INSERT INTO `karyawan` VALUES ('fgfghgh', 'fhf', 'gfhtht', 'gfh', 6, 'dtfyhtdt');
INSERT INTO `karyawan` VALUES ('dfsgdf', 'dsfd', 'dff', 'dfs', 7, 'dsfs');
INSERT INTO `karyawan` VALUES ('dfesd', 'sdf', 'efe', 'efe', 8, 'ewfew');

SET FOREIGN_KEY_CHECKS = 1;
