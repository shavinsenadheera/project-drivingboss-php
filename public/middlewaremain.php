<?php
session_start();
if(isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
    if($_POST['submit'])
    {
        $npwd = $_POST['newpassword'];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "drivingboss";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else {
            $newpwd = md5(mysqli_real_escape_string($conn,$npwd));

            $secureemail = mysqli_real_escape_string($conn, $email);

            $sql = "UPDATE user SET pwd='$newpwd' WHERE email='$secureemail';";
            $checkingsql = mysqli_query($conn, $sql);
            if($checkingsql)
            {
                echo "<script>alert('Password is changed! Login now');</script>";
                echo "<script>window.location='login.php'</script>";
            }
            else
            {
                echo "<script>alert('error occur! cannot 1 change password');</script>";
                echo "<script>window.location='login.php'</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('error occur! cannot 2 change password');</script>";
        echo "<script>window.location='login.php'</script>";
    }
}
else
{
    echo "<script>alert('error occur! cannot change password');</script>";
    echo "<script>window.location='login.php'</script>";
}
?>
