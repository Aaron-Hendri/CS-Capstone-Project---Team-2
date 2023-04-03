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
		$usertype = $_POST['user_type'];

		if($usertype == "student")
		{
		$sid = $_POST['student_id'];
		$user = $_POST['student_user'];
		$pass = $_POST['student_password'];
		$fname = $_POST['student_firstName'];
		$lname = $_POST['student_lastName'];
		$major = $_POST['student_major'];
		$email = $_POST['student_email'];
		$class = $_POST['student_classification'];
	
		$sql = "INSERT INTO student (studentID, firstName, lastName, major, emailAddress, class) VALUES('$sid', '$fname', '$lname', '$major', '$email', '$class')";
		
		$result = $pdo->query($sql);

		$sql2 = "INSERT INTO login (username, password, userType) VALUES('$user', '$pass', '$usertype')";

		$result = $pdo->query($sql2);
		}
		else if($usertype == "faculty" || $usertype == "secretary" || $usertype == "chair")
		{
			$fid = $_POST['faculty_id'];
			$user = $_POST['faculty_user'];
			$pass = $_POST['faculty_password'];
			$fname = $_POST['faculty_firstName'];
			$lname = $_POST['faculty_lastName'];
			$email = $_POST['faculty_email'];
			$office = $_POST['faculty_office'];
			$phone = $_POST['faculty_phone'];

			$sql = "INSERT INTO faculty (facultyID, firstName, lastName, phoneNum, emailAddress, officeLocation) VALUES('$fid', '$fname', '$lname', '$email', '$office', '$phone')";
		
			$result = $pdo->query($sql);

			$sql2 = "INSERT INTO login (username, password, userType) VALUES('$user', '$pass', '$usertype')";

			$result = $pdo->query($sql2);

		}
		else if($usertype == "admin")
		{
			$user = $_POST['admin_user'];
			$pass = $_POST['admin_password'];

			$sql = "INSERT INTO login (username, password, userType) VALUES('$user', '$pass', '$usertype')";

			$result = $pdo->query($sql);
		}

	//}
	// Close the database connection and statement
	//mysqli_close($conn);
	
?>