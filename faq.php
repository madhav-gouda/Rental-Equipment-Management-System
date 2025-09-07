<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      

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


    
    h1{
        text-align: center;
        margin: 50px o !important;
        font-family: sans-serif;
    }
    .container1{
      padding: 30px 30px 80px 30px ;
    }
    .accordion-item,.accordion-header { 
        background-color: transparent !important;
        border: none !important;
        padding: 0 !important;
        margin-bottom: 15px;
    }
    .accordion-button{
        background-color: rgb(244, 219, 33) !important;
        color: black !important;
        position: relative;
        box-shadow: none !important;
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
<?php  $user_id = $_GET['user_id']; ?>
    <!-- navigation bar -->
    <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid px-4">
                <a class="navbar-brand text-dark" href="index2.php?user_id=<?php echo $user_id?>"><img class="logo-img" src="image/infinity.png" alt="logo">
                    Rentalinfinity</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                 </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown ">
                    <ul class="navbar-nav ms-auto pe-3 ">
                        <li class="nav-item">
                            <a class="nav-link fs-4" aria-current="page" href="index2.php?user_id=<?php echo $user_id?>">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  fs-4" href="About.php?user_id=<?php echo $user_id?>">ABOUT</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle title fs-4" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu text-center fs-4" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item fs-5" href="lap.php?user_id=<?php echo $user_id?>">Laptops</a></li>
                                <li><a class="dropdown-item fs-5" href="computers.php?user_id=<?php echo $user_id?>">Desktops</a></li>
                                <li><a class="dropdown-item fs-5" href="cameras.php?user_id=<?php echo $user_id?>">Cameras</a></li>
                                <li><a class="dropdown-item fs-5" href="Lenses.php?user_id=<?php echo $user_id?>">Lenses</a></li>
                                <li><a class="dropdown-item fs-5" href="Drones.php?user_id=<?php echo $user_id?>">Drones</a></li>
                                <li><a class="dropdown-item fs-5" href="Speakers.php?user_id=<?php echo $user_id?>">Speakers</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link  fs-4" href="contact.php?user_id=<?php echo $user_id?>">CONTACT</a>
                        </li>
                        <li class="nav-item-active">
                            <a class="nav-link  fs-4" href="FAQ.php?user_id=<?php echo $user_id?>">FAQ</a>
                        </li>
                        <li class="nav-icon">
                            <a href="userdashboard.php?user_id=<?php echo $user_id ?>"><img class="ms-3 mt-1" src="image/user.png" alt="userdashboard" style="width: 40px"></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

  <section class="py-5">
  <h1>Frequently Asked Questions</h1>

  <div class="container pt-3">
    <!-- <div class="row">
      <div class="col-md-6 container1"> -->
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  What Is Rental Infinity?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Rental Infinity is one of the largest providers of comprehensive rental solutions in the country for all your business needs. Our varied supply of IT equipment has made us an established name in the Indian rental industry. Our mission is to provide superior products at affordable rentals backed by best-in-class support. The equipment(s) offered by us include Laptops, Desktops, Cameras etc.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
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
                                <div class="links1 mb-2"><a href="about.php">About</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="contact.php">Contact</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="faq.php">FAQ</a></div>
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
                                <div class="links1 mb-2"><a href="lap.php">Laptops</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="computers.php">Desktops</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="cameras.php">Cameras</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="Lenses.php">Lenses</a></div>
                            </li>
                            <li>
                                <div class="links1 mb-2"><a href="Drones.php">Drones</a></div>
                            </li>
                            <li>
                                <div class="links1"><a href="Speakers.php">Speakers</a></div>
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
                                <p><a href="mailto:madhav3@domain.com" title="glorythemes">info@domain.com</a></p>
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







