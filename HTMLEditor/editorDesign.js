/**
 * Created by sp on 26/11/15.
 */
$( document ).ready(function() {
    var height = $(document).height();
    var EHeight = height - 110;
    var TabHeight = $("#tabarea").height();
    $('#codeEditor').css('height',EHeight);
    $('#displayresult').css('height',EHeight);
    $('.Content').css('height',EHeight-TabHeight);

    // Target all classed with ".lined"
    $(".Content").linedtextarea(
        {selectedLine: 1}
    );

});

$('.tabLink').click( function () {
    $('#HTMLContent').removeClass('display');
    $('#CSSContent').removeClass('display');
    $('#JSContent').removeClass('display');

    $('#HTMLTab').removeClass('activeLink');
    $('#CSSTab').removeClass('activeLink');
    $('#JSTab').removeClass('activeLink');

    var currentContent = $(this).attr('name');
    var currentTab = $(this).attr('id');

    $("#"+currentContent).addClass("display");
    $("#"+currentTab).addClass("activeLink");


});

