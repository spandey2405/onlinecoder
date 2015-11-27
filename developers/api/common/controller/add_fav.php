<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 25/11/15
 * Time: 2:04 PM
 */
function AddFav($Data) {

    require_once '../common/Models/Database.php';
    require_once '../common/helpers/QueryGenrator.php';

    $table = 'codes';
    $QueryGen = new QueryGenrator();
    $DB = new DatabaseModel();
    $File = $Data['File'];
    $Username = $Data['Username'];
    $Fav = $Data['Fav'];
    $data = array("Fav"=>$Fav);
    $Query = $QueryGen->update($table,$data,$condition=$Condition="WHERE `Username` = '$Username' AND `File` = '$File'");
    $DBEntry = $DB->update($Query);
    return $DBEntry;

}