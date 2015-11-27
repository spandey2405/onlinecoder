/**
 * Created by sp on 21/11/15.
 */

$("td div").dblclick(function () {
    $(this).html("");
    var Id = $(this).attr("id");
    document.getElementById(Id).contentEditable = true;
    $(this).focus();
    $(this).keypress(function (e) {
        if(e.which == 13) {
            var Token = $("Usertoken").attr("id");
            var File = $(this).attr('id');
            var Filename = $(this).html();
            var SendData = {
                "type": "RENAME",
                "payloads": {
                "Token": Token,
                    "File": File,
                    "Filename": Filename
            },
                "request_id": 123435236
            };
            var Url = "../api/views/fileview.php";
            $.post(Url,SendData).done(function (data) {
                //location.reload();
            });
            e.preventDefault();
            location.reload();
        }
    })

})

$("td#Fav").click(function () {
    var Token = $("Usertoken").attr("id");
    var File = $(this).attr('name');
    var Fav = $(this).attr('class');

    var SendData = {
        "type": "FAV",
        "payloads": {
            "Token": Token,
            "File": File,
            "Fav": Fav
        },
        "request_id": 123435236
    }

    var Url = "../api/views/fileview.php";
    $.post(Url,SendData).done(function (data) {});
    location.reload();

});

