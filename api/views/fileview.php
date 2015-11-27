<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 23/11/15
 * Time: 11:28 PM
 */

if($_POST) {
    include '../common/lib/FileView.php';
    $Request = $_POST;
    $response = HandleFileRequest($Request);

    print (json_encode($response));
}
else if ($_GET) {
    include '../GetMethods/lib/fileview.php';
    if($_GET['Token']){
        $Response['Payloads'] = GetMthodFileView($_GET);
    }
    else {
        $Response['Message'] = "You Are Not Authorized To Use The Api";
        $Response['Status'] = 401;
        $Response['Success'] = "False";
    }


    print (json_encode($Response));
}

else {
    $Response['Status'] = 401;
    $Response['Success'] = "False";
    $Response['Message'] = "Not Authorized";
    print (json_encode($Response));
}
?>

