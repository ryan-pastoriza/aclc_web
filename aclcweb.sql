/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : aclcweb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-06-07 19:09:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for about_admission
-- ----------------------------
DROP TABLE IF EXISTS `about_admission`;
CREATE TABLE `about_admission` (
  `aa_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`aa_id`),
  KEY `account_about_admission` (`ac_id`),
  CONSTRAINT `account_about_admission` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of about_admission
-- ----------------------------
INSERT INTO `about_admission` VALUES ('5', '<p class=\"c-gray\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident maiores, fuga asperiores officia. Beatae asperiores ex, quod incidunt molestiae odio. Rerum iste pariatur facilis nemo. Quaerat, pariatur eos rem fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni doloremque, non aliquid perspiciatis enim, velit sunt ex expedita commodi nostrum quae eligendi illum repellendus, vero, nesciunt corporis temporibus labore unde.</p>\r\n<p class=\"c-gray\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident maiores, fuga asperiores officia. Beatae asperiores ex, quod incidunt molestiae odio. Rerum iste pariatur facilis nemo. Quaerat, pariatur eos rem fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni doloremque, non aliquid perspiciatis enim, velit sunt ex expedita commodi nostrum quae eligendi illum repellendus, vero, nesciunt corporis temporibus labore unde.</p>\r\n<p class=\"c-gray\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident maiores, fuga asperiores officia. Beatae asperiores ex, quod incidunt molestiae odio. Rerum iste pariatur facilis nemo. Quaerat, pariatur eos rem fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni doloremque, non aliquid perspiciatis enim, velit sunt ex expedita commodi nostrum quae eligendi illum repellendus, vero, nesciunt corporis temporibus labore unde.</p>\r\n<p class=\"c-gray\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident maiores, fuga asperiores officia. Beatae asperiores ex, quod incidunt molestiae odio. Rerum iste pariatur facilis nemo. Quaerat, pariatur eos rem fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni doloremque, non aliquid perspiciatis enim, velit sunt ex expedita commodi nostrum quae eligendi illum repellendus, vero, nesciunt corporis temporibus labore unde.ssssssss</p>', '2018-05-04 02:55:51 PM', null);

-- ----------------------------
-- Table structure for acad_div
-- ----------------------------
DROP TABLE IF EXISTS `acad_div`;
CREATE TABLE `acad_div` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `content` text,
  `date_posted` date DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ad_id`),
  KEY `account_acad_div` (`ac_id`),
  CONSTRAINT `account_acad_div` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_div
-- ----------------------------
INSERT INTO `acad_div` VALUES ('1', 'Information Technology Department', '<p>qqq qwdqwndq wd qwd wqd w ef wef  sa sd asd sad  wqd qwd as d asd sad sa d asd as dsa das dsa das das d wqd qwd qwd   f f f efewfewfewfefefwefewfewfewfew few few few few few  w q qw wq  qwr wnjrwa fdhwadagawewaeh wae haw eaw ewa eaw ewa ewa </p>', '2018-04-13', null);
INSERT INTO `acad_div` VALUES ('2', 'Business Administration Department', '<p>lol</p>', '2018-05-10', null);
INSERT INTO `acad_div` VALUES ('3', 'Basic Education Department', '<p>qwdqwdqd</p>', '2018-04-16', null);

-- ----------------------------
-- Table structure for acad_inst_cal
-- ----------------------------
DROP TABLE IF EXISTS `acad_inst_cal`;
CREATE TABLE `acad_inst_cal` (
  `accal_id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(40) DEFAULT NULL,
  `activity_name` varchar(250) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `location` text,
  `detail` text,
  `type` varchar(40) DEFAULT NULL COMMENT 'acad/inst',
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`accal_id`),
  KEY `account_acad_inst_cal` (`ac_id`),
  CONSTRAINT `account_acad_inst_cal` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acad_inst_cal
-- ----------------------------
INSERT INTO `acad_inst_cal` VALUES ('5', 'Information Technology Department', 'qwdqwd1', '2018-04-10 - 2018-04-12', '13:59:00', '15:00:00', 'CL1 - CL4', '<p>wdqwdqwdqwdwqd</p>', 'more than', null);
INSERT INTO `acad_inst_cal` VALUES ('6', 'Information Technology Department', '12121212', '2018-04-10 - 2018-04-12', '13:59:00', '15:00:00', 'CL1 - CL4', '<p>wdqwdqwdqwdwqd</p>', 'more than', null);
INSERT INTO `acad_inst_cal` VALUES ('8', 'Business Administration Department', 'Orientation', '2018-04-13 - 2018-04-13', '10:00:00', '12:00:00', 'CL1 - CL4', '<p>121212121</p>', 'one day', null);

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `ac_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `reg_date` varchar(40) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL COMMENT 'info taken from HRMS',
  PRIMARY KEY (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of account
-- ----------------------------

-- ----------------------------
-- Table structure for add_cont
-- ----------------------------
DROP TABLE IF EXISTS `add_cont`;
CREATE TABLE `add_cont` (
  `adcont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`adcont_id`),
  KEY `account_add_cont` (`ac_id`),
  CONSTRAINT `account_add_cont` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of add_cont
-- ----------------------------

-- ----------------------------
-- Table structure for capstone
-- ----------------------------
DROP TABLE IF EXISTS `capstone`;
CREATE TABLE `capstone` (
  `caps_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `summary` text,
  `date_published` varchar(40) DEFAULT NULL,
  `date_posted` date DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`caps_id`),
  KEY `account_capstone` (`ac_id`),
  CONSTRAINT `account_capstone` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of capstone
-- ----------------------------
INSERT INTO `capstone` VALUES ('1', 'qqdqd', '<p>qdqdqd</p>', '2018-04-17', '2018-04-17', null);

-- ----------------------------
-- Table structure for case_studies
-- ----------------------------
DROP TABLE IF EXISTS `case_studies`;
CREATE TABLE `case_studies` (
  `cs_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `summary` text,
  `date_published` varchar(40) DEFAULT NULL,
  `date_posted` date DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cs_id`),
  KEY `account_case_studies` (`ac_id`),
  CONSTRAINT `account_case_studies` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of case_studies
-- ----------------------------

-- ----------------------------
-- Table structure for cont_loc
-- ----------------------------
DROP TABLE IF EXISTS `cont_loc`;
CREATE TABLE `cont_loc` (
  `cl_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_num` varchar(40) DEFAULT NULL,
  `fax_num` varchar(40) DEFAULT NULL,
  `embedmap` text,
  `location` text,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cl_id`),
  KEY `account_cont_loc` (`ac_id`),
  CONSTRAINT `account_cont_loc` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cont_loc
-- ----------------------------

-- ----------------------------
-- Table structure for core_values
-- ----------------------------
DROP TABLE IF EXISTS `core_values`;
CREATE TABLE `core_values` (
  `cv_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cv_id`),
  KEY `account_core_values` (`ac_id`),
  CONSTRAINT `account_core_values` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of core_values
-- ----------------------------

-- ----------------------------
-- Table structure for doc_rec
-- ----------------------------
DROP TABLE IF EXISTS `doc_rec`;
CREATE TABLE `doc_rec` (
  `dr_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`dr_id`),
  KEY `account_doc_rec` (`ac_id`),
  CONSTRAINT `account_doc_rec` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of doc_rec
-- ----------------------------
INSERT INTO `doc_rec` VALUES ('1', '<div class=\"mb-20\">\r\n<h4 class=\"c-gray f-16\">College Level</h4>\r\n<div class=\"mb-20 pl-15\">\r\n<h6 class=\"c-gray f-14\">for New Students</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>High School Card</li>\r\n<li>Honorable Dismissal</li>\r\n<li>Form 137A</li>\r\n<li>BC/NSO</li>\r\n<li>GMC</li>\r\n</ul>\r\n</div>\r\n<div class=\"pl-15\">\r\n<h6 class=\"c-gray f-14\">for Old Students</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>High School Card</li>\r\n<li>Honorable Dismissal</li>\r\n<li>Form 137A</li>\r\n<li>BC/NSO</li>\r\n<li>GMC</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div>\r\n<h4 class=\"c-gray f-16\">Senior High School Level</h4>\r\n<div class=\"mb-20 pl-15\">\r\n<h6 class=\"c-gray f-14\">for New Students</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>High School Card</li>\r\n<li>Honorable Dismissal</li>\r\n<li>Form 137A</li>\r\n<li>BC/NSO</li>\r\n<li>GMC</li>\r\n</ul>\r\n</div>\r\n</div>', '2018-05-04 02:59:32 PM', null);

-- ----------------------------
-- Table structure for easp
-- ----------------------------
DROP TABLE IF EXISTS `easp`;
CREATE TABLE `easp` (
  `easp_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `content` text,
  `date_posted` date DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`easp_id`),
  KEY `account_easp` (`ac_id`),
  CONSTRAINT `account_easp` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of easp
-- ----------------------------
INSERT INTO `easp` VALUES ('1', 'External Affairs & Special Projects Division', '<p>qd</p>', '2018-06-07', null);
INSERT INTO `easp` VALUES ('2', 'Corporate Marketing and External Affairs', '<p>wqdwd</p>', '2018-05-04', null);
INSERT INTO `easp` VALUES ('3', 'Business Linkages and Partnership Projects', '<div class=\"col-md-6\"><img class=\"img img-responsive\" src=\"http://[:1]\" alt=\"\" /></div>\r\n<div class=\"col-md-18\">\r\n<h3 class=\"normal mb-0 f-24 c-dgray\">Juan B. Dela Cruz</h3>\r\n<h6 class=\"mb-0 normal f-12 c-gray mb-10\">BLPP Director</h6>\r\n<p class=\"p-n\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate illo voluptatibus aliquid cumque delectus soluta, iure? Quasi cupiditate delectus tenetur illum. Eaque reprehenderit, vero ipsam pariatur dolore porro labore itaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n</div>\r\n<div class=\"col-md-24 pt-10\">\r\n<p class=\"p-n\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere officia, in perspiciatis laboriosam sint qui voluptatum, nesciunt distinctio labore minus molestias ratione eaque eligendi nulla dolores nisi esse. Perspiciatis, necessitatibus.</p>\r\n</div>', '2018-06-07', null);
INSERT INTO `easp` VALUES ('4', 'Corporate Social Responsibility Project', '<p>wqdwd</p>', '2018-05-04', null);

-- ----------------------------
-- Table structure for enrollment_flow
-- ----------------------------
DROP TABLE IF EXISTS `enrollment_flow`;
CREATE TABLE `enrollment_flow` (
  `en_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`en_id`),
  KEY `account_enrollment_flow` (`ac_id`),
  CONSTRAINT `account_enrollment_flow` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of enrollment_flow
-- ----------------------------
INSERT INTO `enrollment_flow` VALUES ('1', '<div class=\"row mb-30\">\r\n<h4 class=\"normal c-gray f-16 mb-15\">College Level</h4>\r\n<div class=\"col-md-12\">\r\n<h5 class=\"normal c-gray f-14 mb-15 pl-5\">for New Student</h5>\r\n<ul class=\"f-12 pl-15 c-lgray\">\r\n<li class=\"mb-10\">Step 1: Admission (Admission Officer)</li>\r\n<li class=\"mb-10\">Step 2: Examination (Internet Laboratory)</li>\r\n<li class=\"mb-10\">Step 3: Entrance / PRISAA Fee (Cashier)</li>\r\n<li class=\"mb-10\">Step 4: Departmental Fee (SSG Office)</li>\r\n<li class=\"mb-10\">Step 5: 5.1 : Advising (Department Head)</li>\r\n<li class=\"mb-10 pl-30\">5.2 : Encoding (Computer Lab 2-3)</li>\r\n<li class=\"mb-10 pl-30\">5.3: GE Loading / Section (General Education Office)</li>\r\n<li class=\"mb-10\">Step 7 : Printing of Reg. Form ( Accounting Department )</li>\r\n<li class=\"mb-10\">Step 8 : Enrollement Verification (Registrar&rsquo;s Office)</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-12\">\r\n<h5 class=\"normal c-gray f-14 mb-15 pl-5\">for Old Student</h5>\r\n<ul class=\"f-12 pl-15 c-lgray\">\r\n<li class=\"mb-10\">Step 1: Admission (Admission Officer)</li>\r\n<li class=\"mb-10\">Step 2: Examination (Internet Laboratory)</li>\r\n<li class=\"mb-10\">Step 3: Entrance / PRISAA Fee (Cashier)</li>\r\n<li class=\"mb-10\">Step 4: Departmental Fee (SSG Office)</li>\r\n<li class=\"mb-10\">Step 5: 5.1 : Advising (Department Head)</li>\r\n<li class=\"mb-10 pl-30\">5.2 : Encoding (Computer Lab 2-3)</li>\r\n<li class=\"mb-10 pl-30\">5.3: GE Loading / Section (General Education Office)</li>\r\n<li class=\"mb-10\">Step 7 : Printing of Reg. Form ( Accounting Department )</li>\r\n<li class=\"mb-10\">Step 8 : Enrollement Verification (Registrar&rsquo;s Office)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"row mb-20\">\r\n<h4 class=\"normal c-gray f-16 mb-15\">Senior High School Level</h4>\r\n<div class=\"col-md-12\">\r\n<h5 class=\"normal c-gray f-14 mb-15 pl-5\">for New Student</h5>\r\n<ul class=\"f-12 pl-15 c-lgray\">\r\n<li class=\"mb-10\">Step 1: Admission (Admission Officer)</li>\r\n<li class=\"mb-10\">Step 2: Examination (Internet Laboratory)</li>\r\n<li class=\"mb-10\">Step 3: Entrance / PRISAA Fee (Cashier)</li>\r\n<li class=\"mb-10\">Step 4: Departmental Fee (SSG Office)</li>\r\n<li class=\"mb-10\">Step 5: 5.1 : Advising (Department Head)</li>\r\n<li class=\"mb-10 pl-30\">5.2 : Encoding (Computer Lab 2-3)</li>\r\n<li class=\"mb-10 pl-30\">5.3: GE Loading / Section (General Education Office)</li>\r\n<li class=\"mb-10\">Step 7 : Printing of Reg. Form ( Accounting Department )</li>\r\n<li class=\"mb-10\">Step 8 : Enrollement Verification (Registrar&rsquo;s Office)</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-12\">\r\n<h5 class=\"normal c-gray f-14 mb-15 pl-5\">for Old Student</h5>\r\n<ul class=\"f-12 pl-15 c-lgray\">\r\n<li class=\"mb-10\">Step 1: Admission (Admission Officer)</li>\r\n<li class=\"mb-10\">Step 2: Examination (Internet Laboratory)</li>\r\n<li class=\"mb-10\">Step 3: Entrance / PRISAA Fee (Cashier)</li>\r\n<li class=\"mb-10\">Step 4: Departmental Fee (SSG Office)</li>\r\n<li class=\"mb-10\">Step 5: 5.1 : Advising (Department Head)</li>\r\n<li class=\"mb-10 pl-30\">5.2 : Encoding (Computer Lab 2-3)</li>\r\n<li class=\"mb-10 pl-30\">5.3: GE Loading / Section (General Education Office)</li>\r\n<li class=\"mb-10\">Step 7 : Printing of Reg. Form ( Accounting Department )</li>\r\n<li class=\"mb-10\">Step 8 : Enrollement Verification (Registrar&rsquo;s Office)</li>\r\n</ul>\r\n</div>\r\n</div>', '2018-05-04 02:49:22 PM', null);

-- ----------------------------
-- Table structure for entrance_exam
-- ----------------------------
DROP TABLE IF EXISTS `entrance_exam`;
CREATE TABLE `entrance_exam` (
  `ee_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ee_id`),
  KEY `account_entrance_exam` (`ac_id`),
  CONSTRAINT `account_entrance_exam` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of entrance_exam
-- ----------------------------
INSERT INTO `entrance_exam` VALUES ('1', '<p class=\"c-gray\">Entrance exam will be conducted during Enrollment Period</p>\r\n<div class=\"pl-15 mb-15\">\r\n<h4 class=\"f-16 c-gray mb-5\">College Level</h4>\r\n<p class=\"pl-15 c-gray\">Monday to Friday 08:00 AM - 12:00 PM and 02:00 PM - 05:00 PM</p>\r\n</div>\r\n<div class=\"pl-15\">\r\n<h4 class=\"f-16 c-gray mb-5\">Senior High School Level</h4>\r\n<p class=\"pl-15 c-gray\">Monday to Friday 08:00 AM - 12:00 PM and 02:00 PM - 05:00 PMs</p>\r\n</div>', '2018-05-04 03:06:29 PM', null);
INSERT INTO `entrance_exam` VALUES ('2', '<p>2222</p>', '2018-04-10 04:07:43 PM', null);

-- ----------------------------
-- Table structure for excel_info
-- ----------------------------
DROP TABLE IF EXISTS `excel_info`;
CREATE TABLE `excel_info` (
  `ex_id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` text,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ex_id`),
  KEY `account_excel_info` (`ac_id`),
  CONSTRAINT `account_excel_info` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of excel_info
-- ----------------------------

-- ----------------------------
-- Table structure for excel_pers_info
-- ----------------------------
DROP TABLE IF EXISTS `excel_pers_info`;
CREATE TABLE `excel_pers_info` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(225) DEFAULT NULL,
  `fullname` varchar(225) DEFAULT NULL,
  `designation` varchar(40) DEFAULT NULL,
  `acad_year` varchar(40) DEFAULT NULL,
  `detail` text,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`exp_id`),
  KEY `account_excel_pers_info` (`ac_id`),
  CONSTRAINT `account_excel_pers_info` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of excel_pers_info
-- ----------------------------
INSERT INTO `excel_pers_info` VALUES ('6', '6.jpeg', 'Gian Carl Anduyan', 'Programmer', '2018 - 2019', '<p>qwdqwdwq</p>', null);
INSERT INTO `excel_pers_info` VALUES ('7', '7.jpeg', 'qwdqwd', 'qwdqw', 'dqwdqwd', '<p>qwdqwd</p>', null);

-- ----------------------------
-- Table structure for history
-- ----------------------------
DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `hist_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(40) DEFAULT NULL,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`hist_id`),
  KEY `account_history` (`ac_id`),
  CONSTRAINT `account_history` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of history
-- ----------------------------

-- ----------------------------
-- Table structure for hymn
-- ----------------------------
DROP TABLE IF EXISTS `hymn`;
CREATE TABLE `hymn` (
  `hymn_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`hymn_id`),
  KEY `account_hymn` (`ac_id`),
  CONSTRAINT `account_hymn` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hymn
-- ----------------------------

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `path` text,
  `function` varchar(40) DEFAULT NULL COMMENT 'carousel/logo/etc',
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`img_id`),
  KEY `account_images` (`ac_id`),
  CONSTRAINT `account_images` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('4', 'plugins/images/enrollment_flow/4.png', 'enrollment_flow', null);

-- ----------------------------
-- Table structure for institutional
-- ----------------------------
DROP TABLE IF EXISTS `institutional`;
CREATE TABLE `institutional` (
  `ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `summary` text,
  `date_published` varchar(40) DEFAULT NULL,
  `date_posted` date DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ins_id`),
  KEY `account_institutional` (`ac_id`),
  CONSTRAINT `account_institutional` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of institutional
-- ----------------------------
INSERT INTO `institutional` VALUES ('1', 'qsq', '<p>qsq</p>', '2018-05-04', '2018-05-04', null);

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(225) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `details` text,
  `date_receive` varchar(225) DEFAULT NULL,
  `time_receive` varchar(225) DEFAULT NULL,
  `mac_address` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`msg_id`),
  KEY `account_message` (`ac_id`),
  CONSTRAINT `account_message` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of message
-- ----------------------------

-- ----------------------------
-- Table structure for message_reply
-- ----------------------------
DROP TABLE IF EXISTS `message_reply`;
CREATE TABLE `message_reply` (
  `msg_rep_id` int(11) NOT NULL AUTO_INCREMENT,
  `details` text,
  `date_reply` varchar(225) DEFAULT NULL,
  `time_reply` varchar(225) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  `msg_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`msg_rep_id`),
  KEY `message_message_reply` (`msg_id`),
  KEY `account_message_reply` (`ac_id`),
  CONSTRAINT `account_message_reply` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`),
  CONSTRAINT `message_message_reply` FOREIGN KEY (`msg_id`) REFERENCES `message` (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of message_reply
-- ----------------------------

-- ----------------------------
-- Table structure for mission
-- ----------------------------
DROP TABLE IF EXISTS `mission`;
CREATE TABLE `mission` (
  `mis_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mis_id`),
  KEY `account_mission` (`ac_id`),
  CONSTRAINT `account_mission` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mission
-- ----------------------------

-- ----------------------------
-- Table structure for oad
-- ----------------------------
DROP TABLE IF EXISTS `oad`;
CREATE TABLE `oad` (
  `oad_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `content` text,
  `date_posted` date DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`oad_id`),
  KEY `account_oad` (`ac_id`),
  CONSTRAINT `account_oad` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of oad
-- ----------------------------
INSERT INTO `oad` VALUES ('1', 'Office of Administration Office', '<p>Hi!</p>', '2018-06-07', null);
INSERT INTO `oad` VALUES ('2', 'Treasury and Accounting', '<p>qwqwqwq</p>', '2018-04-16', null);
INSERT INTO `oad` VALUES ('3', 'Assets and Properties', '<p>qwqwqwq</p>', '2018-04-16', null);
INSERT INTO `oad` VALUES ('4', 'Human Resource Management', '<p>qwqwqwq</p>', '2018-04-16', null);
INSERT INTO `oad` VALUES ('5', 'Technical Support', '<p>qwqwqwq</p>', '2018-04-16', null);
INSERT INTO `oad` VALUES ('6', 'Research Development and Innovation Office (RDIO)', '<p>qwqwqwq</p>', '2018-04-16', null);
INSERT INTO `oad` VALUES ('7', 'Planning ang Monitoring Office (PMO)', '<p>qwqwqwq</p>', '2018-04-16', null);
INSERT INTO `oad` VALUES ('8', 'Community Extension and Linkages', '<p>qwqwqwq</p>', '2018-04-16', null);

-- ----------------------------
-- Table structure for organization
-- ----------------------------
DROP TABLE IF EXISTS `organization`;
CREATE TABLE `organization` (
  `org_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(225) DEFAULT NULL,
  `orgname` varchar(225) DEFAULT NULL,
  `details` text,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`org_id`),
  KEY `account_organization` (`ac_id`),
  CONSTRAINT `account_organization` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of organization
-- ----------------------------
INSERT INTO `organization` VALUES ('1', '1.jpeg', 'qsqsq', '<p>qsqsq</p>', null);
INSERT INTO `organization` VALUES ('2', '2.jpeg', 'qwdqwd', '<p>qwdqwd</p>', null);
INSERT INTO `organization` VALUES ('3', '3.jpeg', 'sqsq', '<p>ssss</p>', null);
INSERT INTO `organization` VALUES ('4', '4.jpeg', 'qsqs', '<p>qsqsq</p>', null);

-- ----------------------------
-- Table structure for prog_id
-- ----------------------------
DROP TABLE IF EXISTS `prog_id`;
CREATE TABLE `prog_id` (
  `prog_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_name` varchar(40) DEFAULT NULL,
  `detail` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`prog_id`),
  KEY `account_prog_id` (`ac_id`),
  CONSTRAINT `account_prog_id` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of prog_id
-- ----------------------------
INSERT INTO `prog_id` VALUES ('5', null, '<div class=\"mb-20\">\r\n<h4 class=\"c-gray f-16\">Information Technology Department</h4>\r\n<div class=\"mb-20 pl-15\">\r\n<h6 class=\"c-gray f-14\">4 year Course</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>Bachelor of Computer Science in Computer Science</li>\r\n<li>Bachelor of Computer Science in Information Technology</li>\r\n</ul>\r\n<h6 class=\"c-gray f-14\">2 year Course</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>Associate in Computer Technology (ACT)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"mb-20\">\r\n<h4 class=\"c-gray f-16\">Business Administration Department</h4>\r\n<div class=\"mb-20 pl-15\">\r\n<h6 class=\"c-gray f-14\">4 year Course</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>Bachelor of Computer Science in Computer Science</li>\r\n<li>Bachelor of Computer Science in Information Technology</li>\r\n</ul>\r\n<h6 class=\"c-gray f-14\">2 year Course</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>Associate in Computer Technology (ACT)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"mb-20\">\r\n<h4 class=\"c-gray f-16\">Basic Education Department</h4>\r\n<div class=\"mb-20 pl-15\">\r\n<h6 class=\"c-gray f-14\">4 year Course</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>General Academic Strand (GAS)</li>\r\n<li>Humanities Social Science (HUMSS) Strands</li>\r\n<li>Science, Technology, Engineering and Mathematics (STEM)</li>\r\n<li>Information and Communication Technology (ICT) Strand</li>\r\n</ul>\r\n</div>\r\n</div>', '2018-05-04 04:36:21 PM', null);

-- ----------------------------
-- Table structure for schol_dir
-- ----------------------------
DROP TABLE IF EXISTS `schol_dir`;
CREATE TABLE `schol_dir` (
  `osd_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `content` text,
  `date_posted` date DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`osd_id`),
  KEY `account_schol_dir` (`ac_id`),
  CONSTRAINT `account_schol_dir` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of schol_dir
-- ----------------------------
INSERT INTO `schol_dir` VALUES ('10', 'Alan L. Atega', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas molestiae sequi illo rerum aliquid fugit et, cumque repudiandae itaque corrupti illum inventore. Omnis a recusandae odit qui quo cum, sit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque similique qui id recusandae rerum eum iure sit nobis ad dolore obcaecati ullam vel consectetur excepturi veniam, magni officiis esse est!</p>', '2018-05-07', null);
INSERT INTO `schol_dir` VALUES ('11', 'Quality Management System (QMS)', '<p>testqwdwqdwq</p>', '2018-05-09', null);
INSERT INTO `schol_dir` VALUES ('12', 'Research Development and Innovation Office (RDIO)', '<p>test</p>', '2018-05-07', null);
INSERT INTO `schol_dir` VALUES ('13', 'Planning ang Monitoring Office (PMO)', '<p>test</p>', '2018-05-07', null);
INSERT INTO `schol_dir` VALUES ('14', 'Community Extension and Linkages', '<p>test</p>', '2018-05-07', null);

-- ----------------------------
-- Table structure for sch_act
-- ----------------------------
DROP TABLE IF EXISTS `sch_act`;
CREATE TABLE `sch_act` (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_title` varchar(225) DEFAULT NULL,
  `date` varchar(225) DEFAULT NULL,
  `time` varchar(225) DEFAULT NULL,
  `department` varchar(225) DEFAULT NULL,
  `details` text,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sc_id`),
  KEY `account_sch_act` (`ac_id`),
  CONSTRAINT `account_sch_act` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sch_act
-- ----------------------------
INSERT INTO `sch_act` VALUES ('1', 'qwdqwd', '2018-04-17', '11:11', '111', '<p>111</p>', null);

-- ----------------------------
-- Table structure for ssg_info
-- ----------------------------
DROP TABLE IF EXISTS `ssg_info`;
CREATE TABLE `ssg_info` (
  `ssgi_id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` text,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ssgi_id`),
  KEY `account_ssg_info` (`ac_id`),
  CONSTRAINT `account_ssg_info` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ssg_info
-- ----------------------------

-- ----------------------------
-- Table structure for ssg_pers_info
-- ----------------------------
DROP TABLE IF EXISTS `ssg_pers_info`;
CREATE TABLE `ssg_pers_info` (
  `ssgp_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(225) DEFAULT NULL,
  `fullname` varchar(225) DEFAULT NULL,
  `designation` varchar(40) DEFAULT NULL,
  `acad_year` varchar(40) DEFAULT NULL,
  `detail` text,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ssgp_id`),
  KEY `account_ssg_pers_info` (`ac_id`),
  CONSTRAINT `account_ssg_pers_info` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ssg_pers_info
-- ----------------------------

-- ----------------------------
-- Table structure for stud_ad
-- ----------------------------
DROP TABLE IF EXISTS `stud_ad`;
CREATE TABLE `stud_ad` (
  `sa_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sa_id`),
  KEY `account_stud_ad` (`ac_id`),
  CONSTRAINT `account_stud_ad` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stud_ad
-- ----------------------------
INSERT INTO `stud_ad` VALUES ('5', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br /> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br /> quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br /> consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br /> cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br /> proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2018-05-04 03:02:39 PM', null);

-- ----------------------------
-- Table structure for stud_serv_div
-- ----------------------------
DROP TABLE IF EXISTS `stud_serv_div`;
CREATE TABLE `stud_serv_div` (
  `ssd_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `content` text,
  `date_posted` date DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ssd_id`),
  KEY `account_stud_serv_div` (`ac_id`),
  CONSTRAINT `account_stud_serv_div` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stud_serv_div
-- ----------------------------
INSERT INTO `stud_serv_div` VALUES ('1', 'Student Service Division', '<p>Hello!&nbsp;</p>', '2018-06-07', null);
INSERT INTO `stud_serv_div` VALUES ('2', 'Office of the Student Affairs and Service (OSAS)', '<p>qwdqwdwqd</p>', '2018-04-16', null);
INSERT INTO `stud_serv_div` VALUES ('3', 'Office of the Registrar', '<p>qwdqwdwqd</p>', '2018-04-16', null);
INSERT INTO `stud_serv_div` VALUES ('4', 'Guidance Office', '<p>qwdqwdwqd</p>', '2018-04-16', null);
INSERT INTO `stud_serv_div` VALUES ('5', 'Alumni and Scholarship Office', '<p>qwdqwdwqd</p>', '2018-04-16', null);
INSERT INTO `stud_serv_div` VALUES ('6', 'Social and Community Extension Office', '<p>qwdqwdwqd</p>', '2018-04-16', null);
INSERT INTO `stud_serv_div` VALUES ('7', 'School Publication Office', '<p>qwdqwdwqd</p>', '2018-04-16', null);

-- ----------------------------
-- Table structure for thesis
-- ----------------------------
DROP TABLE IF EXISTS `thesis`;
CREATE TABLE `thesis` (
  `thesis_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) DEFAULT NULL,
  `summary` text,
  `date_published` varchar(40) DEFAULT NULL,
  `date_posted` date DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`thesis_id`),
  KEY `account_thesis` (`ac_id`),
  CONSTRAINT `account_thesis` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of thesis
-- ----------------------------

-- ----------------------------
-- Table structure for vision
-- ----------------------------
DROP TABLE IF EXISTS `vision`;
CREATE TABLE `vision` (
  `vis_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `date_posted` varchar(40) DEFAULT NULL,
  `ac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`vis_id`),
  KEY `account_vision` (`ac_id`),
  CONSTRAINT `account_vision` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vision
-- ----------------------------
