-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 06:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbvote`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon`
--

CREATE TABLE `tb_calon` (
  `id_calon` int(11) NOT NULL,
  `nama_calon` varchar(100) DEFAULT NULL,
  `pendidikan` enum('S1','S2','S3','SMA/SMK','SMP') DEFAULT NULL,
  `foto_calon` varchar(200) DEFAULT NULL,
  `pengalaman` blob,
  `visi_misi` blob,
  `program_kerja` blob,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_calon`
--

INSERT INTO `tb_calon` (`id_calon`, `nama_calon`, `pendidikan`, `foto_calon`, `pengalaman`, `visi_misi`, `program_kerja`, `status`) VALUES
(21, 'Ngamin', 'S1', 'FB_IMG_1598438846724.jpg', 0x50656e67616c616d616e204b65726a61203a0d0a312e2057616b696c204b6570616c612053656b6f6c616820426964616e67204b657369737761616e20646920534d502041492d4d616e7368757269796168204369616e6a75722e0d0a322e2050656e64616d70696e672044657361204d696772616e2050726f64756b74696620284465736d69677261746966292070726f6772616d2064617269204b656d656e74657269616e204b6574656e6167616b65726a61616e2052657075626c696b20496e646f6e6573696120284b656d6e616b6572205249292e0d0a332e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a342e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529c2a04b61622ec2a04369616e6a75722e, 0x566973693a0d0a4d6577756a75646b616e204b617975626968692079616e67204e79616d616e2c205365686174204265726c616e6461736b616e20427564617961206d656e756a7520446573612053656a6168746572612064616e204d616e646972692e0d0a0d0a4d6973693a0d0a2d204d6577756a75646b616e204b656e79616d616e616e202c4b65616d616e616e2064616e204b65746572746962616e206469206c696e676b756e67616e2044657361204b617975626968692e0d0a2d204d6577756a75646b616e2054617461204b656c6f6c61202050656d6572696e746168616e2079616e67206c65626968206261696b2e0d0a2d204d656e696e676b61746b616e204b65626572736968616e206c696e676b756e67616e2c2050656c6179616e616e204b657365686174616e6d7365727461206d656e6775736168616b616e206a616d696e616e204b657365686174616e204d6173796172616b6174206d656c616c75692050726f6772616d2050656d6572696e7461682e0d0a2d204d656e696e676b61746b616e204b6573656a616874657261616e204d6173796172616b61742044657361206d656c616c75692042554d44455320756e74756b206d656d62756b61206c6170616e67616e206b65726a612062616769206d6173796172616b6174207365727461206d656e696e676b61746b616e2070726f64756b7369206b6572616a696e616e2072756d61682074616e6767612e0d0a2d2054657277756a75646e79612053444d2079616e67205372616468612064616e204268616b746920746572686164617020547568616e2059616e67204d616861204573612e, 0x312e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a322e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, '1'),
(22, 'Iyan Sopyan', 'S1', 'FB_IMG_1598438846724.jpg', 0x50656e67616c616d616e204b65726a61203a0d0a312e2057616b696c204b6570616c612053656b6f6c616820426964616e67204b657369737761616e20646920534d502041492d4d616e7368757269796168204369616e6a75722e0d0a322e2050656e64616d70696e672044657361204d696772616e2050726f64756b74696620284465736d69677261746966292070726f6772616d2064617269204b656d656e74657269616e204b6574656e6167616b65726a61616e2052657075626c696b20496e646f6e6573696120284b656d6e616b6572205249292e0d0a332e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a342e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, 0x566973693a0d0a4d6577756a75646b616e204b617975626968692079616e67204e79616d616e2c205365686174204265726c616e6461736b616e20427564617961206d656e756a7520446573612053656a6168746572612064616e204d616e646972692e0d0a0d0a4d6973693a0d0a2d204d6577756a75646b616e204b656e79616d616e616e202c4b65616d616e616e2064616e204b65746572746962616e206469206c696e676b756e67616e2044657361204b617975626968692e0d0a2d204d6577756a75646b616e2054617461204b656c6f6c612050656d6572696e746168616e2079616e67206c65626968206261696b2e0d0a2d204d656e696e676b61746b616e204b65626572736968616e206c696e676b756e67616e2c2050656c6179616e616e204b657365686174616e6d7365727461206d656e6775736168616b616e206a616d696e616e204b657365686174616e204d6173796172616b6174206d656c616c75692050726f6772616d2050656d6572696e7461682e0d0a2d2054657277756a75646e79612053444d2079616e67205372616468612064616e204268616b746920746572686164617020547568616e2059616e67204d616861204573612e, 0x312e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a322e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, '1'),
(23, 'Badrul', 'S3', 'FB_IMG_1598438846724.jpg', 0x50656e67616c616d616e204b65726a61203a0d0a312e2057616b696c204b6570616c612053656b6f6c616820426964616e67204b657369737761616e20646920534d502041492d4d616e7368757269796168204369616e6a75722e0d0a322e2050656e64616d70696e672044657361204d696772616e2050726f64756b74696620284465736d69677261746966292070726f6772616d2064617269204b656d656e74657269616e204b6574656e6167616b65726a61616e2052657075626c696b20496e646f6e6573696120284b656d6e616b6572205249292e0d0a332e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a342e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, 0x566973693a0d0a4d6577756a75646b616e204b617975626968692079616e67204e79616d616e2c205365686174204265726c616e6461736b616e20427564617961206d656e756a7520446573612053656a6168746572612064616e204d616e646972692e0d0a0d0a4d6973693a0d0a2d204d6577756a75646b616e204b656e79616d616e616e202c4b65616d616e616e2064616e204b65746572746962616e206469206c696e676b756e67616e2044657361204b617975626968692e0d0a2d204d6577756a75646b616e2054617461204b656c6f6c612050656d6572696e746168616e2079616e67206c65626968206261696b2e0d0a2d204d656e696e676b61746b616e204b65626572736968616e206c696e676b756e67616e2c2050656c6179616e616e204b657365686174616e6d7365727461206d656e6775736168616b616e206a616d696e616e204b657365686174616e204d6173796172616b6174206d656c616c75692050726f6772616d2050656d6572696e7461682e0d0a2d2054657277756a75646e79612053444d2079616e67205372616468612064616e204268616b746920746572686164617020547568616e2059616e67204d616861204573612e, 0x312e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a322e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, '1'),
(24, 'Danil', 'S2', 'FB_IMG_1598438846724.jpg', 0x50656e67616c616d616e204b65726a61203a0d0a312e2057616b696c204b6570616c612053656b6f6c616820426964616e67204b657369737761616e20646920534d502041492d4d616e7368757269796168204369616e6a75722e0d0a322e2050656e64616d70696e672044657361204d696772616e2050726f64756b74696620284465736d69677261746966292070726f6772616d2064617269204b656d656e74657269616e204b6574656e6167616b65726a61616e2052657075626c696b20496e646f6e6573696120284b656d6e616b6572205249292e0d0a332e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a342e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, 0x566973693a0d0a4d6577756a75646b616e204b617975626968692079616e67204e79616d616e2c205365686174204265726c616e6461736b616e20427564617961206d656e756a7520446573612053656a6168746572612064616e204d616e646972692e0d0a0d0a4d6973693a0d0a2d204d6577756a75646b616e204b656e79616d616e616e202c4b65616d616e616e2064616e204b65746572746962616e206469206c696e676b756e67616e2044657361204b617975626968692e0d0a2d204d6577756a75646b616e2054617461204b656c6f6c612050656d6572696e746168616e2079616e67206c65626968206261696b2e0d0a2d204d656e696e676b61746b616e204b65626572736968616e206c696e676b756e67616e2c2050656c6179616e616e204b657365686174616e6d7365727461206d656e6775736168616b616e206a616d696e616e204b657365686174616e204d6173796172616b6174206d656c616c75692050726f6772616d2050656d6572696e7461682e0d0a2d204d656e696e676b61746b616e204b6573656a616874657261616e204d6173796172616b61742044657361206d656c616c75692042554d44455320756e74756b206d656d62756b61206c6170616e67616e206b65726a612062616769206d6173796172616b6174207365727461206d656e696e676b61746b616e2070726f64756b7369206b6572616a696e616e2072756d61682074616e6767612e0d0a2d2054657277756a75646e79612053444d2079616e67205372616468612064616e204268616b746920746572686164617020547568616e2059616e67204d616861204573612e, 0x312e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a322e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, '1'),
(25, 'Nosa', 'S2', 'FB_IMG_1598438846724.jpg', 0x50656e67616c616d616e204b65726a61203a0d0a312e2057616b696c204b6570616c612053656b6f6c616820426964616e67204b657369737761616e20646920534d502041492d4d616e7368757269796168204369616e6a75722e0d0a322e2050656e64616d70696e672044657361204d696772616e2050726f64756b74696620284465736d69677261746966292070726f6772616d2064617269204b656d656e74657269616e204b6574656e6167616b65726a61616e2052657075626c696b20496e646f6e6573696120284b656d6e616b6572205249292e0d0a332e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a342e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, 0x566973693a0d0a4d6577756a75646b616e204b617975626968692079616e67204e79616d616e2c205365686174204265726c616e6461736b616e20427564617961206d656e756a7520446573612053656a6168746572612064616e204d616e646972692e0d0a0d0a4d6973693a0d0a2d204d6577756a75646b616e204b656e79616d616e616e202c4b65616d616e616e2064616e204b65746572746962616e206469206c696e676b756e67616e2044657361204b617975626968692e0d0a2d204d6577756a75646b616e2054617461204b656c6f6c612050656d6572696e746168616e2079616e67206c65626968206261696b2e0d0a2d2054657277756a75646e79612053444d2079616e67205372616468612064616e204268616b746920746572686164617020547568616e2059616e67204d616861204573612e, 0x312e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a322e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, '1'),
(26, 'Yatno', 'SMA/SMK', 'FB_IMG_1598438846724.jpg', 0x50656e67616c616d616e204b65726a61203a0d0a312e2057616b696c204b6570616c612053656b6f6c616820426964616e67204b657369737761616e20646920534d502041492d4d616e7368757269796168204369616e6a75722e0d0a322e2050656e64616d70696e672044657361204d696772616e2050726f64756b74696620284465736d69677261746966292070726f6772616d2064617269204b656d656e74657269616e204b6574656e6167616b65726a61616e2052657075626c696b20496e646f6e6573696120284b656d6e616b6572205249292e0d0a332e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a342e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, 0x566973693a0d0a4d6577756a75646b616e204b617975626968692079616e67204e79616d616e2c205365686174204265726c616e6461736b616e20427564617961206d656e756a7520446573612053656a6168746572612064616e204d616e646972692e0d0a0d0a4d6973693a0d0a2d204d6577756a75646b616e204b656e79616d616e616e202c4b65616d616e616e2064616e204b65746572746962616e206469206c696e676b756e67616e2044657361204b617975626968692e0d0a2d204d6577756a75646b616e2054617461204b656c6f6c612050656d6572696e746168616e2079616e67206c65626968206261696b2e0d0a2d2054657277756a75646e79612053444d2079616e67205372616468612064616e204268616b746920746572686164617020547568616e2059616e67204d616861204573612e, 0x312e205374616666204469766973692064616e204f7267616e69736173692064692050616e7761736c75204b6563616d6174616e2050616365742e0d0a322e2053746166662050656e6761776173616e2064616e20487562756e67616e20416e746172204c656d6261676120646920426164616e2050656e67617761732050656d696c6968616e20556d756d202842617761736c7529204b61622e204369616e6a75722e, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftarvote`
--

CREATE TABLE `tb_daftarvote` (
  `daftarvote_id` int(11) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal_mulai` datetime DEFAULT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  `status_id` enum('0','1','2') DEFAULT NULL,
  `flag_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_daftarvote`
--

INSERT INTO `tb_daftarvote` (`daftarvote_id`, `nama`, `keterangan`, `tanggal_mulai`, `tanggal_selesai`, `status_id`, `flag_id`) VALUES
(6, 'Pemilihan Kepala Desa', 'Pemilihan Kepala Desa Bungurasih', '2022-11-21 18:07:00', '2022-12-21 18:00:08', '1', 1),
(7, 'Pemilihan Lurah', 'Pemilihan Lurah Desa Bungurasih', '2022-11-21 18:14:00', '2022-12-21 18:14:00', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nama_pengguna` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `level` enum('Administrator','Petugas','Pemilih') DEFAULT NULL,
  `status` enum('1','0') DEFAULT NULL,
  `jenis` enum('PAN','PST') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nik`, `alamat`, `nama_pengguna`, `username`, `password`, `latitude`, `longitude`, `level`, `status`, `jenis`) VALUES
(1, '3574020206980003', 'JL. Panglima Sudirman 1 No. 50, Sumber Rejo, Kec. Gresik', 'Admin', 'admin', '1234', '-7.1630848', '112.6563840', 'Administrator', '1', 'PAN'),
(58, '3574020206980778', 'Jl. Bogangin I No.1, Kedurus, Kec. Karangpilang, Kota SBY, Jawa Timur 60222', 'Adam Maulana Ibrahim', 'adam12', '123', '-7.1630848', '112.6563840', 'Pemilih', '1', 'PST'),
(59, '3574020206980005', 'Jl. Raya Karang Klumprik No.24, Balas Klumprik, Kec. Wiyung, Kota SBY, Jawa Timur 60222', 'Muhammad Sani', 'sani69', '123', '-7.3092144', '112.5125893', 'Pemilih', '1', 'PST'),
(60, '3574020206980006', 'Jl. Mayjen Sungkono No.89, Gn. Sari, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60224', 'Chelsea Isla', 'isla11', '123', '-7.3479694', '112.7205408', 'Pemilih', '1', 'PST'),
(61, '3574020206980007', 'Jl. Mayjen Sungkono No.9, Gn. Sari, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60224', 'Muhammad Akbar Putra', 'akbar_putra12', '123', '-7.3092144', '112.5125893', 'Pemilih', '1', 'PST'),
(62, '3574020206980008', 'Jl. Mayjen Sungkono No.10, Gn. Sari, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60224', 'Anastasia Kirana', 'kiren12', '123', '-7.3092144', '112.5125893', 'Pemilih', '1', 'PST'),
(63, '3574020206980009', 'Jl. Mayjen Sungkono No.20, Gn. Sari, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60224', 'Abdul Krisna Khabib', 'khabib665', '123', '-7.3479694\n', '112.7205408\n', 'Pemilih', '1', 'PST'),
(64, '3574020206980002', 'Jl. Mayjen Sungkono No.2, Gn. Sari, Kec. Dukuhpakis, Kota SBY, Jawa Timur 60224', 'Tikno', 'tikno99', '123', '-7.192576', '113.2331008', 'Pemilih', '1', 'PST'),
(65, '3574020206980001', 'Jl. Bungurasih Tengah No.104, Bungurasih, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur 61256', 'Erna Wati Kusuma', 'kusuma_23', '123', '-7.3092144', '112.7205408\n', 'Pemilih', '1', 'PST'),
(66, '3574020206980010', 'Jl. Bungurasih Tengah No.14, Bungurasih, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur 61256', 'Budi Eka Pratama', 'budi90', '123', '-7.3092144', '112.5125893', 'Pemilih', '1', 'PST'),
(67, '3574020206980011', 'Jl. Bungurasih Tengah No.04, Bungurasih, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur 61256', 'I Komang Anjas', 'komang_16', '123', '-7.3482516', '112.7203822', 'Pemilih', '1', 'PST'),
(68, '3574020206981600', 'Jl. Bungurasih Tengah No.10, Bungurasih, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur 61256', 'Sutrisno Eka Winata', 'winata12', '124', '-7.192576', '113.2331008', 'Petugas', '1', 'PAN'),
(69, '3574020206980138', 'Jl. Bungurasih Tengah No.84, Bungurasih, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur 61256', 'Tasya Khusnul Khotimah', 'tas_sya', '124', '-7.192576', '113.2331008', 'Petugas', '1', 'PAN'),
(70, '3574020206980890', 'Jl. Kenjeran No.99, Simokerto, Kec. Simokerto, Kota SBY, Jawa Timur 60142', 'Herman Suherman', 'man_suherman', '123', '-7.3482471', '112.7203777', 'Pemilih', '1', 'PST');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vote`
--

CREATE TABLE `tb_vote` (
  `id_vote` int(11) NOT NULL,
  `daftarvote_id` int(11) DEFAULT NULL,
  `id_calon` varchar(2) DEFAULT NULL,
  `id_pemilih` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `latitude_akhir` varchar(50) NOT NULL,
  `longitude_akhir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_vote`
--

INSERT INTO `tb_vote` (`id_vote`, `daftarvote_id`, `id_calon`, `id_pemilih`, `date`, `latitude_akhir`, `longitude_akhir`) VALUES
(25, 7, '25', 64, '2022-11-21 18:53:50', '-7.3483357', '112.7200024'),
(26, 6, '23', 58, '2022-11-21 19:03:23', '-7.2974336', '112.7317504'),
(27, 6, '21', 59, '2022-11-21 19:11:55', '-7.2941568', '112.7350272'),
(28, 6, '21', 60, '2022-11-21 19:17:11', '-7.3482497', '112.7203819'),
(29, 6, '21', 62, '2022-11-22 10:05:53', '-7.3479775', '112.7205406'),
(30, 6, '23', 61, '2022-11-22 10:06:35', '-7.3479816', '112.7205337'),
(31, 7, '26', 63, '2022-11-22 10:11:52', '-7.3479818', '112.7205324'),
(32, 7, '24', 67, '2022-11-22 10:13:33', '-7.3479761', '112.7205426'),
(33, 7, '24', 65, '2022-11-22 10:35:40', '-7.347975', '112.7205421'),
(34, 7, '26', 66, '2022-11-22 10:42:02', '-7.347975', '112.7205421'),
(35, 6, '22', 70, '2022-11-22 17:14:21', '-7.3382542', '112.7271187');

-- --------------------------------------------------------

--
-- Table structure for table `tb_votekandidat`
--

CREATE TABLE `tb_votekandidat` (
  `votekandidat_id` int(11) NOT NULL,
  `daftarvote_id` int(11) DEFAULT NULL,
  `id_calon` int(11) DEFAULT NULL,
  `no_urut` int(11) DEFAULT NULL,
  `flag_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_votekandidat`
--

INSERT INTO `tb_votekandidat` (`votekandidat_id`, `daftarvote_id`, `id_calon`, `no_urut`, `flag_id`) VALUES
(28, 6, 21, 1, 1),
(29, 6, 22, 2, 1),
(30, 6, 23, 3, 1),
(31, 7, 24, 1, 1),
(32, 7, 25, 2, 1),
(33, 7, 26, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_votepemilih`
--

CREATE TABLE `tb_votepemilih` (
  `votepemilih_id` int(11) NOT NULL,
  `daftarvote_id` int(11) DEFAULT NULL,
  `id_pemilih` int(11) DEFAULT NULL,
  `flag_id` tinyint(4) DEFAULT NULL,
  `status_id` enum('1','2') DEFAULT NULL COMMENT '1 = BELUM MEMILIH / 2 = SUDAH MEMILIH'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_votepemilih`
--

INSERT INTO `tb_votepemilih` (`votepemilih_id`, `daftarvote_id`, `id_pemilih`, `flag_id`, `status_id`) VALUES
(30, 6, 58, 1, '2'),
(31, 6, 59, 1, '2'),
(32, 6, 60, 1, '2'),
(33, 6, 61, 1, '2'),
(34, 6, 62, 1, '2'),
(35, 7, 63, 1, '2'),
(36, 7, 64, 1, '2'),
(37, 7, 65, 1, '2'),
(38, 7, 66, 1, '2'),
(39, 7, 67, 9, '2'),
(40, 7, 67, 1, '2'),
(41, 6, 70, 1, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_calon`
--
ALTER TABLE `tb_calon`
  ADD PRIMARY KEY (`id_calon`) USING BTREE;

--
-- Indexes for table `tb_daftarvote`
--
ALTER TABLE `tb_daftarvote`
  ADD PRIMARY KEY (`daftarvote_id`) USING BTREE;

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_vote`
--
ALTER TABLE `tb_vote`
  ADD PRIMARY KEY (`id_vote`) USING BTREE;

--
-- Indexes for table `tb_votekandidat`
--
ALTER TABLE `tb_votekandidat`
  ADD PRIMARY KEY (`votekandidat_id`) USING BTREE;

--
-- Indexes for table `tb_votepemilih`
--
ALTER TABLE `tb_votepemilih`
  ADD PRIMARY KEY (`votepemilih_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_calon`
--
ALTER TABLE `tb_calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_daftarvote`
--
ALTER TABLE `tb_daftarvote`
  MODIFY `daftarvote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `tb_vote`
--
ALTER TABLE `tb_vote`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tb_votekandidat`
--
ALTER TABLE `tb_votekandidat`
  MODIFY `votekandidat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tb_votepemilih`
--
ALTER TABLE `tb_votepemilih`
  MODIFY `votepemilih_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
