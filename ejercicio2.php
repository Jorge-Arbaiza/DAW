<?php
$lenguaje=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
$lengua=substr($lenguaje,0,2);

switch($lengua){
    case "en":
        echo "Good Morning";
    break;
    case "es":
        echo "Buenos días";
    break;
    case "ca":
        echo "Bon día";
    break;
    default:
        echo "Desconozco el idioma";
}
?>