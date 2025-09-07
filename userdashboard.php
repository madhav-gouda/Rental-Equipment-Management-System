<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        h2{
            font-weight: bold;
            font-size: 60px;
          
            
        }
        section .card{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

        }
        section .card:hover {
            transform: scale(1.1);

        }
        section .row{
            padding: 40px;
        }
        .card-body h2{
            font-size: 35px;
        }
        .card img{
            padding: 60px 60px 20px 60px;
        }
        
    </style>
</head>
<body>
    <?php
       if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];
        }
    ?>
   <section>
        <div class="container">
            <div class="heading">
                <h2 class="text-center m-5">USER DASHBOARD <hr class="w-75 mx-auto"></h2>
            </div>
           
            <div class="row text-center ">
                <div class="col-12 col-md-6 col-lg-6 pe-5" >
                    <?php echo "
                    <a href='userdashboard1.php?user_id=$user_id' class='text-decoration-none'>
                    <div class='card  mx-auto mb-4' style='width: 22rem;'>
                        <img src='image/list.png' class='card-img-top ' alt='...'>
                        <div class='card-body'>
                            <h2 class='card-text'>User Personal Details</h2>
                        </div>
                    </div>
                    </a> ";?>
                </div>
                <div class="col-12 col-md-6 col-lg-6 ps-5">
                    <?php echo "
                    <a href='userdashboard2.php?user_id=$user_id' class='text-decoration-none'>
                    <div class='card mx-auto mb-4' style='width: 22rem;'>
                        <img src='image/backlog.png' class='card-img-top ' alt='...'>
                        <div class='card-body'>
                            <h2 class='card-text'>User Rental History</h2>
                        </div>
                    </div>
                    </a> ";?>
                </div>
            </div>
        </div>    
   </section>
</body>
</html>