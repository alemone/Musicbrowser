<?php
    class Controller{
        private $json;
        function __construct(){
                $this->getjson();
        }

        public function getjson(){
            $mysqli = new mysqli('localhost', 'root', '', 'musicbrowser');
            $myArray = array();
            if ($result = $mysqli->query("SELECT * from song order by bewertung desc limit 20;")) {
                $tempArray = array();
                while($row = $result->fetch_object()) {
                    $tempArray = $row;
                    array_push($myArray, $tempArray);
                }
            $this->json = json_encode($myArray);
            }
            $result->close();
            $mysqli->close();
        }

        public function display(){
            echo $this->json;
        }
    }
?>