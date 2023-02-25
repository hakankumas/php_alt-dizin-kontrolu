-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 25 Şub 2023, 20:12:19
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `x`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyalmedya`
--

DROP TABLE IF EXISTS `sosyalmedya`;
CREATE TABLE IF NOT EXISTS `sosyalmedya` (
  `sosyalmedya_id` int(11) NOT NULL AUTO_INCREMENT,
  `sosyalmedya_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`sosyalmedya_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sosyalmedya`
--

INSERT INTO `sosyalmedya` (`sosyalmedya_id`, `sosyalmedya_ad`) VALUES
(1, 'İnstagram'),
(2, 'Twitter'),
(3, 'Linkedin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `tc_no` bigint(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `soyadi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`tc_no`)
) ENGINE=InnoDB AUTO_INCREMENT=13211111111 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`tc_no`, `password`, `adi`, `soyadi`) VALUES
(1, 'a', 'aaa', 'bbb'),
(2, 'b', 'ccc', 'ddd'),
(3, 'c', 'eee', 'fff');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_sosyal`
--

DROP TABLE IF EXISTS `user_sosyal`;
CREATE TABLE IF NOT EXISTS `user_sosyal` (
  `tc_no` bigint(11) NOT NULL,
  `sosyalmedya_id` int(11) NOT NULL,
  `link` text COLLATE utf8_turkish_ci NOT NULL,
  KEY `tc_no` (`tc_no`),
  KEY `sosyalmedya_id` (`sosyalmedya_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `user_sosyal`
--
ALTER TABLE `user_sosyal`
  ADD CONSTRAINT `user_sosyal_ibfk_1` FOREIGN KEY (`tc_no`) REFERENCES `user` (`tc_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_sosyal_ibfk_2` FOREIGN KEY (`sosyalmedya_id`) REFERENCES `sosyalmedya` (`sosyalmedya_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
