<?php
	session_start();
	$room =$_POST['room'];
	$date_1 = $_POST['date_1'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	$file = $_POST['file'];
	$description = $_POST['description'];
	// print_r($_POST);
	$con = mysqli_connect('localhost', 'root', '','wtl');
	if($con->connect_error){
		die('Connection Failed :'.$con->connect_error);
	}
	else{
		$sql ="INSERT INTO booking (room,dt,e_from,e_to,path,description,status) VALUES('$room','$date_1','$from','$to','$file','$description','pending')";
		//$query ="INSERT INTO application (room,description,dt,e_from,e_to,status) VALUES('$room','$description','$date','$from','$to','$status')";
		$rs = mysqli_query($con, $sql);
		//$rs1=mysqli_query($con,$query);
		if($rs){
			echo 'Request has been sent successfully.';
		}
		
	}
?>