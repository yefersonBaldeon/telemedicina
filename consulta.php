<?php include("./complet/head.php") ?>

<?php


$dni = $_GET["dni"];


$coneccion = mysqli_connect("localhost", "root", "", "php2");

$consulta = "SELECT * FROM pacientes where dni=$dni";

$resultado2 = mysqli_query($coneccion, $consulta);

$arreglo = mysqli_fetch_array($resultado2);


?>




<body>


    <div class="container">

        <div class="row justify-content-center">


            <div class="col-5">
                <form action="./subir_archivo.php" method="post" enctype="multipart/form-data">


                    <div class="mb-3">
                        <label for="usuario" class="form-label">DNI:</label>
                        <input type="text" value=<?php echo $arreglo[0]; ?> class="form-control text-primary" id="auto" name="DNI" readonly>
                    </div>


                    <div class="mb-3">
                        <label for="usuario" class="form-label">Nombre: </label>
                        <input type="text" value=<?php echo $arreglo[1]; ?> class="form-control text-primary" id="auto" name="" maxlength="14" readonly>
                    </div>


                    <div class="mb-3">
                        <label for="usuario" class="form-label">Apellido:</label>
                        <input type="text" class="form-control text-primary" id="auto" value=<?php echo $arreglo[3]; ?> name="" maxlength="14" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Años:</label>
                        <input type="text" class="form-control" id="auto" name="años" pattern="[0-9]{2}" maxlength="2" required>
                    </div>


                    <div class="mb-3">
                        <label for="usuario" class="form-label">Peso:</label>
                        <input type="text" class="form-control" id="auto" name="peso" pattern="[0-9]{2}" maxlength="2" required>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Temperatura:</label>
                        <input type="text" class="form-control" id="auto" name="temperatura" pattern="[0-9]{2}" maxlength="2" required>
                    </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Fecha:</label>
                        <input type="date" class="form-control text-primary" id="fechaInput" name="fecha" required>
                    </div>


                    <div class="mb-3">
                        <label for="usuario" class="form-label">Solicitud para la videollamada:</label>
                        <input type="file" class="form-control " id="auto" name="archivo" required>
                    </div>



                    <div class="mb-3 d-grid">
                        <input type="submit" class="btn btn-primary" value="Enviar">
                    </div>


                </form>

            </div>
        </div>



    </div>


    <script>
        var fechaInput = document.getElementById("fechaInput");
        var fechaActual = new Date();
        var dia = fechaActual.getDate();
        var mes = fechaActual.getMonth() + 1; // El mes se cuenta desde 0, por lo que se suma 1
        var año = fechaActual.getFullYear();

        // Ajustar el formato de la fecha (agregar ceros iniciales si es necesario)
        if (dia < 10) {
            dia = "0" + dia;
        }
        if (mes < 10) {
            mes = "0" + mes;
        }

        var fechaFormateada = año + "-" + mes + "-" + dia;
        fechaInput.value = fechaFormateada;
    </script>


</body>

</html>