-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2018 at 01:59 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password_origin` varchar(20) NOT NULL,
  `nm_lengkap` varchar(50) NOT NULL,
  `alamat_admin` text NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `aktif_admin` enum('Y','N') NOT NULL DEFAULT 'Y',
  `status_admin` enum('Admin','User') NOT NULL DEFAULT 'User',
  `pic_admin` varchar(100) NOT NULL,
  `kd_aktivasi_admin` varchar(15) NOT NULL,
  `aktivasi_admin` enum('Y','N') NOT NULL DEFAULT 'N',
  `dt_last_akses` date NOT NULL,
  `tm_last_akses` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `password_origin`, `nm_lengkap`, `alamat_admin`, `email_admin`, `aktif_admin`, `status_admin`, `pic_admin`, `kd_aktivasi_admin`, `aktivasi_admin`, `dt_last_akses`, `tm_last_akses`) VALUES
(11, 'galehganteng', 'abf044211e9c593d9e9d3028fc93a65f', '', 'Apa iya', 'Jl.banung', 'galehdotid@gmail.com', 'Y', 'User', 'img-cfca4b0d599575bf1e70d4d140dd0c8f.jpg', '', 'N', '0000-00-00', '00:00:00'),
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'admin', 'admin', 'admin@admin', 'Y', 'User', 'img-f6e08b11bf09aae575916898b0fb9fba.jpg', '', 'N', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cara_daftar`
--

CREATE TABLE `cara_daftar` (
  `id_caradft` int(5) NOT NULL,
  `deskripsi_caradft` text NOT NULL,
  `pic_caradft` varchar(100) NOT NULL,
  `aktif_caradft` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cara_daftar`
--

INSERT INTO `cara_daftar` (`id_caradft`, `deskripsi_caradft`, `pic_caradft`, `aktif_caradft`) VALUES
(1, 'Berikut tahapan pendaftaran siswa baru SMK XYZ berbasis online.<br><ul><li>Klik link Pendaftaran Siswa Baru.</li><li>Isi formulir blanko dengan data diri calon siswa.</li><li>Login dengan nomor pendaftaranÂ dan password calon siswa.</li><li>Lengkapi data profil siswa, unggah kelengkapan dokumen (Kartu Keluarga, Ijazah/SKHU/SKL, foto),Â input mata pelajaran, input nilai raport dari sekolah sebelumnya.</li><li>Cetak data profil calon siswa dan kartu peserta ujian saringan masuk.</li><li>Ikuti ujian saringan masuk secara offline disekolah.</li></ul>', '930053cara_daftar.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `dok_foto`
--

CREATE TABLE `dok_foto` (
  `id_dok_foto` int(5) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `tgl_up_foto` date NOT NULL,
  `pic_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_foto`
--

INSERT INTO `dok_foto` (`id_dok_foto`, `no_reg`, `tgl_up_foto`, `pic_foto`) VALUES
(43, 'PSB1808001', '2018-08-12', 'siswa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dok_ijazah`
--

CREATE TABLE `dok_ijazah` (
  `id_dok_ijazah` int(5) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `tgl_up_ijazah` date NOT NULL,
  `pic_dok_ijazah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_ijazah`
--

INSERT INTO `dok_ijazah` (`id_dok_ijazah`, `no_reg`, `tgl_up_ijazah`, `pic_dok_ijazah`) VALUES
(35, 'PSB1808001', '2018-08-12', 'kk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dok_kk`
--

CREATE TABLE `dok_kk` (
  `id_dok_kk` int(5) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `tgl_up_kk` date NOT NULL,
  `pic_dok_kk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_kk`
--

INSERT INTO `dok_kk` (`id_dok_kk`, `no_reg`, `tgl_up_kk`, `pic_dok_kk`) VALUES
(26, 'PSB1808001', '2018-08-12', '8ijazah.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_web`
--

CREATE TABLE `identitas_web` (
  `id_identitas` int(5) NOT NULL,
  `nm_website` varchar(70) NOT NULL,
  `nm_sekolah` varchar(40) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `tlp_sekolah` varchar(15) NOT NULL,
  `email_sekolah` varchar(40) NOT NULL,
  `url` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `profil_web` text NOT NULL,
  `meta_deskripsi` text NOT NULL,
  `meta_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_web`
--

INSERT INTO `identitas_web` (`id_identitas`, `nm_website`, `nm_sekolah`, `alamat_sekolah`, `kode_pos`, `tlp_sekolah`, `email_sekolah`, `url`, `facebook`, `twitter`, `instagram`, `profil_web`, `meta_deskripsi`, `meta_keyword`) VALUES
(1, 'PSB Online SMK Pasim Plus Kota Sukabumi', 'SMKS Pasim Plus Kota Sukabumi', 'Jl. Prana no8A', 0, '0266232323', 'info@smkpasimplus.sch.id', '-', '-', '-', '-', 'Selamat datang di portal Penerimaan SIswa Baru (PSB) SMK XYZ. Portal ini melayani pendaftaran siswa baru berbasis online guna meningkatkan pelayanan terhadap calon siswa yang ingin mendaftar sebagai siswa baru. Diharapkan portal ini dapat menyelesaikan permasalahan antrian yang terjadi ketika proses pendaftaran siswa berlangsung.', 'SMK XYZ, menerima pendaftaran siswa baru, penerimaan siswa baru, sistem informasi penerimaan siswa baru', 'SMK XYZ, penerimaan siswa baru, pendaftaran siswa baru, sistem informasi');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(5) NOT NULL,
  `judul_info` varchar(30) NOT NULL,
  `deskripsi_info` text NOT NULL,
  `pic_info` varchar(100) NOT NULL,
  `aktif_info` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `judul_info`, `deskripsi_info`, `pic_info`, `aktif_info`) VALUES
(1, 'Penerimaan Siswa Baru', '<p>asddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>\r\n', '673096Logo-Tut-Wuri-Handayani.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id_kompetensi` int(3) NOT NULL,
  `bid_kompetensi` varchar(40) NOT NULL,
  `aktif_kompetensi` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`id_kompetensi`, `bid_kompetensi`, `aktif_kompetensi`) VALUES
(11, 'Akuntansi', 'Y'),
(12, 'Administrasi Perkantoran', 'Y'),
(13, 'Rekayasa Perangkat Lunak', 'Y'),
(14, 'Teknik Komputer Jaringan', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(9) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `aktif_mapel` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`, `aktif_mapel`) VALUES
('MPL160601', 'Matematika', 'Y'),
('MPL160602', 'Bahasa Inggris', 'Y'),
('MPL160603', 'Bahasa Indonesia', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_raport`
--

CREATE TABLE `nilai_raport` (
  `id_nilai` int(5) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `id_mapel` varchar(9) NOT NULL,
  `nil1` double NOT NULL,
  `nil2` double NOT NULL,
  `nil3` double NOT NULL,
  `nil4` double NOT NULL,
  `nil5` double NOT NULL,
  `nil_ratarata` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_raport`
--

INSERT INTO `nilai_raport` (`id_nilai`, `no_reg`, `id_mapel`, `nil1`, `nil2`, `nil3`, `nil4`, `nil5`, `nil_ratarata`) VALUES
(64, 'PSB1808001', 'MPL160601', 80, 80, 80, 80, 80, 80),
(65, 'PSB1808001', 'MPL160602', 78, 78, 76, 80, 90, 78),
(66, 'PSB1808001', 'MPL160603', 78, 78, 78, 78, 98, 90);

-- --------------------------------------------------------

--
-- Table structure for table `psb`
--

CREATE TABLE `psb` (
  `no_reg` varchar(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jam_daftar` time NOT NULL,
  `password` varchar(100) NOT NULL,
  `kode_aktivasi` varchar(100) NOT NULL,
  `status_aktivasi` enum('Y','N') NOT NULL DEFAULT 'N',
  `status_verifikasi` enum('Belum','Sudah','Batal') NOT NULL DEFAULT 'Belum',
  `id_kompetensi` int(3) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `nisn` bigint(10) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `anak_ke` int(3) NOT NULL,
  `jml_saudara` int(3) NOT NULL,
  `status_anak` varchar(15) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `kota_kab` varchar(30) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `hp_siswa` varchar(15) NOT NULL,
  `tlp_siswa` varchar(12) NOT NULL,
  `email_siswa` varchar(50) NOT NULL,
  `status_rumah_siswa` varchar(30) NOT NULL,
  `kendaraan` varchar(30) NOT NULL,
  `asal_sekolah` varchar(40) NOT NULL,
  `alamat_sekolah` varchar(100) NOT NULL,
  `no_ijazah` varchar(25) NOT NULL,
  `tgl_ijazah` date NOT NULL,
  `thn_ijazah` year(4) NOT NULL,
  `nilai_un` double NOT NULL,
  `prestasi_akademik` varchar(100) NOT NULL,
  `prestasi_olahraga` varchar(100) NOT NULL,
  `prestasi_kesenian` varchar(100) NOT NULL,
  `nm_orangtua_ayah` varchar(50) NOT NULL,
  `nm_orangtua_ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `penghasilan_ayah` double NOT NULL,
  `penghasilan_ibu` double NOT NULL,
  `alamat_orgtua` text NOT NULL,
  `kota_kab_orgtua` varchar(30) NOT NULL,
  `kode_pos_orgtua` int(5) NOT NULL,
  `hp_orgtua` varchar(15) NOT NULL,
  `nm_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `penghasilan_wali` double NOT NULL,
  `alamat_wali` text NOT NULL,
  `hp_wali` varchar(15) NOT NULL,
  `penanggung_biaya` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psb`
--

INSERT INTO `psb` (`no_reg`, `tgl_daftar`, `jam_daftar`, `password`, `kode_aktivasi`, `status_aktivasi`, `status_verifikasi`, `id_kompetensi`, `nis`, `nisn`, `nm_siswa`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `agama`, `anak_ke`, `jml_saudara`, `status_anak`, `tinggi_badan`, `berat_badan`, `gol_darah`, `alamat_siswa`, `kota_kab`, `kode_pos`, `hp_siswa`, `tlp_siswa`, `email_siswa`, `status_rumah_siswa`, `kendaraan`, `asal_sekolah`, `alamat_sekolah`, `no_ijazah`, `tgl_ijazah`, `thn_ijazah`, `nilai_un`, `prestasi_akademik`, `prestasi_olahraga`, `prestasi_kesenian`, `nm_orangtua_ayah`, `nm_orangtua_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `alamat_orgtua`, `kota_kab_orgtua`, `kode_pos_orgtua`, `hp_orgtua`, `nm_wali`, `pekerjaan_wali`, `penghasilan_wali`, `alamat_wali`, `hp_wali`, `penanggung_biaya`) VALUES
('PSB1808001', '2012-08-18', '18:30:11', '5b701a43ba968', '', 'Y', 'Belum', 13, '1800001', 7834635628398, 'Yusuf aja', 'sukabumi', '2005-02-01', 'L', 'Islam', 1, 1, 'Tungal', 150, 30, 'B', 'jl kramat jati', 'sukabumi', 43113, '085817836589', '085817836589', 'yusudaja@mail.com', 'jauh dari keramaian', 'motor', 'SMP darmoet', 'jalan pelabuhan 2', '7873568376234', '2018-08-21', 2018, 77, 'juara ipa', 'juara lari', 'juara nyanyi', 'ujang icep', 'sartini', 'buruh', 'ibu rumah tangga', 4000000, 4000000, 'jalan kemayoran indah no 3', 'sukabumi', 0, '085817836591', 'tarjimi', 'programer', 10000000, 'jl.kemayoran indah no 2', '0875876467', 'tarjimi');

-- --------------------------------------------------------

--
-- Table structure for table `tanggal_ujian`
--

CREATE TABLE `tanggal_ujian` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggal_ujian`
--

INSERT INTO `tanggal_ujian` (`id`, `tanggal`, `jam`) VALUES
(1, '2018-08-08', '04:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_masuk`
--

CREATE TABLE `ujian_masuk` (
  `no_ujian` varchar(11) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `tgl_ujian` date NOT NULL,
  `jam_ujian` time NOT NULL,
  `ruang_ujian` varchar(10) NOT NULL,
  `hasil_ujian` double NOT NULL,
  `ket_ujian` enum('Belum','Lulus','Tidak') NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian_masuk`
--

INSERT INTO `ujian_masuk` (`no_ujian`, `no_reg`, `tgl_ujian`, `jam_ujian`, `ruang_ujian`, `hasil_ujian`, `ket_ujian`) VALUES
('USB1808001', 'PSB1808001', '2018-08-08', '04:44:00', 'R001', 0, 'Belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cara_daftar`
--
ALTER TABLE `cara_daftar`
  ADD PRIMARY KEY (`id_caradft`);

--
-- Indexes for table `dok_foto`
--
ALTER TABLE `dok_foto`
  ADD PRIMARY KEY (`id_dok_foto`);

--
-- Indexes for table `dok_ijazah`
--
ALTER TABLE `dok_ijazah`
  ADD PRIMARY KEY (`id_dok_ijazah`);

--
-- Indexes for table `dok_kk`
--
ALTER TABLE `dok_kk`
  ADD PRIMARY KEY (`id_dok_kk`);

--
-- Indexes for table `identitas_web`
--
ALTER TABLE `identitas_web`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id_kompetensi`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `psb`
--
ALTER TABLE `psb`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indexes for table `tanggal_ujian`
--
ALTER TABLE `tanggal_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujian_masuk`
--
ALTER TABLE `ujian_masuk`
  ADD PRIMARY KEY (`no_ujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cara_daftar`
--
ALTER TABLE `cara_daftar`
  MODIFY `id_caradft` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dok_foto`
--
ALTER TABLE `dok_foto`
  MODIFY `id_dok_foto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `dok_ijazah`
--
ALTER TABLE `dok_ijazah`
  MODIFY `id_dok_ijazah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `dok_kk`
--
ALTER TABLE `dok_kk`
  MODIFY `id_dok_kk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `identitas_web`
--
ALTER TABLE `identitas_web`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id_kompetensi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tanggal_ujian`
--
ALTER TABLE `tanggal_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
