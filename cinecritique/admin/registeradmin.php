<?php
include 'db.php';
include 'header.php';
include 'ft.php';
?>

<!--registrationform-->



<div class="content text-center"> <!-- Apply text-center class to center the content -->
    <div class="container">
        <div class="head" style="text-align: center;">
            <h1>Register admin for Cine Critique</h1>
        </div>
        <form action="registeradmin.php" method="post">
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
</div>

<div class="container">
<div class="row">
<?php

if(isset($_POST['submit']))
{
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	$hash = password_hash("$pwd",PASSWORD_BCRYPT);
	
	
	$query = "INSERT INTO `admin`(`uname`, `pwd`) VALUES ('$uname','$hash')";
    $run = mysqli_query($con,$query);

		if($run){
	
		echo "<script>alert('Admin Successfully added to Cine Critique');window.location.href='adminlist.php';</script> ";
	}
	
	else {
	     echo "<script>alert('Something wrong');</script> ";
		 
	}
	
	
		
}


?>
</div>
</div>

<style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        max-width: auto;
        margin: 0 auto;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
    }

    .container h1 {
        margin-bottom: 10px;
    }

    .form-group {
        margin-bottom: auto;
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

    @media (max-width: 530px) {
        .container {
            padding: 20px;
        }

        .container h1 {
            font-size: 5px;
        }

        .form-group label {
            font-size: 5px;
        }

        .form-control {
            font-size: 14px;
        }

        .btn-primary {
            font-size: 14px;
        }
    }
</style>