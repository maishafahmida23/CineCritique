<?php
session_start();

include 'ft.php';
include 'db.php';

?>
<head> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> 
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .form-text {
            color: #6c757d;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<div class ="container">

<div class="head" style = "text-align:center;">
    <h1> Login to Cine Critique </h1>
	
</div>

<form action ="login.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="text" required name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" required name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>
<?php

if(isset($_POST['submit']))
{
	$user = $_POST['uname'];
	$pwd = $_POST['pwd'];
	
	$query ="Select * from admin where uname = '$user'";
	$run = mysqli_query($con,$query);
	
	
	if(mysqli_num_rows($run)>0){
	while($row = mysqli_fetch_assoc($run)){
	
	     if(password_verify($pwd,$row['pwd'])){
		 
		   	$_SESSION['Loginsucessfull'] =1;
				$_SESSION['user'] =$user;
		echo "<script>alert('Logged in Successful to Cine Critique');window.location.href='index.php';</script> ";
		    
		 }
	   }
	}
	
	else {
	     echo "<script>alert('Check your ID or Password - They not match our users');</script> ";
		 
	}
	
}

?>
