<?php
	//session_start();
	require_once "StudentPage.php";
	require_once "pdoconfig.php";
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
	
	$userID = $_SESSION['uID'];
	
	$sql = "SELECT * FROM course WHERE courseID = (SELECT courseID FROM schedule WHERE schedule.studentID = '$userID')";

	$result = $pdo->query($sql);
	
	if(1==1){
        echo "<table border='1' bgcolor='goldenrod'>";
       	echo "<tr><td><b>Faculty ID</td></b><td><b>First Name</td></b><td><b>Last Name</td></b><td><b>email</td></b><td><b>Office</td></b><td><b>Phone</td></b></tr> \n";
	   
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$row['courseID']}</td><td>{$row['courseName']}</td><td>{$row['courseLocation']}</td><td>{$row['date']}</td><td>{$row['time']}</td></tr>\n";	
		}
		echo "</table>";
		}
?>