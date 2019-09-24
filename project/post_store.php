<?php
	include('connect.php');

	$rand= rand(1221, 98989899);

	$title = $_POST['title'];
	$description= $_POST['description'];

	$image= $rand.$_FILES['image']['name'];
 	$upload=$rand.$_FILES['image']['name'];
 	move_uploaded_file($_FILES['image']['tmp_name'], $upload);

	$date = $_POST['date'];
	$category_id= $_POST['category_id'];
	$sql = "INSERT INTO post VALUES(NULL,'$category_id','$title', '$description', '$image', '$date')";

	$result = mysqli_query($conn,$sql);

	header('Location: post_index.php');