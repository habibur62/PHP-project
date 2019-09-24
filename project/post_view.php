<?php 
	include('connect.php');
	$id = $_GET['id'];

	$sql = "SELECT post.*,categories.title as categoryTitle
	FROM post
	JOIN categories ON post.category_id = categories.id
	WHERE post.id= '$id'";


	$result = mysqli_query($conn,$sql);
	$data = mysqli_fetch_assoc($result);

	 include('header.php'); 
?>

	<a href="post_index.php" class="btn btn-success">Back</a><br><br>

<div class="content">
	<h1>Post Details</h1>
	
	<table class="table">
		<tr>
			<th>Title: </th>
			<td><?php echo $data['title']?></td>
		</tr>
		<tr>
			<th>Category: </th>
			<td><?php echo $data['categoryTitle']?></td>
		</tr>
				<tr>
			<th>Describtion: </th>
			<td><?php echo $data['description']?></td>
		</tr>
		<tr>
			<th>Image: </th>
			<td><img src="<?php echo $data['image'] ?>" alt="pic" width="300"></td>
		</tr>
		<tr>
			<th>Date: </th>
			<td><?php echo $data['date']?></td>
		</tr>
	</table>
</div>

<?php include('footer.php'); ?>