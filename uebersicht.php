<?php
//kuenstler, song, album
if ((isset($_GET["class"])) and (isset($_GET["id"]))) {
    include_once('./class/single/' . $_GET["class"] . '.php');
}
elseif ((isset($_GET["pk"])) and (isset($_GET["class"]))) {
    include_once('./class/subgroup/' . $_GET["class"] . '.php');
} else {
    include_once('./class/' . $_GET["class"] . ".php");
}


if(isset($_GET["id"])){
    $controller = new Controller($_GET["id"]);
} elseif (isset($_GET["pk"])) {
    $controller = new Controller($_GET["pk"]);
} else {
    $controller = new Controller();
}
echo $controller->display();
?>