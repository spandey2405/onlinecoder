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

function validate_token_request($Request) {
    include '../common/helpers/Validator/TokenValidator.php';

    if(isset($Request['type'])){

        if($Request['type'] == "PUT") {
            return GetTokenValidateRequest($Request['payloads']);
        }
        else {
            return "False";
        }
    }
    else {
        return "False";
    }
}

function validate_file_request($Request) {
    include '../common/helpers/Validator/AddFileValidator.php';
    include '../common/helpers/Validator/FileGetValidator.php';
    include '../common/helpers/Validator/FileFavValidator.php';
    include '../common/helpers/Validator/FileRenameValidator.php';

    if(isset($Request['type'])){
        if($Request['type'] == "PUT") {
            return FileAddRequestValidator($Request['payloads']);
        }

        else if($Request['type'] == "GET") {
            return FileGetRequestValidator($Request['payloads']);
        }

        else if($Request['type'] == "FAV") {
            return FileFavRequestValidator($Request['payloads']);
        }

        else if($Request['type'] == "RENAME") {
            return FileRenameRequestValidator($Request['payloads']);
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