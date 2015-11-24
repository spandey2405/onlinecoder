<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 12:10 PM
 */
function validate_userview_request($Request) {

    include '../common/helpers/Validator/ValidateAddUserRequest.php';
    include '../common/helpers/Validator/GetUserValidator.php';
    if(isset($Request['type'])){
        if($Request['type'] == "PUT") {
            return AddUserValidateRequest($Request['payloads']);
        }
        else if($Request['type'] == "GET") {
            return UserGetRequestValidator($Request['payloads']);
        }
        else {
            return "False";
        }
    }
    else {
        return "False";
    }

}
?>