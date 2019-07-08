<?php
$dbHost     = "localhost";
$dbUsername = "krutika";
$dbPassword = "krutika123";
$dbName     = "mydb";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);


}


$q1='INSERT INTO 'message'('id','message','user_name')
VALUES("","'.$message.'","'.$_SESSION['user_name'].'")';
$r1=mysqli_query($con.$q1);
while($row=mysqli_fetch_assoc($r)){
  $message=$row['message'];
  $user_name=$row['|']
}
if (isset($_POST['send'])){
$message=$_POST['message'];
}

if(mysqli_query($con,$q)){
  echo'<h4 style="color:red">'.$_SESSION['user_name'].'</h4>';
  echo'<p>'.$message.'</p>';
}
}


>
