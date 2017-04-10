/*
Navicat MySQL Data Transfer

Source Server         : fandy
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : v2fp

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2017-04-09 15:50:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'Strategy');
INSERT INTO `categories` VALUES ('2', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'Workplans');
INSERT INTO `categories` VALUES ('3', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'Reports');
INSERT INTO `categories` VALUES ('4', '2017-04-07 08:56:21', '2017-04-07 08:56:21', 'Power Point');
INSERT INTO `categories` VALUES ('5', '2017-04-07 08:56:21', '2017-04-07 08:56:21', 'TOR and MoM');

-- ----------------------------
-- Table structure for catparts
-- ----------------------------
DROP TABLE IF EXISTS `catparts`;
CREATE TABLE `catparts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of catparts
-- ----------------------------
INSERT INTO `catparts` VALUES ('1', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'Ministries and Government Institutions');
INSERT INTO `catparts` VALUES ('2', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'Professional Organizations');
INSERT INTO `catparts` VALUES ('3', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'Private Sector');
INSERT INTO `catparts` VALUES ('4', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'NGO/Civil Society Organizations');
INSERT INTO `catparts` VALUES ('5', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'Academia');
INSERT INTO `catparts` VALUES ('6', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'International Development Partners');

-- ----------------------------
-- Table structure for docugroups
-- ----------------------------
DROP TABLE IF EXISTS `docugroups`;
CREATE TABLE `docugroups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of docugroups
-- ----------------------------
INSERT INTO `docugroups` VALUES ('1', '2017-04-07 10:13:27', '2017-04-07 10:13:27', 'Term of Reference (TOR)', 'TOR', '2017-04-07', '1.pdf', '5');
INSERT INTO `docugroups` VALUES ('2', '2017-04-07 10:14:01', '2017-04-07 10:14:08', 'Term of Reference ', 'TOR', '2017-04-07', '2.pdf', '6');

-- ----------------------------
-- Table structure for documents
-- ----------------------------
DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of documents
-- ----------------------------
INSERT INTO `documents` VALUES ('15', '2017-03-02 06:09:18', '2017-03-02 06:09:18', 'MoM_1st FP2020 Country Committee Meeting', '2013-05-23', 'Minutes of meeting from the 1st FP2020 Country Committee meeting in Indonesia. ', 'MoM_1st FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('16', '2017-03-02 06:10:29', '2017-03-02 07:39:50', 'MoM_2nd FP2020 Country Comittee Meeting', '2013-07-08', 'Minutes of meeting from the 2nd FP2020 Country Committee meeting in Indonesia.', 'MoM_2nd FP2020 Country Comittee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('17', '2017-03-02 06:11:34', '2017-03-02 07:40:04', 'MoM_3rd FP2020 Country Committee Meeting', '2013-07-30', 'Minutes of meeting from the 3rd FP2020 Country Committee meeting in Indonesia.', 'MoM_3rd FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('18', '2017-03-02 06:12:49', '2017-03-02 07:40:17', 'MoM_5th FP2020 Country Committee Meeting', '2013-12-03', 'Minutes of meeting from the 5th FP2020 Country Committee meeting in Indonesia.', 'MoM_5th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('19', '2017-03-02 06:17:14', '2017-03-02 06:17:14', 'MoM_6th FP2020 Country Committee Meeting ', '2014-03-18', 'Minutes of meeting from the 6th FP2020 Country Committee meeting in Indonesia.', 'MoM_6th FP2020 Country Committee Meeting .pdf', '5');
INSERT INTO `documents` VALUES ('20', '2017-03-02 06:18:09', '2017-03-02 06:18:09', 'MoM_7th FP2020 Country Committee Meeting', '2014-05-23', 'Minutes of meeting from the 7th FP2020 Country Committee meeting in Indonesia.', 'MoM_7th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('21', '2017-03-02 06:21:14', '2017-03-02 06:22:55', 'MoM_10th FP2020 Country Committee Meeting', '2015-03-20', 'Minutes of meeting from the 10th FP2020 Country Committee meeting in Indonesia.', 'MoM_10th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('22', '2017-03-02 06:22:17', '2017-03-02 06:22:17', 'MoM_11th FP2020 Country Committee Meeting', '2015-06-30', 'Minutes of meeting from the 11th FP2020 Country Committee meeting in Indonesia.', 'MoM_11th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('23', '2017-03-02 06:23:50', '2017-03-02 06:23:50', 'MoM_12th FP2020 Country Committee Meeting', '2015-10-08', 'Minutes of meeting from the 12th FP2020 Country Committee meeting in Indonesia.', 'MoM_12th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('24', '2017-03-02 06:24:42', '2017-03-02 06:24:42', 'MoM_13th FP2020 Country Committee Meeting ', '2016-03-07', 'Minutes of meeting from the 13th FP2020 Country Committee meeting in Indonesia.', 'MoM_13th FP2020 Country Committee Meeting .pdf', '5');
INSERT INTO `documents` VALUES ('25', '2017-03-02 06:25:22', '2017-03-02 06:25:22', 'MoM_14th FP2020 Country Committee Meeting', '2017-09-01', 'Minutes of meeting from the 14th FP2020 Country Committee meeting in Indonesia.', 'MoM_14th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('26', '2017-03-02 06:26:04', '2017-03-02 06:26:04', 'MoM_15th FP2020 Country Committee Meeting', '2016-12-14', 'Minutes of meeting from the 15th FP2020 Country Committee meeting in Indonesia.', 'MoM_15th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('27', '2017-03-02 06:45:26', '2017-03-02 06:48:01', 'TOR_1st FP2020 Country Committee Meeting', '2013-05-23', 'Terms of reference for the 1st FP2020 Country Committee meeting in Indonesia. ', 'TOR_1st FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('28', '2017-03-02 06:47:36', '2017-03-02 06:47:36', 'TOR_2nd FP2020 Country Committee Meeting', '2013-07-08', 'Terms of reference for the 2nd FP2020 Country Committee meeting in Indonesia. ', 'TOR_2nd FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('29', '2017-03-02 06:49:36', '2017-03-02 06:49:36', 'TOR_5th FP2020 Country Committee Meeting', '2013-10-31', 'Terms of reference for the 5th FP2020 Country Committee meeting in Indonesia. ', 'TOR_5th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('30', '2017-03-02 06:50:51', '2017-03-02 06:50:51', 'TOR_8th FP2020 Country Committee Meeting', '2014-07-23', 'Terms of reference for the 8th FP2020 Country Committee meeting in Indonesia. ', 'TOR_8th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('31', '2017-03-02 06:51:59', '2017-03-02 06:51:59', 'TOR_9th FP2020 Country Committee Meeting', '2014-10-17', 'Terms of reference for the 9th FP2020 Country Committee meeting in Indonesia. ', 'TOR_9th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('32', '2017-03-02 06:52:58', '2017-03-02 06:52:58', 'TOR_13th FP2020 Country Committee Meeting', '2016-03-07', 'Terms of reference for the 13th FP2020 Country Committee meeting in Indonesia. ', 'TOR_13th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('33', '2017-03-02 06:53:53', '2017-03-02 06:53:53', 'TOR_14th FP2020 Country Committee Meeting', '2016-09-01', 'Terms of reference for the 14th FP2020 Country Committee meeting in Indonesia. ', 'TOR_14th FP2020 Country Committee Meeting.pdf', '5');
INSERT INTO `documents` VALUES ('34', '2017-03-02 07:00:27', '2017-03-02 07:00:27', 'Presentation_1st FP2020 CC Meeting', '2013-05-23', 'Meeting of the FP2020 Indonesia Country Engagement Working Group ', 'Presentation_1st FP2020 CC Meeting.pptx', '4');
INSERT INTO `documents` VALUES ('35', '2017-03-02 07:07:55', '2017-03-02 07:07:55', 'Presentation_2nd FP2020 CC Meeting (TOR Discussion)', '2013-07-08', 'Discussion on terms of reference.', 'Presentation_2nd FP2020 CC Meeting (TOR Discussion).pptx', '4');
INSERT INTO `documents` VALUES ('36', '2017-03-02 07:08:54', '2017-03-02 07:08:54', 'Presentation_2nd FP2020 CC Meeting (Country Landscape)', '2013-07-08', 'Country landscape: Indonesia', 'Presentation_2nd FP2020 CC Meeting (Country Landscape).pptx', '4');
INSERT INTO `documents` VALUES ('37', '2017-03-02 07:15:16', '2017-03-02 07:15:16', 'Presentation_4th FP2020 CC Meeting (CEWG Update)', '2013-09-03', 'CEWG Update per September 2013', 'Presentation_4th FP2020 CC Meeting (CEWG Update).pptx', '4');
INSERT INTO `documents` VALUES ('38', '2017-03-02 07:16:54', '2017-03-02 07:16:54', 'Presentation_4th FP2020 CC Meeting (PMA WG Update)', '2013-09-03', 'Performance Monitoring and Accountability working group update. ', 'Presentation_4th FP2020 CC Meeting (PMA WG Update).ppt', '4');
INSERT INTO `documents` VALUES ('39', '2017-03-02 07:21:46', '2017-03-02 07:21:46', 'Presentation_4th FP2020 CC Meeting (Matrix)', '2013-09-03', 'Matrix', 'Presentation_4th FP2020 CC Meeting (Matrix).pptx', '4');
INSERT INTO `documents` VALUES ('40', '2017-03-02 07:26:37', '2017-03-02 07:26:37', 'Presentation_5th FP2020 CC Meeting (JHUCCP)', '2013-12-03', 'Overview of family planning program in supporting the Government of Indonesia', 'Presentation_5th FP2020 CC Meeting (JHUCCP).pdf', '4');
INSERT INTO `documents` VALUES ('41', '2017-03-02 07:34:36', '2017-03-02 07:34:36', 'Presentation_6th FP2020 CC Meeting (FP Strategy WG)', '2014-03-18', 'Progress report from the Family Planning Strategy working group.', 'Presentation_6th FP2020 CC Meeting (FP Strategy WG).pptx', '4');
INSERT INTO `documents` VALUES ('42', '2017-03-02 07:35:47', '2017-03-02 07:35:47', 'Presentation_6th FP2020 CC Meeting (R&E WG)', '2014-03-18', 'Progress report from the Rights and Empowerment working group. ', 'Presentation_6th FP2020 CC Meeting (R&E WG).pptx', '4');
INSERT INTO `documents` VALUES ('43', '2017-03-02 07:36:51', '2017-03-02 07:56:32', 'Presentation_6th FP2020 CC Meeting (Potential Training Institutions for FP)', '2014-03-18', 'Assessment of potential training institutions for international FP training.', 'Presentation_6th FP2020 CC Meeting (Potential Training Institutions for FP).pptx', '4');
INSERT INTO `documents` VALUES ('44', '2017-03-02 07:37:58', '2017-03-02 07:40:50', 'Presentation_6th FP2020 CC Meeting (AusAID)', '2014-03-18', 'Proposed Family Planning interventions. ', 'Presentation_6th FP2020 CC Meeting (AusAID).pptx', '4');
INSERT INTO `documents` VALUES ('45', '2017-03-02 07:39:22', '2017-03-02 07:39:22', 'Presentation_6th FP2020 CC Meeting (Revitalization of the FP program in Indonesia)', '2014-03-18', 'Revitalization of the FP program in Indonesia. ', 'Presentation_6th FP2020 CC Meeting (Revitalization of the FP program in Indonesia).pptx', '4');
INSERT INTO `documents` VALUES ('46', '2017-03-02 07:53:50', '2017-03-02 07:53:50', 'Presentation_7th FP2020 CC Meeting (R&E WG)', '2014-05-23', 'Progress report from the Rights and Empowerment working group (May 2014)', 'Presentation_7th FP2020 CC Meeting (R&E WG).ppt', '4');
INSERT INTO `documents` VALUES ('47', '2017-03-02 07:55:16', '2017-03-02 07:55:16', 'Presentation_7th FP2020 CC Meeting (Track20)', '2014-05-23', 'Track20 activity update', 'Presentation_7th FP2020 CC Meeting (Track20).pptx', '4');
INSERT INTO `documents` VALUES ('48', '2017-03-02 08:06:03', '2017-03-02 08:06:47', 'Presentation_8th FP2020 CC Meeting (BKKBN Forecasting Workshop) ', '2014-07-23', 'Updates on the BKKBN Forecasting Workshop (23-27 June 2014).', 'Presentation_8th FP2020 CC Meeting (BKKBN Forecasting Workshop) .pptx', '4');
INSERT INTO `documents` VALUES ('49', '2017-03-02 08:10:30', '2017-03-02 08:10:30', 'Presentation_8th FP2020 CC Meeting (FP Strategy Outline)', '2014-07-23', 'Outline of the rights-based strategy for accelerating access to Family Planning services to achieve developmental goals of Indonesia.', 'Presentation_8th FP2020 CC Meeting (FP Strategy Outline).pptx', '4');
INSERT INTO `documents` VALUES ('50', '2017-03-02 08:11:50', '2017-03-02 08:11:50', 'Presentation_8th FP2020 CC Meeting (SCM Activities and Models)', '2014-07-23', 'Progress report on Supply Chain Management Activities and SCM-Models.', 'Presentation_8th FP2020 CC Meeting (SCM Activities and Models).pptx', '4');
INSERT INTO `documents` VALUES ('51', '2017-03-02 08:12:59', '2017-03-02 08:12:59', 'Presentation_8th FP2020 CC Meeting (Track20)', '2014-07-23', 'Tracking Report on FP2020 Core Indicators, Indonesia: 2012 & 2013. \r\n', 'Presentation_8th FP2020 CC Meeting (Track20).pptx', '4');
INSERT INTO `documents` VALUES ('52', '2017-03-02 08:15:10', '2017-03-02 08:19:15', 'Presentation_9th FP2020 CC Meeting (SCM Update)', '2014-10-17', 'SCM models update (English version). ', 'Presentation_9th FP2020 CC Meeting (SCM Update).pptx', '4');
INSERT INTO `documents` VALUES ('53', '2017-03-02 08:16:43', '2017-03-02 08:16:43', 'Presentation_9th FP2020 CC Meeting (FP Strategy Update)', '2014-10-17', 'A Rights-Based Strategy for Accelerating Access to Family Planning Services to Achieve Developmental Goals of Indonesia.', 'Presentation_9th FP2020 CC Meeting (FP Strategy Update).pptx', '4');
INSERT INTO `documents` VALUES ('54', '2017-03-02 08:18:34', '2017-03-02 08:18:34', 'Presentation_9th FP2020 CC Meeting (SCM Update in Indonesian)', '2014-10-17', 'SCM models update (Indonesian version). ', 'Presentation_9th FP2020 CC Meeting (SCM Update in Indonesian).pptx', '4');
INSERT INTO `documents` VALUES ('55', '2017-03-02 08:20:28', '2017-03-02 08:20:28', 'Presentation_9th FP2020 CC Meeting (Track20)', '2014-10-17', 'Tracking Report on FP2020 Core Indicators, Indonesia: 2012 & 2013 \r\n', 'Presentation_9th FP2020 CC Meeting (Track20).pptx', '4');
INSERT INTO `documents` VALUES ('56', '2017-03-02 08:41:15', '2017-03-02 08:41:15', 'Presentation_10th FP2020 CC Meeting (FP Strategy framework)', '2015-03-20', 'Framework of the rights-based strategy for accelerating access to Family Planning services to achieve developmental goals of Indonesia.', 'Presentation_10th FP2020 CC Meeting (FP Strategy framework).pptx', '4');
INSERT INTO `documents` VALUES ('57', '2017-03-02 08:42:08', '2017-03-02 08:42:08', 'Presentation_10th FP2020 CC Meeting (R&E WG Update)', '2015-03-20', 'Progress report from the Rights and Empowerment WG. ', 'Presentation_10th FP2020 CC Meeting (R&E WG Update).pptx', '4');
INSERT INTO `documents` VALUES ('58', '2017-03-02 08:43:29', '2017-03-02 08:43:29', 'Presentation_10th FP2020 CC Meeting (ICFP Update)', '2015-03-20', 'Update on the ICFP preparations. ', 'Presentation_10th FP2020 CC Meeting (ICFP Update).pptx', '4');
INSERT INTO `documents` VALUES ('59', '2017-03-02 08:49:36', '2017-03-02 08:49:36', 'Presentation_10th FP2020 CC Meeting (UNFPA Updates)', '2015-03-20', 'Updates from UNFPA Indonesia. ', 'Presentation_10th FP2020 CC Meeting (UNFPA Updates).ppt', '4');
INSERT INTO `documents` VALUES ('61', '2017-03-06 05:25:28', '2017-03-06 07:06:43', '[Working Document] A rights-based strategy for accelerating access to family planning services to achieve Indonesia’s development goals. ', '2017-03-06', 'Developed by the family planning strategy working group, with input from the rights and empowerment group, and with technical assistance from UNFPA', '[Working Document] A rights-based strategy for accelerating access to family planning services to achieve Indonesia’s development goals. .pdf', '1');
INSERT INTO `documents` VALUES ('62', '2017-03-06 05:29:16', '2017-03-06 07:08:14', '[Working Document] A Rights-based Strategy for Accelerating Access to Integrated Family Planning and Reproductive Health Services to Achieve Indonesia’s Development Goals', '2017-03-06', 'Developed by the Family Planning Strategy Working Group, with inputs from the Rights and Empowerment Working Group, and technical assistance from UNFPA', '[Working Document] A Rights-based Strategy for Accelerating Access to Integrated Family Planning and Reproductive Health Services to Achieve Indonesia’s Development Goals.pdf', '1');
INSERT INTO `documents` VALUES ('63', '2017-03-06 05:30:27', '2017-03-06 07:07:31', '[Working Document] Strategi Pelaksanaan Berbasis Hak untuk Percepatan Akses ke Pelayanan Keluarga Berencana dan Kesehatan Reproduksi yang Terintegrasi dalam Mencapai Tujuan Pembangunan Indonesia', '2017-03-06', 'Disusun oleh Kelompok Kerja Strategi KB dengan masukan dari Kelompok Kerja Hak dan Pemberdayaan, dan dukungan teknis dari UNFPA', '[Working Document] Strategi Pelaksanaan Berbasis Hak untuk Percepatan Akses ke Pelayanan Keluarga Berencana dan Kesehatan Reproduksi yang Terintegrasi dalam Mencapai Tujuan Pembangunan Indonesia.pdf', '1');

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `narrative` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('4', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'Famly Planning Strategy', 'The main purpose of the Family Planning Strategy working group is to develop a framework for a rights-based national family planning strategy, building on existing strategies and plans, to accelerate progress towards achieving the National Mid-term Development Plan (RPJMN) targets. The members of this working group includes government agencies, professional organizations, UNFPA, and the Working Group on Rights and Empowerment.');
INSERT INTO `groups` VALUES ('5', '2017-04-07 08:56:20', '2017-04-07 09:14:09', 'Rights & Empowerment', 'The Working Group on Rights and Empowerment will advise the FP2020 Country Committee and advocate for the issue of rights and empowerment in family planning. In doing so, this working group will complement the work of the Family Planning Strategy Working Group by focusing on: 1) identifying the current barriers that prevent women from accessing information and services to meet their reproductive goals; mapping and creating a network on existing family planning programs with a specific focus on rights and empowerment; 3) identifying relevant national and international best practices; 4) contributing to the national framework for accelerating progress towards family planning and ensuring that it is rights-based; 5) developing strategies to improve access for adolescents to reproductive health and family planning information and services; and 6) monitoring the implementation of the  to ensure that rights are not violated. Similarly to the Working Group on Family Planning Strategy, this working group is also comprised of a diverse membership, including representatives from civil society, religious, medical, and youth groups.');
INSERT INTO `groups` VALUES ('6', '2017-04-07 08:56:20', '2017-04-07 09:16:57', 'Data, Monitoring and Evaluation', 'Following the establishment of the Working Groups on Family Planning Strategy and Rights and Empowerment, the Indonesian FP2020 Country Committee has now  established a third working group on Data, Monitoring and Evaluation. The purpose of this working group is to provide technical advice and support to Indonesia’s FP2020 Country Committee and to monitor and evaluate approved national family planning indicators, including approved indicators under the Sustainable Development Goals and the Medium-term Development Plan (RPJMN). Members for this working group consists of representatives from government agencies, academia, civil society, and UNFPA.');

-- ----------------------------
-- Table structure for intros
-- ----------------------------
DROP TABLE IF EXISTS `intros`;
CREATE TABLE `intros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `narrative` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of intros
-- ----------------------------
INSERT INTO `intros` VALUES ('1', '2017-04-07 08:56:20', '2017-04-07 08:56:20', 'FAMILY PLANNING 2020 (FP2020) is global movement that supports the rights of women and children to decide freely and for themselves - whether when know many children they want to have.');

-- ----------------------------
-- Table structure for members
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('1', '2017-04-07 09:10:15', '2017-04-07 09:10:50', 'The Ministry of National Development Planning Agency/ The National Development Planning Agency (BAPPENAS) ', '.', '4');
INSERT INTO `members` VALUES ('2', '2017-04-07 09:10:35', '2017-04-07 09:10:35', 'The National Population and Family Planning Board (BKKBN)', '.', '4');
INSERT INTO `members` VALUES ('3', '2017-04-07 09:11:02', '2017-04-07 09:11:02', 'Ministry of Health', '.', '4');
INSERT INTO `members` VALUES ('4', '2017-04-07 09:11:14', '2017-04-07 09:11:14', 'Indonesian Society of Obstetrics and Gynecology (POGI)', '.', '4');
INSERT INTO `members` VALUES ('5', '2017-04-07 09:11:28', '2017-04-07 09:11:28', 'Indonesian Medical Association (IDI)', '.', '4');
INSERT INTO `members` VALUES ('6', '2017-04-07 09:11:43', '2017-04-07 09:11:43', 'Indonesian Midwife Association (IBI)', '.', '4');
INSERT INTO `members` VALUES ('7', '2017-04-07 09:13:26', '2017-04-07 09:13:26', 'Rights and Empowerment Working Group', '.', '4');
INSERT INTO `members` VALUES ('8', '2017-04-07 09:13:38', '2017-04-07 09:13:38', 'UNFPA', '.', '4');
INSERT INTO `members` VALUES ('9', '2017-04-07 09:14:21', '2017-04-07 09:14:21', 'Ms. Ninuk Widyantoro', '.', '5');
INSERT INTO `members` VALUES ('10', '2017-04-07 09:14:36', '2017-04-07 09:14:36', 'Dr. Setyawati Budiningsih, MPH ', 'Lecturer', '5');
INSERT INTO `members` VALUES ('11', '2017-04-07 09:14:55', '2017-04-07 09:14:55', 'Dra. Maria Ulfa Anshor, M.Si', 'Female Muslim Activist', '5');
INSERT INTO `members` VALUES ('12', '2017-04-07 09:15:14', '2017-04-07 09:15:14', 'Dr. Reny Bunjamin, MPH', 'General practitioner and Public Health Expert', '5');
INSERT INTO `members` VALUES ('13', '2017-04-07 09:15:31', '2017-04-07 09:15:31', 'Dr. Kadek Sugiharta, Sp.OG ', 'OGBYN Specialist', '5');
INSERT INTO `members` VALUES ('14', '2017-04-07 09:15:48', '2017-04-07 09:15:48', 'Ms. Indra Supradewi, MKM', 'National Midwives Association and Lecturer', '5');
INSERT INTO `members` VALUES ('15', '2017-04-07 09:16:00', '2017-04-07 09:16:00', 'Youth Representative', '.', '5');
INSERT INTO `members` VALUES ('16', '2017-04-07 09:17:12', '2017-04-07 09:17:12', 'Prof. dr. Siswanto Agus Wilopo, SU, MSc., Sc.D, Center for Reproductive Health, University of Gadjah Mada', '.', '6');
INSERT INTO `members` VALUES ('17', '2017-04-07 09:17:24', '2017-04-07 09:17:24', 'Prof. Sri Moertiningsih Adioetomo, Demographic Institute, University of Indonesia', '.', '6');
INSERT INTO `members` VALUES ('18', '2017-04-07 09:17:38', '2017-04-07 09:17:38', 'Dr. Sukamdi , University of Gadjah Mada', '.', '6');
INSERT INTO `members` VALUES ('19', '2017-04-07 09:17:50', '2017-04-07 09:17:50', 'Mr. Edy Hasmi, IPADI', '.', '6');
INSERT INTO `members` VALUES ('20', '2017-04-07 09:18:02', '2017-04-07 09:18:02', 'Head of Planning Bureau, BKKBN', '.', '6');
INSERT INTO `members` VALUES ('21', '2017-04-07 09:18:27', '2017-04-07 09:18:27', 'Director of Data Reporting and Statistics, BKKBN', '.', '6');
INSERT INTO `members` VALUES ('22', '2017-04-07 09:18:41', '2017-04-07 09:18:41', 'Director of Information Technology and Documentation, BKKBN', '.', '6');
INSERT INTO `members` VALUES ('23', '2017-04-07 09:18:52', '2017-04-07 09:18:52', 'Head of Research and Population Development, BKKBN', '.', '6');
INSERT INTO `members` VALUES ('24', '2017-04-07 09:19:05', '2017-04-07 09:19:05', 'Head of Research and Development of Family Planning and Family Welfare, BKKBN', '.', '6');
INSERT INTO `members` VALUES ('25', '2017-04-07 09:19:16', '2017-04-07 09:19:16', 'Director of Population Control Planning, BKKBN ', '.', '6');
INSERT INTO `members` VALUES ('26', '2017-04-07 09:19:27', '2017-04-07 09:19:27', 'Director of Family, Women, Children, Youth and Sports, BAPPENAS', '.', '6');
INSERT INTO `members` VALUES ('27', '2017-04-07 09:19:38', '2017-04-07 09:19:38', 'Dr. Eni, Gustina,  MPH, Director of Family Health, Ministry of Health', '.', '6');
INSERT INTO `members` VALUES ('28', '2017-04-07 09:19:49', '2017-04-07 09:19:49', 'Ms. Atashendartini Habsjah, MA, Indonesian Planned Parenthood Association', '.', '6');
INSERT INTO `members` VALUES ('29', '2017-04-07 09:20:06', '2017-04-07 09:20:06', 'Ms. Yunita Wahyuningrum, Johns Hopkins University Center for Communication Programs', '.', '6');
INSERT INTO `members` VALUES ('30', '2017-04-07 09:20:21', '2017-04-07 09:20:21', 'Mr. Robert Magnani, Avenir Health ', '.', '6');
INSERT INTO `members` VALUES ('31', '2017-04-07 09:20:32', '2017-04-07 09:20:32', 'Mr. Edwin Mulianto, Global Associate, Family Planning, Clinton Health Access Initiative ', '.', '6');
INSERT INTO `members` VALUES ('32', '2017-04-07 09:20:44', '2017-04-07 09:20:44', 'Dr. Melania Hidayat, UNFPA', '.', '6');
INSERT INTO `members` VALUES ('33', '2017-04-07 09:20:55', '2017-04-07 09:20:55', 'Dr. Richard J. Makalew, UNFPA', '.', '6');
INSERT INTO `members` VALUES ('34', '2017-04-07 09:21:06', '2017-04-07 09:21:06', 'Representative from MOHA', '.', '6');
INSERT INTO `members` VALUES ('35', '2017-04-07 09:21:17', '2017-04-07 09:21:17', 'Representative from BPS', '.', '6');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2017_02_13_042954_create_uevents_table', '1');
INSERT INTO `migrations` VALUES ('2017_02_14_075654_create_documents_table', '1');
INSERT INTO `migrations` VALUES ('2017_02_14_075709_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_05_060646_create_groups_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_05_064756_create_members_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_05_083651_create_docugroups_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_30_070233_create_catparts_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_30_071551_create_partners_table', '1');
INSERT INTO `migrations` VALUES ('2017_04_03_074833_create_intros_table', '1');
INSERT INTO `migrations` VALUES ('2017_04_04_034952_create_news_table', '1');
INSERT INTO `migrations` VALUES ('2017_04_06_064631_create_profiles_table', '1');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of news
-- ----------------------------

-- ----------------------------
-- Table structure for partners
-- ----------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `catpart_id` int(11) NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `narrative` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of partners
-- ----------------------------
INSERT INTO `partners` VALUES ('13', '2017-03-06 05:41:55', '2017-03-06 09:55:23', 'TUNGGAL IDAMAN ABDI', '3', 'http://www.tunggal-pharma.com/en', 'tunggal13.jpg', '-');
INSERT INTO `partners` VALUES ('14', '2017-03-06 05:45:44', '2017-03-06 09:53:50', 'MITRA RAJAWALI BANJARAN', '3', 'http://mrb.co.id/', 'mitra14.jpg', '-');
INSERT INTO `partners` VALUES ('15', '2017-03-06 05:46:45', '2017-03-06 09:54:59', 'TRIYASA  NAGAMAS FARMA', '3', 'http://www.triyasa.com/about ', 'triyasa15.jpg', '-');
INSERT INTO `partners` VALUES ('16', '2017-03-06 05:48:04', '2017-03-06 09:53:24', 'MERCK SHARP AND DOHME', '3', 'http://www.msd-indonesia.com/English/Pages/home.aspx', 'merek16.jpg', '-');
INSERT INTO `partners` VALUES ('19', '2017-03-06 05:53:25', '2017-03-06 05:53:25', 'INDONESIAN MIDWIFE ASSOCIATION (IKATAN BIDAN INDONESIA)', '2', 'http://ibi.or.id/', 'indonesia21.jpg', '-');
INSERT INTO `partners` VALUES ('20', '2017-03-06 05:54:39', '2017-04-07 10:40:12', 'INDONESIAN OBSTETRIC AND GYNOCOLOGY ASSOCIATION (PERKUMPULAN OBSTETRI DAN GINEKOLOGI INDONESIA)', '2', '-', 'perkumpulan20.jpg', '-');
INSERT INTO `partners` VALUES ('21', '2017-03-06 05:56:25', '2017-04-07 10:32:31', 'AVENIR HEALTH ', '4', 'http://www.avenirhealth.org/ ', 'avenir21.jpg', '-');
INSERT INTO `partners` VALUES ('22', '2017-03-06 05:56:52', '2017-03-06 09:52:53', 'JSI (for profit) and JSI RESEARCH AND TRAINING INSTITUTE (nonprofit)', '4', '-', 'jsi22.jpg', '-');
INSERT INTO `partners` VALUES ('23', '2017-03-06 05:57:53', '2017-03-06 09:52:02', 'DKT INTERNATIONAL FAMILY PLANNING AND HIV PREVENTION  (DKT INTERNATIONAL)', '4', 'http://www.dktinternational.org/', 'dkt23.jpg', '-');
INSERT INTO `partners` VALUES ('24', '2017-03-06 05:59:04', '2017-03-06 09:50:13', 'JHPIEGO—Global Health Services, Treatment and Prevention', '4', 'https://www.jhpiego.org/', '', '-');
INSERT INTO `partners` VALUES ('25', '2017-03-06 05:59:47', '2017-04-07 10:30:28', 'FHI 360', '4', 'https://www.fhi360.org/ ', 'fhi25.jpg', '-');
INSERT INTO `partners` VALUES ('26', '2017-03-06 06:00:44', '2017-03-06 09:54:41', 'RUTGER WPF INDONESIA', '4', 'http://www.rutgerswpfindo.org/en', 'RUTGER WPF INDONESIA.jpg', '-');
INSERT INTO `partners` VALUES ('27', '2017-03-06 06:01:51', '2017-03-06 06:01:51', 'CLINTON HEALTH ACCESS INITIATIVE', '4', '-', 'CLINTON HEALTH ACCESS INITIATIVE.JPG', '-');
INSERT INTO `partners` VALUES ('28', '2017-03-06 06:03:09', '2017-04-07 10:47:29', 'UNIVERSITY OF INDONESIA', '5', 'http://www.ui.ac.id/', 'univesitas28.jpg', '-');
INSERT INTO `partners` VALUES ('29', '2017-03-06 06:04:06', '2017-04-07 10:45:57', 'UNIVERSITY OF GADJAH MADA', '5', 'https://www.ugm.ac.id/', 'universitas29.jpg', '-');
INSERT INTO `partners` VALUES ('30', '2017-03-06 06:05:15', '2017-03-06 06:05:15', 'JOHNS HOPKINS CENTER FOR COMMUNICATION PROGRAMS  (JHUCCP)', '5', 'http://ccp.jhu.edu/', 'univesitas30.jpg', '-');
INSERT INTO `partners` VALUES ('38', '2017-03-06 13:16:14', '2017-04-07 10:35:45', 'National Population and Family Planning Board (BKKBN)', '1', 'http://bkkbn.go.id', '38.jpg', '-');
INSERT INTO `partners` VALUES ('39', '2017-03-06 13:17:43', '2017-04-07 10:27:05', 'Ministry of National Development Planning (BAPPENAS)', '1', 'http://www.bappenas.go.id/', '39.jpg', '-');
INSERT INTO `partners` VALUES ('40', '2017-03-06 13:18:15', '2017-04-07 10:36:19', 'MINISTRY OF HEALTH', '1', 'http://depkes.go.id', 'k40.jpg', '-');
INSERT INTO `partners` VALUES ('41', '2017-03-06 13:19:14', '2017-04-07 10:35:26', 'MINISTRY OF HOME AFFAIRS', '1', 'http://kemendagri.go.id', 'kementrian41.jpg', '-');
INSERT INTO `partners` VALUES ('42', '2017-03-06 13:21:30', '2017-03-06 13:21:30', 'Statistics Indonesia (BPS)', '1', 'http://bps.go.id', 'badan42.jpg', '-');
INSERT INTO `partners` VALUES ('43', '2017-03-06 13:25:30', '2017-04-07 10:41:28', 'UNFPA Indonesia', '6', 'http://indonesia.unfpa.org', 'universitas43.jpg', '-');
INSERT INTO `partners` VALUES ('44', '2017-03-06 13:25:55', '2017-04-07 10:42:20', 'USAID', '6', 'https://www.usaid.gov/', 'univesitas44.jpg', '-');
INSERT INTO `partners` VALUES ('45', '2017-03-06 13:26:35', '2017-03-06 13:26:35', 'THE WORLD BANK ', '6', 'www.worldbank.org', 'univesitas45.jpg', '-');
INSERT INTO `partners` VALUES ('46', '2017-03-06 13:27:10', '2017-03-06 13:27:10', 'FORD FOUNDATION', '6', 'https://www.fordfound.org/', 'FORD FOUNDATION.jpg', '-');
INSERT INTO `partners` VALUES ('47', '2017-03-06 20:06:34', '2017-03-06 20:06:34', 'Indonesia Planned Parenthood Association (PKBI)', '4', '-', 'Indonesia Planned Parenthood Association (PKBI).jpg', '-');
INSERT INTO `partners` VALUES ('48', '2017-03-06 20:07:04', '2017-03-06 20:07:04', 'Cipta Cara Padu Foundation', '4', '-', 'Cipta Cara Padu Foundation.jpg', '-');
INSERT INTO `partners` VALUES ('49', '2017-03-06 20:08:30', '2017-03-06 20:08:30', 'Kusuma Buana Foundation (YKB)', '4', 'http://www.kusumabuana.or.id/', 'Kusuma Buana Foundation (YKB).jpg', '-');
INSERT INTO `partners` VALUES ('50', '2017-03-06 20:09:13', '2017-04-07 10:29:31', 'Yayasan Kesehatan Perempuan', '4', 'http://ykp2015.com/', '50.jpg', '--');
INSERT INTO `partners` VALUES ('51', '2017-03-06 20:10:07', '2017-03-06 20:10:07', 'Aliansi Remaja Independen', '4', 'https://aliansiremajaindependen.org/', 'Aliansi Remaja Independen.jpg', '-');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for profiles
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of profiles
-- ----------------------------
INSERT INTO `profiles` VALUES ('1', '2017-04-07 08:56:21', '2017-04-07 09:08:07', 'Global FP2020', 'In 2012, representatives of country governments, donors, multilateral agencies, civil society, and private sector organizations from around the world came together at the London Summit on Family Planning. During this summit, more than 20 governments announced their commitment to address the barriers that hinder women’s access to contraceptive information, services, and supplies. Through collective cooperation, the goal of FP2020 is to “provide an additional 120 million women in the world’s poorest countries with access to voluntary family planning by 2020.” Today, this commitment is better known as family planning 2020 (FP2020). \r\n\r\n<br><br>\r\nWorking under the guiding principle that “all women, no matter where they live should have access to lifesaving contraceptives,” the governance structure of FP2020 is comprised of: a Reference Group; a Secretariat; the Performance, Monitoring, and Evidence Working Group; and the Expert Advisory Community. Click <a href=\"http://www.familyplanning2020.org/about/governance-structure\">here</a> to learn more about the FP2020 governance structure, including their specific roles and responsibilities.\r\n<br><br>\r\nIn working towards achieving the goal as mentioned above, FP2020 places a strong emphasis on supporting country-level activities that aim to increase access to family planning. The four cross-cutting initiatives that are central to FP2020 includes: driving country-level support; promoting data use and performance management; sharpening the focus on global advocacy, rights and youth; and facilitating the dissemination of knowledge and evidence. To learn more about FP2020 click <a href=\"http://www.familyplanning2020.org/microsite/about-us\">here</a>.', '1.png');
INSERT INTO `profiles` VALUES ('2', '2017-04-07 08:56:21', '2017-04-07 09:04:24', 'FP2020 Indonesia', 'During the 2012 London Summit on Family Planning, Indonesia announced their commitment to FP2020, which aims to address the barriers that hinder women’s access to contraceptive information, services, and supplies. In translating this commitment at the country-level, Indonesia established a FP2020 Country Committee, which is responsible to create a framework to guide coordinated efforts towards revitalizing the national family planning program in Indonesia and achieving the FP2020 goal. The first FP2020 Country Committee meeting was held on May 23rd 2013 and continues to convene quarterly. These meetings serve as a forum to provide family planning updates, share best practices, and encourage potential collaborations among members. To carry out its role, three working groups (i.e., Family Planning Strategy; Rights and Empowerment; and Data, Monitoring and Evaluation) and a small secretariat support the FP2020 Country Committee.', '2.jpg');

-- ----------------------------
-- Table structure for uevents
-- ----------------------------
DROP TABLE IF EXISTS `uevents`;
CREATE TABLE `uevents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of uevents
-- ----------------------------
INSERT INTO `uevents` VALUES ('3', '2017-03-06 08:34:29', '2017-03-06 13:40:08', 'The 1st FP2020 Country Committee Meeting', '2013-05-23', 'BKKBN Office', 'To discuss the role of the Country Engagement Working Group and its articulation with the global FP2020 architecture, \r\nTo provide a mechanism that facilitates an information sharing and consultation process as part of the national efforts to fulfill FP2020 commitments  to explore ways of enhancing coordination and building upon existing supporting mechanisms.\r\n');
INSERT INTO `uevents` VALUES ('4', '2017-03-06 08:35:52', '2017-03-06 10:05:35', 'The 2nd FP2020 Country Committee Meeting', '2013-07-08', 'BKKBN Office', 'To Review of the FP2020 architecture, including roles and responsibilities of global and national mechanisms, and introduction of Indonesian members of global FP2020 Working Groups ');
INSERT INTO `uevents` VALUES ('5', '2017-03-06 08:36:31', '2017-03-06 10:05:45', 'The 3rd FP2020 Country Committee Meeting', '2013-07-30', 'Papua Room – Menara Thamrin 7th Floor', 'To discuss GoI plan to meet its FP2020 commitments, Roundtable discussion and input/update from partners ');
INSERT INTO `uevents` VALUES ('6', '2017-03-06 08:37:04', '2017-03-06 10:05:59', 'The 4th FP2020 Country Committee Meeting', '2013-09-03', 'PKBI office', 'To update members on partners mapping,\r\nTo share report from global members of FP2020 working groups (Dr. Roy Tjiong and Ms. Siti Fathonah),\r\nTo share updates on Commemoration of World Contraception Day (Dr. Julianto Witjaksono, SpOG)\r\n');
INSERT INTO `uevents` VALUES ('7', '2017-03-06 08:37:31', '2017-03-06 10:06:17', 'The 5th FP2020 Country Committee Meeting', '2013-10-31', 'BKKBN Office', 'To share lessons learned, current programs and future plan in implementing family planning intervention to update the partners’ matrix and, \r\nTo propose establishment of working group on family planning strategy and working group on right and empowerment.\r\n');
INSERT INTO `uevents` VALUES ('8', '2017-03-06 08:38:02', '2017-03-06 10:06:33', 'The 6th FP2020 Country Committee Meeting', '2014-03-18', 'DFAT office', 'To share brief updates from Faith Based Organizations, BKKBN, CEWG’s FP Strategy and the Rights and Empowerment Working Groups, \r\nTo share briefing from DFAT on the FP component for the future DFAT-MNH programme and, \r\nTo share updates on the ICMM research and the Gates’s Workshop (9-10 Jan 2014)\r\n');
INSERT INTO `uevents` VALUES ('9', '2017-03-06 08:38:31', '2017-03-06 10:07:09', 'The 7th FP2020 Country Committee Meeting', '2014-05-23', 'USAID office', 'To share updates from the FP2020 Performance, Monitoring, and Accountability Working Group (PMA WG),\r\nTo report on the FP2020 Reference Group Meeting (Seattle, Washington—April 16-17, 2014),\r\nTo update members on the Family Planning Working Groups (FP Strategy WG and Rights and Empowerment WG),\r\nTo report on the National Meeting with Manufacturers of Hormonal contraceptives (April 10, 2014),\r\nTo get updates from partners; Update on Track20 by Mr. Riris Andono Ahmad, representing Futures Institute, Update from the Monitoring and Evaluation working group (The focal point of Track20 at BKKBN) by Mr. Titut Priyugiharto, Updates from UNFPA by Dr. Melania Hidayat\r\n');
INSERT INTO `uevents` VALUES ('10', '2017-03-06 08:38:58', '2017-03-06 10:07:23', 'The 8th FP2020 Country Committee Meeting', '2014-07-23', 'BKKBN office', 'To share lessons learned from partners, their current programs and future plans related to family planning in Indonesia, \r\nTo discuss the progress made by the two working groups: FP Strategy working group and the Rights and Empowerment working group.\r\n');
INSERT INTO `uevents` VALUES ('11', '2017-03-06 08:39:22', '2017-03-06 10:07:38', 'The 9th FP2020 Country Committee Meeting', '2014-10-17', 'UNFPA office', 'To share lessons learned from partners, their current programs and future plans related to family planning in Indonesia,\r\nTo discuss the progress made by the two working groups: FP Strategy working group and the Rights and Empowerment working group.\r\n');
INSERT INTO `uevents` VALUES ('12', '2017-03-06 08:39:56', '2017-03-06 10:03:16', 'The 10th FP2020 Country Committee Meeting', '2015-03-20', 'UNFPA office', 'To share lessons learned from partners, their current programs and future plans related to family planning in Indonesia, \r\nTo discuss the progress made by the two working groups: FP Strategy working group and the Rights and Empowerment working group,\r\nTo share updates from International Conference on Family Planning (ICFP)\r\n');
INSERT INTO `uevents` VALUES ('13', '2017-03-06 08:40:31', '2017-03-06 10:03:29', 'The 11th FP2020 Country Committee Meeting', '2015-06-30', 'BKKBN office', 'To update members on ICFP by Ms. Siti Fathonah, BKKBN and on Supply Chain Management by Ms. Irma Ardiana,\r\nTo share partner updates\r\n');
INSERT INTO `uevents` VALUES ('14', '2017-03-06 08:41:03', '2017-03-06 10:03:42', 'The 12th FP2020 Country Committee Meeting', '2015-06-30', 'UNFPA office', 'To share update on the FP2020 Country Progress Report by Ms. Ambar Rahayu and ICFP update by Ms. Siti Fathonah');
INSERT INTO `uevents` VALUES ('15', '2017-03-06 08:44:06', '2017-03-06 10:03:59', 'The 13th FP2020 Country Committee Meeting', '2016-03-07', 'BKKBN Office', 'To Report from the 4th ICFP,\r\nTo share Update from the Asia region FP2020 focal points meeting,\r\nTo discuss Indonesia FP2020 Country Committee’s future plan\r\n');
INSERT INTO `uevents` VALUES ('16', '2017-03-06 08:44:38', '2017-03-06 10:04:18', 'The 14th FP2020 Country Committee Meeting', '2016-09-01', 'BKKBN office', 'To inform everyone with an interest in health and justice that midwives are crucial to helping Indonesia meet the national targets and global commitment on reproductive, maternal, neonatal, child, and adolescent health, and ensuring universal access to healthcare services,\r\nTo motivate policymakers and decision makers to implement change by lobbying for adequate midwifery resources and recognition of the unique professional role of midwives, particulary in the context of JKN implementation.\r\n');
INSERT INTO `uevents` VALUES ('17', '2017-03-06 08:45:16', '2017-03-06 10:04:53', 'The 15th FP2020 Country Committee Meeting', '2016-12-14', 'BKKBN Office', 'To discuss Working Group Reports and Action Plan Year 2017 \r\nTo share updates from 2 Working Groups: FP Strategy Working Group; and Rights and Empowerment Working Group\r\nTo share update on FP2020 Report; FP2020 Global Up Date, FP2020 Indonesia Annual Report, Landscaping Matrix, Discussion\r\n');
INSERT INTO `uevents` VALUES ('18', '2017-03-06 08:45:46', '2017-03-06 12:19:50', 'The 16th FP2020 Country Committee Meeting', '2017-03-07', 'BKKBN Office', 'Briefing on FP2020 in Indonesia, \r\nBriefing from FP2020 Global Secretariat ,\r\nTo get updates of Indonesia FP2020 Indicators including FPET Analysis and plans for Data Summit,\r\nTo share in presentation Policy Brief on Family Planning in Universal Health Coverage,\r\nTo share Working Group Updates; RFP Working Group, R&E Working Group, Data/M&E Working Group\r\n');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
