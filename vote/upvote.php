<?php
    class Controller{
        function __construct($id){
                $this->upvote($id);
        }

        public function upvote($id){
            $mysqli = new mysqli('localhost', 'root', '', 'musicbrowser');
            $mysqli->set_charset("utf8");
            
            $mysqli->query("UPDATE song Set bewertung = bewertung + 1 WHERE pk_song = $id;");

            $mysqli->close();
        }
    }
?>