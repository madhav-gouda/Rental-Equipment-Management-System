<?php
include("connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard1</title>
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
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    }

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


if($num_rows != 0)
{
    ?>

    <section class="section">
        <div class="container">
            
            <div class="content">
            <h1 class="text-center m-5">DETAILS OF THE USER <hr class="w-75 mx-auto"></h1>
             <div class="sub-content py-5">
                <table class="table border text-center">
                    <thead>
                    <tr> 
                        <th>User name</th> 
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Password</th>
                        <th>Operations</th>
                    </tr>
                    </thead>

                    <?php
                    // $udata=$_SESSION['username'];

                    

                    echo "<tbody>
                                <tr>
                                <td>".$user_name."</td>
                                <td>".$email_."</td>
                                <td>".$phone_."</td>
                                <td>".$address_."</td>
                                <td>".$password_."</td>
                                
                                ";
                                echo "<td><a href='user_update.php?user_id=$user_id'><button type='button' class='btn btn-warning w-50' style='border: 0.1px solid black;
                                box-shadow: none;'>Edit</button></a></td>
                                </tr>";
                                  
                            echo"</tbody>";
                   
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






