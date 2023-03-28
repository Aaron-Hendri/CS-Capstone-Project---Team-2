<?php
// Connect to the database
require_once "config.php";
//session_start();
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if($conn->connect_error){
  die("Connection Failed: ".$conn->connect_error);
}
echo "Connected successfully".'<br>';

if(isset($_POST['Login'])) {
  //if($_POST['userType'] == 'faculty')
  $myusername = $_POST['username'];
  $mypassword = $_POST['password'];

  $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
  //$sql = "select * from login";
  $result = $conn->query($sql);
  $row = mysqli_fetch_assoc($result);
  
  echo  'My username is '.$myusername.'<br>';
  echo  'My password is '.$mypassword.'<br>';
  echo $row.'<br>';

  if(mysqli_num_rows($result) == 1){
  //if($myusername = $row['username'] && $mypassword = $row['password']){
    header("location: MainPage.html");
  }
  else {
    $error = "Your Login Name or Password is invalid";
    echo $error;
 }
}
// Close the database connection and statement
mysqli_close($result);
mysqli_close($conn);
?>
