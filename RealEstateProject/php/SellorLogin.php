
<?php

session_start();

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
    <link rel="stylesheet" href="../SellorLogin.css">
    <title>Sellor Login</title>
</head>
<body>
    <div class="d-block mx-auto main-content">
        <h4>Login</h4>
        <form action="./SellorLoginAction.php" method="post" target="_blank">
            <?php 
                if(isset($_SESSION['status'])){
                ?>  
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Hey!</strong><?php echo $_SESSION['status'] ?>
                </div>
                <?php
                    unset($_SESSION['status']);
                }
            ?>
            <div class="form-floating">
                <input type="text" class="form-control  text-white" placeholder="" name="Uname" autocomplete="off" required>
                <label for="" class="form-label text-center">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control  text-white" placeholder="" name="password"  autocomplete="off" required>
                <label for="" class="form-label text-center">Password</label>
            </div>
            <span class="signup_Account">Don't have an Account?<a href="./SignUpSellor.php" class="link_forgot_2">Click Here</a></span>
            <button class="btn button" type="submit" value="submit" name="submit">Submit</button>
        </form>
    </div>
    
    <a target="_blank" href="https://icons8.com/icon/-u-Yda167wYz/house-of-cards" class="d-none">House Of Cards</a> icon by <a target="_blank" href="https://icons8.com" class="d-none">Icons8</a>
</body>
</html>