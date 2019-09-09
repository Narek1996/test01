/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.0.38-MariaDB : Database - usersreg
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`usersreg` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `usersreg`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userid` int(5) NOT NULL AUTO_INCREMENT,
  `userfio` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `useremail` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `userbirthday` varchar(100) DEFAULT NULL,
  `userpol` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `userdoc` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `usedocnum` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `userdriverdoc` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `usergetinfo` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `usercreatedate` datetime DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`userid`,`userfio`,`useremail`,`userbirthday`,`userpol`,`userdoc`,`usedocnum`,`userdriverdoc`,`usergetinfo`,`usercreatedate`) values 
(1,'Симонян Георгий Гер','GeraSimonyan@gmail.com','31.01.1984','Мужской','Паспорт РБ','АК684631535843','Доступ к разделу В','','2019-09-06 17:25:30'),
(3,'Симонян Георгий Гер','GeraSimonyan2@gmail.com','31.01.1984','Мужской','Водительское удостоверение','АКsdfbdfb3','Доступ к разделу В','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-06 17:40:01'),
(4,'Симонян Георгий Гер','GeraSimonyan3@gmail.com','31.01.1984','Мужской','Свидетельство о рождении','w3456345y','Доступ к разделу Б','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-06 17:41:10'),
(5,'Ибраева Ольга Юрьевна','Olya@mail.ru','31.08.1984','Женский','Паспорт РФ','АК68463','Доступ к разделу Б','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-06 17:47:06'),
(6,'srth srth srth srth ','GeraSimonyan555@gmail.com','31.01.1984','Би','Паспорт РФ','АК68463','Доступ к разделу Б','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-06 17:47:51'),
(7,'Симонян Андраник Аш','Olya4@mail.ru','31.01.1984','Мужской','Паспорт РБ','w3456345y','Доступ к разделу В','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-06 18:57:33'),
(8,'Симонян Артур','Olya6@mail.ru','31.01.1984','Мужской','Паспорт РБ','ваточаптроч','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-06 18:59:21'),
(9,'Симонянd dtgkj dtykj','Olya89@mail.ru','35645','Женский','Паспорт РФ','АК68463','Доступ к разделу В','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-06 19:02:09'),
(10,'Симонян','bubu@Gmail.com','31.01.1984','Би','Паспорт РФ','АК68463','Доступ к разделу Б','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-06 19:04:28'),
(11,'dsfbgvzadfb','zdfbzdfbz@sdbh.zdb','31.01.1984','Мужской','Паспорт РФ','dbzdbrdbzdr','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-06 19:06:47'),
(12,'Иванов Иван витайливичь','Ivan@yandex.ru','25.01.2000','Мужской','Паспорт РФ','АК6846333','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-07 16:49:46'),
(13,'dfweqfw','GeraSimonyeean@gmail.com','31.01.1984','Мужской','Паспорт РФ','ewf','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-07 17:08:26'),
(14,'yuguy','GeraSjkjimonyan@gmail.com','31.01.1984','Мужской','Паспорт РФ','iugtui','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-07 17:09:06'),
(15,'Симонян','qwd@sa.ss','31.01.1984','Мужской','Паспорт РФ','qwd','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-07 17:10:35'),
(16,'dqw','GeraSwwimonyan@gmail.com','31.01.1984','Мужской','Паспорт РФ','','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-07 17:12:44'),
(17,'dwwd','GeraSimwwonyan@gmail.com','31.01.1984','Мужской','Паспорт РФ','wqd','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-07 17:13:14'),
(18,'Симонян','GeraSqdwqdimonyan@gmail.com','31.01.1984','Мужской','Паспорт РФ','','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-07 17:14:55'),
(19,'aqghbraerg','GetrygteraSimonyan3@gmail.com','31.01.1984','Мужской','Паспорт РФ','','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-07 17:27:07'),
(20,'Симонян','GeraS222imonyan@gmail.com','31.01.1984','Мужской','Паспорт РФ','','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-07 17:38:40'),
(21,'Симонян Георгий Гер','GeraSi444monyan@gmail.com','31.01.1984','Мужской','Паспорт РФ','','Доступ к разделу А','127.0.0.1 -//- Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36','2019-09-07 17:42:21');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
