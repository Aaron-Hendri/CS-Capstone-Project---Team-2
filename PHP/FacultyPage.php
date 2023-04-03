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

</div>

<div id="ListClasses" class="tabcontent">

	<div class = "mainbox">
  		<p>List of Classes</p>
	</div>

</div>

<div id="TeachingSchedule" class="tabcontent">

	<div class = "mainbox">
  		<p>Teaching Schedule</p>
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