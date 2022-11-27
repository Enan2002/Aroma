<?php


$servername = "localhost";
$username = "root";
$db_password = NULL;
$database = "aroma";


$con = mysqli_connect($servername, $username, $db_password, $database) or die('Connection Error');
echo "Connected";


$sql = 'CREATE TABLE `signup` ( `id` INT(200) NOT NULL AUTO_INCREMENT , `firstname` VARCHAR(50) NOT NULL , `lastname` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(100) NOT NULL , `confirmpassword` VARCHAR(100) NOT NULL , `reg_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;
';

 $result = mysqli_query($con, $sql) or die('Not Created');
 echo "Created";




?>