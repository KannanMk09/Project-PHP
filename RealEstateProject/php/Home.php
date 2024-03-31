
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
    <link rel="stylesheet" href="../Home.Css">
    <title>Real-Estate Home</title>
</head>
<body>
    <nav class="container-fluid navbar">

        <h4 class="navbar-brand title title_name"><i class="fa-solid fa-house px-2 active"></i>Broker<Span class="active">Way</Span></h4>

        <a target="_blank" href="https://icons8.com/icon/-u-Yda167wYz/house-of-cards" class="d-none">House Of Cards</a> icon by <a target="_blank" href="https://icons8.com" class="d-none">Icons8</a>
        <ul class="nav">
            <li class="nav-item navigation"><a href="#" class="nav-link link_name active">Home</a></li>
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
                <li class="link_name1 active"><a href="#">Home</a></li>
                <li class="link_name1 "><a href="./About.php">About</a></li>
                <li class="link_name1 "><a href="./SellorLogin.php">Sellor</a></li>
                <li class="link_name1 "><a href="./BuyerLogin.php">Buyer</a></li>
                <li class="link_name1 "><a href="./AdminLogin.php">Admin</a></li>
            </ul>
        </div>
    </div>

    <section class="main-content">
        <h2 class="main-title">Real Estate Management System</h2>
        <a href="./About.php" class="btn button">Get Started ></a>
    </section>
    
    

</body>

</html>