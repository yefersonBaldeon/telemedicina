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

            <form action="enviar_formulario.php" method="post">
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

                    <th>Código</th>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th></th>
                    <th></th>
                </tr>


                <?php

                include("enviar.php");
                while ($arreglo = mysqli_fetch_array($resultado2)) {
                ?>


                    <tr>

                        <td><?php echo $arreglo[0] ?></th>
                        <td><?php echo $arreglo[1] ?></th>
                        <td><?php echo $arreglo[2] ?></th>
                        <td><?php echo $arreglo[3] ?></th>
                        <td><a href="update.php?idd=<?php echo $arreglo[0]; ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="delete.php?idd=<?php echo $arreglo[0]; ?>" class="btn btn-danger">Eliminar</a></td>


                    </tr>

                <?php } ?>

            </table>



        </div>

    </div>
</body>

</html>