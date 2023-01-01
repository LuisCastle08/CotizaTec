<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content= "width=device-width, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/style.css">
    <title>COTIZATEC</title>
</head>
<body>
    <header>
        <div class="titulo">
            <h1>
                COTIZATEC
            </h1>
        </div>
    </header>
    <main>
        <section>
        <div class="row justify-content-center" style="margin: 0;">
            <div class="col-auto menu">
                <h2>INGRESO DE ELEMENTOS</h2>
                <br>

                <!-- FORMULARIO DE INGRESO DE ELEMENTOS -->
                <div class="form-group formulario">
                        <p>TITULO DE COTIZACION</p>
                        <input type="text" class="form-control" id="titulo" placeholder="OTRO SERVICIO">
                    <hr>
                    <p>Nombre Elemento:</p>
                    <input type="text" class="form-control" id="nombre" placeholder="PRODUCTO" autocomplete="off">
                    
                    <br>
                    <div class="cant-pre">
                        <div class="cantidad">
                            <p>CANTIDAD:</p>
                            <input type="number" id="cantidad" placeholder="1" value="1" autocomplete="off">
                        </div>
                        <div class="precio">
                            <p>PRECIO:</p>
                            <input type="number" placeholder="$55" id="precio" autocomplete="off">
                        </div>
                    </div>
                    <br>
                    <!-- BOTON PARA AÑADIR AL ELEMENTO -->
                    <button type="button" class="btn btn-success"  onclick="capturar()">Añadir</button>

                </div>
                <br>
                <div class="resumen">
                    <!-- TABLA DE ELEMENTOS AGREGADOS PARA LA PRE-VISUALIZACION -->
                    <h2>ELEMENTOS AGREGADOS</h2>
                    <table id="tabla" class="table table-striped table-dark">
                        <thead>
                          <tr>
                              <th scope="col">Elemento</th>
                              <th scope="col">Cantidad</th>
                              <th scope="col">Precio</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                            <!--AQUI SE AÑADEN LAS LINEAS CON JAVASCRIPT-->
                        </table>
                        
                        <!-- ELEMENTOS PARA ENVIAR AL BACK PARA CREAR EL PDF -->
                        <form action="COTIZACION.php" method="post">
                            <input type="hidden" name="color" value="2">
                            <input type="hidden" name="cabeza" value="" id="head">
                            <input type="hidden" name="nombres" value="" id="nombres">
                            <input type="hidden" name="cantidades" value="" id="cantidades">
                            <input type="hidden" name="precios" value="" id="precios">
                            <input type="hidden" name="totales" value="" id="totales">
                            <button type="submit" class="btn btn-warning" style="width: 50%; color: #242424;">DESCARGAR PDF</button>
                        </form>
                    </div>
            </div>
        
        </div>
        </section>
    </main>
<?php
    require("footer.php");
?>