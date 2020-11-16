<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="rabbitdevs">

    <title>Join Us</title>

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
<div class="container-fluid" id="body-secondary">

    <div class="row justify-content-center py-5">


        <div class="col-md-7 h-100" >
            <div id="notify-verification font-weight-bold">

            </div>
        </div>
    </div>

</div>
</body>
</html>
<?php
if(isset($_GET['vkey']))
{
    $vkey = $_GET['vkey'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="drivingboss";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else {

        $sql = "SELECT verified,vkey FROM user WHERE verified='no' AND vkey='$vkey';";
        $result = mysqli_query($conn, $sql);
            if($result->num_rows==1)
            {
                $update_query = "UPDATE user SET verified='yes' WHERE vkey='$vkey'";
                if(mysqli_query($conn, $update_query))
                {
                    ?>
                    <script>
                        alert("You are verified!");
                        window.location="login.php";
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                        alert("Validation Occur!");
                    </script>
                    <?php
                }

            }
            else
            {
                ?>
                    <script>
                        alert("Invalid account or already verified account!");
                        window.location="login.php";
                    </script>
                <?php
            }
        }
}
else{
    echo "FAILED";
}
$conn->close();
?>
