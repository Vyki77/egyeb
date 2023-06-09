<?php
    function connect()
    {
        $host = "localhost";
        $user = "root";
        $pwd = "";
        $database = "nevnapok";

        $conn = new mysqli($host, $user, $pwd, $database);
        if ($conn->error){
            die("Az adatbázis nem elérhető");
        }
        return $conn;
    }

?>