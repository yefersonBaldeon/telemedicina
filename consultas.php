<?php include("./complet/head.php") ?>





<body>

<div class="container">
<h1>Tabla de Horas</h1>
<h1>Link de la reunión</h1>
    <table class="table table-primary">
        <tr>
            <th>Hora</th>
            <th>Disponibilidad</th>            
            <th>Nombre</th>            
        </tr>
        <!-- Inicio de la tabla desde las 8:00 AM -->
        <tr>
            <td>08:00 AM</td>
            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Generar cita</button></td>
            
        </tr>
        <!-- Se incrementa en media hora hasta las 12:00 PM -->
        <tr>
            <td>08:30 AM</td>
            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Generar cita</button></td>
        </tr>
        <tr>
            <td>09:00 AM</td>
            <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Generar cita</button></td>
        </tr>
        <tr>
            <td>09:30 AM</td>
            <td><button class="btn btn-primary">Generar cita</button></td>
        </tr>
        <tr>
            <td>10:00 AM</td>
            <td><button class="btn btn-primary">Generar cita</button></td>
        </tr>
        <tr>
            <td>10:30 AM</td>
            <td><button class="btn btn-primary">Generar cita</button></td>
        </tr>
        <tr>
            <td>11:00 AM</td>
            <td><button class="btn btn-primary">Generar cita</button></td>
        </tr>
        <tr>
            <td>11:30 AM</td>
            <td><button class="btn btn-primary">Generar cita</button></td>
        </tr>

        <tr>
            <td>12:00 PM</td>
            <td><button class="btn btn-primary">Generar cita</button></td>
        </tr>
    </table>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  
                
                <table class="table table-primary">

                    <tr>

                        <th>DNI</th>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Numero</th>

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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



</body>
</html>

