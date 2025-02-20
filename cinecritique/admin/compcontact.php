<?php 

include 'db.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$q1 = "SELECT * from contactus where id = $id";
	$r1 = mysqli_query($con,$q1);
	if ($r1) {
		while ($row=mysqli_fetch_array($r1)) {
			$name = $row['uname'];
			$mail = $row['mail'];
			$msg = $row['message'];
			$moviename = $_POST['moviename'];
	$query = "INSERT INTO `contactus`(`uname`, `mail`,`Moviename`, `message`) VALUES ('$name','$mail','$moviename','$msg')";
	$run = mysqli_query($con,$query);
		if ($run) {
			$q2 = "DELETE FROM `contactus` WHERE id = $id";
			$r2 = mysqli_query($con,$q2);
			if ($r2) {
				echo "<script>alert('Now, This will complete');window.location.href='comlistcon.php';</script>";
			}
		}
			
		}
	}
}
else{
	header('location:contact.php');
}


 ?>