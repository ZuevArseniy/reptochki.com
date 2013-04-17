-- Countries table
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone_code` int(10),
  `flag` varchar(100),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- Cities table
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` int(11) NOT NULL,
  `description` text,
  `lat` float(20,16),
  `lon` float(20,16),
  `zoom` int(2),
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

-- Cascade delete
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_const` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;