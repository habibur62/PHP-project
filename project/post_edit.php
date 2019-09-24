<?php 
	include('connect.php');
	$id = $_GET['id'];

	$sql = "SELECT post.*,categories.title as categoryTitle
	FROM post
	JOIN categories ON post.category_id = categories.id
	WHERE post.id= '$id'";


	$result = mysqli_query($conn,$sql);
	$data = mysqli_fetch_assoc($result);
	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn, $sql);
	 include('header.php'); 
?>

	<a href="post_index.php" class="btn btn-success">Back</a><br><br>

<div class="content">
	<h1>Edit Post</h1>
	
		<form method="POST" action="post_update.php?id=<?php echo $id;?>" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="Title">Title</label>
	    <input type="text" class="form-control"value="<?php echo $data['title']?>" name="title">
	  </div>
	  <div class="form-group">
	    <label for="Describtion">Describtion</label>
	    <textarea type="text" class="form-control" rows="10"name="description"><?php echo $data['description']?></textarea>
	  </div>
	  	  <div class="form-group">
	    <label for="Image">Image</label>
	    <input type="file" class="form-control"name="image">
	    <img src="<?php echo $data['image']?>"alt="" width="100">
	  </div>

	  <div class="form-group">
	    <label for="category">Category</label>
	    <select class="form-control" name="category_id">
	    	<option value="">Select Category</option>
	    	<?php while($row=mysqli_fetch_assoc($result)){ ?>
				<?php if($data['category_id']==$row['id']) { ?>
	    	<option selected value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
	    <?php }else { ?>
	    	<option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
	    	
			<?php }}?>
	    </select>
	  </div>


	  <div class="form-group">
	    <label for="Date">Date</label>
	    <input type="date" class="form-control" value="<?php echo $data['date'];?>" name="date">
	  </div>

	  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
		
</div>

<?php include('footer.php'); ?>