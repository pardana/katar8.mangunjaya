-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 05:30 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_icargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `request_id` int(11) DEFAULT NULL,
  `bl_number` varchar(20) DEFAULT NULL,
  `ffid` int(11) DEFAULT NULL,
  `ff_name` varchar(100) DEFAULT NULL,
  `slid` int(11) DEFAULT NULL,
  `sl_name` varchar(100) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `checkout` int(1) DEFAULT NULL,
  `file_proforma` text,
  `file_invoice` text,
  `file_do` text,
  `expired_do` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `request_id`, `bl_number`, `ffid`, `ff_name`, `slid`, `sl_name`, `amount`, `checkout`, `file_proforma`, `file_invoice`, `file_do`, `expired_do`, `created_by`, `updated_by`, `created_date`, `updated_date`) VALUES
(1, 1, 'BL001', 3, 'PT. Pardana, Corp.', 4, 'PT. Kline Indonesia', 500000, 0, '', NULL, NULL, NULL, 'co_adit', 'sl_adit', '2017-11-22', '2017-12-29'),
(25, 38, 'BL002', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', 15000000, 1, '486f96199286894.jpg', NULL, NULL, NULL, 'co_cargo', 'ff_cargo', '2018-02-13', '2018-02-19'),
(26, 39, 'BL003', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', 70000000, 1, '11. Timesheet November.xls', '101.png', '102.png', '2018-02-27', 'co_cargo', 'sl_cargo', '2018-02-13', '2018-02-24'),
(27, 40, 'BL004', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', 375000000, 1, 'bola salju.jpg', NULL, NULL, NULL, 'co_cargo', 'ff_cargo', '2018-02-19', '2018-02-19'),
(28, 41, 'BL005', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', 1500000, NULL, '6Ty5krj8c.png', NULL, NULL, NULL, 'co_cargo', 'sl_cargo', '2018-02-19', '2018-02-19'),
(29, 42, 'BL006', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', 15000000, 1, '8404f5df-3ff0-4617-bb9d-f9a9b9e5bf53.jpg', '101.png', '102.png', '2018-03-02', 'co_cargo', 'sl_cargo', '2018-02-19', '2018-02-24'),
(30, 43, 'BL007', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', 'ff_cargo', '2018-02-19', '2018-02-19'),
(31, 44, 'BL008', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', NULL, '2018-02-19', NULL),
(32, 45, 'BL009', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', 'ff_cargo', '2018-02-19', '2018-02-19'),
(33, 46, 'BL010', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', NULL, '2018-02-19', NULL),
(34, 47, 'BL011', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', NULL, '2018-02-19', NULL),
(35, 48, 'BL012', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', 13000000, NULL, '76294ffa-d799-499c-9e69-2c7789469ee9.jpeg', NULL, NULL, NULL, 'co_cargo', 'sl_cargo', '2018-02-19', '2018-02-19'),
(36, 49, 'BL013', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', 150000000, 1, '10.jpg', '09.jpg', '102.png', '2018-02-27', 'co_cargo', 'sl_cargo', '2018-02-19', '2018-02-24'),
(37, 50, 'BL014', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', NULL, '2018-02-19', NULL),
(38, 51, 'BL015', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', NULL, '2018-02-19', NULL),
(39, 52, 'BL016', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', 'ff_cargo', '2018-02-19', '2018-02-19'),
(40, 53, 'BL017', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', 500000, NULL, '09.jpg', NULL, NULL, NULL, 'co_cargo', 'sl_cargo', '2018-02-19', '2018-02-24'),
(41, 54, 'BL018', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', 'ff_cargo', '2018-02-22', '2018-02-26'),
(42, 55, 'BL019', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', NULL, '2018-03-19', NULL),
(43, 56, 'BL020', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', NULL, '2018-03-19', NULL),
(44, 57, 'BL021', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', NULL, '2018-03-20', NULL),
(45, 58, 'BL022', 7, 'PT. Freight Forwarder', 8, 'PT. Shipping Line', NULL, NULL, NULL, NULL, NULL, NULL, 'co_cargo', 'ff_cargo', '2018-03-20', '2018-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `m_bank`
--

CREATE TABLE `m_bank` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(25) DEFAULT NULL,
  `bank_code` int(6) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bank`
--

INSERT INTO `m_bank` (`id`, `bank_name`, `bank_code`, `status`) VALUES
(1, 'BCA', 14, 1),
(2, 'BNI', 9, 1),
(3, 'BRI', 2, 1),
(4, 'MANDIRI', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_company`
--

CREATE TABLE `m_company` (
  `id_company` int(11) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `alamat` text,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_company`
--

INSERT INTO `m_company` (`id_company`, `company_name`, `email`, `phone`, `status`, `alamat`, `created_by`, `updated_by`, `created_date`, `updated_date`) VALUES
(1, 'PT. Cargo Owner', 'apfgraphia@gmail.com', '087856452541', 1, 'Papan Mas, Tambun Selatan', 'Admin', NULL, '2017-11-01', NULL),
(2, 'PT. Prima Graphia', 'prima@gmail.com', '085765754876', 1, 'Bulan-bulan Juanda, Bekasi Timur', 'Admin', NULL, '2017-11-01', NULL),
(3, 'PT. Pardana, Corp.', 'pardana@yahoo.com', '057867541278', 1, 'Margahayu, Bekasi Timur', 'Admin', NULL, '2017-11-02', NULL),
(4, 'PT. Kline Indonesia', 'kline@gmail.com', '086789657812', 1, 'Koja, Jakarta Utara', 'Admin', NULL, '2017-11-02', NULL),
(5, 'PT. Revo Indonesia', 'revo@gmail.com', '087896756745', 1, 'Semper, Jakarta Utara', 'Admin', NULL, '2017-11-02', NULL),
(6, 'PT. Espana', 'espana@yahoo.co.id', '085678455463', 1, 'Barcelona, Spanyol', 'Admin', NULL, '2017-11-03', NULL),
(7, 'PT. Freight Forwarder', 'freight@gmail.com', '086756458712', 1, 'Semper, Jakarta Utara', 'Admin', NULL, '2017-11-22', NULL),
(8, 'PT. Shipping Line', 'shipping@gmail.com', '087856787631', 1, 'Semper, Jakarta Utara', 'Admin', NULL, '2017-11-22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_roles`
--

CREATE TABLE `m_roles` (
  `id_roles` int(11) NOT NULL,
  `roles_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_roles`
--

INSERT INTO `m_roles` (`id_roles`, `roles_name`) VALUES
(1, 'Admin'),
(2, 'Cargo Owner'),
(3, 'Freight Forwarder'),
(4, 'Shipping Line');

-- --------------------------------------------------------

--
-- Table structure for table `m_status`
--

CREATE TABLE `m_status` (
  `id_status` int(11) NOT NULL,
  `status_name` varchar(4) DEFAULT NULL,
  `status_desc` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_status`
--

INSERT INTO `m_status` (`id_status`, `status_name`, `status_desc`) VALUES
(1, 'pndg', 'Job Order'),
(2, 'rqst', 'DO Request'),
(3, 'bill', 'Bill'),
(4, 'paid', 'Paid'),
(5, 'rjct', 'Reject'),
(6, 'rlsd', 'DO Released');

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text,
  `roles_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id`, `username`, `password`, `email`, `alamat`, `roles_id`, `company_id`) VALUES
(1, 'co_cargo', '9402ce18331a28a64ec0e484446e6803', 'co_cargo@gmail.com', 'Papan Mas, Tambun Selatan', 2, 1),
(2, 'ff_cargo', '0e478b5e18bb607d70cf529fa8a41619', 'ff_cargo@gmail.com', 'Papan Mas, Tambun Selatan', 3, 7),
(3, 'sl_cargo', '28e053817cf1c88fdb2579ab1beef819', 'sl_cargo@gmail.com', 'Papan Mas, Tambun Selatan', 4, 8),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@yahoo.com', 'Papan Mas, Tambun Selatan', 1, 6),
(5, 'prima', '21232f297a57a5a743894a0e4a801fc3', 'prima@yahoo.com', 'Bulan-bulan, Bekasi Timur', 4, 2),
(6, 'revo', '21232f297a57a5a743894a0e4a801fc3', 'revo@gmail.com', 'Jatimulya, Bekasi Timur', 3, 5),
(7, 'freight', '21232f297a57a5a743894a0e4a801fc3', 'freight@gmail.com', 'Rasuna said, Jakarta Selatan', 3, 3),
(8, 'shipping', '21232f297a57a5a743894a0e4a801fc3', 'shipping@yahoo.co.id', 'Hayam Wuruk, Jakarta Barat', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `req_number` varchar(10) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL,
  `company_id` int(3) DEFAULT NULL,
  `tag` int(1) DEFAULT NULL,
  `bank_id` int(1) DEFAULT NULL,
  `notes_request` text,
  `notes_reject` text,
  `ff_reject` int(1) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `req_number`, `status_id`, `company_id`, `tag`, `bank_id`, `notes_request`, `notes_reject`, `ff_reject`, `created_by`, `updated_by`, `created_date`, `updated_date`) VALUES
(1, 'REQ0000001', 4, 1, 1, NULL, 'a', NULL, 0, 'Admin', 'sl_adit', '2017-10-30', '2017-12-29'),
(38, 'REQ0000002', 3, 1, 1, 1, '<p><strong>BL Number&nbsp;sudah <em>ok </em>dan bisa dilanjutkan</strong></p>\r\n', NULL, 0, 'co_cargo', 'ff_cargo', '2018-02-13', '2018-02-19'),
(39, 'REQ0000003', 6, 1, 2, 2, '<p><strong>Cargo</strong> sudah ok dan dapat <s>dijalankan&nbsp;</s>suratnya</p>\r\n', NULL, 0, 'co_cargo', 'sl_cargo', '2018-02-13', '2018-02-24'),
(40, 'REQ0000004', 4, 1, 2, 4, '<p><strong>Tester </strong><em>satu </em><strong><s>siklus</s></strong></p>\r\n', NULL, 0, 'co_cargo', 'ff_cargo', '2018-02-19', '2018-02-19'),
(41, 'REQ0000005', 3, 1, 1, NULL, '', NULL, 0, 'co_cargo', 'sl_cargo', '2018-02-19', '2018-02-19'),
(42, 'REQ0000006', 6, 1, 2, 3, '', NULL, 0, 'co_cargo', 'sl_cargo', '2018-02-19', '2018-02-24'),
(43, 'REQ0000007', 2, 1, 1, NULL, '<p>Ok deh dicoba</p>\r\n', NULL, 0, 'co_cargo', 'ff_cargo', '2018-02-19', '2018-02-19'),
(44, 'REQ0000008', 1, 1, NULL, NULL, NULL, NULL, 0, 'co_cargo', NULL, '2018-02-19', NULL),
(45, 'REQ0000009', 2, 1, 1, NULL, '<p>Pembayaran via credit</p>\r\n', NULL, 0, 'co_cargo', 'ff_cargo', '2018-02-19', '2018-02-19'),
(46, 'REQ0000010', 1, 1, NULL, NULL, NULL, NULL, 0, 'co_cargo', NULL, '2018-02-19', NULL),
(47, 'REQ0000011', 1, 1, NULL, NULL, NULL, NULL, 0, 'co_cargo', NULL, '2018-02-19', NULL),
(48, 'REQ0000012', 3, 1, 1, NULL, '<p>Pembayaran via credit</p>\r\n', NULL, 0, 'co_cargo', 'sl_cargo', '2018-02-19', '2018-02-19'),
(49, 'REQ0000013', 6, 1, 1, 3, '<p>SUdah ok</p>\r\n', NULL, 0, 'co_cargo', 'sl_cargo', '2018-02-19', '2018-02-24'),
(50, 'REQ0000014', 1, 1, NULL, NULL, NULL, NULL, 0, 'co_cargo', NULL, '2018-02-19', NULL),
(51, 'REQ0000015', 5, 1, NULL, NULL, NULL, 'BL Number tidak terdaftar di surat', 1, 'co_cargo', 'ff_cargo', '2018-02-19', NULL),
(52, 'REQ0000016', 2, 1, 1, NULL, '<p><strong>Boleh</strong>, lanjut aja tinggal <s>approve</s></p>\r\n', NULL, 0, 'co_cargo', 'ff_cargo', '2018-02-19', '2018-02-19'),
(53, 'REQ0000017', 3, 1, 2, NULL, '<p>Siip lanjut aja</p>\r\n', NULL, 0, 'co_cargo', 'sl_cargo', '2018-02-19', '2018-02-24'),
(54, 'REQ0000018', 2, 1, 1, NULL, '', NULL, 0, 'co_cargo', 'ff_cargo', '2018-02-22', '2018-02-26'),
(55, 'REQ0000019', 5, 1, NULL, NULL, NULL, 'Number tidak jelas', 0, 'co_cargo', 'ff_cargo', '2018-03-19', NULL),
(56, 'REQ0000020', 5, 1, NULL, NULL, NULL, 'Check data tidak jelas', 1, 'co_cargo', 'ff_cargo', '2018-03-19', NULL),
(57, 'REQ0000021', 5, 1, NULL, NULL, NULL, 'di Reject sama FF', 1, 'co_cargo', 'ff_cargo', '2018-03-20', NULL),
(58, 'REQ0000022', 5, 1, 2, NULL, '<p>Barang sudah OK</p>\r\n', 'di Reject sama SL', 0, 'co_cargo', 'sl_cargo', '2018-03-20', '2018-03-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_bank`
--
ALTER TABLE `m_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_company`
--
ALTER TABLE `m_company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `m_roles`
--
ALTER TABLE `m_roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `m_status`
--
ALTER TABLE `m_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `m_bank`
--
ALTER TABLE `m_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `m_company`
--
ALTER TABLE `m_company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `m_roles`
--
ALTER TABLE `m_roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `m_status`
--
ALTER TABLE `m_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
