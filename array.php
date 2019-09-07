<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array example</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Subject</th>
			<th>Address</th>
			<th>Phone</th>
		</tr>
	<?php
      $result=array(
      	array(
      	'Name'=>"Keshab Pal",
      	'Subject'=>"Bachelor of computer application",
      	'Address'=>"kathmandu",
      	'Phone'=>9812734573
      ),
      	array(
      		'Name'=>"Mahesh Bhatta",
      		'Subject'=>"Bachelor of computer application",
      		'Address'=>"kalaki",
      		'Phone'=>9810234471

      	),
      	array(
      		'Name'=>"Hari Bhatta",
      		'Subject'=>"Bachelor of Software Engineering",
      		'Address'=>"Pokhara",
      		'Phone'=>9810234561

      	)
      );


      $len = count($result);

      for ($i=0; $i < $len ; $i++) { 
      ?>
       <tr>
			<td><?php echo $result[$i]['Name'];?></td>
			<td><?php echo $result[$i]['Address'] ?></td>
			<td><?php echo $result[$i]['Subject'] ; ?></td>
			<td><?php echo $result[$i]['Phone'] ?></td>
		</tr>
      
      <?php
      }

	?>
	

	</table>
	<hr>

	<?php

	for ($i=0; $i < $len; $i++) { 
		?>
		<div class="col-3">
			<div style="border: 1px solid #ccc; padding: 5px; margin: auto;">

				<h3 class="text-center"><?php echo $result[$i]['Name'] ?>
					</h3>

             <hr>

             <p>
             	<strong>Email: </strong><?php echo $result[$i]['Subject']; ?>
             </p>

              <p>
              	<strong>Address: </strong><?php echo $result[$i]['Address']; ?>
              </p>


              <p>
              	<strong>Phone: </strong><?php echo $result[$i]['Phone']; ?>
              </p?

				
			</div>
		</div>
		<?php
	}
	?>
</body>
</html>