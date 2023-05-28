<!DOCTYPE html>
<html lang="en">

<!--body section-->
<body>
<?php include 'header.php';?>

<!--main content, including an image-->
    <main>
    <div class="canoeimage">
        <img src="canoe.jpg" alt="Canoe at the edge of a lake" class="responsive">
        <div class="imagetext">Come Experience Canada</div>
    </div>

    <h2 class="mainheading">Upcoming Adventures</h2>
        <hr>

<?php
    $sql = "SELECT * FROM trips";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<p style='font-size: 35px; color: green; text-decoration-line: underline;'>" . $row["heading"] . "</p>";
                echo "<br>";
            echo "Date: " . $row["tripDate"];
                echo "<br>";
            echo "Duration: " . $row["duration"] . " days";
                echo "<br><br>";
            echo "<p style='font-size: 25px;'>Summary: " . "</p>" . "<p>" . $row["summary"]. "</p>";
                echo "<br><br>";
        }
    } else {
        echo "0 results";
    }
?>
    </main>
    </body>
</html>