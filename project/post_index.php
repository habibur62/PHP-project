<?php include('connect.php');

	$sql = "SELECT * FROM post";
	$result = mysqli_query($conn,$sql);

include('header.php');
?>
<a href="post_add.php"class="btn btn-success">+Add Post</a><br><br>

<div class="content">
	<h1>Post list</h1>
	<table class="table table-borderd">
		<thead>
			<th>Id</th>
			<th>Title</th>
			<th>Image</th>
			<th>Date</th>
			<th>Action</th>
		</thead>
		<?php while($row= mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><img src="<?php echo $row['image'];?>" alt="pic" width='100'></td>
			<td><?php echo $row['date']; ?></td>
			<td>
				<a href="post_view.php?id=<?php echo $row['id']?>" class="btn btn-success">View</a>
				<a href="post_edit.php?id=<?php echo $row['id']?>" class="btn btn-info">Edit</a>
				<a href="post_delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</table>

</div>

<?php include('footer.php'); ?>