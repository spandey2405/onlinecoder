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
else if ($_GET) {
    $Response['Status'] = 401;
    $Response['Success'] = "False";
    $Response['Message'] = "Method Get Not Allowed";
    print (json_encode($Response));
}

else {
    $Response['Status'] = 401;
    $Response['Success'] = "False";
    $Response['Message'] = "Not Authorized";
    print (json_encode($Response));
}
?>

