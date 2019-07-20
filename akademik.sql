-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jul 2019 pada 15.44
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(30) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `tgl_lahir`, `no_tlp`, `alamat`, `email`, `password`, `jabatan`) VALUES
('', '', '0000-00-00', 0, '', '', '', ''),
('0017067306', 'Ely Mulyadi, SE, M.Kom', '0000-00-00', 0, 'Perum Demang Mulia A16 Jember', 'elimulyadi@gmail.com\r\n', '0017067306', 'Dosen'),
('19700831 199803 1 001', 'Moch. Munih Dian W, S.Kom, M.T', '1970-08-31', 0, '', '', '0031087001', 'Lektor'),
('19700929 200312 1 001', 'Yogiswara, ST, MT', '1970-09-29', 0, 'Perum taman gading EE 19', 'yogipoltek@gmail.com\r\n', '0029097005', 'Lektor'),
('19701128 200312 1 001', 'Hariyono Rakhmad, S.Pd, M.Kom', '1970-11-28', 0, '', '', '0028117002', 'Lektor'),
('19710408 200112 1 003', 'Wahyu Kurnia Dewanto, S.Kom, MT', '1971-04-08', 0, 'Perumahan Kaliurang Cluster B1 Jember', 'wahyu.k.dewanto@gmail.com\r\n', '0008047103', 'Lektor'),
('19711009 200312 1 001', 'Denny Trias Utomo, S.Si, MT', '1971-10-09', 0, '', '', '0009107104', 'Lektor'),
('19711115 199802 1 001', 'Adi Heru Utomo, S.Kom, M.Kom', '1971-11-15', 0, '', '', '0015117106', 'Lektor Kepala'),
('19730831 200801 1 003', 'Agus Purwadi, ST.MT', '1973-08-31', 0, 'Dusun Krajan Timur RT.03 RW.09', '', '', 'Lektor'),
('19740519 200312 1 002', 'Nugroho Setyo Wibowo, ST. MT', '1974-05-19', 0, 'Perum. Pesona Regency AC-13 Patrang Jember', 'nugroho@polije.ac.id\r\n', '0019057403', 'Lektor Kepala'),
('19770929 200501 1 003', 'Didit Rahmat Hartadi, S.Kom, MT', '1977-09-29', 0, 'Panjilaras Indah no. 69 Arjasa Jember', 'diditrhartadi@polije.ac.id\r\n', '0029097704', 'Lektor'),
('19780816 200501 1 002', 'Beni Widiawan, S.ST, MT', '1978-08-16', 0, '', '', '0016087806', 'Lektor'),
('19780817 200312 1 005', 'Agus Hariyanto, ST, M.Kom', '1978-08-17', 0, '', '', '0017087804', 'Lektor Kepala'),
('19780819 200501 2 001', 'Ika Widiastuti, S.ST, MT', '1978-08-19', 0, 'Perum BTN Mastrip BB-1D', 'ika_widiastuti@polije.ac.id\r\n', '0019087803', 'Lektor'),
('19780908 200501 1 001', 'Denny Wijanarko, ST, MT', '1978-09-08', 0, 'Perum. Taman Gading AM 17 Jember', 'dennywijanarko@gmail.com\r\n', '0008097803', 'Lektor'),
('19781011 200501 2 002', 'Elly Antika, ST, M.Kom', '1978-10-11', 0, 'Perum Mastrip EE -10 Jember', 'ellyantika.niam@gmail.com\r\n', '0011107802', 'Lektor'),
('19790703 200312 1 001', 'Surateno, S.Kom., M.Kom', '1979-07-03', 0, 'Jl. Hayam Wuruk XIX A-160A Jember', 'ratno@polije.ac.id\r\n', '0003077902', 'Lektor Kepala'),
('19790921 200501 1 001', 'I Putu Dody Lesmana, ST, MT', '1979-09-21', 0, '', '', '0021097903', 'Lektor'),
('19800517 200812 1 002', 'Dwi Putro Sarwo Setyohadi, S.Kom, M.Kom', '1980-05-17', 0, 'Perum PTP Kaliurang V3 Jember', 'dwi.putro.sarwo.setyohadi@gmail.com\r\n', '0017058003', 'Lektor'),
('19801212 200501 1 001', 'Prawidya Destarianto, S.Kom, M.T', '1980-12-12', 0, 'Jl Kaliurang Griya Permata Kampus C9 Jember', 'prawidyadestarianto@gmail.com\r\n', '0012128001', 'Lektor'),
('19810115 200501 1 011', 'Nurul Zainal Fanani, S.ST, MT', '1981-01-15', 0, '', '', '0015018103', 'Lektor'),
('19810615 200604 1 002', 'Syamsul Arifin, S.Kom, M.Cs', '1981-06-15', 0, 'Perum Pesona Regency No AE 12 Patrang Jember', 'sy4v1.arifin@gmail.com\r\n', '0015068202', 'Lektor'),
('19830109 201803 1 001', 'Hermawan Arief Putranto, ST, MT', '1983-01-09', 0, 'Jl Kaliurang Cluster Blok A no 12', 'mistercloud@gmail.com\r\n', '', ''),
('19830203 200604 1 003', 'Hendra Yufit Riskiawan, S.Kom, M.Cs', '1983-02-03', 0, 'Griya Permata Kampus B7', 'hendra.yufit@gmail.com\r\n', '0003028302', 'Lektor'),
('19840625 201504 1 004', 'Bekti Maryuni Susanto, S.Pd.T, M.Kom', '1984-06-25', 0, 'Perumahan Bumi Tegal Besar EF10 Jember', 'bekti@polije.ac.id\r\n', '0025068404', 'Asisten Ahli'),
('19851031 201803 1 001', 'Victor Phoa, S.Si, M.Cs', '1985-10-31', 0, 'JL. MASTRIP III/3', '', '', ''),
('19851128 200812 1 002', 'Aji Seto Arifianto, S.ST., M.T.', '1985-11-28', 0, 'Jl. Belimbing No.13 Jember Lor, Patrang, Jember', 'ajiseto@gmail.com\r\n', '0028118502', 'Asisten Ahli'),
('19860319 201403 1 001', 'Fendik Eko Purnomo, S.Pd, MT', '1986-03-19', 0, '', 'fendik_eko@polije.ac.id\r\n', '8899010016', ''),
('19860609 200812 2 004', 'Nanik Anita Mukhlisoh, S.ST, MT', '1986-06-09', 0, '', '', '0009068601', 'Asisten Ahli'),
('19860802 201504 2 002', 'Ratih Ayuninghemi, S.ST, M.Kom', '1986-08-02', 0, 'Jalan Halmahera III No.1 Sumbersari Jember', 'ratih_hemi@polije.ac.id\r\n', '0702088601', 'Asisten Ahli'),
('19880117 201903 1 008', 'I Gede Wiryawan, S.Kom., M.Kom.', '1988-01-17', 0, '', '', '', ''),
('19880702 201610 1 001', 'Husin, S.Kom, M.MT', '1988-07-02', 0, '', '', '', 'PPNPN'),
('19890329 201503 1 001', 'Taufiq Rizaldi, S.ST., MT', '1989-03-29', 0, 'Graha Permata Indah A-22', 'taufiq_r@polije.ac.id\r\n', '8815110016', ''),
('19890710 201509 1 001', 'Ery Setiawan Jullev A, S.Kom, M.Cs', '1989-07-10', 0, 'Jl.sriwijaya I no 13', 'setiyawanjullev@gmail.com\r\n', '8891500016', ''),
('19900227 201803 2 001', 'Trismayanti Dwi P, S.Kom, M.Cs', '1990-02-27', 0, 'Argopuro 35 patemon tanggul jember', 'trismayantidwipuspitasari@gmail.com\r\n', '8868110016', ''),
('19910315 201703 1 001', 'Syamsiar Kautsar, S.ST, MT', '1991-03-15', 0, '', '', '', ''),
('19910429 201903 1 011', 'Faisal Lutfi Afriansyah, S.Kom, MT', '1991-04-29', 0, 'Perum Graha Permata Indah AB-40 Jember', 'faisal.lutfi@polije.ac.id\r\n', '0029049102', ''),
('19911211 201803 1 001', 'Khafidurrohman Agustianto, S.Pd, M.Eng', '1991-12-11', 0, 'Perum. Grisimai CG. 16, Ponorogo, Jawa Timur', 'khafid@polije.ac.id\r\n', '', ''),
('19920302 201803 2 001', 'Zilvanhisna Emka Fitri, ST. MT', '1992-03-02', 0, 'JL. BATU RADEN 14', '', '', ''),
('19920528 201803 2 001', 'Bety Etikasari, S.Pd, M.Pd', '1992-05-28', 0, 'Gang Sumur Bor No.31, Kaliurang, Jember', 'bety.etikasari@gmail.com\r\n', '', ''),
('19940812 201903 1 013', 'Mukhamad Angga Gumilang, S. Pd., M. Eng.', '1994-08-12', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `kd_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `jenjang_pendidikan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(15) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tlp` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `angkatan` int(8) NOT NULL,
  `password` varchar(30) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `jenis_kel`, `tgl_lahir`, `tlp`, `alamat`, `email`, `angkatan`, `password`, `prodi`) VALUES
('e41151776', 'boobi', 'L', '2019-07-16', 8222222, 'mojokertoo', 'bobi2gmail.com', 2015, '', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kd_jurusan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `kd_jurusan` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
