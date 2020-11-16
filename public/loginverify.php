<?php
if(isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "drivingboss";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        $checkquery = "SELECT uindex,fullname,email,pwd,verified,registered_date,role from user WHERE email='$username' AND pwd='$password';";
        $getresult = mysqli_query($conn, $checkquery);
        if($getresult->num_rows==1)
        {
            $row = $getresult->fetch_assoc();
            $verified = $row['verified'];
            $email = $row['email'];
            $fullname = $row['fullname'];
            $uindex = $row['uindex'];
            $registerdate = $row['registered_date'];
            $role = $row['role'];
            if($verified=='no')
            {
                echo "<script>alert('The account has not been verified. Please verified your email. The email was sent on $registerdate')</script>";
                ?>
                <script>
                        window.location = "login.php";
                </script>
                <?php
            }
            else if($role =="user")
            {
                session_start();
                $_SESSION['uname'] = $fullname;
                $_SESSION['uindex'] = $uindex;
                $time = date("Y:m:d h:i:s");
                $updatelogindate_query = "UPDATE user SET last_login='$time' WHERE uindex='$uindex'";
                $checkupdate = mysqli_query($conn, $updatelogindate_query);
                if($checkupdate)
                {
                ?>
                    <script>
                        window.location = "profile.php";
                    </script>
                <?php
                }
            }
            else if($role == "admin")
            {
                session_start();
                $_SESSION['adminuname'] = $fullname;
                $_SESSION['adminuindex'] = $uindex;
                $_SESSION['adminemail'] = $email;
                $time = date("Y:m:d h:i:s");
                $updatelogindate_query = "UPDATE user SET last_login='$time' WHERE uindex='$uindex'";
                $checkupdate = mysqli_query($conn, $updatelogindate_query);
                if($checkupdate)
                {
                    ?>
                    <script>
                        window.location = "../apdpanel/index.php";
                    </script>
                    <?php
                }
            }

        }
        else
        {
            echo "<script>alert('You are not registered or Passsword is incorrect.')</script>";
            ?>
            <script>
                window.location = "login.php";
            </script>
            <?php
        }
    }
}
$conn->close();
?>
