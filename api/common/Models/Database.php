<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 21/11/15
 * Time: 6:59 AM
 */

class DatabaseModel {

    private function init() {
        require_once '../common/config/config.php';
        require_once '../common/config/ErrorCodes.php';
        $conf = db_configration();
        $conn = mysqli_connect($conf['servername'], $conf['username'], $conf['password'], $conf['dbname']);
        return $conn;

    }

    public function select($query) {
        $connect = $this->init();
        $result = mysqli_query($connect, $query);
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $data[$count] = $row;
            $count += 1;
        }
        if ($count > 0) {
            return $data;
        }
        else {
            return ERROR_DATA_NOT_FOUND;
        }

    }

    public function insert($query) {
        $connect = $this->init();
        if (mysqli_query($connect, $query)) {
            return SUCCESS;
        }
        return ERROR_DUP_NAME;
    }

    public function update($query) {
        $connect = $this->init();
        if (mysqli_query($connect, $query)) {
            return true;
        }
        return ERROR_DATA_NOT_FOUND;
    }
}
?>