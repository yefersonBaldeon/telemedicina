<?php


$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$basedatos = 'php2';

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

if (!$conexion) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

if (isset($_FILES['archivo'])) {
    $nombreArchivo = $_FILES['archivo']['name'];
    $rutaArchivo = $_FILES['archivo']['tmp_name'];
    $DNI=$_POST["DNI"];
    $años=$_POST["años"];
    $peso=$_POST["peso"];
    $temperatura=$_POST["temperatura"];
    $fecha=$_POST["fecha"];

    $destino = 'carpeta_destino/' . $nombreArchivo;
    if (move_uploaded_file($rutaArchivo, $destino)) {
        $consulta = "INSERT INTO documentos (DNI,titulo,nombre_archivo, ruta_archivo,fecha) VALUES ('$DNI','solicitud','$nombreArchivo', '$destino','$fecha')";
        $consulta2 = "INSERT INTO consulta (DNI,años,peso,temperatura,fecha) VALUES ('$DNI','$años','$peso', '$temperatura','$fecha')";
        if (mysqli_query($conexion, $consulta) && mysqli_query($conexion, $consulta2)) {

            echo 'El archivo se ha subido y guardado correctamente.';
            //   header("Location: index.php");
        } else {
            echo 'Error al guardar el archivo en la base de datos: ' . mysqli_error($conexion);
        }
    } else {
        echo 'Error al mover el archivo subido.';
    }
}

mysqli_close($conexion);
