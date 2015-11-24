<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 23/11/15
 * Time: 11:28 PM
 */

if($_POST) {
    include '../common/lib/UserView.php';
    $Request = $_POST;
    $response = HandleUserRequest($Request);

    print (json_encode($response));
}
?>

