
<?php include("./complet/head.php") ?>



<body>

    <div class="container mt-5">

        <div class="row">

            <div class="col-4">

                <h1>Ingrese datos</h1>


                <form action="enviar_formulario.php" method="post">


                    <div class="mb-3">
                        <label for="usuario" class="form-label">DNI:</label>
                        <input type="text" class="form-control" id="auto" name="DNI" pattern="[0-9]{8}" maxlength="8" required>
                    </div>


                    <div class="mb-3">
                        <label for="usuario" class="form-label">Primer nombre:</label>
                        <input type="text" class="form-control" id="auto" name="nombre1" maxlength="14" required>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Segundo nombre:</label>
                        <input type="text" class="form-control" id="auto" name="nombre2" maxlength="14" required>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Primer apellido:</label>
                        <input type="text" class="form-control" id="auto" name="apellido1" maxlength="14" required>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Segundo apellido:</label>
                        <input type="text" class="form-control" id="auto" name="apellido2" maxlength="14" required>
                    </div>


                    <div class="mb-3">
                        <label for="usuario" class="form-label">Número de celular:</label>
                        <input type="text" class="form-control" id="auto" name="numero" pattern="[0-9]{9}" maxlength="9" required>
                    </div>


                    <div class="mb-3 d-grid">
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
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Numero</th>
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
                            <td><?php echo $arreglo[4] ?></th>
                            <td><?php echo $arreglo[5] ?></th>
                           
                        </tr>

                    <?php } ?>

                </table>



            </div>



        </div>


    </div>


    </div>

</body>

</html>