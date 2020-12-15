-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 10:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upj`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(255) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `isi`) VALUES
(1, 'Komunikasi adalah suatu kajian ilmu yang sangat luas dan intens, pasalnya dalam kehidupan sehari-hari kita tidak pernah lepas dari komunikasi. Tapi jangan kira kalau ilmu komunikasi itu cuma pelajaran ngomong doang! Tahu nggak, kalau komunikasi itu ada ba'),
(2, 'Program studi Teknik Informatika mempelajari dan menerapkan prinsip-prinsip ilmu komputer dan analisa matematis untuk desain, pengembangan, pengujian, dan evaluasi perangkat lunak, sistem operasi dan kerja komputer. Pada prodi ini akan diajarkan mulai dar'),
(3, 'Psikologi merupakan disiplin ilmu yang mempelajari mental, pikiran, dan perilaku manusia. Program studi ini juga meneliti alur pemikiran dan alasan di balik perilaku dan tindakan manusia. Ilmu psikologi ini seringkali digunakan untuk menyelesaikan masalah'),
(4, 'Program studi Desain Komunikasi Visual (DKV) mempelajari ilmu tentang penyampaian pesan (komunikasi) dengan menggunakan elemen-elemen visual atau rupa. Disini kamu akan belajar untuk mengolah pesan secara informatif, komunikatif, dan efektif, serta se-kre'),
(5, 'Arsitektur merupakan salah satu jurusan yang cukup populer di Indonesia. Para mahasiswa di program studi Arsitektur mempelajari desain dan rancangan konstruksi bangunan. Arsitektur lebih cenderung menuangkan ide, konsep, dan desain di atas kertas, sedangk'),
(6, 'Pada program studi Sistem Informasi (SI) akan dipelajari tentang bagaimana mendesain sistem yang tepat berdasarkan tujuan organisasi atau perusahaan sesuai dengan kebutuhan dan proses bisnis. Program studi Sistem Informasi juga dikenal dengan nama Manajem'),
(7, 'Program studi Desain produk juga dikenal dengan istilah Industrial Design. Sebagai mahasiswa Desain Produk (Despro) kamu akan mempelajari perencanaan dan perancangan produk yang bertujuan untuk memenuhi kebutuhan manusia yang mengutamakan kenyamanan inder'),
(8, 'Akuntasi adalah sebuah program studi yang menyiapkan mahasiswanya untuk bisa mempraktekkan profesi akuntansi dan melakukan fungsi bisnis terkait, termasuk menerapkan instruksi dalam prinsip akuntansi dan teori, akuntansi keuangan, akuntansi manajerial, ak'),
(9, 'Manajemen merupakan program studi yang mempelajari mengenai bagaimana mengelola suatu perusahaan atau organisasi. Manajemen juga termasuk dalam bidang bisnis dan ekonomi, tetapi lebih terfokus pada kegiatan mengelola, merencanakan, dan mengatur (manajemen'),
(10, 'Program studi Teknik Sipil mempelajari proses merancang, membangun, serta merenovasi, tidak hanya bangunan gedung, tapi juga infrastruktur jalan, jembatan, bendungan, dan infrastruktur lainnya. Mempelajari ilmu Teknik Sipil, kamu akan memahami unsur-unsur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
