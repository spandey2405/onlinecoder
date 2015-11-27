/**
 * Created by sp on 24/11/15.
 */
$('#Email').focusout(function () {

    var atpos = $(this).val().indexOf("@");
    var dotpos = $(this).val().lastIndexOf(".");

    if (atpos < 1 || ( dotpos - atpos < 2 )) {
        $('#error-status').html("Please enter correct email ID");
        $(this).focus() ;
        $('#Submit').attr("disabled", true);
    }
    else {
        $('#error-status').html("");
        $('#Submit').attr("disabled", false);
    }

});

//$('#Username').focusout(function () {
//
//    var username = document.getElementById("Username").value;
//    var letters = /^[A-Za-z0-9]+$/;
//
//    if(!username.match(letters))
//    {
//        $('#username-status').html("Username Cant Have Special Character");
//        $('#Submit').attr("disabled", true);
//    }
//    else {
//        $.post( BASEDIR+"api/urls/checkusername.php",
//
//            { Username: username }).done(function( data ) {
//            if(data == 302) {
//                $('#username-status').html("Username Already Exists");
//                $('#Submit').attr("disabled", true);
//            }
//            if (data == 200) {
//                $('#username-status').html("");
//                $('#Submit').attr("disabled", false);
//            }
//
//        });
//    }
//});
//
//
//$('#Password').focusout(function () {
//    var Password = document.getElementById("Password").value;
//    if(Password.length <= 5) {
//        $('#password-status').css('color','red');
//        $('#password-status').html("Weak Password");
//        $('#Submit').attr("disabled", true);
//    }
//    if(Password.length > 5) {
//        $('#password-status').html("");
//        $('#Submit').attr("disabled", false);
//    }
//});