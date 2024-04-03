SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE DATABASE IF NOT EXISTS bricks;
USE bricks;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `ua` varchar(45) NOT NULL,
  `ref` varchar(145) NOT NULL,
  `host` varchar(45) NOT NULL,
  `lang` varchar(45) NOT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`idusers`, `name`, `email`, `password`, `ua`, `ref`, `host`, `lang`) VALUES
(0, 'admin', 'admin@getmantra.com', 'admin', 'Brick_Browser', 'http://192.168.1.3/sql-steps/content-13/index.php', '127.0.0.1', 'en'),
(1, 'tom', 'tom@getmantra.com', 'tom', 'Block_Browser', '', '8.8.8.8', 'en'),
(2, 'ron', 'ron@getmantra.com', 'ron', 'Rain_Browser', '', '192.168.1.1', 'en'),
(3, 'harry', 'harry@getmantra.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Mantra', '', '127.0.0.1', 'en');
