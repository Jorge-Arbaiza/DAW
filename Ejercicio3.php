<?php

$navegador=$_SERVER["HTTP_USER_AGENT"];
$nav=explode("/",$navegador);
$explode_nav=explode(" ",$nav[2]);
$contar_array=count($explode_nav)-1;

if($explode_nav[$contar_array]=="Firefox" || $explode_nav[$contar_array]=="Chrome"){
    echo "El navegador es ".$explode_nav[$contar_array]. ", puedes continuar";
}else{
    echo "No tienes el navegador correcto";
}

?>