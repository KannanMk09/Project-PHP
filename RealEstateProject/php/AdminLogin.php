<?php

session_start();

include 'dbCon.php';

if(isset($_POST['submit'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['Uname']);
    $pass = validate($_POST['password']);

    $sql = "select * from admin where username='$uname' and password='$pass';";

    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['Username'] === $uname && $row['Password'] === $pass){
            header("Location: AdminDashBoard.php");
        }
        else{
            header("Location: AdminLogin.php");
            $SESSION['status'] = "Invalid Username and Password";
        }
    }
}

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
    <link rel="stylesheet" href="../AdminLogin.css">
    <title>AdminLogin</title>
</head>
<body>
    <div class="main-content">
        <h4>AdminLogin</h4>
        <form action="" method="post" target="_blank">
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
                <input type="text" class="form-control" placeholder="" name="Uname" autocomplete="off" required>
                <label for="" class="form-label text-center">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" placeholder="" name="password"  autocomplete="off" required>
                <label for="" class="form-label text-center">Password</label>
            </div>
            <button class="btn button" type="submit" value="submit" name="submit">Submit</button>
        </form>
    </div>
    
    <a target="_blank" href="https://icons8.com/icon/-u-Yda167wYz/house-of-cards" class="d-none">House Of Cards</a><a target="_blank" href="https://icons8.com" class="d-none">Icons8</a>
</body>
</html>