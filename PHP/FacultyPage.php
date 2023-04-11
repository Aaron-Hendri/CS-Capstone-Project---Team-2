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
	<a href="../TeamProject/loginPage.php" style = "padding-top:40px; float:right;">
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

	<button class="tablinks" onclick="openTab(event, 'ListAdvisers')" id="ListAdvisersPage"> List Advisers </button>
	<button class="tablinks" onclick="openTab(event, 'ListClasses')" id="ListClassesPage"> List Classes </button>
	<button class="tablinks" onclick="openTab(event, 'TeachingSchedule')" id="TeachingSchedulePage"> Teaching Schedule </button>
	<button class="tablinks" onclick="openTab(event, 'ClassRosters')" id="ClassRostersPage"> Class Rosters </button>
	<button class="tablinks" onclick="openTab(event, 'PrintStudentSchedule')" id="PrintStudentSchedulePage"> Print Student Schedule </button>
	<button class="tablinks" onclick="openTab(event, 'EnrollaStudent')" id="EnrollaStudentPage"> Enroll a Student </button>
	<button class="tablinks" onclick="openTab(event, 'RequestOverride')" id="RequestOverridePage"> Request Override </button>
	<button class="tablinks" onclick="openTab(event, 'ContactStudents')" id="ContactStudentsPage"> Contact Students </button>	
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

<!-- FACULTY LINKS -->
<div id="ListAdvisers" class="tabcontent"> <!-- Used in Secretary and Chair -->

    <div class = "mainbox">
        <p>List Advisers</p>
    </div>

	<div class = "listadvisers">

		<?php
		
			require_once "pdoconfig.php";
	
	try{
		$pdo = new PDO($attr, $db_user, $db_pass, $opts);
	}catch(PDOException $e){
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}
	
	$sql = "SELECT * FROM faculty INNER JOIN facultyadvisor ON faculty.facultyID=facultyadvisor.facultyID GROUP BY facultyadvisor.facultyID";
	$result = $pdo->query($sql);
	
	
	if(1==1){
        echo "<table border='1' bgcolor='goldenrod'>";
       	echo "<tr><td><b>Faculty ID</td></b><td><b>First Name</td></b><td><b>Last Name</td></b><td><b>email</td></b><td><b>Office</td></b><td><b>Phone</td></b></tr> \n";
	   
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>{$row['facultyID']}</td><td>{$row['firstName']}</td><td>{$row['lastName']}</td><td>{$row['emailAddress']}</td><td>{$row['officeLocation']}</td><td>{$row['phoneNum']}</td></tr>\n";	
		}
		echo "</table>";
		}
 //  please don't break.
?>
    </div>
</div>
<div id="ListClasses" class="tabcontent">

    <div class = "mainbox">
          <p>List of Classes</p>
    </div>
    <div class = "createauser">
        <form action = "listClass.php" method = "post">
            <button type = "submit" name = "listClass" class = "inputUser">List Courses</button>
        </form>
        </div>
</div>

<div id="TeachingSchedule" class="tabcontent">

    <div class = "mainbox">
          <p>Teaching Schedule</p>
    </div>

    <div class = "listadvisers">
        <p>Enter Faculty ID below:</p>
        <form action = "teachingSchedule.php" method = "post">
            SEARCH<input type="text" name="fid">
            <input type="submit" name = "teachingSchedule">
	</form>
<!--        <button type = "submit" name = "teachingSchedule" class = "inputUser">2nd Teaching Schedule</button>-->
    </div>
	</div>

<div id="ClassRosters" class="tabcontent">

	<div class = "mainbox">
  		<p>Class Rosters</p>
	</div>

</div>

<div id="PrintStudentSchedule" class="tabcontent">

	<div class = "mainbox">
  		<p>Print Student Schedule</p>
	</div>

</div>

<div id="EnrollaStudent" class="tabcontent"> <!-- used in Chair -->

	<div class = "mainbox">
  		<p>Enroll a Student</p>
	</div>

</div>

<div id="RequestOverride" class="tabcontent">

	<div class = "mainbox">
  		<p>Request Override</p>
	</div>

</div>

<div id="ContactStudents" class="tabcontent">

	<div class = "mainbox">
  		<p>Contact Students</p>
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