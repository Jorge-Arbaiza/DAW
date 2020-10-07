<?php
$ip_solicitante=$_SERVER['REMOTE_ADDR'];

$ip_servidor=$_SERVER['SERVER_ADDR'];

if($ip_solicitante!=$ip_servidor){
    include('ejercicio5_2.php');
}
?>