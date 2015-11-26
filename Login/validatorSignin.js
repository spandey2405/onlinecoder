/**
 * Created by sp on 25/11/15.
 */

$('#Submit').click(function () {
    var Email = $("#Email").val();
    var Password = $("#Password").val();

    if(Email == "") {
        $('#status').css("color","red");
        $('#status').html("Email Required");
    }

    else if(Password == "") {
        $('#status').css("color","red");
        $('#status').html("Password Required");
    }
    else {
        submit();
    }

});

function submit() {

    var Email = $("#Email").val();
    var Password = $("#Password").val();

    var urL = "../api/views/tokenview.php";

    var SendData = {
        "type": "PUT",
        "payloads": {
            "Email": Email,
            "Password": Password
        },
        "request_id": 123435236
    };

    $.post( urL, SendData, "jsonp")
        .done(function( data ) {
            data = JSON.parse(data);
                if(data["SUCCESS"] == "False") {
                    $('#status').css("color","red");
                    $('#status').html("Wrong Login Information");
                    return false;
                }
            setcokie(data["Payloads"]);
            });

        }

function setcokie(Token) {
    $.post( "../setToken.php", {"Token":Token})
        .done(function( data ) {
            //window.location = "../Dashboard/";
            alert(data);
        } );

}
