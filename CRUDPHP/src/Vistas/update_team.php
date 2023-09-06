<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;
$conn = new Conection();
$connect = $conn->create();
$id= $_GET['id'];
$sql = "SELECT * FROM teams WHERE id = '$id'";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Css/style.css" rel="stylesheet">
    <title>Editar</title>
</head>
<body>
<header>
    <h1 class="heade">
        Pokemon CRUD
    </h1>
    <nav am-layout="horizontal">
        <a href="index.php">Home</a>
        <a href="Pokemones.php">Pokemones</a>
        <a href="Teams.php">Equipos</a>
        <a href="skills.php">Ataques</a>
    </nav>
</header>
<h1>Equipos</h1>
<div class="editar">
    <form action="../Controllers/Update_team.php" method="POST">
        <h2>Editar equipo</h2>
        <label><input type="hidden" name="id" value="<?= $row['id'] ?>"></label>
        <label><input type="text" name="name" placeholder="Nombre*" value="<?= $row['name'] ?>"></label>
        <label><input type="text" name="age" placeholder="Edad*" value="<?= $row['age'] ?>"></label>
        <label><input type="text" name="region" placeholder="Region*" value="<?= $row['region'] ?>"></label>
        <input type="submit" value="Actualizar equipo">
    </form>
</div>
</body>
</html>