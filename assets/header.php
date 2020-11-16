<!DOCTYPE html>
<html>
<head>
    <style>
        /* Only for snippet */
        .double-nav .breadcrumb-dn {
            color: #fff;
        }
    </style>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <style>
        header
        {
            height:10%;
        }
        #header-nav
        {
            background-color: transparent;
            color:#462569
        }
        #header-nav ul li a{
            color:#462569;

        }
        #homelink, #homespan
        {
            color: #396bab;
        }
        @media only screen and (max-width: 768px) {
            #header-nav {
                background-color: #001230;
                color:white;
            }
            #header-nav ul li a{
                color: #ffffff

            }
        }
    </style>
</head>
<body>

<!--Double navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-sm scrolling-navbar animated bounceInUp" id="header-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="https://www.drivingboss.co.uk/" data-activates="slide-out" class="button-collapse"><img src="https://www.drivingboss.co.uk/wp-content/uploads/2020/10/logo.png" height="50px" size="50px"/></a>
        </div>
        <!-- Breadcrumb-->

        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a href="../" class="nav-link" ><i id="homelink" class="fas fa-home"></i> <span id="homespan" class="clearfix d-none d-sm-inline-block">Home</span></a>
            </li>
            <li class="nav-item">
                <a href="https://www.drivingboss.co.uk/about/contact/"  class="nav-link"><i class="fas fa-file"></i><span class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../public/login">
                    <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Login</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.Navbar -->
</header>
<!--/.Double navigation-->

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