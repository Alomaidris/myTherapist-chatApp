-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2022 at 08:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mental_health_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 3, 6, 'Hello '),
(2, 3, 6, 'Hey it is me'),
(3, 3, 6, 'I can see you'),
(4, 3, 2, 'Hello'),
(5, 1, 6, 'Hi'),
(6, 5, 6, 'Are you there'),
(7, 5, 6, 'Hello '),
(8, 6, 3, 'Hi'),
(9, 6, 3, 'How can we help you'),
(10, 3, 6, 'I am in need of help'),
(11, 6, 3, 'I need you to explain in clear terms'),
(12, 3, 6, 'I am trying to explain '),
(13, 3, 6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus architecto soluta recusandae veritatis iste quis obcaecati, placeat qui molestias at aliquid maxime necessitatibus molestiae sed, et dolorem. Iusto, ut dolorem corporis explicabo impedit tempora voluptate, sapiente dicta iure mollitia sunt.'),
(14, 6, 3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus architecto soluta recusandae veritatis iste quis obcaecati, placeat qui molestias at aliquid maxime necessitatibus molestiae sed, et dolorem. Iusto, ut dolorem corporis explicabo impedit tempora voluptate, sapiente dicta iure mollitia sunt.'),
(15, 3, 6, 'Hello'),
(16, 6, 3, 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `email`, `password`, `user_type`, `user_status`) VALUES
(1, 'Therapist One', 'Therapist1', 'therapist1@test.com', '$2y$10$kW0SoDV9GCV8C31aGlHl.es7r26weKfxGS2/mZO.2S6DBdv1zclp6', 'therapist', '1'),
(2, 'user1 user1', 'user1', 'user1@gmail.com', '$2y$10$InfcEMYQcnKPLb8sAwvj0OQoO9UU3bR7bdYrGREW.ZE1Fa.bCSQCC', 'user', '1'),
(3, 'Therapist Two', 'Therapist2', 'therapist2@test.com', '$2y$10$lgrTAQxw.477r069NmbFfeAsm0cwVo3yuRMscJU4vw5bUp9JHf8oG', 'therapist', '1'),
(4, 'User Two', 'User2', 'user2@test.com', '$2y$10$s6B04SPbXwSkvuXxLKzw1.lGJCz4YZ5NnIxZcjrlLcBXzC/.D6MGC', 'user', '1'),
(5, 'Therapist Three', 'Therapist3', 'therapist3@test.com', '$2y$10$LPB/HiXSd/HorSr3jiqdkuv2CHhchrBGfdrpmprJFWCMcuSiE.nA6', 'therapist', '1'),
(6, 'User Three', 'user3', 'user3@test.com', '$2y$10$b1UQXsBORnDyLlqWj7nAXens4u4dYh5zec2QwUnzwQBuUGL8kKxAO', 'user', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
