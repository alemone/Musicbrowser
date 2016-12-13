<?php
$db = new mysqli('localhost', 'root', '');
if (!$db) {
    die('Verbindung fehlgeschlagen\n Error: ' . mysql_error());
}

$temp = $db->query("select * from song where pk_song = 1;");

$db->query("CREATE DATABASE IF NOT EXISTS Musicbrowser;");
$db->query("USE Musicbrowser;");
$db->query("CREATE TABLE IF NOT EXISTS `Musicbrowser`.`kuenstler`( 
                `pk_kuenstler` INT(5) NOT NULL AUTO_INCREMENT , 
                `name` VARCHAR(40) NOT NULL , 
                `beschreibung` VARCHAR(2048) NOT NULL , 
                `bildpfad` VARCHAR(55) NOT NULL , 
                PRIMARY KEY (`pk_kuenstler`)
	        ) ENGINE = InnoDB;");

$db->close();
?>