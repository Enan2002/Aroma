<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href='css/bootstrap.min.css'>
    <link rel="stylesheet" href='style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .form-control{
        /* border: 3px solid black; */
background: none
        height: 50px;    
    }
    #form{
        margin-left: 260px;
        margin-top: 50px;
    }
</style>
<body>

<section class="our-publication pt-100 pb-70">
<h1 class="heading text-center" style="margin-top: 60px">CLOTHING</h1>

<h1 class="mens text-center" style="margin-top: 100px">MENS</h1>

<div class="container" style="margin-top:100px">
    
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">

                    <figure>
                    <form action="shop.php" method="POST">
                                <img src='images/shirt1.jpg' alt="Shirt Image" width="100%" height="30%" name="image">
                        </figure>   

                        <div class="publication-content">
                            <span class="category" name="category"> Fashion</span>
                            <h3>T-Shirt</h3>
                            <h4 class="price" name="price">$119</h4>
                        </div>
                        <div class="add-to-cart">
                     <button class="default-btn" type="submit" name="submit">ADD TO CART</button>

                    </div>
                     </form>
                    
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt2.jpg' alt="Shirt Image" width="100%" height="50%">
                            </a>
                        </figure>
                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">T-Shirt</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>
                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt3.jpg'alt="Shirt Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">T-Shirt</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt4.jpg'alt="Shirt Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">T-Shirt</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt5.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">T-Shirt</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt6.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">T-Shirt</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt7.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">T-Shirt</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/pant1.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">T-Shirt</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/pant2.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">Jeans</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/pant3.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">Jeans</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt8.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">Sweat Shirt</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt9.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">Hoodie</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt9.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">Sweat Shirt</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt9.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">Sweat Shirt</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/hoodie2.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">Hoodie</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shirt10.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Fashion</span>
                            <h3><a href="#">Hoodie</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

    </section>
    <h2 class="shoes text-center">SHOES</h2>

<section class="our-publication pt-100 pb-70">

<div class="container" style="margin-top:10px">

            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes1.jpg' alt="Shirt Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Cosemetics</span>
                            <h3><a href="#">Facewash</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119 <span>$299</span></h4>
                        </div>
                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes2.jpg' alt="Shirt Image" width="100%" height="50%">
                            </a>
                        </figure>
                        <div class="publication-content">
                            <span class="category">Luxury</span>
                            <h3><a href="#">Men's Watch</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>
                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes3.jpg'alt="Shirt Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes4.jpg'alt="Shirt Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes5.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes6.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes7.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes8.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes9.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes10.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes11.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes12.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes13.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes14.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes15.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="single-publication">
                        <figure>
                            <a href="#">
                                <img src='images/shoes16.jpg'alt="Facewash Image" width="100%" height="30%">
                            </a>
                        </figure>

                        <div class="publication-content">
                            <span class="category">Decor</span>
                            <h3><a href="#">Room Flash Light</a></h3>
                            <ul>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                                <li><i class="icofont-star"></i></li>
                            </ul>
                            <h4 class="price">$119</h4>
                        </div>

                        <div class="add-to-cart">
                            <a href="#" class="default-btn">Add to Cart</a>
                        </div>
                    </div>
                </div>

    </section>
</body>
<script src='js/bootstrap.bundle.min.js'></script>
<script src='script.js'></script>

</html>


