-- DROP TABLE `times`;
CREATE TABLE `times` (
  `id` int(10) unsigned  NOT NULL AUTO_INCREMENT,
  `nome`  VARCHAR(255) NOT NULL DEFAULT 'Time',
  `fundacao`         DATE,
  `titulos`     int(10) unsigned  NOT NULL DEFAULT '0',
  `created` DATETIME ,
  `modified` DATETIME, 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `times` (nome, fundacao, titulos, created, modified) VALUES 
	('Clube Campeão', '1945-12-12', 10, now(), now()),
	('Perebas FC', '1960-12-12', 1,now(), now()),
	('Tabajara FC', '1945-12-12', 2,now(), now());
