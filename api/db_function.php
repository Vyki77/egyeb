<?php
    function db_select($sql)
    {
        $conn = connect();
        $data = $conn->mysqli($sql);
        $conn->close();

        if (!$data || ($data && $data->num_row == 0)){
            return FALSE;
        }

        $result = array();
        $i = 0;
        while ($row = $data->fect_assoc()){
            $result[$i] = $row;
            $i++;
        }
        return $result;
    }

    function select_by_date($month,$day)
    {
        $sql = "SELECT ho AS 'honap', nap, nev1 AS 'nevnap1', nev2 AS 'nevnap2' FROM nevnap where ho=$month AND nap=$day;";
        return db_select($sql);
    }

    function select_by_name($name)
    {
        $sql = "SELECT ho AS 'honap', nap, nev1 AS 'nevnap1', nev2 AS 'nevnap2' FROM nevnap where nev1 LIKE '$name' OR  nev2 LIKE '$name'";
        return db_select($sql);
    }
?>