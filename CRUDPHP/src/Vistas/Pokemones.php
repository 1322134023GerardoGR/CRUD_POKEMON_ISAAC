<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;

$conn = new Conection();
$connect = $conn->create();
$sql = "SELECT * FROM pokemones";
$query = mysqli_query($connect, $sql);
$sql2 = "SELECT * FROM pokemon_skills";
$query2 = mysqli_query($connect, $sql2);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../Css/style.css" rel="stylesheet">
    <title>CRUD</title>
</head>
<body>
<header>
    <h1 class="heade">
        Pokemon CRUD
    </h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="#">Pokemones</a>
        <a href="Teams.php">Equipos</a>
        <a href="skills.php">Ataques</a>
    </nav>
</header>
<h1>Pokemones</h1>
<div class="crear">
    <form action="../Controllers/Create_pokemon.php" method="POST">
        <h2>Agregar pokemon</h2>
        <label><input type="text" name="name" placeholder="Nombre*"></label>
        <label><input type="text" name="type" placeholder="Tipo*"></label>
        <label><input type="text" name="level" placeholder="Nivel*"></label>
        <label><input type="text" name="id_skill" placeholder="ID de Ataque*"></label>
        <label><input type="text" name="team_id" placeholder="Equipo*"></label>
        <input type="submit" value="Agregar pokemon">
    </form>
</div>
<div class="tabla-pokemon">
    <h2>Pokemon registrados</h2>
    <table class="pokemons">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Nivel</th>
            <th>Ataque</th>
            <th>Team</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < mysqli_num_rows($query); $i++): ?>
            <?php $row = mysqli_fetch_array($query); ?>
            <?php $row2 = mysqli_fetch_array($query2); ?>
            <?php
            $a=$row2['id_skill']; 
            $sql3 = "SELECT name_skill FROM skills where id='$a';";
            $query3 = mysqli_query($connect, $sql3); ?>
            <?php $row3 = mysqli_fetch_array($query3); ?>
            <tr>
                <th><?= $row['id'] ?></th>
                <th><?= $row['name'] ?></th>
                <th><?= $row['type'] ?></th>
                <th><?= $row['level'] ?></th>
                <th><?= $row3['name_skill'] ?></th>
                <th><?= $row['team_id'] ?></th>
                <td>
                    <a href="update_pokemon.php?id=<?= $row['id'] ?>" class="actions">Editar</a>
                    <a href="../Controllers/delete_pokemon.php?id=<?= $row['id'] ?>" class="actions">Eliminar</a>
                </td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
</div>
</body>
</html>
