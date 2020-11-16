<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(!empty($_POST['selectdeopt']))
{
?>
<!DOCTYPE html>
<html>
<head>
    <title>Join Us - Driving Boss</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="rabbitdevs">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!--Custom Adding CSS Files for this template-->
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../css/style.css">
    <script>
        window.history.forward();
    </script>
</head>
<body style="background: linear-gradient(90deg, rgba(0,1,34,1) 0%, rgba(170,170,170,1) 100%);">
<?php
require ('../assets/header.php');
?>
<div class="container-fluid" id="body-secondary">

    <div class="row justify-content-center py-5">
        <div class="col-md-3 h-100  text-white text-center" id="formstylecon">
            <span class="font-weight-bold" style="font-size: 24px">REGISTRATION</span>
            <p style="color:#bc0000;font-size: 24px">Please verify your email..</p>
            <hr>
            <div class="text-center">
                <p>After completing the form, you will have recieved an email, then you can login with us.</p>
                <p class="text-orange">Login with following button.</p>
                <span>
                    <a href="login" class="btn btn-success rounded-pill animated bounce infinite ui-spinner-down" id="btn-login">LOGIN</a>
                </span>
            </div>
        </div>

        <div class="col-md-7 h-100" id="formconatiner">
                <span class="text-white-50" style="font-family: sans-serif;font-size: 32px">Submission Form Information</span>
                <p class="text-white">checkout submitted information</p>
            <hr>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                DEOPT SELECTION
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body bg-transparent">
                            <div class="md-form-group mt-3">
                                <label for="id1" class="font-weight-bold">Depot Selection</label>
                                <?php
                                $depots = $_POST['selectdeopt'];
                                foreach ($depots as $depot)
                                {
                                    ?>
                                <select class="browser-default custom-select custom-select-mb-3"  id="id1"disabled>
                                    <?php
                                        echo "<option selected disabled>$depot</option>";
                                    ?>
                                </select>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                PERSONAL INFORMATION
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form">
                                <input type="text" id="id2" class="form-control" value="<?php echo$_POST['form-flname'] ?>" disabled>
                                <label for="id2" class="font-weight-bold" data-error="wrong" data-success="right"> Full Name </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="md-form">
                                <input type="text" id="id3" class="form-control" value="<?php echo$_POST['form-bday'] ?>" disabled>
                                <label for="id3" class="font-weight-bold" data-error="wrong" data-success="right"> Birthday </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="md-form">
                                <input type="type" id="id4" class="form-control" value="<?php echo$_POST['form-email'] ?>" disabled>
                                <label for="id4" class="font-weight-bold" data-error="wrong" data-success="right"> Email </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="md-form">
                                <input type="text" id="id5" class="form-control" value="<?php echo$_POST['form-pn'] ?>" disabled>
                                <label for="id5" class="font-weight-bold" data-error="wrong" data-success="right"> Phone Number </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Initial Eligibility Check
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <label for="selectDepot" class="font-weight-bold"> Driving License: Do you have Category B entitlement ?</label>
                                <select class="browser-default custom-select custom-select-mb-3" disabled>
                                    <option selected disabled><?php echo $_POST['confirmlicence'] ?></option>
                                </select>
                            </div>
                            <?php
                            if($_POST['confirmlicence']=="Yes")
                            {
                                ?>
                                <div class="card-body">
                                    <div class="md-form">
                                        <input type="text" id="id6" class="form-control" value="<?php echo$_POST['datecategoryb'] ?>" disabled>
                                        <label for="id6" class="font-weight-bold" data-error="wrong" data-success="right">What was the date you obtained Category B entitlement ?</label>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                PAY RATES - VEHICLE
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <label for="id7" class="font-weight-bold">Do you need a rental vehicle ?</label>
                                <select class="browser-default custom-select custom-select-mb-3" id="id7" disabled>
                                    <option selected disabled><?php echo $_POST['confirmlicence'] ?></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                GDPR CONSENT DECLARATION
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <?php
                                if($_POST['agree-1']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree1" disabled checked>
                                        <label class="custom-control-label" for="agree1">I have read, understood and agree to give consent set out above.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <label class='font-weight-bold'>Disagree</label>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                POLICY (working hours & pay)
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <?php
                                if($_POST['agree-2']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree2" disabled checked>
                                        <label class="custom-control-label" for="agree2">I have read, understood and agree to the Health & Safety terms set out.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree2" disabled>
                                        <label class="custom-control-label" for="agree2">I have read, understood and agree to the Health & Safety terms set out.</label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                MEDICAL FITNESS (declaration and confirmation)
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <?php
                                if($_POST['confirm-1']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree3" disabled checked>
                                        <label class="custom-control-label" for="agree3">I'm physically fit and able to fulfil the demands of a multi-drop delivery driver.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree3" disabled>
                                        <label class="custom-control-label" for="agree3">I'm physically fit and able to fulfil the demands of a multi-drop delivery driver.</label>
                                    </div>
                                    <?php
                                }
                                if($_POST['confirm-2']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree4" disabled checked>
                                        <label class="custom-control-label" for="agree4">I'm not taking any medication that will hinder my ability to drive or manipulate consignments in a safe manner.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree4" disabled>
                                        <label class="custom-control-label" for="agree4">I'm not taking any medication that will hinder my ability to drive or manipulate consignments in a safe manner.</label>
                                    </div>
                                    <?php
                                }
                                if($_POST['confirm-3']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree5" disabled checked>
                                        <label class="custom-control-label" for="agree5">I have no medical conditions that will hinder my ability to drive or manipulate consignments in a safe manner.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree5" disabled>
                                        <label class="custom-control-label" for="agree5">I have no medical conditions that will hinder my ability to drive or manipulate consignments in a safe manner.</label>
                                    </div>
                                    <?php
                                }
                                if($_POST['confirm-5']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree6" disabled checked>
                                        <label class="custom-control-label" for="agree6">I will comply with all manual handling guidelines and not place myself in danger by using unsafe working practices.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree6" disabled>
                                        <label class="custom-control-label" for="agree6">I will comply with all manual handling guidelines and not place myself in danger by using unsafe working practices.</label>
                                    </div>
                                    <?php
                                }
                                if($_POST['confirm-6']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree7" disabled checked>
                                        <label class="custom-control-label" for="agree7">I have no mental or physical conditions that have not been reported to DVLA which could affect my ability to drive safely.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree7" disabled>
                                        <label class="custom-control-label" for="agree7">I have no mental or physical conditions that have not been reported to DVLA which could affect my ability to drive safely.</label>
                                    </div>
                                    <?php
                                }
                                if($_POST['confirm-7']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree8" disabled checked>
                                        <label class="custom-control-label" for="agree8">I will inform Driving Boss if my ability to drive safely or handle consignments changes in the future.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree8" disabled>
                                        <label class="custom-control-label" for="agree8">I will inform Driving Boss if my ability to drive safely or handle consignments changes in the future.</label>
                                    </div>
                                    <?php
                                }
                                if($_POST['agree-3']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree9" disabled checked>
                                        <label class="custom-control-label" for="agree9">I have read, understood and agree to the Health & Safety terms set out.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree9" disabled>
                                        <label class="custom-control-label" for="agree9">I have read, understood and agree to the Health & Safety terms set out.</label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingEight">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                                NON-DISCLOSURE (Including Data Protection Agreement)
                            </button>
                        </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <?php
                                if($_POST['agree-4']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree10" disabled checked>
                                        <label class="custom-control-label" for="agree10">I understand and agree to abide by the promises I make in this agreement to protect Driving Boss's and it's clients' Confidential Information. I agree that my promises also apply for the benefit of other Driving Boss's clients' companies.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree10" disabled>
                                        <label class="custom-control-label" for="agree10">I understand and agree to abide by the promises I make in this agreement to protect Driving Boss's and it's clients' Confidential Information. I agree that my promises also apply for the benefit of other Driving Boss's clients' companies.</label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                                STOP & SEARCH POLICY
                            </button>
                        </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <?php
                                if($_POST['agree-5']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree10" disabled checked>
                                        <label class="custom-control-label" for="agree10">I understand and agree to abide by the promises I make in this agreement to protect Driving Boss's and it's clients' Confidential Information. I agree that my promises also apply for the benefit of other Driving Boss's clients' companies.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree10" disabled>
                                        <label class="custom-control-label" for="agree10">I understand and agree to abide by the promises I make in this agreement to protect Driving Boss's and it's clients' Confidential Information. I agree that my promises also apply for the benefit of other Driving Boss's clients' companies.</label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                                PAYMENT PROCESSING AND TAX
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <label for="selectDepot" class="font-weight-bold"> Securityax services </label>
                                <select class="browser-default custom-select custom-select-mb-3" disabled>
                                    <option selected disabled><?php echo $_POST['choosesecuritytype'] ?></option>
                                </select>
                            </div>
                            <div class="md-form-group mt-3">
                                <?php
                                if($_POST['agree-6']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree11" disabled checked>
                                        <label class="custom-control-label" for="agree11">I consent to share my personal information with Securitax to discuss payment, tax and invoicing services.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree11" disabled>
                                        <label class="custom-control-label" for="agree11">I consent to share my personal information with Securitax to discuss payment, tax and invoicing services.</label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading11">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapseTwo">
                                PAYMENT DETAILS
                            </button>
                        </h5>
                    </div>
                    <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form">
                                <input type="text" id="id8" class="form-control" value="<?php echo$_POST['payment-fname'] ?>" disabled>
                                <label for="id8" class="font-weight-bold" data-error="wrong" data-success="right"> First Name </label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="id9" class="form-control" value="<?php echo$_POST['payment-lname'] ?>" disabled>
                                <label for="id9" class="font-weight-bold" data-error="wrong" data-success="right"> Last Name </label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="id10" class="form-control" value="<?php echo$_POST['payment-sortcode'] ?>" disabled>
                                <label for="id10" class="font-weight-bold" data-error="wrong" data-success="right"> Sort Code </label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="id11" class="form-control" value="<?php echo$_POST['payment-accno'] ?>" disabled>
                                <label for="id11" class="font-weight-bold" data-error="wrong" data-success="right"> Account Number </label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="id12" class="form-control" value="<?php echo$_POST['payment-bankname'] ?>" disabled>
                                <label for="id12" class="font-weight-bold" data-error="wrong" data-success="right"> Bank Name </label>
                            </div>
                        <div class="md-form-group mt-3">
                            <?php
                            if($_POST['agree-7']=="on")
                            {
                                ?>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="agree12" disabled checked>
                                    <label class="custom-control-label" for="agree12"> confirm the details provided are true and correct and wish to receive payments to the provided account above.</label>
                                </div>
                                <?php
                            }else{
                                ?>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="agree12" disabled>
                                    <label class="custom-control-label" for="agree12"> confirm the details provided are true and correct and wish to receive payments to the provided account above.</label>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading12">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapseThree">
                                HEALTH & SAFETY (confirmation of understanding)
                            </button>
                        </h5>
                    </div>
                    <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <?php
                                if($_POST['agree-8']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree10" disabled checked>
                                        <label class="custom-control-label" for="agree10">I have read, understood and agree to the Health & Safety terms set out.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree10" disabled>
                                        <label class="custom-control-label" for="agree10">I have read, understood and agree to the Health & Safety terms set out.</label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading14">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapseThree">
                                ACCURATE BACKGROUND(including dbs check-release disclosure and consent)
                            </button>
                        </h5>
                    </div>
                    <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <?php
                                if($_POST['agree-9']=="on")
                                {
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree12" disabled checked>
                                        <label class="custom-control-label" for="agree12">I have read, understood and agree to the release disclosure and give consent as outlined above.</label>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agree12" disabled>
                                        <label class="custom-control-label" for="agree12">I have read, understood and agree to the release disclosure and give consent as outlined above.</label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading15">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapseThree">
                                ACCURATE BACKGROUND (Additional Personal Information)
                            </button>
                        </h5>
                    </div>
                    <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <label for="id13" class="font-weight-bold">Birth Country</label>
                                <select class="browser-default custom-select custom-select-mb-3"  id="id13"disabled>
                                    <option selected disabled><?php echo $_POST['birthcountry'] ?></option>
                                </select>
                                <label for="id14" class="font-weight-bold">Birth Nationality</label>
                                <select class="browser-default custom-select custom-select-mb-3"  id="id14"disabled>
                                    <option selected disabled><?php echo $_POST['birthnationality'] ?></option>
                                </select>
                                <div class="md-form">
                                    <input type="text" id="id15" class="form-control" value="<?php echo$_POST['birthtwon'] ?>" disabled>
                                    <label for="id15" class="font-weight-bold" data-error="wrong" data-success="right"> Birth Town </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id16" class="form-control" value="<?php echo$_POST['motherfname'] ?>" disabled>
                                    <label for="id16" class="font-weight-bold" data-error="wrong" data-success="right"> Mother First Name </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id17" class="form-control" value="<?php echo$_POST['motherlname'] ?>" disabled>
                                    <label for="id17" class="font-weight-bold" data-error="wrong" data-success="right"> Mother Last Name </label>
                                </div>
                                    <label for="id18" class="font-weight-bold">Have you ever been another name?</label>
                                    <select class="browser-default custom-select custom-select-mb-3"  id="id18"disabled>
                                        <option selected disabled><?php echo $_POST['othername'] ?></option>
                                    </select>
                                <?php
                                if($_POST['othername']=="Yes"){
                                ?>
                                <p class="font-weight-bold">Other Name Information</p>
                                    <div class="md-form">
                                    <input type="text" id="id19" class="form-control" value="<?php echo$_POST['oldfname'] ?>" disabled>
                                    <label for="id19" class="font-weight-bold" data-error="wrong" data-success="right"> Previous First Name </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id20" class="form-control" value="<?php echo$_POST['oldlname'] ?>" disabled>
                                    <label for="id20" class="font-weight-bold" data-error="wrong" data-success="right"> Previous Last Name </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id21" class="form-control" value="<?php echo$_POST['oldnamefrom'] ?>" disabled>
                                    <label for="id21" class="font-weight-bold" data-error="wrong" data-success="right"> Previous Name From </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id21" class="form-control" value="<?php echo$_POST['oldnameto'] ?>" disabled>
                                    <label for="id21" class="font-weight-bold" data-error="wrong" data-success="right"> Previous Name To </label>
                                </div>
                                <p class="font-weight-bold">Current Address</p>
                                <div class="md-form">
                                    <input type="text" id="id22" class="form-control" value="<?php echo$_POST['currenthouseno'] ?>" disabled>
                                    <label for="id22" class="font-weight-bold" data-error="wrong" data-success="right"> House No/Name </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id23" class="form-control" value="<?php echo$_POST['currentstreet'] ?>" disabled>
                                    <label for="id23" class="font-weight-bold" data-error="wrong" data-success="right"> Street </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id24" class="form-control" value="<?php echo$_POST['currenttown'] ?>" disabled>
                                    <label for="id24" class="font-weight-bold" data-error="wrong" data-success="right"> Town </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id25" class="form-control" value="<?php echo$_POST['currentcity'] ?>" disabled>
                                    <label for="id25" class="font-weight-bold" data-error="wrong" data-success="right"> City </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id26" class="form-control" value="<?php echo$_POST['currentstate'] ?>" disabled>
                                    <label for="id26" class="font-weight-bold" data-error="wrong" data-success="right"> State </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id27" class="form-control" value="<?php echo$_POST['currentzip'] ?>" disabled>
                                    <label for="id27" class="font-weight-bold" data-error="wrong" data-success="right"> ZIP </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id28" class="form-control" value="<?php echo$_POST['whenmoveto-1'] ?>" disabled>
                                    <label for="id28" class="font-weight-bold" data-error="wrong" data-success="right"> Address Move Date </label>
                                </div>
                                <?php
                                }
                                if($_POST['oldhouseno']!="none")
                                {
                                   ?>
                                    <p class="font-weight-bold">Other Name Information</p>
                                    <div class="md-form">
                                        <input type="text" id="id29" class="form-control" value="<?php echo$_POST['oldhouseno'] ?>" disabled>
                                        <label for="id29" class="font-weight-bold" data-error="wrong" data-success="right"> House No/Name </label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="id30" class="form-control" value="<?php echo$_POST['oldhousestreet'] ?>" disabled>
                                        <label for="id30" class="font-weight-bold" data-error="wrong" data-success="right"> Street </label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="id31" class="form-control" value="<?php echo$_POST['oldhousetown'] ?>" disabled>
                                        <label for="id31" class="font-weight-bold" data-error="wrong" data-success="right"> Town </label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="id32" class="form-control" value="<?php echo$_POST['oldhousecity'] ?>" disabled>
                                        <label for="id32" class="font-weight-bold" data-error="wrong" data-success="right"> City </label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="id33" class="form-control" value="<?php echo$_POST['oldhousestate'] ?>" disabled>
                                        <label for="id33" class="font-weight-bold" data-error="wrong" data-success="right"> State </label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="id34" class="form-control" value="<?php echo$_POST['oldhousezip'] ?>" disabled>
                                        <label for="id34" class="font-weight-bold" data-error="wrong" data-success="right"> ZIP </label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="id35" class="form-control" value="<?php echo$_POST['whenmoveto-2'] ?>" disabled>
                                        <label for="id35" class="font-weight-bold" data-error="wrong" data-success="right"> Address Move Date </label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading16">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapseThree">
                                IDENTITY (including right to work)
                            </button>
                        </h5>
                    </div>
                    <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <label for="id36" class="font-weight-bold">Current Nationality</label>
                                <select class="browser-default custom-select custom-select-mb-3"  id="id36"disabled>
                                    <option selected disabled><?php echo $_POST['currentnationality'] ?></option>
                                </select>
                                <div class="md-form">
                                    <input type="text" id="id37" class="form-control" value="<?php echo $_POST['nin'] ?>" disabled>
                                    <label for="id37" class="font-weight-bold" data-error="wrong" data-success="right"> National Insurance Number </label>
                                </div>
                                <p class="font-weight-bold">ID DOCUMENT UPLOAD</p>
                                <label for="id49" class="font-weight-bold">Uploaded ID Type</label>
                                <select class="browser-default custom-select custom-select-mb-3"  id="id49"disabled>
                                    <option selected disabled><?php echo $_POST['idtype'] ?></option>
                                </select>
                                <?php
                                if($_POST['idtype']=="Passport (Photo Page)")
                                {
                                    $file = $_FILES['ppupload'];
                                    $filename = $_FILES['ppupload']['name'];
                                    $tmpfilename = $_FILES['ppupload']['tmp_name'];
                                    $fileext = explode('.',$filename);
                                    $fileactualext = strtolower(end($fileext));
                                    $filenamenew = uniqid('',true).".".$fileactualext;
                                    $filedestination = 'uploads/'.$filenamenew;
                                    if(move_uploaded_file($tmpfilename,$filedestination))
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id38" class="form-control" value="<?php echo $filename ?>" disabled>
                                            <label for="id38" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id39" class="form-control" value="<?php echo $filename ?>" disabled>
                                            <label for="id39" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                }
                                if($_POST['idtype']=="National ID (Front & Back)")
                                {
                                    $file1 = $_FILES['nidfrontupload'];
                                    $filename1 = $_FILES['nidfrontupload']['name'];
                                    $tmpfilename1 = $_FILES['nidfrontupload']['tmp_name'];
                                    $fileext1 = explode('.',$filename1);
                                    $fileactualext1 = strtolower(end($fileext1));
                                    $filenamenew11 = uniqid('',true).".".$fileactualext1;
                                    $filedestination11 = 'uploads/'.$filenamenew11;
                                    if(move_uploaded_file($tmpfilename1,$filedestination11))
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id40" class="form-control" value="<?php echo $filename1 ?>" disabled>
                                            <label for="id40" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id41" class="form-control" value="<?php echo $filename1 ?>" disabled>
                                            <label for="id42" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                    $file2 = $_FILES['nidbackupload'];
                                    $filename2 = $_FILES['nidbackupload' ]['name'];
                                    $tmpfilename2 = $_FILES['nidbackupload']['tmp_name'];
                                    $fileext2 = explode('.',$filename2);
                                    $fileactualext2 = strtolower(end($fileext2));
                                    $filenamenew21 = uniqid('',true).".".$fileactualext2;
                                    $filedestination21 = 'uploads/'.$filenamenew21;
                                    if(move_uploaded_file($tmpfilename2,$filedestination21))
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id42" class="form-control" value="<?php echo $filename2 ?>" disabled>
                                            <label for="id40" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id43" class="form-control" value="<?php echo $filename2 ?>" disabled>
                                            <label for="id42" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                }
                                if($_POST['idtype']=="Birth Certificate (UK Only)")
                                {
                                    $file = $_FILES['bcupload'];
                                    $filename = $_FILES['bcupload']['name'];
                                    $tmpfilename = $_FILES['bcupload']['tmp_name'];
                                    $fileext = explode('.',$filename);
                                    $fileactualext = strtolower(end($fileext));
                                    $filenamenew31 = uniqid('',true).".".$fileactualext;
                                    $filedestination31 = 'uploads/'.$filenamenew31;
                                    if(move_uploaded_file($tmpfilename,$filedestination31))
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id44" class="form-control" value="<?php echo $filename ?>" disabled>
                                            <label for="id44" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id45" class="form-control" value="<?php echo $filename ?>" disabled>
                                            <label for="id46" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                                <div class="md-form">
                                    <input type="text" id="id47" class="form-control" value="<?php echo $_POST['docissuedate'] ?>" disabled>
                                    <label for="id47" class="font-weight-bold" data-error="wrong" data-success="right"> ID Issue Date </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id48" class="form-control" value="<?php echo $_POST['docexpdate'] ?>" disabled>
                                    <label for="id48" class="font-weight-bold" data-error="wrong" data-success="right"> ID Expire Date </label>
                                </div>
                                <p class="font-weight-bold">VISA RESIDENCE PERMIT</p>
                                <label for="id50" class="font-weight-bold">Uploaded ID Type</label>
                                <select class="browser-default custom-select custom-select-mb-3"  id="id50"disabled>
                                    <option selected disabled><?php echo $_POST['doctype'] ?></option>
                                </select>
                                <?php
                                if($_POST['doctype']=="Visa")
                                {
                                    $file = $_FILES['visaupload'];
                                    $filename = $_FILES['visaupload']['name'];
                                    $tmpfilename = $_FILES['visaupload']['tmp_name'];
                                    $fileext = explode('.',$filename);
                                    $fileactualext = strtolower(end($fileext));
                                    $filenamenew41 = uniqid('',true).".".$fileactualext;
                                    $filedestination41 = 'uploads/'.$filenamenew41;
                                    if(move_uploaded_file($tmpfilename,$filedestination41))
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id51" class="form-control" value="<?php echo $filename ?>" disabled>
                                            <label for="id51" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id52" class="form-control" value="<?php echo $filename ?>" disabled>
                                            <label for="id52" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                }
                                if($_POST['doctype']=="Residence Permit")
                                {
                                    $file1 = $_FILES['rpfrontupload'];
                                    $filename1 = $_FILES['rpfrontupload']['name'];
                                    $tmpfilename1 = $_FILES['rpfrontupload']['tmp_name'];
                                    $fileext1 = explode('.',$filename1);
                                    $fileactualext1 = strtolower(end($fileext1));
                                    $filenamenew51 = uniqid('',true).".".$fileactualext1;
                                    $filedestination51 = 'uploads/'.$filenamenew51;
                                    if(move_uploaded_file($tmpfilename1,$filedestination51))
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id53" class="form-control" value="<?php echo $filename1 ?>" disabled>
                                            <label for="id53" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id54" class="form-control" value="<?php echo $filename1 ?>" disabled>
                                            <label for="id54" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                    $file2 = $_FILES['rpbackupload'];
                                    $filename2 = $_FILES['rpbackupload']['name'];
                                    $tmpfilename2 = $_FILES['rpbackupload']['tmp_name'];
                                    $fileext2 = explode('.',$filename2);
                                    $fileactualext2 = strtolower(end($fileext2));
                                    $filenamenew61 = uniqid('',true).".".$fileactualext2;
                                    $filedestination61 = 'uploads/'.$filenamenew61;
                                    if(move_uploaded_file($tmpfilename2,$filedestination61))
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id55" class="form-control" value="<?php echo $filename2 ?>" disabled>
                                            <label for="id55" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id56" class="form-control" value="<?php echo $filename2 ?>" disabled>
                                            <label for="id56" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                }
                                if($_POST['doctype']=="Home Office Letter")
                                {
                                    $file = $_FILES['holupload'];
                                    $filename = $_FILES['holupload']['name'];
                                    $tmpfilename = $_FILES['holupload']['tmp_name'];
                                    $fileext = explode('.',$filename);
                                    $fileactualext = strtolower(end($fileext));
                                    $filenamenew71 = uniqid('',true).".".$fileactualext;
                                    $filedestination71 = 'uploads/'.$filenamenew71;

                                    if(move_uploaded_file($tmpfilename,$filedestination71))
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id51" class="form-control" value="<?php echo $filename ?>" disabled>
                                            <label for="id51" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="md-form">
                                            <input type="text" id="id52" class="form-control" value="<?php echo $filename ?>" disabled>
                                            <label for="id52" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="heading17">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapseThree">
                                DRIVING LICENCE
                            </button>
                        </h5>
                    </div>
                    <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <label for="id53" class="font-weight-bold">Licence Isssued Country</label>
                                <select class="browser-default custom-select custom-select-mb-3"  id="id53"disabled>
                                    <option selected disabled><?php echo $_POST['liccountry'] ?></option>
                                </select>
                            </div>
                        </div>
                        <p class="font-weight-bold">Driving Licence Front Upload</p>
                        <?php
                        $file3 = $_FILES['licfrontupload'];
                        $filename3 = $_FILES['licfrontupload']['name'];
                        $tmpfilename3 = $_FILES['licfrontupload']['tmp_name'];
                        $fileext3 = explode('.',$filename3);
                        $fileactualext3 = strtolower(end($fileext3));
                        $filenamenew81 = uniqid('',true).".".$fileactualext3;
                        $filedestination81 = 'uploads/'.$filenamenew81;
                        if(move_uploaded_file($tmpfilename3,$filedestination81))
                        {
                            ?>
                            <div class="md-form">
                                <input type="text" id="id54" class="form-control" value="<?php echo $filename3 ?>" disabled>
                                <label for="id54" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                            </div>
                            <?php
                        }
                        else
                        {
                            ?>
                            <div class="md-form">
                                <input type="text" id="id55" class="form-control" value="<?php echo $filename3 ?>" disabled>
                                <label for="id55" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                            </div>
                            <?php
                        }
                        ?>
                        <p class="font-weight-bold">Driving Licence Back Upload</p>
                        <?php
                        $file4 = $_FILES['licbackupload'];
                        $filename4 = $_FILES['licbackupload']['name'];
                        $tmpfilename4 = $_FILES['licbackupload']['tmp_name'];
                        $fileext4 = explode('.',$filename4);
                        $fileactualext4 = strtolower(end($fileext4));
                        $filenamenew91 = uniqid('',true).".".$fileactualext4;
                        $filedestination91 = 'uploads/'.$filenamenew91;
                        if(move_uploaded_file($tmpfilename4,$filedestination91))
                        {
                            ?>
                            <div class="md-form">
                                <input type="text" id="id54" class="form-control" value="<?php echo $filename4 ?>" disabled>
                                <label for="id54" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                            </div>
                            <?php
                        }
                        else
                        {
                            ?>
                            <div class="md-form">
                                <input type="text" id="id55" class="form-control" value="<?php echo $filename4 ?>" disabled>
                                <label for="id55" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="md-form">
                            <input type="text" id="id56" class="form-control" value="<?php echo $_POST['licno'] ?>" disabled>
                            <label for="id56" class="font-weight-bold" data-error="wrong" data-success="right"> Licence Number </label>
                        </div>
                        <div class="md-form">
                            <input type="text" id="id57" class="form-control" value="<?php echo $_POST['licissuedate'] ?>" disabled>
                            <label for="id57" class="font-weight-bold" data-error="wrong" data-success="right"> Licence Issue Date </label>
                        </div>
                        <div class="md-form">
                            <input type="text" id="id58" class="form-control" value="<?php echo $_POST['licexpiredate'] ?>" disabled>
                            <label for="id58" class="font-weight-bold" data-error="wrong" data-success="right"> Licence Expire Date </label>
                        </div>
                        <p class="font-weight-bold">POINTS AND ENDORSEMENT</p>
                        <label for="id59" class="font-weight-bold">Currently have any points or endorsements?</label>
                        <select class="browser-default custom-select custom-select-mb-3"  id="id59"disabled>
                            <option selected disabled><?php echo $_POST['checkpointend'] ?></option>
                        </select>
                        <?php
                        if($_POST['agree-10']=="on")
                        {
                            ?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="agree13" disabled checked>
                                <label class="custom-control-label" for="agree13">I confirm that the information provided is true and complete to the best of my knowledge.</label>
                            </div>
                            <?php
                        }else{
                            ?>
                            <label class='font-weight-bold'>Disagree</label>
                            <?php
                        }
                        if($_POST['agree-11']=="on")
                        {
                            ?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="agree14" disabled checked>
                                <label class="custom-control-label" for="agree14">For UK licence holder: I agree for my personal information to be used to conduct a DVLA licence check.</label>
                            </div>
                            <?php
                        }else{
                            ?>
                            <label class='font-weight-bold'>Disagree</label>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="heading18">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapseThree">
                                POA DOCUMENTS
                            </button>
                        </h5>
                    </div>
                    <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordion">
                        <div class="card-body">
                            <div class="md-form-group mt-3">
                                <label for="id60" class="font-weight-bold"> POA Document Type</label>
                                <select class="browser-default custom-select custom-select-mb-3"  id="id60"disabled>
                                    <option selected disabled><?php echo $_POST['proofdoctype'] ?></option>
                                </select>
                            </div>
                        </div>
                        <p class="font-weight-bold">POA Document Upload</p>
                        <?php
                        $file5 = $_FILES['proofdocupload'];
                        $filename5 = $_FILES['proofdocupload']['name'];
                        $tmpfilename5 = $_FILES['proofdocupload']['tmp_name'];
                        $fileext5 = explode('.',$filename5);
                        $fileactualext5 = strtolower(end($fileext5));
                        $filenamenew101 = uniqid('',true).".".$fileactualext5;
                        $filedestination101 = 'uploads/'.$filenamenew101;
                        if(move_uploaded_file($tmpfilename5,$filedestination101))
                        {
                            ?>
                            <div class="md-form">
                                <input type="text" id="id61" class="form-control" value="<?php echo $filename5 ?>" disabled>
                                <label for="id61" class="font-weight-bold" data-error="wrong" data-success="right"> Uploaded File </label>
                            </div>
                            <?php
                        }
                        else
                        {
                            ?>
                            <div class="md-form">
                                <input type="text" id="id62" class="form-control" value="<?php echo $filename5 ?>" disabled>
                                <label for="id62" class="font-weight-bold" data-error="wrong" data-success="right"> <span class="text-danger">(NOT)</span>Uploaded File </label>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require('../assets/footer.php');


$servername = "localhost";
$username = "root";
$password = "";
$dbname ="drivingboss";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    // prepare and bind
    $email = mysqli_real_escape_string($conn, $_POST['form-email']);
    $fullname = mysqli_real_escape_string($conn, $_POST['form-flname']);
    $bday = mysqli_real_escape_string($conn, $_POST['form-bday']);
    $phoneno = mysqli_real_escape_string($conn, $_POST['form-pn']);
    $pwd = md5(mysqli_real_escape_string($conn, $_POST['password']));
    $uindex = md5($email.$pwd.time());
    $vkey = md5(time());

    $sql = "SELECT * FROM user WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt, $sql))
    {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $resultdata = mysqli_stmt_get_result($stmt);
        if(mysqli_fetch_assoc($resultdata))
        {
            ?>
            <script>
                alert("You are already registered... Please login");
                window.location="login";
            </script>
            <?php
        }
        else
        {
            $sql1 = "INSERT INTO user (uindex, email, fullname, phoneno, bday,pwd, vkey) VALUES (?, ?, ?, ?, ?, ?, ?);";
            $stmt1 = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt1, $sql1))
            {
                echo "Error - 1";
            }
            else
            {
                mysqli_stmt_bind_param($stmt1,"sssisss",$uindex, $email,$fullname, $phoneno, $bday,$pwd, $vkey);
                mysqli_stmt_execute($stmt1);
            }

            // set parameters and execute
            foreach($depots as $depot)
            {
                // prepare and bind
                $stmt2 = $conn->prepare("INSERT INTO depot (uindex, depotname) VALUES (?, ?)");
                $stmt2->bind_param("ss", $uindex, $depotname);

            // set parameters and execute

                $depotname = mysqli_real_escape_string($conn, $depot);
                $stmt2->execute();
            }

//====================================================================================================================================================================================================
            // prepare and bind
            $stmt3 = $conn->prepare( "INSERT INTO initialeligibility (uindex, catb_available, catb_date) VALUES (?, ?, ?)");
            $stmt3->bind_param("sss", $uindex, $catbavailable, $catbdate);

            // set parameters and execute

            $catbavailable = mysqli_real_escape_string($conn, $_POST['confirmlicence']);
            $catbdate = $_POST['datecategoryb'];
            $stmt3->execute();
//====================================================================================================================================================================================================
            // prepare and bind
            $stmt4 = $conn->prepare( "INSERT INTO vehicle (uindex, need_vehicle) VALUES (?, ?)");
            $stmt4->bind_param("ss", $uindex, $needrentvehicle);

            // set parameters and execute

            $needrentvehicle = mysqli_real_escape_string($conn, $_POST['checkneedvehicle']);
            $stmt4->execute();
//====================================================================================================================================================================================================
            // prepare and bind
            $stmt5 = $conn->prepare( "INSERT INTO gdpr (uindex, gdpr_dec) VALUES (?, ?)");
            $stmt5->bind_param("ss", $uindex, $gdpr_dec);

            // set parameters and execute
            if($_POST['agree-1']=="on") {
                $gdpr_dec = "agree";
                $stmt5->execute();
            }else{
                $gdpr_dec = "disagree";
                $stmt5->execute();
            }
//====================================================================================================================================================================================================
            // prepare and bind
            $stmt6 = $conn->prepare( "INSERT INTO policy (uindex, policy_dec) VALUES (?, ?)");
            $stmt6->bind_param("ss", $uindex, $policy_dec);

            // set parameters and execute
            if($_POST['agree-2']=="on") {
                $policy_dec = "agree";
                $stmt6->execute();
            }else{
                $policy_dec = "disagree";
                $stmt6->execute();
            }

//====================================================================================================================================================================================================
            // prepare and bind
            $stmt7 = $conn->prepare( "INSERT INTO medicalfiteness (uindex, mf_con_1,mf_con_2,mf_con_3,mf_con_4,mf_con_5,mf_con_6,mf_dec) VALUES (?, ?,?, ?, ?, ?, ?, ?)");
            $stmt7->bind_param("ssssssss", $uindex, $mf_con_1,$mf_con_2,$mf_con_3,$mf_con_4,$mf_con_5,$mf_con_6,$mf_dec);

            // set parameters and execute
            if($_POST['confirm-1']=="on") {
                $mf_con_1 = "agree";
            }else{
                $mf_con_1 = "disagree";
            }
            if($_POST['confirm-2']=="on") {
                $mf_con_2 = "agree";
            }else{
                $mf_con_2 = "disagree";
            }
            if($_POST['confirm-3']=="on") {
                $mf_con_3 = "agree";
            }else{
                $mf_con_3 = "disagree";
            }
            if($_POST['confirm-5']=="on") {
                $mf_con_4 = "agree";
            }else{
                $mf_con_4 = "disagree";
            }
            if($_POST['confirm-6']=="on") {
                $mf_con_5 = "agree";
            }else{
                $mf_con_5 = "disagree";
            }
            if($_POST['confirm-7']=="on") {
                $mf_con_6 = "agree";
            }else{
                $mf_con_6 = "disagree";
            }
            if($_POST['agree-3']=="on") {
                $mf_dec = "agree";
            }else{
                $mf_dec = "disagree";
            }

            $stmt7->execute();

//====================================================================================================================================================================================================
            // prepare and bind
            $stmt8 = $conn->prepare( "INSERT INTO nondisclosure (uindex, ndsc_dec) VALUES (?, ?)");
            $stmt8->bind_param("ss", $uindex, $ndsc_dec);

            // set parameters and execute
            if($_POST['agree-4']=="on") {
                $ndsc_dec = "agree";
                $stmt8->execute();
            }else{
                $ndsc_dec = "disagree";
                $stmt8->execute();
            }

//====================================================================================================================================================================================================
            // prepare and bind
            $stmt9 = $conn->prepare( "INSERT INTO stoppolicy (uindex, sp_dec) VALUES (?, ?)");
            $stmt9->bind_param("ss", $uindex, $sp_decs);

            // set parameters and execute
            if($_POST['agree-5']=="on") {
                $sp_decs = "agree";
                $stmt9->execute();
            }else{
                $sp_decs = "disagree";
                $stmt9->execute();
            }

//====================================================================================================================================================================================================
            // prepare and bind
            $stmt10 = $conn->prepare( "INSERT INTO securitypolicy (uindex, sec_policy,secp_dec) VALUES (?, ?, ?)");
            $stmt10->bind_param("sss", $uindex, $sec_policy,$secp_dec);

            $sec_policy = $_POST['choosesecuritytype'];
            // set parameters and execute
            if($_POST['agree-6']=="on") {
                $secp_dec = "agree";
                $stmt10->execute();
            }else{
                $secp_dec = "disagree";
                $stmt10->execute();
            }

//====================================================================================================================================================================================================
            // prepare and bind
            $stmt11 = $conn->prepare( "INSERT INTO paymentdet (uindex, pfname, plname, psort_code, pacc_no, bankname, p_dec) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt11->bind_param("sssisss", $uindex, $pfname, $plname, $psort_code, $pacc_no, $bankname, $p_dec);

            $pfname = mysqli_real_escape_string($conn, $_POST['payment-fname']);
            $plname = mysqli_real_escape_string($conn, $_POST['payment-lname']);
            $psort_code = mysqli_real_escape_string($conn, $_POST['payment-sortcode']);
            $pacc_no = mysqli_real_escape_string($conn, $_POST['payment-accno']);
            $bankname = mysqli_real_escape_string($conn, $_POST['payment-bankname']);

            // set parameters and execute
            if($_POST['agree-7']=="on") {
                $p_dec = "agree";
                $stmt11->execute();
            }else{
                $p_dec = "disagree";
                $stmt11->execute();
            }

//====================================================================================================================================================================================================
            // prepare and bind
            $stmt12 = $conn->prepare( "INSERT INTO healthsafety (uindex, healthsafety_dec) VALUES (?, ?)");
            $stmt12->bind_param("ss", $uindex, $healthsafety_dec);

            $sec_policy = mysqli_real_escape_string($conn, $_POST['choosesecuritytype']);
            // set parameters and execute
            if($_POST['agree-8']=="on") {
                $healthsafety_dec = "agree";
                $stmt12->execute();
            }else{
                $healthsafety_dec = "disagree";
                $stmt12->execute();
            }

//====================================================================================================================================================================================================
            // prepare and bind
            $stmt13 = $conn->prepare( "INSERT INTO accurateback (uindex, accu_dec, birth_country, birth_nationality, birth_town, mfname, mlname, othername_check, otherfname, otherlname, othername_from, othername_to, current_hno, current_street, current_town, current_city, current_state, current_zip, current_when, old_hno, old_street, old_town, old_city, old_state, old_zip, old_when) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt13->bind_param("ssssssssssssssssssssssssss", $uindex, $accu_dec, $birth_country, $birth_nationality, $birth_town, $mfname, $mlname, $othername_check, $otherfname, $otherlname, $othername_from, $othername_to, $current_hno, $current_street, $current_town, $current_city, $current_state, $current_zip, $current_when, $old_hno, $old_street, $old_town, $old_city, $old_state, $old_zip, $old_when);

            // set parameters and execute
            if($_POST['agree-9']=="on") {
                $accu_dec = "agree";
            }else{
                $accu_dec = "disagree";
            }
            $birth_country = $_POST['birthcountry'];
            $birth_nationality = $_POST['birthnationality'];
            $birth_town = mysqli_real_escape_string($conn, $_POST['birthtwon']);
            $mfname = mysqli_real_escape_string($conn, $_POST['motherfname']);
            $mlname = mysqli_real_escape_string($conn, $_POST['motherlname']);
            $othername_check = $_POST['othername'];
            if($_POST['othername']=="Yes")
            {
                $otherfname = mysqli_real_escape_string($conn, $_POST['oldfname']);
                $otherlname = mysqli_real_escape_string($conn, $_POST['oldlname']);
                $othername_from = $_POST['oldnamefrom'];
                $othername_to = $_POST['oldnameto'];
            }
            else
            {
                $otherfname = "off";
                $otherlname = "off";
                $othername_from = "off";
                $othername_to = "off";
            }
            $current_hno = mysqli_real_escape_string($conn, $_POST['currenthouseno']);
            $current_street = mysqli_real_escape_string($conn, $_POST['currentstreet']);
            $current_town = mysqli_real_escape_string($conn, $_POST['currenttown']);
            $current_city = mysqli_real_escape_string($conn, $_POST['currentcity']);
            $current_state = mysqli_real_escape_string($conn, $_POST['currentstate']);
            $current_zip = mysqli_real_escape_string($conn, $_POST['currentzip']);
            $current_when = $_POST['whenmoveto-1'];
            if($_POST['oldhouseno']=="none")
            {
                $old_hno = "off";
                $old_street = "off";
                $old_town = "off";
                $old_city = "off";
                $old_state = "off";
                $old_zip = "off";
                $old_when = "off";
            }
            else
            {
                $old_hno = mysqli_real_escape_string($conn, $_POST['oldhouseno']);
                $old_street = mysqli_real_escape_string($conn, $_POST['oldhousestreet']);
                $old_town = mysqli_real_escape_string($conn, $_POST['oldhousetown']);
                $old_city = mysqli_real_escape_string($conn, $_POST['oldhousecity']);
                $old_state = mysqli_real_escape_string($conn, $_POST['oldhousestate']);
                $old_zip = mysqli_real_escape_string($conn, $_POST['oldhousezip']);
                $old_when = mysqli_real_escape_string($conn, $_POST['whenmoveto-2']);
            }

            $stmt13->execute();
//====================================================================================================================================================================================================
            // prepare and bind
            $stmt14 = $conn->prepare( "INSERT INTO identity (uindex, current_nationality, nin, idtype_check, passportup, nidfrontup, nidbackup, birthcertificateup, doc_issue_date, doc_exp_date, doc_type_check, visaup, permitfrontup, permitbackup, holetterup) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt14->bind_param("sssssssssssssss", $uindex, $current_nationality, $nin, $idtype_check, $passportup, $nidfrontup, $nidbackup, $birthcertificateup, $doc_issue_date, $doc_exp_date, $doc_type_check, $visaup, $permitfrontup, $permitbackup, $holetterup);

            $current_nationality = $_POST['currentnationality'];
            $nin = $_POST['nin'];
            $idtype_check = $_POST['idtype'];
            if($idtype_check=="Passport (Photo Page)")
            {
                $passportup = $filenamenew;
            }
            if($idtype_check=="National ID (Front & Back)")
            {
                $nidfrontup = $filenamenew11;

                $nidbackup = $filenamenew21;
            }
            if($idtype_check=="Birth Certificate (UK Only)")
            {
                $birthcertificateup = $filenamenew31;
            }

            $doc_issue_date = $_POST['docissuedate'];
            $doc_exp_date = $_POST['docexpdate'];
            $doc_type_check = $_POST['doctype'];

            if($doc_type_check=="Visa")
            {
                $visaup = $filenamenew41;
            }
            if($doc_type_check=="Residence Permit")
            {
                $permitfrontup = $filenamenew51;

                $permitbackup = $filenamenew61;

            }
            if($doc_type_check=="Home Office Letter")
            {
                $holetterup = $filenamenew71;
            }
            // set parameters and execute
            $stmt14->execute();

//====================================================================================================================================================================================================
            // prepare and bind
            $stmt15 = $conn->prepare( "INSERT INTO drivinglic (uindex, licissue_country, licfrontup, licbackup, licno, licisse_date, licexp_date, endors_check, lic_dec_1, lic_dec_2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt15->bind_param("ssssssssss", $uindex, $licissue_country, $licfrontup, $licbackup, $licno, $licisse_date, $licexp_date, $endors_check, $lic_dec_1, $lic_dec_2);

            $licissue_country = $_POST['liccountry'];
            $licfrontup = $filenamenew81;
            $licbackup = $filenamenew91;
            $licno = mysqli_real_escape_string($conn, $_POST['licno']);
            $licisse_date = $_POST['licissuedate'];
            $licexp_date = $_POST['licexpiredate'];
            $endors_check = $_POST['checkpointend'];
            // set parameters and execute
            if($_POST['agree-10']=="on")
            {
                $lic_dec_1 = "agree";
            }
            else
            {
                $lic_dec_1 = "disagree";
            }
            if($_POST['agree-11']=="on")
            {
                $lic_dec_2 = "agree";
            }
            else
            {
                $lic_dec_2 = "disagree";
            }

            $stmt15->execute();

//====================================================================================================================================================================================================
            // prepare and bind
            $stmt16 = $conn->prepare( "INSERT INTO poa (uindex, poadoc_type_check, poaup) VALUES (?, ?, ?)");
            $stmt16->bind_param("sss", $uindex, $poadoc_type_check, $poaup);

            $poadoc_type_check = $_POST['proofdoctype'];
            $tmpfilenamet = $filenamenew101;
            $poaup = $tmpfilenamet;
            // set parameters and execute
            $stmt16->execute();
//====================================================================================================================================================================================================

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
                    $mail->addAddress($_POST['form-email']);     // Add a recipient
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
                                        <h1 style='color: white'>Hey " . $_POST['form-flname'] . "!</h1>
                                    </div>
                                    <div style='background-color: #b7d5ff;color:#626269;justify-content: center;align-content: center;padding: 10px;text-align: center'>
                                        <p style='align-content: center;font-size: 24px;color: black'>Please verify your email to activate the Driving Boss Account.</p>
                                        <p>
                                            <a target='_blank' href='http://localhost:8012/extra/public/verify?vkey=$vkey' style='background-color: #f44336;text-align:center;padding: 15px;border-radius: 5px;text-decoration: none;color:white;font-size: 24px'>Verify Email</a>
                                        </p>
                                        <p style='color:#000000;font-size: 20px;border-top:10px'>Driving Boss</p>
                                    </div>
                                </div>";

                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Email verification to activate Driving Boss Account';
                    $mail->Body = $htmlcontent;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }

            $mail1 = new PHPMailer(true);

            try {
                //Server settings
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                $mail1->isSMTP();                                            // Send using SMTP
                $mail1->Host = 'mail.drivingboss.co.uk';                    // Set the SMTP server to send through
                $mail1->SMTPAuth = true;                                   // Enable SMTP authentication
                $mail1->Username = 'contact@drivingboss.co.uk';                     // SMTP username
                $mail1->Password = 'jwh3=kQ@j=k(';                               // SMTP password
                $mail1->SMTPSecure = "ssl";
                $mail1->Port = 465;
                $mail1->CharSet = "UTF-8";                                 // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail1->setFrom('contact@drivingboss.co.uk');
                $mail1->addAddress('shavinsenadeera@gmail.com');     // Add a recipient
                //$mail->addAddress('ellen@example.com');               // Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                // Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                // Content

                $htmlcontent1 = "<div style='background-color: #ececec;border-radius: 10px;padding: 10px'>
                                    <div style='background-color: #3c3c3c;padding: 10px'>
                                        <h1 style='color: white'>Hey Admin !</h1>
                                    </div>
                                    <div style='background-color: #b7d5ff;color:#626269;justify-content: center;align-content: center;padding: 10px;text-align: center'>
                                        <p style='align-content: center;font-size: 24px;color: black'>Congratulations! Another Person registered on Driving Boss.</p>
                                        <p style='align-content: center;font-size: 20px;color: red'> Go to Admin panel to see!</p>
                                     
                                        <p style='color:#000000;font-size: 20px;border-top:10px'>Driving Boss</p>
                                    </div>
                                </div>";

                $mail1->isHTML(true);                                  // Set email format to HTML
                $mail1->Subject = 'Congratulations! Person is added to your list';
                $mail1->Body = $htmlcontent1;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail1->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail1->ErrorInfo}";
            }



        }

    }
}
 ?>

<!-- Custom scripts for this template -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script src="../js/script.js"></script>

<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"
></script>
</body>
</html>
<?php
}else
{
    ?>
        <script>
            window.location = "index";
        </script>
    <?php
}
?>