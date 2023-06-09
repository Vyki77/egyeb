<?php
    include_once("db_connect.php");
    include_once("db_function.php");

    function json($code, $data){
        http_response_code($code);
        header("Content-Type: application/json; charset utf-8");
        print json_encode($data);
    }

    if (isset($_GET["ho"]) && $_GET["ho"] != "" && isset($_GET["nap"]) && $_GET["nap"] != "" )
    {
        $data = select_by_date($_GET["ho"], $_GET["nap"]);
    }
    else if (isset($_GET["nev"]) && $_GET["nev"] != "")
    {
        $data = select_by_name($_GET["nev"]);
    }

    if (isset($data)){
        if ($data){
            $code = 200;
        }
        else {
            $code = 404;
            $data = array("hiba" => "nincs találat");
        }
    }
    else{
        $code = 404;
        $data = array(
            "minta1" => "?ho=10&nap=19",
            "minta2" => "?nev=Viktória"
        );
    }
    json($code, $data);
?>
!