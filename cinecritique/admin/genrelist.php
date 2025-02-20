<?php
include 'db.php';
include 'header.php';
include 'ft.php';
?>

<div class="container">
	<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Genre On Cine Critique</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        <a class="btn btn-warning text-light" href="addgenre.php" >Add a Genre</a>
      </li>
     </ul>
    <ul class="navbar-nav ml-auto">

     <form class="form-inline" method="post" action="searchgenre.php">
    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search">
    <button class="btn btn-success" name="submit" type="submit">Search</button>
  </form>
    </ul>
  </div>
</nav>
</div>
	<hr>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Genre Name</th>
      <th scope="col">Category ID</th>
      <th scope="col">Genre ID</th>
      <th scope="col">No. of Category</th>
      <th scope="col">No. of Posts</th>

      <th scope="col">Update</th>

    </tr>
  </thead>
  <tbody>
  	<?php 

  	$query = "SELECT * FROM genre";
  	$run = mysqli_query($con,$query);
  	if ($run) {
  		while ($row=mysqli_fetch_assoc($run)) {
  			?>

    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['genre_name']; ?></td>
      <td><?php echo $row['category_id']; ?></td>
      <td><?php echo $row['genreid']; ?></td>
      <?php 
      $id = $row['id'];
      $query1 = "SELECT count(*) as total_category from category,genre where genre.id=category.genre_id and genre.id=$id";
      $run1 = mysqli_query($con,$query1);
      if ($run1) {
              while ($row1 = mysqli_fetch_assoc($run1)) {

?>                
  
      <td><?php echo $row1['total_category']; ?></td>
<?php
              }
            }
       ?>
<?php 

$query2 = "SELECT count(*) as total_post from movie,genre where genre.id=movie.genre_id and genre.id=$id";
$run2 = mysqli_query($con,$query2);
if ($run2) {
  while ($row2=mysqli_fetch_assoc($run2)) {
    ?>
  
<td><?php echo $row2['total_post']; ?></td>
  <?php
    
  }
}

 ?>
      <td><a class="btn btn-danger" href="deletegenre.php?id=<?php echo$row['id']; ?>">DELETE</a> <a class="btn btn-outline-info" href="editgenre.php?id=<?php echo$row['id']; ?>&genrename=<?php echo$row['genre_name']; ?>&catid=<?php echo$row['category_id']; ?>&genreid=<?php echo$row['genreid']; ?>">EDIT</a></td>
    </tr>
<?php
  		}
  	}

  	 ?>
  </tbody>

</table>
</div>

<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
  }

  .container {
    margin-top: 20px;
  }

  .navbar {
    background-color: #fff;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  }

  .navbar-brand {
    font-weight: bold;
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

  .form-inline .form-control {
    border: 1px solid #ccc;
  }

  .table {
    background-color: #fff;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  }

  .table th {
    font-weight: bold;
    border-top: none;
  }

  .table td {
    vertical-align: middle;
  }

  .btn-danger {
    background-color: #dc3545;
    border: none;
    border-radius: 5px;
  }

  .btn-danger:hover {
    background-color: #c82333;
  }

  .btn-outline-info {
    border-color: #17a2b8;
    color: #17a2b8;
  }

  .btn-outline-info:hover {
    background-color: #17a2b8;
    border-color: #17a2b8;
    color: #fff;
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
