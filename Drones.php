<?php
 include("./connect.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops</title>
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
            font-family: 'Poppins', sans-serif;
        }

        .card .image{
            max-height: 30vh;
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

        .card:hover {
            transform: scale(1.1);

        }



        /* section1 */
        .Lap-items .row {
            padding: 10px 80px 10px 80px;

        }
        .Lap-items .body p{
            color: black;
        }
        .Lap-items .body h5{
            color: rgb(238, 186, 30);
            font-weight: bold;
        }


        .Lap-items .card {
            width: 100%;
            height: 65vh;
        }


    </style>
</head>

<body>
    
    <section class="section1 pt-5">
        <div class="heading text-center m-3 pt-5">
            <h1>Drones On Rent</h1>
            <p>Rent For The Best Drones Here</p>
        </div>
        <div class="container">
            <div class="Lap-items">
                <div class="row text-center mb-3 ">

                <!-- fetching products -->
                <?php
                $select_query = "SELECT * FROM `products` where category_id=4";
                $result_query = mysqli_query($conn,$select_query);
                $num_rows = mysqli_num_rows($result_query);

                if($num_rows == 0){
                    echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
                }

                if(isset($_GET['user_id'])){
                    $user_id = $_GET['user_id'];
                 }
                    while($row = mysqli_fetch_assoc($result_query)){
                        $prod_id =  $row['product_id'];
                        $prod_name =  $row['product_name'];
                        $prod_discription =  $row['product_discription'];
                        $cat_id =  $row['category_id'];
                        $prod_img =  $row['product_image'];
                        $prod_price =  $row['product_price'];

                        
                      

                       
                        echo "<div class='col-sm-6 col-md-6 col-lg-3'>
                       
                        <div class='card border mb-3'>
                            <div class='image'>
                                <img src='./admin/product_images/$prod_img' class='card-img-top p-4' alt='$prod_name'>
                            </div>
                            <div class='body'>
                                <div class='h5head'>
                                    <h5>$prod_name</h5>
                                </div>
                               
                            </div>
                            <div class='ptag'>
                                <p class='disc' style='font-size: 12px;'>$prod_discription</p>
                                <p style='font-size: 15px;'>$prod_price</p>
                            </div>
                        
                            <div class='button'>
                                     <a href='viewmore.php?product_id=$prod_id&user_id=$user_id&cat_id=$cat_id' class='btn btn-primary'>view more</a>
                            </div>
                                
                                
                            
                        </div>
                  
                        </div>";

                        
                    }
                ?>
                    
                  
                </div>
            </div>
        </div>
    </section>

</body>

</html>


