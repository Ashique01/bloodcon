<?php
	$userName = $_POST['userName'];
	$bloodGroup = $_POST['bloodGroup'];
	$region = $_POST['region'];
	$necessity = $_POST['necessity'];
	$phoneNumber = $_POST['phoneNumber'];

	$refer = file_get_contents('registered.html');

	$conn = new mysqli('localhost', 'root', '', 'bloodcon');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into patient(userName, phoneNumber, region, bloodGroup, necessity) values(?, ?, ?, ?, ?)" );
		$stmt->bind_param("sssss", $userName, $phoneNumber, $region, $bloodGroup, $necessity);
		$stmt->execute();
		echo $refer;
		$stmt->close();
	}
