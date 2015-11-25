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

        $Type = $Request["type"];
        $Data = $Request["payloads"];
        $Username = GetUser($Data);


        if (isset($Username[0]['Username'])){
            $username = $Username[0]['Username'];
            $RequestData['Username'] = $username;
            switch ($Type) {

                case "PUT":

                    $RequestData['File'] = $Data['File'];
                    $RequestData['Filename'] = $Data['File'];
                    $RequestData['Type'] = $Data['Type'];
                    $RequestData['Time'] = time();
                    $Response["STATUS CODE"] = AddFile($RequestData);
                    if($Response["STATUS CODE"] == ERROR_DUP_NAME ){
                        $Response["SUCCESS"] = "False";
                        $Response["Message"] = "Something Went Wrong";
                    }
                    else {
                        $Response["SUCCESS"] = "True";
                        $Response["Message"] = "File Added Successfully";
                    }
                    return $Response;


                case "GET":

                    $Response["Payloads"] = GetFile($username);
                    if($Response["Payloads"] == ERROR_DATA_NOT_FOUND ){
                        $Response["STATUS CODE"] = ERROR_DATA_NOT_FOUND;
                        $Response["SUCCESS"] = "False";
                        $Response['Payloads'] = "No Files To Display";
                    }
                    else {
                        $Response["SUCCESS"] = "True";
                        $Response["STATUS CODE"] = 200;
                    }
                    return $Response;


                case "FAV":
                    $FavData['File'] = $Data['File'];
                    $FavData['Username'] = $username;
                    $FavData['Fav'] = $Data['Fav'];
                    $Response["Payloads"] = AddFav($FavData);
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

                case "RENAME":
                    $FavData['File'] = $Data['File'];
                    $FavData['Username'] = $username;
                    $FavData['Filename'] = $Data['Filename'];
                    $Response["Payloads"] = RenameFile($FavData);
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
    }
    else {
        $Response["SUCCESS"] = "False";
        $Response["STATUS CODE"] = PAYLOAD_MISSING;
        $Response["Payloads"] = "Invalid Json";
        return $Response;
    }

}
?>