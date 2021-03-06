CREATE DATABASE IF NOT EXISTS Musicbrowser;

USE Musicbrowser;

CREATE TABLE IF NOT EXISTS `Musicbrowser`.`kuenstler` ( 
		`pk_kuenstler` INT(5) NOT NULL AUTO_INCREMENT , 
		`name` VARCHAR(40) NOT NULL , 
		`beschreibung` VARCHAR(2048) NOT NULL , 
		`bildpfad` VARCHAR(55) NOT NULL , 
		PRIMARY KEY (`pk_kuenstler`)
	) ENGINE = InnoDB;
	
CREATE TABLE IF NOT EXISTS `musicbrowser`.`album` ( 
		`pk_album` INT(5) NOT NULL AUTO_INCREMENT , 
		`name` VARCHAR(40) NOT NULL , 
		`pfad` VARCHAR(55) NOT NULL , 
		`fk_kuenstler` INT(5) NOT NULL , 
		PRIMARY KEY (`pk_album`),
		FOREIGN KEY (fk_kuenstler) REFERENCES kuenstler(pk_kuenstler)
	) ENGINE = InnoDB;
	
CREATE TABLE `musicbrowser`.`song` ( 
		`id_song` INT(5) NOT NULL AUTO_INCREMENT , 
		`name` VARCHAR(40) NOT NULL , 
		`fk_kuenstler` INT(5) NOT NULL , 
		`fk_album` INT(5) NOT NULL , 
		`bild` VARCHAR(55) NOT NULL , 
		`bewertung` INT(4) NOT NULL , 
		`youtubeLink` INT(55) NOT NULL , 
		PRIMARY KEY (`id_song`),
		FOREIGN KEY (fk_kuenstler) REFERENCES kuenstler(pk_kuenstler),
		FOREIGN KEY (fk_album) REFERENCES album(pk_album)
		) ENGINE = InnoDB;