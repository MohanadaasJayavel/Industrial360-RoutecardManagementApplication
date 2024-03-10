-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 04:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohan_sriram`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_base`
--

CREATE TABLE `mst_base` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `display_order` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_removed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_base`
--

INSERT INTO `mst_base` (`id`, `name`, `code`, `type`, `description`, `display_order`, `created_at`, `updated_at`, `is_active`, `is_removed`) VALUES
(1, 'mm', 'MM', 'unit', 'mm', 1, '2021-06-14 17:29:55', '2021-06-14 17:29:55', 1, 0),
(2, 'cm', 'CM', 'unit', 'cm', 2, '2021-06-14 17:30:48', '2021-06-14 17:30:48', 1, 0),
(3, 'inch', 'INCH', 'unit', 'inch', 3, '2021-06-14 17:30:48', '2021-06-14 17:30:48', 1, 0),
(4, 'kg', 'KG', 'unit', 'kg', 4, '2021-06-14 17:32:25', '2021-06-14 17:32:25', 1, 0),
(5, 'Stainless steel', 'SS', 'material', 'Stainless steel', 1, '2021-06-14 17:33:55', '2021-06-14 17:33:55', 1, 0),
(6, 'Spring steel', 'SPS', 'material', 'Spring steel', 2, '2021-06-14 17:33:55', '2021-06-14 17:33:55', 1, 0),
(7, 'Unpolished Spring Steel', 'USPS', 'material', 'Unpolished Spring Steel', 3, '2021-06-14 17:36:28', '2021-06-14 17:36:28', 1, 0),
(8, 'Unpolished Stainless Steel', 'USS', 'material', 'Unpolished Stainless Steel', 4, '2021-06-14 17:36:28', '2021-06-14 17:36:28', 1, 0),
(9, 'cnc 1', 'cnc1', 'machine', 'cnc 1 machine', 1, '2021-10-04 04:49:09', '2021-10-04 04:49:09', 1, 0),
(10, 'cnc 2', 'cnc 2', 'machine', 'cnc 2 machine', 2, '2021-10-04 04:49:09', '2021-10-04 04:49:09', 1, 0),
(11, 'cnc 3', 'cnc 3', 'machine', 'cnc 3 machine', 3, '2021-10-04 04:50:59', '2021-10-04 04:50:59', 1, 0),
(12, 'cnc 4', 'cnc 4', 'machine', 'cnc  machine', 4, '2021-10-04 04:52:26', '2021-10-04 04:52:26', 1, 0),
(13, 'cnc 5', 'cnc 5', 'machine', 'cnc 5 machine', 5, '2021-10-04 04:52:26', '2021-10-04 04:52:26', 1, 0),
(14, 'cnc 6', 'cnc 6', 'machine', 'cnc 6 machine', 6, '2021-10-04 04:52:26', '2021-10-04 04:52:26', 1, 0),
(15, 'cnc 7', 'cnc 7', 'machine', 'cnc  machine', 7, '2021-10-04 04:52:26', '2021-10-04 04:52:26', 1, 0),
(16, 'cnc 8', 'cnc 8', 'machine', 'cnc  machine', 8, '2021-10-04 04:52:26', '2021-10-04 04:52:26', 1, 0),
(17, 'cnc 9', 'cnc 9', 'machine', 'cnc  machine', 9, '2021-10-04 04:52:26', '2021-10-04 04:52:26', 1, 0),
(18, 'cnc M/S', 'cnc m/s', 'machine', 'cnc  machine', 10, '2021-10-04 04:52:26', '2021-10-04 04:52:26', 1, 0),
(19, 'FA10S 1', 'FA10S 1', 'machine', 'FA10S  machine', 11, '2021-10-04 04:52:26', '2021-10-04 04:52:26', 1, 0),
(20, 'FA10S 2', 'FA10S 2', 'machine', 'FA10S machine', 11, '2021-10-04 04:58:54', '2021-10-04 04:58:54', 1, 2),
(21, 'FA6S', 'FA6S', 'machine', 'FA6S ', 12, '2021-10-04 04:58:54', '2021-10-04 04:58:54', 1, 0),
(22, 'Big Machine', 'Big Machine', 'machine', 'Big Machine', 13, '2021-10-04 05:09:15', '2021-10-04 05:09:15', 1, 0),
(23, 'WAFS Germany', 'WAFS Germany', 'machine', 'WAFS Germany achine', 14, '2021-10-04 05:09:15', '2021-10-04 05:09:15', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_customers`
--

CREATE TABLE `mst_customers` (
  `id` int(11) NOT NULL,
  `comp_name` varchar(200) NOT NULL,
  `comp_contact_no` varchar(15) NOT NULL,
  `comp_email_address` varchar(200) NOT NULL,
  `comp_web_link` varchar(150) NOT NULL,
  `comp_address_1` varchar(500) NOT NULL,
  `comp_shipaddress_1` varchar(1000) NOT NULL,
  `comp_gstin` varchar(100) NOT NULL,
  `cont_person_name` varchar(150) NOT NULL,
  `cont_person_mobile_no` varchar(15) NOT NULL,
  `cont_person_email_address` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL,
  `is_removed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_customers`
--

INSERT INTO `mst_customers` (`id`, `comp_name`, `comp_contact_no`, `comp_email_address`, `comp_web_link`, `comp_address_1`, `comp_shipaddress_1`, `comp_gstin`, `cont_person_name`, `cont_person_mobile_no`, `cont_person_email_address`, `created_at`, `updated_at`, `is_active`, `is_removed`) VALUES
(1, 'Sri Ram Industries', '9944931391', 'info@sriramind.com', 'sriramind.com', '9/173, Railway Feeder Road, Perianaickenpalayam, Coimbatore 641 020, Tamil Nadu, India.', '18F, Ranganayaki Nagar Extn, Periyanaicken Palayam, Coimbatore 641 020, Tamil Nadu, India.', 'sriramind001', 'Ram Prakash', '9944931391', 'sri.pnp@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(2, 'Triton Valves ltd', '8025588966', 'info@tritonvalves.com', 'tritonvalves.com', 'Sunrise Chambers, 22, Ulsoor Road, Bengaluru- 560042, Karnataka,', 'Sunrise Chambers, 22, Ulsoor Road, Bengaluru- 560042, Karnataka, India.', '29AAACT6671P1ZJ', 'Sanajy Siddharth', '9944931391', 'info@tritonvalves.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(3, 'Mohanadaas industries', '123456789', 'info@sriramind.com', 'sriramind.com', 'cbe', 'cbe-20', 'tn40p3016', 'daas', '9944931391', 'info@sriramind.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(4, 'Gilbarco Veeder Root India Pvt Ltd', '123456789', 'info@gilbarco.com', 'gilbarco.in', 'Art Guild House, B Wing, 1st Floor,Phoenix Marketcity, LBS Road,Kurla West, Mumbai – 400 070', 'SF No 627/2 628/2 sector W-4 PDP Coimbatore Campus Eachanari Chettipalayam Road, Ind Estate Post Malumichampatti Coimbatore TN 641021 IN', '33AADCG4992P1Z0', 'M.Murali', '0422 6680501', 'hemant.shah@gilbarco.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(5, 'Micro Tech Polymers', '9994951119', 'info@microtechpolymers.com', 'microtechpolymers.comsriramind.com', '1/52A, Sukkaran Thottam, Vivekananda Road, Udayampalayam, Ganapathy Post, Coimbatore, Tamil Nadu – 641006 India', '1/52A, Sukkaran Thottam, Vivekananda Road, Udayampalayam, Ganapathy Post, Coimbatore, Tamil Nadu – 641006 India', '33AVUPS8794A1ZW', 'sathish babu', '7092691903', 'info@microtechpolymers.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(6, 'L.G.Balakrishnan & Bros. Ltd.', '0091 422 253 23', 'info@lgb.co.in', 'lgb.co.in', 'Krisnarayapuram Road, Ganapathy, Coimbatore - 641 006.', 'PN Palayam Rd, Ganapathy Gardens, Ganapathypudur, Coimbatore, Tamil Nadu 641006', '33AAACL3740P1ZE', 'Arunkumar', '9876543212', 'info@lgb.co.in', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(7, 'Salzer Electronics Unit 1', '91-422-269 2531', 'salzerpnp@salzergroup.com', 'https://www.salzergroup.net/', 'Samichettipalayam, Coimbatore - 641 047, Tamil Nadu. INDIA.', 'Samichettipalayam, Coimbatore - 641 047, Tamil Nadu. INDIA.', 'tn40p3016', 'Sabheer', '91-422-269 2531', 'salzerpnp@salzergroup.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(8, 'abc Industries', '123456789', 'info@abc.com', 'info@abc.com', 'coimbatore', 'coimbatore', 'TN1234567899', 'mr.abc', '1234567897', 'info@abc.in', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(9, 'Adwaith Lakshmi Industries Limited', ' +91 - 422 - 23', ' customerservice@adwaithlakshmi.in', 'adwaithlakshmi.in', '114 A, Senthottam, Sowripalayam, Coimbatore - 641 028. Tamilnadu India', '114 A, Senthottam, Sowripalayam, Coimbatore - 641 028. Tamilnadu India', '33AABCA8143J1ZT', 'Mahesh ', '33AABCA8143J1ZT', 'customerservice@adwaithlakshmi.in', '2021-06-03 22:19:08', '2021-06-03 22:19:08', 1, 0),
(10, 'Autotex Private Limited', '91 422 4321515', 'info@autotex.net', 'https://www.autotex.net/', '13/20, Sitra - Kalapatty road Coimbatore - 641 014, Tamilnadu. INDIA', '13/20, Sitra - Kalapatty road Coimbatore - 641 014, Tamilnadu. INDIA', '33AACCA2278B1Z9', 'julian', '9632587412', 'info@autotex.net', '2021-08-27 21:18:49', '2021-08-27 21:18:49', 1, 0),
(11, 'Ats Elgi Limited', '1800 203 3544', 'enquiry@ats-elgi.com', 'www.ats-elgi.com', 'ATS ELGI Private Industrial Estate, Kurichy, Coimbatore-641021, Tamilnadu, India', 'ATS ELGI Private Industrial Estate, Kurichy, Coimbatore-641021, Tamilnadu, India', '', 'sanjay', '9047143318', 'sanjay@ats-elgi.com', '2021-08-27 21:23:47', '2021-08-27 21:23:47', 1, 0),
(12, 'Kabsons Gas Equipment Pvt ltd', ' 040 2373 0487', 'kabsons@kabsonsindia.com', 'https://www.kabsonsindia.com/', 'Raja, Kabsons House 7-1-48/2/2, Shyam Karan Rd, Ameerpet, Hyderabad, Telangana 500016', 'Raja, Kabsons House 7-1-48/2/2, Shyam Karan Rd, Ameerpet, Hyderabad, Telangana 500016', '36AAACK8310N1ZD', 'Amresh', ' 040 2373 0487', 'kabsons@kabsonsindia.com', '2021-08-27 21:25:29', '2021-08-27 21:25:29', 1, 0),
(13, 'PENTA-MICRON SEALING SYSTEMS PRIVATE LIMITED', '9517536421', 'PENTAMICRON@GMAIL.COM', '', 'SF NO.301/5, L&T BYEPASS ROAD, MADUKKARAI COIMBATORE Coimbatore TN 641105 IN', 'SF NO.301/5, L&T BYEPASS ROAD, MADUKKARAI COIMBATORE Coimbatore TN 641105 IN', '33AAKCP0047P1Z6', 'Salu Chandran', '9517536421', 'SONUPENTAMICRON@GMAIL.COM', '2021-08-27 21:33:55', '2021-08-27 21:33:55', 1, 0),
(14, 'suriya industries', '123456679', 'suriya industries@gmail.com', 'adc.in ', 'cbe', 'cbe-20', 'TN1234567890', 'suriya', '1234567897', 'suriya industries@gmail.com', '2021-10-03 14:51:27', '2021-10-03 14:51:27', 1, 0),
(15, 'krishna Enterprises', '8048110730', 'info@krishnaenterprisess.in', 'https://www.krishnaenterprisess.in/', 'Jothipuram, Coimbatore, Tamil Nadu', 'Jothipuram, Coimbatore, Tamil Nadu', '33AGUPA0040L1ZN', 'krishna', '8048110730', 'info@krishnaenterprisess.in', '2021-11-01 09:29:26', '2021-11-01 09:29:26', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_designation`
--

CREATE TABLE `mst_designation` (
  `id` int(11) NOT NULL,
  `designation_name` varchar(100) NOT NULL,
  `description` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_removed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_designation`
--

INSERT INTO `mst_designation` (`id`, `designation_name`, `description`, `created_at`, `updated_at`, `is_active`, `is_removed`) VALUES
(1, 'Managing partner', 'managing partner', '2021-05-27 11:19:52', '2021-05-27 11:19:52', 1, 0),
(2, 'Office Admin', 'office_admin', '2021-06-03 19:23:03', '2021-06-03 19:23:03', 1, 0),
(3, 'Quality Engineer', 'Quality Assurance', '2021-10-04 03:06:49', '2021-10-04 03:06:49', 1, 0),
(4, 'Quality Analyst', 'Quality Analysis', '2021-10-04 03:09:54', '2021-10-04 03:09:54', 1, 0),
(5, 'Marketing Manager', 'Marketing Manager', '2021-10-04 03:17:12', '2021-10-04 03:17:12', 1, 0),
(6, 'Machine Setter', 'machine_setter', '2021-10-04 03:24:13', '2021-10-04 03:24:13', 1, 0),
(7, 'Quality Checker', 'patrol', '2021-10-15 07:17:38', '2021-10-15 07:17:38', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_diagram`
--

CREATE TABLE `mst_diagram` (
  `id` int(11) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `dia_name` varchar(100) NOT NULL,
  `dia_code` varchar(50) NOT NULL,
  `dia_description` varchar(100) NOT NULL,
  `dia_image` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL,
  `is_removed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_diagram`
--

INSERT INTO `mst_diagram` (`id`, `customer_id`, `comp_name`, `dia_name`, `dia_code`, `dia_description`, `dia_image`, `created_at`, `updated_at`, `is_active`, `is_removed`) VALUES
(1, 2, '', 'Valve spring', 'SRItvlM0205-4', 'ss metal spring', 'uploads/diagrams/mysorespring_20211004034351.jpg', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(2, 4, '', 'Gripper  spring', 'SRIgvrm01006', 'sps round spring', 'uploads/diagrams/Gripperspring_20211004034652.jpg', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(3, 7, '', 'Latching Spring', 'SRIselul063011605', 'ss metal latching spring', 'uploads/diagrams/latchSpring_20211004034930.jpg', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(4, 5, '', 'Micro spring', 'SRImtp4306351000800', 'ss double coil spring', 'uploads/diagrams/microspring_20211004035152.jpeg', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(5, 6, '', 'Rectangle Spring', 'SRIlgbrectangle spring', 'rectangle spring', 'uploads/diagrams/RectangleSpring_20211004035351.jpg', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(6, 9, '', 'Brake spring', 'SRIadl1001', 'ss metal spring', 'uploads/diagrams/roundspring_20211004035715.jpg', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(7, 9, '', 'light spring', 'SRIadl1021', 'ss  spring', 'uploads/diagrams/lightspring_20211004035631.jfif', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(8, 10, '', 'Locket spring', 'SRIaut000l35', 'sps  spring', 'uploads/diagrams/locketspring_20211004035952.jfif', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(9, 4, '', 'coil spring ', 'a111', 'ss  spring', 'uploads/diagrams/_20210608163205.', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 0, 1),
(10, 4, '', 'inconel', 'a112', 'inconel spring', 'uploads/diagrams/_20210608164132.', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 0, 1),
(11, 4, '', 'inconel', 'a112', 'inconel spring', 'uploads/diagrams/inconel_20210608164201.', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 0, 1),
(12, 11, '', 'Pump metal spring', 'SRIaeim01a0002', 'ss roundspring', 'uploads/diagrams/metalspring_20210609150829.', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(13, 4, '', 'metal spring', 'm01a0002', 'ss roundspring', 'uploads/diagrams/metalspring_20210609151018.', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 0, 1),
(14, 4, '', 'metal spring', 'm01a0002', 'ss roundspring', 'uploads/diagrams/metalspring_20210609152107.jpg', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 0, 1),
(15, 12, '', 'ratch spring', 'srikei101', 'srikei101 spring ', 'uploads/diagrams/ratchspring_20211004040206.png', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(16, 4, '', 'latch spring', 'l06301106', 'latch spring', 'uploads/diagrams/latchspring_20210802161415.jpg', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 0, 1),
(17, 13, '', 'inconel spring', 'sripms4460878600m04', 'ss roundspring', 'uploads/diagrams/inconelspring_20211004040403.jfif', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(18, 9, '', 'inconel', '12345', 'ss roundspring', 'uploads/diagrams/inconel_20210822113243.pdf', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 0, 1),
(19, 1, '', 'metal spring', 'm01a0001', 'srihtp01 spring ', 'uploads/diagrams/metalspring_20210822113501.png', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 0, 1),
(20, 11, '', 'inconel', '123456', 'latch spring', 'uploads/diagrams/inconel_20210921184436.jpg', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 0, 1),
(21, 4, '', 'Q13553', 'sriQ13553', 'ss metal spring', 'uploads/diagrams/Q13553_20211004040524.jpg', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(22, 14, '', 'siy metal', 'srisiy01', 'big spring', 'uploads/diagrams/siy01_20211003112239.jfif', '2021-06-16 21:42:42', '2021-06-16 21:42:42', 1, 0),
(23, 14, '', 'conical spring', 'siy02', 'conical spring', 'uploads/diagrams/conicalspring_20211022142446.tif', '2021-10-22 17:54:46', '2021-10-22 17:54:46', 1, 0),
(24, 15, '', 'Hook spring ', 'SRIKE01', 'Hook spring ', 'uploads/diagrams/Hookspring_20211101050215.jpeg', '2021-11-01 09:32:15', '2021-11-01 09:32:15', 1, 0),
(25, 4, '', 'SRIGVRE30004', 'SRIGVRE30004', 'SRIGVRE30004', 'uploads/diagrams/SRIGVRE30004_20211107145836.drawio', '2021-11-07 19:28:36', '2021-11-07 19:28:36', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_employee`
--

CREATE TABLE `mst_employee` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `emp_gender` varchar(10) NOT NULL,
  `emp_date_of_birth` date NOT NULL,
  `emp_date_of_joining` date NOT NULL,
  `emp_blood_group` varchar(10) NOT NULL,
  `emp_contact_no` varchar(15) NOT NULL,
  `emp_emergency_contact_no` varchar(15) NOT NULL,
  `emp_address` varchar(150) NOT NULL,
  `emp_profile_pic` varchar(250) NOT NULL,
  `emp_role_id` int(11) DEFAULT NULL,
  `emp_designation_id` int(11) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_username` varchar(100) NOT NULL,
  `emp_password` varchar(200) NOT NULL,
  `emp_is_login_user` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL,
  `is_removed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_employee`
--

INSERT INTO `mst_employee` (`id`, `emp_name`, `emp_id`, `emp_gender`, `emp_date_of_birth`, `emp_date_of_joining`, `emp_blood_group`, `emp_contact_no`, `emp_emergency_contact_no`, `emp_address`, `emp_profile_pic`, `emp_role_id`, `emp_designation_id`, `emp_email`, `emp_username`, `emp_password`, `emp_is_login_user`, `created_at`, `updated_at`, `is_active`, `is_removed`) VALUES
(1, 'Sri Ram prakash', 'SRI001', 'male', '1985-10-10', '2013-06-05', 'A+', '9944931391', '9944931391', '9/173,railway feeder road , p.n.palayam,coimbatore-20.', 'uploads/employee_photos/SriRamprakash_20211004030437.jpg', 1, 1, 'info@sriramind.com', 'sriramprakash', '1', 1, '2021-05-27 11:25:28', '2021-05-27 11:25:28', 1, 0),
(2, 'Sri Ram prakash', '', 'male', '2021-05-27', '2021-05-27', '', '9944931391', '9944931391', '9/173,railway feeder road , p.n.palayam,coimbatore-20.', '', 1, 1, '', 'sriram', 'sriram123', 1, '2021-05-27 11:25:28', '2021-05-27 11:25:28', 0, 1),
(4, 'sanjay siddharth s', 'SRI002', 'male', '1996-04-01', '2018-02-01', 'A-', '8012199664', '8012199664', 'ranaganayaki nagar , periyanaicken palayam , coimbatore-20', 'uploads/employee_photos/sanjaysiddharths_20211004030409.jpg', 4, 2, 'sanjay@sriramsprings.com', 'sanjay', '1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(5, 'mohan', '201', '', '2000-11-20', '2021-05-24', 'O+', '99999', '99999', 'cbe', 'a1.jpg', 0, 0, 'test@gmail.com', 'test1@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(6, 'Anitha', 'SRI003', 'female', '2000-11-20', '2018-05-08', 'O+', '9874563214', '9874563214', ' Periyanaicken Palayam , Coimbatore - 641020', 'uploads/employee_photos/Anitha_20211004031248.png', 5, 2, 'anitha@gmail.com', 'anitha@gmail.com', '1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0),
(7, 'mohan', '201', '', '2000-11-20', '2021-05-24', 'O+', '99999', '99999', 'cbe', 'a1.jpg', 0, 0, 'test@gmail.com', 'test1@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(8, 'mohan', '201', '', '2000-11-20', '2021-05-24', 'O+', '99999', '99999', 'cbe', 'a1.jpg', 0, 0, 'test@gmail.com', 'test1@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(9, 'mohan', '201', '', '2000-11-20', '2021-05-24', 'O+', '99999', '99999', 'cbe', 'a1.jpg', 0, 0, 'test@gmail.com', 'test1@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(10, 'daas', '142', '', '2000-01-01', '2000-01-02', 'O+', '123456789', '123456789', 'daas@gmail.com', 'a5.jpg', 0, 0, 'daas@gmail.com', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(11, 'daas', '142', '', '2000-01-01', '2000-01-02', 'O+', '123456789', '123456789', 'daas@gmail.com', 'a5.jpg', 0, 0, 'daas@gmail.com', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(12, 'arunkumar g ', '124', '', '2021-05-29', '2021-05-29', 'B-', '12345', '12345', 'cbe', 'a1.jpg', 2, 2, 'test1@gmail.com', 'test@gmail.com', '1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(13, 'arun', '124', '', '2021-05-29', '2021-05-29', 'B-', '12345', '12345', 'cbe', 'a1.jpg', 0, 0, 'test1@gmail.com', 'test@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(14, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(15, 'test', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', 2, 2, '', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(16, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(17, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(18, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(19, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(20, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(21, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(22, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(23, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(24, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(25, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(26, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(27, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(28, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(29, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(30, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(31, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(32, 'test2', '500', '', '2021-05-13', '2021-05-29', 'B-', '99999', '99999', 'cbe', 'a1.jpg', 0, 0, 'test2@gmail.com', 'test2@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(33, 'test', '123', '', '2021-05-22', '2021-05-29', 'B-', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(34, 'test', '123', '', '2021-05-22', '2021-05-29', 'B-', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(35, 'test', '123', '', '2021-05-22', '2021-05-29', 'B-', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(36, 'test', '123', '', '2021-05-22', '2021-05-29', 'B-', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(37, 'test', '123', '', '2021-05-29', '2021-05-29', 'A+', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(38, 'test', '123', '', '2021-05-29', '2021-05-29', 'A+', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(39, 'test', '123', '', '2021-05-29', '2021-05-29', 'A+', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(40, 'mohan', '142', '', '2021-05-29', '2021-05-29', 'A+', '12345', '12345', 'cbe', 'a1.jpg', 0, 0, 'test@gmail.com', 'test@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(41, 'pravin', '123', '', '2021-05-29', '2021-05-29', 'B-', '99999', '99999', 'cbe', 'a3.jpg', 0, 0, 'daas@gmail.com', 'pravin@gmail.com', '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1),
(42, 'lenovo', '700', '', '2021-05-29', '2021-05-29', 'O+', '12345', '12345', 'cbe', 'a3.jpg', 0, 0, 'test@gmail.com', 'lenovo@test.com', '1', 0, '2021-05-29 18:21:02', '2021-05-29 18:21:02', 0, 1),
(43, 'lenovo12', '700', '', '2021-05-29', '2021-05-29', 'O+', '12345', '12345', 'cbe', 'a3.jpg', 0, 0, 'test@gmail.com', 'lenovo@test.com', '1', 0, '2021-05-29 18:35:07', '2021-05-29 18:35:07', 0, 1),
(44, 'lenovo12', '700', '', '2021-05-29', '2021-05-29', 'O+', '12345', '12345', 'cbe', 'a3.jpg', 0, 0, 'test@gmail.com', 'lenovo@test.com', '1', 0, '2021-05-29 18:35:29', '2021-05-29 18:35:29', 0, 1),
(45, 'lenovo12', '700', '', '2021-05-29', '2021-05-29', 'O+', '12345', '12345', 'cbe', 'a3.jpg', 0, 0, 'test@gmail.com', 'lenovo@test.com', '1', 0, '2021-05-29 18:36:18', '2021-05-29 18:36:18', 0, 1),
(46, 'lenovo12', '700', '', '2021-05-29', '2021-05-29', 'O+', '12345', '12345', 'cbe', 'a3.jpg', 0, 0, 'test@gmail.com', 'lenovo@test.com', '1', 0, '2021-05-29 18:36:22', '2021-05-29 18:36:22', 0, 1),
(47, 'test2332', '7002', '', '2021-05-31', '2021-06-01', 'B+', '12345', '99999', 'sadasdasdad', '', 0, 0, '23232@gmail.com', 'asdsad', 'sadas', 0, '2021-05-29 18:38:33', '2021-05-29 18:38:33', 0, 1),
(48, 'test2332', '7002', '', '2021-05-31', '2021-06-01', 'B+', '12345', '99999', 'sadasdasdad', '', 0, 0, '23232@gmail.com', 'asdsad', 'sadas', 0, '2021-05-29 18:38:45', '2021-05-29 18:38:45', 0, 1),
(49, 'mouse', '1111', '', '2021-05-29', '2021-05-29', 'AB+', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test1@gmail.com', '1', 0, '2021-05-29 18:50:35', '2021-05-29 18:50:35', 0, 1),
(50, 'mouse', '1111', '', '2021-05-29', '2021-05-29', 'AB+', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test1@gmail.com', '1', 0, '2021-05-29 18:51:44', '2021-05-29 18:51:44', 0, 1),
(51, 'mouse', '1111', '', '2021-05-29', '2021-05-29', 'AB+', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test1@gmail.com', '1', 0, '2021-05-29 18:55:19', '2021-05-29 18:55:19', 0, 1),
(52, 'mouse', '1111', '', '2021-05-29', '2021-05-29', 'AB+', '12345', '12345', 'cbe', '', 0, 0, 'test@gmail.com', 'test1@gmail.com', '1', 0, '2021-05-29 18:57:07', '2021-05-29 18:57:07', 0, 1),
(53, 'mohan', '700', '', '2021-05-29', '2021-05-29', 'A-', '12345', '99999', 'cbe', '', 0, 0, 'daas@gmail.com', 'test@gmail.com', '1', 0, '2021-05-29 18:59:15', '2021-05-29 18:59:15', 0, 1),
(54, 'arun', '1111', '', '2021-05-30', '2021-05-30', 'O+', '12345', '99999', 'cbe', '', 0, 0, 'arun@gmail.com', 'arun123', '1', 0, '2021-05-30 13:50:32', '2021-05-30 13:50:32', 0, 1),
(55, '', '', '', '0000-00-00', '0000-00-00', 'Select You', '', '', '', '', 0, 0, '', '', '', 0, '2021-05-30 13:57:07', '2021-05-30 13:57:07', 0, 1),
(56, 'mohanadaas', '18mss031', 'male', '2021-06-01', '2021-06-01', 'O+', '7092691903', '7092691903', 'pnp , cbe', 'a1.jpg', 0, 0, 'mohanadaas@gmail.com', 'mohan@gmail.com', '1', 0, '2021-06-01 23:51:46', '2021-06-01 23:51:46', 0, 1),
(57, 'daas', '7894', 'male', '2021-06-02', '2021-06-02', 'O+', '7092691903', '7092691903', 'cbe, tn', 'a1.jpg', NULL, 1, 'daas@gmail.com', 'mohan@gmail.com', '1', 0, '2021-06-02 21:38:43', '2021-06-02 21:38:43', 0, 1),
(58, 'pravin', '700', '', '2021-06-02', '2021-06-02', 'Select You', '12345', '99999', 'cbe', 'a1.jpg', 1, 1, 'pravin@gmail.com', 'pravin1@gmail.com', '1', 1, '2021-06-02 21:41:09', '2021-06-02 21:41:09', 0, 1),
(59, 'sabheer Ahmed', 'SRI005', 'male', '1996-06-12', '2016-02-10', 'B+', '7010321623', '7896321456', 'Mettupalayam, coimbatore- 26', 'uploads/employee_photos/sabheerAhmed_20211015072843.jpeg', 2, 3, 'saheer@gmail.com', 'sabheer', '1', 1, '2021-06-02 21:54:27', '2021-06-02 21:54:27', 1, 0),
(60, 'Julien', 'SRI010', 'male', '2021-06-02', '2015-07-07', 'A+', '7894561232', '7894561232', 'Damu nagar , coimbatore -20', 'uploads/employee_photos/Julien_20211004031932.jpg', 2, 5, 'julien@gmail.com', 'julien', '1', 1, '2021-06-02 21:59:58', '2021-06-02 21:59:58', 1, 0),
(61, 'mohanadaas', '18mss031', 'male', '2021-06-02', '2021-06-02', 'B-', '7092691903', '7092691903', 'cbe', 'uploads/employee_photos/mohanadaas_20210603191202.jpg', 1, 1, 'mohanadaas@gmail.com', 'mohanadaas@gmail.com', '1', 1, '2021-06-02 22:03:00', '2021-06-02 22:03:00', 0, 1),
(62, 'Mohanadaas', 'SRI026', 'female', '2000-11-20', '2017-07-01', 'A+', '6379284499', '6379284499', '1/69 , r.v. naagr, P.N.Palayam , coimbatore-20', 'uploads/employee_photos/Mohanadaas_20211004032402.jpg', 5, 4, 'anitha@gmail.com', 'mohanadaas@gmail.com', 'anitha123', 1, '2021-06-03 22:58:44', '2021-06-03 22:58:44', 1, 0),
(63, 'sathish', 'SRI018', 'male', '1995-10-15', '2020-04-01', 'O+', '8963214578', '8963214578', 'sulur , cbe', 'uploads/employee_photos/sathish_20211015072521.jpeg', 2, 6, 'sathish@gmail.com', 'sathish@gmail.com', 'testsathish', 1, '2021-07-08 07:21:57', '2021-07-08 07:21:57', 1, 0),
(64, 'Amresh', 'SRI0116', '', '1985-07-19', '2013-04-29', 'Select You', '8632587412', '8632587412', 'cbe 31', 'uploads/employee_photos/Amresh_20211004052838.jpg', 2, 6, 'amresh@gmail.com', 'amresh@gmail.com', '123', 1, '2021-10-04 08:58:38', '2021-10-04 08:58:38', 1, 0),
(65, 'sonu', 'SRI018', 'male', '1983-06-08', '2013-07-10', 'A+', '8632587417', '8632587417', 'cbe 31', 'uploads/employee_photos/sonu_20211004052942.jpg', 2, 6, 'sonu@gmail.com', 'sonu@gmail.com', '123', 1, '2021-10-04 08:59:42', '2021-10-04 08:59:42', 1, 0),
(66, 'Mahesh', 'SRI025', 'male', '1982-11-25', '2016-01-08', 'O+', '8632587417', '8632587417', 'sulur cbe ', 'uploads/employee_photos/Mahesh_20211004053057.jpg', 2, 6, 'mahesh@gmail.com', 'mahesh@gmail.com', '123', 1, '2021-10-04 09:00:57', '2021-10-04 09:00:57', 1, 0),
(67, 'Nalla thambi', 'SRI031', 'male', '1979-06-07', '2013-05-07', 'O-', '8632587441', '8632587441', 'pudhukottai', 'uploads/employee_photos/Nallathambi_20211004053212.jpg', 2, 6, 'nallathambi@gmail.com', 'nallathambi@gmail.com', '123', 1, '2021-10-04 09:02:12', '2021-10-04 09:02:12', 1, 0),
(68, 'soorya', 'SRI0196', 'male', '1995-11-04', '0000-00-00', 'B+', '7092691903', '7092691903', 'r.v.nagar  , periyanickenpalayam ,', 'uploads/employee_photos/soorya_20211015072419.jpeg', 2, 7, 'sooryaseafarer@gmail.com', 'soorya', '1', 1, '2021-10-15 10:54:19', '2021-10-15 10:54:19', 1, 0),
(69, 'soorya', 'SRI112', 'male', '1995-11-16', '2021-08-03', 'B-', '9632587412', '9632587412', 'pnp, cbe', 'uploads/employee_photos/soorya_20211101045551.', 2, 7, 'sooyarocker@gmail.com', 'soorya', '1', 1, '2021-11-01 09:25:51', '2021-11-01 09:25:51', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_permissions`
--

CREATE TABLE `mst_permissions` (
  `id` int(50) NOT NULL,
  `permission_name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_removed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_permissions`
--

INSERT INTO `mst_permissions` (`id`, `permission_name`, `description`, `created_at`, `updated_at`, `is_active`, `is_removed`) VALUES
(1, 'can_view_dashboard', 'can_view_dashboard', '2021-05-27 13:50:26', '2021-05-27 13:50:26', 1, 0),
(2, 'can_view_customer', 'can_view_customer', '2021-05-27 13:53:38', '2021-05-27 13:53:38', 1, 0),
(3, 'can_edit_customer', 'can_edit_customer', '2021-05-27 14:01:38', '2021-05-27 14:01:38', 1, 0),
(4, 'can_create_customer', 'can_create_customer', '2021-05-27 14:02:18', '2021-05-27 14:02:18', 1, 0),
(5, 'can_delete_customer', 'can_delete_customer', '2021-05-27 14:03:18', '2021-05-27 14:03:18', 1, 0),
(6, 'can_view_customer_list', 'can_view_customer_list', '2021-05-28 06:58:36', '2021-05-28 06:58:36', 1, 0),
(7, 'can_create_diagrams', 'can_create_diagrams', '2021-05-28 08:23:14', '2021-05-28 08:23:14', 1, 0),
(8, 'can_view_diagrams', 'can_view_diagrams', '2021-05-28 08:24:21', '2021-05-28 08:24:21', 1, 0),
(9, 'can_edit_diagrams', 'can_edit_diagrams', '2021-05-28 08:25:42', '2021-05-28 08:25:42', 1, 0),
(10, 'can_delete_diagrams', 'can_delete_diagrams', '2021-05-28 08:26:02', '2021-05-28 08:26:02', 1, 0),
(11, 'can_view_diagrams_list', 'can_view_diagrams_list', '2021-05-28 08:31:51', '2021-05-28 08:31:51', 1, 0),
(12, 'can_create_route_card', 'can_create_route_card', '2021-05-28 10:38:11', '2021-05-28 10:38:11', 1, 0),
(13, 'can_edit_route_card', 'can_edit_route_card', '2021-05-28 10:39:58', '2021-05-28 10:39:58', 1, 0),
(14, 'can_view_route_card', 'can_view_route_card', '2021-05-28 10:40:46', '2021-05-28 10:40:46', 1, 0),
(15, 'can_delete_route_card', 'can_delete_route_card', '2021-05-28 10:41:13', '2021-05-28 10:41:13', 1, 0),
(16, 'can_view_route_card_list', 'can_view_route_card_list', '2021-05-28 10:41:49', '2021-05-28 10:41:49', 1, 0),
(17, 'can_create_employee', 'can_create_employee', '2021-05-28 11:48:32', '2021-05-28 11:48:32', 1, 0),
(18, 'can_edit_employee', 'can_edit_employee', '2021-05-28 11:49:07', '2021-05-28 11:49:07', 1, 0),
(19, 'can_view_employee', 'can_view_employee', '2021-05-28 11:49:26', '2021-05-28 11:49:26', 1, 0),
(20, 'can_delete_employee', 'can_delete_employee', '2021-05-28 11:50:08', '2021-05-28 11:50:08', 1, 0),
(21, 'can_view_employee_list', 'can_view_employee_list', '2021-05-28 11:50:45', '2021-05-28 11:50:45', 1, 0),
(22, 'can_create_final_inspection_report', 'can_create_final_inspection_report', '2021-06-30 18:36:25', '2021-06-30 18:36:25', 1, 0),
(23, 'can_edit_final_inspection_report', 'can_edit_final_inspection_report', '2021-06-30 18:38:11', '2021-06-30 18:38:11', 1, 0),
(24, 'can_view_final_inspection_report', 'can_view_final_inspection_report', '2021-06-30 18:38:11', '2021-06-30 18:38:11', 1, 0),
(25, 'can_delete_final_inspection_report', 'can_delete_final_inspection_report', '2021-06-30 18:39:06', '2021-06-30 18:39:06', 1, 0),
(26, 'can_view_final_inspection_report_list', 'can_view_final_inspection_report_list', '2021-06-30 18:39:06', '2021-06-30 18:39:06', 1, 0),
(27, 'can_view_my_account_details', 'can_view_my_account_details', '2021-08-27 18:17:22', '2021-08-27 18:17:22', 1, 0),
(28, 'can_control_rbac', 'can_control_rbac', '2021-11-17 15:28:54', '2021-11-17 15:28:54', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_roles`
--

CREATE TABLE `mst_roles` (
  `id` int(50) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_removed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_roles`
--

INSERT INTO `mst_roles` (`id`, `role_name`, `description`, `created_at`, `updated_at`, `is_active`, `is_removed`) VALUES
(1, 'Super admin', 'super admin', '2021-05-27 11:23:38', '2021-05-27 11:23:38', 1, 0),
(2, 'admin', 'admin', '2021-06-03 19:22:27', '2021-06-03 19:22:27', 1, 0),
(4, 'special_admin', 'special_admin', '2021-11-17 15:21:55', '2021-11-17 15:21:55', 1, 0),
(5, 'special_admin_2', 'special_admin_2', '2021-11-17 15:24:00', '2021-11-17 15:24:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_route_card`
--

CREATE TABLE `mst_route_card` (
  `id` int(11) NOT NULL,
  `route_customer_id` varchar(100) NOT NULL,
  `route_machine_name` varchar(25) NOT NULL,
  `route_setter_name` varchar(100) NOT NULL,
  `route_wire_dia` varchar(50) NOT NULL,
  `route_description` varchar(300) NOT NULL,
  `route_diagram_id` varchar(100) NOT NULL,
  `route_diagram_rev_no` varchar(10) NOT NULL,
  `route_certification_rev_no` varchar(50) NOT NULL,
  `route_revision_no` int(10) DEFAULT NULL,
  `route_date` date DEFAULT NULL,
  `route_material_name` varchar(150) NOT NULL,
  `route_grade` varchar(20) NOT NULL,
  `route_wiring_direction` varchar(250) NOT NULL,
  `route_heat_treatment` varchar(250) NOT NULL,
  `route_scragging` varchar(250) NOT NULL,
  `route_end_condition` varchar(250) NOT NULL,
  `route_cleaning` varchar(250) NOT NULL,
  `route_surface_finish` varchar(250) NOT NULL,
  `route_checking_inspection` varchar(250) NOT NULL,
  `route_packing_instruction` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL,
  `is_removed` tinyint(1) NOT NULL,
  `od_unit` varchar(11) NOT NULL,
  `od_min` varchar(11) NOT NULL,
  `od_val` varchar(11) NOT NULL,
  `od_max` varchar(10) NOT NULL,
  `od_c_ref` varchar(10) NOT NULL,
  `id_unit` varchar(10) NOT NULL,
  `id_min` varchar(10) NOT NULL,
  `id_val` varchar(10) NOT NULL,
  `id_max` varchar(10) NOT NULL,
  `id_c_ref` varchar(10) NOT NULL,
  `total_coil_unit` varchar(10) NOT NULL,
  `total_coil_min` varchar(10) NOT NULL,
  `total_coil_val` varchar(10) NOT NULL,
  `total_coil_max` varchar(10) NOT NULL,
  `total_coil_c_ref` varchar(10) NOT NULL,
  `active_coil_unit` varchar(10) NOT NULL,
  `active_coil_min` varchar(10) NOT NULL,
  `active_coil_val` varchar(10) NOT NULL,
  `active_coil_max` varchar(10) NOT NULL,
  `active_coil_c_ref` varchar(10) NOT NULL,
  `free_lenth_unit` varchar(10) NOT NULL,
  `free_lenth_min` varchar(10) NOT NULL,
  `free_lenth_val` varchar(10) NOT NULL,
  `free_lenth_max` varchar(10) NOT NULL,
  `free_lenth_c_ref` varchar(10) NOT NULL,
  `load_1_unit` varchar(10) NOT NULL,
  `load_1_min` varchar(10) NOT NULL,
  `load_1_val` varchar(10) NOT NULL,
  `load_1_max` varchar(10) NOT NULL,
  `load_1_c_ref` varchar(10) NOT NULL,
  `load_2_unit` varchar(10) NOT NULL,
  `load_2_min` varchar(10) NOT NULL,
  `load_2_val` varchar(10) NOT NULL,
  `load_2_max` varchar(10) NOT NULL,
  `load_2_c_ref` varchar(10) NOT NULL,
  `load_3_unit` varchar(10) NOT NULL,
  `load_3_min` varchar(10) NOT NULL,
  `load_3_val` varchar(10) NOT NULL,
  `load_3_max` varchar(10) NOT NULL,
  `load_3_c_ref` varchar(10) NOT NULL,
  `spring_rate_unit` varchar(10) NOT NULL,
  `spring_rate_min` varchar(10) NOT NULL,
  `spring_rate_val` varchar(10) NOT NULL,
  `spring_rate_max` varchar(10) NOT NULL,
  `spring_rate_c_ref` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_route_card`
--

INSERT INTO `mst_route_card` (`id`, `route_customer_id`, `route_machine_name`, `route_setter_name`, `route_wire_dia`, `route_description`, `route_diagram_id`, `route_diagram_rev_no`, `route_certification_rev_no`, `route_revision_no`, `route_date`, `route_material_name`, `route_grade`, `route_wiring_direction`, `route_heat_treatment`, `route_scragging`, `route_end_condition`, `route_cleaning`, `route_surface_finish`, `route_checking_inspection`, `route_packing_instruction`, `created_at`, `updated_at`, `is_active`, `is_removed`, `od_unit`, `od_min`, `od_val`, `od_max`, `od_c_ref`, `id_unit`, `id_min`, `id_val`, `id_max`, `id_c_ref`, `total_coil_unit`, `total_coil_min`, `total_coil_val`, `total_coil_max`, `total_coil_c_ref`, `active_coil_unit`, `active_coil_min`, `active_coil_val`, `active_coil_max`, `active_coil_c_ref`, `free_lenth_unit`, `free_lenth_min`, `free_lenth_val`, `free_lenth_max`, `free_lenth_c_ref`, `load_1_unit`, `load_1_min`, `load_1_val`, `load_1_max`, `load_1_c_ref`, `load_2_unit`, `load_2_min`, `load_2_val`, `load_2_max`, `load_2_c_ref`, `load_3_unit`, `load_3_min`, `load_3_val`, `load_3_max`, `load_3_c_ref`, `spring_rate_unit`, `spring_rate_min`, `spring_rate_val`, `spring_rate_max`, `spring_rate_c_ref`) VALUES
(1, '2', 'cnc 1', 'Amresh', '0.25 mm', 'mysore piece', '1', '1', '1', 1, '0000-00-00', '  ', '2/3', 'right  headed', '@300 degree  / 5 mins', 'no', 'nil', 'yes', 'natural', 'yes 100%', '1,00,000 pcs per production', '2021-05-06 14:41:02', '0000-00-00 00:00:00', 1, 0, '', '1.76', '1.78', '	1.80', '', 'mm', '1.26', '1.26', '1.26', 'c', 'vc', '6', '6', '6', 'c', 'vc', '6.60', '6.70', '6.80', '', 'vc', '5.30', '5.40', '5.50', '', 'kg', '45', '45', '45', 'c', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '4', 'WAFS Germany', 'sonu', '0.40', 'spring', '2', '1', '1', 1, '0000-00-00', '  ', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-06-06 14:41:02', '2021-06-06 14:41:02', 1, 0, '', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(3, '5', 'cnc 5', 'Amresh', '0.35', 'spring', '4', '1', '1', 1, '0000-00-00', '  ', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '100000 pcs per cover', '2021-06-06 14:42:46', '2021-06-06 14:42:46', 1, 0, '', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(4, '6', 'cnc 5', 'sathish', '0.26 mm', 'spring', '5', '1', '1', 1, NULL, '  ', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-06-15 07:28:52', '2021-06-15 07:28:52', 1, 0, '', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(5, '7', 'FA10S 1', 'sonu', '0.55 mm', 'spring', '3', '1', '1', 1, NULL, '  ', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-07-15 07:34:22', '2021-06-15 07:34:22', 1, 0, '', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(6, '9', 'cnc 9', 'sathish', '0.30mm', 'spring', '6', '1', '1', 1, NULL, '  ', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-07-15 07:36:05', '2021-06-15 07:36:05', 1, 0, '', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(7, '10', 'cnc 6', 'sathish', '0.60 mm', 'spring', '8', '1', '1', 1, NULL, 'Spring steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-06-15 07:38:51', '2021-06-15 07:38:51', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(8, '11', 'cnc 5', 'Amresh', '0.26 mm', 'spring', '12', '', '1', 1, NULL, '  ', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-08-30 22:37:58', '2021-06-30 22:37:58', 1, 0, '', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(9, '12', 'FA6S', 'sonu', '0.45mm', 'spring', '15', '01', '1', 1, NULL, 'Spring steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-08-30 22:41:33', '2021-06-30 22:41:33', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(10, '14', 'cnc 4', 'sathish', '0.26 mm', 'spring', '22', '1', '1', 1, '2021-09-19', '  ', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'nil', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:26:23', '2021-09-19 15:26:23', 1, 0, '', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '19', '19', '19', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(11, '2', 'cnc 6', 'Amresh', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:52:20', '2021-09-19 15:52:20', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(12, '4', 'cnc 6', 'sonu', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:52:20', '2021-09-19 15:52:20', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(13, '5', '	 cnc 5', 'sathish', '0.26 mm', 'spring', '8', '', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:55:02', '2021-09-19 15:55:02', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(14, '6', '	 cnc 5', 'Amresh', '0.26 mm', 'spring', '8', '', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:55:02', '2021-09-19 15:55:02', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(15, '7', 'cnc 6', 'Mahesh', '0.26 mm', 'spring', '8', '', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:56:41', '2021-09-19 15:56:41', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(16, '9', '	 cnc 5', 'Amresh', '0.26 mm', 'spring', '8', '', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:56:46', '2021-09-19 15:56:46', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(17, '1', 'cnc 6', 'sonu', '0.26 mm', 'spring', '8', '', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:57:57', '2021-09-19 15:57:57', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(18, '2', 'cnc 6', 'Amresh', '0.26 mm', 'spring', '8', '', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:58:01', '2021-09-19 15:58:01', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(19, '3', 'FA10S 2', 'sonu', '0.26 mm', 'spring', '8', '', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:58:20', '2021-09-19 15:58:20', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(20, '4', '	 cnc 5', 'sathish', '0.26 mm', 'spring', '8', '', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:58:25', '2021-09-19 15:58:25', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(21, '5', 'cnc 1', 'Amresh', '0.26 mm', 'spring', '8', '', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 15:58:42', '2021-09-19 15:58:42', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(22, '6', 'cnc 6', 'Amresh', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 16:04:22', '2021-09-19 16:04:22', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(23, '7', 'FA10S 1', 'sonu', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 16:04:52', '2021-09-19 16:04:52', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(24, '8', 'FA10S 2', 'sonu', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 16:05:34', '2021-09-19 16:05:34', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(25, '9', 'WAFS Germany', 'Nalla thambi', '0.26 mm', 'spring', '8', '', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 16:07:52', '2021-09-19 16:07:52', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(26, '10', 'cnc 6', 'amresh', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 16:11:42', '2021-09-19 16:11:42', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(27, '11', 'cnc 6', 'sathish', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 16:43:05', '2021-09-19 16:43:05', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(28, '12', 'WAFS Germany', 'Nalla thambi', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 16:45:00', '2021-09-19 16:45:00', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(29, '13', 'FA10S 2', 'sonu', '0.26 mm', 'spring', '8', '01', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-19 16:52:43', '2021-09-19 16:52:43', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(30, '14', 'cnc 9', 'Amresh', '0.26 mm', 'spring', '8', '01', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-21 21:16:29', '2021-09-21 21:16:29', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(31, '1', 'WAFS Germany', 'Nalla thambi', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-21 22:04:14', '2021-09-21 22:04:14', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(32, '2', 'cnc 9', 'Amresh', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-21 22:08:39', '2021-09-21 22:08:39', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(33, '3', 'FA10S 2', 'sonu', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-21 22:17:57', '2021-09-21 22:17:57', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(34, '4', '	 cnc 5', 'sathish', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-22 00:35:30', '2021-09-22 00:35:30', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(35, '5', 'cnc 3', 'sathish', '0.26 mm', 'spring', '8', '1', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-09-22 00:36:28', '2021-09-22 00:36:28', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(36, '6', 'cnc 9', 'Amresh', '0.26 mm', 'spring', '8', 'a', '1', 1, NULL, 'Stainless steel', '1', 'right  headed', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-10-02 11:17:36', '2021-10-02 11:17:36', 1, 0, 'mm', '', '', '', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(37, '7', 'WAFS Germany', 'sonu', '0.26 mm', 'spring', '8', '1', '', NULL, NULL, 'Stainless steel', 'mm', 'right  heade', '@300 degree  / 5 mins', 'no', 'grinding', 'yes', 'natural', 'yes 100%', '10000 pcs per cover', '2021-10-03 11:19:44', '2021-10-03 11:19:44', 1, 0, 'mm', '2.23', '2.32', '2.32', 'c', 'mm', '1.26', '1.26', '1.26', 'c', 'mm', '13', '13', '13', 'c', 'mm', '12.5', '12.5', '12.5', 'c', 'mm', '20', '20', '20', 'c', 'kg', '45', '45', '45', 'c', 'kg', '46', '46', '46', 'c', 'kg', '47', '47', '47', 'c', 'mm', '100', '100', '100', 'c'),
(38, '8', 'cnc 9', 'sathish', '0.60', 'spring', '21', '1', '', NULL, NULL, 'Unpolished Spring Steel', '2/3', 'left  headed', 'no', 'no', 'nil', 'no', 'bright', 'yes 100%', 'no', '2021-10-03 13:36:30', '2021-10-03 13:36:30', 0, 1, 'mm', '1.78', '1.80', '1.82', 'c', 'mm', '1.26', '1.26', '1.26', 'c', '', '', '', '', '', '6.80', '6.60', '6.70', '6.70', 'c', '6.80', '5.40', '5.50', '5.60', 'c', 'kg', '130', '138', '145', '', '  ', '', '', '', '', '  ', '', '', '', '', 'mm', '25', '25', '25', 'c'),
(39, '9', 'WAFS Germany', 'Nalla thambi', '0.40', 'big spring', '22', '1', '', NULL, NULL, 'Stainless steel', '2/3', 'right  headed', '@300 degree  / 5 mins', 'no', 'nil', 'no', 'nil', 'yes 100%', 'no', '2021-10-03 14:55:32', '2021-10-03 14:55:32', 0, 1, 'mm', '1.78', '1.80', '1.82', 'c', '  ', '', '', '', '', '', '', '', '', '', '6.80', '6.60', '6.70', '6.70', 'c', 'mm', '5.40', '5.80', '6.00', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', ''),
(40, '2', 'cnc 2', 'Amresh', '0.25 mm', '', '1', '', '', NULL, NULL, '  ', '', '', '', '', '', '', '', '', '', '2021-10-04 09:31:36', '2021-10-04 09:31:36', 1, 0, '', '', '', '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', ''),
(41, '14', 'cnc 4', 'sathish', '0.26 mm', '', '23', '', '', NULL, NULL, '  ', '', 'right  headed', 'no', 'no', 'nil', 'no', 'nil', 'yes 100%', '1005 pcs per cover', '2021-10-22 17:55:51', '2021-10-22 17:55:51', 1, 0, 'mm', '4.80', '', '4.60', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mm', '8.60', '', '8.60', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', ''),
(42, '9', 'cnc 4', '  ', '', '', '7', '', '', NULL, NULL, '  ', '', '', '', '', '', '', '', '', '', '2021-10-26 09:47:52', '2021-10-26 09:47:52', 1, 0, '  ', '', '', '', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', ''),
(43, '15', 'cnc M/S', 'Mahesh', '1.40', 'HOOK SPRING', '24', '1', '', NULL, NULL, 'Stainless steel', '2/3', 'hook', '@300 gegree celscius', 'no', 'nil', 'no', 'Nickel plated', 'yes', '100000', '2021-11-01 09:34:39', '2021-11-01 09:34:39', 1, 0, 'mm', '45.30', '45.40', '45.50', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mm', '60.00', '60.10', '60.20', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', ''),
(44, '10', 'cnc 4', 'sathish', '0.60', 'spring', '8', '1', '', NULL, NULL, 'Stainless steel', '2/3', 'right  headed', '@300 degree  / 5 mins', 'yes after tempering', 'grinding', 'yes', 'natural', 'yes', 'no', '2021-11-08 21:46:27', '2021-11-08 21:46:27', 1, 0, 'mm', '24.40', '25.5', '26.5', '', '  ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mm', '5.40', '5.50', '5.60', 'c', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', '', '  ', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `trn_roles_permissions`
--

CREATE TABLE `trn_roles_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL,
  `is_removed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trn_roles_permissions`
--

INSERT INTO `trn_roles_permissions` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`, `is_active`, `is_removed`) VALUES
(278, 1, 1, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(279, 2, 1, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(280, 4, 1, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(281, 5, 1, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(282, 1, 2, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(283, 2, 2, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(284, 4, 2, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(285, 5, 2, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(286, 1, 3, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(287, 1, 4, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(288, 1, 5, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(289, 1, 6, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(290, 2, 6, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(291, 4, 6, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(292, 5, 6, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(293, 1, 7, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(294, 1, 8, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(295, 2, 8, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(296, 4, 8, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(297, 1, 9, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(298, 1, 10, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(299, 1, 11, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(300, 2, 11, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(301, 4, 11, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(302, 1, 12, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(303, 1, 13, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(304, 1, 14, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(305, 2, 14, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(306, 4, 14, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(307, 1, 15, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(308, 1, 16, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(309, 2, 16, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(310, 4, 16, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(311, 1, 17, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(312, 1, 18, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(313, 1, 19, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(314, 2, 19, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(315, 4, 19, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(316, 1, 20, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(317, 1, 21, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(318, 2, 21, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(319, 4, 21, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(320, 1, 22, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(321, 1, 23, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(322, 1, 24, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(323, 2, 24, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(324, 4, 24, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(325, 1, 25, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(326, 1, 26, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(327, 1, 27, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(328, 2, 27, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(329, 4, 27, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0),
(330, 1, 28, '2021-11-17 20:32:06', '2021-11-17 20:32:06', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_base`
--
ALTER TABLE `mst_base`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_customers`
--
ALTER TABLE `mst_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_designation`
--
ALTER TABLE `mst_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_diagram`
--
ALTER TABLE `mst_diagram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_employee`
--
ALTER TABLE `mst_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_permissions`
--
ALTER TABLE `mst_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_roles`
--
ALTER TABLE `mst_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_route_card`
--
ALTER TABLE `mst_route_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trn_roles_permissions`
--
ALTER TABLE `trn_roles_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_id` (`role_id`,`permission_id`),
  ADD KEY `trn_roles_permissions_permission_id_ref` (`permission_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_base`
--
ALTER TABLE `mst_base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mst_customers`
--
ALTER TABLE `mst_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mst_designation`
--
ALTER TABLE `mst_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mst_diagram`
--
ALTER TABLE `mst_diagram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mst_employee`
--
ALTER TABLE `mst_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `mst_permissions`
--
ALTER TABLE `mst_permissions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `mst_roles`
--
ALTER TABLE `mst_roles`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mst_route_card`
--
ALTER TABLE `mst_route_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `trn_roles_permissions`
--
ALTER TABLE `trn_roles_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mst_customers`
--
ALTER TABLE `mst_customers`
  ADD CONSTRAINT `mst_diagram_customer_id_reference` FOREIGN KEY (`id`) REFERENCES `mst_diagram` (`id`);

--
-- Constraints for table `mst_roles`
--
ALTER TABLE `mst_roles`
  ADD CONSTRAINT `mst_roles_id_ref` FOREIGN KEY (`id`) REFERENCES `mst_employee` (`id`);

--
-- Constraints for table `trn_roles_permissions`
--
ALTER TABLE `trn_roles_permissions`
  ADD CONSTRAINT `trn_roles_permissions_permission_id_ref` FOREIGN KEY (`permission_id`) REFERENCES `mst_permissions` (`id`),
  ADD CONSTRAINT `trn_roles_permissions_role_id_ref` FOREIGN KEY (`role_id`) REFERENCES `mst_roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
