<?php 

include 'header.php';
include 'ft.php';
include'db.php';
 ?>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Completed Request</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        <a class="btn btn-warning text-light" href="contact.php">Pending Request</a>
      </li>
     </ul>
    
  </div>
</nav>
</div>
 <div class="container" style="text-align: center;">
 	 	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Mail</th>
      <th scope="col">Movie Name</th>
	  <th scope="col">Message</th>
	  
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
  	<?php 

  	$query = "select * from completecontact";
  	$run = mysqli_query($con,$query);
  	if ($run) {
  		while ($row=mysqli_fetch_assoc($run)) {
  			?>

    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['mail']; ?></td>
      <td><?php echo $row['message']; ?></td>
	     <td><?php echo $row['Moviename']; ?></td>
      <td>
      	&nbsp; <a class="btn btn-danger" href="comcondel.php?id=<?php echo$row['id'] ?>">Delete</a></td>
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
