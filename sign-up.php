<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href='style.css'>
    <link rel="stylesheet" href='css/bootstrap.min.css'>
</head>
<style>
    .wrapper{
        width: 500px;
        height: 660px;
        border: 1px solid #cbced1;
        margin-left: 300px;
        margin-top: 10px;
        box-shadow: 12px 12px 20px #cbced1, -12px 12px 20px #cbced1;
        border-radius: 30px

    }
    .btn{
        border-radius: 20px;
        margin-top: 10px
    }
    #form{
        margin-left:40px;
        margin-top: 10px
    }
    .btn{
        width: 300px;
        margin-left: 44px;

    }
    h5{
        text-align: center;
    }
span{
    color: red
}
.form-control{
    height: 33px
}
.login{
    margin-left: 110px;
}
@media screen and (max-width: 320px){
.wrapper{
    margin-left: 25px;
    width: 100%;
}
}
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="wrapper">  

            <div class="col-10" id="form">

    <form action="sign-up.php" method="POST">
        
        <h5 class="heading" style="font-size: 30px">SIGN UP</h5>
    <label for="" class="form-label">FIRST NAME:</label>
    <input type="text" class="form-control" name="firstname">
    <br>
    <label for="" class="form-label">LAST NAME:</label>
    <input type="text" class="form-control" name="lastname">

    <br>
    <label for="" class="form-label">DOB:</label>
    <input type="date" class="form-control" name="dob">

    <br>
    <label for="" class="form-label">EMAIL ADDRESS:</label>
    <input type="email" class="form-control" name="email">
    <br>

    <label for="" class="form-label">PASSWORD:</label>
    <input type="password" class="form-control" name="password">
    <label for="" class="form-label">CONFIRM PASSWORD:</label>
    <input type="password" class="form-control" name="confirmpassword">
   
    <br>
<a href="login.php" class="login">Already have an Account</a>
    <button type="submit" class="btn btn-primary" name="submit">SIGN UP</button>



    </form>

    </div>
        </div>
    </div>

    </div>


</body>
<script src='js/bootstrap.bundle.min.js'></script>
</html>

<?php

if(isset($_POST['submit'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
 





$servername = "localhost";
$username = "root";
$db_password = NULL;
$database = "aroma";


$con = mysqli_connect($servername, $username, $db_password, $database) or die('Connection Error');
echo "Connected";

if($firstname && $lastname && $dob && $email && $password && $confirmpassword!=NULL){

$sql = "INSERT INTO `signup` (firstname, lastname, dob, email, password, confirmpassword) VALUE('$firstname', '$lastname', '$dob', '$email', '$password', '$confirmpassword')";


$result = mysqli_query($con, $sql) or die('Not Inserted');  
echo "Inserted";
}
 if($firstname && $lastname && $dob && $email && $password && $confirmpassword!=NULL){
    
    header("Location: index.php");
}
else{
    return FALSE;
}

}




?>