<?php
session_start();
$_SESSION['check']='register';
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="rabbitdevs">

  <title>Join Us</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

  <!--FORM VALIDATION SCRIPT-->
  <script src="../js/validationform.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('.selectpicker').selectpicker();

        });

    </script>
</head>

<body style="background: linear-gradient(90deg, rgba(0,1,34,1) 0%, rgba(170,170,170,1) 100%);">
<?php
require ('../assets/header.php');
?>
    <div class="container-fluid" id="body-secondary">

    <div class="row justify-content-center py-5">
        <div class="col-md-3 h-100 text-center  text-white" id="formstylecon">
            <span class="font-weight-bold" style="font-size: 24px">REGISTRATION</span>
            <p id="second-topic">Complete the form to register</p>
            <hr>
            <p>After completing the form, you will have recieved an email, then you can login with us.</p>
            <p>If you are already join with us. Please click the following button to login.</p>
            <span>
                <a href="login.php" class="btn btn-success rounded-pill ui-spinner-down" id="btn-login">LOGIN</a>
            </span>
        </div>
        <div class="col-md-7 h-100" id="formconatiner">
              <!--FORM-OPEN-->
              <form id="regForm" action="registration.php" class="form mb-5" method="POST" autocomplete="off" enctype="multipart/form-data">
                <!-- Circles which indicates the steps of the form: -->
                <div id="dots">
                  <span class="step" id="step1" class="font-weight-bold"></span>
                  <span class="step" id="step2" class="font-weight-bold"></span>
                  <span class="step" id="step3" class="font-weight-bold"></span>
                  <span class="step" id="step4" class="font-weight-bold"></span>
                  <span class="step" id="step5" class="font-weight-bold"></span>
                  <span class="step" id="step6" class="font-weight-bold"></span>
                  <span class="step" id="step7" class="font-weight-bold"></span>
                  <span class="step" id="step8" class="font-weight-bold"></span>
                  <span class="step" id="step9" class="font-weight-bold"></span>
                  <span class="step" id="step10" class="font-weight-bold"></span>
                  <span class="step" id="step11" class="font-weight-bold"></span>
                  <span class="step" id="step12" class="font-weight-bold"></span>
                  <span class="step" id="step13" class="font-weight-bold"></span>
                  <span class="step" id="step14" class="font-weight-bold"></span>
                  <span class="step" id="step15" class="font-weight-bold"></span>
                  <span class="step" id="step16" class="font-weight-bold"></span>
                  <span class="step" id="step17" class="font-weight-bold"></span>
                  <span class="step" id="step18" class="font-weight-bold"></span>
                  <span class="step" id="step19" class="font-weight-bold"></span>
                </div>

                <!--step01######################################################################################-->
                <!-- One "tab" for each step in the form: -->
                <div class="tab" id="tab1">

                  <h4 class="text-center" id="form-topicdscrb">Driving Boss Transformation Associate Application</h4>
                  <h6 class="text-center" id="avrg-secrb">Average Time To Complte : 45 minutes</h6>
                  <hr id="top-hr">
                  <div class="form-information text-center">
                    <p class="text-center">You're applying for the role of:</p> <p id="highlited-black">Delivery Associate</p>
                    <p>(multi-drop delivery driver)</p>
                    <span class="font-weight-bold">At</span><span>(Please Select)</span>
                  </div>


                  <div class="md-form-group mt-3 mb-3 justify-content-center text-center">
                      <label for="selectDepot" class="font-weight-bold">Depot Selection <strong class="text-danger">*</strong></label><p></p>
                      <select name="selectdeopt[]" onchange="checkSelectDepot()" id="selectDepot" class="selectpicker form-control font-smaller" style="width: 100%;font-size: 10px" data-style="btn-white" multiple>
                        <option value="none" disabled>Please select a Depot</option>
                        <option value="DSS2 - Basildon, Essex SS14 9AA"> DSS2 - Basildon, Essex SS14 9AA </option>
                        <option value="DRM2 - West Thurrock, Essex RM20 3ED"> DRM2 - West Thurrock, Essex RM20 3ED </option>
                        <option value="DXE1 - Bow, London E3 3JQ"> DXE1 - Bow, London E3 3JQ </option>
                        <option value="DIG1 - Enfield, London EN3 7PZ"> DIG1 - Enfield, London EN3 7PZ </option>
                        <option value="DSN1 - Swindon, Wiltshire SN3 4WA"> DSN1 - Swindon, Wiltshire SN3 4WA </option>
                        <option value="DHP1 - Hemel Hempstead HP2 7DU"> DHP1 - Hemel Hempstead HP2 7DU </option>
                        <option value="DLU1 - Dunstable, Luton LU5 4FA"> DLU1 - Dunstable, Luton LU5 4FA </option>
                        <option value="DBN2 - Littlehampton, Sussex BN17 6LS"> DBN2 - Littlehampton, Sussex BN17 6LS </option>
                        <option value="DXW3 - Weyrbidge, Surrey KT13 0YU"> DXW3 - Weyrbidge, Surrey KT13 0YU </option>
                        <option value="DEX2 - Exeter, Devon EX5 2DS"> DEX2 - Exeter, Devon EX5 2DS </option>
                        <option value="DSO2 - Southampton SO40 9LR"> DSO2 - Southampton SO40 9LR </option>
                        <option value="DWR1 - Droitwich WR9 0QH"> DWR1 - Droitwich WR9 0QH </option>
                        <option value="DCF1 - Newport, Wales NP19 4QZ"> DCF1 - Newport, Wales NP19 4QZ </option>
                        <option value="DSA1 - Swansea, Wales SA13 2PG"> DSA1 - Swansea, Wales SA13 2PG </option>
                        <option value="DXP1 - Plymouth, Devon PL6 7EZ"> DXP1 - Plymouth, Devon PL6 7EZ </option>
                        <option value="DRR1 - Redruth, Cornwall TR16 4HZ"> DRR1 - Redruth, Cornwall TR16 4HZ </option>
                        <option value="DBT2 - Northern Ireland, Belfast BT3 9DT"> DBT2 - Northern Ireland, Belfast BT3 9DT </option>
                        <option value="DNN1 - Northampton NN4 5EL"> DNN1 - Northampton NN4 5EL </option>
                        <option value="DNR1 - Norwich NR3 2BU"> DNR1 - Norwich NR3 2BU </option>
                        <option value="DPE1 - Peterborough PE2 6GX"> DPE1 - Peterborough PE2 6GX </option>
                        <option value="DCB1 - Huntingdon, PE29 6SY"> DCB1 - Huntingdon, PE29 6SY </option>
                        <option value="DCR3 - Croydon"> DCR3 - Croydon </option>
                        <option value="DHA1 - Wembley NW10 0UP"> DHA1 - Wembley NW10 0UP </option>
                        <option value="DBS2 - Bristol, BS11 0YH"> DBS2 - Bristol, BS11 0YH </option>
                        <option value="DOX2 - Banbury, OX16 2DJ"> DOX2 - Banbury, OX16 2DJ </option>
                        <option value="DZL4 - Camberley"> DZL4 - Camberley </option>
                        <option value="DXN1 - West Drayton, UB7 9FN"> DXN1 - West Drayton, UB7 9FN </option>
                        <option value="DEH1 - Edinburgh, EH48 2EA"> DEH1 - Edinburgh, EH48 2EA </option>
                        <option value="DXG1 - Glasgow, ML1 4XJ"> DXG1 - Glasgow, ML1 4XJ </option>
                        <option value="DBH2 - Bournemouth, BH23 7NW"> DBH2 - Bournemouth, BH23 7NW </option>
                        <option value="DCB1 - Huntingdon, PE29 6SY"> DCB1 - Huntingdon, PE29 6SY </option>
                  </select>
                      <div id="status-1"></div>
                  </div>

                </div>

                <!--step02######################################################################################-->

                  <!--Second Group-->
                <div class="tab" id="tab2">
                    <h4>Personal Information</h4>
                    <hr id="top-hr">
                  <div class="md-form">
                    <i class="fas fa-user prefix"></i>
                    <input onchange="checkstep2()" type="text" id="form-fname-lname" class="form-control" name="form-flname">
                    <label for="form-fname-lname" data-error="wrong" data-success="right"> Full Name <strong class="text-danger">*</strong></label>
                      <ul style="list-style: none"><li><div class="input-error" id="error-flname"></div></li></ul>
                  </div>
                  <div class="md-form">
                      <i class="fas fa-birthday-cake prefix"></i>
                      <input onchange="checkstep2()" type="date" id="form-birthday" class="form-control" max="2020-01-01" name="form-bday"">
                      <label for="birthday" data-error="wrong" data-success="right"> Birthday <strong class="text-danger">*</strong></label>
                      <ul style="list-style: none"><li><div class="input-error" id="error-bday"></div></li></ul>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-at prefix"></i>
                    <input onchange="checkstep2()" type="email" id="form-email" class="form-control" name="form-email">
                    <label for="form-email" data-error="wrong" data-success="right"> Email <strong class="text-danger">*</strong></label>
                      <ul style="list-style: none"><li><div id="error-email" class="input-error"></div></li></ul>
                  </div>
                  <div class="md-form">
                    <i class="fas fa-phone prefix"></i>
                    <input onchange="checkstep2()" type="tel" id="form-pn" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" name="form-pn">
                    <label for="form-pn" data-error="wrong" data-success="right"> Phone Number <strong class="text-danger">*</strong></label>
                      <ul style="list-style: none"><li><div id="error-pn" class="input-error"></div></li></ul>
                  </div>
                </div>

               <!--step03######################################################################################-->

                <div class="tab" id="tab3">
                    <h4>Initial Eligibility Check</h4>
                    <hr id="top-hr">

                    <label for="checkLicense" class="font-weight-bold">Driving License: Do you have Category B entitlement?<strong class="text-danger">*</strong></label>
                    <select onchange="categoryBChecking()" class="browser-default custom-select custom-select- mb-3 required" id="checkLicense" name="confirmlicence">
                        <option value="none" selected disabled>Please select an option</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div id="notify-sec-1"></div>

                    <div class="md-form" id="temperCategoryB">
                        <input type="date" id="dateLicense" class="form-control" name="datecategoryb">
                        <label for="dateLicense" data-error="wrong" data-success="right">Date you obtained category b entitlement? <strong class="text-danger">*</strong></label>
                    </div>

                </div>
                <!--step04######################################################################################-->
                <div class="tab">
                    <h4>Pay Rates</h4>
                    <hr id="top-hr">
                    <p class="text-dark text-muted text-center justify-content-center text-muted">Please review this below table, this outline the rates upon which the Contractor and C&W </p>
                    <p class="text-dark text-muted text-center">Transport agree to provide and accept.</p>

                    <div class="justify-content-center">
                        <!--Table-->
                        <table class="table table-striped w-100 text-center">

                            <!--Table head-->
                            <thead>
                            <tr class="text-white" style="background-color: #396494">
                                <th colspan="2">DHP1 Rate Card (Per Route)</th>
                            </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                            <tr>
                                <th scope="row">Day Rate (standard parcel medium van)</th>
                                <td>€128.20</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Day Rate (standard parcel large van)</th>
                                <td>€148.20</td>
                            </tr>
                            <tr>
                                <th scope="row">Day Rate (remote debrief)</th>
                                <td>€128.20</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Day Rate (nursey root level 1)</th>
                                <td>€128.20</td>
                            </tr>
                            <tr>
                                <th scope="row">Day Rate (nursey root level 2)</th>
                                <td>€128.20</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">MFN 4HR</th>
                                <td>€80.00</td>
                            </tr>
                            <tr>
                                <th scope="row">MFN LV 5HR</th>
                                <td>€110.20</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Missort 6HR</th>
                                <td>€90.00</td>
                            </tr>
                            <tr>
                                <th scope="row">Re-Delivery 6HR</th>
                                <td>€90.00</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Re-Delivery 4HR</th>
                                <td>€60.00</td>
                            </tr>
                            <tr>
                                <th scope="row">Same Day 6HR</th>
                                <td>€90.00</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Same Day 4HR</th>
                                <td>€75.00</td>
                            </tr>
                            <tr>
                                <th scope="row">Rescue 2HR</th>
                                <td>€30.00</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Rescue 4HR</th>
                                <td>€65.00</td>
                            </tr>
                            <tr>
                                <th scope="row">Rescue 6HR</th>
                                <td>€90.00</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Standard Parcel 8HR</th>
                                <td>€112.20</td>
                            </tr>
                            <tr>
                                <th scope="row">Standard Parcel 6HR</th>
                                <td>€90.00</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Fuel Rate</th>
                                <td>€0.16p Per Routed Mile</td>
                            </tr>
                            <tr>
                                <th scope="row">Bring Your Own Device (BYOD)</th>
                                <td>€1.80 Per Day</td>
                            </tr>
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>
                    <h4>Vehicle</h4>
                    <p class="text-muted">rental/owner</p>
                    <hr id="top-hr">
                  <label for="checkNeedvehicle" class="font-weight-bold">Do you need a rental vehicle ?<strong class="text-danger">*</strong></label>
                  <select onchange="needVehicleChecking()" class="browser-default custom-select custom-select- mb-3 required" id="checkNeedvehicle" name="checkneedvehicle" required>
                      <option value="none" selected disabled>Please select an option</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                  </select>
                    <div id="notify-sec-2"></div>
                </div>
                  <!--step5######################################################################################-->
                  <div class="tab">
                      <h4>GDPR Consent</h4>
                      <p class="text-muted">Your consent is required</p>
                      <hr id="top-hr">
                      <p>This form (or its general format using another medium e.g. on a website) may be used to provide explicit consent to the processing of personal data under the provisions of the European Union General Data Protection Regulation (GDPR). It should be used in conjunction with an appropriate privacy notice.</p>
                      <p>This form asks for your consent to allow us to use your personal data for the reasons stated below. You should only sign it if you want to give us your consent.</p>
                      <p class="font-weight-bold">Who are we ?</p>
                      <p>The name of the organization asking you for consent to use your information is:</p>
                      <p>Driving Boss Ltd and Accurate background check.</p>
                      <p>We would like to use the following information about you:</p>
                      <ul>
                          <li>Passport, Birth Certificate or National ID</li>
                          <li>Driving License</li>
                          <li>National Insurance Number</li>
                          <li>Proof of Address</li>
                          <li>Address History</li>
                      </ul>
                      <p class="font-weight-bold">Why would we like to use your information ?</p>
                      <p>To apply for a Criminal Background check trough “Accurate” and complete an initial and periodic check of your driving licence (DVLA check, UK licence holders).</p>
                      <p class="font-weight-bold">What will we do with your information ?</p>
                      <p>Keep it on our safe data base for 6 years and one day with no access.</p>
                      <p class="font-weight-bold">How to withdraw your consent</p>
                      <p>You can withdraw the consent you are giving on this form at any time. You can do this by emailing at contact@cnwtransport.com.</p>
                      <hr id="top-hr">
                      <p class="font-weight-bold">Declaration <span class="text-danger">*</span></p>
                      <!-- Default indeterminate -->
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkagree1()" type="checkbox" class="custom-control-input" id="agree1" name="agree-1" required>
                          <label class="custom-control-label" for="agree1">I have read, understood and agree to give consent set out above.</label>
                      </div>
                  </div>
                  <!--step6######################################################################################-->
                  <div class="tab">
                      <h4>Policy</h4>
                      <p class="text-muted">Working Hours & Pay</p>
                      <hr id="top-hr">
                      <p class="font-weight-bold">Pay Policy</p>
                      <p>This document lays out our internal policy and procedures for payments and expenses for contractors providing services to Driving Boss. The policy explains when and how payments will be made. These procedures are specific to Driving Boss. </p>
                      <p>This policy covers:</p>
                      <ul>
                          <li>When Driving Boss Contractors receive payments</li>
                          <li>How Driving Boss Contractors receive payments</li>
                          <li>Your responsibilities in paying tax and national insurance</li>
                          <li>What to do if there is a problem</li>
                          <li>Overtime Hours</li>
                          <li>Bonuses and Incentives</li>
                          <li>Alternative Work Schedules</li>
                          <li>Timekeeping Responsibilities</li>
                      </ul>
                      <p class="font-weight-bold">Who does this policy apply to ?</p>
                      <p class="font-weight-bold">All Contractors providing services to Driving Boss.</p>
                      <ol>
                          <li>Earnings are paid weekly, 3 weeks in arrears on each Friday. Payment can be made at any time during the day and receiving your payment may depend on your bank processing times. First payment may be made in week 2 for training payments only,</li>
                          <li>Driving Boss will make a BACS transfer directly to your designated bank account, details provided by you in writing at the time of sign-up.</li>
                          <li>Self-employed contractors aren’t paid through PAYE, and they don’t have the employment rights and responsibilities of employees. Employment law doesn’t cover self-employed people in most cases because they are their own boss. As a self-employed individual, generally you are required to file an annual return and pay estimated tax quarterly. Self-employed individuals must pay income tax and national insurance contributions. National Insurance contributions is a tax paid on earnings to build your entitlement to certain state benefits. </li>
                          <li>If you experience any difficulties with payments your immediate point of contact should be your on-site supervisor (POC). If you cannot reach resolution with your on-site supervisor, please contact your area manager.</li>
                          <li>The rate you receive is for the day, the rate or payment is not on an hourly basis. However, if you do take on work above or over your allocation, additional payments may be made, the amount quoted beforehand.</li>
                          <li>Bonuses are paid in-line with key performance indicators provided by the contractor. We collate data and when a bonus is payable, you are notified of how much and when this will be paid. The amount paid is relative to level of performance accomplished. Incentives may be offered at times; details of any ongoing incentive will be communicated to contractors by the on-site supervisor or area manager.</li>
                          <li>Your working schedule is primarily based upon the volume or quantity of routes provided to Driving Boss by the contractor. We do not guarantee availability; however, we do operate fairness policies and do try to meet the needs of individual contractors. For this reason, a non-consistent work schedule may be offered. If you require a specific working schedule, please discuss this with your on-site supervisor.</li>
                          <li>It is imperative that we are punctual to loading times stated. Loading times are announced each day for the following day. However, if in doubt, please consult your on-site supervisor.</li>
                      </ol>
                      <p class="font-weight-bold">Working Hours</p>
                      <p>It is expected that you not spend more than 10 hours per day on the road delivering packages (excluding break times). If during your route you think you will not be able to deliver all packages within this period, we expect you to let the Point of Contact know immediately. You can take breaks at your discretion, but we expect you to take a break of at least 30 minutes during your route. We expect you to be off duty for at least one 24-hour period in each 7-day period. If you are accidentally scheduled to deliver packages for more than 6 consecutive days let the Point of Contact know immediately so we can address the mistake.</p>
                      <!-- Default indeterminate -->
                      <hr id="top-hr">
                      <p class="font-weight-bold">Declaration <span class="text-danger">*</span></p>
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkagree2()" type="checkbox" class="custom-control-input" id="agree2" name="agree-2" required>
                          <label class="custom-control-label" for="agree2"> I have read, understood and agree to the Health & Safety terms set out.</label>
                      </div>
                  </div>
                  <!--step7######################################################################################-->
                  <div class="tab">
                      <h4>Medical Fitness</h4>
                      <p class="text-muted">Declaration and Confirmation</p>
                      <hr id="top-hr">
                      <p>All Couriers wishing to provide services must be medically fit enough to undertake the role as a multi-drop delivery driver. The core role involves a significant amount of driving and the safe manual handling, manipulation, sorting and delivery of large numbers of consignments.</p>
                      <p>Please confirm your fitness to provide services listed below by ticking each section and then signing and dating the bottom of the form.</p>
                      <p class="font-weight-bold">I confirm <span class="text-danger">*</span></p>
                      <div class="custom-control custom-checkbox">
                        <input onchange="checkagree310()" type="checkbox" class="custom-control-input" id="confirm1" name="confirm-1" required>
                        <label class="custom-control-label" for="confirm1">I'm physically fit and able to fulfil the demands of a multi-drop delivery driver.</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input onchange="checkagree310()" type="checkbox" class="custom-control-input" id="confirm2" name="confirm-2" required>
                        <label class="custom-control-label" for="confirm2">I'm not taking any medication that will hinder my ability to drive or manipulate consignments in a safe manner.</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input onchange="checkagree310()" type="checkbox" class="custom-control-input" id="confirm3" name="confirm-3" required>
                        <label class="custom-control-label" for="confirm3">I have no medical conditions that will hinder my ability to drive or manipulate consignments in a safe manner.</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkagree310()" type="checkbox" class="custom-control-input" id="confirm5" name="confirm-5" required>
                          <label class="custom-control-label" for="confirm5">I will comply with all manual handling guidelines and not place myself in danger by using unsafe working practices.</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkagree310()" type="checkbox" class="custom-control-input" id="confirm6" name="confirm-6" required>
                          <label class="custom-control-label" for="confirm6">I have no mental or physical conditions that have not been reported to DVLA which could affect my ability to drive safely.</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkagree310()" type="checkbox" class="custom-control-input" id="confirm7" name="confirm-7" required>
                          <label class="custom-control-label" for="confirm7">I will inform Driving Boss if my ability to drive safely or handle consignments changes in the future.</label>
                      </div>
                      <hr id="top-hr">
                      <p class="font-weight-bold">Declaration <span class="text-danger">*</span></p>
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkagree310()" type="checkbox" class="custom-control-input" id="agree3" name="agree-3" required>
                          <label class="custom-control-label" for="agree3"> I have read, understood and agree to the Health & Safety terms set out.</label>
                      </div>
                  </div>
                  <!--step8######################################################################################-->
                  <div class="tab">
                      <h4>Non-Disclosure</h4>
                      <p class="text-muted">Including Data Protection Agreement</p>
                      <hr id="top-hr">
                      <p>During the course of your work/time at Driving Boss(“us”), you will be invited to visit our cleints' premises, where you may receive information relating to us and our clients that is not known to the general public and is confidential and important to us. We call this our “Confidential Information”.</p>
                      <p>Our Confidential Information includes, among other things,</p>
                      <ul>
                          <li>The way that we work</li>
                          <li>The layout of our premises</li>
                          <li>The technology that we use including computers and machinery</li>
                          <li>That goods that we stock and the way that they are stored</li>
                          <li>The people we work and interact with</li>
                          <li>The people and companies who deliver to us and collect from us</li>
                          <li>Any details about our customers, including their names, addresses and what they buy</li>
                          <li>Anything to do with finance</li>
                          <li>Anything to do with advertising or marketing plans</li>
                          <li>Anything that you hear</li>
                      </ul>
                      <p class="font-weight-bold">Our Confidential Information is very important to our business. It is vital to us that it does not become known to other companies. We will take all legal steps necessary to protect our Confidential Information.</p>
                      <p>You must agree to the following commitments;</p>
                      <ol>
                          <li>You will not disclose our Confidential Information to anyone or any company.</li>
                          <li>You will use our Confidential Information only to make up your mind about working with us.</li>
                          <li> You will notify us immediately if you discover that our Confidential Information has been disclosed, however it happens.</li>
                          <li>All our Confidential Information will remain our property.</li>
                          <li>You will not trade stocks or shares based on our Confidential Information.</li>
                          <li>You will return any materials containing our Confidential Information to us if we ask you to.</li>
                          <li>You also agree that you will not disclose information to us that is confidential to you or anyone else.</li>
                      </ol>
                      <hr id="top-hr">
                      <p>This is a legal agreement.</p>
                      <p>If a provision of this agreement is held invalid under any applicable law, such invalidity will not affect any other provision of this agreementthat can be given effect without the invalid provision. Further, all terms and conditions of this agreement will be deemed enforceable to the fullest extent permissible under applicable law, and, when necessary, the court is requested to reform any and all terms or conditions to give them such effect.</p>
                      <p>We are relying upon your promise to comply strictly with this agreement. Any violation of this agreement may cause substantial and irreparable harm to us or our clients. Accordingly, without limiting any other available remedies, this agreement is specifically enforceable by us and our clients.</p>
                      <p>Any failure by us or our clients to enforce your strict performance of any provision of this agreement will not constitute a waiver of our right to subsequently enforce such provision or any other provision of this agreement.</p>
                      <hr id="top-hr">
                      <p class="font-weight-bold">Declaration <span class="text-danger">*</span></p>
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkagree4()" type="checkbox" class="custom-control-input" id="agree4" name="agree-4" required>
                          <label class="custom-control-label" for="agree4">I understand and agree to abide by the promises I make in this agreement to protect Driving Boss's and it's clients' Confidential Information. I agree that my promises also apply for the benefit of other Driving Boss's clients' companies.</label>
                      </div>
                  </div>
                  <!--step9######################################################################################-->
                <div class="tab">
                    <h4>Stop & Search Policy</h4>
                    <hr id="top-hr">
                    <p>Please read the following carefully and sign and the end to confirm that you understand and agree This policy applies to all employees and anyone working at or visiting Amazon’s sites. </p>
                    <p>Amazon reserves the right to search you and/or any of your property on its premises (this includes Amazon’s car parks) and you agree that Amazon may search you/and or your property:</p>
                    <ul>
                        <li>at any time, if Amazon honestly and reasonably believes or suspects that you may be in possession of, have destroyed, tampered with, concealed or handled stolen goods or has evidence of any theft or attempted theft; or</li>
                        <li>if it reasonably believes or suspects that you may have drugs and or alcohol and/or other inappropriate items in the workplace; or</li>
                        <li>as part of its random searching policy; or</li>
                        <li>when you enter or leave Amazon’s premises.</li>
                    </ul>
                    <p>Issued badges must be worn and displayed at all times onsite.</p>
                    <p>Failure to comply with this may result in restricting your access to Amazon building.</p>
                    <hr id="top-hr">
                    <p class="font-weight-bold">Declaration <span class="text-danger">*</span></p>
                    <div class="custom-control custom-checkbox">
                        <input onchange="checkagree5()" type="checkbox" class="custom-control-input" id="agree5" name="agree-5" required>
                        <label class="custom-control-label" for="agree5"> I understand and agree to abide by the policies set out in this document.</label>
                    </div>
                </div>

                <!--step10######################################################################################-->
                <div class="tab">
                    <h4>Payment Processing and Tax</h4>
                    <hr id="top-hr">
                    <div class="justify-content-center text-center">
                        <img class="form-image" width="120px" height="120px" src="https://www.jotform.com/uploads/MVHarper/form_files/Securitax.5e86167b38e927.49464580.png">
                    </div>
                    <p>It is important to Driving Boss that the subcontractors we use, operate compliantly and truly understand all the benefits of being self-employed, such as generating additional income through the governments Flat Rate VAT Scheme, which is why we recommend you engage Securitax LTD to help with your tax affairs.</p>
                    <div class="justify-content-center">
                        <p class='font-weight-bold'>You should read the following statements and only proceed if you agree.</p>
                        <ul>
                            <li>I understand this is NOT a role of employment.</li>
                            <li>I understand I will NOT receive Holiday Pay, Sickness Pay, Employment Rights or a Payslip.</li>
                            <li>I understand I will NOT be treated under worker status and will NOT be entitled to worker rights.</li>
                        </ul>
                        <p>If you do not understand the above, you must not proceed with this application and seek independent legal advice.</p>
                        <p>As a self-employed subcontractor there are certain legal requirements that you are responsible for. As part of our payment service we use a third-party payment provider, Securitax LTD, who can assist with your taxation responsibilities. Securitax can assist with all of the following:</p>
                        <ul>
                            <li>Raising invoices</li>
                            <li>Assisting with weekly payments</li>
                            <li>Registration with HMRC for Self-Assessment</li>
                            <li>Processing of yearly tax returns on time</li>
                            <li>Assisting with payment of tax to HMRC</li>
                            <li>Registration with HMRC for VAT</li>
                            <li>Preparation of quarterly VAT Returns</li>
                            <li>Assisting with payment of VAT to HMRC </li>
                        </ul>
                    </div>
                    <p>Please choose one of the following Securityax services:</p>
                    <hr id="top-hr">
                    <label for="choosesecurity" class="font-weight-bold">Choose<strong class="text-danger">*</strong></label>
                    <select onchange="checkstep10()" class="browser-default custom-select custom-select- mb-3 required" id="choosesecurity" name="choosesecuritytype" required>
                        <option value="none" selected disabled>Please select an option</option>
                        <option value="Full Security Service">Full Security Services(€15 P/Week)</option>
                        <option value="Payment and Invoce Only">Payment and Invoce Only (€12.5 P/Week)</option>
                    </select>
                    <hr id="top-hr">
                    <p class="font-weight-bold">Declaration <span class="text-danger">*</span></p>
                    <div class="custom-control custom-checkbox">
                        <input onchange="checkstep10()" type="checkbox" class="custom-control-input" id="agree6" name="agree-6" required>
                        <label class="custom-control-label" for="agree6"> I consent to share my personal information with Securitax to discuss payment, tax and invoicing services.</label>
                    </div>
                </div>
                <!--step11######################################################################################-->
                <div class="tab">
                    <h4>Payment Details</h4>
                    <hr id="top-hr">
                    <p>Please provide details for your designated account to receieve payments. You can skip this section if you do not wish to provide these details now.</p>
                    <p><span class="font-weight-bold">Please note:</span> Payments will be made directly to your account via bank transfer each Friday according to the payment schedule. Your bank processing time may vary when funds clear.</p>
                    <span class="font-weight-bold" style="font-size: 20px">Account Holder Information</span>
                    <div class="md-form">
                        <input onchange="checkstep11()" type="text" id="ah-fname" class="form-control" name="payment-fname" required>
                        <label for="ah-fname" data-error="wrong" data-success="right">First Name <strong class="text-danger">*</strong></label>
                        <div class="input-error" id="error-ah-fname"></div>
                    </div>
                    <div class="md-form">
                        <input onchange="checkstep11()" type="text" id="ah-lname" class="form-control" name="payment-lname" required>
                        <label for="ah-lname" data-error="wrong" data-success="right">Last Name <strong class="text-danger">*</strong></label>
                        <div class="input-error" id="error-ah-lname"></div>
                    </div>
                    <div class="md-form">
                        <input onchange="checkstep11()" type="text" id="ah-sortcode" class="form-control" name="payment-sortcode" required>
                        <label for="ah-sortcode" data-error="wrong" data-success="right">Sort Code (ex: 12345) <strong class="text-danger">*</strong></label>
                        <div class="input-error" id="error-sort-code"></div>
                    </div>
                    <div class="md-form">
                        <input onchange="checkstep11()" type="text" id="ah-accno" class="form-control" name="payment-accno" required>
                        <label for="ah-accno" data-error="wrong" data-success="right">Account Number (ex: 12345678 or 123-2312-123) <strong class="text-danger">*</strong></label>
                        <div class="input-error" id="error-acc-no"></div>
                    </div>
                    <div class="md-form">
                        <input onchange="checkstep11()" type="text" id="ah-bankname" class="form-control" name="payment-bankname" required>
                        <label for="ah-bankname" data-error="wrong" data-success="right">Bank Name<strong class="text-danger">*</strong></label>
                        <div class="input-error" id="error-bank-name"></div>
                    </div>
                    <hr id="top-hr">
                    <p class="font-weight-bold">Declaration <span class="text-danger">*</span></p>
                    <div class="custom-control custom-checkbox">
                        <input onchange="checkstep11()" type="checkbox" class="custom-control-input" id="agree7" name="agree-7" required>
                        <label class="custom-control-label" for="agree7"> I confirm the details provided are true and correct and wish to receive payments to the provided account above.</label>
                    </div>
                </div>
                <!--steap12######################################################################################-->
                  <div class="tab">
                      <h4>Health & Safety</h4>
                      <p class="text-muted">Confirmation of Understanding</p>
                      <hr id="top-hr">
                      <p>Please carefully review the Health & Safety information below:</p>
                      <p class="font-weight-bold">Fire and Evacuations</p>
                      <p>Fire alarm ringing continuously:</p>
                      <ul>
                          <li>Calmly evacuate the building following the fire exit signs</li>
                          <li>Do not stop to collect your personal belongings</li>
                          <li>Report to the assembly point that was indicated during your site tour</li>
                          <li>Answer your name when requested</li>
                          <li>Do not re-enter the building until instructed to do so</li>
                          <li>Do not smoke while you are outside</li>
                          <li>Fire Alarms are tested every week - Local signage informs you of the exact time(s)</li>
                          <li>First Aiders are on site - The names of Fire Marshalls and First Aiders are available at reception </li>
                      </ul>
                      <p></p>
                      <p class="font-weight-bold">Security and PPE</p>
                      <p>Safety footwear and a high visibility vests and key chains are mandatory in the Delivery Station during all activities. Drivers always wear yellow. If you lose or forget your badge you will not be able to access the delivery station. You must make sure your badge is on show. Each person on site wears a different colour hi-vis to represent a different role;</p>
                      <uL>
                          <li>Drivers wear yellow</li>
                          <li>Yard Marshalls wear orange</li>
                          <li>Delivery station operational teams wears yellow and blue</li>
                          <li>Point of contacts wear orange (with company logo on back) </li>
                      </uL>
                      <p></p>
                      <p class="font-weight-bold">Yard Safety</p>
                      </uL>
                          <li>Always wear safety footwear and high visibility clothing (Yellow for Drivers);</li>
                          <li>Keep within the designated speed limit (10mph most commonly);</li>
                          <li>Follow the footpaths and use zebra crossings where available;</li>
                          <li>Look for eye contact with other drivers so they know that you are there;</li>
                          <li>When on site keep your hazard lights on;</li>
                          <li>Only smoke in designated areas</li>
                          <li>Inform Yard Marshall/Security/your Manager of any breaches in the rules.</li>
                      </ul>
                      <p class="font-weight-bold">Driving Safety</p>
                      <p>Your safety and the safety of the person receiving a parcel and members of the public are our main priority. Always drive in a safe, responsible and considerate manner, within the speed limits as required by law. Always wear a seatbelt in a moving vehicle. When you park your vehicle consider: is it safe? Are you causing an obstruction to other motorists or a nuisance to pedestrians? Never leave your keys in the ignition when you leave the vehicle. Never go out on the road in a vehicle you suspect is not in a roadworthy condition. It is your responsibility to perform routine vehicle checks and report any issues to the Delivery Station Point of Contact. Report traffic accidents you are involved in while delivering packages immediately to your Delivery Station Point of Contact.</p>
                      <p class="font-weight-bold">Driving Route and Hours</p>
                      <p>It is expected that you not spend more than 10 hours per day on the road delivering packages (excluding break times). If during your route you think you will not be able to deliver all packages within this period, we expect you to let the Point of Contact know immediately. You can take breaks at your discretion, but we expect you to take a break of at least 30 minutes during your route. We expect you to be off duty for at least one 24-hour period in each 7-day period. If you are accidentally scheduled to deliver packages for more than 6 consecutive days let the Point of Contact know immediately so we can address the mistake.</p>
                      <hr id="top-hr">
                      <p class="font-weight-bold">Declaration <span class="text-danger">*</span></p>
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkstep12()" type="checkbox" class="custom-control-input" id="agree8" name="agree-8" required>
                          <label class="custom-control-label" for="agree8"> I have read, understood and agree to the Health & Safety terms set out.</label>
                      </div>
                  </div>
                <!--steap13######################################################################################-->
                  <div class="tab">
                      <h4>Accurate Background</h4>
                      <p class="text-muted">Including DBS Check - Release Disclosure and Consent</p>
                      <hr id="top-hr">
                      <div class="justify-content-center text-center" >
                        <img class="form-image" id="accurateback-img" src="https://www.jotform.com/uploads/MVHarper/form_files/accdbs.5e88b46b4862f3.74103303.png">
                      </div>
                      <div class="justify-content-center text-center">
                          <p class="font-weight-bold">RELEASE DISCLOSURE AND CONSENT</p>
                      </div>
                      <p>In connection with your application for services and potential engagement with (the "Company"), Accurate Back ground has been engaged to conduct background screening on the Company's behalf.</p>
                      <p>By submitting your information and signing you knowingly and voluntarily consent to the background checking process. You acknowledge</p>
                      <p>that you have been notified by the Company about the process, including what information may be collected about you, the purposes for which the information collected may be used, the fact that third parties may have access to that information, the fact that such information may be transferred outside of your country to countries that may have different laws protecting personally identifiable data, and the process by which you may access the data collected for the purpose of correction or deletion of erroneous data.</p>
                      <p>Such screening services may include, but are not limited to, criminal and civil records checking, education, qualification and employment history verification, and professional license verification. The nature and scope of the screening will be determined by the Company and might not include all possible checks. All screening will be conducted within the limits of applicable laws.</p>
                      <p>Accurate Background and any agents acting on its behalf will conduct the background checking process described above. Information collected about you during the background check process by Accurate Background and any agents acting on its behalf will be provided to the Company and will not be used for a purpose other than as determined by the Company. Accurate Background may also need to disclose personally identifiable information about you to third parties such as governmental agencies, educational institutions, previous employers and research partners in order to verify the information you have provided.</p>
                      <p class="-underline">Accurate Background adheres to the principles and complies with the requirements of Directive 95/46/EC of the European Commission. For</p>
                      <p>more information about Accurate Background's data protection and privacy policies, please visit the website at <a target="_blank" class="text-blue" href="http://www.accuratebackground.com/">www.accuratebackground.com</a></p>
                      <p>By submitting your information and signing, you hereby authorize Accurate Background, and any agents, to verify information related to your criminal and civil records, education, qualification and employment history verification, and professional license verification. All screening will be conducted to the extent applicable law allows. You understand that Accurate Background, and any agents, will undertake reasonable steps to protect, secure and keep confidential the information about you that is collected and you understand, and</p>
                      <p>agree, that it will be disclosed to the Company or its affiliates for purposes determined by the Company. You understand and agree that as part of this process your personally identifiable information, including sensitive data, may be transferred outside of the country in which it was collected, including to a country that may have different laws protecting personally identifiable data. You expressly agree to the transfer of your personally identifiable information from the country in which it was collected to: Accurate Background, the agents acting on its behalf, and the Company and its affiliates, wherever located.</p>
                      <p>The Disclosure and Barring Service will refer the details provided on this application form to government and law enforcement bodies in</p>
                      <p>accordance with any relevant legislation. The details provided to these bodies will be used for identifying possible matches to records held by</p>
                      <p>them. Where such a match is established, data may be released to the DBS for inclusion on any certificate issued. The details provided on</p>
                      <p>this form may be used to update the records held by the bodies specified above. The details provided on the application form may be</p>
                      <p>used to verify your identity for authentication purposes. The DBS may use any information provided by the DBS on a certificate or otherwise</p>
                      <p>held by the DBS to inform any of its barring decisions made under its powers within the Safeguarding Vulnerable Groups Act 2006.</p>
                      <p>Guidance and criteria on the filtering of these cautions and convictions can be found at <a class="text-blue" target="_blank" href="https://www.gov.uk/">www.gov.uk</a>.</p>
                      <p>I confirm that I understand that it is a requirement of the DBS (formerly CRB)'s Code of Practice that all Registered Bodies must treat Disclosure applicants who have a criminal record fairly and do not discriminate because of a conviction or other information revealed. It also obliges Registered Bodies to have a written policy on the recruitment of ex-offenders; a copy of which can be given to Disclosure applicants at the outset of the recruitment process. I confirm that I have been made aware and have been given copies or have access to the DISCLOSURE SERVICES Policy on the Recruitment of Ex-offenders, Equal Opportunities Policies, and the DBS (formerly CRB) Code of Practice April 2009 at the outset of my recruitment. I confirm my understanding that my Disclosure information is only used for the specific purpose for which it was requested and for which my full consent has been given. I confirm that the information that I have provided in support of this application is complete and true and understand that knowingly to make a false statement for this purpose is a criminal offence.</p>
                      <hr id="top-hr">
                      <p class="font-weight-bold">Declaration <span class="text-danger">*</span></p>
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkstep13()" type="checkbox" class="custom-control-input" id="agree9" name="agree-9" required>
                          <label class="custom-control-label" for="agree9"> I have read, understood and agree to the release disclosure and give consent as outlined above.</label>
                      </div>
                      <hr id="top-hr">
                      <p>This post is not exempt from the Rehabilitation of Offenders Act 1974. We only ask applicants to disclose convictions which are not yet spent under the Rehabilitation of Offenders Act 1974. If you are unsure whether your conviction is ‘spent’, or whether you may need to disclose</p>
                      <p>it when applying to a specific job, please contact the Nacro Advice Service on 0300 123 1999 or email: <a href="mailto:helpline@nacro.org.uk">helpline@nacro.org.uk.</a></p>
                  </div>
                <!--step14######################################################################################-->
                  <div class="tab">
                      <h4>Accurate Background</h4>
                      <p class="text-muted">Additional Personal Information</p>
                      <hr id="top-hr">
                      <p>In addition to the personal information already collected, please complete the additional information required to successfully submit a DBS request.</p>
                      <div class="form-group">
                      <label for="choosecountry-1" class="font-weight-bold">Birth Country<strong class="text-danger">*</strong></label>
                      <select class="browser-default custom-select custom-select-mb-3 required" id="choosecountry-1" name="birthcountry" required>
                              <option value="none" disabled>Please select a country</option>
                              <option value="Afganistan" selected>Afghanistan</option>
                              <option value="Albania">Albania</option>
                              <option value="Algeria">Algeria</option>
                              <option value="American Samoa">American Samoa</option>
                              <option value="Andorra">Andorra</option>
                              <option value="Angola">Angola</option>
                              <option value="Anguilla">Anguilla</option>
                              <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                              <option value="Argentina">Argentina</option>
                              <option value="Armenia">Armenia</option>
                              <option value="Aruba">Aruba</option>
                              <option value="Australia">Australia</option>
                              <option value="Austria">Austria</option>
                              <option value="Azerbaijan">Azerbaijan</option>
                              <option value="Bahamas">Bahamas</option>
                              <option value="Bahrain">Bahrain</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="Barbados">Barbados</option>
                              <option value="Belarus">Belarus</option>
                              <option value="Belgium">Belgium</option>
                              <option value="Belize">Belize</option>
                              <option value="Benin">Benin</option>
                              <option value="Bermuda">Bermuda</option>
                              <option value="Bhutan">Bhutan</option>
                              <option value="Bolivia">Bolivia</option>
                              <option value="Bonaire">Bonaire</option>
                              <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                              <option value="Botswana">Botswana</option>
                              <option value="Brazil">Brazil</option>
                              <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                              <option value="Brunei">Brunei</option>
                              <option value="Bulgaria">Bulgaria</option>
                              <option value="Burkina Faso">Burkina Faso</option>
                              <option value="Burundi">Burundi</option>
                              <option value="Cambodia">Cambodia</option>
                              <option value="Cameroon">Cameroon</option>
                              <option value="Canada">Canada</option>
                              <option value="Canary Islands">Canary Islands</option>
                              <option value="Cape Verde">Cape Verde</option>
                              <option value="Cayman Islands">Cayman Islands</option>
                              <option value="Central African Republic">Central African Republic</option>
                              <option value="Chad">Chad</option>
                              <option value="Channel Islands">Channel Islands</option>
                              <option value="Chile">Chile</option>
                              <option value="China">China</option>
                              <option value="Christmas Island">Christmas Island</option>
                              <option value="Cocos Island">Cocos Island</option>
                              <option value="Colombia">Colombia</option>
                              <option value="Comoros">Comoros</option>
                              <option value="Congo">Congo</option>
                              <option value="Cook Islands">Cook Islands</option>
                              <option value="Costa Rica">Costa Rica</option>
                              <option value="Cote DIvoire">Cote DIvoire</option>
                              <option value="Croatia">Croatia</option>
                              <option value="Cuba">Cuba</option>
                              <option value="Curaco">Curacao</option>
                              <option value="Cyprus">Cyprus</option>
                              <option value="Czech Republic">Czech Republic</option>
                              <option value="Denmark">Denmark</option>
                              <option value="Djibouti">Djibouti</option>
                              <option value="Dominica">Dominica</option>
                              <option value="Dominican Republic">Dominican Republic</option>
                              <option value="East Timor">East Timor</option>
                              <option value="Ecuador">Ecuador</option>
                              <option value="Egypt">Egypt</option>
                              <option value="El Salvador">El Salvador</option>
                              <option value="Equatorial Guinea">Equatorial Guinea</option>
                              <option value="Eritrea">Eritrea</option>
                              <option value="Estonia">Estonia</option>
                              <option value="Ethiopia">Ethiopia</option>
                              <option value="Falkland Islands">Falkland Islands</option>
                              <option value="Faroe Islands">Faroe Islands</option>
                              <option value="Fiji">Fiji</option>
                              <option value="Finland">Finland</option>
                              <option value="France">France</option>
                              <option value="French Guiana">French Guiana</option>
                              <option value="French Polynesia">French Polynesia</option>
                              <option value="French Southern Ter">French Southern Ter</option>
                              <option value="Gabon">Gabon</option>
                              <option value="Gambia">Gambia</option>
                              <option value="Georgia">Georgia</option>
                              <option value="Germany">Germany</option>
                              <option value="Ghana">Ghana</option>
                              <option value="Gibraltar">Gibraltar</option>
                              <option value="Great Britain">Great Britain</option>
                              <option value="Greece">Greece</option>
                              <option value="Greenland">Greenland</option>
                              <option value="Grenada">Grenada</option>
                              <option value="Guadeloupe">Guadeloupe</option>
                              <option value="Guam">Guam</option>
                              <option value="Guatemala">Guatemala</option>
                              <option value="Guinea">Guinea</option>
                              <option value="Guyana">Guyana</option>
                              <option value="Haiti">Haiti</option>
                              <option value="Hawaii">Hawaii</option>
                              <option value="Honduras">Honduras</option>
                              <option value="Hong Kong">Hong Kong</option>
                              <option value="Hungary">Hungary</option>
                              <option value="Iceland">Iceland</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="India">India</option>
                              <option value="Iran">Iran</option>
                              <option value="Iraq">Iraq</option>
                              <option value="Ireland">Ireland</option>
                              <option value="Isle of Man">Isle of Man</option>
                              <option value="Israel">Israel</option>
                              <option value="Italy">Italy</option>
                              <option value="Jamaica">Jamaica</option>
                              <option value="Japan">Japan</option>
                              <option value="Jordan">Jordan</option>
                              <option value="Kazakhstan">Kazakhstan</option>
                              <option value="Kenya">Kenya</option>
                              <option value="Kiribati">Kiribati</option>
                              <option value="Korea North">Korea North</option>
                              <option value="Korea Sout">Korea South</option>
                              <option value="Kuwait">Kuwait</option>
                              <option value="Kyrgyzstan">Kyrgyzstan</option>
                              <option value="Laos">Laos</option>
                              <option value="Latvia">Latvia</option>
                              <option value="Lebanon">Lebanon</option>
                              <option value="Lesotho">Lesotho</option>
                              <option value="Liberia">Liberia</option>
                              <option value="Libya">Libya</option>
                              <option value="Liechtenstein">Liechtenstein</option>
                              <option value="Lithuania">Lithuania</option>
                              <option value="Luxembourg">Luxembourg</option>
                              <option value="Macau">Macau</option>
                              <option value="Macedonia">Macedonia</option>
                              <option value="Madagascar">Madagascar</option>
                              <option value="Malaysia">Malaysia</option>
                              <option value="Malawi">Malawi</option>
                              <option value="Maldives">Maldives</option>
                              <option value="Mali">Mali</option>
                              <option value="Malta">Malta</option>
                              <option value="Marshall Islands">Marshall Islands</option>
                              <option value="Martinique">Martinique</option>
                              <option value="Mauritania">Mauritania</option>
                              <option value="Mauritius">Mauritius</option>
                              <option value="Mayotte">Mayotte</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Midway Islands">Midway Islands</option>
                              <option value="Moldova">Moldova</option>
                              <option value="Monaco">Monaco</option>
                              <option value="Mongolia">Mongolia</option>
                              <option value="Montserrat">Montserrat</option>
                              <option value="Morocco">Morocco</option>
                              <option value="Mozambique">Mozambique</option>
                              <option value="Myanmar">Myanmar</option>
                              <option value="Nambia">Nambia</option>
                              <option value="Nauru">Nauru</option>
                              <option value="Nepal">Nepal</option>
                              <option value="Netherland Antilles">Netherland Antilles</option>
                              <option value="Netherlands">Netherlands (Holland, Europe)</option>
                              <option value="Nevis">Nevis</option>
                              <option value="New Caledonia">New Caledonia</option>
                              <option value="New Zealand">New Zealand</option>
                              <option value="Nicaragua">Nicaragua</option>
                              <option value="Niger">Niger</option>
                              <option value="Nigeria">Nigeria</option>
                              <option value="Niue">Niue</option>
                              <option value="Norfolk Island">Norfolk Island</option>
                              <option value="Norway">Norway</option>
                              <option value="Oman">Oman</option>
                              <option value="Pakistan">Pakistan</option>
                              <option value="Palau Island">Palau Island</option>
                              <option value="Palestine">Palestine</option>
                              <option value="Panama">Panama</option>
                              <option value="Papua New Guinea">Papua New Guinea</option>
                              <option value="Paraguay">Paraguay</option>
                              <option value="Peru">Peru</option>
                              <option value="Phillipines">Philippines</option>
                              <option value="Pitcairn Island">Pitcairn Island</option>
                              <option value="Poland">Poland</option>
                              <option value="Portugal">Portugal</option>
                              <option value="Puerto Rico">Puerto Rico</option>
                              <option value="Qatar">Qatar</option>
                              <option value="Republic of Montenegro">Republic of Montenegro</option>
                              <option value="Republic of Serbia">Republic of Serbia</option>
                              <option value="Reunion">Reunion</option>
                              <option value="Romania">Romania</option>
                              <option value="Russia">Russia</option>
                              <option value="Rwanda">Rwanda</option>
                              <option value="St Barthelemy">St Barthelemy</option>
                              <option value="St Eustatius">St Eustatius</option>
                              <option value="St Helena">St Helena</option>
                              <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                              <option value="St Lucia">St Lucia</option>
                              <option value="St Maarten">St Maarten</option>
                              <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                              <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                              <option value="Saipan">Saipan</option>
                              <option value="Samoa">Samoa</option>
                              <option value="Samoa American">Samoa American</option>
                              <option value="San Marino">San Marino</option>
                              <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                              <option value="Saudi Arabia">Saudi Arabia</option>
                              <option value="Senegal">Senegal</option>
                              <option value="Seychelles">Seychelles</option>
                              <option value="Sierra Leone">Sierra Leone</option>
                              <option value="Singapore">Singapore</option>
                              <option value="Slovakia">Slovakia</option>
                              <option value="Slovenia">Slovenia</option>
                              <option value="Solomon Islands">Solomon Islands</option>
                              <option value="Somalia">Somalia</option>
                              <option value="South Africa">South Africa</option>
                              <option value="Spain">Spain</option>
                              <option value="Sri Lanka">Sri Lanka</option>
                              <option value="Sudan">Sudan</option>
                              <option value="Suriname">Suriname</option>
                              <option value="Swaziland">Swaziland</option>
                              <option value="Sweden">Sweden</option>
                              <option value="Switzerland">Switzerland</option>
                              <option value="Syria">Syria</option>
                              <option value="Tahiti">Tahiti</option>
                              <option value="Taiwan">Taiwan</option>
                              <option value="Tajikistan">Tajikistan</option>
                              <option value="Tanzania">Tanzania</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Togo">Togo</option>
                              <option value="Tokelau">Tokelau</option>
                              <option value="Tonga">Tonga</option>
                              <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                              <option value="Tunisia">Tunisia</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Turkmenistan">Turkmenistan</option>
                              <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                              <option value="Tuvalu">Tuvalu</option>
                              <option value="Uganda">Uganda</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Erimates">United Arab Emirates</option>
                              <option value="United States of America">United States of America</option>
                              <option value="Uraguay">Uruguay</option>
                              <option value="Uzbekistan">Uzbekistan</option>
                              <option value="Vanuatu">Vanuatu</option>
                              <option value="Vatican City State">Vatican City State</option>
                              <option value="Venezuela">Venezuela</option>
                              <option value="Vietnam">Vietnam</option>
                              <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                              <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                              <option value="Wake Island">Wake Island</option>
                              <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                              <option value="Yemen">Yemen</option>
                              <option value="Zaire">Zaire</option>
                              <option value="Zambia">Zambia</option>
                              <option value="Zimbabwe">Zimbabwe</option>
                      </select>

                      <label for="choosenationality" class="font-weight-bold">Birth Nationality<strong class="text-danger">*</strong></label>
                      <select onchange="checkstep14()" class="browser-default custom-select custom-select-mb-3 required" id="choosenationality" name="birthnationality" required>
                          <option value="none" selected disabled>Select a nationality</option>
                          <option value="afghan">Afghan</option>
                          <option value="albanian">Albanian</option>
                          <option value="algerian">Algerian</option>
                          <option value="american">American</option>
                          <option value="andorran">Andorran</option>
                          <option value="angolan">Angolan</option>
                          <option value="antiguans">Antiguans</option>
                          <option value="argentinean">Argentinean</option>
                          <option value="armenian">Armenian</option>
                          <option value="australian">Australian</option>
                          <option value="austrian">Austrian</option>
                          <option value="azerbaijani">Azerbaijani</option>
                          <option value="bahamian">Bahamian</option>
                          <option value="bahraini">Bahraini</option>
                          <option value="bangladeshi">Bangladeshi</option>
                          <option value="barbadian">Barbadian</option>
                          <option value="barbudans">Barbudans</option>
                          <option value="batswana">Batswana</option>
                          <option value="belarusian">Belarusian</option>
                          <option value="belgian">Belgian</option>
                          <option value="belizean">Belizean</option>
                          <option value="beninese">Beninese</option>
                          <option value="bhutanese">Bhutanese</option>
                          <option value="bolivian">Bolivian</option>
                          <option value="bosnian">Bosnian</option>
                          <option value="brazilian">Brazilian</option>
                          <option value="british">British</option>
                          <option value="bruneian">Bruneian</option>
                          <option value="bulgarian">Bulgarian</option>
                          <option value="burkinabe">Burkinabe</option>
                          <option value="burmese">Burmese</option>
                          <option value="burundian">Burundian</option>
                          <option value="cambodian">Cambodian</option>
                          <option value="cameroonian">Cameroonian</option>
                          <option value="canadian">Canadian</option>
                          <option value="cape verdean">Cape Verdean</option>
                          <option value="central african">Central African</option>
                          <option value="chadian">Chadian</option>
                          <option value="chilean">Chilean</option>
                          <option value="chinese">Chinese</option>
                          <option value="colombian">Colombian</option>
                          <option value="comoran">Comoran</option>
                          <option value="congolese">Congolese</option>
                          <option value="costa rican">Costa Rican</option>
                          <option value="croatian">Croatian</option>
                          <option value="cuban">Cuban</option>
                          <option value="cypriot">Cypriot</option>
                          <option value="czech">Czech</option>
                          <option value="danish">Danish</option>
                          <option value="djibouti">Djibouti</option>
                          <option value="dominican">Dominican</option>
                          <option value="dutch">Dutch</option>
                          <option value="east timorese">East Timorese</option>
                          <option value="ecuadorean">Ecuadorean</option>
                          <option value="egyptian">Egyptian</option>
                          <option value="emirian">Emirian</option>
                          <option value="equatorial guinean">Equatorial Guinean</option>
                          <option value="eritrean">Eritrean</option>
                          <option value="estonian">Estonian</option>
                          <option value="ethiopian">Ethiopian</option>
                          <option value="fijian">Fijian</option>
                          <option value="filipino">Filipino</option>
                          <option value="finnish">Finnish</option>
                          <option value="french">French</option>
                          <option value="gabonese">Gabonese</option>
                          <option value="gambian">Gambian</option>
                          <option value="georgian">Georgian</option>
                          <option value="german">German</option>
                          <option value="ghanaian">Ghanaian</option>
                          <option value="greek">Greek</option>
                          <option value="grenadian">Grenadian</option>
                          <option value="guatemalan">Guatemalan</option>
                          <option value="guinea-bissauan">Guinea-Bissauan</option>
                          <option value="guinean">Guinean</option>
                          <option value="guyanese">Guyanese</option>
                          <option value="haitian">Haitian</option>
                          <option value="herzegovinian">Herzegovinian</option>
                          <option value="honduran">Honduran</option>
                          <option value="hungarian">Hungarian</option>
                          <option value="icelander">Icelander</option>
                          <option value="indian">Indian</option>
                          <option value="indonesian">Indonesian</option>
                          <option value="iranian">Iranian</option>
                          <option value="iraqi">Iraqi</option>
                          <option value="irish">Irish</option>
                          <option value="israeli">Israeli</option>
                          <option value="italian">Italian</option>
                          <option value="ivorian">Ivorian</option>
                          <option value="jamaican">Jamaican</option>
                          <option value="japanese">Japanese</option>
                          <option value="jordanian">Jordanian</option>
                          <option value="kazakhstani">Kazakhstani</option>
                          <option value="kenyan">Kenyan</option>
                          <option value="kittian and nevisian">Kittian and Nevisian</option>
                          <option value="kuwaiti">Kuwaiti</option>
                          <option value="kyrgyz">Kyrgyz</option>
                          <option value="laotian">Laotian</option>
                          <option value="latvian">Latvian</option>
                          <option value="lebanese">Lebanese</option>
                          <option value="liberian">Liberian</option>
                          <option value="libyan">Libyan</option>
                          <option value="liechtensteiner">Liechtensteiner</option>
                          <option value="lithuanian">Lithuanian</option>
                          <option value="luxembourger">Luxembourger</option>
                          <option value="macedonian">Macedonian</option>
                          <option value="malagasy">Malagasy</option>
                          <option value="malawian">Malawian</option>
                          <option value="malaysian">Malaysian</option>
                          <option value="maldivan">Maldivan</option>
                          <option value="malian">Malian</option>
                          <option value="maltese">Maltese</option>
                          <option value="marshallese">Marshallese</option>
                          <option value="mauritanian">Mauritanian</option>
                          <option value="mauritian">Mauritian</option>
                          <option value="mexican">Mexican</option>
                          <option value="micronesian">Micronesian</option>
                          <option value="moldovan">Moldovan</option>
                          <option value="monacan">Monacan</option>
                          <option value="mongolian">Mongolian</option>
                          <option value="moroccan">Moroccan</option>
                          <option value="mosotho">Mosotho</option>
                          <option value="motswana">Motswana</option>
                          <option value="mozambican">Mozambican</option>
                          <option value="namibian">Namibian</option>
                          <option value="nauruan">Nauruan</option>
                          <option value="nepalese">Nepalese</option>
                          <option value="new zealander">New Zealander</option>
                          <option value="ni-vanuatu">Ni-Vanuatu</option>
                          <option value="nicaraguan">Nicaraguan</option>
                          <option value="nigerien">Nigerien</option>
                          <option value="north korean">North Korean</option>
                          <option value="northern irish">Northern Irish</option>
                          <option value="norwegian">Norwegian</option>
                          <option value="omani">Omani</option>
                          <option value="pakistani">Pakistani</option>
                          <option value="palauan">Palauan</option>
                          <option value="panamanian">Panamanian</option>
                          <option value="papua new guinean">Papua New Guinean</option>
                          <option value="paraguayan">Paraguayan</option>
                          <option value="peruvian">Peruvian</option>
                          <option value="polish">Polish</option>
                          <option value="portuguese">Portuguese</option>
                          <option value="qatari">Qatari</option>
                          <option value="romanian">Romanian</option>
                          <option value="russian">Russian</option>
                          <option value="rwandan">Rwandan</option>
                          <option value="saint lucian">Saint Lucian</option>
                          <option value="salvadoran">Salvadoran</option>
                          <option value="samoan">Samoan</option>
                          <option value="san marinese">San Marinese</option>
                          <option value="sao tomean">Sao Tomean</option>
                          <option value="saudi">Saudi</option>
                          <option value="scottish">Scottish</option>
                          <option value="senegalese">Senegalese</option>
                          <option value="serbian">Serbian</option>
                          <option value="seychellois">Seychellois</option>
                          <option value="sierra leonean">Sierra Leonean</option>
                          <option value="singaporean">Singaporean</option>
                          <option value="slovakian">Slovakian</option>
                          <option value="slovenian">Slovenian</option>
                          <option value="solomon islander">Solomon Islander</option>
                          <option value="somali">Somali</option>
                          <option value="south african">South African</option>
                          <option value="south korean">South Korean</option>
                          <option value="spanish">Spanish</option>
                          <option value="sri lankan">Sri Lankan</option>
                          <option value="sudanese">Sudanese</option>
                          <option value="surinamer">Surinamer</option>
                          <option value="swazi">Swazi</option>
                          <option value="swedish">Swedish</option>
                          <option value="swiss">Swiss</option>
                          <option value="syrian">Syrian</option>
                          <option value="taiwanese">Taiwanese</option>
                          <option value="tajik">Tajik</option>
                          <option value="tanzanian">Tanzanian</option>
                          <option value="thai">Thai</option>
                          <option value="togolese">Togolese</option>
                          <option value="tongan">Tongan</option>
                          <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                          <option value="tunisian">Tunisian</option>
                          <option value="turkish">Turkish</option>
                          <option value="tuvaluan">Tuvaluan</option>
                          <option value="ugandan">Ugandan</option>
                          <option value="ukrainian">Ukrainian</option>
                          <option value="uruguayan">Uruguayan</option>
                          <option value="uzbekistani">Uzbekistani</option>
                          <option value="venezuelan">Venezuelan</option>
                          <option value="vietnamese">Vietnamese</option>
                          <option value="welsh">Welsh</option>
                          <option value="yemenite">Yemenite</option>
                          <option value="zambian">Zambian</option>
                          <option value="zimbabwean">Zimbabwean</option>
                      </select>
                      <div class="md-form">
                          <i class="fas fa-city prefix"></i>
                          <input type="text" id="birthtown" class="form-control" name="birthtwon" required>
                          <label for="birthtown" data-error="wrong" data-success="right"> Birth Town <strong class="text-danger">*</strong></label>
                      </div>
                      <div class="md-form">
                          <input type="text" id="m-fname" class="form-control" name="motherfname">
                          <label for="m-fname" data-error="wrong" data-success="right" required> Mother's First Name <strong class="text-danger">*</strong></label>
                          <div id="error-mfname"></div>
                      </div>
                      <div class="md-form">
                          <input type="text" id="m-lname" class="form-control" name="motherlname">
                          <label for="m-lname" data-error="wrong" data-success="right" required> Mother's Last Name (at birth) <strong class="text-danger">*</strong></label>
                          <div id="error-mlname"></div>
                      </div>
                      <label for="anothername" class="font-weight-bold">Have you ever been known by another name ?<strong class="text-danger">*</strong></label>
                      <select name="othername" onchange="checkanothername()" class="browser-default custom-select custom-select-mb-3 required" id="anothername" required>
                          <option value="none" selected disabled>Please select an option</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                      </select>
                      </div>
                      <div id="notify-sec-3">
                          <div class="form-group">
                              <div class="md-form">
                                  <input type="text" id="old-fname" class="form-control" name="oldfname" required>
                                  <label for="old-fname" data-error="wrong" data-success="right"> Please provide previous first name <strong class="text-danger">*</strong></label>
                                  <div id="error-pfname"></div>
                              </div>
                              <div class="md-form">
                                  <input type="text" id="old-lname" class="form-control" name="oldlname" required>
                                  <label for="old-lname" data-error="wrong" data-success="right"> Please provide previous last name <strong class="text-danger">*</strong></label>
                                  <div id="error-plname"></div>
                              </div>
                              <div class="md-form">
                                  <input type="date" id="old-name-from" class="form-control" name="oldnamefrom" required>
                                  <label for="old-name-from" data-error="wrong" data-success="right"> Previous name from <strong class="text-danger">*</strong></label>
                              </div>
                              <div class="md-form">
                                  <input type="date" id="old-name-to" class="form-control" name="oldnameto" required>
                                  <label for="old-name-to" data-error="wrong" data-success="right"> Previous name to <strong class="text-danger">*</strong></label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <p class="font-weight-bold">Current Address <span class="text-red">*</span></p>
                          <div class="md-form">
                            <input type="text" id="house-no" class="form-control" name="currenthouseno" required>
                            <label for="house-street" data-error="wrong" data-success="right">House Number/Name<strong class="text-danger">*</strong></label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="house-street" class="form-control" name="currentstreet" required>
                            <label for="house-no" data-error="wrong" data-success="right">Street<strong class="text-danger">*</strong></label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="house-town" class="form-control" name="currenttown" required>
                            <label for="house-town" data-error="wrong" data-success="right">Town<strong class="text-danger">*</strong></label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="house-city" class="form-control" name="currentcity" required>
                            <label for="house-city" data-error="wrong" data-success="right">City<strong class="text-danger">*</strong></label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="house-state" class="form-control" name="currentstate" required>
                            <label for="house-state" data-error="wrong" data-success="right">State<strong class="text-danger">*</strong></label>
                          </div>

                          <div class="md-form">
                            <input type="text" id="house-zip" class="form-control" name="currentzip" required>
                            <label for="house-zip" data-error="wrong" data-success="right">ZIP<strong class="text-danger">*</strong></label>
                          </div>

                          <div class="md-form">
                              <input onchange="check7year()" type="date" id="when-address-move" class="form-control" name="whenmoveto-1" required>
                              <label for="when-address-move" data-error="wrong" data-success="right"> When did you move to this address ? <strong class="text-danger">*</strong></label>
                          </div>
                      </div>

                      <div id="notify-sec-4">
                          <p>7 years address history is required to submit a DBS check. Please provide your previous address if you have resided at your current address for less than 7 years:</p>
                          <div class="form-group">

                              <p class="font-weight-bold">Previous Address</p>
                              <div class="md-form">
                                  <input type="text" id="phouse-no" class="nonim form-control" name="oldhouseno">
                                  <label for="phouse-street" data-error="wrong" data-success="right">House Number/Name<strong class="text-danger">*</strong></label>
                              </div>

                              <div class="md-form">
                                  <input type="text" id="phouse-street" class="nonim form-control" name="oldhousestreet">
                                  <label for="phouse-street" data-error="wrong" data-success="right">Street<strong class="text-danger">*</strong></label>
                              </div>

                              <div class="md-form">
                                  <input type="text" id="phouse-town" class="nonim form-control" name="oldhousetown">
                                  <label for="phouse-town" data-error="wrong" data-success="right">Town<strong class="text-danger">*</strong></label>
                              </div>

                              <div class="md-form">
                                  <input type="text" id="phouse-city" class="nonim form-control" name="oldhousecity">
                                  <label for="phouse-city" data-error="wrong" data-success="right">City<strong class="text-danger">*</strong></label>
                              </div>

                              <div class="md-form">
                                  <input type="text" id="phouse-state" class="nonim form-control" name="oldhousestate">
                                  <label for="phouse-state" data-error="wrong" data-success="right">State<strong class="text-danger">*</strong></label>
                              </div>

                              <div class="md-form">
                                  <input type="text" id="phouse-zip" class="nonim form-control" name="oldhousezip">
                                  <label for="phouse-zip" data-error="wrong" data-success="right">ZIP<strong class="text-danger">*</strong></label>
                              </div>

                              <div class="md-form">
                                  <input type="date" id="old-when-address-move" class="nonim form-control" name="whenmoveto-2">
                                  <label for="old-when-address-move" data-error="wrong" data-success="right"> When did you move to this address ?<strong class="text-danger">*</strong></label>
                              </div>
                          </div>
                      </div>
                  </div>

                <!--####################d##################################################################-->
                <div class="tab">
                    <h4>Identity</h4>
                    <p class="text-muted">Including Right to Work</p>
                    <hr id="top-hr">
                    <div class="form-group">
                        <label for="currentnationality-1" class="font-weight-bold">Current Nationality<strong class="text-danger">*</strong></label>
                        <select onchange="checkstep15()" name="currentnationality" class="browser-default custom-select custom-select-mb-3 required" id="currentnationality-1" required>
                            <option value="none" disabled>Select a nationality</option>
                            <option value="afghan" selected>Afghan</option>
                            <option value="albanian">Albanian</option>
                            <option value="algerian">Algerian</option>
                            <option value="american">American</option>
                            <option value="andorran">Andorran</option>
                            <option value="angolan">Angolan</option>
                            <option value="antiguans">Antiguans</option>
                            <option value="argentinean">Argentinean</option>
                            <option value="armenian">Armenian</option>
                            <option value="australian">Australian</option>
                            <option value="austrian">Austrian</option>
                            <option value="azerbaijani">Azerbaijani</option>
                            <option value="bahamian">Bahamian</option>
                            <option value="bahraini">Bahraini</option>
                            <option value="bangladeshi">Bangladeshi</option>
                            <option value="barbadian">Barbadian</option>
                            <option value="barbudans">Barbudans</option>
                            <option value="batswana">Batswana</option>
                            <option value="belarusian">Belarusian</option>
                            <option value="belgian">Belgian</option>
                            <option value="belizean">Belizean</option>
                            <option value="beninese">Beninese</option>
                            <option value="bhutanese">Bhutanese</option>
                            <option value="bolivian">Bolivian</option>
                            <option value="bosnian">Bosnian</option>
                            <option value="brazilian">Brazilian</option>
                            <option value="british">British</option>
                            <option value="bruneian">Bruneian</option>
                            <option value="bulgarian">Bulgarian</option>
                            <option value="burkinabe">Burkinabe</option>
                            <option value="burmese">Burmese</option>
                            <option value="burundian">Burundian</option>
                            <option value="cambodian">Cambodian</option>
                            <option value="cameroonian">Cameroonian</option>
                            <option value="canadian">Canadian</option>
                            <option value="cape verdean">Cape Verdean</option>
                            <option value="central african">Central African</option>
                            <option value="chadian">Chadian</option>
                            <option value="chilean">Chilean</option>
                            <option value="chinese">Chinese</option>
                            <option value="colombian">Colombian</option>
                            <option value="comoran">Comoran</option>
                            <option value="congolese">Congolese</option>
                            <option value="costa rican">Costa Rican</option>
                            <option value="croatian">Croatian</option>
                            <option value="cuban">Cuban</option>
                            <option value="cypriot">Cypriot</option>
                            <option value="czech">Czech</option>
                            <option value="danish">Danish</option>
                            <option value="djibouti">Djibouti</option>
                            <option value="dominican">Dominican</option>
                            <option value="dutch">Dutch</option>
                            <option value="east timorese">East Timorese</option>
                            <option value="ecuadorean">Ecuadorean</option>
                            <option value="egyptian">Egyptian</option>
                            <option value="emirian">Emirian</option>
                            <option value="equatorial guinean">Equatorial Guinean</option>
                            <option value="eritrean">Eritrean</option>
                            <option value="estonian">Estonian</option>
                            <option value="ethiopian">Ethiopian</option>
                            <option value="fijian">Fijian</option>
                            <option value="filipino">Filipino</option>
                            <option value="finnish">Finnish</option>
                            <option value="french">French</option>
                            <option value="gabonese">Gabonese</option>
                            <option value="gambian">Gambian</option>
                            <option value="georgian">Georgian</option>
                            <option value="german">German</option>
                            <option value="ghanaian">Ghanaian</option>
                            <option value="greek">Greek</option>
                            <option value="grenadian">Grenadian</option>
                            <option value="guatemalan">Guatemalan</option>
                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                            <option value="guinean">Guinean</option>
                            <option value="guyanese">Guyanese</option>
                            <option value="haitian">Haitian</option>
                            <option value="herzegovinian">Herzegovinian</option>
                            <option value="honduran">Honduran</option>
                            <option value="hungarian">Hungarian</option>
                            <option value="icelander">Icelander</option>
                            <option value="indian">Indian</option>
                            <option value="indonesian">Indonesian</option>
                            <option value="iranian">Iranian</option>
                            <option value="iraqi">Iraqi</option>
                            <option value="irish">Irish</option>
                            <option value="israeli">Israeli</option>
                            <option value="italian">Italian</option>
                            <option value="ivorian">Ivorian</option>
                            <option value="jamaican">Jamaican</option>
                            <option value="japanese">Japanese</option>
                            <option value="jordanian">Jordanian</option>
                            <option value="kazakhstani">Kazakhstani</option>
                            <option value="kenyan">Kenyan</option>
                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                            <option value="kuwaiti">Kuwaiti</option>
                            <option value="kyrgyz">Kyrgyz</option>
                            <option value="laotian">Laotian</option>
                            <option value="latvian">Latvian</option>
                            <option value="lebanese">Lebanese</option>
                            <option value="liberian">Liberian</option>
                            <option value="libyan">Libyan</option>
                            <option value="liechtensteiner">Liechtensteiner</option>
                            <option value="lithuanian">Lithuanian</option>
                            <option value="luxembourger">Luxembourger</option>
                            <option value="macedonian">Macedonian</option>
                            <option value="malagasy">Malagasy</option>
                            <option value="malawian">Malawian</option>
                            <option value="malaysian">Malaysian</option>
                            <option value="maldivan">Maldivan</option>
                            <option value="malian">Malian</option>
                            <option value="maltese">Maltese</option>
                            <option value="marshallese">Marshallese</option>
                            <option value="mauritanian">Mauritanian</option>
                            <option value="mauritian">Mauritian</option>
                            <option value="mexican">Mexican</option>
                            <option value="micronesian">Micronesian</option>
                            <option value="moldovan">Moldovan</option>
                            <option value="monacan">Monacan</option>
                            <option value="mongolian">Mongolian</option>
                            <option value="moroccan">Moroccan</option>
                            <option value="mosotho">Mosotho</option>
                            <option value="motswana">Motswana</option>
                            <option value="mozambican">Mozambican</option>
                            <option value="namibian">Namibian</option>
                            <option value="nauruan">Nauruan</option>
                            <option value="nepalese">Nepalese</option>
                            <option value="new zealander">New Zealander</option>
                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                            <option value="nicaraguan">Nicaraguan</option>
                            <option value="nigerien">Nigerien</option>
                            <option value="north korean">North Korean</option>
                            <option value="northern irish">Northern Irish</option>
                            <option value="norwegian">Norwegian</option>
                            <option value="omani">Omani</option>
                            <option value="pakistani">Pakistani</option>
                            <option value="palauan">Palauan</option>
                            <option value="panamanian">Panamanian</option>
                            <option value="papua new guinean">Papua New Guinean</option>
                            <option value="paraguayan">Paraguayan</option>
                            <option value="peruvian">Peruvian</option>
                            <option value="polish">Polish</option>
                            <option value="portuguese">Portuguese</option>
                            <option value="qatari">Qatari</option>
                            <option value="romanian">Romanian</option>
                            <option value="russian">Russian</option>
                            <option value="rwandan">Rwandan</option>
                            <option value="saint lucian">Saint Lucian</option>
                            <option value="salvadoran">Salvadoran</option>
                            <option value="samoan">Samoan</option>
                            <option value="san marinese">San Marinese</option>
                            <option value="sao tomean">Sao Tomean</option>
                            <option value="saudi">Saudi</option>
                            <option value="scottish">Scottish</option>
                            <option value="senegalese">Senegalese</option>
                            <option value="serbian">Serbian</option>
                            <option value="seychellois">Seychellois</option>
                            <option value="sierra leonean">Sierra Leonean</option>
                            <option value="singaporean">Singaporean</option>
                            <option value="slovakian">Slovakian</option>
                            <option value="slovenian">Slovenian</option>
                            <option value="solomon islander">Solomon Islander</option>
                            <option value="somali">Somali</option>
                            <option value="south african">South African</option>
                            <option value="south korean">South Korean</option>
                            <option value="spanish">Spanish</option>
                            <option value="sri lankan">Sri Lankan</option>
                            <option value="sudanese">Sudanese</option>
                            <option value="surinamer">Surinamer</option>
                            <option value="swazi">Swazi</option>
                            <option value="swedish">Swedish</option>
                            <option value="swiss">Swiss</option>
                            <option value="syrian">Syrian</option>
                            <option value="taiwanese">Taiwanese</option>
                            <option value="tajik">Tajik</option>
                            <option value="tanzanian">Tanzanian</option>
                            <option value="thai">Thai</option>
                            <option value="togolese">Togolese</option>
                            <option value="tongan">Tongan</option>
                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                            <option value="tunisian">Tunisian</option>
                            <option value="turkish">Turkish</option>
                            <option value="tuvaluan">Tuvaluan</option>
                            <option value="ugandan">Ugandan</option>
                            <option value="ukrainian">Ukrainian</option>
                            <option value="uruguayan">Uruguayan</option>
                            <option value="uzbekistani">Uzbekistani</option>
                            <option value="venezuelan">Venezuelan</option>
                            <option value="vietnamese">Vietnamese</option>
                            <option value="welsh">Welsh</option>
                            <option value="yemenite">Yemenite</option>
                            <option value="zambian">Zambian</option>
                            <option value="zimbabwean">Zimbabwean</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="md-form">
                            <input type="text" id="NIN" class="form-control" name="nin" required>
                            <label for="NIN" data-error="wrong" data-success="right">National Insurance Number<strong class="text-danger">*</strong></label>
                        </div>
                    </div>

                    <h4>ID Document Upload</h4>
                    <p class="text-muted">Please ensure all images are clear, in focus and include all edges.</p>
                    <hr id="top-hr">
                    <div class="form-group">
                            <label for="idtypes" class="font-weight-bold">ID Type<strong class="text-danger">*</strong></label>
                            <select onchange="checkidtype()" name="idtype" class="browser-default custom-select custom-select-mb-3 required" id="idtypes" required>
                                <option value="none" disabled selected>Select an option</option>
                                <option value="Passport (Photo Page)">Passport (Photo Page)</option>
                                <option value="National ID (Front & Back)">National ID (Front & Back)</option>
                                <option value="Birth Certificate (UK Only)">Birth Certificate (UK Only)</option>
                            </select>
                        <br><br>
                        <div id="notify-sec-5"></div>
                        <div id="read-file-path-1"></div>
                        <br>
                        <div id="notify-sec-5-1"></div>
                        <div id="read-file-path-2"></div>
                    </div>
                    <script>
                        function checkidtype()
                        {
                            var idtype = document.getElementById('idtypes').value;
                            if (idtype == "Passport (Photo Page)")
                            {
                                document.getElementById('read-file-path-1').innerHTML="";
                                document.getElementById('read-file-path-2').innerHTML="";
                                document.getElementById('notify-sec-5-1').innerHTML ="";
                                document.getElementById('notify-sec-5').innerHTML = "<p class='font-weight-bold'>Passport Upload (Photo Page)<strong class='text-danger'>* (images-.png,.jpg,jpeg,bmp)</strong></p>\n<div class='custom-file'><input type='file' class='custom-file-input' name='ppupload' id='uploadpassport' onchange='readfilename1()' accept='image/*' required><label class='custom-file-label' for='uploadpassport'>Passport Upload (Photo Page)<strong class='text-danger'>* </strong></span></label></div>";

                            }
                            else if(idtype == "National ID (Front & Back)")
                            {
                                document.getElementById('read-file-path-1').innerHTML="";
                                document.getElementById('read-file-path-2').innerHTML="";
                                document.getElementById('notify-sec-5').innerHTML ="<p class='font-weight-bold'>National ID (Front)<strong class='text-danger'>* (images-.png,.jpg,jpeg,bmp)</strong></p><div class='custom-file'><input type='file' class='custom-file-input' name='nidfrontupload' id='uploadnidfront' onchange='readfilename2()' accept='image/*' required><label class='custom-file-label' for='uploadnidfront'>National ID (Front)<strong class='text-danger'>* </strong></span></label></div>";
                                document.getElementById('notify-sec-5-1').innerHTML ="<p class='font-weight-bold'>National ID (Back)<strong class='text-danger'>* (images-.png,.jpg,jpeg,bmp)</strong></p><div class='custom-file'><input type='file' class='custom-file-input' name='nidbackupload' id='uploadnidback' onchange='readfilename3()' accept='image/*' required><label class='custom-file-label' for='uploadnidback'>National ID (Back)<strong class='text-danger'>* </strong></span></label></div>";
                            }
                            else if(idtype == "Birth Certificate (UK Only)")
                            {
                                document.getElementById('read-file-path-1').innerHTML="";
                                document.getElementById('read-file-path-2').innerHTML="";
                                document.getElementById('notify-sec-5-1').innerHTML ="";
                                document.getElementById('notify-sec-5').innerHTML ="<p class='font-weight-bold'>BC Upload (UK Only)<strong class='text-danger'>* (images-.png,.jpg,jpeg,bmp)</strong></p><div class='custom-file'><input type='file' class='custom-file-input' name='bcupload' id='uploadbc' onchange='readfilename4()' accept='image/*' required><label class='custom-file-label' for='uploadbc'>BC Upload (UK Only)<strong class='text-danger'>*</strong></span></label></div>";
                            }
                            else
                            {
                                document.getElementById('notify-sec-5').innerHTML="";
                                document.getElementById('notify-sec-5-1').innerHTML="";
                                document.getElementById('read-file-path-1').innerHTML="";
                                document.getElementById('read-file-path-2').innerHTML="";
                            }
                            checkstep15();
                        }

                        function readfilename1()
                        {
                            document.getElementById('read-file-path-1').innerHTML = "";
                            const fi = document.getElementById('uploadpassport');
                            var x = $('#uploadpassport').val();
                            var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif)$/i;
                            maxfilesize = 10 * 1024 * 1024;
                            filesize = fi.files[0].size;
                                if(x!="") {
                                    if(filesize > maxfilesize)
                                    {
                                        document.getElementById('read-file-path-1').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                        document.getElementById('uploadpassport').value="";
                                    }
                                    else if(!allowedextensions.exec(x))
                                    {
                                        document.getElementById('read-file-path-1').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                        document.getElementById('uploadpassport').value="";
                                    }
                                    else
                                    {
                                        document.getElementById('read-file-path-1').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                    }

                                }
                                else
                                {
                                    document.getElementById('read-file-path-1').innerHTML = "";
                                }
                            }
                        function readfilename2()
                        {
                            document.getElementById('read-file-path-1').innerHTML = "";
                            var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif)$/i;
                            const fi = document.getElementById('uploadnidfront');
                            maxfilesize = 10 * 1024 * 1024;
                            var x = $('#uploadnidfront').val();
                            filesize = fi.files[0].size;
                            if(x!="") {
                                if(filesize > maxfilesize)
                                {
                                    document.getElementById('read-file-path-1').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                    document.getElementById('uploadnidfront').value="";
                                }
                                else if(!allowedextensions.exec(x))
                                {
                                    document.getElementById('read-file-path-1').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                    document.getElementById('uploadnidfront').value="";
                                }
                                else
                                {
                                    document.getElementById('read-file-path-1').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                }

                            }
                            else
                            {
                                document.getElementById('read-file-path-1').innerHTML = "";
                            }

                        }
                        function readfilename3()
                        {
                            document.getElementById('read-file-path-2').innerHTML = "";
                            var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif)$/i;
                            const fi = document.getElementById('uploadnidback');
                            maxfilesize = 10 * 1024 * 1024;
                            var x = $('#uploadnidback').val();
                            filesize = fi.files[0].size;
                            if(x!="") {
                                if(filesize > maxfilesize)
                                {
                                    document.getElementById('read-file-path-2').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                    document.getElementById('uploadnidback').value="";
                                }
                                else if(!allowedextensions.exec(x))
                                {
                                    document.getElementById('read-file-path-2').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                    document.getElementById('uploadnidback').value="";
                                }
                                else
                                {
                                    document.getElementById('read-file-path-2').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                }

                            }
                            else
                            {
                                document.getElementById('read-file-path-2').innerHTML = "";
                            }

                        }
                        function readfilename4()
                        {
                            document.getElementById('read-file-path-1').innerHTML = "";
                            var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif)$/i;
                            const fi = document.getElementById('uploadbc');
                            maxfilesize = 10 * 1024 * 1024;
                            var x = $('#uploadbc').val();
                            filesize = fi.files[0].size;
                            if(x!="") {
                                if(filesize > maxfilesize)
                                {
                                    document.getElementById('read-file-path-1').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                    document.getElementById('uploadbc').value="";
                                }
                                else if(!allowedextensions.exec(x))
                                {
                                    document.getElementById('read-file-path-1').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                    document.getElementById('uploadbc').value="";
                                }
                                else
                                {
                                    document.getElementById('read-file-path-1').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                }

                            }
                            else
                            {
                                document.getElementById('read-file-path-1').innerHTML = "";
                            }

                        }

                    </script>
                    <div class="form-group">
                        <div class="md-form">
                            <input type="date" id="doc-issue-date" class="form-control" name="docissuedate" required>
                            <label for="doc-issue-date" data-error="wrong" data-success="right">Document Issue Date<strong class='text-danger'>*</strong></label>
                        </div>

                        <div class="md-form">
                            <input type="date" id="doc-exp-date" class="form-control" name="docexpdate" required>
                            <label for="doc-exp-date" data-error="wrong" data-success="right">Document Expiry Date<strong class='text-danger'>*</strong></label>
                        </div>
                    </div>
                    <h4>Visa / Residence Permit</h4>
                    <hr id="top-hr">
                    <p>Based on your Nationality, right to work documentation is required, please provide either a Visa or Residence Permit. If you have a Home Office application acceptance letter, this can also be accepted.</p>
                    <div class="form-group">
                        <label for="doctype" class="font-weight-bold">Document Type<strong class="text-danger">*</strong></label>
                        <select onchange="checkdoctype()" name="doctype" class="browser-default custom-select custom-select-mb-3 required" id="doctypes" required>
                            <option value="none" disabled selected>Select an option</option>
                            <option value="Visa">Visa</option>
                            <option value="Residence Permit">Residence Permit</option>
                            <option value="Home Office Letter">Home Office (HO) Letter</option>
                        </select>
                        <br><br>
                        <div id="notify-sec-6"></div>
                        <div id="read-file-path-3"></div>
                        <br>
                        <div id="notify-sec-6-1"></div>
                        <div id="read-file-path-4"></div>
                    </div>

                    <script>

                        function checkdoctype()
                        {
                            var idtype = document.getElementById('doctypes').value;
                            if (idtype == "Visa")
                            {
                                document.getElementById('read-file-path-3').innerHTML="";
                                document.getElementById('read-file-path-4').innerHTML="";
                                document.getElementById('notify-sec-6-1').innerHTML ="";
                                document.getElementById('notify-sec-6').innerHTML = "<p class='font-weight-bold'>VISA Upload<strong class='text-danger'>* (images, .pdf, .doc)</strong></p><div class='custom-file'><input type='file' class='custom-file-input' name='visaupload' id='uploadvisa' onchange='readfilename5()' accept='.docx,.doc,.pdf,image/*' required><label class='custom-file-label' for='uploadvisa'>VISA Upload<strong class='text-danger'>* </strong></span></label></div>";
                            }
                            else if(idtype == "Residence Permit")
                            {

                                document.getElementById('read-file-path-3').innerHTML="";
                                document.getElementById('read-file-path-4').innerHTML="";
                                document.getElementById('notify-sec-6').innerHTML = "<p class='font-weight-bold'>Permit Front Upload<strong class='text-danger'>* (images, .pdf, .doc)</strong></p><div class='custom-file'><input type='file' class='custom-file-input' name='rpfrontupload' id='uploadresidencefront' onchange='readfilename6()' accept='.docx,.doc,.pdf,image/*' required><label class='custom-file-label' for='uploadresidencefront'>Permit Front Upload<strong class='text-danger'>* </strong></span></label></div>";
                                document.getElementById('notify-sec-6-1').innerHTML = "<p class='font-weight-bold'>Permit Back Upload<strong class='text-danger'>* (images, .pdf, .doc)</strong></p><div class='custom-file'><input type='file' class='custom-file-input' name='rpbackupload' id='uploadresidenceback' onchange='readfilename7()' accept='.docx,.doc,.pdf,image/*' required><label class='custom-file-label' for='uploadresidenceback'>Permit Back Upload<strong class='text-danger'>* </strong></span></label></div>";
                            }
                            else if(idtype == "Home Office Letter")
                            {
                                document.getElementById('read-file-path-3').innerHTML="";
                                document.getElementById('read-file-path-4').innerHTML="";
                                document.getElementById('notify-sec-6-1').innerHTML="";
                                document.getElementById('notify-sec-6').innerHTML = "<p class='font-weight-bold'>HO Letter Upload<strong class='text-danger'>* (images, .pdf, .doc)</strong></p><div class='custom-file'><input type='file' class='custom-file-input' name='holupload' id='uploadhfltr' onchange='readfilename8()' accept='.docx,.doc,.pdf,image/*' required><label class='custom-file-label' for='uploadhfltr'>HO Letter Upload<strong class='text-danger'>* </strong></span></label></div>";
                            }
                            else
                            {
                                document.getElementById('notify-sec-6').innerHTML="";
                                document.getElementById('notify-sec-6-1').innerHTML="";
                                document.getElementById('read-file-path-3').innerHTML="";
                                document.getElementById('read-file-path-4').innerHTML="";
                            }
                            checkstep15();
                        }

                        function readfilename5()
                        {
                            document.getElementById('read-file-path-3').innerHTML = "";
                            var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif|\.pdf|\.doc|\.docx)$/i;
                            const fi = document.getElementById('uploadvisa');
                            maxfilesize = 10 * 1024 * 1024;
                            var x = $('#uploadvisa').val();
                            filesize = fi.files[0].size;
                            if(x!="") {
                                if(filesize > maxfilesize)
                                {
                                    document.getElementById('read-file-path-3').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                    document.getElementById('uploadvisa').value="";
                                }
                                else if(!allowedextensions.exec(x))
                                {
                                    document.getElementById('read-file-path-3').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                    document.getElementById('uploadvisa').value="";
                                }
                                else
                                {
                                    document.getElementById('read-file-path-3').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                }

                            }
                            else
                            {
                                document.getElementById('read-file-path-3').innerHTML = "";
                            }
                        }
                        function readfilename6()
                        {
                            document.getElementById('read-file-path-3').innerHTML = "";
                            var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif|\.pdf|\.doc|\.docx)$/i;
                            const fi = document.getElementById('uploadresidencefront');
                            maxfilesize = 10 * 1024 * 1024;
                            var x = $('#uploadresidencefront').val();
                            filesize = fi.files[0].size;
                            if(x!="") {
                                if(filesize > maxfilesize)
                                {
                                    document.getElementById('read-file-path-3').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                    document.getElementById('uploadresidencefront').value="";
                                }
                                else if(!allowedextensions.exec(x))
                                {
                                    document.getElementById('read-file-path-3').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                    document.getElementById('uploadresidencefront').value="";
                                }
                                else
                                {
                                    document.getElementById('read-file-path-3').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                }

                            }
                            else
                            {
                                document.getElementById('read-file-path-3').innerHTML = "";
                            }

                        }
                        function readfilename7()
                        {
                            document.getElementById('read-file-path-4').innerHTML = "";
                            var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif|\.pdf|\.doc|\.docx)$/i;
                            const fi = document.getElementById('uploadresidenceback');
                            maxfilesize = 10 * 1024 * 1024;
                            var x = $('#uploadresidenceback').val();
                            filesize = fi.files[0].size;
                            if(x!="") {
                                if(filesize > maxfilesize)
                                {
                                    document.getElementById('read-file-path-4').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                    document.getElementById('uploadresidenceback').value="";
                                }
                                else if(!allowedextensions.exec(x))
                                {
                                    document.getElementById('read-file-path-4').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                    document.getElementById('uploadresidenceback').value="";
                                }
                                else
                                {
                                    document.getElementById('read-file-path-4').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                }
                            }
                            else
                            {
                                document.getElementById('read-file-path-4').innerHTML = "";
                            }
                        }
                        function readfilename8() {
                            var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif|\.pdf|\.doc|\.docx)$/i;
                            const fi = document.getElementById('uploadhfltr');
                            maxfilesize = 10 * 1024 * 1024;
                            var x = $('#uploadhfltr').val();
                            filesize = fi.files[0].size;
                            if (x != "") {
                                if (filesize > maxfilesize) {
                                    document.getElementById('read-file-path-3').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                    document.getElementById('uploadhfltr').value = "";
                                } else {
                                    document.getElementById('read-file-path-3').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                }
                            }
                            else if(!allowedextensions.exec(x))
                            {
                                document.getElementById('read-file-path-3').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                document.getElementById('uploadhfltr').value="";
                            } else {
                                document.getElementById('read-file-path-3').innerHTML = "";
                            }
                        }

                    </script>


                </div>
                <!--####################d##################################################################-->
                  <div class="tab">
                      <h4>Driving Licence</h4>
                      <hr id="top-hr">
                      <div class="form-group">
                      <label for="liccountry" class="font-weight-bold">Which Country was your licence issued in ?<strong class="text-danger">*</strong></label>
                      <select class="browser-default custom-select custom-select-mb-3 required" id="liccountry" name="liccountry" required>
                          <option value="none" disabled>Please select a country</option>
                          <option value="Afganistan" selected>Afghanistan</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          <option value="Angola">Angola</option>
                          <option value="Anguilla">Anguilla</option>
                          <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                          <option value="Argentina">Argentina</option>
                          <option value="Armenia">Armenia</option>
                          <option value="Aruba">Aruba</option>
                          <option value="Australia">Australia</option>
                          <option value="Austria">Austria</option>
                          <option value="Azerbaijan">Azerbaijan</option>
                          <option value="Bahamas">Bahamas</option>
                          <option value="Bahrain">Bahrain</option>
                          <option value="Bangladesh">Bangladesh</option>
                          <option value="Barbados">Barbados</option>
                          <option value="Belarus">Belarus</option>
                          <option value="Belgium">Belgium</option>
                          <option value="Belize">Belize</option>
                          <option value="Benin">Benin</option>
                          <option value="Bermuda">Bermuda</option>
                          <option value="Bhutan">Bhutan</option>
                          <option value="Bolivia">Bolivia</option>
                          <option value="Bonaire">Bonaire</option>
                          <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                          <option value="Botswana">Botswana</option>
                          <option value="Brazil">Brazil</option>
                          <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                          <option value="Brunei">Brunei</option>
                          <option value="Bulgaria">Bulgaria</option>
                          <option value="Burkina Faso">Burkina Faso</option>
                          <option value="Burundi">Burundi</option>
                          <option value="Cambodia">Cambodia</option>
                          <option value="Cameroon">Cameroon</option>
                          <option value="Canada">Canada</option>
                          <option value="Canary Islands">Canary Islands</option>
                          <option value="Cape Verde">Cape Verde</option>
                          <option value="Cayman Islands">Cayman Islands</option>
                          <option value="Central African Republic">Central African Republic</option>
                          <option value="Chad">Chad</option>
                          <option value="Channel Islands">Channel Islands</option>
                          <option value="Chile">Chile</option>
                          <option value="China">China</option>
                          <option value="Christmas Island">Christmas Island</option>
                          <option value="Cocos Island">Cocos Island</option>
                          <option value="Colombia">Colombia</option>
                          <option value="Comoros">Comoros</option>
                          <option value="Congo">Congo</option>
                          <option value="Cook Islands">Cook Islands</option>
                          <option value="Costa Rica">Costa Rica</option>
                          <option value="Cote DIvoire">Cote DIvoire</option>
                          <option value="Croatia">Croatia</option>
                          <option value="Cuba">Cuba</option>
                          <option value="Curaco">Curacao</option>
                          <option value="Cyprus">Cyprus</option>
                          <option value="Czech Republic">Czech Republic</option>
                          <option value="Denmark">Denmark</option>
                          <option value="Djibouti">Djibouti</option>
                          <option value="Dominica">Dominica</option>
                          <option value="Dominican Republic">Dominican Republic</option>
                          <option value="East Timor">East Timor</option>
                          <option value="Ecuador">Ecuador</option>
                          <option value="Egypt">Egypt</option>
                          <option value="El Salvador">El Salvador</option>
                          <option value="Equatorial Guinea">Equatorial Guinea</option>
                          <option value="Eritrea">Eritrea</option>
                          <option value="Estonia">Estonia</option>
                          <option value="Ethiopia">Ethiopia</option>
                          <option value="Falkland Islands">Falkland Islands</option>
                          <option value="Faroe Islands">Faroe Islands</option>
                          <option value="Fiji">Fiji</option>
                          <option value="Finland">Finland</option>
                          <option value="France">France</option>
                          <option value="French Guiana">French Guiana</option>
                          <option value="French Polynesia">French Polynesia</option>
                          <option value="French Southern Ter">French Southern Ter</option>
                          <option value="Gabon">Gabon</option>
                          <option value="Gambia">Gambia</option>
                          <option value="Georgia">Georgia</option>
                          <option value="Germany">Germany</option>
                          <option value="Ghana">Ghana</option>
                          <option value="Gibraltar">Gibraltar</option>
                          <option value="Great Britain">Great Britain</option>
                          <option value="Greece">Greece</option>
                          <option value="Greenland">Greenland</option>
                          <option value="Grenada">Grenada</option>
                          <option value="Guadeloupe">Guadeloupe</option>
                          <option value="Guam">Guam</option>
                          <option value="Guatemala">Guatemala</option>
                          <option value="Guinea">Guinea</option>
                          <option value="Guyana">Guyana</option>
                          <option value="Haiti">Haiti</option>
                          <option value="Hawaii">Hawaii</option>
                          <option value="Honduras">Honduras</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="Hungary">Hungary</option>
                          <option value="Iceland">Iceland</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="India">India</option>
                          <option value="Iran">Iran</option>
                          <option value="Iraq">Iraq</option>
                          <option value="Ireland">Ireland</option>
                          <option value="Isle of Man">Isle of Man</option>
                          <option value="Israel">Israel</option>
                          <option value="Italy">Italy</option>
                          <option value="Jamaica">Jamaica</option>
                          <option value="Japan">Japan</option>
                          <option value="Jordan">Jordan</option>
                          <option value="Kazakhstan">Kazakhstan</option>
                          <option value="Kenya">Kenya</option>
                          <option value="Kiribati">Kiribati</option>
                          <option value="Korea North">Korea North</option>
                          <option value="Korea Sout">Korea South</option>
                          <option value="Kuwait">Kuwait</option>
                          <option value="Kyrgyzstan">Kyrgyzstan</option>
                          <option value="Laos">Laos</option>
                          <option value="Latvia">Latvia</option>
                          <option value="Lebanon">Lebanon</option>
                          <option value="Lesotho">Lesotho</option>
                          <option value="Liberia">Liberia</option>
                          <option value="Libya">Libya</option>
                          <option value="Liechtenstein">Liechtenstein</option>
                          <option value="Lithuania">Lithuania</option>
                          <option value="Luxembourg">Luxembourg</option>
                          <option value="Macau">Macau</option>
                          <option value="Macedonia">Macedonia</option>
                          <option value="Madagascar">Madagascar</option>
                          <option value="Malaysia">Malaysia</option>
                          <option value="Malawi">Malawi</option>
                          <option value="Maldives">Maldives</option>
                          <option value="Mali">Mali</option>
                          <option value="Malta">Malta</option>
                          <option value="Marshall Islands">Marshall Islands</option>
                          <option value="Martinique">Martinique</option>
                          <option value="Mauritania">Mauritania</option>
                          <option value="Mauritius">Mauritius</option>
                          <option value="Mayotte">Mayotte</option>
                          <option value="Mexico">Mexico</option>
                          <option value="Midway Islands">Midway Islands</option>
                          <option value="Moldova">Moldova</option>
                          <option value="Monaco">Monaco</option>
                          <option value="Mongolia">Mongolia</option>
                          <option value="Montserrat">Montserrat</option>
                          <option value="Morocco">Morocco</option>
                          <option value="Mozambique">Mozambique</option>
                          <option value="Myanmar">Myanmar</option>
                          <option value="Nambia">Nambia</option>
                          <option value="Nauru">Nauru</option>
                          <option value="Nepal">Nepal</option>
                          <option value="Netherland Antilles">Netherland Antilles</option>
                          <option value="Netherlands">Netherlands (Holland, Europe)</option>
                          <option value="Nevis">Nevis</option>
                          <option value="New Caledonia">New Caledonia</option>
                          <option value="New Zealand">New Zealand</option>
                          <option value="Nicaragua">Nicaragua</option>
                          <option value="Niger">Niger</option>
                          <option value="Nigeria">Nigeria</option>
                          <option value="Niue">Niue</option>
                          <option value="Norfolk Island">Norfolk Island</option>
                          <option value="Norway">Norway</option>
                          <option value="Oman">Oman</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Palau Island">Palau Island</option>
                          <option value="Palestine">Palestine</option>
                          <option value="Panama">Panama</option>
                          <option value="Papua New Guinea">Papua New Guinea</option>
                          <option value="Paraguay">Paraguay</option>
                          <option value="Peru">Peru</option>
                          <option value="Phillipines">Philippines</option>
                          <option value="Pitcairn Island">Pitcairn Island</option>
                          <option value="Poland">Poland</option>
                          <option value="Portugal">Portugal</option>
                          <option value="Puerto Rico">Puerto Rico</option>
                          <option value="Qatar">Qatar</option>
                          <option value="Republic of Montenegro">Republic of Montenegro</option>
                          <option value="Republic of Serbia">Republic of Serbia</option>
                          <option value="Reunion">Reunion</option>
                          <option value="Romania">Romania</option>
                          <option value="Russia">Russia</option>
                          <option value="Rwanda">Rwanda</option>
                          <option value="St Barthelemy">St Barthelemy</option>
                          <option value="St Eustatius">St Eustatius</option>
                          <option value="St Helena">St Helena</option>
                          <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                          <option value="St Lucia">St Lucia</option>
                          <option value="St Maarten">St Maarten</option>
                          <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                          <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                          <option value="Saipan">Saipan</option>
                          <option value="Samoa">Samoa</option>
                          <option value="Samoa American">Samoa American</option>
                          <option value="San Marino">San Marino</option>
                          <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                          <option value="Saudi Arabia">Saudi Arabia</option>
                          <option value="Senegal">Senegal</option>
                          <option value="Seychelles">Seychelles</option>
                          <option value="Sierra Leone">Sierra Leone</option>
                          <option value="Singapore">Singapore</option>
                          <option value="Slovakia">Slovakia</option>
                          <option value="Slovenia">Slovenia</option>
                          <option value="Solomon Islands">Solomon Islands</option>
                          <option value="Somalia">Somalia</option>
                          <option value="South Africa">South Africa</option>
                          <option value="Spain">Spain</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="Sudan">Sudan</option>
                          <option value="Suriname">Suriname</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="Switzerland">Switzerland</option>
                          <option value="Syria">Syria</option>
                          <option value="Tahiti">Tahiti</option>
                          <option value="Taiwan">Taiwan</option>
                          <option value="Tajikistan">Tajikistan</option>
                          <option value="Tanzania">Tanzania</option>
                          <option value="Thailand">Thailand</option>
                          <option value="Togo">Togo</option>
                          <option value="Tokelau">Tokelau</option>
                          <option value="Tonga">Tonga</option>
                          <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                          <option value="Tunisia">Tunisia</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Turkmenistan">Turkmenistan</option>
                          <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                          <option value="Tuvalu">Tuvalu</option>
                          <option value="Uganda">Uganda</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="Ukraine">Ukraine</option>
                          <option value="United Arab Erimates">United Arab Emirates</option>
                          <option value="United States of America">United States of America</option>
                          <option value="Uraguay">Uruguay</option>
                          <option value="Uzbekistan">Uzbekistan</option>
                          <option value="Vanuatu">Vanuatu</option>
                          <option value="Vatican City State">Vatican City State</option>
                          <option value="Venezuela">Venezuela</option>
                          <option value="Vietnam">Vietnam</option>
                          <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                          <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                          <option value="Wake Island">Wake Island</option>
                          <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                          <option value="Yemen">Yemen</option>
                          <option value="Zaire">Zaire</option>
                          <option value="Zambia">Zambia</option>
                          <option value="Zimbabwe">Zimbabwe</option>
                      </select>
                      </div>
                      <br>

                      <div class="form-group">
                          <p class="font-weight-bold">Driving Licence Front Upload<strong class="text-danger">* (images, .pdf, .doc)</strong></p>
                          <div class="input-group">
                              <div class="custom-file">
                                  <input type="file" onchange="licfilefrontchecking()" class="custom-file-input" name="licfrontupload" id="uploadlicencefront" accept=".docx,.doc,.pdf,image/*" required>
                                  <label class="custom-file-label" for="uploadlicencefront">
                                      Licence Front Upload
                                  </label>
                              </div>
                          </div>
                          <div id="upload-file-1"></div>

                          <script>
                            function licfilefrontchecking()
                            {
                                document.getElementById('upload-file-1').innerHTML = "";
                                var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif|\.pdf|\.doc|\.docx)$/i;
                                const fi = document.getElementById('uploadlicencefront');
                                maxfilesize = 10 * 1024 * 1024;
                                var x = $('#uploadlicencefront').val();
                                filesize = fi.files[0].size;
                                if(x!="") {
                                    if(filesize > maxfilesize)
                                    {
                                        document.getElementById('upload-file-1').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                        document.getElementById('uploadlicencefront').value="";
                                    }
                                    else if(!allowedextensions.exec(x))
                                    {
                                        document.getElementById('upload-file-1').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                        document.getElementById('uploadlicencefront').value="";
                                    }
                                    else
                                    {
                                        document.getElementById('upload-file-1').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                    }
                                }
                                else
                                {
                                    document.getElementById('upload-file-1').innerHTML = "";
                                }
                            }
                          </script>

                      <br>
                          <p class="font-weight-bold">Driving Licence Back Upload<strong class="text-danger">* (images, .pdf, .doc)</strong></p>
                          <div class="input-group">
                              <div class="custom-file">
                                  <input type="file" onchange="licfilebackchecking()" class="custom-file-input" name="licbackupload" id="uploadlicback" accept=".docx,.doc,.pdf,image/*" required>
                                  <label class="custom-file-label" for="uploadlicback">
                                      Licence Back Upload
                                  </label>
                              </div>
                            </div>
                          <div id="upload-file-2"></div>
                          <script>
                              function licfilebackchecking()
                              {
                                  document.getElementById('upload-file-2').innerHTML = "";
                                  var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif|\.pdf|\.doc|\.docx)$/i;
                                  const fi = document.getElementById('uploadlicback');
                                  maxfilesize = 10 * 1024 * 1024;
                                  var x = $('#uploadlicback').val();
                                  filesize = fi.files[0].size;
                                  if(x!="") {
                                      if(filesize > maxfilesize)
                                      {
                                          document.getElementById('upload-file-2').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                          document.getElementById('uploadlicback').value="";
                                      }
                                      else if(!allowedextensions.exec(x))
                                      {
                                          document.getElementById('upload-file-2').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                          document.getElementById('uploadlicback').value="";
                                      }
                                      else
                                      {
                                          document.getElementById('upload-file-2').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                      }
                                  }
                                  else
                                  {
                                      document.getElementById('upload-file-2').innerHTML = "";
                                  }
                              }
                          </script>

                      </div>
                        <div class="form-group">
                            <div class="md-form">
                              <input type="text" id="lic-no" class="form-control" name="licno" required>
                              <label for="lic-no" data-error="wrong" data-success="right">Driving Licence Number<strong class="text-danger">*</strong></label>
                          </div>

                          <div class="md-form">
                              <input type="date" id="lic-issue-date" class="form-control" name="licissuedate" reuqired>
                              <label for="lic-issue-date" data-error="wrong" data-success="right">Document Issue Date<strong class="text-danger">*</strong></label>
                          </div>

                          <div class="md-form">
                              <input type="date" id="lic-exp-date" class="form-control" name="licexpiredate" required>
                              <label for="lic-exp-date" data-error="wrong" data-success="right">Document Expiry Date<strong class="text-danger">*</strong></label>
                          </div>
                        </div>
                      <hr id="top-hr">
                      <h4>Points / Endorsements</h4>
                      <hr id="top-hr">

                      <div class="form-group">
                          <label for="pointendcheck" class="font-weight-bold">Do you currently have any points or endorsements ?<strong class="text-danger">*</strong></label>
                          <select onchange="checkstep16()" class="browser-default custom-select custom-select-mb-3 required" id="pointendcheck" name="checkpointend" required>
                              <option value="none" disabled selected>Select an option</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                          </select>
                      </div>

                      <hr id="top-hr">
                      <p class="font-weight-bold">Declaration <span class="text-danger">*</span></p>
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkstep16()" type="checkbox" class="custom-control-input" id="agree10" name="agree-10" required>
                          <label class="custom-control-label" for="agree10"> I confirm that the information provided is true and complete to the best of my knowledge.</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                          <input onchange="checkstep16()" type="checkbox" class="custom-control-input" id="agree11" name="agree-11" required>
                          <label class="custom-control-label" for="agree11"> For UK licence holder: I agree for my personal information to be used to conduct a DVLA licence check.</label>
                      </div>
                  </div>

                <!--####################d##################################################################-->
                  <div class="tab">
                      <h4>Proof of Address</h4>
                      <p class="text-muted">Must be lated within 3 months</p>
                      <hr id="top-hr">
                      <p>Please upload a document that can be used as proof address. Acceptable forms of proof of address include; utility bill, bank statement, bank letter, council issued letter, HMRC letter. </p>
                      <p class="font-weight-bold">Note: The letter should be visible in full-page format showing all edges, be addressed to you at your current address and be dated within 3 months of today. </p>
                      <div class="form-group">
                          <label for="proofdoctype" class="font-weight-bold"> Document Type <strong class="text-danger">*</strong></label>
                          <select onchange="checkstep17()" name="proofdoctype" class="browser-default custom-select custom-select-mb-3 required" id="proofdoctype" name="proofdoctype" required>
                              <option value="none" disabled selected>Select an option</option>
                              <option value="Utility Bill">Utility Bill</option>
                              <option value="Bank Statement">Bank Statement</option>
                              <option value="Bank Letter">Bank Letter</option>
                              <option value="Council Issued Letter">Council Issued Letter</option>
                              <option value="HMRC Letter">HMRC Letter</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <p class="font-weight-bold">Driving POA Upload<strong class="text-danger">* (images, .pdf, .doc)</strong></p>
                          <div class="input-group">
                              <div class="custom-file">
                                  <input onchange="poafilechecking()" type="file" class="custom-file-input" name="proofdocupload" id="uploadpoa" accept=".docx,.doc,.pdf,image/*" required>
                                  <label class="custom-file-label" for="uploadpoa">
                                      POA Upload
                                  </label>
                              </div>
                          </div>
                          <div id="upload-file-3"></div>
                          <script>
                              function poafilechecking()
                              {
                                  document.getElementById('upload-file-3').innerHTML = "";
                                  var allowedextensions = /(\.jpg|\.jpeg|\.png|\.bmp|\.gif|\.pdf|\.doc|\.docx)$/i;
                                  const fi = document.getElementById('uploadpoa');
                                  maxfilesize = 10 * 1024 * 1024;
                                  var x = $('#uploadpoa').val();
                                  filesize = fi.files[0].size;
                                  if(x!="") {
                                      if(filesize > maxfilesize)
                                      {
                                          document.getElementById('upload-file-3').innerHTML = "<p class='text-danger'>Try again!Maximum File Size is 10MB</p>";
                                          document.getElementById('uploadpoa').value="";
                                      }
                                      else if(!allowedextensions.exec(x))
                                      {
                                          document.getElementById('upload-file-3').innerHTML = "<p class='text-danger'>Try again! Not allowed file extension!</p>";
                                          document.getElementById('uploadpoa').value="";
                                      }
                                      else
                                      {
                                          document.getElementById('upload-file-3').innerHTML = "<p class='text-purple'>File is Uploaded</p>";

                                      }
                                  }
                                  else
                                  {
                                      document.getElementById('upload-file-3').innerHTML = "";
                                  }
                              }
                          </script>
                      </div>
                  </div>
                <!--####################d##################################################################-->
                    <div class="tab">
                        <h4>Enter password for you'r account</h4>
                        <hr id="top-hr">
                        <div class="form-group justify-content-center text-center">
                            <button class="btn btn-outline-dark" onclick="generatePassword()">generate password</button>
                            <div class="input-group mb-2"  id="show_hide_password1">
                                <div class="input-group-addon p-0">
                                    <div class="input-group-text"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></div>
                                </div>
                                <input id="password" onchange="checkstep18()" type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>
                            <p class="text-muted">password must contains number (0-9), simple and capital alphabetic letters (a-z, A-Z), special charcter (!@#$%^&*{[)</p>
                            <div class="input-group mb-2"  id="show_hide_password2">
                                <div class="input-group-addon p-0">
                                    <div class="input-group-text"><a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a></div>
                                </div>
                                <input id="confirmpassword" onchange="checkstep18()" type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>
                            <div id="notify-pwd"></div>
                        </div>

                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
                            </div>

                    </div>
                  <!--####################d##################################################################-->
                  <div class="tab">
                      <div id="final-notify">
                          <div class="alert alert-success fade show justify-content-center text-center" role="alert">
                              <strong>Confirmation!</strong><p class="text-muted">Please confirm the submission by clicking confirm button below.!</p>
                              <h5>PLEASE NOTE</h5>
                              <h6>THE PAGE WILL GO BLANK AFTER CLICKING SUBMIT BELOW.</h6>
                              <h6>PLEASE WAIT FOR THE PAGE TO LOAD WITHOUT HITTING REFRESH OR LOSING THE PAGE.</h6>
                          </div>
                      </div>
                  </div>
                <!--####################d##################################################################-->
                <div style="overflow:auto;">
                  <div style="float:right;">
                      <button type="submit" class="btn btn-primary" id="sbtBtn" onclick="submit()">Submit</button>
                      <button type="button" class="btn btn-deep-orange" id="prevBtn" onclick="nextPrev(-1)">Back</button>
                    <button type="button" class="btn btn-deep-purple" id="nextBtn" onclick="nextPrev(1)">Next</button>
                  </div>
                </div>

              </form>
              <!--FORM-END-->

        </div>
    </div>

    </div>
<?php
require ('../assets/footer.php');
?>
              <script>

                //SCRIPT FOR SECONDARY HEADER-START
                function openNav() {
                  document.getElementById("myNav").style.display = "block";
                  document.getElementById("toggle-main").style.display = "none";
                }

                function closeNav() {
                  document.getElementById("myNav").style.display = "none";
                  document.getElementById("toggle-main").style.display = "block";
                }
                //SCRIPT FOR SECONDARY HEADER-END

                //SCRIPT FOR FORM-START
                var currentTab = 0; // Current tab is set to be the first tab (0)
                showTab(currentTab); // Display the current tab

                function showTab(n) {
                    // This function will display the specified tab of the form ...
                    var x = document.getElementsByClassName("tab");
                    x[n].style.display = "block";
                    // ... and fix the Previous/Next buttons:
                    if (n == 0) {
                        document.getElementById("prevBtn").style.display = "none";
                        document.getElementById("sbtBtn").style.display = "none";
                    } else {
                        document.getElementById("prevBtn").style.display = "inline";
                    }
                    if (n == (x.length - 1)) {
                        document.getElementById("nextBtn").style.display = "none";
                        document.getElementById("sbtBtn").style.display = "inline";

                    } else {
                        document.getElementById("nextBtn").innerHTML = "Next";
                        document.getElementById("sbtBtn").style.display = "none";
                        document.getElementById("nextBtn").style.display = "inline";

                    }
                    // ... and run a function that displays the correct step indicator:
                    fixStepIndicator(n)
                }

                function submit()
                {
                    $('#regForm').on('submit', function(e){
                        e.preventDefault();
                    });
                }
                function nextPrev(n) {
                    // This function will figure out which tab to display
                    var x = document.getElementsByClassName("tab");
                    // Exit the function if any field in the current tab is invalid:
                    if (n == 1 && !validateForm()) return false;
                    // Hide the current tab:
                    x[currentTab].style.display = "none";
                    // Increase or decrease the current tab by 1:
                    currentTab = currentTab + n;
                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                    // if you have reached the end of the form... :
                    if (currentTab >= x.length) {
                        //...the form gets submitted:
                        return false;
                    }
                    // Otherwise, display the correct tab:
                    showTab(currentTab);
                }

                function validateForm() {
                    // This function deals with validation of the form fields
                    var x, y,p, i, valid = true;
                    x = document.getElementsByClassName("tab");
                    y = x[currentTab].getElementsByTagName("input");
                    p = x[currentTab].getElementsByTagName("select");
                    // A loop that checks every input field in the current tab:
                    for (i = 0; i < y.length; i++) {
                        // If a field is empty...
                        if (y[i].value == "") {
                            // add an "invalid" class to the field:
                            y[i].className += " invalid";
                            // and set the current valid status to false:
                            valid = false;
                        }
                    }
                    for (i = 0; i < p.length; i++) {
                        // If a field is empty...
                        if (p[i].value == "") {
                            // add an "invalid" class to the field:
                            p[i].className += " valid";
                            // and set the current valid status to false:
                            valid = false;
                        }
                    }
                    // If the valid status is true, mark the step as finished and valid:
                    if (valid) {
                        document.getElementsByClassName("step")[currentTab].className += " finish";
                    }
                    return valid; // return the valid status
                }

                function fixStepIndicator(n) {
                    // This function removes the "active" class of all steps...
                    var i, x = document.getElementsByClassName("step");
                    for (i = 0; i < x.length; i++) {
                        x[i].className = x[i].className.replace(" active", "");
                    }
                    //... and adds the "active" class to the current step:
                    x[n].className += " active";
                }

                //SCRIPT FOR FORM-END

                //SCRIPT FOR FORM VALIDATION-START


                //SCRIPT FOR FORM VALIDATION-END



                // Material Select Initialization
                $(document).ready(function() {
                  $('.mdb-select').materialSelect();
                });

                var percentage = 0;

                function check(n, m) {
                    if (n < 6) {
                        percentage = 0;
                        $(".progress-bar").css("background", "#dd4b39");
                    } else if (n < 8) {
                        percentage = 20;
                        $(".progress-bar").css("background", "#9c27b0");
                    } else if (n < 10) {
                        percentage = 40;
                        $(".progress-bar").css("background", "#ff9800");
                    } else {
                        percentage = 60;
                        $(".progress-bar").css("background", "#4caf50");
                    }

                    // Check for the character-set constraints
                    // and update percentage variable as needed.

                    //Lowercase Words only
                    if ((m.match(/[a-z]/) != null))
                    {
                        percentage += 10;

                    }

                    //Uppercase Words only
                    if ((m.match(/[A-Z]/) != null))
                    {
                        percentage += 10;
                    }

                    //Digits only
                    if ((m.match(/0|1|2|3|4|5|6|7|8|9/) != null))
                    {
                        percentage += 10;
                    }

                    //Special characters
                    if ((m.match(/\W/) != null) && (m.match(/\D/) != null))
                    {
                        percentage += 10;
                    }

                    // Update the width of the progress bar
                    $(".progress-bar").css("width", percentage + "%");
                    if(percentage==100)
                    {
                        document.getElementById('nextBtn').disabled = false;
                        document.getElementById('notify-pwd').innerHTML="";
                    }else
                    {
                        document.getElementById('nextBtn').disabled = true;
                        document.getElementById('notify-pwd').innerHTML="<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">\n" +
                            "  <strong>Try again!</strong> It is necessary to fill the progress bar for your safety.\n" +
                            "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">\n" +
                            "    <span aria-hidden=\"true\">&times;</span>\n" +
                            "  </button>\n" +
                            "</div>";
                    }


                }


                // Update progress bar as per the input
                $(document).ready(function() {
                    // Whenever the key is pressed, apply condition checks.
                    $("#password").keyup(function() {
                        var m = $(this).val();
                        var n = m.length;

                        // Function for checking
                        check(n, m);

                        var a1 = document.getElementById('password').value;
                        var a2 = document.getElementById('confirmpassword').value;
                        var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&-+[{}<>?]{8,}$/;


                        if(a1==a2)
                        {
                            document.getElementById('nextBtn').disabled = false;
                        }
                        if(a1!=a2)
                        {
                            $('#nextBtn').attr("disabled", true);
                        }

                    });

                    $("#confirmpassword").keyup(function (){
                        var a1 = document.getElementById('password').value;
                        var a2 = document.getElementById('confirmpassword').value;
                        var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&-+[{}<>?]{8,}$/;


                        if(a1==a2)
                        {
                            document.getElementById('nextBtn').disabled = false;
                        }
                        if(a1!=a2)
                        {
                            $('#nextBtn').attr("disabled", true);
                        }
                    });
                });

                function generatePassword() {
                    var length = 16,
                        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-+[{}<>?",
                        retVal = "";
                    for (var i = 0, n = charset.length; i < length; ++i) {
                        retVal += charset.charAt(Math.floor(Math.random() * n));
                    }
                    check(retVal.length, retVal);
                    document.getElementById('password').value=retVal;
                    document.getElementById('confirmpassword').value=retVal;
                }

                $(document).ready(function() {
                    $("#show_hide_password1 a").on('click', function(event) {
                        event.preventDefault();
                        if($('#show_hide_password1 input').attr("type") == "text"){
                            $('#show_hide_password1 input').attr('type', 'password');
                            $('#show_hide_password1 i').addClass( "fa-eye-slash" );
                            $('#show_hide_password1 i').removeClass( "fa-eye" );
                        }else if($('#show_hide_password1 input').attr("type") == "password"){
                            $('#show_hide_password1 input').attr('type', 'text');
                            $('#show_hide_password1 i').removeClass( "fa-eye-slash" );
                            $('#show_hide_password1 i').addClass( "fa-eye" );
                        }
                    });

                    $("#show_hide_password2 a").on('click', function(event) {
                        event.preventDefault();
                        if($('#show_hide_password2 input').attr("type") == "text"){
                            $('#show_hide_password2 input').attr('type', 'password');
                            $('#show_hide_password2 i').addClass( "fa-eye-slash" );
                            $('#show_hide_password2 i').removeClass( "fa-eye" );
                        }else if($('#show_hide_password2 input').attr("type") == "password"){
                            $('#show_hide_password2 input').attr('type', 'text');
                            $('#show_hide_password2 i').removeClass( "fa-eye-slash" );
                            $('#show_hide_password2 i').addClass( "fa-eye" );
                        }
                    });
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

<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"
></script>
</body>

</html>
