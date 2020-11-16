<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else {
    echo "Connected successfully<br>";
    $db_check = mysqli_select_db($conn,"drivingboss");
    if(empty($db)){
        $db_create_query = "CREATE DATABASE drivingboss";
        $db_attempt = mysqli_query($conn,$db_create_query);
        if(!$db_attempt){
            echo "Database already created<br>";
        }else{
            echo "Database creation ok<br>!";
        }
    }
    $userT_check_attempt_query = "SELECT * FROM user";
    $userT_check_attempt = mysqli_query($conn, $userT_check_attempt_query);
    if(!$userT_check_attempt){
        echo "Creating user table.....<br>";
        $userT_create_attempt_query = "CREATE TABLE `drivingboss`.`user` ( `uid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL , `email` VARCHAR(70) NOT NULL , `fullname` VARCHAR(100) NOT NULL , `phoneno` INT NOT NULL ,`bday` VARCHAR(20) NOT NULL ,`pwd` VARCHAR(150) NOT NULL , `verified` VARCHAR(3) NOT NULL DEFAULT 'no' , `registered_date` VARCHAR(50) NOT NULL DEFAULT CURRENT_TIMESTAMP , `last_login` VARCHAR(50) NOT NULL DEFAULT 'not yet' ,`role` VARCHAR(5) NOT NULL DEFAULT 'user', `vkey` VARCHAR(50) NOT NULL, `comment` VARCHAR(500) NULL ,PRIMARY KEY (`uindex`),UNIQUE `uid` (`uid`),UNIQUE `email` (`email`)) ENGINE = InnoDB";
        mysqli_query($conn, $userT_create_attempt_query);
        echo "Finishing user table.....<br>";
    }else{
        echo "User table already created<br>";
    }

    $depotT_check_attempt_query = "SELECT * FROM depot";
    $depotT_check_attempt = mysqli_query($conn, $depotT_check_attempt_query);
    if(!$depotT_check_attempt){
        echo "Creating depot table.....<br>";
        $depotT_create_attempt_query = "CREATE TABLE `drivingboss`.`depot` ( `did` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL , `depotname` VARCHAR(100) NOT NULL , PRIMARY KEY (`did`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $depotT_create_attempt_query);
        echo "Finishing depot table.....<br>";
    }else{
        echo "User depot already created<br>";
    }

    $initialeligibilityT_check_attempt_query = "SELECT * FROM initialeligibility";
    $initialeligibilityT_check_attempt = mysqli_query($conn, $initialeligibilityT_check_attempt_query);
    if(!$initialeligibilityT_check_attempt){
        echo "Creating initialeligibility table.....<br>";
        $initialeligibilityT_create_attempt_query = "CREATE TABLE `drivingboss`.`initialeligibility` ( `ieid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL , `catb_available` VARCHAR(3) NOT NULL , `catb_date` VARCHAR(50) NULL ,PRIMARY KEY (`ieid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $initialeligibilityT_create_attempt_query);
        echo "Finishing initialeligibility table.....<br>";
    }else{
        echo "User initialeligibility already created<br>";
    }

    $vehicleT_check_attempt_query = "SELECT * FROM vehicle";
    $vehicleT_check_attempt = mysqli_query($conn, $vehicleT_check_attempt_query);
    if(!$vehicleT_check_attempt){
        echo "Creating vehicle table.....<br>";
        $vehicleT_create_attempt_query = "CREATE TABLE `drivingboss`.`vehicle` ( `vid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL , `need_vehicle` VARCHAR(3) NOT NULL ,PRIMARY KEY (`vid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $vehicleT_create_attempt_query);
        echo "Finishing vehicle table.....<br>";
    }else{
        echo "User vehicle already created<br>";
    }

    $GDPRT_check_attempt_query = "SELECT * FROM gdpr";
    $GDPRT_check_attempt = mysqli_query($conn, $GDPRT_check_attempt_query);
    if(!$GDPRT_check_attempt){
        echo "Creating gdpr table.....<br>";
        $GDPRT_create_attempt_query = "CREATE TABLE `drivingboss`.`gdpr` ( `gdprid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL , `gdpr_dec` VARCHAR(8) NOT NULL ,PRIMARY KEY (`gdprid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $GDPRT_create_attempt_query);
        echo "Finishing gdpr table.....<br>";
    }else{
        echo "User gdpr already created<br>";
    }

    $policyT_check_attempt_query = "SELECT * FROM policy";
    $policyT_check_attempt = mysqli_query($conn, $policyT_check_attempt_query);
    if(!$policyT_check_attempt){
        echo "Creating policy table.....<br>";
        $policyT_create_attempt_query = "CREATE TABLE `drivingboss`.`policy` ( `policyid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL , `policy_dec` VARCHAR(8) NOT NULL ,PRIMARY KEY (`policyid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $policyT_create_attempt_query);
        echo "Finishing policy table.....<br>";
    }else{
        echo "User policy created<br>";
    }

    $medicalfitnessT_check_attempt_query = "SELECT * FROM medicalfiteness";
    $medicalfitnessT_check_attempt = mysqli_query($conn, $medicalfitnessT_check_attempt_query);
    if(!$medicalfitnessT_check_attempt){
        echo "Creating Medical Fitness table.....<br>";
        $medicalfitnessT_create_attempt_query = "CREATE TABLE `drivingboss`.`medicalfiteness` ( `mfid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL , `mf_con_1` VARCHAR(8) NOT NULL ,`mf_con_2` VARCHAR(8) NOT NULL ,`mf_con_3` VARCHAR(8) NOT NULL ,`mf_con_4` VARCHAR(8) NOT NULL ,`mf_con_5` VARCHAR(8) NOT NULL ,`mf_con_6` VARCHAR(8) NOT NULL ,`mf_dec` VARCHAR(8) NOT NULL ,PRIMARY KEY (`mfid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $medicalfitnessT_create_attempt_query);
        echo "Finishing Medical Fitness table.....<br>";
    }else{
        echo "User Medical Fitness created<br>";
    }

    $nondiscT_check_attempt_query = "SELECT * FROM nondisclosure";
    $nondiscT_check_attempt = mysqli_query($conn, $nondiscT_check_attempt_query);
    if(!$nondiscT_check_attempt){
        echo "Creating nondisclosure table.....<br>";
        $nondiscT_create_attempt_query = "CREATE TABLE `drivingboss`.`nondisclosure` ( `ndscid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL , `ndsc_dec` VARCHAR(8) NOT NULL ,PRIMARY KEY (`ndscid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $nondiscT_create_attempt_query);
        echo "Finishing nondisclosure table.....<br>";
    }else{
        echo "User nondisclosure created<br>";
    }

    $stoppolicyT_check_attempt_query = "SELECT * FROM stoppolicy";
    $stoppolicyT_check_attempt = mysqli_query($conn, $stoppolicyT_check_attempt_query);
    if(!$stoppolicyT_check_attempt){
        echo "Creating stoppolicy table.....<br>";
        $stoppolicyT_create_attempt_query = "CREATE TABLE `drivingboss`.`stoppolicy` ( `spid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL , `sp_dec` VARCHAR(8) NOT NULL ,PRIMARY KEY (`spid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $stoppolicyT_create_attempt_query);
        echo "Finishing stoppolicy table.....<br>";
    }else{
        echo "User stoppolicy created<br>";
    }

    $securitypolicyT_check_attempt_query = "SELECT * FROM securitypolicy";
    $securitypolicyT_check_attempt = mysqli_query($conn, $securitypolicyT_check_attempt_query);
    if(!$securitypolicyT_check_attempt){
        echo "Creating securitypolicy table.....<br>";
        $securitypolicyT_create_attempt_query = "CREATE TABLE `drivingboss`.`securitypolicy` ( `secpid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL ,`sec_policy` VARCHAR(50) NOT NULL,`secp_dec` VARCHAR(8) NOT NULL ,PRIMARY KEY (`secpid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $securitypolicyT_create_attempt_query);
        echo "Finishing securitypolicy table.....<br>";
    }else{
        echo "User securitypolicy created<br>";
    }

    $paymentdetT_check_attempt_query = "SELECT * FROM paymentdet";
    $paymentdetT_check_attempt = mysqli_query($conn, $paymentdetT_check_attempt_query);
    if(!$paymentdetT_check_attempt){
        echo "Creating payment details table.....<br>";
        $paymentdetT_create_attempt_query = "CREATE TABLE `drivingboss`.`paymentdet` ( `paydetid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL ,`pfname` VARCHAR(20) NOT NULL,`plname` VARCHAR(20) NOT NULL ,`psort_code` INT NOT NULL,`pacc_no` VARCHAR(30) NOT NULL  , `bankname` VARCHAR(30) NOT NULL, `p_dec` VARCHAR(8) NOT NULL, PRIMARY KEY (`paydetid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $paymentdetT_create_attempt_query);
        echo "Finishing payment details  table.....<br>";
    }else{
        echo "User payment details created<br>";
    }

    $healthsafetyT_check_attempt_query = "SELECT * FROM healthsafety";
    $healthsafetyT_check_attempt = mysqli_query($conn, $healthsafetyT_check_attempt_query);
    if(!$healthsafetyT_check_attempt){
        echo "Creating health safety table.....<br>";
        $healthsafetyT_create_attempt_query = "CREATE TABLE `drivingboss`.`healthsafety` ( `healthsafetyid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL , `healthsafety_dec` VARCHAR(8) NOT NULL, PRIMARY KEY (`healthsafetyid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $healthsafetyT_create_attempt_query);
        echo "Finishing health safety  table.....<br>";
    }else{
        echo "User health safety created<br>";
    }

    $accuratebackT_check_attempt_query = "SELECT * FROM accurateback";
    $accuratebackT_check_attempt = mysqli_query($conn, $accuratebackT_check_attempt_query);
    if(!$accuratebackT_check_attempt){
        echo "Creating accurateback table.....<br>";
        $accuratebackT_create_attempt_query = "CREATE TABLE `drivingboss`.`accurateback` ( `accuratebackid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL ,`accu_dec` VARCHAR(8) NOT NULL,`birth_country` VARCHAR(30) NOT NULL ,`birth_nationality` VARCHAR(30) NOT NULL,`birth_town` VARCHAR(30) NOT NULL  , `mfname` VARCHAR(20) NOT NULL, `mlname` VARCHAR(20) NOT NULL,`othername_check` VARCHAR(3) NOT NULL,`otherfname` VARCHAR(20) NOT NULL, `otherlname` VARCHAR(20) NOT NULL,`othername_from` VARCHAR(20) NULL,`othername_to` VARCHAR(20) NULL,`current_hno` VARCHAR(15) NOT NULL,`current_street` VARCHAR(50) NOT NULL, `current_town` VARCHAR(20) NOT NULL,`current_city` VARCHAR(20) NOT NULL,`current_state` VARCHAR(20) NOT NULL,`current_zip` VARCHAR(30) NOT NULL, `current_when` VARCHAR(20) NOT NULL, `old_hno` VARCHAR(15) NULL,`old_street` VARCHAR(50) NULL, `old_town` VARCHAR(20) NULL,`old_city` VARCHAR(20) NULL,`old_state` VARCHAR(20) NULL,`old_zip` VARCHAR(30) NULL, `old_when` VARCHAR(20) NULL,PRIMARY KEY (`accuratebackid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $accuratebackT_create_attempt_query);
        echo "Finishing accurateback  table.....<br>";
    }else{
        echo "User accurateback created<br>";
    }

    $identityT_check_attempt_query = "SELECT * FROM identity";
    $identityT_check_attempt = mysqli_query($conn, $identityT_check_attempt_query);
    if(!$identityT_check_attempt){
        echo "Creating identity table.....<br>";
        $identityT_create_attempt_query = "CREATE TABLE `drivingboss`.`identity` ( `identityid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL ,`current_nationality` VARCHAR(30) NOT NULL,`nin` VARCHAR(30) NOT NULL  , `idtype_check` VARCHAR(30) NOT NULL, `passportup` VARCHAR(100) NULL,`nidfrontup` VARCHAR(100) NULL,`nidbackup` VARCHAR(100) NULL, `birthcertificateup` VARCHAR(100) NULL,`doc_issue_date` VARCHAR(20) NOT NULL,`doc_exp_date` VARCHAR(20) NOT NULL,`doc_type_check` VARCHAR(30) NOT NULL,`visaup` VARCHAR(100) NULL, `permitfrontup` VARCHAR(100) NULL,`permitbackup` VARCHAR(100) NULL,`holetterup` VARCHAR(100) NULL,PRIMARY KEY (`identityid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $identityT_create_attempt_query);
        echo "Finishing identity  table.....<br>";
    }else{
        echo "User identity created<br>";
    }

    $drivinglicT_check_attempt_query = "SELECT * FROM drivinglic";
    $drivinglicT_check_attempt = mysqli_query($conn, $drivinglicT_check_attempt_query);
    if(!$drivinglicT_check_attempt){
        echo "Creating drivinglic table.....<br>";
        $drivinglicT_create_attempt_query = "CREATE TABLE `drivingboss`.`drivinglic` ( `drivinglicid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL ,`licissue_country` VARCHAR(30) NOT NULL,`licfrontup` VARCHAR(100) NOT NULL  , `licbackup` VARCHAR(100) NOT NULL, `licno` VARCHAR(30) NULL,`licisse_date` VARCHAR(20) NOT NULL,`licexp_date` VARCHAR(20) NOT NULL, `endors_check` VARCHAR(3) NOT NULL,`lic_dec_1` VARCHAR(8) NOT NULL,`lic_dec_2` VARCHAR(8) NOT NULL,PRIMARY KEY (`drivinglicid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $drivinglicT_create_attempt_query);
        echo "Finishing drivinglic  table.....<br>";
    }else{
        echo "User identity created<br>";
    }

    $poaT_check_attempt_query = "SELECT * FROM poa";
    $poaT_check_attempt = mysqli_query($conn, $poaT_check_attempt_query);
    if(!$poaT_check_attempt){
        echo "Creating poa table.....<br>";
        $poaT_create_attempt_query = "CREATE TABLE `drivingboss`.`poa` ( `poaid` INT NOT NULL AUTO_INCREMENT , `uindex` VARCHAR(150) NOT NULL ,`poadoc_type_check` VARCHAR(30) NOT NULL,`poaup` VARCHAR(100) NOT NULL,PRIMARY KEY (`poaid`), FOREIGN KEY (uindex) REFERENCES user(uindex)) ENGINE = InnoDB;";
        mysqli_query($conn, $poaT_create_attempt_query);
        echo "Finishing poa  table.....<br>";
    }else{
        echo "User poa created<br>";
    }

}
$conn->close();
?>}