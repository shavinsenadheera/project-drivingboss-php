$(function() {

    var x = document.getElementsByClassName('steps');
    var a = document.getElementById('selectDepot').value;
    if (a == "none") {
        $('#nextBtn').attr("disabled", true);
        document.getElementById('status-1').innerHTML="";
    } else {
        document.getElementById('nextBtn').disabled = false;

    }

    var ntabs = 0;

    $('#nextBtn').click(function(){
        ntabs++;
        if($("#step2").hasClass("active"))
        {
            const re1 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
            const re2 = /^[a-zA-Z ]+$/;
            const re3 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var a2 = document.getElementById('form-birthday').value;

            if(re3.test($('#form-email').val())==true && re1.test($('#form-pn').val())==true && re2.test($('#form-fname-lname').val())==true && a2!="")
            {
                document.getElementById('nextBtn').disabled = false;
            }
            if(re3.test($('#form-email').val())==false || re1.test($('#form-pn').val())==false || re2.test($('#form-fname-lname').val())==false || a2=="")
            {
                document.getElementById('nextBtn').disabled = true;
            }
        }
        if($("#step3").hasClass("active"))
        {
            var a = document.getElementById('checkLicense').value;
            if (a == "none") {
                $('#nextBtn').attr("disabled", true);
            } else {
                document.getElementById('nextBtn').disabled = false
            }
        }
        if($("#step4").hasClass("active"))
        {
            var a = document.getElementById('checkNeedvehicle').value;
            if (a == "none") {
                $('#nextBtn').attr("disabled", true);
            } else {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($("#step5").hasClass("active"))
        {
            var a = document.getElementById('agree1').checked;
            if (a == false) {
                $('#nextBtn').attr("disabled", true);
            } else {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($("#step6").hasClass("active"))
        {
            var a = document.getElementById('agree2').checked;
            if (a == false) {
                $('#nextBtn').attr("disabled", true);
            } else {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($("#step7").hasClass("active"))
        {
            var a1 = document.getElementById('confirm1').checked;
            var a2 = document.getElementById('confirm2').checked;
            var a3 = document.getElementById('confirm3').checked;
            var a5 = document.getElementById('confirm5').checked;
            var a6 = document.getElementById('confirm6').checked;
            var a7 = document.getElementById('confirm7').checked;
            var a8 = document.getElementById('agree3').checked;
            if (a1 == false || a2 == false || a3 == false || a5 == false || a6 == false || a7 == false || a8 == false)
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($('#step8').hasClass("active"))
        {
            var a = document.getElementById('agree4').checked;
            if(a==false)
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($('#step9').hasClass("active"))
        {
            var a = document.getElementById('agree5').checked;
            if(a==false)
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($('#step10').hasClass("active"))
        {
            var a1 = document.getElementById('agree6').checked;
            var a2 = document.getElementById('choosesecurity').value;

            if(a1==false || a2=="none")
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }

        if($('#step11').hasClass("active"))
        {
            var a1 = document.getElementById('ah-fname').value;
            var a2 = document.getElementById('ah-lname').value;
            var a3 = document.getElementById('ah-accno').value;
            var a4 = document.getElementById('ah-bankname').value;
            var a5 = document.getElementById('ah-sortcode').value;
            var a6 = document.getElementById('agree7').checked;

            if(a6==false || a1=="" || a2=="" || a3=="" || a4=="" || a5=="")
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($('#step12').hasClass("active"))
        {
            var a = document.getElementById('agree8').checked;

            if(a==false)
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($('#step13').hasClass("active"))
        {
            var a = document.getElementById('agree9').checked;

            if(a==false)
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($('#step14').hasClass("active"))
        {
            var a1 = document.getElementById('choosecountry-1').value;
            var a2 = document.getElementById('choosenationality').value;
            var a3 = document.getElementById('anothername').value;
            var a7 = document.getElementById('old-fname').value;
            var a8 = document.getElementById('old-lname').value;
            var a9 = document.getElementById('old-name-to').value;
            var a10 = document.getElementById('old-name-from').value;
            var a12 = document.getElementById('house-no').value;
            var a13 = document.getElementById('house-city').value;
            var a14 = document.getElementById('house-state').value;
            var a15 = document.getElementById('house-street').value;
            var a16 = document.getElementById('house-town').value;
            var a17 = document.getElementById('house-zip').value;
            var a18 = document.getElementById('phouse-city').value;
            var a19 = document.getElementById('phouse-no').value;
            var a20 = document.getElementById('phouse-state').value;
            var a21 = document.getElementById('phouse-street').value;
            var a22 = document.getElementById('phouse-zip').value;
            var a23 = document.getElementById('phouse-town').value;
            var a24 = document.getElementById('old-when-address-move').value;

            if(a1 == "none" || a2 == "none" || a3 == "none" || a7 == "" || a8 == "" || a9 == "" || a10 == "" || a11 == ""|| a12 == "" || a13 == "" || a14 == "" || a15 == "" || a16 == "" || a17 == "" || a18 == "" || a19 == "" || a20 == "" || a21 == "" || a22 == "" || a23 == "" || a24=="")
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($('#step15').hasClass("active"))
        {
            var a1 = document.getElementById('currentnationality-1').value;
            var a2 = document.getElementById('idtypes').value;
            var a3 = document.getElementById('doctype').value;

            if(a1 == "none" || a2 == "none" || a3 == "none")
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($('#step16').hasClass("active"))
        {
            var a1 = document.getElementById('pointendcheck').value;
            var a2 = document.getElementById('agree10').checked;
            var a3 = document.getElementById('agree11').checked;

            if(a1 == "none" || a2 == false || a3 == false)
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($('#step17').hasClass("active"))
        {
            var a = document.getElementById('proofdoctype').value;

            if(a == "none")
            {
                $('#nextBtn').attr("disabled", true);
            }
            else
            {
                document.getElementById('nextBtn').disabled = false;
            }
        }
        if($('#step18').hasClass("active"))
        {
            var a1 = document.getElementById('password').value;
            var a2 = document.getElementById('confirmpassword').value;
            var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&-+[{}<>?]{8,}$/;


            if(re.test(a1)==true && a1==a2)
            {
                document.getElementById('nextBtn').disabled = false;
            }
            if(re.test(a1)==false || a1!=a2)
            {
                $('#nextBtn').attr("disabled", true);
            }
        }

    });

    $('#prevBtn').click(function (){
        document.getElementById('nextBtn').disabled = false;
    });

    $('#form-email').keyup(function (){
        const re3 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(re3.test($('#form-email').val()))
        {
            document.getElementById('error-email').innerHTML ="";
        }
        else
        {
            document.getElementById('error-email').innerHTML ="<p class='text-danger'>invalid email <i class=\"far fa-frown\"></i> (ex: example@abc.com)</p>";
        }
        const re1 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
        const re2 = /^[a-zA-Z ]+$/;
        var a2 = document.getElementById('form-birthday').value;

        if(re3.test($('#form-email').val())==true && re1.test($('#form-pn').val())==true && re2.test($('#form-fname-lname').val())==true && a2!="")
        {
            document.getElementById('nextBtn').disabled = false;
        }
        if(re3.test($('#form-email').val())==false || re1.test($('#form-pn').val())==false || re2.test($('#form-fname-lname').val())==false || a2=="")
        {
            document.getElementById('nextBtn').disabled = true;
        }

    });

    $('#form-pn').keyup(function (){
        const re1 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

        if(re1.test($('#form-pn').val()))
        {
            document.getElementById('error-pn').innerHTML ="";
        }
        else
        {
            document.getElementById('error-pn').innerHTML ="<p class='text-danger'>invalid phone number <i class=\"far fa-frown\"></i> (ex: 1234567891)</p>";
        }
        const re2 = /^[a-zA-Z ]+$/;
        const re3 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var a2 = document.getElementById('form-birthday').value;

        if(re3.test($('#form-email').val())==true && re1.test($('#form-pn').val())==true && re2.test($('#form-fname-lname').val())==true && a2!="")
        {
            document.getElementById('nextBtn').disabled = false;
        }
        if(re3.test($('#form-email').val())==false || re1.test($('#form-pn').val())==false || re2.test($('#form-fname-lname').val())==false || a2=="")
        {
            document.getElementById('nextBtn').disabled = true;
        }
    });

    $('#form-fname-lname').keyup(function(){
       const re2 = /^[a-zA-Z ]+$/;

       if(re2.test($('#form-fname-lname').val()))
       {
           document.getElementById('error-flname').innerHTML ="";
       }
       else
       {
           document.getElementById('error-flname').innerHTML ="<p class='text-danger'>invalid name <i class=\"far fa-frown\"></i> (ex: John Mike)</p>";
       }
        const re1 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
        const re3 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var a2 = document.getElementById('form-birthday').value;

        if(re3.test($('#form-email').val())==true && re1.test($('#form-pn').val())==true && re2.test($('#form-fname-lname').val())==true && a2!="")
        {
            document.getElementById('nextBtn').disabled = false;
        }
        if(re3.test($('#form-email').val())==false || re1.test($('#form-pn').val())==false || re2.test($('#form-fname-lname').val())==false || a2=="")
        {
            document.getElementById('nextBtn').disabled = true;
        }
    });

    $('#ah-fname').keyup(function(){
        const re = /^[a-zA-Z ]+$/;
        if(re.test($('#ah-fname').val()))
        {
            document.getElementById('error-ah-fname').innerHTML ="";
        }
        else
        {
            document.getElementById('error-ah-fname').innerHTML ="<p class='text-danger'>invalid name <i class=\"far fa-frown\"></i> (ex: John)</p>";
        }
    });
    $('#ah-lname').keyup(function(){
        const re = /^[a-zA-Z ]+$/;
        if(re.test($('#ah-lname').val()))
        {
            document.getElementById('error-ah-lname').innerHTML ="";
        }
        else
        {
            document.getElementById('error-ah-lname').innerHTML ="<p class='text-danger'>invalid name <i class=\"far fa-frown\"></i> (ex: Mike)</p>";
        }
    });

    $('#ah-sortcode').keyup(function (){
        const re = /^[0-9]+$/;
        if(re.test($('#ah-sortcode').val()))
        {
            document.getElementById('error-sort-code').innerHTML ="";
        }
        else
        {
            document.getElementById('error-sort-code').innerHTML ="<p class='text-danger'>invalid sort number <i class=\"far fa-frown\"></i> (ex: 123456)</p>";
        }
    });

    $('#ah-accno').keyup(function (){
        const re = /^(?=.*?[1-9])[0-9()-]+$/;
        if(re.test($('#ah-accno').val()))
        {
            document.getElementById('error-acc-no').innerHTML ="";
        }
        else
        {
            document.getElementById('error-acc-no').innerHTML ="<p class='text-danger'>invalid account number <i class=\"far fa-frown\"></i> (ex: 123456789)</p>";
        }
    });

    $('#ah-bankname').keyup(function(){
        const re = /^[a-zA-Z ]+$/;
        if(re.test($('#ah-bankname').val()))
        {
            document.getElementById('error-bank-name').innerHTML ="";
        }
        else
        {
            document.getElementById('error-bank-name').innerHTML ="<p class='text-danger'>invalid bank name <i class=\"far fa-frown\"></i> (ex: ABC)</p>";
        }
    });

    $('#m-fname').keyup(function(){
        const re = /^[a-zA-Z ]+$/;
        if(re.test($('#m-fname').val()))
        {
            document.getElementById('error-mfname').innerHTML ="";
        }
        else
        {
            document.getElementById('error-mfname').innerHTML ="<p class='text-danger'>invalid name <i class=\"far fa-frown\"></i> (ex: John)</p>";
        }
    });
    $('#m-lname').keyup(function(){
        const re = /^[a-zA-Z ]+$/;
        if(re.test($('#m-lname').val()))
        {
            document.getElementById('error-mlname').innerHTML ="";
        }
        else
        {
            document.getElementById('error-mlname').innerHTML ="<p class='text-danger'>invalid name <i class=\"far fa-frown\"></i> (ex: Smith)</p>";
        }
    });
    $('#old-fname').keyup(function(){
        const re = /^[a-zA-Z ]+$/;
        if(re.test($('#old-fname').val()))
        {
            document.getElementById('error-pfname').innerHTML ="";
        }
        else
        {
            document.getElementById('error-pfname').innerHTML ="<p class='text-danger'>invalid name <i class=\"far fa-frown\"></i> (ex: John)</p>";
        }
    });
    $('#old-lname').keyup(function(){
        const re = /^[a-zA-Z ]+$/;
        if(re.test($('#old-lname').val()))
        {
            document.getElementById('error-plname').innerHTML ="";
        }
        else
        {
            document.getElementById('error-plname').innerHTML ="<p class='text-danger'>invalid name <i class=\"far fa-frown\"></i> (ex: Smith)</p>";
        }
    });
});


//STEP 1 VALIDATION CHECKING
function checkSelectDepot()
{
    var x = document.getElementById('selectDepot').value;
    if(x=="none")
    {
        $('#nextBtn').attr("disabled", true);
        document.getElementById('selectDepot').style.border="1px solid red";
    }
    else
    {
        document.getElementById('nextBtn').disabled = false;
        document.getElementById('status-1').innerHTML="";
    }
}
//STEP 1 VALIDATION CHECKING ---END

//STEP 2 VALIDATION CHECKING
function checkstep2()
{
    const re1 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    const re2 = /^[a-zA-Z ]+$/;
    const re3 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var a2 = document.getElementById('form-birthday').value;

    if(re3.test($('#form-email').val())==true && re1.test($('#form-pn').val())==true && re2.test($('#form-fname-lname').val())==true && a2!="")
    {
        document.getElementById('nextBtn').disabled = false;
    }
    if(re3.test($('#form-email').val())==false || re1.test($('#form-pn').val())==false || re2.test($('#form-fname-lname').val())==false || a2=="")
    {
        document.getElementById('nextBtn').disabled = true;
    }
}
//STEP 2 VALIDATION CHECKING ---END


//STEP 3 VALIDATION CHECKING
function categoryBChecking()
{
    var x = document.getElementById("checkLicense").value;
    if(x=="Yes")
    {
        document.getElementById('nextBtn').disabled = false;
        document.getElementById('temperCategoryB').style.display="block";
        document.getElementById('temperCategoryB').disabled=false;
        document.getElementById("notify-sec-1").innerHTML="";
        document.getElementById("dateLicense").value = "";
    }
    else if(x=="No")
    {
        document.getElementById('nextBtn').disabled = false;
        document.getElementById("dateLicense").value = "0001-01-01";
        document.getElementById("notify-sec-1").innerHTML="<p style='color:red'>You have indicated that you do not have category B entitlement to drive. This is a requirement for the role. Unfortunately we will not be able to offer you a position without this driving entitlement type.</p>";
        document.getElementById("temperCategoryB").style.display="none";
        document.getElementById("temperCategoryB").disabled=true;
    }
}


//STEP 1 VALIDATION CHECKING ---END

//STEP 2 VALIDATION


//STEP 2 VALIDATION


//STEP 4 VALIDATION CHECKING

function needVehicleChecking()
{
    var x = document.getElementById('checkNeedvehicle').value;
    if(x=="Yes")
    {
        document.getElementById('nextBtn').disabled = false;
        document.getElementById('notify-sec-2').innerHTML="<p>We partner with many major vehicle rental companies who will provide a suitable vehicle at a weekly competitive price including the correct haulage insurance for the carriage of goods.</p>" +
            "<p>Please see the table below for current vehicle rental rates.</p>" +
            "<br>" +
            "<div>\n" +
            "<div class='col-12 text-center justify-content-center'>\n" +
            "    <h4 class='text-dark font-weight-bold'>Vehicle Rental Rates (Per Weeks)</h4>\n" +
            "</div>\n" +
            "<br>" +
            "<table class='table table-striped w-100 text-center'>" +
            "<thead>\n" +
            "<tr class=\"bg-indigo text-white\">\n" +
            "   <th colspan=\"2\">Drivers 25 years old or more</th>\n" +
            "</tr>\n" +
            "</thead>" +
            "<tbody>\n" +
            "<tr>\n" +
            "<th scope=\"row\">Standard</th>\n" +
            "<td>€200.00</td>\n" +
            "</tr>" +
            "<tr>" +
            "<th scope='row'>Large</th>" +
            "<td>€230.00</td>" +
            "</tr>" +
            "</tbody>" +
            "</table>" +
            "<br>" +
            "<table class='table table-striped w-100 text-center'>" +
            "<thead>\n" +
            "<tr class=\"bg-indigo text-white\">\n" +
            "   <th colspan=\"2\">Drivers 24 years old</th>\n" +
            "</tr>\n" +
            "</thead>" +
            "<tbody>\n" +
            "<tr>\n" +
            "<th scope=\"row\">Standard</th>\n" +
            "<td>€210.00</td>\n" +
            "</tr>" +
            "<tr>" +
            "<th scope='row'>Large</th>" +
            "<td>€255.00</td>" +
            "</tr>" +
            "<tr>" +
            "<th scope='row'>EU License Holders</th>" +
            "<td>+€10.00</td>" +
            "</tr>" +
            "</tbody>" +
            "</table>" +
            "<br>" +
            "</div>" +
            "<br>" +
            "<div class=\"alert alert-danger\" role=\"alert\">\n" +
            "  All drivers must of held their license for a minimum 2 of 2 years.\n" +
            "</div>" +
            "<p class='text-muted'>Please Note: The rental vehicles is in no way connected to C&W Transport.</p>"
    }
    else if(x=="No")
    {
        document.getElementById('nextBtn').disabled = false;
        document.getElementById('notify-sec-2').innerHTML="<p>If you intend on using your own vehicle, the vehicle must meet the following criteria:\n" +
            "</p>" +
            "<ul>" +
            "<li>Must have a load capacity of 5 cubic metres minimum</li>" +
            "<li>Must be no older than 8 years</li>" +
            "<li>Must have a bulkhead installed</li>" +
            "<li>Must have no windows in the hold areas</li>" +
            "</ul>" +
            "<p>Additionally, the following vehicle insurances are required.</p>" +
            "<ul>" +
            "<li>Motor Insurance: Haulage policy that includes 'Carriage of goods for hire and reward' in the useage statement.</li>" +
            "<li>Goods in Transit cover to the value of £25,000 minimum</li>" +
            "<li>Public Liability cover to the value of £5million minimum</li>" +
            "</ul>";
    }
}
//STEP 4 FOR VALIDATION ---END

//STEP 5 FOR VALIDATION
function checkagree1()
{
    var a = document.getElementById('agree1').checked;

    if(a==false)
    {
        document.getElementById('nextBtn').disabled = true;
    }
    else
    {
        document.getElementById('nextBtn').disabled = false;
    }
}
//STEP 5 FOR VALIDATION ---END

//STEP 6 FOR VALIDATION
function checkagree2()
{
    var a = document.getElementById('agree2').checked;

    if(a==false)
    {
        document.getElementById('nextBtn').disabled = true;
    }
    else
    {
        document.getElementById('nextBtn').disabled = false;
    }
}
//STEP 6 FOR VALIDATION ---END


//STEP 7 FOR VALIDATION
function checkagree310()
{
    var a1 = document.getElementById('confirm1').checked;
    var a2 = document.getElementById('confirm2').checked;
    var a3 = document.getElementById('confirm3').checked;
    var a5 = document.getElementById('confirm5').checked;
    var a6 = document.getElementById('confirm6').checked;
    var a7 = document.getElementById('confirm7').checked;
    var a8 = document.getElementById('agree3').checked;

    if (a1 == false || a2 == false || a3 == false || a5 == false || a6 == false || a7 == false || a8 == false) {
        $('#nextBtn').attr("disabled", true);
    } else {
        document.getElementById('nextBtn').disabled = false;
    }
}
//STEP 7 FOR VALIDATION ---END

//STEP 8 FOR VALIDATION
function checkagree4()
{
    var a = document.getElementById('agree4').checked;

    if(a==false)
    {
        document.getElementById('nextBtn').disabled = true;
    }
    else
    {
        document.getElementById('nextBtn').disabled = false;
    }
}
//STEP 8 FOR VALIDATION ---END

//STEP 9 FOR VALIDATION
function checkagree5()
{
    var a = document.getElementById('agree5').checked;

    if(a==false)
    {
        document.getElementById('nextBtn').disabled = true;
    }
    else
    {
        document.getElementById('nextBtn').disabled = false;
    }
}
//STEP 9 FOR VALIDATION ---END

//STEP 10 FOR VALIDATION
function checkstep10()
{
    var a1 = document.getElementById('agree6').checked;
    var a2 = document.getElementById('choosesecurity').value;

    if(a1==false || a2=="none")
    {
        $('#nextBtn').attr("disabled", true);
    }
    else
    {
        document.getElementById('nextBtn').disabled = false;
    }
}
//STEP 10 FOR VALIDATION ---END

//STEP 11 FOR VALIDATION
function checkstep11()
{
    const re1 = /^[a-zA-Z ]+$/;
    const re2 = /^[0-9 ]+$/;
    const re3 = /^(?=.*?[1-9])[0-9()-]+$/;
    var a = document.getElementById('agree7').checked;

    if(a==true && re1.test($('#ah-fname').val())==true && re1.test($('#ah-lname').val())==true && re1.test($('#ah-bankname').val())==true && re2.test($('#ah-sortcode').val())==true && re3.test($('#ah-accno').val())==true)
    {
        document.getElementById('nextBtn').disabled = false;
    }
    if(a==false || re1.test($('#ah-fname').val())==false || re1.test($('#ah-lname').val())==false || re1.test($('#ah-bankname').val())==false || re2.test($('#ah-sortcode').val())==false || re3.test($('#ah-accno').val())==false)
    {
        $('#nextBtn').attr("disabled", true);
    }
}
//STEP 11 FOR VALIDATION ---END

//STEP 12 FOR VALIDATION
function checkstep12()
{
    var a = document.getElementById('agree8').checked;

    if(a==false)
    {
        $('#nextBtn').attr("disabled", true);
    }
    else
    {
        document.getElementById('nextBtn').disabled = false;
    }
}
//STEP 12 FOR VALIDATION ---END

//STEP 13 FOR VALIDATION
function checkstep13()
{
    var a = document.getElementById('agree9').checked;

    if(a==false)
    {
        $('#nextBtn').attr("disabled", true);
    }
    else
    {
        document.getElementById('nextBtn').disabled = false;
    }
}
//STEP 13 FOR VALIDATION ---END

//STEP 14 FOR VALIDATION

function check7year()
{
    var currentYear = new Date();
    var enteredYear = new Date(document.getElementById('when-address-move').value);
    var timeDifference = currentYear - enteredYear;
    var years = (timeDifference) / (1000 * 3600 * 24 * 365);
    if(years < 7)
    {
        document.getElementById('notify-sec-4').style.display="block";
        document.getElementById('phouse-city').value = "";
        document.getElementById('phouse-no').value = "";
        document.getElementById('phouse-state').value = "";
        document.getElementById('phouse-street').value = "";
        document.getElementById('phouse-town').value = "";
        document.getElementById('phouse-zip').value = "";
        document.getElementById('old-when-address-move').value = "";
    }
    if(years >= 7)
    {
        document.getElementById('notify-sec-4').style.display="none";
        document.getElementById('phouse-city').value = "none";
        document.getElementById('phouse-no').value = "none";
        document.getElementById('phouse-state').value = "none";
        document.getElementById('phouse-street').value = "none";
        document.getElementById('phouse-town').value = "none";
        document.getElementById('phouse-zip').value = "0000";
        document.getElementById('old-when-address-move').value = "0001-01-01";
    }
}

function checkanothername()
{
    var x = document.getElementById('anothername').value;
    if (x == "Yes")
    {
        document.getElementById('notify-sec-3').style.display="block";
        document.getElementById('old-fname').value = "";
        document.getElementById('old-lname').value = "";
        document.getElementById('old-name-from').value = "";
        document.getElementById('old-name-to').value = "";

    }
    if (x == "No")
    {
        document.getElementById('old-name-to').value = "0001-01-01";
        document.getElementById('notify-sec-3').style.display = "none";
        document.getElementById('old-fname').value = "none";
        document.getElementById('old-lname').value = "none";
        document.getElementById('old-name-from').value = "0001-01-01";
    }
    checkstep14();
}

function checkstep14() {
    var a2 = document.getElementById('choosenationality').value;
    var a3 = document.getElementById('anothername').value;

    if(a2!="none" && a3!="none")
    {
        document.getElementById('nextBtn').disabled = false;
    }
    if(a2=="none" || a3=="none")
    {
        document.getElementById('nextBtn').disabled = true;
    }
}

function checkstep15()
{
    var a1 = document.getElementById('currentnationality-1').value;
    var a2 = document.getElementById('idtypes').value;
    var a3 = document.getElementById('doctype').value;

    if(a1 != "none" && a2 != "none" && a3 != "none")
    {
        document.getElementById('nextBtn').disabled = false;
    }
    if(a1 == "none" || a2 == "none" || a3 == "none")
    {
        $('#nextBtn').attr("disabled", true);
    }
}

function checkstep16() {
    var a1 = document.getElementById('pointendcheck').value;
    var a2 = document.getElementById('agree10').checked;
    var a3 = document.getElementById('agree11').checked;

    if(a1 != "none" && a2 == true && a3 == true)
    {
        document.getElementById('nextBtn').disabled = false;
    }
    if(a1 == "none" || a2 == false || a3 == false)
    {
        $('#nextBtn').attr("disabled", true);
    }
}

function checkstep17()
{
    var a = document.getElementById('proofdoctype').value;

    if(a != "none")
    {
        document.getElementById('nextBtn').disabled = false;
    }
    if(a == "none")
    {
        $('#nextBtn').attr("disabled", true);
    }

}

function checkstep18()
{
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

}
