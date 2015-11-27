<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/11/15
 * Time: 5:42 PM
 */

function AddToken($Data) {

    include '../common/Models/Database.php';
    include '../common/helpers/QueryGenrator.php';

    $table = 'userinfo';
    $QueryGen = new QueryGenrator();
    $DB = new DatabaseModel();
    $data = array("AccessToken"=>getGUID());
    $Email = $Data['Email'];
    $Password = $Data['Password'];
    $condition = "WHERE Email = '$Email' AND Password = '$Password'";

    $QueryCheck = $Query = $QueryGen->select($table,$DATA="None",$condition);
    $CheckInfo = $DB->select($QueryCheck);
    if ($CheckInfo == ERROR_DATA_NOT_FOUND)
    {
        return ERROR_DATA_NOT_FOUND;
    }
    $Query = $QueryGen->update($table,$data,$condition);
    $DBEntry = $DB->update($Query);
    return $data['AccessToken'];

}

function getGUID(){

    mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
    $charid = strtolower(md5(uniqid(rand(), true)));
    $uuid = substr($charid, 0, 8)
        .substr($charid, 8, 4)
        .substr($charid,12, 4)
        .substr($charid,16, 4)
        .substr($charid,20,12);
    return $uuid;
}
?>