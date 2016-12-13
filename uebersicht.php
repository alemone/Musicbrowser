<?php
//kuenstler, song, album
if(isset($_GET["class"])){
    include_once('./class/' . $_GET["class"] . ".php");
}

$controller = new Controller();
echo $controller->display();
?>