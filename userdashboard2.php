<?php
include("connect.php");
error_reporting(0);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard2</title>
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


        .content h1 {
            font-weight: bold;
            font-size: 60px;

        }
        table th,td{
            border: 2px solid white;
                border-collapse: collapse;
                padding: 20px 10px;
           
        }
   
            .content th{
                padding: 45px 10px;
                background-color: rgb(95, 250, 255);
     
            }
            .content td{
                padding: 25px 12px;
                background-color: rgb(222, 222, 222);
            }
    </style>
</head>

<body>
    <?php 
    $user_id = $_GET['user_id'];
        $query = "SELECT * FROM `user_orders` WHERE user_id='$user_id'";
        $data = mysqli_query($conn,$query);

        $total = mysqli_num_rows($data);

        if($total != 0)
        {
        ?>

    <section class="section align-items-center">
        <div class="container-fluid">

            <div class="content mx-3">
                <h1 class="text-center m-5">RENTAL HISTORY OF THE USER
                    <hr class="w-75 mx-auto">
                </h1>

                <div class="sub-content py-5">
                    <table class="table border text-center">
                    <thead>
                    <tr> 
                        <th>User name</th> 
                        <th>Password</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Product</th>
                        <th>Product Configure</th>
                        <th>Duration</th>
                        <th>Charge</th>
                        <th>Payment id</th>
                        <th>Date</th>
                        <th>Expiry</th>
                        
                    </tr>
                    </thead>
                    <tbody >
                        <?php
                            while($row = mysqli_fetch_assoc($data)){
                                
                                $order_id = $row['order_id'];
                                $user_name = $row['user_name'];
                                $password = $row['password'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                                $address = $row['address'];
                                $product = $row['product'];
                                $product_configure = $row['product_configure'];
                                $duration = $row['duration'];
                                $charge = $row['charge'];
                                $pay_id = $row['pay_id'];
                                $date = $row['date'];
                                $expiry = $row['expiry'];
                               
                        
                        
                                echo "<tr>
                                <td>".$user_name."</td>
                                <td>".$password."</td>
                                <td>".$email."</td>
                                <td>".$phone."</td>
                                <td>".$address."</td>
                                <td>".$product."</td>
                                <td>".$product_configure."</td>
                                <td>".$duration."</td>
                                <td>".$charge."</td>
                                <td>".$pay_id."</td>
                                <td>".$date."</td>
                                <td>".$expiry."</td>

                                
                                </tr>";
                            }     
                             ?>
                            </tbody>
 <?php                 
        }
        else   
        {
            echo "No data found";
        }
        ?>


                    </table>
                </div>
            </div>
        </div>
    </section>

</body>

</html>