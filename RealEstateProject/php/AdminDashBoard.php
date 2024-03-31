<?php

include 'dbCon.php';

$sql = "Select * from buyerdetails;";
$result =mysqli_query($conn,$sql);

$query = "Select * from sellorpropertydetails;";
$ans = mysqli_query($conn,$query);

$query1 = "Select * from buyer_member;";
$sellor = mysqli_query($conn,$query1);


$query2 = "Select * from sellor_member;";
$buyer = mysqli_query($conn,$query2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8c32e9fdc4.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../Assets/icons8-house-of-cards-32.png">
    <link rel="stylesheet" href="../AdminDashBoard.css">
    <title>AdminDashBoard</title>
</head>
<body>
    <nav class="container-fluid navbar">
    
        <h4 class="navbar-brand title title_name"><i class="fa-solid fa-house px-2 active"></i>Broker<Span class="active">Way</Span></h4>
        <a target="_blank" href="https://icons8.com/icon/-u-Yda167wYz/house-of-cards" class="d-none">House Of Cards</a> icon by <a target="_blank" href="https://icons8.com" class="d-none">Icons8</a>
        <ul class="nav">
            <li class="nav-item navigation"><a href="./Home.php" class="nav-link link_name active">Home</a></li>
            <li class="nav-item navigation"><a href="./About.php" class="nav-link link_name">About</a></li>
            <li class="nav-item navigation"><a href="./SellorLogin.php" class="nav-link link_name">Sellor</a></li>
            <li class="nav-item navigation"><a href="./BuyerLogin.php" class="nav-link link_name">Buyer</a></li>
            <li class="nav-item navigation"><a href="./AdminLogin.php" class="nav-link link_name">Admin</a></li>
            <li class="nav-item menu-bar"><button type="button" class="btn navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#StartSidebar"><i class="fa-solid fa-bars text-white w-50 py-2"></i></button></li>
        </ul>
    </nav>

    <div class="offcanvas offcanvas-start sidebar" id="StartSidebar">
        <div class="offcanvas-header">
            <h4 class="offcanvas-title active">Broker Way</h4>
            <button class="btn-close text-reset bg-light" type="button" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="text-decoration-none list-unstyled sidebar-nav">
                <li class="link_name1 active"><a href="./Home.php">Home</a></li>
                <li class="link_name1 "><a href="./About.php">About</a></li>
                <li class="link_name1 "><a href="./SellorLogin.php">Sellor</a></li>
                <li class="link_name1 "><a href="./BuyerLogin.php">Buyer</a></li>
                <li class="link_name1 "><a href="./AdminLogin.php">Admin</a></li>
            </ul>
        </div>
    </div>
    
    <div class="container">
        <div class="sellorTable">
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <h2 class="card-header text-center text-white bg-dark p-2">Buyer Except Property Details</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center table-content table-striped table-hover">
                            <tr class="bg-dark text-white">
                                <td>Buyer Name</td>
                                <td>Buyer Mobile</td>
                                <td>Buyer Location</td>
                                <td>BuyerProperty Expect Rate</td>
                                <td>BuyerProperty Expect Location</td>
                                <td>BuyerProperty Expect Sqft</td>
                                <td>Type of Property</td>
                            </tr>
                            <?php
                                while($row=mysqli_fetch_assoc($result)){
                            ?> 
                            <tr class="normal">  
                                <td><?php echo $row['BuyerName']; ?></td>
                                <td><?php echo $row['BuyerMobile']; ?></td>
                                <td><?php echo $row['BuyerLocation']; ?></td>
                                <td><?php echo $row['BuyerProExeRate']; ?></td>
                                <td><?php echo $row['BuyerProExeLoc']; ?></td>
                                <td><?php echo $row['BuyerProExeSqft']; ?></td>
                                <td><?php echo $row['BuyerExeTypePro']; ?></td>
                            </tr>   
                            <?php
                                }
                            ?>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="sellorTable">
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <h2 class="card-header text-center text-white bg-dark p-2">Sellor Property Details</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center table-content table-striped table-hover">
                            <tr class="bg-dark text-white">
                                <td>Sellor Name</td>
                                <td>Sellor Mobile</td>
                                <td>Property Location</td>
                                <td>Property Rate</td>
                                <td>Property Sqft</td>
                                <td>Type of Property</td>
                            </tr>
                            <?php
                                while($get=mysqli_fetch_assoc($ans)){
                            ?> 
                            <tr class="normal">  
                                <td><?php echo $get['SellorName']; ?></td>
                                <td><?php echo $get['SellorMobile']; ?></td>
                                <td><?php echo $get['SellorPropertyLocation']; ?></td>
                                <td><?php echo $get['SellorPropertyRate']; ?></td>
                                <td><?php echo $get['SellorPropertySqft']; ?></td>
                                <td><?php echo $get['SellorTypeProperty']; ?></td>
                            </tr>   
                            <?php
                                }
                            ?>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="sellorTable">
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <h2 class="card-header text-center text-white bg-dark p-2">Buyer Details</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center table-content table-striped table-hover">
                            <tr class="bg-dark text-white">
                                <td>Buyer Name</td>
                                <td>Buyer Gmail Id</td>
                                <td>Buyer Location</td>
                            </tr>
                            <?php
                                while($get=mysqli_fetch_assoc($sellor)){
                            ?> 
                            <tr class="normal">  
                                <td><?php echo $get['Name']; ?></td>
                                <td><?php echo $get['Gmail']; ?></td>
                                <td><?php echo $get['place']; ?></td>
                            </tr>   
                            <?php
                                }
                            ?>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="sellorTable">
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <h2 class="card-header text-center text-white bg-dark p-2">Sellor Details</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center table-content table-striped table-hover">
                            <tr class="bg-dark text-white">
                                <td>Sellor Name</td>
                                <td>Sellor Gmail Id</td>
                                <td>Sellor Location</td>
                            </tr>
                            <?php
                                while($get=mysqli_fetch_assoc($buyer)){
                            ?> 
                            <tr class="normal">  
                                <td><?php echo $get['Name']; ?></td>
                                <td><?php echo $get['Gmail']; ?></td>
                                <td><?php echo $get['place']; ?></td>
                            </tr>   
                            <?php
                                }
                            ?>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="logo">
            <h4 class="navbar-brand title title_name"><i class="fa-solid fa-house px-2 active"></i>Broker<Span class="active">Way</Span></h4>
        </div>
        <p>&copy copyrights for brokerWay websites</p>
        <div class="Contact">
            <h5>For Contact :</h5>
            <h5>Phone : 987654321</h5>
            <h5>Gmail : workalltime24x7@gmail.com</h5>
        </div>
    </footer>

</body>

</html>