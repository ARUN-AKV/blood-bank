<?php 
	
	include_once 'curd_operations.php';

	function db_connect(){
		$connection = mysqli_connect("localhost","root","","blood_bank");
		
	}

 ?>