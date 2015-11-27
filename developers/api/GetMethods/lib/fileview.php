<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 26/11/15
 * Time: 3:59 PM
 */

function GetMthodFileView($Data) {
    include '../common/controller/user_get.php';
    include '../common/controller/file_get.php';
    $UserDetail = GetUser($Data);
    $Response = GetFile($UserDetail[0]['Username']);
    if ($Response["STATUS CODE"] == 903) {
        return "NoData";
    }
    return $Response['Payloads'];
}