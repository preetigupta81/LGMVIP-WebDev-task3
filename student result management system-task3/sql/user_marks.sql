SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `user_marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_rollno` int(2) NOT NULL,
  `u_class` int(2) NOT NULL,
  `u_english1` int(2) NOT NULL,
  `u_marathi1` int(2) NOT NULL,
  `u_hindi1` int(2) NOT NULL,
  `u_maths1` int(2) NOT NULL,
  `u_history1` int(2) NOT NULL,
  `u_geography1` int(2) NOT NULL,
  `u_science1` int(2) NOT NULL,
  `u_english2` int(2) NOT NULL,
  `u_marathi2` int(2) NOT NULL,
  `u_hindi2` int(2) NOT NULL,
  `u_maths2` int(2) NOT NULL,
  `u_history2` int(2) NOT NULL,
  `u_geography2` int(2) NOT NULL,
  `u_science2` int(2) NOT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


