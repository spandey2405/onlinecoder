$("#show").click(function() {
    var html = document.getElementById("html").value;
    var css = document.getElementById("css").value;
    var js = document.getElementById("js").value;
    var filename = document.getElementById("filename").innerHTML;
    var token = document.getElementById('token').value;
    $.post( "../src/lib/htmlhandler.php",
        { filename: filename, htmlcode: html, csscode: css, jscode: js }).done(function( data ) {
        $("#display").attr("src", data);
    });

    $.post( "../api/urls/addfile.php",
        { file: filename, type: 'html', token: token}).done(function( data ) {
        alert(data);
    });
});

$( document ).ready(function() {
    var height = $( window ).height()-60;
   $(".code").css("height", height);
   $("#display").css("height", height);
});

$(document).keydown(function (e) {

  if (e.ctrlKey && e.keyCode == 13) {
    $( "#show" ).click();
  }
});