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

INSERT INTO `form` (`form_id`, `ad_soyad`, `telefon`, `email`, `cihaz`, `fiyat`, `ariza`, `onay`, `teslim`, `hazir`) VALUES
(49, 'Ahmet Hakim', '5070404565', 'ahmet@hotmail.com', 'İphone 5 ', 'Belirlenmedi', 'Ekran çalışmıyor', 0, 0, 0),
(48, 'Hikmet Akıl', '548646424', 'olma@hikmet.com', 'Huawi Telefon', '350', 'İnternete bağlanmıyor', 1, 0, 0),
(24, 'Hakan Sonra', '5485855256', '-', 'İpad 3 ', '90', 'Touch Basmıyor', 1, 0, 1),
(38, 'Cengiz Erbas', '5484454544', 'cngkran@outlook.com', 'Xiaomi Labtob', '50', 'Format windows 10 kurulacaj', 1, 0, 1),
(39, 'Hilal Kaplan', '5457782525', 'kaplanli@hotmail.com', 'Mac Pro ', '700', 'Klavye Çalışmıyor / Klavye Değişimi', 1, 0, 1),
(28, 'Dilara Ak ', '5695452525', 'ak@yahoo.com', 'Iphone 5s ', '400', 'ses bozuk cizirtili çıkıyor', 1, 0, 1),
(29, 'Emine Balci', '5854545566', '-', 'Dell Notebook', '100', 'öceden yapılmıştı + batarya değişecek', 1, 0, 1),
(34, 'İsa Doğan', '5245255555', 'isa@gmail.com', 'Sony Notebook', 'Belirlenmedi', 'format + bakım yapılacak + yedek var', 0, 0, 0),
(31, 'Yasin Keleş', '5895655521', '-', 'Samsung Note 8', '500', 'Kasa Değişimi Yapılacak', 1, 1, 1),
(35, 'Türkan Üzer ', '5454448855', '-', 'Samsung Galaxy Tab3', 'Belirlenmedi', 'Ekran kırık', 0, 0, 0),
(36, 'Özlem Söz', '5458524548', '- ', 'Oem Kasa', '500', 'anakart ve işlemci arızalı', 0, 0, 0),
(37, 'Rıfat Ukman', '5548588886', '-', 'Iphone 5', '200', 'tuşları çalışmıyor home tech çalışmıyor', 1, 0, 1),
(40, 'Ali Nazik', '521442522', 'alilili@li.com', 'Lenovo Kasa', 'Belirlenmedi', 'format yedek var', 1, 0, 0),
(42, 'Hasan Mezar ', '5445525222', 'mehdihasan@gmail.com', 'Apple Pro3', 'Belirlenmedi', 'açılmıyor', 0, 0, 0),
(43, 'Saadet Yan', '1212213123', '-', 'İzoly All One Bilgisayar', 'Belirlenmedi', 'ekranı titriyor', 0, 0, 0),
(44, 'Eray And', '5484552554', 'eraylik@eray.com', 'Macbook', 'Belirlenmedi', 'ses yok + sıvı teması var', 0, 0, 0),
(45, 'Rıza Sayan', '54754545545', '-', 'Oem Kasa', 'Belirlenmedi', 'açılmıyor ', 0, 0, 0),
(47, 'Ahmet Malta', '5485461625', 'hab@hotmail.com', 'Izoly Bilgisayar', '100', 'Ekran titriyor * Ekran VGA kablo değişti', 1, 1, 1);

