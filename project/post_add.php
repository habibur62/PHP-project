<?php include('connect.php'); ?>
<?php
	
	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn,$sql);

	 include('header.php'); 
?>

	<a href="post_index.php" class="btn btn-success">Back</a><br><br>

<div class="content">
	<h1>Add New Post</h1>
	
		<form method="POST" action="post_store.php" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="Title">Title</label>
	    <input type="text" class="form-control" id="title" placeholder="Enter a title" name="title">
	  </div>
	  <div class="form-group">
	    <label for="Describtion">Describtion</label>
	    <textarea type="text" class="form-control" rows="10"placeholder="Enter your text" name="description"></textarea>
	  </div>
	  	  <div class="form-group">
	    <label for="Image">Image</label>
	    <input type="file" class="form-control"name="image">
	  </div>

	  <div class="form-group">
	    <label for="category">Category</label>
	    <select class="form-control" name="category_id">
	    	<option value="">Select Category</option>
	    	<?php while($row=mysqli_fetch_assoc($result)){ ?>

	    	<option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
	    	
			<?php }?>
	    </select>
	  </div>


	  <div class="form-group">
	    <label for="Date">Date</label>
	    <input type="date" class="form-control" placeholder="date" name="date">
	  </div>

	  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
		
</div>

<?php include('footer.php'); ?>