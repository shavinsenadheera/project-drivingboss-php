<!-- Update progress-bar whenever input field is updated.-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- Required CDN's -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<style>

</style>

<body>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div class="container-fluid">
                <center>

                </center>
                <br>
            </div>
        </div>
        <div class="col-sm-3">   </div>
    </div>
</div>
<script>
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

        var a = $('#password').val();
        var b = $('#confirmpassword').val();


        if(percentage==100 && a==b)
        {
            $('#confirm').attr('disabled',false);
        }
        else
        {
            $('#confirm').attr('disabled',true);
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
        });

        $("#confirmpassword").keyup(function (){
            var a = $('#password').val();
            var b = $('#confirmpassword').val();
            if(a==b)
            {
                $('#confirm').attr('disabled',false);
            }
            else
            {
                $('#confirm').attr('disabled',true);
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>


echo "TAB 1 <br>";
echo "1===>".$_POST['selectdeopt']."<br>";
echo "TAB 2<br>";
echo "2===>".$_POST['form-flname']."<br>";
echo "3===>".$_POST['form-bday']."<br>";
echo "4===>".$_POST['form-email']."<br>";
echo "5===>".$_POST['form-pn']."<br>";
echo "TAB 3<br>";
echo "6===>".$_POST['confirmlicence']."<br>";
echo "7===>".$_POST['datecategoryb']."<br>";
echo "TAB 4<br>";
echo "8===>".$_POST['checkneedvehicle']."<br>";
echo "TAB 5<br>";
echo "9===>".$_POST['agree-1']."<br>";
echo "TAB 6<br>";
echo "10===>".$_POST['agree-2']."<br>";
echo "TAB 7<br>";
echo "11===>".$_POST['confirm-1']."<br>";
echo "12===>".$_POST['confirm-2']."<br>";
echo "13===>".$_POST['confirm-3']."<br>";
echo "14===>".$_POST['confirm-5']."<br>";
echo "15===>".$_POST['confirm-6']."<br>";
echo "16===>".$_POST['confirm-7']."<br>";
echo "17===>".$_POST['agree-3']."<br>";
echo "TAB 8<br>";
echo "18===>".$_POST['agree-4']."<br>";
echo "TAB 9<br>";
echo "19===>".$_POST['agree-5']."<br>";
echo "TAB 10<br>";
echo "20===>".$_POST['choosesecuritytype']."<br>";
echo "21===>".$_POST['agree-6']."<br>";
echo "TAB 11<br>";
echo "22===>".$_POST['payment-fname']."<br>";
echo "23===>".$_POST['payment-lname']."<br>";
echo "24===>".$_POST['payment-sortcode']."<br>";
echo "25===>".$_POST['payment-accno']."<br>";
echo "26===>".$_POST['payment-bankname']."<br>";
echo "27===>".$_POST['agree-7']."<br>";
echo "TAB 12<br>";
echo "28===>".$_POST['agree-8']."<br>";
echo "TAB 13<br>";
echo "29===>".$_POST['agree-9']."<br>";
echo "TAB 14<br>";
echo "29===>".$_POST['birthcountry']."<br>";
echo "30===>".$_POST['birthnationality']."<br>";
echo "31===>".$_POST['birthtwon']."<br>";
echo "32===>".$_POST['motherfname']."<br>";
echo "33===>".$_POST['motherlname']."<br>";
echo "34===>".$_POST['othername']."<br>";
echo "35===>".$_POST['oldfname']."<br>";
echo "36===>".$_POST['oldlname']."<br>";
echo "37===>".$_POST['oldnamefrom']."<br>";
echo "38===>".$_POST['oldnameto']."<br>";
echo "39===>".$_POST['currenthouseno']."<br>";
echo "40===>".$_POST['currentstreet']."<br>";
echo "41===>".$_POST['currenttown']."<br>";
echo "42===>".$_POST['currentcity']."<br>";
echo "43===>".$_POST['currentstate']."<br>";
echo "44===>".$_POST['currentzip']."<br>";
echo "45===>".$_POST['whenmoveto-1']."<br>";
echo "46===>".$_POST['oldhouseno']."<br>";
echo "47===>".$_POST['oldhousestreet']."<br>";
echo "48===>".$_POST['oldhousetown']."<br>";
echo "49===>".$_POST['oldhousecity']."<br>";
echo "50===>".$_POST['oldhousestate']."<br>";
echo "51===>".$_POST['oldhousezip']."<br>";
echo "51===>".$_POST['whenmoveto-2']."<br>";
echo "TAB 15<br>";
echo "52===>".$_POST['currentnationality']."<br>";
echo "53===>".$_POST['nin']."<br>";
echo "54===>".$_POST['idtype']."<br>";
if($_POST['idtype']=="passport") {
echo "55===>" . $_POST['ppupload'] . "<br>";
}if($_POST['idtype']=="nid") {
echo "56===>" . $_POST['nidfrontupload'] . "<br>";
echo "57===>" . $_POST['nidbackupload'] . "<br>";
}if($_POST['idtype']=="bc") {
echo "58===>" . $_POST['bcupload'] . "<br>";
}
echo "59===>".$_POST['docissuedate']."<br>";
echo "60===>".$_POST['docexpdate']."<br>";
echo "61===>".$_POST['doctype']."<br>";
if($_POST['doctype']=="visa") {
echo "62===>" . $_POST['visaupload'] . "<br>";
}if($_POST['doctype']=="residence") {
echo "63===>" . $_POST['rpfrontupload'] . "<br>";
echo "64===>" . $_POST['rpbackupload'] . "<br>";
}if($_POST['doctype']=="homeoffice") {
echo "65===>" . $_POST['holupload'] . "<br>";
}
echo "TAB 16<br>";
echo "66===>".$_POST['liccountry']."<br>";
echo "67===>".$_POST['licfrontupload']."<br>";
echo "68===>".$_POST['licbackupload']."<br>";
echo "69===>".$_POST['licno']."<br>";
echo "70===>".$_POST['licissuedate']."<br>";
echo "71===>".$_POST['licexpiredate']."<br>";
echo "72===>".$_POST['checkpointend']."<br>";
echo "73===>".$_POST['agree-10']."<br>";
echo "74===>".$_POST['agree-11']."<br>";
echo "TAB 17<br>";
echo "75===>".$_POST['proofdoctype']."<br>";
echo "76===>".$_POST['proofdocupload']."<br>";
echo "TAB 17<br>";
