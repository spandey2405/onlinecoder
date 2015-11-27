<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 25/11/15
 * Time: 6:27 PM
 */
if ($_POST) {
    $cookie_value = $_POST['Token'];
    $cookie_name = "OnlineCoder";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    echo "True";
}
