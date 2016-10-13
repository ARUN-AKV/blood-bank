<?php include_once 'header.php'; ?>
<?php 
	include_once '../model/curd_operations.php';
	include_once '../model/db.php';
	$conn=db_connect();
	$raw_values = $_POST;
  $result = select('*','donor_info',array('b_group' => $raw_values['bg'],'place' => $raw_values['place'] ),$conn);
  // print_r($result);
	echo '<div class="page-header text-center "><h1>Donors Available.......</h1></div> 
  <table class="table table-hover table-responsive">
  <thead>
  	<th>S.no</th>
    <th class="col-md-2">Name</th>
    <th>Age</th>
    <th>Location</th>
    <th>Phone no</th>
    <th>Email Id</th>
  </thead>';
  $i=1;
  foreach ($result as $row) {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['age']."</td>";
  echo "<td>".$row['place']."</td>";
  echo "<td>".$row['phone_no']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "</tr>";
  ++$i;
}
?>
