<?php
    class Controller{
        private $json;
        function __construct(){
                $this->getjson();
        }

        public function getjson(){
            $mysqli = new mysqli('localhost', 'root', '', 'musicbrowser');
            $mysqli->set_charset("utf8");
            $myArray = array();
            if ($result = $mysqli->query("select song.pk_song, song.name, song.bild, song.bewertung, song.youtubeLink, kuenstler.name AS 'kuenstler' from song LEFT JOIN kuenstler ON song.fk_kuenstler = kuenstler.pk_kuenstler;")) {
                $tempArray = array();
                while($row = $result->fetch_object()) {
                    $tempArray = $row;
                    array_push($myArray, $tempArray);
                }
            $this->json = json_encode($myArray, JSON_UNESCAPED_UNICODE);
            }
            $result->close();
            $mysqli->close();
        }

        public function display(){
            echo $this->json;
        }
    }
?>