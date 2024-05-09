-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 11:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atmakitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `Id` int(11) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Customer_Email` varchar(255) NOT NULL,
  `Jarak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`Id`, `Alamat`, `Customer_Email`, `Jarak`) VALUES
(1, 'babarsari', 'emily.jones@example.com', 5),
(2, '456 Elm Street', 'RayzelGay@gmail.com', 10),
(3, '789 Oak Avenue', 'RayzelGay@gmail.com', 8),
(4, '321 Maple Lane', 'RayzelGay@gmail.com', 2),
(5, '654 Pine Road', 'RayzelGay@gmail.com', 6),
(6, '987 Cedar Court', 'RayzelGay@gmail.com', 1),
(7, '246 Birch Avenue', 'RayzelGay@gmail.com', 9),
(8, '135 Walnut Street', 'RayzelGay@gmail.com', 2),
(9, '369 Cherry Lane', 'RayzelGay@gmail.com', 2),
(10, '579 Sycamore Drive', 'RayzelGay@gmail.com', 2),
(11, '802 Elmwood Avenue', 'RayzelGay@gmail.com', 5),
(12, '147 Cedar Street', 'RayzelGay@gmail.com', 8),
(13, '258 Pinecrest Drive', 'RayzelGay@gmail.com', 6),
(14, '369 Oakwood Boulevard', 'RayzelGay@gmail.com', 5),
(15, '753 Maple Avenue', 'RayzelGay@gmail.com', 5),
(16, '951 Birchwood Lane', 'RayzelGay@gmail.com', 8),
(17, '159 Elm Street', 'RayzelGay@gmail.com', 8),
(18, '357 Cherry Street', 'RayzelGay@gmail.com', 5),
(19, '468 Pinecrest Avenue', 'RayzelGay@gmail.com', 10),
(20, '570 Oak Lane', 'RayzelGay@gmail.com', 4),
(21, '123 Main Street', 'john.doe@example.com', 9),
(22, '456 Elm Street', 'john.doe@example.com', 4),
(23, '789 Oak Avenue', 'john.doe@example.com', 3),
(24, '321 Maple Lane', 'john.doe@example.com', 1),
(25, '654 Pine Road', 'john.doe@example.com', 4),
(26, '987 Cedar Court', 'john.doe@example.com', 9),
(27, '246 Birch Avenue', 'john.doe@example.com', 1),
(28, '135 Walnut Street', 'john.doe@example.com', 9),
(29, '369 Cherry Lane', 'john.doe@example.com', 1),
(30, '579 Sycamore Drive', 'john.doe@example.com', 6),
(31, '802 Elmwood Avenue', 'john.doe@example.com', 9),
(32, '147 Cedar Street', 'john.doe@example.com', 5),
(33, '258 Pinecrest Drive', 'john.doe@example.com', 7),
(34, '369 Oakwood Boulevard', 'john.doe@example.com', 2),
(35, '753 Maple Avenue', 'john.doe@example.com', 8),
(36, '951 Birchwood Lane', 'john.doe@example.com', 3),
(37, '159 Elm Street', 'john.doe@example.com', 10),
(38, '357 Cherry Street', 'john.doe@example.com', 2),
(39, '468 Pinecrest Avenue', 'john.doe@example.com', 8),
(40, '570 Oak Lane', 'john.doe@example.com', 5),
(41, '123 Main Street', 'jane.smith@example.com', 8),
(42, '456 Elm Street', 'jane.smith@example.com', 7),
(43, '789 Oak Avenue', 'jane.smith@example.com', 8),
(44, '321 Maple Lane', 'jane.smith@example.com', 9),
(45, '654 Pine Road', 'jane.smith@example.com', 1),
(46, '987 Cedar Court', 'jane.smith@example.com', 7),
(47, '246 Birch Avenue', 'jane.smith@example.com', 3),
(48, '135 Walnut Street', 'jane.smith@example.com', 2),
(49, '369 Cherry Lane', 'jane.smith@example.com', 3),
(50, '579 Sycamore Drive', 'jane.smith@example.com', 7),
(51, '802 Elmwood Avenue', 'jane.smith@example.com', 4),
(52, '147 Cedar Street', 'jane.smith@example.com', 8),
(53, '258 Pinecrest Drive', 'jane.smith@example.com', 9),
(54, '369 Oakwood Boulevard', 'jane.smith@example.com', 10),
(55, '753 Maple Avenue', 'jane.smith@example.com', 2),
(56, '951 Birchwood Lane', 'jane.smith@example.com', 10),
(57, '159 Elm Street', 'jane.smith@example.com', 5),
(58, '357 Cherry Street', 'jane.smith@example.com', 3),
(59, '468 Pinecrest Avenue', 'jane.smith@example.com', 2),
(60, '570 Oak Lane', 'jane.smith@example.com', 8),
(61, 'babarsari', 'william.smith@example.com', 13);

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Qty` float NOT NULL,
  `Satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`Id`, `Nama`, `Qty`, `Satuan`) VALUES
(1, 'butter', 1500, 'gr'),
(2, 'creamer', 160, 'gr'),
(3, 'telur', 222, 'butir'),
(4, 'gula pasir', 1950, 'gr'),
(5, 'susu bubuk', 380, 'gr'),
(6, 'tepung terigu', 810, 'gr'),
(7, 'garam', 10, 'gr'),
(8, 'coklat bubuk', 100, 'gr'),
(9, 'selai strawberry', 150, 'gr'),
(10, 'coklat batang', 250, 'gr'),
(11, 'minyak goreng', 50, 'ml'),
(12, 'kacang kenari', 100, 'gr'),
(13, 'tepung maizena', 20, 'gr'),
(14, 'baking powder', 5, 'gr'),
(15, 'kuning telur', 29, 'buah'),
(16, 'sus cair', 1350, 'ml'),
(17, 'whipped cream', 200, 'ml'),
(18, 'keju mozzarella', 350, 'gr'),
(19, 'choco creamy latte', 200, 'gr'),
(20, 'sosis blackpapper', 10, 'buah'),
(21, 'Box 20x20 cm', 100, 'pcs'),
(22, 'Box 20x10 cm', 100, 'pcs'),
(23, 'Botol 1 Liter', 100, 'pcs'),
(24, 'Box Premium', 100, 'pcs'),
(25, 'Exclusive Card', 100, 'pcs'),
(26, 'Tas Spunbond', 100, 'pcs'),
(27, 'Kacang Kenari', 200, 'gram'),
(28, 'ragi', 10, 'gram'),
(29, 'Botol 1 Liter', 100, 'pcs'),
(30, 'Matcha Bubuk', 200, 'gram'),
(31, 'Susu Full Cream', 200, 'ml\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Email` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Total_Poin` int(11) DEFAULT NULL,
  `Total_Saldo` float DEFAULT NULL,
  `IsPengajuanSaldo` tinyint(1) DEFAULT NULL,
  `Nama_Bank` varchar(255) DEFAULT NULL,
  `Nomor_Rekening` varchar(255) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Email`, `Nama`, `Password`, `Total_Poin`, `Total_Saldo`, `IsPengajuanSaldo`, `Nama_Bank`, `Nomor_Rekening`, `Tanggal_Lahir`) VALUES
('alexander.wang@example.com', 'Alexander Wang', 'AW202', 75, 30000, 0, NULL, NULL, '2003-12-04'),
('ava.patel@example.com', 'Ava Patel', 'AP111', 80, 40000, 0, 'OCBC NISP', '7539518246', '2015-03-05'),
('benjamin.lee@example.com', 'Benjamin Lee', 'BL212', 190, 95000, 0, NULL, NULL, '2014-03-21'),
('charlotte.wilson@example.com', 'Charlotte Wilson', 'CW515', 100, 50000, 0, 'HSBC', '3579512468', '2014-03-08'),
('Customer1@gmail.com', 'Joshua', 'Joshua1', 0, 0, 0, 'BPD DIY', '2131241215125', '2014-03-01'),
('david.kim@example.com', 'David Kim', 'DK404', 210, 110000, 0, NULL, NULL, '2014-01-07'),
('elijah.yang@example.com', 'Elijah Yang', 'EY414', 60, 30000, 0, NULL, NULL, '2003-06-20'),
('emily.jones@example.com', 'Emily Jones', 'EJ303', 180, 90000, 0, 'CIMB', '1357924680', '1996-03-16'),
('emma.chen@example.com', 'Emma Chen', 'EC909', 270, 135000, 0, 'Danamon', '3692581470', '1984-03-31'),
('Hello', 'akwoakwdjawhda', '$2y$12$B9YzYxtwRBYCIZWyoWRrg.W48.g3IBdpNjxLakcg0O/BgVKMxXNsu', NULL, NULL, NULL, NULL, NULL, NULL),
('james.brown@example.com', 'James Brown', 'JB808', 120, 60000, 0, NULL, NULL, '1978-07-08'),
('jane.smith@example.com', 'Jane Smith', 'JS456', 50, 25000, 0, NULL, NULL, '1997-08-01'),
('john.doe@example.com', 'John Doe', 'JD123', 100, 50000, 0, 'BCA', '1234567890', '1988-08-13'),
('lucas.chan@example.com', 'Lucas Chan', 'LC616', 130, 65000, 0, NULL, NULL, '1995-03-02'),
('maria.garcia@example.com', 'Maria Garcia', 'MG101', 150, 75000, 1, 'BRI', '2468013579', '1995-05-20'),
('mia.nguyen@example.com', 'Mia Nguyen', 'MN313', 220, 115000, 0, 'Maybank', '9517530246', '1997-03-22'),
('michael.jackson@example.com', 'Michael Jackson', 'MJ789', 200, 100000, 0, 'BNI', '9876543210', '1958-02-06'),
('oke123@gmail', 'pro@@@', '$2y$12$YGdcEu8Hgm2vXmcB5SVQMO/i5i48dgybmUM4lOk7/YrMinOSfABce', NULL, NULL, NULL, NULL, NULL, NULL),
('oke123@gmail.com', 'pro@@', '$2y$12$6LDwVQoDNERrEkkx5tyz1unDoF6SqAyZm1IAbAOlbJXgzD98K0M.S', NULL, NULL, NULL, NULL, NULL, NULL),
('oliver.davis@example.com', 'Oliver Davis', 'OD010', 40, 20000, 0, NULL, NULL, '1989-03-03'),
('olivia.miller@example.com', 'Olivia Miller', 'OM707', 90, 45000, 1, 'Permata', '1597530246', '1998-11-30'),
('pro', 'pro', '$2y$12$4gC0BPKPfh5S6yfgmLVefO7B0uXk.nuIMW.z2RwM3bwpfqHPQbwg6', NULL, NULL, NULL, NULL, NULL, NULL),
('RayzelGay@gmail.com', 'Rayzel', 'RZ1', 0, 0, NULL, NULL, NULL, '1994-07-01'),
('sophia.huang@example.com', 'Sophia Huang', 'SH505', 25, 12500, 1, 'Mandiri', '3698521470', '2004-03-19'),
('william.smith@example.com', 'William Smith', 'WS606', 300, 150000, 0, NULL, NULL, '1998-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `detail_hampers`
--

CREATE TABLE `detail_hampers` (
  `Hampers_Id` int(11) NOT NULL,
  `Produk_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_hampers`
--

INSERT INTO `detail_hampers` (`Hampers_Id`, `Produk_Id`) VALUES
(1, 18),
(1, 20),
(1, 23),
(1, 24),
(2, 9),
(2, 19),
(2, 23),
(2, 24),
(3, 13),
(3, 22),
(3, 23),
(3, 24);

-- --------------------------------------------------------

--
-- Table structure for table `detail_resep`
--

CREATE TABLE `detail_resep` (
  `Resep_Id` int(11) NOT NULL,
  `Bahan_Baku_Id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_resep`
--

INSERT INTO `detail_resep` (`Resep_Id`, `Bahan_Baku_Id`, `qty`, `satuan`) VALUES
(1, 1, 500, 'gram'),
(1, 2, 50, 'gram'),
(1, 3, 50, 'butir'),
(1, 4, 300, 'gram'),
(1, 5, 100, 'gram'),
(1, 6, 20, 'gram'),
(1, 21, 1, 'pcs'),
(2, 1, 500, 'gram'),
(2, 2, 50, 'gram'),
(2, 3, 40, 'butir'),
(2, 4, 300, 'gram'),
(2, 5, 100, 'gram'),
(2, 6, 100, 'gram'),
(2, 7, 10, 'gram'),
(2, 8, 25, 'gram'),
(2, 9, 100, 'gram'),
(2, 21, 1, 'pcs'),
(3, 1, 100, 'gram'),
(3, 3, 6, 'butir'),
(3, 4, 200, 'gram'),
(3, 6, 150, 'gram'),
(3, 8, 60, 'gram'),
(3, 10, 250, 'gram'),
(3, 11, 50, 'ml'),
(3, 21, 1, 'pcs'),
(5, 1, 200, 'gram'),
(5, 3, 20, 'butir'),
(5, 4, 200, 'gram'),
(5, 5, 10, 'gram'),
(5, 6, 90, 'gram'),
(5, 13, 20, 'gram'),
(5, 14, 5, 'gram'),
(5, 21, 1, 'pcs'),
(5, 27, 100, 'gram'),
(6, 1, 50, 'gram'),
(6, 3, 3, 'butir'),
(6, 4, 30, 'gram'),
(6, 6, 250, 'gram'),
(6, 7, 2, 'gram'),
(6, 20, 10, 'buah'),
(6, 21, 1, 'pcs'),
(6, 28, 3, 'gram'),
(7, 1, 60, 'gram'),
(7, 3, 4, 'butir'),
(7, 4, 30, 'gram'),
(7, 5, 50, 'gram'),
(7, 6, 250, 'gram'),
(7, 7, 3, 'gram'),
(7, 16, 300, 'ml'),
(7, 17, 200, 'ml'),
(7, 21, 1, 'pcs'),
(7, 28, 3, 'gram'),
(8, 1, 150, 'ml'),
(8, 3, 3, 'butir'),
(8, 4, 30, 'gram'),
(8, 6, 250, 'gram'),
(8, 7, 2, 'gram'),
(8, 18, 350, 'gram'),
(8, 21, 1, 'pcs'),
(8, 28, 3, 'gram'),
(8, 31, 150, 'ml'),
(9, 2, 80, 'gram'),
(9, 8, 120, 'gram'),
(9, 16, 800, 'ml'),
(9, 29, 1, 'pcs'),
(10, 2, 80, 'gram'),
(10, 16, 800, 'ml'),
(10, 29, 1, 'pcs'),
(10, 30, 120, 'gram');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `SubTotal` float NOT NULL,
  `Total_Produk` int(11) NOT NULL,
  `Produk_Id` int(11) DEFAULT NULL,
  `Pesanan_Id` varchar(255) DEFAULT NULL,
  `Hampers_Id` int(11) DEFAULT NULL,
  `Detail_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`SubTotal`, `Total_Produk`, `Produk_Id`, `Pesanan_Id`, `Hampers_Id`, `Detail_Id`) VALUES
(250000, 1, 6, '24.03.1', NULL, 1),
(450000, 1, 7, '24.03.1', NULL, 2),
(1000000, 2, NULL, '24.03.2', 2, 3),
(650000, 1, NULL, '24.03.11', 1, 4),
(120000, 1, 17, '24.03.11', NULL, 5),
(1000000, 10, 13, '24.03.12', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hampers`
--

CREATE TABLE `hampers` (
  `Id` int(11) NOT NULL,
  `Nama_Hampers` varchar(255) NOT NULL,
  `Harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hampers`
--

INSERT INTO `hampers` (`Id`, `Nama_Hampers`, `Harga`) VALUES
(1, 'Hampers1', 150000),
(2, 'Hampers2', 300000),
(3, 'Hampers3', 350000);

-- --------------------------------------------------------

--
-- Table structure for table `history_bahan_baku`
--

CREATE TABLE `history_bahan_baku` (
  `Id` int(11) NOT NULL,
  `Tanggal_Digunakan` date NOT NULL,
  `Bahan_Baku_Id` int(11) NOT NULL,
  `Jumlah_Penggunaan` float NOT NULL,
  `Satuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_bahan_baku`
--

INSERT INTO `history_bahan_baku` (`Id`, `Tanggal_Digunakan`, `Bahan_Baku_Id`, `Jumlah_Penggunaan`, `Satuan`) VALUES
(1, '2024-03-01', 24, 2, 'pcs'),
(2, '2024-03-01', 1, 1000, 'gram'),
(3, '2024-03-01', 10, 100, 'gram'),
(4, '2024-03-01', 11, 50, 'ml'),
(6, '2024-03-01', 3, 36, 'butir'),
(7, '2024-03-01', 4, 200, 'gr'),
(8, '2024-03-01', 6, 150, 'gr'),
(9, '2024-03-01', 8, 25, 'gr'),
(10, '2024-03-01', 2, 30, 'gr'),
(11, '2024-03-11', 1, 500, 'gr'),
(12, '2024-03-11', 2, 50, 'gr'),
(13, '2024-03-11', 3, 50, 'butir'),
(14, '2024-03-11', 4, 300, 'gr'),
(15, '2024-03-11', 5, 100, 'gr'),
(16, '2024-03-11', 6, 20, 'gr'),
(17, '2024-03-12', 1, 500, 'gr'),
(18, '2024-03-12', 2, 50, 'gr'),
(19, '2024-03-12', 3, 40, 'butir'),
(20, '2024-03-12', 4, 300, 'gr'),
(21, '2024-03-12', 5, 100, 'gr'),
(22, '2024-03-12', 7, 10, 'gr'),
(23, '2024-03-12', 8, 25, 'gr'),
(24, '2024-03-12', 9, 100, 'gr'),
(25, '2024-03-01', 21, 5, 'pcs'),
(26, '2024-03-12', 21, 2, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `history_penarikan_saldo`
--

CREATE TABLE `history_penarikan_saldo` (
  `Id` int(11) NOT NULL,
  `Jumlah_Penarikan` float NOT NULL,
  `Customer_Email` varchar(255) NOT NULL,
  `Tanggal_Penarikan` date NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_penarikan_saldo`
--

INSERT INTO `history_penarikan_saldo` (`Id`, `Jumlah_Penarikan`, `Customer_Email`, `Tanggal_Penarikan`, `Status`) VALUES
(1, 20000, 'benjamin.lee@example.com', '2024-03-01', 'Berhasil'),
(2, 30000, 'jane.smith@example.com', '2024-03-05', 'Ditolak'),
(3, 25000, 'john.doe@example.com', '2024-03-10', 'Berhasil'),
(4, 15000, 'jane.smith@example.com', '2024-03-15', 'Ditolak'),
(5, 18000, 'ava.patel@example.com', '2024-03-20', 'Berhasil'),
(6, 22000, 'oliver.davis@example.com', '2024-03-25', 'Ditolak'),
(7, 28000, 'maria.garcia@example.com', '2024-03-30', 'Berhasil'),
(8, 35000, 'sophia.huang@example.com', '2024-04-05', 'Ditolak'),
(9, 21000, 'william.smith@example.com', '2024-04-10', 'Berhasil'),
(10, 40000, 'mia.nguyen@example.com', '2024-04-15', 'Ditolak'),
(11, 22000, 'charlotte.wilson@example.com', '2024-04-20', 'Berhasil'),
(12, 15000, 'lucas.chan@example.com', '2024-04-25', 'Ditolak'),
(13, 30000, 'emma.chen@example.com', '2024-05-01', 'Berhasil'),
(14, 25000, 'oliver.davis@example.com', '2024-05-05', 'Ditolak'),
(15, 18000, 'jane.smith@example.com', '2024-05-10', 'Berhasil'),
(16, 22000, 'ava.patel@example.com', '2024-05-15', 'Ditolak'),
(17, 28000, 'maria.garcia@example.com', '2024-05-20', 'Berhasil'),
(18, 35000, 'sophia.huang@example.com', '2024-05-25', 'Ditolak'),
(19, 21000, 'william.smith@example.com', '2024-05-30', 'Berhasil'),
(20, 40000, 'mia.nguyen@example.com', '2024-06-05', 'Ditolak'),
(21, 22000, 'charlotte.wilson@example.com', '2024-06-10', 'Berhasil'),
(22, 15000, 'lucas.chan@example.com', '2024-06-15', 'Ditolak'),
(23, 30000, 'emma.chen@example.com', '2024-06-20', 'Berhasil'),
(24, 25000, 'oliver.davis@example.com', '2024-06-25', 'Ditolak'),
(25, 18000, 'jane.smith@example.com', '2024-07-01', 'Berhasil'),
(26, 22000, 'ava.patel@example.com', '2024-07-05', 'Ditolak'),
(27, 28000, 'maria.garcia@example.com', '2024-07-10', 'Berhasil'),
(28, 35000, 'sophia.huang@example.com', '2024-07-15', 'Ditolak'),
(29, 21000, 'william.smith@example.com', '2024-07-20', 'Berhasil'),
(30, 40000, 'mia.nguyen@example.com', '2024-07-25', 'Ditolak'),
(31, 22000, 'charlotte.wilson@example.com', '2024-07-30', 'Berhasil'),
(32, 15000, 'lucas.chan@example.com', '2024-08-05', 'Ditolak'),
(33, 30000, 'emma.chen@example.com', '2024-08-10', 'Berhasil'),
(34, 25000, 'oliver.davis@example.com', '2024-08-15', 'Ditolak'),
(35, 18000, 'jane.smith@example.com', '2024-08-20', 'Berhasil'),
(36, 22000, 'ava.patel@example.com', '2024-08-25', 'Ditolak'),
(37, 28000, 'maria.garcia@example.com', '2024-08-30', 'Berhasil'),
(38, 35000, 'sophia.huang@example.com', '2024-09-05', 'Ditolak'),
(39, 21000, 'william.smith@example.com', '2024-09-10', 'Berhasil'),
(40, 40000, 'mia.nguyen@example.com', '2024-09-15', 'Ditolak'),
(41, 22000, 'charlotte.wilson@example.com', '2024-09-20', 'Berhasil'),
(42, 15000, 'lucas.chan@example.com', '2024-09-25', 'Ditolak'),
(43, 30000, 'emma.chen@example.com', '2024-10-01', 'Berhasil'),
(44, 25000, 'oliver.davis@example.com', '2024-10-05', 'Ditolak'),
(45, 18000, 'jane.smith@example.com', '2024-10-10', 'Berhasil'),
(46, 22000, 'ava.patel@example.com', '2024-10-15', 'Ditolak'),
(47, 28000, 'maria.garcia@example.com', '2024-10-20', 'Berhasil'),
(48, 35000, 'sophia.huang@example.com', '2024-10-25', 'Ditolak'),
(49, 21000, 'william.smith@example.com', '2024-10-30', 'Berhasil'),
(50, 40000, 'mia.nguyen@example.com', '2024-11-05', 'Ditolak'),
(51, 22000, 'charlotte.wilson@example.com', '2024-11-10', 'Berhasil'),
(52, 15000, 'lucas.chan@example.com', '2024-11-15', 'Ditolak'),
(53, 30000, 'emma.chen@example.com', '2024-11-20', 'Berhasil'),
(54, 25000, 'oliver.davis@example.com', '2024-11-25', 'Ditolak'),
(55, 18000, 'jane.smith@example.com', '2024-12-01', 'Berhasil'),
(56, 22000, 'ava.patel@example.com', '2024-12-05', 'Ditolak'),
(57, 28000, 'maria.garcia@example.com', '2024-12-10', 'Berhasil'),
(58, 35000, 'sophia.huang@example.com', '2024-12-15', 'Ditolak'),
(59, 21000, 'william.smith@example.com', '2024-12-20', 'Berhasil'),
(60, 40000, 'mia.nguyen@example.com', '2024-12-25', 'Ditolak'),
(61, 22000, 'charlotte.wilson@example.com', '2025-01-01', 'Berhasil'),
(62, 15000, 'lucas.chan@example.com', '2025-01-05', 'Ditolak'),
(63, 30000, 'emma.chen@example.com', '2025-01-10', 'Berhasil'),
(64, 25000, 'oliver.davis@example.com', '2025-01-15', 'Ditolak'),
(65, 18000, 'jane.smith@example.com', '2025-01-20', 'Berhasil'),
(66, 22000, 'ava.patel@example.com', '2025-01-25', 'Ditolak'),
(67, 28000, 'maria.garcia@example.com', '2025-02-01', 'Berhasil'),
(68, 35000, 'sophia.huang@example.com', '2025-02-05', 'Ditolak'),
(69, 21000, 'william.smith@example.com', '2025-02-10', 'Berhasil'),
(70, 40000, 'mia.nguyen@example.com', '2025-02-15', 'Ditolak'),
(71, 22000, 'charlotte.wilson@example.com', '2025-02-20', 'Berhasil'),
(72, 15000, 'lucas.chan@example.com', '2025-02-25', 'Ditolak'),
(73, 30000, 'emma.chen@example.com', '2025-03-01', 'Berhasil'),
(74, 25000, 'oliver.davis@example.com', '2025-03-05', 'Ditolak'),
(75, 18000, 'jane.smith@example.com', '2025-03-10', 'Berhasil'),
(76, 22000, 'ava.patel@example.com', '2025-03-15', 'Ditolak'),
(77, 28000, 'maria.garcia@example.com', '2025-03-20', 'Berhasil'),
(78, 35000, 'sophia.huang@example.com', '2025-03-25', 'Ditolak'),
(79, 21000, 'william.smith@example.com', '2025-03-30', 'Berhasil'),
(80, 40000, 'mia.nguyen@example.com', '2025-04-05', 'Ditolak'),
(81, 22000, 'charlotte.wilson@example.com', '2025-04-10', 'Berhasil'),
(82, 15000, 'lucas.chan@example.com', '2025-04-15', 'Ditolak'),
(83, 30000, 'emma.chen@example.com', '2025-04-20', 'Berhasil'),
(84, 25000, 'oliver.davis@example.com', '2025-04-25', 'Ditolak'),
(85, 18000, 'jane.smith@example.com', '2025-05-01', 'Berhasil'),
(86, 22000, 'ava.patel@example.com', '2025-05-05', 'Ditolak'),
(87, 28000, 'maria.garcia@example.com', '2025-05-10', 'Berhasil'),
(88, 35000, 'sophia.huang@example.com', '2025-05-15', 'Ditolak'),
(89, 21000, 'william.smith@example.com', '2025-05-20', 'Berhasil'),
(90, 40000, 'mia.nguyen@example.com', '2025-05-25', 'Ditolak'),
(91, 22000, 'charlotte.wilson@example.com', '2025-05-30', 'Berhasil'),
(92, 15000, 'lucas.chan@example.com', '2025-06-05', 'Ditolak'),
(93, 30000, 'emma.chen@example.com', '2025-06-10', 'Berhasil'),
(94, 25000, 'oliver.davis@example.com', '2025-06-15', 'Ditolak'),
(95, 18000, 'jane.smith@example.com', '2025-06-20', 'Berhasil'),
(96, 22000, 'ava.patel@example.com', '2025-06-25', 'Ditolak'),
(97, 28000, 'maria.garcia@example.com', '2025-07-01', 'Berhasil'),
(98, 35000, 'sophia.huang@example.com', '2025-07-05', 'Ditolak'),
(99, 21000, 'william.smith@example.com', '2025-07-10', 'Berhasil'),
(100, 40000, 'mia.nguyen@example.com', '2025-07-15', 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `Id` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `TotalGaji` float DEFAULT NULL,
  `Bonus` float DEFAULT NULL,
  `Role_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`Id`, `Password`, `Nama`, `TotalGaji`, `Bonus`, `Role_Id`) VALUES
(1, 'admin1', 'Budi', 400000, 40000, 2),
(2, 'admin2', 'Joko', 450000, 45000, 1),
(3, 'admin3', 'Siti', 500000, 50000, 1),
(4, 'admin4', 'Rini', 550000, 55000, 1),
(5, 'admin5', 'Andi', 400000, 40000, 2),
(6, 'admin6', 'Dina', 430000, 43000, 2),
(7, 'admin7', 'Lia', 480000, 48000, 2),
(8, 'admin8', 'Rudi', 350000, 35000, 3),
(9, 'admin9', 'Fani', 380000, 38000, 3),
(10, 'admin10', 'Rita', 420000, 42000, 3),
(11, '$2y$12$gPH7R1N8qBeYEzCG7.aLpeBneCKYpbDuuQGEwmaMratc.LrQY0Cim', 'budi123', NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_03_30_052840_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan_bahan_baku`
--

CREATE TABLE `pengadaan_bahan_baku` (
  `Id` int(11) NOT NULL,
  `Satuan` varchar(255) NOT NULL,
  `Qty` float NOT NULL,
  `Harga` float NOT NULL,
  `BahanBaku_Id` int(11) NOT NULL,
  `Tanggal_Pengadaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengadaan_bahan_baku`
--

INSERT INTO `pengadaan_bahan_baku` (`Id`, `Satuan`, `Qty`, `Harga`, `BahanBaku_Id`, `Tanggal_Pengadaan`) VALUES
(1, 'butir', 500, 10000000, 3, '2024-02-28'),
(2, 'gram', 1500, 300000, 1, '2024-02-29'),
(3, 'gram', 2000, 30000, 4, '2024-02-23'),
(4, 'gram', 10000, 80000, 6, '2024-02-26'),
(5, 'pcs', 20, 100000, 26, '2024-02-26'),
(6, 'gram', 1000, 100000, 9, '2024-02-28'),
(7, 'gram', 2000, 50000, 2, '2024-02-29'),
(8, 'gram', 600, 150000, 10, '2024-02-28'),
(9, 'pcs', 50, 500000, 24, '2024-02-28'),
(10, 'ml', 1000, 15000, 31, '2024-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_lain_lain`
--

CREATE TABLE `pengeluaran_lain_lain` (
  `Id` int(11) NOT NULL,
  `Nama_Pengeluaran` varchar(255) NOT NULL,
  `Harga` float NOT NULL,
  `Satuan` varchar(255) NOT NULL,
  `Qty` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengeluaran_lain_lain`
--

INSERT INTO `pengeluaran_lain_lain` (`Id`, `Nama_Pengeluaran`, `Harga`, `Satuan`, `Qty`) VALUES
(1, 'Bensin', 500000, 'Liter', 50),
(2, 'Listrik', 3000000, 'kWh', 3000),
(3, 'Gas', 2000000, 'tabung', 20);

-- --------------------------------------------------------

--
-- Table structure for table `penitip`
--

CREATE TABLE `penitip` (
  `Id` varchar(255) NOT NULL,
  `Nama_Penitip` varchar(255) NOT NULL,
  `komisi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penitip`
--

INSERT INTO `penitip` (`Id`, `Nama_Penitip`, `komisi`) VALUES
('Penitip01', 'Joshua Puniwan', 0),
('Penitip02', 'Carolus Seto', 0),
('Penitip03', 'Andrew', 0),
('Penitip04', 'Budi', 0),
('Penitip05', 'Charlie', 0),
('Penitip06', 'Puth', 0),
('Penitip07', 'Rayzel', 0),
('Penitip08', 'Fabio', 0),
('Penitip09', 'Marc', 0),
('Penitip10', 'Matt', 0);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\model_customer', 'pro', 'token', '065495302422d85fae2ca4b12a4b273c9e058b1473069c7edeb3ba73bd1a6191', '[\"*\"]', NULL, NULL, '2024-03-29 23:32:16', '2024-03-29 23:32:16'),
(2, 'App\\Models\\model_customer', 'pro', 'token', 'e00c79eb80a35ee6f93a1211956ed5daa26e16e5b0536a00fbff0359279a181f', '[\"*\"]', NULL, NULL, '2024-03-29 23:55:05', '2024-03-29 23:55:05'),
(3, 'App\\Models\\model_customer', 'pro', 'token', 'c13f4c5caf2c37f66eadc5384949467fe8328cc284d47e0dddee38dd880f9317', '[\"*\"]', NULL, NULL, '2024-03-30 00:00:26', '2024-03-30 00:00:26'),
(4, 'App\\Models\\model_customer', 'pro', 'token', '9f5878d50c09d20b2afd743f714c395b9c5de460f21bfe4decf1cd831d18160e', '[\"*\"]', NULL, NULL, '2024-03-30 00:00:29', '2024-03-30 00:00:29'),
(5, 'App\\Models\\model_customer', 'pro', 'token-name', '96fdac9717c8ec2d37d1ee8885d2725bbeff0ca507c48629e2033c46500afc9a', '[\"*\"]', NULL, NULL, '2024-03-30 00:04:57', '2024-03-30 00:04:57'),
(6, 'App\\Models\\model_customer', 'pro', 'token-name', '8648ec0d189c731b09dabba2fb8370e229169502a202aae898a61411b0dd5a06', '[\"*\"]', NULL, NULL, '2024-03-30 00:07:30', '2024-03-30 00:07:30'),
(7, 'App\\Models\\model_customer', 'pro', 'token-name', 'd88cd52a2523393ffea404795a19f1ead7da909ad1f6a30215c3643b186c24b0', '[\"*\"]', NULL, NULL, '2024-03-30 00:11:09', '2024-03-30 00:11:09'),
(8, 'App\\Models\\model_customer', 'pro', 'token-name', '0f76f45c5bd09999e4cb7c2b58f83158b09700a8b63ba5cab3de276c59565832', '[\"*\"]', NULL, NULL, '2024-03-30 00:12:48', '2024-03-30 00:12:48'),
(9, 'App\\Models\\model_customer', 'pro', 'token-name', 'bbd655521e72fdfe049420cb200c9a33339c9e5bc571dd87aabbc95a0e266023', '[\"*\"]', NULL, NULL, '2024-03-30 00:14:02', '2024-03-30 00:14:02'),
(10, 'App\\Models\\model_customer', 'pro', 'token-name', 'd9a4ebe999a2586a4941e10e19508c8a9ae0723388f8f649e3a914e2ae93f31c', '[\"*\"]', NULL, NULL, '2024-03-30 00:14:10', '2024-03-30 00:14:10'),
(11, 'App\\Models\\model_customer', 'pro', 'token-name', '200b7498928e8d3ff172ab8ab7b26de2e331fcd2f35eb8ccf340edba157725dc', '[\"*\"]', NULL, NULL, '2024-03-30 00:14:46', '2024-03-30 00:14:46'),
(12, 'App\\Models\\model_customer', 'pro', 'token-name', 'aaf3031da98adadd5e19f7e8ad01c56eb9fbc98cdf1c15fa5c0849b9174f0bd9', '[\"*\"]', NULL, NULL, '2024-03-30 00:15:05', '2024-03-30 00:15:05'),
(13, 'App\\Models\\model_customer', 'pro', 'token-name', '19043dc1c221d25ba3b863590429e4b5848c7ffe298ad17d765e4d6f274538f9', '[\"*\"]', NULL, NULL, '2024-03-30 00:15:26', '2024-03-30 00:15:26'),
(14, 'App\\Models\\model_customer', 'pro', 'token-name', '2c03d0fc48807e80282c70a642a127807d2c1ac779aa84f3499f405b7b725096', '[\"*\"]', NULL, NULL, '2024-03-30 00:15:35', '2024-03-30 00:15:35'),
(15, 'App\\Models\\model_customer', 'pro', 'token-name', '9604f6e0be0461f664e4c2aa15798fe833713689e5f13f50ed00cdf612c34422', '[\"*\"]', NULL, NULL, '2024-03-30 00:18:17', '2024-03-30 00:18:17'),
(16, 'App\\Models\\model_customer', 'Hello', 'token-name', '19f8a00fcf13749ba6736ab31a26147a06df4ab54e5df6128e73da6e2e81734f', '[\"*\"]', NULL, NULL, '2024-03-30 01:00:10', '2024-03-30 01:00:10'),
(17, 'App\\Models\\model_customer', 'Hello', 'token-name', '2f48e62bfd493ae93c8b54e97ccd01261a76f761d8dabbbe40342dc885481c63', '[\"*\"]', NULL, NULL, '2024-03-30 01:06:44', '2024-03-30 01:06:44'),
(18, 'App\\Models\\model_karyawan', '11', 'token-name', '7aa62a8500bcb692cdb3dd6492b0683216f80a506385128b81ba6cbe8284fead', '[\"*\"]', NULL, NULL, '2024-03-30 01:11:09', '2024-03-30 01:11:09'),
(19, 'App\\Models\\model_karyawan', '11', 'token-name', 'eb8826d73a3c62ffdd00fa6c9c7b4e97ce4137a300fdd727444d89fbaf8bf6e3', '[\"*\"]', NULL, NULL, '2024-03-30 01:11:52', '2024-03-30 01:11:52'),
(20, 'App\\Models\\model_karyawan', '11', 'token-name', '950c75f9c891e92c56e873b5881fa087713ae0476fb18329844dd00a87739e53', '[\"*\"]', NULL, NULL, '2024-03-30 01:12:56', '2024-03-30 01:12:56'),
(21, 'App\\Models\\model_karyawan', '11', 'token-name', 'c3ef00866e55d6560ede4df37926f4a59ee3365980950b08f518469dd7992fd7', '[\"*\"]', NULL, NULL, '2024-03-30 01:13:23', '2024-03-30 01:13:23'),
(22, 'App\\Models\\model_karyawan', '11', 'token-name', 'fb94116a26b1d98b87234713c1c01ee46aae98d26b1eff34ce14a18df561f7ac', '[\"*\"]', NULL, NULL, '2024-03-30 01:14:22', '2024-03-30 01:14:22'),
(23, 'App\\Models\\model_karyawan', '11', 'token-name', '7456fa5ccdd957f38238c535e9f2bec882178cd598220c38fe81d75f9d2563b1', '[\"*\"]', NULL, NULL, '2024-03-30 01:14:51', '2024-03-30 01:14:51'),
(24, 'App\\Models\\model_customer', 'Hello', 'token-name', 'c833f5bd97df3d39e8a6d79153f376758cb52185fb62da563f707cc8149fbe96', '[\"*\"]', NULL, NULL, '2024-03-30 01:15:13', '2024-03-30 01:15:13'),
(25, 'App\\Models\\model_customer', 'Hello', 'token-name', '0e3f3bac3a555627e555a339330cd04b0b432e5eedec2a5954b54c6d88810c55', '[\"*\"]', NULL, NULL, '2024-03-30 01:15:30', '2024-03-30 01:15:30'),
(26, 'App\\Models\\model_customer', 'Hello', 'token-name', '3e8f6273e5f05b405d9212e95600aae86e11857492a23726738e900cd5fe76ac', '[\"*\"]', NULL, NULL, '2024-03-30 08:25:52', '2024-03-30 08:25:52'),
(27, 'App\\Models\\model_customer', 'Hello', 'token-name', '5226681e0dc5600ef675d5a0ef30860d5f6486eb745df2e65089ceeffbbb46ec', '[\"*\"]', NULL, NULL, '2024-03-30 08:28:08', '2024-03-30 08:28:08'),
(28, 'App\\Models\\model_customer', 'Hello', 'token-name', '120d004684e0f98033f832bb98cb30c73a8e180a70b46f1bdcf9fe3e101b8c6d', '[\"*\"]', NULL, NULL, '2024-03-30 08:29:45', '2024-03-30 08:29:45'),
(29, 'App\\Models\\model_karyawan', '11', 'token-name', 'a1326b368ac8d38c2be4cbdef55434d05df163eba9d069b18ccf6a972c634893', '[\"*\"]', NULL, NULL, '2024-03-30 08:30:24', '2024-03-30 08:30:24'),
(30, 'App\\Models\\model_karyawan', '11', 'token-name', '8cd3848d5fd7003d5f5f02afc331d361f2767deb11b821212614864853532957', '[\"*\"]', NULL, NULL, '2024-03-30 08:30:36', '2024-03-30 08:30:36'),
(31, 'App\\Models\\model_karyawan', '11', 'token-name', 'f83cf325c2700a36806a6e8f305553549f65f01ff49f2b0862d525d6dc0f231f', '[\"*\"]', NULL, NULL, '2024-03-30 08:30:56', '2024-03-30 08:30:56'),
(32, 'App\\Models\\model_karyawan', '11', 'token-name', '8eb674ccfab9335f2f5568439092b86983f4f6d2468e7e7949d44693d12861f6', '[\"*\"]', NULL, NULL, '2024-03-30 08:31:03', '2024-03-30 08:31:03'),
(33, 'App\\Models\\model_karyawan', '11', 'token-name', 'a1af5ed862b44144d23db8b16afb46f48b64ca8f8da04e5fa91b49d061f9b565', '[\"*\"]', NULL, NULL, '2024-03-30 09:06:10', '2024-03-30 09:06:10'),
(34, 'App\\Models\\model_karyawan', '11', 'token-name', '449edce4c749f7c6300c690b8031283976368c5e68d2462b825336822bf2bea3', '[\"*\"]', '2024-03-30 09:35:23', NULL, '2024-03-30 09:25:55', '2024-03-30 09:35:23'),
(35, 'App\\Models\\model_customer', 'Hello', 'token-name', 'a714b7000916140eacd177ffdfc4958e6d5422eb2a860a162aed4810f58f3bb4', '[\"*\"]', '2024-03-30 09:50:13', NULL, '2024-03-30 09:49:07', '2024-03-30 09:50:13'),
(36, 'App\\Models\\model_karyawan', '11', 'token-name', 'e28153bd91c494b462382f13b6744dd863e796898991379604fba75295dd805c', '[\"*\"]', '2024-03-30 09:53:18', NULL, '2024-03-30 09:50:23', '2024-03-30 09:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `Id` varchar(255) NOT NULL,
  `Ongkos_Kirim` float NOT NULL,
  `Total` float NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Tanggal_Diambil` date DEFAULT NULL,
  `Tanggal_Pesan` date DEFAULT NULL,
  `Customer_Email` varchar(255) NOT NULL,
  `Bukti_Pembayaran` varchar(255) DEFAULT NULL,
  `Tanggal_Pelunasan` date DEFAULT NULL,
  `Alamat_Id` int(11) DEFAULT NULL,
  `Status_Pembayaran` varchar(255) NOT NULL,
  `Tip` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`Id`, `Ongkos_Kirim`, `Total`, `Status`, `Tanggal_Diambil`, `Tanggal_Pesan`, `Customer_Email`, `Bukti_Pembayaran`, `Tanggal_Pelunasan`, `Alamat_Id`, `Status_Pembayaran`, `Tip`) VALUES
('24.03.1', 1000, 700000, 'Diproses', NULL, '2024-03-01', 'emily.jones@example.com', '2024.03.1', '2024-03-01', 1, '', 0),
('24.03.11', 1000, 770000, 'Dikirim', NULL, '2024-03-11', 'RayzelGay@gmail.com', '2024.03.11', '2024-03-11', 10, '', 0),
('24.03.12', 1000, 1000000, 'Selesai', '2024-03-14', '2024-03-12', 'RayzelGay@gmail.com', '2024.03.12', '2024-03-12', 3, '', 0),
('24.03.2', 0, 1000000, 'Siap Dipickup', NULL, '2024-03-02', 'william.smith@example.com', '2024.03.2', '2024-03-02', NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `Id` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Karyawan_Id` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`Id`, `Tanggal`, `Karyawan_Id`, `Status`) VALUES
(134, '2024-03-20', 2, 'Masuk'),
(135, '2024-03-21', 2, 'Tidak_Masuk'),
(136, '2024-03-22', 2, 'Masuk'),
(137, '2024-03-23', 2, 'Masuk'),
(138, '2024-03-24', 2, 'Masuk'),
(139, '2024-03-20', 3, 'Masuk'),
(140, '2024-03-21', 3, 'Masuk'),
(141, '2024-03-22', 3, 'Masuk'),
(142, '2024-03-23', 3, 'Masuk'),
(143, '2024-03-24', 3, 'Masuk'),
(144, '2024-03-20', 4, 'Masuk'),
(145, '2024-03-21', 4, 'Masuk'),
(146, '2024-03-22', 4, 'Masuk'),
(147, '2024-03-23', 4, 'Masuk'),
(148, '2024-03-24', 4, 'Masuk'),
(149, '2024-03-20', 1, 'Masuk'),
(150, '2024-03-21', 1, 'Masuk'),
(151, '2024-03-22', 1, 'Masuk'),
(152, '2024-03-23', 1, 'Masuk'),
(153, '2024-03-24', 1, 'Masuk'),
(154, '2024-03-20', 5, 'Tidak_Masuk'),
(155, '2024-03-21', 5, 'Masuk'),
(156, '2024-03-22', 5, 'Masuk'),
(157, '2024-03-23', 5, 'Masuk'),
(158, '2024-03-24', 5, 'Masuk'),
(159, '2024-03-20', 6, 'Masuk'),
(160, '2024-03-21', 6, 'Masuk'),
(161, '2024-03-22', 6, 'Masuk'),
(162, '2024-03-23', 6, 'Masuk'),
(163, '2024-03-24', 6, 'Masuk'),
(164, '2024-03-20', 7, 'Masuk'),
(165, '2024-03-21', 7, 'Masuk'),
(166, '2024-03-22', 7, 'Masuk'),
(167, '2024-03-23', 7, 'Masuk'),
(168, '2024-03-24', 7, 'Masuk'),
(169, '2024-03-20', 8, 'Masuk'),
(170, '2024-03-21', 8, 'Masuk'),
(171, '2024-03-22', 8, 'Masuk'),
(172, '2024-03-23', 8, 'Masuk'),
(173, '2024-03-24', 8, 'Masuk'),
(174, '2024-03-20', 9, 'Masuk'),
(175, '2024-03-21', 9, 'Masuk'),
(176, '2024-03-22', 9, 'Masuk'),
(177, '2024-03-23', 9, 'Masuk'),
(178, '2024-03-24', 9, 'Masuk'),
(179, '2024-03-20', 10, 'Masuk'),
(180, '2024-03-21', 10, 'Masuk'),
(181, '2024-03-22', 10, 'Masuk'),
(182, '2024-03-23', 10, 'Masuk'),
(183, '2024-03-24', 10, 'Masuk');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Harga` float NOT NULL,
  `Satuan` varchar(255) NOT NULL,
  `Stok` float NOT NULL,
  `Penitip_Id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`Id`, `Nama`, `Harga`, `Satuan`, `Stok`, `Penitip_Id`) VALUES
(4, 'Lapis Legit 1 Loyang', 850000, 'pcs', 0, NULL),
(5, 'Lapis Surabaya 1 Loyang', 550000, 'pcs', 0, NULL),
(6, 'Brownies 1 Loyang', 250000, 'pcs', 0, NULL),
(7, 'Mandarin 1 Loyang', 450000, 'pcs', 0, NULL),
(8, 'Spikoe 1 Loyang', 350000, 'pcs', 0, NULL),
(9, 'Roti Sosis', 6000, 'pcs', 0, NULL),
(10, 'Milk Bun', 8000, 'pcs', 0, NULL),
(11, 'Roti Keju', 6000, 'pcs', 0, NULL),
(12, 'Choco Creamy Latte', 10000, 'pcs', 2, NULL),
(13, 'Matcha Creamy Latte', 12000, 'pcs', 3, NULL),
(14, 'Keripik Kentang 250 gram', 75000, 'bungkus', 5, 'Penitip01'),
(15, 'Kopi Luwak Bubuk 250 gram', 250000, 'bungkus', 3, 'Penitip02'),
(16, 'Matcha Organik Bubuk 100 gram', 300000, 'bungkus', 3, 'Penitip03'),
(17, 'Chocolate Bar 100 gram', 120000, '120000', 5, 'Penitip04'),
(18, 'Lapis Legit 1/2 Loyang', 450000, 'pcs', 0, NULL),
(19, 'Lapis Surabaya 1/2 Loyang', 300000, 'pcs', 0, NULL),
(20, 'Brownies 1/2 Loyang', 150000, 'pcs', 0, NULL),
(21, 'Mandarin 1/2 Loyang', 25000, 'pcs', 0, NULL),
(22, 'Spikoe 1/2 Loyang', 200000, 'pcs', 0, NULL),
(23, 'Exclusive Box', 0, 'pcs', 100, NULL),
(24, 'Exclusive Card', 0, 'pcs', 100, NULL),
(25, 'Tas Spundbond', 0, 'pcs', 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promo_poin`
--

CREATE TABLE `promo_poin` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Poin` int(11) NOT NULL,
  `isDoublePoint` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promo_poin`
--

INSERT INTO `promo_poin` (`Id`, `Nama`, `Poin`, `isDoublePoint`) VALUES
(1, 'Kelipatan 10.000', 1, 0),
(2, 'Kelipatan 100.000', 15, 0),
(3, 'Kelipatan 500.000', 75, 0),
(4, 'Kelipatan 1.000.000', 200, 0),
(6, 'Hari Ulang Tahun Customer', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Produk_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`Id`, `Nama`, `Produk_Id`) VALUES
(1, 'Resep Lapis Legit 1 Loyang', 4),
(2, 'Resep Lapis Surabaya 1 Loyang', 5),
(3, 'Resep Brownies 1 Loyang', 6),
(4, 'Resep Mandarin 1 Loyang', 7),
(5, 'Resep Spikoe 1 Loyang', 8),
(6, 'Resep Roti Sosis', 9),
(7, 'Resep Milk Bun', 10),
(8, 'Resep Roti Keju', 11),
(9, 'Resep Choco Creamy Latte', 12),
(10, 'Resep Matcha Creamy Latte', 13);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Gaji` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Id`, `Nama`, `Gaji`) VALUES
(1, 'MO', 300000),
(2, 'Admin', 300000),
(3, 'Owner', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Customer_Email` (`Customer_Email`);

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `detail_hampers`
--
ALTER TABLE `detail_hampers`
  ADD PRIMARY KEY (`Hampers_Id`,`Produk_Id`),
  ADD KEY `Produk_Id` (`Produk_Id`);

--
-- Indexes for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD PRIMARY KEY (`Resep_Id`,`Bahan_Baku_Id`),
  ADD KEY `Bahan_Baku_Id` (`Bahan_Baku_Id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`Detail_Id`),
  ADD KEY `Hampers_Id` (`Hampers_Id`),
  ADD KEY `Produk_Id` (`Produk_Id`),
  ADD KEY `Pesanan_Id` (`Pesanan_Id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hampers`
--
ALTER TABLE `hampers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `history_bahan_baku`
--
ALTER TABLE `history_bahan_baku`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Bahan_Baku_Id` (`Bahan_Baku_Id`);

--
-- Indexes for table `history_penarikan_saldo`
--
ALTER TABLE `history_penarikan_saldo`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Customer_Email` (`Customer_Email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `karyawan_ibfk_1` (`Role_Id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengadaan_bahan_baku`
--
ALTER TABLE `pengadaan_bahan_baku`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `pengadaan_ibfk1` (`BahanBaku_Id`);

--
-- Indexes for table `pengeluaran_lain_lain`
--
ALTER TABLE `pengeluaran_lain_lain`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `penitip`
--
ALTER TABLE `penitip`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Customer_Email` (`Customer_Email`),
  ADD KEY `pesanan_ibfk_2_idx` (`Alamat_Id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `presensi_ibfk_1` (`Karyawan_Id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Penitip_Id` (`Penitip_Id`);

--
-- Indexes for table `promo_poin`
--
ALTER TABLE `promo_poin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `resep_ibfk_1` (`Produk_Id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_bahan_baku`
--
ALTER TABLE `history_bahan_baku`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `history_penarikan_saldo`
--
ALTER TABLE `history_penarikan_saldo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `alamat_ibfk_1` FOREIGN KEY (`Customer_Email`) REFERENCES `customer` (`Email`);

--
-- Constraints for table `detail_hampers`
--
ALTER TABLE `detail_hampers`
  ADD CONSTRAINT `detail_hampers_ibfk_1` FOREIGN KEY (`Hampers_Id`) REFERENCES `hampers` (`Id`),
  ADD CONSTRAINT `detail_hampers_ibfk_2` FOREIGN KEY (`Produk_Id`) REFERENCES `produk` (`Id`);

--
-- Constraints for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD CONSTRAINT `detail_resep_ibfk_1` FOREIGN KEY (`Bahan_Baku_Id`) REFERENCES `bahan_baku` (`Id`),
  ADD CONSTRAINT `detail_resep_ibfk_2` FOREIGN KEY (`Resep_Id`) REFERENCES `resep` (`Id`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`Hampers_Id`) REFERENCES `hampers` (`Id`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`Produk_Id`) REFERENCES `produk` (`Id`),
  ADD CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`Pesanan_Id`) REFERENCES `pesanan` (`Id`);

--
-- Constraints for table `history_bahan_baku`
--
ALTER TABLE `history_bahan_baku`
  ADD CONSTRAINT `history_bahan_baku_ibfk_1` FOREIGN KEY (`Bahan_Baku_Id`) REFERENCES `bahan_baku` (`Id`);

--
-- Constraints for table `history_penarikan_saldo`
--
ALTER TABLE `history_penarikan_saldo`
  ADD CONSTRAINT `history_penarikan_saldo_ibfk_1` FOREIGN KEY (`Customer_Email`) REFERENCES `customer` (`Email`);

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`Role_Id`) REFERENCES `role` (`Id`);

--
-- Constraints for table `pengadaan_bahan_baku`
--
ALTER TABLE `pengadaan_bahan_baku`
  ADD CONSTRAINT `pengadaan_ibfk1` FOREIGN KEY (`BahanBaku_Id`) REFERENCES `bahan_baku` (`Id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`Customer_Email`) REFERENCES `customer` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`Alamat_Id`) REFERENCES `alamat` (`Id`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`Karyawan_Id`) REFERENCES `karyawan` (`Id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`Penitip_Id`) REFERENCES `penitip` (`Id`);

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_ibfk_1` FOREIGN KEY (`Produk_Id`) REFERENCES `produk` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
