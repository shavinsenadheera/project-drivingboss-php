<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="rabbitdevs">

    <title>Welcome to Join Us</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Custom styles for this template -->

    <!--Custom Adding CSS Files for this template-->
    <link rel="stylesheet" href="styles/mainonly.css">
</head>

<body>
<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm scrolling-navbar  text-white" id="header-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="https://www.drivingboss.co.uk/" data-activates="slide-out" class="button-collapse"><img src="https://www.drivingboss.co.uk/wp-content/uploads/2020/10/logo.png" height="50px" size="50px"/></a>
        </div>
        <!-- Breadcrumb-->

        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a href="./" class="nav-link text-white"><i class="fas fa-home"></i> <span class="clearfix d-none d-sm-inline-block text-white">Home</span></a>
            </li>
            <li class="nav-item">
                <a href="https://www.drivingboss.co.uk/about/contact/" class="nav-link text-primary"><i class="fas fa-file"></i><span class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="public/login.php">
                    <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Login</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="view intro-2" style="">
        <div class="full-bg-img">
            <div class="mask rgba-purple-light flex-center">
                <div class="container text-center white-text wow fadeInUp">
                    <div class="col-md-12 text-center justify-content-center">
                        <span class="font-weight-bold text-success" id="main-header-joinus">
                            JOIN WITH DRIVING BOSS
                        </span><br>
                        <span class="font-weight-bold" id="second-header-joinus">
                            Click the following button to joint with us!
                        </span>
                        <br><br>
                        <span>
                            <a href="public/" class="btn btn-warning rounded-pill ui-spinner-down animated bounceInLeft" id="btn-get-started">GET STARTED</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<!--Main Layout-->
<main class="text-center">

    <div class="container">
        <div class="row">

            <div class="col-md-6 text-center justify-content-center" style="background: url('https://www.drivingboss.co.uk/wp-content/uploads/2020/10/1-1.jpg')">

            </div>
        </div>
    </div>

</main>
<?php
require ('assets/footer.php');
?>

<script>
    $(document).ready(function() {

        // SideNav Initialization
        $(".button-collapse").sideNav();
    });

</script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>
