-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 05:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus_rumi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nim` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `j_k` varchar(50) NOT NULL,
  `dep` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `j_k`, `dep`) VALUES
(54090014, 'Husnul Khatimah', 'Sumenep', '1992-01-08', 'Perempuan', 'ITK'),
(54100004, 'Muhamad Rakif Panguale', 'Dodung', '1992-06-12', 'Laki-Laki', 'ITK'),
(542011114, 'Muhammad El Rumi Alimurahman Panguale', 'Sumenep', '2018-10-02', 'Laki-Laki', 'ITK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(4) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `isbn` varchar(200) NOT NULL,
  `jumlah_buku` int(4) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tanggal_input`) VALUES
(1, 'Ciptaan', 'Amalia', 'thegangoffur', 2018, '978-602-53703-3-s', 1, 'rak1', '2020-07-12'),
(2, 'Kakatua dan Nuri', 'Shendiane Rimandani', 'Bintang Indonesia Jakarta', 2019, '602218575-0', 1, 'rak2', '2020-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `buku` varchar(200) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_buku`, `buku`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(15, 1, 'Ciptaan', '54100004', 'Muhamad Rakif', '2020-07-26', '2020-07-31', 'Kembali'),
(16, 13, 'Aku Senang Menolong', '54090014', 'Husnul Khatimah', '2020-07-26', '2020-08-02', 'Kembali'),
(17, 16, 'Majapahit', '54090014', 'Husnul Khatimah', '2020-07-26', '2020-08-02', 'Kembali'),
(18, 1, 'Ciptaan', '54090014', 'Husnul Khatimah', '2020-07-26', '2020-08-02', 'Kembali'),
(19, 1, 'Ciptaan', '54090014', 'Husnul Khatimah', '2020-07-26', '2020-08-02', 'Kembali'),
(20, 1, 'Ciptaan', '54090014', 'Husnul Khatimah', '2020-07-26', '2020-08-02', 'Kembali'),
(21, 1, 'Ciptaan', '54090014', 'Husnul Khatimah', '2020-07-26', '2020-08-02', 'Kembali'),
(22, 1, 'Ciptaan', '54090014', 'Husnul Khatimah', '2020-06-10', '2020-06-30', 'Kembali'),
(23, 2, 'Kakatua dan Nuri', '54090014', 'Husnul Khatimah', '2020-06-20', '2020-06-30', 'Kembali'),
(24, 2, 'Kakatua dan Nuri', '54100004', 'Muhamad Rakif Panguale', '2020-07-26', '2020-08-09', 'Kembali'),
(25, 13, 'Aku Senang Menolong', '54100004', 'Muhamad Rakif Panguale', '2020-08-09', '2020-08-23', 'Kembali'),
(26, 1, 'Ciptaan', '54090014', 'Husnul Khatimah', '2020-08-09', '2020-08-16', 'Kembali'),
(27, 16, 'Majapahit', '54090014', 'Husnul Khatimah', '2020-08-09', '2020-08-16', 'Kembali'),
(28, 1, 'Ciptaan', '54090014', 'Husnul Khatimah', '2020-08-17', '2020-08-24', 'Pinjam'),
(29, 1, 'Ciptaan', '54100004', 'Muhamad Rakif Panguale', '2020-08-17', '2020-08-24', 'Pinjam'),
(30, 1, 'Ciptaan', '542011114', 'Muhammad El Rumi Alimurahman Panguale', '2020-08-17', '2020-08-24', 'Pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', 'admin', 'rakif', 'admin'),
(2, 'user', 'user', 'rumi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
