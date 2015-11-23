<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 2:22 AM
 */

function GenrateInsertQuery($table, $data) {

    $Columns = GenrateInsertColums($data);
    $SelectQuery = "INSERT INTO `$table` $Columns ";
    return $SelectQuery;
}

function GenrateInsertColums($data) {
    $insertColumnsKey = "";
    $insertColumnsValue = "";
    foreach($data as $key => $value) {
        if(!is_integer($value)) {
            $insertColumnsKey .= "`$key`, ";
            $insertColumnsValue .= "'$value', ";
        }

        else {
            $insertColumnsKey .= "`$key`, ";
            $insertColumnsValue .= "$value, ";
        }
    }
    $insertColumnskeys = substr($insertColumnsKey ,0 ,-2);
    $insertColumnsvalues = substr( $insertColumnsValue ,0 ,-2);

    $insertColumns = "($insertColumnskeys) VALUES ($insertColumnsvalues)";
    return $insertColumns;
}

//$colums = ['id'=>1, 'username'=>'spandey2405'];
//print GenrateInsertQuery($table="codes", $data=$colums, $condition = "WHERE 'Email'='spandey2405'");

?>