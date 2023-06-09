<?php
    $page = "home";

    if (isset($_GET["p"])) {
        if ($_GET["p"] == "kereses"){
            $page = "search";
        }
        else{
            header("Location: ./");
        }
    }
?>