-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2026 pada 05.45
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_caesar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `Nip` varchar(20) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Mapel` varchar(100) DEFAULT NULL,
  `Alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`Nip`, `Nama`, `Mapel`, `Alamat`) VALUES
('G001', 'Pak Joko', 'Matematika', 'Bantul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `Nik` varchar(20) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Jabatan` varchar(100) DEFAULT NULL,
  `Alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`Nik`, `Nama`, `Jabatan`, `Alamat`) VALUES
('K001', 'Agus', 'TU', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `Kode_Kelas` varchar(20) NOT NULL,
  `Nama_Kelas` varchar(100) DEFAULT NULL,
  `Wali_Kelas` varchar(100) DEFAULT NULL,
  `Ruangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`Kode_Kelas`, `Nama_Kelas`, `Wali_Kelas`, `Ruangan`) VALUES
('K01', 'X RPL 1', 'Pak Joko', 'R01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `Kode_Mapel` varchar(20) NOT NULL,
  `Nama_Mapel` varchar(100) DEFAULT NULL,
  `Jam_Pelajaran` int(11) DEFAULT NULL,
  `Guru_Pengampu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`Kode_Mapel`, `Nama_Mapel`, `Jam_Pelajaran`, `Guru_Pengampu`) VALUES
('M01', 'Matematika', 4, 'Pak Joko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `piket`
--

CREATE TABLE `piket` (
  `Nis` varchar(20) DEFAULT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Kelas` varchar(50) DEFAULT NULL,
  `Hari` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `piket`
--

INSERT INTO `piket` (`Nis`, `Nama`, `Kelas`, `Hari`) VALUES
('101', 'Andi', 'X RPL 1', 'Senin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `Kode_Ruangan` varchar(20) NOT NULL,
  `Nama_Ruangan` varchar(100) DEFAULT NULL,
  `Gedung` varchar(100) DEFAULT NULL,
  `Kapasitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`Kode_Ruangan`, `Nama_Ruangan`, `Gedung`, `Kapasitas`) VALUES
('R01', 'Lab Komputer', 'Gedung A', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `Nis` varchar(20) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Kelas` varchar(50) DEFAULT NULL,
  `Jurusan` varchar(50) DEFAULT NULL,
  `Alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`Nis`, `Nama`, `Kelas`, `Jurusan`, `Alamat`) VALUES
('101', 'Andi', 'X RPL 1', 'RPL', 'Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`Nip`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`Nik`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Kode_Kelas`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`Kode_Mapel`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`Kode_Ruangan`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`Nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
