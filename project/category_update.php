<?php
	include('connect.php');

	$title = $_POST['title'];
	$id = $_GET['id'];
	$sql = "UPDATE categories SET title= '$title' where id= '$id'";
	$result = mysqli_query($conn,$sql);

	header('Location: category.php');