/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50045
Source Host           : localhost:3306
Source Database       : mind

Target Server Type    : MYSQL
Target Server Version : 50045
File Encoding         : 65001

Date: 2018-02-13 22:09:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `answers`
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(255) NOT NULL auto_increment,
  `question` varchar(255) default NULL,
  `option` varchar(255) default NULL,
  `answer` varchar(255) default NULL,
  `state` varchar(255) default 'Wrong',
  `box` varchar(25) default NULL,
  PRIMARY KEY  (`id`)
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
INSERT INTO `answers` VALUES ('31', '6', 'C', '5', 'Wrong', 'field_3');
INSERT INTO `answers` VALUES ('32', '6', 'A', '3', 'Wrong', 'field_5');
INSERT INTO `answers` VALUES ('33', '6', 'B', '5', 'Wrong', 'field_5');
INSERT INTO `answers` VALUES ('34', '6', 'C', '6', 'Wrong', 'field_5');
INSERT INTO `answers` VALUES ('35', '6', 'D', '7', 'Wrong', 'field_5');
INSERT INTO `answers` VALUES ('36', '6', 'A', '6', 'Wrong', 'field_6');
INSERT INTO `answers` VALUES ('37', '6', 'B', '5', 'Wrong', 'field_6');
INSERT INTO `answers` VALUES ('38', '6', 'C', '67', 'Wrong', 'field_6');
INSERT INTO `answers` VALUES ('39', '6', 'D', '7', 'Wrong', 'field_6');

-- ----------------------------
-- Table structure for `questions`
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(255) NOT NULL auto_increment,
  `question` varchar(255) default NULL,
  `answered` int(255) default '0',
  `topic` varchar(255) default NULL,
  `shape_link` varchar(255) default '0',
  `shape` varchar(255) default NULL,
  `subject` varchar(255) default NULL,
  `chapter` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('1', 'What is the SI unit for pressure?', '0', 'Hydraulics - Question 1', '0', null, 'Physics', 'Hydraulics');
INSERT INTO `questions` VALUES ('2', 'What is hydraulic lifts used for?', '0', 'Hydraulics - Question 2', '0', null, 'Physics', 'Hydraulics');
INSERT INTO `questions` VALUES ('3', 'Pascal\'s law states ...', '0', 'Hydraulics - Question 3', '0', null, 'Physics', 'Hydraulics');
INSERT INTO `questions` VALUES ('4', 'Examples of hydraulic lifts are ...', '0', 'Hydraulics - Question 4', '0', null, 'Physics', 'Hydraulics');
INSERT INTO `questions` VALUES ('5', 'What are the first four terms when you Add 6 to T<sub>1</sub> = 5', '0', null, '3', null, 'Maths', 'Patterns');
INSERT INTO `questions` VALUES ('6', 'Fill the table with correct values.', '0', null, '3', null, 'Maths', 'Patterns');

-- ----------------------------
-- Table structure for `submited`
-- ----------------------------
DROP TABLE IF EXISTS `submited`;
CREATE TABLE `submited` (
  `id` int(255) NOT NULL auto_increment,
  `question` varchar(255) default NULL,
  `answer` varchar(255) default NULL,
  `state` varchar(255) default NULL,
  `validity` varchar(15) default NULL,
  `date` varchar(15) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of submited
-- ----------------------------
INSERT INTO `submited` VALUES ('1', '1', 'A', null, 'Correct', null);
INSERT INTO `submited` VALUES ('2', '1', 'A', '080218084257', 'Correct', null);
INSERT INTO `submited` VALUES ('3', '2', 'B', '080218084257', 'Correct', null);
INSERT INTO `submited` VALUES ('4', '3', 'B', '080218084257', 'Correct', null);
INSERT INTO `submited` VALUES ('5', '4', 'C', '080218084257', 'Correct', null);
INSERT INTO `submited` VALUES ('6', '1', 'A', '080218090401', 'Correct', null);
INSERT INTO `submited` VALUES ('7', '2', 'C', '080218090401', 'Correct', null);
INSERT INTO `submited` VALUES ('8', '3', 'C', '080218090401', 'Correct', null);
INSERT INTO `submited` VALUES ('9', '4', 'C', '080218090401', 'Correct', null);
INSERT INTO `submited` VALUES ('10', '1', 'B', '080218091153', 'Correct', null);
INSERT INTO `submited` VALUES ('11', '2', 'D', '080218091153', 'Correct', null);
INSERT INTO `submited` VALUES ('12', '1', 'A', '080218094235', 'Correct', null);
INSERT INTO `submited` VALUES ('13', '2', 'C', '080218094235', 'Correct', null);
INSERT INTO `submited` VALUES ('14', '3', 'C', '080218094235', 'Correct', null);
INSERT INTO `submited` VALUES ('15', '4', 'A', '080218094235', 'Correct', null);
INSERT INTO `submited` VALUES ('16', '1', 'B', '080218015916', 'Correct', null);
INSERT INTO `submited` VALUES ('17', '2', 'D', '080218015916', 'Correct', null);
INSERT INTO `submited` VALUES ('18', '3', 'B', '080218015916', 'Correct', null);
INSERT INTO `submited` VALUES ('19', '4', 'A', '080218015916', 'Correct', null);
INSERT INTO `submited` VALUES ('20', '1', 'A', '080218020214', 'Correct', null);
INSERT INTO `submited` VALUES ('21', '1', 'B', '080218020908', 'Correct', null);
INSERT INTO `submited` VALUES ('22', '2', 'A', '080218020908', 'Correct', null);
INSERT INTO `submited` VALUES ('23', '3', 'A', '080218020908', 'Correct', null);
INSERT INTO `submited` VALUES ('24', '1', 'B', '080218023025', 'Correct', null);
INSERT INTO `submited` VALUES ('25', '1', 'D', '080218023140', 'Correct', null);
INSERT INTO `submited` VALUES ('26', '2', 'D', '080218023140', 'Correct', null);
INSERT INTO `submited` VALUES ('27', '3', 'C', '080218023140', 'Correct', null);
INSERT INTO `submited` VALUES ('28', '4', 'D', '080218023140', 'Correct', null);
INSERT INTO `submited` VALUES ('29', '1', 'D', '090218103026', 'Correct', null);
INSERT INTO `submited` VALUES ('30', '1', 'B', '090218103315', 'Correct', null);
INSERT INTO `submited` VALUES ('31', '1', 'A', '090218103711', 'Correct', null);
INSERT INTO `submited` VALUES ('32', '1', 'B', '090218104257', 'Correct', null);
INSERT INTO `submited` VALUES ('33', '2', 'C', '090218104257', 'Correct', null);
INSERT INTO `submited` VALUES ('34', '3', 'D', '090218104257', 'Correct', null);
INSERT INTO `submited` VALUES ('35', '1', 'A', '090218104435', 'Correct', null);
INSERT INTO `submited` VALUES ('36', '2', 'B', '090218104435', 'Correct', null);
INSERT INTO `submited` VALUES ('37', '1', 'A', '090218105320', 'Correct', null);
INSERT INTO `submited` VALUES ('38', '2', 'D', '090218105320', 'Correct', null);
INSERT INTO `submited` VALUES ('39', '3', 'D', '090218105320', 'Correct', null);
INSERT INTO `submited` VALUES ('40', '4', 'C', '090218105320', 'Correct', null);
INSERT INTO `submited` VALUES ('41', '1', 'B', '090218110612', 'Correct', null);
INSERT INTO `submited` VALUES ('42', '2', 'B', '090218110612', 'Correct', null);
INSERT INTO `submited` VALUES ('43', '3', 'A', '090218110612', 'Correct', null);
INSERT INTO `submited` VALUES ('44', '1', 'A', '130218113738', 'Correct', null);
INSERT INTO `submited` VALUES ('45', '2', 'A', '130218113738', 'Correct', null);
INSERT INTO `submited` VALUES ('46', '1', 'A', '130218120734', 'Correct', null);
INSERT INTO `submited` VALUES ('47', '5', 'A', '130218122706', 'Correct', null);
INSERT INTO `submited` VALUES ('48', '5', 'B', '130218123436', 'Correct', null);

-- ----------------------------
-- Table structure for `table_answers`
-- ----------------------------
DROP TABLE IF EXISTS `table_answers`;
CREATE TABLE `table_answers` (
  `id` int(255) NOT NULL auto_increment,
  `question` varchar(255) default NULL,
  `field_1` varchar(255) default NULL,
  `field_2` varchar(255) default NULL,
  `field_3` varchar(255) default NULL,
  `field_4` varchar(255) default NULL,
  `field_5` varchar(255) default NULL,
  `field_6` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
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
  `id` int(255) NOT NULL auto_increment,
  `topic` varchar(255) default NULL,
  `subject` varchar(255) default NULL,
  `link` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of topics
-- ----------------------------
INSERT INTO `topics` VALUES ('1', 'Hydraulics - Question 1', 'Pressure at a particular pont is the thrust acting on the unit area around that point. The SI unit is Nm<sup>2</sup> or Pascal (Pa).', null);
INSERT INTO `topics` VALUES ('2', 'Hydraulics - Question 2', 'Hydraulic lifts are used to lift heavy loads such as car lifts and car jacks. <img src=\"images/car.jpg\" />', null);
INSERT INTO `topics` VALUES ('15', 'Hydraulics - Question 4', 'Dentist\'s chair <img src=\"images/dentist.jpg\" /><img src=\"images/car.jpg\" />Car jacks', null);
