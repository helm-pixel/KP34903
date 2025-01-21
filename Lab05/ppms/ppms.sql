-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 12:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogID` int(11) NOT NULL,
  `blogEntry` text NOT NULL,
  `blogImg` varchar(100) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `updatedDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `categoryDesc` varchar(100) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`, `categoryDesc`, `createDate`) VALUES
(1, 'books', 'pre-loved books', '2024-12-03 16:00:00'),
(2, 'coffee', 'for coffee lovers', '2024-12-04 11:38:01'),
(3, 'food', 'food category', '2024-12-04 11:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productImg` varchar(100) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productQty` int(11) NOT NULL,
  `productPrice` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productImg`, `categoryID`, `productQty`, `productPrice`) VALUES
(1, 'Latte', 'uploads/coffee1.jpeg', 2, 5, 8.90),
(2, 'Cappucino', 'uploads/Cappucino.jpeg', 2, 7, 9.90),
(3, 'Coffee Bot', 'uploads/coffee4-s.jpeg', 2, 5, 6.00),
(4, 'Soto Ayam', 'uploads/soto-ayam.jpg', 3, 5, 9.90),
(5, 'Kopi  Gohson', 'uploads/coffee5-s.jpeg', 2, 3, 10.00),
(6, 'Coffee Set', 'uploads/Coffee Set.jpeg', 2, 3, 12.50),
(7, 'Breakfast Set', 'uploads/coffee2.jpeg', 3, 4, 9.90),
(8, 'Nasi Goreng Telur', 'uploads/nasi-goreng.jpg', 3, 10, 6.50),
(9, 'Mee Sup', 'uploads/maggi-sup.jpg', 3, 4, 9.90),
(10, 'Nasi Ayam', 'uploads/nasi-ayam.jpg', 3, 12, 12.00),
(11, 'Book 1', 'uploads/book1.jpeg', 1, 1, 1.00),
(12, 'Book 2', 'uploads/book2.jpeg', 1, 1, 1.00),
(19, 'Book 3', 'uploads/book3.jpg', 1, 8, 9.90);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `reservationDate` date NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_detail`
--

CREATE TABLE `reservation_detail` (
  `lineID` int(11) NOT NULL,
  `reservationID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `orderQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL,
  `reviewText` text NOT NULL,
  `rating` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `reviewBy` int(11) NOT NULL,
  `reviewDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userPwd` varchar(255) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `regDate` date NOT NULL DEFAULT current_timestamp(),
  `userRoles` int(2) NOT NULL DEFAULT 2 COMMENT '1 - System Admin, 2 - Normal User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogID`),
  ADD KEY `createdBy` (`createdBy`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `reservation_detail`
--
ALTER TABLE `reservation_detail`
  ADD PRIMARY KEY (`lineID`),
  ADD KEY `productID` (`productID`),
  ADD KEY `reservationID` (`reservationID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `userID` (`reviewBy`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_detail`
--
ALTER TABLE `reservation_detail`
  MODIFY `lineID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`createdBy`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation_detail`
--
ALTER TABLE `reservation_detail`
  ADD CONSTRAINT `reservation_detail_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_detail_ibfk_2` FOREIGN KEY (`reservationID`) REFERENCES `reservation` (`reservationID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`reviewBy`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
