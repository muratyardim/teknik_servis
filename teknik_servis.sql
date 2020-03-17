-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 18 Tem 2019, 15:29:03
-- Sunucu sürümü: 5.7.23
-- PHP Sürümü: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `teknik_servis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminler`
--

DROP TABLE IF EXISTS `adminler`;
CREATE TABLE IF NOT EXISTS `adminler` (
  `admin-id` int(2) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`admin-id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `adminler`
--

INSERT INTO `adminler` (`admin-id`, `ad_soyad`, `email`, `sifre`) VALUES
(1, 'admin', 'admin', 'password')

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `form_id` int(5) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `cihaz` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `ariza` varchar(350) COLLATE utf8_turkish_ci NOT NULL,
  `onay` int(1) NOT NULL,
  `teslim` int(1) NOT NULL,
  `hazir` int(1) NOT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `form`
--



