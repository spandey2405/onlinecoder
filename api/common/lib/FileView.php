<?php
/**
 * Created by PhpStorm.
 * User: sp
 * Date: 24/11/15
 * Time: 4:37 AM
 */

function HandleFileRequest($Request) {
    include '../common/config/ErrorCodes.php';
    include '../common/helpers/ValidateRequest.php';
    include '../common/controller/user_get.php';
    include '../common/controller/add_file.php';
    include '../common/controller/file_get.php';
    include '../common/controller/add_fav.php';
    include '../common/controller/Rename.php';

    if(validate_file_request($Request)=="True") {

        $UserDetail = GetUser($Request["payloads"]);
        if (isset($UserDetail[0]['Username'])){

            $RequestData['Username'] = $UserDetail[0]['Username'];
            $RequestData['Time'] = time();

            switch ($Request["type"]) {
                case "PUT":
                    $RequestData['File'] = $Request['payloads']['File'];
                    $RequestData['Filename'] = $Request['payloads']['File'];
                    $RequestData['Type'] = $Request['payloads']['Type'];

                    $Res = AddFile($RequestData);
                    $Response = ReturnResponse($Res);
                    break;

                case "GET":
                    $Response = GetFile($RequestData['Username']);
                    break;

                case "FAV":
                    $RequestData['File'] = $Request['payloads']['File'];
                    $RequestData['Fav'] = $Request['payloads']['Fav'];
                    $Res = AddFav($RequestData);
                    $Response = ReturnResponse($Res);
                    break;

                case "RENAME":
                    $RequestData['File'] = $Request['payloads']['File'];
                    $RequestData['Filename'] = $Request['payloads']['Filename'];
                    $Res = RenameFile($RequestData);
                    $Response = ReturnResponse($Res);
                    break;

                default:
                    $Response = ReturnResponse(TYPE_NOT_SPECIFIED);
            }
            return $Response;

        }
        else {
            $Response = ReturnResponse(PAYLOAD_MISSING);
            $Response['info'] = "Could Not Get User";
            return $Response;
        }

    }
    else {
        $Response = ReturnResponse(PAYLOAD_MISSING);
        $Response['info'] = "Data verification failed";
        return $Request;
    }

}
?>