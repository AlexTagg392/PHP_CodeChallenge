<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM Cars ORDER BY id DESC") or die("Error: " . mysqli_error($mysqli));
$result2 = mysqli_query($mysqli, "SELECT * FROM Drivers ORDER BY id DESC") or die("Error: " . mysqli_error($mysqli));
?>

<html>
    <head>
        <title>Cars R Us</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>

    <body>
        <a href="add.html"> Add a New Car and a Driver</a><br/><br/>

            <table class="legit" width='80%' border=2>

            <tr>
                <td>Make</td>
                <td>Model</td>
                <td>Year</td>
                <td>Plate Number</td>
                <td>Color</td>
                <td>State</td>
                <td>Mileage</td>
                <td>Auto Transmission</td>
                <td>Driver's Name</td>
            </tr>
            <?php
            while($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['make']."</td>";
                echo "<td>".$res['model']."</td>";
                echo "<td>".$res['year']."</td>";
                echo "<td>".$res['plateNumber']."</td>";
                echo "<td>".$res['color']."</td>";
                echo "<td>".$res['state']."</td>";
                echo "<td>".$res['mileage']."</td>";
                echo "<td>".$res['autoTransmission']."</td>";
                echo "<td>".$res['drivers']."</td>";
                echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            }
            ?>
            </table>
            <br/>
            <br/>
            <br/>
            <table class="legit" width='80%' border=2>

            <tr>
                <td>Name</td>
                <td>Stick?</td>
            </tr>
            <?php
            while($res = mysqli_fetch_array($result2)) {
                echo "<tr>";
                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['driveStick']."</td>";
            }
            ?>
        </table>
    </body>
</html>