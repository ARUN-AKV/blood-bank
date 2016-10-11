<?php 
	include_once '../model/curd_operations.php';
	include_once '../model/db.php';
	$conn=db_connect();
	$raw_values = $_POST;
	$sql= "SELECT * FROM donor_info WHERE b_group like '".$raw_values['bg']."'";
	$result = mysqli_query($conn,$sql);
	create_session($sql);
	if (!$result) {
		echo 'no data found';
	}else{
		header('Location:../view/report.php');
	}
 ?>
