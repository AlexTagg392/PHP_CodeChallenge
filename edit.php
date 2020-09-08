<?php
include_once("config.php");

if(isset($_POST['update']))
{

    $id = mysqli_real_escape_string($mysqli, $_POST['id']);

    $make = mysqli_real_escape_string($mysqli, $_POST['make']);
    $model = mysqli_real_escape_string($mysqli, $_POST['model']);
    $year = mysqli_real_escape_string($mysqli, $_POST['year']);
    $plateNumber = mysqli_real_escape_string($mysqli, $_POST['plateNumber']);
    $color = mysqli_real_escape_string($mysqli, $_POST['color']);
    $state = mysqli_real_escape_string($mysqli, $_POST['state']);
    $mileage = mysqli_real_escape_string($mysqli, $_POST['mileage']);
    $autoTransmission = mysqli_real_escape_string($mysqli, $_POST['autoTransmission']);
    $drivers = mysqli_real_escape_string($mysqli, $_POST['drivers']);

    if(empty($make) || empty($model) || empty($year) || empty($plateNumber) || empty($color) || empty($state) || empty($mileage) || empty($autoTransmission)) {
        if(empty($make)) {
            echo "<font color='red'>Make field is empty.</font><br/>";
        }
        
        if(empty($model)) {
            echo "<font color='red'>Model field is empty.</font><br/>";
        }
        
        if(empty($year)) {
            echo "<font color='red'>Year field is empty.</font><br/>";
        }
        if(empty($plateNumber)) {
            echo "<font color='red'>Plate Number field is empty.</font><br/>";
        }
        
        if(empty($color)) {
            echo "<font color='red'>Color field is empty.</font><br/>";
        }
        
        if(empty($state)) {
            echo "<font color='red'>State field is empty.</font><br/>";
        }
        if(empty($mileage)) {
            echo "<font color='red'>Mileage field is empty.</font><br/>";
        }
        
        if(empty($autoTransmission)) {
            echo "<font color='red'>Auto Transmission field is empty.</font><br/>";
        }

        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

    } else {
        $result = mysqli_query($mysqli, "UPDATE Cars SET WHERE make='$make',model='$model',year='$year',plateNumber='$plateNumber',color='$color',state='$state',mileage='$mileage',autoTransmission='$autoTransmission',drivers='$drivers' WHERE id=$id");
        
        header("Location: index.php");
    }
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM cars WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $make = $res['make'];
    $model = $res['model'];
    $year = $res['year'];
    $plateNumber = $res['plateNumber'];
    $color = $res['color'];
    $state = $res['state'];
    $mileage = $res['mileage'];
    $autoTransmission = $res['mileage'];
    $drivers = $res['drivers'];
}
?>
<html>
    <head>
        <title> Edit Cars </title>
    </head>     
    <body>
        <a href="index.php">Home</a>
        <br/><br/>

        <form name="form1" method="post" action="edit.php">
            <table>
            <tr>
                    <td>Make</td>
                    <td><input type="text" name="make" value="<?php echo $make;?>"></td>
                </tr>
                <tr>
                    <td>Model</td>
                    <td><input type="text" name="model" value="<?php echo $model;?>"></td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td><input type="number" name="year" value="<?php echo $year;?>"></td>
                </tr>
                <tr>
                    <td>Plate Number</td>
                    <td><input type="text" name="plateNumber" value="<?php echo $plateNumber;?>"></td>
                </tr>
                <tr>
                    <td>Color</td>
                    <td><input type="text" name="color" value="<?php echo $color;?>"></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><input type="text" name="state" value="<?php echo $state;?>"></td>
                </tr>
                <tr>
                    <td>Mileage</td>
                    <td><input type="number" name="mileage" value="<?php echo $mileage;?>"></td>
                </tr>
                <tr>
                    <td>Auto Transmission?</td>
                    <td><input type="boolean" name="autoTransmission" value="<?php echo $autoTransmission;?>"></td>
                </tr>
                <tr>
                    <td>Driver's Name</td>
                    <td><input type="text" name="drivers" value="<?php echo $drivers;?>"></td>
                </tr>
                <tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="Update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
