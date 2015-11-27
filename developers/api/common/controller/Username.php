<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 25/11/15
 * Time: 3:56 PM
 */
function GetUsername($Data) {
    $table = 'userinfo';
    require_once '../common/Models/Database.php';
    require_once '../common/helpers/QueryGenrator.php';
    $QueryGen = new QueryGenrator();
    $DB = new DatabaseModel();

    $Username = $Data['Username'];
    $Query = $QueryGen->select($table,$Data="None",$Condition="WHERE `Username` = '$Username'");
    $DBEntry = $DB->select($Query);
    return $DBEntry;
}
?>