/**
 * Created by sp on 26/11/15.
 */
$( document ).ready(function() {
    var height = $(document).height();
    var EHeight = height - 120;
    var TabHeight = $("#tabarea").height();
    $('#codeEditor').css('height',EHeight);
    $('#displayresult').css('height',EHeight);
    $('#Result').css('height',EHeight);
    $('.Content').css('height',EHeight-TabHeight);
    $('.Content1').css('height',EHeight-TabHeight-20);

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

$('.tabLink1').click( function () {
    $('#Result').removeClass('display');
    $('#CSSTags').removeClass('display');
    $('#HTMLTags').removeClass('display');
    $('#colors').removeClass('display');
    $('#JSTags').removeClass('display');

    $('#ResultTab').removeClass('activeLink');
    $('#CSStagTab').removeClass('activeLink');
    $('#HTMltagTab').removeClass('activeLink');
    $('#colorsTab').removeClass('activeLink');
    $('#JStagTab').removeClass('activeLink');

    var currentContent = $(this).attr('name');
    var currentTab = $(this).attr('id');

    $("#"+currentContent).addClass("display");
    $("#"+currentTab).addClass("activeLink");


});
