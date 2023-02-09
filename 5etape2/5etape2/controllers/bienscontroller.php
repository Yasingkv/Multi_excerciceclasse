<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri === "/index.php" || $uri === "/"){
    require_once "templates/biens/voirtouslesbiens.php" ;
}elseif ($uri==="/leBien") {
    require_once "templates/biens/voirLeBien.php" ;
}