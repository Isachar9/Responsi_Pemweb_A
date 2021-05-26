-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 08:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_beritasawit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
`id_admin` int(50) NOT NULL,
  `nama_admin` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `foto_admin` varchar(225) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`, `foto_admin`) VALUES
(1, 'Robert', 'robert123', '123', 'cat_anjay.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
`id_berita` int(50) NOT NULL,
  `judul_berita` varchar(100) DEFAULT NULL,
  `isi_berita` text,
  `tanggal_posting` datetime DEFAULT NULL,
  `foto_berita` varchar(225) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal_posting`, `foto_berita`) VALUES
(9, '2 Hektare Lahan Sawit Milik Warga Kebakaran', 'Kebakaran lahan di areal perkebunan sawit milik warga, Selasa (11/8/2020). Sekitar dua hektare lahan milik warga kondisinya hangus rata dengan tanah.\r\n\r\nTim gabungan Karhutla terdiri dari Manggala Agni, Personil Kepolisian Babinkamtibmas, dan Personil TNI AD Babinsa Koramil berjibaku memadamkan kebakaran lahan di lokasi perkebunan sawit milik warga \r\n\r\nKebakaran terjadi sekira pukul 13.00 WIB. Tampak belasan petugas berjibaku memadamkan kobaran api dengan menggunakan peralatan seadanya. Berkisar dua puluh menit, petugas memadamkan api dengan menggunakan alat selang semprot air dengan memanfaatkan mata air terdekat, agar api cepat dipadamkan.\r\n\r\nDan api bisa dijinakan petugas berkisar dua jam. Meski api sudah padam, petugas tidak langsung meninggalkan lokasi kebakaran, sampai api benar benar padam. Diperkirakan kebakaran lahan mencapai dua hektar.\r\nKejadian berawal saat masyarakat ingin membersihkan lahan sawit dan karet untuk penanaman padi darat, saat warga membakar tumpukan sampah. Tiba-tiba api membesar dan memabakar areal perkebunan warga.\r\n\r\nSelain itu, musim kemarau juga menjadi pemicu api cepat membesar. Beruntung petugas cepat turun kelokasi sehingga tidak mengakibatkan kebakaran lahan yang luas.', '2020-12-13 20:41:41', 'dist/img/foto_berita/11202017-0842kebakaran sawit 1.jpg'),
(10, '10 Hektare Lahan Perusahaan Sawit di Muarojambi Terbakar', 'Kebakaran lahan di areal perkebunan kelapa sawit PT Kharisma Kemingking. Luas areal perusahaan kelapa sawit tersebut yang terbakar diperkirakan sudah mencapai 10 hektare (ha).\r\n\r\nAjun Komisaris Besar Polisi (AKBP) Ardiyanto, Rabu menjelaskan, kebakaran lahan perusahaan sawit itu terjadi mulai Selasa (11/8/2020). Kebakaran lahan tersebut diketahui berdasarkan laporan warga desa sekitar.\r\n\r\nDijelaskan, awalnya kebakaran di lahan perusahaan sawit tersebut hanya sekitar dua hektare. Ketika puluhan pasukan gabungan pemadaman kebakaran hutan dan lahan dari Satgas Penanggulangan Kebakaran Hutan dan Lahan (Karhula) diterjunkan ke lokasi, luas kebakaran sudah lebih dua hektare. Luas kebakaran lahan perusahaan sawit tersebut hingga pemadaman dihentikan sementara, Selasa malam, luas kebakaran lahan sudah mencapai sembilan hektare.\r\n\r\n“Pemadaman dilanjutkan hari ini, Rabu dan luas kebakaran sudah berkurang. Pemadaman masih terus berlangsung hingga seluruh api padam. Kemudian pendinginan areal yang terbakar juga dilakukan mencegah munculnya kemali api di bekas areal yang terbakar,”katanya.\r\n\r\nKebakaran lahan perusahaan sawit tersebut diduga ulah orang iseng yang membakar semak belukar. Belum ditemukan bukti adanya unsur kesengajaan dalam kasus kebakaran lahan perusahaan sawit tersebut.', '2020-12-13 20:41:59', 'dist/img/foto_berita/11202017-0845kebakaran sawit 2.jpg'),
(11, 'Lahan kelapa sawit terbakar', 'Lahan perkebunan kelapa sawit milik PT Perkebunan Nusantara (PTPN) I pada Kamis terbakar.\r\n\r\n"Api sudah dapat dipadamkan sekitar pukul 17.52 WIB tadi, dengan bantuan tiga armada damkar (pemadaman kebakaran) setempat," kata Kepala Pelaksana BPBA.\r\n\r\nBadan Penanggulangan Bencana Daerah (BPBD) Langsa langsung menurunkan petugas pemadam dan tiga mobil pemadam kebakaran untuk memadamkan api yang melalap area perkebunan di tengah cuaca panas musim kemarau.\r\n\r\n"Tidak ada korban jiwa maupun terdampak, dan pengungsi. Sedangkan berapa luas area yang terbakar dan penyebabnya, masih dalam pendataan petugas," kata Dadek\r\n\r\nZakaria Ahmad sebelumnya mengatakan intensitas hujan yang semakin menurun meningkatkan risiko kebakaran hutan dan lahan.\r\n\r\n"Waspadai bahaya kebakaran, baik hutan dan lahan maupun kawasan padat pemukiman penduduk," katanya.', '2020-12-13 20:42:10', 'dist/img/foto_berita/11202017-0847kebakaran sawit 3.jpg'),
(12, 'Petugas Kesulitan Padamkan Kebakaran Kebun Sawit', '"Kami kesulitan untuk memadamkan api karena mobil pemadam kebakaran sukar masuk ke lokasi dan keterbatasan sumber air serta lokasi kebakaran merupakan lahan gambut," kata Kepala Bidang Kedaruratan dan Logistik Badan Penanggulangan Bencana Daerah (BPBD) Agam Wahyu Lestari.\r\n\r\nPemadaman itu hanya bisa dilakukan dengan mesin pompa air, alat pemukul api, dan bantuan peralatan pemadaman dari BPBD.\r\nSampai Kamis (18/1) sore, api belum bisa padam, sehingga ratusan pohon kelapa sawit milik Andan (53) hangus terbakar.\r\n"Kondisi terakhir pemadaman, api sudah mencapai 80 persen dan apabila tidak bisa diatasi secepat mungkin, maka api akan menjalar ke lokasi lain mengingat kondisi cuaca dan lokasi merupakan lahan gambut cukup tebal," katanya lagi.\r\nTim akan melanjutkan memadamkan api dan berharap api bisa padam hari ini, agar warga tidak mengalami kerugian cukup besar.\r\n\r\nSaat ini ratusan pohon kelapa sawit hangus terbakar itu berada pada lahan seluas sekitar tujuh hektare.\r\n\r\n"Kami masih mendata jumlah kerugian warga akibat kebakaran lahan perkebunan kelapa sawit itu," katanya pula.\r\n\r\nPemilik lahan kelapa sawit Andan (53) mengucapkan terima kasih atas bantuan tim gabungan dari Pemkab Agam yang telah memadamkan api di lahannya.\r\n\r\n"Saya berharap api segera padam agar tidak menjalar ke lokasi lain," katanya pula.\r\n\r\nKebakaran itu terjadi pada Selasa (16/1) sekitar pukul 13.00 WIB, dan pihaknya tidak mengetahui penyebab kebakaran tersebut.', '2020-12-13 20:42:19', 'dist/img/foto_berita/11202017-0856kebakaran sawit 4.jpg'),
(13, 'Kebun Sawit Ludes Dilahap Api, Kerugian Miliaran Rupiah', 'Kebun kelapa sawit milik anggota KUD Marga Jaya, Rabu (9/9) pekan lalu dilaporkan terbakar. Lahan yang terbakar seluas 71 Ha merupakan kebun plasma sehingga dengan kerugian lebih Rp1 M.\r\nKebakaran diduga akibat pembakaran lahan yang dilakukan masyarakat di lokasi LU -2 yang berdampingan langsung dengan kebun plasma tersebut.? “Kami melihat api membesar dan melahap kebun sawit milik masyarakat yang dikelola melalui KUD,” terang Hendrik Cristian – mandor PT Gemilang Sejahtera Abadi (GSA).\r\nMeski telah meminta bantuan karyawan dan perusahaan, diakui Cristian upaya pemadaman gagal total karena cuaca dan angina mendukung api berkobar dengan cepat. Menritnya Cristian, api semakin berkobar akibat ketiadaan sumber air sementara sejumlah sumber air mulai mengering. “Api mengamuk sepuas-puasnya, karenanya hanya dalam waktu singkat api sudah melahap pohon-pohon kelapa sawit yang sudah dipanen itu,” beber Cristian.\r\nKebakaran kebun sawit yang melanda lahan anggota KUD Marja Jaya ini dipastikan Dinas Perkebunan karena faktor alam. Melalui Kepala Bidang Perlindungan Tanaman Dinas Perkebunan Suprayitno Dwi Zainal, penyebab kebakaran karena kelalaian manusia. ,”Kami sudah terima laporannya, keterangan yang didapat baik dari perusahaan dan pihak KUD Marga Jaya selaku pengelola plasma diduga kuat faktornya kelalaian manusia,” ujarnya, Senin (14/9) kemarin.', '2020-12-13 20:42:27', 'dist/img/foto_berita/11202017-0858kebakaran sawit 5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
MODIFY `id_berita` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
