<?php include("./complet/head.php") ?>

<div class="container">





    <div class="row">

        <div class="col-8 mt-5">

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




<body>

</body>

</html>