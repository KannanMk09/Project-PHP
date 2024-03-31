<?php

include 'dbCon.php';

if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $gmail = $_POST['Gmail'];
    $uname = $_POST['UserName'];
    $passwd = $_POST['Password'];
    $location = $_POST['Place'];

    $sql = "insert into sellor_member(name,gmail,username,password,place) values ('$name','$gmail','$uname','$passwd','$location')";
    if(mysqli_query($conn,$sql)){
        header("Location: SellorLogin.php"); 
        exit();
   
    }
    else{
        echo "<script>alert('Data Not added')</script>";
    }
    mysqli_close($conn);
}


?>