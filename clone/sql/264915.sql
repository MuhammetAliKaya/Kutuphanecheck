-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Haz 2021, 23:55:40
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `264915`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisan`
--

CREATE TABLE `calisan` (
  `Calisan_No` int(11) NOT NULL,
  `Calisan_TC_No` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `Calisan_Adi` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Calisan_Soyadi` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Calisan_DG` date NOT NULL,
  `Calisan_Mail` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Calisan_Adres` varchar(256) NOT NULL,
  `Calisan_Tel_No` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `Calisan_Sifre` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Calisan_Foto` varchar(256) DEFAULT 'https://i.hizliresim.com/nigko7x.jpg',
  `Kutuphane_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `calisan`
--

INSERT INTO `calisan` (`Calisan_No`, `Calisan_TC_No`, `Calisan_Adi`, `Calisan_Soyadi`, `Calisan_DG`, `Calisan_Mail`, `Calisan_Adres`, `Calisan_Tel_No`, `Calisan_Sifre`, `Calisan_Foto`, `Kutuphane_No`) VALUES
(1, '27949792313', 'Burak Emre', 'Terzi', '2000-04-27', 'beterzi81@gmail.com', 'Çakırlar Mahallesi', '05078637270', '654321', 'https://i.hizliresim.com/1lk58pj.jfif', 1),
(2, '42223903123', 'Muhammed Ali', 'Kaya', '2001-12-11', 'malikayagenetik@gmail.com', 'Altıncı Cadde 35/37', '05364947102', '123456', 'https://i.hizliresim.com/rciezip.png', 2),
(3, '64900107123', 'Alperen', 'Orhan', '2001-08-26', 'alperenorhan5552@gmail.com', 'Samsunlular Derneği', '05458235552', '654321', 'https://i.hizliresim.com/iba83zd.png', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisma_gunu`
--

CREATE TABLE `calisma_gunu` (
  `Gun_No` int(11) NOT NULL,
  `Gun_Adi` varchar(45) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `calisma_gunu`
--

INSERT INTO `calisma_gunu` (`Gun_No`, `Gun_Adi`) VALUES
(1, 'Pazartesi'),
(2, 'Salı'),
(3, 'Çarşamba'),
(4, 'Perşembe'),
(5, 'Cuma'),
(6, 'Cumartesi'),
(7, 'Pazar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap`
--

CREATE TABLE `kitap` (
  `ISBN_No` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Kitap_Sira` int(11) NOT NULL,
  `Kitap_Adi` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Kitap_Adedi` int(11) NOT NULL,
  `Kitap_Sayfa_Sayisi` int(11) NOT NULL,
  `Kitap__Basim_Tarihi` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Kitap_Basim_Yeri` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Kitap_Kapak` varchar(256) DEFAULT 'https://i.hizliresim.com/m99itd7.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kitap`
--

INSERT INTO `kitap` (`ISBN_No`, `Kitap_Sira`, `Kitap_Adi`, `Kitap_Adedi`, `Kitap_Sayfa_Sayisi`, `Kitap__Basim_Tarihi`, `Kitap_Basim_Yeri`, `Kitap_Kapak`) VALUES
('9781846681561', 5, 'Mastery', 9, 353, '2012', 'USA', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1348274726l/13589182.jpg'),
('9786050819267', 1, 'Türklerin Tarihi', 15, 320, '2015', 'Ankara', 'https://i.idefix.com/cache/500x400-0/originals/0000000637328-1.jpg'),
('9786050822212', 2, 'Türklerin Tarihi - 2', 10, 288, '2016', 'Ankara', 'https://i.dr.com.tr/cache/500x400-0/originals/0000000685944-1.jpg'),
('9786051417424', 7, 'Beyoğlunun En Güzel Abisi', 0, 418, '2013', 'İstanbul', 'https://img.kitapyurdu.com/v1/getImage/fn:1107942/wh:true/wi:500'),
('9786055545703', 8, 'Milenaya Mektuplar', 7, 400, '1952', 'Çekya', 'http://kbimages1-a.akamaihd.net/Images/782326aa-b2ef-4dc6-a4cd-47a0f024e197/255/400/False/image.jpg'),
('9786057944306', 4, 'Kürk Mantolu Madonna', 4, 177, '1943', '-', 'https://i.dr.com.tr/cache/500x400-0/originals/0000000058245-1.jpg'),
('9786059594158', 3, 'Web Tabanlı Programlama', 8, 304, '2017', 'İstanbul', 'https://images-na.ssl-images-amazon.com/images/I/41TYJFA8YFL._SX341_BO1,204,203,200_.jpg'),
('9789750802942', 6, 'Harry Potter ve Felsefe Taşı', 5, 276, '2016', 'UK', 'https://images.isbndb.com/covers/29/42/9789750802942.jpg'),
('9789944888349', 9, 'Nutuk', 1, 1197, '2016', 'İstanbul', 'https://m.media-amazon.com/images/I/41-BGQaEFbL._SL160_.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap_kutuphane`
--

CREATE TABLE `kitap_kutuphane` (
  `Kutuphane_No` int(11) NOT NULL,
  `Kitap_ISBN` varchar(45) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kitap_kutuphane`
--

INSERT INTO `kitap_kutuphane` (`Kutuphane_No`, `Kitap_ISBN`) VALUES
(3, '9786050819267'),
(3, '9786050822212'),
(1, '9786059594158'),
(2, '9786057944306'),
(2, '9781846681561'),
(1, '9789750802942'),
(3, '9786051417424'),
(2, '9786055545703'),
(1, '9789944888349');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap_tur`
--

CREATE TABLE `kitap_tur` (
  `Kitap_ISBN` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Tur_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kitap_tur`
--

INSERT INTO `kitap_tur` (`Kitap_ISBN`, `Tur_No`) VALUES
('9786057944306', 3),
('9789750802942', 4),
('9786050819267', 5),
('9786050822212', 5),
('9781846681561', 6),
('9786059594158', 9),
('9786051417424', 16),
('9789944888349', 18),
('9786055545703', 21);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kutuphane`
--

CREATE TABLE `kutuphane` (
  `Kutuphane_No` int(11) NOT NULL,
  `Kutuphane_Adi` varchar(45) NOT NULL,
  `Kutuphane_Konumu` varchar(256) NOT NULL,
  `Kutuphane_Calisma_Saatleri` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kutuphane`
--

INSERT INTO `kutuphane` (`Kutuphane_No`, `Kutuphane_Adi`, `Kutuphane_Konumu`, `Kutuphane_Calisma_Saatleri`) VALUES
(1, 'Düzce Kütüphanesi', 'Camikebir, Rıhtım Sk. No:3 81000, 81020 Düzce Merkez/Düzce', '8:15 - 19:45'),
(2, 'Bursa Kütüphanesi', 'Şehreküstü, Cemal Nadir Cd. No: 10/A, 16050 Osmangazi/Bursa', '09:00 - 19:00'),
(3, 'Samsun Kütüphanesi', '19 Mayıs, Hürriyet Sk. No:7, 55030 İlkadım/Samsun', '11:00 - 21:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kutuphane_calisma_gunu`
--

CREATE TABLE `kutuphane_calisma_gunu` (
  `Kutuphane_No` int(11) NOT NULL,
  `Gun_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kutuphane_calisma_gunu`
--

INSERT INTO `kutuphane_calisma_gunu` (`Kutuphane_No`, `Gun_No`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 5),
(1, 6),
(2, 2),
(2, 3),
(2, 5),
(2, 6),
(3, 3),
(3, 4),
(3, 6),
(3, 7),
(3, 1),
(2, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tur_listesi`
--

CREATE TABLE `tur_listesi` (
  `Tur_No` int(11) NOT NULL,
  `Tur_Adi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `tur_listesi`
--

INSERT INTO `tur_listesi` (`Tur_No`, `Tur_Adi`) VALUES
(1, 'Korku'),
(2, 'Gerilim'),
(3, 'Edebiyat'),
(4, 'Çocuk ve Gençlik'),
(5, 'Araştırma-Tarih'),
(6, 'Din-Tasavvuf'),
(7, 'Sanat-Tasarım'),
(8, 'Felsefe'),
(9, 'Bilim'),
(10, 'Çizgi Roman'),
(11, 'Mizah'),
(12, 'Mitoloji'),
(13, 'Aksiyon'),
(14, 'Macera'),
(15, 'Bilim-Kurgu'),
(16, 'Polisiye'),
(17, 'Masal'),
(18, 'Söylev'),
(19, 'Şiir'),
(20, 'Felsefe'),
(21, 'Roman');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `Uye_No` int(11) NOT NULL,
  `Uye_TC_No` varchar(11) CHARACTER SET utf8mb4 NOT NULL,
  `Uye_Adi` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Uye_Soyadi` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Uye_DG` varchar(256) NOT NULL,
  `Uye_Mail` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Uye_Adres` varchar(256) NOT NULL,
  `Uye_Tel_No` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `Uye_Sifre` varchar(45) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`Uye_No`, `Uye_TC_No`, `Uye_Adi`, `Uye_Soyadi`, `Uye_DG`, `Uye_Mail`, `Uye_Adres`, `Uye_Tel_No`, `Uye_Sifre`) VALUES
(14, '12345678901', 'Deneme Üye', 'Adi', '25.06.2000', 'denemeuye@gmail.com', 'deneme adres ', '0555 555 5555', '123456'),
(15, '1', '1', '1', '1', '1@gmail.com', '1', '1', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye_odunc`
--

CREATE TABLE `uye_odunc` (
  `Uye_No` int(11) NOT NULL,
  `Kitap_ISBN` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `Odunc_Alma_Tarihi` varchar(45) NOT NULL,
  `Teslim_Etme_Tarihi` varchar(45) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uye_odunc`
--

INSERT INTO `uye_odunc` (`Uye_No`, `Kitap_ISBN`, `Odunc_Alma_Tarihi`, `Teslim_Etme_Tarihi`) VALUES
(14, '9786050819267', '16/06/2021 23:20:30', '16/06/2021 23:20:34'),
(14, '9786057944306', '16/06/2021 23:23:46', '16/06/2021 23:23:50'),
(14, '9786050819267', '16/06/2021 23:23:53', '16/06/2021 23:24:02'),
(15, '9786055545703', '16/06/2021 23:49:33', '16/06/2021 23:49:36'),
(15, '9789944888349', '16/06/2021 23:52:00', '16/06/2021 23:52:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazar`
--

CREATE TABLE `yazar` (
  `Yazar_No` int(11) NOT NULL,
  `Yazar_Adi` varchar(45) NOT NULL,
  `Yazar_Soyadi` varchar(45) NOT NULL,
  `Yazar_Milliyeti` varchar(45) NOT NULL,
  `Yazar_DT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yazar`
--

INSERT INTO `yazar` (`Yazar_No`, `Yazar_Adi`, `Yazar_Soyadi`, `Yazar_Milliyeti`, `Yazar_DT`) VALUES
(13, 'Sabahattin', 'Ali', 'Türk', '1907-02-25 12:00:00'),
(14, 'Turgay Tugay', 'Bilgin', 'Türk', '2021-06-01 23:59:29'),
(15, 'İlber', 'Ortaylı', 'Türk', '1947-05-21 23:59:43'),
(16, 'Robert', 'Greene', 'Amerika', '1959-05-14 00:00:00'),
(17, 'Ahmet', 'Ümit', 'Türk', '1960-09-30 00:00:00'),
(18, 'Joanne Kathleen', 'Rowling', 'UK', '1965-07-31 00:00:00'),
(19, 'Franz', 'Kafka', 'Çek Cumhuriyeti', '1883-07-03 00:00:00'),
(20, 'Mustafa Kemal', 'Atatürk', 'Türk', '1881-05-19 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazar_kitap`
--

CREATE TABLE `yazar_kitap` (
  `Yazar_No` int(11) NOT NULL,
  `Kitap_ISBN` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `chanceable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yazar_kitap`
--

INSERT INTO `yazar_kitap` (`Yazar_No`, `Kitap_ISBN`, `chanceable`) VALUES
(15, '9786050819267', 25),
(15, '9786050822212', 26),
(14, '9786059594158', 27),
(13, '9786057944306', 28),
(16, '9781846681561', 29),
(18, '9789750802942', 34),
(17, '9786051417424', 40),
(19, '9786055545703', 42),
(20, '9789944888349', 45);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `calisan`
--
ALTER TABLE `calisan`
  ADD PRIMARY KEY (`Calisan_No`),
  ADD KEY `Kutuphane_No` (`Kutuphane_No`);

--
-- Tablo için indeksler `calisma_gunu`
--
ALTER TABLE `calisma_gunu`
  ADD PRIMARY KEY (`Gun_No`);

--
-- Tablo için indeksler `kitap`
--
ALTER TABLE `kitap`
  ADD PRIMARY KEY (`ISBN_No`),
  ADD KEY `a` (`Kitap_Sira`);

--
-- Tablo için indeksler `kitap_kutuphane`
--
ALTER TABLE `kitap_kutuphane`
  ADD KEY `kutuphane_no` (`Kutuphane_No`),
  ADD KEY `relation2` (`Kitap_ISBN`);

--
-- Tablo için indeksler `kitap_tur`
--
ALTER TABLE `kitap_tur`
  ADD UNIQUE KEY `isbn` (`Kitap_ISBN`),
  ADD KEY `Tur_No` (`Tur_No`);

--
-- Tablo için indeksler `kutuphane`
--
ALTER TABLE `kutuphane`
  ADD PRIMARY KEY (`Kutuphane_No`);

--
-- Tablo için indeksler `kutuphane_calisma_gunu`
--
ALTER TABLE `kutuphane_calisma_gunu`
  ADD KEY `ab` (`Kutuphane_No`),
  ADD KEY `Gun_No` (`Gun_No`);

--
-- Tablo için indeksler `tur_listesi`
--
ALTER TABLE `tur_listesi`
  ADD PRIMARY KEY (`Tur_No`);

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`Uye_No`);

--
-- Tablo için indeksler `uye_odunc`
--
ALTER TABLE `uye_odunc`
  ADD KEY `Kitap_ISBN` (`Kitap_ISBN`),
  ADD KEY `Uye_No` (`Uye_No`);

--
-- Tablo için indeksler `yazar`
--
ALTER TABLE `yazar`
  ADD PRIMARY KEY (`Yazar_No`);

--
-- Tablo için indeksler `yazar_kitap`
--
ALTER TABLE `yazar_kitap`
  ADD PRIMARY KEY (`chanceable`),
  ADD KEY `Kitap_ISBN` (`Kitap_ISBN`),
  ADD KEY `Yazar_No` (`Yazar_No`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `calisan`
--
ALTER TABLE `calisan`
  MODIFY `Calisan_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `calisma_gunu`
--
ALTER TABLE `calisma_gunu`
  MODIFY `Gun_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kitap`
--
ALTER TABLE `kitap`
  MODIFY `Kitap_Sira` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `kutuphane`
--
ALTER TABLE `kutuphane`
  MODIFY `Kutuphane_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `tur_listesi`
--
ALTER TABLE `tur_listesi`
  MODIFY `Tur_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `uye`
--
ALTER TABLE `uye`
  MODIFY `Uye_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `yazar`
--
ALTER TABLE `yazar`
  MODIFY `Yazar_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `yazar_kitap`
--
ALTER TABLE `yazar_kitap`
  MODIFY `chanceable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `calisan`
--
ALTER TABLE `calisan`
  ADD CONSTRAINT `calisan_ibfk_1` FOREIGN KEY (`Kutuphane_No`) REFERENCES `kutuphane` (`Kutuphane_No`);

--
-- Tablo kısıtlamaları `kitap_kutuphane`
--
ALTER TABLE `kitap_kutuphane`
  ADD CONSTRAINT `relation2` FOREIGN KEY (`Kitap_ISBN`) REFERENCES `kitap` (`ISBN_No`),
  ADD CONSTRAINT `relation3` FOREIGN KEY (`Kutuphane_No`) REFERENCES `kutuphane` (`Kutuphane_No`);

--
-- Tablo kısıtlamaları `kitap_tur`
--
ALTER TABLE `kitap_tur`
  ADD CONSTRAINT `kitap_tur_ibfk_1` FOREIGN KEY (`Tur_No`) REFERENCES `tur_listesi` (`Tur_No`),
  ADD CONSTRAINT `relation1` FOREIGN KEY (`Kitap_ISBN`) REFERENCES `kitap` (`ISBN_No`);

--
-- Tablo kısıtlamaları `kutuphane_calisma_gunu`
--
ALTER TABLE `kutuphane_calisma_gunu`
  ADD CONSTRAINT `kutuphane_calisma_gunu_ibfk_1` FOREIGN KEY (`Kutuphane_No`) REFERENCES `kutuphane` (`Kutuphane_No`),
  ADD CONSTRAINT `kutuphane_calisma_gunu_ibfk_2` FOREIGN KEY (`Gun_No`) REFERENCES `calisma_gunu` (`Gun_No`);

--
-- Tablo kısıtlamaları `uye_odunc`
--
ALTER TABLE `uye_odunc`
  ADD CONSTRAINT `uye_odunc_ibfk_1` FOREIGN KEY (`Kitap_ISBN`) REFERENCES `kitap` (`ISBN_No`),
  ADD CONSTRAINT `uye_odunc_ibfk_2` FOREIGN KEY (`Uye_No`) REFERENCES `uye` (`Uye_No`);

--
-- Tablo kısıtlamaları `yazar_kitap`
--
ALTER TABLE `yazar_kitap`
  ADD CONSTRAINT `yazar_kitap_ibfk_1` FOREIGN KEY (`Kitap_ISBN`) REFERENCES `kitap` (`ISBN_No`),
  ADD CONSTRAINT `yazar_kitap_ibfk_2` FOREIGN KEY (`Yazar_No`) REFERENCES `yazar` (`Yazar_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
