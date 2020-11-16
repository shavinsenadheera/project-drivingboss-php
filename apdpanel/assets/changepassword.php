<?php
session_start();
if(isset($_SESSION['adminuname']) && $_SESSION['adminuindex'] && $_SESSION['adminemail'])
{
    $uindex = $_SESSION['adminuindex'];
    if(isset($_POST['submit']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "drivingboss";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            $pwd = mysqli_real_escape_string($conn, $_POST['newpwd']);
            $pwd1 = md5($pwd);

            if(empty($_POST['newpwd']))
            {
                echo "<script>alert('enter a new password')</script>";
                echo "<script>window.location='../profilehandling.php'</script>";
            }
            else
            {
                $sql = "UPDATE user SET pwd='$pwd1' WHERE uindex='$uindex'";
                $updatecheck = mysqli_query($conn, $sql);
                if($updatecheck)
                {
                    echo "<script>alert('successfully updated')</script>";
                    echo "<script>window.location='../profilehandling.php'</script>";
                }
                else
                {
                    echo "<script>alert('comment not updated')</script>";
                    echo "<script>window.location='../profilehandling.php'</script>";
                }
            }
        }
    }
    else
    {
        echo "<script>alert('data handling error occured!')</script>";
        echo "<script>window.location='../profilehandling.php'</script>";
    }

}
else
{
    echo "<script>alert('main data handling error occured!')</script>";
    echo "<script>window.location='../profilehandling.php'</script>";
}
$conn->close();
?>

