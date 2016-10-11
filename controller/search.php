<?php 
	include_once '../model/curd_operations.php';
	include_once '../model/db.php';
	$conn=db_connect();
	$raw_values = $_POST;
	print_r($raw_values);
	$sel=select('*','donor_info', array("b_group" => $raw_values['bg']),$conn);
	$suc=execute_query($sel);
	print_r($sel);
 ?>
