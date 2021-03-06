<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>Pagina_River</title>
</head>
<body>
    <header class="header">
        <div class="top-bar">
            <img src="../assets/images/Escudo-de-River-gif.gif" class="badge" alt="">
            <h1 class="title">Historia Riverplatense</h1>
            <img src="../assets/images/Escudo-de-River-gif.gif" class="badge-2" alt=""> <br>
            <p><span class="user">Bienvenido <?php 
            echo $_SESSION['usuario'] ?></span></p>
            <a href="cerrar_sesion.php" class="cerrar_sesion">Cerrar Sesión</a>
        </div>
        <div class="mid-bar">
            <div class="icon-menu" id="icon-menu">
                <div class="icon-menu__bar"></div>
            </div>
        </div>
        <nav>
            <ul class="menu" id="main-menu">
                <li class="menu__item"><a href="juego.php" class="menu__link">Juego</a></li>
                <li class="menu__item"><a href="../idolos.html" class="menu__link">Ídolos</a></li>
                <li class="menu__item"><a href="../Titulos.html" class="menu__link">Títulos</a></li>
                <li class="menu__item"><a href="../estadios.html" class="menu__link">Estadios</a></li>
                <li class="menu__item"><a href="../himno.html" class="menu__link">Himno</a></li>
            </ul>
        </nav>
    </header>
    <main></main>
    <footer class="footer">Historia Riverplatense por Juan Pablo Rodriguez Mohoric 2021</footer>
    
    <script src="../scripts/index.js"></script>
</body>
</html>