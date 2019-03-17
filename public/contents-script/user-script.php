<?php 
if( isset($_REQUEST['account_id'])){
	$account_id = $_REQUEST['account_id'];
}
else{
	header("location: http://localhost/clms/contents/index.html");
} 
?>
