<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 4:37 AM
 */

function HandleUserRequest($Request) {

    include '../common/controller/user_add.php';
    include '../common/controller/user_get.php';
    include '../common/config/ErrorCodes.php';
    include '../common/helpers/ValidateRequest.php';

    if(validate_userview_request($Request)=="True") {
        $Type = $Request["type"];
        $RequestData = $Request["payloads"];
        switch ($Type) {

            case "PUT":
                $Response["STATUS CODE"] = AddUser($RequestData);
                if($Response["STATUS CODE"] == ERROR_DUP_NAME )
                    $Response["SUCCESS"] = "False";
                else
                    $Response["SUCCESS"] = "True";
                return $Response;

            case "GET":
                $Response["Payloads"] = GetUser($RequestData);

                if($Response["Payloads"] == ERROR_DATA_NOT_FOUND ){
                    $Response["STATUS CODE"] = ERROR_DATA_NOT_FOUND;
                    $Response["SUCCESS"] = "False";
                    $Response['Payloads'] = "Authentication Error";
                }
                else {
                    $Response["SUCCESS"] = "True";
                    $Response["STATUS CODE"] = 200;
                }

                return $Response;

            default:
                return TYPE_NOT_SPECIFIED;
        }
    }
    else {
        $Response["SUCCESS"] = "False";
        $Response["STATUS CODE"] = PAYLOAD_MISSING;
        return $Response;
    }

}