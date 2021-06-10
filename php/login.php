<?php

include("conexion.php");

$nombre = $_POST['usuario'];
$pass = $_POST['pass'];

session_start();
$_SESSION['usuario'] = $nombre;

//Login
if(isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre' AND password = '$pass'");
    $nr = mysqli_num_rows($query);

    if($nr==1)
    {
    echo"<script> alert('Bienvenido $nombre'); window.location = 'home.php' </script>";
    }else
    {
    echo"<script> alert('Usuario no existe'); window.location = '../index.html' </script>";
    }
}