<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 26/11/15
 * Time: 9:28 PM
 */

$cookie_name = "OnlineCoder";
if(!isset($_COOKIE[$cookie_name])) {
    header("location:../Login/");
}
else {
    header("location:../DashBoard/");
}

?>