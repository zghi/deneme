-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Haz 2016, 11:33:05
-- Sunucu sürümü: 10.1.8-MariaDB
-- PHP Sürümü: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tr`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adres`
--

CREATE TABLE `adres` (
  `id` int(11) NOT NULL,
  `firma_id` int(11) NOT NULL,
  `il_id` int(11) NOT NULL,
  `ilce_id` int(11) NOT NULL,
  `posta_kodu` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `adres` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `turu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calısanlar`
--

CREATE TABLE `calısanlar` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soyadi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cinsiyet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `yas` int(11) NOT NULL,
  `TC` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `calisma_gunleri` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `calisma_saatleri` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `profili` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firma_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `departman`
--

CREATE TABLE `departman` (
  `id` int(11) NOT NULL,
  `dep_adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `firmadepartmanlar`
--

CREATE TABLE `firmadepartmanlar` (
  `id` int(11) NOT NULL,
  `firma_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `firmalar`
--

CREATE TABLE `firmalar` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sektor_id` int(11) NOT NULL,
  `telefon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `unvan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `adres_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fiyat`
--

CREATE TABLE `fiyat` (
  `id` int(11) NOT NULL,
  `odeme_turu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parabirimi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kdv` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ihale`
--

CREATE TABLE `ihale` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aciklama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `turu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maliyet` int(11) NOT NULL,
  `usulu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ihale_suresi` date NOT NULL,
  `tarih` date NOT NULL,
  `firma_id` int(11) NOT NULL,
  `sözlesme_turu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `teslim_yeri` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `il`
--

CREATE TABLE `il` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kodu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilanlar`
--

CREATE TABLE `ilanlar` (
  `id` int(11) NOT NULL,
  `firma_id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `turu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `verilis_tarihi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilce`
--

CREATE TABLE `ilce` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sehir_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mali_bilgiler`
--

CREATE TABLE `mali_bilgiler` (
  `id` int(11) NOT NULL,
  `firma_id` int(11) NOT NULL,
  `sirket_id` int(11) NOT NULL,
  `adres_id` int(11) NOT NULL,
  `vergidairesi_id` int(11) NOT NULL,
  `vergi_numarası` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `yıllık_curosu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sermaye` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `markalar`
--

CREATE TABLE `markalar` (
  `id` int(11) NOT NULL,
  `firma_id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sektor`
--

CREATE TABLE `sektor` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `turu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nace_kodu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sirket`
--

CREATE TABLE `sirket` (
  `id` int(11) NOT NULL,
  `turu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ticaret_odası`
--

CREATE TABLE `ticaret_odası` (
  `id` int(11) NOT NULL,
  `il_id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ticari_bilgiler`
--

CREATE TABLE `ticari_bilgiler` (
  `id` int(11) NOT NULL,
  `ticaret_sicil_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ticaret_oda_id` int(11) NOT NULL,
  `ust_sektor_id` int(11) NOT NULL,
  `faliyet_sektor_id` int(11) NOT NULL,
  `firma_dep_id` int(11) NOT NULL,
  `kurulus_tarihi` date NOT NULL,
  `urettigi_markalar_id` int(11) NOT NULL,
  `sattigi_markalar_id` int(11) NOT NULL,
  `firma_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vergi_dairesi`
--

CREATE TABLE `vergi_dairesi` (
  `id` int(11) NOT NULL,
  `il_id` int(11) NOT NULL,
  `ilce_id` int(11) NOT NULL,
  `say_kod` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adres`
--
ALTER TABLE `adres`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `calısanlar`
--
ALTER TABLE `calısanlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `departman`
--
ALTER TABLE `departman`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `firmadepartmanlar`
--
ALTER TABLE `firmadepartmanlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `firmalar`
--
ALTER TABLE `firmalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `fiyat`
--
ALTER TABLE `fiyat`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ihale`
--
ALTER TABLE `ihale`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `il`
--
ALTER TABLE `il`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ilanlar`
--
ALTER TABLE `ilanlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ilce`
--
ALTER TABLE `ilce`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mali_bilgiler`
--
ALTER TABLE `mali_bilgiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `markalar`
--
ALTER TABLE `markalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sektor`
--
ALTER TABLE `sektor`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sirket`
--
ALTER TABLE `sirket`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ticaret_odası`
--
ALTER TABLE `ticaret_odası`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ticari_bilgiler`
--
ALTER TABLE `ticari_bilgiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `vergi_dairesi`
--
ALTER TABLE `vergi_dairesi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adres`
--
ALTER TABLE `adres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `calısanlar`
--
ALTER TABLE `calısanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `departman`
--
ALTER TABLE `departman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `firmadepartmanlar`
--
ALTER TABLE `firmadepartmanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `firmalar`
--
ALTER TABLE `firmalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `fiyat`
--
ALTER TABLE `fiyat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `ihale`
--
ALTER TABLE `ihale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `il`
--
ALTER TABLE `il`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `ilanlar`
--
ALTER TABLE `ilanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `ilce`
--
ALTER TABLE `ilce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `mali_bilgiler`
--
ALTER TABLE `mali_bilgiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `markalar`
--
ALTER TABLE `markalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `sektor`
--
ALTER TABLE `sektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `sirket`
--
ALTER TABLE `sirket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `ticaret_odası`
--
ALTER TABLE `ticaret_odası`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `ticari_bilgiler`
--
ALTER TABLE `ticari_bilgiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `vergi_dairesi`
--
ALTER TABLE `vergi_dairesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
