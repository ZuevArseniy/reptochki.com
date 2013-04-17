SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
CREATE TABLE IF NOT EXISTS `phones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `studio_id` int(11) unsigned NOT NULL ,
  `code_id` int(11) unsigned NOT NULL ,
  `operator_id` int(11) unsigned NOT NULL ,
  `number` int(16) unsigned NOT NULL ,
  PRIMARY KEY (`id`),
  KEY `studio_id` (`studio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;