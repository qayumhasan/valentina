-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 07:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_valentina`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `stitle` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `status` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `title`, `stitle`, `body`, `images`, `status`) VALUES
(9, 'Happy', 'Valentine Day', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'uploads/banner/5991835f78.png', 0),
(11, 'Happy', 'Valentine Day', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.', 'uploads/banner/6ca1f30622.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cimages`
--

CREATE TABLE `tbl_cimages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cimages`
--

INSERT INTO `tbl_cimages` (`id`, `title`, `images`, `status`) VALUES
(4, 'sdfsdfs', 'uploads/images/f743d231f3.jpg', 'Select Banner Status'),
(5, 'fedfdsf', 'uploads/images/26c1b13af0.jpg', '1'),
(6, 'fedfdsf', 'uploads/images/8481892bfa.jpg', '1'),
(7, 'dsfdsfds', 'uploads/images/331d824c81.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_couple`
--

CREATE TABLE `tbl_couple` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_couple`
--

INSERT INTO `tbl_couple` (`id`, `title`, `body`, `images`, `status`) VALUES
(1, 'Couple & Ticket', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'uploads/couple/10333fa697.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gift`
--

CREATE TABLE `tbl_gift` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `status` tinyint(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gift`
--

INSERT INTO `tbl_gift` (`id`, `title`, `body`, `status`, `images`) VALUES
(3, 'Gift & Proposal', 'A gift or a present is an item given to someone without the expectation of payment or return. An item is not a gift, if that item, itself, is already owned by the one to whom it is given. Although gift-giving might involve an expectation of reciprocity, a', 1, 'uploads/4cde343b6a.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`id`, `title`, `body`, `status`, `images`) VALUES
(1, 'Valentine', '\r\n\r\nSaint Valentine (Italian: San Valentino, Latin: Valentinus), officially Saint Valentine of Terni, is a widely recognized third-century Roman saint commemorated on February 14 and since the High Middle Ages is associated with a tradition of courtly lov', '1', 'uploads/72c109acbb.png'),
(2, 'hjhjhj', 'jhhhjg', '1', 'uploads/82da19317b.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imgtitle`
--

CREATE TABLE `tbl_imgtitle` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_imgtitle`
--

INSERT INTO `tbl_imgtitle` (`id`, `title`, `body`) VALUES
(3, 'hghfg', 'hdfhfghgfd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `status` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `images`, `status`) VALUES
(4, 'uploads/logo/d58295dcfd.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offers`
--

CREATE TABLE `tbl_offers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_offers`
--

INSERT INTO `tbl_offers` (`id`, `title`, `body`, `status`) VALUES
(3, 'fdsfdsf', 'ffdsfdsfg fgfhdklf fdlskjf dsfhdlskf dsfhldsk fhdslfds fhdslkf dsffhldsfhhdslf d', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proposal`
--

CREATE TABLE `tbl_proposal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `friend` varchar(255) NOT NULL,
  `myemail` varchar(255) NOT NULL,
  `femail` varchar(255) NOT NULL,
  `pro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sendgift`
--

CREATE TABLE `tbl_sendgift` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `sfname` varchar(255) NOT NULL,
  `slname` varchar(255) NOT NULL,
  `semail` varchar(255) NOT NULL,
  `sphone` varchar(255) NOT NULL,
  `saddr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sendgift`
--

INSERT INTO `tbl_sendgift` (`id`, `fname`, `lname`, `email`, `phone`, `addr`, `sfname`, `slname`, `semail`, `sphone`, `saddr`) VALUES
(1, 'gfsgfds', 'gfdgdfs', 'gdfgfds@gmail.com', 'gdfsgfds', 'gsdgdfs', 'dfgfds', 'gdfsgfds', 'gdfsgfds@gmail.com', 'gfdsgfds', 'gdfgfdgfds'),
(2, 'gfsgfds', 'gfdgdfs', 'gdfgfds@gmail.com', 'gdfsgfds', 'gsdgdfs', 'dfgfds', 'gdfsgfds', 'gdfsgfds@gmail.com', 'gfdsgfds', 'gdfgfdgfds'),
(3, 'gfsgfds', 'gfdgdfs', 'gdfgfds@gmail.com', 'gdfsgfds', 'gsdgdfs', 'dfgfds', 'gdfsgfds', 'gdfsgfds@gmail.com', 'gfdsgfds', 'gdfgfdgfds'),
(4, 'Qayum', 'Hasan', 'qan@gmail.com', '123456', 'adf', 'dfgfdsg', 'fsafdsa', 'qan@gmail.com', 'fdsafdsaf', 'fdsgfdsg'),
(5, 'Qayum', 'Hasan', 'qan@gmail.com', '123456', 'dsfadsafds', 'fdsaf', 'fasfdsa', 'qan@gmail.com', '123456', 'qeffdsafds'),
(6, 'Qayum', 'Hasan', 'qan@gmail.com', '123456', 'dsfadsafds', 'fdsaf', 'fasfdsa', 'qan@gmail.com', '123456', 'qeffdsafds'),
(7, 'Qayum', 'Hasan', 'qan@gmail.com', '123456', 'dsfadsafds', 'fdsaf', 'fasfdsa', 'qan@gmail.com', '123456', 'qeffdsafds'),
(8, 'Qayum', 'Hasan', 'qan@gmail.com', '123456', 'dsfadsafds', 'fdsaf', 'fasfdsa', 'qan@gmail.com', '123456', 'qeffdsafds'),
(9, 'Qayum', 'Hasan', 'qan@gmail.com', '123456', 'dsfadsafds', 'fdsaf', 'fasfdsa', 'qan@gmail.com', '123456', 'qeffdsafds'),
(10, 'Qayum', 'Hasan', 'qan@gmail.com', '123456', 'dsfadsafds', 'fdsaf', 'fasfdsa', 'qan@gmail.com', '123456', 'qeffdsafds'),
(11, 'Qayum', 'Hasan', 'qan@gmail.com', '123456', 'dsfadsafds', 'fdsaf', 'fasfdsa', 'qan@gmail.com', '123456', 'qeffdsafds'),
(12, 'Qayum', 'Hasan', 'qan@gmail.com', '123456', 'dsfadsafds', 'fdsaf', 'fasfdsa', 'qan@gmail.com', '123456', 'qeffdsafds');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `title`, `body`, `images`, `status`) VALUES
(5, 'gfdg', 'gfdsgfdsg', 'uploads/services/ed2b84581d.png', '1'),
(6, 'fdgsfdsg', 'gfdgfdsg', 'uploads/services/cf4d2d61c6.png', '1'),
(8, 'gfdgfds', 'gfdsgfds', 'uploads/services/8d4067d067.png', '1'),
(9, 'ghjhjhjjhg', 'hjjggjhgjh gjghjhgj hjgjhjghgjhjg jhgkhjjhkk', 'uploads/services/66876b8760.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(11) NOT NULL,
  `java` varchar(255) NOT NULL,
  `php` varchar(255) NOT NULL,
  `html` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id`, `java`, `php`, `html`) VALUES
(1, 'HTML/CSS', '', ''),
(2, 'HTML/CSS', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `stitle` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `title`, `stitle`, `body`, `images`, `status`) VALUES
(4, 'gfdsfdsaff', 'fdsfdsfd', 'sfdsafdsfdsgdsflf fsdaflds fdslfdslkhasfdsafdsfdsgdsflf fsdaflds fdslfdslkhasfdsafdsfdsgdsflf fsdaflds fdslfdslkhasfdsafdsfdsgdsflf fsdaflds fdslfdslkhasfdsafdsfdsgdsflf fsdaflds fdslfdslkhasfdsafdsfdsgdsflf fsdaflds fdslfdslkhasfdsafdsfdsgdsflf fsdaflds ', 'uploads/Testitmonials/1f7fd35f88.png', '1'),
(5, 'hfsgh', 'dfdsf', 'fasdfsadf', 'uploads/Testitmonials/14e1744b2a.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `pass`, `username`) VALUES
(1, 'qan@gmail.com', '123', 'Qayum Hasan'),
(8, 'qan1@gmail.com', '123', 'qayum hasan'),
(9, 'qan1@gmail.com', '123', 'qayum hasan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cimages`
--
ALTER TABLE `tbl_cimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_couple`
--
ALTER TABLE `tbl_couple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gift`
--
ALTER TABLE `tbl_gift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_imgtitle`
--
ALTER TABLE `tbl_imgtitle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_offers`
--
ALTER TABLE `tbl_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_proposal`
--
ALTER TABLE `tbl_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sendgift`
--
ALTER TABLE `tbl_sendgift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_cimages`
--
ALTER TABLE `tbl_cimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_couple`
--
ALTER TABLE `tbl_couple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gift`
--
ALTER TABLE `tbl_gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_imgtitle`
--
ALTER TABLE `tbl_imgtitle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_offers`
--
ALTER TABLE `tbl_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_proposal`
--
ALTER TABLE `tbl_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sendgift`
--
ALTER TABLE `tbl_sendgift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
