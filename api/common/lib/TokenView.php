<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 4:37 AM
 */

function HandleTokenRequest($Request) {

    include '../common/controller/add_token.php';
    include '../common/config/ErrorCodes.php';
    include '../common/helpers/ValidateRequest.php';

    if(validate_token_request($Request)=="True") {
        $Type = $Request["type"];
        $RequestData = $Request["payloads"];
        switch ($Type) {

            case "PUT":
                $Response["Payloads"] = AddToken($RequestData);

                if($Response["Payloads"] == ERROR_DATA_NOT_FOUND ){
                    $Response["SUCCESS"] = "False";
                    $Response['Payloads'] = "Wrong Login Information";}
                else
                    $Response["SUCCESS"] = "True";

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