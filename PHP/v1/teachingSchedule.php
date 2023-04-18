<?php

$search = $_POST['fid'];

require_once "pdoconfig.php";
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}

	$sql = "SELECT * FROM course INNER JOIN schedule ON schedule.courseID=course.courseID INNER JOIN faculty ON faculty.facultyID=schedule.facultyID WHERE schedule.facultyID='+$search+' GROUP BY course.courseID";
	$result = $pdo->query($sql);
	
	if(isset($_POST['teachingSchedule'])){
		echo "Faculty Member ID $search\n";
		echo "<table border='1' bgcolor='goldenrod'>";
       	echo "<tr><td><b>Course ID</td><td><b>Course Title</td><td><b>Room</td><td><b>Date</td><td><b>Time</td></tr>\n";
	   
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$row['courseID']}</td><td>{$row['courseName']}</td><td>{$row['courseLocation']}</td><td>{$row['date']}</td><td>{$row['time']}</td></tr>\n";
/*          echo 'Course ID:	    ' . htmlspecialchars($row['courseID'])	. "<br>";
			echo 'Course Name:   	' . htmlspecialchars($row['courseName'])	. "<br>";
			echo 'Course Location:	' . htmlspecialchars($row['courseLocation'])	. "<br>";
			echo 'Date:    	        ' . htmlspecialchars($row['date'])	. "<br>";
			echo 'Time:         	' . htmlspecialchars($row['time']). "<br>";
*/          		
		}
        echo"</table>";
	}
		
?>
		