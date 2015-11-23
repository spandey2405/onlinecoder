<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 2:22 AM
 */

function GenrateUpdateQuery($table, $data, $condition = " WHERE 1") {

        $Columns = GenrateUpdateColums($data);
        $SelectQuery = "UPDATE `$table` SET $Columns ".$condition;
        return $SelectQuery;
}

function GenrateUpdateColums($data) {
    $updateColumns = "";

    foreach($data as $key => $value) {
        if(is_integer($value)) {
            $updateColumns .= "`$key`=$value, ";
        }
        else {
        $updateColumns .= "`$key`='$value', ";
        }
    }
    $updateColumns = substr($updateColumns,0,-2);
    return $updateColumns;
}

//$colums = ['id'=>1, 'username'=>'spandey2405'];
//print GenrateUpdateQuery($table="codes", $data=$colums, $condition = "WHERE 'Email'='spandey2405'");

?>