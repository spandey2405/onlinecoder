<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 22/11/15
 * Time: 6:57 PM
 */
$cookie_name = "OnlineCoder";
setcookie($cookie_name, "", time() - 3600, "/");
header("location:../Login/");
?>
