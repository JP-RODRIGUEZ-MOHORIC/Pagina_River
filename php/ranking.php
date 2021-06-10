<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ranking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/ranking.css">
  <script src="https://kit.fontawesome.com/1fec0af4ea.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="header">
        <div class="button-back">
        <i class="fas fa-angle-left"></i>
        <a href="juego.php" class="button-text">Volver</a>
    </div>
        <h1 class="title">Ranking</h1>
        <p class="introduccion">Ranking con los mejores puntajes del juego.</p>
        <p class="user">Hola <?php 
            echo $_SESSION['usuario'] ?>
    </header>
    <main class="main">
<?php
$link = new PDO('mysql:host=localhost;dbname=pagina_river', 'root', ''); 
?>
<table class="table">	
    <colgroup>
          <col>
          <col>
    </colgroup>
		<thead>
		<tr>
			<th class="col_title">Nombre</th>
			<th class="col_title">Puntaje</th>
		</tr>
		</thead>
        <tbody>
<?php foreach ($link->query('SELECT * from puntajes ORDER BY puntaje DESC') as $row){ 
    ?> 
<tr>
    <td class="col_content"><?php echo $row['usuario'] ?></td>
    <td class="col_content"><?php echo $row['puntaje'] ?></td>
 </tr>
<?php
	}
?>
</tbody>
</table>
</main>
<footer class="footer">Historia Riverplatense por Juan Pablo Rodriguez Mohoric 2021</footer>
</body>
</html>