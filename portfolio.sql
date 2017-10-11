-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2017 at 04:09 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(5) NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `chapo` varchar(300) NOT NULL,
  `contenu` text NOT NULL,
  `dateAjout` datetime NOT NULL,
  `dateModif` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `auteur`, `titre`, `chapo`, `contenu`, `dateAjout`, `dateModif`) VALUES
(1, 'Benjamin', 'FORMATIONS', 'En formation avec OpenClassrooms afin de devenir un développeur spécialisé dans l\'utilisation de PHP avec le framework Symfony.', '2017 D', '2017-10-03 10:00:00', '2017-10-03 10:05:00'),
(2, 'Benjamin ', 'BOOTSTRAP', 'Créer un site web responsive avec l\'outil Bootstrap!', 'R', '2017-10-03 15:00:00', '2017-10-03 15:00:00'),
(3, 'Benjamin', 'WORDPRESS', 'Utiliser le CMS Wordpress afin de livrer un site Web dynamique à un client!', 'Utilisation d\'elementor, des plugins, des templates............', '2017-10-03 15:30:00', '2017-10-03 15:30:00'),
(4, 'Benjamin', 'GITHUB', 'Travailler en équipe avec l\'outil Github', 'Travailler en équipe sur un projet avec la méthodologie agile.', '2017-10-03 15:37:00', '2017-10-03 15:37:00'),
(5, 'Benjamin ', 'SQL', 'Créer une base de donnée SQL et Requêter dessus', 'Utilisation de MySQL.\r\nAdministrer la base de donnée', '2017-10-03 16:00:00', '2017-10-03 16:00:00'),
(6, 'Benjamin ', 'Hobby', 'Le bien-être est important pour pouvoir être épanoui et concentré dans son travail.', 'Je pratique différentes activités sportives comme le running, le yoga et le surf. J\'aime prendre le temps également de lire, d\'aller au ciné©ma et de m\'intéresser à  la musique.\r\nCes activités me permettent d\'être en forme physiquement comme mentalement. Il est important d\'avoir des activités variées afin d\'avoir un bon équilibre entre le travail et la vie personnelle.', '2017-10-04 10:46:38', '2017-10-04 10:46:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
