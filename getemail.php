<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {


    $coordinate = $_POST['coordinate'];

    require_once 'connect.php';

    $sql = "SELECT * FROM coordinates WHERE coordinate='$coordinate' ";

    $response = mysqli_query($conn, $sql);

    $result = array();
    $result['getemail'] = array();


    
        
     $row = mysqli_fetch_assoc($response);

    // if ( email_verify($email, $row['email']) ) {
            
        $index['email'] = $row['email'];
            
        array_push($result['getemail'], $index);


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