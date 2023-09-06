<?php
require '../../vendor/autoload.php';

use Ggr\Crud\Clases\Conection;


    $conn = new Conection();
    $connect = $conn->create();
    $id = null;
    $name = "";
    $type = "";
    $id_skill="";
    $team_id = 0;
    $level = 0;

    if ($_POST['name'] == "" || $_POST['type'] == ""|| $_POST['id_skill'] == "" || $_POST['level'] == ""|| $_POST['team_id'] == "") {
        echo '<script type="application/javascript">alert("No se puede insertar un pokemon sin algun dato"); window.location.replace("../Vistas/Pokemones.php");</script>';
        die();
    } else {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $level = $_POST['level'];
        $team_id = $_POST['team_id'];
        $id_skill = $_POST['id_skill'];
        $sql = "INSERT INTO pokemones VALUES (NULL,'$name','$type','$level','$team_id');"; //Insertar datos en la tabla "pokemones"
        $query = mysqli_query($connect, $sql);
        $sql2= "SELECT id FROM pokemones where name='$name' and type='$type' and level='$level' and team_id='$team_id';";
        $query2 = mysqli_query($connect, $sql2);
        $ultimo_id = mysqli_fetch_row($query2)[0];
        $sql3 = "insert into pokemon_skills values (null, '$ultimo_id', '$id_skill');"; //Insertar datos en la tabla "pokemones"
        $query3 = mysqli_query($connect, $sql3);
        if ($query&&$query2) {
            echo '<script type="application/javascript">alert("Creado con exito"); window.location.replace("../Vistas/Pokemones.php");</script>';

            die();
        } else {
            echo "Error al insertar";
        }
    }


