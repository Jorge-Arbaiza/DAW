<h1>Not Authorized</h1>
</br>
<p>HTTP Error 401. The requested resource requires user authentication.</p>

<?php
$lenguaje=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
$lengua=substr($lenguaje,0,2);

switch($lengua){
    case "en":
        echo "The access page required authentication.";
    break;
    case "es":
        echo "El acceso a la página requiere autentificación.";
    break;
    case "ca":
        echo "L'acces a la pàgina requereix autentificació";
    break;
    default:
        echo "Desconozco el idioma";
}
?>