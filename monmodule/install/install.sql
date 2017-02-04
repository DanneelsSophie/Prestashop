CREATE TABLE IF NOT EXISTS `PREFIX_helperlist` (
  `id_avis` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_titre` varchar(50) NULL,
  `id_contenu` text NOT NULL,
  `date_ajout` datetime,
  `date_update` datetime ,
  PRIMARY KEY (`id_avis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;