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
    <link rel="stylesheet" href="../BuyerDetails.css">
    <title>BuyerDetails</title>
</head>
<body>
    <div class="d-block mx-auto main-content">
        <h3>Buyer Details</h3>
        <form action="./BuyerDetailsAction.php" method="post" target="_blank">
            <div class="form-floating">
                <input type="text" class="form-control  text-white" placeholder="" name="BuyerName" autocomplete="off" required>
                <label for="" class="form-label text-center">Buyer Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control  text-white" placeholder="" name="BuyerMobile" autocomplete="off" required>
                <label for="" class="form-label text-center">Mobile Number</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control  text-white" placeholder="" name="BuyerLocation" autocomplete="off" required>
                <label for="" class="form-label text-center">Buyer Location</label>
            </div>
            <div class="form-floating">
                <input type="gmail" class="form-control  text-white" placeholder="" name="BuyerRate" autocomplete="off" required>
                <label for="" class="form-label text-center">Property Excepted Rate</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control  text-white" placeholder="" name="BuyerExceptLocation" autocomplete="off" required>
                <label for="" class="form-label text-center">Property Excepted Location</label>
            </div>
            <div class="form-floating" id="combobox">
                <select class="form-select" name="BuyerExceptSqft">
                    <option selected>Excepted Property Sqft</option>
                    <option value="1">1200 Sqft</option>
                    <option value="2">800 Sqft</option>
                    <option value="3">600 Sqft</option>
                    <option value="4">others</option>
                </select>
            </div>
            <div class="form-floating" id="combobox">
                <select class="form-select" name="BuyerTypeProperty">
                    <option selected>Excepted Type Of Property</option>
                    <option value="1">Separate House</option>
                    <option value="2">Flat House</option>
                    <option value="3">Other</option>
                </select>
            </div>

            <button class="btn button" type="Submit" name="submit" value="submit">Submit</button>
        </form>
    </div>
    <a target="_blank" href="https://icons8.com/icon/-u-Yda167wYz/house-of-cards" class="d-none">House Of Cards</a> icon by <a target="_blank" href="https://icons8.com" class="d-none">Icons8</a>
</body>
</html>