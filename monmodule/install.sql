CREATE TABLE IF NOT EXISTS `PREFIX_helperlist` (
  `id_comment` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_title` varchar(50) NULL,
  `id_contenu` text NOT NULL,
  `date_ajout` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  PRIMARY KEY (`id_comment`),
) ENGINE=ENGINE_TYPE  DEFAULT CHARSET=utf8
AUTO_INCREMENT=1;