<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {


    require_once 'connect.php';

    $sql = "SELECT * FROM coordinates";

    $res = mysqli_query($conn, $sql);

    $result = array();
    $result['getcoor'] = array();


    while($row = mysqli_fetch_array($res)){
        array_push($result['getcoor'],array('coordinate' => $row[1]));
    }

    if (mysqli_query($conn, $sql)) {

        $result["success"] = "1";
        $result ["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $result["success"] = "0";
        $result ["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }

}



?>