<?php
include_once('./sql/createTables.php');
include_once('./sql/fillTables.php');
include_once('./class/top20.php');
$controller = new Controller();
echo $controller->display();
?>