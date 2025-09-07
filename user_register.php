<?php
  include('connect.php');
  if(isset($_POST["submit"]))
  {
    $uname = $_POST['_username_']; 
    $upass = $_POST["_password_"];
    $uemail = $_POST["user_email"];
    $uphone = $_POST["user_phone"];
    $uaddress = $_POST["user_address"];


    $query = "INSERT INTO  `user_register`(`user_name`, `password`, `email`, `phone`, `address`) VALUES ('$uname', '$upass', '$uemail', '$uphone', '$uaddress')";

    $data = mysqli_query($conn,$query);
    if($data)
    {
        
        header('location: userlogin.php');
    
    }
    // $total = mysqli_num_rows($data);

    // $record = mysqli_fetch_assoc($data);
    
    
    // if($total == 1)
    // {
    //     $_SESSION['Fname']= $record['First_name']; 
    //     $_SESSION['Lname']= $record['Last_name']; 
    //     $_SESSION['u_email']= $record['Email']; 
    //     $_SESSION['u_phone']= $record['Phone']; 
    //     $_SESSION['u_address']= $record['Address'];
    //     $_SESSION['u_password']= $record['password'];
    //     $_SESSION['u_product']= $record['Inputproduct']; 
    //     $_SESSION['u_config']= $record['Conf1'];
    //     $_SESSION['u_date']= $record['Date'];
    //     $_SESSION['u_City']= $record['City']; 
    //     $_SESSION['u_Plan']= $record['Plan']; 
    //     $_SESSION['u_Price']= $record['Price']; 
    //     $_SESSION['u_exdate']= $record['Expire']; 

    //   header('location:http://localhost/Rent%20project/userdashboard.php');
       
    // }
    // else{
    //   echo '<script>alert("incorrect email or password");</script>';
    // }
  }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userlogin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .gradient-custom {
            background: #c02425; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #c02425, #f0cb35); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #c02425, #f0cb35);
        }

        body {
            padding-top: 80px;
        }



        
    </style>
</head>

<body>
    

    <section class="gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 my-4">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body py-2 px-5 ">

                            <div class="mb-md-5 mt-md-4 pb-1">

                                <h2 class="fw-bold mb-5 text-uppercase text-center">User Registration</h2>

                                <form action="user_register.php" method="post" autocomplete="off">
                                    <!-- username -->
                                    <div class="form-outline mt-2 mb-5">
                                        <label class="form-label fs-5" for="typeusername">Username :</label>
                                        <input type="text" id="typeusername" name="_username_" class="form-control form-control-lg" autocomplete="off" style="border: 0.1px solid black;
                                        box-shadow: none;" placeholder="Enter Username" required="required"/>
                                        
                                    </div>

                                    <!-- password -->
                                    <div class="form-outline  mb-4">
                                        <label class="form-label fs-5" for="typePasswordX">Password :</label>
                                        <input type="password" id="typePasswordX" name="_password_" class="form-control form-control-lg fs-8" autocomplete="new-password" style="border: 0.1px solid black;
                                        box-shadow: none;" placeholder="Enter Password" required="required"/>
                                    </div>

                                    <!-- confirm password -->
                                    <!-- <div class="form-outline  mb-4">
                                        <label class="form-label fs-5" for="confirm_password">Confirm Password :</label>
                                        <input type="confirm_password" id="confirm_password" name="confirm_password" class="form-control form-control-lg fs-8" autocomplete="new-password" style="border: 0.1px solid black;
                                        box-shadow: none;" placeholder="Enter Password" required="required"/>
                                    </div> -->

                                    <!-- email -->
                                    <div class="form-outline mt-2 mb-5">
                                        <label class="form-label fs-5" for="user_email">Email:</label>
                                        <input type="email" id="user_email" name="user_email" class="form-control form-control-lg" autocomplete="off" style="border: 0.1px solid black;
                                        box-shadow: none;" placeholder="Enter Email" required="required"/>
                                        
                                    </div>

                                    <!-- phone -->
                                    <div class="form-outline mt-2 mb-5">
                                        <label class="form-label fs-5" for="user_phone">Phone :</label>
                                        <input type="number" id="user_phone" name="user_phone" class="form-control form-control-lg" autocomplete="off" style="border: 0.1px solid black;
                                        box-shadow: none;" placeholder="Enter Phone number" required="required"/>
                                        
                                    </div>

                                    <!-- address -->
                                    <div class="form-outline mt-2 mb-5">
                                        <label class="form-label fs-5" for="user_address">User Address :</label>
                                        <input type="text" id="user_address" name="user_address" class="form-control form-control-lg" autocomplete="off" style="border: 0.1px solid black;
                                        box-shadow: none;" placeholder="Enter Address" required="required"/>
                                        
                                    </div>

                                    <!-- submit -->
                                    <div class="text-center">
                                        <button class="btn btn-outline-warning btn-lg mt-5 px-5" type="submit" name="submit" style="box-shadow: none;">Register</button>
                                    </div>
                                </form>
                                <div class="already pt-5 text-center">
                                    <h5>Already Registered?</h5>
                                    <a href="userlogin.php" class="text-decoration-none"><button class="btn btn-sm btn-outline-warning btn-lg " type="submit"  style="box-shadow: none;">Login Here</button></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
</body>

</html>

