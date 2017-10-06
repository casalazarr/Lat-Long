<?php

$valor1 = $_REQUEST["latitud"];
$valor2 = $_REQUEST["longitud"];

$enlace = mysqli_connect("localhost", "root","mysql2017", "catastro", "3306");

if($enlace) {
    
   echo "Nos conectamos";
   
}else {
    echo "Paila!!";
}

$cadena = "INSERT INTO predio(idpredio, lat,lon) VALUES (null,'". $valor1 . "', '". $valor2 . "')";
mysqli_query($enlace, $cadena);

?>