<?php
$host="localhost";
$user="root";
$pass="";
$db="data";

$conn=mysqli_connect($host,$user,$pass,$db);

if (! $conn) {
	die('couldnot connect with database' . mysqli_error());
}

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob = date('Y-m-d',  strtotime($_POST['date']));
$gender=$_POST['gender'];
$language=$_POST['lang'];
$about=$_POST['about'];

$sql="INSERT INTO work(name,email,password,dob,gender,language,about) VALUES ('$name','$email','$password','$dob','$gender','$language','$about')";
$result=mysqli_query($conn,$sql);

if (! $result) {
	die('could not insert data' .mysqli_error($conn));
}

if ($result) {
	header('location: class_form.php');
}
?>