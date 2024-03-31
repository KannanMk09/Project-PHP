<?php

include 'dbCon.php';

if(isset($_POST['submit'])){
    $bname = $_POST['BuyerName'];
    $bmobile = $_POST['BuyerMobile'];
    $bLocation = $_POST['BuyerLocation'];
    $bRate = $_POST['BuyerRate'];
    $bExceptLoc = $_POST['BuyerExceptLocation'];

    $value = $_POST['BuyerExceptSqft'];

    if($value == '1'){
        $Sqftvar = "1200 Sqft";
    }
    else if($value == '2'){
        $Sqftvar = "800 Sqft";
    }
    else if($value == '3'){
        $Sqftvar = "600 Sqft";
    }
    else{
        $Sqftvar = "Others";
    }

    $bvalue = $_POST['BuyerTypeProperty'];

    if($bvalue == '1'){
        $Provar = "Separate House";
    }
    else if($bvalue == '2'){
        $Provar = "Flat House";
    }
    else{
        $Provar = "Others";
    }

   $sql = "insert into buyerdetails (BuyerName,BuyerMobile,BuyerLocation,BuyerProExeRate,BuyerProExeLoc,BuyerProExeSqft,BuyerExeTypePro) values ('$bname',$bmobile,'$bLocation','$bRate','$bExceptLoc','$Sqftvar','$Provar');";

   if(mysqli_query($conn,$sql)){
        header("Location: ViewSellorDetails.php");
        exit();
   }else{
        header("Location: BuyerDetails.php");
   }
   mysqli_close($conn);

}
else{
    header("Location: BuyerDetails.php");
    exit();
}


?>