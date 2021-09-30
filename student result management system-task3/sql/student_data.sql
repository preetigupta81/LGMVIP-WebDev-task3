SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `student_data` (
  `id` int(11) NOT NULL NOT NULL AUTO_INCREMENT,
  `u_fname` text COLLATE utf8_unicode_ci NOT NULL,
  `u_lname` text COLLATE utf8_unicode_ci NOT NULL,
  `u_fathername` text COLLATE utf8_unicode_ci NOT NULL,
  `u_mothername` text COLLATE utf8_unicode_ci NOT NULL,
  `u_dob` text COLLATE utf8_unicode_ci NOT NULL,
  `u_rollno` int(2) NOT NULL,
  `u_class` int(2) NOT NULL,
  `u_mobileno` text COLLATE utf8_unicode_ci NOT NULL,
  `u_address` text COLLATE utf8_unicode_ci NOT NULL,
  
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

