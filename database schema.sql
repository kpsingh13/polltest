--
-- Database: `pollbooth`
--

CREATE DATABASE pollbooth;

-- --------------------------------------------------------

--
-- Table structure for table `pollanswere`
--

DROP TABLE IF EXISTS `pollanswere`;
CREATE TABLE IF NOT EXISTS `pollanswere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(100) DEFAULT NULL,
  `votes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pollanswere`
--

INSERT INTO `pollanswere` (`id`, `author_name`, `votes`) VALUES
(1, 'Miguel de Cervantes', 6),
(2, 'Charles Dickens', 4),
(3, 'J.R.R. Tolkien', 9),
(4, 'Antoine de Saint-Exuper', 2);
COMMIT;