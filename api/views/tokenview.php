<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 23/11/15
 * Time: 11:28 PM
 */

if($_POST) {
    include '../common/lib/TokenView.php';
    $Request = $_POST;
    $response = HandleTokenRequest($Request);

    print (json_encode($response));
}
?>

