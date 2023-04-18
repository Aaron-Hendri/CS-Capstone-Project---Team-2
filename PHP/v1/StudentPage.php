<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Main.css" />
<style>
</style>
</head>
<body>

	<a href="" style = float:left;>
		<img src="bigc.png" alt="Cameron Homepage" style=width:125px;height:125px;>
	</a>
	<a href="loginPage.php" style = "padding-top:40px; float:right;">
		<img src="signout.png" width="40" height="40">
		<div class = signout>
			Sign Out
		</div> 
	</a>




<h2>
	Aggie Access
</h2>




<div class="tab">

  <button class="tablinks" onclick="openTab(event, 'Home')" id="HomePage">
   <img src="HomeImage.png" width="30" height="30" /> Home</button>

    <button class="tablinks" onclick="openTab(event, 'ContactAdvisor')" id="ContactAdvisorPage"> Contact Advisor </button>
	<button class="tablinks" onclick="openTab(event, 'ListCourses')" id="ListCoursesPage"> List Courses </button>
	<button class="tablinks" onclick="openTab(event, 'RequestPIN')" id="RequestPINPage"> Request PIN </button>
	<button class="tablinks" onclick="openTab(event, 'EnrollClasses')" id="EnrollClassesPage"> Enroll Classes </button>
	<button class="tablinks" onclick="openTab(event, 'PrintSchedule')" id="PrintSchedulePage"> Print Schedule </button>
</div>

<div id="Home" class="tabcontent">

	<div class = "mainbox">
  		<p>Home Page</p>
	</div>

	<div class = "quicklinksbox">
		<p>Quick Links</p>
		<button class="adminButton" onclick="openTab(event, 'Test')" id="TestPage"> Test </button>
	</div>
</div>


<div id="Test" class="tabcontent">

	<div class = "mainbox">
  		<p>Test Page</p>
	</div>

</div>


<!-- STUDENT LINKS -->
<div id="ContactAdvisor" class="tabcontent">

	<div class = "mainbox">
  		<p>Contact Advisor for Enrollment</p>
	</div>
	<div class="createauser">
	
		<form action = "contactAdvisor.php" method = "post">
			Subject: <input type = "text" name = "emailSubject" required = "required"></input>
			<br></br>
			Message: <input type = "text" name = "emailBody" required = "required"></input>
			<br></br>
			<button type = "submit" class = "inputUser" name="mailAdv">Submit</button>
		</form>
	</div>

</div>

<div id="ListCourses" class="tabcontent">

	<div class = "mainbox">
  		<p>List of Courses</p>
	</div>
	<div class = "tableDisplay">
		
	<?php
	//session_start();
	
	require_once "pdoconfig.php";
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
	
	$userID = $_SESSION['uID'];
	
	$sql = "SELECT * FROM course WHERE courseID IN (SELECT courseID FROM schedule WHERE schedule.studentID = '$userID')";

	$result = $pdo->query($sql);
	
	if(1==1){
        echo "<table border='1' bgcolor='goldenrod'>";
       	echo "<tr><td><b>Course ID</td></b><td><b>Course Name</td></b><td><b>Course Location</td></b><td><b>Subject</td></b><td><b>Date</td></b><td><b>Time</td></b><td></tr> \n";
	   
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$row['courseID']}</td><td>{$row['courseName']}</td><td>{$row['courseLocation']}</td><td>{$row['subject']}</td><td>{$row['date']}</td><td>{$row['time']}</td></tr>\n";	
		}
		echo "</table>";
		}
	?>
	</div>

</div>

<div id="RequestPIN" class="tabcontent">

	<div class = "mainbox">
  		<p>Request Enrollment PIN</p>
	</div>
	
	<div class = "createauser">
		<form action="requestPIN.php" method="post">
			<button type="submit" name="requestPIN" class="inputUser">Request Student PIN</button>
		</form>
	</div>
</div>

<div id="EnrollClasses" class="tabcontent">

	<div class = "mainbox">
  		<p>Enroll Classes</p>
	</div>
	
	<div class="tableDisplay">
		<form action="takePIN.php" method="post">
			Enter PIN:   <input type="text" name="entryPIN"/>
		</form>
		<form action="studentEnroll.php" method="post">
			
		
			<!--Select Subject: 
			<select name="subjectName">
				<option value = "1">CS</option>
				<option value = "2">IT</option>
				<option value = "3">MATH</option>
				<option value = "4">ENGL</option>
				<option value = "5">ENGR</option>
				<option value = "6">SES</option>
			</select>
			<input type="submit" value="SUBMIT" name="showCourses"/>-->
		</form>
	</div>
</div>

<div id="PrintSchedule" class="tabcontent">

	<div class = "mainbox">
  		<p>Print Schedule</p>
	</div>

</div>

<script>
function openTab(evt, TabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(TabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("HomePage").click();

//document.getElementById("AdminPage").style.display = "none"; // none hides the element
//document.getElementById("AdminPage").style.display = "initial"; // initial re-enables the element
</script>
   
</body>
</html>