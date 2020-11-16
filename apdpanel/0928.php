<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
session_start();
if(isset($_SESSION['adminuname']) && $_SESSION['adminuindex'] && $_SESSION['adminemail'])
{
    $masteremail = $_SESSION['adminemail'];
    $mastername = $_SESSION['adminuname'];
    if (isset($_POST['submit'])) {
        $masterusername = $_POST['username'];
        $masterpassword = $_POST['password'];

        if ($masterusername == "drivingbossadmin#123" && $masterpassword == "drivingbossadmin#123pwd")
        {
            echo "<script>window.location='adminpanel.php'</script>";
        }
        else
            {

            // Import PHPMailer classes into the global namespace
            // These must be at the top of your script, not inside a function
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
                $mail->setFrom('contact@drivingboss.co.uk');
                $mail->addAddress($masteremail);     // Add a recipient
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
                                    <h1 style='color: white'>Hey " . $mastername . "!</h1>
                                </div>
                                <div style='background-color: #b7d5ff;color:#626269;justify-content: center;align-content: center;padding: 10px;text-align: center'>
                                    <p style='align-content: center;font-size: 24px;color: #ff0000'>Warning! Login attempt failed on master field.</p>
                                    <p style='color:#000000;font-size: 20px;border-top:10px'>Driving Boss</p>
                                </div>
                            </div>";

                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Trying attempt to login!';
                $mail->Body = $htmlcontent;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo "<script>window.location='../public/login.php'</script>";

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
}else{
    echo "<script>window.location='../public/login.php'</script>";
    session_destroy();
}
?>