/**
 * Created by sp on 25/11/15.
 */
var url = '../src/js/signup.js';
$.getScript(url);

$('#Submit').click(function () {
    var Email = $("#Email").val();
    var Username = $("#Username").val();
    var Password = $("#Password").val();

    if(Email == "") {
        $('#status').css("color","red");
        $('#status').html("Email Required");
    }

    else if(Username == "") {
        $('#status').css("color","red");
        $('#status').html("Username Required");
    }

    else if(Password == "") {
        $('#status').css("color","red");
        $('#status').html("Password Required");
    }
    else if( !isValidEmailAddress( Email ) ) {
        $('#status').css("color","red");
        $('#status').html("Incorrect Email Address");
    }
    else if(Password.length < 5) {
        $('#status').css("color","red");
        $('#status').html("Password must have more than 5 characters");

    }
    else {
        submit();
    }

});

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};

function submit() {

    var Email = $("#Email").val();
    var Username = $("#Username").val();
    var Password = $("#Password").val();

    var urL = "../api/views/userview.php";

    var SendData = {
        "type": "PUT",
        "payloads": {
            "Email": Email,
            "Password": Password,
            "Username": Username
        },
        "request_id": 123435236
    };

    $.post( urL, SendData, "jsonp")
        .done(function( data ) {
            data = JSON.parse(data);
                if(data["STATUS CODE"] == 902) {
                    $('#status').css("color","red");
                    $('#status').html("Email Already Registered");
                    return false;
                }
            window.location="../Login/";
            });

        }
