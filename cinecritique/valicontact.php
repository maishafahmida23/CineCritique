<?php 

include 'header.php';
include 'ft.php';

if (isset($_POST['csub'])) {
	$name = $_POST['username'];
	$mail = $_POST['email'];
	$msg = $_POST['msg'];
	$moviename = $_POST['moviename'];

	$query = "INSERT INTO `contactus`(`uname`, `mail`,`Moviename`, `message`) VALUES ('$name','$mail','$moviename','$msg')";
	$run = mysqli_query($con,$query);
	if ($run) {
		echo "<script>window.location.href='index.php';
		Swal.fire(
  'Request Submited',
  'We Review Your Request We work on it',
  'success',);

</script>";
	}
	else{
		echo "<script>window.location.href='index.php';Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  
})</script>";
	}
}
else{
	header('location:index.php');
}

 ?>