

<?php include("./connect.php");
$cat_id = $_GET['cat_id'];
$prod_id = $_GET['product_id'];
$user_id = $_GET['user_id'];
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" http-equiv="refresh" content="width=device-width, initial-scale=1.0">
    <title>-Quote-Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .form-content input[type=text] {

            border: 0.1px solid black;
            box-shadow: none;
        }

        .form-content input[type=email] {

            border: 0.1px solid black;
            box-shadow: none;
        }

        .form-content input[type=number] {

            border: 0.1px solid black;
            box-shadow: none;
        }

        #inputcity {
            border: 0.1px solid black;
            box-shadow: none;
        }

        #plan{
            border: 0.1px solid black;
            box-shadow: none;
        }

        #password{
            border: 0.1px solid black;
            box-shadow: none;
        }

        .main-pay .row .pay-1 img{
            width: 129px;
            margin-top: 16px;
        }
        .main-pay .row .pay-2 img{
            width: 80px;
           
        }
        .main-pay .row .pay-1 img:hover{
            transform: scale(1.1);

        }
        .main-pay .row .pay-2 img:hover{
            transform: scale(1.1);

        }


    </style>
</head>

<body>
    
    <section class="form-section mx-auto w-75 my-4">
        <div class="container mx-0">
            <div class="row justify-content-center">
                <div class="col-12  col-lg-8 col-xl-9">
                    <div class="form-div border bg-light">

                        <div class="form-head">
                            <h2 class="text-center bg-warning p-3 mb-4 fs-7">RENTAL QUOTE</h2>
                        </div>
                        <div class="form-content px-4">
                            <h3 class="mb-4">User Details</h3>
                            <form action="form2.php?user_id=<?php echo $user_id?> &product_id=<?php echo $prod_id?>&cat_id=<?php echo $cat_id?>" method="POST" class="row g-3">
                                <?php 
                                 
                                //  if(isset($_GET['user_id'])){
                                //     $user_id = $_GET['user_id'];
                                //  }
                                 
                                    $select_query = "SELECT * FROM `user_register` WHERE user_id = '$user_id'";
                                    $result_query = mysqli_query($conn,$select_query);
                                    $num_rows = mysqli_num_rows($result_query);

                                    while($row = mysqli_fetch_assoc($result_query)){
                                        $user_id_ = $row['user_id'];
                                        $user_name = $row['user_name'];
                                        $password_ = $row['password'];
                                        $email_ = $row['email']; 
                                        $phone_ = $row['phone']; 
                                        $address_ = $row['address']; 
                                    }   
                                ?>
                                <!-- username -->
                                <div class="col-sm-12 mb-2">
                                    <label for="username" name="user_name" class="form-label">User name : <?php echo $user_name ?></label>
                                    
                                </div>
                                <!-- Password -->
                                <div class="col-sm-12 mb-2">
                                    <label for="password" class="form-label">Password : <?php echo $password_ ?></label>
                
                                </div>
                                <!-- email -->
                                <div class="col-12 mb-2">
                                    <label for="validationCustom03" class="form-label">Email : <?php echo $email_ ?></label>
                                    
                                </div>
                                <!-- phone -->
                                <div class="col-12  mb-2">
                                    <label class="form-label" for="validationCustom04">Phone : <?php echo $phone_ ?></label>
                                </div>

                                <!-- address -->
                                <div class="col-12  mb-3">
                                    <label class="form-label" for="form6Example4">Address : <?php echo $address_ ?></label>
                                   
                                </div>

                                <h3 class="mb-4">Product details</h3>

                                 <!-- rental products --> 
                                 <?php
                                //  if(isset($_GET['cat_id'])){
                                //     $cat_id = $_GET['cat_id'];
                                //  }

                                 $select_query3 = "SELECT * FROM `categories` WHERE Category_id  = '$cat_id'";
                                 $result_query3 = mysqli_query($conn,$select_query3);


                                 while($row3 = mysqli_fetch_assoc($result_query3)){
                                     
                                     $cat_name = $row3['Category_name'];

                                 }
                                   
                                 ?> 
                                 <div class="col-md-12  mb-2">
                                    <label for="prod_" class="form-label">Rental Product : <?php echo $cat_name ?></label>
                                </div>

                               <!-- product conf -->
                               
                                <?php 
                                 
                                //  if(isset($_GET['product_id'])){
                                //     $prod_id = $_GET['product_id'];
                                //  }
                                 
                                 $select_query2 = "SELECT * FROM `products` WHERE product_id = '$prod_id'";
                                 $result_query2 = mysqli_query($conn,$select_query2);
                                 $num_rows = mysqli_num_rows($result_query2);

                                 while($row2 = mysqli_fetch_assoc($result_query2)){
                                     
                                     $prod_name = $row2['product_name'];
                                    
                                 }  
                                ?>
                               <div class="col-md-12  mb-2">
                                    <label for="conf_" class="form-label">Product configuration : <?php echo $prod_name ?></label> 
                                </div>

                                <!-- Quantity -->
                                <h3 class="mb-4">More About Your Rental Requirements</h3>

                                <!-- duration -->
                                <div class="col-md-12 w-50 mb-2">
                                    <label for="plan" class="form-label">Rental duration *</label>
                                    <select name="plan" id="plan" class="form-select" onclick="pricef();">
                                        <option value="One day">One day</option>
                                        <option value="One Week">One Week</option>
                                        <option value="One Month">One Month</option>
                                        <option value="Three Months">Three Months</option>
                                        <option value="6 Months">6 Months</option>
                                    </select>
                                </div>

                                <!-- price -->
                                <div class="col-md-12 w-50  mb-2">
                                    <label for="price" class="form-label">Rental charge</label>
                                    <input class="form-control" type="text" id="price" name="price" value="500" />
                                </div>

                                <!-- payment -->
                                <div class="main-pay py-4" style="background-color: aqua;">
                                    <div class="pay-head text-center">
                                        <h3>SCAN TO PAY<hr class="w-50 mx-auto"></h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pay-1 text-center ">
                                            <img src="image/pngwing.com.png" alt="phone_pay" onclick="window.location.href='Phone-pay-QR.php'">
                                            
                                        </div>
                                        <div class="col-md-6 pay-2 text-center ">
                                            <img src="image/Goog.webp" alt="google_pay" onclick="window.location.href='google-pay-QR.php'">
                                        </div>
                                    </div>
                                    <div class="col-md-12 w-50 mx-auto mb-2">
                                    <label for="QR" class="form-label  mt-2">Enter your UPI Id:</label>
                                    <input class="form-control" type="text" id="QR" name="QR" value="" placeholder="Enter your UPI Id" required />
                                </div>
                                </div>

                                <!-- submit button -->
                                <div class="col-12 mx-auto w-50">
                                    <button type="submit" name="submit" class="btn btn-warning mb-4 w-100">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // price
        function pricef(){
            var price = 0;
            var plan = document.getElementById("plan").value;
            if(plan == 'One day')
                price = 500;
            else if(plan == 'One Week')
                price = 3000;          
            else if(plan == 'One Month')
                price = 5000;
            else if(plan == 'Three Months')
                price = 10000;
            else
                price = 15000;

            document.getElementById("price").value = price;    
        }
    </script>
    <?php  
        $dat = date("Y-m-d");
        $user_id = $user_id_;
        $u_name = $user_name;
        $pass = $password_;
            $Email = $email_;
            $Phone = $phone_;
            $Address = $address_;

            $product = $cat_name;
            $prod_conf = $prod_name;
        if(isset($_POST["submit"]))
        {
            $plan = $_POST['plan'];
            $price = $_POST['price'];

            if($plan == 'One day'){
                $d=strtotime("+1 day");
            }
            else if($plan == 'One Week'){
                $d=strtotime(("+1 week"));
            }
            else if($plan == 'One Month'){
                $d=strtotime(("+1 month"));
            }
            else if($plan == 'Three Months'){
                $d=strtotime(("+3 month"));
            }
            else{
                $d=strtotime(("+6 month"));
            }
            $dat2 = date("Y-m-d", $d);

            $pay =  $_POST['QR'];

            $query = "INSERT INTO  `user_orders`(`user_id`, `user_name`, `password`, `email`, `phone`, `address`, `product`, `product_configure`, `duration`, `charge`, `date`, `expiry`, `pay_id`) VALUES ('$user_id','$u_name', '$pass', '$Email', '$Phone', '$Address', '$product', '$prod_conf', '$plan', '$price', '$dat', '$dat2', '$pay')";

            $data = mysqli_query($conn,$query);

            if($data)
            {
                echo "<script>alert('Your form data will be verified within 24 hours.');</script>";
            }
            else{
                echo "failed";

            }
        }
    ?>
</body>

</html>

