-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2013 at 04:58 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `brewitbi_p4_brewit_biz`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `release_date` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `total_votes` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`movie_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `release_date`, `rating`, `total_votes`, `poster`, `user_id`) VALUES
(66, 'Out of the Furnace', '2013-12-06', 7.1, 7, 'http://image.tmdb.org/t/p/w92/4SbemExi6hntsKk7Yoc2aovu5Uj.jpg', 8),
(67, 'The Selfish Giant', '2013-12-20', 0, 0, 'http://image.tmdb.org/t/p/w92/AmqZnGqnvGYvKsCrZn05KFm3MxR.jpg', 8),
(70, 'The Wolf of Wall Street', '2013-12-25', 5, 3, 'http://image.tmdb.org/t/p/w92/utfEHZ9jG1emGdvJ4GgfMcHoznp.jpg', 7),
(71, 'Mandela: Long Walk to Freedom', '2013-12-25', 6.7, 3, 'http://image.tmdb.org/t/p/w92/hkw0aKn6W7gngPQ9ZQSVxh97DOl.jpg', 7),
(72, 'Ninja: Shadow of a Tear', '2013-12-31', 6, 3, 'http://image.tmdb.org/t/p/w92/346b9cxs6h0AxsNlp7Id7irtOJW.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`) VALUES
(1, 0, 0, '', '', 0, '', 'Joe', 'Smith', 'joe@gmail.com'),
(2, 0, 0, '', '', 0, '', 'Albert', 'Einstein', 'albert@gmail.com'),
(3, 0, 0, '', '', 0, '', 'Ruchika', 'Marda', 'ruchika@gmail.com'),
(4, 0, 0, '', '', 0, '', 'Ruchika', 'Marda', 'ruchika@gmail.com'),
(5, 1387666542, 0, '30631cbb6d1fc267032b1d2ea86ff6853b388d3a', '7ccf1efeddf5dc1461a474ba1c42c1113482c49c', 0, 'America/New_York', 'Gayatri', 'Devi', 'gayatri@gmail.com'),
(6, 1387690335, 0, 'a8ca536dd1d92abb7158d1d0bfe0b6eb8b16578e', 'bff7d4aab7dffe35cb8dc83d16ee36e0df2bc0ad', 0, 'America/New_York', 'aaa', 'aaa', 'aaa@aaa'),
(7, 1387691869, 0, 'a675ce34af4e681a37ed704f98d3e9cbe0614590', '434169d615edd593ab1ca8b1a36a0ea0a5953b8e', 1387767984, 'America/New_York', 'Rahul', 'Marda', 'rahul@gmail.com'),
(8, 1387725411, 0, '17d272c08bd52200018a1c93cf80820ab196606b', 'ce89d58e8742f68ce565611b1aa70f7315a22ab8', 1387767937, 'America/New_York', 'Navyata', 'Awasthi', 'navi@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
