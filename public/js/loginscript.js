/**
 *
File: 	     loginscript.js
Purpose:     Create an Internship Management Portal for NSU's Gruduate Students
             to be able to submit an Internship Form for approval. 

Assignment:  Capstone Project
School:      Nova Southeastern University
Supervisor:  Dr. James Parrish

Author:      Nicky Alvarez
History:     Created 04/01/2016

(c) Copyright Nicky Alvarez 2016 All rights reserved.
 *
 */

function validateLoginForm(){
    var x = document.getElementById("username");
    var y = document.getElementById("password");
    var isValidForm = true;
    if(x.value == ""){
        document.getElementById("username_err").innerHTML = "This field is required";
        $('#username_input_div').addClass('has-error');
        isValidForm = false;
    }
    else{
        document.getElementById("username_err").innerHTML = "";
        $('#username_input_div').removeClass('has-error');
    }
    if(y.value == ""){
        document.getElementById("password_err").innerHTML = "This field is required";
        $('#password_input_div').addClass('has-error');
        isValidForm = false;
    }
    else{
        document.getElementById("password_err").innerHTML = "";
        $('#password_input_div').removeClass('has-error');
    }
    if(!isValidForm){
        return false;
    }
    return true;
}



function LoginAJAX()
{
    if(!validateLoginForm())
    {
        return false;
    }
    else
    {
        var username = document.getElementById("username").value;
        var pass =  document.getElementById("password").value;
        $.ajax({
            type:"POST",
            url:"functions/loginprocessing.php",
            data:{user:username,password:pass},
            cache:false,
            success: function(result){
                var res = trimResult(result);
                if(result == "student"){
                    window.location='scripts/s_home.php';
                }
                else if (result == "admin"){
                    window.location='scripts/a_home.php';
                }
                else{
                    $('#invalid_Err_Msg').show();
                }
            }
        });
    }
}

function trimResult(res){
    var res=res.replace(/^\s+|\s+$/,'');
    return res;
}