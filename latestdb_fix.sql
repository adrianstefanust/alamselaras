-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 04:45 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

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
(1, 'home', 'Selamat datang di era baru perindustrian', 'banner1'),
(2, 'home', 'Tetap hijau, tetap selaras, tetap membumi', 'banner1_2'),
(3, 'home', 'Bantu kami untuk menjaga bumi tetap hijau', 'banner2'),
(4, 'home', '“Yang diperlukan agar dunia selaras hanyalah bila makhluk mengikuti hukum alam”', 'banner2_2'),
(5, 'home', '– Paulo Coelho-', 'banner2_3'),
(6, 'home', 'Alam Hijau Selaras', 'banner3'),
(7, 'home', 'In House Brand Tissue Production for : ', 'banner3_2'),
(8, 'home', 'Bluebird, Circle-K, YOA-Yogya Department Store, LOTTE, Alfamart, Giant, Festival, Caris', 'banner3_3'),
(9, 'home', 'PT Alam Hijau Selaras', 'judul main moto'),
(10, 'home', 'Selaras dengan alam', 'main moto'),
(11, 'home', 'Industri kami sedang bergerak menuju Industri Hijau dimana kami meminimalisir seluruh dampak negatif dari pembangunan dan kegiatan industri. Kami juga mengedepankan industri Padat Karya dengan mengajarkan keterampilan bagi sumber daya manusia yang kami bina.', 'detail moto'),
(12, 'home', 'Hijau', 'judul moto 1'),
(13, 'home', 'Bergerak untuk bumi yang tetap hijau', 'isi moto 1'),
(14, 'home', 'Kualitas Bersaing', 'judul moto 2'),
(15, 'home', 'Salah satu produk terbaik di kelasnya, hanya untuk anda', 'isi moto 2'),
(16, 'home', 'Pembangunan Manusia', 'judul moto 3'),
(17, 'home', 'Kami membekali setiap orang dalam tim kami dengan keahlian, profesionalitas, dan rasa kekeluargaan.', 'isi moto 3'),
(18, 'home', 'Visi & Misi Kami', 'visi misi'),
(19, 'home', 'The Goal Is Living a Green Life', 'judul visi misi'),
(20, 'home', 'Visi kami adalah untuk menjadi perusahaan terdepan yang terus melakukan perubahan atau invoasi untuk produk-produk personal care yang lebih hijau, sesuai dengan nama kami, Alam Hijau Selaras', 'isi visi misi'),
(21, 'home', 'Mengutamakan profesionalisme dan standard yang tinggi dalam berkarya', 'poin 1 visi misi'),
(22, 'home', 'Many variations of passages of majority suffered', 'poin 2 visi misi'),
(23, 'home', 'Variations of passages one of Lorem majority suffered alteration', 'poin 3 visi misi'),
(24, 'about us', 'PT Alam Hijau Selaras adalah perusahaan pengemasan tisu yang telah memiliki pengalaman sejak tahun 2005 dan telah menjadi produsen In-House Tissue Brand bagi merek-merek besar indonesia seperti BlueBird, Circle-K, SOGO, Carrefour, Alfamart, Giant, Federal Oil, RS Pantai Indah Kapuk.', 'baris 1'),
(25, 'about us', 'Pada tahun 2019 ini, kami juga mulai merintis merek dagang kami sendiri yaitu Caris. Berdasarkan komitmen untuk memberikan kualitas pengemasan terbaik 7 dengan harga terbaik, kami siap untuk masuk ke pasar persaingan sehat industri pengemasan nasional.', 'baris 2'),
(26, 'about us', 'Dengan dibentuknya tim swa-distribusi langsung dari pabrik, kami menjamin kualitas produk yang sampai ke tangan Anda adalah yang terbaik dari kami. Kebahagiaan kami adalah apabila kami dipercaya untuk berpartisipasi dalam menjaga kebersihan dan kesehatan seluruh keluarga Anda.', 'baris 3'),
(27, 'products', 'Facial Tissue', 'judul product1'),
(28, 'products', '- Kami menyediakan tissue wajah dengan tekstur paling halus dan lembut serta kuat, aman untuk kulit wajah anak-anak sekalipun. Dengan sistem tissue tarik lembaran, kami menjamin tissue yang higienis dengan potongan yang rapi dan embos terbaik. ', 'isi product1 poin 1'),
(29, 'products', '- Facial tissue kami dapat dikemas menggunakan plastik ataupun karton kokoh, sesuai dengan kebutuhan Anda. Ukuran, desain, dan gambarnya pun dapat disesuaikan dengan permintaan dari merek Anda.', 'isi product1 poin 2'),
(30, 'products', 'Pop up Tissue', 'judul product2'),
(31, 'products', 'Sebagai alternatif dari facial tissue, Anda dapat memilih pop-up Tissue dengan ukuran setengah dari facial tissue yang lebih ergonomis dan ekonomis. \r\nSama dengan konsep facial tissue, pop-up tissue memiliki sistem tissue tarik lembaran dengan kemasan plastik atau karton sesuai kebutuhan. Kami juga menyediakan kemasan reffil untuk kebutuhan kantor dan rumah tangga  Anda yang memiliki dispenser sendiri.', 'isi product2'),
(32, 'products', 'Toilet Roll Tissue', 'judul product3'),
(33, 'products', 'Toilet Roll Tissue kami dibuat dengan teknologi terbaik di kelasnya sehingga memiliki bahan yang kuat, tidak mudah sobek dengan penyerapan maksimal, serta digulung dengan rapi dan padat. ', 'isi product3 poin1'),
(34, 'products', 'Toilet roll tissue kami dapat dibungkus dengan plastik atau kertas agar lebih ramah terhadap lingkungan. Tersedia dalam ukuran satuan, maupun beberapa tissue dalam  satu kemasan sesuai kebutuhan merek Anda.', 'isi product3 poin2'),
(35, 'products', 'Napkin Tissue: luncheon & cocktail', 'judul product4'),
(36, 'products', 'Bahan Napkin Tissue lebih kasar daripada facial tissue karena memiliki embossed bertekstur agar tidak mudah terurai dan tercampur dengan makanan.', 'isi product4 poin1'),
(37, 'products', 'Napkin Tissue kami memiliki dua ukuran yaitu luncheon yang lebih besar dan cocktail yang lebih kecil untuk hidangan penutup atau coffe break.', 'isi product4 poin2'),
(38, 'products', 'Economist tissue dispenser and refill', 'judul product5'),
(39, 'products', 'Digunakan untuk memenuhi kebutuhan toilet kantor atau pertokoan, tissue dengan dispenser khusus ini lebih ekonomis dan ramah lingkungan karena bebas plastik pembungkus satuan. ', 'isi product5 poin1'),
(40, 'products', 'Kami menyediakan dispenser khusus yang dapat ditempel semi-permanen di kamar mandi serta menyediakan refill dari dispenser tersebut.', 'isi product5 poin2'),
(41, 'eco-friendly', 'Eco-Friendly', 'judul'),
(42, 'eco-friendly', 'Sesuai dengan nama perusahaan ini, kami percaya bahwa suatu industri dapat terus berkarya apabila selalu selaras dengan alam di mana kami berpijak. Tanggung jawab atas masa depan lingkungan ada di tangan kami, oleh sebab itu kami sedang mengembangkan teknologi untuk membuat produk yang ramah lingkungan.', 'deskripsi 1 '),
(43, 'eco-friendly', 'Dalam waktu dekat akan memproduksi :', 'deskripsi 2'),
(44, 'eco-friendly', 'Green Party Ware', 'produk 1'),
(45, 'eco-friendly', 'Kebutuhan piring sekali pakai dalam suatu pesta masih dibutuhkan untuk meminimalisasi kesibukan tuan rumah. Kami sedang mencoba untuk memenuhi kebutuhan Anda seperti gelas, piring, sendok dan garpu sekali pakai tanpa plastik, tidak beracun.', 'deskripsi produk 1'),
(46, 'eco-friendly', 'Bamboo-based disposable plates', 'produk 2'),
(47, 'eco-friendly', 'Salah satu party ware yang sedang kami garap adalah piring dari bahan bambu, berasal dari alam sehingga lebih mudah terurai.', 'deskripsi produk 2'),
(48, 'eco-friendly', 'Unbleached tissue', 'produk 3'),
(49, 'eco-friendly', 'Tissue cokelat tanpa proses bleaching, lebih aman bagi tubuh karena tidak mengandung bahan kimia pemutih karsinogenik, sekaligus aman bagi lingkungan.', 'deskripsi produk 3'),
(50, 'eco-friendly', 'Corn-starch based tooth brush.', 'produk 4'),
(51, 'eco-friendly', 'Sikat gigi adalah produk kebersihan vital keluarga namun menjadi salah satu penyumbang plastik terbesar di dunia. Batang sikat gigi kami yang terbuat dari bonggol jagung menjadi solusi bagi Anda untuk menjaga keluarga higienis tanpa mencemari lingkungan.', 'deskripsi produk 4');

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
(10, 'bg_about_us', 'bg/LOGO_1572968615.jpg'),
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
  MODIFY `page_content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
