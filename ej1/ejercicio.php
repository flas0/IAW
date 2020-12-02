<?php
$numero = rand(1, 2);
if ($numero==1){$foto = "imagen1.jpeg";}
if ($numero==2){$foto = "imagen2.jpeg";}
print "<img src ='$foto'>";
?>