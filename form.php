<?php include("./connect.php");
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

        #plan {
            border: 0.1px solid black;
            box-shadow: none;
        }

        #prod_name{
            border: 0.1px solid black;
            box-shadow: none;
        }

        #prod_conf{
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

        .links1 a:hover {
            margin-left: 6px;
            color: white;
        }

        footer .col-container2,
        .col-container3,
        .col-container4 a {
            text-decoration: none;
            color: white;
            font-size: 15px;
        }

        footer a {
            text-decoration: none;
            color: white;
            font-size: 15px;
        }

        .email-div:hover {
            margin-left: 6px;
        }

        .phone-div:hover {
            margin-left: 6px;
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

        .dropdown-menu .dropdown-item {
            border-bottom: #FFC107;
        }

        .col-icons li:hover {
            margin-left: 6px;
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
                            <form action="form.php?user_id=<?php echo $user_id?>" method="POST" class="row g-3">
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
                                
                                 <div class="col-md-12 mb-2">
                                    <label for="prod_name" class="form-label">Rental Product:</label>
                                    <select name="prod_name" id="prod_name" class="form-select" required>
                                        <?php
                                        $select_query2 = "SELECT * FROM `categories`";
                                        $result_query2 = mysqli_query($conn,$select_query2);

                                        while($row = mysqli_fetch_assoc($result_query2)){
                                           
                                            $cat_name =  $row['Category_name'];
                                        echo "<option>$cat_name</option>";  

                                        }
                                        ?>
                                    </select>
                                </div>

                               <!-- product conf -->
                        
                                    
                                    <div class="col-md-12 mb-2">
                                    <label for="prod_conf" class="form-label">Product Configuration:</label>
                                    <select name="prod_conf" id="prod_conf" class="form-select" required>
                                        <?php
                                        $select_query3 = "SELECT * FROM `products`";
                                        $result_query3 = mysqli_query($conn,$select_query3);

                                        while($row = mysqli_fetch_assoc($result_query3)){
                                            $prod_name =  $row['product_name'];
                                        echo "<option>$prod_name</option>";
                                        }
                                        
                                        ?>
                                    </select>
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
                                        <div class="col-md-6 pay-2 text-center">
                                            <img src="image/Goog.webp" alt="google_pay" onclick="window.location.href='google-pay-QR.php'">
                                        </div>
                                    </div>
                                    <div class="col-md-12 w-50 mx-auto mb-2">
                                    <label for="QR" class="form-label  mt-2">Enter your UPI Id:</label>
                                    <input class="form-control" type="text" id="QR" name="QR" value="" placeholder="Enter your UPI Id" required  autocomplete="new-password"/>
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
        // $user_id = $user_id_;
        // $u_name = $user_name;
        // $pass = $password_;
        // $Email = $email_;
        // $Phone = $phone_;
        // $Address = $address_;
        if(isset($_POST["submit"]))
        {
            
            $product = $_POST['prod_name'];
            $prod_conf = $_POST['prod_conf'];
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

            $query = "INSERT INTO  `user_orders`(`user_id`, `user_name`, `password`, `email`, `phone`, `address`, `product`, `product_configure`, `duration`, `charge`, `date`, `expiry`, `pay_id`) VALUES ('$user_id_','$user_name', '$password_', '$email_', '$phone_', '$address_', '$product', '$prod_conf', '$plan', '$price', '$dat', '$dat2', '$pay')";

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

