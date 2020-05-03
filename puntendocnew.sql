-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 10.58
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puntendoc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `penulis`, `isi`) VALUES
(1, 'Cara buat anu', 'aaa', 'aafsvsdvdvdvdvdvdv aafsvsdvdvdvdvdvdv aafsvsdvdvdvdvdvdv'),
(3, 'menanam ubi', 'angga', 'gali dan tanem');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`id`, `nama`, `deskripsi`) VALUES
(5, 'Parasetamol', 'Parasetamol atau asetaminofen adalah obat analgesik dan antipiretik yang populer dan digunakan untuk melegakan sakit kepala, sengal-sengal dan sakit ringan, serta demam. Digunakan dalam sebagian besar resep obat analgesik selesma dan flu.'),
(6, 'Amoksisilin', 'Amoksisilin merupakan antibiotik yang digunakan dalam pengobatan berbagai infeksi bakteri. Obat ini merupakan lini pertama untuk pengobatan infeksi telinga tengah. Obat ini juga dapat digunakan untuk mengobati faringitis streptokokus, pneumonia, infeksi kulit, dan infeksi saluran kemih.'),
(7, 'ANTASIDA DOEN', 'ANTASIDA DOEN merupakan obat dengan kandungan Alumunium Hydroxide dan Magnesium Hydroxide. Obat ini digunakan untuk mengatasi maag dengan gejala nyeri ulu hati, sering bersendawa, dan perut kembung.'),
(8, 'Penisilin', 'Penisilin adalah sebuah kelompok antibiotik β-laktam yang digunakan dalam penyembuhan penyakit infeksi karena bakteri, biasanya berjenis Gram positif.'),
(9, 'Cetirizine', 'Cetirizine, dijual di bawah nama merek Zyrtec antara lain, adalah antihistamin generasi kedua yang digunakan untuk mengobati rinitis alergi, dermatitis, dan urtikaria. Itu diambil melalui mulut. Efek umumnya dimulai dalam satu jam dan berlangsung selama sekitar satu hari. '),
(10, 'Permetrin', 'Permetrin, adalah senyawa kimia buatan yang digunakan sebagai obat dan juga insektisida. Dalam pengobatan, senyawa ini digunakan untuk kudis dan kutuan dengan cara dioleskan. Sebagai insektisida, senyawa ini disemprot pada baju atau kelambu untuk membunuh serangga-serangga yang menyentuhnya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gejala` varchar(1000) NOT NULL,
  `tindakan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id`, `nama`, `gejala`, `tindakan`) VALUES
(4, 'PANADOL', 'adada', 'adxax');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pertanyaan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `role` enum('admin','user') CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `nama_user`, `username`, `password`, `role`, `email`) VALUES
(1, 'intan', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'admin', 'adminintan@gmail.com'),
(2, 'Restu', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user', 'userrestu@gmail.com'),
(3, 'Angga', 'unch', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'andi@unch.id'),
(4, 'angga', 'angga', '8479c86c7afcb56631104f5ce5d6de62', 'admin', 'angga@mail.com'),
(5, 'christina', 'christina', 'e311dd5fd4cdbba780ea0d0062df7788', 'admin', 'tina@mail.com'),
(6, 'alfian', 'alfian', '64fc0802fbae681ee55a9a4b87f0aec7', 'admin', 'alf@mail.com'),
(7, 'clara', 'clara', '515f0097a0e7885fc31543dd852ad935', 'admin', 'clar@mail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
