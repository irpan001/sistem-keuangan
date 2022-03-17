-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Mar 2022 pada 04.36
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemkeuangan1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lainnya`
--

CREATE TABLE `lainnya` (
  `id_lainnya` int(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `tgl_lainnya` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lainnya`
--

INSERT INTO `lainnya` (`id_lainnya`, `keterangan`, `jumlah`, `tgl_lainnya`) VALUES
(2, 'Dana BOS', 10000000, '2020-05-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukanawal`
--

CREATE TABLE `pemasukanawal` (
  `id_pemasukanawal` int(11) NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `jumlah` int(20) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemasukanawal`
--

INSERT INTO `pemasukanawal` (`id_pemasukanawal`, `tgl_pemasukan`, `jumlah`, `id_siswa`) VALUES
(12, '2020-05-16', 200000, 24),
(13, '2020-05-16', 200000, 25),
(14, '2020-05-16', 200000, 20),
(15, '2020-07-14', 200000, 27),
(16, '2020-07-16', 1016000, 22),
(18, '2022-03-01', 400000, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukanawalb`
--

CREATE TABLE `pemasukanawalb` (
  `id_pemasukanawalb` int(11) NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `jumlah` int(20) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemasukanawalb`
--

INSERT INTO `pemasukanawalb` (`id_pemasukanawalb`, `tgl_pemasukan`, `jumlah`, `id_siswa`) VALUES
(4, '2020-04-16', 200000, 1),
(5, '2020-05-17', 200000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukanspp`
--

CREATE TABLE `pemasukanspp` (
  `id_pemasukanspp` int(11) NOT NULL,
  `bulan` text NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `jumlah` int(20) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemasukanspp`
--

INSERT INTO `pemasukanspp` (`id_pemasukanspp`, `bulan`, `tgl_pemasukan`, `jumlah`, `id_siswa`) VALUES
(73, 'Juli', '2020-07-16', 30000, 1),
(75, 'Juli', '2020-07-16', 30000, 12),
(76, 'Juli', '2020-07-16', 30000, 10),
(77, 'Agustus', '2020-08-17', 30000, 10),
(78, 'Agustus', '2021-08-23', 30000, 1),
(79, 'Mei', '2020-05-15', 30000, 13),
(80, 'Agustus', '2020-08-05', 30000, 6),
(81, 'Maret', '2022-03-01', 30000, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `tgl_pengeluaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `keterangan`, `jumlah`, `tgl_pengeluaran`) VALUES
(3, 'Kegiatan Pramuka', 1000000, '2020-05-15'),
(4, 'Peralatan Olahraga', 2000000, '2020-05-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincianawal`
--

CREATE TABLE `rincianawal` (
  `id_awal` int(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rincianawal`
--

INSERT INTO `rincianawal` (`id_awal`, `keterangan`, `jumlah`) VALUES
(2, 'Pendaftaran', 20000),
(12, 'Pembinaan dan Partis', 50000),
(14, 'Buku Paket', 85000),
(15, 'Alat Belajar 1 Tahun', 30000),
(16, 'Photo', 10000),
(17, 'Raport', 26000),
(18, 'Pemeliharaan Sarana', 45000),
(19, 'Seragam Cele', 110000),
(20, 'Batik', 75000),
(21, 'Kaos Olahraga', 65000),
(22, 'seragam', 500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincianawalb`
--

CREATE TABLE `rincianawalb` (
  `id_awalb` int(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rincianawalb`
--

INSERT INTO `rincianawalb` (`id_awalb`, `keterangan`, `jumlah`) VALUES
(12, 'Pembinaan dan Partis', 50000),
(14, 'Buku Paket', 85000),
(15, 'Alat Belajar 1 Tahun', 30000),
(18, 'Pemeliharaan Sarana', 45000),
(23, 'Baju Koko', 120000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincianspp`
--

CREATE TABLE `rincianspp` (
  `id_spp` int(10) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rincianspp`
--

INSERT INTO `rincianspp` (`id_spp`, `jumlah`) VALUES
(1, 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nis` bigint(25) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `j_kelamin` varchar(20) NOT NULL,
  `ibu` varchar(20) NOT NULL,
  `ayah` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `nis`, `kelas`, `tgl_lahir`, `tempat_lahir`, `j_kelamin`, `ibu`, `ayah`, `username`, `pass`, `level`) VALUES
(1, 'Abdulrouf Almunawar', 101232060288180001, 'B', '2013-04-02', 'Tasikmalaya', 'Laki-laki', 'Siti Sopiah', 'Asep Yayat', 'abdulrouf', 'abdulrouf123', 'siswa'),
(2, 'Armanda Luthfika Sari', 101232060288180002, 'B', '2013-02-17', 'Tasikmalaya', 'Perempuan', 'Siti Hasanah', 'Cecep Aripin', 'armanda', 'armanda123', 'siswa'),
(3, 'Arratvi Nur Armansyah', 101232060288170001, 'B', '2013-06-07', 'Tasikmalaya', 'Perempuan', 'Nuraisyah', 'Kontara', 'arratvi', 'arratvi123', 'siswa'),
(4, 'Azki Putra', 101232060288180020, 'B', '2014-04-03', 'Tasikmalaya', 'Laki-laki', 'Amelia Aisah', 'Mastur', 'azki', 'azki123', 'siswa'),
(5, 'Fauzan Azmi Yudhisti', 101232060288180003, 'B', '2013-08-05', 'Tasikmalaya', 'Laki-laki', 'Ade Sumiati H', 'Heri Prasetya', 'fauzan', 'fauzan123', 'siswa'),
(6, 'Isni Rahmawati', 101232060288180006, 'B', '2013-05-26', 'Tasikmalaya', 'Perempuan', 'Yuyun Supiati', 'Ade Rahmat', 'isni', 'isni123', 'siswa'),
(7, 'Mirna Asifa Yulianti', 101232060288180008, 'B', '2013-03-24', 'Tasikmalaya', 'Perempuan', 'Aas Astuti', 'Salman farid', 'mirna', 'mirna123', 'siswa'),
(8, 'Natasya Karunia Bela', 101232060288180011, 'B', '2013-05-16', 'Tasikmalaya', 'Perempuan', 'Nunung Syaripah', 'Nyanyang Maulana', 'natasya', 'natsya123', 'siswa'),
(9, 'Nesa Rina Khoerunnisa', 101232060288180012, 'B', '2013-09-06', 'Tasikmalaya', 'Perempuan', 'Juju Juariah', 'Endang Burhan', 'nesa', 'nesa123', 'siswa'),
(10, 'Nurul Fuadah', 101232060288180013, 'B', '2013-03-07', 'Tasikmalaya', 'Perempuan', 'Nurhayati', 'Syarip Hidayat', 'nurul', 'nurul123', 'siswa'),
(11, 'Reza Ramdan Syaputra', 101232060288180015, 'B', '2013-07-14', 'Tasikmalaya', 'Laki-laki', 'Ratna Suminar', 'Sahrul', 'reza', 'reza123', 'siswa'),
(12, 'Rizki Saepul Milah', 101232060288170031, 'B', '2013-05-12', 'Tasikmalaya', 'Laki-laki', 'Dewi Kuraesin', 'Cecep Matin A', 'rizki', 'rizki123', 'siswa'),
(13, 'Syaid As Shidik', 101232060288180018, 'B', '2013-11-02', 'Bogor', 'Laki-laki', 'Liyah Hayatul K', 'Muhamad Ikbal', 'syaid', 'syaid123', 'siswa'),
(14, 'Yusril Rizikin', 101232060288180019, 'B', '2013-03-20', 'Tasikmalaya', 'Laki-laki', 'Yanti', 'Syahrul Rozikin', 'yusril', 'yusril123', 'siswa'),
(15, 'Zahra Azizatun Nafisah', 101232060288170040, 'B', '2013-06-30', 'Tasikmalaya', 'Perempuan', 'Nia Apriliani', 'Asep Kurnia S', 'zahra', 'zahra123', 'siswa'),
(16, 'Dewi Siti Nurfalah', 101232060288190007, 'B', '2013-04-08', 'Tasikmalaya', 'Perempuan', 'Kustianingrum', 'Abdul Rohman S', 'dewi', 'dewi123', 'siswa'),
(17, 'Nurul Siti Fatimah', 101232060288190013, 'B', '2012-10-09', 'Tasikmalaya', 'Perempuan', 'Iyam', 'Ripan Nasihin', 'nurul', 'nurul123', 'siswa'),
(18, 'Cecep Jaelani', 101232060288190006, 'B', '2013-10-25', 'Tasikmalaya', 'Laki-laki', 'Ernawati', 'Ade Sarip', 'cecep', 'cecep123', 'siswa'),
(19, 'Omar Bukhori Ibrahim', 101232060288190014, 'B', '2013-08-05', 'Jakarta', 'Laki-laki', 'Solihat', 'Ade Barnas', 'omar', 'omar123', 'siswa'),
(20, 'Aisyah Putri Lestari', 120, 'A', '2014-11-25', 'Tasikmalaya', 'Perempuan', 'ibu', 'ayah', 'aisyah', 'aisyah123', 'siswa'),
(21, 'Anindya Keyne Salsabila', 121, 'A', '2014-09-15', 'Jakarta', 'Perempuan', '', '', 'anindya', 'anindya123', 'siswa'),
(22, 'Azkiya Firda Septiani', 122, 'A', '2014-09-07', 'Tasikmalaya', 'Perempuan', '', '', 'azkiya', 'azkiya123', 'siswa'),
(23, 'Azriel Wildan Pratama', 123, 'A', '0214-09-29', 'Tasikmalaya', 'Laki-laki', '', '', 'azriel', 'azriel123', 'siswa'),
(24, 'Bisma Qamilun Muiz', 124, 'A', '2014-11-13', 'Tasikmalaya', 'Laki-laki', '', '', 'bisma', 'bisma123', 'siswa'),
(25, 'Erowati Rosita Suroso', 125, 'A', '2015-08-05', 'Tasikmalaya', 'Perempuan', '', '', 'erowati', 'erowati123', 'siswa'),
(26, 'Lutfiana Nabila Azzahra', 126, 'A', '2014-04-26', 'Bogor', 'Perempuan', '', '', 'lutfiana', 'lutfiana123', 'siswa'),
(27, 'Muhammad Rizky Ramadhan', 127, 'A', '2014-07-13', 'Tasikmalaya', 'Laki-laki', '', '', 'rizki', 'rizki1234', 'siswa'),
(28, 'Muhammad Robii', 128, 'A', '2015-03-25', 'Tasikmalaya', 'Laki-laki', '', '', 'robii', 'robii123', 'siswa'),
(29, 'Nayla Putri', 129, 'A', '2015-05-18', 'Karawang', 'Perempuan', '', '', 'nayla', 'nayla123', 'siswa'),
(30, 'Perdi Perdiyansyah', 130, 'A', '2014-10-25', 'Tasikmalaya', 'Laki-laki', '', '', 'perdi', 'perdi123', 'siswa'),
(31, 'Resha Nurrofiq', 101232060288190016, 'A', '2014-04-23', 'Tasikmalaya', 'Laki-laki', 'Ibet Siti Noor Baety', 'Ujang Saepulloh', 'resha', 'resha123', 'siswa'),
(32, 'Rika Aulia', 101232060288190017, 'A', '2014-06-11', 'Tasikmalaya', 'Perempuan', 'Ai Indah', 'Ateng Matin', 'rika', 'rika123', 'siswa'),
(33, 'Muhamad Zidan Al Fariz', 133, 'A', '2014-11-08', 'Tasikmalaya', 'Laki-laki', '', '', 'zidan', 'zidan123', 'siswa'),
(34, 'Siti Azka Adila Zahra', 134, 'A', '2015-08-15', 'Tasikmalaya', 'Perempuan', '', '', 'siti', 'siti123', 'siswa'),
(35, 'Sheila Steviani', 135, 'A', '2014-09-15', 'Tasikmalaya', 'Perempuan', '', '', 'sheila', 'sheila123', 'siswa'),
(36, 'Dzakiyya Talita Sakhi', 136, 'A', '2014-05-09', 'Tasikmalaya', 'Laki-laki', '', '', 'dzakiyya', 'dzakiyya', 'siswa'),
(37, 'sendi', 121212, 'A', '2015-01-01', 'tasikmlaaya', 'Laki-laki', 'yani', 'septa', 'sendi', 'sendi123', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Ibet Siti Noor Baety, S.Pd.I', 'ibnu salamah', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lainnya`
--
ALTER TABLE `lainnya`
  ADD PRIMARY KEY (`id_lainnya`);

--
-- Indeks untuk tabel `pemasukanawal`
--
ALTER TABLE `pemasukanawal`
  ADD PRIMARY KEY (`id_pemasukanawal`);

--
-- Indeks untuk tabel `pemasukanawalb`
--
ALTER TABLE `pemasukanawalb`
  ADD PRIMARY KEY (`id_pemasukanawalb`);

--
-- Indeks untuk tabel `pemasukanspp`
--
ALTER TABLE `pemasukanspp`
  ADD PRIMARY KEY (`id_pemasukanspp`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indeks untuk tabel `rincianawal`
--
ALTER TABLE `rincianawal`
  ADD PRIMARY KEY (`id_awal`);

--
-- Indeks untuk tabel `rincianawalb`
--
ALTER TABLE `rincianawalb`
  ADD PRIMARY KEY (`id_awalb`);

--
-- Indeks untuk tabel `rincianspp`
--
ALTER TABLE `rincianspp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lainnya`
--
ALTER TABLE `lainnya`
  MODIFY `id_lainnya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemasukanawal`
--
ALTER TABLE `pemasukanawal`
  MODIFY `id_pemasukanawal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pemasukanawalb`
--
ALTER TABLE `pemasukanawalb`
  MODIFY `id_pemasukanawalb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemasukanspp`
--
ALTER TABLE `pemasukanspp`
  MODIFY `id_pemasukanspp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `rincianawal`
--
ALTER TABLE `rincianawal`
  MODIFY `id_awal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `rincianawalb`
--
ALTER TABLE `rincianawalb`
  MODIFY `id_awalb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `rincianspp`
--
ALTER TABLE `rincianspp`
  MODIFY `id_spp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
