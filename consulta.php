<?php include("./complet/head.php") ?>

<?php


$dni = $_GET["dni"];


$coneccion = mysqli_connect("localhost", "root", "", "php2");

$consulta = "SELECT * FROM pacientes where dni=$dni";

$resultado2 = mysqli_query($coneccion, $consulta);

$arreglo = mysqli_fetch_array($resultado2);


?>


<div class="container">


    <div class="col-8">
        <form action="enviar_formulario.php" method="post">


            <div class="mb-3">
                <label for="usuario" class="form-label">DNI:</label>
                <input type="text"  value=<?php echo $arreglo[0]; ?> class="form-control text-primary" id="auto" name="DNI" readonly>
            </div>


            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre: </label>
                <input type="text" value=<?php echo $arreglo[1]; ?> class="form-control text-primary" id="auto" name="nombre1" maxlength="14" readonly>
            </div>


            <div class="mb-3">
                <label for="usuario" class="form-label">Apellido:</label>
                <input type="text" class="form-control text-primary" id="auto" value=<?php echo $arreglo[3]; ?> name="apellido1" maxlength="14" readonly>
            </div>

            <div class="mb-3">
                <label for="usuario" class="form-label">Años:</label>
                <input type="text" class="form-control" id="auto" name="apellido2" pattern="[0-9]{2}" maxlength="2"  required>
            </div>


            <div class="mb-3">
                <label for="usuario" class="form-label">Peso:</label>
                <input type="text" class="form-control" id="auto" name="numero" pattern="[0-9]{2}" maxlength="2" required>
            </div>

            <div class="mb-3">
                <label for="usuario" class="form-label">Temperatura:</label>
                <input type="text" class="form-control" id="auto" name="numero" pattern="[0-9]{2}" maxlength="2" required>
            </div>
            

            

            <div class="mb-3 d-grid">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>


        </form>

    </div>


</div>




<body>

</body>

</html>