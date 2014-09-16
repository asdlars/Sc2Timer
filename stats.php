<div class="body">
	<h1>Stats</h1>
	<table>		
	<?php 
	$con=mysqli_connect("localhost","egp","egp.drop.500","sedice");

	$result = mysqli_query($con,"SELECT * from querys");
	while($row = mysqli_fetch_array($result))
	  {
	  print_r("<tr><td>".$row['t'] . "</td><td>" . $row['l']."</td></tr>");
	  }
	mysqli_close($con);
	?>
	</table>
</div>