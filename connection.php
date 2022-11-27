<?php

$servername="localhost";
$username="root";
$password=NULL;

$con = mysqli_connect($servername, $username, $password) or die('Connection Error');
echo "Connected";

$sql = 'CREATE DATABASE Aroma';

$result = $con->query($sql) or die('Not Created');
echo "Created";

?>