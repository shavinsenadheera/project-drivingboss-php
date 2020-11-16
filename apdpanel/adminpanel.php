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
    ?>
<!--Main Navigation-->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<?php
include('assets/header.php');
?>


<!--Main Navigation-->

<!--Main Layout-->
    <div class="container-fluid justify-content-center text-center" style="height:100%;">
        <div class="row justify-content-center text-center mt-5 pt-5">
            <div class="col-sm-7 text-center">
                <table id="dtBasicExample" class="table table-dark table-responsive" width="100%">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Registered Date</th>
                        <th>Comment</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <?php
                        $sql_user_data  = "SELECT email,registered_date,uindex, comment FROM user WHERE role='user';";
                        $userdata = mysqli_query($conn, $sql_user_data);
                        if($userdata->num_rows > 0)
                        {
                            while ($row = $userdata->fetch_assoc())
                            {
                                echo "<tr><td>" . $row['email'] . "</td><td>" . $row['registered_date'] . "</td><td>" . $row['comment'] . "</td><td><a class='text-primary' href='showmore.php?ert=$row[uindex]'>show more & comment</a></td></tr>";
                            }

                        }
                    ?>
                    </tbody>
                </table>
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
<!-- End your project here--><script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>

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