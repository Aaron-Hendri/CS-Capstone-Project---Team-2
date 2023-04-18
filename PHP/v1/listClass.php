<?php
	//session_start();
	require_once "pdoconfig.php";
	//require_once "AdminPage.php";
	//$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

	/*if($conn->connect_error){
		die("Connection Failed: ".$conn->connect_error);
	}*/
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
	
	$sql = "SELECT * FROM course";
	$result = $pdo->query($sql);
	
	
	if(isset($_POST['listClass'])){
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			echo 'Course ID:	' . htmlspecialchars($row['courseID'])	. "<br>";
			echo 'Course Name:	' . htmlspecialchars($row['courseName'])	. "<br>";
			echo 'Course Location:	' . htmlspecialchars($row['courseLocation'])	. "<br>";
			echo 'Course date:	' . htmlspecialchars($row['date'])	. "<br>";
			echo 'Course Time:	' . htmlspecialchars($row['time'])	. "<br>";
		
		}
	}
	// Close the database connection and statement
	//mysqli_close($conn);
	
?>