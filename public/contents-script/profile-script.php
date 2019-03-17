<?php
	include('conn.php');

	if( isset($_REQUEST['account_id'])){
		$account_id = $_REQUEST['account_id'];
	}
	else{
		header("location: http://localhost/clms/contents/index.html");
	}

	$sqlprofile = "SELECT * FROM tbluser_profile WHERE user_account_id = '$account_id'";
	$sqleduc= "SELECT * FROM tbluser_education WHERE user_account_id = '$account_id'";

	$resultprofile = $conn->query($sqlprofile);
	$resulteduc = $conn->query($sqleduc);

	$rowprofile = $resultprofile->fetch_assoc();
	$roweduc = $resulteduc->fetch_assoc();

	if($resultprofile->num_rows == 1){

		$first_name = $rowprofile['first_name'];
		$middle_name = $rowprofile['middle_name'];
		$last_name = $rowprofile['last_name'];
		$age = $rowprofile['age'];
		$phone_no = $rowprofile['phone_no.'];
		$email = $rowprofile['email_address'];
		$birth_place = $rowprofile['birth_place'];
		$date_of_birth = $rowprofile['date_of_birth'];
		$nationality = $rowprofile['nationality'];
		$sex = $rowprofile['sex'];
		$civil_status = $rowprofile['civil_status'];
		$blood_type = $rowprofile['blood_type'];
		$home_address = $rowprofile['home_address'];


		}

		if($resulteduc->num_rows == 1){

		$e_year = $roweduc['elementary_year'];
		$e_address = $roweduc['elementary_address'];
		$e_remarks = $roweduc['elementary_remarks'];
		$hs_year = $roweduc['highschool_year'];
		$hs_address = $roweduc['highschool_address'];
		$hs_remarks = $roweduc['highschool_remarks'];
		$c_year = $roweduc['college_year'];
		$c_address = $roweduc['college_address'];
		$c_remarks = $roweduc['college_remarks'];
		$p_year = $roweduc['post_grad_year'];
		$p_address = $roweduc['post_grad_address'];
		$p_remarks = $roweduc['post_grad_remarks'];
	


		}

?>
