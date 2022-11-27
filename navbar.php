<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href='css/bootstrap.min.css'>
<link rel="stylesheet" href='style.css'>
<script src="https://kit.fontawesome.com/8ce06b318f.js" crossorigin="anonymous"></script>

</head>
<style>
  * {
  box-sizing: border-box;
}

body {
  margin: 0px;
  font-family: 'segoe ui';
}

.nav {
  height: 60px;
  width: 100%;
  box-shadow: 12px 12px 20px #cbced1, -12px 12px 20px #cbced1;
background-color : white
  position: relative;
  
}

.nav > .nav-header {
  display: inline;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 22px;
  color: #fff;
  padding: 10px 10px 10px 10px;
  font-weight: bold
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  font-size: 18px;
  margin-top: 4px;
  margin-left: 500px
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 20px 13px 10px;
  text-decoration: none;
  color: black;
  font-weight: 500;
}

.nav > .nav-links > a:hover {
color: green
}

.nav > #nav-check {
  display: none;
}

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }

  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid #eee;
    margin-left: -10px;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: white;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: -500px;
    z-index: 10
    
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
    text-align: center;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
  .butn {
  width: 160px;
  height: 50px;
  border-radius: 30px;
  background: none;
}
}
@media screen and (max-width: 320px) {
  
  .nav > .nav-links {
margin-left: 500px;
  }
}
</style>
<body>


<div class="wrapper">
    <div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title text-dark">
      AROMA
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <!-- <span></span>
      <span></span>
      <span></span> -->
      <i class="fa-solid fa-bars fa-2x"></i>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="index.php">HOME</a>
    <a href="about.php">ABOUT</a>
    <a href="shop.php" >SHOP</a>
    <a href="contact-us.php">CONTACT US</a>
    
  </div>
</div>

</div>
    
</body>
<script src="https://kit.fontawesome.com/8ce06b318f.js" crossorigin="anonymous"></script>
</html>
