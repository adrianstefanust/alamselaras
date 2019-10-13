-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 06:36 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
  `page_image_path` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `page_image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
