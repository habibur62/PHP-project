<?php include('connect.php'); ?>
<?php
	
	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn,$sql);

?>

<?php include('header.php'); ?>

	<a href="category.php" class="btn btn-success">Back</a><br><br>

<div class="content">
	<h1>Add New Category</h1>
	
		<form method="POST" action="category_store.php">
	  <div class="form-group">
	    <label for="Title">Title</label>
	    <input type="text" class="form-control" id="title" placeholder="Enter a title" name="title">
	  </div>

	  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
		
</div>

<?php include('footer.php'); ?>