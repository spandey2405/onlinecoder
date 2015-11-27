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
            var data = '{"Payloads":[{"id":"2","Username":"Scoder91","File":"123456789.php","Filename":"","Fav":"0","Type":"PHP","Time":"1448427059"},{"id":"4","Username":"Scoder91","File":"12345678dasdad9.php","Filename":"","Fav":"0","Type":"PHP","Time":"1448427285"}],"SUCCESS":"True","STATUS CODE":200}';
//            data = data.replace('[','');
//            data = data.replace(']','');
            data = JSON.parse(data);
            data = JSON.stringify(data, undefined, 2)
            document.write(data['Payloads']);
        }
    </script>

</head>
<body onload="test()">
</body>
</html>
