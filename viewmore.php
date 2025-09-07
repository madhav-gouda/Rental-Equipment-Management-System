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
    <?php
    // product_id
    if(isset($_GET['product_id'])){
        $prod_id = $_GET['product_id'];
        $select_query = "SELECT * FROM `products` where product_id=$prod_id";
        $result_query = mysqli_query($conn,$select_query);

        $row = mysqli_fetch_assoc($result_query);
        $prod_id =  $row['product_id'];
        $prod_name =  $row['product_name'];
        $prod_discription =  $row['product_discription'];
        $prod_more_discription = $row['view_more'];
        $cat_id =  $row['category_id'];
        $prod_img =  $row['product_image'];
        $prod_price =  $row['product_price'];

        if(isset($_GET['user_id'])){
            $user_id = $_GET['user_id'];
         }
         if(isset($_GET['product_id'])){
            $prod_id = $_GET['product_id'];
         }
         if(isset($_GET['cat_id'])){
            $cat_id = $_GET['cat_id'];
         }
      

        echo "<section id='div1_myDiv' class='section-p1 '>
        <div class='container'>
            <div class='row mt-5 mx-2'>
                <div class='col-md-6 ' id='coloumn-img'>
                    <img class='p-5 w-75 border' src='./admin/product_images/$prod_img' alt='$prod_name'>
                </div>
                <div class='col-md-6 my-auto'>
                    <div class='container-main '>
                        <div class='content '>
                            <h2 class='entrytitle1' id='entrytitle1'>$prod_name</h2>
                            <p>$prod_discription</p>
                            <p>$prod_more_discription</p>   
                            <p>$$prod_price</p>                
                            <a href='form2.php?user_id=$user_id&product_id=$prod_id&cat_id=$cat_id'><button type='button' class='btn btn-warning' id='button1' name='button1' >Request a quote</button></a>
                                                    
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </section>";
    }
    ?>
</body>

</html>



