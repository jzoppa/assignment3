<!DOCTYPE html>
<html lang="en">

<!--body section-->
<body>
<?php include 'header.php';?>

<!--main content-->
<main>
    <div class="admin-add" style="margin:150px 0px 0px 25px; ">
            <h1>Admin - Add adventure</h1></br>
            <hr>
            <br>
            <p>Input details about the trip (you must complete all fields)</p>
<br>
                <form action="admin-confirm.php" method="post">
                    <label for="heading">Heading</label>
                    <input type="text" id="heading" name="heading" value="">
<br>
<br>
                    <label for="tripDate">Trip Date</label>
                    <input type="date" id="tripDate" name="tripDate" value="" placeholder="mm/dd/yyyy">
<br>
<br>
                    <label for="duration">Duration (number of days)</label>
                    <input type="text" id="duration" name="duration" maxlength="3" value="">
<br>
<br>
                    <label for="summary">Summary</label>
                    <input type="text" id="summary" name="summary">
<br>
<br>
<br>
                    <input type="submit" value="Submit">
                </form>
    </div>
<br>
</main>

<?php include 'footer.php';?>
</body>
</html>