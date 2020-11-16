<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="rabbitdevs">

    <title>Join  - Forgot Password</title>

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
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../styles/login.css">

    <!--FORM VALIDATION SCRIPT-->
    <script src="../js/validationform.js" type="text/javascript"></script>

</head>

<body style="background: linear-gradient(90deg, rgba(0,1,34,1) 0%, rgba(170,170,170,1) 100%);">
<?php
require ('../assets/header.php');
?>
<div class="container-fluid" id="body-secondary" style="background: linear-gradient(90deg, rgba(0,1,34,1) 0%, rgba(170,170,170,1) 100%);">

    <div class="row justify-content-center py-5">
        <div class="col-md-3 h-100 text-center  text-white" id="formstylecon">
            <span class="font-weight-bold" style="font-size: 24px">FORGOT PASSWORD</span>
            <p style="color:#a2a2a2;font-size: 24px">enter you'r email</p>
            <hr>
            <div class="text-center">
                <p>After enetring email. You have to verify the email address.</p>
                <span>
                    <a href="index.php" class="btn btn-secondary rounded-pill animated bounce infinite ui-spinner-down" id="btn-login">REGISTER</a>
                </span>
            </div>
        </div>

        <div class="col-md-7 h-100" >
            <div class="d-flex justify-content-center text-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form action="middleware.php" method="POST">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send" name="submit" class="btn btn-warning float-right">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php
require ('../assets/footer.php');
?>
</body>
</html>

