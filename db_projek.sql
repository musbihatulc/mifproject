-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 02:34 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` int(21) NOT NULL,
  `NIP` bigint(20) NOT NULL,
  `Alamat` text NOT NULL,
  `TTL` varchar(40) NOT NULL,
  `Status_pernikahan` varchar(30) NOT NULL,
  `No_telp` varchar(14) NOT NULL,
  `Jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `Agama` varchar(12) NOT NULL,
  `Gambar` varchar(170) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `NIP`, `Alamat`, `TTL`, `Status_pernikahan`, `No_telp`, `Jenis_kelamin`, `Agama`, `Gambar`) VALUES
(1, 196304051984032001, 'vv', 'vbvv', 'fgg', 'gfg', 'Laki-laki', 'hhth', 'GAMBAR_X.png'),
(2, 0, '', '', '', '', '', '', ''),
(3, 0, 'Sangar', 'sas', 'sas', 'sas', 'Laki-laki', '1', 'gambar_4.jpg'),
(4, 196407231990031001, 'ajkdjakdadjkajd', 'sas', 'sas', 'sas', 'Laki-laki', 'as', 'gambar_Y.jpg'),
(5, 196009091993101001, 'Jl. Mastrip 5 No 5 Sumbersari Jember', 'Jember/15 Oktober 1967', 'Menikah', '085764897657', 'Laki-laki', 'Islam', '1.jpg'),
(6, 196602242000031003, 'Jl. Kalimantan Jember', 'Jember/21 April 1977', 'Menikah', '087908765432', 'Laki-laki', 'Islam', '4.jpg'),
(7, 196009201982031010, 'Jl. Riau Jember', 'Jember/23 Februari 1976', 'Menikah', '087654345231', 'Laki-laki', 'Islam', '5.jpg'),
(8, 196703271988031003, 'Jl. Jawa Jember', 'Situbondo/30 Desember 1970', 'Menikah', '086756098456', 'Laki-laki', 'Islam', 'LOGOKEJARI.png'),
(9, 196705052000031003, 'Jl. Kaliurang', 'Probolinggo/22 Juni 1981', 'Menikah', '087980654345', 'Laki-laki', 'Islam', '1.jpg'),
(10, 196707061992031002, 'Jl. Tidar', 'Bondowoso/15 Maret 1970', 'Menikah', '098890765456', 'Laki-laki', 'Islam', '4704702.jpg'),
(11, 196709151996031001, 'Jl. Mastrip 4', 'Banyuwangi/08 Juli 1980', 'Menikah', '098789654345', 'Laki-laki', 'Kristen', 'images.jpg'),
(12, 196712081995031002, 'Jl. Patrang Jember', 'Bandung/13 Desember 1978', 'Menikah', '089765456321', 'Laki-laki', 'Islam', 'LOGOKEJARI.png'),
(13, 196806132002122002, 'Jl. Sriwijaya', 'Jombang/17 Februari 1971', 'Menikah', '0945632178', 'Perempuan', 'Islam', 'LOGOKEJARI.png'),
(14, 199501102015021001, 'Jl. Kalijompo', 'Lumajang/22 September 1990', 'Belum Menikah', '0987896542341', 'Laki-laki', 'Islam', '1.jpg'),
(15, 636252, 'Jl. Mastrip 5 No 5 Sumbersari Jember', 'Jember/15 Oktober 1967', 'Menikah', '098890765456', 'Laki-laki', 'Islam', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id` int(11) NOT NULL,
  `golongan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `golongan`) VALUES
(1, 'I/a'),
(2, 'I/b'),
(3, 'I/c'),
(4, 'I/d'),
(5, 'II/a'),
(6, 'II/b'),
(7, 'II/c'),
(8, 'II/d'),
(9, 'III/a'),
(10, 'III/b'),
(11, 'III/c'),
(12, 'III/d'),
(13, 'IV/a'),
(14, 'IV/b'),
(15, 'IV/c'),
(16, 'IV/d'),
(17, 'IV/e');

-- --------------------------------------------------------

--
-- Table structure for table `tm_grup`
--

CREATE TABLE `tm_grup` (
  `id_grup` int(11) NOT NULL,
  `grup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_grup`
--

INSERT INTO `tm_grup` (`id_grup`, `grup`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tm_user`
--

CREATE TABLE `tm_user` (
  `Nama` varchar(100) NOT NULL,
  `NIP` bigint(20) NOT NULL,
  `Pangkat_gol_Rg` varchar(10) NOT NULL,
  `Pangkat_tmt` date NOT NULL,
  `Nama_Jabatan` varchar(50) NOT NULL,
  `Th_Jabatan` year(4) NOT NULL,
  `Th_Masa_Kerja` varchar(10) NOT NULL,
  `Bln_Masa_Kerja` varchar(10) NOT NULL,
  `Nama_lt_jabatan` varchar(30) NOT NULL,
  `Bln_thn_lt_jab` varchar(10) NOT NULL,
  `Jml_Jam_lt_jab` varchar(6) NOT NULL,
  `Nama_pend` varchar(50) NOT NULL,
  `Th_lulus_pend` varchar(10) NOT NULL,
  `Tkt_ijazah_pend` varchar(20) NOT NULL,
  `Usia` varchar(10) NOT NULL,
  `Ctt_mutasi_kepeg` varchar(30) NOT NULL,
  `Ctt_prestasi` varchar(30) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `Tgl_mutasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_user`
--

INSERT INTO `tm_user` (`Nama`, `NIP`, `Pangkat_gol_Rg`, `Pangkat_tmt`, `Nama_Jabatan`, `Th_Jabatan`, `Th_Masa_Kerja`, `Bln_Masa_Kerja`, `Nama_lt_jabatan`, `Bln_thn_lt_jab`, `Jml_Jam_lt_jab`, `Nama_pend`, `Th_lulus_pend`, `Tkt_ijazah_pend`, `Usia`, `Ctt_mutasi_kepeg`, `Ctt_prestasi`, `status`, `Tgl_mutasi`) VALUES
('ajfbjbua', 2515, 'IV/a', '2020-12-01', 'Jaksa Fungsional', 2019, '444', '08', 'Jaksa', '1999', '-', 'Univ. Abdurrahman Saleh Situbondo', '111', 'SH', '27', 'KEJARI BANYUWANGI', '-', 'Aktif', NULL),
('widiya', 234567, 'IV/b', '2020-12-01', 'Jaksa Fungsional', 2000, '37', '08', 'Jaksa', '2006', '-', 'Univ. Abdurrahman Saleh Situbondo', '2007', 'D3', '21', '-', '-', 'Aktif', NULL),
('DODDY SUSANTO, SH.', 196009091993101001, 'IV/a', '2017-04-01', 'Jaksa Fungsional', 2013, '26', '10', 'Jaksa', '1998', '-', 'Univ.Jember', '1987', 'SH', '59', 'KEJARI BANYUWANGI', '-', 'Aktif', '0000-00-00'),
('BUDI RAHARDJO, SH', 196009201982031010, 'IV/a', '2016-10-01', 'Jaksa Fungsional', 2018, '37', '10', 'Jaksa', '1999', '-', 'Univ. Abdurrahman Saleh Situbondo', '1997', 'SH', '59', 'KEJATI BANGKA BELITUNG', '-', 'Aktif', '0000-00-00'),
('ISWATI', 196304051984032001, 'III/b', '2004-04-01', 'Kaur Keuangan dan PNBP', 2011, '35', '07', '-', '-', '-', '-', '1982', 'SMA', '56', '-', '-', 'Aktif', '0000-00-00'),
('MUHAMMAD JUFRI, SH', 196407231990031001, 'IV/a', '2017-04-01', 'Jaksa Fungsional', 2018, '29', '10', 'Jaksa', '1998', '-', 'Univ. Abdurrahman Saleh Situbondo', '1997', 'SH', '55', 'KEJATI JATIM', '-', 'Aktif', '2020-12-16'),
('TOTOK SUGIHARTONO', 196602242000031003, 'III/a', '2016-04-01', 'Pembuat Laporan', 2011, '19', '07', '-', '-', '-', '-', '1986', 'SMA', '53', '-', '-', 'Aktif', '0000-00-00'),
('SLAMET ARIJADI, SH.', 196703271988031003, 'III/c', '2018-04-01', 'Kaur Perlengkapan', 2012, '31', '07', '-', '-', '-', 'Univ. Yosudarso Jember', '2006', 'SH', '52', '-', '-', 'Aktif', '0000-00-00'),
('RADANG HAISUK', 196705052000031003, 'III/a', '2016-04-01', 'Pengadministrasi Penanganan Perkara', 2011, '19', '07', '-', '-', '-', '-', '1987', 'SMA', '52', '-', '-', 'Aktif', '0000-00-00'),
('MOHAMMAD KABUL, SH.', 196707061992031002, 'IV/a', '2017-04-01', 'Jaksa Fungsional', 2012, '27', '07', 'Adum,Jaksa', '1998,2000', '-', 'Univ. Abdurrahman Saleh Situbondo', '1993', 'SH', '52', 'KEJARI MATARAM', '-', 'Aktif', '2020-12-16'),
('BAMBANG ARIF SUSANTO, SH.', 196709151996031001, 'IV/a', '2014-02-03', 'Jaksa Fungsional', 2018, '33', '07', 'Jaksa', '2000', '-', 'Univ. Merdeka Malang', '1991', 'SH', '52', 'KEJATI BANTEN', '-', 'Aktif', '0000-00-00'),
('PRIMA IDWAN MARIZA, SH, M.Hum', 196712081995031002, 'IV/b', '2015-04-01', 'Kajari Jember', 2019, '24', '10', 'Jaksa,Spama', '2006', '-', 'Sekolah Tinggi Ilmu Hukum IBLAM Jakarta', '2001', 'SH,M.Hum', '52', 'KEJATI SUMBAR', '-', 'Aktif', '0000-00-00'),
('YUNIWATI ANDAYANI', 196806132002122002, 'III/a', '2015-04-01', 'Operator Komputer', 2011, '16', '10', '-', '-', '-', '-', '1987', 'SMA', '49', '-', '-', 'Aktif', '0000-00-00'),
('I MADE ENDRA ARIANTO WIRAWAN, SH.', 196907201997031001, 'III/d', '2016-04-01', 'Kasi Pidum', 2018, '22', '10', 'Jaksa', '2004', '-', 'Univ. Mahasaraswati Mataram', '2001', 'SH', '50', 'KEJARI GIANYAR', '-', 'Aktif', '0000-00-00'),
('AGUS BUDIARTO,SH,MH', 196908281995031002, 'IV/a', '2018-04-01', 'Kasi Intelijen', 2018, '24', '10', 'Jaksa', '1999', '-', 'Univ. Putri Bangsa', '1993,2004', 'SH,MH', '50', 'KEJARI BOJONEGORO', '-', 'Aktif', '0000-00-00'),
('HERMAN NURAHMAN, SH.', 196910051999031003, 'III/d', '2017-10-01', 'Kasubag Pembinaan', 2018, '20', '10', 'Diklat Pim Tk.IV', '2013', '-', 'Univ. Abdurrahman Saleh Situbondo', '2003', 'SH', '50', 'KEJARI LUMAJANG', '-', 'Aktif', '0000-00-00'),
('SAFWAN WAHYOPIE, SH., MH.', 197004111993031001, 'IV/a', '2016-04-01', 'Jaksa Fungsional', 2016, '26', '10', 'Jaksa', '2004', '-', 'Univ. Moch. Sroedji Jember', '1998,2010', 'SH,MH', '49', 'KEJATI NTT', '-', 'Aktif', '0000-00-00'),
('DEWI MARIANI, SH.', 197102131991032001, 'III/b', '2012-10-01', 'Kaur Daskrimti dan Perpustakaan', 2011, '28', '07', '-', '-', '-', 'Univ. Moch. Sroedji Jember', '1997', 'SH', '48', '-', '-', 'Aktif', '0000-00-00'),
('JAYA INDAH, SH.', 197108101999031002, 'III/d', '2018-10-01', 'Pengolah Data Intelijen', 2018, '20', '07', '-', '-', '-', 'Univ. Emputantular', '2004', 'SH', '48', 'KEJAGUNG RI', '-', 'Aktif', '0000-00-00'),
('ADIK SRI SUMARSIH, S.H., M.M.', 197209161998032002, 'IV/a', '2017-04-01', 'Jaksa Fungsional', 2008, '21', '07', 'Jaksa', '2005', '-', 'Univ. Yogyakarta', '1996,2000', 'SH,MM', '47', 'KEJARI BONDOWOSO', '-', 'Aktif', '0000-00-00'),
('IWAN WICAKSONO, SH.', 197301052002121001, 'III/c', '2018-04-01', 'Pengelolah Tata Naskah', 2015, '17', '10', '-', '-', '-', 'Univ. Unmuh Jember', '1999', 'SH', '46', 'KEJARI KRAKSAAN', '-', 'Aktif', '0000-00-00'),
('ST. MUTIATIN KOLISAH, S.H., M.H.', 197309271999032002, 'IV/a', '2015-10-01', 'Jaksa Fungsional', 2018, '20', '07', 'Jaksa', '1991', '-', 'Univ. Diponegoro Semarang', '1997,2010', 'SH,MH', '46', 'KEJATI BANGKA BELITUNG', '-', 'Aktif', '0000-00-00'),
('TUSIRAN, SH.', 197512161997031001, 'III/c', '2018-04-01', 'Operator Komputer', 2015, '22', '07', '-', '-', '-', 'Univ. Moch. Sroedji Jember', '2008', 'SH', '44', 'KEJARI PUTUSIBAU', '-', 'Aktif', '0000-00-00'),
('DEDI JOANSYAH PUTRA, SH.', 197703011999031002, 'III/d', '2013-04-01', 'Jaksa Fungsional', 2015, '20', '10', 'Jaksa', '2008', '-', 'Univ. Prof. Dr Hazairin, SH Bengkulu', '2003', 'SH', '42', 'KEJATI JATENG', '-', 'Aktif', '0000-00-00'),
('HERDIAN RAHADI, SH.', 197708262003121000, 'III/d', '2017-04-01', 'Kasi Pidsus', 2018, '16', '10', 'Jaksa', '2007', '-', 'Univ. Jember', '2002', 'SH', '42', 'KEJARI BLORA', '-', 'Aktif', '0000-00-00'),
('RABEA WATIHELU', 197807152000032002, 'III/a', '2016-04-01', 'Pengadministrasi Penanganan Perkara', 2015, '19', '07', '-', '-', '-', '-', '1996', 'SMA', '41', 'KEJARI PURWAKARTA', '-', 'Aktif', '0000-00-00'),
('APRIANI CANDRA CHRISTIANA, SH.', 198004122003122002, 'III/d', '2016-04-01', 'Jaksa Fungsional', 2007, '16', '10', 'Jaksa', '2006', '-', 'Univ. Atmajaya', '2001', 'SH', '39', 'KEJATI NTB', '-', 'Aktif', '0000-00-00'),
('AHMAD NURIL ALAM, S.H., M.H.', 198007032003121005, 'IV/a', '2019-04-01', 'Kasi Datun', 2016, '16', '10', 'Jaksa', '2006', '-', 'Univ. Jember, Univ Airlangga', '2003,2004', 'SH,MH', '50', 'KEJARI PROBOLINGGO', '-', 'Aktif', '0000-00-00'),
('YAYUK DWI YANTARI, SH.', 198009242002122006, 'III/c', '2017-04-01', 'Pengadministrasi Penanganan Perkara', 2016, '17', '10', '-', '-', '-', 'Univ. Kadiri ', '2007', 'SH', '39', 'KEJATI JATIM', '-', 'Aktif', '0000-00-00'),
('FITRI RESMAWARDHANI, SH.', 198010072003122004, 'III/d', '2016-10-01', 'Jaksa Fungsional', 2007, '16', '10', 'Jaksa', '2006', '-', 'UII Yogyakarta', '2002', 'SH', '39', 'KEJARI INDRAMAYU', '-', 'Aktif', '0000-00-00'),
('AHMAD SUDAHLAN EFENDI,SH', 198012122002121006, 'III/c', '2019-04-01', 'Kaur Kepegawaian', 2011, '17', '10', '-', '-', '-', 'Univ. Moch. Sroedji Jember', '2007', 'SH', '39', 'KEJARI BONDOWOSO', '-', 'Aktif', '0000-00-00'),
('ENDAH PUSPITORINI, SH.', 198204192005012010, 'III/d', '2017-04-01', 'Jaksa Fungsional', 2010, '14', '09', 'Jaksa', '2006', '-', 'UII Yogyakarta', '2004', 'SH', '37', 'KEJARI MARABAHAN', '-', 'Aktif', '0000-00-00'),
('TOTOK WALIDI, SH.', 198206262008121001, 'III/c', '2016-04-01', 'Kasubsi Penyelidikan', 2016, '10', '10', 'Jaksa', '2009', '-', 'Univ.Jember', '2005', 'SH', '37', 'KEJARI ENDE', '-', 'Aktif', '0000-00-00'),
('R. YURI ANDINA PUTRA, SH.', 198301042007031001, 'III/c', '2014-10-01', 'Kasubsi Penuntutan', 2015, '12', '07', 'Jaksa', '2004', '-', 'Univ.Jember', '2006', 'SH', '36', 'KEJARI LARANTUKA', '-', 'Aktif', '0000-00-00'),
('SITI SUMARTININGSIH, SH.', 198303222003122001, 'III/b', '2017-04-01', 'Jaksa Fungsional', 2018, '16', '10', '-', '-', '-', 'Univ. Udayana Bali', '2012', 'SH', '36', 'KEJARI TAKALAR', '-', 'Aktif', '0000-00-00'),
('EVANA VERAWATI', 198305202002122001, 'III/a', '2015-04-01', 'Kaur Tata Usaha dan Perpustakaan', 2014, '16', '10', '-', '-', '-', '-', '2001', 'SMA', '34', 'KEJAGUNG RI', '-', 'Aktif', '0000-00-00'),
('DIAN AKBAR WICAKSANA, SH.', 198311302009121002, 'III/c', '2018-10-01', 'Jaksa Fungsional', 2018, '09', '10', '-', '-', '-', 'Univ. Sebelas Maret Surakarta', '2008', 'SH', '36', 'KEJARI SUKOHARJO', '-', 'Aktif', '0000-00-00'),
('TRIYONO YULIANTO, SH., MH.', 198404072008121001, 'III/d', '2011-04-01', 'Kasi Pengelolaan BB dan BR', 2018, '11', '07', 'Jaksa', '2008', '-', 'Univ. Islam Riau', '2000', 'SH,MH', '35', 'KEJARI MOJOKERTO', '-', 'Aktif', '0000-00-00'),
('HELMI WAHYU HUTAMA, SH.', 198410102008121001, 'III/c', '2017-10-01', 'Staff Intelijen', 2017, '09', '10', 'Jaksa', '-', '-', 'Univ. Airlangga', '2008', 'SH', '35', 'KEJARI JEMBRANA', '-', 'Aktif', '0000-00-00'),
('TAUFIQURRAHMAN, SH.', 198412092005011002, 'III/b', '2017-04-01', 'Pengawal Tahanan', 2011, '14', '09', '-', '-', '-', 'Univ. Moch. Sroedji Jember', '2003', 'SH', '35', '-', '-', 'Aktif', '0000-00-00'),
('LUH PUTU DENNY WITARI, SH.', 198501052009122004, 'III/c', '2017-04-01', 'Kasubsi Pra Penuntutan', 2018, '09', '10', '-', '2013', '990', 'Univ. Warmadewa', '2007', 'SH', '34', 'KEJARI SIKKA ', '-', 'Aktif', '0000-00-00'),
('AHMAD FARUQ TAUFIKUR RAHMAN', 198505232005011003, 'II/c', '2014-04-01', 'Operator Komputer', 2015, '14', '09', '-', '-', '-', '-', '2003', 'SMA', '32', 'KEJARI NUNUKAN', '-', 'Aktif', '0000-00-00'),
('NATTY AYUNINGDIASTUTI ARIF, SH.', 198511112008122003, 'III/c', '2015-10-01', 'Jaksa Fungsional', 2014, '10', '10', 'Jaksa', '-', '-', 'Univ.Jember', '2008', 'SH', '34', 'KEJATI RAYA', '-', 'Aktif', '0000-00-00'),
('DEWI VINANTI NURYULIANASARI, SH.', 198607102008122001, 'III/c', '2017-04-01', 'Staff Intelijen', 2016, '10', '10', '-', '-', '-', 'Univ.Jember', '2008', 'SH', '33', 'KEJARI JAKARTA', '-', 'Aktif', '0000-00-00'),
('GEDION ARDANA RESWARI, SH., MH.', 198806292014031003, 'III/b', '2018-04-01', 'Kasubsi Eksekusi dan Eksaminasi', 2018, '5', '10', 'Jaksa', '-', '-', 'Univ.Jember', '2010,2014', 'SH,MH', '31', 'KEJARI JEMBRANA', '-', 'Aktif', '0000-00-00'),
('NGURAH WAHYU RESTA, SH. Mkn', 199008202014031001, 'III/b', '2017-04-01', 'Kasubsi Ideologi, Politik', 2017, '5', '10', 'Jaksa', '-', '-', 'Universitas Udayana', '2012', 'SH,Mkn', '29', 'KEJARI GIANYAR', '-', 'Aktif', '0000-00-00'),
('DANANG HADI WIJOYO, A.Md.', 199202072015021001, 'II/d', '2016-04-01', 'Penyusunan Laporan Keuangan', 2018, '19', '10', '-', '-', '-', 'Institut Teknologi Bandung', '2014', 'D3', '27', 'KEJARI BONDOWOSO', '-', 'Aktif', '0000-00-00'),
('BOGEY PRIMA ADITYA', 199206192010121001, 'II/c', '2015-04-01', 'Pengemudi', 2010, '08', '10', '-', '-', '-', '-', '2010', 'SMA', '25', '-', '-', 'Aktif', '0000-00-00'),
('RANGGA KURNIADI SETIAWAN', 199501102015021001, 'II/b', '2015-02-01', 'Bendahara PNBP', 2015, '04', '08', '-', '-', '-', '-', '2013', 'SMA', '22', '-', '-', 'Aktif', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `register_date`) VALUES
(5, 'Musbihatul c', 'chorirohmusbihatul@gmail.com', 'Musbi', '202cb962ac59075b964b07152d234b70', '2020-11-02 02:03:11'),
(6, 'Widiya', 'nurwidiyanti15@gmail.com', 'Widiya', '08f90c1a417155361a5c4b8d297e0d78', '2020-11-02 03:51:17'),
(7, 'Musbihatul choriroh', 'musbihatul@gmail.com', 'Musbih', '$2y$10$3GGev9XIdeRoRJ4iHG4wOusErphys6FpbRpk8lgHifEFI460.f2jm', '2020-12-06 08:14:20'),
(8, 'Kepegawaian', 'kepegawaian@gmail.com', 'kepegawaian', '$2y$10$NPu.9eLysaU6TAQkz8UU9.xzfFpsRZZAAldEhLEDR0XCmGgoolfl6', '2020-12-10 14:03:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_grup`
--
ALTER TABLE `tm_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `tm_user`
--
ALTER TABLE `tm_user`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tm_grup`
--
ALTER TABLE `tm_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
