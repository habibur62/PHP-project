<?php
	include('connect.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM post WHERE id='$id' ";

	$result = mysqli_query($conn,$sql);
	$data = mysqli_fetch_assoc($result);
	$image_location=$data['image'];

	if(file_exists($image_location)){
		unlink($image_location);
	}


	$sql = "DELETE FROM post where id= '$id'";
	$result = mysqli_query($conn,$sql);

	header('Location: post_index.php');