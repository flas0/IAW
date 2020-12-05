<?php

$nombre=$_GET['nombre'];
$apellidos=$_GET['apellidos'];
$edad=$_GET['edad'];
$peso=$_GET['peso'];
$sexo=$_GET['sexo'];
$estado=$_GET['estado'];
$aficiones=$_GET['aficiones'];
$tipov=$_GET['tipov'];
$tipoz=$_GET['tipoz'];
$direccion=$_GET['direccion'];
$nhab=$_GET['nhab'];
$precio=$_GET['precio'];
$tamaño=$_GET['tamaño'];
$extras=$_GET['extras'];

print "INSERCIÓN DE LA VIVIENDA </br></br>";

print "Los datos introducidos son: </br>";

print "El tipo de vivienda elegido es  $_GET[tipov].</br>"; 

print "La zona seleccionada es $_GET[tipoz].</br>"; 

print "La dirección introducida es $_GET[direccion].</br>"; 

if (is_null($direccion)==TRUE {
    print "";
}

print "La casa cuenta con $_GET[nhab] habitaciones.</br>"; 

print "Su precio es $_GET[precio].</br>"; 

print "El tamaño es de  $_GET[tamaño] m2.</br>"; 

print "Extras: $_GET[extras].</br>"; 

print "Observaciones: $_GET[texto].</br>"; 

?>