-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 20.48
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


-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `judul`, `penulis`, `isi`, `kategori`, `link`) VALUES
(6, 'Kenali Penyakit Kencing Manis', 'Angga', 'Diabetes adalah penyakit kronis atau yang berlangsung jangka panjang yang ditandai dengan meningkatnya kadar gula darah (glukosa) hingga di atas nilai normal. Ada dua jenis utama diabetes, yaitu diabetes tipe 1 dan tipe 2.', 'Kesehatan Keluarga', 'https://d1bpj0tv6vfxyp.cloudfront.net/category-article/20200124043029.961_Diabetes.jpg'),
(7, 'Asal-Usul Virus Corona Covid-19, Darimana asalnya?', 'Alfian', 'Jakarta Asal-usul Virus Corona SARS-Cov-2  yang menyebabkan coronavirus disease 2019 (COVID-19) terus menjadi perdebatan. Banyak yang belum tahu dari mana asal virus corona yang mulai merebak di Wuhan, China, Desember 2019.\r\n\r\nPada awal kemunculannya, beredar kabar virus corona SARS-CoV-2 berasal dari hewan, yakni kelelawar, dan belakangan, dikabarkan juga muncul dari tenggiling.', 'Tren', 'https://cdn0-production-images-kly.akamaized.net/crFuK0AwlIvCrTHK_dlTb70BAzM=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3077645/original/077845800_1584342369-shutterstock_1667739262.jpg');

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
  `deskripsi` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`id`, `nama`, `deskripsi`, `link`) VALUES
(5, 'Parasetamol', 'Parasetamol atau asetaminofen adalah obat analgesik dan antipiretik yang populer dan digunakan untuk melegakan sakit kepala, sengal-sengal dan sakit ringan, serta demam. Digunakan dalam sebagian besar resep obat analgesik selesma dan flu.', 'https://cms.sehatq.com/cdn-cgi/image/f=auto,width=1000,height=740,fit=cover,background=white,quality=100/public/img/drugbrand_img/paracetamol-kaplet-500-mg-01-1572418554.jpg'),
(6, 'Amoksisilin', 'Amoksisilin merupakan antibiotik yang digunakan dalam pengobatan berbagai infeksi bakteri. Obat ini merupakan lini pertama untuk pengobatan infeksi telinga tengah. Obat ini juga dapat digunakan untuk mengobati faringitis streptokokus, pneumonia, infeksi kulit, dan infeksi saluran kemih.', 'https://doktersehat.com/wp-content/uploads/2016/05/Amoxicillin-doktersehat.jpg'),
(7, 'Antasida Doen', 'ANTASIDA DOEN merupakan obat dengan kandungan Alumunium Hydroxide dan Magnesium Hydroxide. Obat ini digunakan untuk mengatasi maag dengan gejala nyeri ulu hati, sering bersendawa, dan perut kembung.', 'https://cf.shopee.co.id/file/00398a89adc1db136fef14a0a8c11f2d'),
(8, 'Penisilin', 'Penisilin adalah sebuah kelompok antibiotik β-laktam yang digunakan dalam penyembuhan penyakit infeksi karena bakteri, biasanya berjenis Gram positif.', 'https://cf.shopee.co.id/file/bffad79a9ee9368d1b65b507139282f9'),
(9, 'Cetirizine', 'Cetirizine, dijual di bawah nama merek Zyrtec antara lain, adalah antihistamin generasi kedua yang digunakan untuk mengobati rinitis alergi, dermatitis, dan urtikaria. Itu diambil melalui mulut. Efek umumnya dimulai dalam satu jam dan berlangsung selama sekitar satu hari. ', 'https://doktersehat.com/wp-content/uploads/2020/02/obat_dan_vitamin_Doktersehat_com_Cetirizine_10_mg_Tab_Hexp.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gejala` varchar(1000) NOT NULL,
  `tindakan` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id`, `nama`, `gejala`, `tindakan`, `link`) VALUES
(4, 'Demam Berdarah', 'Gejalanya adalah demam, ruam, serta nyeri otot dan sendi. Pada kasus yang parah terjadi pendarahan hebat dan syok, yang dapat membahayakan nyawa.', 'Pengobatan terdiri dari obat nyeri dan cairan\r\nPenanganan berupa dengan cairan dan pereda nyeri. Kasus yang parah harus dirawat inap. Hubungi dokter kepercayaan anda', 'https://d1bpj0tv6vfxyp.cloudfront.net/category-article/20200124042657.894_Demam%20Berdarah.jpg'),
(5, 'Cacar Air', 'Infeksi virus sangat menular yang menyebabkan ruam melepuh, seperti gatal pada kulit.\r\nCacar sangat menular terhadap orang-orang yang belum pernah menderita cacar atau belum divaksinasi cacar.\r\nGejala yang paling khas adalah ruam yang gatal serupa melepuh pada kulit.', 'Pengobatan terdiri dari obat penghilang nyeri\r\nCacar air dapat dicegah dengan vaksin. Penanganan yang umum yaitu meredakan gejalanya meskipun kelompok berisiko tinggi mungkin menerima pengobatan antivirus.', 'https://d1bpj0tv6vfxyp.cloudfront.net/inialasancacarairmudahmenular.jpg'),
(6, 'TBC', 'Suatu penyakit bakteri menular yang berpotensi serius yang terutama mempengaruhi paru-paru.\r\nBakteri penyebab TB menyebar ketika orang yang terinfeksi batuk atau bersin.\r\nKebanyakan orang yang terinfeksi dengan bakteri yang menyebabkan tuberkulosis tidak memiliki gejala. ', 'Pengobatan terdiri dari antibiotik\r\nPengobatan tidak selalu diperlukan untuk orang-orang tanpa gejala. Pasien dengan gejala aktif akan membutuhkan perjalanan pengobatan panjang yang melibatkan beberapa antibiotik.', 'https://img.okeinfo.net/content/2018/04/12/481/1885581/tbc-ternyata-bisa-menjangkit-alat-kelamin-ini-gejalanya-naeyPuIou1.jpg'),
(7, 'Meningitis', 'Meningitis biasanya disebabkan oleh infeksi virus, tetapi juga bisa bakteri atau jamur. Vaksin dapat mencegah sebagian bentuk meningitis.\r\nGejala termasuk sakit kepala, demam, dan leher kaku.\r\nTergantung pada penyebabnya, meningitis mungkin dapat pulih sendiri, atau dapat mengancam jiwa sehingga membutuhkan penanganan antibiotik yang mendesak.', 'Pengobatan bervariasi\r\nTergantung pada penyebabnya, meningitis mungkin dapat pulih sendiri, atau dapat mengancam jiwa sehingga membutuhkan penanganan antibiotik yang mendesak.', 'https://cms.sehatq.com/cdn-cgi/image/f=auto,width=890,height=530,fit=cover,background=white,quality=100/public/img/article_img/pernah-diderita-ashanty-ini-5-faktor-risiko-yang-sebabkan-penyakit-meningitis-1571109623.jpg'),
(8, 'Kanker Paru', 'Penyebab kanker paru-paru termasuk merokok, perokok pasif, paparan racun tertentu, dan riwayat keluarga.\r\nGejala termasuk batuk (sering dengan darah), nyeri dada, napas berbunyi, dan penurunan berat badan. Gejala ini sering tidak muncul sampai kanker sudah pada tahapan lanjut.', 'Penanganan bervariasi namun mungkin mencakup operasi, kemoterapi, terapi radiasi, terapi obat yang ditargetkan, dan imunoterapi.', 'https://foto.wartaekonomi.co.id/files/arsip_foto_2019_08_13/kanker_paru-paru_190712_small.jpg'),
(9, 'Sakid Djiwa', 'Rasa sedih atau terus kehilangan minat yang mencirikan depresi berat dapat menyebabkan berbagai gejala perilaku dan fisik. Ini mungkin termasuk perubahan dalam pola tidur, nafsu makan, tingkat energi, konsentrasi, perilaku sehari-hari, atau harga diri. Depresi juga dapat dikaitkan dengan pikiran bunuh diri.', 'Pengobatan terdiri dari antidepresan\r\nPenanganan yang dianjurkan biasanya adalah pengobatan, terapi bicara, atau gabungan keduanya. Semakin banyak penelitian yang menunjukkan bahwa penanganan semacam ini dapat menormalkan perubahan otak yang berhubungan dengan depresi.', 'https://sukabumiupdate.com/uploads/news/images/770x413/-_190611235400-270.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pertanyaan` varchar(1000) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id`, `username`, `pertanyaan`, `kategori`) VALUES
(1, 'user1', 'NANI ADALAH', 'Tren'),
(3, 'user2', 'bisa jatuh gak?', 'Tren');

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
(7, 'clara', 'clara', '515f0097a0e7885fc31543dd852ad935', 'admin', 'clar@mail.com'),
(8, 'Superman', 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user', 'super@man.co.id');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
