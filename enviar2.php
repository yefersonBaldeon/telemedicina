
<?php 

$dato=$_POST["dato"];
echo $dato;

$coneccion=mysqli_connect("localhost","root","","php2");

$consulta="SELECT * FROM pacientes WHERE DNI LIKE '$dato%' or nombre1 LIKE '$dato%' or nombre2 LIKE '$dato%' or apellido1 LIKE '$dato%' or apellido2 LIKE '$dato%' ";

$resultado2=mysqli_query($coneccion,$consulta);

//$arreglo=mysqli_fetch_array($resultado2);

// echo $arreglo[3];

?>


