-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2017 pada 00.11
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `central_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(30) NOT NULL,
  `ket` text NOT NULL,
  `tipe` enum('H','S') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`no`, `judul`, `ket`, `tipe`) VALUES
(1, 'Sejarah Perusahaan', '<p>Di dirikan pertama kali pada tahun 2001, di Jl. Laksada Adisucipto Yogyakarta (Sekarang Kawasan Ambarukmo Plaza Yogyakarta).</p>\r\n\r\n<p><strong>CENTRAL LAUNDRY &amp; DRY CLEANING</strong>, semakin mendapat tempat dan dipercaya di kalangan pengguna jasa pencucian baik perorangan maupun kelembagaan. Seiring dengan perjalananya dan demi memberikan pelayanan yang lebih baik dan Modern.</p>\r\n\r\n<p><strong>CENTRAL LAUNDRY DRY &amp; CLEANING</strong>, mengembangkan diri dengan melakukan Penabahan baik dalam segi infrastruktur, maupun bangunan. Peningkatan kualtas juga terus dilakukan dengan memnepatkan sumberdaya manusia yang <strong>terlatih, profesional &amp; kompeten</strong>.</p>\r\n\r\n<p>Saat ini kami , <strong>CENTRAL LAUNDRY &amp; DRY CLEANING</strong> dengan 6 titik pelayanan yang beroperasi di <q>YOGYAKARTA,SEMARANG,CILACAP, dan PURWOKERTO</q> kami siap melayani kebutuhan semua jenis cucian baik untuk perorangan maupun instansi, hotel, restoran &amp; rumah sakit. Untuk ke depanya, telah telah di rencanankan sampai tahun 2015 akan segera dibuka 10 cabang lagi di seluruh kota-kota besar di indonesia.</p>\r\n', 'H'),
(2, 'THE CENTRALOGY', '<p><strong>VISI</strong>, Menjadi perusahaan laundry &amp; cleaning service Pilihan utama masyarakat bisnis dan itelektual dimanapun central berada.</p>\r\n\r\n<p><strong>MISI</strong>, Memberikan Solusi Profesional dan inovatif dibidang <strong>Laundry &amp; Dry Cleaning Service</strong> dengan mengedepankan Kecepatan, Kualitas dan nilai tambah dalam pelayanan.</p>\r\n\r\n<p><strong>CORPORATE VALUE :</strong></p>\r\n\r\n<ul>\r\n	<li>CARE</li>\r\n	<li>COMPETENCE</li>\r\n	<li>COMMITMENT<span id="cke_bm_74E" style="display:none">&nbsp;</span></li>\r\n</ul>\r\n\r\n<p><strong>MOTTO:</strong></p>\r\n\r\n<ul>\r\n	<li>CARE TO CLEAN</li>\r\n	<li>COMMIT TO CLEAN</li>\r\n</ul>\r\n', 'H'),
(3, 'CENTRAL SERVICES PROFILE', '<p>Tuntutan jaman yang mutlak membutuhkan kenyamanan hidup yang comfrotable, serta kesempurnaan total pada penampilan sangat dimengerti <strong>CENTRAL LAUNDRY &amp; DRY CLEANING</strong> dengan sigap memenuhi semua kebutuhan bagi customer perorangan maupun kelembagaan.</p>\r\n\r\n<p>Menggunakan teknik yang terjaga kualitasnya, didukung tenaga-tenaga yang trampil &amp; profesional dibidangnya, mesin-mesin yang caggih &amp; modern, kami memberikan layanan yang terbaik &amp; berkelas. Hal ini merupakan antisipasi untuk pengerjaan yang memerlukan perhatian khusus baik di jenis &amp; tipe material, dengan kapasitas besar &amp; kecepatan, bahkan cucian dengan noda kotoran yang extrim sekalipun tetap dapat ditangani dengan mudah &amp; cepat.</p>\r\n', 'S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bls_comment`
--

CREATE TABLE IF NOT EXISTS `bls_comment` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_comment` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bls_email`
--

CREATE TABLE IF NOT EXISTS `bls_email` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id_pesan` int(11) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `bls_email`
--

INSERT INTO `bls_email` (`no`, `id_pesan`, `subjek`, `pesan`, `tgl`) VALUES
(2, 3, 'good', 'bagus', '2016-08-14'),
(3, 8, 'Abdul Hamid', 'Sama sama bapak', '2016-09-04'),
(4, 4, 'srfs', 'stgstg', '2017-02-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
--

CREATE TABLE IF NOT EXISTS `cabang` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(15) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`no`, `kota`, `alamat`, `telp`) VALUES
(1, 'YOGYAKARTA', 'Jl. Pendak No. 160 , Sorowajan , RT01 / RW 06', '(0274) 488581'),
(2, 'SEMARANG', 'Jl. Gedong Songo Timur No.25 , Manyaran Semarang Barat', '(024) 7601256'),
(3, 'CILACAP', 'Jl. Gatot Subroto No. 6, Cilacap', '(0282) 5506952'),
(4, 'PURWOKERTO', 'Jl. Letkol Isdiman No. 6, Purwokerto', '(0281) 5767676');

-- --------------------------------------------------------

--
-- Struktur dari tabel `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `desk` text NOT NULL,
  `tipe` enum('HL','GL') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `clients`
--

INSERT INTO `clients` (`no`, `desk`, `tipe`) VALUES
(1, '<ul>\r\n<li>Hotel Ciputra</li>\r\n<li>Hotel Grand Candi</li>\r\n<li>Hotel Ciputra</li>\r\n<li>Hotel Ibis Semarang dan Jogja</li>\r\n<li>Hotel Horizon</li>\r\n<li>Hotel Pandanaran</li>\r\n<li>Hotel Bali Alam Indah Resort</li>\r\n<li>Hotel Dafam Semarang</li>\r\n<li>Hotel Inna Garuda</li>\r\n<li>Hotel Royal Ambarukmo</li>\r\n<li>Hotel Jayakarta</li>\r\n<li>Hotel Melia</li>\r\n</ul>', 'HL'),
(2, '<ul>\r\n<li>Hotel Bronto</li>\r\n<li>Hotel Ros-In</li>\r\n<li>Hotel Peti Mas</li>\r\n<li>Hotel Pandanaran</li>\r\n<li>Hotel Bali</li>\r\n<li>Hotel Abadi</li>\r\n<li>Hotel Cokrokusuman</li>\r\n<li>University Center UGM</li>\r\n<li>Hotel Amariz</li>\r\n<li>Hotel Whiz</li>\r\n<li>Hotel Pop</li>\r\n<li>Hotel Phoneix</li>\r\n<li>Apartemen Sejahtera</li>\r\n</ul>', 'HL'),
(3, '<ul>\r\n<li>Uniform BRI SENDID</li>\r\n<li>Uniform Garuda Airlines</li>\r\n<li>Uniform Merpati Airlines</li>\r\n<li>Uniform Batavia Airlines</li>\r\n<li>Uniform Graha Telkomsel</li>\r\n<li>Uniform AAU</li>\r\n</ul>', 'GL'),
(4, '<ul>\r\n<li>Uniform Bank BII</li>\r\n<li>Uniform Hotel Ibis</li>\r\n<li>Uniform Hotel Ciputra</li>\r\n<li>Uniform Hotel Santika</li>\r\n<li>Uniform AKMIL</li>\r\n<li>Uniform AKPOL</li>\r\n</ul>', 'GL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` date NOT NULL,
  `id_news` int(11) NOT NULL,
  `status` enum('D','R') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`no`, `nama`, `email`, `pesan`, `tgl`, `id_news`, `status`) VALUES
(1, 'ugugug', 'hamyd@gmail.com', 'pesan', '2016-12-04', 2, 'D'),
(2, 'abdul hamid', 'hamyd.abdul6@gmail.com', 'testing komentar server', '2017-02-17', 9, 'R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cs_profile`
--

CREATE TABLE IF NOT EXISTS `cs_profile` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `judul_atas` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `judul_bawah` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `cs_profile`
--

INSERT INTO `cs_profile` (`no`, `judul_atas`, `img`, `judul_bawah`) VALUES
(1, 'LAUNDRY & DRY CLEANING', 'pic1.png', 'Personal & Exclusive'),
(2, 'UNIFORM WEARPACKS', 'pic2.png', 'Corporate Service'),
(3, 'FB LINEN', 'pic3.png', 'Hotels and Restaurants'),
(4, 'HOUSE LINEN', 'pic4.png', 'Hotels guest house etc.'),
(5, 'LAUNDRY & DRY CLEANING', 'pic5.png', 'Residential Curtains, Carpets, Purses, etc.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desc_serve`
--

CREATE TABLE IF NOT EXISTS `desc_serve` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `ket` text NOT NULL,
  `kd_main_serve` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `desc_serve`
--

INSERT INTO `desc_serve` (`no`, `ket`, `kd_main_serve`) VALUES
(1, '<i>Suatu proses cuci bahan dengan menggunakan media minyak solvent dan mesin khusus dry cleaning.</i></br>Dengan mesin tercanggih CENTRAL DRY CLEANER adalah satu satunya laundry comersial yang mempunyai peralatan teerlengkap,tenaga-tenaga terlatih dan berpengalaman dibidangnya.jangan sampai tertipu percayakan hanya pada ahlinya dan satu satunya di yogyakarta.CENTRAL DRY CLEANER, yang tau arti sebuah penampilam dan perawatan untuk kesempurnaan kehidupan anda.', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `kd_serve` int(11) NOT NULL,
  `kd_main_serve` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`no`, `gambar`, `ket`, `kd_serve`, `kd_main_serve`) VALUES
(1, 'item1.png', 'Gambar 1', 1, 9),
(2, 'item2.png', 'Gambar 2', 1, 9),
(3, 'item3.png', 'Business Theme', 1, 9),
(4, 'item4.png', 'Business Theme', 1, 9),
(5, 'item5.png', 'Business Theme', 2, 9),
(6, 'item6.png', 'Business Theme', 2, 9),
(7, 'item7.png', 'Business Theme', 2, 9),
(8, 'item8.png', 'Business Theme', 2, 9),
(9, 'item9.png', 'Business Theme', 3, 9),
(10, 'item10.png', 'Business Theme', 3, 9),
(11, 'item11.png', 'Business Theme', 3, 9),
(12, 'item12.png', 'Business Theme', 3, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_total`
--

CREATE TABLE IF NOT EXISTS `layanan_total` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `color` varchar(10) NOT NULL,
  `aktif` enum('y','n') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `layanan_total`
--

INSERT INTO `layanan_total` (`no`, `img`, `ket`, `color`, `aktif`) VALUES
(1, '24jam.png', '24 jam layanan merupakan wujud komitmen kami, untuk selalu siap bekerja <b><i>SEPANJANG WAKTU ! NON STOP</i></b> melayani anda.', 'color1', 'y'),
(2, '25menit.png', '25 Menit - kami Siap mengerjakan LEBIH CEPAT Express dan dengan hasil yang terjaga kualitasnya.', 'color2', 'y'),
(3, 'cs_care.png', 'Layanan Order maupun penganduan konsumen,langsung melalui Costumer hotline kami. Hubungi kami melalui Telephone <u><b>(0274) 488581</b></u>. Petugas kami siap melayani dengan senang hati', 'color3', 'y'),
(4, 'delivery.png', '<p>Kami Siap Memberikan Kemudahan Layanan <strong>ANTER &amp; JEMPUT</strong> dengan sejumlah armada yang selalu siap diberangkatkan</p>\r\n', 'color4', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_menu`
--

CREATE TABLE IF NOT EXISTS `main_menu` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(30) NOT NULL,
  `aktif` enum('y','n') NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `main_menu`
--

INSERT INTO `main_menu` (`no`, `menu`, `aktif`, `link`) VALUES
(1, 'HOME', 'y', 'index.html'),
(3, 'ABOUT US', 'y', 'about.html'),
(4, 'SERVICES', 'y', ''),
(5, 'CONTACT US', 'y', 'contact.html'),
(6, 'TESTIMONI', 'y', 'testimoni.html'),
(7, 'BLOG', 'y', 'blog.html'),
(11, 'About', 'n', 'about.htm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mod_ym`
--

CREATE TABLE IF NOT EXISTS `mod_ym` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `mod_ym`
--

INSERT INTO `mod_ym` (`no`, `nama`, `username`) VALUES
(1, 'Gisti Wulandari', 'wulandarigisti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul_seo` varchar(150) NOT NULL,
  `desk` text NOT NULL,
  `tgl` date NOT NULL,
  `penulis` int(11) NOT NULL,
  `tipe` enum('N','B') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`no`, `img`, `judul`, `judul_seo`, `desk`, `tgl`, `penulis`, `tipe`) VALUES
(1, 'centrallaundry.png', '[NEWS] Launching Official Website Kami, Centrallaundry.co.id', 'news-launching-official-website-kami-centrallaundrycoid', '<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus...</p>\r\n', '2016-09-04', 5, 'N'),
(2, '10dryclean.jpg', '[Artikel] Mengenal Metode Pencucian â€œDry Cleaningâ€', 'artikel-mengenal-metode-pencucian-â€œdry-cleaningâ€', '<p>Anda yang sering melalukan pencucian di binatu tentu saja tak asing lagi dengan istilah&nbsp;<em>laundry</em>&nbsp;dan<em>dry clean.</em>&nbsp;Selama ini banyak orang mengira mencuci dengan cara&nbsp;<em>dry cleaning</em>&nbsp;adalah suatu teknologi mencuci kering tanpa cairan apa pun. Sepengetahuan mereka, mencuci dengan cara ini relatif lebih mahal dengan harapan hasil cuciannya jadi lebih bersih ketimbang&nbsp;<em>laundry</em>.</p>\r\n\r\n<p>Bagi mereka yang paham, semua kotoran yang disebabkan air sebaiknya juga dicuci dengan air. Hanya saja, tak semua material pakaian bisa dicuci dengan air sehingga harus dicuci melalui proses<em>dry cleaning</em>. Jika memaksakan menggunakan metode&nbsp;<em>laundry</em>, bisa saja pakaian tersebut menciut dan rusak.</p>\r\n\r\n<p>Sebenarnya pencucian secara &ldquo;kering&rdquo; ini tidak benar-benar kering karena tetap memerlukan cairan<em>solvent based</em>. Salah satu&nbsp;<em>solvent based</em>&nbsp;yang banyak digunakan di Indonesia adalah PCE (<em>perchloroethylene</em>). Sayangnya banyak pihak yang menganggap PCE kurang ramah lingkungan. Hal ini juga membuat banyak orang berasumsi&nbsp;<em>dry cleaning</em>&nbsp;adalah metode pencucian yang tidak ramah lingkungan.</p>\r\n\r\n<p>Pendapat ini tidak sepenuhnya benar karena ramah atau tidaknya proses pencucian<em>&nbsp;dry cleaning</em>terhadap lingkungan sangat bergantung dari teknologi dan detergen yang digunakan untuk menetralkannya. Di Eropa, misalnya, proses pencucian &ldquo;kering&rdquo; mayoritas menggunakan<em>&nbsp;hydrocarbon dry clean machine</em>&nbsp;yang dianggap ramah lingkungan dengan bau yang tidak menyengat karena menggunakan&nbsp;<em>solvent based</em>&nbsp;berupa hidrokarbon.</p>\r\n\r\n<p>Bukan hanya itu,<em>&nbsp;solvent based</em>&nbsp;jenis hidrokarbon juga lebih &ldquo;aman&rdquo; digunakan untuk mencuci pakaian yang banyak aksesorinya. Termasuk baju dengan payet yang berkualitas rendah atau baju dan kaos yang bersablon. Oleh karena itu, tak ada salahnya Anda mengenal lebih dekat proses pencucian<em>&nbsp;dry cleaning</em>&nbsp;agar tak ada lagi pakaian yang rusak karena pencucian yang salah. [AYA]</p>\r\n\r\n<p>Sumber :&nbsp;</p>\r\n\r\n<p><a href="http://infoklasika.print.kompas.com/mengenal-metode-pencucian-dry-cleaning/">http://infoklasika.print.kompas.com/mengenal-metode-pencucian-dry-cleaning/</a></p>\r\n\r\n<p><a href="http://suitsandskirtscleaners.com/media/dryclean.jpg">http://suitsandskirtscleaners.com/media/dryclean.jpg</a></p>\r\n', '2016-09-04', 5, 'B'),
(3, '91test.jpg', '[INFO] Spesial Promo September !', 'info-spesial-promo-september-', '<p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus...</p>\r\n', '2016-09-04', 5, 'N'),
(4, '67pic234.jpg', '[Artikel] Memilih Mesin Cuci yang bagus &amp; Awet', 'artikel-memilih-mesin-cuci-yang-bagus-amp-awet', '<p>Salah satu pertimbangan utama dalam memilih sebuah mesin cuci adalah segi keawetannya. Ibu tentu tidak ingin uang yang telah Ibu keluarkan untuk membeli sebuah mesin cuci terbuang begitu saja karena mesin cuci tersebut hanya bertahan dua atau tiga tahun.</p>\r\n\r\n<p>Berita baiknya adalah hampir semua merek mesin cuci maupun toko elektronik saat ini telah menawarkan garansi penuh bebas biaya selama satu tahun. Namun, setelah dua atau tiga tahun, garansi tersebut hanya mencakup beberapa komponen tertentu pada mesin cuci. Oleh karena itu, ketika membeli sebuah mesin cuci, pastikan Ibu memilih mesin cuci yang bagus dan awet.</p>\r\n\r\n<h2>Merek Mesin Cuci yang Awet</h2>\r\n\r\n<p>Walau tidak ada merek mesin cuci yang bisa memberikan jaminan ketahanan antara lima hingga delapan tahun, membeli mesin cuci buatan produsen merek yang tepercaya akan memperkecil kemungkinan mendapatkan mesin cuci berkualitas rendah.</p>\r\n\r\n<p>Jadi, sempatkan untuk membaca ulasan mengenai merek-merek mesin cuci tahan lama di berbagai forum diskusi yang dapat diakses online. Ibu juga perlu berhati-hati ketika membeli mesin cuci impor karena belum tentu semua merek memiliki pusat servis di Indonesia. Pastikan sebelum Ibu membelinya.</p>\r\n\r\n<p>Berikut ini&nbsp;<a href="https://www.rinso.co.id/perbandingan-mesin-cuci/" target="_blank">beberapa merek mesin cuci</a>&nbsp;yang dapat Ibu jadikan referensi dalam memilih mesin cuci yang bagus dan dapat diandalkan.</p>\r\n\r\n<ul>\r\n	<li><strong>Sharp</strong>: Merek asal Negeri Sakura ini memiliki beberapa tipe dengan harga yang cukup terjangkau namun tetap berkualitas. Misalnya, Ibu dapat membeli mesin cuci Sharp tipe ES-N70EY-P dengan harga sekitar Rp.2 juta. Selain itu, beberapa model mesin cuci Sharp sudah dilengkapi panel dalam bahasa Indonesia sehingga lebih mudah dioperasikan.</li>\r\n	<li><strong>Electrolux</strong>: Siapa yang tidak kenal merek mesin cuci asal Swedia ini. Merek yang terkenal ramah lingkungan ini memiliki kisaran harga antara Rp.1,5 juta hingga Rp.13 juta. Namun, cukup dengan anggaran sekitar Rp.5 juta, Ibu sudah bisa mendapatkan mesin cuci Electrolux tipe EWF10741 yang merupakan mesin cuci bukaan depan dengan tabung berkapasitas 7 kg.</li>\r\n	<li><strong>LG</strong>: Ketika berbicara mengenai mesin cuci yang awet, rasanya tidak bisa melewatkan mesin cuci keluaran LG asal Korea Selatan. Beberapa model mesin cuci LG sudah dilengkapi teknologi Inverter Direct Drive dan 6 pilihan siklus cuci dengan garansi 10 tahun. Teknologi ini menawarkan motor penggerak yang lebih tangguh dan juga tahan lama serta proses pencucian yang tidak bising. Salah satu contohnya adalah mesin cuci LG tipe WDT1213MRD yang merupakan mesin cuci bukaan depan dengan kapasitas tabung 13 kg dan harga sekitar Rp.12 juta</li>\r\n</ul>\r\n\r\n<h2>Fitur-Fitur Mesin Cuci Tahan Lama</h2>\r\n\r\n<p>Ketika sudah menemukan merek dan model mesin cuci yang Ibu inginkan, pastikan bahwa mesin cuci tersebut memiliki beberapa fitur di bawah ini:</p>\r\n\r\n<ul>\r\n	<li>Bahan tabung mesin cuci bisa terbuat dari plastik, enamel, atau&nbsp;<em>stainless steel</em>.&nbsp;<em>Stainless steel</em>&nbsp;tentu saja merupakan pilihan yang paling baik karena paling awet dan tahan terhadap putaran berkecepatan tinggi. Tabung berbahan plastik juga lebih tahan lama dibandingkan bahan enamel yang lebih mudah berkarat.</li>\r\n	<li>Banyaknya program yang ditawarkan mesin cuci modern sekarang ini perlu disikapi secara lebih hati-hati. Semakin kompleks pemrograman sebuah mesin cuci, semakin besar pula resiko kerusakannya. Oleh karena itu, pastikan bahwa&nbsp;<a href="https://www.rinso.co.id/tips-mesin-cuci/memahami-pilihan-program-pada-mesin-cuci/" target="_blank">pilihan-pilihan program</a>&nbsp;yang ditawarkan oleh sebuah mesin cuci memang sesuai dengan kebutuhan Ibu, tidak lebih dari itu.</li>\r\n	<li>Cek apakah mesin cuci pilihan Ibu sudah dilengkapi fitur&nbsp;<em>code error</em>. Jika mesin cuci Ibu rusak, fitur ini menampilkan kode pada layar digital di panel mesin cuci untuk memberitahu kerusakan apa yang terjadi. Misalnya, kode kerusakan pintu mesin cuci adalah E2 untuk merek Sharp, E40 untuk Elextrolux, dan dE untuk LG. Mengenali dan mengatasi kerusakan mesin cuci Ibu sejak awal merupakan langkah sederhana menjaga keawetan mesin cuci.</li>\r\n</ul>\r\n\r\n<p>Mudah-mudahan informasi di atas membantu Ibu dalam menentukan model dan merek mesin cuci yang bagus dan awet untuk keperluan di rumah. Namun, jangan lupa bahwa cara penggunaan dan perawatan mesin cuci di rumah juga penting untuk menjaga keawetan mesin cuci Ibu. Apabila Ibu memiliki saran merek dan model mesin cuci yang bagus dan awet, tuliskan saran tersebut di kotak komentar di bawah ini.</p>\r\n\r\n<p>Sumber :&nbsp;</p>\r\n\r\n<p><a href="https://www.rinso.co.id/tips-mesin-cuci/panduan-memilih-mesin-cuci-yang-bagus-dan-awet/">https://www.rinso.co.id/tips-mesin-cuci/panduan-memilih-mesin-cuci-yang-bagus-dan-awet/</a></p>\r\n\r\n<p><a href="http://www.drawhome.com/wp-content/uploads/2016/04/adorable-laundry-room-design-with-classy-wallpaper-and-elegant-washing-machine-including-purple-chair-beside-window-and-black-white-chess-pattern-floor.jpg">http://www.drawhome.com/wp-content/uploads/2016/04/adorable-laundry-room-design-with-classy-wallpaper-and-elegant-washing-machine-including-purple-chair-beside-window-and-black-white-chess-pattern-floor.jpg</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-09-04', 5, 'B'),
(5, '26jenis-kain.jpg', '[Info] Mengenal Jenis-Jenis Kain', 'info-mengenal-jenisjenis-kain', '<p>Ada banyak sekali jenis-jenis kain yang ada saat ini. Ketika Anda hendak belanja kain maka sebaiknya Anda mepelajari dulu beberapa jenis kain yang umum digunakan sebagai bahan pakaian berikut ini.</p>\r\n\r\n<ol>\r\n	<li><strong>Kain Katun (cotton)</strong></li>\r\n</ol>\r\n\r\n<p>Bahan dasar kain katun adalah serat kapas. Jenis kain katun ada 2 jenis yaitu cotton combed dan cotton carded. Cotton combed memiliki tekstur yang lebih halus jika dibandingkan dengan cotton carded. Kain katun biasanya dipakai untuk membuat jenis-jenis pakaian seperti kemeja, kaos, blus, celana dan lain-lain.<br />\r\nUntuk memahami kekurangan dan kelebihannya bisa kita lihat dari karakteristik kain katun.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-09-04', 5, 'B'),
(6, '38harajuku.jpg', 'Style Harajuku ', 'Style-Harajuku ', 'Jepang adalah tempat di mana setiap orang adalah individu - tapi dalam kelompok. Jika Anda pergi ke taman pada jam tertentu setiap hari Sabtu, Anda akan melihat ratusan anak laki-laki berpakaian rocks and rollers, menari untuk musik rock and roll ... sangat serius. Maka tidak mengherankan bahwa ketika gadis-gadis ingin menampilkan mode inovatif bahwa tidak ada -seorangpun yang pernah melihat sebelumnya, mereka ingin melakukannya di tempat yang sama, pada waktu yang sama. Dan tempat itu adalah distrik Harajuku di Tokyo.<br />\r\n<br />\r\nIstilah &quot;Harajuku Girls&quot; telah digunakan oleh media berbahasa Inggris untuk menggambarkan remaja berpakaian dalam gaya busana yang berada di wilayah Harajuku. mode ini menanamkan beberapa terlihat dan gaya untuk membuat bentuk yang unik dari gaun. Salah satu gaya, Kawaii, menjadi terkenal pada 1990-an. Kawaii menjadi ungkapan populer yang berarti ada sesuatu yang manis atau cantik. Kawaii adalah bentuk resistensi dalam gaya dan budaya yang terkait dengan itu tidak dilihat sebagai menarik oleh generasi tua. Gagasan Kawaii adalah budaya pemuda yang berbeda yang terpisah dari yang tradisional di cyber-punk melihat existence.The mengambil pengaruh dari fashion gothic dan menggabungkan neon dan colors.However metalik, tidak sepopuler itu pada 1990-an.<br />\r\n<br />\r\n<strong>Asal Usul Harajuku</strong><br />\r\n<br />\r\nfashion Harajuku mendapatkan namanya dari distrik Harajuku di Tokyo. Semua diaktifkan-pada anak-anak harajuku pergi ke sana untuk menjelajahi banyak toko-toko pakaian dan mengumpulkan Yoyogi taman, kafe-kafe di jalan Omotesando atau dalam perjalanan ke kuil Meiji untuk menampilkan kreasi terbaru mereka harajuku untuk wisatawan maupun untuk teman-teman mereka.<br />\r\n<br />\r\nHarajuku menjadi terkenal pada 1980-an karena penyanyi jalanan dan liar-berpakaian remaja yang berkumpul di sana pada hari Minggu ketika Omotesando ditutup untuk lalu lintas. Omotesando adalah jalan yang sangat panjang dengan kafe-kafe dan butik fashion kelas atas populer dengan penduduk dan turis. Setelah menjadi pejalan kaki di hari minggu itu adalah tempat yang sempurna untuk bertemu, bermain musik dan pamer!<br />\r\n<br />\r\nMemiliki tempat pertemuan reguler untuk seni, percakapan dan kinerja memunculkan adegan band Hokoten bersemangat. Ini berhenti pada akhir tahun 1990-an dan jumlah pemain, penggemar Visual Kei,<br />\r\npenari rockabilly dan bajingan telah terus menurun sejak. Hari ini di hari Minggu orang bisa melihat banyak Gothic Lolita serta banyak wisatawan asing mengambil gambar dari mereka dalam perjalanan ke Meiji Shrine. Beberapa wisatawan yang terkejut melihat suatu pameran besar pemuda Jepang berpakaian dalam pakaian sering mengejutkan.\r\n', '2016-08-07', 1, 'B'),
(7, '72fengho1.jpg', 'Kejutan Koleksi Elegan ', 'Kejutan-Koleksi-Elegan ', 'Koleksi Hermes terbaru di Paris Fashion Week kental dengan kesan simpel, segar, dan mewah. Di tangan desainer barunya, Christophe Lemaire, koleksi Hermes mampu memukau ratusan tamu undangan yang hadir.<br />\r\n<br />\r\nSaat pergelaran, Lemaire mencetuskan ide dengan menyembunyikan para model dalam bilik-bilik ruangan yang hanya diterangi cahaya lampu redup. Setelah itu, model keluar dan berjalan mengitari kursi penonton, kemudian secara acak berhenti di hadapan mereka sembari berpose anggun, lalu kembali berlenggak lenggok di atas panggung.<br />\r\n<br />\r\n&ldquo;Saya ingin menciptakan sesuatu yang baru dan segar, menampilkan wajah Hermes yang lebih segar dan penuh kejutan,&rdquo; ucap Lemaire seperti dilansir WWD.<br />\r\n<br />\r\nIde pergelaran itu terinspirasi dari pelancong yang mengembara ke tempat-tempat berbeda sambil mendengarkan alunan musik, lalu ada seorang wanita yang datang tiba-tiba, memesona dan cantik.<br />\r\n<br />\r\nIbarat penonton, pemandangan seperti itulah yang tertangkap dalam imajinasi. Apa hanya pergelaran yang berbeda? Ternyata tidak.<br />\r\n<br />\r\nKejutan juga datang dari koleksi busana, tas, serta aksesori yang dirancang Lemaire. Koleksi busana Hermes lebih bermain pada warna-warna putih, pastel, dan kombinasi warna terang seperti merah, oranye, kuning, dan hijau.<br />\r\n<br />\r\nPergelaran dibuka dengan koleksi atasan berwarna putih yang dikombinasi dengan model celana harem dan jaket balon berukuran besar. Selanjutnya ditampilkan pula koleksi gaun tunik dan celana kulit berpotongan lebar dengan tiga strip garis di bagian betis. Ada juga rok dengan detail cutting dan siluet menyamping, serta atasan dari bahan kulit.<br />\r\n<br />\r\nAdapun yang menjadi inspirasi dari koleksi tersebut adalah gaun futuristik Yunani di era 1980-an ketika warna putih menjadi warna dominan yang berpadu dengan bahan kulit serta garis lipitan yang tegas memanjang. Sekilas, gaun tersebut terkesan klasik dan monoton. Tapi, perhatian penonton tak hentinya tertuju pada model-model yang berseliweran di depan dan sekeliling mereka.<br />\r\n<br />\r\nHanya ada beberapa gaun yang direpresentasikan dengan ekspresi ceria oleh sang model. Oh ya, satu lagi yang menarik, kebanyakan dari mereka mengenakan ikat kepala dari bahan kulit tepat di batas garis poni lurus yang tertata rapi. Lemaire tidak hanya menunjukkan warna putih pada rancangannya.<br />\r\n<br />\r\nDia kembali hadir membawa nuansa warna pelangi. Salah satunya koleksi two pieces yang penuh kombinasi dua warna, yakni merah dan biru berupa baju atasan dan rok mini berpadu dengan stocking warna senada.<br />\r\n<br />\r\nSelanjutnya, model memamerkan rok mini lipit, kemeja polos, dan jaket berkulit lembut yang bahannya diambil dari bulu domba.<br />\r\n<br />\r\nDiikuti oleh model yang mengenakan gaun pendek berwarna oranye berbahan linen dengan variasi sabuk kulit.Gaun ini cukup menarik perhatian karena menampilkan kesan yang unik. Pergelaran berlanjut pada model yang membawa koleksi setelan baju warna hijau berpadu dengan celana pendek warna karamel diikuti gaun cetak bergaya Amerika Indian yang memiliki kantung celana di bagian sisi kanan dan kiri pinggul.<br />\r\n<br />\r\nKemudian,ada dua model yang bergantian tampil, salah satunya mengenakan suede shirt warna hijau dengan lengan tiga perempat dipadu rok berbahan kulit warna ungu terong. Sebagian besar koleksi Hermes tersebut coba memadukan antara gaya Yunani klasik dan gaya modern Amerika yang dibalut dengan permainan warnawarni yang selaras.<br />\r\n<br />\r\nLemaire mengemas pergelaran Hermes dengan sentuhan yang &ldquo;berjiwa&rdquo; dan filosofi yang kuat. Tidak jauh berbeda dengan identitas Hermes sebelumnya, koleksi Spring/Summer 2012ini menampilkan kreasi yang lebih dinamis dan tentu saja elegan.\r\n', '2016-08-07', 1, 'B'),
(8, '43you.jpg', 'Bebaskan Ekspresi Anda dalam Bergaya!', 'bebaskan-ekspresi-anda-dalam-bergaya', 'Perancang ternama dari kiblat fashion dunia, Paris, Yves Saint Laurent<br />\r\nFashion pernah mengatakan, &ldquo;Fashion come and go, but style is forever&rdquo;.<br />\r\n<br />\r\nSederhananya, fashion bisa saja terus berubah, apa pun model dan trennya. Namun soal gaya, akan menetap pada diri seseorang sesuai karakternya. Ketika seseorang merasa nyaman dengan gaya tertentu, yang menjadi ciri khasnya, itu adalah pilihannya.<br />\r\n<br />\r\nHal ini pula yang diyakini Melia Prawira, pemilik toko fashion Jabotabek Shopping &amp; Friends. Dalam sebuah talkshow pembukaan pusat belanja dan fashion remaja, Melia mengatakan tidak ada tren fashion tertentu, menjawab pertanyaan apakah tren fashion tahun ini untuk anak muda.<br />\r\n<br />\r\nMenurut perempuan yang berkecimpung di dunia fashion selama 9 tahun ini, kecenderungan anak muda saat ini adalah ekspresif dengan dirinya. Model fashion yang muncul di layar kaca dari kiblat mana pun tak lagi jadi acuan mutlak.<br />\r\n<br />\r\n&ldquo;Gaya busana anak muda sekarang lebih ekspresif dan senang mengombinasikan warna. Mereka cenderung melihat ke dirinya. Apa yang pantas dan tidak untuk dikenakan,&rdquo; papar Melia.<br />\r\n<br />\r\nIstilah korban mode sudah nyaris tak lagi ditemui sekarang ini. Fashion pada anak muda lebih berkarakter dan menunjukkan ciri khas personal, termasuk padupadan warna.<br />\r\n<br />\r\nSementara itu fashion stylist Karin Wijaya justru mengakui tren warna ini. Menurutnya, trashing warna pada gaya busana anak muda yang menjadi tren terkini.<br />\r\n<br />\r\n&ldquo;Warna cerah yang optimis merepresentasikan semangat optimisme anak muda,&rdquo; kata Karin dalam launching produk sportswear beberapa waktu lalu.<br />\r\n<br />\r\nMeski begitu, fashion etnik menjadi tren yang cenderung menonjol pada tahun ini seperti diakui oleh Melia. Batik, menjadi produk lokal yang fashionable dan digemari anak muda. Menurut Melia, batik sebagai fashion muncul sejak budaya lokal mulai diklaim negara tetangga. Jadi, tren etnik batik muncul sebagai bentuk kecintaan karakter khas negeri.<br />\r\n<br />\r\nVariasi model dan desain batik pun semakin banyak yang berkarakter khas anak muda. Padupadan batik juga lebih berani. Misalkan, kata Melia, batik tak hanya berpasangan dengan high heels, tapi juga bisa dengan sepatu kets. Aksesori etnik juga pantas dipadukan dengan motif batik yang cenderung kaya warna. Pilihan warna juga tak harus seragam. Jadi, berani mengkolaborasikan ragam model dan desain serta warna, itulah tren fashion saat ini.<br />\r\n<br />\r\nSyaratnya, menurut Melia, nilai kepantasan berbusana lebih menjadi ukuran daripada apa mereknya atau keluaran mana. Simak triknya:<br />\r\n<br />\r\n<strong>Warna kulit</strong><br />\r\nOrang Indonesia cenderung memiliki warna kulit kecoklatan. Triknya, jangan gunakan warna krem karena kulit akan terlihat kumal. Coklat gelap lebih cocok karena akan lebih menonjolkan warna kulit.<br />\r\n<br />\r\n<strong>Bentuk badan</strong><br />\r\nPersoalan kepercayaan diri kaitannya dengan bentuk badan bisa terlihat dari busana yang dikenakannya. Jika ada orang berbadan besar, dan cukup nyaman serta percaya diri dengan pakaian sedikit terbuka, sah saja. Namun perlu juga diperhatikan apakah bentuk badan Anda cocok untuk busana tertentu. Tidak semua busana bisa pas di badan atau enak dilihat. Perlu konsultasi dengan pakar fashion atau sering membaca referensi fashion untuk mengenali gaya busana sesuai bentuk badan.<br />\r\n<br />\r\n<strong>Karakter</strong><br />\r\nBagaimana karakter dan pembawaan dalam diri juga bisa menjadi ukuran kepantasan. Jika Anda merasa nyaman dengan tampil sporty, tren batik masih bisa diikuti. Padankan saja dengan sepatu kets dan cardigan. Masih ada sentuhan feminin dan maskulin bukan? Atau gunakan jaket sporty dengan dalaman kemeja lengan panjang dan bawahan celana jins misalnya. Sporty dan rapi menjadi gaya busana yang tak menipu karakter Anda bukan?\r\n', '2016-08-07', 1, 'B'),
(9, '73mencapai-kesuksesan.jpg', 'Motivasi Diri Menjadi yang Terbaik', 'motivasi-diri-menjadi-yang-terbaik', 'Semua orang ingin memiliki kehidupan yang bersemangat dan penuh warna. Dan menurut saya untuk memiliki kehidupan yang kita inginkan, kita harus memiliki mimpi, dan berusaha mewujudkan mimpi itu hingga berhasil. Percayalah, saat yang paling menyenangkan adalah saat proses pencapaiannya. Nah berikut ada kumpulan Kata bijak yang akan memotivasi anda menjadi yang terbaik untuk memperoleh mimpimu.<br />\r\n<br />\r\n1. Jangan pernah memotong sesuatu yang dapat dibuka ikatannya.<br />\r\n2. Lihatlah masalah sebagai kesempatan untuk pertumbuhan dan penguasaan diri.<br />\r\n3. Jadilah ahli dalam manajemen waktu.<br />\r\n4. Nilailah keberhasilanmu dengan menggunakan tolok ukur seberapa banyak engkau menikmati kedamaian, kesehatan, dan kasih sayang.<br />\r\n5. Jangan tunda pelaksanaan gagasan (ide-ide) yang baik. Kemungkinan ada orang lain yang baru saja memikirkannya juga. Sukses datang kepada orang yang bertindak terlebih dahulu.<br />\r\n6. Berhati-hatilah terhadap orang yang mengatakan kepadamu betapa ia itu jujur.<br />\r\n7. Ingatlah bahwa pemenang melakukan apa yang tidak mau dilakukan oleh pecundang.<br />\r\n8. Carilah peluang, bukan rasa aman. Kapal di pelabuhan memang aman, tetapi pada waktunya bagian bawahnya akan rusak berkarat.<br />\r\n9. Jalanilah hidupmu sedemikian rupa sehingga tulisan di batu nisanmu dapat berbunyi: &ldquo;Tidak Ada Penyesalan&rdquo;.<br />\r\n10. Usahakan mencapai keunggulan, bukan kesempurnaan.<br />\r\n11. Beri orang kesempatan kedua, tetapi jangan kesempatan ketiga.<br />\r\n12. Belajarlah mengenali hal-hal yang tidak berkaitan, kemudian abaikan!<br />\r\n13. Jangan lupa, kebutuhan emosional terbesar seseorang adalah untuk merasa dihargai.<br />\r\n14. Habiskan lebih sedikit waktu untuk membahas siapa yang benar, dan lebih banyak waktu untuk membahas apa yang benar!<br />\r\n15. Pekerjakan orang yang lebih pandai darimu.<br />\r\n16. Jangan membakar jembatan, engkau akan heran betapa sering engkau harus menyeberangi sungai yang sama.<br />\r\n17. Jagalah agar ekspektasi (harapan-harapan) tetap tinggi.<br />\r\n18. Jangan gunakan waktu dan/atau kata dengan ceroboh, keduanya tidak dapat diperoleh kembali.<br />\r\n19. Jadilah orang yang berani dan tabah! Sewaktu mengingat kembali kehidupan yang telah lewat, engkau akan lebih menyesali hal-hal yang tidak dilakukan, daripada hal-hal yang telah dilakukan pada masa lalu.<br />\r\n20. Evaluasi prestasimu berdasarkan standarmu sendiri, bukan standar orang lain.<br />\r\n21. Berusahalah untuk tetap hidup lebih berarti, dari pada hidup lebih lama.<br />\r\n22. Jadilah orang yang tegas, walaupun itu berarti engkau kadang-kadang keliru.<br />\r\n23. Tentukanlah sikapmu, jangan biarkan orang lain menentukannya untukmu.<br />\r\n24. Lupakan Panitia! Gagasan baru yang mengubah dunia selalu datang dari satu orang yang mau bekerja sama dengan orang lain, bukan melalui upacara-upacara!<br />\r\n25. Berikanlah upah yang sama untuk pekerjaan yang sama, tanpa memandang hal-hal yang lain.<br />\r\n26. Jangan biarkan hartamu memilikimu!<br />\r\n27. Jagalah reputasimu! Reputasi adalah modal yang paling berharga.<br />\r\n28. Perbaiki prestasimu melalui memperbaiki sikap dan kemampuanmu.<br />\r\n29. Kerjakan dengan benar pada kesempatan pertama.<br />\r\n30. Jangan pernah meremehkan kekuatan kata atau perbuatan yang baik.<br />\r\n31. Jangan takut untuk mengatakan: &ldquo;Saya tidak tahu&rdquo;, &ldquo;Maafkan Saya&rdquo;, &ldquo;Saya yang membuat kesalahan itu&rdquo;, &ldquo;Saya memerlukan bantuan Anda&rdquo;.<br />\r\n32. Pikiranmu hanya dapat menyimpan satu pikiran pada satu kesempatan, oleh karena itu jadikanlah itu pikiran yang positif dan konstruktif.<br />\r\n33. Jangan pernah mencabut/mematikan harapan seseorang, mungkin hanya itulah yang dimilikinya!<br />\r\n34. Sesudah bekerja keras untuk mendapatkan apa yang engkau inginkan, luangkanlah waktu untuk menikmatinya!\r\n', '2016-08-07', 1, 'B'),
(10, '57ikat-pinggang-fashion.jpg', 'Ikat Pinggang (Cara Pakai dan Gaya)', 'ikat-pinggang-cara-pakai-dan-gaya', '<p>Seperti aksesoris lainnya, ikat pinggang dipakai tidak hanya karena fungsinya, tapi juga karena alasan style dan fashion. Belt dapat mengubah pakaian biasa menjadi lebih stylish dalam sekejap. Kenakan belt dengan model berbeda2, maka anda mendapatkan pakaian yang sama dengan gaya yang berbeda untuk beberapa acara.<br />\r\n<img alt="" src="../images/news/pegawai.png" style="height:50px; width:100px" /><br />\r\nAwalnya belt dikenakan di pinggang untuk membentuk pinggang dan menciptakan siluet feminin. Tapi kini ikat pinggang telah bermigrasi ke seluruh torso, di bawah garis dada, ke pinggang, dan bahkan di sekitar pinggul sebagai fashion belt.<br />\r\n<br />\r\n<strong>Belt Lebar</strong><br />\r\nKenakan Belt lebar di bagian terkecil dari torso ~ yaitu di pinggang anda ~ Belt akan memberi bentuk dan menonjolkan lekukan pada tubuh. Untuk pemakaian di pinggang dapat dipilih yang ukuran sedang maupun obi yang oversize. Untuk pemakaian di pinggul pilih yang berukuran tidak terlalu besar.<br />\r\n<br />\r\nAnda bisa mengenakan belt lebar dengan blazer, cardigan, atasan longgar, oversize dress, atau terusan<br />\r\n<br />\r\nTips: Agar lebih nyaman saat dikenakan, untuk pemakaian di pinggang, pilih bahan belt yang lentur dan tidak kaku. yang dapat tahan dan tetap pada tempatnya mengikuti gerakan membungkuk ataupun duduk bahkan apabila dikenakan selama seharian.<br />\r\n<br />\r\nSuka Oversized Belt? Usahakan agar aksesoris lainnya tetap simple.<br />\r\n<br />\r\nUntuk tubuh agak berisi, hindari belt yang terlalu ketat, karena akan membuat tonjolan di atas dan bawah belt. Anda dapat mengenakan jaket atau cardigan di luarnya untuk menutupi nya. Dan pilih belt yang tidak terlalu tebal.<br />\r\n<br />\r\n<strong>Skinny Belts</strong><br />\r\nIkat Pinggang Skinny adalah salah satu must have accessories saat ini. Dari artikel majalah sampai lookbook, selalu terlihat fashion photo dengan skinny belt.<br />\r\n<br />\r\nSkinny belt cocok digunakan dari di empire waist (bawah garis dada), pinggang, maupun di pinggul.&nbsp; Biasanya terbuat dari kulit, rantai ataupun jalinan tali atau kain, dan karena ukurannya yang kecil kita dapat memilih skinny belt dengan warna-warna terang ataupun shimmering tanpa mendominasi pakaian yang dikenakan.<br />\r\n<br />\r\nTips: Untuk penggunaan di empire waist, belt anda akan memerlukan sedikit bantuan agar tidak melorot. Pastikan ada celah untuk menyelipkan belt anda sehingga akan tetap pada tempatnya.</p>\r\n', '2017-02-19', 2, 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `owner`
--

INSERT INTO `owner` (`no`, `img`, `nama`, `ket`) VALUES
(1, '67ceo.png', 'NAIM IRNADI T', '<p><strong>Salam Sejahtera</strong>, Dalam era modern dewasa ini, dima kebutuhan dasar masyarakan berupa sandang, pangan &amp; papan telah semakin berkembag sejalan dengan tuntutan modernisasi yang memerlukan komitmen penuh, kami tergerak untuk memberikan yang terbaik, khususnya perhatian khusus pada perawatan sandang, dalam hal ini laundry dan semua aspek yang berkaitan. Tidak hanya dengan menyediakan infrastruktur yang <strong>memadai, modern &amp; advance - tetapi juga sistem &amp; kinerja yang qualified.</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` date NOT NULL,
  `status` enum('D','R') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`no`, `nama`, `email`, `subjek`, `pesan`, `tgl`, `status`) VALUES
(1, 'abdul', 'hamyd.abdul6@gmail.com', 'Tes subjek', 'Pelayanan yang diberikan memuaskan hgsdchwgvuwveuywfvwyufywtdfvwfuwvcwgcw', '2016-08-05', 'R'),
(2, 'hamid', 'hamyd.abdul6@gmail.com', 'Tes subjek', 'layanan anda baik', '2016-08-05', 'R'),
(3, 'abdul hamid', 'abdul32@yahoo.com', 'Tes Email', 'Pelayanan anda memuaskan', '2016-08-05', 'R'),
(4, 'abdul', 'abdul32@yahoo.com', 'Tes Email', 'Pelayanan anda oke', '2016-08-05', 'R'),
(6, 'Endra Setiawan', 'setiaendra18@gmail.com', 'Coba Testimoni', 'sjfjasdkfkasdfd', '2016-08-08', 'R'),
(7, 'Adam White', 'abdul32@yahoo.com', 'Tes subjek', 'nuraini dwi saputri', '2016-08-14', 'R'),
(8, 'Zada media', 'hamyd.abdul6@gmail.com', 'Pesan ke central laundry', 'Selamat atas launchingnya web bapak.', '2016-09-04', 'R'),
(9, 'abdul', 'hamyd.abdul6@gmail.com', 'Tes subjek', 'Selamat atas launchingnya web bapak.', '2016-09-04', 'D'),
(10, 'abdul', 'abdul32@yahoo.com', 'tes', 'pesan', '2016-12-11', 'R');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `kd_serve` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `kd_main_serve` int(11) NOT NULL,
  PRIMARY KEY (`kd_serve`),
  KEY `kd_main_serve` (`kd_main_serve`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`kd_serve`, `nama`, `kd_main_serve`) VALUES
(1, 'Spray', 9),
(2, 'Jas', 9),
(3, 'bed cover', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `cap` text NOT NULL,
  `aktif` enum('y','n') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`no`, `img`, `cap`, `aktif`) VALUES
(1, 'centrallaundry.png', 'Layanan Order maupun penganduan konsumen,langsung melalui <i>Costumer hotline</i> kami', 'y'),
(2, 'slide1.jpg', '24 jam layanan merupakan wujud komitmen kami, untuk selalu siap bekerja <b><i>SEPANJANG WAKTU</i></b>', 'y'),
(3, 'pegawai.png', 'Kemudahan layanan antar jemput dengan sejumlah armada yang siap diberangkatkan', 'y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `socmed`
--

CREATE TABLE IF NOT EXISTS `socmed` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(30) NOT NULL,
  `n_socmed` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `socmed`
--

INSERT INTO `socmed` (`no`, `img`, `n_socmed`, `link`) VALUES
(1, 'fb.png', 'Central Laundry Jogja', 'facebook.com/central.yogyakarta'),
(2, 'twitterd.png', '@CentralJogja', ''),
(3, 'web.png', 'www.centrallaundry.co.id', 'centrallaundry.co.id'),
(4, 'mail.png', 'central.jogja@yahoo.com', 'hamyd.abdul6@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('127.0.0.2', '2009-09-11', 1, '1252681630'),
('127.0.0.1', '2009-09-11', 17, '1252734209'),
('127.0.0.3', '2009-09-12', 8, '1252817594'),
('127.0.0.1', '2009-10-24', 8, '1256381921'),
('127.0.0.1', '2009-10-26', 108, '1256620074'),
('127.0.0.1', '2009-10-27', 52, '1256686769'),
('127.0.0.1', '2009-10-28', 124, '1256792223'),
('127.0.0.1', '2009-10-29', 9, '1256828032'),
('127.0.0.1', '2009-10-31', 3, '1257047101'),
('127.0.0.1', '2009-11-01', 85, '1257113554'),
('127.0.0.1', '2009-11-02', 11, '1257207543'),
('127.0.0.1', '2009-11-03', 165, '1257292312'),
('127.0.0.1', '2009-11-04', 59, '1257403499'),
('127.0.0.1', '2009-11-05', 10, '1257433172'),
('127.0.0.1', '2009-11-11', 13, '1258006911'),
('127.0.0.1', '2009-11-12', 10, '1258048069'),
('127.0.0.1', '2009-11-14', 14, '1258222519'),
('127.0.0.1', '2009-11-17', 2, '1258473856'),
('127.0.0.1', '2009-11-19', 16, '1258635469'),
('127.0.0.1', '2009-11-21', 4, '1258863505'),
('127.0.0.1', '2009-11-25', 3, '1259216216'),
('127.0.0.1', '2009-11-26', 1, '1259222467'),
('127.0.0.1', '2009-11-30', 11, '1259651841'),
('127.0.0.1', '2009-12-02', 9, '1259746407'),
('127.0.0.1', '2009-12-03', 17, '1259906128'),
('127.0.0.1', '2009-12-10', 69, '1260423794'),
('127.0.0.1', '2009-12-12', 26, '1260560082'),
('127.0.0.1', '2009-12-11', 5, '1260508621'),
('127.0.0.1', '2009-12-13', 8, '1260716786'),
('127.0.0.1', '2009-12-14', 9, '1260772698'),
('127.0.0.1', '2009-12-15', 9, '1260837158'),
('127.0.0.1', '2009-12-16', 7, '1260905627'),
('127.0.0.1', '2009-12-17', 48, '1261026791'),
('127.0.0.1', '2009-12-18', 11, '1261088534'),
('127.0.0.1', '2009-12-22', 3, '1261477278'),
('127.0.0.1', '2009-12-25', 2, '1261686043'),
('127.0.0.1', '2009-12-26', 29, '1261835507'),
('127.0.0.1', '2009-12-27', 7, '1261920445'),
('127.0.0.1', '2009-12-28', 3, '1261965611'),
('127.0.0.1', '2009-12-29', 21, '1262024011'),
('127.0.0.1', '2009-12-30', 24, '1262146708'),
('127.0.0.1', '2010-01-01', 12, '1262286131'),
('127.0.0.1', '2010-01-03', 38, '1262529325'),
('127.0.0.1', '2010-01-12', 89, '1263264291'),
('127.0.0.1', '2010-01-14', 54, '1263482540'),
('127.0.0.1', '2010-01-15', 57, '1263506901'),
('127.0.0.1', '2010-02-11', 30, '1265831568'),
('127.0.0.1', '2010-02-13', 2, '1266032303'),
('127.0.0.1', '2010-02-14', 3, '1266115347'),
('127.0.0.1', '2010-02-15', 15, '1266195235'),
('127.0.0.1', '2010-02-18', 1, '1266499945'),
('127.0.0.1', '2010-02-22', 5, '1266856332'),
('127.0.0.1', '2010-02-25', 46, '1267103145'),
('127.0.0.1', '2010-05-12', 10, '1273654648'),
('127.0.0.1', '2010-05-16', 195, '1274026185'),
('127.0.0.1', '2010-05-17', 2, '1274029517'),
('127.0.0.1', '2010-05-19', 1, '1274279374'),
('127.0.0.1', '2010-05-27', 16, '1274967085'),
('127.0.0.1', '2010-05-30', 4, '1275192045'),
('127.0.0.1', '2010-05-31', 13, '1275271939'),
('127.0.0.1', '2010-06-05', 1, '1275676869'),
('127.0.0.1', '2010-06-06', 2, '1275842170'),
('127.0.0.1', '2010-06-15', 3, '1276572924'),
('127.0.0.1', '2010-06-22', 206, '1277221605'),
('127.0.0.1', '2010-08-02', 17, '1280754660'),
('127.0.0.1', '2010-08-20', 7, '1282285305'),
('127.0.0.1', '2010-08-30', 21, '1283185430'),
('127.0.0.1', '2010-08-31', 53, '1283207455'),
('127.0.0.1', '2010-09-02', 133, '1283402651'),
('127.0.0.1', '2010-09-05', 35, '1283702206'),
('127.0.0.1', '2010-09-13', 10, '1284370291'),
('127.0.0.1', '2010-09-17', 12, '1284662303'),
('127.0.0.1', '2010-09-22', 2, '1285091212'),
('127.0.0.1', '2010-09-23', 47, '1285254071'),
('127.0.0.1', '2010-09-26', 32, '1285512806'),
('127.0.0.1', '2010-09-27', 51, '1285532379'),
('127.0.0.1', '2010-10-14', 10, '1287074605'),
('127.0.0.1', '2010-10-15', 6, '1287150179'),
('127.0.0.1', '2010-10-16', 2, '1287170167'),
('127.0.0.1', '2010-10-20', 145, '1287636778'),
('127.0.0.1', '2010-10-21', 177, '1287721183'),
('127.0.0.1', '2010-10-22', 63, '1287752692'),
('127.0.0.1', '2011-04-02', 7, '1301680774'),
('127.0.0.1', '2011-04-03', 8, '1301801389'),
('127.0.0.1', '2011-04-05', 16, '1301977471'),
('127.0.0.1', '2011-04-09', 44, '1302288659'),
('127.0.0.1', '2011-04-10', 129, '1302370890'),
('127.0.0.1', '2011-04-11', 34, '1302488765'),
('127.0.0.1', '2011-04-17', 8, '1302998534'),
('127.0.0.1', '2011-04-22', 5, '1303479879'),
('127.0.0.1', '2011-04-23', 36, '1303534207'),
('127.0.0.1', '2011-05-26', 144, '1306423419'),
('127.0.0.1', '2011-05-27', 59, '1306467737'),
('127.0.0.1', '2011-05-28', 57, '1306588828'),
('127.0.0.1', '2011-05-29', 8, '1306649171'),
('127.0.0.1', '2011-05-30', 18, '1306736260'),
('::1', '2015-12-20', 41, '1450620785'),
('::1', '2015-12-21', 23, '1450699723'),
('::1', '2016-01-01', 1, '1451650787'),
('::1', '2016-01-23', 2, '1453562200'),
('::1', '2016-07-30', 223, '1469898412'),
('::1', '2016-07-31', 27, '1469951848'),
('192.168.43.1', '2016-07-31', 3, '1469950617'),
('::1', '2016-08-03', 12, '1470232574'),
('::1', '2016-08-04', 49, '1470330394'),
('::1', '2016-08-05', 85, '1470401780'),
('192.168.43.1', '2016-08-05', 2, '1470393242'),
('::1', '2016-08-06', 47, '1470505502'),
('::1', '2016-08-07', 281, '1470590938'),
('::1', '2016-08-08', 35, '1470671356'),
('::1', '2016-08-09', 87, '1470762562'),
('192.168.43.1', '2016-08-09', 2, '1470713497'),
('::1', '2016-08-10', 60, '1470809175'),
('192.168.43.1', '2016-08-10', 5, '1470801184'),
('192.168.43.45', '2016-08-10', 2, '1470801326'),
('::1', '2016-08-11', 313, '1470921006'),
('192.168.43.1', '2016-08-11', 2, '1470922278'),
('::1', '2016-08-12', 19, '1471020973'),
('::1', '2016-08-13', 90, '1471102790'),
('::1', '2016-08-14', 10, '1471182738'),
('::1', '2016-08-15', 18, '1471257413'),
('::1', '2016-08-16', 42, '1471360910'),
('::1', '2016-09-03', 1, '1472908905'),
('115.178.253.47', '2016-09-03', 11, '1472919030'),
('115.178.235.166', '2016-09-04', 13, '1472955822'),
('114.121.238.247', '2016-09-04', 4, '1472970733'),
('115.178.235.178', '2016-09-04', 76, '1472978966'),
('110.76.151.52', '2016-09-06', 1, '1473130321'),
('63.141.231.211', '2016-09-28', 1, '1475064318'),
('::1', '2016-10-01', 3, '1475333851'),
('::1', '2016-10-03', 12, '1475516533'),
('::1', '2016-10-04', 8, '1475557674'),
('::1', '2016-10-06', 31, '1475729047'),
('::1', '2016-10-07', 7, '1475852566'),
('::1', '2016-10-08', 36, '1475937290'),
('::1', '2016-10-09', 1, '1476013511'),
('::1', '2016-10-10', 2, '1476113736'),
('192.168.137.92', '2016-10-11', 1, '1476182886'),
('::1', '2016-12-01', 1, '1480600316'),
('::1', '2016-12-03', 1, '1480761812'),
('::1', '2016-12-04', 37, '1480871316'),
('::1', '2016-12-11', 2, '1481465693'),
('::1', '2016-12-13', 2, '1481648080'),
('::1', '2017-01-04', 1, '1483536353'),
('::1', '2017-02-16', 1, '1487249444'),
('::1', '2017-02-17', 65, '1487340559'),
('::1', '2017-02-18', 1, '1487408450'),
('::1', '2017-02-19', 7, '1487512975'),
('::1', '2017-02-20', 3, '1487603573'),
('::1', '2017-02-21', 2, '1487694614');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_services`
--

CREATE TABLE IF NOT EXISTS `sub_services` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `kd_main` int(2) NOT NULL,
  `m_kategori` varchar(20) NOT NULL,
  `link` varchar(30) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `sub_services`
--

INSERT INTO `sub_services` (`no`, `kd_main`, `m_kategori`, `link`) VALUES
(1, 4, 'Our Laundry Service', 'our-laundry-service.html'),
(7, 4, 'Our Value Added', 'value-added.html'),
(8, 4, 'Laundry', 'laundry.html'),
(9, 4, 'Dry Cleaning', 'dry-cleaning.html'),
(10, 4, 'Pressing', 'pressing.html');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`no`, `img`, `nama`, `jabatan`, `pesan`) VALUES
(1, 'ngudi.png', 'NGUDI PRAYITNO', 'EXECUTIVE HOUSE KEEPER HOTEL GRAND CANDI SEMARANG', 'CENTRAL LAUNDRY memberikan solsi dengan hasil harga & ketepatan waktu sesuai dengan komitmentnya.'),
(2, 'sugeng.png', 'SUGENG', 'EXECUTIVE HOUSE KEEPER HOTEL IBIS SEMARANG', 'Service & Kualitas CENTRAL telah kami rasakan benar-benar berbeda dengan yang lain. Untuk itulah kami kembali mempercayakan semua urusan laundry hotel kepada CENTRAL'),
(3, 'beta.png', 'BETA RUDYANTO', 'EXECUTIVE HOUSE KEEPER CIPUTRA HOTEL SEMARANG', 'Kami telah menjalin kerjasama selama selama 8 Tahun dengan CENTRAL LAUNDRY dan sampai saat ini berjalan dengan baik, tepat waktu dengan hasil yang sesuai standar hotel kami.'),
(4, 'lipursari.png', 'NY. LIPURSARI', 'LAUNDRY MANAGER MELIA PUROSANI HOTEL JOGJA', 'Kami mengadalkan CENTRAL LAUNDRY untuk house linen & guest laundry ketika terjadi trouble pada operasional laundry kami.selama ini berjalan dengan baik dan terjada sesuai dengan standar kami.'),
(5, 'hadiwinoto.png', 'R.Aj.LUPITASARI HADIWINOTO', 'CUSTOMER JOGJA', 'Saya selalu mempercayakan & menggunakan CETRAL untuk urusan dry cleaning & laundry.CENTRAL selalu menjadi pilihan utama saya.'),
(6, 'amerika.png', 'AMERICAN - HOLLAND CRUISE', 'MITRA KERJA', 'Penujukan CENTRAL sebagai tempat pelatihan / Training tenaga ahli laundry untuk hotel & kapal Pesiar Internasional.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `kd_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('a','u') NOT NULL,
  `ip` varchar(20) NOT NULL,
  `browser` text NOT NULL,
  `logout` varchar(20) NOT NULL,
  `status` varchar(3) NOT NULL,
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kd_user`, `nama`, `username`, `password`, `level`, `ip`, `browser`, `logout`, `status`, `lastlogin`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'u', '::1', 'Mozilla/5.0 (Windows NT 10.0; rv:51.0) Gecko/20100101 Firefox/51.0', '2017-02-18 13:02:08', 'off', '2017-02-18 19:03:08'),
(2, 'Abdul Hamid', 'hamid', '37fff357c237d67f2365eab6706bc898', 'a', '::1', 'Mozilla/5.0 (Windows NT 10.0; rv:51.0) Gecko/20100101 Firefox/51.0', 'no', 'on', '2017-02-21 20:45:23'),
(5, 'Endra Setiawan', 'endra', 'e5f35523181f285e31bb6d2538989156', 'a', '115.178.235.178', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36', 'no', 'on', '2016-09-04 09:04:38');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`kd_main_serve`) REFERENCES `sub_services` (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
