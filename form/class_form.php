<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h4 class="text-center">Register form</h4>
				<hr>
				<form action="insert.php" method="POST" class="form">
                    <div class="form-group row">
                    	<label for="name" class="col-3">Name :</label>
                    	<div class="col-9">
                    		<input type="text" name="name" required="" placeholder="Enter your name" class="form-control form-control-sm">
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<label for="email" class="col-3">Email :</label>
                    	<div class="col-9">
                    		<input type="text" name="email" required="" placeholder="Enter your email" class="form-control form-control-sm">
                    	</div>
                    </div>
                     <div class="form-group row">
                    	<label for="password" class="col-3">Password :</label>
                    	<div class="col-9">
                    		<input type="password" name="password" required="" placeholder="Enter your Password" class="form-control form-control-sm">
                    	</div>
                    </div>
                        <div class="form-group row">
                    	<label for="dob" class="col-3">Date Of Birth :</label>
                    	<div class="col-9">
                    		<input type="date" name="date" required="" placeholder="y-m-d" class="form-control form-control-sm">
                    	</div>
                    </div>
                     <div class="form-group row">
                    	<label for="dob" class="col-3">Gender :</label>
                    	<div class="col-9">
                    		<div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="male" name="gender">
                            <label class="form-check-label" for="materialInline1">Male</label>
                            </div>

<!-- female -->
                    <div class="form-check form-check-inline">
                         <input type="radio" class="form-check-input" id="female" name="gender">
                         <label class="form-check-label" for="female">Female</label>
                    </div>

<!-- other -->
                        <div class="form-check form-check-inline">
                           <input type="radio" class="form-check-input" id="other" name="gender">
                           <label class="form-check-label" for="materialInline3">Other</label>
                       </div>
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<label for="dob" class="col-3">Language You Want :</label>
                    	<div class="col-9">
                    		<div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="php" name="lang" value="php">
                            <label class="form-check-label" for="php">PHP</label>
                            </div>

<!-- female -->
                    <div class="form-check form-check-inline">
                         <input type="checkbox" class="form-check-input" id="java" name="lang" value="java">
                         <label class="form-check-label" for="java">JAVA</label>
                    </div>

<!-- other -->
                        <div class="form-check form-check-inline">
                           <input type="checkbox" class="form-check-input" id="other" name="lang">
                           <label class="form-check-label" for="materialInline3">Other</label>
                       </div>
                    	</div>
                    </div>
                    <div class="form-group row">
                    	<label for="email" class="col-3">About Yourself :</label>
                    	<div class="col-9">
                    		<textarea name="about" id="about" cols="20" rows="10" class="form-control form-control-sm"></textarea>
                    	</div>
                    </div>
                     <div class="form-group row">
                    	<label  class="col-3"></label>
                    	<div class="col-9">
                    		<button type="reset" name="reset" class="btn btn-outline-success">Reset</button>
                    		<button type="submit" name="submit" class="btn btn-outline-danger">Submit</button>
                    	</div>
                    </div>	
				</form>
				<hr>

				<table class="table table-striped">
					<thead>
						<tr class="table-success">
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>D.O.B</th>
							<th>Gender</th>
							<th>Language</th>
							<th>About-Yourself</th>
							<th>Action</th>
						</tr>
					</thead>
                    <?php
                      $host="localhost";
                      $user="root";
                      $pass="";
                      $db="data";

                      $conn=mysqli_connect($host,$user,$pass,$db) or die();
                      $sql="SELECT *FROM work";
                      $result=mysqli_query($conn,$sql);

                      if ($result) {
                          while ($row=mysqli_fetch_assoc($result)) {
                             
                      $id=$row['id'];
                      $name=$row['name'];
                      $email=$row['email'];
                      $password=$row['password'];
                      $dob= DateTime::createFromFormat('dmY', $row['date']);
                      $gender=$row['gender'];
                      $Language=$row['lang'];
                      $about=$row['about'];

                    ?>
					<tbody>
						<tr>
							<td><?php echo $name; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $password; ?></td>
                            <td><?php $date = date('F d, y, g:1:s a');
                            echo $date; ?></td>
                            <td><?php echo $gender; ?></td>
                            <td><?php echo $language; ?></td>
                            <td><?php echo $about; ?></td>

						</tr>
					</tbody>
                    <?php
			  }
            }
            ?>

				</table>
			</div>
		</div>
	</div>
</body>
</html>