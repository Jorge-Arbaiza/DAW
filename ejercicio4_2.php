<h1>404 Not Found</h1>
</br>
<p>The page that you have requested could not be found.</p>

<?php
$lenguaje=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
$lengua=substr($lenguaje,0,2);

switch($lengua){
    case "en":
        echo "Page not Found, sorry";
    break;
    case "es":
        echo "La página no ha sido encontrada, lo siento";
    break;
    case "ca":
        echo "La pàgina no s'ha trobat, o sent molt";
    break;
    default:
        echo "Desconozco el idioma";
}
?>