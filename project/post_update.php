<?php 
	include('connect.php');
	$id = $_GET['id'];

	$sql = "SELECT post.*,categories.title as categoryTitle
	FROM post
	JOIN categories ON post.category_id = categories.id
	WHERE post.id= '$id'";


	$result = mysqli_query($conn,$sql);
	$data = mysqli_fetch_assoc($result);
	$image = '';

	$title = $_POST['title'];
	$description= $_POST['description'];
	$date = $_POST['date'];
	$category_id= $_POST['category_id'];
	$updatesql= "UPDATE post SET title= '$title',description='$description' ,category_id='$category_id', date='$date'";

	if(!empty($_FILES['image']['name'])){
		//upload
	$rand= rand(1221, 98989899);
	$image= $rand.$_FILES['image']['name'];
 	$upload=$rand.$_FILES['image']['name'];
 	move_uploaded_file($_FILES['image']['tmp_name'], $upload);

 	$updatesql .=",image = '$image' ";

 	if(!empty($data['image'])&&file_exists($data['image'])){
 		unlink($data['image']);
 	}

	}

	$updatesql.="WHERE id= $id ";

	mysqli_query($conn,$updatesql);

header('Location: post_index.php');