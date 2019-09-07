<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>
<body align="center">
    

   <div class="container">
   	<div class="col-12 content-center">
	<form action="#" method="GET">
		<h2><u>Student-registration</u></h2>
		<div class="form-group">
			<label for="Name">Name :</label>
			<input type="text" name="name" placeholder="User Name" required="User name">
		</div>
		<div class="form-group">
			<label for="Password">Password :</label>
			<input type="Password" name="password" placeholder="Password" required="user password" >
		</div>
		<div class="checkbox">
			<label><input type="checkbox">Remember me</label>
		</div>
		<button type="submit" class="btn btn-defualt">Submit</button>
	</form>
	</div>
	</div>
	<hr> 

	<?php
      $user=$_GET['name'];
      $pass=$_GET['password'];


  echo "MY name is " .$user. "<br>";
  echo "MY password is " .$pass;
?>
</body>
</html>