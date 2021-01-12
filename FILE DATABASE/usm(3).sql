-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2021 at 09:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `username`, `password`) VALUES
(1, 'juliansyahhhhhhh', 'juliansyah@gmail.com', 'asassas', '123'),
(6, 'Muh Juliansyah', 'muhjuliansyah@gmail.com', 'Mjuliansyah', '$2y$10$klFZt/SqmHEt1xBYQgsFAOA'),
(7, 'tes', 'test@test.com', 'tes_admin', '$2y$10$7tICJI4cblUZ7W/x9Zz62eB'),
(8, 'marshall', 'marshall@gmail.com', 'mrashall mathers', '$2y$10$VnKCF/TXAWnUTj9PFGMVl.K');

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'mengelola semua data. mahasiswa soal dan marketing'),
(2, 'marketing', 'site marketing. melihat daftar peserta ujian');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'juliansyah@gmail.com', 1, '2020-12-14 07:43:24', 0),
(2, '::1', 'juliansyah@gmail.com', 1, '2020-12-14 07:43:46', 0),
(3, '::1', 'juliansyah@gmail.com', 1, '2020-12-14 07:58:58', 0),
(4, '::1', 'juliansyah@gmail.com', 1, '2020-12-14 07:59:15', 0),
(5, '::1', 'iammjhart@gmail.com', 2, '2020-12-14 08:00:15', 1),
(6, '::1', 'Marshall', NULL, '2020-12-14 16:32:38', 0),
(7, '::1', 'iammjhart@gmail.com', 2, '2020-12-14 16:32:59', 1),
(8, '::1', 'iammjhart@gmail.com', 2, '2020-12-14 19:49:31', 1),
(9, '::1', 'iammjhart@gmail.com', 2, '2020-12-14 19:51:25', 1),
(10, '::1', 'iammjhart@gmail.com', 2, '2020-12-14 19:54:38', 1),
(11, '::1', 'juliansyah', 1, '2020-12-14 21:12:25', 0),
(12, '::1', 'juliansyah', 1, '2020-12-14 21:13:13', 0),
(13, '::1', 'juliansyah@gmail.com', 1, '2020-12-14 21:13:51', 1),
(14, '::1', 'iammjhart@gmail.com', 2, '2020-12-14 21:44:34', 1),
(15, '::1', 'juliansyah@gmail.com', 1, '2020-12-14 21:53:27', 1),
(16, '::1', 'iammjhart@gmail.com', 2, '2020-12-14 21:55:45', 1),
(17, '::1', 'Marshall', NULL, '2020-12-16 00:52:23', 0),
(18, '::1', 'iammjhart@gmail.com', 2, '2020-12-16 00:52:32', 1),
(19, '::1', 'juliansyah@gmail.com', 1, '2020-12-16 21:54:47', 1),
(20, '::1', 'juliansyah@gmail.com', 1, '2020-12-18 02:41:21', 1),
(21, '::1', 'iammjhart@gmail.com', 2, '2020-12-18 02:48:07', 1),
(22, '::1', 'juliansyah@gmail.com', 1, '2020-12-18 02:52:05', 1),
(23, '::1', 'juliansyah@gmail.com', 1, '2020-12-20 19:51:36', 1),
(24, '::1', 'iammjhart@gmail.com', 2, '2020-12-20 20:06:23', 1),
(25, '::1', 'juliansyah@gmail.com', 1, '2020-12-20 20:15:26', 1),
(26, '::1', 'juliansyah@gmail.com', 1, '2020-12-20 22:53:44', 1),
(27, '::1', 'juliansyah@gmail.com', 1, '2020-12-20 23:46:36', 1),
(28, '::1', 'juliansyah@gmail.com', 1, '2020-12-21 01:58:27', 1),
(29, '::1', 'iammjhart@gmail.com', 2, '2020-12-21 02:00:21', 1),
(30, '::1', 'juliansyah@gmail.com', 1, '2020-12-28 02:41:04', 1),
(31, '::1', 'iammjhart@gmail.com', 2, '2020-12-28 02:44:03', 1),
(32, '::1', 'juliansyah@gmail.com', 1, '2021-01-04 21:51:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'mengatur-data', 'mengatur data admin marketing soal'),
(2, 'melihat-daftar-peserta', 'melihat daftar peserta ujian');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bank_soal`
--

CREATE TABLE `bank_soal` (
  `no_soal` int(255) NOT NULL,
  `isi_soal` text NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `bobot` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_soal`
--

INSERT INTO `bank_soal` (`no_soal`, `isi_soal`, `option_a`, `option_b`, `option_c`, `option_d`, `jawaban`, `bobot`) VALUES
(1, 'Berada diamanakah ibukota indonesia', 'A. Jakarta', 'B. Tokyo', 'C. Kuala Lumpur', 'D. New York', 'A', '2.5'),
(2, 'Pada tahun berapakah indonesia merdeka dari penjajahan jepang.', 'A. 1928', 'B. 1932', 'C. 1945', 'D. 1949', 'C', '2.5'),
(3, 'Perangkat keras yang di gunakan untuk mengeluarkan suara di sebut', 'A.Keyboard', 'B.RAM', 'C.Speaker', 'D.Monitor', 'C', ''),
(4, 'Perangkat keras yang digunakan untuk mengetik pada komputer adalah ....', 'A.Mouse', 'B.Keyboard', 'C.CPU', 'D.Monitor', 'B', ''),
(5, 'Yang BUKAN termasuk Operating System adalah ...', 'A. Windows', 'B. Android', 'C. Corel Draw', 'D. MacOS', 'C', ''),
(6, 'Perangkat keras yang digunakan untuk menyimpan data pada komputer adalah ...', 'A. Harddisk', 'B. Processor', 'C. Motherboard', 'D. Power Supply', 'A', ''),
(7, 'Gurun yang terluas di dunia adalah ...', 'A. Sahara', 'B. Kalahari', 'C. Namib', 'D. Ara', 'A', ''),
(8, 'Salah satu negara maju di benua Asia adalah ...', 'A. Malaysia', 'B. Timor Leste', 'C. Korea Selatan', 'D. Indonesia', 'C', ''),
(9, 'Indonesia di jajah oleh belanda selama berapa tahun', 'A.100 Tahun', 'B.200 Tahun', 'C.350 Tahun', 'D. 45 Tahun', 'C', ''),
(10, 'Kerajaan Hindu pertama di Indonesia adalah ....', 'A. Kediri', 'B. Kutai', 'C. Tarumanegara', 'D. Majapahit', 'B', ''),
(11, 'Kerja paksa pada masa penjajahan Jepang adalah ...', 'A. Tanam Paksa', 'B. Gotong Royong', 'C. Rodi', 'D. Romusha', 'D', ''),
(12, 'Naskah proklamasi Indonesia diketik oleh', 'A. Ir.Soekarno', 'B. Sayuti Melik', 'C. Muhammad Hatta', 'D. Ahmad Sjubardjo', 'B', ''),
(13, 'Planet urutan pertama dalam tata surya adalah ... ', 'A. Merkurius', 'B. Venus', 'C. Bumi', 'D. Mars', 'A', ''),
(14, 'Dimanakah mulai terjadi revolusi industri', 'A.Inggris', 'B.Amerika Serikat', 'C.Indonesia', 'D.Belanda', 'A', ''),
(15, 'Manusia bernafas dengan menggunakan ...', 'A. Jantung', 'B. Paru-paru', 'C. Usus', 'D. Lambung', 'B', ''),
(16, 'Zat yang dalam air dapat menghasilkan ion hidrogen positif adalah ....', 'A. Basa', 'B. Garam', 'C. Asam', 'D. Larutan', 'C', ''),
(17, 'Larutan bersifat basa jika ... ', 'A. pH < 7', 'B. pH > 7', 'C. pH = 7', 'D. pH = 0', 'B', ''),
(18, 'Kemampuan tumbuhan dan hewan untuk menyesuaikan diri adalah ....', 'A. Organisme', 'B. Ekosistem', 'C. Mutualisme', 'D. Adaptasi', 'D', '');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `isi`) VALUES
(1, 'engertian Informatika (Inggris: Informatics) mencakup struktur, sifat, dan interaksi dari beberapa sistem yang dipakai untuk mengumpulkan data, memproses dan menyimpan hasil pemrosesan data, serta menampilkannya dalam bentuk informasi.\r\n      Sedangkan bidang ilmu yang termasuk dalam informatika meliputi beberapa macam, termasuk di dalamnya: ilmu komputer, ilmu informasi, sistem informasi, teknik komputer dan aplikasi informasi dalam sistem informasi manajemen. Aspek dari informatika sebenarnya lebih luas dari sekedar sistem informasi berbasis komputer saja, karena masih banyak informasi yang tidak dan belum diproses dengan komputer, yang dapat dimasukkan di dalam aspek dari informatika ini.\r\n        Informatika mempunyai konsep dasar, teori, dan perkembangan aplikasi tersendiri. Informatika dapat mendukung dan berkaitan dengan aspek kognitif dan sosial, termasuk tentang pengaruh serta akibat sosial dari teknologi informasi pada umumnya. Penggunaan informasi dalam beberapa macam bidang, seperti bioinformatika, informatika medis, dan informasi yang mendukung ilmu perpustakaan, merupakan beberapa contoh yang lain dari bidang informatika.\r\n\r\nMenurtu ahli lain:\r\n      \r\n         Informatika merupakan salah satu cabang keilmuan yang cukup luas karena hampir mencakup dan terkait dengan berbagai hal tentang kehidupan ini, dimana kumpulan disiplin informatika ini meliputi sains maupun teknik yang secara spesifik mengolah data menjadi informasi dengan memanfaatkan seoptimal mungkin teknologi informasi atau komputer.\r\n          Dalam bahasa Indonesia, istilah Informatika diturunkan dari bahasa Perancis informatique, yang dalam bahasa Jerman disebut Informatik. Sebenarnya, kata ini identik dengan istilah computer science di Amerika Serikat dan computing science di Inggris.\r\n         Dalam pendefenisian istilah informatika, menurut Philippe Dreyfus (1962) dan l`Academie Francaise (1967) yang mendefenisikan informatika tersebut sebagai berikut:\r\n        Kumpulan Disiplin Ilmu (scientific discipline) dan Disiplin Teknik (engineering discipline) yang secara spesifik menyangkut transformasi / pengolahan dari \"Fakta Simbolik\" (data / informasi), yang terutama menggunakan fasilitas mesin-mesin otomatis/komputer.\r\n        Dalam bahasa Inggris memiliki makna yang sedikit berbeda, yaitu lebih menekankan pada aspek pengolahan informasi secara sistematis dan rasional.\r\n       Jika dilihat secara menyeluruh dari pengertian informatika di atas, pendekatan logika dan sistematika merupakan ciri yang cukup dominan dari Informatika ini, mengingat pendekatan tersebut merupakan kunci dalam hal mendapatkan solusi dalam menyelesaikan berbagai masalah.\r\n      Pada prinsipnya keilmuan ini lebih menekankan bagaimana suatu data dan informasi dapat diolah sedemikian dengan berbantuan teknologi yang terotomatisasi.\r\n      Teknologi yang terautomatisasi tersebut tidak hanya dalam satu mesin, namun bisa melibatkan beberapa mesin. Mesin ini lebih umum disebut dengan komputer.\r\n      Komputer sebagai bahan utama dalam bidang keilmuan ini memiliki peranan yang sangat tinggi, sehingga informatika secara sederhana mengupas mulai dari bagaimana mesin tersebut bisa bekerja, bagaimana suatu data diolah dengan cara yang dimengerti oleh mesin sedangkan informasinya dimengerti juga oleh manusia, sampai bagaimana mesin tersebut mampu berkomunikasi dengan mesin lainnya.\r\n'),
(2, 'engertian Informatika (Inggris: Informatics) mencakup struktur, sifat, dan interaksi dari beberapa sistem yang dipakai untuk mengumpulkan data, memproses dan menyimpan hasil pemrosesan data, serta menampilkannya dalam bentuk informasi.\r\n\r\n      Sedangkan bidang ilmu yang termasuk dalam informatika meliputi beberapa macam, termasuk di dalamnya: ilmu komputer, ilmu informasi, sistem informasi, teknik komputer dan aplikasi informasi dalam sistem informasi manajemen. Aspek dari informatika sebenarnya lebih luas dari sekedar sistem informasi berbasis komputer saja, karena masih banyak informasi yang tidak dan belum diproses dengan komputer, yang dapat dimasukkan di dalam aspek dari informatika ini.\r\n\r\n        Informatika mempunyai konsep dasar, teori, dan perkembangan aplikasi tersendiri. Informatika dapat mendukung dan berkaitan dengan aspek kognitif dan sosial, termasuk tentang pengaruh serta akibat sosial dari teknologi informasi pada umumnya. Penggunaan informasi dalam beberapa macam bidang, seperti bioinformatika, informatika medis, dan informasi yang mendukung ilmu perpustakaan, merupakan beberapa contoh yang lain dari bidang informatika.\r\n\r\nMenurtu ahli lain:\r\n      \r\n         Informatika merupakan salah satu cabang keilmuan yang cukup luas karena hampir mencakup dan terkait dengan berbagai hal tentang kehidupan ini, dimana kumpulan disiplin informatika ini meliputi sains maupun teknik yang secara spesifik mengolah data menjadi informasi dengan memanfaatkan seoptimal mungkin teknologi informasi atau komputer.\r\n\r\n          Dalam bahasa Indonesia, istilah Informatika diturunkan dari bahasa Perancis informatique, yang dalam bahasa Jerman disebut Informatik. Sebenarnya, kata ini identik dengan istilah computer science di Amerika Serikat dan computing science di Inggris.\r\n\r\n         Dalam pendefenisian istilah informatika, menurut Philippe Dreyfus (1962) dan l`Academie Francaise (1967) yang mendefenisikan informatika tersebut sebagai berikut:\r\n\r\n        Kumpulan Disiplin Ilmu (scientific discipline) dan Disiplin Teknik (engineering discipline) yang secara spesifik menyangkut transformasi / pengolahan dari \"Fakta Simbolik\" (data / informasi), yang terutama menggunakan fasilitas mesin-mesin otomatis/komputer.\r\n        Dalam bahasa Inggris memiliki makna yang sedikit berbeda, yaitu lebih menekankan pada aspek pengolahan informasi secara sistematis dan rasional.\r\n\r\n       Jika dilihat secara menyeluruh dari pengertian informatika di atas, pendekatan logika dan sistematika merupakan ciri yang cukup dominan dari Informatika ini, mengingat pendekatan tersebut merupakan kunci dalam hal mendapatkan solusi dalam menyelesaikan berbagai masalah.\r\n\r\n      Pada prinsipnya keilmuan ini lebih menekankan bagaimana suatu data dan informasi dapat diolah sedemikian dengan berbantuan teknologi yang terotomatisasi.\r\n      Teknologi yang terautomatisasi tersebut tidak hanya dalam satu mesin, namun bisa melibatkan beberapa mesin. Mesin ini lebih umum disebut dengan komputer.\r\n      Komputer sebagai bahan utama dalam bidang keilmuan ini memiliki peranan yang sangat tinggi, sehingga informatika secara sederhana mengupas mulai dari bagaimana mesin tersebut bisa bekerja, bagaimana suatu data diolah dengan cara yang dimengerti oleh mesin sedangkan informasinya dimengerti juga oleh manusia, sampai bagaimana mesin tersebut mampu berkomunikasi dengan mesin lainnya.\r\n'),
(3, 'Psikologi merupakan disiplin ilmu yang mempelajari mental, pikiran, dan perilaku manusia. Program studi ini juga meneliti alur pemikiran dan alasan di balik perilaku dan tindakan manusia. Ilmu psikologi ini seringkali digunakan untuk menyelesaikan masalah'),
(4, 'Program studi Desain Komunikasi Visual (DKV) mempelajari ilmu tentang penyampaian pesan (komunikasi) dengan menggunakan elemen-elemen visual atau rupa. Disini kamu akan belajar untuk mengolah pesan secara informatif, komunikatif, dan efektif, serta se-kre'),
(5, 'Arsitektur merupakan salah satu jurusan yang cukup populer di Indonesia. Para mahasiswa di program studi Arsitektur mempelajari desain dan rancangan konstruksi bangunan. Arsitektur lebih cenderung menuangkan ide, konsep, dan desain di atas kertas, sedangk'),
(6, 'Pada program studi Sistem Informasi (SI) akan dipelajari tentang bagaimana mendesain sistem yang tepat berdasarkan tujuan organisasi atau perusahaan sesuai dengan kebutuhan dan proses bisnis. Program studi Sistem Informasi juga dikenal dengan nama Manajem'),
(7, 'Program studi Desain produk juga dikenal dengan istilah Industrial Design. Sebagai mahasiswa Desain Produk (Despro) kamu akan mempelajari perencanaan dan perancangan produk yang bertujuan untuk memenuhi kebutuhan manusia yang mengutamakan kenyamanan inder'),
(8, 'Akuntasi adalah sebuah program studi yang menyiapkan mahasiswanya untuk bisa mempraktekkan profesi akuntansi dan melakukan fungsi bisnis terkait, termasuk menerapkan instruksi dalam prinsip akuntansi dan teori, akuntansi keuangan, akuntansi manajerial, ak'),
(9, 'Manajemen merupakan program studi yang mempelajari mengenai bagaimana mengelola suatu perusahaan atau organisasi. Manajemen juga termasuk dalam bidang bisnis dan ekonomi, tetapi lebih terfokus pada kegiatan mengelola, merencanakan, dan mengatur (manajemen'),
(10, 'Program studi Teknik Sipil mempelajari proses merancang, membangun, serta merenovasi, tidak hanya bangunan gedung, tapi juga infrastruktur jalan, jembatan, bendungan, dan infrastruktur lainnya. Mempelajari ilmu Teknik Sipil, kamu akan memahami unsur-unsur');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_user`
--

CREATE TABLE `jawaban_user` (
  `id_jawaban` int(11) NOT NULL,
  `jawaban1` varchar(100) NOT NULL,
  `jawaban2` varchar(100) NOT NULL,
  `jawaban3` varchar(100) NOT NULL,
  `jawaban4` varchar(100) NOT NULL,
  `jawaban5` varchar(100) NOT NULL,
  `jawaban6` varchar(100) NOT NULL,
  `jawaban7` varchar(100) NOT NULL,
  `jawaban8` varchar(100) NOT NULL,
  `jawaban9` varchar(100) NOT NULL,
  `jawaban10` varchar(100) NOT NULL,
  `jawaban11` varchar(100) NOT NULL,
  `jawaban12` varchar(100) NOT NULL,
  `jawaban13` varchar(100) NOT NULL,
  `jawaban14` varchar(100) NOT NULL,
  `jawaban15` varchar(100) NOT NULL,
  `jawaban16` varchar(100) NOT NULL,
  `jawaban17` varchar(100) NOT NULL,
  `jawaban18` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_user`
--

INSERT INTO `jawaban_user` (`id_jawaban`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `jawaban7`, `jawaban8`, `jawaban9`, `jawaban10`, `jawaban11`, `jawaban12`, `jawaban13`, `jawaban14`, `jawaban15`, `jawaban16`, `jawaban17`, `jawaban18`) VALUES
(3, 'A', 'A', 'B', 'D', 'D', 'C', 'C', 'A', 'C', 'B', 'D', 'B', 'D', 'A', 'A', 'C', 'B', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(200) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `ttl` varchar(70) NOT NULL,
  `nik` varchar(70) NOT NULL,
  `jenis_kelamin` varchar(70) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `no_handphone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `pilih_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama`, `ttl`, `nik`, `jenis_kelamin`, `alamat`, `kode_pos`, `no_handphone`, `email`, `asal_sekolah`, `pilih_prodi`) VALUES
(2, 'MJHART', 'depok 25 juli 2000', '09986767788', '', '', '16545', '1222121', 'djoko@djoko.com', 'SMA letris', ''),
(3, 'Marshall Mathers', 'Detroit 1970', '123456789', 'Laki - Laki', 'Detroit Michigan USA, ', '34356', '092324678392', 'mmathers100@yahoo.co', 'North Carolina', ''),
(4, 'Juliansyah', 'depok 25 juli 2000', '21267678867', 'Laki - Laki', 'Gunung Sindur', '12132', '4323242323', 'iammjhart@gmail.com', 'SMA', ''),
(5, '', '', '', '', '', '', '', '', '', ''),
(6, 'Dhani', '27 juni 2001', '1312341241344', 'Laki - Laki', 'Indonesia', '131221', '132323123', 'dhani@gmail.com', 'SMA', ''),
(7, 'Gunawan sulistiyo', '10 Januari 1999', '1231231231223', '', '', '122321', '088298392', 'gunawan@gmail.com', 'SMA', ''),
(8, 'qwdwwdqwd', '27 juni 2001', '1231231231223', 'Laki - Laki', 'wekdnoiednoweidwedij', '1233', '1232312312312', 'gunawan@gmail.com', 'sma', ''),
(9, 'ASasAS', 'qdqwd', '123123123', 'Laki - Laki', 'ksjdnksjnckjwdcndsc', '12323123', '2324344', 'gunawan@gmail.com', 'SMA', ''),
(10, 'wkcjnweijcnwe', 'cekcnkwelmfew', '93849084934', 'Laki - Laki', 'PAMULANG', '121212', '809459485', 'gunawan@gmail.com', 'SMA', 'desain produk'),
(11, 'Alexander', 'Jakarta, 11 Januari 2000', '1321432141324234234', 'Laki - Laki', 'Tangerang', '14143', '08462362827', 'alexander@gmail.com', 'SMA Nottre DAme', 'Informatika'),
(12, '', '', '', '', '', '', '', '', '', 'Informatika'),
(13, '', '', '', '', '', '', '', '', '', 'Informatika'),
(14, '', '', '', '', '', '', '', '', '', 'Informatika'),
(15, 'Juliansyah', 'depok 25 juli 2000', '21312342143', 'Laki - Laki', 'Bogor gunung sindur', '1213', '4534454', 'juansyah255@gmail.co', 'SMK LETRIS INDONESIA 2', 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `id_marketing` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`id_marketing`, `nama_pengguna`, `username`, `password`) VALUES
(2, 'alexander', 'alex', '$2y$10$J9Z158taVNAQ9Z.wdysKV.P'),
(3, 'alexander', 'alex07', '$2y$10$zmtlcYFa0McJ8Bq4MvzLreQ'),
(4, 'juliansyah', 'mjuliansyah21', '$2y$10$TPLPs1u4GyuSchiSpzFYsOx');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1607914008, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_mhs`
--

CREATE TABLE `nilai_mhs` (
  `nilai` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_mhs`
--

INSERT INTO `nilai_mhs` (`nilai`) VALUES
(17),
(50),
(56);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizID` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizID`, `question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 'Tahun berapakah indonesia merdeka dari penjajahan jepang', '1932', '1940', '1928', '1945');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'juliansyah@gmail.com', 'juliansyah', '$2y$10$bUVqjm9cLu6P01Bx/UTEw.DZEs3WI9rFLu4hS4cxR1G5qIAGyfV6O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-14 07:43:01', '2020-12-14 07:43:01', NULL),
(2, 'iammjhart@gmail.com', 'Marshall', '$2y$10$shTH.6liqCtDIip7q36M6.Lnpbs.jcypCYad5DhBBQVy8aIc9Tmzu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-14 08:00:03', '2020-12-14 08:00:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `bank_soal`
--
ALTER TABLE `bank_soal`
  ADD PRIMARY KEY (`no_soal`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id_marketing`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_mhs`
--
ALTER TABLE `nilai_mhs`
  ADD PRIMARY KEY (`nilai`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_soal`
--
ALTER TABLE `bank_soal`
  MODIFY `no_soal` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id_marketing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nilai_mhs`
--
ALTER TABLE `nilai_mhs`
  MODIFY `nilai` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
