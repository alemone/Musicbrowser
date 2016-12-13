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
            if ($result = $mysqli->query("select * from album;")) {
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