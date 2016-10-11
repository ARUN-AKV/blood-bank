<?php  include_once 'header.php';  ?>
	<form action="../controller/reg.php" method="post">
		<div class="container">
			<h1 class="jumbotron text-center">Register</h1>
			<input class="form-control" type="text" name="name" placeholder="Name" required><hr>
			<input class="form-control" type="text" name="place" placeholder="Place" required><hr>
			<input class="form-control" type="email" name="email" placeholder="Email" required><hr>
			<input class="form-control" type="text" name="phone_no" placeholder="Phone_No" required><hr>
			<input class="form-control" type="text" name="b_group" placeholder="Blood group" required><hr>
			<button class="form-control btn btn-success" type="submit">Register</button>
		</div>
	</form>
<?php  include_once 'footer.php';  ?>