<?php
	
	$host = "localhost";
	$user = "formdb";
	$password = "karthi@10";
	$conn = mysqli_connect($host,$user,$password);
	
	if(!$conn){
		echo "Could not connect";
	}
	echo "Connected";
	mysqli_close($conn);
	
}
?>
