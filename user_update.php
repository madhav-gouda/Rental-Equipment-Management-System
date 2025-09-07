<?php
  include('connect.php');
  if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $user = $user_id;
    }
?>
                       <?php 
                                  
                                   if(isset($_POST["submit2"]))
                                   {
                                 
                                       
                                        
                                       
                                       $uname = $_POST["_username_"]; 
                                       $upass = $_POST["_password_"];
                                       $uemail = $_POST["user_email"];
                                       $uphone = $_POST["user_phone"];
                                       $uaddress = $_POST["user_address"];


                                       $query2 = "UPDATE `user_register` SET `user_name`='$uname',`password`='$upass',`email`='$uemail',`phone`='$uphone',`address`='$uaddress' WHERE `user_id`='$user'";
                                       

                                       $data = mysqli_query($conn,$query2);
                                       if($data)
                                       {
                                           
                                           echo "updated";
                                           // header("location: index2.php");
                                       
                                       }
                                       else{
                                           echo "not updated";
                                       }
                                   
                                   }


                                   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
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

                                <h2 class="fw-bold mb-5 text-uppercase text-center">Update Here</h2>
         
                                <form action="user_update.php?user_id=<?php echo $user_id?>" method="post" autocomplete="off">
                                    <?php

                                        
                                        $select_query = "SELECT * FROM `user_register` WHERE user_id = '$user_id'";
                                        $result_query = mysqli_query($conn,$select_query);
                                        $num_rows = mysqli_num_rows($result_query);
                                        
                                        while($row = mysqli_fetch_assoc($result_query)){
                                            
                                            $user_name = $row['user_name'];
                                            $password_ = $row['password'];
                                            $email_ = $row['email']; 
                                            $phone_ = $row['phone']; 
                                            $address_ = $row['address']; 
                                        }
                                       
                                    ?>
                                    
                                    <!-- username -->
                                    
                                    <div class="form-outline mt-2 mb-5">
                                        <label class="form-label fs-5" for="typeusername">Username :</label>
                                        <input type="text" id="typeusername" name="_username_" class="form-control form-control-lg" autocomplete="off" style="border: 0.1px solid black;
                                        box-shadow: none;" value="<?php echo $user_name; ?>" required="required" />
                                        
                                    </div>

                                    <!-- password -->
                                    <div class="form-outline  mb-4">
                                        <label class="form-label fs-5" for="typePasswordX">Password :</label>
                                        <input type="password" id="typePasswordX" name="_password_" class="form-control form-control-lg fs-8" autocomplete="new-password" style="border: 0.1px solid black;
                                        box-shadow: none;" value="<?php echo $password_; ?>" required="required"/>
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
                                        box-shadow: none;" value="<?php echo $email_; ?>"  required="required"/>
                                        
                                    </div>

                                    <!-- phone -->
                                    <div class="form-outline mt-2 mb-5">
                                        <label class="form-label fs-5" for="user_phone">Phone :</label>
                                        <input type="number" id="user_phone" name="user_phone" class="form-control form-control-lg" autocomplete="off" style="border: 0.1px solid black;
                                        box-shadow: none;" value="<?php echo $phone_; ?>" required="required"/>
                                        
                                    </div>

                                    <!-- address -->
                                    <div class="form-outline mt-2 mb-5">
                                        <label class="form-label fs-5" for="user_address">User Address :</label>
                                        <input type="text" id="user_address" name="user_address" class="form-control form-control-lg" autocomplete="off" style="border: 0.1px solid black;
                                        box-shadow: none;" value="<?php echo $address_; ?>" required="required"/>
                                        
                                    </div>

                                    <!-- submit -->
                                    <div class="text-center">
                                        <button class="btn btn-outline-warning btn-lg mt-5 px-5" type="submit" name="submit2" style="box-shadow: none;">Update</button>
                                    </div>
                                </form>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
</body>

</html>

