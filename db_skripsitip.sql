-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2020 pada 13.40
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skripsitip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'Admin', '$2y$10$kh6uwHxiK22fYVU8rNSq9emiVsiCMTm9wvgCR3h6Bu8aVffFvZhL.', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  `pangkat` varchar(25) NOT NULL,
  `golongan` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dosen`
--

INSERT INTO `tb_dosen` (`nip`, `nama_dosen`, `pangkat`, `golongan`, `jabatan`) VALUES
('195401221986091001', 'Drs. M. Izzudin, M.Pd', 'Pembina', 'IV/A', 'Lektor'),
('195506161985031001', 'Drs. Wahiruddin Wadin M.Pd', 'Pembina Utama Muda', 'IV/C', 'Lektor Kepala'),
('195511021982031006', 'Drs. Rizkan M.Kes', 'Pembina', 'IV/A', 'Lektor Kepala'),
('195711281986031004', 'Drs. Suardi Jasma, M.Pd', 'Pembina', 'IV/A', 'Lektor'),
('195801161986021001', 'Drs. Yayan Mulyana M.Pd', 'Pembina Tk 1', 'IV/B', 'Lektor Kepala'),
('195804071985031001', 'Drs. Agus Zainal Rachmat M.Pd', 'Pembina Utama Muda', 'IV/C', 'Lektor Kepala'),
('195812191984031002', 'Drs. Parlan M.Pd', 'Pembina', 'IV/A', 'Lektor'),
('195910051985031006', 'Drs. Rufran Zulkarnain', 'Pembina Tk 1', 'IV/B', 'Lektor Kepala'),
('195911101989031004', 'Dr. M. Ilham Abdullah, M.Pd', 'Pembina Utama Muda', 'IV/C', 'Lektor Kepala'),
('196211121988031001', 'Drs. Sofino, M.Pd', 'Pembina', 'IV/A', 'Lektor'),
('198808312014042001', 'Ririn Gusti, M.Pd.I', 'Penata Muda', 'III/A', 'Asisten Ahli');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `npm` varchar(10) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama_mhs` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `th_angkatan` varchar(10) NOT NULL,
  `fak_mhs` varchar(20) NOT NULL,
  `jur_mhs` varchar(25) NOT NULL,
  `prodi_mhs` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `foto_mhs` varchar(100) NOT NULL,
  `foto_sidang` varchar(100) NOT NULL,
  `masa_studi` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mhs`
--

INSERT INTO `tb_mhs` (`npm`, `password`, `nama_mhs`, `tgl_lahir`, `th_angkatan`, `fak_mhs`, `jur_mhs`, `prodi_mhs`, `alamat`, `foto_mhs`, `foto_sidang`, `masa_studi`) VALUES
('A1J013064', '123456', 'Richad Nugroho', '1995-08-13', '2013-08-01', 'KIP', 'FKIP', 'Pendidikan Non Formal', 'Lubuk Linggau', '', '', 5),
('A1J014012', '123456', 'Nanda Ayu Wohanda', '1996-09-06', '2014-08-01', 'KIP', 'FKIP', 'Pendidikan Non Formal', 'Bengkulu Selatan', '', '', 3),
('A1J014053', '123456', 'Kartika Ayu Ningsih', '1996-12-22', '2014-08-01', 'KIP', 'FKIP', 'Pendidikan Luar Sekolah', 'Arga Makmur', '', '', 3),
('A1J014072', '123456', 'Ririn Octaviani Sapitri', '1996-10-26', '2014-08-01', 'KIP', '-', 'Pendidikan Luar Sekolah', 'Arga Makmur', '', '', 3),
('A1J015020', '123456', 'Putika Andini', '1997-10-13', '2015-08-01', 'KIP', 'FKIP', 'Pendidikan Non Formal', 'Bengkulu Selatan', '', '', 3),
('A1J015025', '123456', 'Ririn Suryani', '1996-01-19', '2015-08-01', 'KIP', 'FKIP', 'Pendidikan Non Formal', 'Seluma', '', '', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skripsi`
--

CREATE TABLE `tb_skripsi` (
  `id` int(4) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `pemb1` varchar(40) NOT NULL,
  `pemb2` varchar(40) NOT NULL,
  `ketua` varchar(40) NOT NULL,
  `sekretaris` varchar(40) NOT NULL,
  `pengu1` varchar(40) NOT NULL,
  `pengu2` varchar(40) NOT NULL,
  `judul` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `tgl_sidang` date NOT NULL,
  `abstrak` text NOT NULL,
  `jurnal` text NOT NULL,
  `laporan` text NOT NULL,
  `status` enum('acc','belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_skripsi`
--

INSERT INTO `tb_skripsi` (`id`, `npm`, `pemb1`, `pemb2`, `ketua`, `sekretaris`, `pengu1`, `pengu2`, `judul`, `tgl_upload`, `tgl_sidang`, `abstrak`, `jurnal`, `laporan`, `status`) VALUES
(1, 'A1J014072', '195506161985031001', '195401221986091001', '196211121988031001', '195910051985031006', '195506161985031001', '195401221986091001', 'Pelaksanaan Program Magang Peserta Kursus Komputer Oleh Lembaga Pelatihan Kursus (LPK) Modren Mandiri Group Di Arga Makmur Kabupaten Bengkulu Utara', '2020-08-16', '2018-07-16', 'Tujuan penelitian ini adalah mengetahui pelaksanaan program magang peserta kursus komputer oleh lembaga pelatihan kursus (LPK) modren mandiri group di arga makmur kabupaten bengkulu utara. Penelitian ini menggunakan metode penelitian kualitatif. Untuk menjamin keabsahan data, peneliti melakukan triangulasi terhadap subjek penelitian dan teknik pengumpulan data. Berdasarkan hasil penelitian dan pembahasan ditarik kesimpulan 1) Perencanaan program magang yang dilakukan oleh lembaga pelatihan kursus (LPK) Modren Mandiri Group yaitu perencanaan magang dilakukan dengan cara mencari instansi perkantoran maupun swasta untuk menempatkan peserta didik agar dapat magang disana dan memudahkan peserta didik mencari perkerjaan. 2) Penerapan program magang pada lembaga pelatihan kursus modern mandiri group yaitu materi yang diberikan adalah materi microsoft word, microsoft excel,microsoft power poin, data base dan desain grafis, kita belajar 25% teori dan 75% peraktek.3) Evaluasi program magang yang dilakukan oleh pengelola pada lembaga pelatihan kursus (LPK) modren mandiri group yaitu pengelola melakukan evaluasi untuk hasi yang didapatkan, apakah program ini berhasi atau tidak. Kata kunci : Pelaksanaan Program Magang, Peserta Kursus Komputer,Lembaga Pelatihan Kursus (LPK) Modren Mandiri Group', '1024-3524-1-PB.pdf', '139-345-1-PB.pdf', 'acc'),
(2, 'A1J014053', '195911101989031004', '195812191984031002', '195911101989031004', '195506161985031001', '195911101989031004', '195812191984031002', 'Pembelajaran Kursus Mengemudi Mobil Di Lembaga Kursus Dan Pelatihan (LKP) Cemerlang Teknik Kota Bengkulu', '2020-08-16', '2018-06-29', 'Tujuan penelitian ini untuk mengetahui bagaimana pembelajaran mengemudi mobil pada LKP Cemerlang Teknik Kota Bengkulu dengan permasalahan penelitian yang meliputi Tujuan pembelajaran, kompetensi instruktur, kemampuan warga, kurikulum pembelajaran, metode pembelajaran kursus, media pembelajaran, evaluasi pembelajaran kursus mengemudi mobil di LKP Cemerlang Teknik Kota Bengkulu. Pelaksanaan penelitian pembelajaran mengemudi mobil pada LKP Cemerlang Teknik menggunakan penelitian dengan metode studi kasus, pengumpulan data dilakukan dengan wawancara, observasi dan dokumentasi. Untuk menguji validasi data peneliti menggunakan teknik trianggulasi. Informan dalam penelitian ini sebanyak lima orang. Berdasarkan hasil pembahasan maka dapat disimpulkan bahwa : Tujuan pembelajaran kursus mengemudi mobil yaitu dapat meningkatkan SDM masyarakat di bidang teknik otomotif, dapat mengurangi pengangguran, dapat menciptaan tenaga kerja yang siap pakai, dapat menambah pendapatan peserta belajar, juga mampu menciptakan lapangan kerja baru, meningkatkan kualitas dan prouktivitas kerja dan meningkatkan kesejahteraan tenaga pendidik dan kependidikan LKP Cemerlang Teknik, Kompetensi instruktur telah memahami tentang mengemudi mobil dan rambu-rambu lalu lintas kemudian harus mempunyai SIM A dan mempunyai ijazah minimal SMA/SMK sederajat, Kemampuan peserta didik telah mampu memahami sedikit banyaknya mengenai mengemudi mobil, mampu memahami peraturan lalu lintas, memahami mengemudi mobil dengan baik, Kurikulum pembelajaran kursus mengemudi mobil yaitu kurikulum kursus pelatihan mengemudi untuk pengemudi pemula jenjang ii, kedua kurikulum kursus dan pelatihan mengemudi kendaraan bermotor pengemudi profesional, kendaraan pribadi dan kendaraan ringan, dan kurikulum angkutan umum kendaraan ringan. Metode yang digunakan yaitu metode ceramah, tanya jawab, praktek, dan simulasi, Media yang digunakan dalam pembelajaran yaitu seperangkai IT diantaranya komputer 1 unit, printer 1 unit, laptop 1 unit LCD 1 unit dan mempunyai sarana dan prasarana yang berupa lapangan , gedung kantor dan ruang teori, sirkuit mengemudi, mobil dengan manual sebanyak 6 unit, Evaluasi pembelajaran yang digunakan yaitu melakukan ujian akhir kepada peserta didik tertulis maupun praktek. Kunci : Pembelajaran, Kursus Mengemudi Mobil', '1024-3524-1-PB.pdf', '139-345-1-PB.pdf', 'belum'),
(4, 'A1J015025', '195804071985031001', '195812191984031002', '195804071985031001', '195506161985031001', '195804071985031001', '195812191984031002', 'Pelatihan Kerajinan Tempurung Kelapa Pada Yayasan Akademi Peradaban Desa Dangau Datuk Jalan Raya Air Sebakul Kelurahan Betungan Kecamatan Selebar Kota Bengkulu', '2020-08-16', '2019-07-03', 'Pelatihan sebagai program pendidikan non formal yaitu pendidikan yang bertujuan meningkatkan keterampilan dalam waktu relatif singkat dan mengutamakan praktek daripada teori.', '1024-3524-1-PB.pdf', '139-345-1-PB.pdf', 'belum'),
(5, 'A1J013064', '195804071985031001', '195711281986031004', '196211121988031001', '195911101989031004', '195804071985031001', '195711281986031004', 'Pengelolaan Penyantunan Anak Keluarga Miskin Di Yayasan Al-Izzah Kota Bengkulu', '2020-08-16', '2019-05-22', 'Penelitian ini bertujujuan untuk mengetahui pengelolaan penyantunan anak dari keluarga tidak mampu di yayasan Al-Izzah Kota Bengkulu', '1024-3524-1-PB.pdf', '139-345-1-PB.pdf', 'belum'),
(6, 'A1J015020', '195804071985031001', '195812191984031002', '196211121988031001', '195711281986031004', '195804071985031001', '195812191984031002', 'Strategi Pemenuhan Kebutuhan Hidup Lansia Melalui Kerajinan Tangan', '2020-08-16', '2019-05-23', 'Tujuan Penelitian ini untuk mendeskripsikan strategi pemenuhan kebutuhan hidup lansia melalui kerajinan tangan (studi kasus bapak serajin di desa banding agung kecamatan seginim kabupaten bengkulu selatan) dengan permasalahan penelitian yang meliputi strategi aktif, pasif dan jaringan.', '1024-3524-1-PB.pdf', '139-345-1-PB.pdf', 'belum'),
(7, 'A1J014012', '195804071985031001', '198808312014042001', '195911101989031004', '195812191984031002', '195804071985031001', '198808312014042001', 'Upaya Guru Ngaji Dalam Meningkatkan Kemampuan Membaca Al-Quran Anak Pada TPQ Masjid Jami\' Babussalam Kota Bengkulu', '2020-08-16', '2018-05-24', 'Tujuan secara umum penelitian ini adalah untuk mengetahui upaya guru ngaji dalam meningkatkan kemampuan membaca Al-Quran anak pada TPQ Masjid Jami’ Babussalam Kota Bengkulu. Metode yang digunakan adalah metode kualitatif dengan teknik pengumpulan data yaitu wawancara, observasi dan dokumentasi.Berdasarkan hasil penelitian dan pembahasan ditarik kesimpulan bahwaPertama, metode yang digunakan guru ngaji dalam meningkatkan kemampuan membaca Al-Quran anak adalah metode Iqra dengan alasan karena dengan menggunakan metode Iqro ini anak cepat nangkap dan cepat memahami pelajaran membaca Al-Quran danbuku Iqro ini mudah di dapatkan,mudah di temui di toko-toko,penerapan metode Iqro ini yaitu dengan cara anak maju secara satu persatu kemudian guru ngaji melaksanakan pengenalan dan memberikan contoh terlebih dahulu kepada anak bacaan yang benar yaitu judul bacaannya, kemudian baru anak mengaji dan guru hanya menyimak bacaan anak,apabila anak membaca salah maka guru langsung menegur dan memberikan contoh bacaan yang benar kepada anak kemudian anak melanjutkan lagi bacaannya tanpa harus mengulang dari awal.Kedua,upaya pengembangan yang dilakukan guru ngaji dalam meningkatkan kemampuan membaca Al-Quran anak adalah setelah mereka khatam Al-Quran anak di evaluasi dan anak mengulang bacaan Al-Quran dengan menambah materi tajwid dan nada dalam membaca Al-Quran,selain itu anak juga mengembangkan bacaan Al-Qurannya yaitu dengan cara menyimak dan menjadi tutor bagi teman sebaya nya yang bacaannya masih di bawah.Ketiga, upaya guru ngaji dalam memberikan motivasi kepada anak tentang pentingnya kemampuan membaca Al-Quran anak adalah dengan cara bercerita tentang kehidupan para Nabi dan juga melakukan sharing tentang pentingnya membaca Al-Quran antara guru ngaji dan anak.Keempat, keberhasilan yang telah di capai dalam upaya meningkatkan kemampuan membaca Al-Quran anak yaitu anak-anak di TPQ sudah hapal ayat-ayat pendek, bisa membaca Al-Quran dengan baik dan benar berdasarkan tajwid dan juga bisa membaca Al-Quran dengan cara berirama.Kelima, faktor pendukung dalam upaya meningkatkan kemampuan membaca Al-Quran anak adalah kelayakan sarana dan prasarana yang dimiliki Oleh TPQ Masjid Jami’ Babussalam sedangkan faktor penghambat guru dalam upaya meningkatkan kemampuan membaca Al-Quran anak adalah perbedaan kemampuan anak. Kata Kunci :Upaya,Metode Iqro,pengembangan,Motivasi,hambatan dan dukungan', '1024-3524-1-PB.pdf', '139-345-1-PB.pdf', 'belum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `tb_skripsi`
--
ALTER TABLE `tb_skripsi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npm` (`npm`,`pemb1`,`pemb2`,`pengu1`,`pengu2`),
  ADD KEY `tb_skripsi_ibfk_2` (`pemb1`),
  ADD KEY `tb_skripsi_ibfk_3` (`pemb2`),
  ADD KEY `tb_skripsi_ibfk_4` (`pengu1`),
  ADD KEY `tb_skripsi_ibfk_5` (`pengu2`),
  ADD KEY `ketua` (`ketua`),
  ADD KEY `sekretaris` (`sekretaris`),
  ADD KEY `ketua_2` (`ketua`,`sekretaris`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_skripsi`
--
ALTER TABLE `tb_skripsi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_skripsi`
--
ALTER TABLE `tb_skripsi`
  ADD CONSTRAINT `tb_skripsi_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `tb_mhs` (`npm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_skripsi_ibfk_2` FOREIGN KEY (`pemb1`) REFERENCES `tb_dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_skripsi_ibfk_3` FOREIGN KEY (`pemb2`) REFERENCES `tb_dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_skripsi_ibfk_4` FOREIGN KEY (`pengu1`) REFERENCES `tb_dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_skripsi_ibfk_5` FOREIGN KEY (`pengu2`) REFERENCES `tb_dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_skripsi_ibfk_6` FOREIGN KEY (`ketua`) REFERENCES `tb_dosen` (`nip`),
  ADD CONSTRAINT `tb_skripsi_ibfk_7` FOREIGN KEY (`sekretaris`) REFERENCES `tb_dosen` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
