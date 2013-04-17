SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL ,
  `type` varchar(10) ,
  `description` varchar(200),
  `size` float ,
  PRIMARY KEY (`id`),
  KEY `filename` (`filename`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

CREATE TABLE IF NOT EXISTS `studios_images` (
  `studio_id` int(11) unsigned NOT NULL,
  `image_id` int(11) unsigned NOT NULL,
  KEY `studio_id` (`studio_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;