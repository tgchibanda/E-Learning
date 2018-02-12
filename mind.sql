/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : mind

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-02-09 13:16:26
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES ('1', '1', 'A', 'Nm<sup>2</sup>', 'Wrong');
INSERT INTO `answers` VALUES ('2', '1', 'B', 'Pascal (Pa)', 'Wrong');
INSERT INTO `answers` VALUES ('3', '1', 'C', 'Nm<sup>2</sup> and Pascal (Pa)', 'Correct');
INSERT INTO `answers` VALUES ('4', '1', 'D', 'm<sup>2</sup>', 'Wrong');
INSERT INTO `answers` VALUES ('5', '2', 'A', 'To lift heavy loads.', 'Correct');
INSERT INTO `answers` VALUES ('6', '2', 'B', 'To drop heavy loads.', 'Wrong');
INSERT INTO `answers` VALUES ('7', '2', 'C', 'To move light weights.', 'Wrong');
INSERT INTO `answers` VALUES ('8', '2', 'D', 'To crush cars.', 'Wrong');
INSERT INTO `answers` VALUES ('9', '3', 'A', 'In a continuous liquid at equilibrium, the thrust applied at any point is transmitted equally to other parts of the liquid.', 'Wrong');
INSERT INTO `answers` VALUES ('10', '3', 'B', 'In a continuous liquid at equilibrium, the pressure applied at any point is transmitted unequally to other parts of the liquid.', 'Wrong');
INSERT INTO `answers` VALUES ('11', '3', 'C', 'In a continuous liquid at equilibrium, the pressure applied at any point is transmitted equally to other parts of the liquid.', 'Correct');
INSERT INTO `answers` VALUES ('12', '3', 'D', 'In a solid at equilibrium, the pressure applied at any point is transmitted equally to other parts of the solid.', 'Wrong');
INSERT INTO `answers` VALUES ('13', '4', 'A', 'Vacuum cleaner.', 'Wrong');
INSERT INTO `answers` VALUES ('14', '4', 'B', 'Car lifts and jacks.', 'Wrong');
INSERT INTO `answers` VALUES ('15', '4', 'C', 'Dentist\'s chair.', 'Wrong');
INSERT INTO `answers` VALUES ('16', '4', 'D', 'Both B and C', 'Correct');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('1', 'What is the SI unit for pressure?', '0', 'Hydraulics - Question 1', '0', null);
INSERT INTO `questions` VALUES ('2', 'What is hydraulic lifts used for?', '0', 'Hydraulics - Question 2', '0', null);
INSERT INTO `questions` VALUES ('3', 'Pascal\'s law states ...', '0', 'Hydraulics - Question 3', '0', null);
INSERT INTO `questions` VALUES ('4', 'Examples of hydraulic lifts are ...', '0', 'Hydraulics - Question 4', '0', null);

-- ----------------------------
-- Table structure for `submited`
-- ----------------------------
DROP TABLE IF EXISTS `submited`;
CREATE TABLE `submited` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of submited
-- ----------------------------
INSERT INTO `submited` VALUES ('1', '1', 'A', null);
INSERT INTO `submited` VALUES ('2', '1', 'A', '080218084257');
INSERT INTO `submited` VALUES ('3', '2', 'B', '080218084257');
INSERT INTO `submited` VALUES ('4', '3', 'B', '080218084257');
INSERT INTO `submited` VALUES ('5', '4', 'C', '080218084257');
INSERT INTO `submited` VALUES ('6', '1', 'A', '080218090401');
INSERT INTO `submited` VALUES ('7', '2', 'C', '080218090401');
INSERT INTO `submited` VALUES ('8', '3', 'C', '080218090401');
INSERT INTO `submited` VALUES ('9', '4', 'C', '080218090401');
INSERT INTO `submited` VALUES ('10', '1', 'B', '080218091153');
INSERT INTO `submited` VALUES ('11', '2', 'D', '080218091153');
INSERT INTO `submited` VALUES ('12', '1', 'A', '080218094235');
INSERT INTO `submited` VALUES ('13', '2', 'C', '080218094235');
INSERT INTO `submited` VALUES ('14', '3', 'C', '080218094235');
INSERT INTO `submited` VALUES ('15', '4', 'A', '080218094235');
INSERT INTO `submited` VALUES ('16', '1', 'B', '080218015916');
INSERT INTO `submited` VALUES ('17', '2', 'D', '080218015916');
INSERT INTO `submited` VALUES ('18', '3', 'B', '080218015916');
INSERT INTO `submited` VALUES ('19', '4', 'A', '080218015916');
INSERT INTO `submited` VALUES ('20', '1', 'A', '080218020214');
INSERT INTO `submited` VALUES ('21', '1', 'B', '080218020908');
INSERT INTO `submited` VALUES ('22', '2', 'A', '080218020908');
INSERT INTO `submited` VALUES ('23', '3', 'A', '080218020908');
INSERT INTO `submited` VALUES ('24', '1', 'B', '080218023025');
INSERT INTO `submited` VALUES ('25', '1', 'D', '080218023140');
INSERT INTO `submited` VALUES ('26', '2', 'D', '080218023140');
INSERT INTO `submited` VALUES ('27', '3', 'C', '080218023140');
INSERT INTO `submited` VALUES ('28', '4', 'D', '080218023140');
INSERT INTO `submited` VALUES ('29', '1', 'D', '090218103026');
INSERT INTO `submited` VALUES ('30', '1', 'B', '090218103315');
INSERT INTO `submited` VALUES ('31', '1', 'A', '090218103711');
INSERT INTO `submited` VALUES ('32', '1', 'B', '090218104257');
INSERT INTO `submited` VALUES ('33', '2', 'C', '090218104257');
INSERT INTO `submited` VALUES ('34', '3', 'D', '090218104257');
INSERT INTO `submited` VALUES ('35', '1', 'A', '090218104435');
INSERT INTO `submited` VALUES ('36', '2', 'B', '090218104435');
INSERT INTO `submited` VALUES ('37', '1', 'A', '090218105320');
INSERT INTO `submited` VALUES ('38', '2', 'D', '090218105320');
INSERT INTO `submited` VALUES ('39', '3', 'D', '090218105320');
INSERT INTO `submited` VALUES ('40', '4', 'C', '090218105320');
INSERT INTO `submited` VALUES ('41', '1', 'B', '090218110612');
INSERT INTO `submited` VALUES ('42', '2', 'B', '090218110612');
INSERT INTO `submited` VALUES ('43', '3', 'A', '090218110612');

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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of topics
-- ----------------------------
INSERT INTO `topics` VALUES ('1', 'Hydraulics - Question 1', 'Pressure at a particular pont is the thrust acting on the unit area around that point. The SI unit is Nm<sup>2</sup> or Pascal (Pa).', null);
INSERT INTO `topics` VALUES ('2', 'Hydraulics - Question 2', 'Hydraulic lifts are used to lift heavy loads such as car lifts and car jacks. <img src=\"images/car.jpg\" />', null);
INSERT INTO `topics` VALUES ('15', 'Hydraulics - Question 4', 'Dentist\'s chair <img src=\"images/dentist.jpg\" /><img src=\"images/car.jpg\" />Car jacks', null);
