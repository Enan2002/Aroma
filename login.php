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
    .form{
        margin-top: 30px;
    }
    .wrapper{
        width: 500px;
        height: 400px;
        border: 1px solid #cbced1;
        margin-left: 300px;
        margin-top: 100px;
        box-shadow: 12px 12px 20px #cbced1, -12px 12px 20px #cbced1;
        border-radius: 30px

    }
    .btn{
        border-radius: 20px
    }
    #form{
        margin-left:40px;
        margin-top: 10px
    }
    .btn{
        width: 300px;
        margin-left: 44px;
        margin-top: 50px

    }
    span{
        color: red
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
margin-top: 50px
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
                <h3 class="login text-center">LOGIN TO YOUR ACOUNT</h3>
       <form action="login.php" method="POST" class="form">
        <label for="" class="form-label">Email:</label>
    <input type="text" class="form-control" name="email">
</span>

    <br>
<label for="" class="form-label">Password:</label>
<input type="password" class="form-control" name="password">
<button class="btn btn-primary" name="submit">LOG IN</button>
</form>



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

$email = $_POST['email'];
$password = $_POST['password'];





$servername="localhost";
$username="root";
$db_password=NULL;
$database="aroma";

$con = mysqli_connect($servername, $username, $db_password, $database) or die('Connection Error');
echo "";


$sql = "INSERT INTO `login` (email, password)
VALUES ('$email', '$password')";

$result = mysqli_query($con, $sql) or die('Not inserted');
echo "Inserted";

}
 
else{
    echo "";
}

if($email!= NULL && $password != NULL){

header('location: index.php');
}
else{
    header('location: login.php');
}

?>