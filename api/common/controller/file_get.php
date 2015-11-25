<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/11/15
 * Time: 5:42 PM
 */

function GetFile($Username) {
    $table = 'codes';
    require_once '../common/Models/Database.php';
    require_once '../common/helpers/QueryGenrator.php';
    $QueryGen = new QueryGenrator();
    $DB = new DatabaseModel();
    $Query = $QueryGen->select($table,$Data="None",$Condition="WHERE `Username` = '$Username'");
    $DBEntry = $DB->select($Query);
    return $DBEntry;
}
?>