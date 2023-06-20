<?php 


$DNI=$_GET["dni"];

$coneccion=mysqli_connect("localhost","root","","php2");

$consulta="SELECT * FROM consulta WHERE DNI='$DNI'";

$resultado2=mysqli_query($coneccion,$consulta);

//$arreglo=mysqli_fetch_array($resultado2);

// echo $arreglo[3];

?>
