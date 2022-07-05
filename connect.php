<?php
	$firstName = $_POST['fname'];
	$email = $_POST['email'];
	$number = $_POST['phno'];
	$password = $_POST['pass'];

	// Database connection
	$conn = new mysqli('localhost','root','','signin details');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into signuptbl(fname,email,phno,pass) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $firstName,$email,$number,$password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>