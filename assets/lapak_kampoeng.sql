-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2019 at 09:29 AM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.2.14-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapak_kampoeng`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `judul_gambar` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_produk`, `judul_gambar`, `gambar`, `tanggal_update`) VALUES
(1, 15, 'gorengan', 'IMG-20180410-WA0042.jpg', '2019-08-04 02:33:03'),
(2, 15, 'gamba samping', '201803011914121.png', '2019-08-04 02:34:14'),
(3, 16, 'Gambar samping', '207786_p.jpeg', '2019-08-05 02:22:48'),
(5, 16, 'Gambar Belakang', 'sprite-is-releasing-a-new-flavor-thats-made-with-lemonade.jpg', '2019-08-05 02:23:32'),
(6, 16, 'Gmbar depan', 'images.jpeg', '2019-08-05 02:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `kode_transaksi` varchar(150) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `rekening_pembayaran` varchar(200) DEFAULT NULL,
  `rekening_pelanggan` varchar(200) DEFAULT NULL,
  `bukti_bayar` varchar(200) DEFAULT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `tanggal_bayar` varchar(255) DEFAULT NULL,
  `nama_bank` varchar(255) DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `id_user`, `id_pelanggan`, `nama_pelanggan`, `email`, `telepon`, `alamat`, `kode_transaksi`, `tanggal_transaksi`, `jumlah_transaksi`, `status_bayar`, `jumlah_bayar`, `rekening_pembayaran`, `rekening_pelanggan`, `bukti_bayar`, `id_rekening`, `tanggal_bayar`, `nama_bank`, `tanggal_post`, `tanggal_update`) VALUES
(1, 0, 6, 'miracle', 'miracle@gmail.com', '0823 6787 5674', 'Balik bukit lampung barat', '07082019EVZHYCNA', '2019-08-07 00:00:00', 94000, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-07 21:49:57', '2019-08-07 14:49:57'),
(2, 0, 6, 'miracle', 'miracle@gmail.com', '085416251662152', 'Balik bukit lampung barat', '100820193WNNEVZG', '2019-08-10 00:00:00', 4500, 'Belum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-10 08:46:45', '2019-08-10 01:46:45'),
(3, 0, 6, 'miracle', 'miracle@gmail.com', '085416251662152', 'Balik bukit lampung barat', '10082019SADJHQXB', '2019-08-10 00:00:00', 168000, 'Konfirmasi', 168000, '02398402983402934', 'Bunda ', 'logo_qodr.jpg', 1, '10-08-2019', 'BANK BCA ', '2019-08-10 09:36:55', '2019-08-10 04:33:43'),
(4, 0, 7, 'budi setyo', 'budisetyo@gmail.com', '0845 8783 3232', 'jakarta timur cipayung', '12082019JIWXCVBL', '2019-08-12 00:00:00', 7063500, 'Konfirmasi', 7063500, '23987293479823', 'Budisetyo', 'mitra_copy.PNG', 4, '12-08-2019', 'BANK BRI', '2019-08-12 14:57:30', '2019-08-12 08:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `urutan`, `tanggal_update`) VALUES
(14, 'snack-asin', 'Snack Asin', 1, '2019-08-03 00:59:39'),
(15, 'pie', 'Pie', 2, '2019-08-03 00:59:29'),
(17, 'kue-tradisional', 'Kue Tradisional', 3, '2019-08-03 00:59:18'),
(18, 'sayuran', 'Sayuran', 4, '2019-08-04 03:25:14'),
(19, 'minuman', 'Minuman', 5, '2019-08-04 03:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal_komentar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama_pelanggan`, `komentar`, `tanggal_komentar`) VALUES
(2, 'miracle', 'barangnya bagus aku suka dan layanin kami sabagai pelanggan dengan baik hal ini menjadi prioritas seoarng pelanggan dalam melakukan pembeliaan barang, semoga lapak kampoeng tanggamus menjadi sarana untuk membuat para produsesn makmur.', '2019-08-08 14:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `keywords` text,
  `metatext` text,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `rekening_pembayaran` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `tagline`, `email`, `website`, `keywords`, `metatext`, `telepon`, `alamat`, `facebook`, `instagram`, `deskripsi`, `logo`, `icon`, `rekening_pembayaran`, `tanggal_update`) VALUES
(1, 'Lapak Kampoeng Tanggamus', 'Spesialis Online Shop', 'Lapakkampoeng@gmail.com', 'http://www.lapakkampoeng.com', 'Jasa Penjualan Produk', 'produk ku produk mu', '082281488568', 'Tanggamus Lampung Indonesia', 'http://facebook.com/lapakkampoeng', 'http://facebook.com/lapakkampoeng', 'Penyedia layanan jualan online', 'logo-hugi4.png', 'logo-hugi5.png', '9279139817391739187', '2019-08-03 02:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `status_pelanggan`, `nama_pelanggan`, `email`, `password`, `telepon`, `alamat`, `tanggal_daftar`, `tanggal_update`) VALUES
(3, 0, 'Pending', 'sudiro', 'sudiro@gmail.com', '4decacb054ccd6dca61628454c58056b4bdf5f73', '0876 5467 6578', 'Lampung barat', '2019-08-06 11:07:34', '2019-08-06 04:07:34'),
(4, 0, 'Pending', 'sarno', 'sarnos@gmail.com', 'c06afb0552955c671888fa995d9ea250b307d5ef', '97987987987987', 'bandung skfnaskjdfnaksdjfnasdkjfnaskjdfn', '2019-08-06 15:18:28', '2019-08-06 08:21:27'),
(5, 0, 'Pending', 'nafisa', 'nafisa@gmail.com', '97bf26c4be28b856c2cc5b17b826869253ea6599', '0856 3456 2226', 'Bandung', '2019-08-07 07:37:22', '2019-08-07 00:37:22'),
(6, 0, 'Pending', 'miracle', 'miracle@gmail.com', 'bf5b45543c92183346353dc9e6680f6a436f9c53', '085416251662152', 'Balik bukit lampung barat', '2019-08-07 14:33:15', '2019-08-08 03:47:29'),
(7, 0, 'Pending', 'budi setyo', 'budisetyo@gmail.com', '7da016b31756f39457c62f9ef5030e8f4a9ecaac', '0845 8783 3232', 'jakarta timur cipayung', '2019-08-12 14:57:12', '2019-08-12 07:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `keywords` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `berat` float DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `status_produk` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori`, `kode_produk`, `nama_produk`, `slug_produk`, `keterangan`, `keywords`, `harga`, `stok`, `gambar`, `berat`, `ukuran`, `status_produk`, `tanggal_post`, `tanggal_update`) VALUES
(8, 19, 17, 'BOGO1', 'Bolu gula merah', 'bolu-gula-merah-bogo1', '<p>Bolu gula merah</p>\r\n', 'bolu', 6500, 1000, '20180301191231.png', 60, '10 X 10 cm', 'Publish', '2019-08-03 08:00:59', '2019-08-03 01:00:59'),
(9, 19, 17, 'putu', 'Putu ayu', 'putu-ayu-putu', '<p>putu ayu</p>\r\n', 'ayuu', 500, 1000, 'IMG-20171226-WA0017.jpg', 60, '10 X 10 cm', 'Publish', '2019-08-03 08:01:43', '2019-08-03 01:01:43'),
(10, 19, 17, 'lumpur1', 'Kue lumpur', 'kue-lumpur-lumpur1', '<p>mantap kali bos kuenya</p>\r\n', 'kue', 6500, 1000, 'IMG-20180226-WA0010.jpg', 60, '10 X 10 cm', 'Publish', '2019-08-03 08:02:24', '2019-08-03 01:02:24'),
(11, 19, 15, 'Talam Ubi', 'Talam Ubi', 'talam-ubi-talam-ubi', '<p>mantap sekali lah</p>\r\n', 'bolu', 6000, 1100, 'IMG-20180410-WA0041.jpg', 60, '20 X 20', 'Publish', '2019-08-03 08:05:54', '2019-08-03 01:05:54'),
(12, 19, 15, 'lemper', 'Lemper Ayam', 'lemper-ayam-lemper', '<p>minimal pembelian 100 pc</p>\r\n', 'mantap tentan', 60500, 500, 'IMG-20180410-WA0044.jpg', 80, '30X10', 'Publish', '2019-08-03 08:06:55', '2019-08-03 01:06:55'),
(13, 19, 17, 'arem arem', 'Arem arem daging', 'arem-arem-daging-arem-arem', '<p>mantap kali cukup sekali bei</p>\r\n', 'mantap gan', 8000, 500, '20180301191412.png', 70, '30 X 10 cm', 'Publish', '2019-08-03 08:09:49', '2019-08-03 01:09:49'),
(14, 19, 14, 'singkong', 'Singkong thailand', 'singkong-thailand-singkong', '<p>untuk sekali makan pasti kenyang</p>\r\n', 'sngkong', 70000, 700, '20180301191313.png', 80, '80 X 80 cm', 'Publish', '2019-08-03 08:10:54', '2019-08-03 01:10:54'),
(15, 19, 14, 'Panada', 'Panada', 'panada-panada', '<p><strong>Lorem ipsum dolor sit amet, </strong>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu<em><s> fugiat nulla pariatur</s></em>. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'bisa kook ', 90000, 400, '201803011912311.png', 40, '10 X 60 cm', 'Publish', '2019-08-03 08:11:54', '2019-08-04 02:38:09'),
(16, 19, 19, 'srpte', 'Sprite', 'sprite-srpte', '<p>sebelumnya bernama Fanta Klare Zitrone (Clear Lemon Fanta) di Jerman Barat pada tahun 1959, di Venezuela disebut sebagai &quot;Chinotto&quot;) adalah minuman yang tidak berwarna dengan rasa lemon dan jeruk nipis serta bebas kafeina yang diproduksi oleh The Coca-Cola Company dan diluncurkan secara resmi di Amerika Serikat</p>\r\n', 'sprite', 4500, 500, 'sprite_330ml.jpg', 50, '10 X 30 cm', 'Publish', '2019-08-04 10:26:58', '2019-08-04 03:26:58'),
(20, 19, 18, 'kol1', 'Kol', 'kol-kol1', '<p>kol kol kol kol</p>\r\n', 'kol', 4000, 1000, 'sayuraan.png', 50, '10 X 10', 'Publish', '2019-08-04 10:54:16', '2019-08-04 03:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `produsen`
--

CREATE TABLE `produsen` (
  `id_produsen` int(11) NOT NULL,
  `nama_produsen` varchar(50) NOT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `produksi` varchar(255) DEFAULT NULL,
  `tempat_produksi` varchar(255) DEFAULT NULL,
  `latar_belakang` text,
  `whatsapp` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produsen`
--

INSERT INTO `produsen` (`id_produsen`, `nama_produsen`, `tgl_lahir`, `agama`, `gambar`, `alamat`, `produksi`, `tempat_produksi`, `latar_belakang`, `whatsapp`, `instagram`, `facebook`) VALUES
(1, 'Sigit wasis subekti', '13 februari 2001', 'islam', 'avatar.jpg', 'Bahway, balik bukit, lampung barat, indonesia', 'laptop', 'liwa lampung barat', 'saya sudah lama bekerja menjadi seorang pembuatan laptop sejak 2019 dan sekarang sudah memiliki beberapa rumah serta motivasi yang saya berikan di sekolah sekolah terdekat.', '', '', ''),
(2, 'Sigit wasis subekti', '13 februari 2001', 'islam', NULL, 'Bahway, balik bukit, lampung barat, indonesia', 'laptop', 'liwa lampung barat', 'saya sudah lama bekerja menjadi seorang pembuatan laptop sejak 2019 dan sekarang sudah memiliki beberapa rumah serta motivasi yang saya berikan di sekolah sekolah terdekat.', '', '', ''),
(3, 'Sigit wasis subekti', '13 februari 2001', 'islam', NULL, 'Bahway, balik bukit, lampung barat, indonesia', 'laptop', 'liwa lampung barat', 'saya sudah lama bekerja menjadi seorang pembuatan laptop sejak 2019 dan sekarang sudah memiliki beberapa rumah serta motivasi yang saya berikan di sekolah sekolah terdekat.', '', '', ''),
(4, 'Sigit wasis subekti', '13 februari 2001', 'islam', NULL, 'Bahway, balik bukit, lampung barat, indonesia', 'laptop', 'liwa lampung barat', 'saya sudah lama bekerja menjadi seorang pembuatan laptop sejak 2019 dan sekarang sudah memiliki beberapa rumah serta motivasi yang saya berikan di sekolah sekolah terdekat.', '', '', ''),
(5, 'Sigit wasis subekti', '13 februari 2001', 'islam', NULL, 'Bahway, balik bukit, lampung barat, indonesia', 'laptop', 'liwa lampung barat', 'saya sudah lama bekerja menjadi seorang pembuatan laptop sejak 2019 dan sekarang sudah memiliki beberapa rumah serta motivasi yang saya berikan di sekolah sekolah terdekat.', '', '', ''),
(6, 'Sigit wasis subekti', '13 februari 2001', 'islam', NULL, 'Bahway, balik bukit, lampung barat, indonesia', 'laptop', 'liwa lampung barat', 'saya sudah lama bekerja menjadi seorang pembuatan laptop sejak 2019 dan sekarang sudah memiliki beberapa rumah serta motivasi yang saya berikan di sekolah sekolah terdekat.', '', '', ''),
(7, 'Sigit wasis subekti', '13 februari 2001', 'islam', NULL, 'Bahway, balik bukit, lampung barat, indonesia', 'laptop', 'liwa lampung barat', 'saya sudah lama bekerja menjadi seorang pembuatan laptop sejak 2019 dan sekarang sudah memiliki beberapa rumah serta motivasi yang saya berikan di sekolah sekolah terdekat.', '', '', ''),
(8, 'Sigit wasis subekti', '13 februari 2001', 'islam', NULL, 'Bahway, balik bukit, lampung barat, indonesia', 'laptop', 'liwa lampung barat', 'saya sudah lama bekerja menjadi seorang pembuatan laptop sejak 2019 dan sekarang sudah memiliki beberapa rumah serta motivasi yang saya berikan di sekolah sekolah terdekat.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rekening` varchar(20) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `nomor_rekening`, `nama_pemilik`, `gambar`, `tanggal_post`) VALUES
(1, 'BANK BRI Syariah', '98686868665464', 'Sigit wasis subekti', NULL, '2019-08-10 01:12:14'),
(3, 'BANK BNI Syariah', '09798792837918732', 'Sudiro', NULL, '2019-08-10 01:13:38'),
(4, 'BANK BCA', '969879283791839831', 'Sri ningsih', NULL, '2019-08-10 01:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_pelanggan`, `kode_transaksi`, `id_produk`, `harga`, `jumlah`, `total_harga`, `tanggal_transaksi`, `tanggal_update`) VALUES
(1, 0, 6, '07082019EVZHYCNA', 20, 4000, 1, 4000, '2019-08-07 00:00:00', '2019-08-07 14:49:58'),
(2, 0, 6, '07082019EVZHYCNA', 15, 90000, 1, 90000, '2019-08-07 00:00:00', '2019-08-07 14:49:58'),
(3, 0, 6, '100820193WNNEVZG', 16, 4500, 1, 4500, '2019-08-10 00:00:00', '2019-08-10 01:46:45'),
(4, 0, 6, '10082019SADJHQXB', 15, 90000, 1, 90000, '2019-08-10 00:00:00', '2019-08-10 02:36:55'),
(5, 0, 6, '10082019SADJHQXB', 13, 8000, 1, 8000, '2019-08-10 00:00:00', '2019-08-10 02:36:55'),
(6, 0, 6, '10082019SADJHQXB', 14, 70000, 1, 70000, '2019-08-10 00:00:00', '2019-08-10 02:36:55'),
(7, 0, 7, '12082019JIWXCVBL', 20, 4000, 1, 4000, '2019-08-12 00:00:00', '2019-08-12 07:57:30'),
(8, 0, 7, '12082019JIWXCVBL', 16, 4500, 900, 4050000, '2019-08-12 00:00:00', '2019-08-12 07:57:31'),
(9, 0, 7, '12082019JIWXCVBL', 15, 90000, 2, 180000, '2019-08-12 00:00:00', '2019-08-12 07:57:31'),
(10, 0, 7, '12082019JIWXCVBL', 14, 70000, 2, 140000, '2019-08-12 00:00:00', '2019-08-12 07:57:31'),
(11, 0, 7, '12082019JIWXCVBL', 13, 8000, 2, 16000, '2019-08-12 00:00:00', '2019-08-12 07:57:31'),
(12, 0, 7, '12082019JIWXCVBL', 12, 60500, 1, 60500, '2019-08-12 00:00:00', '2019-08-12 07:57:31'),
(13, 0, 7, '12082019JIWXCVBL', 9, 500, 1, 500, '2019-08-12 00:00:00', '2019-08-12 07:57:31'),
(14, 0, 7, '12082019JIWXCVBL', 10, 6500, 1, 6500, '2019-08-12 00:00:00', '2019-08-12 07:57:32'),
(15, 0, 7, '12082019JIWXCVBL', 8, 6500, 400, 2600000, '2019-08-12 00:00:00', '2019-08-12 07:57:32'),
(16, 0, 7, '12082019JIWXCVBL', 11, 6000, 1, 6000, '2019-08-12 00:00:00', '2019-08-12 07:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tangggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `tangggal_update`) VALUES
(19, 'sigit wasis subekti', 'sigitghoticmetal2001@gmail.com', 'subekti', '69a2586c122d311a3f3e4831ba244e2e70ba50fe', 'Admin', '2019-07-28 13:28:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indexes for table `produsen`
--
ALTER TABLE `produsen`
  ADD PRIMARY KEY (`id_produsen`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD UNIQUE KEY `nomor_rekening` (`nomor_rekening`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `produsen`
--
ALTER TABLE `produsen`
  MODIFY `id_produsen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
