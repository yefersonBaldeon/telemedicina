<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include("./complet/head.php") ?>

    <div class="container">
        <div class="col-4">

            <form action="search.php" method="post">
                <div class="mt-5 mb-3">
                    <label for="usuario" class="form-label">Paciente: </label>
                    <input type="text" class="form-control" id="auto" name="dato" maxlength="8" required>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>

                


            </form>






        </div>



        <div class="col-8">

            <table class="table table-primary">

                <tr>

                    <th>DNI</th>

                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Número de celular</th>
                    <th>Consulta</th>
                    <th>Registro</th>
                </tr>


                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                ?>


                    <?php

                    include("enviar2.php");
                    while ($arreglo = mysqli_fetch_array($resultado2)) {
                    ?>


                        <tr>

                            <td><?php echo $arreglo[0] ?></th>
                            <td><?php echo $arreglo[1] ?></th>
                            <td><?php echo $arreglo[2] ?></th>
                            <td><?php echo $arreglo[3] ?></th>
                            <td><?php echo $arreglo[4] ?></th>
                            <td><?php echo $arreglo[5] ?></th>
                            <td><a target="_blank" href="consulta.php?dni=<?php echo $arreglo[0];?>" class="btn btn-primary">Generar Consulta</a></td>
                            <td><a target="_blank" href="registro.php?dni=<?php echo $arreglo[0];?>" class="btn btn-success">Registro</a></td>
                        </tr>

                    <?php } ?>


                <?php } ?>

            </table>



        </div>

    </div>
</body>

</html>