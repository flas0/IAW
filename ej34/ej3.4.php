<?php

$numero = $_GET["numero"];
$asterisco = 0 ;
if ($numero >0 && is_numeric($numero)){
    for ($asterisco; $asterisco < $numero; $asterisco++ )
    print "*";
}

else{
    print "Error pedazo inutil";
}

?>