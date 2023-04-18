<?php
	require_once "StudentPage.php";
	require_once "pdoconfig.php";
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
	
	$cType = $_POST['subjectName'];
	
	$sql1 = "SELECT * FROM course WHERE subject == '$cType'";
	
	if(isset($_POST['showCourses'])){
	echo "<table border='1' bgcolor='goldenrod'>";
    echo "<tr><td><b>Course ID</td></b><td><b>Course Name</td></b><td><b>Location</td></b><td><b>Subject</td></b><td><b>Date</td></b><td><b>Time</td></b></tr> \n";
	   
	while($row = $result->fetch(PDO::FETCH_ASSOC)){
		echo "<tr><td>{$row['courseID']}</td><td>{$row['courseName']}</td><td>{$row['courseLocation']}</td><td>{$row['subject']}</td><td>{$row['date']}</td><td>{$row['time']}</td></tr>\n";	
	}
	echo "</table>";
	}
?>