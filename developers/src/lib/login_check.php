<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 23/11/15
 * Time: 1:30 AM
 */
$cookie_name = "OnlineCoder";
if(!isset($_COOKIE[$cookie_name])) {
    header("location:../Login/");
}
else {
    $token = $_COOKIE[$cookie_name];
}

?>
<html>
<body>

</body>
</html>
