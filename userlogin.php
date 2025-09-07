<?php

  include('connect.php');
  if(isset($_POST["submit"]))
  {
    $uname = $_POST['_username_']; 
    $upass = $_POST['_password_'];

    $query = "SELECT * FROM `user_register` where `user_name`='$uname' AND `password`='$upass'";

    $data= mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);   
    
    $rows = mysqli_fetch_assoc($data);
        $u_id =  $rows['user_id'];
        
        
        
    if($total > 0)
    {
      header("location:index2.php?user_id=$u_id");
    }
    else{
      echo '<script>alert("incorrect email or password");</script>';
    }
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

                                <h2 class="fw-bold mb-5 text-uppercase text-center">User Login</h2>

                                <form action="userlogin.php" method="post" autocomplete="off">
                                    <div class="form-outline mt-2 mb-5">
                                        <label class="form-label fs-5" for="typeusername">Username :</label>
                                        <input type="text" id="typeusername" name="_username_" class="form-control form-control-lg" autocomplete="off" style="border: 0.1px solid black;
                                        box-shadow: none;" placeholder="Enter Username" required="required"/>
                                        
                                    </div>

                                    <div class="form-outline  mb-4">
                                        <label class="form-label fs-5" for="typePasswordX">Password :</label>
                                        <input type="password" id="typePasswordX" name="_password_" class="form-control form-control-lg fs-8" autocomplete="new-password" style="border: 0.1px solid black;
                                        box-shadow: none;" placeholder="Enter Password" required="required"/>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-outline-warning btn-lg mt-5 px-5" type="submit" name="submit" style="box-shadow: none;">Login</button>
                                    </div>
                                </form>
                                <div class="already pt-5 text-center">
                                    <h5>Don't have an account?</h5>
                                    <a href="user_register.php" class="text-decoration-none"><button class="btn btn-sm btn-outline-warning btn-lg " type="submit"  style="box-shadow: none;">Register Now</button></a>
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

