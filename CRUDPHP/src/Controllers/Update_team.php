<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;
$conn = new Conection();
$connect = $conn->create();
if ($_POST['name'] == "" || $_POST['age'] == "" || $_POST['region'] == "") {
    echo '<script type="application/javascript">alert("No se puede actualizar un pokemon sin algun dato"); window.location.replace("../Vistas/Teams.php");</script>';
    die();
}else{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $region = $_POST['region'];
    $sql="UPDATE teams SET name='$name', age='$age', region='$region' WHERE id='$id'";
    $query=mysqli_query($connect,$sql);
    if($query){

        echo '<script type="application/javascript">alert("Actualizado con exito"); window.location.replace("../Vistas/Teams.php");</script>';

        die();
    }
}