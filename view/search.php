<?php  include_once 'header.php';  ?>
	<form action="../controller/search.php" method="post">
		<h1 class="main-header text-center">SEARCH FOR BLOOD</h1>
		<div class="container">
			<input class="form-control" type="text" name="bg" placeholder="Enter Blood Group"><br>
			<button class="form-control btn btn-success" type="submit" id="search">Search</button>
		</div>
	</form>
<?php  include_once 'footer.php';  ?>