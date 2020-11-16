<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel v0.1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- MDB icon -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../datatables/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../datatables/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <!-- MDBootstrap Datatables  -->
    <link href="../datatables/css/addons/datatables2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/adminpanel.css">
</head>
<body>
<?php
session_start();
if(isset($_SESSION['adminuname']) && $_SESSION['adminuindex'] && $_SESSION['adminemail'])
{
$mastername = $_SESSION['adminuname'];
$masterindex = $_SESSION['adminuindex'];
$masteremail = $_SESSION['adminemail'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="drivingboss";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    $sql = "SELECT * FROM user WHERE uindex = '$masterindex'";
    $checkquery = mysqli_query($conn, $sql);
    if($checkquery->num_rows > 0)
    {
        while($row = $checkquery->fetch_assoc())
        {
            $uindex = $row['uindex'];
            $fullname = $row['fullname'];
            $email = $row['email'];
            $bday = $row['bday'];
            $phoneno = $row['phoneno'];
            $role = $row['role'];
            $verify = $row['verified'];
            $reg_date = $row['registered_date'];
            $last_login = $row['last_login'];
            $vkey = $row['vkey'];
        }
    }
?>
<?php
include('assets/header.php');
?>


<!--Main Navigation-->

<!--Main Layout-->
<div class="container-fluid justify-content-center" style="height:100%;">
    <div class="row justify-content-center mt-5 pt-5">
        <div class="col-sm-7">
            <form action="assets/profilehandlingback.php" method="POST">
                <div class="form-group">
                    <label for="index">User Index</label>
                    <input type="text" class="form-control" id="index" name="index" value="<?php echo $uindex ?>" placeholder="User Index" disabled>
                </div>
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $fullname ?>" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="bday">Birthday</label>
                    <input type="date" class="form-control" id="bday" name="bday" value="<?php echo $bday ?>" placeholder="Birth Day">
                </div>
                <div class="form-group">
                    <label for="phoneno">Phone Number</label>
                    <input type="tel" class="form-control" id="phoneno" name="phoneno" value="<?php echo $phoneno ?>" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" id="role" name="role" value="<?php echo $role ?>" placeholder="Role" disabled>
                </div>
                <div class="form-group">
                    <label for="verify">Verified</label>
                    <input type="text" class="form-control" id="verify" name="verify" value="<?php echo $verify ?>" placeholder="Verified" disabled>
                </div>
                <div class="form-group">
                    <label for="rdate">Registered Date</label>
                    <input type="text" class="form-control" id="rdate" name="regdate" value="<?php echo $reg_date ?>" placeholder="Register Date" disabled>
                </div>
                <div class="form-group">
                    <label for="lastlogin">Last Login</label>
                    <input type="text" class="form-control" id="lastlogin" name="lastlogin" value="<?php echo $last_login ?>" placeholder="Last Login" disabled>
                </div>
                <div class="form-group">
                    <label for="validkey">Valid Key</label>
                    <input type="text" class="form-control" id="validkey" name="vkey" value="<?php echo $vkey ?>" placeholder="Valid Key" disabled>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
            </form>

            <form action="assets/changepassword.php" method="POST">
                <div class="form-group">
                    <label for="newpwd">New Password</label>
                    <input type="password" class="form-control" id="newpwd" name="newpwd" placeholder="Enter New Password">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">CHANGE PASSWORD</button>
            </form>
        </div>
    </div>
</div>
<br>
<?php
include ('assets/footer.php');
?>
<!-- jQuery -->
<script type="text/javascript" src="../datatables/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../datatables/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../datatables/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../datatables/js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript"></script><!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="../datatables/js/addons/datatables2.min.js"></script>
<!-- End your project here-->
</body>
</html>
<?php
}
}
else
{
    echo "<script>window.location='../public/login.php'</script>";
    session_destroy();
}
?>