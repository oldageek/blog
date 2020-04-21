<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet"> 
    <script src="<?php echo RUTA; ?>/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
    <title>Blog</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="<?php echo RUTA; ?>">Mi primer Blog</a></p>
            </div>
            <div class="derecha">
                <form name="buscar" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>

                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#">Contacto<i class="icono fa fa-envelope"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>