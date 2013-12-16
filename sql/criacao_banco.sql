

CREATE TABLE `times` (
  `id` int(10) unsigned  NOT NULL AUTO_INCREMENT,
  `nome`  VARCHAR(255) NOT NULL DEFAULT 'Time',
  `fundacao`         DATE,
  `titulos`     int(10) unsigned  NOT NULL DEFAULT '0',
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `pessoas` (
  `id` int(10) unsigned  NOT NULL AUTO_INCREMENT,
  `nome`  VARCHAR(255) NOT NULL,
  `cpf` CHAR(11) NOT NULL ,
  `data_de_nascimento`   DATE,
  `salario` NUMERIC(7,2) NOT NULL DEFAULT 0,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `atletas` (
  `id` int(10) unsigned  NOT NULL AUTO_INCREMENT,
  `time_id`  int(10) unsigned NOT NULL,
  `pessoa_id` int(10) unsigned NOT NULL ,
  `altura`   NUMERIC(2,2),
  `peso` NUMERIC(3,2),
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `atleta_times_fk` FOREIGN KEY (`time_id`) REFERENCES times (`id`)
     ON DELETE CASCADE   -- On DELETE reference action
     ON UPDATE CASCADE,   -- On UPDATE reference action
 CONSTRAINT `atletas_pessoas_fk` FOREIGN KEY (`pessoa_id`) REFERENCES pessoas (`id`)
     ON DELETE CASCADE   -- On DELETE reference action
     ON UPDATE CASCADE   -- On UPDATE reference action
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `treinadores` (
  `id` int(10) unsigned  NOT NULL AUTO_INCREMENT,
  `time_id`  int(10) unsigned NOT NULL,
  `pessoa_id` int(10) unsigned NOT NULL ,
  `anos_de_experiencia`   INT(10),
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `treinadores_times_fk` FOREIGN KEY (`time_id`) REFERENCES times (`id`)
     ON DELETE CASCADE   -- On DELETE reference action
     ON UPDATE CASCADE,   -- On UPDATE reference action
 CONSTRAINT `treinadores_pessoas_fk` FOREIGN KEY (`pessoa_id`) REFERENCES pessoas (`id`)
     ON DELETE CASCADE   -- On DELETE reference action
     ON UPDATE CASCADE   -- On UPDATE reference action
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

