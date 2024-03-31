<?php

include 'dbCon.php';

if(isset($_POST['submit'])){
    $Sname = $_POST['SellorName'];
    $Smobile = $_POST['SellorMobile'];
    $SLocation = $_POST['SellorLocation'];
    $SRate = $_POST['SellorProRate'];
    $SProSqft = $_POST['SellorProSqft'];

    $value = $_POST['SellorTypeProperty'];

    if($value == '1'){
        $STypePro = "Seperate House";
    }
    else if($value == '2'){
        $STypePro = "Flat House";
    }
    else{
        $STypePro = "Others";
    }


   $sql = "insert into sellorpropertydetails (SellorName,SellorMobile,SellorPropertyLocation,SellorPropertyRate,SellorPropertySqft,SellorTypeProperty) values ('$Sname',$Smobile,'$SLocation','$SRate','$SProSqft','$STypePro');";

   if(mysqli_query($conn,$sql)){
        header("Location: ViewBuyerDetails.php");
        exit();
   }else{
        header("Location: SellorAddProperty.php");
   }
   mysqli_close($conn);

}
else{
    header("Location: SellorAddProperty.php");
    exit();
}


?>