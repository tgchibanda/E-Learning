/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : mind

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-02-14 14:15:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `answers`
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `option` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT 'Wrong',
  `box` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES ('1', '1', 'A', 'Nm<sup>2</sup>', 'Wrong', null);
INSERT INTO `answers` VALUES ('2', '1', 'B', 'Pascal (Pa)', 'Wrong', null);
INSERT INTO `answers` VALUES ('3', '1', 'C', 'Nm<sup>2</sup> and Pascal (Pa)', 'Correct', null);
INSERT INTO `answers` VALUES ('4', '1', 'D', 'm<sup>2</sup>', 'Wrong', null);
INSERT INTO `answers` VALUES ('5', '2', 'A', 'To lift heavy loads.', 'Correct', null);
INSERT INTO `answers` VALUES ('6', '2', 'B', 'To drop heavy loads.', 'Wrong', null);
INSERT INTO `answers` VALUES ('7', '2', 'C', 'To move light weights.', 'Wrong', null);
INSERT INTO `answers` VALUES ('8', '2', 'D', 'To crush cars.', 'Wrong', null);
INSERT INTO `answers` VALUES ('9', '3', 'A', 'In a continuous liquid at equilibrium, the thrust applied at any point is transmitted equally to other parts of the liquid.', 'Wrong', null);
INSERT INTO `answers` VALUES ('10', '3', 'B', 'In a continuous liquid at equilibrium, the pressure applied at any point is transmitted unequally to other parts of the liquid.', 'Wrong', null);
INSERT INTO `answers` VALUES ('11', '3', 'C', 'In a continuous liquid at equilibrium, the pressure applied at any point is transmitted equally to other parts of the liquid.', 'Correct', null);
INSERT INTO `answers` VALUES ('12', '3', 'D', 'In a solid at equilibrium, the pressure applied at any point is transmitted equally to other parts of the solid.', 'Wrong', null);
INSERT INTO `answers` VALUES ('13', '4', 'A', 'Vacuum cleaner.', 'Wrong', null);
INSERT INTO `answers` VALUES ('14', '4', 'B', 'Car lifts and jacks.', 'Wrong', null);
INSERT INTO `answers` VALUES ('15', '4', 'C', 'Dentist\'s chair.', 'Wrong', null);
INSERT INTO `answers` VALUES ('16', '4', 'D', 'Both B and C', 'Correct', null);
INSERT INTO `answers` VALUES ('17', '5', 'A', '1, 2, 3, 4', 'Wrong', null);
INSERT INTO `answers` VALUES ('18', '5', 'B', '11, 17, 23 and 29', 'Correct', null);
INSERT INTO `answers` VALUES ('25', '6', 'A', '1', 'Wrong', 'field_2');
INSERT INTO `answers` VALUES ('26', '6', 'B', '2', 'Correct', 'field_2');
INSERT INTO `answers` VALUES ('27', '6', 'C', '3', 'Wrong', 'field_2');
INSERT INTO `answers` VALUES ('28', '6', 'D', '4', 'Wrong', 'field_2');
INSERT INTO `answers` VALUES ('29', '6', 'A', '2', 'Wrong', 'field_3');
INSERT INTO `answers` VALUES ('30', '6', 'B', '3', 'Wrong', 'field_3');
INSERT INTO `answers` VALUES ('31', '6', 'C', '5', 'Correct', 'field_3');
INSERT INTO `answers` VALUES ('32', '6', 'A', '3', 'Correct', 'field_5');
INSERT INTO `answers` VALUES ('33', '6', 'B', '5', 'Wrong', 'field_5');
INSERT INTO `answers` VALUES ('34', '6', 'C', '6', 'Wrong', 'field_5');
INSERT INTO `answers` VALUES ('35', '6', 'D', '7', 'Wrong', 'field_5');
INSERT INTO `answers` VALUES ('36', '6', 'A', '6', 'Correct', 'field_6');
INSERT INTO `answers` VALUES ('37', '6', 'B', '5', 'Wrong', 'field_6');
INSERT INTO `answers` VALUES ('38', '6', 'C', '67', 'Wrong', 'field_6');
INSERT INTO `answers` VALUES ('39', '6', 'D', '7', 'Wrong', 'field_6');

-- ----------------------------
-- Table structure for `questions`
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `answered` int(255) DEFAULT '0',
  `topic` varchar(255) DEFAULT NULL,
  `shape_link` varchar(255) DEFAULT '0',
  `shape` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `chapter` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('1', 'What is the SI unit for pressure?', '0', 'Hydraulics - Question 1', '0', null, 'Physics', 'General');
INSERT INTO `questions` VALUES ('2', 'What is hydraulic lifts used for?', '0', 'Hydraulics - Question 2', '0', null, 'Physics', 'General');
INSERT INTO `questions` VALUES ('3', 'Pascal\'s law states ...', '0', 'Hydraulics - Question 3', '0', null, 'Physics', 'General');
INSERT INTO `questions` VALUES ('4', 'Examples of hydraulic lifts are ...', '0', 'Hydraulics - Question 4', '0', null, 'Physics', 'General');
INSERT INTO `questions` VALUES ('5', 'What are the first four terms when you Add 6 to T<sub>1</sub> = 5', '0', 'Multiplication', '0', null, 'Maths', 'Patterns');
INSERT INTO `questions` VALUES ('6', 'Fill the table with correct values where there is a ?', '0', 'Multiplication', '3', null, 'Maths', 'Patterns');

-- ----------------------------
-- Table structure for `submited`
-- ----------------------------
DROP TABLE IF EXISTS `submited`;
CREATE TABLE `submited` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `validity` varchar(15) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of submited
-- ----------------------------
INSERT INTO `submited` VALUES ('1', '6', 'B', '', '', null);
INSERT INTO `submited` VALUES ('2', '6', 'A', '140218082603', '', null);
INSERT INTO `submited` VALUES ('3', '6', 'A', '140218082935', 'Wrong', null);
INSERT INTO `submited` VALUES ('4', '6', 'A', '140218103304', 'Wrong', null);
INSERT INTO `submited` VALUES ('5', '6', 'A', '140218103349', 'Wrong', null);
INSERT INTO `submited` VALUES ('6', '6', 'A', '140218103516', 'Wrong', 'dateStamp()');
INSERT INTO `submited` VALUES ('7', '6', 'A', '140218103907', 'Wrong', 'd');
INSERT INTO `submited` VALUES ('8', '6', 'B', '140218110439', 'Wrong', null);
INSERT INTO `submited` VALUES ('9', '6', 'A', '140218111102', 'Wrong', null);
INSERT INTO `submited` VALUES ('10', '6', 'B', '140218111254', 'Wrong', null);
INSERT INTO `submited` VALUES ('11', '6', 'A', '140218111412', 'Wrong', null);
INSERT INTO `submited` VALUES ('12', '6', 'B', '140218111412', 'Wrong', null);
INSERT INTO `submited` VALUES ('13', '6', 'C', '140218111412', 'Wrong', null);
INSERT INTO `submited` VALUES ('14', '6', 'B', '140218111455', 'Wrong', null);
INSERT INTO `submited` VALUES ('15', '6', 'C', '140218111455', 'Correct', null);
INSERT INTO `submited` VALUES ('16', '6', 'A', '140218111645', 'Wrong', null);
INSERT INTO `submited` VALUES ('17', '6', 'C', '140218111645', 'Correct', null);
INSERT INTO `submited` VALUES ('18', '6', 'B', '140218111645', 'Correct', null);
INSERT INTO `submited` VALUES ('19', '6', 'A', '140218112301', 'Wrong', null);
INSERT INTO `submited` VALUES ('20', '6', 'B', '140218112301', 'Wrong', null);
INSERT INTO `submited` VALUES ('21', '6', 'C', '140218112301', 'Wrong', null);
INSERT INTO `submited` VALUES ('22', '6', 'D', '140218112301', 'Wrong', null);
INSERT INTO `submited` VALUES ('23', '6', 'A', '140218112348', 'Correct', null);
INSERT INTO `submited` VALUES ('24', '6', 'A', '140218114104', 'Correct', null);
INSERT INTO `submited` VALUES ('25', '6', 'B', '140218114104', 'Wrong', null);
INSERT INTO `submited` VALUES ('26', '6', 'A', '140218114104', 'Correct', null);
INSERT INTO `submited` VALUES ('27', '6', 'B', '140218114104', 'Wrong', null);
INSERT INTO `submited` VALUES ('28', '6', 'B', '140218114104', 'Correct', null);
INSERT INTO `submited` VALUES ('29', '6', 'B', '140218122406', 'Wrong', null);
INSERT INTO `submited` VALUES ('30', '6', 'B', '140218122406', 'Wrong', null);
INSERT INTO `submited` VALUES ('31', '6', 'C', '140218122406', 'Correct', null);
INSERT INTO `submited` VALUES ('32', '6', 'C', '140218122406', 'Wrong', null);
INSERT INTO `submited` VALUES ('33', '6', 'D', '140218122406', 'Wrong', null);
INSERT INTO `submited` VALUES ('34', '6', 'A', '140218122406', 'Correct', null);
INSERT INTO `submited` VALUES ('35', '6', 'C', '140218122406', 'Correct', null);
INSERT INTO `submited` VALUES ('36', '6', 'B', '140218123020', 'Correct', null);
INSERT INTO `submited` VALUES ('37', '6', 'A', '140218123020', 'Wrong', null);
INSERT INTO `submited` VALUES ('38', '6', 'A', '140218123127', 'Wrong', null);
INSERT INTO `submited` VALUES ('39', '6', 'A', '140218123127', 'Wrong', null);
INSERT INTO `submited` VALUES ('40', '6', 'A', '140218123127', 'Correct', null);
INSERT INTO `submited` VALUES ('41', '6', 'A', '140218123127', 'Correct', null);
INSERT INTO `submited` VALUES ('42', '6', 'A', '140218123328', 'Wrong', null);
INSERT INTO `submited` VALUES ('43', '6', 'A', '140218123453', 'Wrong', null);
INSERT INTO `submited` VALUES ('44', '6', 'A', '140218123453', 'Wrong', null);
INSERT INTO `submited` VALUES ('45', '6', 'A', '140218123453', 'Correct', null);
INSERT INTO `submited` VALUES ('46', '6', 'B', '140218123453', 'Correct', null);
INSERT INTO `submited` VALUES ('47', '6', 'A', '140218011237', 'Wrong', null);
INSERT INTO `submited` VALUES ('48', '6', 'B', '140218011237', 'Correct', null);
INSERT INTO `submited` VALUES ('49', '6', 'A', '140218011342', 'Wrong', null);
INSERT INTO `submited` VALUES ('50', '6', 'A', '140218011342', 'Wrong', null);
INSERT INTO `submited` VALUES ('51', '6', 'A', '140218011440', 'Wrong', null);
INSERT INTO `submited` VALUES ('52', '6', 'B', '140218011556', 'Correct', null);
INSERT INTO `submited` VALUES ('53', '6', 'B', '140218011556', 'Wrong', null);
INSERT INTO `submited` VALUES ('54', '6', 'B', '140218011851', 'Correct', null);
INSERT INTO `submited` VALUES ('55', '6', 'A', '140218012118', 'Wrong', null);
INSERT INTO `submited` VALUES ('56', '6', 'B', '140218012118', 'Correct', null);
INSERT INTO `submited` VALUES ('57', '6', 'B', '140218012336', 'Correct', null);
INSERT INTO `submited` VALUES ('58', '6', 'A', '140218012336', 'Wrong', null);
INSERT INTO `submited` VALUES ('59', '6', 'B', '140218012336', 'Wrong', null);
INSERT INTO `submited` VALUES ('60', '6', 'A', '140218012919', 'Wrong', null);
INSERT INTO `submited` VALUES ('61', '6', 'A', '140218013104', 'Correct', null);
INSERT INTO `submited` VALUES ('62', '6', 'A', '140218013209', 'Correct', null);
INSERT INTO `submited` VALUES ('63', '6', 'A', '140218013235', 'Correct', null);
INSERT INTO `submited` VALUES ('64', '6', 'A', '140218014239', 'Correct', null);
INSERT INTO `submited` VALUES ('65', '6', 'A', '140218014256', 'Wrong', null);
INSERT INTO `submited` VALUES ('66', '6', 'A', '140218014256', 'Wrong', null);
INSERT INTO `submited` VALUES ('67', '6', 'A', '140218014256', 'Correct', null);
INSERT INTO `submited` VALUES ('68', '6', 'A', '140218014256', 'Correct', null);
INSERT INTO `submited` VALUES ('69', '5', 'B', '140218014356', '', null);
INSERT INTO `submited` VALUES ('70', '6', 'A', '140218014356', 'Wrong', null);
INSERT INTO `submited` VALUES ('71', '6', 'A', '140218014356', 'Wrong', null);
INSERT INTO `submited` VALUES ('72', '6', 'A', '140218014356', 'Correct', null);
INSERT INTO `submited` VALUES ('73', '6', 'A', '140218014356', 'Correct', null);
INSERT INTO `submited` VALUES ('74', '5', 'A', '140218015320', 'Wrong', null);
INSERT INTO `submited` VALUES ('75', '6', 'B', '140218015320', 'Correct', null);
INSERT INTO `submited` VALUES ('76', '6', 'B', '140218015320', 'Wrong', null);
INSERT INTO `submited` VALUES ('77', '6', 'A', '140218015320', 'Correct', null);
INSERT INTO `submited` VALUES ('78', '6', 'A', '140218015320', 'Correct', null);
INSERT INTO `submited` VALUES ('79', '5', 'A', '140218020441', 'Wrong', null);
INSERT INTO `submited` VALUES ('80', '6', 'A', '140218020441', 'Correct', null);
INSERT INTO `submited` VALUES ('81', '6', 'A', '140218020441', 'Wrong', null);
INSERT INTO `submited` VALUES ('82', '5', 'B', '140218020547', 'Correct', null);
INSERT INTO `submited` VALUES ('83', '6', 'A', '140218020547', 'Wrong', null);
INSERT INTO `submited` VALUES ('84', '5', 'B', '140218020817', 'Correct', null);
INSERT INTO `submited` VALUES ('85', '6', 'A', '140218020817', 'Wrong', null);
INSERT INTO `submited` VALUES ('86', '6', 'B', '140218020817', 'Wrong', null);
INSERT INTO `submited` VALUES ('87', '6', 'A', '140218020817', 'Correct', null);
INSERT INTO `submited` VALUES ('88', '6', 'A', '140218020817', 'Correct', null);
INSERT INTO `submited` VALUES ('89', '1', 'A', '140218021151', 'Wrong', null);
INSERT INTO `submited` VALUES ('90', '2', 'B', '140218021151', 'Wrong', null);
INSERT INTO `submited` VALUES ('91', '3', 'D', '140218021151', 'Wrong', null);
INSERT INTO `submited` VALUES ('92', '4', 'B', '140218021151', 'Wrong', null);

-- ----------------------------
-- Table structure for `table_answers`
-- ----------------------------
DROP TABLE IF EXISTS `table_answers`;
CREATE TABLE `table_answers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `field_1` varchar(255) DEFAULT NULL,
  `field_2` varchar(255) DEFAULT NULL,
  `field_3` varchar(255) DEFAULT NULL,
  `field_4` varchar(255) DEFAULT NULL,
  `field_5` varchar(255) DEFAULT NULL,
  `field_6` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of table_answers
-- ----------------------------
INSERT INTO `table_answers` VALUES ('1', '6', '1,45', '2', '3', '10,45', '4', '5');

-- ----------------------------
-- Table structure for `topics`
-- ----------------------------
DROP TABLE IF EXISTS `topics`;
CREATE TABLE `topics` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of topics
-- ----------------------------
INSERT INTO `topics` VALUES ('1', 'Hydraulics - Question 1', 'Pressure at a particular pont is the thrust acting on the unit area around that point. The SI unit is Nm<sup>2</sup> or Pascal (Pa).', null);
INSERT INTO `topics` VALUES ('2', 'Hydraulics - Question 2', 'Hydraulic lifts are used to lift heavy loads such as car lifts and car jacks. <img src=\"images/car.jpg\" />', null);
INSERT INTO `topics` VALUES ('15', 'Hydraulics - Question 4', 'Dentist\'s chair <img src=\"images/dentist.jpg\" /><img src=\"images/car.jpg\" />Car jacks', null);
INSERT INTO `topics` VALUES ('16', 'Multiplication', 'Any number multiplied by 1 (1 x n) is the same number ( n )', null);
INSERT INTO `topics` VALUES ('17', 'Multiplication', '1 x 2 = 2', null);
INSERT INTO `topics` VALUES ('18', 'Multiplication', '1 x 3 = 3', null);
INSERT INTO `topics` VALUES ('19', 'Multiplication', '1 x 4 = 4', null);
INSERT INTO `topics` VALUES ('20', 'Multiplication', '1 x 5 = 5', null);
