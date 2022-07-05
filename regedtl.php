<?php
	$date = $_POST['date'];
    $time = $_POST['time'];
	$firstName = $_POST['name'];
	$number = $_POST['phno'];
	$members= $_POST['members'];

	// Database connection
	$conn = new mysqli('localhost','root','','signin details');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into regedtl(date,time,name,phno,members) values(?, ?, ?, ?,?)");
		$stmt->bind_param("iisis", $date,$time,$firstname,$number,$members);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>