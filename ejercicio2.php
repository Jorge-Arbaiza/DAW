<?php

$lenguaje=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
$lengua=substr($lenguaje,0,2);
echo $lengua;

switch($lengua){
    case "en":
        echo "Good Morning";
    break;
    case "es":
        echo "Buenos días";
    break;
    case "cat":
        echo "Bon día";
    break;
    default:
        echo "Desconozco el idioma";
}

?>