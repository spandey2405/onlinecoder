/**
 * Created by sp on 26/11/15.
 */
$("#show").click(function() {
    var CodePHP = $("#PHPContent").val();
    var filename = $(".fileinfo").attr("id");
    var Token = $('Usertoken').attr("id");
    $.post( "../src/lib/phphandler.php",
        { File: filename , PHP: CodePHP})
        .done(function( data ) {
        $("#displayresult").attr("src", data);
    });

    var SendData = {
        "type": "PUT",
        "payloads": {
            "Token": Token,
            "File": filename,
            "Type": "PHP"
        },
        "request_id": 123435236
    };

    var urL = "../api/views/fileview.php";
    $.post( urL, SendData, "jsonp")
        .done(function( data1 ) {
            //alert(data1);
        });
});