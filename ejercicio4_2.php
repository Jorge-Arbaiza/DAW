<?php
$lenguaje=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
$lengua=substr($lenguaje,0,2);

switch($lengua){
    case "en":
        echo "HTML not Found, sorry";
    break;
    case "es":
        echo "HTML no encontrado, lo siento";
    break;
    case "ca":
        echo "L'HTML no s'ha trobat, o sent molt";
    break;
    default:
        echo "Desconozco el idioma";
}
?>