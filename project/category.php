<?php

	include('connect.php');
	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn,$sql);

?>

<?php include('header.php'); ?>

	<a href="category_add.php" class="btn btn-success">+Add category</a><br><br>

<div class="content">
	<h1>Category List</h1>
	<table class="table table-border">
		<thead>
		<th>Id</th>
		<th>Title</th>
		<th>Action</th>
		</thead>
	
	<?php while($row = mysqli_fetch_assoc($result)){ ?>

		<tr>
			<td><?php echo $row['id']; ?>
			</td>
			<td><?php echo $row['title'];?>
			</td>
			<td>
				<a href="category_edit.php?id=<?php
				echo $row['id']?> " class="btn btn-info btn-sm">Edit</a>
				<a href="category_delete.php?id=<?php
				echo $row['id']?>" class="btn btn-danger btn-sm" onclick="return confirm(' Are you sue?');">Delete</a>
			</td>
		</tr>

	<?php } ?>
	</table>
	
	</div>
		
	</div>

<?php include('footer.php'); ?>