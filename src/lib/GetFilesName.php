<?php

$Token = $_GET['Token'];

?>
<html>
<head>
    <script src="../src/js/jquery-1.10.2.js" type="text/javascript"></script>
</head>
<body>
<script>
    $(document).ready(function () {
        var Token = "<?php echo $Token; ?>";
        var SendData ={
            "type": "GET",
            "payloads": {
                "Token": Token
            },
            "request_id": 123435236
        };
        var urL = "../api/views/fileview.php";

        $.post( urL, SendData, "jsonp")
            .done(function( data ) {

                document.write(data);
            });
    });
</script>
</body>
</html>