<?php 
	$con = mysqli_connect("localhost","root","","a_database");

	$query = "SELECT * FROM `topic`";

	$result = $con->query($query);

	while($row = $result->fetch_assoc())
	{
		$a = $row['title'];
		$b = ($row['contain']);
		$myfile = fopen("folder/".$a.".txt", "w");
		fwrite($myfile, $b );
	}

	fclose($myfile);
?>