<?php 

include 'header.php';
include 'ft.php';

 ?>
<div class="content">
    <div class="row">
        
<?php 


if (isset($_GET['id'])) {
	$id = $_GET['id'];
	foreach ($_GET as $key => $id) {
	
	
	$dec = $_GET[$key] = base64_decode(urldecode($id));
	$uncal = ((($dec*956783)/54321)/123456789);
	
	$query = "SELECT * FROM movie where cat_id=$uncal";
	$run = mysqli_query($con,$query);
	if ($run) {
		while($row=mysqli_fetch_assoc($run)){


		?>


<div class="col">
    <div class="card" style="width: 18rem;text-align: center;">
  <img class="card-img-top" height="300px" width="100px" src="thumb/<?php echo$row['img']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo$row['mv_name']; ?></h5>
    <p class="card-text"><?php echo$row['director']."<br>".$row['date']; ?></p>
    <?php 

    $id = $row['id'];
    $cal = (($id*123456789*54321)/956783);

     ?>
  <a href="moviereviews.php?movie=<?php echo urlencode($row['mv_name']); ?>" class="btn btn-" style="background-color:#0dbaba; color: #fff;">Reviews</a>

  </div>
</div>
</div>
		<?php

	}
}
}}

else{
	echo"<script>window.location.href='index.php';</script>";
}



 ?>

</div>
</div>
 <?php 
include 'sidebar.php';

  ?>