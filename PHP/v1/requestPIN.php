<?php
	require_once "StudentPage.php";
	require_once "pdoconfig.php";
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
	
	$userID = $_SESSION['uID'];
	
	retry:
	$pin = rand(0, 999999);
	
	/*					COMMENTED CODE: TESTING FOR DUPLICATE PIN					*/
	//$sql1 = "SELECT * FROM student WHERE pin == '$pin'";
	//$cResult = $pdo->query($sql1);
	
	//if($cResult == NULL){
		$sql = "UPDATE student SET pin = '$pin' WHERE studentID = '$userID'";
		$result = $pdo->query($sql);
		//echo "<pre>				Your PIN is: " . $pin . "</pre>";
		echo '<script> alert("Your PIN is: ' . $pin . '")</script>';
	//}else{
		//goto retry;
	//}
	
?>