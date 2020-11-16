<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "drivingboss";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{

    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "SELECT email,fullname FROM user WHERE email='$email';";
    $checkinguser = mysqli_query($conn, $sql);

    if($checkinguser->num_rows > 0 )
    {
        $code = rand(100, 999);
        while($row = $checkinguser->fetch_assoc())
        {
            $name = $row['fullname'];
        }
        // Load Composer's autoloader
        require '../vendor/autoload.php';

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'mail.drivingboss.co.uk';                    // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'contact@drivingboss.co.uk';                     // SMTP username
            $mail->Password = 'jwh3=kQ@j=k(';                               // SMTP password
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;
            $mail->CharSet = "UTF-8";                                 // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('contact@drivingboss.co.uk');// Add a recipient
            $mail->addAddress($email);     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $htmlcontent = "<div style='background-color: #ececec;border-radius: 10px;padding: 10px'>
                                <div style='background-color: #3c3c3c;padding: 10px'>
                                    <h1 style='color: white'>Hey " .$name. "!</h1>
                                </div>
                                <div style='background-color: #b7d5ff;color:#626269;justify-content: center;align-content: center;padding: 10px;text-align: center'>
                                    <p style='align-content: center;font-size: 24px;color: black'>Please verify your email to change the password of Driving Boss Account.</p>
                                    <p>
                                        <a target='_blank' href='http://localhost:8012/extra/public/newpassword.php?code=$code&email=$email' style='background-color: #f44336;text-align:center;padding: 15px;border-radius: 5px;text-decoration: none;color:white;font-size: 24px'>Verify Email</a>
                                    </p>
                                    <p style='color:#000000;font-size: 20px;border-top:10px'>Driving Boss</p>
                                </div>
                            </div>";

            $mail->isHTML(true);                                // Set email format to HTML
            $mail->Subject = 'Change Password in Driving Boss';
            $mail->Body = $htmlcontent;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo "<script>alert('Email is sent.')</script>";
            ?>
            <script>
                window.location = "login.php";
            </script>
            <?php
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
    else
    {
        echo "<script>alert('Email is not exist. Please register.')</script>";
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