<?php include("connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentalinfinity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Sacramento&display=swap'); */
     
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Clicker+Script&family=Sacramento&family=Ysabeau+SC:wght@700&display=swap');
       
        @import url('https://fonts.googleapis.com/css2?family=Clicker+Script&family=Roboto:wght@300&family=Sacramento&family=Ysabeau+SC:wght@700&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* font-family: 'Poppins', sans-serif; */
        }

        body {
            padding-top: 80px;
        }

        /* navbar */
        nav {
            background-color: white;
            padding: 0 30px 0 20px;
        }

        nav .navbar-nav .nav-item{
            /* font-family: 'Poppins'; */
            font-family: 'Clicker Script', cursive;
            font-family: 'Roboto', sans-serif;
            font-family: 'Sacramento', cursive;
            font-family: 'Ysabeau SC', sans-serif;
            
            
        }
        nav .nav-item .nav-link{
            color: black;
            text-decoration: none;
           
        }
        nav .nav-item-active .nav-link{
            color: #FFA500;
            text-decoration: none;
            
        }
        
        nav .nav-item .nav-link:hover{
            color: #FFA500;
            
            transform: scale(1.1);

        }
        nav .nav-icon:hover {
            transform: scale(1.1);
            background-color: d-none;

        }

        .navbar-brand {
            /* font-family: 'Sacramento', cursive; */
            font-family: 'Clicker Script', cursive;
            font-family: 'Sacramento', cursive;
            font-family: 'Ysabeau SC', sans-serif;
            font-size: 40px;
            font-weight: bold;
            margin: 0 15px;


        }

        .logo-img {
            width: 45px;
            height: auto;
            object-fit: cover;
            margin-bottom: 5px;
        }

        .dropdown-item {
            font-weight: bold;
            letter-spacing: 0.5px;
            font-size: 16px;
        }

        .nav-link {
            font-weight: bold;
            letter-spacing: 0.5px;
            margin: 0 17px 0 13px;
            font-size: 18px;
        }
        /* .navbar-toggler .navbar-toggler-icon{
            color: black;
            
        } */
        
        /* slide */
        .carousel-item img{
            filter: blur(3px);
            width: 100%;
            height: 80vh;
            object-fit: cover;
        }
    

        .carousel-item #slide-img3 {
            opacity: 85%;

        }

        .section1 .sub-head {
            display: flex;
        }

        .Slide-sec .carousel-caption .btn{
            box-shadow: none;
        }

        .Slide-sec .carousel-caption h5{
            font-family: 'Clicker Script', cursive;
            font-family: 'Sacramento', cursive;
            font-family: 'Ysabeau SC', sans-serif;
           font-size: 100px;
           color: white;
           /* text-shadow: 0 0 10px #00b3ff,
           0 0 20px #00b3ff,
           0 0 40px #00b3ff,
           0 0 80px #00b3ff,
           0 0 120px #00b3ff; */
           opacity: 30px;
           animation-duration: 3s;
           animation-name: slidein;
           
        }
        @keyframes slidein {
            from {
                margin-right: 50%;
            }
            to {
               margin-right: 0%;
            }
        }
        .Slide-sec .carousel-caption p{
            font-family: 'Clicker Script', cursive;
            font-family: 'Sacramento', cursive;
            font-family: 'Ysabeau SC', sans-serif;
            
            animation-duration: 3s;
           animation-name: slidein;
        }
        .Slide-sec .carousel-caption .btn{
            font-family: 'Clicker Script', cursive;
            font-family: 'Sacramento', cursive;
            font-family: 'Ysabeau SC', sans-serif;
            animation-duration: 3s;
           animation-name: slidein;

        }
        .Slide-sec .carousel-caption .btn:hover{
            transform: scale(1.1);

        }
        .carousel-caption{
           padding-top: 50px;
        
        }
        


        /* category */
        .category h1{
            font-family: 'Poppins', sans-serif;
            font-size: 40px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .category .card{
            margin-bottom: 10px;
        }
        #coloumn-cat .card:hover{
            transform: scale(1.1);
        }
        #coloumn-cat .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }

        #coloumn-cat p {
            text-align: center;
        }

        #coloumn-cat .card {
            border: 0.5px solid rgb(238, 115, 14);
            border-radius: 20px;

        }

        #coloumn-cat .card .card-body {
            border-top: 1px solid rgb(238, 115, 14);
        }

        
        

        /* trend */
        .trend h1{
            font-family: 'Poppins', sans-serif;
            font-size: 40px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .card-1 img {
            width: 100%;
            height: auto;
        }


        /* feature */
        .section1 h1{
            font-family: 'Poppins', sans-serif;
            font-size: 40px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .feature .row {
            padding-left: 60px;
            padding-right: 60px;
        }

        .feature .card-img {
            width: 200px;
            height: auto;

        }

        .feature .card-img1 {
            padding: 20px;
            max-width: 100%;
        }

        .feature .card {
            width: 100%;
            height: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);


        }

        .trend-items .card-1{
            width: 100%;
            height: 100%;
        }
        .lap-rent .card-1{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        .lap-rent .card-1:hover{
            transform: scale(1.1);

        }

        




        /* footer */
        footer {

            background: #252525;
            color: white;
        }

        .main-foot {
            padding: 45px 45px 45px 80px;
        }

        footer ul {
            padding-left: 0;
            list-style: none;
        }

        .footer-1 .col-container1 .footer-brand {
            font-family: 'Clicker Script', cursive;
            font-family: 'Sacramento', cursive;
            font-family: 'Ysabeau SC', sans-serif;
            font-size: 25px;
            font-weight: bold;
            text-decoration: none;
        }

        .footer-1 .col-container1 .footer-brand img {
            width: 35px;
            height: auto;
            object-fit: cover;
        }

        .col-container4 ul {
            display: flex;
        }

        .col-container4 ul li {
            margin-right: 20px;

        }

        footer .links1 a {
            text-decoration: none;
            color: white;
            font-size: 15px;
        }

        footer .col-container4 a{
            text-decoration: none;
            color: white;
        }
        footer .links1 a:hover{
            margin-left: 5px;

        }

        footer .email-div:hover{
            margin-left: 5px;
        }
        footer .phone-div:hover{
            margin-left: 5px;
        }
        .email-div {
            display: flex;
        }

        .email-div .icon {
            margin-right: 10px;
        }

        .phone-div {
            display: flex;
        }

        .phone-div .icon {
            margin-right: 10px;
        }

        h5 .col-container1-title1 {
            font-size: 300px;
        }

        .col-container2-list {
            text-decoration: none;
        }

        .footer-copyright {
            border-top: 0.1px solid rgb(124, 119, 119);
            padding-top: 10px;
        }
        footer .btn{
            background: linear-gradient(to right, rgb(235, 124, 44), rgb(230, 203, 34));

        }
        footer .btn:hover{
            transform: scale(1.1);

        }
        footer .col-icons li:hover{
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <header>
        <!-- navigation bar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid px-4">
                <a class="navbar-brand text-dark" href="index.html"><img class="logo-img" src="image/infinity.png" alt="logo">
                    Rentalinfinity</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                 </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown ">
                    <ul class="navbar-nav ms-auto pe-3 ">
                        <li class="nav-item-active">
                            <a class="nav-link fs-4" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  fs-4" href="about2.php">ABOUT</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle title fs-4" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu text-center fs-4" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item fs-5" href="userlogin.php">Laptops</a></li>
                                <li><a class="dropdown-item fs-5" href="userlogin.php">Desktops</a></li>
                                <li><a class="dropdown-item fs-5" href="userlogin.php">Cameras</a></li>
                                <li><a class="dropdown-item fs-5" href="userlogin.php">Lenses</a></li>
                                <li><a class="dropdown-item fs-5" href="userlogin.php">Drones</a></li>
                                <li><a class="dropdown-item fs-5" href="userlogin.php">Speakers</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link  fs-4" href="userlogin.php">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  fs-4" href="faq2.php">FAQ</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Slide bar -->

        <section class="Slide-sec">
            <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/slide/slide1.jpg (2).jpg" class="d-block w-100" alt="img" id="slide-img1">
                        <div class="carousel-caption d-block mt-4 top-0 ">
                            <h5 class="mt-5  fw-bolder">WE RENT</h5>
                            <p class=" fs-1">IT INFRASTRUCTURES</p>
                            <button type="button" class="btn btn-warning fs-3 text-capitalized" onclick="window.location.href='userlogin.php'">Login</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/slide/slide2.jpg.jpg" class="d-block w-100" alt="img" id="slide-img2">
                        <div class="carousel-caption  d-block mt-4 top-0">
                            <h5 class="mt-5  fw-bolder">WE RENT</h5>
                            <p class=" fs-1">DSLR CAMERA AND LENS</p>
                            <button type="button" class="btn btn-warning fs-3 text-capitalized" onclick="window.location.href='userlogin.php'">Login</button>
                        </div>
                       
                    </div>
                    <div class="carousel-item">
                        <img src="image/slide/slide3.jpg.jpg" class="d-block w-100" alt="img" id="slide-img3">
                        <div class="carousel-caption  d-block mt-4 top-0">
                            <h5 class="mt-5  fw-bolder">WE RENT</h5>
                            <p class=" fs-1">AUDIO VISUAL PRODUCTS</p>
                            <button type="button" class="btn btn-warning fs-3 text-capitalized" onclick="window.location.href='userlogin.php'">Login</button>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="visually-hidden ">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>
        
    </header>



    <!-- category -->
    <?php 
                    $select_cat = "SELECT * FROM `categories`";
                    $result_cat = mysqli_query($conn,$select_cat);
                    $row = mysqli_fetch_assoc($result_cat);
                        $cat_id =  $row['Category_id'];
                        $cat_name = $row['Category_name'];
                    
                    
            ?>
    <section class="category">
        <div class="container">
            <h1 class="text-center m-4 pt-5 ">Browse By Category</h1>
           
            <div class="row m-5">
                <div class="col-sm-6 col-md-4 col-lg-2" id="coloumn-cat" onclick="window.location.href='userlogin.php'">
                    <div class="card ">
                        <img src="image/lapicon.jpg" class="card-img-top p-4 " alt="img"
                            style="height: 25vh; width: 100%; opacity: 80%">
                        <div class="card-body">
                            <p class="card-text">Laptops</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2" id="coloumn-cat" onclick="window.location.href='userlogin.php'">
                    <div class="card">
                        <img src="image/cameraicon.jpg" class="card-img-top p-3" alt="img"
                            style="height: 25vh; opacity: 90%">
                        <div class="card-body">
                            <p class="card-text">Cameras</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2" id="coloumn-cat" onclick="window.location.href='userlogin.php'">
                    <div class="card">
                        <img src="image/computericon.jpg" class="card-img-top p-2" alt="img" style="height: 25vh;">
                        <div class="card-body">
                            <p class="card-text">Desktops</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2" id="coloumn-cat" onclick="window.location.href='userlogin.php'">
                    <div class="card">
                        <img src="image/droneicon.jpg" class="card-img-top p-2" alt="img" style="height: 25vh;">
                        <div class="card-body">
                            <p class="card-text">Drones</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2" id="coloumn-cat" onclick="window.location.href='userlogin.php'">
                    <div class="card">
                        <img src="image/lenseicon.jpg" class="card-img-top text-center p-4" alt="img"
                            style="height: 25vh;">
                        <div class="card-body">
                            <p class="card-text">Lenses</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2" id="coloumn-cat" onclick="window.location.href='userlogin.php'">
                    <div class="card">
                        <img src="image/speakersicon.jpg" class="card-img-top p-2" alt="img"
                            style="height: 25vh; opacity: 90%">
                        <div class="card-body">
                            <p class="card-text">Speakers</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- trending products -->
    <section class="trend">
        <div class="container">
            <div class="trend-items">

                <div class="Heading1 text-center my-3">
                    <h1 class="mt-3 pt-5">Trending Products</h1>
                </div>
                <div class="lap-rent">
                    <div class="row m-5 px-2 text-center">
                        <!-- fetching products -->
                <?php
                $select_query = "SELECT * FROM `products` order by rand() LIMIT 0,8";
                $result_query = mysqli_query($conn,$select_query);
                

                    
                    while($row = mysqli_fetch_assoc($result_query)){
                        $prod_id =  $row['product_id'];
                        $prod_name =  $row['product_name'];
                        $prod_discription =  $row['product_discription'];
                        $cat_id =  $row['category_id'];
                        $prod_img =  $row['product_image'];
                        $prod_price =  $row['product_price'];

                       
                        echo "<div class='col-sm-6 col-md-6 col-lg-3 mb-3'>
                        <a href='userlogin.php' class='text-decoration-none' style='color: black;'>
                        <div class='card-1  border'>
                            <div class='image'>
                                <img src='./admin/product_images/$prod_img' class='card-img-top p-4' alt='$prod_name'
                                    style='height: 35vh'>
                            </div>
                            <div class='body'>
                                <h5>$prod_name</h5>
                                <p style='font-size: 15px;'>$prod_discription</p>
                                <p style='font-size: 15px;'>$prod_price</p>
                            </div>
                        </div>
                        </a>
                    </div>";

                        
                    }
                ?>

                        
                       
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- feature -->
    <section class="section1">
        <div class="container">
            <div class="feature">
                <div class="heading">
                    <h1 class="text-center mx-5 my-5 pt-5">Why choose Rental infinity ?</h1>
                </div>

                <div class="row mx-auto my-auto mb-5">
                    <div class="col-md-4 col-div ">
                        <div class="card ">
                            <div class="card-img mx-auto">
                                <img src="image/why rent/delivery-truck (1).png" class="card-img1 " alt="img">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Pan-India Delivery</h5>
                                <p class="card-text">We have multiple branches and warehouses across India that helps us
                                    to deliver the right product at the right time to our customers.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 col-div">
                        <div class="card">
                            <div class="card-img mx-auto">
                                <img src="image/why rent/price-tags.png" class="card-img1" alt="img">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Competitive Pricing</h5>
                                <p class="card-text">We offer the most reasonable rental prices for all products with
                                    easy and convenient payment options for our customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-div">
                        <div class="card">
                            <div class="card-img mx-auto">
                                <img src="image/why rent/customer-service.png" class="card-img1" alt="img">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Post Rental Support</h5>
                                <p class="card-text">We are just a call away! Our superior customer care experts are
                                    available round the clock to address any kind of need, be it on-site support, remote
                                    troubleshooting, or any ither problem fixing.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

   <!-- footer -->
   <footer id="footer" class="footer-1">
    <div class="main-foot">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3 ">
                    <div class="col-container1 pe-4">
                        <a class="footer-brand text-warning" href="#"><img class="logo-img" src="image/infinity.png"
                                alt="logo">
                            Rentalinfinity</a>
                        <p style="font-size: 15px; margin-top: 18px;">About the company, little discription will
                            goes here.. </p>
                        <?php echo "<a href='admin/adminlogin.php'><button type='button' class='btn bg-warning px-4 fw-bold mx-auto w-50 mt-3' style='box-shadow: none; border: 1px solid black; opacity: 75%; '>Admin</button ></a> "; ?>    
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 ps-4">
                    <div class="col-container2 pt-2">
                        <h5 class="col-container2-title text-warning mb-4" style="font-size: 20px;">Quick
                            Links<span></span></h5>
                        <ul class="col-container2-list text-decoration-none">
                            <li>
                                <div class="links1 mb-2"><a href="index.php">Home</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="userlogin.php">About</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="userlogin.php">Contact</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="userlogin.php">FAQ</a></div>
                            </li>
                            <li>
                                <div class="links1 "><a href="#.">Terms of use</a></div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 ps-4">
                    <div class="col-container3 pt-2">
                        <h5 class="col-container2-title text-warning mb-4" style="font-size: 20px;">Our
                            Products<span></span></h5>
                        <ul class="col-container2-list">
                            <li>
                                <div class="links1 mb-2"><a href="userlogin.php">Laptops</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="userlogin.php">Desktops</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="userlogin.php">Cameras</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="userlogin.php">Lenses</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="userlogin.php">Drones</a></div>
                            </li>
                            <li>
                                <div class="links1"><a href="userlogin.php">Speakers</a></div>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 ps-3">

                    <div class="col-container4 pt-2">
                        <h5 class="col-container4-list text-warning mb-4" style="font-size: 20px;">Get In
                            Touch<span></span></h5>
                        <div class="email-div">
                            <div class="icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="phone">
                                <p><a href="mailto:madhav3@domain.com" title="glorythemes">91 9916578208</a></p>
                            </div>
                        </div>
                        <div class="phone-div">
                            <div class="icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="email">
                                <p><a href="mailto:madhav3@domain.com" title="glorythemes">madhav@gmail.com</a></p>
                            </div>
                        </div>
                        <br>
                        <ul class="col-icons">
                            <li class="bi bi-youtube">

                            </li>
                            <li class="bi bi-facebook">

                            </li>
                            <li class="bi bi-instagram">

                            </li>
                            <li class="bi bi-twitter">

                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
</footer>
</body>

</html>
