-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 10:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takhayul`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Kucing hitam membawa sial?', 'Asal usul takhayul tentang kucing hitam dikaitkan dengan kemalangan dan kemalangan datang dari zaman dahulu. Dalam mitologi Kristen, kucing hitam dianggap sebagai makhluk yang dikendalikan oleh iblis dan sering dikaitkan dengan kejadian buruk. Dalam mitologi Inggris, kucing hitam dianggap sebagai pembawa keberuntungan buruk. Namun, dalam budaya lain seperti Cina dan Jepang, kucing hitam dianggap sebagai simbol keberuntungan.Beberapa teori menyatakan bahwa keyakinan ini berasal dari persekutuan kucing dengan dunia kepercayaan pagan, di mana kucing dianggap sebagai makhluk yang dapat menghubungkan dunia manusia dengan dunia roh. Kucing juga dianggap sebagai pelindung rumah dari roh jahat dan kemalangan. Namun, faktanya, kucing hitam sama seperti kucing lainnya dan tidak lebih atau kurang berbahaya atau beruntung. Beberapa orang mungkin merasa tidak nyaman dengan kucing hitam karena mitos atau karena warna kulit yang unik, tetapi ini tidak ada hubungannya dengan karakter atau perilaku kucing itu sendiri.', NULL),
(2, 'Duduk di atas bantal, bisulan?', 'Ada beberapa teori yang menyatakan bahwa duduk di atas bantal dapat menyebabkan bisulan. Namun, tidak ada bukti ilmiah yang kuat yang mendukung afirmasi ini. Faktor lain seperti kondisi kulit dan hygiene dapat lebih mempengaruhi munculnya bisulan daripada duduk di atas bantal. Namun, jika seseorang merasa nyaman dengan duduk di atas bantal atau jika itu membantu dalam mengurangi nyeri pinggul atau punggung, tidak ada alasan untuk menghindarinya.', NULL),
(21, 'ada apa denganmu', 'bukannya sesuatu hal', '63d9128feb76b.jpg'),
(22, 'tolol', 'tolol', '63d91345a0af3.jpg'),
(23, 'gg', 'ggg', '63d9135d216b7.png'),
(24, 'naha atuh gagal', 'teuing atuh', '63d913da09eae.png'),
(25, 'ggh', 'hjjj', '63db3d900b224.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jawaban` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_pertanyaan`, `deskripsi`, `jawaban`) VALUES
(1, 1, 'Ya', 0),
(2, 1, 'Tidak', 1),
(3, 2, 'Ya', 0),
(4, 2, 'Tidak', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `skor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `deskripsi`, `skor`) VALUES
(1, 'Apakah zodiak mempengaruhi kepribadian seseorang?', 10),
(2, 'Apakah gempa pertanda dewa marah?', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
