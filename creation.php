<?php
$servername="localhost";
$username="root";
$password=NULL;
$database="aroma";

$con = mysqli_connect($servername, $username, $password, $database) or die('Connection Error');
echo "Connected"; 


$sql = 'CREATE TABLE login ( id INT(200) UNSIGNED AUTO_INCREMENT PRIMARY KEY, email VARCHAR(50) NOT NULL, password VARCHAR(100) NOT NULL, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )';

 $result = mysqli_query($con, $sql) or die('Not Created');
 echo "Created";



?>