<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/11/15
 * Time: 5:42 PM
 */

function GetUser($Data) {
    $table = 'userinfo';
    include '../common/Models/Database.php';
    include '../common/helpers/QueryGenrator.php';
    $QueryGen = new QueryGenrator();
    $DB = new DatabaseModel();

    $Token = $Data['Token'];
    $Query = $QueryGen->select($table,$Data="None",$Condition="WHERE `AccessToken` = '$Token'");
    $DBEntry = $DB->select($Query);
    return $DBEntry;
}
?>