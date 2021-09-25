<?php
	$userName = $_POST['userName'];
	$bloodGroup = $_POST['bloodGroup'];
	$region = $_POST['region'];
	$criteria = $_POST['crit'];
	$phoneNumber = $_POST['phone'];
	$date = $_POST['donateDate'];
	$conditions = $_POST['condition'];


	$refer = file_get_contents('registered.html');

	$conn = new mysqli('localhost', 'root', '', 'bloodcon');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into donor(userName, phoneNumber, region, bloodGroup, lastDonationDate, previousCondition,  donationCriteria) values(?, ?, ?, ?, ?, ?, ?)" );
		$stmt->bind_param("sssssss", $userName, $phoneNumber, $region, $bloodGroup, $date, $conditions, $criteria);
		$stmt->execute();
		if($criteria=="blood"){
			$stmt = $conn->prepare("insert into blood(userName, bloodGroup, region,  phoneNumber) values(?, ?, ?, ?)" );
			$stmt->bind_param("ssss", $userName, $bloodGroup, $region, $phoneNumber);
			$stmt->execute();
		}else if($criteria=="plasma"){
			$stmt = $conn->prepare("insert into plasma(userName, bloodGroup, region,  phoneNumber) values(?, ?, ?, ?)" );
			$stmt->bind_param("ssss", $userName, $bloodGroup, $region, $phoneNumber);
			$stmt->execute();
		}else if($criteria=="platelet"){
			$stmt = $conn->prepare("insert into platelet(userName, bloodGroup, region,  phoneNumber) values(?, ?, ?, ?)" );
			$stmt->bind_param("ssss", $userName, $bloodGroup, $region, $phoneNumber);
			$stmt->execute();
		}else if($criteria=="white"){
			$stmt = $conn->prepare("insert into apheresis(userName, bloodGroup, region,  phoneNumber) values(?, ?, ?, ?)" );
			$stmt->bind_param("ssss", $userName, $bloodGroup, $region, $phoneNumber);
			$stmt->execute();
		}
		echo $refer;
		$stmt->close();
	}
