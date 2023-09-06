<?php

namespace Ggr\Crud\Clases;

use mysqli;

class Conection
{
    private string $host = "localhost";
    private string $user = "root";
    private string $password = "";
    private string $db = "primer_crud_php";

    public function create(): false|mysqli
    {
        $conection = mysqli_connect($this->host, $this->user, $this->password, $this->db);
        mysqli_select_db($conection, $this->db);
        return $conection;
    }
}