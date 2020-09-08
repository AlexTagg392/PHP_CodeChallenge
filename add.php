<html>
    <head>
        <title>Add a Car</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <?php
        include_once("config.php");

        if(isset($_POST['Submit'])) {
            $make = mysqli_real_escape_string($mysqli, $_POST['make']);
            $model = mysqli_real_escape_string($mysqli, $_POST['model']);
            $year = mysqli_real_escape_string($mysqli, $_POST['year']);
            $plateNumber = mysqli_real_escape_string($mysqli, $_POST['plateNumber']);
            $color = mysqli_real_escape_string($mysqli, $_POST['color']);
            $state = mysqli_real_escape_string($mysqli, $_POST['state']);
            $mileage = mysqli_real_escape_string($mysqli, $_POST['mileage']);
            $autoTransmission = mysqli_real_escape_string($mysqli, $_POST['autoTransmission']);
            $drivers = mysqli_real_escape_string($mysqli, $_POST['drivers']);
            $name = mysqli_real_escape_string($mysqli, $_POST['name']);
            $driveStick = mysqli_real_escape_string($mysqli, $_POST['driveStick']);
        
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
                $result = mysqli_query($mysqli, "INSERT INTO cars(make,model,year,plateNumber,color,state,mileage,autoTransmission,drivers) VALUES('$make','$model','$year','$plateNumber','$color','$state','$mileage','$autoTransmission','$drivers')");
                $result2 = mysqli_query($mysqli, "INSERT INTO Drivers(name, driveStick) VALUES('$name','$driveStick')");
                echo "<font color='green'>Car and Driver was added successfully.";
		        echo "<br/><a href='index.php'>View Result</a>";
            }
        }
        ?>
    </body>
</html>