SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `user_message` ( 
    `id` int(11) NOT NULL AUTO_INCREMENT, 
    `u_name` text COLLATE utf8_unicode_ci NOT NULL,
    `u_email` text COLLATE utf8_unicode_ci NOT NULL,
    `u_contact` text COLLATE utf8_unicode_ci NOT NULL, 
    `u_message` text COLLATE utf8_unicode_ci NOT NULL, 
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
