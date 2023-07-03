<?php include("./complet/head.php") ?>




<div class="container">



    <div class="row">



        <div class="col-6 mt-5">


            <?php

            $dni = $_GET["dni"];
            $fecha = $_GET["fecha"];
            ?>

            <h2 class="mb-3 text-primary">DNI: <?php echo $dni; ?></h2>

            <div>
                <h1 class="mb-3 ">Documentos del paciente:</h1>
                <?php
                $servidor = 'localhost';
                $usuario = 'root';
                $contrasena = '';
                $basedatos = 'php2';
                $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

                if (!$conexion) {
                    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
                }

                $consulta = "SELECT * FROM documentos where fecha='$fecha' AND DNI='$dni' AND titulo <>'solicitud'";
                $resultados = mysqli_query($conexion, $consulta);

                while ($fila = mysqli_fetch_assoc($resultados)) {
                    $nombreArchivo = $fila['nombre_archivo'];
                    $rutaArchivo = $fila['ruta_archivo'];
                    $titulo = $fila['titulo'];

                    echo '<li>' . $titulo . '  // Nombre del archivo: '.$nombreArchivo.' <a href="ver_archivo.php?archivo=' . $rutaArchivo . '" target="_blank">Descargar</a></li>';
                }

                mysqli_close($conexion);
                ?>




            </div>

            <hr>
            <div>
                <h1 class="mb-3">Subir archivos del paciente:</h1>

            </div>

            <div>
                <form action="./subir_archivos2.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" class="form-control" id="auto" value=<?php echo $dni ?> name="dni" maxlength="14">

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo: </label>
                        <input type="text" class="form-control" id="auto" name="titulo" maxlength="30">
                    </div>

                    <div class="mb-3">
                        <label for="titulo" class="form-label">Fecha: </label>
                        <input type="fecha" class="form-control text-primary" value=<?php echo $fecha ?> name="fecha" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Archivos del paciente :</label>
                        <input type="file" class="form-control " id="auto" name="archivo" required>
                    </div>

                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>

                </form>


            </div>


        </div>


        <div class="col-6 mt-5">


            <h1 class="mb-3">Permisos generados</h1>

            <?php
            $servidor = 'localhost';
            $usuario = 'root';
            $contrasena = '';
            $basedatos = 'php2';
            $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

            if (!$conexion) {
                die('Error al conectar a la base de datos: ' . mysqli_connect_error());
            }

            $consulta = "SELECT * FROM documentos where fecha='$fecha' AND DNI='$dni' AND titulo='solicitud'";
            $resultados = mysqli_query($conexion, $consulta);

            while ($fila = mysqli_fetch_assoc($resultados)) {
                $nombreArchivo = $fila['nombre_archivo'];
                $rutaArchivo = $fila['ruta_archivo'];
                echo '<li>' . $nombreArchivo . ' <a href="ver_archivo.php?archivo=' . $rutaArchivo . '" target="_blank">Abrir</a></li>';
            }

            mysqli_close($conexion);
            ?>


        </div>




    </div>




</div>