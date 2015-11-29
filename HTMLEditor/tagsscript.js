/**
 * Created by sp on 29/11/15.
 */
$("#CSSTags td#css_tag").on('click', function() {
    $("#CSSTab").click();
    var caretPos = document.getElementById("CSSContent").selectionStart;
    var textAreaTxt = $("#CSSContent").val();
    var txtToAdd = $(this).html()+" : ";
    $("#CSSContent").val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
    $("#CSSContent").focus();
    //alert(txtToAdd);
});

$("#colors td").on('click', function() {

    $("#CSSTab").click();
    var caretPos = document.getElementById("CSSContent").selectionStart;
    var textAreaTxt = $("#CSSContent").val();
    var hexcolor = rgb2hex($( this ).css( "background-color" ));
    var txtToAdd = hexcolor;
    $("#CSSContent").val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
    $("#CSSContent").focus();
});

function rgb2hex(rgb) {
    var hexDigits = ["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f"];
    rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    function hex(x) {
        return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
    }
    return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

$("#HTMLTags td#html_tag").on('click', function() {
    $("#HTMLTab").click();
    var caretPos = document.getElementById("HTMLContent").selectionStart;
    var textAreaTxt = $("#HTMLContent").val();
    var txtToAdd = $(this).html().replace('&lt;','<');
    var txtToAdd = txtToAdd.replace('&gt;','>');
    $("#HTMLContent").val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
    $("#HTMlContent").focus();
    //alert(txtToAdd);
});

$("#JSTags td#js_tag").on('click', function() {
    $("#JSTab").click();
    var caretPos = document.getElementById("JSContent").selectionStart;
    var textAreaTxt = $("#JSContent").val();
    var txtToAdd = $(this).html();
    $("#JSContent").val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
    $("#JSContent").focus();
    //alert(txtToAdd);
});