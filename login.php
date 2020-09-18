<?php
	require 'dbconnect.php';

	if(isset($_POST['email']) && isset($_POST['password'])){

		$email = $_POST['email'];
		$password = $_POST['password'];

		$response = array();

		$query = mysqli_query($conn,"select * from users where email='".$email."' AND password='".$password."'");
		while ($data = mysqli_fetch_assoc($query)) {
			$response = array("id"=>$data['id'],"name"=>$data['name'],"email"=>$data['email'],"message"=>"Login Successfully","status"=>"true");
		}

		if(sizeof($response)>0){
			echo json_encode($response);	
		}
		else{
			$response = array("message"=>"Username or password is wrong","status"=>"false");
			echo json_encode($response);
		}

		


	}




?>
