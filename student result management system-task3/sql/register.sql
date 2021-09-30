SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

create table `register`(
    `id` int(11) unsigned not null auto_increment,
    `name` varchar(75) not null,
    `phoneno` NUMERIC(10) not null,
    `email` varchar(100) not null,
    `password` text COLLATE utf8_unicode_ci not null,
    primary key(`id`),
    unique key `email` (`email`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;