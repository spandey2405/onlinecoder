<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 3:32 AM
 */
$data1 = ['id'=> 1,'username'=> '2','file'=> 'something.php','filename'=> '4','fav'=> 5,'type'=> '6','time'=> 7];
$data2 = ['id', 'username', 'file', 'filename', 'fav', 'type', 'time'];

function update_test($table, $data, $condition) {
    include '../helpers/QueryGenrator.php';
    $QueryGen = new QueryGenrator();

    include '../Models/Database.php';
    $DB = new DatabaseModel();

    $Query = $QueryGen->update($table, $data, $condition);
    $DBEntry = $DB->update($Query);
    print_r($DBEntry);
}

function insert_test($table, $data) {
    include '../helpers/QueryGenrator.php';
    $QueryGen = new QueryGenrator();

    include '../Models/Database.php';
    $DB = new DatabaseModel();

    $Query = $QueryGen->insert($table, $data);
    $DBEntry = $DB->insert($Query);
    print($DBEntry);
}

function select_test($table, $data, $condition) {
    include '../helpers/QueryGenrator.php';
    $QueryGen = new QueryGenrator();

    include '../Models/Database.php';
    $DB = new DatabaseModel();

    $Query = $QueryGen->select($table, $data, $condition);
    $DBEntry = $DB->select($Query);
    print_r($DBEntry);
}

insert_test('codes', $data1);
//update_test('codes', $data1, "WHERE id = 1");
//select_test('codes', "None", "WHERE username = 'Siddyking'");

