<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;

$conn = new Conection();
$connect = $conn->create();
$sql = "SELECT * FROM teams";
$query = mysqli_query($connect, $sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link href="../Css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1 class="heade">
        Pokemon CRUD
    </h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="Pokemones.php">Pokemones</a>
        <a href="#">Equipos</a>
        <a href="skills.php">Ataques</a>
    </nav>
</header>
<h1>Equipos</h1>
<div class="crear">
    <form action="../Controllers/Create_team.php" method="POST">
        <h2>Agregar equipo</h2>
        <label><input type="text" name="name" placeholder="Nombre*"></label>
        <label><input type="text" name="age" placeholder="Edad*"></label>
        <label><input type="text" name="region" placeholder="Region*"></label>
        <input type="submit" value="Agregar equipo">
    </form>
</div>
<div class="tabla-t">
    <h2>Equipos registrados</h2>
    <table class="teams">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Region</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_array($query)): ?>
            <tr>
                <th><?= $row['id'] ?></th>
                <th><?= $row['name'] ?></th>
                <th><?= $row['age'] ?></th>
                <th><?= $row['region'] ?></th>
                <td>
                    <a href="update_team.php?id=<?= $row['id'] ?>" class="actions">Editar</a>
                    <a href="../Controllers/delete_team.php?id=<?= $row['id'] ?>" class="actions"> Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
