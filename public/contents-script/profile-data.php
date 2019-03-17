<?php


if(isset($_REQUEST['first_name'],$_REQUEST['middle_name'],$_REQUEST['last_name'],$_REQUEST['age'],$_REQUEST['phone_no'],$_REQUEST['email'],$_REQUEST['birth_place'],$_REQUEST['date_of_birth'],$_REQUEST['nationality'],$_REQUEST['sex'],$_REQUEST['civil_status'],$_REQUEST['blood_type'],$_REQUEST['home_address'])){

	$first_name = $_REQUEST['first_name'];
	$middle_name = $_REQUEST['middle_name'];
	$last_name = $_REQUEST['last_name'];
	$age = $_REQUEST['age'];
	$phone_no = $_REQUEST['phone_no'];
	$email = $_REQUEST['email'];
	$birth_place = $_REQUEST['birth_place'];
	$date_of_birth = $_REQUEST['date_of_birth'];
	$nationality = $_REQUEST['nationality'];
	$sex = $_REQUEST['sex'];
	$civil_status = $_REQUEST['civil_status'];
	$blood_type = $_REQUEST['blood_type'];
	$home_address = $_REQUEST['home_address'];

}
/*header("location: http://localhost/clms/contents/profile.php?first_name=".$first_name."&middle_name=".$middle_name."&last_name=".$last_name."&age=".$age."&phone_no=".$phone_no."&email=".$email."&birth_place=".$birth_place."&date_of_birth=".$date_of_birth."&nationality=".$nationality."&sex=".$sex."&civil_status=".$civil_status."&blood_type=".$blood_type."&home_address=".$home_address);*/


?>