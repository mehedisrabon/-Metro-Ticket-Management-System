-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2026 at 10:28 PM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `PaymentID` int(11) NOT NULL,
  `TicketID` int(11) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `PaymentDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` enum('Success','Failed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentID`, `TicketID`, `Amount`, `PaymentDate`, `Status`) VALUES
(1, 1, 20.00, '2026-01-19 19:20:05', 'Success'),
(2, 1, 10.00, '2026-01-19 21:55:05', 'Success'),
(3, 1, 10.00, '2026-01-19 21:55:41', 'Success'),
(4, 1, 10.00, '2026-01-19 21:56:07', 'Success'),
(5, 1, 10.00, '2026-01-19 21:57:38', 'Success'),
(6, 1, 10.00, '2026-01-20 07:19:47', 'Success'),
(7, 1, 10.00, '2026-01-20 07:23:44', 'Success'),
(8, 1, 10.00, '2026-01-20 07:29:18', 'Success'),
(9, 2, 20.00, '2026-01-20 20:59:42', 'Success'),
(10, 3, 10.00, '2026-01-20 21:07:25', 'Success'),
(11, 4, 20.00, '2026-01-20 21:49:03', 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`RoleID`, `RoleName`) VALUES
(1, 'Admin'),
(2, 'Employee'),
(3, 'Passenger');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `RouteID` int(11) NOT NULL,
  `FromStation` varchar(50) NOT NULL,
  `ToStation` varchar(50) NOT NULL,
  `Fare` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`RouteID`, `FromStation`, `ToStation`, `Fare`) VALUES
(1, 'Uttara North', 'Uttara Center', 20.00),
(2, 'Uttara North', 'Uttara South', 20.00),
(3, 'Uttara North', 'Pallabi', 30.00),
(4, 'Uttara North', 'Mirpur-11', 30.00),
(5, 'Uttara North', 'Mirpur-10', 40.00),
(6, 'Uttara North', 'Kazipara', 40.00),
(7, 'Uttara North', 'Shewrapara', 50.00),
(8, 'Uttara North', 'Agargaon', 60.00),
(9, 'Uttara North', 'Bijoy Sarani', 60.00),
(10, 'Uttara North', 'Farmgate', 70.00),
(11, 'Uttara North', 'Karwan Bazar', 80.00),
(14, 'Uttara North', 'Secretariat', 90.00),
(15, 'Uttara North', 'Motijheel', 100.00),
(16, 'Uttara North', 'Kamalapur', 100.00),
(17, 'Agargaon', 'Uttara North', 60.00),
(18, 'Agargaon', 'Mirpur-10', 20.00),
(19, 'Agargaon', 'Farmgate', 20.00),
(28, 'dhaka', 'aka', 20.00),
(29, 'dhaka', 'ffff', 40.00);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `TicketID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `RouteID` int(11) NOT NULL,
  `JourneyDate` date NOT NULL,
  `Status` enum('Pending','Confirmed','Cancelled','Blocked') DEFAULT 'Pending',
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`TicketID`, `UserID`, `RouteID`, `JourneyDate`, `Status`, `CreatedAt`) VALUES
(1, 3, 1, '2026-02-01', 'Confirmed', '2026-01-19 19:19:59'),
(2, 3, 1, '0000-00-00', '', '2026-01-20 20:59:42'),
(3, 3, 1, '2026-01-21', '', '2026-01-20 21:07:25'),
(4, 3, 1, '0000-00-00', '', '2026-01-20 21:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `TransactionID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `Type` enum('Credit','Debit') NOT NULL,
  `Reference` varchar(50) DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`TransactionID`, `UserID`, `Amount`, `Type`, `Reference`, `CreatedAt`) VALUES
(1, 3, 20.00, 'Debit', 'Metro Ticket Purchase', '2026-01-19 19:20:13'),
(2, 3, 10.00, 'Debit', 'Rocket', '2026-01-19 21:55:05'),
(3, 3, 10.00, 'Debit', 'Rocket', '2026-01-19 21:55:41'),
(4, 3, 10.00, 'Debit', 'Bkash', '2026-01-19 21:56:07'),
(5, 3, 10.00, 'Debit', 'Bkash', '2026-01-19 21:57:38'),
(6, 3, 10.00, 'Debit', 'Rocket', '2026-01-20 07:19:47'),
(7, 3, 10.00, 'Debit', 'Rocket', '2026-01-20 07:23:44'),
(8, 3, 10.00, 'Debit', 'Card', '2026-01-20 07:29:18'),
(9, 3, 20.00, 'Debit', 'Bkash', '2026-01-20 20:59:42'),
(10, 3, 10.00, 'Debit', 'Card', '2026-01-20 21:07:25'),
(11, 3, 20.00, 'Debit', 'Bkash', '2026-01-20 21:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Mobile` varchar(15) NOT NULL,
  `NID` varchar(20) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Gender` enum('Male','Female','Other') DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` enum('Active','Blocked') DEFAULT 'Active',
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `RoleID`, `FirstName`, `LastName`, `Mobile`, `NID`, `DateOfBirth`, `Gender`, `Password`, `Status`, `CreatedAt`) VALUES
(1, 1, 'System', 'Admin', '01710000001', 'ADMIN123456', '1990-01-01', 'Male', '$2y$10$adminhashedpassword', 'Active', '2026-01-19 19:19:12'),
(2, 2, 'Rahim', 'Uddin', '01710000002', 'EMP123456', '1995-08-20', 'Male', '$2y$10$employeehashedpassword', 'Active', '2026-01-19 19:19:26'),
(3, 3, 'Mehedi', 'Hasan', '01710000003', 'PASS123456', '2001-05-15', 'Male', '123456', 'Active', '2026-01-19 19:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `WalletID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Balance` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`WalletID`, `UserID`, `Balance`) VALUES
(1, 3, 380.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `TicketID` (`TicketID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`RouteID`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`TicketID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `RouteID` (`RouteID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`TransactionID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Mobile` (`Mobile`),
  ADD UNIQUE KEY `NID` (`NID`),
  ADD KEY `RoleID` (`RoleID`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`WalletID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `RouteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `TicketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `WalletID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`TicketID`) REFERENCES `tickets` (`TicketID`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`RouteID`) REFERENCES `routes` (`RouteID`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`RoleID`) REFERENCES `roles` (`RoleID`);

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
