-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 10:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newsone`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_title` varchar(300) NOT NULL,
  `cat_slug` varchar(300) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `cat_slug`, `is_delete`) VALUES
(1, 'Warta Kota', 'warta-kota', 0),
(2, 'Teknologi', 'teknologi', 0),
(3, 'Fokus', 'fokus', 0),
(4, 'Entertainment', 'entertainment', 0),
(5, 'Breaking News', 'breaking-news', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_cat_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_slug` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_cat_id`, `post_content`, `post_slug`, `created_at`, `is_delete`) VALUES
(1, 'Gojek-Grab Perang Tarif, Pengemudi Mati di Tengah-Tengah', 2, '<p>Menjelang Ramadan 2015, Go-Jek, aplikasi ride-sharing yang baru berumur sekitar enam bulan, meluncurkan program “Ceban Menjelang Ramadhan”. Melalui program itu, pengguna Go-Ride dapat diantarkan ke tujuannya masing-masing —tak lebih dari 25 kilometer— hanya dengan ongkos Rp10 ribu. Strategi promosi tersebut sukses. </p><p><br></p><p>\"Saking banyaknya orang yang menggunakan promo itu, Go-Jek meledak jadi layanan aplikasi no. 1 di Jakarta. Kami ikut kaget,” ujar pendiri Go-Jek, Nadiem Makarim. </p><p><br></p><p>Secara umum, komponen tarif Go-Ride terdiri dari tarif dasar dan tarif per kilometer. Tarif dasar adalah tarif rata berbatas jarak tertentu. Pada 2015, jarak 0-6 kilometer dihargai Rp15 ribu. Kini, berdasarkan ujicoba aplikasi Go-Ride untuk bepergian dari kawasan Kemang Timur Raya ke berbagai variasi lokasi, tarif 0-5 kilometer dipatok Rp8 ribu. Sementara tarif per kilometer ialah tarif tambahan yang diberlakukan jika pengguna melebihi ketentuan jarak dari tarif dasar.</p><p><br></p><p>Naik-turun tarif Go-Jek merentang jauh hingga awal kemunculan aplikasi yang kini bertitel Unicorn. Tiga bulan selepas promo “Ceban Menjelang Ramadhan” digulirkan, Go-Ride mengubah tarifnya. Tepat pada September 2015, Go-Ride memberlakukan tarif sebesar Rp15 ribu untuk 6 kilometer pertama di jam-jam sibuk. Lebih dari 6 kilometer, pengguna dibebankan biaya sebesar Rp2.500 tiap tambahan kilometer. Di luar jam-jam sibuk, pengguna Go-Ride kena tarif rata sebesar Rp15 ribu untuk jarak maksimal 25 kilometer.</p><p><br></p><p>Di awal kemunculannya, Go-Ride mematok tarif per kilometer sebesar Rp4.000. Namun, seiring waktu, tarif Go-Ride per kilometer itu terus mengalami perubahan. Pada 2018, tarif per kilometer Go-Ride mengalami beberapa kali perubahan. Pada Juni 2018, tarif per kilometernya dipatok Rp2.200 hingga Rp3.300. Sejak November, tarifnya Rp1.200 per kilometer.</p><p><br></p>', 'gojek-grab-perang-tarif-pengemudi-mati-di-tengah-tengah', '2018-12-15 12:07:16', 1),
(4, 'Gojek-Grab Perang Tarif, Pengemudi Mati di Tengah-Tengah', 2, '<p>Menjelang Ramadan 2015, Go-Jek, aplikasi ride-sharing yang baru berumur sekitar enam bulan, meluncurkan program “Ceban Menjelang Ramadhan”. Melalui program itu, pengguna Go-Ride dapat diantarkan ke tujuannya masing-masing —tak lebih dari 25 kilometer— hanya dengan ongkos Rp10 ribu. Strategi promosi tersebut sukses. </p><p><br></p><p>\"Saking banyaknya orang yang menggunakan promo itu, Go-Jek meledak jadi layanan aplikasi no. 1 di Jakarta. Kami ikut kaget,” ujar pendiri Go-Jek, Nadiem Makarim. </p><p><br></p><p>Secara umum, komponen tarif Go-Ride terdiri dari tarif dasar dan tarif per kilometer. Tarif dasar adalah tarif rata berbatas jarak tertentu. Pada 2015, jarak 0-6 kilometer dihargai Rp15 ribu. Kini, berdasarkan ujicoba aplikasi Go-Ride untuk bepergian dari kawasan Kemang Timur Raya ke berbagai variasi lokasi, tarif 0-5 kilometer dipatok Rp8 ribu. Sementara tarif per kilometer ialah tarif tambahan yang diberlakukan jika pengguna melebihi ketentuan jarak dari tarif dasar.</p><p><br></p><p>Naik-turun tarif Go-Jek merentang jauh hingga awal kemunculan aplikasi yang kini bertitel Unicorn. Tiga bulan selepas promo “Ceban Menjelang Ramadhan” digulirkan, Go-Ride mengubah tarifnya. Tepat pada September 2015, Go-Ride memberlakukan tarif sebesar Rp15 ribu untuk 6 kilometer pertama di jam-jam sibuk. Lebih dari 6 kilometer, pengguna dibebankan biaya sebesar Rp2.500 tiap tambahan kilometer. Di luar jam-jam sibuk, pengguna Go-Ride kena tarif rata sebesar Rp15 ribu untuk jarak maksimal 25 kilometer.</p><p><br></p><p>Di awal kemunculannya, Go-Ride mematok tarif per kilometer sebesar Rp4.000. Namun, seiring waktu, tarif Go-Ride per kilometer itu terus mengalami perubahan. Pada 2018, tarif per kilometer Go-Ride mengalami beberapa kali perubahan. Pada Juni 2018, tarif per kilometernya dipatok Rp2.200 hingga Rp3.300. Sejak November, tarifnya Rp1.200 per kilometer.</p><p><br></p>', 'gojek-grab-perang-tarif-pengemudi-mati-di-tengah-tengah', '2018-12-15 13:07:37', 1),
(5, 'Google, Raksasa Teknologi dari Negeri Paman Sam', 2, '<p>Google adalah salah satu perusahaan multinasional yang berfokus pada pengembangan teknologi untuk kebutuhan bisnis dan korporasi. </p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo odit voluptates non at sunt molestias doloremque praesentium dolore sapiente tempore, possimus, quis tenetur accusamus. Deserunt dolore soluta eum architecto blanditiis.</p>', 'google-raksasa-teknologi-dari-negeri-paman-sam', '2018-12-15 13:08:32', 1),
(6, 'Sample Post 2', 1, '<p>Just for sample</p>', 'sample-post-2', '2018-12-15 13:10:20', 1),
(8, 'Kerangka Kerja Rakyat Indonesia', 3, '<p>Kita bisa</p><p>Kita mampu untuk menaklukan dunia</p>', 'kerangka-kerja-rakyat-indonesia', '2020-09-05 08:34:20', 1),
(9, 'Kerangka Kerja Rakyat Indonesia', 1, '<p>gud</p>', 'kerangka-kerja-rakyat-indonesia', '2020-09-07 17:48:10', 1),
(10, 'Kerangka Kerja Rakyat Indonesia', 1, '<p>kucing akjsahfkjashfkjhaskjfhskjahfkjsahfkjashkjkucing akjsahfkjashfkjhaskjfhskjahfkjsahfkjashkjkucing akjsahfkjashfkjhaskjfhskjahfkjsahfkjashkjkucing akjsahfkjashfkjhaskjfhskjahfkjsahfkjashkjkucing akjsahfkjashfkjhaskjfhskjahfkjsahfkjashkj</p>', 'kerangka-kerja-rakyat-indonesia', '2020-09-07 17:49:22', 1),
(11, 'Kerangka Kerja Rakyat Indonesia', 4, '<p>asjhfkjashfkjhaskjfhaskjf</p>', 'kerangka-kerja-rakyat-indonesia', '2020-09-07 17:51:30', 1),
(12, 'asnbfnasbfnmas', 4, '<p>asnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmas</p>', 'asnbfnasbfnmas', '2020-09-07 17:53:31', 1),
(13, 'Kerangka Kerja Rakyat Indonesia', 4, '<p>asnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasvv</p>', 'kerangka-kerja-rakyat-indonesia', '2020-09-07 17:54:30', 1),
(14, 'Kerangka Kerja Rakyat Indonesia', 2, '<p>asnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmas</p>', 'kerangka-kerja-rakyat-indonesia', '2020-09-07 17:56:56', 1),
(15, 'Kerangka Kerja Rakyat Indonesia', 1, '<p>asnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmas</p>', 'kerangka-kerja-rakyat-indonesia', '2020-09-07 17:57:54', 1),
(16, 'Kerangka Kerja Rakyat Indonesia', 1, '<p>asnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmas</p>', 'kerangka-kerja-rakyat-indonesia', '2020-09-07 17:58:10', 1),
(17, 'Kerangka Kerja Rakyat Indonesia', 4, '<p>asnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmasasnbfnasbfnmas</p>', 'kerangka-kerja-rakyat-indonesia', '2020-09-07 18:00:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_comment`
--

CREATE TABLE `table_comment` (
  `comment_id` int(11) NOT NULL,
  `comment_status` int(11) NOT NULL,
  `comment_nama` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_isi` text NOT NULL,
  `comment_content_id` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_comment`
--

INSERT INTO `table_comment` (`comment_id`, `comment_status`, `comment_nama`, `comment_email`, `comment_isi`, `comment_content_id`, `is_delete`) VALUES
(1, 0, 'sukes jaya', 'anditambunan1@gmail.com', 'ksnadkjaskdjaskdbsakbdkjsa', 1, 0),
(3, 0, 'andi ', 'coba@admin.com', 'andi cek', 4, 0),
(7, 0, 'andi ', 'akjshdksah@gmail.com', 'sfkjasdkjashf@gmail.com', 2, 0),
(8, 0, 'andi ', 'anditambunan1@gmail.com', 'sangat bagus', 5, 0),
(9, 0, 'ini siapa', 'coba@admin.com', 'sfasfas', 1, 0),
(10, 9, 'andi ', 'sfsf@gmail.com', 'wfsfsafasf', 1, 0),
(12, 0, 'ini siapa', 'coba@admin.com', 'cek sound', 2, 0),
(13, 0, 'ini siapa', 'asmdnas@gmail.com', 'test', 2, 0),
(14, 13, 'andi siapa', 'dsjbfkjdsbgbdsg@gmail.com', 'sudah bisa', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_content`
--

CREATE TABLE `table_content` (
  `content_id` int(11) NOT NULL,
  `content_title` varchar(100) NOT NULL,
  `content_body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_content`
--

INSERT INTO `table_content` (`content_id`, `content_title`, `content_body`) VALUES
(1, 'Injection', 'Silahkan berdiskusi pada kolom komentar'),
(2, 'Broken Authentication', 'Silahkan berdiskusi pada kolom komentar'),
(3, 'Sensitive Data Exposure', 'Silahkan berdiskusi pada kolom komentar'),
(4, 'XML External Entities', 'Silahkan berdiskusi pada kolom komentar'),
(5, 'Broken Access Control', 'Silahkan berdiskusi pada kolom komentar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(150) NOT NULL,
  `full_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`) VALUES
(1, 'administrator', '$2y$10$zAi8hRalzyb.TrFLNCVs1.p/jU2eFATOldpWK2SFyAYg8aylF2Yqm', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_comment`
--
ALTER TABLE `table_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `table_content`
--
ALTER TABLE `table_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `table_comment`
--
ALTER TABLE `table_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
