-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2019 at 02:23 PM
-- Server version: 10.1.41-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitbyte_telecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agent_discount`
--

CREATE TABLE `tbl_agent_discount` (
  `discount_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `discount_percent` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agent_discount`
--

INSERT INTO `tbl_agent_discount` (`discount_id`, `user_id`, `discount_percent`, `date_time`, `status`) VALUES
(1, 5, '12', '2019-09-27 09:59:07', 1),
(2, 4, '10', '2019-09-27 09:59:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checklist`
--

CREATE TABLE `tbl_checklist` (
  `checklist_id` int(11) NOT NULL,
  `checklist` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_checklist`
--

INSERT INTO `tbl_checklist` (`checklist_id`, `checklist`, `date_time`, `status`) VALUES
(1, 'Battery', '2019-09-27 09:32:37', 1),
(2, 'Charger', '2019-09-27 09:32:37', 1),
(3, 'Back Cover', '2019-09-27 09:32:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issues`
--

CREATE TABLE `tbl_issues` (
  `issue_id` int(11) NOT NULL,
  `manufecturer_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_issues`
--

INSERT INTO `tbl_issues` (`issue_id`, `manufecturer_id`, `model_id`, `issue`, `price`, `service`, `discount`, `total_price`, `date_time`, `status`) VALUES
(3, 1, 2, 'Mic', '12', '8', '5', '20', '2019-10-01 07:10:40', 1),
(4, 1, 2, 'Camera', '15', '10', '5', '25', '2019-10-01 07:10:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufecturer`
--

CREATE TABLE `tbl_manufecturer` (
  `manufecturer_id` int(11) NOT NULL,
  `manufecturer` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manufecturer`
--

INSERT INTO `tbl_manufecturer` (`manufecturer_id`, `manufecturer`, `date_time`, `status`) VALUES
(1, 'Apple', '2019-09-27 05:50:06', 1),
(2, 'Sumsung', '2019-09-27 05:50:06', 1),
(3, 'Huawei', '2019-09-27 05:50:06', 1),
(4, 'Oppo', '2019-09-27 05:50:06', 1),
(5, 'Nokia', '2019-10-04 07:48:40', 1),
(6, 'Moto', '2019-10-04 07:49:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model`
--

CREATE TABLE `tbl_model` (
  `model_id` int(11) NOT NULL,
  `manufecturer_id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`model_id`, `manufecturer_id`, `model_name`, `date_time`, `status`) VALUES
(1, 1, 'Iphone 6', '2019-09-27 06:55:50', 1),
(2, 1, 'Iphone 7', '2019-09-27 06:55:50', 1),
(3, 1, 'Iphone x', '2019-09-27 06:55:50', 1),
(4, 2, 's7', '2019-09-27 06:55:50', 1),
(5, 2, 's9', '2019-09-27 06:55:50', 1),
(6, 3, 'P10', '2019-09-27 06:55:50', 1),
(7, 3, 'p20', '2019-09-27 06:55:50', 1),
(8, 4, 'A37', '2019-09-27 06:55:50', 1),
(9, 4, 'A37 plus', '2019-09-27 06:55:50', 1),
(10, 5, '3310', '2019-10-04 07:49:00', 1),
(11, 6, 'M5', '2019-10-04 07:49:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model_checklist`
--

CREATE TABLE `tbl_model_checklist` (
  `model_checklist_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `checklist_id` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_model_checklist`
--

INSERT INTO `tbl_model_checklist` (`model_checklist_id`, `manufacturer_id`, `model_id`, `checklist_id`, `date_time`, `status`) VALUES
(1, 1, 2, 3, '2019-10-01 07:06:09', 1),
(2, 1, 2, 1, '2019-10-01 07:06:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `device_id` int(11) NOT NULL,
  `primary_test_id` int(11) NOT NULL,
  `notes` text NOT NULL,
  `total_bill` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `net_bill` varchar(255) NOT NULL,
  `advance_paid` varchar(255) NOT NULL,
  `remaining` varchar(255) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `due_date` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `agent_id`, `customer_id`, `device_id`, `primary_test_id`, `notes`, `total_bill`, `discount`, `net_bill`, `advance_paid`, `remaining`, `payment_method_id`, `order_date`, `due_date`, `date_time`, `status`) VALUES
(1, 5, 7, 1, 0, 'Federer', '45', '0', '45', '0', '4', 0, '25-09-2019', '30-09-2019', '2019-10-01 10:34:47', 1),
(2, 5, 8, 2, 2, 'Federer', '398', '20', '378', '100', '29', 1, '25-09-2019', '30-09-2019', '2019-10-01 10:36:15', 1),
(3, 5, 9, 3, 3, 'Federer', '398', '20', '378', '100', '29', 1, '25-09-2019', '30-09-2019', '2019-10-01 10:39:48', 1),
(5, 5, 11, 4, 5, 'Tgg', '45', '10', '35', '10', '3', 1, '01-10-2019', '06-10-2019', '2019-10-01 13:07:56', 1),
(6, 5, 12, 5, 6, 'Federer', '398', '20', '378', '100', '29', 1, '25-09-2019', '30-09-2019', '2019-10-01 13:25:13', 1),
(7, 5, 13, 6, 0, 'Hhh', '45', '0', '45', '0', '4', 0, '01-10-2019', '06-10-2019', '2019-10-01 14:35:32', 1),
(8, 5, 24, 7, 0, 'Federer', '398', '20', '378', '100', '29', 1, '25-09-2019', '30-09-2019', '2019-10-04 09:59:44', 1),
(9, 5, 25, 8, 0, 'Federer', '398', '20', '378', '100', '29', 1, '25-09-2019', '30-09-2019', '2019-10-04 10:32:51', 1),
(10, 5, 26, 9, 0, 'Federer', '398', '20', '378', '100', '29', 1, '25-09-2019', '30-09-2019', '2019-10-04 10:34:54', 1),
(11, 5, 27, 10, 0, 'Test note', '45', '10', '35', '10', '3', 1, '04-10-2019', '09-10-2019', '2019-10-04 13:10:03', 1),
(12, 5, 28, 11, 0, 'Ggggg', '45', '0', '45', '0', '4', 1, '04-10-2019', '09-10-2019', '2019-10-04 15:30:43', 1),
(13, 5, 41, 12, 0, 'test', '45', '0', '45', '0', '4', 1, '16-10-2019', '21-10-2019', '2019-10-16 14:04:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_assign`
--

CREATE TABLE `tbl_order_assign` (
  `order_assign_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `pick_date` date NOT NULL,
  `pick_time` time NOT NULL,
  `assign_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_assign`
--

INSERT INTO `tbl_order_assign` (`order_assign_id`, `driver_id`, `shop_id`, `pick_date`, `pick_time`, `assign_date_time`) VALUES
(5, 12, 14, '2019-10-10', '11:00:00', '2019-10-10 18:00:00'),
(6, 15, 16, '2019-10-11', '18:00:00', '2019-10-11 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_assign_detail`
--

CREATE TABLE `tbl_order_assign_detail` (
  `order_assign_detail_id` int(11) NOT NULL,
  `order_assign_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `picked_time` datetime DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order_assign_detail`
--

INSERT INTO `tbl_order_assign_detail` (`order_assign_detail_id`, `order_assign_id`, `order_id`, `agent_id`, `picked_time`, `notes`) VALUES
(15, 5, 1, 5, NULL, ''),
(16, 5, 2, 5, NULL, ''),
(17, 5, 3, 5, NULL, ''),
(18, 6, 1, 5, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_checklist`
--

CREATE TABLE `tbl_order_checklist` (
  `order_checklist_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `checklist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_checklist`
--

INSERT INTO `tbl_order_checklist` (`order_checklist_id`, `order_id`, `checklist_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 3, 1),
(6, 3, 2),
(7, 5, 3),
(8, 5, 1),
(11, 7, 3),
(12, 6, 1),
(13, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_device_info`
--

CREATE TABLE `tbl_order_device_info` (
  `order_device_info_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `model_no` varchar(255) NOT NULL,
  `imei` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `checklist` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_device_info`
--

INSERT INTO `tbl_order_device_info` (`order_device_info_id`, `order_id`, `manufacturer_id`, `model_id`, `model_no`, `imei`, `serial_no`, `password`, `checklist`) VALUES
(1, 1, 1, 2, 'cuz', '123456789012345', '1234', '12121313', 'Cccc'),
(2, 2, 1, 1, 'cuz', '123456789012345', '1234', '12121313', ''),
(3, 3, 1, 1, 'cuz', '123456789012345', '1234', '12121313', ''),
(4, 5, 1, 1, 'tyyg', '123456789012345', 'hhhh', '2121', ''),
(5, 6, 1, 1, 'cuz', '123456789012345', '1234', '12121313', ''),
(6, 7, 1, 2, '124', 'ggggggggggggggg', 'vhb', '', 'Vbbbb'),
(7, 8, 1, 1, 'cuz', '123456789012345', '1234', '12121313', 'Sim, charger'),
(8, 9, 1, 1, 'cuz', '123456789012345', '1234', '12121313', 'Sim, charger'),
(9, 10, 1, 1, 'cuz', '123456789012345', '1234', '12121313', 'Sim, charger'),
(10, 11, 1, 2, 'test model', '123456689012345', 'snbsbs', '', 'Test checklist'),
(11, 12, 1, 2, 'abcdefghijklmnop', 'abcdefghijklmnop', 'abcdefghijklmnop', 'abcdefghijklmnop', 'Hhhhhh'),
(12, 13, 1, 2, 'sdfsdfsf', '123456789012345', 'add add', '', 'Sdfsdfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_issues`
--

CREATE TABLE `tbl_order_issues` (
  `order_issue_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_issues`
--

INSERT INTO `tbl_order_issues` (`order_issue_id`, `order_id`, `issue_id`) VALUES
(4, 2, 3),
(5, 2, 4),
(7, 3, 3),
(10, 5, 3),
(11, 5, 4),
(16, 6, 1),
(17, 6, 2),
(18, 6, 3),
(19, 8, 1),
(20, 8, 2),
(21, 8, 3),
(26, 11, 3),
(27, 11, 4),
(28, 10, 3),
(29, 10, 4),
(32, 7, 3),
(33, 7, 4),
(38, 1, 3),
(39, 1, 4),
(42, 12, 3),
(43, 12, 4),
(46, 13, 3),
(47, 13, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_primary_test`
--

CREATE TABLE `tbl_order_primary_test` (
  `order_primary_test_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `primary_test_id` int(11) NOT NULL,
  `test_status` varchar(255) NOT NULL,
  `camera` varchar(255) DEFAULT NULL,
  `charging` varchar(255) DEFAULT NULL,
  `lcd` varchar(255) DEFAULT NULL,
  `touch` varchar(255) DEFAULT NULL,
  `button` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_primary_test`
--

INSERT INTO `tbl_order_primary_test` (`order_primary_test_id`, `order_id`, `primary_test_id`, `test_status`, `camera`, `charging`, `lcd`, `touch`, `button`) VALUES
(6, 2, 1, '1', '0', '1', '0', '0', '1'),
(7, 2, 2, '0', '1', '1', '1', '1', '0'),
(28, 11, 4, '1', NULL, NULL, NULL, NULL, NULL),
(29, 11, 1, '1', NULL, NULL, NULL, NULL, NULL),
(30, 11, 3, '0', NULL, NULL, NULL, NULL, NULL),
(31, 11, 2, '0', NULL, NULL, NULL, NULL, NULL),
(32, 11, 5, '0', NULL, NULL, NULL, NULL, NULL),
(33, 10, 1, '1', NULL, NULL, NULL, NULL, NULL),
(34, 10, 2, '1', NULL, NULL, NULL, NULL, NULL),
(35, 10, 3, '1', NULL, NULL, NULL, NULL, NULL),
(36, 10, 4, '1', NULL, NULL, NULL, NULL, NULL),
(37, 10, 5, '0', NULL, NULL, NULL, NULL, NULL),
(53, 1, 1, '0', NULL, NULL, NULL, NULL, NULL),
(54, 1, 2, '0', NULL, NULL, NULL, NULL, NULL),
(55, 1, 3, '0', NULL, NULL, NULL, NULL, NULL),
(56, 1, 4, '0', NULL, NULL, NULL, NULL, NULL),
(57, 1, 5, '0', NULL, NULL, NULL, NULL, NULL),
(63, 12, 1, '0', NULL, NULL, NULL, NULL, NULL),
(64, 12, 2, '1', NULL, NULL, NULL, NULL, NULL),
(65, 12, 3, '1', NULL, NULL, NULL, NULL, NULL),
(66, 12, 4, '1', NULL, NULL, NULL, NULL, NULL),
(67, 12, 5, '0', NULL, NULL, NULL, NULL, NULL),
(73, 13, 1, '1', NULL, NULL, NULL, NULL, NULL),
(74, 13, 2, '0', NULL, NULL, NULL, NULL, NULL),
(75, 13, 3, '0', NULL, NULL, NULL, NULL, NULL),
(76, 13, 4, '1', NULL, NULL, NULL, NULL, NULL),
(77, 13, 5, '0', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_methods`
--

CREATE TABLE `tbl_payment_methods` (
  `payment_method_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment_methods`
--

INSERT INTO `tbl_payment_methods` (`payment_method_id`, `payment_method`, `date_time`, `status`) VALUES
(1, 'Cash', '2019-09-27 10:05:56', 1),
(2, 'Paypal', '2019-09-27 10:05:56', 1),
(3, 'Credit Card', '2019-09-27 10:05:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_primary_test`
--

CREATE TABLE `tbl_primary_test` (
  `primary_test_id` int(11) NOT NULL,
  `primary_test` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_primary_test`
--

INSERT INTO `tbl_primary_test` (`primary_test_id`, `primary_test`) VALUES
(1, 'Camera'),
(2, 'LCD Display'),
(3, 'Charging port'),
(4, 'Buttons'),
(5, 'on/off');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax_settings`
--

CREATE TABLE `tbl_tax_settings` (
  `tax_id` int(11) NOT NULL,
  `tax_percent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tax_settings`
--

INSERT INTO `tbl_tax_settings` (`tax_id`, `tax_percent`, `date_time`, `status`) VALUES
(4, '20', '2019-10-02 06:02:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `email` varchar(360) NOT NULL,
  `postcode` varchar(120) NOT NULL,
  `password` varchar(360) NOT NULL,
  `address` text NOT NULL,
  `building_no` varchar(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `website` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type_id` int(11) NOT NULL,
  `last_login` varchar(360) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `name`, `phone`, `email`, `postcode`, `password`, `address`, `building_no`, `shop_name`, `website`, `reg_date`, `user_type_id`, `last_login`, `status`) VALUES
(1, 'TSC Admin', '03001234567', 'admin@gmail.com', '54000', '21232f297a57a5a743894a0e4a801fc3', 'Lahore', '', '', '', '2019-09-25 08:24:39', 1, '2019-09-25 20:20:44', 1),
(2, 'agent1', '03011234567', 'agent1@gmail.com', '54000', 'e10adc3949ba59abbe56e057f20f883e', 'Lahore', '', '', '', '2019-09-25 08:24:39', 2, '', 1),
(3, 'ali', '03211234567', 'ali@gmail.com', '12000', 'e10adc3949ba59abbe56e057f20f883e', 'lahore ', '', '', '', '2019-09-25 14:04:09', 2, '2019-10-02 06:39:36', 1),
(4, 'ahmad', '0323423948', 'ahmad@gmail.com', '53000', 'e10adc3949ba59abbe56e057f20f883e', 'lahore', '', '', '', '2019-09-25 14:06:20', 2, '2019-09-25 21:09:26', 1),
(5, 'zain', '023423234234', 'zain@gmail.com', '4646464', 'e10adc3949ba59abbe56e057f20f883e', 'Station Road, Frimley, Camberley GU16 7HF, UK', '', '', '', '2019-09-25 14:14:42', 2, '2019-10-16 14:01:38', 1),
(6, 'a', 'a', 'a@gmail.com', 'a', '0cc175b9c0f1b6a831c399e269772661', 'Agadir, Morocco', '', '', '', '2019-10-01 08:11:05', 2, '', 1),
(7, 'Azher Ashiq    ', '1234', 'azharashiq178@gmail.com', '1234', '', 'Station Road, Frimley, Camberley GU16 7HF, UK', '', '', '', '2019-10-01 10:34:47', 5, '', 1),
(8, 'Azher Ashiq', '1234', 'azharashiq178@gmail.com', '1234', '', 'Test', '', '', '', '2019-10-01 10:36:15', 5, '', 1),
(9, 'Azher Ashiq', '1234', 'azharashiq178@gmail.com', '1234', '', 'Test', '', '', '', '2019-10-01 10:39:48', 5, '', 1),
(10, 'Azher  Ashiq ', '123456', 'azhar@gmail.com', 'bsbsbs', '', 'shhshs', '', '', '', '2019-10-01 13:02:39', 5, '', 1),
(11, 'hhhh yyy', '3455', 'Azher@gmail.com', '3455', '', 'ftghh', '', '', '', '2019-10-01 13:07:56', 5, '', 1),
(12, 'Azher Ashiq', '1234', 'azharashiq178@gmail.com', '1234', '', 'Test', '', '', '', '2019-10-01 13:25:13', 5, '', 1),
(13, 'bhh hhh ', 'vbhbb', 'gghj@gmail.com', 'b7 4dw', '', 'chbvb', '', '', '', '2019-10-01 14:35:32', 5, '', 1),
(14, 'Muhammad Bilal', '07935738807', 'gsmboys007@gmail.com', 'B7 4DW', '21232f297a57a5a743894a0e4a801fc3', '302 Windsor Street, Birmingham, UK', '', '', '', '2019-10-02 05:15:11', 2, '', 1),
(15, 'Muhammad Bilal', '07935738807', 'admin@admin.com', 'B7 4DW', '21232f297a57a5a743894a0e4a801fc3', '302 Windsor Street, Birmingham, UK', '', '', '', '2019-10-02 05:17:01', 4, '', 1),
(16, 'Billy', '07935738807', 'admin@example.com', 'B7 4DW', '21232f297a57a5a743894a0e4a801fc3', '302 Windsor Street, Birmingham, UK', '', 'GRG', '', '2019-10-02 06:03:59', 3, '', 1),
(17, 'Muhammad Bilal', '07935738807', 'admin@demo.com', 'B7 4DW', '21232f297a57a5a743894a0e4a801fc3', '302 Windsor Street, Birmingham, UK', '', 'GRG', '', '2019-10-02 06:13:02', 3, '', 1),
(18, 'shop@gmail.com', '0300221333232', 'shop@gmail.com', '1234', 'e10adc3949ba59abbe56e057f20f883e', 'Lahore-Islamabad Motorway, Pakistan', '', 'TEst Shop', 'test.com', '2019-10-02 06:16:10', 3, '', 1),
(19, 'Shop Owner', '030021212121', 'nshop@gmail.com', '12000', 'e10adc3949ba59abbe56e057f20f883e', 'Multan, Pakistan', '', 'new shope', '', '2019-10-02 06:19:12', 3, '', 1),
(20, 'Muhammad Bilal', '07935738807', 'admin@demo1.com', 'B7 4DW', '21232f297a57a5a743894a0e4a801fc3', '302 Windsor Street, Birmingham, UK', '', 'GRG', '', '2019-10-02 08:55:58', 3, '', 1),
(21, 'suleman Naveed', '03211234567', 'pap@gmail.com', 'GU16 7HF', '81dc9bdb52d04dc20036dbd8313ed055', 'Station Road, Frimley, Camberley GU16 7HF, UK', '33', 'paper books', 'paperbook.com', '2019-10-03 10:08:53', 3, '', 1),
(22, 'suleman', '04253636322', 'suleman@gmail.com', 'B7 4DW', 'e10adc3949ba59abbe56e057f20f883e', 'Windsor Street, Birmingham B7 4DW, UK', '302', '', '', '2019-10-03 14:03:54', 2, '', 1),
(23, 'Muhammad Bilal', '07935738807', 'admin@flexibleit.net', 'B7 4DW', '21232f297a57a5a743894a0e4a801fc3', 'Windsor Street, Birmingham B7 4DW, UK', '302', '', '', '2019-10-04 05:49:00', 2, '', 1),
(24, 'Nabeel Ashiq', '03671234321', 'nabeel@gmail.com', '1234', '', 'PIA socity lahore', '', '', '', '2019-10-04 09:59:44', 5, '', 1),
(25, 'Nabeel Ashiq', '03671234321', 'nabeel@gmail.com', '1234', '', 'PIA socity lahore', '', '', '', '2019-10-04 10:32:51', 5, '', 1),
(26, 'Nabeel ahmad', '03671234321', 'nabeel@gmail.com', '1234', '', 'PIA socity', '', '', '', '2019-10-04 10:34:54', 5, '', 1),
(27, 'azhar ', '090078601', 'test@gmail.com', '277338', '', 'bsbxbdbx', '', '', '', '2019-10-04 13:10:03', 5, '', 1),
(28, 'Jawad  ', 'Ahmad', 'jac_115@live.com', '5400', '', 'Wapda town', '', '', '', '2019-10-04 15:30:43', 5, '', 1),
(39, 'Nabeel ', '0323423948', 'dilshadess@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'West Bromwich B70, UK', '322', '', '', '2019-10-07 06:38:51', 2, '', 1),
(40, 'ahmad', '04253636322', 'dilshad_bukhari@hotmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 'West Bromwich B70, UK', '444', '', '', '2019-10-07 06:40:35', 2, '', 1),
(41, 'Dilshad 1 ', '090078601', 'test@gmail.com', '22ed', '', 'Pk', '', '', '', '2019-10-16 14:04:19', 5, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_authentication`
--

CREATE TABLE `tbl_users_authentication` (
  `user_authentication_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expired_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users_authentication`
--

INSERT INTO `tbl_users_authentication` (`user_authentication_id`, `user_id`, `token`, `expired_at`, `created_at`, `updated_at`) VALUES
(1, 1, '$1$GyxDC/VU$p0100ziYfemNP6ckaDIPg1', '2019-09-26 08:20:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 4, '$1$rBjKocZC$oPTKbOZNNcToITfas3uVY0', '2019-09-26 09:07:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, '$1$PDAhF8Cc$F4ATmQqXbGpS0.IBnXApl1', '2019-09-26 09:09:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 5, '$1$WFwQNuAl$KRo5KdTqzQlUnAMpUTrzd0', '2019-09-26 09:14:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, '$1$cTikH2dl$tS9.RZJ860B3dMwLU8OnM.', '2019-09-26 09:15:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 5, '$1$v9xFLQWw$MwEFUsn3WdiHsGLuY3Vz6/', '2019-09-27 02:22:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 5, '$1$CMgSF2ng$t06A1FXEjvPXaLiDF45yf/', '2019-09-27 22:08:38', '0000-00-00 00:00:00', '2019-09-27 10:08:38'),
(8, 5, '$1$eAbq39tk$BSbGxb8qYtN3VRN2wU3mn1', '2019-09-27 17:53:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 5, '$1$G/cZmuZt$FbumyDv9z8MShTOH7n1Dt.', '2019-09-27 19:27:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 5, '$1$xeiY/jX0$5gI42Zf53z3MpC3AvOsa2/', '2019-09-30 21:36:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 5, '$1$50Q/9w5D$hrRtJe2QJINRK3NHWR7H..', '2019-09-30 21:39:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 5, '0f8c02a6d05f1a3ac1b857ab9f280a32', '2019-10-01 00:43:52', '0000-00-00 00:00:00', '2019-09-30 12:43:52'),
(13, 5, 'dc019be45c3dabea29baf50307c37b10', '2019-10-01 01:12:39', '0000-00-00 00:00:00', '2019-09-30 13:12:39'),
(14, 5, 'b337cddd69bec3083691b4affe1bb20e', '2019-10-01 22:32:16', '0000-00-00 00:00:00', '2019-10-01 10:32:16'),
(15, 5, 'e12959318e704a10c3d0bc3df22833d1', '2019-10-02 00:55:55', '0000-00-00 00:00:00', '2019-10-01 12:55:55'),
(16, 5, '762986fd9bcd0c444268c5e9d7908595', '2019-10-02 01:59:30', '0000-00-00 00:00:00', '2019-10-01 13:59:30'),
(17, 5, '17caa423e1c5a70ad8b12df10addd0d3', '2019-10-02 02:35:32', '0000-00-00 00:00:00', '2019-10-01 14:35:32'),
(18, 5, '6703eaee90102ca3a078733a6add07a3', '2019-10-02 17:36:55', '0000-00-00 00:00:00', '2019-10-02 05:36:55'),
(19, 5, 'a760f5640ace6080704cbca2ac352f43', '2019-10-02 21:42:18', '0000-00-00 00:00:00', '2019-10-02 09:42:18'),
(20, 3, 'df139d2af8e917b723550d615cf0a9c1', '2019-10-02 18:46:49', '0000-00-00 00:00:00', '2019-10-02 06:46:49'),
(21, 5, 'e49e4833fe9ac465e8a81eceb8b22c09', '2019-10-02 19:36:04', '0000-00-00 00:00:00', '2019-10-02 07:36:04'),
(22, 5, '98b69b027a163d7ef812db8379e4a27e', '2019-10-02 22:24:32', '0000-00-00 00:00:00', '2019-10-02 10:24:32'),
(23, 5, '1f3507bab66db4950ff31f5081d6301e', '2019-10-04 01:40:43', '0000-00-00 00:00:00', '2019-10-03 13:40:43'),
(24, 5, 'cc6ed87cd5dbf49a9760853159d84c4f', '2019-10-03 23:02:33', '0000-00-00 00:00:00', '2019-10-03 11:02:33'),
(25, 5, '760aec49df13dd034fdbbb5dc8dfab8d', '2019-10-05 00:24:23', '0000-00-00 00:00:00', '2019-10-04 12:24:23'),
(26, 5, 'df785065abed7bf4e349cd59e76283a5', '2019-10-05 02:02:44', '0000-00-00 00:00:00', '2019-10-04 14:02:44'),
(27, 5, 'ebedffba3d2e4fdc623a635fc397c8e6', '2019-10-05 01:39:47', '0000-00-00 00:00:00', '2019-10-04 13:39:47'),
(28, 5, 'dc266ea89cbcb27e25629bce942ce4c2', '2019-10-05 02:13:01', '0000-00-00 00:00:00', '2019-10-04 14:13:01'),
(29, 5, '6ef40f9fb6ba63380ecc6e58d575f96b', '2019-10-05 03:16:42', '0000-00-00 00:00:00', '2019-10-04 15:16:42'),
(30, 5, 'e66574ba5b5ff9839a5e8a3a3eee958e', '2019-10-05 03:10:10', '0000-00-00 00:00:00', '2019-10-04 15:10:10'),
(31, 5, '9f207965aec7c18b22525819c3d2044f', '2019-10-05 03:35:22', '0000-00-00 00:00:00', '2019-10-04 15:35:22'),
(32, 5, 'c05a876b908c0ab0805ccf6bbefb0030', '2019-10-07 23:54:31', '0000-00-00 00:00:00', '2019-10-07 11:54:31'),
(33, 5, 'bee424fa2c23facce6c84d55e654e58e', '2019-10-08 18:12:11', '0000-00-00 00:00:00', '2019-10-08 06:12:11'),
(34, 5, '9919ad532777a3ae74915fef789b927b', '2019-10-08 22:14:46', '0000-00-00 00:00:00', '2019-10-08 10:14:46'),
(35, 5, '0c79d9e26e42823641247332a90002a5', '2019-10-17 02:04:56', '0000-00-00 00:00:00', '2019-10-16 14:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_types`
--

CREATE TABLE `tbl_user_types` (
  `user_type_id` int(11) NOT NULL,
  `type` varchar(120) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_types`
--

INSERT INTO `tbl_user_types` (`user_type_id`, `type`, `status`) VALUES
(1, 'admin', 1),
(2, 'agent', 1),
(3, 'reparer', 1),
(4, 'driver', 1),
(5, 'customer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agent_discount`
--
ALTER TABLE `tbl_agent_discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `tbl_checklist`
--
ALTER TABLE `tbl_checklist`
  ADD PRIMARY KEY (`checklist_id`);

--
-- Indexes for table `tbl_issues`
--
ALTER TABLE `tbl_issues`
  ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `tbl_manufecturer`
--
ALTER TABLE `tbl_manufecturer`
  ADD PRIMARY KEY (`manufecturer_id`);

--
-- Indexes for table `tbl_model`
--
ALTER TABLE `tbl_model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `tbl_model_checklist`
--
ALTER TABLE `tbl_model_checklist`
  ADD PRIMARY KEY (`model_checklist_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_assign`
--
ALTER TABLE `tbl_order_assign`
  ADD PRIMARY KEY (`order_assign_id`);

--
-- Indexes for table `tbl_order_assign_detail`
--
ALTER TABLE `tbl_order_assign_detail`
  ADD PRIMARY KEY (`order_assign_detail_id`);

--
-- Indexes for table `tbl_order_checklist`
--
ALTER TABLE `tbl_order_checklist`
  ADD PRIMARY KEY (`order_checklist_id`);

--
-- Indexes for table `tbl_order_device_info`
--
ALTER TABLE `tbl_order_device_info`
  ADD PRIMARY KEY (`order_device_info_id`);

--
-- Indexes for table `tbl_order_issues`
--
ALTER TABLE `tbl_order_issues`
  ADD PRIMARY KEY (`order_issue_id`);

--
-- Indexes for table `tbl_order_primary_test`
--
ALTER TABLE `tbl_order_primary_test`
  ADD PRIMARY KEY (`order_primary_test_id`);

--
-- Indexes for table `tbl_payment_methods`
--
ALTER TABLE `tbl_payment_methods`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indexes for table `tbl_primary_test`
--
ALTER TABLE `tbl_primary_test`
  ADD PRIMARY KEY (`primary_test_id`);

--
-- Indexes for table `tbl_tax_settings`
--
ALTER TABLE `tbl_tax_settings`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_users_authentication`
--
ALTER TABLE `tbl_users_authentication`
  ADD PRIMARY KEY (`user_authentication_id`);

--
-- Indexes for table `tbl_user_types`
--
ALTER TABLE `tbl_user_types`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agent_discount`
--
ALTER TABLE `tbl_agent_discount`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_checklist`
--
ALTER TABLE `tbl_checklist`
  MODIFY `checklist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_issues`
--
ALTER TABLE `tbl_issues`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_manufecturer`
--
ALTER TABLE `tbl_manufecturer`
  MODIFY `manufecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_model`
--
ALTER TABLE `tbl_model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_model_checklist`
--
ALTER TABLE `tbl_model_checklist`
  MODIFY `model_checklist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order_assign`
--
ALTER TABLE `tbl_order_assign`
  MODIFY `order_assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order_assign_detail`
--
ALTER TABLE `tbl_order_assign_detail`
  MODIFY `order_assign_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_order_checklist`
--
ALTER TABLE `tbl_order_checklist`
  MODIFY `order_checklist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order_device_info`
--
ALTER TABLE `tbl_order_device_info`
  MODIFY `order_device_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_order_issues`
--
ALTER TABLE `tbl_order_issues`
  MODIFY `order_issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_order_primary_test`
--
ALTER TABLE `tbl_order_primary_test`
  MODIFY `order_primary_test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_payment_methods`
--
ALTER TABLE `tbl_payment_methods`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_primary_test`
--
ALTER TABLE `tbl_primary_test`
  MODIFY `primary_test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_tax_settings`
--
ALTER TABLE `tbl_tax_settings`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_users_authentication`
--
ALTER TABLE `tbl_users_authentication`
  MODIFY `user_authentication_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_user_types`
--
ALTER TABLE `tbl_user_types`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
