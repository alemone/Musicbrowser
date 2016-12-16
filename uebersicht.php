<?php
//kuenstler, song, album
if ((isset($_GET["class"])) and (isset($_GET["id"]))) {
    include_once('./class/single/' . $_GET["class"] . '.php');
} else {
    include_once('./class/' . $_GET["class"] . ".php");
}


if(isset($_GET["id"])){
    $controller = new Controller($_GET["id"]);
}
else {
    $controller = new Controller();
}
echo $controller->display();
?>