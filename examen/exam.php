<?php
if ( isset($_GET["tipo"]) && isset($_GET["zona"]) && isset($_GET["direccion"]) &&
isset($_GET["precio"])
&& isset($_GET["ndormitorios"]) && isset($_GET["tamano"] ) ){
    // Pasamos las variables de formulario a unas variables locales
    if ($_GET["tamano"] && $_GET["precio"]) {
        $tipo=$_GET["tipo"];
        $zona=$_GET["zona"];
        $direccion=$_GET["direccion"];
        $precio=$_GET["precio"];
        $ndormitorios=$_GET["ndormitorios"];
        $tamano=$_GET["tamano"];    
    }
        if (!is_numeric($precio) ||!is_numeric($tamano)) {
            header("location:form-error.html");    
        }

        print"<p>El tipo de vivienda es: <strong> $tipo</strong>"."<br>";
        print"<p>Ubicada en la zona: <strong>$zona</strong> "."<br>";
        print"<p>Con dirección: <strong>$direccion</strong></p>";
        print"<p>Con número de dormitorios: <strong>$ndormitorios</strong>";
        print"<p> Y con tamaño en metros cuadrados: <strong>$tamano</strong> y
        precio base es: <strong>$precio</strong>"."<br>";

        if ($_GET["piscina"])
        print"<p> Tiene el extra piscina </p>";
        if ($_GET["garage"])
        print"<p> Tiene el extra garage</p>";
        if ($_GET["jardin"])
        print "<p> Tiene el extra jardin</p>";
print"<p>Observaciones: ".$_GET["observaciones"]."</p>";

$preciototal=$precio;

switch($zona){
    case"Centro": $preciototal=$preciototal+$precio*0.5; break;
    case"Este": $preciototal=$preciototal+$precio* 0.25; break;
    case"Norte": $preciototal=$preciototal+$precio* 0.30; break;
    case"Sur": $preciototal=$preciototal-$precio* 0.10; break;
    case"Suburbios": $preciototal=$preciototal-$precio* 0.20; break;    
}

print"El precio por el tipo de zona es: $preciototal"."<br>";

if ($ndormitorios>2) {
    $preciototal= ($preciototal/2) *$ndormitorios;
    print"Como hay $ndormitorios dormitorios, el precio actualizado será:
    $preciototal"."<br>";    
}
if ($_GET["garage"]){
    print"Al tener garaje se suman 90€ al precio final: ".($preciototal+90);    
}
}
else {
    header("location:form-error.html");
    }
?>