<?php 

$n = $_GET["numero"];

if (is_numeric($n)){
    if (($n - intval($n))= 0){
    print "Es un numero entero";
}
    else { print "Es un numero decimal";
}
else {
    print "ERROR INUTIL";
}
?>