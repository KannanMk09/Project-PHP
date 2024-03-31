<?php

session_start();

include 'dbCon.php';

if(isset($_POST['Uname']) && ($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['Uname']);
    $pass = validate($_POST['password']);

    $sql = "select * from buyer_member where username='$uname' and password='$pass';";

    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['Username'] === $uname && $row['password'] === $pass){
            header("Location: BuyerDetails.php");
        }
        else{
            header("Location: BuyerLogin.php");
        }
    }
}else{
    header("Location: BuyerLogin.php");
    exit();
}


?>