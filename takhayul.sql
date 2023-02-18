-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 09:00 AM
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
(1, 'Kucing hitam membawa sial?', 'Asal usul takhayul tentang kucing hitam dikaitkan dengan kemalangan dan kemalangan datang dari zaman dahulu. Dalam mitologi Kristen, kucing hitam dianggap sebagai makhluk yang dikendalikan oleh iblis dan sering dikaitkan dengan kejadian buruk. Dalam mitologi Inggris, kucing hitam dianggap sebagai pembawa keberuntungan buruk. Namun, dalam budaya lain seperti Cina dan Jepang, kucing hitam dianggap sebagai simbol keberuntungan.Beberapa teori menyatakan bahwa keyakinan ini berasal dari persekutuan kucing dengan dunia kepercayaan pagan, di mana kucing dianggap sebagai makhluk yang dapat menghubungkan dunia manusia dengan dunia roh. Kucing juga dianggap sebagai pelindung rumah dari roh jahat dan kemalangan. Namun, faktanya, kucing hitam sama seperti kucing lainnya dan tidak lebih atau kurang berbahaya atau beruntung. Beberapa orang mungkin merasa tidak nyaman dengan kucing hitam karena mitos atau karena warna kulit yang unik, tetapi ini tidak ada hubungannya dengan karakter atau perilaku kucing itu sendiri.', 'black cat.jpg'),
(2, 'Duduk di atas bantal, bisulan?', 'Ada beberapa teori yang menyatakan bahwa duduk di atas bantal dapat menyebabkan bisulan. Namun, tidak ada bukti ilmiah yang kuat yang mendukung afirmasi ini. Faktor lain seperti kondisi kulit dan hygiene dapat lebih mempengaruhi munculnya bisulan daripada duduk di atas bantal. Namun, jika seseorang merasa nyaman dengan duduk di atas bantal atau jika itu membantu dalam mengurangi nyeri pinggul atau punggung, tidak ada alasan untuk menghindarinya.', 'seiza.jpg'),
(29, 'Membuka payung di rumah membawa sial?', 'Asal usul takhayul orang membuka payung di rumah terkait dengan keyakinan bahwa tindakan ini dapat membawa sial. Beberapa teori menyatakan bahwa keyakinan ini berasal dari mitos yang berkembang di Eropa abad pertengahan, di mana payung dianggap sebagai simbol kekuasaan dan hanya digunakan oleh orang-orang kaya atau bangsawan. Ketika payung mulai diproduksi secara massal dan dijual ke kelas menengah, penggunaan payung dianggap sebagai tindakan yang mencerminkan pretensi atau merendahkan orang yang lebih tinggi kedudukannya.\r\n<br>\r\nFaktanya, membuka payung di rumah tidak memiliki dampak nyata pada keberuntungan seseorang. Namun, ada beberapa keuntungan praktis dalam membuka payung sebelum masuk ke dalam rumah, seperti mencegah air hujan atau salju yang menempel di payung masuk ke dalam rumah. Oleh karena itu, jika Anda ingin membuka payung di rumah, Anda dapat melakukannya tanpa perlu khawatir tentang dampak keberuntungan atau kesialan.', '63ec8371cd6ad.jpg'),
(30, 'Angka 13, Angka sial?', 'Asal usul takhayul angka 13 sebagai angka sial berakar dari berbagai kepercayaan dan budaya di seluruh dunia. Dalam kepercayaan agama Kristen, angka 13 dianggap sebagai angka sial karena dihubungkan dengan The Last Supper, di mana terdapat 13 orang yang makan bersama termasuk Yesus dan Yudas yang kemudian mengkhianati-Nya. Selain itu, dalam mitologi Nordik, Loki yang dikenal sebagai dewa kejahatan adalah anggota ke-13 dalam perjamuan para dewa.\r\n<br>\r\nNamun, di beberapa budaya, angka 13 dianggap sebagai angka yang membawa keberuntungan. Contohnya, dalam kepercayaan Hindu, angka 13 dianggap sebagai angka yang membawa keberuntungan karena terkait dengan dewa Wanita, yang merupakan lambang keberuntungan dan kesuburan. Di Italia, angka 13 dianggap sebagai angka yang membawa keberuntungan karena dianggap sebagai lambang kemakmuran.\r\n<br>\r\nFaktanya, angka 13 sama seperti angka lainnya dan tidak memiliki kekuatan untuk membawa keberuntungan atau kesialan. Keyakinan tentang angka 13 sebagai angka sial lebih merupakan sebuah takhayul atau mitos yang berkembang di masyarakat. Namun, karena keyakinan ini begitu kuat di beberapa budaya, beberapa bangunan atau gedung sering kali menghindari menggunakan nomor 13 untuk lantai atau nomor kamar. Namun, pada kenyataannya, tidak ada yang salah atau berbahaya dengan menggunakan angka 13 dalam kehidupan sehari-hari.', '63ec855b93e79.jpg'),
(31, 'Duduk didepan pintu, jodohnya akan sulit?', 'Asal usul takhayul duduk di depan pintu tidak jelas dan bervariasi dalam berbagai budaya dan kepercayaan. Beberapa orang mungkin percaya bahwa duduk di depan pintu dapat menghambat datangnya keberuntungan atau jodoh, sementara yang lain mungkin percaya bahwa duduk di depan pintu dapat menarik energi positif atau keberuntungan.\r\n<br>\r\nFaktanya, tak ada bukti ilmiah yang mendukung takhayul bahwa duduk di depan pintu dapat mempengaruhi keberuntungan atau jodoh seseorang. Kebanyakan takhayul seperti ini hanyalah mitos atau cerita yang berkembang di masyarakat. Lebih penting lagi, keberuntungan dan jodoh seseorang tidak hanya ditentukan oleh duduk di depan pintu atau tidak, namun dipengaruhi oleh berbagai faktor seperti kepribadian, kebiasaan, lingkungan, dan sebagainya.\r\n<br>\r\nOleh karena itu, jika seseorang ingin menemukan jodoh atau meningkatkan keberuntungan dalam hidupnya, lebih baik fokus pada membangun kepribadian yang baik, merawat hubungan dengan orang lain, dan bekerja keras untuk mencapai tujuan hidupnya, daripada terlalu memikirkan takhayul atau mitos.', '63ec873c2ef73.jpg');

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
(4, 2, 'Tidak', 1),
(5, 3, 'Ya', 0),
(6, 3, 'Tidak', 1),
(7, 4, 'Ya', 0),
(8, 4, 'Tidak', 1),
(9, 5, 'Ya', 0),
(10, 5, 'Tidak', 1),
(11, 6, 'Ya', 0),
(12, 6, 'Tidak', 1),
(13, 7, 'Ya', 0),
(14, 7, 'Tidak', 1),
(15, 8, 'Ya', 0),
(16, 8, 'Tidak', 1),
(17, 9, 'Ya', 0),
(18, 9, 'Tidak', 1),
(19, 10, 'Ya', 0),
(20, 10, 'TIdak', 1);

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
(2, 'Apakah kekuatan supranatural itu nyata?', 10),
(3, 'Apakah bencana alam adalah sebuah musibah?', 10),
(4, 'Apakah jampi efektif untuk penyembuhan penyakit', 10),
(5, 'Apakah seseorang bisa memperoleh kekayaan dengan bantuan supranatural?', 10),
(6, 'Apakah kamu percaya pada istilah kesurupan?', 10),
(7, 'Apakah kamu percaya pada angka sial atau keburuntungan?', 10),
(8, 'Apakah kamu percaya pada warna sial atau keberuntungan?', 10),
(9, 'Apakah hari kelahiran menentukan kepribadian seseorang?', 10),
(10, 'Apakah sebuah bangunan perlu adanya pengorbanan?', 10);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
