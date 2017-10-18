-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : gallotbeza972.mysql.db
-- Généré le :  mer. 18 oct. 2017 à 13:08
-- Version du serveur :  5.6.34-log
-- Version de PHP :  7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gallotbeza972`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
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
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `auteur`, `titre`, `chapo`, `contenu`, `dateAjout`, `dateModif`) VALUES
(1, 'Benjamin', 'FORMATIONS', 'En formation avec OpenClassrooms afin de devenir un développeur spécialisé dans l\'utilisation de PHP avec le framework Symfony.', 'Armatum postea quis omnis illa reliqua ornanemta custodita Asiam impetus atque bellisque et illa vero illi urbis erumpentem Asiam illa exhausti repulsum urbem tum sanctissime affervescentem et in ornatissimam affervescentem inquam totumque ore refertissimam maximis totumque omnis reliqua cervicibus affervescentem Quae signis tenuerunt omnis Mithridaticos atque quis quis fuisse cervicibus reliqua custodita armatum totumque reliqua Byzantiorum ornanemta signis exhausti sanctissime Asiam armatum quis custodita interclusum atque ore signis ore totumque Byzantii ore in omnis quis sanctissime illi armatum suis impetus armatum interclusum reliqua atque reliqua postea ignorat illa tum ornanemta sanctissime sustinerent omnis ornanemta et totumque signis inquam inquam ignorat.', '2017-10-03 10:00:00', '2017-10-17 09:44:18'),
(2, 'Benjamin ', 'BOOTSTRAP', 'Créer un site web responsive avec l\'outil Bootstrap!', 'Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius, quod idem adipisci uterque non posset. Quod si qui longius in amicitia provecti essent, tamen saepe labefactari, si in honoris contentionem incidissent; pestem enim nullam maiorem esse amicitiis quam in plerisque pecuniae cupiditatem, in optimis quibusque honoris certamen et gloriae; ex quo inimicitias maximas saepe inter amicissimos exstitisse.\r\n\r\nRogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.\r\n\r\nSuperatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis, quam mediam navigabile flumen Calycadnus interscindit.', '2017-10-03 15:00:00', '2017-10-17 09:43:50'),
(3, 'Benjamin', 'WORDPRESS', 'Utiliser le CMS Wordpress afin de livrer un site Web dynamique à un client!', 'Utilisation d\'elementor, des plugins, des templates.\r\nNec sane haec sola pernicies orientem diversis cladibus adfligebat. Namque et Isauri, quibus est usitatum saepe pacari saepeque inopinis excursibus cuncta miscere, ex latrociniis occultis et raris, alente inpunitate adulescentem in peius audaciam ad bella gravia proruperunt, diu quidem perduelles spiritus inrequietis motibus erigentes, hac tamen indignitate perciti vehementer, ut iactitabant, quod eorum capiti quidam consortes apud Iconium Pisidiae oppidum in amphitheatrali spectaculo feris praedatricibus obiecti sunt praeter morem.', '2017-10-03 15:30:00', '2017-10-17 09:43:19'),
(4, 'Benjamin', 'GITHUB', 'Travailler en équipe avec l\'outil Github', 'Travailler en équipe sur un projet avec la méthodologie agile.\r\nUxor suetos fratris filio supra vel temporis grave turgida quam insontibus discentes quaedam adsidua Megaera nihil incentivum quaedam pater turgida Megaera inflammatrix maritus temporis inflammatrix acerbitati maritus uxor versutosque uxor adfligebant turgida rumigerulos ad nocendum et temporis quam Megaera antehac nocendum adsidua germanitate modum male supra ad grave quaedam accesserat.', '2017-10-03 15:37:00', '2017-10-17 09:42:49'),
(5, 'Benjamin ', 'SQL', 'Créer une base de donnée SQL et Requêter dessus', 'Utilisation de MySQL.\r\nAdministrer la base de donnée.\r\nLimes pelagi cum cum Macedonis ripis post Euphratis quam rex indicat regna quam post auxit efficaciae rex magnum Macedonis efficaciae cum indicat Macedonis plagam laeva Euphratis occupatam dextra rex quam.', '2017-10-03 16:00:00', '2017-10-17 09:42:04'),
(30, 'Benjamin', 'HOBBY', 'Etre en forme avec le Sport!', 'Quoque cruentis vel quoque ingentia laetabatur perfusorumque vetitis laetabatur perfusorumque latens diritatis diritatis concidentium sanguine nec certaminibus septem obscurum ingentia eius vicissim in cruentis autem sanguine laetabatur ut in laetabatur pugilum sanguine nec et ingentia concidentium aliquotiens pugilum sex vel circo laetabatur pugilum nec diritatis quoque vicissim perfusorumque se delectabatur.', '2017-10-17 09:45:43', '2017-10-17 09:46:53'),
(31, 'Benjamin', 'Programmé Orienté Objet', 'Apprentissage de la POO et MVC avec le langage de programmation PHP.', 'Non ergo erunt homines deliciis diffluentes\r\nEx his quidam aeternitati se commendari posse per\r\nDumque ibi diu moratur commeatus opperiens, quorum\r\nEx turba vero imae sortis et paupertinae in\r\nQuibus occurrere bene pertinax miles explicatis\r\n', '2017-10-17 11:27:40', '2017-10-17 11:27:40');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
