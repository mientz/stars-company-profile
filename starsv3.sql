-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2016 at 06:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starsv3`
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
(9, 'PROMO â€“ BELI 1 DAPAT 2 KHUSUS SEPATU & SANDAL WANITA', '2016-09-25 05:47:12', '<p>Dapatkan Penawaran Khusus Untuk Produk Sepatu dan Sandal Wanita &ndash; Beli 1 dapat 2.</p>\r\n\r\n<p><br />\r\nSyarat :<br />\r\n&ndash;&nbsp; Membeli 1 pasang sandal/sepatu mendapat Gratis 1 pasang sandal/sepatu Re-Grouping<br />\r\n&ndash;&nbsp; Harga produk hadiah maksimal seharga produk yang dibeli<br />\r\n&ndash;&nbsp; Produk hadiah yang dipilih sesuai daftar hadiah yang tersedia ditoko pembelian<br />\r\n&ndash;&nbsp; Berlaku selama persediaan masih ada di toko pembelian<br />\r\n&ndash;&nbsp; Periode Promo : 13 April s/d 13 Juni 2015<br />\r\n&ndash; &nbsp;Berlaku di semua Jaringan Toko STARS</p>\r\n', 'article-promobeli1dapat2khusussepatusandalwanita--2016-09-25-05-47-12-.jpg', '', 'promo'),
(10, 'Tips Sehat Selama Puasa Ramadhan', '2016-09-25 05:47:52', '<p>Bulan Ramadhan telah tiba, di mana seluruh umat muslim diwajibkan untuk berpuasa, menahan lapar dan haus selama kurang lebih 12 jam, selama sebulan penuh. Walaupun begitu,&nbsp;<a href="http://webkesehatan.com/manfaat-puasa-ramadhan/">puasa memiliki banyak manfaat bagi kesehatan</a>, tentu jika dijalankan dengan cara yang sehat pula.</p>\r\n\r\n<hr />\r\n<p>Berpuasa di siang hari tidak lantas menjadikan tubuh menjadi lesu. Pola makan yang berubah selama Bulan Puasa harus disiasati dengan benar agar tubuh tetap sehat dan bugar dalam menjalankan aktifitas di siang hari. Terlebih lagi, setelah melewati Ramadhan, selain menjadi lebih dekat kepada Allah, kita juga menjadi individu yang lebih sehat daripada sebelumnya.</p>\r\n\r\n<p>Berikut adalah beberapa&nbsp;tips sehat selama Bulan Puasa Ramadhan:</p>\r\n\r\n<h3>Tips Puasa Ramadhan: Makan Sahur</h3>\r\n\r\n<p>1. Atur waktu anda untuk menyantap sahur di akhir waktu. Selain berguna untuk menunjang puasa anda di siang hari, makan sahur di akhir waktu lebih diutamakan berdasarkan sunnah Rasul.</p>\r\n\r\n<p>2. Makanlah dengan porsi normal, jangan berlebihan. Fokuslah untuk mengkonsumsi makanan yang kaya akan karbohidrat kompleks dan protein, serta buah dan sayuran. Menyantap makanan yang mengandung banyak air selama sahur juga sangat baik untuk hidrasi tubuh anda sepanjang hari.</p>\r\n\r\n<p>3. Akhiri santap sahur dengan segelas susu untuk melengkapi nutrisi tubuh anda. Minumlah suplemen ataupun multivitamin yang biasa anda konsumsi ataupun yang disarankan oleh dokter anda.</p>\r\n\r\n<p>4. Batasi konsumsi makanan yang terlalu manis dan mengandung banyak gula, karena justru dapat membuat tubuh lemas di siang hari.</p>\r\n\r\n<p>5. Minum air yang cukup. Sebelum waktu imsak tiba, minumlah air yang cukup, tiga hingga lima gelas. Sebaiknya hindari minuman berkafein seperti kopi dan teh karena bersifat diuretik dan membuat tubuh kehilangan cairan lebih cepat melalui urinasi.</p>\r\n\r\n<h3>Tips Puasa Ramadhan: Selama Berpuasa</h3>\r\n\r\n<p>6. Di waktu terpanas di siang hari, hindari berlama-lama di terik matahari dan kurangi aktifitas fisik.</p>\r\n\r\n<p>7. Jika ada waktu, sempatkan untuk mengistirahatkan tubuh anda, dan mengganti waktu tidur yang kurang karena bangun lebih awal untuk sahur. Waktu setelah sholat zuhur merupakan saat yang tepat untuk beristirahat.</p>\r\n\r\n<p>8. Jika memiliki waktu luang di sore hari, sempatkan untuk berolahraga ringan seperti jalan sore, bersepeda santai, ataupun yoga. Hal ini sangat baik untuk menjaga kebubagaran tubuh dan memperlancar peredaran darah.</p>\r\n\r\n<h3>Tips Puasa Ramadhan: Buka Puasa</h3>\r\n\r\n<p>Saat waktu buka puasa tiba, jangan makan dengan berlebihan. Sebaiknya ikuti sunnah, yaitu dengan<a href="http://webkesehatan.com/kandungan-kurma-manfaat-kurma/">buah kurma</a>&nbsp;dan minuman yang manis: bisa dengan susu, jus buah, atauapun sekedar air. Minumlah cukup air untuk mengganti cairan tubuh yang hilang selama berpuasa.</p>\r\n\r\n<p>9. Kurma kering, baik untuk berbuka</p>\r\n\r\n<p>Baca juga:&nbsp;<a href="http://webkesehatan.com/manfaat-kurma-buka-puasa/">Manfaat kurma untuk berbuka puasa</a></p>\r\n\r\n<p>10. Setelah magrib, lanjutkan dengan menyantap hidangan utama, dengan menu yang seimbang. Makanlah sesuai dengan porsi anda yang biasa, tidak perlu berlebihan. Cukupkan dengan karbohidrat, protein, serta sayuran dan buah-buahan.</p>\r\n\r\n<p>11. Hindari makan gorengan berlebihan, serta batasi makanan yang pedas, agar perut tidak menjadi mules dan mengganggu pencernaan tubuh anda.</p>\r\n\r\n<p>12. Cukupi asupan air tubuh anda. Usahakan untuk meminum setidaknya lima gelas air putih sebelum tidur.</p>\r\n', 'article-tipssehatselamapuasaramadhan--2016-09-25-05-47-52-.jpg', '', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `deleted`) VALUES
(1, 'KINGSTAR', 0),
(2, 'DRAGON', 0),
(4, 'NAGA', 0),
(5, 'REDMOND', 0);

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
(12, 'visible', '2016-09-25 05:48:29', 'banner-2016-09-25-05-48-29.jpg'),
(13, 'visible', '2016-09-25 05:48:38', 'banner-2016-09-25-05-48-38.png'),
(14, 'visible', '2016-09-25 05:48:45', 'banner-2016-09-25-05-48-45.jpg');

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
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(100) NOT NULL,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`, `deleted`) VALUES
(1, 'Hitam', 0),
(2, 'Putih', 0),
(3, 'Brown', 0),
(4, 'Red', 0);

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
(7, 'Anwar', NULL, NULL, 'drak_nes@yahoo.com', 'Perihal Cabang Distribusi', 'Thank you for taking the time to meet with me and other representatives of the last week regarding the challenges facing public transportation, especially. We enjoyed meeting with you and . Iï¿½m glad we had the opportunity to discuss an issue that affects so many people in [city/state/community]. We especially appreciate your commitment to [describe any commitment made by the official]. The [coalition name] believes that public transportation is vital to quality of life of our community. As we discussed ï¿½ Our coalition would greatly appreciate your support in ensuring that public transportation is widely available to all who need it ï¿½ especially the people living in . On behalf of all our members and the thousands of citizens they represent, I want to thank you for taking the time out of your busy schedule to discuss this important matter.', 'read', '2016-09-25 05:51:12');

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
(33, 1, 9, 'add', '2016-09-25 05:47:13'),
(34, 1, 10, 'add', '2016-09-25 05:47:52');

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
(16, 1, 12, 'add', '2016-09-25 05:48:30'),
(17, 1, 13, 'add', '2016-09-25 05:48:38'),
(18, 1, 14, 'add', '2016-09-25 05:48:45');

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
(7, 1, 7, 'add', '2016-09-25 05:48:57'),
(8, 1, 8, 'add', '2016-09-25 05:49:01'),
(9, 1, 9, 'add', '2016-09-25 05:49:06');

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
(40, 1, 22, 'add', '2016-09-25 04:29:47'),
(41, 1, 22, 'edit', '2016-09-25 05:17:34'),
(42, 1, 22, 'edit', '2016-09-25 05:17:51'),
(43, 1, 22, 'edit', '2016-09-25 05:18:35'),
(45, 1, 24, 'add', '2016-09-25 05:44:49'),
(46, 1, 25, 'add', '2016-09-25 05:46:10'),
(47, 1, 24, 'edit', '2016-09-25 05:46:20');

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
(7, '', 'article-30650--2016-09-25-05-48-57-.jpg', '2016-09-25 05:48:57'),
(8, '', 'article-22123--2016-09-25-05-49-01-.jpg', '2016-09-25 05:49:01'),
(9, '', 'article-22835--2016-09-25-05-49-06-.jpg', '2016-09-25 05:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `material_id` int(11) NOT NULL,
  `material_name` varchar(100) NOT NULL,
  `deleted` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `material_name`, `deleted`) VALUES
(1, 'Kulit', 0),
(6, 'Sintetis', 0),
(7, 'Oslo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(100) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `product_size_min` int(11) DEFAULT NULL,
  `product_size_max` int(11) DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `product_ispopular` tinyint(4) NOT NULL DEFAULT '0',
  `product_view` int(11) NOT NULL DEFAULT '0',
  `product_image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_code`, `product_name`, `brand_id`, `material_id`, `color_id`, `product_size_min`, `product_size_max`, `product_price`, `product_ispopular`, `product_view`, `product_image`) VALUES
(22, 'BLK009', 'LUCY WHITE ROSE', 5, 7, 2, 39, 40, '450000', 1, 0, 'product-LUCY WHITE ROSE--2016-09-25-05-18-35-.jpg'),
(24, 'SA1020-871', 'RAINBOW KKP HITAM', 1, 6, 1, 38, 40, '99000', 1, 0, 'product-RAINBOW KKP HITAM--2016-09-25-05-44-49-.jpg'),
(25, 'SC2281-861', 'SHOOT JHON BROWN', 1, 6, 3, 46, NULL, '99000', 0, 0, 'product-SHOOT JHON BROWN--2016-09-25-05-46-10-.jpg');

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
(81, 22, 4),
(82, 22, 5),
(87, 25, 1),
(88, 25, 3),
(89, 24, 1),
(90, 24, 3);

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
  `permission` enum('Admin Web','Staff Periklanan') NOT NULL DEFAULT 'Staff Periklanan',
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `fullname`, `image`, `activated`, `permission`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'Saya Admin', 'profile-admin--2016-09-25-06-01-32-.jpg', 1, 'Admin Web', '2016-09-24 15:56:07'),
(9, 'sukri', 'f04878fc9c0d6452eb8d6603371f2548', 'drak_nes@yahoo.com', 'sukrijan', 'no-photo.png', 1, 'Staff Periklanan', '2016-09-25 05:23:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

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
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

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
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_brand_1` (`brand_id`),
  ADD KEY `fk_product_material_1` (`material_id`),
  ADD KEY `fk_product_color_1` (`color_id`);

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
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `do_article`
--
ALTER TABLE `do_article`
  MODIFY `doarticle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `do_carousel`
--
ALTER TABLE `do_carousel`
  MODIFY `docarousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `do_contact`
--
ALTER TABLE `do_contact`
  MODIFY `docontact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `do_gallery`
--
ALTER TABLE `do_gallery`
  MODIFY `dogallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `do_product`
--
ALTER TABLE `do_product`
  MODIFY `doproduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_brand_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  ADD CONSTRAINT `fk_product_color_1` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`),
  ADD CONSTRAINT `fk_product_material_1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`);

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `fk_product_category_category_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `fk_product_category_product_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
