<?php
	include('connect.php');

	$title = $_POST['title'];
	
	$sql = "INSERT INTO categories VALUES(NULL,'$title')";
	$result = mysqli_query($conn,$sql);

	header('Location: category.php');