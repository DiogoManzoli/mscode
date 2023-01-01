CREATE SCHEMA IF NOT EXISTS `msavalie` DEFAULT CHARACTER SET utf8 ;

DROP TABLE IF EXISTS `msavalie`.`avaliacao` ;

CREATE TABLE `msavalie`.`avaliacao`(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    stars VARCHAR(1) NOT NULL,
    text VARCHAR(255) NULL
);
CREATE SCHEMA IF NOT EXISTS `msavalie` DEFAULT CHARACTER SET utf8 ;

DROP TABLE IF EXISTS `msavalie`.`avaliacao` ;

CREATE TABLE `msavalie`.`avaliacao`(
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    stars VARCHAR(1) NOT NULL,
    text VARCHAR(255) NULL
);
