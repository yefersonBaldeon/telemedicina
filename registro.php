<?php include("./complet/head.php") ?>

<div class="container">


    <div class="col-8">
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


</div>




<body>

</body>

</html>