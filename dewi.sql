/*
 Navicat Premium Data Transfer

 Source Server         : mysql_local
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : dewi

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 30/03/2022 15:25:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for about_boxes_tbl
-- ----------------------------
DROP TABLE IF EXISTS `about_boxes_tbl`;
CREATE TABLE `about_boxes_tbl`  (
  `boxID` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `boxTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `boxDescription` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`boxID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of about_boxes_tbl
-- ----------------------------
INSERT INTO `about_boxes_tbl` VALUES ('1', 'about-boxes-1.jpg', 'ri-brush-4-line', 'Our Mission', 'To make Malaysia Information Technology great again.');
INSERT INTO `about_boxes_tbl` VALUES ('2', 'about-boxes-2.jpg', 'ri-calendar-check-line', 'Our Plan', 'To cultivate young Malaysian talents in the field of Information Technology.');
INSERT INTO `about_boxes_tbl` VALUES ('3', 'about-boxes-3.jpg', 'ri-movie-2-line', 'Our Vision', 'Information Technology in Malaysia is great again.');

-- ----------------------------
-- Table structure for about_details_list_tbl
-- ----------------------------
DROP TABLE IF EXISTS `about_details_list_tbl`;
CREATE TABLE `about_details_list_tbl`  (
  `listNo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`listNo`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of about_details_list_tbl
-- ----------------------------
INSERT INTO `about_details_list_tbl` VALUES ('1', 'A true centre of the local IT community');
INSERT INTO `about_details_list_tbl` VALUES ('2', 'An ideal place for launching a new software project');
INSERT INTO `about_details_list_tbl` VALUES ('4', 'Provide great expertise.');

-- ----------------------------
-- Table structure for about_details_tbl
-- ----------------------------
DROP TABLE IF EXISTS `about_details_tbl`;
CREATE TABLE `about_details_tbl`  (
  `id` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `video` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `para1` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `para2` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `coverpic` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of about_details_tbl
-- ----------------------------
INSERT INTO `about_details_tbl` VALUES ('1', 'https://www.youtube.com/watch?v=ztHopE5Wnpc&ab_channel=freeCodeCamp.org', 'Recognized as the best software developers in Malaysia.', 'Our headquarters at the Cyberjaya Office in Kuala Lumpur is where all the magic happens. It was voted the best office in Malaysian IT in the Office Superstar 2020 contest. With 1600 square meters, we can assure that all developers have enough work space.', 'C-House UTM is not only a home for our employees but also for developers from the whole region. It’s the Old Post Office, where we organize JomHack Malaysia, the biggest IT meetup in the neighborhood, attracting over 100 developers every month.', 'assets/img/features-4.png');

-- ----------------------------
-- Table structure for about_stats_tbl
-- ----------------------------
DROP TABLE IF EXISTS `about_stats_tbl`;
CREATE TABLE `about_stats_tbl`  (
  `id` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `statistic` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of about_stats_tbl
-- ----------------------------
INSERT INTO `about_stats_tbl` VALUES ('1', 'Happy Clients', '-10', 'bi bi-emoji-smile');
INSERT INTO `about_stats_tbl` VALUES ('2', 'Projects', '85', 'bi bi-journal-richtext');
INSERT INTO `about_stats_tbl` VALUES ('3', 'Years of experience', '35', 'bi bi-clock');
INSERT INTO `about_stats_tbl` VALUES ('4', 'Awards', '48', 'bi bi-award');

-- ----------------------------
-- Table structure for icons
-- ----------------------------
DROP TABLE IF EXISTS `icons`;
CREATE TABLE `icons`  (
  `IconName` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`IconName`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of icons
-- ----------------------------
INSERT INTO `icons` VALUES ('app-indicator');
INSERT INTO `icons` VALUES ('ar-chart');
INSERT INTO `icons` VALUES ('badge-3d');
INSERT INTO `icons` VALUES ('bag-plus');
INSERT INTO `icons` VALUES ('bank');
INSERT INTO `icons` VALUES ('bar-chart');
INSERT INTO `icons` VALUES ('basket');
INSERT INTO `icons` VALUES ('battery-charging');
INSERT INTO `icons` VALUES ('bicycle');
INSERT INTO `icons` VALUES ('book');
INSERT INTO `icons` VALUES ('bricks');
INSERT INTO `icons` VALUES ('brightness-high');
INSERT INTO `icons` VALUES ('calculator');
INSERT INTO `icons` VALUES ('calendar-date');
INSERT INTO `icons` VALUES ('calendar-event');
INSERT INTO `icons` VALUES ('camera');
INSERT INTO `icons` VALUES ('cart4');
INSERT INTO `icons` VALUES ('clock');
INSERT INTO `icons` VALUES ('cloud-arrow-down-fill');
INSERT INTO `icons` VALUES ('cpu');
INSERT INTO `icons` VALUES ('currency-bitcoin');
INSERT INTO `icons` VALUES ('dice-1');
INSERT INTO `icons` VALUES ('discord');
INSERT INTO `icons` VALUES ('egg');
INSERT INTO `icons` VALUES ('eye');
INSERT INTO `icons` VALUES ('facebook');
INSERT INTO `icons` VALUES ('file-arrow-up');
INSERT INTO `icons` VALUES ('file-code');
INSERT INTO `icons` VALUES ('file-earmark-code');
INSERT INTO `icons` VALUES ('gift');
INSERT INTO `icons` VALUES ('globe');
INSERT INTO `icons` VALUES ('heart');
INSERT INTO `icons` VALUES ('inbox');
INSERT INTO `icons` VALUES ('joystick');
INSERT INTO `icons` VALUES ('laptop');
INSERT INTO `icons` VALUES ('music-note-beamed');
INSERT INTO `icons` VALUES ('palette');
INSERT INTO `icons` VALUES ('pencil');
INSERT INTO `icons` VALUES ('people');
INSERT INTO `icons` VALUES ('phone');
INSERT INTO `icons` VALUES ('question');
INSERT INTO `icons` VALUES ('rainbow');
INSERT INTO `icons` VALUES ('shield');
INSERT INTO `icons` VALUES ('shield-check');
INSERT INTO `icons` VALUES ('shop');
INSERT INTO `icons` VALUES ('smartwatch');
INSERT INTO `icons` VALUES ('speedometer');
INSERT INTO `icons` VALUES ('sunglasses');
INSERT INTO `icons` VALUES ('telegram');
INSERT INTO `icons` VALUES ('telephone');
INSERT INTO `icons` VALUES ('truck');
INSERT INTO `icons` VALUES ('umbrella');
INSERT INTO `icons` VALUES ('wallet');
INSERT INTO `icons` VALUES ('whatsapp');
INSERT INTO `icons` VALUES ('wifi');
INSERT INTO `icons` VALUES ('wrench');
INSERT INTO `icons` VALUES ('youtube');

-- ----------------------------
-- Table structure for personalimage
-- ----------------------------
DROP TABLE IF EXISTS `personalimage`;
CREATE TABLE `personalimage`  (
  `imglink` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `imgDescription` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`imglink`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personalimage
-- ----------------------------
INSERT INTO `personalimage` VALUES ('assets/img/team/Brandon.jpeg', 'Brandon');
INSERT INTO `personalimage` VALUES ('assets/img/team/CL.jpeg', 'Chien Li');
INSERT INTO `personalimage` VALUES ('assets/img/team/Desmond.jpeg', 'Desmond');
INSERT INTO `personalimage` VALUES ('assets/img/team/JX.jpeg', 'Jing Xuan');
INSERT INTO `personalimage` VALUES ('assets/img/team/KJ.jpeg', 'Kai Jie');
INSERT INTO `personalimage` VALUES ('assets/img/team/Winson.png', 'Winson');
INSERT INTO `personalimage` VALUES ('assets/img/team/team-1.jpg', 'Walter White pic');
INSERT INTO `personalimage` VALUES ('assets/img/team/team-2.jpg', 'Sarah Jhonson pic');
INSERT INTO `personalimage` VALUES ('assets/img/team/team-3.jpg', 'William Anderson pic');

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `IconName` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `IconTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `contents` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`IconName`) USING BTREE,
  CONSTRAINT `services_ibfk_1` FOREIGN KEY (`IconName`) REFERENCES `icons` (`IconName`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES ('app-indicator', 'Software Architecture Development', 'Technology moves faster than ever, and you need to catch up. Reach measurably higher scalability, performance, and cost optimization thanks to resilient software architecture development.');
INSERT INTO `services` VALUES ('cpu', 'Product Design', 'A 5 Stage Process to Better Product Design. At its core, design thinking is a problem-solving methodology that, first and foremost, focuses on the user’s needs rather than the product’s specifications.');
INSERT INTO `services` VALUES ('file-code', 'Cloud Development', 'Using cloud resources to build and scale your app requires a rare skill set and an even more rare mentality. You need the sharpest knowledge from the worlds of development and infrastructure. That’s a lot to handle.');
INSERT INTO `services` VALUES ('globe', 'Web Development', 'Adopting an agile approach to development of your digital product is not an option anymore. It is a matter of how. If your company expects to gain business value through technology fast enough, we should like you to meet our team.');
INSERT INTO `services` VALUES ('phone', 'Mobile Development', 'React Native development services can be used to develop Android applications that feel and perform in every way as well as mobile apps written in Android’s native language (Java).');
INSERT INTO `services` VALUES ('wrench', 'Quality Assurance', 'QA as a Service is a modern way to build QA processes that are tailor-made, scalable and on-demand. Therefore, this model gets more and more attention from tech managers.');

-- ----------------------------
-- Table structure for tbladdress
-- ----------------------------
DROP TABLE IF EXISTS `tbladdress`;
CREATE TABLE `tbladdress`  (
  `AddressID` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`AddressID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbladdress
-- ----------------------------
INSERT INTO `tbladdress` VALUES ('001', 'utm');
INSERT INTO `tbladdress` VALUES ('2', 'asdfdff');

-- ----------------------------
-- Table structure for tblcontact
-- ----------------------------
DROP TABLE IF EXISTS `tblcontact`;
CREATE TABLE `tblcontact`  (
  `ContactID` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`ContactID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tblcontact
-- ----------------------------
INSERT INTO `tblcontact` VALUES ('1', '0123456789', 'chouseutm@gmail.com');

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team`  (
  `TeamID` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT '',
  `Job` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `imglink` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `twitterlink` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT '',
  `facebooklink` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT '',
  `instagramlink` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT '',
  `linkedinlink` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT '',
  PRIMARY KEY (`TeamID`) USING BTREE,
  INDEX `imglink`(`imglink`) USING BTREE,
  CONSTRAINT `team_ibfk_1` FOREIGN KEY (`imglink`) REFERENCES `personalimage` (`imglink`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of team
-- ----------------------------
INSERT INTO `team` VALUES ('1', 'See Wen Xiang', 'CEO', 'assets/img/team/Winson.png', 'https://www.youtube.com/watch?v=m87vQBwgGo8&list=RDm87vQBwgGo8&start_radio=1&ab_channel=SamSmithVEVO', 'https://www.youtube.com/watch?v=BiQIc7fG9pA&list=RDm87vQBwgGo8&index=2&ab_channel=gnash', 'https://www.instagram.com', 'https://www.linkedin.com');
INSERT INTO `team` VALUES ('3', 'Yong Jing Xuan', 'CTO', 'assets/img/team/JX.jpeg', 'https://twitter.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/');
INSERT INTO `team` VALUES ('4', 'Cheong Chien Li', 'Intern', 'assets/img/team/CL.jpeg', 'https://www.twitter.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.linkedin.com');
INSERT INTO `team` VALUES ('5', 'Desmond Chieng Chee Hong', 'CFO', 'assets/img/team/Desmond.jpeg', 'https://www.twitter.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.linkedin.com');
INSERT INTO `team` VALUES ('6', 'Chong Kai Jie', 'General Manager', 'assets/img/team/KJ.jpeg', 'https://www.twitter.com', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.linkedin.com');

-- ----------------------------
-- Table structure for user_category_tbl
-- ----------------------------
DROP TABLE IF EXISTS `user_category_tbl`;
CREATE TABLE `user_category_tbl`  (
  `usertype` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `interface` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`usertype`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_category_tbl
-- ----------------------------
INSERT INTO `user_category_tbl` VALUES ('A', 'admin.php', 'Administrator');
INSERT INTO `user_category_tbl` VALUES ('N', 'index.php', 'Normal User');

-- ----------------------------
-- Table structure for users_tbl
-- ----------------------------
DROP TABLE IF EXISTS `users_tbl`;
CREATE TABLE `users_tbl`  (
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usertype` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `otp` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users_tbl
-- ----------------------------
INSERT INTO `users_tbl` VALUES ('abc@gmail.com', '456', 'A', 'Ab Be See', '0');
INSERT INTO `users_tbl` VALUES ('clcheong00@gmail.com', '123', 'A', 'Cheong Chien Li', '0');
INSERT INTO `users_tbl` VALUES ('loozhixuen@gmail.com', '789', 'N', 'Loo Zhi Xuen', '0');
INSERT INTO `users_tbl` VALUES ('mkk@gmail.com', 'mkk', 'N', 'Mah Kah Kit', '0');
INSERT INTO `users_tbl` VALUES ('winson@gmail.com', '123', 'N', 'See Wen Xiang', '0');

-- ----------------------------
-- Table structure for webtitle
-- ----------------------------
DROP TABLE IF EXISTS `webtitle`;
CREATE TABLE `webtitle`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `header` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `slogan` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `tool1` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `tool2` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `tool3` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `tool4` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `tool5` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `tool6` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `tool7` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `startbutt` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `videobutt` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `Bgpic` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of webtitle
-- ----------------------------
INSERT INTO `webtitle` VALUES (1, 'C-House', 'C-House UM', 'Software Development & Consultancy', 'For Professionals', 'home', 'about', 'services', 'team', 'contact', '', '', 'Contact Us', 'https://www.youtube.com/watch?v=sU_ByeHJtw8&ab_channel=leehomwangVEVO', 'hero-bg.jpg');

SET FOREIGN_KEY_CHECKS = 1;
