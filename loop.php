<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data access with dynamic method</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body align="center">
	<h2>Student Table</h2>
	<table border= "1">
		<thead>
			<tr>
				<th>S.N</th>
				<th>Name</th>
				<th>Address</th>
				<th>Email</th>
				<th>Phone</th>
				<th>College</th>
				<th>Organization</th>
			</tr>
		</thead>
		<tbody>
			<hr>
			
				<?php
                   $result=array(
                       array( 
                             'S.N'=>"1",
                             'Name'=>"Keshab Pal",
                             'Address'=>"Kanchanpur",
                             'Email'=>"keshabpal@gmail.com",
                             'College'=>"NAST",
                             'Organization'=>"Broadways",
                             'Phone'=>9812734573,
                       ),
                        array( 
                             'S.N'=>"2",
                             'Name'=>"Kamala Pal",
                             'Address'=>"dhangadhi",
                             'Email'=>"kamalapal@gmail.com",
                             'College'=>"KMC",
                             'Phone'=>9812765573,
                       ),
                     array( 
                             'S.N'=>"3",
                             'Name'=>"Hema Pal",
                             'Address'=>"Kathmandu",
                             'Email'=>"hemapal@gmail.com",
                             'College'=>"GGC",
                             'Phone'=>9812738573,
                       ),
                      array( 
                             'S.N'=>"4",
                             'Name'=>"Hemansi Pal",
                             'Address'=>"dadeldhura",
                             'Email'=>"hemansi@gmail.com",
                             'College'=>"CCRC",
                             'Phone'=>9812738753,
                       ),
                      array( 
                             'S.N'=>"5",
                             'Name'=>"mega Pal",
                             'Address'=>"bolton",
                             'College'=>"KCC",
                             'Email'=>"mega@gmail.com",
                             'Phone'=>9812732253,
                       ),
                      array( 
                             'S.N'=>"6",
                             'Name'=>"krish Pal",
                             'Address'=>"pokhara",
                             'College'=>"MMC",
                             'Email'=>"krish@gmail.com",
                             'Phone'=>9813738753,
                       )

                   );
                 
                 $len=count($result);

                 for ($i=0; $i < $len; $i++) { 
                 	?>
                      <tr>
			             <td><?php echo $result[$i]['S.N']; ?></td>
			  			 <td><?php echo $result[$i]['Name']; ?></td>
			   			 <td><?php echo $result[$i]['Address']; ?></td>
			   			 <td><?php echo $result[$i]['Email']; ?></td>
			   			 <td><?php echo $result[$i]['Phone']; ?></td>
			   			 <td><?php echo $result[$i]['College']; ?></td>
			   			 <td><?php echo $result[$i]['Organization']; ?></td>



			          </tr> 
                 	<?php
                 }

				?>
			
		</tbody>
	</table>
	<div class="row">
		<?php
          
         foreach ($result as $value) {
          	# code...
          } { 
          	?>
          	<div class="col-3">
			<div style=" border: 1px solid #ccc; padding: 5px; margin: 5px 5px;">
				<h3 class="text-center"><?php echo $value['Name'] ?></h3>
				<hr>
				<p>
					<strong>Address :</strong><?php echo $value['Address'] ?>
				</p>	
				<p>
					<strong>Email :</strong><?php echo $value['Email'] ?>
				</p>
				<p>
					<strong>Phone :</strong><?php echo $value['Phone'] ?>
				</p>
				<p>
					<strong>Phone :</strong><?php echo $value['College'] ?>
				</p>
				<?php
                     if (isset($value['Organization'])) {
                     	?>

                     	<p>
                     		<strong>Organization :</strong><?php echo $value['Organization'] ?>
                     	</p>
                     	<?php
                     }
				?>
			</div>
		</div>
          	<?php
          }
		?>
	</div>
</body>
</html>