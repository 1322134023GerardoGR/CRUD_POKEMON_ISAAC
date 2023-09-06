<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;

$conn = new Conection();
$connect = $conn->create();
$sql = "SELECT * FROM skills ";
$query = mysqli_query($connect, $sql);


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
        <a href="Pokemones.php">Pokemones</a>
        <a href="Teams.php">Equipos</a>
        <a href="#">Skills</a>
    </nav>
</header>

<div class="tabla-pokemon">
    <h2>Ataques Registrados</h2>
    <table class="pokemons">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($i = 0; $i < mysqli_num_rows($query); $i++): ?>
            <?php $row = mysqli_fetch_array($query); ?>

            <tr>
                <th><?= $row['id'] ?></th>
                <th><?= $row['name_skill'] ?></th>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>
</div>
</body>
</html>
