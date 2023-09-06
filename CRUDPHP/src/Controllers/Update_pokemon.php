<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;
$conn = new Conection();
$connect = $conn->create();
if ($_POST['name'] == "" || $_POST['type'] == "" || $_POST['id_skill'] == "" || $_POST['level'] == ""|| $_POST['team_id'] == "") {

    echo '<script type="application/javascript">alert("No se puede actualizar un pokemon sin algun dato"); window.location.replace("../Vistas/Pokemones.php");</script>';
    die();
}else{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $id_skill = $_POST['id_skill'];
    $level = $_POST['level'];
    $team_id = $_POST['team_id'];
    $sql="UPDATE pokemones SET name='$name', type='$type', level='$level', team_id='$team_id' WHERE id='$id';";
    $sql2="UPDATE pokemon_skills SET id_skill='$id_skill' WHERE id_pokemon='$id';";
    $query=mysqli_query($connect,$sql);
    $query2=mysqli_query($connect,$sql2);
    if($query && $query2){
        echo '<script type="application/javascript">alert("Actualizado con exito"); window.location.replace("../Vistas/Pokemones.php");</script>';
        die();
    }
}