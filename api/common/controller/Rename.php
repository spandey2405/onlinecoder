<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 25/11/15
 * Time: 2:04 PM
 */
function RenameFile($Data) {

    require_once '../common/Models/Database.php';
    require_once '../common/helpers/QueryGenrator.php';

    $table = 'codes';
    $QueryGen = new QueryGenrator();
    $DB = new DatabaseModel();
    $File = $Data['File'];
    $Username = $Data['Username'];
    $Filename = $Data['Filename'];
    $data = array("Filename"=>$Filename);
    $Query = $QueryGen->update($table,$data,$condition=$Condition="WHERE `Username` = '$Username' AND `File` = '$File'");
    $DBEntry = $DB->update($Query);
    return $DBEntry;

}