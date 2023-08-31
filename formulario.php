<?php
    require "conection.php";
    
    $registros = $conn->query("SELECT * FROM registros");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="nav">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="formulario.html">Formulario</a></li>
        </ul>
    </div>
    <h1 id="contact">Contacto</h1>
    <form method="post" action="store.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="name" required><br><br>
    
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="email" required><br><br>
    
        <button type="submit">Enviar</button>
    </form>
    <h1>Todos los registros:</h1>
    <?php if ($registros->rowCount() == 0): ?>
      <div class="">
        <div class="">
          <p>No hay nada guardado</p>
        </div>
      </div>
    <?php endif ?>
    <?php foreach ($registros as $registro): ?>
          <div class="card-body">
            <h3 class=""><?= $registro["name"] ?></h3>
            <p class=""><?= $registro["email"] ?></p>
            <hr>
          </div>
    <?php endforeach ?>
</body>
</html>