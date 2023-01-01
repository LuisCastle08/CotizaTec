<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content= "width=device-width, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
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
        <div class="row justify-content-center">
            <div class="col-auto menu">
                <h2>¿Que deseas Cotizar?</h2>
                <br>
                <div class="bloques">
                        <div class="card element c1" style="background-color: #FFD361;">
                            <a class="color1" href="rutas/electricidad.php">electricidad</a>
                            <img class="img" src="img/electricidad.png" alt="">
                        </div>
                        <div class="card element c2" style="background-color: #41B8FB;">
                            <a class="color2" href="rutas/plomeria.php">plomeria </a>
                            <img class="img" src="img/tubo.png" alt="">
                        </div>
                        <div class="card element c3" style="background-color: #3F3F3F;">
                            <a class="color2" href="rutas/otro.php">otro </a>
                            <img class="img" src="img/engranaje.png" alt="">
                        </div>
                </div>
            </div>
        </div>
        </section>
    </main>
<?php
    require("rutas/footer.php");
?>