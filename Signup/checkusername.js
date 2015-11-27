/**
 * Created by sp on 25/11/15.
 */

$('#Username').focusout(function () {
    var SendData = {
        "Username": $(this).val(),
    }

    var urL = '../api/views/checkusername.php';
    $.post( urL, SendData, "jsonp")
        .done(function( data ) {
            data = JSON.parse(data);
            //data = JSON.stringify(data, undefined, 2)
            if(data["SUCCESS"] == "False") {
                $('#status').css("color","red");
                $('#status').html("Username Already Acquired");
                return false;
            }
            $('#status').html("");
        });
});
