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

	<button class="tablinks" onclick="openTab(event, 'Create User')" id="CreateUserPage"> Create User </button>
	<button class="tablinks" onclick="openTab(event, 'Delete User')" id="DeleteUserPage"> Delete User </button>
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



<!-- ADMIN LINKS -->
<div id="CreateStudent" class="tabcontent">  

	<div class = "mainbox">
  		<p>Create a Student User</p>
	</div>


	<div class = "createauser">
	<form method="post" action="addUser.php"> 
		User Type: <input type = text name = "user_type" id="user_type" value="student" readonly>
		<br><br>
		User ID: <input type = "text" name = "student_id" id="student_id" required="required">
		<br><br>
		Password: <input type = "text" name = "student_password" id="student_password" required="required">
		<br><br>
		Username: <input type = "text" name = "student_user" id="student_user" required="required">
		<br><br>
		First Name: <input type = "text" name = "student_firstName" id="student_firstName" required="required">
		<br><br>
		Last Name: <input type = "text" name = "student_lastName" id="student_lastName" required="required">
		<br><br>
		Email Address: <input type = "text" name = "student_email" id="student_email" required="required">
		<br><br>
		Major: <input type = "text" name = "student_major" id="student_major" required="required">
		<br><br>
		Classification: <input type = "text" name = "student_classification" id="student_classification" required="required">
		<br><br>
		<div class = "input_spacing">
		<button class = "inputUser" type="submit">Create User</button>
		</form>
		</div>
	</div>
	</div>

</div>

<div id="CreateFaculty" class="tabcontent">  

	<div class = "mainbox">
  		<p>Create a Falculty User</p>
	</div>

	<div class = "createauser">
	<form method="post" action="addUser.php">
		User Type: <input type = text name = "user_type" id="user_type" value="faculty" readonly>
		<br><br>
		User ID: <input type = "text" name = "faculty_id" id="faculty_id" required="required">
		<br><br>
		Username: <input type = "text" name = "faculty_user" id="faculty_user" required="required">
		<br><br>
		Password: <input type = "text" name = "faculty_password" id="faculty_password" required="required">
		<br><br>
		First Name: <input type = "text" name = "faculty_firstName" id="faculty_firstName" required="required">
		<br><br>
		Last Name: <input type = "text" name = "faculty_lastName" id="faculty_lastName" required="required">
		<br><br>
		Email Address: <input type = "text" name = "faculty_email" id="faculty_email" required="required">
		<br><br>
		Office Location: <input type = "text" name = "faculty_office" id="faculty_office" required="required">
		<br><br>
		Phone Number: <input type = "text" name = "faculty_phone" id="faculty_phone" required="required">
		<br><br>
	<div class = "input_spacing">
         	<button class = "inputUser" type="submit">Create User</button>
		</form>
	</div>
	</div>

</div>

<div id="CreateSecretary" class="tabcontent">  

	<div class = "mainbox">
  		<p>Create a Secretary User</p>
	</div>

	<div class = "createauser">
	<form method="post" action="addUser.php">
		User Type: <input type = text name = "user_type" id="user_type" value="secretary" readonly>
		<br><br>
		User ID: <input type = "text" name = "faculty_id" id="faculty_id" required="required">
		<br><br>
		Username: <input type = "text" name = "faculty_user" id="faculty_user" required="required">
		<br><br>
		Password: <input type = "text" name = "faculty_password" id="faculty_password" required="required">
		<br><br>
		First Name: <input type = "text" name = "faculty_firstName" id="faculty_firstName" required="required">
		<br><br>
		Last Name: <input type = "text" name = "faculty_lastName" id="faculty_lastName" required="required">
		<br><br>
		Email Address: <input type = "text" name = "faculty_email" id="faculty_email" required="required">
		<br><br>
		Office Location: <input type = "text" name = "faculty_office" id="faculty_office" required="required">
		<br><br>
		Phone Number: <input type = "text" name = "faculty_phone" id="faculty_phone" required="required">
		<br><br>
	<div class = "input_spacing">
         	<button type="submit" class = "inputUser">Create User</button>
		</form>
	</div>
	</div>

</div>

<div id="CreateChair" class="tabcontent">  <!-- used in Chair -->

	<div class = "mainbox">
  		<p>Create a Chair User</p>
	</div>

    <div class = "createauser">
	<form method="post" action="addUser.php">
		User Type: <input type = text name = "user_type" id="user_type" value="chair" readonly>
		<br><br>
		User ID: <input type = "text" name = "faculty_id" id="faculty_id" required="required">
		<br><br>
		Username: <input type = "text" name = "faculty_user" id="faculty_user" required="required">
		<br><br>
		Password: <input type = "text" name = "faculty_password" id="faculty_password" required="required">
		<br><br>
		First Name: <input type = "text" name = "faculty_firstName" id="faculty_firstName" required="required">
		<br><br>
		Last Name: <input type = "text" name = "faculty_lastName" id="faculty_lastName" required="required">
		<br><br>
		Email Address: <input type = "text" name = "faculty_email" id="faculty_email" required="required">
		<br><br>
		Office Location: <input type = "text" name = "faculty_office" id="faculty_office" required="required">
		<br><br>
		Phone Number: <input type = "text" name = "faculty_phone" id="faculty_phone" required="required">
		<br><br>
	<div class = "input_spacing">
         	<button type="submit" class = "inputUser">Create User</button>
		</form>
	</div>
	</div>
    
</div>

<div id="CreateAdmin" class="tabcontent">  <!-- used in Chair -->

	<div class = "mainbox">
  		<p>Create a Admin User</p>
	</div>

    <div class = "createauser">
	<form method="post" action="addUser.php">
		User Type: <input type = text name = "user_type" id="user_type" value="admin" readonly>
		<br><br>
		Username: <input type = "text" name = "admin_user" id="admin_user" required="required">
		<br><br>
		Password: <input type = "text" name = "admin_password" id="admin_password" required="required">
        <br><br>
	<div class = "input_spacing">
         	<button type="submit" class = "inputUser">Create User</button>
		</form>
	</div>
	</div>

</div>


<div id="Create User" class="tabcontent">

	<div class = "mainbox">
  		<p>Create New User Page</p>
	</div>

	<div class = "createuserlinks">
	<a href="JavaScript:openTab(event, 'CreateStudent')" class = "createusertext"> Create a Student User </a>
    <br><br><br><br>
	<a href="JavaScript:openTab(event, 'CreateFaculty')" class = "createusertext"> Create a Faculty User </a>
    <br><br><br><br>
	<a href="JavaScript:openTab(event, 'CreateSecretary')" class = "createusertext"> Create a Secretary User </a>
    <br><br><br><br>
	<a href="JavaScript:openTab(event, 'CreateChair')" class = "createusertext"> Create a Chair User </a>
    <br><br><br><br>
	<a href="JavaScript:openTab(event, 'CreateAdmin')" class = "createusertext"> Create an Admin User </a>
</div>

</div>

<div id="Delete User" class="tabcontent">

	<div class = "mainbox">
  		<p>Delete User Page</p>
	</div>

	<div class = "deleteuser">
		<p>Delete Users</p>
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