<?php

$peso=$_GET["peso"];

$estatura=$_GET["estatura"];

$imc=($peso / $estatura**2);

if (is_numeric($peso)==false or is_numeric($estatura)==false){
    print "error inútil";
}

 elseif ($imc <= 18.5){
     print "peso bajo comete un bocata";
 }
 elseif ($imc > 18.5 && $imc <= 24.9) {
 print "peso normal";
 }
 elseif ($imc > 24.9 && $imc <= 29.9){
     print "sobrepeso";
 }
 elseif ($imc > 30){
     print "Eres una esfera perfecta";
 }

 ?>