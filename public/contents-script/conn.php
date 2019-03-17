<?php 

	$conn = new mysqli('localhost','root','','clms');

	if($conn->errno > 0){
		die("Database Unreachable");
	}

?>

