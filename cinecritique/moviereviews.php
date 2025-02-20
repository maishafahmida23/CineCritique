<?php 
include 'header.php';
include 'ft.php';
include 'db.php';

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_GET['movie'])) {
    $movieName = $con->real_escape_string($_GET['movie']);

    $query = "SELECT uname, message FROM contactus WHERE Moviename = '" . $movieName ."'";
    $run = mysqli_query($con, $query);

    if (mysqli_num_rows($run) > 0) {
        ?>
        <div class="container text-center">
            <div>
                <h1>Reviews for <b><?php echo $movieName; ?></b></h1>
            </div>
            <?php
            while ($row = mysqli_fetch_assoc($run)) {
                ?>
                <div class="review">
				
                    <p><b>Name:</b> <?php echo $row["uname"]; ?></p>
                    <p><b>Review:</b> <?php echo $row["message"]; ?></p>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
    } else {
        ?>
        <div class="container text-center">
            <h1>No reviews found for <b><?php echo $movieName; ?></b>.</h1>
        </div>
        <?php
    }
} else {
    ?>
    <div class="container text-center">
        <h1>No movie selected.</h1>
    </div>
    <?php
}

$con->close();
include 'ft.php';
?>
             