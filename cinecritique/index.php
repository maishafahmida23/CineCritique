<?php 

include 'header.php';
include 'ft.php';
 ?>
  <meta charset="UTF-8">
  <meta name="description" content="Download and get review of Your Favourite Movie with Cine Critique with Dual Audio and High Defination with One click and 'No pop-up Ads' ">
  <meta name="keywords" content="movie,cinecritique,movies,hd movies,review moviess">
  <meta name="author" content="Ramisha">
<div class="content">
    <div class="row">
        
    
    <?php 

    $query = "SELECT * FROM movie";
    $run = mysqli_query($con,$query);
    if ($run) {

        while($row = mysqli_fetch_assoc($run)){
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

     ?>
</div>
</div>

 <?php include 'sidebar.php'; ?>