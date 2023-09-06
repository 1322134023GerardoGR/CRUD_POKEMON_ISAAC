<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;
$conn = new Conection();
$connect = $conn->create();
$id= $_GET['id'];
$sql = "SELECT * FROM pokemones WHERE id = '$id'";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($query);
$sql2 ="SELECT id_skill FROM pokemon_skills WHERE id_pokemon='$id';";
$query2 = mysqli_query($connect, $sql2);
$row2 = mysqli_fetch_array($query2);
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
<h1>Pokemones</h1>
<div class="editar">
    <form action="../Controllers/Update_pokemon.php" method="POST">
        <h2>Editar pokemon</h2>
        <label><input type="hidden" name="id" value="<?= $row['id'] ?>"></label>
        <label><input type="text" name="name" placeholder="Nombre*" value="<?= $row['name'] ?>"></label>
        <label><input type="text" name="type" placeholder="Tipo*" value="<?= $row['type'] ?>"></label>
        <label><input type="text" name="id_skill" placeholder="Ataque*" value="<?= $row2['id_skill'] ?>"></label>
        <label><input type="text" name="level" placeholder="Nivel*" value="<?= $row['level'] ?>"></label>
        <label><input type="text" name="team_id" placeholder="Equipo*" value="<?= $row['team_id'] ?>"></label>
        <input type="submit" value="Actualizar pokemon">
    </form>
</div>
</body>
</html>