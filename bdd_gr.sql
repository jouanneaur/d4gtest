-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 11 nov. 2019 à 14:53
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_gr`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(10) NOT NULL,
  `rep_id` int(5) DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `saut_id` int(10) DEFAULT NULL,
  `question_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`question_id`, `rep_id`, `parent_id`, `saut_id`, `question_text`) VALUES
(1, 1, NULL, NULL, 'In which sector of activity is your company active? (linked with your APE code)'),
(2, 2, NULL, NULL, 'What is the number of employees in your company on 18/12/31 ?'),
(3, 3, NULL, NULL, 'What is the turnover of your company in the last fiscal year? (or annual budget for Public sector)'),
(4, 4, NULL, 12, 'Do you develop digital services for internal or external use (sales to customers)?'),
(5, 4, NULL, NULL, 'What is the number of users of your digital services?'),
(6, 5, 4, NULL, 'Do you apply the rules and best practices for digital accessibility?'),
(7, 5, 4, NULL, 'Have you optimized the states and printouts in your application tools (reduced number of pages when printing, ink consumption ...)'),
(8, 5, 4, NULL, 'Do you integrate the principles of the ecodesign of digital services?'),
(9, 5, 4, NULL, 'Do you use a modular application architecture?'),
(10, 5, 4, NULL, 'Do you do a design review at the end of your application\'s development?'),
(11, 18, NULL, NULL, 'What is the overall storage volume of your corporate data (centralized on external hard drives, centralized server, NAS, SAN ...) in Terabytes (TB) useful?'),
(12, 6, NULL, 50, 'Do you have a server or do you only work with one or more workstations?'),
(13, 7, 12, NULL, 'Do you have a dedicated room, simple room or cupboard with bay dedicated to your IT infrastructure?'),
(14, 8, 13, 31, 'Is your computer room in house or at a host?'),
(15, 19, 13, NULL, 'What is the total area of your computer rooms (excluding technical infrastructure *)? (in m2)'),
(16, 9, 13, NULL, 'Do you know the PUE * of your Data Center?'),
(17, 10, 13, NULL, 'What is the rate of charge or energy use of your computer rooms?'),
(18, NULL, 13, NULL, 'Have you led or are you planning actions to optimize your infrastructure? Especially :'),
(19, 5, 18, NULL, 'The purchase of non-IT equipment from IT rooms (air conditioning, air treatment, inverters, etc.) according to energy efficiency criteria'),
(20, 5, 18, NULL, 'Implementing the good practices of the \'European Code of Conduct for DataCenter\'?'),
(21, 5, 18, NULL, 'Data center PUE tracking'),
(22, 5, 18, NULL, 'Regular monitoring of environmental indicators of computer rooms'),
(23, 5, 18, NULL, 'Environmental impact analysis of the datacenter in life cycle approach'),
(24, 5, 18, NULL, 'Optimizing the architecture and layout of rooms'),
(25, 5, 18, NULL, 'The urbanization of halls in hot / cold aisles'),
(26, 5, 18, NULL, 'Containment of air flows (corridors)'),
(27, 5, 18, NULL, 'The use of natural cooling sources (freecooling)'),
(28, 5, 18, NULL, 'Implementation of a heat recovery system for computer rooms (heating)'),
(29, 5, 18, NULL, 'The set temperature in the cold corridor remains higher than 24 °'),
(30, 5, 18, 31, 'The choice of a modular datacenter architecture'),
(31, NULL, NULL, NULL, 'Have you led or are you planning actions to optimize your infrastructure? Especially :'),
(32, 5, 31, NULL, 'Suspending network equipment'),
(33, 5, 31, NULL, 'Pooling physical equipment'),
(34, 5, 31, NULL, 'Uninstalling unnecessary infrastructure'),
(35, 5, 31, NULL, 'Traceability of material elements (CMDB)'),
(36, 5, 31, NULL, 'The correct sizing of the servers in relation to their use'),
(37, 5, 31, NULL, 'Give priority to ASHRAE 2 compatible equipment'),
(38, 5, 31, NULL, 'A procedure for provisioning and de-provisioning data-processing equipment in datacenters'),
(39, 11, NULL, 42, 'Do you know the number of physical servers and virtual servers in your company?'),
(40, NULL, NULL, NULL, 'How many physical servers do you have?'),
(41, NULL, NULL, NULL, 'How many virtual servers do you have?'),
(42, 20, NULL, NULL, 'What will be the evolution of your number of physical servers for 2019? (in% or quantity)'),
(43, 20, NULL, NULL, 'What will be the evolution of your number of virtual servers for 2019? (in% or quantity)'),
(44, 5, NULL, NULL, 'Has your company appointed a Green IT Manager / Digital Manager?'),
(45, 5, NULL, NULL, 'Do you have a responsible digital strategy broken down into an action plan?'),
(46, 5, NULL, NULL, 'Is Green IT a topic integrated into your CSR strategy?'),
(47, 12, NULL, NULL, 'Do you regularly evaluate the environmental impacts of your information system?'),
(48, 5, NULL, NULL, 'Do you have a team of competent referees on the topics of Green IT?'),
(49, 5, NULL, NULL, 'Have you integrated Green IT into your business strategy'),
(50, NULL, NULL, NULL, 'Do you have those equipments in your compagny:'),
(51, 13, 50, NULL, 'Fixed stations, workstations'),
(52, 13, 50, NULL, 'Laptops, digital tablets'),
(53, 13, 50, NULL, 'Small printers (<15kg, potentially used by a household)'),
(54, 13, 50, NULL, 'Flat screen monitors'),
(55, 13, 50, NULL, 'Other flat screens (TV, projection screen, digital board ...)'),
(56, 13, 50, NULL, 'CRT monitors (monitors or other)'),
(57, 13, 50, NULL, 'Video projectors'),
(58, 13, 50, NULL, 'Mobile phones'),
(59, 13, 50, NULL, 'Fixed telephones (standalone not connected to such a standard)'),
(60, 13, 50, NULL, 'Digital cameras'),
(61, 13, 50, NULL, 'Hard Disk Devices, Storage, Backup'),
(62, 4, NULL, 70, 'Do you have other devices in your company?'),
(63, NULL, NULL, NULL, 'Regarding other devices, do you have in your company:'),
(64, 13, 63, NULL, 'Keyboards'),
(65, 13, 63, NULL, 'Mouse'),
(66, 13, 63, NULL, 'Graphic tablets'),
(67, 13, 63, NULL, 'Scanners'),
(68, 13, 63, NULL, 'Speakers'),
(69, 13, 63, NULL, 'Office automation'),
(70, 22, NULL, NULL, 'Do you know the consumption of your workstation in kWh per year?'),
(71, 5, NULL, NULL, 'Do you track the energy consumption of your compagny activities?'),
(72, 22, NULL, NULL, 'Do you know the share of IT and IT equipment in your company\'s total energy consumption?'),
(73, 5, NULL, NULL, 'Have you set up a power management system? (automatic shutdown / shutdown of workstations)'),
(74, 5, NULL, NULL, 'Do you use copiers from a repackaging industry (second-hand / second-hand)?'),
(75, 5, NULL, NULL, 'Do you consolidate individual printers to shared printers?'),
(76, 5, NULL, NULL, 'Have you set up an identification system on printers (to trigger printing)?'),
(77, 23, NULL, NULL, 'What is the average life of your professional copier / MFP *?'),
(78, NULL, NULL, NULL, 'Are your printers set by default in eco mode? Especially :'),
(79, 5, 78, NULL, 'Energy saving (Automatic standby)'),
(80, 5, 78, NULL, 'Black and white by default'),
(81, 5, 78, NULL, 'Default duplex'),
(82, 5, 78, NULL, 'Default draft mode'),
(83, 14, NULL, NULL, 'What is the number of pages printed / day / employee? (A4 equivalent)'),
(84, 24, NULL, NULL, 'Can you specify the number of cartridges / toners:'),
(85, 15, NULL, NULL, 'Do you organize the separate collection of waste cartridges / toners?'),
(86, 16, NULL, NULL, 'Do you prefer the use of recycled paper?'),
(87, 17, NULL, NULL, 'Do you choose certified paper?'),
(88, 5, NULL, NULL, 'Do you organize the separate collection of waste paper for recycling?');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `rep_id` int(5) NOT NULL,
  `r0` varchar(100) DEFAULT NULL,
  `r1` varchar(100) DEFAULT NULL,
  `r2` varchar(100) DEFAULT NULL,
  `r3` varchar(100) DEFAULT NULL,
  `r4` varchar(100) DEFAULT NULL,
  `r5` varchar(100) DEFAULT NULL,
  `r6` varchar(100) DEFAULT NULL,
  `r7` varchar(100) DEFAULT NULL,
  `r8` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`rep_id`, `r0`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`) VALUES
(1, 'Industry', 'Business', 'Information and communication', 'Other services activity (financial, agricultural activities ... )', 'Contruction', 'Public sector', 'Specialized', 'Scientific and Technical or Administrative and Support Services Activities', 'Real State'),
(2, '0', '1 to 2', '3 to 9', '10 to 49', '50 to 49', '250 to 4999', 'More than 5000', NULL, NULL),
(3, '0 to 100K Euros', '100 to 500K euros', '500 to 2 M euros', '2 to 10 M euros', '10 to 50 M euros', 'More than 50 M euros', NULL, NULL, NULL),
(4, 'Yes', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Yes', 'No', 'I don\'t know', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'We work with workstation (s), without centralized physical server', 'We have (at least) a centralized physical server', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'A closet or a room without any specific system', 'A dedicated room', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Internal', 'Host Member of the European Code of Conduct for Datacenters', 'Non-adhering Host of the European Code of Conduct for Data Centers', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Less than 1,6', 'Between 1,6 and 2,1', 'More than 2,1', 'I don\'t know', NULL, NULL, NULL, NULL, NULL),
(10, '100% - 90%', '90% - 60%', 'Less than 60%', 'I don\'t know', NULL, NULL, NULL, NULL, NULL),
(11, 'No', 'I do not want to answer', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Yes partially, including only equipment present in the company', 'Yes totally, including our internal equipment and services hosted by third parties', 'No', 'I do not know', NULL, NULL, NULL, NULL, NULL),
(13, 'Used', 'Not used functional', 'Neither used nor functional', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Less than 10', 'From 10 to 20', 'From 20 to 30', 'More than 30', 'I don\'t know', NULL, NULL, NULL, NULL),
(15, 'Yes, to a repackaging industry', 'Yes, towards a recycling channel (destruction)', 'No no separate collection device is planned', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Yes, our paper is made from virgin paste', 'Yes, mixed paper', 'Yes, 100% recycled', 'I\'m not paying attention', NULL, NULL, NULL, NULL, NULL),
(17, 'Yes, FSC', 'Yes, PEFC', 'Yes, Blue Angel', 'Yes, European Label', 'Yes, other', 'I\'m not paying attention', NULL, NULL, NULL),
(18, 'I don\'t know', 'I do not want to answer', 'To', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'm²', 'I don\'t know', 'I do not want to answer', NULL, NULL, NULL, NULL, NULL, NULL),
(20, '%', 'In quantity', 'I do not want to answer', 'I don\'t know', NULL, NULL, NULL, NULL, NULL),
(21, 'Yes (please specify how much in kWh / year)', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Yes (please specify how much in %)', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'I do not know', 'Do not want to answer', 'years (please specify)', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Cartridges used a year', 'Cartridges stored in the average business', 'Toners used a year', 'Toners stored in the average business', NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `ID_rep` (`rep_id`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`rep_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `rep_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`rep_id`) REFERENCES `reponses` (`rep_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
