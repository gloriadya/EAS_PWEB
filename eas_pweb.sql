-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 08:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eas_pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `vaksin` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `foto`, `ktp`, `vaksin`, `ijazah`) VALUES
(8, 'Akbar Putra.jpg', 'ktp.pdf', 'vaksin.pdf', 'ijazah.pdf'),
(9, 'Manajemen Biaya EAS MPPL - Anggaran Biaya_001.jpg', 'Manajemen Biaya EAS MPPL - Anggaran Biaya.pdf', '8830-15933-1-PB.pdf', '8830-15933-1-PB.pdf'),
(10, 'Manajemen Biaya EAS MPPL - Anggaran Biaya_001.jpg', 'Manajemen Biaya EAS MPPL - Anggaran Biaya.pdf', '8830-15933-1-PB.pdf', '8830-15933-1-PB.pdf'),
(11, 'Manajemen Biaya EAS MPPL - Anggaran Biaya_001.jpg', 'Manajemen Biaya EAS MPPL - Anggaran Biaya.pdf', '8830-15933-1-PB.pdf', '8830-15933-1-PB.pdf'),
(12, 'Manajemen Biaya EAS MPPL - Anggaran Biaya_001.jpg', 'Manajemen Biaya EAS MPPL - Anggaran Biaya.pdf', '8830-15933-1-PB.pdf', '8830-15933-1-PB.pdf'),
(13, 'Manajemen Biaya EAS MPPL - Anggaran Biaya_001.jpg', 'Manajemen Biaya EAS MPPL - Anggaran Biaya.pdf', '8830-15933-1-PB.pdf', '8830-15933-1-PB.pdf'),
(14, 'Manajemen Biaya EAS MPPL - Anggaran Biaya_001.jpg', 'Manajemen Biaya EAS MPPL - Anggaran Biaya.pdf', '8830-15933-1-PB.pdf', '8830-15933-1-PB.pdf'),
(15, 'Manajemen Biaya EAS MPPL - Anggaran Biaya_001.jpg', 'Manajemen Biaya EAS MPPL - Anggaran Biaya.pdf', '8830-15933-1-PB.pdf', '8830-15933-1-PB.pdf'),
(16, 'Manajemen Biaya EAS MPPL - Anggaran Biaya_001.jpg', 'Manajemen Biaya EAS MPPL - Anggaran Biaya.pdf', '8830-15933-1-PB.pdf', '8830-15933-1-PB.pdf'),
(17, 'Manajemen Biaya EAS MPPL - Anggaran Biaya_001.jpg', 'Manajemen Biaya EAS MPPL - Anggaran Biaya.pdf', '8830-15933-1-PB.pdf', '8830-15933-1-PB.pdf'),
(18, 'Manajemen Biaya EAS MPPL - Anggaran Biaya_001.jpg', 'Manajemen Biaya EAS MPPL - Anggaran Biaya.pdf', '8830-15933-1-PB.pdf', '8830-15933-1-PB.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countdown`
--

CREATE TABLE `countdown` (
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `countdown`
--

INSERT INTO `countdown` (`tanggal`) VALUES
('2022-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'pendaftar');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `no_pendf` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `tempat_lhr` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `formasi_jabatan` varchar(50) NOT NULL,
  `id_berkas` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`no_pendf`, `id`, `nik`, `nama`, `kelamin`, `tempat_lhr`, `tgl_lhr`, `agama`, `alamat`, `pendidikan`, `formasi_jabatan`, `id_berkas`, `status`) VALUES
(2147483647, 2, '1253671828391283', 'Tegar', 'L', 'Tarakan', '2002-10-12', 'islam', 'bschabiucbabsc', 'S-1', 'Pengawas Perikanan', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `id_level`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Akbar putra pangestu', 'ap975527@gmail.com', '4f033a0a2bf2fe0b68800a3079545cd1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`no_pendf`),
  ADD KEY `id_berkas` (`id_berkas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`id_berkas`) REFERENCES `berkas` (`id_berkas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
