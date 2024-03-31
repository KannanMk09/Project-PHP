<?php

include 'dbCon.php';

session_start();

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
            echo '<script>alert("Invalid Username & Password")</script>';
        }
    }
}


?>