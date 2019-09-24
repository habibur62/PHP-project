<?php include('header.php'); 

	 include('connect.php');

	$sql = "SELECT * FROM post";
	$result = mysqli_query($conn,$sql);

?>

	<?php while($row= mysqli_fetch_assoc($result)){ ?>
	<div class="card mb-3">
  <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="..."width="100">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['title']; ?></h5>
    <p class="card-text"><?php echo $row['description']; ?></p>
    <p class="card-text"><small class="text-muted"><?php echo $row['date']; ?></small></p>
  </div>
</div>

	<?php } ?>

<?php include('footer.php'); ?>