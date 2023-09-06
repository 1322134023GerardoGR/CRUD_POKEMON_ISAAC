<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;
$conn = new Conection();
$connect = $conn->create();
$id = $_GET['id'];
$sql="DELETE FROM pokemon_skills WHERE id_pokemon='$id';";
$sql2="DELETE FROM pokemones WHERE id='$id'; ";
$query=mysqli_query($connect,$sql);
$query2=mysqli_query($connect,$sql2);
if($query&& $query2){
    echo '<script type="application/javascript">alert("Eliminado con exito"); window.location.replace("../Vistas/Pokemones.php");</script>';
    die();
}