<?php include('connect.php'); ?>
<?php 
	
	if(isset($_GET['id'])){ 
	$id= $_GET['id'];

	$sql = "SELECT * FROM categories WHERE 	id='$id'";
	$result = mysqli_query($conn,$sql);
 	$row = mysqli_fetch_assoc($result);

 }
 include('header.php'); 
 ?>

	<a href="category.php" class="btn btn-success">Back</a><br><br>

<div class="content">
	<h1>Edit Category</h1>
	
	<form method="POST" action="category_update.php?id=<?php echo $row['id'];?>">
	  <div class="form-group">
	    <label for="Title">Title</label>
	    <input type="text" class="form-control" id="title" value="<?php echo $row['title']; ?>" name="title">
	  </div>

	  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
		
</div>

<?php include('footer.php'); ?>