<?php 
	include('conn.php');
	// global array
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "SELECT * FROM tbluser_accounts WHERE username = '$username'";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	if(empty($username) && empty($password)){
		$error_message =  "The Username and Password field is required";
		header("location: http://localhost/clms/contents/login.php?error_message=".$error_message);
	}
	else if(empty($username)){
		$error_message =  "The Username field is required";
		header("location: http://localhost/clms/contents/login.php?error_message=".$error_message);
	}
	else if(empty($password)){
		$error_message =  "The Password field is required";
		header("location: http://localhost/clms/contents/login.php?error_message=".$error_message);
	}
	else if($result->num_rows == 1){
		if($row['password'] == $password){
			if($row['user_type'] == "admin"){
				
			}
			else{
				$account_id = $row['user_account_id'];
				header("location: ../contents/user.php?account_id=".$account_id);
			}
		}
		else{
			$error_message =  "Invalid Username/Password";
			header("location: http://localhost/clms/contents/login.php?error_message=".$error_message);
		}					
	}
	else {
		$error_message =  "Invalid Username/Password";
		header("location: http://localhost/clms/contents/login.php?error_message=".$error_message);
	}
?>