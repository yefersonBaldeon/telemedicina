<?php
// if (isset($_GET['archivo'])) {
//   $rutaArchivo = $_GET['archivo'];

//   if (file_exists($rutaArchivo)) {
//     readfile($rutaArchivo);
//     exit;
//   } else {
//     echo 'El archivo no existe.';
//   }
// } else {
//   echo 'No se especificó ningún archivo.';
// }

if (isset($_GET['archivo'])) {
  $rutaArchivo = $_GET['archivo'];

  if (file_exists($rutaArchivo)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($rutaArchivo).'"');
    header('Content-Length: ' . filesize($rutaArchivo));
    readfile($rutaArchivo);
    exit;
  } else {
    echo 'El archivo no existe.';
  }
} else {
  echo 'No se especificó ningún archivo.';
}

?>
