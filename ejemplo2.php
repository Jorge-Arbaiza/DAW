<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
if(isset($x)){
echo "El valor de x es ".$x."<br>";
}else{
    echo "¡ x No Existe !";
}
?>