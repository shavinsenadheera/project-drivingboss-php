<?php
session_start();

if(isset($_SESSION['uname']))
{
    $masterusername = $_SESSION['uname'];
    $uindex = $_SESSION['uindex'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "drivingboss";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection

    $sql1 = "SELECT depotname FROM depot WHERE uindex='$uindex'";
    $getdepotdata1 = mysqli_query($conn, $sql1);

    if ($getdepotdata1->num_rows > 0)
    {
        $selectdeopt  = array();
        // output data of each row
        while($row1 = $getdepotdata1->fetch_assoc())
        {
            array_push($selectdeopt,$row1['depotname']);
        }
    } 
    else 
    {
        $selectdeopt = "You are not select any depot";
    }


    $sql2 = "SELECT email, fullname, phoneno, bday, registered_date FROM user WHERE uindex='$uindex'";
    $getdepotdata2 = mysqli_query($conn, $sql2);
        if ($getdepotdata2->num_rows > 0)
        {
            // output data of each row
            while ($row2 = $getdepotdata2->fetch_assoc())
            {
                $flname = $row2['fullname'];
                $bday = $row2['bday'];
                $email = $row2['email'];
                $pn = $row2['phoneno'];
                $rdate = $row2['registered_date'];
            }
        }


    $sql3 = "SELECT catb_available, catb_date FROM initialeligibility WHERE uindex='$uindex'";
    $getdepotdata3 = mysqli_query($conn, $sql3);
    if ($getdepotdata3->num_rows > 0)
    {
        // output data of each row
        while ($row3 = $getdepotdata3->fetch_assoc())
        {
            $confirmlicence = $row3['catb_available'];
            $catbdate = $row3['catb_date'];
        }
        if($confirmlicence=="No")
        {
            $catbdate ="";
        }
    }

    $sql4 = "SELECT need_vehicle FROM vehicle WHERE uindex='$uindex'";
    $getdepotdata4 = mysqli_query($conn, $sql4);
    if ($getdepotdata4->num_rows > 0)
    {
        // output data of each row
        while ($row4 = $getdepotdata4->fetch_assoc())
        {
            $needveicle = $row4['need_vehicle'];
        }
    }

    $sql5 = "SELECT gdpr_dec FROM gdpr WHERE uindex='$uindex'";
    $getdepotdata5 = mysqli_query($conn, $sql5);
    if ($getdepotdata5->num_rows > 0)
    {
        // output data of each row
        while ($row5 = $getdepotdata5->fetch_assoc())
        {
            $agree1 = $row5['gdpr_dec'];
        }
    }

    $sql6 = "SELECT policy_dec FROM policy WHERE uindex='$uindex'";
    $getdepotdata6 = mysqli_query($conn, $sql6);
    if ($getdepotdata6->num_rows > 0)
    {
        // output data of each row
        while ($row6= $getdepotdata6->fetch_assoc())
        {
            $agree2 = $row6['policy_dec'];
        }
    }

    $sql7 = "SELECT mf_con_1, mf_con_2, mf_con_3, mf_con_4, mf_con_5, mf_con_6, mf_dec FROM medicalfiteness WHERE uindex='$uindex'";
    $getdepotdata7 = mysqli_query($conn, $sql7);
    if ($getdepotdata7->num_rows > 0)
    {
        // output data of each row
        while ($row7 = $getdepotdata7->fetch_assoc())
        {
            $confirm1 = $row7['mf_con_1'];
            $confirm2 = $row7['mf_con_2'];
            $confirm3 = $row7['mf_con_3'];
            $confirm5 = $row7['mf_con_4'];
            $confirm6 = $row7['mf_con_5'];
            $confirm7 = $row7['mf_con_6'];
            $agree3 = $row7['mf_dec'];
        }
    }

    $sql8 = "SELECT ndsc_dec FROM nondisclosure WHERE uindex='$uindex'";
    $getdepotdata8 = mysqli_query($conn, $sql8);
    if ($getdepotdata8->num_rows > 0)
    {
        // output data of each row
        while ($row8 = $getdepotdata8->fetch_assoc())
        {
            $agree4 = $row8['ndsc_dec'];
        }
    }

    $sql9 = "SELECT sp_dec FROM stoppolicy WHERE uindex='$uindex'";
    $getdepotdata9 = mysqli_query($conn, $sql9);
    if ($getdepotdata9->num_rows > 0)
    {
        // output data of each row
        while ($row9 = $getdepotdata9->fetch_assoc())
        {
            $agree5 = $row9['sp_dec'];
        }
    }

    $sql10 = "SELECT sec_policy,secp_dec  FROM securitypolicy WHERE uindex='$uindex'";
    $getdepotdata10 = mysqli_query($conn, $sql10);
    if ($getdepotdata10->num_rows > 0)
    {
        // output data of each row
        while ($row10 = $getdepotdata10->fetch_assoc())
        {
            $choosesecuritytype = $row10['sec_policy'];
            $agree6 = $row10['secp_dec'];
        }
    }


    $sql11 = "SELECT pfname,plname, psort_code, pacc_no, bankname,p_dec  FROM paymentdet WHERE uindex='$uindex'";
    $getdepotdata11 = mysqli_query($conn, $sql11);
    if ($getdepotdata11->num_rows > 0)
    {
        // output data of each row
        while ($row11 = $getdepotdata11->fetch_assoc())
        {
            $paymentfname = $row11['pfname'];
            $paymentlname = $row11['plname'];
            $paymentsortcode = $row11['psort_code'];
            $paymentaccno = $row11['pacc_no'];
            $paymentbankname = $row11['bankname'];
            $agree7 = $row11['p_dec'];
        }
    }

    $sql12 = "SELECT healthsafety_dec  FROM healthsafety WHERE uindex='$uindex'";
    $getdepotdata12 = mysqli_query($conn, $sql12);
    if ($getdepotdata12->num_rows > 0)
    {
        // output data of each row
        while ($row12 = $getdepotdata12->fetch_assoc())
        {
            $agree8 = $row12['healthsafety_dec'];
        }
    }

    $sql13 = "SELECT *  FROM accurateback WHERE uindex='$uindex'";
    $getdepotdata13 = mysqli_query($conn, $sql13);
    if ($getdepotdata13->num_rows > 0)
    {
        // output data of each row
        while ($row13 = $getdepotdata13->fetch_assoc())
        {
            $agree9 = $row13['accu_dec'];
            $birthcountry = $row13['birth_country'];
            $birthnationality = $row13['birth_nationality'];
            $birthtwon = $row13['birth_town'];
            $motherfname = $row13['mfname'];
            $motherlname = $row13['mlname'];
            $othername = $row13['othername_check'];
            $oldfname = $row13['otherfname'];
            $oldlname = $row13['otherlname'];
            $oldnamefrom = $row13['othername_from'];
            $oldnameto = $row13['othername_to'];
            $currenthouseno = $row13['current_hno'];
            $currentstreet = $row13['current_street'];
            $currenttown = $row13['current_town'];
            $currentcity = $row13['current_city'];
            $currentstate = $row13['current_state'];
            $currentzip = $row13['current_zip'];
            $whenmoveto1 = $row13['current_when'];
            $oldhouseno = $row13['old_hno'];
            $oldhousestreet = $row13['old_street'];
            $oldhousetown = $row13['old_town'];
            $oldhousecity = $row13['old_city'];
            $oldhousestate = $row13['old_state'];
            $oldhousezip = $row13['old_zip'];
            $whenmoveto2 = $row13['old_when'];
        }
    }
    $sql14 = "SELECT * FROM identity WHERE uindex='$uindex'";
    $getdepotdata14 = mysqli_query($conn, $sql14);
    if ($getdepotdata14->num_rows > 0)
    {
        // output data of each row
        while ($row14 = $getdepotdata14->fetch_assoc())
        {
            $currentnationality = $row14['current_nationality'];
            $nin = $row14['nin'];
            $idtype = $row14['idtype_check'];
            $filedownload = $row14['passportup'];
            $filedownload11 = $row14['nidfrontup'];
            $filedownload21 = $row14['nidbackup'];
            $filedownload31 = $row14['birthcertificateup'];
            $docissuedate = $row14['doc_issue_date'];
            $docexpdate = $row14['doc_exp_date'];
            $doctype = $row14['doc_type_check'];
            $filedownload41 = $row14['visaup'];
            $filedownload51 = $row14['permitfrontup'];
            $filedownload61 = $row14['permitbackup'];
            $filedownload71 = $row14['holetterup'];
        }
    }

    $sql15 = "SELECT *  FROM drivinglic WHERE uindex='$uindex'";
    $getdepotdata15 = mysqli_query($conn, $sql15);
    if ($getdepotdata15->num_rows > 0)
    {
        // output data of each row
        while ($row15 = $getdepotdata15->fetch_assoc())
        {
            $liccountry = $row15['licissue_country'];
            $filedownload81 = $row15['licfrontup'];
            $filedownload91 = $row15['licbackup'];
            $licno = $row15['licno'];
            $licissuedate = $row15['licisse_date'];
            $licexpiredate = $row15['licexp_date'];
            $checkpointend = $row15['endors_check'];
            $agree10 = $row15['lic_dec_1'];
            $agree11 = $row15['lic_dec_2'];
        }
    }

    $sql16 = "SELECT *  FROM poa WHERE uindex='$uindex'";
    $getdepotdata16 = mysqli_query($conn, $sql16);
    if ($getdepotdata16->num_rows > 0)
    {
        // output data of each row
        while ($row16 = $getdepotdata16->fetch_assoc())
        {
            $proofdoctype = $row16['poadoc_type_check'];
            $filedownload101 = $row16['poaup'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="rabbitdevs">

    <title>Join Us - Profile</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Custom styles for this template -->

    <!--Custom Adding CSS Files for this template-->
    <link rel="stylesheet" href="../styles/profileonly.css">


</head>

<body style="background-color: black">
<!--Main Navigation-->
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-sm scrolling-navbar text-white" id="header-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="https://www.drivingboss.co.uk/" data-activates="slide-out" class="button-collapse"><img src="https://www.drivingboss.co.uk/wp-content/uploads/2020/10/logo.png" height="50px" size="50px"/></a>
        </div>
        <!-- Breadcrumb-->

        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Hi, <?php echo $masterusername ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://www.drivingboss.co.uk/about/contact/" class="nav-link text-primary"><i class="fas fa-file"></i><span class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link text-primary"><i class="fas fa-power-off"></i><span class="clearfix d-none d-sm-inline-block">Logout</span></a>
            </li>
        </ul>
    </nav>
</header>
<!--Main Navigation-->
<main>
<!--Main Layout-->
<div class="container h-100 bg-transparent" id="contain">
        <div class="row justify-content-center h-100">
            <div class="col-md-12 text-center justify-content-center">
                <span class="text-white font-weight-bold" style="font-family: sans-serif;font-size: 32px">Submission Form</span>
                <p class="text-muted">you can only read the submission form</p>
                <p class="text-info">You registered on <?php echo $rdate ?></p>
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
                                    <label for="m" class="font-weight-bold">Depot Selection</label>
                                    <?php
                                    foreach ($selectdeopt as $depot)
                                    {
                                        ?>
                                        <select class="browser-default custom-select custom-select-mb-3"  id="m<?php echo $depot?>" disabled>
                                            <?php
                                            echo "<option selected disabled>$depot</option>";
                                            ?>
                                        </select>
                                        <p></p>
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
                                    <input type="text" id="id2" class="form-control" value="<?php echo $flname ?>" disabled>
                                    <label for="id2" class="font-weight-bold" data-error="wrong" data-success="right"> Full Name </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="md-form">
                                    <input type="text" id="id3" class="form-control" value="<?php echo $bday ?>" disabled>
                                    <label for="id3" class="font-weight-bold" data-error="wrong" data-success="right"> Birthday </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="md-form">
                                    <input type="text" id="id4" class="form-control" value="<?php echo $email ?>" disabled>
                                    <label for="id4" class="font-weight-bold" data-error="wrong" data-success="right"> Email </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="md-form">
                                    <input type="text" id="id5" class="form-control" value="<?php echo $pn ?>" disabled>
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
                                    <label for="m" class="font-weight-bold"> Driving License: Do you have Category B entitlement ?</label>
                                    <select class="browser-default custom-select custom-select-mb-3" id="m" disabled>
                                        <option selected disabled><?php echo $confirmlicence ?></option>
                                    </select>
                                </div>
                                <?php
                                if($confirmlicence=="Yes")
                                {
                                    ?>
                                    <div class="card-body">
                                        <div class="md-form">
                                            <input type="text" id="id6" class="form-control" value="<?php echo $catbdate ?>" disabled>
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
                                        <option selected disabled><?php echo $needveicle ?></option>
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
                                    if($agree1=="agree")
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
                                    if($agree2=="agree")
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
                                    if($confirm1=="agree")
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
                                    if($confirm2=="agree")
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
                                    if($confirm3=="agree")
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
                                    if($confirm5=="agree")
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
                                    if($confirm6=="agree")
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
                                    if($confirm7=="agree")
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
                                    if($agree3=="agree")
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
                                    if($agree4=="agree")
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
                                    if($agree5=="agree")
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
                                    <label for="m" class="font-weight-bold"> Securityax services </label>
                                    <select class="browser-default custom-select custom-select-mb-3" id="m" disabled>
                                        <option selected disabled><?php echo $choosesecuritytype ?></option>
                                    </select>
                                </div>
                                <div class="md-form-group mt-3">
                                    <?php
                                    if($agree6=="agree")
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
                                    <input type="text" id="id8" class="form-control" value="<?php echo $paymentfname ?>" disabled>
                                    <label for="id8" class="font-weight-bold" data-error="wrong" data-success="right"> First Name </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id9" class="form-control" value="<?php echo $paymentlname ?>" disabled>
                                    <label for="id9" class="font-weight-bold" data-error="wrong" data-success="right"> Last Name </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id10" class="form-control" value="<?php echo $paymentsortcode ?>" disabled>
                                    <label for="id10" class="font-weight-bold" data-error="wrong" data-success="right"> Sort Code </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id11" class="form-control" value="<?php echo $paymentaccno ?>" disabled>
                                    <label for="id11" class="font-weight-bold" data-error="wrong" data-success="right"> Account Number </label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="id12" class="form-control" value="<?php echo $paymentbankname ?>" disabled>
                                    <label for="id12" class="font-weight-bold" data-error="wrong" data-success="right"> Bank Name </label>
                                </div>
                                <div class="md-form-group mt-3">
                                    <?php
                                    if($agree7=="agree")
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
                                    if($agree8=="agree")
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
                                    if($agree9=="agree")
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
                                        <option selected disabled><?php echo $birthcountry ?></option>
                                    </select>
                                    <label for="id14" class="font-weight-bold">Birth Nationality</label>
                                    <select class="browser-default custom-select custom-select-mb-3"  id="id14"disabled>
                                        <option selected disabled><?php echo $birthnationality ?></option>
                                    </select>
                                    <div class="md-form">
                                        <input type="text" id="id15" class="form-control" value="<?php echo $birthtwon ?>" disabled>
                                        <label for="id15" class="font-weight-bold" data-error="wrong" data-success="right"> Birth Town </label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="id16" class="form-control" value="<?php echo $motherfname ?>" disabled>
                                        <label for="id16" class="font-weight-bold" data-error="wrong" data-success="right"> Mother First Name </label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="id17" class="form-control" value="<?php echo $motherlname ?>" disabled>
                                        <label for="id17" class="font-weight-bold" data-error="wrong" data-success="right"> Mother Last Name </label>
                                    </div>
                                    <label for="id18" class="font-weight-bold">Have you ever been another name?</label>
                                    <select class="browser-default custom-select custom-select-mb-3"  id="id18"disabled>
                                        <option selected disabled><?php echo $othername ?></option>
                                    </select>
                                    <?php
                                    if($othername=="Yes"){
                                        ?>
                                        <p class="font-weight-bold">Other Name Information</p>
                                        <div class="md-form">
                                            <input type="text" id="id19" class="form-control" value="<?php echo $oldfname ?>" disabled>
                                            <label for="id19" class="font-weight-bold" data-error="wrong" data-success="right"> Previous First Name </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id20" class="form-control" value="<?php echo $oldlname ?>" disabled>
                                            <label for="id20" class="font-weight-bold" data-error="wrong" data-success="right"> Previous Last Name </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id21" class="form-control" value="<?php echo $oldnamefrom ?>" disabled>
                                            <label for="id21" class="font-weight-bold" data-error="wrong" data-success="right"> Previous Name From </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id21" class="form-control" value="<?php echo $oldnameto ?>" disabled>
                                            <label for="id21" class="font-weight-bold" data-error="wrong" data-success="right"> Previous Name To </label>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        <p class="font-weight-bold">Current Address Information</p>
                                        <div class="md-form">
                                            <input type="text" id="id22" class="form-control" value="<?php echo $currenthouseno ?>" disabled>
                                            <label for="id22" class="font-weight-bold" data-error="wrong" data-success="right"> House No/Name </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id23" class="form-control" value="<?php echo $currentstreet ?>" disabled>
                                            <label for="id23" class="font-weight-bold" data-error="wrong" data-success="right"> Street </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id24" class="form-control" value="<?php echo $currenttown ?>" disabled>
                                            <label for="id24" class="font-weight-bold" data-error="wrong" data-success="right"> Town </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id25" class="form-control" value="<?php echo $currentcity ?>" disabled>
                                            <label for="id25" class="font-weight-bold" data-error="wrong" data-success="right"> City </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id26" class="form-control" value="<?php echo $currentstate ?>" disabled>
                                            <label for="id26" class="font-weight-bold" data-error="wrong" data-success="right"> State </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id27" class="form-control" value="<?php echo $currentzip ?>" disabled>
                                            <label for="id27" class="font-weight-bold" data-error="wrong" data-success="right"> ZIP </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id28" class="form-control" value="<?php echo $whenmoveto1 ?>" disabled>
                                            <label for="id28" class="font-weight-bold" data-error="wrong" data-success="right"> Address Move Date </label>
                                        </div>
                                        <?php
                                    if($oldhouseno!="off")
                                    {
                                        ?>
                                        <p class="font-weight-bold">Old Address Information</p>
                                        <div class="md-form">
                                            <input type="text" id="id29" class="form-control" value="<?php echo $oldhouseno ?>" disabled>
                                            <label for="id29" class="font-weight-bold" data-error="wrong" data-success="right"> House No/Name </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id30" class="form-control" value="<?php echo $oldhousestreet ?>" disabled>
                                            <label for="id30" class="font-weight-bold" data-error="wrong" data-success="right"> Street </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id31" class="form-control" value="<?php echo $oldhousetown ?>" disabled>
                                            <label for="id31" class="font-weight-bold" data-error="wrong" data-success="right"> Town </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id32" class="form-control" value="<?php echo $oldhousecity ?>" disabled>
                                            <label for="id32" class="font-weight-bold" data-error="wrong" data-success="right"> City </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id33" class="form-control" value="<?php echo  $oldhousestate ?>" disabled>
                                            <label for="id33" class="font-weight-bold" data-error="wrong" data-success="right"> State </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id34" class="form-control" value="<?php echo $oldhousezip ?>" disabled>
                                            <label for="id34" class="font-weight-bold" data-error="wrong" data-success="right"> ZIP </label>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="id35" class="form-control" value="<?php echo $whenmoveto2 ?>" disabled>
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
                                        <option selected disabled><?php echo $currentnationality ?></option>
                                    </select>
                                    <div class="md-form">
                                        <input type="text" id="id37" class="form-control" value="<?php echo $nin ?>" disabled>
                                        <label for="id37" class="font-weight-bold" data-error="wrong" data-success="right"> National Insurance Number </label>
                                    </div>
                                    <p class="font-weight-bold">ID DOCUMENT UPLOAD</p>
                                    <label for="id49" class="font-weight-bold">Uploaded ID Type</label>
                                    <select class="browser-default custom-select custom-select-mb-3"  id="id49"disabled>
                                        <option selected disabled><?php echo $idtype ?></option>
                                    </select>
                                    <?php
                                    if($idtype=="Passport (Photo Page)")
                                    {
                                        ?>
                                        <p class="font-weight-bold">Passport (Photo Page) Upload</p>
                                        <?php
                                        echo $filedownload;
                                        ?>
                                        <p>
                                        <a href="uploads/<?php echo $filedownload ?>" class="btn btn-primary" download>Download document</a>
                                        </p>
                                        <?php
                                    }
                                    if($idtype=="National ID (Front & Back)")
                                    {
                                        ?>
                                        <p class="font-weight-bold">National ID Front Upload</p>
                                        <?php
                                        echo $filedownload11;
                                        ?>
                                        <p>
                                        <a href="uploads/<?php echo $filedownload11 ?>" class="btn btn-primary" download>Download document</a>
                                        </p>

                                        <p class="font-weight-bold">National ID Back Upload</p>
                                        <?php
                                        echo $filedownload21;
                                        ?>
                                        <p>
                                        <a href="uploads/<?php echo $filedownload21 ?>" class="btn btn-primary" download>Download document</a>
                                        </p>
                                        <?php

                                    }
                                    if($idtype=="Birth Certificate (UK Only)")
                                    {
                                        ?>
                                        <p class="font-weight-bold">Birth Certificate (UK Only) Upload</p>
                                        <?php
                                        echo $filedownload31;
                                        ?>
                                        <p>
                                        <a href="uploads/<?php echo $filedownload31 ?>" class="btn btn-primary" download>Download document</a>
                                        </p>
                                        <?php
                                    }
                                    ?>
                                    <div class="md-form">
                                        <input type="text" id="id47" class="form-control" value="<?php echo $docissuedate ?>" disabled>
                                        <label for="id47" class="font-weight-bold" data-error="wrong" data-success="right"> ID Issue Date </label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="id48" class="form-control" value="<?php echo $docexpdate ?>" disabled>
                                        <label for="id48" class="font-weight-bold" data-error="wrong" data-success="right"> ID Expire Date </label>
                                    </div>
                                    <p class="font-weight-bold">VISA RESIDENCE PERMIT</p>
                                    <label for="id50" class="font-weight-bold">Uploaded ID Type</label>
                                    <select class="browser-default custom-select custom-select-mb-3"  id="id50"disabled>
                                        <option selected disabled><?php echo $doctype ?></option>
                                    </select>
                                    <?php
                                    if($doctype=="Visa")
                                    {
                                        ?>
                                        <p class="font-weight-bold">VISA Upload</p>
                                        <?php
                                        echo $filedownload41;
                                        ?>
                                        <p>
                                        <a href="uploads/<?php echo $filedownload41 ?>" class="btn btn-primary" download>Download document</a>
                                        </p>
                                        <?php
                                    }
                                    if($doctype=="Residence Permit")
                                    {
                                        ?>
                                        <p class="font-weight-bold">Residence Permit Front Upload</p>
                                        <?php
                                        echo $filedownload51;
                                        ?>
                                        <p>
                                        <a href="uploads/<?php echo $filedownload51 ?>" class="btn btn-primary" download>Download document</a>
                                        </p>

                                        <p class="font-weight-bold">Residence Permit Back Upload</p>
                                        <?php
                                        echo $filedownload61;
                                        ?>
                                        <p>
                                        <a href="uploads/<?php echo $filedownload61 ?>" class="btn btn-primary" download>Download document</a>
                                        </p>
                                        <?php

                                    }
                                    if($doctype=="Home Office Letter")
                                    {
                                        ?>
                                        <p class="font-weight-bold"> Home Office Letter Upload</p>
                                        <?php
                                        echo $filedownload71;
                                        ?>
                                        <p>
                                        <a href="uploads/<?php echo $filedownload71 ?>" class="btn btn-primary" download>Download document</a>
                                        </p>
                                        <?php
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
                                        <option selected disabled><?php echo $liccountry ?></option>
                                    </select>
                                </div>
                            </div>
                            <p class="font-weight-bold">Driving Licence Front Upload</p>
                            <?php
                                echo $filedownload81;
                                ?>
                                <p>
                                <a href="uploads/<?php echo $filedownload81 ?>" class="btn btn-primary" download>Download document</a>
                                </p>
                                <p class="font-weight-bold">Driving Licence Back Upload</p>
                            <?php

                                echo $filedownload91;
                                ?>
                                <p>
                                <a href="uploads/<?php echo $filedownload91 ?>" class="btn btn-primary" download>Download document</a>
                                </p>
                            <div class="md-form">
                                <input type="text" id="id56" class="form-control" value="<?php echo $licno ?>" disabled>
                                <label for="id56" class="font-weight-bold" data-error="wrong" data-success="right"> Licence Number </label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="id57" class="form-control" value="<?php echo $licissuedate ?>" disabled>
                                <label for="id57" class="font-weight-bold" data-error="wrong" data-success="right"> Licence Issue Date </label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="id58" class="form-control" value="<?php echo $licexpiredate ?>" disabled>
                                <label for="id58" class="font-weight-bold" data-error="wrong" data-success="right"> Licence Expire Date </label>
                            </div>
                            <p class="font-weight-bold">POINTS AND ENDORSEMENT</p>
                            <label for="id59" class="font-weight-bold">Currently have any points or endorsements?</label>
                            <select class="browser-default custom-select custom-select-mb-3"  id="id59"disabled>
                                <option selected disabled><?php echo $checkpointend ?></option>
                            </select>
                            <?php
                            if($agree10=="agree")
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
                            if($agree11=="agree")
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
                                    POA DOCUMENT
                                </button>
                            </h5>
                        </div>
                        <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordion">
                            <div class="card-body">
                                <div class="md-form-group mt-3">
                                    <label for="id60" class="font-weight-bold"> POA Document Type</label>
                                    <select class="browser-default custom-select custom-select-mb-3"  id="id60"disabled>
                                        <option selected disabled><?php echo $proofdoctype ?></option>
                                    </select>
                                </div>
                            </div>
                            <p class="font-weight-bold">Driving Licence Front Upload</p>
                            <?php
                            echo $filedownload101;
                            ?>
                            <p>
                            <a href="uploads/<?php echo $filedownload101 ?>" class="btn btn-primary" download>Download document</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
</main>
<br>
<?php
    include ('../assets/footer.php');
?>
<script>
    $(document).ready(function() {

        // SideNav Initialization
        $(".button-collapse").sideNav();
    });

</script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>
<?php
}
else
{
    echo "<script>window.location='login.php'</script>";
}

?>
