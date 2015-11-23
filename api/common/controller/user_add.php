<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/11/15
 * Time: 5:42 PM
 */

function add_user_to_db($data) {
    require_once '../Models/UserInfo.php';
    $InfoQuery = new UserInfo();
    $result = $InfoQuery->add_user($data);
    return $result;
}

//$data = array (
//    "Email" => "spandey2405@gmail.com",
//    "Password" => "sp1234567",
//    "Username" => "spandey2405",
//);
//
//print_r(add_user_to_db($data));

?>