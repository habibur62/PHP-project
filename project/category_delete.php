<?php
	include('connect.php');

	$id = $_GET['id'];
	$sql = "DELETE FROM categories where id= '$id'";
	$result = mysqli_query($conn,$sql);

	header('Location: category.php');