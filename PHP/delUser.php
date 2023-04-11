<?php
	require_once "pdoconfig.php";
	require_once 'AdminPage.php';
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
	
	if(isset($_POST['delUser'])){
		//$uName = $_POST['username'];
		$id = $_POST['userID'];

		$sql_s = "SELECT * FROM student WHERE studentID = '$id'";
		$sql_f = "SELECT * FROM faculty WHERE facultyID = '$id'";
		
		$result_s = $pdo->query($sql_s);
		$result_f = $pdo->query($sql_f);

/*
		if(!empty($result_f))
		{
			$row1 = $result_f->fetch(PDO::FETCH_ASSOC);
			$fname = $row1['firstName'];
			$lname = $row1['lastName'];
		}
		else if(!empty($result_s))
		{
			$row1 = $result_s->fetch(PDO::FETCH_ASSOC);
			$fname = $row1['firstName'];
			$lname = $row1['lastName'];
		}*/
		if($result_s->rowcount() != 0)
		{
			$row1 = $result_s->fetch(PDO::FETCH_ASSOC);
			$fname = $row1['firstName'];
			$lname = $row1['lastName'];
		}
		else if($result_f->rowcount() != 0)
		{
			$row2 = $result_f->fetch(PDO::FETCH_ASSOC);
			$fname = $row2['firstName'];
			$lname = $row2['lastName'];
		}

		$user = substr($fname, 0, 1) . substr($lname, 0, 1) . $id;

		$sql1 = "SELECT * FROM login WHERE username = '$user'";
		$result1 = $pdo->query($sql1);
		$row3 = $result1->fetch(PDO::FETCH_ASSOC);
		$uType = $row3['userType'];
		
		if($uType == "student"){
			$del1 = "DELETE FROM student WHERE studentID = '$id'";
			$del2 = "DELETE FROM login WHERE username = '$user'";
			$result2 = $pdo->query($del1);
			$result3 = $pdo->query($del2);
		}else if($uType == "faculty" || $uType == "secretary" || $uType == "chair"){
			$del1 = "DELETE FROM faculty WHERE facultyID = '$id'";
			$del2 = "DELETE FROM login WHERE username = '$user'";
			$result2 = $pdo->query($del1);
			$result3 = $pdo->query($del2);
		}else{}
		
	}
?>