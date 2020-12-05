<?php
$nombre=$_GET["nombre"];
$apellidos=$_GET["apellidos"];
$edad=$_GET["edad"];
$salario=$_GET["salario"];


print "Tu nombre es $nombre </br>";
print "Tu apellido es $apellidos</br>";

if ($salario>2000) {
print "Tu salario es ". $salario;
}
elseif ($salario>=1000 && $salario<=2000) {
if ($edad>45) {
$salario=$salario*1.03;
print "Tu salario con más de 45 años es ". $salario;
}
else {
$salario=$salario*1.1;
print "Tu salario con menos de 45 años es ". $salario;
}
}
elseif ($salario<1000) {
if ($edad<30) {
print "Tu salario con menos de 30 años es 1100";
}
elseif ($edad>=30 && $edad<=45) {
$salario=$salario*1.03;
print "Tu salario ahora es ". $salario;
}
else {
$salario=$salario*1.15;
print "Tu salario ahora es ". $salario; 
}
}

?>