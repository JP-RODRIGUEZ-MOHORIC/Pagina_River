<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/juego.css">
    <script src="https://kit.fontawesome.com/1fec0af4ea.js" crossorigin="anonymous"></script>
    <title>Juego</title>
</head>
<body>
    <header class="header">
        <div class="button-back">
        <i class="fas fa-angle-left"></i>
        <a href="home.php" class="button-text">Volver</a>
    </div>
        <h1 class="title">Juego</h1>
        <p class="introduccion">Trivia en la que podés poner a prueba tu conocimiento de la historia del más grande.</p>
        <p class="user">Hola <?php 
            echo $_SESSION['usuario'] ?>
    </header>
    <main class="main">
        <form action="resultados.php" method="POST">
        <h2 class="pregunta">1- River es el club con más titulos profesionales de Argentina.</h2>
        <input type="radio"
        name="PreguntaUno" value="V" class="verdadero" required><span class="text">Verdadero</span> <br>
        <input type="radio" name="PreguntaUno" value="F" class="falso" required><span class="text">Falso</span> 
        <h2 class="pregunta">2- River ganó su primera libertadores en 1976.</h2>
        <input type="radio" name="PreguntaDos" value="V" class="verdadero" required><span class="text">Verdadero</span><br>
        <input type="radio" name="PreguntaDos" value="F" class="falso" required><span class="text">Falso</span> 
        <h2 class="pregunta">3- El jugador con mas partidos en River es Reinaldo Merlo.</h2>
        <input type="radio" name="PreguntaTres" value="V" class="verdadero" required><span class="text">Verdadero</span><br>
        <input type="radio" name="PreguntaTres" value="F" class="falso" required><span class="text">Falso</span>
        <h2 class="pregunta">4- River ganó 3 títulos en los años 60.</h2>
        <input type="radio" name="PreguntaCuatro" value="V" class="verdadero" required><span class="text">Verdadero</span><br>
        <input type="radio" name="PreguntaCuatro" value="F" class="falso" required ><span class="text">Falso</span>
        <h2 class="pregunta">5- River es el club con más participaciones en la copa Libertadores.</h2>
        <input type="radio" name="PreguntaCinco" value="V" class="verdadero" required><span class="text">Verdadero</span><br>
        <input type="radio" name="PreguntaCinco" value="F" class="falso" required><span class="text">Falso</span> 
        <h2 class="pregunta">6- El jugador con más goles de la era Gallardo es Rafael Santos Borre.</h2>
        <input type="radio" name="PreguntaSeis" value="V" class="verdadero" required><span class="text">Verdadero</span><br>
        <input type="radio" name="PreguntaSeis" value="F" class="falso" required><span class="text">Falso</span> 
        <h2 class="pregunta">7- El primer campeonato local que ganó River fue el de 1932.</h2>
        <input type="radio" name="PreguntaSiete" value="V" class="verdadero" required><span class="text">Verdadero</span> <br>
        <input type="radio" name="PreguntaSiete" value="F" class="falso" required><span class="text">Falso</span> 
        <h2 class="pregunta">8- La primera copa Libertadores en la que participó River fue la edición 1965.</h2>
        <input type="radio" name="PreguntaOcho" value="V" class="verdadero" required><span class="text">Verdadero</span><br>
        <input type="radio" name="PreguntaOcho" value="F" class="falso" required><span class="text">Falso</span> 
        <h2 class="pregunta">9- El DT con más títulos en River es Marcelo Gallardo.</h2>
        <input type="radio" name="PreguntaNueve" value="V" class="verdadero" required><span class="text">Verdadero</span><br>
        <input type="radio" name="PreguntaNueve" value="F" class="falso" required><span class="text">Falso</span> 
        <h2 class="pregunta">10- River ganó el primer triplete del futbol argentino.</h2>
        <input type="radio" name="PreguntaDiez" value="V" class="verdadero" required><span class="text">Verdadero</span><br>
        <input type="radio" name="PreguntaDiez" value="F" class="falso" required><span class="text">Falso</span> 
        <br>
        <input type="submit" name= "enviar" value="Resultado" class="resultado">
    </form>
    <div class="ranking"><a class="ranking_text" href="ranking.php">Ranking</a></div>
    </main>
    <footer class="footer">Historia Riverplatense por Juan Pablo Rodriguez Mohoric 2021</footer>
</body>
</html>