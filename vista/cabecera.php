<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Neistal Nahuel">
    <link rel="stylesheet" type="text/css" href="vista/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    
    <title>Reservas</title>

    </head>

    <body>

    <?php 

    include "modules/navegacion.php";

    ?>

    <section>

    <?php 

    $mvc = new MvcControllers();
    $mvc -> enlacesPaginasController();

    ?>

    </section>

        <div class="conteiners">
            <div class="row">