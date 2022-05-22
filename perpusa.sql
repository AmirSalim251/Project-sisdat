-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 12:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpusa`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telpon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `no_telpon`) VALUES
(4001, 'Daffa Bima Sakti', '0895600950391'),
(4002, 'Muhammad Zharfan H', '082214983500'),
(4003, 'Fauzan Ali Hibatullah', '087822844375'),
(4004, 'Firhan Imam H', '081312815273'),
(4005, 'Riva', '081312815262'),
(4009, 'Amir Salim', '085316553812'),
(4010, 'Kinanti N', '08651650156');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `genre` enum('FANTASY','ROMANCE','HISTORY','COMEDY','EDUCATION') NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_rak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `penerbit`, `cover`, `genre`, `id_petugas`, `id_rak`) VALUES
(1001, 'SPY X FAMILY 01', 'Endo tatsuya', 'Elex Media', '9786230021312_Spy_x_Family_01.jpg', 'COMEDY', 5002, 2001),
(1022, 'Sejarah Lengkap Perang Dunia 1', 'Alfi Arifian', 'Sociality', 'sejarah_UuXRFLd.jpg', 'HISTORY', 5002, 2002),
(1024, 'JUJUTSU KAISEN 05', 'Gege Akutami', 'Elexmedia Komputindo', '9786230029783_Jujutsukaisen_5.jpg', 'FANTASY', 5003, 2001),
(1025, 'Home Sweet Loan', 'Almira Bastari', 'Gramedia Pustaka Utama', 'Home_Sweet_Loan_cov.jpg', 'EDUCATION', 5003, 2003),
(1026, 'De Java Oorlog: Rangkuman Kron', 'Abdul Rohim', 'Anak Hebat Indonesia', 'dejava oorlog.jpg', 'HISTORY', 5003, 2002),
(1027, 'Sejarah Agama Manusia (2019)', 'Mohammad Zazuli', 'Narasi', 'sejarah agama manusia.jpg', 'HISTORY', 5003, 2002),
(1028, 'Para Pembentuk Peradaban Islam', 'Chase Robinson', 'Alvabet', '9786026577429_Para-Pembentuk-Peradaban-Islam--Seribu-Tahun-Pertama.jpg', 'HISTORY', 5003, 2002),
(1029, 'Salt To The Sea', 'Ruta Sepetys', 'Elex Media Komputindo', 'salt to the sea.jpg', 'HISTORY', 5003, 2002),
(1030, 'KPK Berdiri Untuk Negri', 'Arin Swandari', 'Buku Kompas', 'kpk.jpg', 'HISTORY', 5003, 2002),
(1031, 'Perawan Remaja Dalam Cengkrama', 'Pramudya Ananta Toer', 'Kepustakaan Popular Gramedia', 'perawan remaja.jpg', 'HISTORY', 5003, 2002),
(1032, 'Cheng Co: Penyebar Islam Dari ', 'Tan Tan Sen', 'Buku Kompas', 'penyebar islam dari china ke nusantara.jpg', 'HISTORY', 5003, 2002),
(1033, 'Jejak Pesawat Terbang Dinas Pe', 'Yudi Supriyono', 'Mata Padi Presindo', 'jejak pesawat terbang.jpg', 'HISTORY', 5003, 2002),
(1034, 'Mekkah Dan Madinah: Sejarah Ku', 'Ahmad Ibrahim ', 'Alvabet', 'mekkah dan madinah.jpg', 'HISTORY', 5003, 2002),
(1035, 'Critical Eleven', 'Ika Natassa', 'GRAMEDIA Pustaka Utama', 'critical eleven.jpg', 'ROMANCE', 5003, 2001),
(1036, '5 CM', 'Donny Dhirgantoro', 'Gramedia Widiasarana Indonesia', '5cm.jpg', 'ROMANCE', 5003, 2003),
(1037, 'The Sun And Her Flowers', 'Rupi Kaur', 'Kepustakaan Popular Gramedia', 'the sun and her flowers.jpg', 'ROMANCE', 5003, 2003),
(1038, 'Janna', 'Oky Noorsari', 'Bhuana Ilmu Popular', '10_Janna.jpg', 'ROMANCE', 5003, 2003),
(1039, 'Couverture:', 'Emma Susan', 'Gramedia Widiasarana Indonesia', 'couverture.jpg', 'ROMANCE', 5002, 2003),
(1040, 'Love Is', 'Puung', 'Bhuana Ilmu Popular', 'love is.jpg', 'ROMANCE', 5002, 2003),
(1041, 'Never Be Alone', 'Chelsea Karina', 'Sunset Road’', 'never be alone.jpg', 'ROMANCE', 5002, 2003),
(1042, 'My Beloved Pian', 'Indah Riyana', 'Gramedia Widiasarana Indonesia', 'my beloved pian.jpg', 'ROMANCE', 5002, 2003),
(1043, 'My Mute Boyfriend', 'Raenissa', 'Heksa Media Pressindo', 'my_mute_boyfriend.jpg', 'ROMANCE', 5002, 2003),
(1044, 'Hidden', 'Asabell Audida', 'Romancius', 'hidden.jpg', 'ROMANCE', 5002, 2003),
(1045, 'Sihir Mesir Di Tanah Jawa', 'Kisah Tanah Jawa', 'Gagas Media', 'sihir tanah jawa.jpg', 'FANTASY', 5002, 2004),
(1046, 'Spare Room', 'Dreda Say Mitchell', 'Elex Media Komputindo', 'spare room.jpg', 'FANTASY', 5002, 2004),
(1047, 'A Place Called Perfect', 'HELENA DUGGAN', 'Bhuana Ilmu Popular', 'a placed called perfect.jpg', 'FANTASY', 5002, 2004),
(1048, 'The Trouble With Perfect', 'HELENA DUGGAN', 'Bhuana Ilmu Popular', 'the trouble with  perfect.jpg', 'FANTASY', 5002, 2004),
(1049, 'Lukacita', 'Valerie Patka', 'Bhuana Ilmu Populer', 'luka cita.jpg', 'FANTASY', 5002, 2004),
(1050, 'The Devil All The Time', 'Donald Ray Pollock', 'Elex Media Komputindo', 'the devil all the time.jpg', 'FANTASY', 5002, 2004),
(1051, 'Lavender', 'Luna Torashyngu', 'Gramedia Pustaka Utama', 'Lavender_cov.jpg', 'FANTASY', 5002, 2004),
(1052, '01.00', 'Ameylia Falensia', 'Loveable', '01_00.jpg', 'FANTASY', 5002, 2004),
(1053, 'IF I', 'Bella Anjani', 'Bhuana Ilmu Popular', 'If_I.jpg', 'FANTASY', 5002, 2004),
(1054, 'PACHINKO', 'MIN JIN LEE', 'GRAMEDIA PUSTAKA UTAMA', 'Pachinko_cov_1.jpg', 'FANTASY', 5002, 2004),
(1055, 'Merdeka Belajar Pendidikan Ana', 'Ana Widyastuti', 'Elex Media Komputindo', '722080282_Cov_Merdeka_Belajar_Pendidikan_Anak_Usia_Dini.jpg', 'EDUCATION', 5003, 2005),
(1056, 'Teknologi Jaringan Berbasis Lu', 'Fajar Winata', 'Elex Media Komputindo', 'Teknologi Jaringan Berbasis Luas Xi Smk K-13.jpg', 'EDUCATION', 5001, 2005),
(1057, 'Teknologi Layanan Jaringan 1/X', 'Wilyanto Yusuf', 'Pt Yudhistira Ghalia Indonesia', 'Teknologi Layanan Jaringan 1.jpg', 'EDUCATION', 5001, 2005),
(1058, 'Smk/Mak Kls. Basis Data Kur 20', 'Nuruly Firdausy', 'Pt Yudhistira Ghalia Indonesia', 'Smk Mak Kls Basis Data Kur 2013 Ed Rev.jpg', 'EDUCATION', 5001, 2005),
(1059, 'Asesmen Matematika 3/Xii Smk', 'Tim Editor Ygi', 'Pt Yudhistira Ghalia Indonesia', 'Asesmen Matematika 3Xii Smk.jpg', 'EDUCATION', 5001, 2005),
(1060, 'Bisnis Online 1/Xi Smk K-13 Re', 'Sutrisno', 'Pt Yudhistira Ghalia Indonesia', 'Bisnis Online.jpg', 'EDUCATION', 5001, 2005),
(1061, 'Smk/Mak Kls. Xi Desain Grafis ', 'Rida Mulyadi', 'Yudhistira', 'Kls Xi Desain Grafis Percetakan Kur 13 Ed Rev.jpg', 'EDUCATION', 5001, 2005),
(1062, 'Produk Pastry & Bakery 1/Xi K1', 'ANNAYANTI BUDNINGSI', 'Yudhistira', 'Produk_Pastry__Bakery_1_Xi_K13_New.jpg', 'EDUCATION', 5001, 2005),
(1063, 'Komunikasi Indrustri Pariwisat', 'Rina Kuswardani', 'Yudhistira', 'komunikasi industri pariwisata.jpg', 'EDUCATION', 5001, 2005),
(1064, 'Komunikasi Keperawatan', 'Tim Dharma Aksara', 'Yudhistira', 'Komunikasi_Keperawatan_X.jpg', 'EDUCATION', 5001, 2005),
(1065, 'Ubur-Ubur Lembur', 'Raditya Dika', 'Gagas Media', 'ubur ubur lembur.jpg', 'COMEDY', 5001, 2001),
(1066, 'Setengah Jalan', 'Ernest Prakasa', 'Bentang Pustaka', 'setengah jalan.jpg', 'COMEDY', 5001, 2001),
(1067, 'Bajak Laut& Purnama Terakhir :', 'Adhitya Mulya', 'Transmedia', 'Bajak Laut_ Purnama Terakhir Sebuah Komedi Sejarah.jpg', 'COMEDY', 5001, 2001),
(1068, 'My Stupid Boss 6 : Be Like Bob', 'Upi Avianto', 'Gradien Mediatama', 'my stupid boss.jpg', 'COMEDY', 5001, 2001),
(1069, 'My Ice Girl', 'Pit Sansi', 'Bentang Pustaka', 'my ice girl.jpg', 'COMEDY', 5001, 2001),
(1070, '#TEMANTAPIMENIKAH', 'Ayundia Bing Slamet', 'Elex Media Komputindo', 'teman tapi menikah.jpg', 'COMEDY', 5001, 2001),
(1071, 'The One And Only Ivan', 'Katherine Applegate', 'Harper Collins', 'The One and Only Ivan.jpg', 'COMEDY', 5001, 2001),
(1072, 'Jomblo Ngenest', 'Pandu Pabdaa', 'Andi Publisher', 'jomblo ngenest.jpg', 'COMEDY', 5001, 2001),
(1073, 'Three Mas Getir', 'Furqonie Akbar', 'Bintang Wahyu', '_three_mas_getir.jpg', 'COMEDY', 5001, 2001),
(1074, 'Koala Kumal', 'Raditya Dika', 'Gagas Media', 'koala kumal.jpg', 'COMEDY', 5001, 2001);

-- --------------------------------------------------------

--
-- Table structure for table `info_login`
--

CREATE TABLE `info_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_login`
--

INSERT INTO `info_login` (`username`, `password`, `id_petugas`) VALUES
('amir215', 'amirkeren', 5002),
('D4fi', 'kerenBro', 5003),
('ojan208', 'adminkece', 5001);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_buku`, `id_petugas`, `id_anggota`, `tgl_pinjam`, `tgl_kembali`) VALUES
(3002, 1001, 5002, 4003, '2022-05-21', '2022-05-28'),
(3003, 1042, 5003, 4004, '2022-05-22', '2022-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama`) VALUES
(5001, 'Fauzan Azhiima'),
(5002, 'Amir Salim'),
(5003, 'Ibrahim Dafi');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id` int(11) NOT NULL,
  `nama_rak` varchar(10) NOT NULL,
  `jumlah_buku` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id`, `nama_rak`, `jumlah_buku`) VALUES
(2001, 'Rak A', 13),
(2002, 'Rak B', 12),
(2003, 'Rak C', 10),
(2004, 'Rak D', 10),
(2005, 'Rak E', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rak` (`id_rak`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `info_login`
--
ALTER TABLE `info_login`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_buku` (`id_buku`,`id_petugas`,`id_anggota`),
  ADD KEY `kreditor` (`id_petugas`),
  ADD KEY `peminjam` (`id_anggota`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `penambah` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`),
  ADD CONSTRAINT `tempat` FOREIGN KEY (`id_rak`) REFERENCES `rak` (`id`);

--
-- Constraints for table `info_login`
--
ALTER TABLE `info_login`
  ADD CONSTRAINT `akun_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `buku_yang_dipinjam` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`),
  ADD CONSTRAINT `kreditor` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`),
  ADD CONSTRAINT `peminjam` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
