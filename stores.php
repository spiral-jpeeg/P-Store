<?php include('admin/partials/usernav.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <style type="text/css">
    
    .logo{
    width: 10%;
    float: left;
    }
    .menu{
        line-height: 60px;
    }
    .menu ul{
        list-style-type: none;
    }

    .menu ul li{
        display: inline;
        padding: 1%;
        font-weight: bold;
    }


    /* CSS for Food SEarch Section */

    .food-search{
        background-image: url(../images/bg.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding: 7% 0;
    }

    .food-search input[type="search"]{
        width: 50%;
        padding: 1%;
        font-size: 1rem;
        border: none;
        border-radius: 5px;
    }


    /* CSS for Categories */
    .categories{
        padding: 4% 0;
    }

    .box-3{
        width: 28%;
        float: left;
        margin: 2%;
    }


    /* CSS for Food Menu */
    .food-menu{
        background-color: #ececec;
        padding: 4% 0;
    }
    .food-menu-box{
        width: 43%;
        margin: 1%;
        padding: 2%;
        float: left;
        background-color: white;
        border-radius: 15px;
    }

    .food-menu-img{
        width: 20%;
        float: left;
    }

    .food-menu-desc{
        width: 70%;
        float: left;
        margin-left: 8%;
    }

    .food-price{
        font-size: 1.2rem;
        margin: 2% 0;
    }
    .food-detail{
        font-size: 1rem;
        color: #747d8c;
    }


    /* CSS for Social */
    .social ul{
        list-style-type: none;
    }
    .social ul li{
        display: inline;
        padding: 1%;
    }

    /* for Order Section */
    .order{
        width: 50%;
        margin: 0 auto;
    }
    .input-responsive{
        width: 96%;
        padding: 1%;
        margin-bottom: 3%;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
    }
    .order-label{
        margin-bottom: 1%; 
        font-weight: bold;
    }
    .container{
        width: 80%;
        margin: 0 auto;
        padding: 1%;
    }
    .img-responsive{
        width: 100%;
    }
    .img-curve{
        border-radius: 15px;
    }

    .text-right{
        text-align: right;
    }
    .text-center{
        text-align: center;
    }
    .text-left{
        text-align: left;
    }
    .text-white{
        color: white;
    }

    .clearfix{
        clear: both;
        float: none;
    }

    a{
        color: #ff6b81;
        text-decoration: none;
    }


    .btn{
        padding: 1%;
        border: none;
        font-size: 1rem;
        border-radius: 5px;
    }
    .btn-primary{
        background-color: #ff6b81;
        color: white;
        cursor: pointer;
    }
    .btn-primary:hover{
        color: white;
        background-color: #ff4757;
    }
    </style>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="lisOfstores.php">Stores</a>
                    </li>
                    <li>
                        <a href="products.php">Products</a>
                    </li>
                    <li>
                        <a href="term.html">Terms</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>
            <a href="#">
            <div class="box-3 float-container">
                <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Vijay Thapa</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
    <?php include('admin/partials/footer.php'); ?>
</body>
</html>
