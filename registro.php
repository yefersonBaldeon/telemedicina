<?php include("./complet/head.php") ?>

<div class="container">





    <div class="row">

        <div class="col-8 mt-5">

            <table class="table table-primary">

                <tr>

                    <th>DNI</th>
                    <th>Años</th>
                    <th>Peso</th>
                    <th>Temperatura</th>
                    <th>Fecha</th>
                    <th></th>
                </tr>


                <?php

                include("enviar3.php");
                while ($arreglo = mysqli_fetch_array($resultado2)) {
                ?>


                    <tr>

                        <td><?php echo $arreglo[1] ?></th>
                        <td><?php echo $arreglo[2] ?></th>
                        <td><?php echo $arreglo[3] ?></th>
                        <td><?php echo $arreglo[4] ?></th>
                        <td><?php echo $arreglo[5] ?></th>
                        <td><a target="_blank" href="archivos.php?dni=<?php echo $arreglo[1]; ?>&fecha=<?php echo $arreglo[5]; ?>" class="btn btn-warning">Archivos</a></td>
                      

                    </tr>

                <?php } ?>

            </table>



        </div>


    </div>


</div>




<body>

</body>

</html>