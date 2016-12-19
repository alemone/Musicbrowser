<?php
//Class: Kuenstler, Album, Song
//id: pk_id von class
//fk: wenn class album
//         dann fk_kuenstler
//    sonst wenn class song
//          dann fk_album
if ((isset($_GET["class"])) and (isset($_GET["id"]))) {
    include_once('./class/single/' . $_GET["class"] . '.php');
}
elseif ((isset($_GET["fk"])) and (isset($_GET["class"]))) {
    include_once('./class/subgroup/' . $_GET["class"] . '.php');
}
elseif((isset($_GET["upvote"]))){ 
    include_once('./vote/upvote.php');
} 
elseif((isset($_GET["downvote"]))){ 
    include_once('./vote/downvote.php');
} else {
    include_once('./class/' . $_GET["class"] . ".php");
}


if(isset($_GET["id"])){
    $controller = new Controller($_GET["id"]);
    echo $controller->display();
} elseif (isset($_GET["fk"])) {
    $controller = new Controller($_GET["fk"]);
    echo $controller->display();
} 
elseif((isset($_GET["upvote"]))){ 
    $controller = new Controller($_GET["upvote"]);
} 
elseif((isset($_GET["downvote"]))){ 
    $controller = new Controller($_GET["downvote"]);
} else {
    $controller = new Controller();
    echo $controller->display();
}

?>