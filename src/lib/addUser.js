/**
 * Created by sp on 24/11/15.
 */

$('#Test').click (function () {

    var Username = $('#Username').val();
    var Email = $('#Email').val();
    var Password = $('#Password').val();
    var Data = formJson(Email, Password, Username);

    $.post( "../api/views/userview.php", Data)
        .done(function( data ) {
            $("#TESTING").html( data );
        });

});

function formJson(Email, Password, Username) {

    var jsonData = {
        "Type": "Add",
        "Payloads":{
            "Email": Email,
            "Password": Password,
            "Username": Username
        },
        "Model": "User"
    };
    return jsonData;
}