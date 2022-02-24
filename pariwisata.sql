-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 01:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi_wisata`
--

CREATE TABLE `destinasi_wisata` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `penanggung_jawab` varchar(255) NOT NULL,
  `alamat_penanggung_jawab` text NOT NULL,
  `telephone_penanggung_jawab` varchar(25) NOT NULL,
  `jenis_usaha` varchar(255) NOT NULL,
  `status_lahan` varchar(100) NOT NULL,
  `no_sk_pendirian` varchar(255) NOT NULL,
  `npwp_daerah` varchar(255) NOT NULL,
  `approval_status` int(2) NOT NULL,
  `tanggal_pendaftaran` datetime NOT NULL,
  `no_izin_teknis` varchar(255) NOT NULL,
  `no_doc_pengelolaan_lingkungan` varchar(255) NOT NULL,
  `tanggal_perubahan_terakhir` datetime NOT NULL,
  `status_kepemilikan` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `total_pelaku` int(11) NOT NULL,
  `pelaku_pria` int(11) NOT NULL,
  `pelaku_wanita` int(11) NOT NULL,
  `no_registrasi_kalurahan` varchar(100) NOT NULL,
  `doc_susunan_pengurus` varchar(255) NOT NULL,
  `doc_permohonan_registrasi` varchar(255) NOT NULL,
  `doc_deskripsi_destinasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinasi_wisata`
--

INSERT INTO `destinasi_wisata` (`id`, `nama`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `alamat`, `telephone`, `penanggung_jawab`, `alamat_penanggung_jawab`, `telephone_penanggung_jawab`, `jenis_usaha`, `status_lahan`, `no_sk_pendirian`, `npwp_daerah`, `approval_status`, `tanggal_pendaftaran`, `no_izin_teknis`, `no_doc_pengelolaan_lingkungan`, `tanggal_perubahan_terakhir`, `status_kepemilikan`, `created_by`, `total_pelaku`, `pelaku_pria`, `pelaku_wanita`, `no_registrasi_kalurahan`, `doc_susunan_pengurus`, `doc_permohonan_registrasi`, `doc_deskripsi_destinasi`) VALUES
('66176cec-c6f5-4113-90e1-e066de1baaea', 'Pantai Parangtritis', 'D.I Yogyakarta', 'Bantul', 'Kretek', 'Parangtritis', 'jl parangtritis', '', 'Hamdilah', 'Piyungan', '1232132', 'Pengelolaan Wisata Alam', 'Sultan Ground', '83498934', '2348923', 1, '2021-11-01 18:40:45', '1188', '1929', '0000-00-00 00:00:00', '', '04eaeb70-2a88-41d5-bff3-0372c6f62777', 23, 11, 12, '32423543', 'doc_pengajuan/npwp1.jpg', 'doc_pengajuan/org_dgn_ktp1.png', 'doc_pengajuan/ktp_didi1.jpg'),
('814617e0-ba1c-4dda-9850-dc9471a4febc', 'Sriharjo', 'D.I Yogyakarta', 'Bantul', 'Sanden', 'Gadingsari', 'test', '', 'Mukhlis', 'Padang', '1232132', 'Pengelolaan Peninggalan Sejarah & Purbakala', 'Hak Milik', '33333--33333', '88888', 2, '2021-11-01 18:47:40', '8398233', '1019182', '0000-00-00 00:00:00', '', '04eaeb70-2a88-41d5-bff3-0372c6f62777', 23, 21, 5, '32423543', 'doc_pengajuan/ktp_didi2.jpg', 'doc_pengajuan/send.jpg', 'doc_pengajuan/npwp2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `document_lampiran`
--

CREATE TABLE `document_lampiran` (
  `id` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `path` text NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_lampiran`
--

INSERT INTO `document_lampiran` (`id`, `nama`, `path`, `filename`) VALUES
('657b9ebe-61fb-4184-98b5-7163eb16fdc5', 'Susunan Pengurus', 'doc_lampiran/Template_Lampiran_A.docx', 'Template_Lampiran_A.docx'),
('22c5b99b-a23b-4cd7-a7ef-8326e56a6b05', 'Form Surat Permohonan Registrasi', 'doc_lampiran/Template_Lampiran_B.docx', 'Template_Lampiran_B.docx'),
('1c33bdeb-599d-4a1c-8b49-9a38ebec0a59', 'Foto dan Deskripsi Destinasi', 'doc_lampiran/Template_Lampiran_C.docx', 'Template_Lampiran_C.docx');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kota_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `kota_id`) VALUES
(1, 'Bambanglipuro', 1),
(2, 'Banguntapan', 1),
(3, 'Bantul', 1),
(4, 'Dlingo', 1),
(5, 'Imogiri', 1),
(6, 'Jetis', 1),
(7, 'Kasihan', 1),
(8, 'Kretek', 1),
(9, 'Pajangan', 1),
(10, 'Pandak', 1),
(11, 'Piyungan', 1),
(12, 'Pleret', 1),
(13, 'Pundong', 1),
(14, 'Sanden', 1),
(15, 'Sedayu', 1),
(16, 'Sewon', 1),
(17, 'Srandakan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kecamatan_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama`, `kecamatan_id`) VALUES
(1, 'Sidomulyo', 1),
(2, 'Mulyodadi', 1),
(3, 'Sumbermulyo', 1),
(4, 'Baturetno', 2),
(5, 'Banguntapan', 2),
(6, 'Jagalan', 2),
(7, 'Singosaren', 2),
(8, 'Jambidan', 2),
(9, 'Potorono', 2),
(10, 'Tamanan', 2),
(11, 'Wirokerten', 2),
(12, 'Palbapang', 3),
(13, 'Trirenggo', 3),
(14, 'Bantul', 3),
(15, 'Sabdodadi', 3),
(16, 'Ringinharjo', 3),
(17, 'Mangunan', 4),
(18, 'Muntuk', 4),
(19, 'Dlingo', 4),
(20, 'Temuwuh', 4),
(21, 'Terong', 4),
(22, 'Jatimulyo', 4),
(23, 'Selopamioro', 5),
(24, 'Sriharjo', 5),
(25, 'Wukirsari', 5),
(26, 'Kebonagung', 5),
(27, 'Karangtengah', 5),
(28, 'Girirejo', 5),
(29, 'Karangtalun', 5),
(30, 'Imogiri', 5),
(31, 'Patalan', 6),
(32, 'Canden', 6),
(33, 'Sumberagung', 6),
(34, 'Trimulyo', 6),
(35, 'Bangunjiwo', 7),
(36, 'Tirtonirmolo', 7),
(37, 'Tamantirto', 7),
(38, 'Ngestiharjo', 7),
(39, 'Tirtomulyo', 8),
(40, 'Parangtritis', 8),
(41, 'Donotirto', 8),
(42, 'Tirtosari', 8),
(43, 'Tirtohargo', 8),
(44, 'Sendangsari', 9),
(45, 'Triwidadi', 9),
(46, 'Guwosari', 9),
(47, 'Gilangharjo', 10),
(48, 'Triharjo', 10),
(49, 'Caturharjo', 10),
(49, 'Wijirejo', 10),
(50, 'Sitimulyo', 11),
(51, 'Srimulyo', 11),
(52, 'Srimartani', 11),
(53, 'Pleret', 12),
(54, 'Segoroyoso', 12),
(55, 'Bawuran', 12),
(56, 'Wonolelo', 12),
(57, 'Wonokromo', 12),
(58, 'Seloharjo', 13),
(59, 'Srihandono', 13),
(60, 'Panjangrejo', 13),
(61, 'Gadingsari', 14),
(62, 'Gadingharjo', 14),
(63, 'Srigading', 14),
(64, 'Murtigading', 14),
(65, 'Argodadi', 15),
(66, 'Argorejo', 15),
(67, 'Argosari', 15),
(68, 'Argomulyo', 15),
(69, 'Pendowoharjo', 16),
(70, 'Timbulharjo', 16),
(71, 'Bangunharjo', 16),
(72, 'Panggungharjo', 16),
(73, 'Poncosari', 17),
(74, 'Trimurti', 17);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `provinsi_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `provinsi_id`) VALUES
(1, 'Bantul', 1);

-- --------------------------------------------------------

--
-- Table structure for table `persetujuan_wisata`
--

CREATE TABLE `persetujuan_wisata` (
  `id` varchar(50) NOT NULL,
  `wisata_id` varchar(50) NOT NULL,
  `nomor_sk` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `approver_id` varchar(50) NOT NULL,
  `tanggal_approval` datetime NOT NULL,
  `note` text NOT NULL,
  `status_approval` int(11) NOT NULL,
  `doc_persetujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persetujuan_wisata`
--

INSERT INTO `persetujuan_wisata` (`id`, `wisata_id`, `nomor_sk`, `no_ktp`, `approver_id`, `tanggal_approval`, `note`, `status_approval`, `doc_persetujuan`) VALUES
('5f838b79-ec58-4d62-ab1f-3f704c0a9b75', '814617e0-ba1c-4dda-9850-dc9471a4febc', '', '', '8fb95e64-d6fa-4f5c-9fb4-fce452c3ecf7', '2021-11-01 18:54:24', 'pengajuan salah', 2, ''),
('f07c7bcf-550d-4748-9550-48429dd5fc0b', '66176cec-c6f5-4113-90e1-e066de1baaea', '1929-1234', '', '8fb95e64-d6fa-4f5c-9fb4-fce452c3ecf7', '2021-11-01 18:44:39', 'approved', 1, 'doc_sk/send.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
(1, 'D.I Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` varchar(50) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `description`) VALUES
('b27ad1f5-695b-4003-bbdc-82d95188ad60', 'administrator', 'role untuk admin'),
('cacff090-75a4-466f-a467-bf69b41333b3', 'pemohon', 'role untuk pemohon persetujuan'),
('f81dbd95-dc98-49ca-8f5c-89fb84b0efb5', 'approver', 'role untuk approver');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(100) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `verification_id` varchar(100) NOT NULL,
  `role_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `fullname`, `phone`, `verification_id`, `role_id`) VALUES
('04eaeb70-2a88-41d5-bff3-0372c6f62777', 'rafli', 'muhammad.shalehudin@solusi247.com', '$2y$12$inxnjpmD0Sz98AqRuKLUw.UUrMKv9qiAwaF0Z0hWEs7E8FoHCCtUW', '', '', '08a9df23-8d8d-40a7-aeb5-204acb8530d5', 'cacff090-75a4-466f-a467-bf69b41333b3'),
('8fb95e64-d6fa-4f5c-9fb4-fce452c3ecf7', 'raflesh', 'frisse.indonesia@gmail.com', '$2y$12$0ACk8ep3ZtTyVOvLFs7Gdulu5RmZ1fgOgQHbj6Vke3FFmPa1CqhD6', '', '', 'ebb289db-b54a-4522-9ae1-54bacc3b7629', 'f81dbd95-dc98-49ca-8f5c-89fb84b0efb5');

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `id` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`id`, `code`) VALUES
('9bfa0dcb-7d02-497b-b7b9-b13c14b67241', '832020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi_wisata`
--
ALTER TABLE `destinasi_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persetujuan_wisata`
--
ALTER TABLE `persetujuan_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
