-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql212.byetcluster.com
-- Generation Time: Apr 24, 2019 at 06:48 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b8_22980538_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `userposts`
--

CREATE TABLE IF NOT EXISTS `userposts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `academicyear` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Comments` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=178 ;

--
-- Dumping data for table `userposts`
--

INSERT INTO `userposts` (`id`, `username`, `academicyear`, `Name`, `Surname`, `Comments`, `photo`) VALUES
(165, 'Elona', '2', 'Elona', 'Gjini', 'Hello amiciðŸ˜‡', 'defaultfemale.png'),
(66, 'aritazo', '2', 'Arita', 'Zogjani', 'hello', 'IMG_20190122_142523_778.jpg'),
(60, 'ilirperolli', '2', 'Ilir', 'Perolli', 'Amici', 'IMG_20181026_231538_108.jpg'),
(62, 'Bujan', '2', 'Bujan', 'Krasniqi', 'ðŸ§Ÿâ€â™‚ï¸', 'defaultmale.png'),
(153, 'arianitjaka', '2', 'Arianit', 'Jaka', 'Ju rreni 1 dhe rreni 2 shÃ«nohuni nkÃ«t liste', '20190411_113221.jpg'),
(157, 'arianitjaka', '2', 'Arianit', 'Jaka', 'A jeni gjalle a jo?', '20190411_113221.jpg'),
(115, 'Bujan', '2', 'Bujan', 'Krasniqi', 'Arianit mos ja futðŸ˜‚', 'defaultmale.png'),
(130, 'ilirperolli', '1', 'Ilir', 'Perolli', 'Test', 'IMG_20181026_231538_108.jpg'),
(132, 'JetaMacula', '1', 'Jeta', 'Macula', '1 2 1 2', 'defaultfemale.png'),
(154, 'ilirperolli', '2', 'Ilir', 'Perolli', 'ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚', 'IMG_20181026_231538_108.jpg'),
(158, 'ilirperolli', '2', 'Ilir', 'Perolli', 'Hell yeah', 'IMG_20181026_231538_108.jpg'),
(159, 'arianitjaka', '2', 'Arianit', 'Jaka', 'Thash mes meta vetem', '20190411_113221.jpg'),
(168, 'ilirperolli', '2', 'Ilir', 'Perolli', 'ðŸ˜‚ðŸ˜‚', 'IMG_20181026_231538_108.jpg'),
(169, 'arianitjaka', '2', 'Arianit', 'Jaka', 'Kolege a jeni ka vini tpremten?', '20190411_113221.jpg'),
(164, 'ilirperolli', '2', 'Ilir', 'Perolli', 'Po nes kemi', 'IMG_20181026_231538_108.jpg'),
(167, 'arianitjaka', '2', 'Arianit', 'Jaka', 'Hajde ma gjalle', '20190411_113221.jpg'),
(170, 'ilirperolli', '2', 'Ilir', 'Perolli', 'Po kem po nuk majti dishka interesant', 'IMG_20181026_231538_108.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fbuser` varchar(255) DEFAULT NULL,
  `academicyear` int(10) NOT NULL,
  `age` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `verification` int(10) DEFAULT '0',
  `userphotos` varchar(255) DEFAULT 'default-user.png',
  `activity` int(11) NOT NULL,
  `notification` int(11) NOT NULL,
  `notification_uploads` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Surname`, `username`, `password`, `fbuser`, `academicyear`, `age`, `email`, `gender`, `verification`, `userphotos`, `activity`, `notification`, `notification_uploads`) VALUES
(60, 'Dorentina', 'Radi', 'Dorentina Radi', '$2y$10$IaJ2yY0nI4MArmIMH2MhXuvdnPbsoDR4WAwGym91TcCoX0CarCNam', 'dorentina.radii', 1, '18', 'dorentina.radi01@gmail.com', '0', 1, 'defaultfemale.png', 5, 0, 0),
(61, 'Arianit', 'Jaka', 'arianitjaka', '$2y$10$9Eiaso2kcq8fd.A.zrA6MeL2MeYRDNYQHoLx6/kSKmHEC/75F7cSy', 'arianitjaka', 2, '20', 'arianit@gmail.com', '1', 1, '20190411_113221.jpg', 33, 4, 0),
(58, 'Albi', 'Kusari', 'K', '$2y$10$vSyte1bGiSLLXHS1KYhEaOvLP0kDn.dVgG7a35ksvsURRXrek.5GC', 'Albik', 2, '20', 'albi_kusa@hotmail.com', '1', 1, 'received_406176453475641.png', 151, 8, 1),
(57, 'Rasim', 'Hamitaga', 'rasimhamitaga', '$2y$10$/kdNahUvrJoHRzZfDts1DOiJRxeo2uaZ4yPHCYEHCJBk7dD8re0GC', 'rasim.hamitaga.1', 2, '19', 'rasimhamitaga1@gmail.com', '1', 1, 'defaultmale.png', 0, 47, 22),
(55, 'Mellinda', 'Haliti', 'Mellinda', '$2y$10$PF8ovF6hmUGIQWBJDUsgM.vAnpfr3V6EgPlbmRX7h3NpbFbX4GIF2', 'mellinda.haliti.90', 2, '20', 'halitimellinda7@gmail.com', '0', 1, 'defaultfemale.png', 0, 47, 22),
(54, 'Lirim', 'Lepraj', 'Lila', '$2y$10$epoUecwrXEwQirlp5.7r3e7YanDq4pq2ITqpHHh8wV86VEX9V2QGu', 'asxlila', 2, '19', 'leprajlirim@gmail.com', '1', 1, 'defaultmale.png', 0, 47, 22),
(53, 'Ermal', 'Krasniqi', 'ermalkrassniqi', '$2y$10$CqJgl12BkuDtw6wTTdRYv..fxx153WGh4L/.8SG3A/qKrsy.I.fPC', 'malikrass', 2, '19', 'ermal.krasniqi@gmail.com', '1', 1, 'defaultmale.png', 0, 47, 22),
(52, 'Ermal', 'Hoti', 'ermalhoti', '$2y$10$yd1ElfELTqXIx4cN/KA.8eKpCRzfGXXFl9ijS7Hp0G7kk0qi9zkqy', 'ermal.hoti.77', 2, '20', 'ermalhoti44@gmail.com', '1', 1, 'defaultmale.png', 0, 47, 22),
(51, 'Blerta', 'Osmani', 'blertaosmani', '$2y$10$6/3ns9nBXD606jL3.ntxX.WEpTp5sCO4YYFVd1B.YG/mkeeycUxH2', 'blertaosmani99', 2, '19', 'blertaosmani90@gmail.com', '0', 1, 'defaultfemale.png', 0, 47, 22),
(50, 'Arita', 'Zogjani', 'aritazo', '$2y$10$7VyPWbLWZWXdQEqKBx1ls.OJkFtmTGFry6ca/b0wTykC5ol5wnkFy', 'arita.zogjani.50', 2, '19', 'aritazo@outlook.com', '0', 1, 'IMG_20190122_142523_778.jpg', 1, 23, 15),
(49, 'Ilir', 'Perolli', 'ilirperolli', '$2y$10$KCDQ6IkykqAGXs7hAjmdjeZnxfIkwtfIK4Jyxn6LAxiB0.0zgBwcq', 'ilirperollii', 2, '19', 'ilir_perolli@live.com', '1', 1, 'IMG_20181026_231538_108.jpg', 378, 0, 0),
(64, 'Jeta', 'Macula', 'JetaMacula', '$2y$10$7CRyGX0W0LFzGPzKSDIPXeHfX9pa8yR.YAYVRFa1XDhK/M1BrB10q', 'jeta.macula', 1, '18', 'jeta_macula@hotmail.com', '0', 1, 'defaultfemale.png', 4, 0, 0),
(66, 'Bujan', 'Krasniqi', 'Bujan', '$2y$10$8UIy4L8yiHMnwL4ZKifqSubYLG2ekx.a5aIlhbGMUcNS4qSxNyJA.', '100007094325796', 2, '20', 'buja@gmail.com', '1', 1, 'defaultmale.png', 1, 47, 22),
(68, 'Elmedin', 'Krasniqi', 'elmedinkrasniqi', '$2y$10$Jy1b2aEPMSExV5LObjlEEui6CxaKsF1TUIK9bKQ7OvMJDwx2uGW7G', 'dini.r.krasniqi', 2, '20', 'krasniqidinni@gmail.com', '1', 1, 'defaultmale.png', 3, 41, 22),
(70, 'Elona', 'Gjini', 'Elona', '$2y$10$MSghNLUr3H7X34bzKjvxd.HXrZHrKbQjwra/XawnBtDYGmrVNCKfu', 'gjini.elona', 2, '20', 'elonagjini99@gmail.com', '0', 1, 'defaultfemale.png', 6, 8, 2),
(73, 'Edina', 'Dilji', 'Edina', '$2y$10$9iLp.uH38JHPbxXogZ25Wuts36PCpNwVimCbRmI0MaSgSXo7bVXmK', 'edina.dilji.5', 2, '20', 'edina_198@hotmail.com', '0', 1, 'defaultfemale.png', 13, 0, 0),
(75, 'Suat', 'Miftari', 'Suatmiftari', '$2y$10$.75Bp5xTDUOJUpt7NBhUYep8DT.PG5VFJDxz3lX5WKyVLg35rGmge', 'Suat Miftari', 2, '19', 'miftarisuat@gmail.com', '1', 1, 'defaultmale.png', 1, 15, 11),
(86, 'Leonard', 'Morina', 'Leonardi98', '$2y$10$XF5UOeEgsSvFGpLs89VSRuwFEVXQm3f88PiUr.zq7iB/FoUyIAGRa', NULL, 2, '21', 'leo.morina19@hotmail.com', '1', 1, 'defaultmale.png', 2, 4, 0),
(80, 'Gentrit', 'Morina', 'genti2019', '$2y$10$8tejSt3Xz.RSdogLYhEU3u51nllW.tj8kdve..ICJD6lgkfGCIKGe', 'genniius', 3, '21', 'gentrit.morina19@gmail.com', '1', 1, 'defaultmale.png', 3, 0, 0),
(79, 'dielli', 'gashi', '@gashi1', '$2y$10$zw5UzdwDR/mcA6EK.L73SuIHNLnDZBAvDdgTJzel0Cy.Jh5bGUuki', '@gashii', 3, '20', 'usernam1@gmail.com', '1', 1, 'defaultmale.png', 0, 0, 2),
(82, 'Fatlinda', 'Elshani', 'Fatlinda', '$2y$10$vlMhw0vRIBD4HuIuYKmp7.x.OEhOdLiILTnYYy0yDFzDoYmNVjljq', 'fatlinda.elshani', 1, '18', 'e.fatlinda@outlook.com', '0', 1, 'defaultfemale.png', 0, 2, 3),
(85, 'Admir', 'Likkola', 'Admir31', '$2y$10$MGOYLQFcYVWC92tTqiKnfuLdwC57bOpGxfUUGXlN9XlBFPmQn/hDG', NULL, 3, '31', 'ad.likkola@gmail.com', '1', 1, 'defaultmale.png', 0, 0, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
