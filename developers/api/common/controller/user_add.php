<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/11/15
 * Time: 5:42 PM
 */

function AddUser($Data) {
    $table = 'userinfo';
    include '../common/Models/Database.php';
    include '../common/helpers/QueryGenrator.php';
    $QueryGen = new QueryGenrator();
    $DB = new DatabaseModel();

    $Query = $QueryGen->insert($table, $Data);
    $DBEntry = $DB->insert($Query);

    return $DBEntry;
}
?>