<?php
	require_once 'conn.php';

			$clear = mysqli_query($conn,"TRUNCATE TABLE task");
			if($clear !==FALSE)
			{
				echo("All records have been cleard");
				header('location:index.php');
			}
			else
			{
				echo("All records have been not cleard");
			}
		
	
		
?>