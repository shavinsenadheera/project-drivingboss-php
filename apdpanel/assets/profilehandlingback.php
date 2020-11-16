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
            $sql = "SELECT * FROM user WHERE uindex = '$uindex'";
            $checkquery = mysqli_query($conn, $sql);
            if($checkquery->num_rows > 0)
            {
                while($row = $checkquery->fetch_assoc())
                {
                    $fullname = $row['fullname'];
                    $email = $row['email'];
                    $bday = $row['bday'];
                    $phoneno = $row['phoneno'];
                }
            }

            $fullname1 = mysqli_real_escape_string($conn, $_POST['fullname']);
            $email1 = mysqli_real_escape_string($conn, $_POST['email']);
            $bday1 = mysqli_real_escape_string($conn, $_POST['bday']);
            $phoneno1 = mysqli_real_escape_string($conn, $_POST['phoneno']);

            if(empty($fullname1))
            {
                $fullname1 = $fullname;
            }
            else if(empty($email1))
            {
                $email1 = $email;
            }
            else if(empty($bday1))
            {
                $bday1 = $bday;
            }
            else if(empty($phoneno1))
            {
                $phoneno1 = $phoneno;
            }
            else
            {
                $sql = "UPDATE user SET fullname='$fullname1', email='$email1', bday ='$bday1', phoneno='$phoneno1' WHERE uindex='$uindex'";
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
