-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2016 at 10:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpstars`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_title` longtext NOT NULL,
  `article_date` datetime NOT NULL,
  `article_text` longtext,
  `article_image` longtext,
  `article_status` varchar(255) DEFAULT NULL,
  `article_type` enum('news','promo') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_date`, `article_text`, `article_image`, `article_status`, `article_type`) VALUES
(5, 'PROMO â€“ BELI 1 DAPAT 2 KHUSUS SEPATU & SANDAL WANITA', '2016-06-17 01:32:07', '<p><span style="background-color:rgb(255, 255, 255); color:rgb(119, 119, 119); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:15px">Dapatkan Penawaran Khusus Untuk Produk Sepatu dan Sandal Wanita &ndash; Beli 1 dapat 2.</span></p>\r\n\r\n<div style="page-break-after: always"><span style="display:none">&nbsp;</span></div>\r\n\r\n<p><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(119, 119, 119); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:15px">Syarat :</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(119, 119, 119); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:15px">&ndash;&nbsp; Membeli 1 pasang sandal/sepatu mendapat Gratis 1 pasang sandal/sepatu Re-Grouping</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(119, 119, 119); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:15px">&ndash;&nbsp; Harga produk hadiah maksimal seharga produk yang dibeli</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(119, 119, 119); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:15px">&ndash;&nbsp; Produk hadiah yang dipilih sesuai daftar hadiah yang tersedia ditoko pembelian</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(119, 119, 119); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:15px">&ndash;&nbsp; Berlaku selama persediaan masih ada di toko pembelian</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(119, 119, 119); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:15px">&ndash;&nbsp; Periode Promo : 13 April s/d 13 Juni 2015</span><br />\r\n<span style="background-color:rgb(255, 255, 255); color:rgb(119, 119, 119); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:15px">&ndash; &nbsp;Berlaku di semua Jaringan Toko STARS</span></p>\r\n', 'product-promobeli1dapat2khusussepatusandalwanita--2016-06-19-09-15-40-.jpg', '', 'promo'),
(6, 'Rp 1000,00 dapat sepatu', '2016-06-17 01:36:15', '<h1><span style="font-size:10px">hanya membayar <span style="font-family:times new roman,times,serif"><q><u><em><strong>Rp 1000 </strong></em></u></q></span>sudah bisa mendapatkan sepatu yang sanat bagus dengan syarat tertentu</span></h1>\r\n', 'product-rp100000dapatsepatu--2016-06-20-00-48-18-.png', '', 'promo'),
(7, 'Tips Sehat Selama Puasa Ramadhan', '2016-06-19 05:16:45', '<p>Bulan Ramadhan telah tiba, di mana seluruh umat muslim diwajibkan untuk berpuasa, menahan lapar dan haus selama kurang lebih 12 jam, selama sebulan penuh. Walaupun begitu,&nbsp;<a href="http://webkesehatan.com/manfaat-puasa-ramadhan/">puasa memiliki banyak manfaat bagi kesehatan</a>, tentu jika dijalankan dengan cara yang sehat pula.</p>\r\n\r\n<hr />\r\n<p>Berpuasa di siang hari tidak lantas menjadikan tubuh menjadi lesu. Pola makan yang berubah selama Bulan Puasa harus disiasati dengan benar agar tubuh tetap sehat dan bugar dalam menjalankan aktifitas di siang hari. Terlebih lagi, setelah melewati Ramadhan, selain menjadi lebih dekat kepada Allah, kita juga menjadi individu yang lebih sehat daripada sebelumnya.</p>\r\n\r\n<p>Berikut adalah beberapa&nbsp;tips sehat selama Bulan Puasa Ramadhan:</p>\r\n\r\n<h3>Tips Puasa Ramadhan: Makan Sahur</h3>\r\n\r\n<p>1. Atur waktu anda untuk menyantap sahur di akhir waktu. Selain berguna untuk menunjang puasa anda di siang hari, makan sahur di akhir waktu lebih diutamakan berdasarkan sunnah Rasul.</p>\r\n\r\n<p>2. Makanlah dengan porsi normal, jangan berlebihan. Fokuslah untuk mengkonsumsi makanan yang kaya akan karbohidrat kompleks dan protein, serta buah dan sayuran. Menyantap makanan yang mengandung banyak air selama sahur juga sangat baik untuk hidrasi tubuh anda sepanjang hari.</p>\r\n\r\n<p>3. Akhiri santap sahur dengan segelas susu untuk melengkapi nutrisi tubuh anda. Minumlah suplemen ataupun multivitamin yang biasa anda konsumsi ataupun yang disarankan oleh dokter anda.</p>\r\n\r\n<p>4. Batasi konsumsi makanan yang terlalu manis dan mengandung banyak gula, karena justru dapat membuat tubuh lemas di siang hari.</p>\r\n\r\n<p>5. Minum air yang cukup. Sebelum waktu imsak tiba, minumlah air yang cukup, tiga hingga lima gelas. Sebaiknya hindari minuman berkafein seperti kopi dan teh karena bersifat diuretik dan membuat tubuh kehilangan cairan lebih cepat melalui urinasi.</p>\r\n\r\n<h3>Tips Puasa Ramadhan: Selama Berpuasa</h3>\r\n\r\n<p>6. Di waktu terpanas di siang hari, hindari berlama-lama di terik matahari dan kurangi aktifitas fisik.</p>\r\n\r\n<p>7. Jika ada waktu, sempatkan untuk mengistirahatkan tubuh anda, dan mengganti waktu tidur yang kurang karena bangun lebih awal untuk sahur. Waktu setelah sholat zuhur merupakan saat yang tepat untuk beristirahat.</p>\r\n\r\n<p>8. Jika memiliki waktu luang di sore hari, sempatkan untuk berolahraga ringan seperti jalan sore, bersepeda santai, ataupun yoga. Hal ini sangat baik untuk menjaga kebubagaran tubuh dan memperlancar peredaran darah.</p>\r\n\r\n<h3>Tips Puasa Ramadhan: Buka Puasa</h3>\r\n\r\n<p>Saat waktu buka puasa tiba, jangan makan dengan berlebihan. Sebaiknya ikuti sunnah, yaitu dengan<a href="http://webkesehatan.com/kandungan-kurma-manfaat-kurma/">buah kurma</a>&nbsp;dan minuman yang manis: bisa dengan susu, jus buah, atauapun sekedar air. Minumlah cukup air untuk mengganti cairan tubuh yang hilang selama berpuasa.</p>\r\n\r\n<p>9. Kurma kering, baik untuk berbuka</p>\r\n\r\n<p>Baca juga:&nbsp;<a href="http://webkesehatan.com/manfaat-kurma-buka-puasa/">Manfaat kurma untuk berbuka puasa</a></p>\r\n\r\n<p>10. Setelah magrib, lanjutkan dengan menyantap hidangan utama, dengan menu yang seimbang. Makanlah sesuai dengan porsi anda yang biasa, tidak perlu berlebihan. Cukupkan dengan karbohidrat, protein, serta sayuran dan buah-buahan.</p>\r\n\r\n<p>11. Hindari makan gorengan berlebihan, serta batasi makanan yang pedas, agar perut tidak menjadi mules dan mengganggu pencernaan tubuh anda.</p>\r\n\r\n<p>12. Cukupi asupan air tubuh anda. Usahakan untuk meminum setidaknya lima gelas air putih sebelum tidur.</p>\r\n', 'product-tipssehatselamapuasaramadhan--2016-06-19-09-17-48-.jpg', '', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `carousel_id` int(11) NOT NULL,
  `carousel_status` enum('hidden','visible') NOT NULL,
  `carousel_created` datetime NOT NULL,
  `carousel_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`carousel_id`, `carousel_status`, `carousel_created`, `carousel_image`) VALUES
(5, 'hidden', '2016-06-17 10:52:46', 'banner--2016-06-17-10-52-46-.jpg'),
(6, 'visible', '2016-06-17 10:53:00', 'banner--2016-06-17-10-53-00-.jpg'),
(7, 'visible', '2016-06-17 01:05:56', 'banner--2016-06-17-13-05-56-.png'),
(8, 'visible', '2016-06-17 01:06:58', 'banner--2016-06-17-13-06-58-.jpg'),
(9, 'visible', '2016-06-17 01:07:32', 'banner--2016-06-17-13-07-32-.png'),
(10, 'visible', '2016-06-19 10:00:16', 'banner-2016-06-19-10-00-16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `category_parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_parent_id`) VALUES
(1, 'Man', NULL),
(2, 'Shoes', 1),
(3, 'Sandal', 1),
(4, 'Ladies', NULL),
(5, 'Shoes', 4),
(6, 'Sandal', 4),
(8, 'Children', NULL),
(9, 'Boy', 8),
(10, 'Girl', 8),
(11, 'Sport', NULL),
(12, 'Children Sport', 11),
(13, 'Women Sport', 11),
(14, 'Men Sport', 11);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` longtext,
  `contact_city` longtext,
  `contact_address` longtext,
  `contact_email` longtext,
  `contact_subject` longtext,
  `contact_messages` longtext,
  `contact_status` enum('read','unread') DEFAULT NULL,
  `contact_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_city`, `contact_address`, `contact_email`, `contact_subject`, `contact_messages`, `contact_status`, `contact_date`) VALUES
(1, 'Anwar', NULL, NULL, 'drak_nes@yahoo.com', 'hanya nyoba', 'Thank you for taking the time to meet with me and other representatives of the last week regarding the challenges facing public transportation, especially. We enjoyed meeting with you and . I’m glad we had the opportunity to discuss an issue that affects so many people in [city/state/community]. We especially appreciate your commitment to [describe any commitment made by the official]. The [coalition name] believes that public transportation is vital to quality of life of our community. As we discussed … Our coalition would greatly appreciate your support in ensuring that public transportation is widely available to all who need it – especially the people living in . On behalf of all our members and the thousands of citizens they represent, I want to thank you for taking the time out of your busy schedule to discuss this important matter.', 'read', '2016-06-20 03:47:13'),
(4, 'rizal', NULL, NULL, 'evolkutionstarz@gmail.com', 'pesan', 'kerja praktek tester program', 'read', '2016-06-21 08:27:47'),
(5, 'Aramand maulana', NULL, NULL, 'armand@maulana.com', 'perihal distribusi', 'apakah produk anda elah di distribusikan ke pasar timur indonesia, jika belu saya ingin bermitra menjadi distributor untuk wilayah pasar tersebut, mohon untuk mengirimkan informasi tentang perihal tersebut', 'unread', '2016-06-21 09:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `do_article`
--

CREATE TABLE `do_article` (
  `doarticle_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `doarticle_what` varchar(255) NOT NULL,
  `doarticle_when` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `do_article`
--

INSERT INTO `do_article` (`doarticle_id`, `user_id`, `article_id`, `doarticle_what`, `doarticle_when`) VALUES
(10, 1, 5, 'add', '2016-06-17 01:32:07'),
(11, 1, 6, 'add', '2016-06-17 01:36:15'),
(13, 1, 7, 'add', '2016-06-19 05:16:45'),
(14, 1, 5, 'edit', '2016-06-19 09:08:46'),
(15, 1, 5, 'edit', '2016-06-19 09:09:33'),
(16, 1, 5, 'edit', '2016-06-19 09:10:36'),
(17, 1, 5, 'edit', '2016-06-19 09:11:33'),
(18, 1, 5, 'edit', '2016-06-19 09:14:27'),
(19, 1, 5, 'edit', '2016-06-19 09:14:49'),
(20, 1, 5, 'edit', '2016-06-19 09:15:40'),
(21, 1, 5, 'edit', '2016-06-19 09:16:01'),
(22, 1, 5, 'edit', '2016-06-19 09:16:05'),
(23, 1, 5, 'edit', '2016-06-19 09:16:14'),
(24, 1, 5, 'edit', '2016-06-19 09:16:23'),
(25, 1, 7, 'edit', '2016-06-19 09:17:48'),
(26, 1, 5, 'edit', '2016-06-20 12:08:18'),
(27, 1, 7, 'edit', '2016-06-20 12:08:48'),
(28, 1, 5, 'edit', '2016-06-20 12:25:25'),
(29, 1, 5, 'edit', '2016-06-20 12:37:30'),
(30, 1, 6, 'edit', '2016-06-20 12:48:18'),
(31, 1, 6, 'edit', '2016-06-20 02:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `do_carousel`
--

CREATE TABLE `do_carousel` (
  `docarousel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `carousel_id` int(11) NOT NULL,
  `docarousel_what` enum('add','edit','delete') NOT NULL,
  `docarousel_when` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `do_carousel`
--

INSERT INTO `do_carousel` (`docarousel_id`, `user_id`, `carousel_id`, `docarousel_what`, `docarousel_when`) VALUES
(5, 1, 5, 'add', '2016-06-17 10:52:46'),
(6, 1, 6, 'add', '2016-06-17 10:53:00'),
(7, 1, 7, 'add', '2016-06-17 01:05:56'),
(8, 1, 8, 'add', '2016-06-17 01:06:58'),
(9, 1, 9, 'add', '2016-06-17 01:07:32'),
(10, 1, 10, 'add', '2016-06-19 10:00:16'),
(12, 1, 5, 'edit', '2016-06-19 10:25:48'),
(13, 1, 5, 'edit', '2016-06-19 10:26:14'),
(14, 1, 5, 'edit', '2016-06-19 10:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `do_contact`
--

CREATE TABLE `do_contact` (
  `docontact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `docontact_what` varchar(255) NOT NULL,
  `docontact_when` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `do_gallery`
--

CREATE TABLE `do_gallery` (
  `dogallery_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `dogallery_what` varchar(255) NOT NULL,
  `dogallery_when` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `do_gallery`
--

INSERT INTO `do_gallery` (`dogallery_id`, `user_id`, `gallery_id`, `dogallery_what`, `dogallery_when`) VALUES
(2, 1, 2, 'add', '2016-06-20 03:27:10'),
(3, 1, 3, 'add', '2016-06-20 03:33:13'),
(4, 1, 4, 'add', '2016-06-20 03:33:20'),
(5, 1, 5, 'add', '2016-06-20 03:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `do_product`
--

CREATE TABLE `do_product` (
  `doproduct_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `doproduct_what` varchar(255) NOT NULL,
  `doproduct_when` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `do_product`
--

INSERT INTO `do_product` (`doproduct_id`, `user_id`, `product_id`, `doproduct_what`, `doproduct_when`) VALUES
(4, 1, 2, 'add', '0000-00-00 00:00:00'),
(5, 1, 2, 'edit', '0000-00-00 00:00:00'),
(6, 1, 2, 'edit', '0000-00-00 00:00:00'),
(7, 1, 3, 'add', '0000-00-00 00:00:00'),
(11, 1, 5, 'add', '0000-00-00 00:00:00'),
(12, 1, 6, 'add', '0000-00-00 00:00:00'),
(13, 1, 6, 'edit', '2016-06-17 12:55:34'),
(14, 1, 6, 'edit', '2016-06-17 12:55:41'),
(15, 1, 6, 'edit', '2016-06-17 12:55:48'),
(16, 1, 6, 'edit', '2016-06-17 12:55:58'),
(17, 1, 7, 'add', '0000-00-00 00:00:00'),
(18, 1, 8, 'add', '0000-00-00 00:00:00'),
(19, 1, 9, 'add', '0000-00-00 00:00:00'),
(20, 1, 10, 'add', '0000-00-00 00:00:00'),
(21, 1, 11, 'add', '0000-00-00 00:00:00'),
(22, 1, 12, 'add', '0000-00-00 00:00:00'),
(23, 1, 13, 'add', '0000-00-00 00:00:00'),
(24, 1, 14, 'add', '0000-00-00 00:00:00'),
(25, 1, 15, 'add', '0000-00-00 00:00:00'),
(26, 1, 16, 'add', '0000-00-00 00:00:00'),
(27, 1, 17, 'add', '0000-00-00 00:00:00'),
(28, 1, 18, 'add', '0000-00-00 00:00:00'),
(29, 1, 19, 'add', '0000-00-00 00:00:00'),
(30, 1, 20, 'add', '0000-00-00 00:00:00'),
(31, 1, 19, 'edit', '2016-06-17 01:40:23'),
(34, 1, 5, 'edit', '2016-06-19 03:57:37'),
(35, 1, 5, 'edit', '2016-06-19 03:58:59'),
(36, 7, 5, 'edit', '2016-06-21 08:33:32'),
(37, 7, 2, 'edit', '2016-06-21 08:33:43'),
(38, 6, 9, 'edit', '2016-06-21 09:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` longtext,
  `gallery_file` longtext NOT NULL,
  `gallery_uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `gallery_file`, `gallery_uploaded`) VALUES
(2, '', 'article-24359--2016-06-20-03-27-10-.png', '2016-06-20 03:27:10'),
(3, '', 'article-22859--2016-06-20-03-33-13-.jpg', '2016-06-20 03:33:13'),
(4, '', 'article-3880--2016-06-20-03-33-20-.jpg', '2016-06-20 03:33:20'),
(5, '', 'article-21569--2016-06-20-03-33-41-.jpg', '2016-06-20 03:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(100) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_brand` varchar(100) DEFAULT NULL,
  `product_material` varchar(100) DEFAULT NULL,
  `product_color` varchar(100) DEFAULT NULL,
  `product_size` varchar(100) DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `product_ispopular` tinyint(4) NOT NULL DEFAULT '0',
  `product_view` int(11) NOT NULL DEFAULT '0',
  `product_image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_code`, `product_name`, `product_brand`, `product_material`, `product_color`, `product_size`, `product_price`, `product_ispopular`, `product_view`, `product_image`) VALUES
(2, 'BLK02', 'Lucy White Rose', 'KINGSTAR', 'Kulit', 'Black', '34-38', '450000', 1, 0, 'product-Lucy Black--2016-06-17-02-00-24-.jpg'),
(3, 'SA1020-871', 'RAINBOW KKP HITAM', 'KINGSTAR', 'Sintetis', 'Black', '38-40', '69000', 0, 0, 'product-RAINBOW KKP HITAM--2016-06-17-12-49-23-.jpg'),
(5, 'SC2281-861', 'SHOOT JHON BROWN', 'KINGSTAR', 'Sintetis', 'Brown', '38-43', '99000', 1, 0, 'product-SHOOT BROWN--2016-06-17-12-53-01-.jpg'),
(6, 'LK2028-871', 'PRADO KKP', 'REDMOND', 'Oslo', 'Brown', '38-43', '189000', 0, 0, 'product-PRADO KKP--2016-06-17-12-55-22-.jpg'),
(7, 'LK1025-871', ' PRADO 2 BNP', 'REDMOND', 'Oslo', 'Black', '39-44', '189000', 0, 0, 'product- PRADO 2 BNP--2016-06-17-12-57-52-.jpg'),
(8, 'ZD1038-851', 'VR38 BLK', 'KINGSTAR', 'Sintetis', 'Black', '39-44', '149000', 0, 0, 'product-VR38 BLK--2016-06-17-12-59-26-.jpg'),
(9, 'GZ2022-851', 'ALBERTINI ML', 'KINGSTAR', 'NUBUCK', 'Brown', '39-44', '219000', 1, 0, 'product-ALBERTINI ML--2016-06-17-13-03-04-.jpg'),
(10, ' PK2324-85', '224204 BROWN COFFE', 'KINGSTAR', 'NUBUCK', 'Brown', '39-44', '219000', 0, 0, 'product-224204 BROWN COFFE--2016-06-17-13-05-21-.jpg'),
(11, 'LX6003-771', 'CIARA SP', 'STARLADY', 'CANVAS', 'Blue', '36-40', '138000', 0, 0, 'product-CIARA SP--2016-06-17-13-09-57-.jpg'),
(12, 'JX9022-771', 'VINESSA RED', 'STARLADY', 'Sintetis', 'RED', '36-40', '138000', 0, 0, 'product-VINESSA RED--2016-06-17-13-11-09-.jpg'),
(13, 'KL6003-651', 'SAPPHIRE BIRU', 'STARLADY', 'Jeans', 'Blue', '36-40', '108000', 0, 0, 'product-SAPPHIRE BIRU--2016-06-17-13-12-34-.jpg'),
(14, 'KM1001-651', 'MANDOLA HITAM', 'STARLADY', 'Sintetis', 'BLACK', '36-40', '108000', 0, 0, 'product-MANDOLA HITAM--2016-06-17-13-13-44-.jpg'),
(15, 'TN1045-451', 'JM 664 BLACK', 'STARS', 'Canvas', 'Black-Pink', '26-30', '99800', 0, 0, 'product-JM 664 BLACK--2016-06-17-13-16-18-.jpg'),
(16, 'SC 1740-481', 'FLYER', 'Conae', 'Sintetis', 'Green-Blue-White', '34-37', '159000', 0, 0, 'product-FLYER--2016-06-17-13-20-48-.jpg'),
(17, 'SZ6835-481', '0612W BIRU HIJAU', 'Conae', 'Sintetis', 'Biru Hijau', '34-37', '189000', 0, 0, 'product-0612W BIRU HIJAU--2016-06-17-13-22-18-.jpg'),
(18, 'SZ7912-581', 'GREY PURPLE', 'CONAE', 'Sintetis', 'PURPLE', '37-43', '209000', 0, 0, 'product-GREY PURPLE--2016-06-17-13-25-20-.jpg'),
(19, 'SC1928-481', 'FROZEN', 'CONAE', 'Sintetis', 'Black Fushia', '36-40', '159000', 0, 0, 'product-FROZEN--2016-06-17-13-26-54-.jpg'),
(20, 'SC7514-889', 'WOLVERINEGRY WHT', 'CONAE', 'PU', 'Blue Jeans', '38-43', '159000', 0, 0, 'product-WOLVERINEGRY WHT--2016-06-17-13-28-33-.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `product_id`, `category_id`) VALUES
(11, 3, 1),
(12, 3, 3),
(29, 6, 1),
(30, 6, 3),
(31, 7, 1),
(32, 7, 3),
(33, 8, 1),
(34, 8, 2),
(37, 10, 1),
(38, 10, 2),
(39, 11, 4),
(40, 11, 6),
(41, 12, 4),
(42, 12, 6),
(43, 13, 4),
(44, 13, 5),
(45, 14, 4),
(46, 14, 5),
(47, 15, 8),
(48, 15, 10),
(49, 16, 11),
(50, 16, 12),
(51, 17, 11),
(52, 17, 12),
(53, 18, 11),
(54, 18, 13),
(57, 20, 11),
(58, 20, 14),
(59, 19, 11),
(60, 19, 13),
(67, 5, 8),
(68, 5, 9),
(69, 2, 4),
(70, 2, 5),
(71, 9, 1),
(72, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `image` longtext NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `permission` enum('admin','member') NOT NULL DEFAULT 'member',
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `fullname`, `image`, `activated`, `permission`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'saya admin', 'no-photo.png', 1, 'admin', '2016-06-16 00:00:00'),
(5, 'masterla', 'f04878fc9c0d6452eb8d6603371f2548', 'drak_nes@yahoo.com', 'yo', 'no-photo.png', 1, 'admin', '2016-06-19 20:03:18'),
(6, 'mientz', 'f04878fc9c0d6452eb8d6603371f2548', 'genthowijaya@gmail.com', 'Ahmad', 'no-photo.png', 1, 'member', '2016-06-21 07:49:14'),
(7, 'bigboss', '9eee50a12482f8adfc3b72fb6a06387e', 'rizalrachmady@gmail.com', 'mochamad rizal rachmadi', 'no-photo.png', 1, 'admin', '2016-06-21 08:29:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `do_article`
--
ALTER TABLE `do_article`
  ADD PRIMARY KEY (`doarticle_id`),
  ADD KEY `fk_user_do_promo_user_1` (`user_id`),
  ADD KEY `fk_user_do_promo_promo_1` (`article_id`);

--
-- Indexes for table `do_carousel`
--
ALTER TABLE `do_carousel`
  ADD PRIMARY KEY (`docarousel_id`),
  ADD KEY `fk_do_carousel_user_1` (`user_id`),
  ADD KEY `fk_do_carousel_carousel_1` (`carousel_id`);

--
-- Indexes for table `do_contact`
--
ALTER TABLE `do_contact`
  ADD PRIMARY KEY (`docontact_id`),
  ADD KEY `fk_do_contact_message_1` (`contact_id`),
  ADD KEY `fk_do_contact_user_1` (`user_id`);

--
-- Indexes for table `do_gallery`
--
ALTER TABLE `do_gallery`
  ADD PRIMARY KEY (`dogallery_id`),
  ADD KEY `fk_do_gallery_user_1` (`user_id`),
  ADD KEY `fk_do_gallery_gallery_1` (`gallery_id`);

--
-- Indexes for table `do_product`
--
ALTER TABLE `do_product`
  ADD PRIMARY KEY (`doproduct_id`),
  ADD KEY `fk_user_do_user_1` (`user_id`),
  ADD KEY `fk_user_do_product_1` (`product_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_id`),
  ADD KEY `fk_product_category_product_1` (`product_id`),
  ADD KEY `fk_product_category_category_1` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `do_article`
--
ALTER TABLE `do_article`
  MODIFY `doarticle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `do_carousel`
--
ALTER TABLE `do_carousel`
  MODIFY `docarousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `do_contact`
--
ALTER TABLE `do_contact`
  MODIFY `docontact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `do_gallery`
--
ALTER TABLE `do_gallery`
  MODIFY `dogallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `do_product`
--
ALTER TABLE `do_product`
  MODIFY `doproduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `do_article`
--
ALTER TABLE `do_article`
  ADD CONSTRAINT `fk_user_do_promo_promo_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`),
  ADD CONSTRAINT `fk_user_do_promo_user_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `do_carousel`
--
ALTER TABLE `do_carousel`
  ADD CONSTRAINT `fk_do_carousel_carousel_1` FOREIGN KEY (`carousel_id`) REFERENCES `carousel` (`carousel_id`),
  ADD CONSTRAINT `fk_do_carousel_user_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `do_contact`
--
ALTER TABLE `do_contact`
  ADD CONSTRAINT `fk_do_contact_message_1` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`contact_id`),
  ADD CONSTRAINT `fk_do_contact_user_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `do_gallery`
--
ALTER TABLE `do_gallery`
  ADD CONSTRAINT `fk_do_gallery_gallery_1` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`gallery_id`),
  ADD CONSTRAINT `fk_do_gallery_user_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `do_product`
--
ALTER TABLE `do_product`
  ADD CONSTRAINT `fk_user_do_product_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `fk_user_do_user_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `fk_product_category_category_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `fk_product_category_product_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
