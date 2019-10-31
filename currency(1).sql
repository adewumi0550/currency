-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 10:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `currency`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency_money`
--

CREATE TABLE `currency_money` (
  `id` int(11) NOT NULL,
  `cname` text NOT NULL,
  `amount` double NOT NULL,
  `abb` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency_money`
--

INSERT INTO `currency_money` (`id`, `cname`, `amount`, `abb`, `created_date`) VALUES
(1, 'USDollar', 134, 'USD', '2019-09-08 15:23:15'),
(2, 'BritishPound', 0.5, 'GBP', '2019-09-09 17:25:17'),
(3, 'JapaneseYen', 0.36, 'JPY', '2019-09-09 17:25:38');
(4, 'SwissFranc', 0.36, 'CHF', '2019-09-09 17:25:38');
(5, 'AustralianDollar', 0.36, 'AUD', '2019-09-09 17:25:38');
(6, 'Naira', 0.36, 'NGN', '2019-09-09 17:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `reciever` text NOT NULL,
  `email` text NOT NULL,
  `sender` text NOT NULL,
  `amount` text NOT NULL,
  `status` text NOT NULL,
  `method_payment` text NOT NULL,
  `transc_id` text NOT NULL,
  `trascation_id_code` text NOT NULL,
  `admin_status` enum('0','1','','') NOT NULL DEFAULT '0',
  `approve_date` text NOT NULL,
  `bank_acct` text NOT NULL,
  `bank_name` text NOT NULL,
  `acct_name` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `reciever`, `email`, `sender`, `amount`, `status`, `method_payment`, `transc_id`, `trascation_id_code`, `admin_status`, `approve_date`, `bank_acct`, `bank_name`, `acct_name`, `created_date`) VALUES
(1, 'Admin', 'fati@gmail.com', '', '268', 'Buy Currency', 'Deposit', 'Sell', '26681567952798', '1', '2019-09-16', '', '', '', '2019-09-08 15:26:38'),
(2, '', '', 'Admin Credit', '268', '', '', 'Admin Credit', '30231567952835', '0', '', '', '', '', '2019-09-08 15:27:15'),
(3, 'Admin', 'adewumiadewale@gmail.com', 'adewale01', '163748', 'Buy Currency', 'Deposit', 'Sell', '51821567954819', '1', '2019-09-23', '', '', '', '2019-09-08 16:00:19'),
(4, 'adewale01', '', 'Admin Credit', '163748', '', '', 'Admin Credit', '77811567954883', '0', '', '', '', '', '2019-09-08 16:01:23'),
(6, '152451424215 Gtbank', '', 'saheed', '67', '', '', 'Send', '52921568054553', '0', '', '', '', '', '2019-09-09 19:42:33'),
(7, '152451424215 Gtbank', '', 'saheed', '228', '', '', 'Send', '11321568054671', '0', '', '', '', '', '2019-09-09 19:44:31'),
(8, '152451424215 Gtbank', '', 'saheed', '320.4', '', '', 'Send', '43171568056533', '0', '', '152451424215', 'Gtbank', 'Adewumi Saheed Adewale', '2019-09-09 20:15:33'),
(9, '152451424215 Gtbank', '', 'adewale01', '336', '', '', 'Send', '82361568057389', '0', '', '152451424215', 'Gtbank', 'Adewumi Saheed Adewale', '2019-09-09 20:29:49'),
(10, '152451424215 Gtbank', '', 'saheed', '6', '', '', 'Send', '44651568059512', '0', '', '152451424215', 'Gtbank', 'Adewumi Saheed Adewale', '2019-09-09 21:05:12'),
(11, '152451424215 Gtbank', '', 'saheed', '10', '', '', 'withdraw', '77691568059556', '0', '', '152451424215', 'Gtbank', 'Adewumi Saheed Adewale', '2019-09-09 21:05:56'),
(12, '152451424215 Gtbank', '', 'adewale01', '6.5', '', '', 'withdraw', '72971568059747', '0', '', '152451424215', 'Gtbank', 'Adewumi Saheed Adewale', '2019-09-09 21:09:07'),
(13, '152451424215 Gtbank', '', 'adewale01', '134000', '', '', 'withdraw', '16771568059814', '0', '', '152451424215', 'Gtbank', 'Adewumi Saheed Adewale', '2019-09-09 21:10:14'),
(14, '152451424215 Gtbank', '', 'adewale01', '6030', '', '', 'withdraw', '2711568059831', '0', '', '152451424215', 'Gtbank', 'Adewumi Saheed Adewale', '2019-09-09 21:10:31'),
(15, '152451424215 Gtbank', '', 'adewale01', '1608', '', '', 'withdraw', '50241568059846', '0', '', '152451424215', 'Gtbank', 'Adewumi Saheed Adewale', '2019-09-09 21:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `Email` text NOT NULL,
  `Mobile` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `state` text NOT NULL,
  `wallet` double NOT NULL,
  `wallet_id` varchar(200) NOT NULL,
  `status` text NOT NULL DEFAULT '0',
  `bank_acct` text NOT NULL,
  `bank_name` text NOT NULL,
  `acct_name` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `Email`, `Mobile`, `password`, `address`, `state`, `wallet`, `wallet_id`, `status`, `bank_acct`, `bank_name`, `acct_name`, `created_date`) VALUES
(4, 'Michael', 'Fayemiwo', 'adewumiadewale@gmail.com', '+2347031828170', '1a1dc91c907325c69271ddf0c944bc72', 'Eleyin Area Ede Osun State', 'Osun', 163509.37, 'adewale01', '0', '152451424215', 'Gtbank', 'Adewumi Saheed Adewale', '2019-09-05 20:34:53'),
(5, 'Adewumi', 'Saheed', 'adewumi@gmail.com', '+2347031828170', '1a1dc91c907325c69271ddf0c944bc72', 'Eleyin Area Ede Osun State', 'Osun', 160.16, 'saheed', '1', '152451424215', 'Gtbank', 'Adewumi Saheed Adewale', '2019-09-06 22:20:42'),
(6, 'halimah', 'ibrahim', 'ari@gmail.com', '08169107205', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 0, 'halimah01', '1', '', '', '', '2019-09-08 15:20:12'),
(7, 'fati', 'jibril', 'fati@gmail.com', '09097796761', 'd81b9ce93c866abb7f0feb747d88868c', '', '', 268, '', '0', '', '', '', '2019-09-08 15:25:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency_money`
--
ALTER TABLE `currency_money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency_money`
--
ALTER TABLE `currency_money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
