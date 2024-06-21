-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2024 at 10:23 AM
-- Server version: 5.6.40
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pandawarental`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `bank` varchar(128) NOT NULL,
  `number` varchar(16) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank`, `number`, `name`) VALUES
(1, 'BCA', '0586738499', 'Abdul Majid'),
(2, 'BRI', '884612538718', 'Asep Subardjo'),
(3, 'Mandiri', '8885736582648', 'Mia Hanifa');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` char(4) NOT NULL,
  `number_plate` varchar(11) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `transmition` enum('AUTOMATIC','MANUAL','','') NOT NULL,
  `seat` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `number_plate`, `merk`, `transmition`, `seat`, `year`, `price`, `image`, `type_id`) VALUES
('C001', 'F0012NA', 'Honda HRV', 'AUTOMATIC', 5, 2021, 500000, 'hrv.png', 2),
('C002', 'F0012NB', 'Hyundai Creta', 'AUTOMATIC', 7, 2023, 800000, 'creta.png', 1),
('C003', 'B2865GG', 'Honda Jazz', 'MANUAL', 5, 2016, 400000, 'cars_1701597730.png', 4),
('C004', 'B6476PO', 'Toyota Vios', 'MANUAL', 5, 2018, 400000, 'cars_1701597794.png', 3),
('C005', 'F6377TY', 'Mitsubishi Xpander', 'AUTOMATIC', 8, 2021, 600000, 'cars_1701597875.png', 1),
('C006', 'F6625HG', 'Toyota Veloz', 'AUTOMATIC', 8, 2022, 600000, 'cars_1701597913.png', 1),
('C007', 'F7736H', 'Daihatsu Rocky', 'MANUAL', 5, 2020, 400000, 'cars_1701597952.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `licenses`
--

CREATE TABLE `licenses` (
  `id` int(11) NOT NULL,
  `number` char(14) NOT NULL,
  `attachment` varchar(128) NOT NULL,
  `rent_id` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `licenses`
--

INSERT INTO `licenses` (`id`, `number`, `attachment`, `rent_id`) VALUES
(3, '12345678909876', 'license_1701663690.png', 'R001'),
(4, '77463252757547', 'license_1701665287.png', 'R002'),
(5, '12345678909876', 'license_1701665338.png', 'R003'),
(6, '77463252757547', 'license_1701665410.png', 'R004'),
(7, '12345678909877', 'license_1701930347.PNG', 'R005'),
(8, '77463252757547', 'license_1702047460.jpeg', 'R006'),
(9, '12345678909876', 'license_1702269627.jpeg', 'R007'),
(10, '12345678909876', 'license_1702270070.jpeg', 'R008'),
(11, '12345678909876', 'license_1717779201.jpg', 'R009'),
(12, '12345678909876', 'license_1717989675.jpg', 'R010'),
(13, '12345678909876', 'license_1718078943.png', 'R011'),
(14, '12345678909876', 'license_1718937148.png', 'R012');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `number` varchar(16) NOT NULL,
  `name` varchar(128) NOT NULL,
  `amount` int(11) NOT NULL,
  `attachment` varchar(128) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `rent_id` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `number`, `name`, `amount`, `attachment`, `bank_id`, `rent_id`) VALUES
(3, '123456789', 'alliza', 2000000, 'payment_1701663690.png', 1, 'R001'),
(4, '9098888374', 'Rival', 800000, 'payment_1701665287.png', 3, 'R002'),
(5, '9098888374', 'Ravel', 800000, 'payment_1701665338.png', 3, 'R003'),
(6, '9098888374', 'Hana', 2400000, 'payment_1701665410.png', 2, 'R004'),
(7, '9098888377', 'David Eko Octavian', 1500000, 'payment_1701930347.PNG', 1, 'R005'),
(8, '9098888374', 'Agis Sukmayadi', 1200000, 'payment_1702047460.jpeg', 2, 'R006'),
(9, '9098888374', 'Agis Sukmayadi', 1200000, 'payment_1702269627.jpeg', 1, 'R007'),
(10, '9098888377', 'Agis Sukmayadi', 800000, 'payment_1702270070.jpeg', 1, 'R008'),
(11, '34334554353535', 'Ravel', 400000, 'payment_1717779201.jpg', 1, 'R009'),
(12, '9098888374', 'David Eko Octavian', 1600000, 'payment_1717989675.jpg', 1, 'R010'),
(13, '9098888374', 'tes', 800000, 'payment_1718078943.jpg', 2, 'R011'),
(14, '9098888377', 'Agis Sukmayadi', 1200000, 'payment_1718937148.png', 1, 'R012');

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `id` char(4) NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL,
  `actual_return_date` date DEFAULT NULL,
  `rent_cost` int(11) NOT NULL,
  `late_cost` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` char(4) NOT NULL,
  `status` enum('PENDING','PAID','PICKED UP','SUCCESS','INVALID LICENSE','INVALID PAYMENT') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`id`, `rent_date`, `return_date`, `actual_return_date`, `rent_cost`, `late_cost`, `total_cost`, `user_id`, `car_id`, `status`) VALUES
('R001', '2023-12-06', '2023-12-10', '2023-12-11', 2000000, 750000, 2750000, 8, 'C001', 'SUCCESS'),
('R002', '2023-12-07', '2023-12-09', NULL, 800000, 0, 800000, 2, 'C004', 'INVALID LICENSE'),
('R003', '2023-12-06', '2023-12-07', NULL, 800000, 0, 800000, 2, 'C002', 'PICKED UP'),
('R004', '2023-12-08', '2023-12-14', '2023-12-14', 2400000, 0, 2400000, 2, 'C007', 'SUCCESS'),
('R005', '2023-12-09', '2023-12-12', NULL, 1500000, 0, 1500000, 9, 'C001', 'INVALID PAYMENT'),
('R006', '2023-12-10', '2023-12-13', '2023-12-14', 1200000, 600000, 1800000, 10, 'C003', 'SUCCESS'),
('R007', '2023-12-12', '2023-12-15', '2023-12-16', 1200000, 600000, 1800000, 11, 'C004', 'SUCCESS'),
('R008', '2023-12-12', '2023-12-14', '2023-12-15', 800000, 600000, 1400000, 11, 'C003', 'SUCCESS'),
('R009', '2024-06-08', '2024-06-09', NULL, 400000, 0, 400000, 2, 'C003', 'INVALID PAYMENT'),
('R010', '2024-06-11', '2024-06-15', NULL, 1600000, 0, 1600000, 19, 'C003', 'PAID'),
('R011', '2024-06-12', '2024-06-14', '2024-06-15', 800000, 600000, 1400000, 2, 'C004', 'SUCCESS'),
('R012', '2024-06-22', '2024-06-25', '2024-06-27', 1200000, 1200000, 2400000, 2, 'C003', 'SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Employee'),
(3, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'MPV'),
(2, 'SUV'),
(3, 'Sedan'),
(4, 'Hatchback'),
(5, 'pick up');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `address`, `role_id`, `date_created`) VALUES
(2, 'Agis Sukmayadi', '085156134923', 'agissukmayadi@gmail.com', '$2y$10$bimKMInFuMhkqT//Jw/XUO3z51dTxpUNsqI/1k.1J0kLyE4ibbFSa', 'Ciomas, Bogor', 3, '2024-06-01'),
(5, 'Admin', '085156562871', 'admin@gmail.com', '$2y$10$bimKMInFuMhkqT//Jw/XUO3z51dTxpUNsqI/1k.1J0kLyE4ibbFSa', 'Ciomas, Bogor', 1, '0000-00-00'),
(7, 'Employee', '085156134923', 'employee@gmail.com', '$2y$10$bimKMInFuMhkqT//Jw/XUO3z51dTxpUNsqI/1k.1J0kLyE4ibbFSa', 'Ciomas, Bogor', 2, '0000-00-00'),
(8, 'nur alliza', '11111111111', 'alliza@gmail.com', '$2y$10$ldUXh/91BmXOXc55RxVYEucXDU9I95zPoU9zx2D1p3mXkjSH1O9Ci', 'brandweer', 3, '0000-00-00'),
(9, 'David Eko Octavian', '085697120002', 'david@gmail.com', '$2y$10$bimKMInFuMhkqT//Jw/XUO3z51dTxpUNsqI/1k.1J0kLyE4ibbFSa', 'Jl. Merdeka', 3, '0000-00-00'),
(10, 'Agis Sukmayadi', '085156134923', 'agiss@gmail.com', '$2y$10$8F0ukV.nJJeZaVYIqkEKNeJHXphC3nzgLrsep2O.raGFra9iiXZ6m', 'ejakjekaj', 3, '0000-00-00'),
(11, 'Agis Sukmayadi', '085156134923', 'test@gmail.com', '$2y$10$g1Qpa5DIsL0FJxelzYOAAe3YDbrINXANySG4v9c5xYsvgJJ.XSwZS', 'test', 3, '0000-00-00'),
(12, 'Agis Sukmayadi', '4363636363', 'agissukma111yadi@gmail.com', '$2y$10$8f0Ix34A0RKztr9CDqI74.fZ3rVwVFx.DXbH8G9ViWqMJkHUkrAZG', '11111', 3, '0000-00-00'),
(13, 'Agis Sukmayadi', '085156134923', '111@gmail.com', '$2y$10$5RPIcu5B6WYgXYuTVF2oNeNHOgd7vF2I9IFxwbHNNXNVfp2ScCZEm', 'ekej', 3, '0000-00-00'),
(14, 'Agis Sukmayadi', '08556156536', 'customer@gmail.com', '$2y$10$i.RDx3tNyhHw2hxdcrRFgu4xTYtSPBclt.3VuzEyhdwoE3Fa.o9Hu', 'Ciomas, Bogor', 3, '0000-00-00'),
(15, 'Agis Sukmayadi', '085156134923', 'agisss@gmail.com', '$2y$10$yQEI10gE8VmaiU7SJBlhD.HEnug9KLbxSqB8aOv81KAmVkVgPwTgm', 'agisss', 3, '0000-00-00'),
(16, 'Agis Sukmayadi', '085156134923', 'tes123@gmail.com', '$2y$10$WwAzKQ1aDQ8Xh6Bsz52j4eDqr4y2uyWwBs6pngU1JHirM5FoynU9O', 'Tes123', 3, '0000-00-00'),
(17, 'nama', '085156134923', 'nama@gmail.com', '$2y$10$Rs1PPE1tmoQKeEmC20TLTOdTCffTOXkGCV7VymSgCOLqw8p2zJfsi', 'vvnnnn', 3, '0000-00-00'),
(18, 'agis', '08612156165', 'agis@gmail.com', '$2y$10$EoGKk6emYHZnryqjYjXsV.DDzQonvyt9D5tqS1XL8cI6SuScuBiSy', 'Bogor', 3, '0000-00-00'),
(19, 'Agis Sukmayadi', '085156134923', 'testing1@gmail.com', '$2y$10$YZBSXm8iRPM4fCLc3lYHfuRsLPVyN6YmGhaltcoQfFzQZG9SeJth2', 'Ciomas, Bogor', 3, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number_plate` (`number_plate`),
  ADD KEY `fk_car_type` (`type_id`);

--
-- Indexes for table `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_license_rent` (`rent_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payment_bank` (`bank_id`),
  ADD KEY `fk_payment_rent` (`rent_id`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rent_car` (`car_id`),
  ADD KEY `fk_rent_user` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_user_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `licenses`
--
ALTER TABLE `licenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `fk_car_type` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `licenses`
--
ALTER TABLE `licenses`
  ADD CONSTRAINT `fk_license_rent` FOREIGN KEY (`rent_id`) REFERENCES `rents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_payment_bank` FOREIGN KEY (`bank_id`) REFERENCES `banks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_payment_rent` FOREIGN KEY (`rent_id`) REFERENCES `rents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `fk_rent_car` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rent_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
