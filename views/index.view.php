<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Two+Tone">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
    <title>Tienda</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="">Tienda de Ropa</a></p>
            </div>

            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">                   
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit"class="material-icons-outlined">search</buttom>
                    
                </form>
                
                <nav clas="menu">
                    <ul>
                    <!--<li><a><button type="submit"class="material-icons-outlined">facebook</buttom></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-square"></i></i></a></li>
                        <li><a href="#">Contacto<i class="fab fa-facebook-square"></i></a></li> -->
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>
</html>

