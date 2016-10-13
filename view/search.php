<?php  include_once 'header.php';  ?>
	<form action="result.php" method="post">
		<h1 class="main-header text-center">SEARCH FOR BLOOD</h1>
		<div class="container">
			<input class="form-control" type="text" name="bg" placeholder="Enter Blood Group" required><br>
			<input class="form-control" type="text" name="place" placeholder="Location" required><br>
			<button class="form-control btn btn-success" type="submit" id="search">Search</button>
		</div>
	</form>
<?php  include_once 'footer.php';  ?>