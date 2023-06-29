-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2023 pada 14.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `maba`
--

CREATE TABLE `maba` (
  `id_pendaftaran` varchar(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `th_ajaran` varchar(9) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(25) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maba`
--

INSERT INTO `maba` (`id_pendaftaran`, `tgl_daftar`, `th_ajaran`, `jurusan`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jk`, `Agama`, `Alamat`) VALUES
('001', '2023-06-15', '2023/2024', 'Application Software Engineering', 'Rizky Agras Rifaldy ', 'Serang', '2004-08-30', 'Laki-laki', 'Islam', 'JL KH Achmad Damanhuri,Cinangka Serang-Banten'),
('002', '2023-06-15', '2023/2024', 'Accounting Information System', 'Serlina', 'Serang', '2004-05-14', 'Perempuan', 'Islam', 'JL KH Achmad Damanhuri Cinangka Serang-Banten'),
('003', '2023-06-16', '2023/2024', 'Personal Administrative', 'Nurul iman', 'Serang', '2004-06-07', 'Laki-laki', 'Islam', 'JL Raya pegagasan timur no 56 Jakarta Pusat'),
('004', '2023-06-16', '2023/2024', 'Digital Busines Management', 'Digo Ari Nugroho', 'Wonosobo', '2005-06-14', 'Laki-laki', 'Islam', 'Jl Raya Maja Selatan Lebak-Banten'),
('005', '2023-06-16', '2023/2024', 'Application Software Engineering', 'Surya Insomnia', 'Serang', '2002-06-22', 'Laki-laki', 'Islam', 'Jl Raya Ngawi No 80 Jawa Timur'),
('006', '2023-06-16', '2023/2024', 'Application Software Engineering', 'Anri Rifaldy', 'Lebak', '2003-06-07', 'Laki-laki', 'Islam', 'JL Raya Pandeglang No 30 Cikulur -Banten'),
('007', '2023-06-17', '2023/2024', 'Personal Administrative', 'Ajojing', 'Serang', '2023-06-07', 'Laki-laki', 'Islam', 'JL Raya Serang No 56 '),
('008', '2023-06-19', '2023/2024', 'Application Software Engineering', 'Muhammad Arif ', 'Serang', '2004-06-07', 'Laki-laki', 'Islam', 'Papua Nugini'),
('009', '2023-06-13', '2023/2024', 'Accounting Information System', 'Jajang Karbu', 'Serang', '2004-06-20', 'Laki-laki', 'Protestan', 'Serang'),
('010', '2023-06-20', '2023/2024', 'Application Software Engineering', 'Fachrul R', 'Serang', '2004-06-14', 'Laki-laki', 'Islam', 'Menes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mimin`
--

CREATE TABLE `mimin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(6) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mimin`
--

INSERT INTO `mimin` (`username`, `password`, `nama`) VALUES
('admin', '123', 'Rizky Agras Rifaldy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`) VALUES
('udin', '123', 'Saprudin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `maba`
--
ALTER TABLE `maba`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `mimin`
--
ALTER TABLE `mimin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
