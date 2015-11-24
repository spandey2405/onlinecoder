<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 25/11/15
 * Time: 12:26 AM
 */
?>
<html>
<head>

    <script>
        function test() {
            var data = '{"SUCCESS":"True","Payloads":{"id":"29","Email":"scoder91@gmail.com","Username":"Scoder91","Password":"Siddyking","Joined":"0","AccessToken":"123456789"},"STATUS CODE":200}';
            var data = JSON.parse(data);
            document.write(data['Payloads']['Email']);
        }
    </script>

</head>
<body onload="test()">
</body>
</html>
