<?php
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$mobile = $_POST['mobile'];

	// Database connection
	$conn = new mysqli('localhost','root','','Customers');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(full_name ,email, password, mobile) values(?, ?, ?, ?)");
		$stmt->bind_param("sssi", $full_name,$email, $password, $mobile);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>