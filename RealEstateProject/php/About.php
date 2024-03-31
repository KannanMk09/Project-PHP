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
    <link rel="stylesheet" href="../About.css">
    <title>About</title>
</head>
<body>
    <nav class="container-fluid navbar">

        <h4 class="navbar-brand title title_name"><i class="fa-solid fa-house px-2 active"></i>Broker<Span class="active">Way</Span></h4>
        <a target="_blank" href="https://icons8.com/icon/-u-Yda167wYz/house-of-cards" class="d-none">House Of Cards</a> icon by <a target="_blank" href="https://icons8.com" class="d-none">Icons8</a>
        <ul class="nav">
            <li class="nav-item navigation"><a href="./Home.php" class="nav-link link_name active">Home</a></li>
            <li class="nav-item navigation"><a href="#" class="nav-link link_name">About</a></li>
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
                <li class="link_name active text-decoration-none"><a href="./Home.php">Home</a></li>
                <li class="link_name text-decoration-none"><a href="#">About</a></li>
                <li class="link_name text-decoration-none"><a href="./SellorLogin.php">Sellor</a></li>
                <li class="link_name text-decoration-none"><a href="./BuyerLogin.php">Buyer</a></li>
                <li class="link_name text-decoration-none"><a href="./AdminLogin.php">Admin</a></li>
            </ul>
        </div>
    </div>

    <section class="main-content">
        <h4>Real Estate Management Process</h4>
        <p id="para-content">Real Estate Management System (REMS) is an online real estate software application that manages the overall 
            operational activities and processes, starting from the management of the property, to the management of 
            real estate agencies, agents, clients and financial transactions. It provides comprehensive reports for managing 
            the Real Estate agency performance and efficiency, and enables the management for a better decision-making.
        </p>
        <img src="../Assets/real-estate-selling-process.jpg" alt="">
        <h4>Why Real Estate Management is Important?</h4>
        <ul>
            <li class="list-items">Scalable</li>
            <li class="list-items">Secure</li>
            <li class="list-items">Manageable</li>
            <li class="list-items">Instant Communication and ensures transparency</li>
            <li class="list-items">Routine tasks are automated</li>
            <li class="list-items">Faster Payemnts</li>
            <li class="list-items">Data is always backed up</li>
        </ul>
        <h4>Merits</h4>
        <ul>
            <li class="list-items">Real-time access to information from anywhere at any time</li>
            <li class="list-items">Multi-project management</li>
            <li class="list-items">Mortgage tracking</li>
            <li class="list-items">Easy property search</li>
            <li class="list-items">Quick support</li>
            <li class="list-items">Online payments</li>
            <li class="list-items">Daily data tracking and report generation</li>
        </ul>
    </section>
    
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