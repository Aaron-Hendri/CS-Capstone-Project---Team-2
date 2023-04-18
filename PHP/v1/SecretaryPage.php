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

	<button class="tablinks" onclick="openTab(event, 'ListCSstudents')" id="ListCSstudentsPage"> List CS Students </button>
	<button class="tablinks" onclick="openTab(event, 'ListITstudents')" id="ListITstudentsPage"> List IT Students </button>
    <button class="tablinks" onclick="openTab(event, 'ListAdvisers')" id="ListAdvisersPage"> List Advisers </button>
	<button class="tablinks" onclick="openTab(event, 'SignStudentToAdviser')" id="SignStudentToAdviserPage"> Sign a Student To an Adviser </button>
	<button class="tablinks" onclick="openTab(event, 'ContactFaculty')" id="ContactFacultyPage"> Contact Faculty </button>
	<button class="tablinks" onclick="openTab(event, 'ContactStudent')" id="ContactStudentPage"> Contact Student </button>
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

<!-- SECRETARY LINKS -->
<div id="ListCSstudents" class="tabcontent">  <!-- used in Chair -->

	<div class = "mainbox">
  		<p>List of CS Students</p>
	</div>

</div>

<div id="ListITstudents" class="tabcontent">  <!-- used in Chair -->

	<div class = "mainbox">
  		<p>List of IT Students</p>
	</div>

</div>

<div id="ListAdvisers" class="tabcontent"> <!-- Used in Secretary and Chair -->

	<div class = "mainbox">
  		<p>List Advisers</p>
	</div>

</div>

<div id="SignStudentToAdviser" class="tabcontent">  <!-- used in Chair -->

	<div class = "mainbox">
  		<p>Sign a Student to an Advisor</p>
	</div>

</div>

<div id="ContactFaculty" class="tabcontent">  <!-- used in Chair -->

	<div class = "mainbox">
  		<p>Contact Faculty</p>
	</div>

</div>

<div id="ContactStudent" class="tabcontent">  <!-- used in Chair -->

	<div class = "mainbox">
  		<p>Contact Student</p>
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