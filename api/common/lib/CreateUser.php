<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 23/11/15
 * Time: 11:41 AM
 */
include '../helpers/check_user.php';
include '../config/ErrorCodes.php';
include '../helpers/user_add.php';
function add_user($data) {
    $validate_email_exists =  check_email_exist($_POST['Email']);
}