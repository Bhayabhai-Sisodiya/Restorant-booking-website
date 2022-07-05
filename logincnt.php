<?php
	$email = $_POST['email'];
	$password = $_POST['pass'];

	// Database connection
	$conn = new mysqli('localhost','root','','signin details');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		// $stmt = $conn->prepare("insert into signuptbl(fname,email,phno,pass) values(?, ?, ?, ?)");
		// $stmt->bind_param("ssis", $firstName,$email,$number,$password);

        $result = $conn->query("select pass from signuptbl where email = '$email'");
        if($result === $password){
           echo "login successfully";
        }else{
            echo "Username or password is not correct";
        }
		
		$conn->close();
	}
?>