/*
 Navicat Premium Data Transfer

 Source Server         : Local Connection
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : aclcbu_web

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 28/05/2020 15:23:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for about_admission
-- ----------------------------
DROP TABLE IF EXISTS `about_admission`;
CREATE TABLE `about_admission`  (
  `aa_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`aa_id`) USING BTREE,
  INDEX `account_about_admission`(`ac_id`) USING BTREE,
  CONSTRAINT `account_about_admission` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of about_admission
-- ----------------------------
INSERT INTO `about_admission` VALUES (1, '<p>Admission to ACLC college of Butuan is open to all qualified applicants. This is to determined by the applicant\'s readiness and ability to contribute towards the enrichment of the academic community and potential to be of service to the Filipino people and global community</p>', '2018-08-30 03:06:27 PM', NULL);
INSERT INTO `about_admission` VALUES (2, '<p>Admission to ACLC college of Butuan is open to all qualified applicants. This is to determined by the applicant\'s readiness and ability to contribute towards the enrichment of the academic community and potential to be of service to the Filipino people and global community</p>', '2018-08-30 03:00:46 PM', NULL);
INSERT INTO `about_admission` VALUES (3, '<p>Admission to ACLC college of Butuan is open to all qualified applicants. This is to determined by the applicant\'s readiness and ability to contribute towards the enrichment of the academic community and potential to be of service to the Filipino people and global community</p>', '2018-08-30 03:01:05 PM', NULL);
INSERT INTO `about_admission` VALUES (4, '<p>Admission to ACLC college of Butuan is open to all qualified applicants. This is to determined by the applicant\'s readiness and ability to contribute towards the enrichment of the academic community and potential</p>\r\n<p>to be of service to the Filipino people and global community</p>', '2018-08-30 03:01:36 PM', NULL);
INSERT INTO `about_admission` VALUES (5, '<p>Admission to ACLC college of Butuan is open to all qualified applicants. This is to determined by the applicant\'s readiness and ability to contribute towards the enrichment of the academic community and potential</p>\r\n<p>to be of service to the Filipino people and global community</p>', '2018-08-30 03:05:16 PM', NULL);
INSERT INTO `about_admission` VALUES (6, '<p>Admission to ACLC college of Butuan is open to all qualified applicants. This is to determined by the applicant\'s readiness and ability to contribute towards the enrichment of the academic community and potential</p>\r\n<p>to be of service to the Filipino people and global community.</p>', '2018-08-30 03:05:38 PM', NULL);

-- ----------------------------
-- Table structure for acad_div
-- ----------------------------
DROP TABLE IF EXISTS `acad_div`;
CREATE TABLE `acad_div`  (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` date NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ad_id`) USING BTREE,
  INDEX `account_acad_div`(`ac_id`) USING BTREE,
  CONSTRAINT `account_acad_div` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of acad_div
-- ----------------------------
INSERT INTO `acad_div` VALUES (1, 'Computer Education Department', '<table>\n<tbody>\n<tr>\n<td width=\"300\">\n<p><strong>Junell T. Bojocan, MIT</strong></p>\n<p>Position Focal Person for Computer Science / Innovation Coordinator</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in Computer Engineering<br /> </strong>STI College Surigao.</p>\n<p>&nbsp;</p>\n<p><strong>Master in Information System<br /> </strong>Surigao State College of Technology</p>\n<p>&nbsp;</p>\n<p><strong>TRAININGS:</strong></p>\n<p><strong>Computing, Cyber, Microcontroller Trainings</strong></p>\n<p><strong>&nbsp;</strong></p>\n</td>\n</tr>\n<tr>\n<td width=\"300\">\n<p><strong>Daryll A. Cabagay, MSIT</strong></p>\n<p>Assistant Professor / IT Program Head / LCO Adviser</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in Information Technology</strong></p>\n<p>Caraga Statee University</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>Master of Science in Information Technology<br /> </strong>Caraga state University</p>\n<p>&nbsp;</p>\n<p><strong>CERTIFICATION:</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Vulnerability Assessor (CVA)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Security Sentinel (CSS)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certification in Computer System Servicing (NCII)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certification in Visual Graphics Design (NCIII)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Civil Service Professional Eligibility</strong></p>\n</td>\n</tr>\n<tr>\n<td width=\"300\">\n<p><strong>Cristopher C. Abalorio, MIT<br /> </strong>CED Dean</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in Computer Science</strong></p>\n<p>ACLC College of Butuan. 2013</p>\n<p>&nbsp;</p>\n<p><strong>Master in Information Technology<br /> </strong>Surigao State College of Technology</p>\n<p>&nbsp;</p>\n<p><strong>CERTIFICATION:</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Computer Hardware Servicing NCII</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Vulnerability Assessor (CVA)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Security Sentinel (CSS)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certificate of eligibility &ndash; Civil Service Honor graduate</strong></p>\n</td>\n</tr>\n<tr>\n<td width=\"300\">\n<p><strong>James Cloyd M. Bustillo, MSIT<br /> </strong>&nbsp;Assistant Professor / Innovation Associate Coordinator</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in Information System</strong></p>\n<p>Jose Rizal State University</p>\n<p>&nbsp;</p>\n<p><strong>Master of Science in Information Technology</strong></p>\n<p>Jose Rizal State University</p>\n<p>&nbsp;</p>\n<p><strong>CERTIFICATION:</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Computer System Servicing NC II</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Visual Graphic Design NC III</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Vulnerability Assessor (CVA)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Cyber Security Sentinel (CSS)</strong></p>\n</td>\n</tr>\n<tr>\n<td width=\"300\">\n<p><strong>Kevin P. Fajardo</strong></p>\n<p>Instructor IV / ACTS Adviser</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in Information Technology</strong></p>\n<p>ACLC College of Butuan</p>\n<p>&nbsp;</p>\n<p><strong>Master of Science in Information Technology(CAR)</strong></p>\n<p>Caraga State University</p>\n<p>&nbsp;</p>\n<p><strong>CERTIFICATION:</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Computer System Servicing NC II</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Visual Graphic Design NC III</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Vulnerability Assessor (CVA)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Cyber Security Sentinel (CSS)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Civil Service Professional Eligibility</strong></p>\n</td>\n</tr>\n<tr>\n<td width=\"300\">\n<p><strong>Dwight B. Fuentes</strong></p>\n<p>Instructor II</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in&nbsp; Information Technology</strong></p>\n<p>ACLC College of Butuan</p>\n<p>&nbsp;</p>\n<p><strong>Degree Units Earner in Master in Information Technology</strong></p>\n<p>Caraga State University</p>\n<p>&nbsp;</p>\n<p><strong>CERTIFICATION:</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Vulnerability Assessor (CVA)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certification in Visual Graphics Design (NCIII)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Cyber Security Sentinel (CSS)</strong></p>\n</td>\n</tr>\n<tr>\n<td width=\"300\">\n<p><strong>Mario Caday</strong></p>\n<p>Instructor II / TVET Associate</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in Information Technology</strong></p>\n<p>ACLC College of Butuan</p>\n<p>&nbsp;</p>\n<p><strong>Degree Units Earner in Master in Information Technology</strong></p>\n<p>Caraga State University</p>\n<p>&nbsp;</p>\n<p><strong>CERTIFICATION:</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Vulnerability Assessor (CVA)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certificate II &ndash; Computer Hardware Servicing</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Cyber Security Sentinel (CSS)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<strong>National Certificate II &ndash; Computer System Servicing (CSS)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certificate III &ndash; Visual Graphic Design (VGD)</strong></p>\n</td>\n</tr>\n<tr>\n<td width=\"300\">\n<p><strong>Michelle C. Elape</strong></p>\n<p>CED Adviser</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in Information System</strong></p>\n<p>Surigao State College of Technology</p>\n<p>&nbsp;</p>\n<p><strong>Master in Information Technology (CAR)</strong></p>\n<p>Surigao State College of Technology</p>\n<p>&nbsp;</p>\n<p><strong>CERTIFICATION:</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Vulnerability Assessor (CVA)</strong></p>\n</td>\n</tr>\n<tr>\n<td width=\"300\">\n<p><strong>Cliff Roche S. Miranda</strong></p>\n<p>Instructor I / ADSS Adviser</p>\n<p>&nbsp;</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in&nbsp; Information Technology</strong></p>\n<p>ACLC College of Butuan</p>\n<p>&nbsp;</p>\n<p><strong>CERTIFICATION:</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certification in Visual Graphics Design (NCIII)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certification Computer Systems Servicing (NCII)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Certified Vulnerability Assessor (CVA)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Sling Game Development</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Training Android Application Development Training</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Electronic Data Processing (EDP) Eligibility</strong></p>\n</td>\n</tr>\n<tr>\n<td width=\"300\">\n<p><strong>Joel C. Trillo</strong></p>\n<p>Instructor I / SAO Adviser</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in&nbsp; Computer Science</strong></p>\n<p>ACLC College of Butuan</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>CERTIFICATION:</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certificate II &ndash; Computer System Servicing (CSS)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certificate III &ndash; Visual Graphic Design (VGD)</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certificate III &ndash; 2D Animation</strong></p>\n</td>\n</tr>\n<tr>\n<td width=\"300\">\n<p><strong>Giovanni Mamogay</strong></p>\n<p>TVET Head</p>\n</td>\n<td width=\"324\">\n<p><strong>EDUCATION:</strong></p>\n<p><strong>Bachelor of Science in&nbsp; Information Technology</strong></p>\n<p>ACLC College of Butuan</p>\n<p>&nbsp;</p>\n<p><strong>CERTIFICATION:</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certification in Computer System Servicing NC II</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National Certification 2D Animation NC III</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>National TVET Trainer &ndash; 1</strong></p>\n<p>&bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Accredited Assessor in VGD NC III and 2D Animation NC III</strong></p>\n</td>\n</tr>\n</tbody>\n</table>\n<p><strong>COMPUTER EDUCATION DEPARTMENT</strong></p>', '2019-02-01', NULL);
INSERT INTO `acad_div` VALUES (2, 'Business Administration Department', '<p><strong>BUSINESS EDUCATION DEPARTMENT</strong></p>\n<p><strong><em>MAJOR COURSES:</em></strong></p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -MARKETING MANAGEMENT</p>\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -FINANCIAL MANAGEMENT</p>\n<p><strong><em>ACTIVITIES:</em></strong></p>\n<p><strong>LEADERSHIP TRAINING SEMINAR AND TEAM BUILDING</strong></p>\n<p>TRAIN YOUNG LEADERS TO BE RESPONSIBLE AND AT THE SAME TIME WORK WITH A TEAM.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p><strong>GENERAL ASSEMBLY</strong></p>\n<p>&nbsp;</p>\n<p>INFORMING STUDENTS ABOUT THE ROLE OF THE BUSINESS DEPARTMENT AND ACADEMIC ORGANIZATIONS.</p>\n<p>&nbsp;</p>\n<p><strong>JEMA DAY</strong></p>\n<p>CELEBRATE THE FOUNDATION OF THE JUNIOR EXECUTIVE MARKETING ASSOCIATION-ACLC BUTUAN.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p><strong>JFINEX DAY</strong></p>\n<p>&nbsp;</p>\n<p>CELEBRATE THE FOUNDATION OF THE JUNIOR FINANCE EXECUTIVE-ACLC BUTUAN.</p>\n<p>&nbsp;</p>\n<p><strong>SOCIAL NIGHT</strong></p>\n<p>STRENGTHENING TIES AND RELATIONSHIP.</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p><strong>INTRAMURALS</strong></p>\n<p>&nbsp;</p>\n<p>OBSERVE SPORTSMANSHIP AND TEAM WORK.</p>\n<p>&nbsp;</p>\n<p><strong>COMMUNITY EXTENSION SERVICE</strong></p>\n<p>EXTENDING HELP FOR THE COMMUNITY.</p>', '2019-02-01', NULL);
INSERT INTO `acad_div` VALUES (3, 'Basic Education Department', '', '2018-08-07', NULL);

-- ----------------------------
-- Table structure for acad_inst_cal
-- ----------------------------
DROP TABLE IF EXISTS `acad_inst_cal`;
CREATE TABLE `acad_inst_cal`  (
  `accal_id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `activity_name` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `start_date` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `start_time` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `end_time` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `location` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `type` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'acad/inst',
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`accal_id`) USING BTREE,
  INDEX `account_acad_inst_cal`(`ac_id`) USING BTREE,
  CONSTRAINT `account_acad_inst_cal` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 163 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of acad_inst_cal
-- ----------------------------
INSERT INTO `acad_inst_cal` VALUES (2, 'Computer Education Department', 'STUDENT ORIENTATION', '2018-08-10 - 2018-08-10', '08:00:00', '12:00:00', 'ACLC Library', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (3, 'General Education Department', 'SENIOR HIGH STUDENT/PARENT ORIENTATION - GRADE 11', '2018-07-31 - 2018-07-31', '10:00:00', '12:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (4, 'General Education Department', 'SENIOR HIGH STUDENT/PARENT ORIENTATION - GRADE 11', '2018-07-31 - 2018-07-31', '10:00:00', '12:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (5, 'General Education Department', 'ADJUSTMENT TO SENIOR HIGH SCHOOL LIFE SEMINAR', '2018-08-08 - 2018-08-08', '08:00:00', '12:00:00', 'ACLC NEW BUILDING 3RD FLOORD', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (6, 'Computer Education Department', 'PARENT ORIENTATION PROGRAM', '2018-08-11 - 2018-08-11', '08:00:00', '12:00:00', 'ACLC NEW BUILDING 3RD FLOOR', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (7, 'Business Administration Department', 'PARENT ORIENTATION PROGRAM', '2018-08-11 - 2018-08-11', '08:00:00', '12:00:00', 'ACLC NEW BUILDING 3RD FLOORD', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (8, 'Computer Education Department', 'NINOY AQUINO DAY', '2018-08-21 - 2018-08-21', '08:00:00', '12:00:00', 'ACLC Library', '<p>Non-Working Holiday</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (9, 'Business Administration Department', 'NINOY AQUINO DAY', '2018-08-21 - 2018-08-21', '08:00:00', '12:00:00', 'ACLC Library', '<p>Non-Working Holiday</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (10, 'General Education Department', 'NINOY AQUINO DAY', '2018-08-21 - 2018-08-21', '08:00:00', '12:00:00', 'ACLC Library', '<p>Non-Working Holiday</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (11, 'Computer Education Department', 'NATIONAL HEROES DAY', '2018-08-29 - 2018-08-29', '08:00:00', '17:00:00', 'ACLC Library', '<p>Non-Working Holiday</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (12, 'Computer Education Department', 'NATIONAL HEROES DAY', '2018-08-29 - 2018-08-29', '08:00:00', '17:00:00', 'ACLC Library', '<p>Non-Working Holiday</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (13, 'Business Administration Department', 'NATIONAL HEROES DAY', '2018-08-29 - 2018-08-29', '08:00:00', '17:00:00', 'ACLC Library', '<p>Non-Working Holiday</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (14, 'General Education Department', 'NATIONAL HEROES DAY', '2018-08-29 - 2018-08-29', '08:00:00', '17:00:00', 'ACLC Library', '<p>Non-Working Holiday</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (15, 'General Education Department', 'BUWAN NG WIKA', '2018-08-31 - 2018-08-31', '08:00:00', '17:00:00', 'ACLC Library', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (16, 'Computer Education Department', 'AMA UNIVERSITY CHAIRMAN\'S DAY', '2018-09-05 - 2018-09-05', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '<p>Non-Working Holiday</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (17, 'Business Administration Department', 'AMA UNIVERSITY CHAIRMAN\'S DAY', '2018-09-05 - 2018-09-05', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '<p>Non-Working Holiday</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (18, 'General Education Department', 'AMA UNIVERSITY CHAIRMAN\'S DAY', '2018-09-05 - 2018-09-05', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '<p>Non-Working Holiday</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (19, 'Computer Education Department', '1ST SEMESTER PRELIM EXAMINATION', '2018-09-06 - 2018-09-08', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (20, 'Business Administration Department', '1ST SEMESTER PRELIM EXAMINATION', '2018-09-06 - 2018-09-08', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (21, 'General Education Department', '1ST SEMESTER PRELIM EXAMINATION', '2018-09-06 - 2018-09-08', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (22, 'Computer Education Department', '1ST SEMESTER PRELIM  EXAMINATION', '2018-09-06 - 2018-09-08', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '<p>SPECIAL EXAMINATION</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (23, 'Computer Education Department', '1ST SEMESTER PRELIM  EXAMINATION', '2018-09-14 - 2018-09-14', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '<p>SPECIAL EXAMINATION</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (24, 'Business Administration Department', '1ST SEMESTER PRELIM  EXAMINATION', '2018-09-14 - 2018-09-14', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '<p>SPECIAL EXAMINATION</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (25, 'General Education Department', 'SCIENCE, MATH AND TECHNOLOGY FAIR', '2018-09-27 - 2018-09-28', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (26, 'General Education Department', 'SCIENCE, MATH & TECHNOLOGY FAIR', '2018-09-27 - 2018-09-28', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (27, 'Computer Education Department', 'DEPARTMENTAL RETOOLING DAY', '2018-10-01 - 2018-10-31', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (28, 'Business Administration Department', 'DEPARTMENTAL RETOOLING DAY', '2018-10-01 - 2018-10-31', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (29, 'General Education Department', 'DEPARTMENTAL RETOOLING DAY', '2018-10-01 - 2018-10-31', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (30, 'Computer Education Department', 'TEACHER\'S DAY', '2018-10-05 - 2018-10-05', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (31, 'Business Administration Department', 'TEACHER\'S DAY', '2018-10-05 - 2018-10-05', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (32, 'Business Administration Department', 'MIDTERM EXAM (COLLEGE)', '2018-10-10 - 2018-10-12', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (33, 'Computer Education Department', 'MIDTERM EXAM (COLLEGE)', '2018-10-10 - 2018-10-12', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (34, 'Computer Education Department', '1ST QUARTER EXAMINATION (K120', '2018-10-10 - 2018-10-12', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '<p>Senior Examination</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (35, 'General Education Department', '1ST QUARTER EXAMINATION (K120', '2018-10-10 - 2018-10-12', '08:00:00', '17:00:00', '999 J. C. Aquino Avenue, Butuan City, Agusan del Norte, Butuan City, Agusan Del Norte', '<p>Senior Examination</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (36, 'Computer Education Department', 'SPECIAL EXAM', '2018-10-19 - 2018-10-19', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (37, 'Business Administration Department', 'SPECIAL EXAM', '2018-10-19 - 2018-10-19', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (38, 'Computer Education Department', 'FOUNDATION WEEK', '2018-10-22 - 2018-10-26', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS DEPARTMENT</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (39, 'Business Administration Department', 'FOUNDATION WEEK', '2018-10-22 - 2018-10-26', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS DEPARTMENT</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (40, 'General Education Department', 'FOUNDATION WEEK', '2018-10-22 - 2018-10-26', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS DEPARTMENT</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (41, 'General Education Department', 'ALL SAINTS/SOULS DAY', '2018-10-22 - 2018-10-26', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS DEPARTMENT</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (42, 'Computer Education Department', 'ALL SAINTS/SOULS DAY', '2018-11-01 - 2018-11-02', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (43, 'Business Administration Department', 'ALL SAINTS/SOULS DAY', '2018-11-01 - 2018-11-02', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (44, 'General Education Department', 'ALL SAINTS/SOULS DAY', '2018-11-01 - 2018-11-02', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (45, 'Computer Education Department', 'PRE-FINALS EXAM (COLLEGE)', '2018-11-07 - 2018-11-09', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (46, 'Business Administration Department', 'PRE-FINALS EXAM (COLLEGE)', '2018-11-07 - 2018-11-09', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (47, 'General Education Department', 'ENGLISH FESTIVAL', '2018-11-14 - 2018-11-14', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (48, 'General Education Department', 'ENGLISH FESTIVAL', '2018-11-14 - 2018-11-14', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (49, 'General Education Department', 'ENGLISH FESTIVAL', '2018-11-14 - 2018-11-14', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (50, 'General Education Department', 'ENGLISH FESTIVAL', '2018-11-14 - 2018-11-14', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (51, 'Computer Education Department', 'SPECIAL EXAM ', '2018-11-16 - 2018-11-16', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (52, 'Business Administration Department', 'SPECIAL EXAM ', '2018-11-16 - 2018-11-16', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (53, 'Computer Education Department', 'NATIONAL BOOK WEEK', '2018-11-21 - 2018-11-22', '08:00:00', '17:00:00', 'ACLC LIBRARY', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (54, 'Business Administration Department', 'NATIONAL BOOK WEEK', '2018-11-21 - 2018-11-22', '08:00:00', '17:00:00', 'ACLC LIBRARY', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (55, 'General Education Department', 'NATIONAL BOOK WEEK', '2018-11-21 - 2018-11-22', '08:00:00', '17:00:00', 'ACLC LIBRARY', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (56, 'Computer Education Department', '1ST PRE-DELIBERATION ', '2018-12-06 - 2018-12-06', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>Registrar, ITE and BE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (57, 'Business Administration Department', '1ST PRE-DELIBERATION ', '2018-12-06 - 2018-12-06', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>Registrar, ITE and BE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (58, 'Computer Education Department', 'EARLY ENROLLMENT 2nd SEMESTER', '2018-12-17 - 2018-12-20', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (59, 'Business Administration Department', 'EARLY ENROLLMENT 2nd SEMESTER', '2018-12-17 - 2018-12-20', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (60, 'General Education Department', 'EARLY ENROLLMENT 2nd SEMESTER', '2018-12-17 - 2018-12-20', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (61, 'General Education Department', '2nd SEMESTER EXAM (K12)', '2018-12-12 - 2018-12-14', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (62, 'Computer Education Department', 'FINALS EXAM (COLLEGE)', '2018-12-10 - 2018-12-12', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (63, 'Business Administration Department', 'FINALS EXAM (COLLEGE)', '2018-12-10 - 2018-12-12', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (64, 'Computer Education Department', 'SPECIAL EXAM', '2018-12-14 - 2018-12-14', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (65, 'Business Administration Department', 'SPECIAL EXAM', '2018-12-14 - 2018-12-14', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (66, 'Computer Education Department', 'CHRISTMAS PARTY', '2018-12-15 - 2018-12-15', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (67, 'Computer Education Department', 'CHRISTMAS PARTY - STUDENTS', '2018-12-15 - 2018-12-15', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (68, 'Business Administration Department', 'CHRISTMAS PARTY - STUDENTS', '2018-12-15 - 2018-12-15', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (69, 'General Education Department', 'CHRISTMAS PARTY - SHS', '2018-12-17 - 2018-12-17', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>SENIOR HIGH SCHOOL</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (70, 'Computer Education Department', 'END OF SECOND SEMESTER', '2018-12-18 - 2018-12-18', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (71, 'Business Administration Department', 'END OF SECOND SEMESTER', '2018-12-18 - 2018-12-18', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (72, 'General Education Department', 'END OF SECOND SEMESTER', '2018-12-18 - 2018-12-18', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (73, 'Computer Education Department', 'CHRISTMAS PARTY - EMPLOYEES', '2018-12-21 - 2018-12-21', '08:00:00', '17:00:00', 'ACLC COLLEGE OF BUTUAN', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (74, 'Business Administration Department', 'CHRISTMAS PARTY - EMPLOYEES', '2018-12-21 - 2018-12-21', '08:00:00', '17:00:00', 'ACLC COLLEGE OF BUTUAN', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (75, 'General Education Department', 'CHRISTMAS PARTY - EMPLOYEES', '2018-12-21 - 2018-12-21', '08:00:00', '17:00:00', 'ACLC COLLEGE OF BUTUAN', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (76, 'Computer Education Department', 'START OF ENROLLMENT for 2nd Semester', '2019-01-07 - 2019-01-07', '08:00:00', '17:00:00', 'ACLC', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (77, 'Business Administration Department', 'START OF ENROLLMENT for 2nd Semester', '2019-01-07 - 2019-01-07', '08:00:00', '17:00:00', 'ACLC', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (78, 'General Education Department', 'START OF ENROLLMENT for 2nd Semester', '2019-01-07 - 2019-01-07', '08:00:00', '17:00:00', 'ACLC', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (79, 'General Education Department', 'RECOGNITION DAY', '2019-01-16 - 2019-01-17', '08:00:00', '17:00:00', 'ACLC', '<p>SENIOR HIGH</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (80, 'Computer Education Department', 'RESUME', '2019-01-07 - 2019-01-07', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (81, 'Business Administration Department', 'RESUME', '2019-01-07 - 2019-01-07', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (82, 'General Education Department', 'RESUME', '2019-01-07 - 2019-01-07', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (83, 'General Education Department', 'RESUME', '2019-01-07 - 2019-01-07', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (84, 'Computer Education Department', 'START OF CLASSES', '2019-01-21 - 2019-01-21', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (85, 'Business Administration Department', 'START OF CLASSES', '2019-01-21 - 2019-01-21', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (86, 'General Education Department', 'START OF CLASSES', '2019-01-21 - 2019-01-21', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (87, 'Computer Education Department', 'KAHIMUNAN 2018', '2019-01-21 - 2019-01-21', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS&nbsp;</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (88, 'Business Administration Department', 'KAHIMUNAN 2018', '2019-01-21 - 2019-01-21', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS&nbsp;</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (89, 'General Education Department', 'KAHIMUNAN 2018', '2019-01-21 - 2019-01-21', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS&nbsp;</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (90, 'Computer Education Department', 'KAHIMUNAN HOLIDAY', '2019-01-22 - 2019-01-22', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (91, 'Business Administration Department', 'KAHIMUNAN HOLIDAY', '2019-01-22 - 2019-01-22', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (92, 'General Education Department', 'KAHIMUNAN HOLIDAY', '2019-01-22 - 2019-01-22', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (93, 'Computer Education Department', 'CHINESE NEW YEAR', '2019-02-05 - 2019-02-05', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (94, 'Business Administration Department', 'CHINESE NEW YEAR', '2019-02-05 - 2019-02-05', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (95, 'General Education Department', 'CHINESE NEW YEAR', '2019-02-05 - 2019-02-05', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (96, 'General Education Department', 'PRELIM EXAM (COLLEGE)', '2019-02-21 - 2019-02-23', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>COLLEGE EXAMINATION</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (97, 'Business Administration Department', 'PRELIM EXAM (COLLEGE)', '2019-02-21 - 2019-02-23', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>COLLEGE EXAMINATION</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (98, 'Computer Education Department', 'EDSA REVOLUTION', '2019-02-25 - 2019-02-25', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (99, 'Business Administration Department', 'EDSA REVOLUTION', '2019-02-25 - 2019-02-25', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (100, 'General Education Department', 'EDSA REVOLUTION', '2019-02-25 - 2019-02-25', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (101, 'Computer Education Department', 'SPECIAL EXAMINATION', '2019-03-01 - 2019-03-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>SPECIAL EXAM FOR COLLEGE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (102, 'Business Administration Department', 'SPECIAL EXAMINATION', '2019-03-01 - 2019-03-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>SPECIAL EXAM FOR COLLEGE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (103, 'General Education Department', '1ST QUARTER EXAM (SHS)', '2019-03-21 - 2019-03-22', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>SENIOR HIGH EXAMINATION</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (104, 'General Education Department', 'MIDTERM EXAM (COLLEGE)', '2019-03-28 - 2019-03-30', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>COLLEGE</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (105, 'Business Administration Department', 'MIDTERM EXAM (COLLEGE)', '2019-03-28 - 2019-03-30', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>COLLEGE</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (106, 'Computer Education Department', 'SPECIAL EXAM (COLLEGE)', '2019-04-05 - 1970-01-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>COLLEGE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (107, 'Business Administration Department', 'SPECIAL EXAM (COLLEGE)', '2019-04-05 - 1970-01-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>COLLEGE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (108, 'Computer Education Department', '2ND PREDELIBERATION', '2019-04-05 - 1970-01-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (109, 'Business Administration Department', '2ND PREDELIBERATION', '2019-04-05 - 1970-01-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (110, 'General Education Department', '2ND PREDELIBERATION', '2019-04-05 - 1970-01-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (111, 'Computer Education Department', 'ARAW NG KAGITINGAN', '2019-04-09 - 1970-01-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (112, 'Business Administration Department', 'ARAW NG KAGITINGAN', '2019-04-09 - 1970-01-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (113, 'General Education Department', 'ARAW NG KAGITINGAN', '2019-04-09 - 1970-01-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (114, 'General Education Department', 'HOLY WEEK', '2019-04-18 - 2019-04-21', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (115, 'Business Administration Department', 'HOLY WEEK', '2019-04-18 - 2019-04-21', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (116, 'Computer Education Department', 'HOLY WEEK', '2019-04-18 - 2019-04-21', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (117, 'Computer Education Department', 'LABOR DAY', '2019-05-01 - 2019-05-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', '', NULL);
INSERT INTO `acad_inst_cal` VALUES (118, 'Computer Education Department', 'PRE-FINALS EXAM', '2019-05-02 - 2019-05-04', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>COLLEGE</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (119, 'Business Administration Department', 'PRE-FINALS EXAM', '2019-05-02 - 2019-05-04', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>COLLEGE</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (120, 'Computer Education Department', 'SPECIAL EXAM', '2019-05-10 - 2019-05-10', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>COLLEGE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (121, 'Business Administration Department', 'SPECIAL EXAM', '2019-05-10 - 2019-05-10', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>COLLEGE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (122, 'General Education Department', '2ND QUARTER EXAM (SHS)', '2019-05-22 - 2019-05-24', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>SENIOR HIGH EXAM</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (123, 'Computer Education Department', 'FINALS EXAM (COLLEGE GRADUATING)', '2019-05-22 - 2019-05-24', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (124, 'Business Administration Department', 'FINALS EXAM (COLLEGE GRADUATING)', '2019-05-22 - 2019-05-24', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (125, 'Computer Education Department', 'SPECIAL EXAM - GRADUATING', '2019-05-30 - 2019-05-30', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (126, 'Business Administration Department', 'SPECIAL EXAM - GRADUATING', '2019-05-30 - 2019-05-30', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (127, 'Computer Education Department', 'FINAL DELIBERATION GRADUATING STUDENTS - COLLEGE', '2019-05-31 - 2019-05-31', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>Registrar and ITE/BE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (128, 'Business Administration Department', 'FINAL DELIBERATION GRADUATING STUDENTS - COLLEGE', '2019-05-31 - 2019-05-31', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>Registrar and ITE/BE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (129, 'Computer Education Department', 'START OF ENROLLMENT (SUMMER CLASS)', '2019-06-03 - 2019-06-07', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>Registrar and ITE/BE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (130, 'Business Administration Department', 'START OF ENROLLMENT (SUMMER CLASS)', '2019-06-03 - 2019-06-07', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>Registrar and ITE/BE</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (131, 'General Education Department', 'FINAL DELIBERATION FOR GRADUATING STUDENTS (SHS)', '2019-06-04 - 2019-06-04', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>Registrar and Gen. Ed.</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (132, 'Computer Education Department', 'FINALS EXAM (COLLEGE NON-GRADUATING)', '2019-06-05 - 2019-06-08', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (133, 'Business Administration Department', 'FINALS EXAM (COLLEGE NON-GRADUATING)', '2019-06-05 - 2019-06-08', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (134, 'Computer Education Department', 'SPECIAL EXAM (NON-GRADUATING)', '2019-06-11 - 2019-06-11', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (135, 'Business Administration Department', 'SPECIAL EXAM (NON-GRADUATING)', '2019-06-11 - 2019-06-11', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (136, 'Computer Education Department', 'GRADUATION DAY (COLLEGE)', '2019-06-13 - 2019-06-13', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (137, 'Business Administration Department', 'GRADUATION DAY (COLLEGE)', '2019-06-13 - 2019-06-13', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>OSAS</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (138, 'General Education Department', 'GRADUATION DAY (SHS)', '2019-06-14 - 2019-06-14', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>Gen. Ed.</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (139, 'Computer Education Department', 'EDUL FITR', '2019-06-06 - 2019-06-06', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (140, 'Business Administration Department', 'EDUL FITR', '2019-06-06 - 2019-06-06', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (141, 'General Education Department', 'EDUL FITR', '2019-06-06 - 2019-06-06', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (142, 'Computer Education Department', 'START OF CLASSES (SUMMER)', '2019-06-10 - 2019-08-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (143, 'Business Administration Department', 'START OF CLASSES (SUMMER)', '2019-06-10 - 2019-08-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (144, 'Computer Education Department', 'INDEPENDENCE DAY', '2019-06-12 - 2019-06-12', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (145, 'Business Administration Department', 'INDEPENDENCE DAY', '2019-06-12 - 2019-06-12', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (146, 'General Education Department', 'INDEPENDENCE DAY', '2019-06-12 - 2019-06-12', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>NON-WORKING HOLIDAY</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (147, 'Computer Education Department', 'ANNUAL OPERATIONAL PLANNING FOR SY 2018-2019', '2019-06-27 - 2019-06-28', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>SD, QMS, ACAD, NON-ACAD</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (148, 'Business Administration Department', 'ANNUAL OPERATIONAL PLANNING FOR SY 2018-2019', '2019-06-27 - 2019-06-28', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>SD, QMS, ACAD, NON-ACAD</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (149, 'General Education Department', 'ANNUAL OPERATIONAL PLANNING FOR SY 2018-2019', '2019-06-27 - 2019-06-28', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>SD, QMS, ACAD, NON-ACAD</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (150, 'Computer Education Department', 'MIDTERM EXAM (COLLEGE SUMMER)', '2019-06-27 - 2019-06-29', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (151, 'Business Administration Department', 'MIDTERM EXAM (COLLEGE SUMMER)', '2019-06-27 - 2019-06-29', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (152, 'Computer Education Department', 'TEAMBUILDING', '2019-07-03 - 2019-07-06', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>*NOT SPECIFIED</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (153, 'Business Administration Department', 'TEAMBUILDING', '2019-07-03 - 2019-07-06', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>*NOT SPECIFIED</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (154, 'General Education Department', 'TEAMBUILDING', '2019-07-03 - 2019-07-06', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>*NOT SPECIFIED</p>', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (155, 'Computer Education Department', 'BUDGET HEARING', '2019-07-08 - 2019-07-08', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>ALL</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (156, 'Business Administration Department', 'BUDGET HEARING', '2019-07-08 - 2019-07-08', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>ALL</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (157, 'General Education Department', 'BUDGET HEARING', '2019-07-08 - 2019-07-08', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>ALL</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (158, 'Computer Education Department', 'ALUMNI HOMECOMING', '2019-07-20 - 2019-07-20', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>ALUMNI</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (159, 'Business Administration Department', 'ALUMNI HOMECOMING', '2019-07-20 - 2019-07-20', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '<p>ALUMNI</p>', 'one day', NULL);
INSERT INTO `acad_inst_cal` VALUES (160, 'General Education Department', 'TEACHERS\' TRAINING', '2019-07-23 - 2019-07-25', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (161, 'Computer Education Department', 'FINALS EXAM (COLLEGE SUMMER)', '2019-07-30 - 2019-08-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);
INSERT INTO `acad_inst_cal` VALUES (162, 'Business Administration Department', 'FINALS EXAM (COLLEGE SUMMER)', '2019-07-30 - 2019-08-01', '08:00:00', '17:00:00', '#999 HDS BLDG. J. C. AQUINO AVE. BUTUAN CITY, AGUSAN DEL NORTE', '', 'more than', NULL);

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account`  (
  `ac_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `reg_date` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_id` int(11) NULL DEFAULT NULL COMMENT 'info taken from HRMS',
  PRIMARY KEY (`ac_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of account
-- ----------------------------

-- ----------------------------
-- Table structure for add_cont
-- ----------------------------
DROP TABLE IF EXISTS `add_cont`;
CREATE TABLE `add_cont`  (
  `adcont_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`adcont_id`) USING BTREE,
  INDEX `account_add_cont`(`ac_id`) USING BTREE,
  CONSTRAINT `account_add_cont` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of add_cont
-- ----------------------------

-- ----------------------------
-- Table structure for admission_req
-- ----------------------------
DROP TABLE IF EXISTS `admission_req`;
CREATE TABLE `admission_req`  (
  `ad_req_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `si_id` int(11) NOT NULL,
  PRIMARY KEY (`ad_req_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admission_req
-- ----------------------------

-- ----------------------------
-- Table structure for capstone
-- ----------------------------
DROP TABLE IF EXISTS `capstone`;
CREATE TABLE `capstone`  (
  `caps_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `summary` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_published` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_posted` date NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`caps_id`) USING BTREE,
  INDEX `account_capstone`(`ac_id`) USING BTREE,
  CONSTRAINT `account_capstone` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of capstone
-- ----------------------------
INSERT INTO `capstone` VALUES (1, 'Book of Abstract for Manila', '', '2018-12-20', '2019-04-21', NULL, NULL);

-- ----------------------------
-- Table structure for case_studies
-- ----------------------------
DROP TABLE IF EXISTS `case_studies`;
CREATE TABLE `case_studies`  (
  `cs_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `summary` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_published` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_posted` date NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cs_id`) USING BTREE,
  INDEX `account_case_studies`(`ac_id`) USING BTREE,
  CONSTRAINT `account_case_studies` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of case_studies
-- ----------------------------
INSERT INTO `case_studies` VALUES (1, 'Evaluation on Inventory Management of Angging Dry Goods Store in Buenavista, Agusan del Norte', '', '2019-05-27', '2019-05-27', NULL, '1-angging - prnitin na-converted.pdf');
INSERT INTO `case_studies` VALUES (2, 'Assessment of Accounts Receivable Management Practices of Butuan Champion Hardware', '', '2019-05-27', '2019-05-27', NULL, '2-butuan champion hardware-converted.pdf');

-- ----------------------------
-- Table structure for cont_loc
-- ----------------------------
DROP TABLE IF EXISTS `cont_loc`;
CREATE TABLE `cont_loc`  (
  `cl_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_num` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fax_num` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `embedmap` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `location` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`cl_id`) USING BTREE,
  INDEX `account_cont_loc`(`ac_id`) USING BTREE,
  CONSTRAINT `account_cont_loc` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cont_loc
-- ----------------------------
INSERT INTO `cont_loc` VALUES (1, '(085) 341 57191111', '(085) 341 5719', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.307500270848!2d125.52089331539405!3d8.943785993579999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c057cb76d6ff%3A0x9e66a4fd9d59ca6!2sAMA+Computer+Learning+Center!5e0!3m2!1sen!2sph!4v1530660476714', '999 J.C. Aquino Avenue, Butuan City Ah 26, Butuan City, 8600 Agusan Del Norte', NULL);

-- ----------------------------
-- Table structure for contact_info
-- ----------------------------
DROP TABLE IF EXISTS `contact_info`;
CREATE TABLE `contact_info`  (
  `cont_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tel_no` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fax_no` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email_add` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `map_url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`cont_info_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of contact_info
-- ----------------------------
INSERT INTO `contact_info` VALUES (2, '999 H.D.S Building J.C Aquino Ave. Butuan City, Agusan Del Norte Philippines 8600 ', '342-2254', '825-2245', 'aclcbutuanadmission@gmail.com', 'qdqwdwqd', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15765.356827297072!2d125.51872071977536!3d8.940856750000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e66a4fd9d59ca6!2sAMA+Computer+Learning+Center!5e0!3m2!1sen!2sph!4v1532675541559');

-- ----------------------------
-- Table structure for core_values
-- ----------------------------
DROP TABLE IF EXISTS `core_values`;
CREATE TABLE `core_values`  (
  `cv_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`cv_id`) USING BTREE,
  INDEX `account_core_values`(`ac_id`) USING BTREE,
  CONSTRAINT `account_core_values` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of core_values
-- ----------------------------
INSERT INTO `core_values` VALUES (1, '<p style=\"text-align: justify;\"><strong>A</strong>ccountability and Responsibility, <strong>C</strong>reativity, <strong>L</strong>eadership, <strong>C</strong>ommitment to excellence, <strong>S</strong>ustainability</p>\n<p style=\"text-align: justify;\"><strong>Goals</strong></p>\n<p style=\"text-align: justify;\"><strong>I</strong>nnovation, <strong>F</strong>aculty,<strong> I</strong>nfrastructure and facilities, <strong>G</strong>raduates,, <strong>H</strong>appy employees, <strong>T</strong>echnopreneurs, Sustainability, Partnership</p>', '2018-10-16', NULL);

-- ----------------------------
-- Table structure for doc_rec
-- ----------------------------
DROP TABLE IF EXISTS `doc_rec`;
CREATE TABLE `doc_rec`  (
  `dr_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`dr_id`) USING BTREE,
  INDEX `account_doc_rec`(`ac_id`) USING BTREE,
  CONSTRAINT `account_doc_rec` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of doc_rec
-- ----------------------------
INSERT INTO `doc_rec` VALUES (1, '<div class=\"mb-20\">\r\n<h4 class=\"c-gray f-16\">College Level</h4>\r\n<div class=\"mb-20 pl-15\">\r\n<h6 class=\"c-gray f-14\">for New Students</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>High School Card</li>\r\n<li>Honorable Dismissal</li>\r\n<li>Form 137A</li>\r\n<li>Birth Certificate</li>\r\n<li>Good Moral Character Certificate</li>\r\n</ul>\r\n</div>\r\n<div class=\"pl-15\">\r\n<h6 class=\"c-gray f-14\">for Old Students</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>High School Card</li>\r\n<li>Honorable Dismissal</li>\r\n<li>Form 137A</li>\r\n<li>Birth Certificate</li>\r\n<li>Good Moral Character Certificate</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div>\r\n<h4 class=\"c-gray f-16\">Senior High School Level</h4>\r\n<div class=\"mb-20 pl-15\">\r\n<h6 class=\"c-gray f-14\">for New Students</h6>\r\n<ul class=\"c-gray f-12 pl-15 lmb-10\">\r\n<li>High School Card</li>\r\n<li>Honorable Dismissal</li>\r\n<li>Form 137A</li>\r\n<li>Birth Certificate</li>\r\n<li>Good Moral Character Certificate</li>\r\n</ul>\r\n</div>\r\n</div>', '2018-08-30 02:49:13 PM', NULL);

-- ----------------------------
-- Table structure for easp
-- ----------------------------
DROP TABLE IF EXISTS `easp`;
CREATE TABLE `easp`  (
  `easp_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` date NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`easp_id`) USING BTREE,
  INDEX `account_easp`(`ac_id`) USING BTREE,
  CONSTRAINT `account_easp` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of easp
-- ----------------------------
INSERT INTO `easp` VALUES (1, 'External Affairs & Special Projects Division', '', '2018-08-07', NULL);
INSERT INTO `easp` VALUES (2, 'Corporate Marketing and External Affairs', '', '2018-08-07', NULL);
INSERT INTO `easp` VALUES (3, 'Business Linkages and Partnership Projects', '<div class=\"col-md-6\"><img class=\"img img-responsive\" src=\"http://[:1]\" alt=\"\" /></div>\r\n<div class=\"col-md-18\">&nbsp;</div>\r\n<div class=\"col-md-24 pt-10\">&nbsp;</div>', '2018-08-07', NULL);
INSERT INTO `easp` VALUES (4, 'Corporate Social Responsibility Project', '', '2018-08-07', NULL);

-- ----------------------------
-- Table structure for enrollment_flow
-- ----------------------------
DROP TABLE IF EXISTS `enrollment_flow`;
CREATE TABLE `enrollment_flow`  (
  `en_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`en_id`) USING BTREE,
  INDEX `account_enrollment_flow`(`ac_id`) USING BTREE,
  CONSTRAINT `account_enrollment_flow` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of enrollment_flow
-- ----------------------------
INSERT INTO `enrollment_flow` VALUES (1, '<div class=\"row mb-30\">\r\n<h4 class=\"normal c-gray f-16 mb-15\">College Level</h4>\r\n<div class=\"col-md-12\">\r\n<h5 class=\"normal c-gray f-14 mb-15 pl-5\">for New Student</h5>\r\n<ul class=\"f-12 pl-15 c-lgray\">\r\n<li class=\"mb-10\">Step 1: Admission (Admission Officer)</li>\r\n<li class=\"mb-10\">Step 2: Examination (Internet Laboratory)</li>\r\n<li class=\"mb-10\">Step 3: Entrance / PRISAA Fee (Cashier)</li>\r\n<li class=\"mb-10\">Step 4: Departmental Fee (SSG Office)</li>\r\n<li class=\"mb-10\">Step 5: 5.1 : Advising (Department Head)</li>\r\n<li class=\"mb-10 pl-30\">5.2 : Encoding (Computer Lab 2-3)</li>\r\n<li class=\"mb-10 pl-30\">5.3: GE Loading / Section (General Education Office)</li>\r\n<li class=\"mb-10\">Step 7 : Printing of Reg. Form ( Accounting Department )</li>\r\n<li class=\"mb-10\">Step 8 : Enrollement Verification (Registrar&rsquo;s Office)</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-12\">\r\n<h5 class=\"normal c-gray f-14 mb-15 pl-5\">for Old Student</h5>\r\n<ul class=\"f-12 pl-15 c-lgray\">\r\n<li class=\"mb-10\">Step 1: Admission (Admission Officer)</li>\r\n<li class=\"mb-10\">Step 2: Examination (Internet Laboratory)</li>\r\n<li class=\"mb-10\">Step 3: Entrance / PRISAA Fee (Cashier)</li>\r\n<li class=\"mb-10\">Step 4: Departmental Fee (SSG Office)</li>\r\n<li class=\"mb-10\">Step 5: 5.1 : Advising (Department Head)</li>\r\n<li class=\"mb-10 pl-30\">5.2 : Encoding (Computer Lab 2-3)</li>\r\n<li class=\"mb-10 pl-30\">5.3: GE Loading / Section (General Education Office)</li>\r\n<li class=\"mb-10\">Step 7 : Printing of Reg. Form ( Accounting Department )</li>\r\n<li class=\"mb-10\">Step 8 : Enrollement Verification (Registrar&rsquo;s Office)</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"row mb-20\">\r\n<h4 class=\"normal c-gray f-16 mb-15\">Senior High School Level</h4>\r\n<div class=\"col-md-12\">\r\n<h5 class=\"normal c-gray f-14 mb-15 pl-5\">for New Student</h5>\r\n<ul class=\"f-12 pl-15 c-lgray\">\r\n<li class=\"mb-10\">Step 1: Admission (Admission Officer)</li>\r\n<li class=\"mb-10\">Step 2: Examination (Internet Laboratory)</li>\r\n<li class=\"mb-10\">Step 3: Entrance / PRISAA Fee (Cashier)</li>\r\n<li class=\"mb-10\">Step 4: Departmental Fee (SSG Office)</li>\r\n<li class=\"mb-10\">Step 5: 5.1 : Advising (Department Head)</li>\r\n<li class=\"mb-10 pl-30\">5.2 : Encoding (Computer Lab 2-3)</li>\r\n<li class=\"mb-10 pl-30\">5.3: GE Loading / Section (General Education Office)</li>\r\n<li class=\"mb-10\">Step 7 : Printing of Reg. Form ( Accounting Department )</li>\r\n<li class=\"mb-10\">Step 8 : Enrollement Verification (Registrar&rsquo;s Office)</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-12\">\r\n<h5 class=\"normal c-gray f-14 mb-15 pl-5\">for Old Student</h5>\r\n<ul class=\"f-12 pl-15 c-lgray\">\r\n<li class=\"mb-10\">Step 1: Admission (Admission Officer)</li>\r\n<li class=\"mb-10\">Step 2: Examination (Internet Laboratory)</li>\r\n<li class=\"mb-10\">Step 3: Entrance / PRISAA Fee (Cashier)</li>\r\n<li class=\"mb-10\">Step 4: Departmental Fee (SSG Office)</li>\r\n<li class=\"mb-10\">Step 5: 5.1 : Advising (Department Head)</li>\r\n<li class=\"mb-10 pl-30\">5.2 : Encoding (Computer Lab 2-3)</li>\r\n<li class=\"mb-10 pl-30\">5.3: GE Loading / Section (General Education Office)</li>\r\n<li class=\"mb-10\">Step 7 : Printing of Reg. Form ( Accounting Department )</li>\r\n<li class=\"mb-10\">Step 8 : Enrollement Verification (Registrar&rsquo;s Office)</li>\r\n</ul>\r\n</div>\r\n</div>', '2018-05-04 02:49:22 PM', NULL);

-- ----------------------------
-- Table structure for entrance_exam
-- ----------------------------
DROP TABLE IF EXISTS `entrance_exam`;
CREATE TABLE `entrance_exam`  (
  `ee_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ee_id`) USING BTREE,
  INDEX `account_entrance_exam`(`ac_id`) USING BTREE,
  CONSTRAINT `account_entrance_exam` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of entrance_exam
-- ----------------------------
INSERT INTO `entrance_exam` VALUES (1, '<p class=\"c-gray\">Entrance exam will be conducted during Enrollment Period</p>\r\n<div class=\"pl-15 mb-15\">\r\n<h4 class=\"f-16 c-gray mb-5\">College Level</h4>\r\n<p class=\"pl-15 c-gray\">Monday to Friday 08:00 AM - 12:00 PM and 02:00 PM - 05:00 PM</p>\r\n</div>\r\n<div class=\"pl-15\">\r\n<h4 class=\"f-16 c-gray mb-5\">Senior High School Level</h4>\r\n<p class=\"pl-15 c-gray\">Monday to Friday 08:00 AM - 12:00 PM and 02:00 PM - 05:00 PM</p>\r\n</div>', '2018-08-07 08:00:44 AM', NULL);

-- ----------------------------
-- Table structure for excel_info
-- ----------------------------
DROP TABLE IF EXISTS `excel_info`;
CREATE TABLE `excel_info`  (
  `ex_id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ex_id`) USING BTREE,
  INDEX `account_excel_info`(`ac_id`) USING BTREE,
  CONSTRAINT `account_excel_info` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of excel_info
-- ----------------------------
INSERT INTO `excel_info` VALUES (1, '<p style=\"text-align: justify;\">EXCEL NEWS Publication is the Official Student Publication of the ACLC College of Butuan. Hearts on, Minds on, we are the Campus Voice. EXCELnews seeks to put a name and a voice to every heart and soul in the campus -- we encourage students to socialize, speak up, and share their story in this ACLC journey.</p>', NULL);

-- ----------------------------
-- Table structure for excel_pers_info
-- ----------------------------
DROP TABLE IF EXISTS `excel_pers_info`;
CREATE TABLE `excel_pers_info`  (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fullname` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `designation` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `acad_year` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`exp_id`) USING BTREE,
  INDEX `account_excel_pers_info`(`ac_id`) USING BTREE,
  CONSTRAINT `account_excel_pers_info` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of excel_pers_info
-- ----------------------------

-- ----------------------------
-- Table structure for excel_publish
-- ----------------------------
DROP TABLE IF EXISTS `excel_publish`;
CREATE TABLE `excel_publish`  (
  `ep_id` int(11) NOT NULL AUTO_INCREMENT,
  `acad_year` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `semester` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cover` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `cp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ep_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of excel_publish
-- ----------------------------
INSERT INTO `excel_publish` VALUES (11, '2017-2018', '1st Semester', 'The magazine issue for the 1st Semester, Academic Year 2017-2018 cover is a sequel to the past issue of the Excelnews magazine. Exemplifying the will to stand up and speak up, the monkey represents a resolute fighter ready to take its first step on unwinding his journey in this unsound and challenging world. The budding flowers, awaited to blossom and turn into a fruit, embody the hope of success, that we aim despite of experiencing the adversities along the way of kicking towards our goals. Just like flowers, each of us are gifted with different assets and capabilities. We just have to choose to blossom and put a positive mindset for speaking out our rights and inspire others. ', 'plugins/images/excel_pers_info/pdf_file/11.pdf', NULL, 'plugins/images/excel_pers_info/pdf_cover/11.jpg');
INSERT INTO `excel_publish` VALUES (12, '2016-2017', '1st Semester', 'The magazine cover for Academic Year 2016-2017 speaks of strength within. The lifeless, hopeless branches represent the adversities which, in real life, are categorized as physical adversity, mental adversity, emotional adversity, financial adversity, social adversity, and spiritual adversity. The flower that blooms represents as the strong person who has survived all the adversity he’ going through with a smile on the face, the person who still stands eight times after he has fallen for the seventh time, the person who still believes in the beauty of every person despite being called unpleasant, unattractive, awful, unlovely, or simply, ugly, and the list goes on… These people are rare and beautiful. Remember, it’s not the troubles that define us but how we handle those does.', 'plugins/images/excel_pers_info/pdf_file/12.pdf', NULL, 'plugins/images/excel_pers_info/pdf_cover/12.');
INSERT INTO `excel_publish` VALUES (16, '2017-2018', '1st Semester', '', 'plugins/images/excel_pers_info/pdf_file/16.pdf', NULL, NULL);

-- ----------------------------
-- Table structure for excelnews
-- ----------------------------
DROP TABLE IF EXISTS `excelnews`;
CREATE TABLE `excelnews`  (
  `exc_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `summary` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_published` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_posted` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`exc_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of excelnews
-- ----------------------------
INSERT INTO `excelnews` VALUES (1, 'Excelnews Magazine 1st Semester AY 2017-2018', '', '2017-11-17', '2019-04-24 12:11:29 PM', NULL, '1-ExcelNews Magazine.pdf');

-- ----------------------------
-- Table structure for file_uploads
-- ----------------------------
DROP TABLE IF EXISTS `file_uploads`;
CREATE TABLE `file_uploads`  (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_location` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'plugins\\images\\no-image.jpg',
  `si_id` int(11) NOT NULL,
  PRIMARY KEY (`file_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of file_uploads
-- ----------------------------

-- ----------------------------
-- Table structure for history
-- ----------------------------
DROP TABLE IF EXISTS `history`;
CREATE TABLE `history`  (
  `hist_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`hist_id`) USING BTREE,
  INDEX `account_history`(`ac_id`) USING BTREE,
  CONSTRAINT `account_history` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of history
-- ----------------------------
INSERT INTO `history` VALUES (1, '<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">In every life/existence is a beginning, a birth, an epiphany. No matter how something or someone is created there will always be a story behind it. And mine is how Butuan Information Technology Services, Inc. (BITSI) came to be as it is today, a prestigious institution giving quality education in I.T. not only to Butuanons but to all Caraganons as well.&nbsp;&nbsp;</span><span style=\"font-weight: 400;\">BITSI started as a dream of our late grandparents, former congressman/mayor Guillermo R. Sanchez and Helen D. Sanchez. Then, the dream was to give back to the community particularly the butuanons, something that will last a lifetime. At 1</span><span style=\"font-weight: 400;\">st</span><span style=\"font-weight: 400;\"> the annex building was constructed to accommodate a business to cater to every butuanons needs from day to day, a grocery was the most viable choice thus S-Mart was opened. At that time there was no fully operational grocery. Then in 1997, the dream became a reality as BITSI became part of Butuan\'s educational institution that offers courses in computers, to be precise the application of computer of business, accounting, and management. It started operating franchise with AMA College Inc. which the institution is now called ACLC College of Butuan. </span></p>\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">We started out with 2 year courses particularly; Computer System and Design Programming (CSDP), Computer Based Accounting (CBA), </span><span style=\"font-weight: 400;\">Computer System and Network Technology (CSNT), Business Information Management (BIM).&nbsp;</span><span style=\"font-weight: 400;\">Yearly we\'ve increased our enrollees from 150 in 1997 to our current number of 1,800 students. Increasing more than 100 percent and employing more instructors and office personnel. Not to mention upgrading and purchasing new state of the art equipment such as computers, printers, servers, air cons and others. During those 19 years of operations we\'ve only borrowed once at a said amount of 2 M to construct the main bldg. and the rest from our operations. All these was steadily but increasingly guided by our Managing Director, Mr. Daniel Sanchez and our School Director, Mr. Alan Atega.&nbsp;</span><span style=\"font-weight: 400;\">Because of our status we were awarded by AMA College, Inc. with an additional franchise, aside from our current 2 year courses we can offer 4 year courses such as;</span> <span style=\"font-weight: 400;\">BS in Information Technology (BSIT); BS in Business Administration Major in Operation Mgt., Financial Mgt., Marketing Mgt.(BSBA); BS in Information System (BSIS); BS in Computer Science (BSCS) last 2005.&nbsp;&nbsp;</span><span style=\"font-weight: 400;\">As 5 years pass and the need to upgrade, renovate and construct additional building arises to accommodate the rising demand of computer education and I.T. experts, &nbsp;we are looking into asking for financial institution(s) particularly banks for help with this endeavor as to further increase our population and in line give quality education not only for Butuanons but for everyone who wants to have a degree in computer. The school has a unique approach to interacting with students, we consider them as part of our family, as we patiently give them all the opportunity to learn and further enhance their skills so that when they go out into the real world they won\'t be disappointed that they graduated from ACLC College of Butuan...As what my grandfather wanted for this school is being realized by the current crop of instructors, personnel, our school director and our managing director.&nbsp;</span><span style=\"font-weight: 400;\">As the demand </span><strong>for cyber services </strong><span style=\"font-weight: 400;\">has increase so is the population of students enrolling in computer schools in which ACLC College is the only school that is dedicated in offering courses in computers and the requirement in cyber services is evident in these data from the Mindanao Technical-Vocational Education and Training (MinTVET), a project that was created last 2009 July to help challenge the private technical-vocational institutions (TVI) to respond to the needs of the business sector to train and provide skills for these sectors in which ACLC College of Butuan is seating as a member.</span></p>\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">In the Department of Labor and Employment report the big demand for 2006-2010 are the sectors of agribusiness (2,044,161) followed by </span><em><span style=\"font-weight: 400;\">CYBERSERVICES (1,383,890), </span></em><span style=\"font-weight: 400;\">hotel and restaurant (400,280), medical tourism (128,150), health services (58,003), mining industry (39,382) and aviation (27,581). Of these sectors the shortages of skills for agri fishery, CYBERSERVICES and medical tourism are expected to persist in the next 5 (five) years. </span><span style=\"font-weight: 400;\">Of the Cyber services occupations the Customer Contact Agents still leads with 735,500 or 53% followed by Back Office Processing with 393,100 or 28% then software development/programmers 122,100 or 9%, medical transcriptionists 109,590 or 8 % and lastly animation with 24,926 or 2 %.&nbsp;&nbsp;</span><span style=\"font-weight: 400;\">All these occupations are being catered by ACLC College of Butuan as to date except animation in which it is in line with our development program as we are putting up a course dedicated to this curriculum, as the demand will increase for the outsourcing of animators. Here are some examples of animation driven companies; Pixar by Disney, DreamWorks, Facebook, Instagram and others. Good thing about this course is that you don\'t have to relocate to another place or country to work, all you need is the basic equipment and the skills to perform the task at hand. &nbsp;</span><span style=\"font-weight: 400;\">In connection with this, The Philippine government says it expects BPO revenues to hit $9 billion in 2010 due; industry representatives estimate revenues will reach $12 billion and employ 700,000 workers in the Philippines in 2011. </span><span style=\"font-weight: 400;\">Computer game development</span><span style=\"font-weight: 400;\">, animation and software development despite of the limited supply of talents posted 25% rise in revenues last year, while the sector known as </span><span style=\"font-weight: 400;\">knowledge process outsourcing</span><span style=\"font-weight: 400;\"> (KPO), which offer higher-value services than the likes of call centers, grew by 23% to $1.1 billion. Other non-voice segments also have room for growth: grew by 8% to $186.&nbsp;</span><span style=\"font-weight: 400;\">\"The back-office and KPO sector has been growing at a faster rate than the voice-based sector and we believe this trend will continue,\" said Gigi Virata, information and research director of the Business Process Association of the Philippines (BPAP), a trade organization. \"In the next four or five years, we may see the voice and non-voice sectors at about the same size in the Philippines,\" she predicted.</span></p>\n<p style=\"text-align: justify;\"><span style=\"font-weight: 400;\">Currently ACLC College of Butuan is the only IT school in CARAGA that heavily invested in partnership with Technology Companies to ensure relevant in IT and Business education. Tech partners provide immersion, training, certification, OJT and internship program for the students and faculty staffs to constantly upgrade the competency and skills to this fast changing industry. All this initiative gives ACLC Butuan competitive advantage against its competitor in terms of relevance to the need of industry and better chance of student landing a job in the ICT sector.&nbsp;&nbsp;</span><span style=\"font-weight: 400;\">ACLC College of Butuan (ACB) continues to improve its educational service, recently the institution ventures again to another journey of being an ISO 9001 Certified in the future, as one of its road mapping goals.</span></p>', '2018-10-17', NULL);

-- ----------------------------
-- Table structure for hymn
-- ----------------------------
DROP TABLE IF EXISTS `hymn`;
CREATE TABLE `hymn`  (
  `hymn_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`hymn_id`) USING BTREE,
  INDEX `account_hymn`(`ac_id`) USING BTREE,
  CONSTRAINT `account_hymn` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of hymn
-- ----------------------------
INSERT INTO `hymn` VALUES (1, '<center>\n<p><em>1st stanza:</em></p>\n<p>You put us in mold<br />dear Alma Mater<br />you hold the future<br />in this race against time<br />Through the years in your folds<br />we nurture our dreams<br />our promise to you<br />the toast is for you</p>\n<p><em>Refrain:</em></p>\n<p>Dear Alma Mater<br />you have given us arms<br />for the battles of life<br />and the conquest of our dreams</p>\n<p>Oh, dear AMA<br />you have sharpened our minds<br />we will triumph by which<br />the toast is for you</p>\n<p><em>2nd stanza:</em></p>\n<p>The light up ahead<br />is victory foreseen<br />with noble desires<br />we behold its gleam<br />our motherland lays<br />her hopes on the youth<br />the future that we hold<br />is her hope that unfolds</p>\n<p><em>(Repeat Refrain)</em></p>\n</center>', '2019-04-02', NULL);

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `path` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `function` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'carousel/logo/etc',
  `ac_id` int(11) NULL DEFAULT NULL,
  `position` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `showable` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`img_id`) USING BTREE,
  INDEX `account_images`(`ac_id`) USING BTREE,
  CONSTRAINT `account_images` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES (4, 'plugins/images/enrollment_flow/4.png', 'enrollment_flow', NULL, NULL, NULL);
INSERT INTO `images` VALUES (7, 'plugins/images/main_page/7.jpg', 'main', NULL, '3', 'enabled');
INSERT INTO `images` VALUES (8, 'plugins/images/main_page/8.jpg', 'main', NULL, '2', 'enabled');
INSERT INTO `images` VALUES (18, 'plugins/images/main_page/18.jpg', 'main', NULL, '1', 'enabled');
INSERT INTO `images` VALUES (19, 'plugins/images/main_page/19.jpg', 'main', NULL, '4', 'enabled');
INSERT INTO `images` VALUES (20, 'plugins/images/aclc_about/20.jpg', 'about', NULL, '1', 'enabled');

-- ----------------------------
-- Table structure for institutional
-- ----------------------------
DROP TABLE IF EXISTS `institutional`;
CREATE TABLE `institutional`  (
  `ins_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `summary` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_published` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_posted` date NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ins_id`) USING BTREE,
  INDEX `account_institutional`(`ac_id`) USING BTREE,
  CONSTRAINT `account_institutional` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of institutional
-- ----------------------------
INSERT INTO `institutional` VALUES (1, 'RIED Multidisciplinary Research Journal (RMRJ)', '', '2018-11-29', '2019-04-21', NULL, '1-RIED-Multidisciplinary-Research-Journal-Online.docx');
INSERT INTO `institutional` VALUES (2, 'Book of Abstract for Manila', '', '2019-04-21', '2019-04-21', NULL, '2-Book-of-Abstract-for-Manila.docx');

-- ----------------------------
-- Table structure for main_about
-- ----------------------------
DROP TABLE IF EXISTS `main_about`;
CREATE TABLE `main_about`  (
  `mac_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`mac_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of main_about
-- ----------------------------
INSERT INTO `main_about` VALUES (1, '<p><span style=\"color: #ff0000;\">test content!!</span></p>', '2018-10-30', NULL);

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message`  (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `details` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_receive` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `time_receive` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mac_address` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`msg_id`) USING BTREE,
  INDEX `account_message`(`ac_id`) USING BTREE,
  CONSTRAINT `account_message` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 99 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES (1, 'John Paul Arquita', NULL, 'Good Day po! Open po ba yung Registrar Office ng School after election April 14, 2019.', '2019-04-29', '11:45:52 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (2, 'Joshua N. Wright', NULL, 'Join Now! Earn cash through 2nd Largest Ads platform: Media.net\r\n\r\nDo you wish to make money through ads that do not hamper user experience?\r\n\r\nMedia.net is the 2nd largest Contextual Advertising platform in the world which exclusively powers the Yahoo! Bing Ad Marketplace of advertisers globally.\r\n\r\nEach publisher with Media.net is assigned a dedicated account manager who proactively gives the best possible suggestions so as to drive higher revenue from the ads, undertakes A/B testing with various ad spots, and creates custom ad units on your request \r\n\r\nJoin here: https://www.centtip.com/earn-10-more and get an incremental 10% over your usual earning for the first 3 months.\r\n\r\nRegards,\r\n\r\nJoshua N. Wright', '2019-05-14', '13:30:04 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (3, 'Angelica Esguerra', NULL, 'Hi! Good Day!\n\nI would like to inquire about your TESDA Illustrator NC II if you still offer this. I am very much interested in taking this training and I would also like to know when the enrollment will be and what are your requirements. Would it also be possible if I only take classes on Sunday due to my work schedule? Thank you !', '2019-05-18', '11:56:44 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (4, 'Angelica Esguerra', NULL, 'Good Day Ma\'am/Sir\n\nI would like to inquire about your TESDA Illustrator NC II if you still offer this. I am very much interested in taking this training and I would also like to know when the enrollment will be and what are your requirements. Would it also be possible if I only take classes on Sunday due to my work schedule? Thank you!', '2019-05-18', '12:03:14 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (5, 'Woorke Scholarship Program', NULL, 'Greetings Financial Aid Team,\r\n\r\nWoorke Marketing is offering a scholarship to 1 deserving student.\r\n\r\nScholarship Link: http://woorke.com/all-sports-scholarship.html\r\nDeadline: July 31, 2019\r\nAmount: $5000 (1 Student would be added $5000)\r\n\r\nHow it Works: We will send a cheque directly to the winning student or deposit it in university/college bank account if that is possible.\r\n\r\nThis scholarship is merit based, requires an essay submission, and the winning applicants will receive $5,000 dollars towards their costs of education.\r\n\r\nAll of the application details about the scholarship and how to apply are available on our website at http://woorke.com/all-sports-scholarship.html.\r\n\r\nI have also attached a brief overview for your reference on our website.\r\n\r\nPlease let me know if you have any questions about the scholarship. We look forward to reading submissions from your students.\r\n\r\n\r\nKindest Regards,\r\nDavid Wright\r\nWoorke Services', '2019-05-26', '00:46:40 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (6, 'Woorke Scholarship Program', NULL, 'Greetings Financial Aid Team,\r\n\r\nWoorke Marketing is offering a scholarship to 1 deserving student.\r\n\r\nScholarship Link: http://woorke.com/all-sports-scholarship.html\r\nDeadline: July 31, 2019\r\nAmount: $5000 (1 Student would be added $5000)\r\n\r\nHow it Works: We will send a cheque directly to the winning student or deposit it in university/college bank account if that is possible.\r\n\r\nThis scholarship is merit based, requires an essay submission, and the winning applicants will receive $5,000 dollars towards their costs of education.\r\n\r\nAll of the application details about the scholarship and how to apply are available on our website at http://woorke.com/all-sports-scholarship.html.\r\n\r\nI have also attached a brief overview for your reference on our website.\r\n\r\nPlease let me know if you have any questions about the scholarship. We look forward to reading submissions from your students.\r\n\r\n\r\nKindest Regards,\r\nDavid Wright\r\nWoorke Services', '2019-05-31', '07:24:51 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (7, 'Zafarovo https://google.com', NULL, 'Zafarovo https://google.com', '2019-06-02', '04:29:22 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (8, 'Ruffa Mae A. Pulido', NULL, 'Good afternoon. Mag ask lang unta ko ma\'am/sir kung pila ang per unit sa ACLC?', '2019-06-04', '17:02:43 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (9, 'Christian Miguel B. Ortiz', NULL, 'To whom it may Concern:\nGood day!\nI would like to inquire if your respected school is hiring contractual physics instructor.\n\nIt is hoped that you will give this request an utmost consideration. Thank you and more power.', '2019-06-10', '10:01:05 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (10, 'Rea Christine A. Bucayon', NULL, 'Hello! This is Rea Christine A. Bucayon, currently graduated from the course Bachelor of Science in Biology at Caraga State University. I would like to ask from your good office if you happen need of college instructor/senior high school teacher. I am willing to be in that position ma\'am/sir. I would gladly hope to have a response from your humble school. Thank you and God bless!', '2019-06-10', '19:20:53 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (11, 'Zafarovo https://google.com', NULL, 'Zafarovo https://google.com', '2019-06-12', '08:52:05 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (12, 'mary ', NULL, 'good afternoon do you have online schooling and what are the courses ', '2019-06-24', '17:27:43 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (13, 'Juniel', NULL, 'Good day!\nI would like to apply in your institution as freelance web programmer, i know how to code in php, javascript, mysql, html and css. I can build you a system application that can fast track your everyday office transactions.\nPlease leave me a message at 09282263139, thank you.', '2019-06-26', '14:24:10 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (14, 'Zreitev https://google.com', NULL, 'Zreitev https://google.com', '2019-07-08', '11:03:02 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (15, 'Rosemarie Pepe Mabasle', NULL, 'Good morning Ma\'am/ Sir,\n\n I would like to follow up all my documents especially my TOR and Diploma. I graduated last April 2017, I\'ve been working here in Cebu City for 2 years as an English Teacher. My company needs my Diploma and original TOR but I don\'t have a chance to go to school personally. I need my papers as soon as possible since our company could give us an opportunity to work abroad as an English teacher. I cannot get that chance if I cannot submit all my pending requirements. Thank you', '2019-07-10', '09:42:59 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (16, 'cori judson', NULL, 'Hi\r\nWe can help your website to get on first page of Google and increase the number of leads and sales you are getting from your website.\r\n\r\nPlease email us back for full proposal.\r\n\r\nBest Regards\r\nCori', '2019-07-10', '13:30:08 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (17, 'Rsserdar https://google.com', NULL, 'Rsserdar https://google.com', '2019-07-16', '19:28:53 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (18, 'Madie Dodd', NULL, 'I just found out that Tony Robbins and Dean Graziosi - two people I admire the most when it comes to business, success and impact - are doing a special online training event and with this special link WE can join the training for free! Wow, just wow...\r\n\r\nThis isn’t some random training... I just got the inside scoop that they will be exposing how you can profit from a pretty much “hidden” $355 million dollar a day industry that’s expected to TRIPLE within the next 5 years according to Forbes.\r\n\r\nSo whether you have your own business, want to start one or just want to create more income for you and your family – you’re not going to want to miss this training right from the comfort of your own home...\r\n\r\nEven better... these guys are all about making an impact on the world and they want to help US do the same thing while WE get paid for it…\r\nTony hasn’t done a training like this in over 10 years – so no way I’m missing it.\r\n\r\nUse this special link I got and go register now... the spots and chat are limited so make sure to show up early so we can ask them questions at the end...\r\n\r\nhttps://dgachieve.com/joining?source=ksspeciallink&a=2543\r\n\r\nIsn’t it most all of our dreams to make an impact, leave a legacy and generate the type of income that allows us to have control of our time and decisions?\r\n\r\nThat’s exactly what Dean & Tony have mastered like no other and for the first time ever on a training, they’re going to show us how to accomplish all of those same goals.\r\n\r\nThere may never be another chance again in history to see these guys, sharing the secrets they have learned over a combined 62 years of business and impact...\r\n\r\nIf you are ready for your next level then you won\'t want to miss this. Because if not them now... Then who and when?\r\n\r\nUse this special link I got and go register now... The spots and chat are limited so make sure to show up early so we can ask Dean and Tony questions at the end...\r\n\r\nhttps://dgachieve.com/joining?source=ksspeciallink&a=2543\r\n\r\nPlus they did an all new “quick pre-event” training you’ll get instant access to once you reserve your spot.\r\n\r\nSee you there', '2019-07-23', '08:28:47 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (19, 'jghdziev https://google.com', NULL, 'jghdziev https://google.com', '2019-07-29', '10:51:49 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (20, 'Lucille Lui', NULL, 'Hi\r\n\r\nHave eaten in your restaurant and it was delicious, and have made nice pictures with you employees,\r\nyou asked to send these pictures to you, I hope you like them, http://bit.ly/Picturesemployees\r\n\r\nYours sincerely\r\n\r\n\"Sent from my iPhone\"', '2019-08-04', '06:06:00 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (21, 'fkaakiev https://google.com', NULL, 'fkaakiev https://google.com', '2019-08-04', '09:39:55 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (22, 'Felecia Ottinger', NULL, 'Amazon\'s source and support for small, medium business At No Cost\r\n\r\nAmazon now  offers a limited time  discount, it\'s will help you save money on a tight budget, \r\n\r\nget office supplies and other products you need at Business-only prices.\r\n\r\n	Other: unlimited access to millions of TV and movie titles at no additional cost\r\n\r\nTry Amazon Prime: https://www.perfectmedialab.com/amazon\r\n\r\n* For people from other countries, Amazon US often has amazing discounts, \r\n\r\nand their products support international delivery, the final price is often half of the domestic price.\r\n\r\nRegards,\r\nFelecia Ottinger\r\n\r\nUnsubscribe: Reply \"don\'t\"', '2019-08-06', '23:50:17 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (23, 'fgrqqkiev https://google.com', NULL, 'fgrqqkiev https://google.com', '2019-08-11', '15:11:44 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (24, 'Eric', NULL, 'Hello aclcbutuan.edu.ph,\r\n\r\nPeople ask, “why does TalkWithCustomer work so well?”\r\n\r\nIt’s simple.\r\n\r\nTalkWithCustomer enables you to connect with a prospective customer at EXACTLY the Perfect Time.\r\n\r\n- NOT one week, two weeks, three weeks after they’ve checked out your website aclcbutuan.edu.ph.\r\n- NOT with a form letter style email that looks like it was written by a bot.\r\n- NOT with a robocall that could come at any time out of the blue.\r\n\r\nTalkWithCustomer connects you to that person within seconds of THEM asking to hear from YOU.\r\n\r\nThey kick off the conversation.\r\n\r\nThey take that first step.\r\n\r\nThey ask to hear from you regarding what you have to offer and how it can make their life better. \r\n\r\nAnd it happens almost immediately. In real time. While they’re still looking over your website aclcbutuan.edu.ph, trying to make up their mind whether you are right for them.\r\n\r\nWhen you connect with them at that very moment it’s the ultimate in Perfect Timing – as one famous marketer put it, “you’re entering the conversation already going on in their mind.”\r\n\r\nYou can’t find a better opportunity than that.\r\n\r\nAnd you can’t find an easier way to seize that chance than TalkWithCustomer. \r\n\r\nCLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive and see what a difference “Perfect Timing” can make to your business.\r\n\r\nSincerely,\r\nEric\r\n\r\nPS:  If you’re wondering whether NOW is the perfect time to try TalkWithCustomer, ask yourself this:\r\n“Will doing what I’m already doing now produce up to 100X more leads?”\r\nBecause those are the kinds of results we know TalkWithCustomer can deliver.  \r\nIt shouldn’t even be a question, especially since it will cost you ZERO to give it a try. \r\nCLICK HERE http://www.talkwithcustomer.com to start your free 14-day test drive today.\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=aclcbutuan.edu.ph\r\n', '2019-08-22', '18:53:34 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (25, 'Jarred Evers', NULL, 'Would you like to submit your ad on 1000\'s of Advertising sites monthly? Pay one low monthly fee and get virtually unlimited traffic to your site forever!For more information just visit: http://lotsofadsposted.ddns.net', '2019-09-01', '23:38:55 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (26, 'Henry Constantino', NULL, 'Good Day Maam/Sir,\n\nI just want to inquire how to process a Academic Records Request Form for canada and how much is the fee. Thank you', '2019-09-03', '14:43:18 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (27, 'Piper Burford', NULL, 'Hi There,\r\n\r\nAre you presently working with Wordpress/Woocommerce or maybe will you want to make use of it eventually ? We currently provide over 2500 premium plugins but also themes entirely free to download : http://linkl.xyz/NvCpv\r\n\r\nRegards,\r\n\r\nPiper', '2019-09-03', '23:14:37 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (28, 'qwrqqkiev https://google.com', NULL, 'qwrqqkiev https://google.com', '2019-09-07', '16:27:27 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (29, 'Hollie Polanco', NULL, 'Hey\r\n\r\nI have a question,\r\nI see a lot of products in this webshop http://item.pictures/computerworld that you also sell in your shop.\r\nBut there items are 53% cheaper, well my question is what is the difference between your shop and theirs,\r\nis it the quality or something else, I hope you can answer my question.\r\n\r\nRegards\r\n\r\n\"Sent from my iPhone\"', '2019-10-05', '00:55:55 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (30, 'Judson Hoadley', NULL, 'Hi,\r\nWant to reach brand-new customers? \r\n\r\nWe are personally welcoming you to sign up with one of the leading influencer and affiliate networks on the internet. \r\nThis network finds influencers and affiliates in your niche who will promote your company on their websites and social media channels. \r\nBenefits of our program include: brand name recognition for your business, increased trustworthiness, and potentially more clients. \r\n\r\nIt is the best, simplest and most reliable way to increase your sales! \r\n\r\nWhat do you think?\r\n\r\nFind out more: http://bit.ly/smartsocialpromotion', '2019-10-09', '07:00:29 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (31, 'Faustino Morey', NULL, 'Hello! By reading this message then you just proved that advertising through contact forms works! We can send your ad to people via their feedback form on their website. The best part of this type of advertising is that messages sent through feedback forms are inherently whitelisted. This dramatically improves the probability that your message will be read. Never any Pay per click costs! Pay one flat rate and reach millions of people. For more information please reply to: lily5854gre@gmail.com', '2019-10-18', '08:51:29 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (32, 'sjdasjkd', NULL, 'askdasdjas', '2019-10-18', '18:18:32 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (33, 'Florentina Lawlor', NULL, 'Hello,\r\n\r\nAre you presently using Wordpress/Woocommerce or might you project to make use of it at some point ? We offer much more than 2500 premium plugins along with themes fully free to get : http://strase.xyz/L8Gpj\r\n\r\nThanks,\r\n\r\nFlorentina', '2019-10-18', '19:21:10 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (34, 'Hellen[BqdeqwhVinejonuQ,2,5]', NULL, 'Hello, I apologize for this letter, but I have no other choice! \r\n \r\nThis is a 4-year-old girl Lisa Filameshina! \r\nhttps://sun9-7.userapi.com/c848620/v848620572/b2c87/xpLF8Ynpc_0.jpg \r\nLisa has retinoblastoma (retinal cancer). Her eye needs urgent treatment! In the Swiss clinic «Hospital Ophtalmique Jules-Gonin» (Lausanne) they guarantee the preservation of the organ so important for the future life of the child. \r\n \r\nIt is necessary to collect  $9000 before October 31. \r\n \r\nWe will be grateful for any amount of money! \r\n \r\nI beg you help! \r\n \r\nThat is wallet address for payment bitcoin :157CfZ3qhHpRWKbzqoroUAxTMgDhhmPfPt \r\n \r\nI give the payment details in bitcoins, since another transfer is problematic in our country. \r\n \r\nSorry again.', '2019-10-20', '08:31:08 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (35, 'Christine York', NULL, 'Hi\r\n\r\nI really want to say what a gorgeous webshop you have bild!\r\nI am a customer of your webshop.\r\nend really like your webshop.\r\nI had visited your store last month, and I saw a very nice product i wanne buy.\r\nBut I have a question! today I wanted to order it, but can not find the item anymore in your webshop.\r\nThe product looks like this picture on this Site http://item.pictures/product\r\ni wanne buy from you.\r\nI\'ll wait.\r\n\r\nSincerely\r\n\r\n\"Sent from my iPhone\"', '2019-10-20', '11:23:50 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (36, 'fdsssk222k https://google.com', NULL, 'fdsssk222k https://google.com', '2019-10-21', '21:45:13 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (37, 'Linda Lempriere', NULL, 'Would you like to post your business on thousands of advertising sites every month? For one small fee you\'ll get virtually unlimited traffic to your site forever! Check out our site for details: http://adsonthousandsofsites.dealz.site', '2019-10-22', '12:53:39 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (38, 'Jayno Bantilan Ayon', NULL, 'Good Day!\n\nMay you help me be guided for my inquiry. I am planning to enroll vocational courses pertaining to any computer literacy program from your institution. However, I have no idea for the procedure including the admission fee itself. I been calling to your telephone number since last week, as portrayed from you official page yet your circuits is not reachable. \n\nYour response is highly appreciated as it would help me prepare any pertinent documents you might required. Thank you.', '2019-10-24', '14:45:03 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (39, 'Jacquetta Ammons', NULL, 'Would you be interested in an advertising service that costs less than $49 every month and sends thousands of people who are ready to buy directly to your website? Send a reply to: jack5886tur@gmail.com to find out how this works.', '2019-10-26', '04:34:44 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (40, 'Tod Olszewski', NULL, 'Get free gas, free groceries, free movie and music downloads, product giveaways and more free offers just for completing small surveys, visit: http://freestuff.giveawaysusa.xyz', '2019-10-27', '05:10:43 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (41, 'Hollie Thurgood', NULL, 'Hi,\r\nWould you like to reach brand-new clients? \r\n\r\nWe are personally inviting you to sign up with one of the leading influencer and affiliate networks on the web. \r\nThis network finds influencers and affiliates in your niche who will promote your company on their sites and social media channels. \r\nAdvantages of our program include: brand recognition for your company, increased reputation, and potentially more clients. \r\n\r\nIt is the best, easiest and most reliable method to increase your sales! \r\n\r\nWhat do you think?\r\n\r\nLearn more: http://bit.ly/influenceradvertising', '2019-10-28', '21:34:57 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (42, 'Shanice Brim', NULL, 'Hey\r\n\r\nI have received my order but you have sent me the wrong item.\r\nas you can see here on this photo,  http://item.pictures/ordererror\r\nPlease help me, i will sent the order back to you. i just want the good order.\r\n\r\nYours sincerely\r\n\r\n\"Sent from my iPhone\"', '2019-11-02', '07:00:56 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (43, 'Mamie Descoteaux', NULL, 'Hi\r\n\r\ni just visit your website, end i really like the product you\'re selling.\r\ni try to order some items , but your product pages loading very slow\r\nor not loading at all. i have checked your website on http://ismywebsitetoslow.ml\r\nand you can see your website is loading to slow to make a order. \r\ni hope you ar fixing this problem soon so i can make a order.\r\n\r\nHave a nice day', '2019-11-05', '23:19:34 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (44, 'Silas Boerner', NULL, 'Hi\r\n\r\nAs i promised you, i wanna give you 1 month free access to our Fashion members are, here you can find VIP coupons that are not visible to the public eye. http://bit.ly/FashionMember24\r\n\r\nPlease don\'t share the coupons on the internet\r\n\r\nRegards\r\n\r\n\"Sent from my iPhone\"', '2019-11-09', '19:42:06 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (45, 'Natisha Maddox', NULL, 'www.elfdoll.co.jp - ??????????????????????????????????????????????????????????????????????????????\r\n<a href=\"https://www.elfdoll.co.jp/\">?????? ??????</a>\r\n<a href=\"https://www.elfdoll.co.jp/\">??????? ??????</a>\r\n<a href=\"https://www.elfdoll.co.jp/\">????? ??????</a>\r\n<a href=\"https://www.elfdoll.co.jp/\">???????? ??????</a>\r\n<a href=\"https://www.elfdoll.co.jp/\">????????</a>\r\n<a href=\"https://www.elfdoll.co.jp/\">???????</a>', '2019-11-13', '07:25:53 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (46, 'Sal Brace', NULL, 'Have you had enough of expensive PPC advertising? Now you can post your ad on 10,000 advertising sites and it\'ll only cost you one flat fee per month. Never pay for traffic again! Get more info by visiting: http://www.submitmyadnow.tech', '2019-11-13', '12:01:50 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (47, 'Willa Baragwanath', NULL, 'Looking for fresh buyers? Get tons of people who are ready to buy sent directly to your website. Boost revenues super fast. Start seeing results in as little as 48 hours. For additional information write a reply to: alfred4756will@gmail.com', '2019-11-18', '17:13:52 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (48, 'Eric Jones', NULL, 'Hey,\r\n\r\nYou have a website aclcbutuan.edu.ph, right?\r\n\r\nOf course you do. I am looking at your website now.\r\n\r\nIt gets traffic every day – that you’re probably spending $2 / $4 / $10 or more a click to get.  Not including all of the work you put into creating social media, videos, blog posts, emails, and so on.\r\n\r\nSo you’re investing seriously in getting people to that site.\r\n\r\nBut how’s it working?  Great? Okay?  Not so much?\r\n\r\nIf that answer could be better, then it’s likely you’re putting a lot of time, effort, and money into an approach that’s not paying off like it should.\r\n\r\nNow… imagine doubling your lead conversion in just minutes… In fact, I’ll go even better.\r\n \r\nYou could actually get up to 100X more conversions!\r\n\r\nI’m not making this up.  As Chris Smith, best-selling author of The Conversion Code says: Speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 14 minutes vs being contacted within 5 minutes.\r\n\r\nHe’s backed up by a study at MIT that found the odds of contacting a lead will increase by 100 times if attempted in 5 minutes or less.\r\n\r\nAgain, out of the 100s of visitors to your website, how many actually call to become clients?\r\n\r\nWell, you can significantly increase the number of calls you get – with ZERO extra effort.\r\n\r\nTalkWithCustomer makes it easy, simple, and fast – in fact, you can start getting more calls today… and at absolutely no charge to you.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive to find out how.\r\n\r\nSincerely,\r\nEric\r\n\r\nPS: Don’t just take my word for it, TalkWithCustomer works:\r\nEMA has been looking for ways to reach out to an audience. TalkWithCustomer so far is the most direct call of action. It has produced above average closing ratios and we are thrilled. Thank you for providing a real and effective tool to generate REAL leads. - P MontesDeOca.\r\nBest of all, act now to get a no-cost 14-Day Test Drive – our gift to you just for giving TalkWithCustomer a try. \r\nCLICK HERE http://www.talkwithcustomer.com to start converting up to 100X more leads today!\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=aclcbutuan.edu.ph\r\n', '2019-11-21', '18:25:48 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (49, 'Secret', NULL, 'Sir/Ma\'am mag ask lang ko about sa inyung e lecture sa Computer Science Degree if unsa na topic about sa Math ang itudlo diha sa Aclc butuan :) Thanks', '2019-11-25', '21:04:11 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (50, 'Vanita Alonzo', NULL, 'Need to find powerful advertising that isn\'t full of crap? Sorry to bug you on your contact form but actually that was kinda the point. We can send your ad text to sites via their contact forms just like you\'re receiving this ad right now. You can specify targets by keyword or just fire off mass blasts to websites in any country you choose. So let\'s assume you\'re looking to send an ad to all the interior decorators in the USA, we\'ll scrape websites for only those and post your advertisement to them. Providing you\'re advertising some kind of offer that\'s relevant to that niche then you\'ll receive an amazing response! \r\n\r\nWrite a quick note to evie2535gre@gmail.com to find out how we do this', '2019-11-26', '05:16:27 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (51, 'dfsjkls https://google.com', NULL, 'dfsjkls https://google.com', '2019-11-29', '06:41:34 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (52, 'Sarah Gold', NULL, 'Hey again, \r\n\r\nI was recently on your site and I can see you continue to pour time and energy into your digital presence. Your hard work shows and it’s really coming along!\r\n\r\n\r\nWhat caught my eye was, despite the engaging layout & clear investment in your site, you’re still missing an explainer video to easily convey information to website viewers. \r\n\r\n\r\nIt\'s sad to say, but web visitors today are lazier than ever! Without high-quality video content on your site, you are missing out on potential customers. These potential customers are already on your site - you just need to convert them!\r\n\r\n\r\nFYI - I work at an amazing explainer video & marketing firm that specializes in creating fun and easily digestible homepage videos. We have actually created several such videos in your industry. We have offices in California + Jerusalem Israel.\r\n\r\n\r\nI would love to chat further about how I can help. Email me laura@MyBizExplained.com or see some samples on www.MyBizExplained.com\r\n \r\n\r\n--\r\nSarah Gold\r\nManager\r\nwww.MyBizExplained.com\r\nSarah@MyBizExplained.com', '2019-11-29', '12:10:17 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (53, 'Winnie Counsel', NULL, 'Looking for fresh buyers? Get thousands of people who are ready to buy sent directly to your website. Boost revenues fast. Start seeing results in as little as 48 hours. To get details write a reply to: walter3519rob@gmail.com', '2019-12-01', '07:16:09 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (54, 'Earn money click here https://earnmoneygo358.blogspot.cz', NULL, 'Earn money click here https://earnmoneygo358.blogspot.kr', '2019-12-09', '14:22:59 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (55, 'Lorraine Runyon', NULL, 'Would you like to promote your business on 1000\'s of Advertising sites monthly? Pay one low monthly fee and get virtually unlimited traffic to your site forever! Check out our site for details: http://www.pushyouradonthousandsofsites.tech', '2019-12-10', '02:39:38 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (56, 'Albert Liu', NULL, '(It\'s very urgent, please transfer this message to your CEO. Thanks) \r\n\r\nWe are the domain registration and solution center in China. On Nov 29, 2019, we received an application from Kanghong Ltd requested \"aclcbutuan\" as their internet keyword and China (CN) domain names (aclcbutuan.cn, aclcbutuan.com.cn, aclcbutuan.net.cn, aclcbutuan.org.cn). But after checking it, we find this name conflict with your company name or trademark. In order to deal with this matter better, it\'s necessary to send this message to your company and confirm whether this company is your distributor or business partner in China?\r\n\r\nBest Regards\r\n***************************************\r\nAlbert Liu | Service & Operations Manager\r\nChina Registry (Head Office) | 6012, Xingdi Building, No. 1698 Yishan Road, Shanghai 201103, China\r\nTel: +86-02164193517 | Fax: +86-02164198327 | Mob: +86-13816428671\r\nEmail: albert@chinaregistry.org.cn\r\nWeb: www.chinaregistry.org.cn\r\n***************************************', '2019-12-10', '14:26:50 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (57, 'Carolyn Moose', NULL, 'Are you looking for effective online marketing that isn\'t full of BS? Sorry to bug you on your contact form but actually that\'s exactly where I wanted to make my point. We can send your ad message to sites through their contact pages just like you\'re getting this message right now. You can specify targets by keyword or just fire off mass blasts to websites in any country you choose. So let\'s say you need to send a message to all the real estate agents in the United States, we\'ll grab websites for just those and post your advertisement to them. Providing you\'re promoting some kind of offer that\'s relevant to that type of business then your business will get an amazing response! \r\n\r\nSend a quick message to leo6866tay@gmail.com for the full details', '2019-12-14', '11:34:41 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (58, 'Eric Jones', NULL, 'Hi,\r\n\r\nYou know it’s true…\r\n\r\nYour competition just can’t hold a candle to the way you DELIVER real solutions to your customers on your website aclcbutuan.edu.ph.\r\n\r\nBut it’s a shame when good people who need what you have to offer wind up settling for second best or even worse.\r\n\r\nNot only do they deserve better, you deserve to be at the top of their list.\r\n \r\nTalkWithCustomer can reliably turn your website aclcbutuan.edu.ph into a serious, lead generating machine.\r\n\r\nWith TalkWithCustomer installed on your site, visitors can either call you immediately or schedule a call for you in the future.\r\n \r\nAnd the difference to your business can be staggering – up to 100X more leads could be yours, just by giving TalkWithCustomer a FREE 14 Day Test Drive.\r\n \r\nThere’s absolutely NO risk to you, so CLICK HERE http://www.talkwithcustomer.com to sign up for this free test drive now.  \r\n\r\nTons more leads? You deserve it.\r\n\r\nSincerely,\r\nEric\r\nPS:  Odds are, you won’t have long to wait before seeing results:\r\nThis service makes an immediate difference in getting people on the phone right away before they have a chance to turn around and surf off to a competitor\'s website. D Traylor, Traylor Law  \r\nWhy wait any longer?  \r\nCLICK HERE http://www.talkwithcustomer.com to take the FREE 14-Day Test Drive and start converting up to 100X more leads today!\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=aclcbutuan.edu.ph\r\n', '2019-12-18', '13:03:46 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (59, 'Kandi Pavy', NULL, 'Would you be interested in an advertising service that charges less than $50 per month and delivers thousands of people who are ready to buy directly to your website? Check out: http://www.moreleadsandsales.xyz ', '2019-12-20', '01:22:10 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (60, 'szgzdsds https://google.com', NULL, 'deamezsm https://google.com', '2019-12-20', '12:21:46 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (61, 'Dexter Wurfel', NULL, 'How would you like to promote your advertisement on thousands of advertising sites monthly? For one small fee you\'ll get virtually unlimited traffic to your site forever! Check out our site for details: http://www.postyouradsontonsofsites.xyz', '2019-12-28', '03:48:18 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (62, 'dhsfdsd https://google.com', NULL, 'jdffhdd https://google.com', '2019-12-31', '06:52:28 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (63, 'Mike Saffern', NULL, 'Shalom, Mike here.\r\n\r\nYour website and business look great and both seem well established.\r\n\r\nI am messaging you today to compliment your business + let you know about the unreasonably low pricing u am charging for a limited time to new clients interested in my graphic design services. \r\n\r\nReply back to say Hi, ask to see my portfolio, or check out my site. \r\n\r\nEmail me: Mike@graphicdesignisrael.co Website: GraphicDesignIsrael.co\r\n\r\n--\r\nMike Saffern\r\ngraphicdesignisrael.co\r\nMike@graphicdesignisrael.co', '2019-12-31', '13:45:12 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (64, 'Eric Jones', NULL, 'Hello aclcbutuan.edu.ph,\r\n\r\nPeople ask, “why does TalkWithCustomer work so well?”\r\n\r\nIt’s simple.\r\n\r\nTalkWithCustomer enables you to connect with a prospective customer at EXACTLY the Perfect Time.\r\n\r\n- NOT one week, two weeks, three weeks after they’ve checked out your website aclcbutuan.edu.ph.\r\n- NOT with a form letter style email that looks like it was written by a bot.\r\n- NOT with a robocall that could come at any time out of the blue.\r\n\r\nTalkWithCustomer connects you to that person within seconds of THEM asking to hear from YOU.\r\n\r\nThey kick off the conversation.\r\n\r\nThey take that first step.\r\n\r\nThey ask to hear from you regarding what you have to offer and how it can make their life better. \r\n\r\nAnd it happens almost immediately. In real time. While they’re still looking over your website aclcbutuan.edu.ph, trying to make up their mind whether you are right for them.\r\n\r\nWhen you connect with them at that very moment it’s the ultimate in Perfect Timing – as one famous marketer put it, “you’re entering the conversation already going on in their mind.”\r\n\r\nYou can’t find a better opportunity than that.\r\n\r\nAnd you can’t find an easier way to seize that chance than TalkWithCustomer. \r\n\r\nCLICK HERE http://www.talkwithcustomer.com now to take a free, 14-day test drive and see what a difference “Perfect Timing” can make to your business.\r\n\r\nSincerely,\r\nEric\r\n\r\nPS:  If you’re wondering whether NOW is the perfect time to try TalkWithCustomer, ask yourself this:\r\nWill doing what I’m already doing now produce up to 100X more leads?\r\nBecause those are the kinds of results we know TalkWithCustomer can deliver.  \r\nIt shouldn’t even be a question, especially since it will cost you ZERO to give it a try. \r\nCLICK HERE http://www.talkwithcustomer.com to start your free 14-day test drive today.\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=aclcbutuan.edu.ph\r\n', '2020-01-01', '11:59:01 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (65, 'Flynn Cazneaux', NULL, 'Hi\r\n\r\nI have a question?\r\nDo you want to increase conversions, traffic to your website, or both?\r\nFor more information go to: https://screenshot.photos/digitalmarketingagency\r\n\r\nYours sincerely\r\n\r\nPhiskal', '2020-01-04', '09:34:41 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (66, 'Eric Jones', NULL, 'Hi,\r\n\r\nYou know it’s true…\r\n\r\nYour competition just can’t hold a candle to the way you DELIVER real solutions to your customers on your website aclcbutuan.edu.ph.\r\n\r\nBut it’s a shame when good people who need what you have to offer wind up settling for second best or even worse.\r\n\r\nNot only do they deserve better, you deserve to be at the top of their list.\r\n \r\nTalkWithCustomer can reliably turn your website aclcbutuan.edu.ph into a serious, lead generating machine.\r\n\r\nWith TalkWithCustomer installed on your site, visitors can either call you immediately or schedule a call for you in the future.\r\n \r\nAnd the difference to your business can be staggering – up to 100X more leads could be yours, just by giving TalkWithCustomer a FREE 14 Day Test Drive.\r\n \r\nThere’s absolutely NO risk to you, so CLICK HERE http://www.talkwithcustomer.com to sign up for this free test drive now.  \r\n\r\nTons more leads? You deserve it.\r\n\r\nSincerely,\r\nEric\r\nPS:  Odds are, you won’t have long to wait before seeing results:\r\nThis service makes an immediate difference in getting people on the phone right away before they have a chance to turn around and surf off to a competitor\'s website. D Traylor, Traylor Law  \r\nWhy wait any longer?  \r\nCLICK HERE http://www.talkwithcustomer.com to take the FREE 14-Day Test Drive and start converting up to 100X more leads today!\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=aclcbutuan.edu.ph\r\n', '2020-01-08', '14:03:29 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (67, 'Monika Makin', NULL, 'Would you like to promote your business on thousands of advertising sites every month? Pay one low monthly fee and get virtually unlimited traffic to your site forever! Check out our site for details: http://www.moreadsposted.xyz', '2020-01-11', '05:50:15 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (68, 'Alexander Sebastiaan', NULL, 'Dear Sir\r\n\r\nDo you also have the same problem as me? That we have build a very nice website,\r\nbut only receive a small amount of visitors to your site.\r\nI would like to share some information with you.\r\nPlease contact me, my details are below.\r\n\r\nYours truly\r\nAlexander Sebastiaan\r\n\r\nEmail: support@shopwebmaster.com\r\nWhatsapp: 01208525644\r\nWebsite: https://screenshot.photos/shopwebmaster\r\n\r\n\"Sent from my Mobile device\"', '2020-01-13', '00:33:11 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (69, 'Eric Jones', NULL, '\r\nHi,\r\n\r\nYou know it’s true…\r\n\r\nYour competition just can’t hold a candle to the way you DELIVER real solutions to your customers on your website aclcbutuan.edu.ph.\r\n\r\nBut it’s a shame when good people who need what you have to offer wind up settling for second best or even worse.\r\n\r\nNot only do they deserve better, you deserve to be at the top of their list.\r\n \r\nTalkWithCustomer can reliably turn your website aclcbutuan.edu.ph into a serious, lead generating machine.\r\n\r\nWith TalkWithCustomer installed on your site, visitors can either call you immediately or schedule a call for you in the future.\r\n \r\nAnd the difference to your business can be staggering – up to 100X more leads could be yours, just by giving TalkWithCustomer a FREE 14 Day Test Drive.\r\n \r\nThere’s absolutely NO risk to you, so CLICK HERE http://www.talkwithcustomer.com to sign up for this free test drive now.  \r\n\r\nTons more leads? You deserve it.\r\n\r\nSincerely,\r\nEric\r\nPS:  Odds are, you won’t have long to wait before seeing results:\r\nThis service makes an immediate difference in getting people on the phone right away before they have a chance to turn around and surf off to a competitor\'s website. D Traylor, Traylor Law  \r\nWhy wait any longer?  \r\nCLICK HERE http://www.talkwithcustomer.com to take the FREE 14-Day Test Drive and start converting up to 100X more leads today!\r\n\r\nIf you\'d like to unsubscribe click here http://liveserveronline.com/talkwithcustomer.aspx?d=aclcbutuan.edu.ph\r\n\r\n', '2020-01-14', '03:11:40 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (70, 'hhksjsh https://google.com', NULL, 'shhksff https://google.com', '2020-01-14', '05:32:39 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (71, 'Sarah Gold', NULL, 'Hey - I was checking out your site and I’m impressed with how clean and professional it looks. \r\n\r\nAdding video to your website has become an absolute MUST. Even something basic that clearly defines exactly what it is you\'re offering & why work with your company vs competitors...\r\n\r\nMy team, based out of Jerusalem and California, creates quality animated explainer videos.  Our award-winning videos are proven to increase customer engagement and decrease user bounce rate. \r\n\r\nEmail me back for some explainer video samples, pricing, or just to say hi!\r\n\r\n--\r\nSarah Gold\r\nManager\r\nwww.ExplainTheBusiness.com\r\nSarah@ExplainTheBusiness.com', '2020-01-14', '09:27:48 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (72, 'Avery Cohen', NULL, 'My company based out of Jerusalem and California, provides the highest quality American telemarketing and cold calling services.\r\n\r\nTo earn your business, we are offering significantly slashed prices for a trial/pilot period. Now is the time to try new lead generation tactics. \r\n\r\nEmail: team@israeltelemarketing.online\r\nWebsite: www.israeltelemarketing.online\r\n*Limited Time Offer/Some Restrictions Apply', '2020-01-16', '09:25:29 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (73, 'Ute Tiller', NULL, 'Are you looking for powerful advertising that has no per click costs and will get you new customers fast? Sorry to bug you on your contact form but actually that\'s exactly where I wanted to make my point. We can send your ad text to websites via their contact pages just like you\'re reading this note right now. You can target by keyword or just start mass blasts to websites in the country of your choice. So let\'s say you would like to send a message to all the real estate agents in the US, we\'ll grab websites for only those and post your promo to them. Providing you\'re promoting something that\'s relevant to that niche then you\'ll be blessed with an amazing response! \r\n\r\nSend a quick message to alfred3545will@gmail.com for details on how this works', '2020-01-19', '15:25:48 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (74, 'BCWD', NULL, 'Good Day! This is Allysa from BCWD. I would like to invite you as one of our contestants for our Booth Exhibit this coming January 30-31, 2020. It would be our pleasure to have you. Please email us back for confirmation and details. Thank you.', '2020-01-20', '09:06:52 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (75, 'Richielyn Faller', NULL, 'Good day! I\'m Richielyn Faller, I was a student in ACLC from 1998 to 2000. I\'m requesting for my Official Transcript of Records be sent via email to verification@spantran.com for evaluation. I will forward to the ACLC Admission the electronic mail that the Spantran sent to me. Thank you.', '2020-01-30', '22:40:42 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (76, 'Gina Ziemba', NULL, 'Just 1 cup of this tomorrow morning will burn 3lbs of belly fat\r\n\r\nIf you haven’t tried this yet, you\'ll want to to add this to your morning routine\r\nDrinking 1 cup of this delicious hot beverage in the morning sets you up to burn more fat than 55 exhausting minutes on the treadmill.\r\n\r\nIn fact, some folks are losing up to 23lbs of fat in just 21 days by drinking it every morning.\r\n\r\nNot to mention, it’s really simple to make right in your own kitchen. \r\n\r\nCheck it out now! --> http://www.fatbellyfix.xyz', '2020-02-03', '17:32:30 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (77, 'Tiffany Rose', NULL, 'Hi there!\r\n\r\nI wanted to invite you to an exclusive Instagram brand collab that can genuinely drive 1000’s of new followers to your IG account.\r\n\r\nWe have a proven strategy that gives you access to social media powerhouses for a fraction of the price they charge.\r\n\r\nOur next campaign is due to launch soon and will feature our first joint celebrity influencers (two for the price of one!)\r\n\r\nTori Spelling America’s sweetheart! She rose to fame on Beverly Hills 90210. She is a household name and internationally recognized superstar. She stars in her own reality TV show and doubles as a real-life supermom celebrity influencer with five kids.\r\n\r\nJessica Hall is an acclaimed entrepreneur and radio / TV personality. Her loyal and engaged audience tunes in for her fitness videos, gorgeous fashion shoots and her endearing Mom moments. Jessica is excited to be a featured host on this month’s Lux Life Now giveaway.\r\n\r\nLoop marketing campaigns are currently the most successful way to boost your social media presence, and grow your following. If you are a start-up get ready, or if you are a campaign company or influencer, get ready for sales, sales, sales. This will sell out very quickly, we are already 30% full from repeat clientele from our last highly successful campaign.\r\n\r\nWe are very confident this campaign will be even more successful than our previous campaigns. http://bit.ly/amber-rose-case-study\r\n\r\nWe really want to work with your brand and would hate for you to miss out on this one! You will not find a better opportunity to access celebrities and compete with your rivals!\r\n\r\nLet\'s schedule a quick 10-minute call or email me for further information and pricing.\r\n\r\nKind Regards,\r\n\r\nTiffany Rose\r\nTHE LUX LIFE NOW, INC. | LUXLIFENOW.COM\r\nTel 1.888.389.1138 | Instagram @theluxlifenow', '2020-02-04', '12:02:13 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (78, 'RobertBab', NULL, '<a href=https://kiva-hack.ru><img src=\"https://kiva-hack.ru/lite.png\"></a> \r\nGame version / ?????? ????: ??????? ?????? ???? RU \r\nSupported OS / ?????????????? ??: Windows 7 | 8 | 8.1 | 10 \r\n \r\n???????? \r\n??????? ????????? ??? ?? ???????????? ? ??????????? ?????? ?????? ? ?????????? ???????????? ???????????. ????? 4? ??? ??? ????????? ????????, ????????? ??????????? ? ????????? ??????????????. \r\n????????? ????????? ???????? ??? ?????? ????? ?? ????? ???????????, ?????? ?? (c?????) ? ????? ????????? (????, ????, ????), ??? ?? ??? ?? ??????????! ???? ? ?????, ??????????? ???? ???????? ??? ? ????. \r\n \r\n????? ??????? ????: \r\n+?? ???????, ?? ????????? ?? ????? ??? \r\n+???????? ? ?????? ?????? ? ??????? \r\n+?????????? ?????????? \r\n+??????????? ???? ???? \r\n \r\n???? \r\n?? 1 ???? - 99 ?????? \r\n?? 7 ???? - 249 ?????? \r\n?? 30 ???? - 699 ?????? \r\n \r\n????????? ?? ????: \r\n??: https://vk.cc/8I007a \r\n?????? ??? ??????-->: <a href=https://kiva-hack.ru/chity-na-pubg-lite/>?????? ????????? ??? ??? pubg lite</a>\r\n \r\n \r\n????? ?????: \r\nhttps://youtu.be/oGTEsxGmfWI \r\nhttps://youtu.be/lyj02RS6Sh0', '2020-02-06', '16:19:53 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (79, 'Carrie Tauchert', NULL, '\"YOGI ON THE GREEN\", A #1 INTERNATIONAL BEST-SELLING BOOK IN THREE CATEGORIES.\r\nYogi on the Green was written to help golfers of all abilities, to hopefully improve on their physical and mental games. It has been proven in many Medical Journals, that when one improves on their physical being they also improve on their mental awareness, \"Yogi On The Green\" is a guide to improving Golfers physical and mental abilities, both on the Golf Course and perhaps even their daily lives. http://bit.ly/yogionthegreen', '2020-02-09', '17:54:51 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (80, 'Sebastian MacGregor', NULL, 'Just 1 cup of this tomorrow morning will burn 3lbs of belly fat\r\n\r\nIf you haven’t tried this yet, you’re going to want to add this to your morning routine\r\nSipping on just a single cup of this yummy hot drink in the A.M. sets your body up to burn more fat than 55 exhausting minutes on the treadmill.\r\n\r\nIn fact, some folks are losing up to 23lbs of fat in just 21 days by drinking it every morning.\r\n\r\nPlus, it’s really simple to make right in your own kitchen. \r\n\r\nTake a look here now!==> http://www.fatbellyfix.xyz', '2020-02-14', '01:19:08 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (81, 'Atty. Grian B. Damarillos', NULL, 'Hi, \n\nI would like to inquire if you are still hiring instructors for business management and political science courses.\n\nThanks.\n\nSincerely, \n\nAtty. Grian B. Damarillos', '2020-02-14', '09:04:54 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (82, 'Faye Atkin', NULL, 'Get tons of fresh and high ranking .edu, do-follow and other extensions ready to be your backlink\r\nand rank your website for any niche out there! No spammy links here - 100% exclusive backlinks! http://www.backlinkmagic.xyz', '2020-02-21', '18:09:07 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (83, 'aznfadgn ?????? https://google.com', NULL, 'szgdfmdn ?????? https://google.com', '2020-02-25', '12:11:51 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (84, 'Kennethsog', NULL, 'Good day!  aclcbutuan.edu.ph \r\n \r\nDid you know that it is possible to send message entirely legal? \r\nWe tender a new unique way of sending message through feedback forms. Such forms are located on many sites. \r\nWhen such appeal are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. \r\nAlso, messages sent through feedback Forms do not get into spam because such messages are considered important. \r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. \r\nThe cost of sending one million messages is 49 USD. \r\n \r\nThis offer is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nEmail - feedbackform@make-success.com', '2020-02-26', '05:54:11 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (85, 'Janelle Foltz', NULL, '\r\nSick of wasting money on PPC advertising that just doesn\'t deliver? Now you can post your ad on 1000s of advertising websites and you only have to pay a single monthly fee. Never pay for traffic again! \r\n\r\nFor details check out: http://www.autoadsubmitter.xyz\r\n', '2020-03-04', '02:58:12 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (86, 'Kerri Walker', NULL, 'It looks like you\'ve misspelled the word \"appy\" on your website.  I thought you would like to know :).  Silly mistakes can ruin your site\'s credibility.  I\'ve used a tool called SpellScan.com in the past to keep mistakes off of my website.\n\n-Kerri', '2020-03-23', '01:35:41 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (87, 'Kate McBride', NULL, 'Looking to burn fat quick and without any major diet or exercising? Take a look at this: http://bit.ly/fixbellyfateasy', '2020-03-24', '03:10:35 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (88, 'Mariam Grafton', NULL, 'Groundbreaking new way to advertise your website for Nothing! See here: http://bit.ly/submityourfreeads', '2020-03-29', '04:15:34 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (89, 'Alex Cohen', NULL, 'I messaged previously about how explainer videos became an absolute must for every website in 2020. Driving relevant traffic to your site is hard enough, you must capture this traffic and engage them!\r\n\r\nAs you know, Google is constantly changing its SEO algorithm. The only thing that has remained consistent is that adding an explainer video increases website rank and most importantly keeps customers on your page for longer, increasing conversions ratios.\r\n\r\nMy team has created thousands of marketing videos including dozens in your field. Simplify your pitch, increase website traffic, and close more business.\r\n\r\nShould I send over some industry-specific samples?\r\n\r\n-- Alex Cohen\r\n\r\nEmail: A.Cohen@explainbusiness.online\r\nWebsite: http://explainbusiness.online\r\n', '2020-03-29', '15:52:31 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (90, 'Milla Shore', NULL, 'Hi\r\n\r\nn95 masks directly from our factory in U.S.A.\r\nWe have large stocks.\r\nOrder here https://screenshot.photos/n95masksinstock2\r\n\r\nYours sincerely\r\n\r\n\"Sent from my Mobile device\"\r\n', '2020-04-03', '09:14:52 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (91, 'Fannie Tietkens', NULL, 'Want more visitors for your website? Get tons of keyword targeted visitors directly to your site. Boost revenues quick. Start seeing results in as little as 48 hours. For more info Have a look at: http://bit.ly/trafficmasters2020', '2020-04-06', '13:55:56 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (92, 'Eli Waters', NULL, 'This is the opportunity you have been waiting for. \r\n\r\nPull the trigger now on an explainer video from the best in the business. Do it while we are running our “best pricing ever” campaign and save thousands of dollars. \r\n\r\nThis campaign happens once in a blue moon.\r\n\r\nWell, that’s not exactly true, but it has never happened before - and I don’t suppose we will run this promotion again - hence the “best pricing ever”\r\n\r\nMy name is Eli Waters and I look forward to working with you to create a game changing explainer and marketing video for you. Something that will be an unquestionable business asset.\r\n\r\nEmail me back for some samples. Eli@explainmybiz.online\r\n\r\n\r\n-- Eli Waters\r\n\r\nEmail: Eli@explainmybiz.online\r\nWebsite: http://explainmybiz.online\r\n', '2020-04-17', '05:40:27 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (93, 'Dina Uhr', NULL, 'Would you be interested in an advertising service that costs less than $40 per month and delivers hundreds of people who are ready to buy directly to your website? Have a look at: http://www.trafficmasters.xyz ', '2020-04-18', '11:09:15 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (94, 'Claudia Clement', NULL, 'Hi, We are wondering if you would be interested in our service, where we can provide you with a dofollow link from Amazon (DA 96) back to aclcbutuan.edu.ph?\r\n\r\nThe price is just $77 per link, via Paypal.\r\n\r\nTo explain what DA is and the benefit for your website, along with a sample of an existing link, please read here: https://justpaste.it/4fnds\r\n\r\nIf you\'d be interested in learning more, reply to this email but please make sure you include the word INTERESTED in the subject line field, so we can get to your reply sooner.\r\n\r\nKind Regards,\r\nClaudia', '2020-04-27', '13:06:42 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (95, 'Johanna Chittenden', NULL, 'Hi,\r\n\r\nWe\'re wondering if you\'ve ever considered taking the content from aclcbutuan.edu.ph and converting it into videos to promote on Youtube using Content Samurai? You simply add the text and it converts it into scenes that make up a full video. No special skills are needed, and there\'s access to over 1 million images/clips that can be used.\r\n\r\nYou can read more about the software here: https://turntextintovideo.com - there\'s also a link to a totally free guide called the \'Youtube SEO Cheat Sheet\', full of fantastic advice on how to help your site rank higher in Youtube and in Google.\r\n\r\nKind Regards,\r\nJohanna', '2020-04-28', '02:42:23 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (96, 'Marietta Thornhill', NULL, 'Hi,\r\n\r\nWe\'re wondering if you\'ve considered taking the written content from aclcbutuan.edu.ph and converting it into videos to promote on Youtube? It\'s another method of generating traffic.\r\n\r\nThere\'s a free trial available to you at the following link: https://turntextintovideo.com\r\n\r\nRegards,\r\nMarietta', '2020-04-29', '14:28:40 PM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (97, 'Barbara Atyson', NULL, 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service which we feel can benefit your site aclcbutuan.edu.ph.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=oYoUQjxvhA0\r\nhttps://www.youtube.com/watch?v=MOnhn77TgDE\r\nhttps://www.youtube.com/watch?v=NKY4a3hvmUc\r\n\r\nAll of our videos are in a similar animated format as the above examples and we have voice over artists with US/UK/Australian accents.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video such as Youtube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\n0-1 minutes = $159\r\n1-2 minutes = $269\r\n2-3 minutes = $379\r\n3-4 minutes = $489\r\n\r\n*All prices above are in USD and include a custom video, full script and a voice-over.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to get in touch.\r\nIf you are not interested, simply delete this message and we won\'t contact you again.\r\n\r\nKind Regards,\r\nBarbara', '2020-05-01', '02:57:03 AM', '143.95.243.191', NULL);
INSERT INTO `message` VALUES (98, 'Eric Jones', NULL, 'My name’s Eric and I just came across your website - aclcbutuan.edu.ph - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like aclcbutuan.edu.ph will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE http://www.talkwithwebvisitor.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE http://www.talkwithwebvisitor.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE http://www.talkwithwebvisitor.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithwebvisitor.com/unsubscribe.aspx?d=aclcbutuan.edu.ph\r\n', '2020-05-01', '08:17:42 AM', '143.95.243.191', NULL);

-- ----------------------------
-- Table structure for message_reply
-- ----------------------------
DROP TABLE IF EXISTS `message_reply`;
CREATE TABLE `message_reply`  (
  `msg_rep_id` int(11) NOT NULL AUTO_INCREMENT,
  `details` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_reply` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `time_reply` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `msg_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`msg_rep_id`) USING BTREE,
  INDEX `message_message_reply`(`msg_id`) USING BTREE,
  INDEX `account_message_reply`(`ac_id`) USING BTREE,
  CONSTRAINT `account_message_reply` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `message_message_reply` FOREIGN KEY (`msg_id`) REFERENCES `message` (`msg_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of message_reply
-- ----------------------------

-- ----------------------------
-- Table structure for mission
-- ----------------------------
DROP TABLE IF EXISTS `mission`;
CREATE TABLE `mission`  (
  `mis_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`mis_id`) USING BTREE,
  INDEX `account_mission`(`ac_id`) USING BTREE,
  CONSTRAINT `account_mission` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mission
-- ----------------------------
INSERT INTO `mission` VALUES (1, '<p style=\"text-align: justify;\">ACLC College of Butuan ensures academic excellence, and&nbsp; develops sustainable value for its student, faculty, employees, partners, and the community, seeking to contribute development for the people of Caraga, leading to global competitiveness.</p>', '2018-10-16', NULL);

-- ----------------------------
-- Table structure for news_info
-- ----------------------------
DROP TABLE IF EXISTS `news_info`;
CREATE TABLE `news_info`  (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_posted` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`news_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of news_info
-- ----------------------------

-- ----------------------------
-- Table structure for oad
-- ----------------------------
DROP TABLE IF EXISTS `oad`;
CREATE TABLE `oad`  (
  `oad_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` date NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`oad_id`) USING BTREE,
  INDEX `account_oad`(`ac_id`) USING BTREE,
  CONSTRAINT `account_oad` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of oad
-- ----------------------------
INSERT INTO `oad` VALUES (1, 'Office of Administration Office', '', '2018-08-07', NULL);
INSERT INTO `oad` VALUES (2, 'Treasury and Accounting', '', '2018-08-07', NULL);
INSERT INTO `oad` VALUES (3, 'Property And Assets', '<p style=\"text-align: justify;\">The <strong>Property &amp; Assets Department (PAD)</strong> formulates plans, procedures to maintain programs related to the department\'s procurement, property management, maintenance and other general administrative services needed to have an efficient and effective delivery of support to the stakeholders of the organization.</p>\n<p style=\"text-align: justify;\">In the fulfillment of this mandate, it shall be the primary concern of the Department to secure organization&rsquo;s property, manage the resources more efficiently and to maintain the workflows required to keep administrative and academic operations smoothly. It shall also encourage students and employees participation to report any irregularities to observe inside the school premises to help the Department to perform its functions.</p>\n<p style=\"text-align: justify;\"><strong>Property &amp; Assets Department</strong> also highlights the continuous improvement of the support services to ensure effective implementation thereof and to contribute to the productivity and sustainability of the organization.</p>', '2019-01-21', NULL);
INSERT INTO `oad` VALUES (4, 'Human Resource Management', '<p style=\"text-align: justify;\">As a strategic partner of the company, the Human Resource Department is committed to delivering organizational excellence by providing efficient services through its core functions such as Talent Acquisition, Compensation and Benefits, Employee Relations and Trainings and Development. While fully acknowledging its role as an agent of continuous change, shaping processes, and creating a culture that can improve and meet the goals of the institution.</p>', '2019-01-21', NULL);
INSERT INTO `oad` VALUES (5, 'Technical Support', '<p style=\"text-align: justify;\">The <strong>Technical Support Department</strong> (<strong>TSD</strong>) team maintains the computer networks and provides technical support to ensure the correct running and maintenance of the IT system. It also monitors and manages the organization\'s computer systems, installs and configures hardware and software, and solve problems related to technical.</p>\n<p style=\"text-align: justify;\">To do well in this role, the <strong>Department</strong> also ensures that users get the maximum benefits they need. Thus, the <strong>Department </strong>also highlights their involvements on the various training and workshops to develop strategies and provide innovative IT support to the organization.</p>', '2019-01-21', NULL);
INSERT INTO `oad` VALUES (6, 'Research Development and Innovation Office (RDIO)', '', '2018-08-07', NULL);
INSERT INTO `oad` VALUES (7, 'Planning ang Monitoring Office (PMO)', '', '2018-08-07', NULL);
INSERT INTO `oad` VALUES (8, 'Community Extension and Linkages', '', '2018-08-07', NULL);

-- ----------------------------
-- Table structure for organization
-- ----------------------------
DROP TABLE IF EXISTS `organization`;
CREATE TABLE `organization`  (
  `org_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `orgname` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `details` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`org_id`) USING BTREE,
  INDEX `account_organization`(`ac_id`) USING BTREE,
  CONSTRAINT `account_organization` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of organization
-- ----------------------------
INSERT INTO `organization` VALUES (2, '2.png', 'ACLC COMPUTER TECHNICIAN SPECIALISTS (ACTS)', '<p><strong>Mission</strong></p>\r\n<p>The mission of ACTS Organization is to develop and enhance the knowledge and skills of students in Computer System Servicing in accordance with industry standards by producing a well-disciplined and professional student technician.</p>\r\n<p><strong>Vision</strong></p>\r\n<p>ACTS Organization envisions to become a provider of quality and excellent Computer System Service Technicians that will dominate and inspire others.</p>\r\n<p><strong>History</strong></p>\r\n<p>Early 2016 when the ACLC COMPUTER TECHNICIAN SPECIALISTS or ACTS organization was established. The organization was created by Mr. Cyrill Allen. Who was a former ACLC Butuan instructor and also handled the Computer Installation subject in which the inspiration behind of the said organization. One of the pioneers of the organization was Mr. Ken Charles Palma who on his power became the very first president of ACTS together with his members; Christopher Sodusta, Elvis John Cayetano, Honey Grace Raganas and Mizha Chryl Bullecer. Since then, to become a productive and competitive Computer Technician that ACLC Computer Technician Specialists has to offer.</p>', NULL);
INSERT INTO `organization` VALUES (3, '3.png', 'ACLC DESIGNERS  AND SKILLED STUDENTS (ADSS)', '<p><strong>Mission</strong></p>\r\n<p>The ADSS Organizations aims to enhance the student&rsquo;s skills in Graphic Design and Multimedia through trainings and tutorial set by the Club and make each member credentials qualified on the field.</p>\r\n<p><strong>Vision</strong></p>\r\n<p>Early 2016 when the ACLC COMPUTER TECHNICIAN SPECIALISTS or ACTS organization was established. The organization was created by Mr. Cyrill Allen. Who was a former ACLC Butuan instructor and also handled the Computer Installation subject in which the inspiration behind of the said organization. One of the pioneers of the organization was Mr. Ken Charles Palma who on his power became the very first president of ACTS together with his members; Christopher Sodusta, Elvis John Cayetano, Honey Grace Raganas and Mizha Chryl Bullecer. Since then, to become a productive and competitive Computer Technician that ACLC Computer Technician Specialists has to offer.</p>\r\n<p><strong>History</strong></p>\r\n<p>The Club began from the idea of the Computer Education Department Dean, Sir Junell Bojocan in coordination with all the faculty members to form different clubs based on the different IT fields. Primary reason was to enhance the student skills and give them an opportunity to be exposed and engaged in various activities within the stipulated mandated of the club. It was then established last Academic Year 2015 &ndash; 2016 with Ma&rsquo;am Divine Grace A. Romaguera as a designated adviser and almost 30 chosen members out from the screening.</p>', NULL);
INSERT INTO `organization` VALUES (4, '4.png', 'ACLC PROGRAMMERS STUDENT SOCIETY (APPS)', '<p><strong>Mission</strong></p>\r\n<p>The APSS organizations aims to enhance the skills and passions of every ACLC students in programming through conducting trainings and tutorials provided by the club (APSS) and make them creditably qualified on the field</p>\r\n<p><strong>Vision</strong></p>\r\n<p>The vision of ACLC PROGRAMMER STUDENT SOCIETY is to be recognized as a leader in quality and value and as a critical component of corporate strategy and bring inspiration and innovation to every student to become competitive in the future job. To make the students well-prepared in the future and effective in terms of understanding of technologies.</p>\r\n<p><strong>History</strong></p>\r\n<p>Year 2016, during the meeting of IT Department the topic was opened that, why not open or create an organization that will cater all those skilled and aspiring programmers in ACLC. Then Ma&rsquo;am Zusmitha Maturan think of any possible name that will suit to the organization, then it came up to her mind, ACLC Programmers Student Society and so her co-instructor agreed to her idea and it was the time the APSS organization was created and Ma&rsquo;am Zusmitha Maturan was the first adviser of this organization.</p>', NULL);
INSERT INTO `organization` VALUES (5, '5.png', 'COMPUTER SCIENCE GUILD (CSG)', '<p style=\"text-align: justify;\"><strong>Mission</strong></p>\r\n<p style=\"text-align: justify;\">To promote camaraderie among the BSCS students in ACLC College of Butuan. To be able to cultivate and understand what Computer Science and how it will help in our society. To help Computer Science students excel in the field of their expertise. To help and assist Computer Science students on the process of their thesis studies. To be able to give recognition and appreciation to all Computer Science students&rsquo; achievements. To build strong connection among Computer Science students preventing them to shift to other courses.</p>\r\n<p style=\"text-align: justify;\"><strong>Vision</strong></p>\r\n<p style=\"text-align: justify;\">Aspires to be a Centre of Excellence in the area of Computer Science Education, Research and Development. Cultivate the knowledge and hone the skills of the students to become globally-competitive with the core values of truth.</p>\r\n<p style=\"text-align: justify;\"><strong>History</strong></p>\r\n<p style=\"text-align: justify;\">The first discussion of implementing an organization for Computer Science students happened at the end of the second semester of the school year 2016-2017. The pioneering guild members took consultation to the BSCS Program Head and discussed among themselves the process of implementing an official organization. The organization was approved and acknowledge as official organization of the ACLC College of Butuan last August 2017. The first ever general assembly for CS students took place. Discussing the main objectives of the organization, by laws and other things. The pioneering officers was elected on the same day. The newly established organization took the liberty of joining various school activities and initiate good camaraderie among other official organizations taking the first step in uniting the students taking the BSCS program.</p>', NULL);
INSERT INTO `organization` VALUES (6, '6.png', 'JUNIOR EXECUTIVES MARKETING ASSOCIATE (JEMA)', '<p style=\"text-align: justify;\"><strong>Mission</strong></p>\r\n<p style=\"text-align: justify;\">To enhance the knowledge and skills of all member organization in the field of marketing. To equip its members with the tools and the principles in marketing through its best trainings and seminars. To inculcate professionalism and excellence to the members through the organization&rsquo;s endeavors. To create a community of socially responsible individuals who will contribute to the betterment of the society.</p>\r\n<p style=\"text-align: justify;\"><strong>Vision</strong></p>\r\n<p style=\"text-align: justify;\">The Philippine Junior Marketing Association envisions itself as the Official and national federation of all Junior Marketing Associations and other business organizations within and outside Metro Manila.</p>\r\n<p style=\"text-align: justify;\">It also envisions itself to be a channel that will guide its affiliates towards becoming the finest Marketing Professionals and Business Leaders in the country by organizing different events on the subject of Marketing that will give them an actual application of what they have learned in their schools, to be an instrument that will bring out the best from every local organizations with regard to organizing and facilitating events, and to be pre-eminent organization in the field of marketing.</p>\r\n<p style=\"text-align: justify;\"><strong>History</strong></p>\r\n<p style=\"text-align: justify;\">Mr.&nbsp;<a href=\"https://www.facebook.com/celbert.gamefowlbackyardbreeder?fref=mentions\">Celbert Daguplo</a>&nbsp;- the founding President (1st Semester, AY 2016-2017) of the school\'s Junior Executive Marketing Association (JEMA). His term seen the first academic activities of the organization with back to back seminars on Stress Management and Personality Development. Mr.&nbsp;<a href=\"https://www.facebook.com/puraysamboy?fref=mentions\">Francis Joseph Puray</a>&nbsp;- the second President (2nd Semester, AY 2016-2017) of the Junior Executive Marketing Association (JEMA) with whom the first Marketing Expo \"XpoSure\" was held at the Guingona Park. His term also seen the first connection of the organization with the PJMA. Mr.&nbsp;Francis Louie &ldquo;Chubby&rdquo; Eltagon&nbsp;- the third JEMA President (1st Sem, AY 2017-2018) who coined the first JEMA Day and the first Miss ACLC-JEMA at the Imadejas Convention Hall. He has linked the organization closer to many national and local companies that has seen inflows of over 50 thousand pesos in cash and in-kind. He also pushed for the official simple but meaningful logo of the organization and started the JEMA membership ID and Facebook page. It was during his term that JEMA became officially member with the Philippine Junior Marketing Association (PJMA). Ms.&nbsp;Ivy Grace Carreon&nbsp;- the fourth JEMA President (2nd Sem, AY 2017-2018) with whom JEMA has started its own CES program at the Por Cristo Home for the Aged. She organized the first ACLC One Shop Bazaar and strengthen further the connection of many businesses to the organization and the institution. It was during her term that JEMA became active member of the LCO. Her term also seen the first General Election held in secret voting with two parties competing, the Creative Marketers\' Party and the Market Innovators\' Party. All said officers were under the supervision and guidance of Ms. Jocelyn D. Ramos the former Business Education Department Dean and Mr. John Edward G. Malazarte the current OIC Dean Business Education Department.</p>', NULL);
INSERT INTO `organization` VALUES (7, '7.png', 'JUNIOR FINANCIAL EXECUTIVES (JFINEX)', '<p style=\"text-align: justify;\"><strong>Mission</strong></p>\r\n<p style=\"text-align: justify;\">The following shall be the principles in which the organization, its officers, and members shall carry the purposes of their association:</p>\r\n<ol style=\"text-align: justify;\">\r\n<li><strong>Synergy</strong>. The organization shall uphold the institutional and departmental visions, missions, and goals in all its programs, plans, projects, and activities and shall collaborate with the respective school authority in the performance and optimization of such endeavors.</li>\r\n<li><strong>Virtue</strong>. The organization and its members shall competently decide and act in all their endeavors with the institutional core values of accountability and responsibility, creativity, leadership, commitment to excellence, and sustainability.</li>\r\n<li><strong>Professionalism</strong>. The officers and members shall think and live in the attributes of policy-abiding and exemplary business, entrepreneurial, and finance students with emphasis on diligence, forbearance, modesty, and teamwork.</li>\r\n<li><strong>Stewardship</strong>. The organization through its members shall holistically follow a culture of financial education, innovation, technopreneurship, competence, fellowship and social responsibility.</li>\r\n<li><strong>Honor</strong>. The organization and its officers shall commit excellence in performance, transparency, and management accountability in all their academic, political, and economic endeavors and shall assure the members with fair and timely reporting of relevant information.</li>\r\n</ol>\r\n<p style=\"text-align: justify;\"><strong>Vision</strong></p>\r\n<p style=\"text-align: justify;\">The organization, its officers and members identify themselves as sustainable partners of the institution in leading the generation and development of innovative and technopreneurial financial education.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>', NULL);
INSERT INTO `organization` VALUES (8, '8.png', 'Dance Versatyl (DV)', '<p style=\"text-align: justify;\"><strong>Mission</strong></p>\r\n<p style=\"text-align: justify;\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Our mission is to use the creative medium of dance and performing to train, educate, develop and empower youth and adults inside and outside the campus.</p>\r\n<p style=\"text-align: justify;\"><strong>Vision</strong></p>\r\n<p style=\"text-align: justify;\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Our vision is to provide training in the field of dancing and performing to all people with talent and passion; producing informed dancers and choreographers embracing the roots from which these arts forms evolved.</p>\r\n<p style=\"text-align: justify;\"><strong>History</strong></p>\r\n<p style=\"text-align: justify;\"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>ACLC Dance Versatyl is an organization of ACLC Butuan that wishes to train and produce aspiring dancers that are willing to learn and are open for opportunities in dancing industry. To promote extra-curricular activities such as dancing rather than indulging themselves to bad influences in the community such as prohibited drugs and criminality.</p>\r\n<p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Organization was called ACLC Dance Versatyl Troupe but since the organization is performing inside and outside the school premises, the members led by Mr. John Rezy Lagura decided to change the organizations name into ACLC Dance Versatyl on 2012. But the said organization name was only approved by the administration on the second semester of 2013. The ACLC Dance Versatyl derived from the words &ldquo;Versatile with style dancers&rdquo;. Dance Versatyl held auditions every semester to recruit new members. The new recruit members are taught different genres including Contemporary, Jazz, Pop, Hip Hop, Dancehall and etc.</p>\r\n<p style=\"text-align: justify;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Until now, the organization is still using the name ACLC Dance Versatyl and still applying the same routine in recruiting future members in the organization.</p>', NULL);
INSERT INTO `organization` VALUES (9, '9.png', 'DRUM AND LYRE CORPS (DLC)', '<p style=\"text-align: justify;\"><strong>Mission</strong></p>\n<p style=\"text-align: justify;\">To spread the passion of sound and music by playing the instruments and performing. To hone the skills of the student until they reach their full potential. To give recognition to the talent of the students in this field. To build a companionship between the students from different departments in ACLC Butuan.</p>\n<p style=\"text-align: justify;\"><strong>Vision</strong></p>\n<p style=\"text-align: justify;\">To perform during the school activities and to participate in various selected festivals and events that entertains the audience.</p>\n<p style=\"text-align: justify;\"><strong>History</strong></p>\n<p style=\"text-align: justify;\">The ACLC Drum and Lyre Corps started in year 2012. The unity of the multi-talented students builds this organization to represent the varied artistry of sound, music and entertainment. Upon its approval, the organization started off with a few members. In the year 2014 with the addition of the K-12 Curriculum in ACLC Butuan, helps to improve the number of members in the organization.&nbsp; The Drum and Lyre Corps (DLC) became more active by the help of the band President Ms. Irish Casera at that time together with her promising officers. Since then, the organization communicates talents outside the school premise and builds amity towards each other. By the start of the year 2018, the organization started to actively join various school activities and shared companionship to other official organizations.</p>\n<p style=\"text-align: justify;\"><strong>&nbsp;</strong></p>', NULL);
INSERT INTO `organization` VALUES (10, '10.png', 'ROTARACT', '<p style=\"text-align: justify;\"><strong>Mission</strong></p>\n<p style=\"text-align: justify;\">The Rotaract Club of ACLC Butuan&rsquo;s passion for service and excellence is driven by Rotary International&rsquo;s vision &ldquo;Service Above Self&rdquo;. Thus, the club commits itself to promote and support the advocacy of its sponsoring Rotary Club of Downtown Butuan and District 3860, living by the Rotaract motto: &ldquo;Fellowship through Service&rdquo;.</p>\n<p style=\"text-align: justify;\">The Club continuously provides service to others, promote integrity, and advance world understanding, goodwill, and peace through our fellowship.</p>\n<p style=\"text-align: justify;\">In all projects and activities, there is the utmost consideration for a strong sense of personal, ethical and social values in pursuit of the common good.</p>\n<p style=\"text-align: justify;\"><strong>Vision</strong></p>\n<p style=\"text-align: justify;\">The Rotaract Club of ACLC Butuan envisions a society composed of individuals passionately serving and making difference in the community.</p>\n<p style=\"text-align: justify;\"><strong>History</strong></p>\n<p style=\"text-align: justify;\">The Rotaract Club of ACLC Butuan is a school-based club sponsored by the Rotary Club of Downtown Butuan. Rotary International District 3860. It was chartered on June 2009 under its first club president Alex Black and her term had leadership training programs. By years 2011, headed by Karl Max Fabe, he had computer literacy program for teachers and graduating students and he also had leadership training programs. Then, on year 2012 headed by Krystine Kaye Fabe, she had also computer literacy program. Next on Fabe&rsquo;s term, it was followed by Aljun Ampo on year 2013 and he had computer literacy program to students and leadership training programs same with Leah Martil on 2014. By the year 2015 to 2017, the club was headed by Kemberly Pardilanan for three consecutive years and she had great experience in the Rotaract club. After Pardilanan&rsquo;s term, it was followed by Eufemio S. Canada for R.Y 2017 to 2018 then after his term the club now is headed by Via Marie F. Macula, the President of the Rotaract Club of ACLC Butuan R.Y 2018-2019.</p>', NULL);
INSERT INTO `organization` VALUES (11, '11.png', 'ACLC STUDENT ASSISTANTS’ ORGANIZATION', '<p style=\"text-align: justify;\"><strong>Mission</strong></p>\n<p style=\"text-align: justify;\">The mission of ACLC-SAO is to provide effective student assistant representation in this institution, for the purpose of embodying the ideals and aspirations of the student assistants for the benefit and betterment of the institution.</p>\n<p style=\"text-align: justify;\"><strong>Vision</strong></p>\n<p style=\"text-align: justify;\">We are the model for service, discipline, responsibility, and respect, living in accordance with the vision of the institution, contributing to the sustainable development of the school through effective and quality activities, programs and services.</p>\n<p style=\"text-align: justify;\">SAO Logo</p>\n<p style=\"text-align: justify;\">The ACLC-SAO logo is composed of five elements contained in a shield. The <strong>shield</strong> represents the commitment of ACLC-SAO in protecting the Institution&rsquo;s name. The <strong>ribbon</strong> represents the ties of the organization and the institution. The dominant color is blue, aside from it is the color of the ACLC, it also represents calmness and sincerity which best defines the Organization.</p>\n<p style=\"text-align: justify;\">The Elements inside the shield are the following:</p>\n<p style=\"text-align: justify;\"><strong>ACLC Logo. </strong>The symbol of the institution where the organization belongs and is committed with</p>\n<p style=\"text-align: justify;\"><strong>Open Palm. </strong>The open palm represents one of the four core values of the ACLC-SAO which is service.</p>\n<p style=\"text-align: justify;\"><strong>Globe on Palm. </strong>The Globe on palm represents one of the four core values of the ACLC-SAO which is Responsibility</p>\n<p style=\"text-align: justify;\"><strong>Clock. </strong>The Clock represents one of the four core values of the ACLC-SAO which is Discipline; and</p>\n<p style=\"text-align: justify;\"><strong>Hand Shake. </strong>The Shake hands represent one of the four core values of the ACLC-SAO which is Respect</p>\n<p style=\"text-align: justify;\">The logo of ACLC is separated from the core values with a diagonal line which means that the organization, with the help of its core values, will help the schools progress as time goes by and as the organization grows. At the bottom of the shield is written the established year of the Organization</p>', NULL);
INSERT INTO `organization` VALUES (12, '12.png', 'KRISTIYANONG KABATAAN PARA SA BAYAN', '<p style=\"text-align: justify;\"><strong>Mission</strong></p>\n<p style=\"text-align: justify;\">To inspire the youth to live for Jesus Christ and to offer the prime years of their lives in service to God and country.</p>\n<p style=\"text-align: justify;\"><strong>Vision</strong></p>\n<p style=\"text-align: justify;\">A dynamic youth movement transforming young people worldwide through the full Gospel of the Lord Jesus Christ for righteous and excellent leadership in the church and nations.</p>', NULL);

-- ----------------------------
-- Table structure for prog_id
-- ----------------------------
DROP TABLE IF EXISTS `prog_id`;
CREATE TABLE `prog_id`  (
  `prog_id` int(11) NOT NULL AUTO_INCREMENT,
  `prog_name` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`prog_id`) USING BTREE,
  INDEX `account_prog_id`(`ac_id`) USING BTREE,
  CONSTRAINT `account_prog_id` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of prog_id
-- ----------------------------
INSERT INTO `prog_id` VALUES (5, NULL, '<div class=\"mb-20\">\n<h4 class=\"c-gray f-30\">Computer Education&nbsp;Department</h4>\n<div class=\"mb-20 pl-15\">\n<h6 class=\"c-gray f-20\">4 year Course</h6>\n<ul class=\"c-gray f-16 pl-15 lmb-10\">\n<li>Bachelor of Computer Science in Computer Science</li>\n<li>Bachelor of Computer Science in Information Technology</li>\n</ul>\n<h6 class=\"c-gray f-20\">3 year Diploma Programs</h6>\n<ul class=\"c-gray f-16 pl-15 lmb-10\">\n<li>Computer Technology</li>\n<li>Information and Communication Technology</li>\n<li>Software Application and Development Technology</li>\n<li>Telecommunication and Computer Servicing Technology</li>\n</ul>\n</div>\n</div>\n<div class=\"mb-20\">\n<h4 class=\"c-gray f-30\">Business Education&nbsp;Department</h4>\n<div class=\"mb-20 pl-15\">\n<h6 class=\"c-gray f-20\">4 year Course</h6>\n<ul class=\"c-gray f-16 pl-15 lmb-10\">\n<li>Bachelor of Science in Business Administration major in Financial Management</li>\n<li>Bachelor of Science in Business Administration major in Marketing Management</li>\n</ul>\n</div>\n</div>\n<div class=\"mb-20\">\n<h4 class=\"c-gray f-30\">Senior High School Strands</h4>\n<div class=\"mb-20 pl-15\">\n<h6 class=\"c-gray f-20\">Academic Strand</h6>\n<ul class=\"c-gray f-16 pl-15 lmb-10\">\n<li>General Academic Strand (GAS)</li>\n<li>Accountancy, Business and Management (ABM)</li>\n<li>Science, Technology, Engineering, and Mathematics (STEM)</li>\n</ul>\n<h6 class=\"c-gray f-20\">Technical Vocational Strand</h6>\n<ul class=\"c-gray f-16 pl-15 lmb-10\">\n<li>Information and Communication Technology (ICT)</li>\n<li>Computer System Servicing NC II</li>\n</ul>\n</div>\n</div>', '2019-04-02 10:20:31 AM', NULL);

-- ----------------------------
-- Table structure for rieds
-- ----------------------------
DROP TABLE IF EXISTS `rieds`;
CREATE TABLE `rieds`  (
  `ried_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `summary` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_published` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_posted` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ried_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rieds
-- ----------------------------
INSERT INTO `rieds` VALUES (1, 'RMRJ Volume 2 Number 1 2019', '', '2019-05-27', '2019-05-27 02:18:02 PM', NULL, '1-RIED Multidisciplinary Research Journal (Online)-converted (1).pdf');
INSERT INTO `rieds` VALUES (2, 'RIED Editorial Board', '', '2019-04-24', '2019-04-24', NULL, '2-RIED-EDITORIAL-BOARD.pdf');
INSERT INTO `rieds` VALUES (3, 'RMRJ Volume 1 Number 1 2018', '', '2019-05-27', '2019-05-27 12:05:00 PM', NULL, '3-RMRJ Volume 1 Number 1 2019-converted.pdf');

-- ----------------------------
-- Table structure for rmrjs
-- ----------------------------
DROP TABLE IF EXISTS `rmrjs`;
CREATE TABLE `rmrjs`  (
  `rmrj_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `summary` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_published` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_posted` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`rmrj_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rmrjs
-- ----------------------------
INSERT INTO `rmrjs` VALUES (1, 'Book of Abstract for Manila', '', '2019-04-22', '2019-04-22', NULL, '1-Book-of-Abstract-for-Manila.pdf');
INSERT INTO `rmrjs` VALUES (2, 'RMRJ Book of Abstract Editorial-Board', '', '2019-04-24', '2019-04-24', NULL, '2-RMRJ-Book-of-Abstract-Editorial-Board.pdf');
INSERT INTO `rmrjs` VALUES (3, 'BOOK OF ABSTRACT', '', '2019-05-24', '2019-05-27', NULL, '3-BOA with ISSN-converted.pdf');

-- ----------------------------
-- Table structure for sch_act
-- ----------------------------
DROP TABLE IF EXISTS `sch_act`;
CREATE TABLE `sch_act`  (
  `sc_id` int(11) NOT NULL AUTO_INCREMENT,
  `act_title` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `time` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `department` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `details` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`sc_id`) USING BTREE,
  INDEX `account_sch_act`(`ac_id`) USING BTREE,
  CONSTRAINT `account_sch_act` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sch_act
-- ----------------------------
INSERT INTO `sch_act` VALUES (1, 'Test School Activity', '2018-08-15', '20:30', 'ICT', '<p>Hello World!</p>', NULL);

-- ----------------------------
-- Table structure for schol_dir
-- ----------------------------
DROP TABLE IF EXISTS `schol_dir`;
CREATE TABLE `schol_dir`  (
  `osd_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` date NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`osd_id`) USING BTREE,
  INDEX `account_schol_dir`(`ac_id`) USING BTREE,
  CONSTRAINT `account_schol_dir` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of schol_dir
-- ----------------------------
INSERT INTO `schol_dir` VALUES (10, 'Alan L. Atega', '', '2018-12-11', NULL, 'plugins/images/school_director/10.jpg');
INSERT INTO `schol_dir` VALUES (11, 'Quality Management System (QMS)', '', '2018-08-07', NULL, NULL);
INSERT INTO `schol_dir` VALUES (12, 'Research Development and Innovation Office (RDIO)', '', '2018-08-07', NULL, NULL);
INSERT INTO `schol_dir` VALUES (13, 'Planning ang Monitoring Office (PMO)', '', '2018-08-07', NULL, NULL);
INSERT INTO `schol_dir` VALUES (14, 'Community Extension and Linkages', '', '2018-08-07', NULL, NULL);

-- ----------------------------
-- Table structure for scholarship
-- ----------------------------
DROP TABLE IF EXISTS `scholarship`;
CREATE TABLE `scholarship`  (
  `scholarship_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_posted` datetime(0) NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`scholarship_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of scholarship
-- ----------------------------
INSERT INTO `scholarship` VALUES (1, 'scholar!', '<p>Scholarship ni siya!</p>', '2018-08-15 09:32:21', NULL);
INSERT INTO `scholarship` VALUES (2, 'teest', '<p><a title=\"go to google.\" href=\"http://www.google.com\" target=\"_blank\">www.google.com</a></p>', '2018-10-30 10:44:17', NULL);

-- ----------------------------
-- Table structure for science_invest
-- ----------------------------
DROP TABLE IF EXISTS `science_invest`;
CREATE TABLE `science_invest`  (
  `sci_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `summary` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_published` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_posted` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`sci_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of science_invest
-- ----------------------------

-- ----------------------------
-- Table structure for ssg_info
-- ----------------------------
DROP TABLE IF EXISTS `ssg_info`;
CREATE TABLE `ssg_info`  (
  `ssgi_id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ssgi_id`) USING BTREE,
  INDEX `account_ssg_info`(`ac_id`) USING BTREE,
  CONSTRAINT `account_ssg_info` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ssg_info
-- ----------------------------
INSERT INTO `ssg_info` VALUES (1, '<p>  </p>', NULL);

-- ----------------------------
-- Table structure for ssg_pers_info
-- ----------------------------
DROP TABLE IF EXISTS `ssg_pers_info`;
CREATE TABLE `ssg_pers_info`  (
  `ssgp_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `fullname` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `designation` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `acad_year` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `detail` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ssgp_id`) USING BTREE,
  INDEX `account_ssg_pers_info`(`ac_id`) USING BTREE,
  CONSTRAINT `account_ssg_pers_info` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 53 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ssg_pers_info
-- ----------------------------
INSERT INTO `ssg_pers_info` VALUES (31, NULL, 'LANCE HUGHIE I. DABON', 'SSG-PRESIDENT', '2018-2019', 'Bachelor of Science in Business Administration major in Marketing Management\n	Member, Junior Finance Executives, 2016-2017\n	Member, Junior Executive Marketing Associates\n	Vice-President for Non-Academic Affairs, Junior Finance Executives, 2016-2017\n	Governor, Business Education Program, 2017-2018\n	President, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (32, 'plugins/images/ssg_pers_info/32.jpg', 'JOSHUA A. CAALIM', 'SSG-VICE PRESIDENT', '2018-2019', 'Bachelor of Science in Information Technology\n	Graphic Artist, ACLC Designers and Skilled Students\n	Senator, Supreme Student Government, 2017-2018\n	Vice-President, Supreme Student Government, 2018-2019\n	Chairman, League of Campus Organizations\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (33, 'plugins/images/ssg_pers_info/33.jpg', 'VINNIZA BIANCA C. PAJE', 'SSG-GENERAL SECRETARY ', '2018-2019', 'Bachelor of Science in Information Technology\n	Graphic Artist, ACLC Designers and Skilled Students\n	Secretary, Information Technology Education Program, 2017-2018\n	Secretary, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (34, 'plugins/images/ssg_pers_info/34.jpg', 'AYRISSE C. FUENTES', 'SSG-TREASURER', '2018-2019', 'Bachelor of Science in Business Administration major in Financial Management\n	Member, Junior Finance Executives, 2016-2019\n	Vice-President for Communications, Junior Finance Executives, 2016-2017\n	Treasurer, Business Education Program, 2017-2018 (2nd Semester)\n	Treasurer, Supreme Student Government, 2018-2019\n\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (35, 'plugins/images/ssg_pers_info/35.jpg', 'MICHELLE LUCENO', 'SSG-AUDITOR', '2018-2019', 'Bachelor of Science in Business Administration major in Financial Management\n	Member, Junior Finance Executives, 2016-2019\n	Treasurer, Business Education Program, 2017-2018 (1st Semester)\n	Auditor, Business Education Program, 2017-2018 (2nd Semester)\n	Auditor, Supreme Student Government, 2018-2019\n\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (37, 'plugins/images/ssg_pers_info/37.jpg', 'CHARLENE JOY AWA', 'SSG-PIO (INTERNAL)', '2018-2019', 'Bachelor of Science in Business Administration major in Financial Management\n	President, Junior Finance Executives, 2016-2017\n	Member, Junior Finance Executives, 2016-2019  \n	Treasurer, Supreme Student Government, 2017-2018\n	PIO Internal, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (38, 'plugins/images/ssg_pers_info/38.jpg', 'SARAH JENINE C. ABALORIO', 'SSG-PIO (EXTERNAL)', '2018-2019', 'Bachelor of Science in Business Administration Major in Marketing Management\n	Member, Junior Executive Marketing Associates, 2016-2019\n	Auditor, Junior Executive Marketing Associates, 2017-2018\n	PIO External, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (39, 'plugins/images/ssg_pers_info/39.jpg', 'EUFEMIO S. CAÑADA', 'BUSINESS EDUCATION DEPARTMENT GOVERNOR', '2018-2019', 'Bachelor of Science in Business Administration major in Marketing Management\n	Member, Junior Executive Marketing Associates\n	Secretary, Rotaract Club of ACLC Butuan, 2016-2017\n	President, Rotaract Club of ACLC Butuan, 2017-2018\n	Secretary, Business Education Department, 2017-2018\n	Governor, Business Education Department, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (40, 'plugins/images/ssg_pers_info/40.jpg', 'PAOLO L. PACALDO', 'COMPUTER EDUCATION DEPARTMENT GOVERNOR', '2018-2019', 'Bachelor of Science in Information Technology\n	Graphic Artist, ACLC Designers and Skilled Students\n	Public Information Officer, Information Technology Education Program, 2017-2018\n	Governor, Information Technology Education Department, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (41, NULL, 'JOHN MARK B. CORREA', 'SSG-SENATE PRESIDENT', '2018-2019', 'Bachelor of Science in Information Technology\n	Senator, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (42, 'plugins/images/ssg_pers_info/42.jpg', 'KAIZER G. BALABA', 'SENATOR', '2018-2019', 'Bachelor of Science in Business Administration Major in Marketing Management\n	Senator, Supreme Student Government, 2017-2018\n	Senator, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (43, 'plugins/images/ssg_pers_info/43.jpg', 'ROSE JANE R. ESCATRON', 'SENATOR', '2018-2019', 'Bachelor of Science in Business Administration major in Financial Management\n	JFINEX- Vice President for Communications 2nd Year, 2017-2018\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (44, 'plugins/images/ssg_pers_info/44.jpg', 'ELLIE ISHRAEL F. LINAO', 'SENATOR', '2018-2019', 'Associate Computer Technology\n	Senator, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (45, 'plugins/images/ssg_pers_info/45.jpg', 'IVY GRACE CARREON', 'SENATOR', '2018-2019', 'Bachelor of Science in Business Administration major in Marketing Management\n	President, Junior Executive Management Association, 2017-2018\nPresident, Junior Executive Management Association, 2018-2019\nSenator, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (46, 'plugins/images/ssg_pers_info/46.jpg', 'CARLO B. HERNAIS', 'SENATOR', '2018-2019', 'Bachelor of Science in Business Administration Major in Financial Management\n	Senator, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (47, 'plugins/images/ssg_pers_info/47.jpg', 'ERNEST JHON PAUL B. ROMA', 'SENATOR', '2018-2019', 'Bachelor of Science in Information Technology\n	Senator, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (48, 'plugins/images/ssg_pers_info/48.jpg', 'ALFREDO J. CEDEÑO JR.', 'SENATOR', '2018-2019', 'Bachelor of Science in Information Technology\n	Senator, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (49, 'plugins/images/ssg_pers_info/49.jpg', 'KENNETH JOHN G. TORREDES', 'SENATOR', '2018-2019', 'Bachelor of Science in Information Technology\n	Senator, Supreme Student Government, 2018-2019\n\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (50, 'plugins/images/ssg_pers_info/50.jpg', 'DANIKA MAE M. BAGUIO', 'SENATOR', '2018-2019', 'Bachelor of Science in Information Technology\n	Graphic Artist, ACLC Designers and Skilled Students\n	4 Years Mayor, Information Technology Education Program, 2017-2018\n	Senator, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (51, 'plugins/images/ssg_pers_info/51.jpg', 'MARIA ANGEL LOU GUIMARE', 'SENATOR', '2018-2019', 'Bachelor of Science in Information Technology\n	Secretary, Supreme Student Government, 2017-2018\n	Senator, Supreme Student Government, 2018-2019\n', NULL);
INSERT INTO `ssg_pers_info` VALUES (52, 'plugins/images/ssg_pers_info/52.jpg', ' LANCE HUGHIE I. DABON', 'SSG-PRESIDENT', '2018-2019', 'Bachelor of Science in Business Administration major in Marketing Management Member, Junior Finance Executives, 2016-2017 Member, Junior Executive Marketing Associates Vice-President for Non-Academic Affairs, Junior Finance Executives, 2016-2017 Governor, Business Education Program, 2017-2018 President, Supreme Student Government, 2018-2019', NULL);

-- ----------------------------
-- Table structure for stud_ad
-- ----------------------------
DROP TABLE IF EXISTS `stud_ad`;
CREATE TABLE `stud_ad`  (
  `sa_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`sa_id`) USING BTREE,
  INDEX `account_stud_ad`(`ac_id`) USING BTREE,
  CONSTRAINT `account_stud_ad` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of stud_ad
-- ----------------------------

-- ----------------------------
-- Table structure for stud_serv_div
-- ----------------------------
DROP TABLE IF EXISTS `stud_serv_div`;
CREATE TABLE `stud_serv_div`  (
  `ssd_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` date NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ssd_id`) USING BTREE,
  INDEX `account_stud_serv_div`(`ac_id`) USING BTREE,
  CONSTRAINT `account_stud_serv_div` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of stud_serv_div
-- ----------------------------
INSERT INTO `stud_serv_div` VALUES (1, 'Student Service Division', '', '2018-08-07', NULL);
INSERT INTO `stud_serv_div` VALUES (2, 'Office of the Student Affairs and Service (OSAS)', '', '2018-08-07', NULL);
INSERT INTO `stud_serv_div` VALUES (3, 'Office of the Registrar', '', '2018-08-07', NULL);
INSERT INTO `stud_serv_div` VALUES (4, 'Guidance Office', '', '2018-08-07', NULL);
INSERT INTO `stud_serv_div` VALUES (5, 'Alumni and Scholarship Office', '', '2018-08-07', NULL);
INSERT INTO `stud_serv_div` VALUES (6, 'Social and Community Extension Office', '', '2018-08-07', NULL);
INSERT INTO `stud_serv_div` VALUES (7, 'School Publication Office', '', '2018-08-07', NULL);

-- ----------------------------
-- Table structure for student_info
-- ----------------------------
DROP TABLE IF EXISTS `student_info`;
CREATE TABLE `student_info`  (
  `si_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `school_year_sem` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `course` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `middle_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `suffix` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_of_birth` date NULL DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `marital_status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `street_purok` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `barangay` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `municipality` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `province` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `postalcode` int(5) NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_school_attended` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_school_attended_year` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `juniorhighcard` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gmc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ncae` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `birthcert` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `seniorhighcard` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `honorable_dismissal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `brown_enve` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `verification` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'Pending',
  `date_created` datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`si_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of student_info
-- ----------------------------

-- ----------------------------
-- Table structure for thesis
-- ----------------------------
DROP TABLE IF EXISTS `thesis`;
CREATE TABLE `thesis`  (
  `thesis_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `summary` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_published` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_posted` date NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  `img_path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`thesis_id`) USING BTREE,
  INDEX `account_thesis`(`ac_id`) USING BTREE,
  CONSTRAINT `account_thesis` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of thesis
-- ----------------------------

-- ----------------------------
-- Table structure for vision
-- ----------------------------
DROP TABLE IF EXISTS `vision`;
CREATE TABLE `vision`  (
  `vis_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_posted` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ac_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`vis_id`) USING BTREE,
  INDEX `account_vision`(`ac_id`) USING BTREE,
  CONSTRAINT `account_vision` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of vision
-- ----------------------------
INSERT INTO `vision` VALUES (1, '<p style=\"text-align: justify;\">ACLC College of Butuan envisions to be the premier Technopreneurship school leading in globally competitive programs preferred for its cutting-edge innovations and highly competent graduates.</p>\n<p style=\"text-align: justify;\">Quality Policy Statement</p>\n<p style=\"text-align: justify;\">ACLC College of Butuan is committed to produce globally competitive and well-rounded graduates in their respective fields of endeavor, assuring stakeholders\' satisfaction, continual improvement and complaint to government and industry standards.</p>\n<p style=\"text-align: justify;\">&nbsp;</p>', '2018-10-16', NULL);

SET FOREIGN_KEY_CHECKS = 1;
