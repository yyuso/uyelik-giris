-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 14 May 2023, 09:40:07
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'baransalman', 'baranss@gmail.com', '$2y$10$hUUbeuTew0pID6vYp4yetel8OaW3pe1zpQTwbZI/KR8keX9NJo1qq'),
(2, 'yusufbarannn', 'omerzeki@gmail.com', '$2y$10$lpV9/AfRBE6bYa6Jih6Seu./q1Pi1O79QztCREdFQrCGypPu1pAyC'),
(3, 'selammm', 'omerzeki@gmail.com', '$2y$10$IjkJT20T5HiMj2uI9zxtFOSlGcyoSF4Ky/X.8giynM7SGzuoLV81e'),
(4, 'dsadas', 'jitig92981@syinxun.com', '$2y$10$wM4I1dekb7/1k/gH5gWfBeGtk0drxRiUI/aO777Uc0ZB7i.cU31zS'),
(5, 'baran.salmannn', 'baran', '$2y$10$vGK0RCYb5d6w2HgA.GlB2O0Kh71Hc5XaDmh/qaKtkje8efU3MoWg.'),
(6, '', '', '$2y$10$J4Yr4ty/ac4PtoQGYwZea.KWP9C.egNRpC5olvyrkZ.eXXE0zTCbW'),
(7, '', '', '$2y$10$c/rRUF3TR9pb7NgjJfMB0uGjyGgGo2KM3zc61x4lnhwBVkx9Cucvq'),
(8, 'yusufbarannnaaaa', 'omerzeki@gmail.com', '$2y$10$6eMdwcv8.tD7QzHk9CfFwe7xUezQTJA1fj29mbskK.L1lSSTkdZ/m');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
