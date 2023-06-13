

<?php 

$DNI=$_POST["DNI"];
$nombre1=$_POST["nombre1"];
$nombre2=$_POST["nombre2"];
$apellido1=$_POST["apellido1"];
$apellido2=$_POST["apellido2"];
$numero=$_POST["numero"];

// echo $codigo;
// echo $dni;
// echo $nombre;
// echo $apellido;

$coneccion=mysqli_connect("localhost","root","","php2");


$consulta="INSERT into pacientes values($DNI,'$nombre1','$nombre2','$apellido1','$apellido2','$numero')";

$resultado2=mysqli_query($coneccion,$consulta);

if($resultado2)
    header("location: index.php")

?>

