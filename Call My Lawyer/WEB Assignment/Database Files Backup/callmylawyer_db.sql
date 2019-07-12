-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 10:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `callmylawyer_db`
--
CREATE DATABASE IF NOT EXISTS `callmylawyer_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `callmylawyer_db`;

-- --------------------------------------------------------

--
-- Table structure for table `client_record_logs`
--

DROP TABLE IF EXISTS `client_record_logs`;
CREATE TABLE `client_record_logs` (
  `client_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `nic` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile_number_area_code` varchar(15) DEFAULT NULL,
  `mobile_number_phone_number` varchar(15) NOT NULL,
  `land_number_area_code` varchar(15) DEFAULT NULL,
  `land_number_phone_number` varchar(15) DEFAULT NULL,
  `street_address_line_1` varchar(30) NOT NULL,
  `street_address_line_2` varchar(30) DEFAULT NULL,
  `address_city` varchar(30) NOT NULL,
  `address_province` varchar(30) NOT NULL,
  `address_postal_zipcode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_record_logs`
--

INSERT INTO `client_record_logs` (`client_id`, `first_name`, `last_name`, `nic`, `email`, `password`, `mobile_number_area_code`, `mobile_number_phone_number`, `land_number_area_code`, `land_number_phone_number`, `street_address_line_1`, `street_address_line_2`, `address_city`, `address_province`, `address_postal_zipcode`) VALUES
(1, 'Harry', 'Ava', '416874312875', 'harry1@gmail.com', 'Harry$654', '..', '.0714625841.', '.011.', '.0119785641.', '26, Pitipana, Morg Road ', '', 'Anuradapura', 'North_central', '50000'),
(2, 'Jacob ', 'Charlie', '648134987215', 'jacob23@gmail.com', 'Jacobrocks@4', '..', '.0763498750.', '.011.', '.0113487612.', '56, Koswatha Road', '', 'Kalutara', 'Western', '12000'),
(3, 'Oscar ', 'Alfie', '978146275941', 'alfie@gmail.com', '#Alfie341', '..', '.0798376451.', '.038.', '.0382167521.', '84, Malvin Road', '', 'Jaffna', 'Northern', '40000'),
(4, 'Oliver ', 'Jack', '213879456215', 'ojack32@gmail.com', 'Oliverjack741!', '..', '.0731674982.', '.038.', '.0731674982.', '17, Treasure Road', '', 'Gampaha', 'Western', '11100'),
(5, 'Noah ', 'Freddie', '675941032584', 'nfred41@gmail.com', '#NohaF54321', '..', '.0757954316.', '.038.', '.0386856148.', '25, Jin Road', '', 'Batticaloa', 'Eastern', '30000'),
(6, 'George ', 'Sam', '921764213579', 'sam34@gmail.com', 'sam321$G', '..', '.0737641972.', '.011.', '.0113484862.', '76, Howard Road', '', 'Galle', 'Southern', '80000'),
(7, 'Poppy ', 'Nava', '384165479125', 'navage@gmail.com', '@PoppyN421', '..', '.0727961057.', '.011.', '.0114884751.', '14, Sheldon Road', '', 'Kandy', 'Central', '20000'),
(8, 'Sam ', 'Linnet', '813745621587', 'linnetsam@gmail.com', 'Sam$1425', '..', '.0773482013.', '.011.', '.0118746213.', '2, Campus Road ', '', 'Nuwara Eliya', 'Central', '22200');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_record_logs`
--

DROP TABLE IF EXISTS `lawyer_record_logs`;
CREATE TABLE `lawyer_record_logs` (
  `lawyer_id` int(11) NOT NULL,
  `type_of_lawyer` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `practice_area` varchar(50) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `consultation_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyer_record_logs`
--

INSERT INTO `lawyer_record_logs` (`lawyer_id`, `type_of_lawyer`, `name`, `qualification`, `practice_area`, `contact_no`, `email`, `address`, `consultation_fee`) VALUES
(1, 'Business', 'A.H.Lakmini De Silva', 'LLB(Hons)', 'Colombo-05', '0711295511', 'lakmini.ah@gmail.com', '20/A, Weerapedesa, Polonnaruwa', 3000),
(2, 'Business', 'Anuradha Wanninayake', 'LLB', 'Colombo', '0715540462', 'awanninayake@gmail.com', '80/3A, Layards Road, Colombo-05', 3000),
(3, 'Business', 'Anushka Sandanayake', 'LLB', 'Colombo-03', '0718441472', 'a_medhawanie@yahoo.com', '395, Galle road, Colombo-03', 2000),
(4, 'Contracts and Litigation', 'Chalani Nisansala Priyamali', 'LLB', 'Colombo-05', '07138886867', 'priyamaliwm@gmail.com', '172 ,Kalapaluwawa, Rajagiriya', 3000),
(5, 'Contracts and Litigation', 'Charindri Jayarathna', 'LLB(Hons)', 'Colombo-05', '07118673937', 'charindrijayarathna@gmail.com', '20/33, Hannikkagarawatta, Koswatta, Battaramulla', 3000),
(6, 'Contracts and Litigation', 'Chatterji Sarathchanandra', 'Attorney at Law', 'Colombo-03', '0718363176', 'cs6036941@gmail.com', '70/6A, 1st Cross Lane, Off Templers Road, Mount Lavinia', 6000),
(7, 'Criminal Charges', 'Fatheema Jasreena', 'Attorney-at-Law, Notary Public, Companay Secretary', 'Colombo-12', '0725449461', 'fathimaj84@gmail.com', 'No:166/1/5, Hulftsdrop street, Colombo-12', 2000),
(8, 'Criminal Charges', 'Gaya Siriwardena', 'Attorney-at-Law, Notary Public, LLB Colombo', 'Colombo-03', '0773488767', 'dilkiv@gmail.com', '395, Galle Road, Colombo 3', 3000),
(9, 'Criminal Charges', 'Indika Athuraliya', 'Attorney at Law', 'Colombo-12', '0772996566', 'abdindika@gmail.com', '06, Wilson Street, Colombo 12', 3000),
(10, 'Depth Recovery', 'Anushka Sandanayake', 'Attorney at Law, LLB', 'Colombo-03', '0718441472', 'a_medhawanie@yahoo.com', '395, Galle road, Colombo-03', 2000),
(11, 'Employment and Labor', 'Amila Ferdinandes', 'Attorney at Law', 'Colombo-12', '0773941852', 'amilacpf@gmail.com', '25/2/C, Belmond Street, Colombo 12', 6000),
(12, 'Employment and Labor', 'Charindri Jayarathna', 'LLB(Hons)', 'Colombo-05', '0718673937', 'charindrijayarathna@hotmail.com', '20/33, Hannikkagarawatta, Koswatta, Batharamulla', 3000),
(13, 'Employment and Labor', 'Chalani Nisansala Priyamali', 'LLB', 'Colombo-05', '0713886867', 'priyamaliwm@gmail.com', '172, Kalapaluwawa, Rajagiriya', 3000),
(14, 'Family', 'Anushka Sandanayake', 'Attorney at Law, LLB', 'Colombo-03', '0718441472', 'a_medawanie@yahoo.com', '395, Galle Road, Colombo-03', 2000),
(15, 'Immigration', 'Charindri Jayarathna', 'LLB(Hons)', 'Colombo-05', '0718673937', 'charindrijayarathna@hotmail.com', '20/33 Hannikkagarawatta, Koswatta, Batharamulla', 3000),
(16, 'Immigration', 'Chatterji Sarathchanandra', 'Attorney at Law', 'Colombo-03', '0718363176', 'cs6036941@gmail.com', '70/6A, 1st Cross Lane, Off Templers Road, Mount Lavinia', 6000),
(17, 'Real Estate', 'Anushka Sandanayake', 'Attorney at Law, LLB', 'Colombo-03', '0718441472', 'a_medhawanie@yahoo.com', '395, Galle Road, Colombo-03', 2000),
(18, 'Real Estate', 'Damayanthi Nadeeka Senadheera', 'Attorney at Law', 'Colombo-12', '0718558216', 'damayanthi69@yahoo.com', '43/A, Kandawatta Road, Battaramulla', 5000),
(19, 'Real Estate', 'Dona Ranga Prabani Elivitigalage', 'Attorney at Law, LLB', 'Colombo-12', '0713534559', 'praabaniranga@yahoo.com', '307, Weera Mawatha, Depanama, Pannipitiya', 3000),
(20, 'Taxation', 'Dona Ranga Prabani Elivitigalage', 'Attorney at Law, LLB', 'Colombo-12', '0713534559', 'praabaniranga@yahoo.com', '307, Weera Mawatha, Depanama, Pannipitiya', 3000),
(21, 'Taxation', 'Damayanthi Nadeeka Senadheera', 'Attorney at Law', 'Colombo-12', '0718558216', 'damayanthi69@yahoo.com', '43/A, Kandawatta Road, Battaramulla', 5000),
(22, 'Taxation', 'Melgala Fernando', 'Attorney at Law', 'Colombo-13', '0774923316', 'megalafernando@yahoo.com', '120/22, Vivekananda Hill, Colombo 13', 2000),
(23, 'Government and Health', 'Deshani Koralage', 'Attorney at Law', 'Colombo-03', '0712667057', 'kkdeshani86@gmail.com', '96/116 Sirimal Uyana Indigolla', 2000),
(24, 'Government and Health', 'Megala Fernando', 'Attorney at Law', 'Colombo-13', '0774623316', 'megalafernando@gmail.com', '120/22, Vivekananda Hill, Colombo 13', 2000),
(25, 'Government and Health', 'Safra Anver', 'LLB', 'Colombo', '0775431384', 'safra_anver@yahoo.com', '29/2B, Peries Road, Mount Lavinia, Colombo', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_emails`
--

DROP TABLE IF EXISTS `newsletter_emails`;
CREATE TABLE `newsletter_emails` (
  `email_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter_emails`
--

INSERT INTO `newsletter_emails` (`email_id`, `email`) VALUES
(1, 'ojack32@gmail.com'),
(2, 'sam34@gmail.com'),
(3, 'navage@gmail.com'),
(4, 'linnetsam@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_record_logs`
--
ALTER TABLE `client_record_logs`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `lawyer_record_logs`
--
ALTER TABLE `lawyer_record_logs`
  ADD PRIMARY KEY (`lawyer_id`);

--
-- Indexes for table `newsletter_emails`
--
ALTER TABLE `newsletter_emails`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_record_logs`
--
ALTER TABLE `client_record_logs`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lawyer_record_logs`
--
ALTER TABLE `lawyer_record_logs`
  MODIFY `lawyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `newsletter_emails`
--
ALTER TABLE `newsletter_emails`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
