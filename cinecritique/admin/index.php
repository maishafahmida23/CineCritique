<?php

include 'db.php';
include 'header.php';
include 'ft.php';
?>

<div class="content">
<div class="row">
	<!-- movie -->
  <div class="col-sm-6">
    <div class="card " style="border: 1px solid #ccc;background-color: #0dbaba">
      <div class="card-body text-center">
        <h3 class="card-title">Total No. Of Post</h3>
        <p class="card-text">
		<?php 

	$query = "SELECT count(*) as total_movie from movie";
	$run = mysqli_query($con,$query);
	if ($run) {
		while ($row = mysqli_fetch_assoc($run)) {
			echo $row['total_movie'];
		}
	}
	 ?>
	 </p>
        
      </div>
    </div>
  </div>
  <!-- ---category -->
  <div class="col-sm-6">
    <div class="card bg-light" style="border: 1px solid #ccc;">
      <div class="card-body text-center">
        <h3 class="card-title">Total No. Of Category</h3>
        <p class="card-text"><?php 

	$query = "SELECT count(*) as total_category from category";
	$run = mysqli_query($con,$query);
	if ($run) {
		while ($row = mysqli_fetch_assoc($run)) {
			echo $row['total_category'];
		}
	}
	 ?></p>
        
      </div>
    </div>
  </div>

  <!-- admin -->
  <div class="col-sm-6">
    <div class="card bg-black" style="border: 1px solid #ccc;">
      <div class="card-body text-center">
        <h3 class="card-title">Total No. Of Admin</h3>
        <p class="card-text"><?php 

	$query = "SELECT count(*) as total_admin from admin";
	$run = mysqli_query($con,$query);
	if ($run) {
		while ($row = mysqli_fetch_assoc($run)) {
			echo $row['total_admin'];
		}
	}
	 ?></p>
        
      </div>
    </div>
  </div>
  <!-- ---genre -->
  <div class="col-sm-6">
     
    <div class="card " style="border: 1px solid #ccc;background-color: #0dbaba">
      <div class="card-body text-center">
        <h3 class="card-title">Total No. Of Genre</h3>
        <p class="card-text"><?php 

	$query = "SELECT count(*) as total_genre from genre";
	$run = mysqli_query($con,$query);
	if ($run) {
		while ($row = mysqli_fetch_assoc($run)) {
			echo $row['total_genre'];
		}
	}
	 ?></p>
        
      </div>
    </div>
  </div>
  </div>
  <div>
  </div>
  <br>
  <br>
  <div class="sbtn text-center" id="hbtn">
<button class="btn btn btn-lg" onclick="first()" style="background-color: #0dbaba; width: 190px;">Category &#8681;&#8681;</button>
  </div>
  <div class="show" id="show" style="display: none;">
  	<hr>
  

  	<center><h1>Category</h1></center>
  	<div class="row">
  			<?php 

  	$query1 = "SELECT * FROM category";
  	$run1 = mysqli_query($con,$query1);
  	if ($run1) {
  		while ($row1=mysqli_fetch_assoc($run1)) {
  			?>
  <div class="col-sm-6">
  
    <div class="card text-center">
      <div class="card-body" style="background-color: #0dbaba;">
        <h5 class="card-title">Total No. Of Post in <?php echo $row1['category_name']; ?></h5>
         <?php 
      $id = $row1['id'];
      $query2 = "SELECT count(*) as total from movie,category where category.id=movie.cat_id and category.id=$id ";
      $run2 = mysqli_query($con,$query2);
      if ($run2) {
       while ($row2 = mysqli_fetch_assoc($run2)) {
               
                  ?>
        <p class="card-text"><?php echo $row2['total']; ?></p>
                   
                  <?php
                }
      }
       ?>
       <a href="viewpost.php?id=<?php echo $row1['id'] ?>" class="btn btn-outline-info" style="background-color: black; color: white; border-color: white;">View Posts</a>

      </div>
    </div>
  </div>
  <?php
  		}
  	}

  	 ?>
	
</div>

  </div>
<br>
<br>
<div class="btngen text-center" id="genbtn1">
	<button class="btn btn- btn-lg" onclick="myfun1()" style="background-color: #726297 ; width: 190px;">Genre &#8681;&#8681;</button>
</div>
  <div class="genshow" id="genshow" style="display: none;">
  	<hr>
  	<center><h1>Genre</h1></center>
  	<div class="row">
  			<?php 

  	$query3 = "SELECT * FROM genre";
  	$run3 = mysqli_query($con,$query3);
  	if ($run3) {
  		while ($row3=mysqli_fetch_assoc($run3)) {
  			?>
  <div class="col-sm-6">
  
    <div class="card text-center">
      <div class="card-body" style="background-color: #726297 ;">
        <h3 class="card-title"><b>Total Count <?php echo $row3['genre_name']; ?></b></h3>
         <?php 
      $id = $row3['id'];
      $query4 = "SELECT count(*) as total_category from category,genre where genre.id=category.genre_id and genre.id=$id";
      $run4 = mysqli_query($con,$query4);
      if ($run4) {
       while ($row4 = mysqli_fetch_assoc($run4)) {
               
                  ?>
        <p class="card-text"><b>No of category </b>"<?php echo $row4['total_category']; ?>"</p>
                   
                  <?php
                }
      }
       ?>
           <?php 
      $id = $row3['id'];
      $query5 = "SELECT count(*) as total_post from movie,genre where genre.id=movie.genre_id and genre.id=$id";
      $run5 = mysqli_query($con,$query5);
      if ($run5) {
       while ($row5 = mysqli_fetch_assoc($run5)) {
               
                  ?>
        <p class="card-text">No. of Post "<?php echo $row5['total_post']; ?>"</p>
                   
                  <?php
                }
      }
       ?>
        
      </div>
    </div>
  </div>
  <?php
  		}
  	}

  	 ?>
	
</div>
  </div>

  </div>
</div>


	<!-- js hide and show -->

	<script type="text/javascript">
		function first(show,hide) {
			document.getElementById('show').style.display="block";
			document.getElementById('hbtn').style.display="none";
		}
	</script>
	<script type="text/javascript">
		function myfun1(show,hide) {
			document.getElementById('genshow').style.display="block";
			document.getElementById('genbtn1').style.display="none";
		}
	</script>

<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
  }

  .container {
    margin-top: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  }

  .navbar {
    background-color: #333;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    padding: 10px 0;
  }

  .navbar-brand {
    font-weight: bold;
    color: #fff;
  }

  .btn-warning {
    background-color: #ffc107;
    border: none;
    border-radius: 5px;
    color: #fff;
  }

  .btn-warning:hover {
    background-color: #ff9800;
  }

  .btn-info {
    background-color: #17a2b8;
    border: none;
    border-radius: 5px;
    color: #fff;
  }

  .btn-info:hover {
    background-color: #138496;
  }

  .btn-danger {
    background-color: #dc3545;
    border: none;
    border-radius: 5px;
  }

  .btn-danger:hover {
    background-color: #c82333;
  }

  .table {
    background-color: #fff;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
  }

  .table th {
    font-weight: bold;
    background-color: #f8f9fa;
  }

  .table td {
    vertical-align: middle;
  }

  .container.text-center {
    text-align: center;
    padding: 20px 0;
  }

  h1 {
    font-size: 28px;
    margin-bottom: 20px;
  }

  @media screen and (max-width: 768px) {
    .container {
      padding-left: 15px;
      padding-right: 15px;
    }

    .navbar-nav {
      margin-right: 0;
    }

    .navbar-toggler {
      margin-right: 0;
    }

    .table {
      box-shadow: none;
    }

    .table th {
      font-size: 14px;
    }

    .table td {
      font-size: 14px;
    }
  }
</style>
