<?php 
	
	include_once 'curd_operations.php';

	function db_connect(){
		$connection = mysqli_connect("localhost","root","","blood_bank");
		if (!$connection) {
			die("connection failed:".mysqli_connect_error());
			exit();
		}
		return $connection;
	}

	function execute_query($query,$link){
		if(!empty($link)){
			return mysqli_query($link,$query);
		}
		else{
			return mysqli_query(db_connect(),$query);
		}
	}

	function get_array_from_object($result){
		return mysqli_fetch_array($result, MYSQLI_ASSOC);
	}

	function sanitize($input,$con)
	{
		return mysqli_real_escape_string($con,$input);
	}
 	
 	function create_session($data){
 		session_start();
		$result = $data['0'];
		$_SESSION["result"] = $result;
		if(isset($_SESSION['result'])){
			return true;
		}
		return false;
	}
	
 ?>