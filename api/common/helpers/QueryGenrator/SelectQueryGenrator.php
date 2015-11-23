<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 2:22 AM
 */

function GenrateSelectQuery($table, $data, $condition = " WHERE 1") {

    if ($data == "None") {
        $SelectQuery = "SELECT * FROM `$table` ".$condition;
    }
    else {
        $Columns = GenrateSelectColums($data);
        $SelectQuery = "SELECT $Columns FROM `$table` ".$condition;
    }
    return $SelectQuery;
}

function GenrateSelectColums($data) {
    $selectColumns = "";

    foreach($data as $value) {
            $selectColumns .= "`".$value."`, ";
    }
    $selectColumns = substr($selectColumns, 0 ,-2);
    return $selectColumns;
}

//$colums = ['id', 'username', 'file', 'filename', 'fav', 'type', 'time'];
//print GenrateSelectQuery($table="codes", $data = $colums, $condition = "WHERE 'Email'='spandey2405'");

?>