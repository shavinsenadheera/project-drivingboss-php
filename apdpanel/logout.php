<?php
session_start();
if(isset($_SESSION['adminuname']) && $_SESSION['adminuindex'] && $_SESSION['adminemail'])
{
    session_destroy();
    echo "<script>window.location='../public/login.php'</script>";
}
else
{
    echo "<script>window.location='../public/login.php'</script>";
}
?>
