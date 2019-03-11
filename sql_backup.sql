-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5447
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных bgoogle
CREATE DATABASE IF NOT EXISTS `bgoogle` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bgoogle`;

-- Дамп структуры для таблица bgoogle.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `mixin` varchar(3) NOT NULL,
  `phone` varchar(20) NOT NULL DEFAULT '',
  `birthday` date DEFAULT NULL,
  `registration_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы bgoogle.user: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT IGNORE INTO `user` (`id`, `sname`, `fname`, `email`, `pass`, `mixin`, `phone`, `birthday`, `registration_data`) VALUES
	(1, 'Александ', 'Иванов', 'sanekclubstr@mail.ru', '', '', '', '0000-00-00', '2019-03-04 17:48:41'),
	(2, 'Павел', 'Дуров', 'durov@telegram.com', '', '', '', NULL, '2019-03-11 16:34:07'),
	(3, 'Mark', 'Zhukenberg', 'mark@facebook.com', '', '', '', NULL, '2019-03-11 16:34:47');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
