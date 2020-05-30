-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 06:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture_portal`
--
CREATE DATABASE agriculture_portal;
-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cropname` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `Crop_id` int(255) NOT NULL,
  `Crop_name` varchar(255) NOT NULL,
  `N_value` double NOT NULL,
  `P_value` double NOT NULL,
  `K_value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`Crop_id`, `Crop_name`, `N_value`, `P_value`, `K_value`) VALUES
(1, 'Rice', 20, 25, 25),
(2, 'Bajra', 50, 25, 0),
(3, 'Maize', 135, 62.5, 50),
(4, 'Cotton', 50, 25, 25),
(5, 'Soya', 20, 80, 40),
(6, 'Moong', 12.5, 25, 12.5),
(7, 'Groundnut', 25, 50, 75),
(8, 'Sugarcane', 300, 100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `custlogin`
--

CREATE TABLE `custlogin` (
  `cust_id` int(20) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `otp` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custlogin`
--

INSERT INTO `custlogin` (`cust_id`, `cust_name`, `password`, `email`, `address`, `city`, `pincode`, `state`, `phone_no`, `otp`) VALUES
(10, 'KmL6pFOBTTGXTHyflxKMSLUPTGYvUNGW', 'ba97b1cf397425a852d1316d10787b1d97b5bc85', 'shahpriyansh598@gmail.com', 'ooIvxi7/Xd9NYfsnl4wenFH6bKA7QX8laPpRFj2BR4I7B0Yk7G/yUfTFPPNY4PyBgt1bvNKUG3He6tSf8QsZVrKC2Bywy0Uy', 'vFfLenY7loJDFUQjbsOtc5sSrvt63w==', 'EVf6nfdvnrUgnqJmJwVFygya2nc2DQ==', 'B8opF61VjRY2tWZppWeSUmY/1+2R+GcpdzZz', 'YLdcQeVQdiMVOFLWE4UOJ5PCWwVwLIj8t/8=', 0),
(12, 'lnAWlLf42j34lAGuw9KZOtSgJ1yvk+Y3X4ziNO4=', 'ed311f7b724f74d22cb93f81ef1a6b18fa40a9bf', 'zenrecon4@gmail.com', 'OMFpvDdjkncGStSJ/snsTXA41HBoZOsPZ5d4ru4=', 'zMKC5HqHKYJ+f3l9vdxJO5ZVfTJ3vA==', 'Wq+AN8gdpgqEn2nKZwV5ov3ULYDZJA==', 'owJYKMDBeBGpNHZ1RT6qnpDUlFgP3Nz1XaXl', 't/ZGaavBpU0WhG0IFYLJT//86gkf9vOiCN8=', 40060),
(13, '+tjz5pLhyzKEDmfLpcKmIbXbBPeS6oVe7blKWQ==', 'f0676143b68513d8e9d24759c3e2b1ae92812c53', 'aaronshadow7@gmail.com', 'LTEIen/+yK69/qGUhBzcF7hhFAkQrqk7Rg==', 'nV4S3aAI6T8l7EZluo8fNHalpHg4SA==', 'S5NsrA65+tE6MF0rv64QWtTcDuSOWA==', 'h7psqEJN3lzU/3XjH8VyaULTCeEtHNCTFDON', 'zbslQI+qFrRJfzVppcrDWxWChPfa8pMQ6xc=', 92658);

-- --------------------------------------------------------

--
-- Table structure for table `farmerlogin`
--

CREATE TABLE `farmerlogin` (
  `farmer_id` int(11) NOT NULL,
  `farmer_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `F_gender` varchar(255) NOT NULL,
  `F_birthday` varchar(255) NOT NULL,
  `F_State` varchar(255) NOT NULL,
  `F_District` varchar(255) NOT NULL,
  `F_Location` varchar(255) NOT NULL,
  `F_AadharNo` varchar(255) NOT NULL,
  `F_AadharNo_file` varchar(255) NOT NULL,
  `F_Photo_Id_file` varchar(255) NOT NULL,
  `otp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmerlogin`
--

INSERT INTO `farmerlogin` (`farmer_id`, `farmer_name`, `password`, `email`, `phone_no`, `F_gender`, `F_birthday`, `F_State`, `F_District`, `F_Location`, `F_AadharNo`, `F_AadharNo_file`, `F_Photo_Id_file`, `otp`) VALUES
(42, 'ozBeU4tg689gauVddiRqNJP+FyUJHO6ZFRkkYw==', 'ba97b1cf397425a852d1316d10787b1d97b5bc85', 'shahpriyansh598@gmail.com', 'ezCCox8LBisNpblc5W5OcjHqEAcm/A1g8VU=', 'R4j4gt6vU2/tZrx4iR0gI6gq5Ms=', 'yO2hdNgNuAH7RIRNQs8fgGFLQR330oy431Y=', 'iskOqjPHZBF7nc7XXcbHntQvYoyxsz2NmhGa', 'lpf7V2aXdaDb0blbecS3YEksuq8t8IBi', 'ZmT8HwLGojRsfD6F4XG/GwntFdIQ', 'ZvO5C2qaPnI48QiSOkat0/G3p6SDl71lkg==', 'New Doc 2018-02-05_1.jpg', 'Untitled.jpg', 0),
(44, 't4VQi+JwveSdp/Boh2nSO5xRlYm7hTdvOuebLTg=', 'ed311f7b724f74d22cb93f81ef1a6b18fa40a9bf', 'zenrecon4@gmail.com', '4IdnSwTyUOBs2DFxZ7B5O4YgrG3Dqx8UPhU=', 'DFxBnBTMYWi8LgT7Hg4vDwshVgg=', '8U7EhNQpPQmdLi0Zm9iTN8dDwvpzr79CKww=', '6ALjHFPf1JN3vuZridWViriTVg==', 'rv0eB94lcE0XtJsspdbkOmpfvYbfKY0=', '9R+gLC0nUrmGBSGCqmSFDpU0Ea7g/MPDrQ==', '6iPpCDw1p9Fv04OghT0UpB4c4hTrDsExoA==', '', '', 76599);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_crops_trade`
--

CREATE TABLE `farmer_crops_trade` (
  `trade_id` int(11) NOT NULL,
  `farmer_fkid` int(50) NOT NULL,
  `Trade_crop` varchar(255) NOT NULL,
  `Crop_quantity` double NOT NULL,
  `costperkg` int(11) NOT NULL,
  `msp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer_crops_trade`
--

INSERT INTO `farmer_crops_trade` (`trade_id`, `farmer_fkid`, `Trade_crop`, `Crop_quantity`, `costperkg`, `msp`) VALUES
(83, 42, 'lentil', 130, 30, 45),
(84, 44, 'wheat', 1, 13, 20),
(85, 44, 'bajra', 35, 14, 23),
(86, 44, 'cotton', 30, 37, 54),
(87, 44, 'bajra', 100, 15, 23),
(88, 44, 'cotton', 200, 35, 54);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_history`
--

CREATE TABLE `farmer_history` (
  `History_id` int(11) NOT NULL,
  `farmer_id` int(50) NOT NULL,
  `farmer_crop` varchar(255) NOT NULL,
  `farmer_quantity` int(50) NOT NULL,
  `farmer_price` int(50) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer_history`
--

INSERT INTO `farmer_history` (`History_id`, `farmer_id`, `farmer_crop`, `farmer_quantity`, `farmer_price`, `date`) VALUES
(1, 31, 'soyabean', 1, 38, ''),
(2, 31, 'moong', 1, 71, ''),
(3, 31, 'wheat', 1, 20, ''),
(4, 31, 'wheat', 4, 100, ''),
(5, 31, 'moong', 3, 142, ''),
(6, 31, 'moong', 2, 355, ''),
(7, 31, 'ragi', 1, 32, ''),
(8, 31, 'ragi', 3, 96, ''),
(9, 31, 'ragi', 2, 64, ''),
(10, 31, 'bajra', 3, 63, '04/04/2020'),
(11, 42, 'lentil', 10, 450, '05/04/2020'),
(12, 44, 'wheat', 10, 200, '05/04/2020'),
(13, 42, 'lentil', 1, 45, '05/04/2020'),
(14, 44, 'wheat', 5, 100, '05/04/2020'),
(15, 42, 'lentil', 10, 450, '05/04/2020'),
(16, 42, 'lentil', 10, 450, '13/04/2020'),
(17, 42, 'lentil', 10, 450, '13/04/2020'),
(18, 44, 'cotton', 50, 2800, '13/04/2020'),
(19, 44, 'wheat', 4, 80, '13/04/2020'),
(20, 44, 'cotton', 100, 5400, '17/04/2020'),
(21, 44, 'bajra', 5, 115, '27/05/2020'),
(22, 44, 'cotton', 10, 540, '27/05/2020'),
(23, 44, 'cotton', 10, 540, '27/05/2020'),
(24, 44, 'bajra', 10, 230, '27/05/2020');

-- --------------------------------------------------------

--
-- Table structure for table `governmentlogin`
--

CREATE TABLE `governmentlogin` (
  `GId` int(11) NOT NULL,
  `Admin_name` varchar(255) NOT NULL,
  `Admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `governmentlogin`
--

INSERT INTO `governmentlogin` (`GId`, `Admin_name`, `Admin_password`) VALUES
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `production_approx`
--

CREATE TABLE `production_approx` (
  `crop` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_approx`
--

INSERT INTO `production_approx` (`crop`, `quantity`) VALUES
('arhar', 10),
('bajra', 176),
('barley', 0),
('cotton', 235),
('gram', 15),
('jowar', 0),
('jute', 0),
('lentil', 377),
('maize', 0),
('moong', 38),
('ragi', 19),
('rice', 0),
('soyabean', 3),
('urad', 0),
('wheat', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cropname` (`cropname`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`Crop_id`);

--
-- Indexes for table `custlogin`
--
ALTER TABLE `custlogin`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `farmerlogin`
--
ALTER TABLE `farmerlogin`
  ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `farmer_crops_trade`
--
ALTER TABLE `farmer_crops_trade`
  ADD PRIMARY KEY (`trade_id`),
  ADD KEY `farmer_fkid` (`farmer_fkid`);

--
-- Indexes for table `farmer_history`
--
ALTER TABLE `farmer_history`
  ADD PRIMARY KEY (`History_id`);

--
-- Indexes for table `governmentlogin`
--
ALTER TABLE `governmentlogin`
  ADD PRIMARY KEY (`GId`);

--
-- Indexes for table `production_approx`
--
ALTER TABLE `production_approx`
  ADD PRIMARY KEY (`crop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custlogin`
--
ALTER TABLE `custlogin`
  MODIFY `cust_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `farmerlogin`
--
ALTER TABLE `farmerlogin`
  MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `farmer_crops_trade`
--
ALTER TABLE `farmer_crops_trade`
  MODIFY `trade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `farmer_history`
--
ALTER TABLE `farmer_history`
  MODIFY `History_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `governmentlogin`
--
ALTER TABLE `governmentlogin`
  MODIFY `GId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `farmer_crops_trade`
--
ALTER TABLE `farmer_crops_trade`
  ADD CONSTRAINT `farmer_crops_trade_ibfk_1` FOREIGN KEY (`farmer_fkid`) REFERENCES `farmerlogin` (`farmer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
