<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;


    $conn = new Conection();
    $connect = $conn->create();
    $id = null;
    $name = "";
    $age = "";
    $region = "";
    $level = 0;

    if ($_POST['name'] == "" || $_POST['age'] == "" || $_POST['region'] == "") {
        echo '<script type="application/javascript">alert("No se puede insertar un equipo sin algun dato"); window.location.replace("../Vistas/Teams.php");</script>';
        die();
    } else {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $region = $_POST['region'];

        $sql = "INSERT INTO teams VALUES (NULL,'$name','$age','$region')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            echo '<script type="application/javascript">alert("Creado con exito"); window.location.replace("../Vistas/Teams.php");</script>';

            die();
        } else {
            echo "Error al insertar";
        }
    }


