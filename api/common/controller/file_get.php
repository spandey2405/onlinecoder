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
    $GetResponse = $DB->select($Query);
    if($GetResponse != 903) {
        $Response["STATUS"] = "True";
        $Response["STATUS CODE"] = 200;
        $Response['Payloads'] = $GetResponse;
    }
    else {
        $Response["STATUS"] = "True";
        $Response["STATUS CODE"] = 903;
        $Response["Message"] = "No Data Found";
    }
    return $Response;
}
?>