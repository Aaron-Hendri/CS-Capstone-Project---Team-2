<?php
	//session_start();
	require_once "StudentPage.php";
	require_once "pdoconfig.php";
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
	
	$name = $_SESSION['uName'];
	$name2 = substr($name, 2, 7);
	
	$fID = "SELECT facultyID FROM facultyAdviser WHERE studentID == '$name2'";
	$studentEmail = "SELECT studentEmail FROM student WHERE studentID == '$name2";
	$facultyEmail = "SELECT facultyEmail FROM faculty WHERE facultyID == '$fID'";
	
	
	
	//$advisor = $pdo->query($sql);
	
	if(isset($_POST['mailAdv'])){
		
		$sub = $_POST['emailSubject'];
		$body = $_POST['emailBody'];
		$header = "From: " . $studentEmail;
		
		mail($facultyEmail, $sub, $body, $header);
	}
	
?>