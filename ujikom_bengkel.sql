-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2018 pada 09.31
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `ujikom_bengkel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_part`
--

CREATE TABLE IF NOT EXISTS `data_part` (
  `kode_part` varchar(5) NOT NULL,
  `part_name` varchar(100) NOT NULL,
  `nama_sukucadang` varchar(100) NOT NULL,
  `stok` int(4) NOT NULL,
  `harga` varchar(15) NOT NULL,
  PRIMARY KEY (`kode_part`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_part`
--

INSERT INTO `data_part` (`kode_part`, `part_name`, `nama_sukucadang`, `stok`, `harga`) VALUES
('16700', 'UNIT ASSY, FUEL PUMP', 'Pompa Bensin Lengkap', 8, '150000'),
('17210', 'ELEMENT COMP., AIR CLEANER', 'Saringan Udara', 10, '75000'),
('17213', 'SEAL A, AIR CLEANER', 'Sil Saringan Udara', 10, '35000'),
('17225', 'CASE SUB ASSY., AIR CLEANER', 'Kotak Saringan Udara', 10, '50000'),
('17245', 'COVER SUB ASSY., AIR CLEANER', 'Tutup Saringan Udara', 9, '15000'),
('17910', 'CABLE COMP THROTTLE', 'Kabel Gas', 10, '25000'),
('18200', 'MUFFLER ASSY EX', 'Knalpot Lengkap', 5, '125000'),
('18300', 'MUFFLER COMP EX', 'Knalpot (Tanpa Pengaman)', 10, '100000'),
('18318', 'PROTECTOR, MUFFLER', 'Pengaman Knalpot', 10, '75000'),
('28250', 'SPINDLE COMP., KICK STARTER', 'As Engkol', 10, '37500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `data_pekerjaan` (
  `kode_pekerjaan` varchar(5) NOT NULL,
  `nama_pekerjaan` text NOT NULL,
  `biaya` varchar(15) NOT NULL,
  PRIMARY KEY (`kode_pekerjaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pekerjaan`
--

INSERT INTO `data_pekerjaan` (`kode_pekerjaan`, `nama_pekerjaan`, `biaya`) VALUES
('01', 'KPB 1', '100000'),
('02', 'KPB 2', '150000'),
('03', 'KPB 3', '10000'),
('04', 'KPB 4', '15000'),
('05', 'Ganti Oli', '20000'),
('06', 'Ganti Ban', '25000'),
('07', 'Ganti Lampu', '10000'),
('08', 'Ganti Busi', '15000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `no_ktp` int(30) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `no_mesin` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `kilometer` int(10) NOT NULL,
  `email` text NOT NULL,
  `sosmed` text NOT NULL,
  PRIMARY KEY (`no_polisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`no_ktp`, `no_polisi`, `no_mesin`, `type`, `tahun`, `kilometer`, `email`, `sosmed`) VALUES
(12345, 'D 1432 KJ', 'KAJ293', 'Honda Supra FIT X', 2015, 2100, '', ''),
(64763, 'D 1482 HI', '30801', 'Honda Revo 100', 2017, 2100, '', ''),
(987, 'D 7528 KA', '92837', 'Honda Supra X 125 PGM-FI', 2016, 25000, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mekanik`
--

CREATE TABLE IF NOT EXISTS `mekanik` (
  `kode_mekanik` varchar(5) NOT NULL,
  `nama_depan` text NOT NULL,
  `nama_belakang` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  PRIMARY KEY (`kode_mekanik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mekanik`
--

INSERT INTO `mekanik` (`kode_mekanik`, `nama_depan`, `nama_belakang`, `tgl_lahir`, `alamat`, `no_hp`) VALUES
('01', 'Anugrah', 'Wardhani', '2000-05-10', 'Ngamprah Kidul', '2147483647'),
('02', 'Heru', 'Julianto', '1999-07-15', 'Cijenjing', '0827352839');

-- --------------------------------------------------------

--
-- Struktur dari tabel `part`
--

CREATE TABLE IF NOT EXISTS `part` (
  `id_trx` varchar(5) NOT NULL,
  `kode_part` varchar(5) NOT NULL,
  `banyak` int(4) NOT NULL,
  `status` text NOT NULL,
  KEY `id_trx` (`id_trx`),
  KEY `kode_part` (`kode_part`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `part`
--

INSERT INTO `part` (`id_trx`, `kode_part`, `banyak`, `status`) VALUES
('001', '16700', 1, 'Diterima'),
('001', '17245', 1, 'Diterima'),
('002', '17213', 1, 'Diterima'),
('003', '16700', 1, 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
  `id_trx` varchar(5) NOT NULL,
  `kode_pekerjaan` varchar(5) NOT NULL,
  `banyak_pekerjaan` int(4) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_trx`, `kode_pekerjaan`, `banyak_pekerjaan`, `status`) VALUES
('001', '01', 1, 'Kerjakan'),
('001', '02', 1, 'Kerjakan'),
('002', '01', 1, 'Kerjakan'),
('002', '02', 1, 'Kerjakan'),
('002', '03', 1, 'Kerjakan'),
('002', '04', 1, 'Kerjakan'),
('002', '05', 1, 'Kerjakan'),
('003', '01', 1, 'Kerjakan'),
('003', '05', 1, 'Kerjakan'),
('003', '06', 1, 'Kerjakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `no_ktp` int(30) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(15) NOT NULL,
  PRIMARY KEY (`no_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`no_ktp`, `nama`, `alamat`, `no_hp`) VALUES
(987, 'Heru', 'Cijengjing', 832918638),
(12345, 'Anugrah Wardhani', 'Ngamprah Kidul RT.05/03', 2147483647),
(64763, 'Gani', 'Cimareme', 9484);

-- --------------------------------------------------------

--
-- Stand-in structure for view `struk_pembayaran`
--
CREATE TABLE IF NOT EXISTS `struk_pembayaran` (
`id_trx` varchar(5)
,`tanggal` varchar(20)
,`jam_masuk` varchar(20)
,`jam_keluar` varchar(20)
,`no_polisi` varchar(10)
,`type` varchar(50)
,`nama` text
,`alamat` text
,`kode_mekanik` varchar(5)
,`nama_depan` text
,`kode_part` varchar(5)
,`part_name` varchar(100)
,`banyak` int(4)
,`harga` varchar(15)
,`kode_pekerjaan` varchar(5)
,`nama_pekerjaan` text
,`banyak_pekerjaan` int(4)
,`biaya` varchar(15)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `struk_pembayaranpart`
--
CREATE TABLE IF NOT EXISTS `struk_pembayaranpart` (
`id_trx` varchar(5)
,`no_polisi` varchar(10)
,`nama` text
,`alamat` text
,`type` varchar(50)
,`kode_mekanik` varchar(5)
,`nama_depan` text
,`tanggal` varchar(20)
,`kode_part` varchar(5)
,`part_name` varchar(100)
,`banyak` int(4)
,`harga` varchar(15)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `struk_pembayaranpekerjaan`
--
CREATE TABLE IF NOT EXISTS `struk_pembayaranpekerjaan` (
`id_trx` varchar(5)
,`no_polisi` varchar(10)
,`nama` text
,`alamat` text
,`type` varchar(50)
,`kode_mekanik` varchar(5)
,`nama_depan` text
,`tanggal` varchar(20)
,`kode_pekerjaan` varchar(5)
,`nama_pekerjaan` text
,`banyak_pekerjaan` int(4)
,`biaya` varchar(15)
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_trx` varchar(5) NOT NULL,
  `no_ktp` int(30) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `kode_mekanik` varchar(5) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `jam_masuk` varchar(20) NOT NULL,
  `jam_keluar` varchar(20) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id_trx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_trx`, `no_ktp`, `no_polisi`, `kode_mekanik`, `tanggal`, `jam_masuk`, `jam_keluar`, `status`) VALUES
('001', 12345, 'D 1432 KJ', '01', '24-02-2018', '01:51:14', '', 'Selesai'),
('002', 987, 'D 7528 KA', '01', '25-02-2018', '02:27:12', '', 'Selesai'),
('003', 64763, 'D 1482 HI', '01', '26-02-2018', '03:18:48', '03:21:56', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_kendaraan`
--

CREATE TABLE IF NOT EXISTS `type_kendaraan` (
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type_kendaraan`
--

INSERT INTO `type_kendaraan` (`type`) VALUES
('Honda Blade 110'),
('Honda Blade 125 FI'),
('Honda Grand'),
('Honda Kharisma'),
('Honda Kirana'),
('Honda Legenda'),
('Honda New Blade 110'),
('Honda Revo 100'),
('Honda Revo AT'),
('Honda Revo FI'),
('Honda Supra 100'),
('Honda Supra FIT'),
('Honda Supra FIT New'),
('Honda Supra FIT X'),
('Honda Supra GTR 150'),
('Honda Supra X 125'),
('Honda Supra X 125 FI'),
('Honda Supra X 125 Helm In'),
('Honda Supra X 125 PGM-FI'),
('Honda WIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(5) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
('2', 'front', 'front', 1),
('3', 'pic', 'pic', 2),
('4', 'mekanik', 'mekanik', 3),
('5', 'kepala', 'kepala', 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_kendaraan`
--
CREATE TABLE IF NOT EXISTS `view_kendaraan` (
`nama` text
,`no_polisi` varchar(10)
,`type` varchar(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_part`
--
CREATE TABLE IF NOT EXISTS `view_part` (
`id_trx` varchar(5)
,`nama` text
,`no_polisi` varchar(10)
,`kode_part` varchar(5)
,`part_name` varchar(100)
,`nama_sukucadang` varchar(100)
,`banyak` int(4)
,`harga` varchar(15)
,`status` text
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pekerjaan`
--
CREATE TABLE IF NOT EXISTS `view_pekerjaan` (
`id_trx` varchar(5)
,`nama` text
,`no_polisi` varchar(10)
,`kode_pekerjaan` varchar(5)
,`nama_pekerjaan` text
,`banyak_pekerjaan` int(4)
,`biaya` varchar(15)
,`status` text
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `view_transaksi`
--
CREATE TABLE IF NOT EXISTS `view_transaksi` (
`tanggal` varchar(20)
,`id_trx` varchar(5)
,`nama` text
,`no_polisi` varchar(10)
,`type` varchar(50)
,`status` text
);
-- --------------------------------------------------------

--
-- Struktur untuk view `struk_pembayaran`
--
DROP TABLE IF EXISTS `struk_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `struk_pembayaran` AS select `transaksi`.`id_trx` AS `id_trx`,`transaksi`.`tanggal` AS `tanggal`,`transaksi`.`jam_masuk` AS `jam_masuk`,`transaksi`.`jam_keluar` AS `jam_keluar`,`transaksi`.`no_polisi` AS `no_polisi`,`kendaraan`.`type` AS `type`,`pelanggan`.`nama` AS `nama`,`pelanggan`.`alamat` AS `alamat`,`transaksi`.`kode_mekanik` AS `kode_mekanik`,`mekanik`.`nama_depan` AS `nama_depan`,`part`.`kode_part` AS `kode_part`,`data_part`.`part_name` AS `part_name`,`part`.`banyak` AS `banyak`,`data_part`.`harga` AS `harga`,`pekerjaan`.`kode_pekerjaan` AS `kode_pekerjaan`,`data_pekerjaan`.`nama_pekerjaan` AS `nama_pekerjaan`,`pekerjaan`.`banyak_pekerjaan` AS `banyak_pekerjaan`,`data_pekerjaan`.`biaya` AS `biaya` from (((((((`transaksi` left join `kendaraan` on((`kendaraan`.`no_polisi` = `transaksi`.`no_polisi`))) left join `mekanik` on((`mekanik`.`kode_mekanik` = `transaksi`.`kode_mekanik`))) left join `pelanggan` on(((`pelanggan`.`no_ktp` = `transaksi`.`no_ktp`) and (`pelanggan`.`no_ktp` = `kendaraan`.`no_ktp`)))) left join `part` on((`part`.`id_trx` = `transaksi`.`id_trx`))) left join `data_part` on((`data_part`.`kode_part` = `part`.`kode_part`))) left join `pekerjaan` on((`pekerjaan`.`id_trx` = `transaksi`.`id_trx`))) left join `data_pekerjaan` on((`data_pekerjaan`.`kode_pekerjaan` = `pekerjaan`.`kode_pekerjaan`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `struk_pembayaranpart`
--
DROP TABLE IF EXISTS `struk_pembayaranpart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `struk_pembayaranpart` AS select `transaksi`.`id_trx` AS `id_trx`,`transaksi`.`no_polisi` AS `no_polisi`,`pelanggan`.`nama` AS `nama`,`pelanggan`.`alamat` AS `alamat`,`kendaraan`.`type` AS `type`,`transaksi`.`kode_mekanik` AS `kode_mekanik`,`mekanik`.`nama_depan` AS `nama_depan`,`transaksi`.`tanggal` AS `tanggal`,`part`.`kode_part` AS `kode_part`,`data_part`.`part_name` AS `part_name`,`part`.`banyak` AS `banyak`,`data_part`.`harga` AS `harga` from (((((`transaksi` left join `kendaraan` on((`kendaraan`.`no_polisi` = `transaksi`.`no_polisi`))) left join `mekanik` on((`mekanik`.`kode_mekanik` = `transaksi`.`kode_mekanik`))) left join `pelanggan` on((`pelanggan`.`no_ktp` = `transaksi`.`no_ktp`))) left join `part` on((`part`.`id_trx` = `transaksi`.`id_trx`))) left join `data_part` on((`data_part`.`kode_part` = `part`.`kode_part`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `struk_pembayaranpekerjaan`
--
DROP TABLE IF EXISTS `struk_pembayaranpekerjaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `struk_pembayaranpekerjaan` AS select `transaksi`.`id_trx` AS `id_trx`,`transaksi`.`no_polisi` AS `no_polisi`,`pelanggan`.`nama` AS `nama`,`pelanggan`.`alamat` AS `alamat`,`kendaraan`.`type` AS `type`,`transaksi`.`kode_mekanik` AS `kode_mekanik`,`mekanik`.`nama_depan` AS `nama_depan`,`transaksi`.`tanggal` AS `tanggal`,`pekerjaan`.`kode_pekerjaan` AS `kode_pekerjaan`,`data_pekerjaan`.`nama_pekerjaan` AS `nama_pekerjaan`,`pekerjaan`.`banyak_pekerjaan` AS `banyak_pekerjaan`,`data_pekerjaan`.`biaya` AS `biaya` from (((((`transaksi` left join `kendaraan` on((`kendaraan`.`no_polisi` = `transaksi`.`no_polisi`))) left join `mekanik` on((`mekanik`.`kode_mekanik` = `transaksi`.`kode_mekanik`))) left join `pelanggan` on((`pelanggan`.`no_ktp` = `transaksi`.`no_ktp`))) left join `pekerjaan` on((`pekerjaan`.`id_trx` = `transaksi`.`id_trx`))) left join `data_pekerjaan` on((`data_pekerjaan`.`kode_pekerjaan` = `pekerjaan`.`kode_pekerjaan`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `view_kendaraan`
--
DROP TABLE IF EXISTS `view_kendaraan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_kendaraan` AS select `pelanggan`.`nama` AS `nama`,`kendaraan`.`no_polisi` AS `no_polisi`,`kendaraan`.`type` AS `type` from (`kendaraan` left join `pelanggan` on((`pelanggan`.`no_ktp` = `kendaraan`.`no_ktp`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `view_part`
--
DROP TABLE IF EXISTS `view_part`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_part` AS select `transaksi`.`id_trx` AS `id_trx`,`pelanggan`.`nama` AS `nama`,`transaksi`.`no_polisi` AS `no_polisi`,`part`.`kode_part` AS `kode_part`,`data_part`.`part_name` AS `part_name`,`data_part`.`nama_sukucadang` AS `nama_sukucadang`,`part`.`banyak` AS `banyak`,`data_part`.`harga` AS `harga`,`part`.`status` AS `status` from (((`transaksi` left join `part` on((`part`.`id_trx` = `transaksi`.`id_trx`))) left join `data_part` on((`data_part`.`kode_part` = `part`.`kode_part`))) left join `pelanggan` on((`pelanggan`.`no_ktp` = `transaksi`.`no_ktp`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `view_pekerjaan`
--
DROP TABLE IF EXISTS `view_pekerjaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pekerjaan` AS select `transaksi`.`id_trx` AS `id_trx`,`pelanggan`.`nama` AS `nama`,`transaksi`.`no_polisi` AS `no_polisi`,`pekerjaan`.`kode_pekerjaan` AS `kode_pekerjaan`,`data_pekerjaan`.`nama_pekerjaan` AS `nama_pekerjaan`,`pekerjaan`.`banyak_pekerjaan` AS `banyak_pekerjaan`,`data_pekerjaan`.`biaya` AS `biaya`,`pekerjaan`.`status` AS `status` from (((`transaksi` left join `pekerjaan` on((`pekerjaan`.`id_trx` = `transaksi`.`id_trx`))) left join `data_pekerjaan` on((`data_pekerjaan`.`kode_pekerjaan` = `pekerjaan`.`kode_pekerjaan`))) left join `pelanggan` on((`pelanggan`.`no_ktp` = `transaksi`.`no_ktp`)));

-- --------------------------------------------------------

--
-- Struktur untuk view `view_transaksi`
--
DROP TABLE IF EXISTS `view_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_transaksi` AS select `transaksi`.`tanggal` AS `tanggal`,`transaksi`.`id_trx` AS `id_trx`,`pelanggan`.`nama` AS `nama`,`kendaraan`.`no_polisi` AS `no_polisi`,`kendaraan`.`type` AS `type`,`transaksi`.`status` AS `status` from ((`transaksi` left join `pelanggan` on((`pelanggan`.`no_ktp` = `transaksi`.`no_ktp`))) left join `kendaraan` on((`kendaraan`.`no_polisi` = `transaksi`.`no_polisi`)));

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `part`
--
ALTER TABLE `part`
  ADD CONSTRAINT `part_ibfk_3` FOREIGN KEY (`id_trx`) REFERENCES `transaksi` (`id_trx`),
  ADD CONSTRAINT `part_ibfk_4` FOREIGN KEY (`kode_part`) REFERENCES `data_part` (`kode_part`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
