-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Nov 2019 pada 07.09
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osis_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cloud`
--

CREATE TABLE `cloud` (
  `no_form` int(16) NOT NULL,
  `nip` varchar(32) NOT NULL,
  `unit_kerja` varchar(32) NOT NULL,
  `usulan_akun` varchar(32) NOT NULL,
  `kuota` int(16) NOT NULL,
  `alasan` text NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status_transaksi` varchar(32) NOT NULL,
  `assign_to` varchar(64) NOT NULL,
  `jenis_transaksi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cloud`
--

INSERT INTO `cloud` (`no_form`, `nip`, `unit_kerja`, `usulan_akun`, `kuota`, `alasan`, `tgl_transaksi`, `status_transaksi`, `assign_to`, `jenis_transaksi`) VALUES
(1, '198308182010121001', 'Direktorat X', 'ginoga_edo', 16, 'Penting', '2019-11-27', 'Selesai', 'Tim Teknis Bagian Data & Aplikasi', 'Permintaan Akun Cloud'),
(2, '198304152015032001', 'Direktorat Y', 'sri_hartantik', 8, 'penting', '2019-11-27', 'Tertunda', 'Tim Teknis Bagian Infrastruktur', 'Permintaan Akun Cloud');

--
-- Trigger `cloud`
--
DELIMITER $$
CREATE TRIGGER `before_cloud_update` BEFORE UPDATE ON `cloud` FOR EACH ROW INSERT INTO history
   ( nip,
     unit_kerja,
     usulan_akun,
    tgl_transaksi,
    status_transaksi,
    assign_to,
    jenis_transaksi)
   VALUES
   ( OLD.nip,
     OLD.unit_kerja,
     OLD.usulan_akun,
    OLD.tgl_transaksi,
    OLD.status_transaksi,
    OLD.assign_to,
    OLD.jenis_transaksi)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `email`
--

CREATE TABLE `email` (
  `no_form` int(16) NOT NULL,
  `nip` varchar(32) NOT NULL,
  `unit_kerja` varchar(32) NOT NULL,
  `usulan_akun` varchar(16) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status_transaksi` varchar(32) NOT NULL,
  `assign_to` varchar(64) NOT NULL,
  `jenis_transaksi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `email`
--

INSERT INTO `email` (`no_form`, `nip`, `unit_kerja`, `usulan_akun`, `tgl_transaksi`, `status_transaksi`, `assign_to`, `jenis_transaksi`) VALUES
(1, '198308182010121001', 'Direktorat X', 'crud', '2019-11-27', 'Tertunda', 'Tim Teknis Bagian Data & Aplikasi', 'Permintaan Akun Email'),
(2, '198308182010121001', 'Direktorat X', 'ginoga_edo', '2019-11-27', 'Menunggu Pengguna', 'Tim Teknis Bagian Data & Aplikasi', 'Permintaan Akun Email'),
(3, '198304152015032001', 'Direktorat Y', 'sri_hartantik', '2019-11-27', 'Menunggu Helpdesk', 'Tim Teknis Bagian Data & Aplikasi', 'Permintaan Akun Email'),
(4, '199501152016111001', 'Pusdatik', 'Dwison', '2019-11-28', 'Menunggu Helpdesk', 'Unassigned', 'Permintaan Akun Email');

--
-- Trigger `email`
--
DELIMITER $$
CREATE TRIGGER `before_email_update` BEFORE UPDATE ON `email` FOR EACH ROW INSERT INTO history
   ( nip,
     unit_kerja,
     usulan_akun,
    tgl_transaksi,
    status_transaksi,
    assign_to,
    jenis_transaksi)
   VALUES
   ( OLD.nip,
     OLD.unit_kerja,
     OLD.usulan_akun,
    OLD.tgl_transaksi,
    OLD.status_transaksi,
    OLD.assign_to,
    OLD.jenis_transaksi)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `nip` varchar(32) NOT NULL,
  `unit_kerja` varchar(32) NOT NULL,
  `usulan_akun` varchar(16) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status_transaksi` varchar(32) NOT NULL,
  `assign_to` varchar(64) NOT NULL,
  `jenis_transaksi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`nip`, `unit_kerja`, `usulan_akun`, `tgl_transaksi`, `status_transaksi`, `assign_to`, `jenis_transaksi`) VALUES
('198308182010121001', 'Direktorat X', 'crud', '2019-11-27', 'Menunggu Tim Teknis', 'Tim Teknis Bagian Data & Aplikasi', 'Permintaan Akun Email'),
('198304152015032001', 'Direktorat Y', 'sri_hartantik', '2019-11-27', 'Selesai', 'Tim Teknis Bagian Infrastruktur', 'Permintaan Akun Cloud'),
('198304152015032001', 'Direktorat Y', 'sri_hartantik', '2019-11-27', 'Menunggu Helpdesk', 'Unassigned', 'Permintaan Akun Email'),
('198304152015032001', 'Direktorat Y', 'sri_hartantik', '2019-11-27', 'Menunggu Tim Teknis', 'Tim Teknis Bagian Infrastruktur', 'Permintaan Akun Cloud'),
('198308182010121001', 'Direktorat X', 'ginoga_edo', '2019-11-27', 'Tertunda', 'Tim Teknis Bagian Data & Aplikasi', 'Permintaan Akun Cloud'),
('198308182010121001', 'Direktorat X', 'ginoga_edo', '2019-11-27', 'Tertunda', 'Tim Teknis Bagian Infrastruktur', 'Permintaan Akun Cloud'),
('198308182010121001', 'Direktorat X', 'ginoga_edo', '2019-11-27', 'Tertunda', 'Tim Teknis Bagian Data & Aplikasi', 'Permintaan Akun Cloud');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_layanan`
--

CREATE TABLE `info_layanan` (
  `nama_layanan` varchar(32) NOT NULL,
  `info_layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nama` varchar(50) NOT NULL,
  `nip` varchar(32) NOT NULL,
  `pangkat` enum('Pengatur Muda','Pengatur Muda Tk.1','Pengatur','Pengatur Tk.1','Penata Muda','Penata Muda Tk.1','Pembina','Pembina Tk.1','Pembina Utama Muda','Pembina Utama Madya') NOT NULL,
  `golongan` enum('IIa','IIb','IIc','IId','IIIa','IIIb','IIIc','IIId','IVa','IVb','IVc','IVe') NOT NULL,
  `jabatan` enum('Staf','Direktur','Kepala Pusat','Kepala Biro') NOT NULL,
  `unitkerja` enum('Pusdatik','Puskaji','Inspektorat','Direktorat X','Direktorat Y','Direktorat Z') NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nama`, `nip`, `pangkat`, `golongan`, `jabatan`, `unitkerja`, `password`, `role`) VALUES
('Sri Hartantik', '198304152015032001', 'Penata Muda Tk.1', 'IIIc', 'Staf', 'Direktorat Y', '$2y$12$DhwwgXSv6.adsmXVituCruw3ycimsTMncdtGhA3MX1hSr9Bepw4w.', 'pemohon'),
('Ginoga Veridona', '198308182010121001', 'Penata Muda Tk.1', 'IIIc', 'Staf', 'Direktorat X', '$2y$12$1UZwrjUEi2Q8LJ9s0EabtOfQ7xDdK2bX91QdnMY61KZP6.AxaNs4u', 'pemohon'),
('Agustinus Bram', '199008212012061001', 'Pengatur Muda Tk.1', 'IIIb', 'Staf', 'Inspektorat', '$2y$12$D5B/AsPjcWg59oarFF/AVO8akzhfEt3UKu0TfE7ReJYu2DckspeUG', 'pemohon'),
('Hamdi Rafiqi', '199202012014121001', 'Pengatur Muda Tk.1', 'IIIb', 'Staf', 'Puskaji', '$2y$12$NSGkMeg.5ppT/fqqeQCoZ.SkPG/20CbrCpiUskB8vy8BHAiq0iF.W', 'tim teknis'),
('Muhammad Dwison Alizah', '199501152016111001', 'Penata Muda', 'IIIa', 'Staf', 'Pusdatik', '$2y$12$l1sWaT0rueximOESTNePGOjaePRsEF4kS3gg0D/b/Nd6PO1TKy0Mq', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cloud`
--
ALTER TABLE `cloud`
  ADD PRIMARY KEY (`no_form`);

--
-- Indeks untuk tabel `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`no_form`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cloud`
--
ALTER TABLE `cloud`
  MODIFY `no_form` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `email`
--
ALTER TABLE `email`
  MODIFY `no_form` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
