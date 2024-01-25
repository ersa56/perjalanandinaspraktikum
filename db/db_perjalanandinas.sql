-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2024 at 09:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perjalanandinas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota_dewan`
--

CREATE TABLE `tb_anggota_dewan` (
  `id` int NOT NULL,
  `asal` varchar(50) NOT NULL,
  `id_anggota_dewan` varchar(50) NOT NULL,
  `jenis_kelamin_id` varchar(30) NOT NULL,
  `nama_anggota_dewan` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `no_anggota_dewan` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `umur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_anggota_dewan`
--

INSERT INTO `tb_anggota_dewan` (`id`, `asal`, `id_anggota_dewan`, `jenis_kelamin_id`, `nama_anggota_dewan`, `nip`, `no_anggota_dewan`, `ttl`, `umur`) VALUES
(1, 'Banjarmasin', '12313123', 'Pria', 'Akhmad Ersa Nugraha', '21312321312', '088321312312', '2024-01-25', '21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakta_integritas`
--

CREATE TABLE `tb_fakta_integritas` (
  `id` int NOT NULL,
  `alamat` char(50) NOT NULL,
  `hari` char(50) NOT NULL,
  `nomor_telepon` char(50) NOT NULL,
  `tanggal_berangkat` char(50) NOT NULL,
  `tanggal_pulang` char(50) NOT NULL,
  `tempat_tujuan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id` int NOT NULL,
  `golongan_jabatan` char(50) NOT NULL,
  `gugus_jabatan` char(50) NOT NULL,
  `nama_jabatan` char(50) NOT NULL,
  `no_jabatan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id`, `golongan_jabatan`, `gugus_jabatan`, `nama_jabatan`, `no_jabatan`) VALUES
(1, 'dsada', 'sdsadas', 'dsadsa', '2312132'),
(4, 'tes123', 'tes', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jk`
--

CREATE TABLE `tb_jk` (
  `id` int NOT NULL,
  `jenis_kelamin` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_jk`
--

INSERT INTO `tb_jk` (`id`, `jenis_kelamin`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kwitansi`
--

CREATE TABLE `tb_kwitansi` (
  `id` int NOT NULL,
  `jumlah_kwitansi` char(50) NOT NULL,
  `kode_kwitansi` char(50) NOT NULL,
  `nomor_kwitansi` char(50) NOT NULL,
  `tanggal_kwitansi` char(50) NOT NULL,
  `total_kwitansi` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_kwitansi`
--

INSERT INTO `tb_kwitansi` (`id`, `jumlah_kwitansi`, `kode_kwitansi`, `nomor_kwitansi`, `tanggal_kwitansi`, `total_kwitansi`) VALUES
(1, 'dsads', 'asdasd', 'dsadasd', 'dasda', 'sdasda');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sppd`
--

CREATE TABLE `tb_sppd` (
  `id` int NOT NULL,
  `nama_anggota_dewan_id` int NOT NULL,
  `jangka_waktu` date NOT NULL,
  `jenis_transportasi` varchar(50) NOT NULL,
  `judul_kegiatan` varchar(50) NOT NULL,
  `jumlah_anggaran` varchar(50) NOT NULL,
  `nomor_lampiran` varchar(50) NOT NULL,
  `nomor_rekening` varchar(50) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_pulang` date NOT NULL,
  `tempat_berangkat` varchar(50) NOT NULL,
  `tempat_tujuan` varchar(50) NOT NULL,
  `total_relisasi_anggaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_sppd`
--

INSERT INTO `tb_sppd` (`id`, `nama_anggota_dewan_id`, `jangka_waktu`, `jenis_transportasi`, `judul_kegiatan`, `jumlah_anggaran`, `nomor_lampiran`, `nomor_rekening`, `tanggal_berangkat`, `tanggal_pulang`, `tempat_berangkat`, `tempat_tujuan`, `total_relisasi_anggaran`) VALUES
(1, 1, '2024-01-17', 'Mobil Pribadi', 'dsasa', '12313', 'sdasda1231', '1231231231', '2024-01-20', '2024-01-13', 'asdas', 'sadas', '1231231');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'ERSA N', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Akhmad Ersa Nugraha', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota_dewan`
--
ALTER TABLE `tb_anggota_dewan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fakta_integritas`
--
ALTER TABLE `tb_fakta_integritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jk`
--
ALTER TABLE `tb_jk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kwitansi`
--
ALTER TABLE `tb_kwitansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sppd`
--
ALTER TABLE `tb_sppd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota_dewan`
--
ALTER TABLE `tb_anggota_dewan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_fakta_integritas`
--
ALTER TABLE `tb_fakta_integritas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jk`
--
ALTER TABLE `tb_jk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kwitansi`
--
ALTER TABLE `tb_kwitansi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_sppd`
--
ALTER TABLE `tb_sppd`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
