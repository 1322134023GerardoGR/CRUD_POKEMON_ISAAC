<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;
$conn = new Conection();
$connect = $conn->create();
$id = $_GET['id'];
$sql="DELETE FROM teams WHERE id='$id'";
$query=mysqli_query($connect,$sql);
if($query){
    echo '<script type="application/javascript">alert("Eliminado con exito"); window.location.replace("../Vistas/Teams.php");</script>';
    die();
}