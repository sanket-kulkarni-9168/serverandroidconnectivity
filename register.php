<?php
	require 'dbconnect.php';

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$flag = false;
		
		$query = mysqli_query($conn,"select * from users where email='".$email."'");
		while ($data = mysqli_fetch_assoc($query)) {
			$flag = true;
		}

		if($flag){

			$response = array("message"=>"User already exist","status"=>"false");
			echo json_encode($response);
		}
		else{
			$query = mysqli_query($conn,"INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '".$name."', '".$email."', '".$password."')");
			$response = array("message"=>"Successfully Register","status"=>"true");
			echo json_encode($response);
		}
		



}

?>
