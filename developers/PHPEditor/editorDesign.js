/**
 * Created by sp on 26/11/15.
 */
$( document ).ready(function() {
    var height = $(document).height();
    var EHeight = height - 110;
    var TabHeight = $("#tabarea").height();
    $('#codeEditor').css('height',EHeight);
    $('#displayresult').css('height',EHeight);
    $('#PHPContent').css('height',EHeight);

});


