# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: yiicms
# Generation Time: 2014-05-12 03:04:29 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cms_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_category`;

CREATE TABLE `cms_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `position` varchar(8) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cms_category` WRITE;
/*!40000 ALTER TABLE `cms_category` DISABLE KEYS */;

INSERT INTO `cms_category` (`id`, `title`, `position`)
VALUES
	(1,'test1','top');

/*!40000 ALTER TABLE `cms_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_comment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_comment`;

CREATE TABLE `cms_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `page_id` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `guest` varchar(11) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cms_comment` WRITE;
/*!40000 ALTER TABLE `cms_comment` DISABLE KEYS */;

INSERT INTO `cms_comment` (`id`, `content`, `page_id`, `created`, `user_id`, `guest`, `status`)
VALUES
	(10,'weqweqeqwewqe',1,1399758776,1,'',1),
	(28,'fgfdgdg',1,1399781681,1,'dfdfgdf',1),
	(32,'dfgdfgdf',1,1399844747,1,'dfgdfgfg',1),
	(34,'fghfghfgh',8,1399848779,1,'fghfg',1),
	(35,'омпания Epson объявила о начале продаж Moverio BT-200, умных очков второго поколения, дающих своим пользователям возможность полноценного использования дополненной реальности. Epson Moverio BT-200 обладают 32 ГБ постоянной памяти, предлагают поддержку Bluetooth и других беспроводных технологий, а также оснащены поддержкой аудиотехнологии Dolby Mobile.\r\n\r\nПомимо этого, гаджет имеет встроенный гироскоп, акселерометр и магнитный компас.\r\n\r\nКак отмечает компания, предыдущую версию устройства ругали за размеры и отсутствие встроенной видеокамеры. Новая версия очков теперь выглядит компактнее и имеет фронтальную камеру, которая используется не только для снятия фото и видеоизображений, но и для сканирования специальных маркеров для дополненной реальности.',8,1399848883,2,'gfhg',1);

/*!40000 ALTER TABLE `cms_comment` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_page
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_page`;

CREATE TABLE `cms_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `created` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cms_page` WRITE;
/*!40000 ALTER TABLE `cms_page` DISABLE KEYS */;

INSERT INTO `cms_page` (`id`, `title`, `content`, `created`, `status`, `category_id`)
VALUES
	(1,'test11','<h3>\r\n	<br />\r\n	<img alt=\"\" height=\"169\" src=\"/upload/userfiles/images/268dd8d2c6b2b554298a8d2d84647ec0.jpg\" width=\"300\" />Typge the title here</h3>\r\n<p>\r\n	Type the text here</p>\r\n',1399758691,0,1),
	(8,'Epson Moverio BT-200 - начались продажи очков дополненной реальности','<div class=\"article\" id=\"news_2625715\" style=\"border: 0px; outline: 0px; font-size: 14px; font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; vertical-align: baseline; margin: 0px 0px 15px; padding: 0px; color: rgb(66, 66, 66); background-color: rgb(245, 245, 245);\">\r\n	<div class=\"article-image\" style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 20px 0px; padding: 0px; text-align: center;\">\r\n		<a href=\"http://img12.nnm.me/9/3/5/5/c/1698a125cd3a492d7468f743fd3.jpg\" style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px; color: rgb(66, 66, 66); background-color: transparent;\" target=\"_blank\" title=\"Оригинальный размер изображения\"><img alt=\"Epson Moverio BT-200 - начались продажи очков дополненной реальности\" src=\"http://img12.nnm.me/9/3/5/5/c/1698a125cd3a492d7468f743fd3_prev.jpg\" style=\"border: none; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\" /></a></div>\r\n	<p style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0.6em 0px; padding: 0px;\">\r\n		&nbsp;</p>\r\n	<p style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0.6em 0px; padding: 0px;\">\r\n		Компания Epson объявила о начале продаж Moverio BT-200, умных очков второго поколения, дающих своим пользователям возможность полноценного использования дополненной реальности. Epson Moverio BT-200 обладают 32 ГБ постоянной памяти, предлагают поддержку Bluetooth и других беспроводных технологий, а также оснащены поддержкой аудиотехнологии Dolby Mobile.</p>\r\n	<p style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0.6em 0px; padding: 0px;\">\r\n		Помимо этого, гаджет имеет встроенный гироскоп, акселерометр и магнитный компас.</p>\r\n	<p style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0.6em 0px; padding: 0px;\">\r\n		Как отмечает компания, предыдущую версию устройства ругали за размеры и отсутствие встроенной видеокамеры. Новая версия очков теперь выглядит компактнее и имеет фронтальную камеру, которая используется не только для снятия фото и видеоизображений, но и для сканирования специальных маркеров для дополненной реальности.</p>\r\n	<div class=\"cut_sep\" id=\"cut\" style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 10px 0px 7px; padding: 0px; background-image: url(http://nnm.me/i/cut.gif); background-color: transparent; height: 16px; overflow: hidden; text-indent: -9999px; background-position: 100% 0px; background-repeat: repeat no-repeat;\">\r\n		----------------------&lt;cut&gt;----------------------</div>\r\n	<p style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0.6em 0px; padding: 0px;\">\r\n		&nbsp;</p>\r\n	<div class=\"article-image\" style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 20px 0px; padding: 0px; text-align: center;\">\r\n		<a href=\"http://img11.nnm.me/3/e/0/0/e/cd8dcc9a7a1e4f86ebdf0004aad.jpg\" style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px; color: rgb(66, 66, 66); background-color: transparent;\" target=\"_blank\" title=\"Оригинальный размер изображения\"><img alt=\"Epson Moverio BT-200 - начались продажи очков дополненной реальности\" src=\"http://img11.nnm.me/3/e/0/0/e/cd8dcc9a7a1e4f86ebdf0004aad_prev.jpg\" style=\"border: none; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\" /></a></div>\r\n	<p style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0.6em 0px; padding: 0px;\">\r\n		&nbsp;</p>\r\n	<p style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0.6em 0px; padding: 0px;\">\r\n		Батарея Epson Moverio BT-200 держит заряд до 6 часов непрерывной работы устройства.<a href=\"http://hi-news.ru/goto/http://www.epson.com/cgi-bin/Store/jsp/Product.do?sku=V11H560020&amp;BV_UseBVCookie=yes\" rel=\"nofollow\" style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px; color: rgb(66, 66, 66); background-color: transparent;\" title=\"http://hi-news.ru/goto/http://www.epson.com/cgi-bin/Store/jsp/Product.do?sku=V11H560020&amp;BV_UseBVCookie=yes\"><u><b>Стоимость</b></u></a>гаджета &mdash; 700$.</p>\r\n	<p style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0.6em 0px; padding: 0px;\">\r\n		&nbsp;</p>\r\n	<div class=\"video\" style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px; text-align: center;\">\r\n		<object height=\"350px\" style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\" width=\"425px\"><embed allowfullscreen=\"true\" allowscriptaccess=\"always\" height=\"350px\" src=\"http://www.youtube.com/v/-MxpMby_Oz8?version=3\" type=\"application/x-shockwave-flash\" width=\"425px\"></embed></object></div>\r\n	<div>\r\n		<object height=\"350px\" style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\" width=\"425px\"><br />\r\n		</object></div>\r\n	<p style=\"border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; margin: 0.6em 0px; padding: 0px;\">\r\n		&nbsp;</p>\r\n</div>\r\n',1399790858,1,1);

/*!40000 ALTER TABLE `cms_page` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_setting
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_setting`;

CREATE TABLE `cms_setting` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `defaultStatusComment` tinyint(1) NOT NULL,
  `defaultStatusUser` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cms_setting` WRITE;
/*!40000 ALTER TABLE `cms_setting` DISABLE KEYS */;

INSERT INTO `cms_setting` (`id`, `defaultStatusComment`, `defaultStatusUser`)
VALUES
	(1,1,0);

/*!40000 ALTER TABLE `cms_setting` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_user`;

CREATE TABLE `cms_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `created` int(11) NOT NULL,
  `ban` tinyint(1) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cms_user` WRITE;
/*!40000 ALTER TABLE `cms_user` DISABLE KEYS */;

INSERT INTO `cms_user` (`id`, `username`, `password`, `created`, `ban`, `role`, `email`)
VALUES
	(1,'user','e4805ccd474b7e40ceaf2da72d7b4693',1399756576,1,2,'qwqw@gfhfh.ru'),
	(2,'test','729897271bb3e64b87244d8de846970d',1399848346,1,1,'amidtv@mail.ru');

/*!40000 ALTER TABLE `cms_user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
