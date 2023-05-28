<!DOCTYPE html>
<html lang="en">

<!--body section-->
<body>
<?php include 'header.php';?>

<!--main content-->
<main>

<div class="admin-confirm" style="margin:150px 0px 0px 25px; ">
            <h1>Admin - Confirm</h1></br>
            <hr>
            <br>
    
<?php
    $heading = $_POST['heading'];
    $tripDate = $_POST['tripDate'];
    $duration = $_POST['duration'];
    $summary = $_POST['summary'];

    $sql = "INSERT INTO trips (heading, tripDate, duration, summary)
        VALUES ('$heading', '$tripDate', '$duration', '$summary')";

    if (mysqli_query($conn, $sql)) {   
        echo "Data added successfully to DB";
    
    } else {       
        echo "Error: " . $sql . "
        " . mysqli_error($conn);
    }
?>

<br>

<div class="all-adventures" style="margin:150px 50px 0px 0px; font-size:25px; text-align:right;"><a href="all-adventures.php">View All Adventures</a></div>

</main>

<?php include 'footer.php';?>
</body>
</html>