<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 25/11/15
 * Time: 3:55 PM
 */
function HandleUsernameRequest($Request) {

    include '../common/controller/Username.php';
    include '../common/config/ErrorCodes.php';
    include '../common/helpers/ValidateRequest.php';

    if(validate_Username_request($Request)=="True") {
        if (GetUsername($Request)==ERROR_DATA_NOT_FOUND) {
            $Response["SUCCESS"] = "True";
        }
        else {
            $Response["SUCCESS"] = "False";
        }
        return $Response;

    }
    else {
        $Response["SUCCESS"] = "False";
        $Response["STATUS CODE"] = PAYLOAD_MISSING;
        return $Response;
    }

}