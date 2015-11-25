<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/11/15
 * Time: 5:42 PM
 */

function AddFile($Data) {
    $table = 'codes';
    require_once '../common/Models/Database.php';
    require_once '../common/helpers/QueryGenrator.php';
    $QueryGen = new QueryGenrator();
    $DB = new DatabaseModel();

    $Query = $QueryGen->insert($table, $Data);
    $DBEntry = $DB->insert($Query);
    return $DBEntry;
}
?>