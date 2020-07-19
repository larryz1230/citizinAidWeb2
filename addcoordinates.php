<?php
	
if ($_SERVER['REQUEST_METHOD']== 'POST'){

	$email = $_POST['email'];
	$coordinate = $_POST['coordinate'];


	require_once 'connect.php';

	$sql = "INSERT INTO coordinates(email, coordinate) VALUES ('$email', '$coordinate')";

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