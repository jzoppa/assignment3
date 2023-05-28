<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!--header section-->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="paddle-white.png">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Halifax Canoe and Kayak</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="utility.js"></script>
</head>

<div id="header">
    <ul>
        <li><div id="hamburger"><img src="hamburger.png" height="50" alt="Side Menu"></div></li>
        <li><h2 class="bannertitle">Halifax Canoe and Kayak</h2></li>
        <li><img src="paddle-white.png" height="75" alt="Logo"></li>
    </ul>
</div>

<aside id="leftmenu">
    <ul id="nav">
        <li><a href="admin-add.php">Add adventure</a></li>
        <li><a href="all-adventures.php">View all adventures</a></li>
    </ul>
</aside>

<?php
    /*Attempt MySQL server connection
    DB=adventures
    Table=trips*/
    $conn= mysqli_connect("localhost", "id20807788_root", "Password1!", "id20807788_adventures");

    if($conn === false){
        die("ERROR: Could not connect " . mysqli_connect_error());
    }
?>

</html>