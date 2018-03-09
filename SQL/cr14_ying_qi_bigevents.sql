-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 09. Mrz 2018 um 09:13
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr14_ying_qi_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `allEvent`
--

CREATE TABLE `allEvent` (
  `allEventId` int(11) NOT NULL,
  `eventName` varchar(60) NOT NULL,
  `eventImg` varchar(500) NOT NULL,
  `eventType` varchar(85) NOT NULL,
  `eventHour` datetime NOT NULL,
  `eventAdress` varchar(185) NOT NULL,
  `eventZipCode` int(55) NOT NULL,
  `eventCity` varchar(85) NOT NULL,
  `shortDescription` varchar(200) DEFAULT NULL,
  `longDescription` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `allEvent`
--

INSERT INTO `allEvent` (`allEventId`, `eventName`, `eventImg`, `eventType`, `eventHour`, `eventAdress`, `eventZipCode`, `eventCity`, `shortDescription`, `longDescription`) VALUES
(1, 'Dragon\'s Cry Festival V', 'https://cdn.kurier.at/img/100/206/335/dragnoy-1280x1280.jpg', 'concert', '2018-04-21 18:00:00', 'Hauffgasse 20', 1110, 'Vienna', 'The Dragon\'s Cry Festival, founded in 2013 by the Austrian metal acts Dragony and Siren\'s Cry, is dedicated to the presentation of high-quality rock and metal acts from Austria.', 'The fifth edition on April 21, 2018 is all about Hard Rock: in addition to the Power Metal of the hosts DRAGONY, both modern and classic styles of rock dominate the line-up of the DCF V:\r\n\r\nBUNCHA RASCALS\r\nhttps://www.facebook.com/BunchaRascals/\r\nThe young band was founded in 2013 and counts on classical hard rock bands like KISS and BON JOVI as well as more modern acts like FOO FIGHTERS and NICKELBACK. A rocking opening of the DCF V is guaranteed!\r\n\r\nBOUNDARY\r\nhttps://www.facebook.com/BoundaryMusic/\r\nThe five boys of BOUNDARY are not blank slips in the Austrian scene (for example guitarist Bernhard does not only play in the strings of the metallers of ESSEKER, but was also part of the ADDICTED TO ROCK team for a long time), but with her new project You want to know it again. Groovy, modern rock with stoner elements in the style of MONSTER MAGNET is on the program here, and at the DCF V, the fives will make their live debut! You can be curious!\r\n\r\nBLUEROF\r\nhttps://www.facebook.com/BLUEROF-1110808738941565/\r\nThe lady and gentlemen of BLUEROF go to work much more old-school: Here, classic rock and blues elements dominate the sound. A welcome and interesting change in the billing of the DCF V!\r\n\r\nSERGEANT STEEL\r\nhttps://www.sergeant-steel.com/\r\nAlready in 2014 they were the first time guests at the Dragon\'s Cry Festival. The albums has one with legendary producers such as Beau Hill (Ratt, Europe) and Michael Wagener (Metallica, Alice Cooper, Ozzy Osbourne ...) and others Produced locally in Nashville, it has many gigs at home and abroad and last but not least support shows for legendary acts like THE SWEET and the big DEEP PURPLE. \r\n\r\nMAYBURN\r\nhttp://www.mayburn.at\r\nThe boys of MAYBURN are currently probably the hottest iron Austria has in terms of modern rock in the fire. High-class albums, impressive live shows and a sympathetic appearance have brought MAYBURN in a very short time an official fanbase, of which the repeatedly highly attended and celebrated performances of the band eloquent testimonial. \r\n\r\nDragony\r\nhttp://www.dragony.net\r\nThe hosts of DRAGONY are also known in the domestic and international scene: Two strong albums and an EP are in the back catalog, you can appear on gigs with numerous genre greats of metal like BLIND GUARDIAN, SONATA ARCTICA, POWERWOLF, FIREWIND, FREEDOM CALL and many more. has been touring Europe together with Genrevater Kai Hansen and his GAMMA RAY, and can not least attend gigs at Austria \'s biggest festivals, the Danube Island Festival and Nova Rock. \r\n\r\nWe look forward to a varied evening with high-class rock and metal music \"made in Austria\"!');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `allEvent`
--
ALTER TABLE `allEvent`
  ADD PRIMARY KEY (`allEventId`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `allEvent`
--
ALTER TABLE `allEvent`
  MODIFY `allEventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
