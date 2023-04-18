<?php
	//session_start();
	require_once "pdoconfig.php";
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
	
	$sql = "SELECT * FROM faculty INNER JOIN facultyadvisor ON faculty.facultyID=facultyadvisor.facultyID GROUP BY facultyadvisor.facultyID";
	$result = $pdo->query($sql);
	
	
	if(isset($_POST['listAdvisers'])){
        echo "<table border='1' bgcolor='goldenrod'>";
       	echo "<tr><td><b>Faculty ID</td><td><b>First Name</td><td><b>Last Name</td><td><b>email</td><td><b>Office</td><td><b>Phone</td></tr>\n";
	   
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$row['facultyID']}</td><td>{$row['firstName']}</td><td>{$row['lastName']}</td><td>{$row['emailAddress']}</td><td>{$row['officeLocation']}</td><td>{$row['phoneNum']}</td></tr>\n";
/*			echo 'Faculty ID:	    ' . htmlspecialchars($row['facultyID'])	. "<br>";
			echo 'First Name:   	' . htmlspecialchars($row['firstName'])	. "<br>";
			echo 'Last Name:	    ' . htmlspecialchars($row['lastName'])	. "<br>";
			echo 'email:    	    ' . htmlspecialchars($row['emailAddress'])	. "<br>";
			echo 'Office Location:	' . htmlspecialchars($row['officeLocation']). "<br>";
            echo 'Office Phone:     ' . htmlspecialchars($row['phoneNum'])      . "<br>";
*/		
		}
	}

?>