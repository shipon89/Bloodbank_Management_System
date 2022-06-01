-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 07:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `become_donor`
--

CREATE TABLE `become_donor` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `mob_no` int(15) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `blood_group` varchar(30) NOT NULL,
  `Addres` varchar(30) NOT NULL,
  `messages` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `become_donor`
--

INSERT INTO `become_donor` (`id`, `full_name`, `mob_no`, `email_id`, `age`, `gender`, `blood_group`, `Addres`, `messages`) VALUES
(1, 'nayan', 1868634380, 'nayan.siddque@gmail.com', 20, 'male', 'A+', 'Nayapur Bazar, Madanpur, Sonar', 'Hey'),
(3, 'Karim', 1885457455, 'karim@gmail.com', 21, 'male', 'AB+', 'Sonargaon,Narayanganj', ''),
(4, 'Safiqul Islam', 1754863214, 'safiq@gmail.com', 20, 'male', 'A+', 'Dhaka, Shewrapara', ''),
(5, 'Ahmed Shuvo', 1854721647, 'Shuvo@gmail.com', 19, 'male', 'O+', 'Dhaka', ''),
(19, 'Maruf Mia', 1845217836, 'nayan.siddque@gmail.com', 20, 'male', 'O+', 'Shewrapara', 'Hudai'),
(21, 'Nura Alam Siddique', 1825323544, 'nure.alam.siddque@gmail.com', 21, 'male', 'A+', 'Sonargaon, Narayanganj', 'I want to Donate Blood.'),
(22, 'Mazid Mia', 1754869574, 'mazid@yahoo.com', 23, 'male', 'AB-', 'Dhaka', 'Very much Interested');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `your_name` varchar(30) NOT NULL,
  `your_no` int(15) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `msg` varchar(30) NOT NULL,
  `msg_time` varchar(20) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `your_name`, `your_no`, `email_address`, `msg`, `msg_time`) VALUES
(1, 'Nayan Siddique', 182515755, 'nayan.siddque@gmail.com', 'Hey Developed more..', '2020-12-31 23:52:38'),
(2, 'Nayan Siddique', 2147483647, 'nayan.siddque@gmail.com', 'Hello', '2020-12-31 23:52:38'),
(3, 'mahadi', 145454, 'djfdfjdkfj@fdff', 'check', '2021-01-01 00:05:19'),
(8, 'Shuvo', 121, 'nayan.siddque@gmail.com', 'time fixed', '2021-01-02 20:16:32'),
(10, 'test', 1877, 'time@yahoo.com', 'time checked', '2021-01-03 00:09:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `become_donor`
--
ALTER TABLE `become_donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `become_donor`
--
ALTER TABLE `become_donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
