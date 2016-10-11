<?php 
	
	include_once '../model/curd_operations.php';
	include_once '../model/db.php';
	$raw_values = $_POST;
	$conn=db_connect();
	$sql = insert('donor_info',$raw_values,$conn);
	$success=execute_query($sql,$conn);
	if(!$success){
		header('Location:../view/home.php?status=register-success');
	}else{
		header('Location:../view/home.php?status=register-failed');
	}
 ?>