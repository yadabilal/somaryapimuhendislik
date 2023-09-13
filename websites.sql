-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 May 2022, 11:11:00
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `websites`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `section_name` varchar(80) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `sub_title` varchar(120) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sub_description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci,
  `parent_id` int(11) DEFAULT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sequence` int(11) NOT NULL DEFAULT '1',
  `background_image` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `main_image` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contents`
--

INSERT INTO `contents` (`id`, `section_name`, `title`, `sub_title`, `sub_description`, `description`, `parent_id`, `publish`, `type`, `created_at`, `url`, `tags`, `sequence`, `background_image`, `main_image`) VALUES
(1, '0', 'Anasayfa', NULL, NULL, NULL, NULL, 1, 'home', '2022-04-02 00:00:00', '/', NULL, 1, NULL, NULL),
(2, '0', 'Projeler', 'Projelerimiz', NULL, NULL, NULL, 1, 'project', '2022-04-02 00:00:00', 'projeler', 'projeler', 2, NULL, NULL),
(3, '0', 'Hizmetler', 'Hizmetlerimiz', NULL, NULL, NULL, 1, 'service', '2022-04-21 00:00:00', 'hizmetler', NULL, 3, NULL, NULL),
(4, '0', 'Hakkımızda', 'Hakkımızda', NULL, NULL, NULL, 1, 'about', '2022-04-02 00:00:00', 'hakkimizda', NULL, 4, NULL, NULL),
(5, '0', 'Blog', 'blog', NULL, NULL, NULL, 1, 'blog', '2022-04-02 00:00:00', 'blog', NULL, 5, NULL, NULL),
(6, '0', 'İletişim', 'İletişim', NULL, NULL, NULL, 1, 'contact', '2022-04-02 00:00:00', 'iletisim', NULL, 6, NULL, NULL),
(7, 'Slider Alanı', 'LET YOUR HOME BE', 'UNIQUE AND STYLISH', NULL, NULL, 1, 1, 'section_one', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(8, 'Deneyim Alanı', 'Experience', '', NULL, NULL, 1, 1, 'section_two', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(9, '0', 'Years of Experience', '25', NULL, NULL, 8, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(10, '0', 'WORDPRESS THEME', 'A SMALL EFFICIENT', 'WELCOME TO HENDON RESIDENCE SHOWCASE', '<span>interior</span> <br>\r\n                                <span class=\"thin\">designing team</span>', 8, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(11, 'Hizmetler Alanı', 'services-sections', '', NULL, NULL, 1, 1, 'section_three', '2022-04-03 00:00:00', NULL, NULL, 3, NULL, NULL),
(12, '0', 'İç Mekan', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, 11, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, 'contents/jC3aZAeNw6y514faX4YZubrnSobSPerzNNolYfw7.png'),
(13, '0', 'Evler', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, 11, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, 'contents/GW9IKqJzbBxVSV7ZhqQiEcvmgjxY7Xvln6mbxM4J.png'),
(14, '0', 'Villalar', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, 11, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 3, NULL, 'contents/ePZtwqS5ZFJSB4apSB9iPN58tESNKKnJ4AGdOdi7.png'),
(15, 'Video Alanı', 'home.section-4', '', NULL, NULL, 1, 1, 'section_four', '2022-04-03 00:00:00', 'https://www.youtube.com/watch?v=16TgusFJwr4&amp;feature=youtu.be', NULL, 4, NULL, NULL),
(16, 'Müşteriler Alanı', 'client-sections', '', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 1, 1, 'section_five', '2022-04-03 00:00:00', NULL, NULL, 5, NULL, NULL),
(17, '0', 'Müşteri 1', NULL, 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 16, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, 'contents/n7l3VsbL4jGz9oFJei8jZKrtkGic5wcHTqdjrrSl.png'),
(18, '0', 'Müşteri 2', NULL, 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 16, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, 'contents/fT7hOMEst0ZfSk7pC2H80XYh2kTyo6ynHGr95rSO.png'),
(19, '0', 'Müşteri 3', NULL, 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 16, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, 'contents/VGTIFlH0sEyvOWAY0NZ0gpnZVc5A2sMVJ9GMOs6D.png'),
(20, '0', 'Müşteri 4', NULL, 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 16, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, 'contents/Rm9sqzfpkSQHTXQ7jSAp62LM94VlM25376SAC3g2.png'),
(21, 'Açıklama Alanı', 'RESTAURANTS', '', 'SCHOOL\r\nSHOPPING MALL\r\nHOSPITAL', NULL, 1, 1, 'section_six', '2022-04-03 00:00:00', NULL, NULL, 6, NULL, NULL),
(22, 'Projeler Alanı', 'CHOOSE AN', 'APARTMENT', 'AT VERO EOS ET ACCUSAMUS ET İUSTO ODİO', NULL, 1, 1, 'section_seven', '2022-04-03 00:00:00', NULL, NULL, 7, NULL, NULL),
(23, '0', 'West Complex', 'from 120 m2', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi. ', NULL, 22, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(24, '0', 'West Complex - 2', 'from 120 m2', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi. ', NULL, 22, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(25, '0', 'West Complex - 3', 'from 120 m2', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi. ', NULL, 22, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 3, NULL, NULL),
(26, 'Sayısal Bilgiler Alanı', 'numeric-info', '', '', NULL, 1, 1, 'section_eight', '2022-04-03 00:00:00', NULL, NULL, 8, NULL, NULL),
(27, '0', 'Karışık', 'Kare Alanlar', '450', NULL, 26, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(28, '0', 'Müşteri', 'Mutlu', '97', NULL, 26, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(29, '0', 'Projeler', 'Tamamlanan', '80', NULL, 26, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 3, NULL, NULL),
(30, '0', 'Takım', 'Büyük', '40', NULL, 26, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 4, NULL, NULL),
(31, 'Sorular Alanı', 'ARCHITECTURE DID EXPECT', 'WORDPRESS THEME', 'STRATEGIST', NULL, 1, 1, 'section_nine', '2022-04-03 00:00:00', NULL, NULL, 9, NULL, NULL),
(32, '0', 'CORE ARCHITETURE', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', NULL, 31, 1, 'home-detail', '2022-04-03 00:00:00', 'culture', NULL, 1, NULL, NULL),
(33, '0', 'RESTAURANTS', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', NULL, 31, 1, 'home-detail', '2022-04-03 00:00:00', 'restaurant', NULL, 2, NULL, NULL),
(34, 'İletişim Formu Alanı', 'REQUEST A VISIT', 'contact', '', NULL, 1, 1, 'section_ten', '2022-04-03 00:00:00', NULL, NULL, 10, NULL, NULL),
(36, 'Proje Listeleme Alanı', 'West Complex', 'from 120 m2', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi. ', NULL, 2, 1, 'project-detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(39, 'Sorular Alanı', 'ARCHITECTURE DID EXPECT', 'WORDPRESS THEME', 'STRATEGIST', NULL, 3, 1, 'section_one', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(40, '0', 'CORE ARCHITETURE', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', NULL, 39, 1, 'home-detail', '2022-04-03 00:00:00', 'culture', NULL, 1, NULL, NULL),
(41, '0', 'RESTAURANTS', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip', NULL, 39, 1, 'home-detail', '2022-04-03 00:00:00', 'restaurant', NULL, 2, NULL, NULL),
(42, 'Hizmet Listeleme Alanı', 'Service list sections', 'Service list sections', 'Service list sections', NULL, 3, 1, 'section_two', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(43, '0', 'INTERIOR', '', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 42, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(44, '0', 'HOUSES', '', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 42, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(45, '0', 'VILLAS', '', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 42, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 3, NULL, NULL),
(46, 'İletişim Formu Alanı', 'REQUEST A VISIT', 'Contact', 'REQUEST A VISIT Section', NULL, 3, 1, 'section_three', '2022-04-03 00:00:00', NULL, NULL, 3, NULL, NULL),
(47, 'Hizmet Listeleme Alanı', 'Hizmet Listeleme Alanı', '', NULL, NULL, 4, 1, 'section_one', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(48, '0', 'INTERIOR', '', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 47, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(49, '0', 'HOUSES', '', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 47, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(50, '0', 'VILLAS', '', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi.', NULL, 47, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 3, NULL, NULL),
(51, 'Deneyim Alanı', 'Experience', '', NULL, NULL, 4, 1, 'section_two', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(52, '0', 'Years of Experience', '25', NULL, NULL, 51, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(53, '0', 'WORDPRESS THEME', 'A SMALL EFFICIENT', 'WELCOME TO HENDON RESIDENCE SHOWCASE', '<span>interior</span> <br>\r\n                                <span class=\"thin\">designing team</span>', 51, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(54, 'Sayısal Bilgi Alanı', 'numeric-info', '', '', NULL, 4, 1, 'section_three', '2022-04-03 00:00:00', NULL, NULL, 3, NULL, NULL),
(55, '0', 'Complex', '\r\nSQUARE AREAS\r\n', '450', NULL, 54, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(56, '0', 'Clients', 'HAPPY', '97', NULL, 54, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(57, '0', 'Projects', 'Completed', '80', NULL, 54, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 3, NULL, NULL),
(58, '0', 'Team', 'Members', '40', NULL, 54, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 4, NULL, NULL),
(59, 'Ekibimiz Alanı', 'MEET THE TEAM', 'OUR TEAM MEMBERS', '', NULL, 4, 1, 'section_four', '2022-04-03 00:00:00', NULL, NULL, 4, NULL, NULL),
(60, '0', 'IVET HOUZE', 'ARCHITECT ASSISTANT', '', NULL, 59, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(61, '0', 'JONEY VINO', 'ARCHITECT ASSISTANT', '', NULL, 59, 1, 'home-detail', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(62, 'Video Alanı', 'vide-section-about', '', NULL, NULL, 4, 1, 'section_five', '2022-04-03 00:00:00', 'https://www.youtube.com/watch?v=16TgusFJwr4&amp;feature=youtu.be', NULL, 5, NULL, NULL),
(63, 'Yazı Listeleme Alanı', 'Yazıları Listeleme', '', NULL, NULL, 5, 1, 'section_one', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(64, '0', 'Mimarlık nedir?', 'Mimarlık hakkında', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 63, 1, 'home.detail', '2022-04-03 00:00:00', 'mimarlik-nedir', 'merhaba, deek, mimarlık, izmir', 1, NULL, 'contents/LBVBSMDAzi3gwzCiVwITT2GavG5baG2v5fg0Ciya.png'),
(65, 'Harita Alanı', 'Map Section', '', NULL, NULL, 6, 1, 'section_one', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(66, 'İletişim Bilgisi Alanı', 'Info Section', '', NULL, NULL, 6, 1, 'section_two', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(67, 'İletişim Form Alanı', 'REQUEST A VISIT', 'Contact', NULL, NULL, 6, 1, 'section_three', '2022-04-03 00:00:00', NULL, NULL, 3, NULL, NULL),
(68, 'Slider Alanı', 'Evinde Hisset', 'Benzersiz Stilin', NULL, NULL, 7, 1, 'home.detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, 'contents/Uj2DoW4HpWNRb5neGOoC1du6AoObH0EWRrE90fQZ.png'),
(69, 'Video Alanı', 'Hakkımızda Videosu', NULL, NULL, NULL, 15, 1, 'home.detail', '2022-04-03 00:00:00', 'https://www.youtube.com/watch?v=XJ-9TW60MZU', NULL, 1, 'contents/pxuUSAwLaq2KuYTjGPlMLmVecu2t3iTxDjaFUofD.png', 'contents/MKHVlGa9khqOO8RNji390MU0BH2qmnERVFqMTxWx.png'),
(70, 'Açıklama Alanı', 'RESTAURANTS', '', 'SCHOOL\r\nSHOPPING MALL\r\nHOSPITAL', NULL, 21, 1, 'homes', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(71, 'İletişim Formu Alanı', 'REQUEST A VISIT', 'contact', '', NULL, 34, 1, 'homes', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(72, 'Proje Listeleme Alanı', 'West Complex', 'from 120 m2', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi. ', NULL, 36, 1, 'project-detail', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(73, 'Proje Listeleme Alanı', 'West Complex', 'from 120 m2', 'Aenean vehicula non mauris maximus elementum. Nulla facilisi. ', NULL, 36, 1, 'project-detail', '2022-04-03 00:00:00', NULL, NULL, 2, NULL, NULL),
(74, '', 'REQUEST A VISIT', 'Contact', 'REQUEST A VISIT Section', NULL, 46, 1, 'section_three', '2022-04-03 00:00:00', NULL, NULL, 1, NULL, NULL),
(75, '', 'vide-section-about', '', NULL, NULL, 62, 1, 'section_five', '2022-04-03 00:00:00', 'https://www.youtube.com/watch?v=16TgusFJwr4&amp;feature=youtu.be', NULL, 1, NULL, NULL),
(78, NULL, 'test 3', 'test 3', 'test 3 özet', 'test 3 falan', 63, 0, NULL, '2022-04-04 23:52:07', 'test-3', 'test3', 2, NULL, NULL),
(79, NULL, 'İzmirde Mimarlık', 'İzmir, Mimarlık', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 63, 1, NULL, '2022-04-05 00:23:04', 'izmir-mimarlik', 'Mimar, izmir, deek', 2, 'contents/znoFzCYCoubRbzR35M2pOFKAfPmCKy1n7u0b8kCx.jpeg', 'contents/thsLaPGhcdYVMBLj2rny3SSzX7PtFL7XYuMZoyvC.png'),
(80, NULL, 'Müşteri 5', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, 16, 1, NULL, '2022-04-05 01:01:27', NULL, NULL, 5, '', 'contents/EqlFZAbPG6habD59NwWve1H66YMGQB5nPreS5CVu.png'),
(81, NULL, 'Müşteri 6', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, 16, 1, NULL, '2022-04-05 01:01:45', NULL, NULL, 6, '', 'contents/Z4BUhjcni1GI9RgZFLFSYgnSgppYymlPYNwXl4Fl.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dictionaries`
--

CREATE TABLE `dictionaries` (
  `id` int(11) NOT NULL,
  `word` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dictionaries`
--

INSERT INTO `dictionaries` (`id`, `word`, `value`) VALUES
(1, 'header-address', 'Adres'),
(2, 'header-phone', 'Bizi Arayın'),
(3, 'footer-contact-title', 'İletişim'),
(4, 'input-email', 'Email Adresi'),
(5, 'input-ad-soyad', 'Ad Soyad'),
(6, 'input-telefon', 'Telefon'),
(7, 'input-mesaj', 'Mesaj'),
(8, 'buton-gonder', 'Gönder'),
(9, 'baslik-abone-ol', 'Abone Ol'),
(10, 'aciklama-abone-ol', 'Gelişmelerden haberin olsun'),
(11, 'form-baslik', 'Mesaj Gönder');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `type` varchar(60) COLLATE utf8_turkish_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `title` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `footer_description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `logo` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `address`, `phone`, `email`, `title`, `footer_description`, `website`, `facebook`, `twitter`, `instagram`, `youtube`, `logo`) VALUES
(1, '219 Bedford Street Birmingham, AL 35211', '98 76543 210123 45672', 'test@mail.com2', 'Sima Yapı Ve İnşaat2', 'Find out all the ways to enjoy luxury residential life around the world2', 'test.com2', 'facebook.com2', 'twitter.com2', 'instagram.com2', 'youtube.com2', 'logos/KNLFyiCKeskmdTAb5nhrAtp0mp8biXwf7vDX2idf.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `fullName` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `type` varchar(1) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `fullName`, `password`, `type`) VALUES
(1, 'admin', 'Admin', '$2y$10$CxaekF1Y0ja6BNJzx9CQE.zoJGmwMXI8/YWix3F.4AUvqQQuD42EG', 'A');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `dictionaries`
--
ALTER TABLE `dictionaries`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Tablo için AUTO_INCREMENT değeri `dictionaries`
--
ALTER TABLE `dictionaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
