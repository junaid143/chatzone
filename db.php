<?php
echo"hello";
$conn=new mysqli("localhost","krutika","krutika123","mydb");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);

}
echo"Connection OK!";

$result = $conn->query("select * from student");
echo "Rows= $result->num_rows";

$result->close();
$conn->close();
?>
