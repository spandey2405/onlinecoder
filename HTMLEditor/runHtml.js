/**
 * Created by sp on 26/11/15.
 */
$("#show").click(function() {
    $("#Result").click();
    var CodeHtml = $("#HTMLContent").val();
    var CodeCSS = $("#CSSContent").val();
    var CodeJS = $("#JSContent").val();
    var filename = $(".fileinfo").attr("id");
    var Token = $('Usertoken').attr("id");
    $.post( "../src/lib/htmlhandler.php",
        { File: filename , HTML: CodeHtml, CSS: CodeCSS, JS: CodeJS })
        .done(function( data ) {
        $("#Result").attr("src", data);
        $('#ResultTab').click();

    });

    var SendData = {
        "type": "PUT",
        "payloads": {
            "Token": Token,
            "File": filename,
            "Type": "HTML"
        },
        "request_id": 123435236
    };

    var urL = "../api/views/fileview.php";
    $.post( urL, SendData, "jsonp")
        .done(function( data1 ) {
            //alert(data1);
        });
});

$(document).keydown(function (e) {

    if (e.ctrlKey && e.keyCode == 13) {
        $( "#show" ).click();
    }
});
$('#HTMLContent').keydown(function (e) {
    if (e.ctrlKey && e.keyCode == 13) {
        $( "#show" ).click();
    }
});