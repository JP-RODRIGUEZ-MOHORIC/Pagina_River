<?php 

include("conexion.php");

$pregunta1 = $_POST['PreguntaUno'];
$pregunta2 = $_POST['PreguntaDos'];
$pregunta3 = $_POST['PreguntaTres'];
$pregunta4 = $_POST['PreguntaCuatro'];
$pregunta5 = $_POST['PreguntaCinco'];
$pregunta6 = $_POST['PreguntaSeis'];
$pregunta7 = $_POST['PreguntaSiete'];
$pregunta8 = $_POST['PreguntaOcho'];
$pregunta9 = $_POST['PreguntaNueve'];
$pregunta10 = $_POST['PreguntaDiez'];

echo '<link href="../css/resultado.css" type="text/css" rel="stylesheet">';

session_start();
 
$resultado = "resultado:";
$puntos_texto = "puntos.";
$mensaje = "";
$mensaje2 = "Ya participaste";
$puntos = 0;
$nombre = $_SESSION['usuario'];

if($pregunta1 == "V")
{
    $puntos = $puntos + 10;
}

if($pregunta2 == "F")
{
    $puntos = $puntos + 10;
}

if($pregunta3 == "V")
{
    $puntos = $puntos + 10;
}

if($pregunta4 == "F")
{
    $puntos = $puntos + 10;
}

if($pregunta5 == "F")
{
    $puntos = $puntos + 10;
}

if($pregunta6 == "V")
{
    $puntos = $puntos + 10;
}

if($pregunta7 == "V")
{
    $puntos = $puntos + 10;
}

if($pregunta8 == "F")
{
    $puntos = $puntos + 10;
}

if($pregunta9 == "V")
{
    $puntos = $puntos + 10;
}

if($pregunta10 == "V")
{
    $puntos = $puntos + 10;
}

if(($puntos >= 0) and ($puntos <= 40))
{
    $mensaje="¿Sos hincha de River?";
 } else if (($puntos >=50) and ($puntos <= 60))
{
    $mensaje="Bueno... Bastante Bien.";
 } else if (($puntos >=70) and ($puntos <= 90))
{
    $mensaje="Sabes mucho sobre la historia de River!";
} else if ($puntos == 100)
{
    $mensaje="Sos el hincha N°1 de River!!!";
}



if(isset($_POST["enviar"]))
{

$usuario = mysqli_query($conn,"SELECT * FROM  puntajes WHERE usuario = '$nombre'");

$miusuario = mysqli_num_rows($usuario);

 if($miusuario !=1){

$sqlgrabar = "INSERT INTO puntajes(usuario, puntaje) values ('$nombre','$puntos')";

if(mysqli_query($conn,$sqlgrabar))
{
    echo "<p class = 'resultado'>$resultado</p>";
    echo "<p class='puntos'>$puntos</p>";
    echo "<p class='mensaje'>$mensaje</p>";
    
} else
{
    echo "Error: ".$sqlgrabar."<br>".mysqli_error($conn);
}
}else
{
    echo "<p class='mensaje'>$mensaje2</p>";
}
}

?>