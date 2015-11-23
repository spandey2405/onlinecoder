<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 21/11/15
 * Time: 6:59 AM
 */

class QueryGenrator {

    private function init() {
        require_once 'QueryGenrator/SelectQueryGenrator.php';
        require_once 'QueryGenrator/UpdateQueryGenrator.php';
        require_once 'QueryGenrator/InsertQueryGenrator.php';
    }

    public function select($Table, $Data, $Conditons) {
        $this->init();
        $Query = GenrateSelectQuery($Table, $Data, $Conditons);
        return $Query;
    }

    public function insert($Table, $Data) {
        $this->init();
        $Query = GenrateInsertQuery($Table, $Data);
        return $Query;

    }

    public function update($Table, $Data, $Conditons) {
        $this->init();
        $Query = GenrateUpdateQuery($Table, $Data, $Conditons);
        return $Query;
    }
}
?>