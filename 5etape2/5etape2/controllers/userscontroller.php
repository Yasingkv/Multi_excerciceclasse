<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri === "/connexion"){
    require_once "templates/users/connexion.php" ;
}elseif ($uri === "/profil") {
    require_once "templates/users/profil.php" ;
}
