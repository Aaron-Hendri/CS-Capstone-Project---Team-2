<?php
	//session_start();
	require_once "pdoconfig.php";
	require_once 'AdminPage.php';
	//$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

	/*if($conn->connect_error){
		die("Connection Failed: ".$conn->connect_error);
	}*/
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
	
	//TROUBLESHOOT: Commented out If for button 'inputUser'
	//Unsure of possible side-effects; insertion regardless of Admin action when this file is called?
	//if(isset($_POST['inputUser'])){
		$sid = $_POST['student_id'];
		$fname = $_POST['student_firstName'];
		$lname = $_POST['student_lastName'];
		$major = $_POST['student_major'];
		$email = $_POST['student_email'];
		$class = $_POST['student_classification'];

		$pass = $_POST['student_password'];
		$usertype = $_POST['user_type'];
	
		$sql = "INSERT INTO student (studentID, firstName, lastName, major, emailAddress, class) VALUES('$sid', '$fname', '$lname', '$major', '$email', '$class')";
		
		$result = $pdo->query($sql);

		$sql2 = "INSERT INTO login (username, password, userType) VALUES('$sid', '$pass', '$usertype')";

		$result = $pdo->query($sql2);


	//}
	// Close the database connection and statement
	//mysqli_close($conn);
	
?>