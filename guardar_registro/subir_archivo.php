<?php 


$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$basedatos = 'practice';

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

if (!$conexion) {
  die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}

if (isset($_FILES['archivo'])) {
  $nombreArchivo = $_FILES['archivo']['name'];
  $rutaArchivo = $_FILES['archivo']['tmp_name'];

  $destino = 'carpeta_destino/' . $nombreArchivo;
  if (move_uploaded_file($rutaArchivo, $destino)) {
    $consulta = "INSERT INTO archivos (nombre_archivo, ruta_archivo) VALUES ('$nombreArchivo', '$destino')";
    if (mysqli_query($conexion, $consulta)) {
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
