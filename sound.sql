-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 01:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE `contact_tb` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'ayesha', 'ayeshafarhat4me@gmail.com', 'abc', 'hello\r\n'),
(3, 'aliya', 'Aliya@gmail.com', 'abc', 'helo'),
(4, 'Tehniyat', 'tehniyat@gmail.com', 'testing', 'testing number one'),
(5, 'Tehniyat', 'tehniyat@gmail.com', 'testing', 'testing number one'),
(6, 'Tehniyat', 'tehniyat@gmail.com', 'testing', 'testing number one'),
(7, 'Tehniyat', 'tehniyat@gmail.com', 'testing', 'testing number one');

-- --------------------------------------------------------

--
-- Table structure for table `signup_tb`
--

CREATE TABLE `signup_tb` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_tb`
--

INSERT INTO `signup_tb` (`id`, `name`, `email`, `password`, `contact`, `role`) VALUES
(1, 'ayesha', 'ayeshafarhat4me@gmail.com', '202cb962ac59075b964b07152d234b70', '3145222', 0),
(2, 'tehniyat', 'tehniyatansari2003@gmail.com', '202cb962ac59075b964b07152d234b70', '1258963', 1),
(3, 'aliya', 'Aliya@gmail.com', '202cb962ac59075b964b07152d234b70', '03145222', 1),
(4, 'abc', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', '147852369', 1),
(5, 'Tehniyat', 'xyz@gmail.com', '202cb962ac59075b964b07152d234b70', '1456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `artist_name` varchar(50) NOT NULL,
  `a_m` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `song_title` varchar(250) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `myfile` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `artist_name`, `a_m`, `year`, `song_title`, `genre`, `language`, `picture`, `myfile`) VALUES
(1, 'Atif Aslam', 'Woh mere bin', '2022', 'Woh mere bin', 'sad', 'Hindi', '128Woh Mere Bin.jpg', '128-Woh Mere Bin - Atif Aslam 128 Kbps.mp3'),
(2, 'Atif Aslam', 'Half Girlfriend', '2017', 'Barish', 'Soul', 'Hindi', '128Baarish by Atif Aslam.jpg', '128-Baarish by Atif Aslam - Half Girlfriend 128 Kbps.mp3'),
(3, 'Atif Aslam', 'Raat', '2021', 'Raat', 'classic', 'Hindi', '128Raat - Atif Aslam.jpg', '128-Raat - Atif Aslam 128 Kbps.mp3'),
(4, 'Atif Aslam', '12 bajay', '2021', '12 bajay', 'Soul', 'Urdu', '12812 Bajay - Atif Aslam.jpg', '128-12 Bajay - Atif Aslam 128 Kbps.mp3'),
(5, 'Arijit Singh', 'Rihaa', '2020', 'Rihaa', 'Sad', 'Hindi', '128Rihaa - Arijit Singh.jpg', '128-Rihaa - Arijit Singh 128 Kbps.mp3'),
(6, 'Arijit Singh', 'Jaanein Bachayenge', '2021', 'jaanein bachayenge', 'Soul', 'Hindi', '128Jaanein Bachayenge - Arijit Singh.jpg', '128-Jaanein Bachayenge - Arijit Singh 128 Kbps.mp3'),
(7, 'Neha Kakkar', 'teri aankhon mein', '2020', 'teri aankhon mein', 'music', 'Hindi', '128Teri Aankhon Mein - Neha Kakkar.jpg', '128-Teri Aankhon Mein - Neha Kakkar 128 Kbps.mp3'),
(8, 'Neha Kakkar', 'dil ko karar aaya', '2020', 'dil ko karar aaya', 'classic', 'Hindi', 's1.png', '128-Dil Ko Karaar Aaya - Neha Kakkar 128 Kbps.mp3'),
(9, 'Neha Kakkar', 'Bheegi Bheegi', '2012', 'Bheegi Bheegi', 'Soul', 'Hindi', 'n1.webp', '128-Dil Ko Karaar Aaya - Neha Kakkar 128 Kbps.mp3'),
(10, 'Ali Zafar', 'Sajania', '2010', 'Sajania', 'music', 'Urdu', '128Ali Ali - Blank 128 Kbps.jpg', '128-Dil Ko Karaar Aaya - Neha Kakkar 128 Kbps.mp3'),
(11, 'Ali Zafar', 'Mere brother ki dulhan', '2019', 'Madubhala', 'music', 'Hindi', 'crop_480x480_1573497.jpg', '128-Rihaa - Arijit Singh 128 Kbps.mp3'),
(12, 'Ali Zafar', 'Maula', '2010', 'Maula', 'Soul', 'Urdu', '128Maula - Ali Zafar 128 Kbps.jpg', '128-Bheegi Bheegi - Neha Kakkar And Tony Kakkar 128 Kbps.mp3'),
(13, 'Bilal Saeed', 'Qubool', '2021', 'Qubool', 'classic', 'Urdu', '128Qubool - Bilal Saeed 128 Kbps.jpg', '128-Jaanein Bachayenge - Arijit Singh 128 Kbps.mp3'),
(14, 'Bilal Saeed', 'Mitti Da Khadona', '2011', 'Mitti Da Khadona', 'Soul', 'Urdu', '128Mitti Da Khadona - Bilal Saeed 128 Kbps.jpg', '128-Woh Mere Bin - Atif Aslam 128 Kbps.mp3'),
(15, 'Bilal Saeed', 'Beqarar Dil', '2011', 'Beqarar Dil', 'Sad', 'Panjabi', '128Beqarar Dil - Bilal Saeed 128 Kbps.jpg', '128-Baarish by Atif Aslam - Half Girlfriend 128 Kbps.mp3'),
(16, 'Bilal Saeed', 'Hookah Hookah', '2012', 'Hookah Hookah', 'music', 'Panjabi', '128Hookah Hookah - Bilal Saeed 128 Kbps.jpg', '128-Raat - Atif Aslam 128 Kbps.mp3'),
(17, 'Asim Azhar', 'Kabhi Mai Kabhi Tum', '2012', 'Kabhi Mai Kabhi Tum', 'Soul', 'Urdu', '128Kabhi Mai Kabhi Tum - Asim Azhar 128 Kbps.jpg', '128-Rihaa - Arijit Singh 128 Kbps.mp3'),
(18, 'Asim Azhar', 'Pul Ja', '2022', 'Pul Ja', 'music', 'urdu', '128Pul Ja - Asim Azhar 128 Kbps.jpg', '128-Bheegi Bheegi - Neha Kakkar And Tony Kakkar 128 Kbps.mp3'),
(19, 'Asim Azhar', 'Jo Tu Na Mila', '2020', 'Jo Tu Na Mila', 'Sad', 'Urdu', '47185460_300x300.jpg', '128-Teri Aankhon Mein - Neha Kakkar 128 Kbps.mp3'),
(20, 'Asim Azhar', 'Tarasti Hai Nigahen View more at: https://www.hung', '2020', 'Tarasti Hai Nigahen View more at: https://www.hungama.com/song/tarasti-hai-nigahen/67058290/', 'Soul', 'Urdu', '67058288_300x300.jpg', '128-Dil Ko Karaar Aaya - Neha Kakkar 128 Kbps.mp3'),
(21, 'Badshah', 'Tu Jo Mila', '2015', 'Tu Jo Mila', 'Soul', 'Hindi', 'badshah.jpg', '128-Teri Aankhon Mein - Neha Kakkar 128 Kbps.mp3'),
(22, 'Aima Baig', 'Sajna Door', '2018', 'Sajna Door', 'music', 'Urdu', 'aima-baig-4.jpg', '128-Jaanein Bachayenge - Arijit Singh 128 Kbps.mp3'),
(23, 'Ali Azmat', 'Rangeela ', '2010', 'Rangeela ', 'classic', 'Urdu', '1666181647173-ali_azmat.jpg', '128-Rihaa - Arijit Singh 128 Kbps.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_tb`
--
ALTER TABLE `contact_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_tb`
--
ALTER TABLE `signup_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_tb`
--
ALTER TABLE `contact_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signup_tb`
--
ALTER TABLE `signup_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
