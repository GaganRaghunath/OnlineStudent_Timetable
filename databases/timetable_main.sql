CREATE TABLE IF NOT EXISTS `student_main`(
  `student_srn` varchar(10) NOT NULL PRIMARY KEY,
  `student_name` varchar(255) NOT NULL,
  `student_dob` DATE,
  `student_course` varchar(255) NOT NULL,
  `student_sem` int(2) NOT NULL,
  `student_sec` varchar(2) NOT NULL,
  `student_gender` varchar(6),
  `student_email` varchar(255),
  `student_password` varchar(255) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `admin`(
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY(`admin_id`)
) ENGINE=InnoDB;

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin@gmail.com', 'admin');

CREATE TABLE IF NOT EXISTS `teacher_main`(
  `teacher_srn` varchar(10) NOT NULL PRIMARY KEY,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_dob` DATE,
  `teacher_address` TEXT,
  `teacher_department` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_password` varchar(255) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `announcement`(
  `announcement_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `announcement_desc` TEXT
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `notice`(
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `notice_id` varchar(255) NOT NULL,
  `notice_desc` TEXT
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `time_table_content`(
  `sl_no` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `row_id` varchar(255) NOT NULL,
  `course_id` varchar(25) NOT NULL,
  `day` varchar(255),
  `h_one` varchar(255),
  `h_two` varchar(255),
  `h_three` varchar(255),
  `h_four` varchar(255),
  `h_five` varchar(255),
  `h_six` varchar(255),
  `h_seven` varchar(255),
  `h_eight` varchar(255)
) ENGINE=InnoDB;

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bca6amon','bca6a','monday','TOC MS.MOKSHA','SYSTEM PROGRAMMING MRS. ANNA KUMARI',
'Tea Break','WEB PROGRAMMING MRS. AYESHA','LIB','CRYPTOGRAPHY and NT SECURITY MRS. CHAITRA','free','free');

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bca6atue','bca6a','tuesday','CRYPTOGRAPHY and NT SECURITY MRS. CHAITRA','A and IT MRS. AYESHA',
'Tea Break','WEB PROGRAMMING MRS. AYESHA','WEB PROGRAMMING MRS. AYESHA','TOC MS. MOKSHA','free','free');

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bca6awed','bca6a','wednesday','SYSTEM PROGRAMMING MRS. ANNA KUMARI','CRYPTOGRAPHY and NT SECURITY MRS. CHAITRA',
'Tea Break','WEB PROGRAMMING MRS. AYESHA','A and IT MRS. AYESHA','TOC MS. MOKSHA','free','free');

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bca6athu','bca6a','thursday','WEB PROGRAMMING MRS AYESHA','CRYPTOGRAPHY and NT SECURITY MRS. CHAITRA',
'Tea Break','TOC MS. MOKSHA','SYSTEM PROGRAMMING MRS. ANNA KUMARI','A and IT MRS. AYESHA','free','free');

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bca6afri','bca6a','friday','TOC MS.MOKSHA','WEB PROGRAMMING MRS. AYESHA',
'Tea Break','SYSTEM PROGRAMMING MRS. ANNA KUMARI','PROJECT','PROJECT','free','free');

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bca6asat','bca6a','saturday','Project review','Project review',
'Tea Break','PROJECT','PROJECT','free','free','free');




INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bcm6amon','bcm6a','monday','TOC MS.MOKSHA','SYSTEM PROGRAMMING MRS. ANNA KUMARI',
'Tea Break','WEB PROGRAMMING MRS. AYESHA','LIB','CRYPTOGRAPHY and NT SECURITY MRS. CHAITRA','free','free');

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bcm6atue','bcm6a','tuesday','CRYPTOGRAPHY and NT SECURITY MRS. CHAITRA','A and IT MRS. AYESHA',
'Tea Break','WEB PROGRAMMING MRS. AYESHA','WEB PROGRAMMING MRS. AYESHA','TOC MS. MOKSHA','free','free');

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bcm6awed','bcm6a','wednesday','SYSTEM PROGRAMMING MRS. ANNA KUMARI','CRYPTOGRAPHY and NT SECURITY MRS. CHAITRA',
'Tea Break','WEB PROGRAMMING MRS. AYESHA','A and IT MRS. AYESHA','TOC MS. MOKSHA','free','free');

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bcm6athu','bcm6a','thursday','WEB PROGRAMMING MRS AYESHA','CRYPTOGRAPHY and NT SECURITY MRS. CHAITRA',
'Tea Break','TOC MS. MOKSHA','SYSTEM PROGRAMMING MRS. ANNA KUMARI','A and IT MRS. AYESHA','free','free');

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bcm6afri','bcm6a','friday','TOC MS.MOKSHA','WEB PROGRAMMING MRS. AYESHA',
'Tea Break','SYSTEM PROGRAMMING MRS. ANNA KUMARI','PROJECT','PROJECT','free','free');

INSERT INTO `time_table_content`(`row_id`,`course_id`,`day`,`h_one`,`h_two`,`h_three`,`h_four`,`h_five`,`h_six`,
`h_seven`,`h_eight`) VALUES('bcm6asat','bcm6a','saturday','Project review','Project review',
'Tea Break','PROJECT','PROJECT','free','free','free');
