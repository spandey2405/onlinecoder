/**
 * Created by sp on 24/11/15.
 */
$(document).ready(function() {
    $(".tabLink").each(function(){
        $(this).click(function(){
            tabeId = $(this).attr('id');
            $(".tabLink").removeClass("activeLink");
            $(this).addClass("activeLink");
            $(".tabcontent").addClass("hide");
            $("#"+tabeId+"-1").removeClass("hide")
            return false;
        });
    });
});

$('#Submit').click (function () {
    var SendData = $('#cont-1-1').val();
    var URL = $('#url').val();
    var urL = URL.replace("http://localhost/onlinecoder/", "../");
    SendData = JSON.parse(SendData);
    $.post( urL, SendData, "jsonp")
        .done(function( data ) {
            $("#cont-1").removeClass("activeLink");
            $("#cont-2-1").removeClass("hide")
            $('#cont-2').addClass("activeLink");
            $("#cont-1-1").addClass("hide");
            data = JSON.parse(data);
            data = JSON.stringify(data, undefined, 2)
            $('#cont-2-1').html(data);
        });
});

$('#myView1').click (function () {
    $("#cont-2").removeClass("activeLink");
    $("#cont-1-1").removeClass("hide")
    $('#cont-2').addClass("activeLink");
    $("#cont-2-1").addClass("hide");
    var RequestData = {
        "type":"PUT",
        "payloads": {"Email":"","Password":"","Username":""},
        "request_id": 123435236
    };
    RequestData = JSON.stringify(RequestData, undefined, 2)
    var Url = "http://localhost/onlinecoder/api/views/userview.php";

    $('#cont-1-1').val(RequestData);
    $('#url').val(Url);
});

$('#myView2').click (function () {
    $("#cont-2").removeClass("activeLink");
    $("#cont-1-1").removeClass("hide")
    $('#cont-2').addClass("activeLink");
    $("#cont-2-1").addClass("hide");
    var RequestData = {
        "type":"GET",
        "payloads": {"Token":""},
        "request_id": 123435236
    };
    RequestData = JSON.stringify(RequestData, undefined, 2)
    var Url = "http://localhost/onlinecoder/api/views/userview.php";

    $('#cont-1-1').val(RequestData);
    $('#url').val(Url);
});

$('#myView3').click (function () {
    $("#cont-2").removeClass("activeLink");
    $("#cont-1-1").removeClass("hide")
    $('#cont-2').addClass("activeLink");
    $("#cont-2-1").addClass("hide");
    var RequestData = {
        "type": "PUT",
        "payloads": {
            "Email": "",
            "Password": ""
        }
    };
    RequestData = JSON.stringify(RequestData, undefined, 2)
    var Url = "http://localhost/onlinecoder/api/views/tokenview.php";

    $('#cont-1-1').val(RequestData);
    $('#url').val(Url);
});

$('#myView4').click (function () {
    $("#cont-2").removeClass("activeLink");
    $("#cont-1-1").removeClass("hide")
    $('#cont-2').addClass("activeLink");
    $("#cont-2-1").addClass("hide");
    var RequestData = {
        "type":"GET",
        "payloads": {"Token":""},
        "request_id": 123435236
    };
    RequestData = JSON.stringify(RequestData, undefined, 2)
    var Url = "http://localhost/onlinecoder/api/views/fileview.php";

    $('#cont-1-1').val(RequestData);
    $('#url').val(Url);
});

$('#myView5').click (function () {
    $("#cont-2").removeClass("activeLink");
    $("#cont-1-1").removeClass("hide")
    $('#cont-2').addClass("activeLink");
    $("#cont-2-1").addClass("hide");
    var Filename = $.now()+".php";
    var RequestData = {
        "type":"PUT",
        "payloads": {
            "Token":"",
            "File":Filename,
            "Type":"PHP"
        },
        "request_id": 123435236
    };
    RequestData = JSON.stringify(RequestData, undefined, 2)
    var Url = "http://localhost/onlinecoder/api/views/fileview.php";

    $('#cont-1-1').val(RequestData);
    $('#url').val(Url);
});


$('#myView6').click (function () {
    $("#cont-2").removeClass("activeLink");
    $("#cont-1-1").removeClass("hide")
    $('#cont-2').addClass("activeLink");
    $("#cont-2-1").addClass("hide");
    var Filename = $.now()+".php";
    var RequestData = {
        "type": "FAV",
        "payloads": {
            "Token": "",
            "File": "",
            "Fav": 1
        },
        "request_id": 123435236
    };
    RequestData = JSON.stringify(RequestData, undefined, 2)
    var Url = "http://localhost/onlinecoder/api/views/fileview.php";

    $('#cont-1-1').val(RequestData);
    $('#url').val(Url);
});

$('#myView7').click (function () {
    $("#cont-2").removeClass("activeLink");
    $("#cont-1-1").removeClass("hide")
    $('#cont-2').addClass("activeLink");
    $("#cont-2-1").addClass("hide");
    var Filename = $.now()+".php";
    var RequestData = {
        "type": "RENAME",
        "payloads": {
            "Token": "",
            "File": "",
            "Filename": ""
        },
        "request_id": 123435236
    };
    RequestData = JSON.stringify(RequestData, undefined, 2)
    var Url = "http://localhost/onlinecoder/api/views/fileview.php";

    $('#cont-1-1').val(RequestData);
    $('#url').val(Url);
});



