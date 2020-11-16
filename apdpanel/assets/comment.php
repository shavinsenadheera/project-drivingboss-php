<?php
session_start();
if(isset($_SESSION['adminuname']) && $_SESSION['adminuindex'] && $_SESSION['adminemail'] && $_SESSION['ert'])
{
    $mastername = $_SESSION['adminuname'];
    if(isset($_POST['submit']))
    {
        $uindex = $_SESSION['ert'];
        $comment = $_POST['comment'];
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
            $sql = "UPDATE user SET comment='$comment' WHERE uindex='$uindex'";
            $commentcheck = mysqli_query($conn, $sql);
            if($commentcheck)
            {
                echo "<script>alert('comment successfully updated')</script>";
                echo "<script>window.location='../showmore.php?ert=$_SESSION[ert]'</script>";
            }
            else
            {
                echo "<script>alert('comment not updated')</script>";
                echo "<script>window.location='../showmore.php?ert=$_SESSION[ert]'</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('data handling error occured!')</script>";
        echo "<script>window.location='../showmore.php?ert=$_SESSION[ert]'</script>";
    }

}
else
{
    echo "<script>alert('main data handling error occured!')</script>";
    echo "<script>window.location='../showmore.php?ert=$_SESSION[ert]'</script>";
}
$conn->close();
?>
