-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2020 pada 08.11
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_diri`
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
-- Dumping data untuk tabel `data_diri`
--

INSERT INTO `data_diri` (`id`, `NIP`, `Alamat`, `TTL`, `Status_pernikahan`, `No_telp`, `Jenis_kelamin`, `Agama`, `Gambar`) VALUES
(1, 196304051984032001, 'a', 'a', 'a', '1', '', 'a', ''),
(2, 196009091993101001, 'a', 'a', 'a', '1', 'Laki-laki', 'Islam', 'Diskon.jpg'),
(3, 196009201982031010, 'asas', 'sas', 'sas', 'sas', 'Laki-laki', '1', 'gambar_4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id` int(11) NOT NULL,
  `golongan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `golongan`
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
(10, 'III/a'),
(11, 'III/b'),
(12, 'III/c'),
(13, 'III/d'),
(14, 'IV/a'),
(15, 'IV/b'),
(16, 'IV/c'),
(17, 'IV/d'),
(18, 'IV/e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_grup`
--

CREATE TABLE `tm_grup` (
  `id_grup` int(11) NOT NULL,
  `grup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_grup`
--

INSERT INTO `tm_grup` (`id_grup`, `grup`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_user`
--

CREATE TABLE `tm_user` (
  `No` int(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `NIP` bigint(20) NOT NULL,
  `Pangkat_gol_Rg` varchar(10) NOT NULL,
  `Pangkat_tmt` date NOT NULL,
  `Nama_Jabatan` varchar(50) NOT NULL,
  `Th_Jabatan` varchar(10) NOT NULL,
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
  `Tgl_mutasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_user`
--

INSERT INTO `tm_user` (`No`, `Nama`, `NIP`, `Pangkat_gol_Rg`, `Pangkat_tmt`, `Nama_Jabatan`, `Th_Jabatan`, `Th_Masa_Kerja`, `Bln_Masa_Kerja`, `Nama_lt_jabatan`, `Bln_thn_lt_jab`, `Jml_Jam_lt_jab`, `Nama_pend`, `Th_lulus_pend`, `Tkt_ijazah_pend`, `Usia`, `Ctt_mutasi_kepeg`, `Ctt_prestasi`, `status`, `Tgl_mutasi`) VALUES
(3, 'DODDY SUSANTO, SH.', 196009091993101001, 'IV/a', '2017-04-01', 'Jaksa Fungsional', '2013', '26', '10', 'Jaksa', '1998', '-', 'Univ.Jember', '1987', 'SH', '59', 'KEJARI BANYUWANGI', '-', 'Aktif', '0000-00-00'),
(2, 'BUDI RAHARDJO, SH', 196009201982031010, 'IV/a', '2016-10-01', 'Jaksa Fungsional', '2018', '37', '10', 'Jaksa', '1999', '-', 'Univ. Abdurrahman Saleh Situbondo', '1997', 'SH', '59', 'KEJATI BANGKA BELITUNG', '-', 'Aktif', '0000-00-00'),
(35, 'ISWATI', 196304051984032001, 'III/b', '2004-04-01', 'Kaur Keuangan dan PNBP', '2011', '35', '07', '-', '-', '-', '-', '1982', 'SMA', '56', '-', '-', 'Aktif', '0000-00-00'),
(4, 'MUHAMMAD JUFRI, SH', 196407231990031001, 'IV/a', '2017-04-01', 'Jaksa Fungsional', '2018', '29', '10', 'Jaksa', '1998', '-', 'Univ. Abdurrahman Saleh Situbondo', '1997', 'SH', '55', 'KEJATI JATIM', '-', 'Aktif', '0000-00-00'),
(39, 'TOTOK SUGIHARTONO', 196602242000031003, 'III/a', '2016-04-01', 'Pembuat Laporan', '2011', '19', '07', '-', '-', '-', '-', '1986', 'SMA', '53', '-', '-', 'Aktif', '0000-00-00'),
(27, 'SLAMET ARIJADI, SH.', 196703271988031003, 'III/c', '2018-04-01', 'Kaur Perlengkapan', '2012', '31', '07', '-', '-', '-', 'Univ. Yosudarso Jember', '2006', 'SH', '52', '-', '-', 'Aktif', '0000-00-00'),
(40, 'RADANG HAISUK', 196705052000031003, 'III/a', '2016-04-01', 'Pengadministrasi Penanganan Perkara', '2011', '19', '07', '-', '-', '-', '-', '1987', 'SMA', '52', '-', '-', 'Aktif', '0000-00-00'),
(6, 'MOHAMMAD KABUL, SH.', 196707061992031002, 'IV/a', '2017-04-01', 'Jaksa Fungsional', '2012', '27', '07', 'Adum,Jaksa', '1998,2000', '-', 'Univ. Abdurrahman Saleh Situbondo', '1993', 'SH', '52', 'KEJARI MATARAM', '-', 'Aktif', '0000-00-00'),
(9, 'BAMBANG ARIF SUSANTO, SH.', 196709151996031001, 'IV/a', '2014-02-03', 'Jaksa Fungsional', '2018', '33', '07', 'Jaksa', '2000', '-', 'Univ. Merdeka Malang', '1991', 'SH', '52', 'KEJATI BANTEN', '-', 'Aktif', '0000-00-00'),
(1, 'PRIMA IDWAN MARIZA, SH, M.Hum', 196712081995031002, 'IV/b', '2015-04-01', 'Kajari Jember', '2019', '24', '10', 'Jaksa,Spama', '2006', '-', 'Sekolah Tinggi Ilmu Hukum IBLAM Jakarta', '2001', 'SH,M.Hum', '52', 'KEJATI SUMBAR', '-', 'Aktif', '0000-00-00'),
(42, 'YUNIWATI ANDAYANI', 196806132002122002, 'III/a', '2015-04-01', 'Operator Komputer', '2011', '16', '10', '-', '-', '-', '-', '1987', 'SMA', '49', '-', '-', 'Aktif', '0000-00-00'),
(13, 'I MADE ENDRA ARIANTO WIRAWAN, SH.', 196907201997031001, 'III/d', '2016-04-01', 'Kasi Pidum', '2018', '22', '10', 'Jaksa', '2004', '-', 'Univ. Mahasaraswati Mataram', '2001', 'SH', '50', 'KEJARI GIANYAR', '-', 'Aktif', '0000-00-00'),
(8, 'AGUS BUDIARTO,SH,MH', 196908281995031002, 'IV/a', '2018-04-01', 'Kasi Intelijen', '2018', '24', '10', 'Jaksa', '1999', '-', 'Univ. Putri Bangsa', '1993,2004', 'SH,MH', '50', 'KEJARI BOJONEGORO', '-', 'Aktif', '0000-00-00'),
(12, 'HERMAN NURAHMAN, SH.', 196910051999031003, 'III/d', '2017-10-01', 'Kasubag Pembinaan', '2018', '20', '10', 'Diklat Pim Tk.IV', '2013', '-', 'Univ. Abdurrahman Saleh Situbondo', '2003', 'SH', '50', 'KEJARI LUMAJANG', '-', 'Aktif', '0000-00-00'),
(10, 'SAFWAN WAHYOPIE, SH., MH.', 197004111993031001, 'IV/a', '2016-04-01', 'Jaksa Fungsional', '2016', '26', '10', 'Jaksa', '2004', '-', 'Univ. Moch. Sroedji Jember', '1998,2010', 'SH,MH', '49', 'KEJATI NTT', '-', 'Aktif', '0000-00-00'),
(36, 'DEWI MARIANI, SH.', 197102131991032001, 'III/b', '2012-10-01', 'Kaur Daskrimti dan Perpustakaan', '2011', '28', '07', '-', '-', '-', 'Univ. Moch. Sroedji Jember', '1997', 'SH', '48', '-', '-', 'Aktif', '0000-00-00'),
(15, 'JAYA INDAH, SH.', 197108101999031002, 'III/d', '2018-10-01', 'Pengolah Data Intelijen', '2018', '20', '07', '-', '-', '-', 'Univ. Emputantular', '2004', 'SH', '48', 'KEJAGUNG RI', '-', 'Aktif', '0000-00-00'),
(7, 'ADIK SRI SUMARSIH, S.H., M.M.', 197209161998032002, 'IV/a', '2017-04-01', 'Jaksa Fungsional', '2008', '21', '07', 'Jaksa', '2005', '-', 'Univ. Yogyakarta', '1996,2000', 'SH,MM', '47', 'KEJARI BONDOWOSO', '-', 'Aktif', '0000-00-00'),
(30, 'IWAN WICAKSONO, SH.', 197301052002121001, 'III/c', '2018-04-01', 'Pengelolah Tata Naskah', '2015', '17', '10', '-', '-', '-', 'Univ. Unmuh Jember', '1999', 'SH', '46', 'KEJARI KRAKSAAN', '-', 'Aktif', '0000-00-00'),
(5, 'ST. MUTIATIN KOLISAH, S.H., M.H.', 197309271999032002, 'IV/a', '2015-10-01', 'Jaksa Fungsional', '2018', '20', '07', 'Jaksa', '1991', '-', 'Univ. Diponegoro Semarang', '1997,2010', 'SH,MH', '46', 'KEJATI BANGKA BELITUNG', '-', 'Aktif', '0000-00-00'),
(29, 'TUSIRAN, SH.', 197512161997031001, 'III/c', '2018-04-01', 'Operator Komputer', '2015', '22', '07', '-', '-', '-', 'Univ. Moch. Sroedji Jember', '2008', 'SH', '44', 'KEJARI PUTUSIBAU', '-', 'Aktif', '0000-00-00'),
(16, 'DEDI JOANSYAH PUTRA, SH.', 197703011999031002, 'III/d', '2013-04-01', 'Jaksa Fungsional', '2015', '20', '10', 'Jaksa', '2008', '-', 'Univ. Prof. Dr Hazairin, SH Bengkulu', '2003', 'SH', '42', 'KEJATI JATENG', '-', 'Aktif', '0000-00-00'),
(17, 'HERDIAN RAHADI, SH.', 197708262003121000, 'III/d', '2017-04-01', 'Kasi Pidsus', '2018', '16', '10', 'Jaksa', '2007', '-', 'Univ. Jember', '2002', 'SH', '42', 'KEJARI BLORA', '-', 'Aktif', '0000-00-00'),
(41, 'RABEA WATIHELU', 197807152000032002, 'III/a', '2016-04-01', 'Pengadministrasi Penanganan Perkara', '2015', '19', '07', '-', '-', '-', '-', '1996', 'SMA', '41', 'KEJARI PURWAKARTA', '-', 'Aktif', '0000-00-00'),
(18, 'APRIANI CANDRA CHRISTIANA, SH.', 198004122003122002, 'III/d', '2016-04-01', 'Jaksa Fungsional', '2007', '16', '10', 'Jaksa', '2006', '-', 'Univ. Atmajaya', '2001', 'SH', '39', 'KEJATI NTB', '-', 'Aktif', '0000-00-00'),
(11, 'AHMAD NURIL ALAM, S.H., M.H.', 198007032003121005, 'IV/a', '2019-04-01', 'Kasi Datun', '2016', '16', '10', 'Jaksa', '2006', '-', 'Univ. Jember, Univ Airlangga', '2003,2004', 'SH,MH', '50', 'KEJARI PROBOLINGGO', '-', 'Aktif', '0000-00-00'),
(31, 'YAYUK DWI YANTARI, SH.', 198009242002122006, 'III/c', '2017-04-01', 'Pengadministrasi Penanganan Perkara', '2016', '17', '10', '-', '-', '-', 'Univ. Kadiri ', '2007', 'SH', '39', 'KEJATI JATIM', '-', 'Aktif', '0000-00-00'),
(19, 'FITRI RESMAWARDHANI, SH.', 198010072003122004, 'III/d', '2016-10-01', 'Jaksa Fungsional', '2007', '16', '10', 'Jaksa', '2006', '-', 'UII Yogyakarta', '2002', 'SH', '39', 'KEJARI INDRAMAYU', '-', 'Aktif', '0000-00-00'),
(32, 'AHMAD SUDAHLAN EFENDI,SH', 198012122002121006, 'III/c', '2019-04-01', 'Kaur Kepegawaian', '2011', '17', '10', '-', '-', '-', 'Univ. Moch. Sroedji Jember', '2007', 'SH', '39', 'KEJARI BONDOWOSO', '-', 'Aktif', '0000-00-00'),
(20, 'ENDAH PUSPITORINI, SH.', 198204192005012010, 'III/d', '2017-04-01', 'Jaksa Fungsional', '2010', '14', '09', 'Jaksa', '2006', '-', 'UII Yogyakarta', '2004', 'SH', '37', 'KEJARI MARABAHAN', '-', 'Aktif', '0000-00-00'),
(23, 'TOTOK WALIDI, SH.', 198206262008121001, 'III/c', '2016-04-01', 'Kasubsi Penyelidikan', '2016', '10', '10', 'Jaksa', '2009', '-', 'Univ.Jember', '2005', 'SH', '37', 'KEJARI ENDE', '-', 'Aktif', '0000-00-00'),
(21, 'R. YURI ANDINA PUTRA, SH.', 198301042007031001, 'III/c', '2014-10-01', 'Kasubsi Penuntutan', '2015', '12', '07', 'Jaksa', '2004', '-', 'Univ.Jember', '2006', 'SH', '36', 'KEJARI LARANTUKA', '-', 'Aktif', '0000-00-00'),
(37, 'SITI SUMARTININGSIH, SH.', 198303222003122001, 'III/b', '2017-04-01', 'Jaksa Fungsional', '2018', '16', '10', '-', '-', '-', 'Univ. Udayana Bali', '2012', 'SH', '36', 'KEJARI TAKALAR', '-', 'Aktif', '0000-00-00'),
(43, 'EVANA VERAWATI', 198305202002122001, 'III/a', '2015-04-01', 'Kaur Tata Usaha dan Perpustakaan', '2014', '16', '10', '-', '-', '-', '-', '2001', 'SMA', '34', 'KEJAGUNG RI', '-', 'Aktif', '0000-00-00'),
(25, 'DIAN AKBAR WICAKSANA, SH.', 198311302009121002, 'III/c', '2018-10-01', 'Jaksa Fungsional', '2018', '09', '10', '-', '-', '-', 'Univ. Sebelas Maret Surakarta', '2008', 'SH', '36', 'KEJARI SUKOHARJO', '-', 'Aktif', '0000-00-00'),
(14, 'TRIYONO YULIANTO, SH., MH.', 198404072008121001, 'III/d', '2011-04-01', 'Kasi Pengelolaan BB dan BR', '2018', '11', '07', 'Jaksa', '2008', '-', 'Univ. Islam Riau', '2000', 'SH,MH', '35', 'KEJARI MOJOKERTO', '-', 'Aktif', '0000-00-00'),
(26, 'HELMI WAHYU HUTAMA, SH.', 198410102008121001, 'III/c', '2017-10-01', 'Staff Intelijen', '2017', '09', '10', 'Jaksa', '-', '-', 'Univ. Airlangga', '2008', 'SH', '35', 'KEJARI JEMBRANA', '-', 'Aktif', '0000-00-00'),
(38, 'TAUFIQURRAHMAN, SH.', 198412092005011002, 'III/b', '2017-04-01', 'Pengawal Tahanan', '2011', '14', '09', '-', '-', '-', 'Univ. Moch. Sroedji Jember', '2003', 'SH', '35', '-', '-', 'Aktif', '0000-00-00'),
(24, 'LUH PUTU DENNY WITARI, SH.', 198501052009122004, 'III/c', '2017-04-01', 'Kasubsi Pra Penuntutan', '2018', '09', '10', '-', '2013', '990', 'Univ. Warmadewa', '2007', 'SH', '34', 'KEJARI SIKKA ', '-', 'Aktif', '0000-00-00'),
(45, 'AHMAD FARUQ TAUFIKUR RAHMAN', 198505232005011003, 'II/c', '2014-04-01', 'Operator Komputer', '2015', '14', '09', '-', '-', '-', '-', '2003', 'SMA', '32', 'KEJARI NUNUKAN', '-', 'Aktif', '0000-00-00'),
(22, 'NATTY AYUNINGDIASTUTI ARIF, SH.', 198511112008122003, 'III/c', '2015-10-01', 'Jaksa Fungsional', '2014', '10', '10', 'Jaksa', '-', '-', 'Univ.Jember', '2008', 'SH', '34', 'KEJATI RAYA', '-', 'Aktif', '0000-00-00'),
(28, 'DEWI VINANTI NURYULIANASARI, SH.', 198607102008122001, 'III/c', '2017-04-01', 'Staff Intelijen', '2016', '10', '10', '-', '-', '-', 'Univ.Jember', '2008', 'SH', '33', 'KEJARI JAKARTA', '-', 'Aktif', '0000-00-00'),
(33, 'GEDION ARDANA RESWARI, SH., MH.', 198806292014031003, 'III/b', '2018-04-01', 'Kasubsi Eksekusi dan Eksaminasi', '2018', '5', '10', 'Jaksa', '-', '-', 'Univ.Jember', '2010,2014', 'SH,MH', '31', 'KEJARI JEMBRANA', '-', 'Aktif', '0000-00-00'),
(34, 'NGURAH WAHYU RESTA, SH. Mkn', 199008202014031001, 'III/b', '2017-04-01', 'Kasubsi Ideologi, Politik', '2017', '5', '10', 'Jaksa', '-', '-', 'Universitas Udayana', '2012', 'SH,Mkn', '29', 'KEJARI GIANYAR', '-', 'Aktif', '0000-00-00'),
(44, 'DANANG HADI WIJOYO, A.Md.', 199202072015021001, 'II/d', '2016-04-01', 'Penyusunan Laporan Keuangan', '2018', '19', '10', '-', '-', '-', 'Institut Teknologi Bandung', '2014', 'D3', '27', 'KEJARI BONDOWOSO', '-', 'Aktif', '0000-00-00'),
(46, 'BOGEY PRIMA ADITYA', 199206192010121001, 'II/c', '2015-04-01', 'Pengemudi', '2010', '08', '10', '-', '-', '-', '-', '2010', 'SMA', '25', '-', '-', 'Aktif', '0000-00-00'),
(47, 'RANGGA KURNIADI SETIAWAN', 199501102015021001, 'II/b', '2015-02-01', 'Bendahara PNBP', '2015', '04', '08', '-', '-', '-', '-', '2013', 'SMA', '22', '-', '-', 'Aktif', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `user`
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
-- Indeks untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tm_grup`
--
ALTER TABLE `tm_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indeks untuk tabel `tm_user`
--
ALTER TABLE `tm_user`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tm_grup`
--
ALTER TABLE `tm_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tm_user`
--
ALTER TABLE `tm_user`
  MODIFY `NIP` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199501102015021002;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
