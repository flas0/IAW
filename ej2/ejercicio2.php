<?php
if (isset($_GET["nombre"]) && isset($_GET["apellidos"]) && isset($_GET["edad"]) && isset($_GET["salario"]))     {
    if ($_GET["nombre"]==""  $_GET["apellidos"]==""  $_GET["edad"]=="" || $_GET["salario"]=="") {
        echo "error";
    }
    else{

        $nombre=$_GET["nombre"];
        $apellidos=$_GET["apellidos"];
        $edad=$_GET["edad"];
        $salario=$_GET["salario"];

        if ($salario>2000) {
            echo ("$salario");
        }
        elseif ($salario>=1000) {
            if($edad>45){
                $salario=$salario1.03;
                echo $salario;
            }
            else{
                $salario=$salario1.1;
                echo $salario;
            }
        }

        elseif($salario<1000) {

            if ($edad<30)
                echo ("$salario=1100");

            else {
                $salario=$salario*1.15;

                echo $salario;
            }
        }
    }

}

else{
    echo ("Hay un error");
}
?>