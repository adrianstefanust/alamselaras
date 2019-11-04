-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 05:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alamselaras`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `EMAIL` varchar(60) NOT NULL,
  `ID` int(11) NOT NULL,
  `NAMA` varchar(60) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`EMAIL`, `ID`, `NAMA`, `PASSWORD`) VALUES
('ahs2019@ahs.co.id', 1, 'Alam Hijau Selaras', '$2y$10$b7zU9OaBeo7cab50vJdZuONfGXoswzavv/tX0KHECKfyHo4XB4B3q');

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE `page_content` (
  `page_content_id` int(11) NOT NULL,
  `page_name` varchar(60) NOT NULL,
  `page_text` text NOT NULL,
  `page_info_div` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`page_content_id`, `page_name`, `page_text`, `page_info_div`) VALUES
(1, 'home', 'Industri kami sedang bergerak menuju Industri Hijau dimana kami meminimalisir seluruh dampak negatif dari pembangunan dan kegiatan industri. Kami juga mengedepankan industri Padat Karya dengan mengajarkan keterampilan bagi sumber daya manusia yang kami bina.', 'detail moto'),
(2, 'home', 'Hijau', 'judul moto 1'),
(3, 'home', 'Selaras dengan alam', 'main moto'),
(4, 'home', 'Bergerak untuk bumi yang tetap hijau', 'isi moto 1'),
(5, 'home', 'Kualitas Bersaing', 'judul moto 2'),
(6, 'home', 'Salah satu produk terbaik di kelasnya, hanya untuk anda', 'isi moto 2'),
(7, 'home', 'Pembangunan Manusia', 'judul moto 3'),
(8, 'home', 'Kami membekali setiap orang dalam tim kami dengan keahlian, profesionalitas, dan rasa kekeluargaan.', 'isi moto 3'),
(9, 'home', 'The Goal Is Living a Green Life', 'judul visi misi'),
(10, 'home', 'Visi kami adalah untuk menjadi perusahaan terdepan yang terus melakukan perubahan atau invoasi untuk produk-produk personal care yang lebih hijau, sesuai dengan nama kami, Alam Hijau Selaras', 'isi visi misi'),
(11, 'home', 'Mengutamakan profesionalisme dan standard yang tinggi dalam berkarya', 'poin 1 visi misi'),
(12, 'home', 'Many variations of passages of majority suffered', 'poin 2 visi misi'),
(13, 'home', 'Variations of passages one of Lorem majority suffered alteration', 'poin 3 visi misi');

-- --------------------------------------------------------

--
-- Table structure for table `page_image`
--

CREATE TABLE `page_image` (
  `page_image_id` int(11) NOT NULL,
  `page_name` varchar(20) NOT NULL,
  `page_image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_image`
--

INSERT INTO `page_image` (`page_image_id`, `page_name`, `page_image_path`) VALUES
(1, 'home_background', 'bg/LOGO_1571124889.jpg'),
(2, 'home_background', 'bg/LOGO_1571125900.jpg'),
(3, 'home_background', 'bg/LOGO_1571127417.jpg'),
(4, 'breadcrumbarea', 'bg/LOGO_1571132985.jpg'),
(5, 'about_us_1', 'bg/LOGO_1571157847.JPG'),
(6, 'about_us_2', 'bg/LOGO_1571157864.JPG'),
(7, 'about_us_3', 'bg/LOGO_1571157831.JPG'),
(9, 'bg_product', 'bg/LOGO_1571297543.jpg'),
(10, 'bg_about_us', 'bg/LOGO_1571158975.jpg'),
(11, 'visi_misi', 'bg/LOGO_1571158184.JPG'),
(12, 'bg_eco', 'bg/LOGO_1571159055.jpg'),
(14, 'roll', 'bg/LOGO_1571292482.jpg'),
(15, 'roll', 'bg/LOGO_1571292497.jpg'),
(16, 'roll', 'bg/LOGO_1571292508.JPG'),
(17, 'roll', 'bg/LOGO_1571292517.jpg'),
(18, 'napkin', 'bg/LOGO_1571292563.JPG'),
(19, 'napkin', 'bg/LOGO_1571292572.jpg'),
(20, 'napkin', 'bg/LOGO_1571292585.jpg'),
(21, 'refill', 'bg/LOGO_1571292604.jpg'),
(22, 'refill', 'bg/LOGO_1571292623.jpg'),
(23, 'refill', 'bg/LOGO_1571292635.jpg'),
(24, 'pop_up', 'bg/LOGO_1571292660.jpg'),
(25, 'pop_up', 'bg/LOGO_1571292679.jpg'),
(26, 'pop_up', 'bg/LOGO_1571292695.jpg'),
(27, 'facial', 'bg/LOGO_1571292732.jpg'),
(28, 'facial', 'bg/LOGO_1571292744.JPG'),
(29, 'facial', 'bg/LOGO_1571292750.jpg'),
(30, 'facial', 'bg/LOGO_1571293404.jpg'),
(31, 'facial', 'bg/LOGO_1571293374.jpg'),
(32, 'pop_up', 'bg/LOGO_1571292712.jpg'),
(33, 'disney', 'bg/LOGO_1571742915.png'),
(34, 'disney', 'bg/LOGO_1571742924.png'),
(35, 'disney', 'bg/LOGO_1571743146.png'),
(36, 'disney', 'bg/LOGO_1571743299.jpg'),
(37, 'others', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `page_content`
--
ALTER TABLE `page_content`
  ADD PRIMARY KEY (`page_content_id`);

--
-- Indexes for table `page_image`
--
ALTER TABLE `page_image`
  ADD PRIMARY KEY (`page_image_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_content`
--
ALTER TABLE `page_content`
  MODIFY `page_content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `page_image`
--
ALTER TABLE `page_image`
  MODIFY `page_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
